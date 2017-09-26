<?php
if (!class_exists('IhcWooProductCustomPrices')):

class IhcWooProductCustomPrices{
	
	/*
	 * @var boolean
	 */
	private static $user_set = FALSE;
	/*
	 * @var array
	 */
	private static $output_prices = array();
	/*
	 * @var array(input prices)
	 */
	private static $input_prices = array();
	/*
	 * @var array
	 */
	private $user_levels = array();
	/*
	 * @var array
	 */
	private $module_metas = array();
	
	
	/*
	 * @param none
	 * @return none
	 */
	public function __construct(){
		$this->setModuleMetas();
		add_filter('woocommerce_get_price', array($this, 'return_price'), 2, 2);
		if (!empty($this->module_metas['ihc_woo_product_custom_prices_like_discount'])){
			add_filter('woocommerce_get_price_html', array($this, 'print_as_discount'), 2, 2);			
		}
	}
	
	
	/*
	 * @param none
	 * @return none
	 */
	private function setUserLevels(){
		global $current_user;
		$uid = isset($current_user->ID) ? $current_user->ID : 0;
		self::$user_set = TRUE;
		if ($uid){
			///getting levels for current user
			$data = Ihc_Db::get_user_levels($uid, TRUE);
			if ($data){
				$this->user_levels = array_keys($data);
			}
		} else {
			/// remove filter
			remove_filter('woocommerce_get_price', array($this, 'return_price'));
		}
	}
	
	
	/*
	 * @param none
	 * @return none
	 */
	private function setModuleMetas(){
		$this->module_metas = ihc_return_meta_arr('woo_product_custom_prices');
	}
	
	
	/*
	 * @param float ($price)
	 * @param object ($product) - all infos about current product
	 * @return float (final price)
	 */
	public function return_price($price=0, WC_Product $product){
		if (empty(self::$user_set)){
			$this->setUserLevels();
		}
		
		if ($this->user_levels && $product_id = isset($product->id) ? $product->id : 0){
			if (isset(self::$output_prices[$product_id])){
				 return self::$output_prices[$product_id];
			} else {
				$possible = array();
				
				/// Categories
				$cats_ids = array();
				$cats = Ihc_Db::woo_get_product_terms_as_string($product->id);
				$cats_ids = empty($cats) ? array() : explode(',', $cats);

				foreach ($this->user_levels as $lid){
					$settings = Ihc_Db::ihc_woo_products_get_discount_by_lid_prodid($product_id, $lid, $cats_ids);
					if ($settings){
						$temp_possible = $this->get_possible_prices($price, $settings);
						if ($temp_possible>-1){
							$possible[] = $temp_possible;
						}
					}
				}
				if (isset($possible)){
					if (count($possible)==1 && isset($possible[0])){
						$result = $possible[0];
						self::$output_prices[$product_id] = $result;
						self::$input_prices[$product_id] = $price;
						return $result;
					} else {
						$result = $this->do_tiebreaker_between_possible_prices($possible);
						if ($result>-1){
							self::$output_prices[$product_id] = $result;
							self::$input_prices[$product_id] = $price;
							return $result;							
						}
					}					
				}			
			}
		}
		return $price;
	}
	
	
	/*
	 * @param float (base price)
	 * @param array (rule settings)
	 */
	private function get_possible_prices($base_price=0, $rule_settings=array()){
		if ($base_price && $rule_settings){
			$prices = array();
			foreach ($rule_settings as $settings){
				if ($settings['discount_type']=='%'){
					$prices[] = $base_price - ($base_price * $settings['discount_value'] / 100);
				} else {
					$prices[] = $base_price - $settings['discount_value'];
				}
			}
			if ($prices){
				if (count($prices)==1){
					return $prices[0];
				} else {
					$return = $this->do_tiebreaker_between_possible_prices($prices);
					if ($return>-1){
						return $return;
					}
				}
			}
		}
		return -1;
	}
	
	
	/*
	 * @param array 
	 * @param float
	 */
	private function do_tiebreaker_between_possible_prices($prices=array()){
		if ($this->module_metas['ihc_woo_product_custom_prices_tiebreaker']=='biggest'){
			foreach ($prices as $price){
				if (!isset($return_value)){
					$return_value = $price;
				} else {
					if ($return_value<$price){
						$return_value = $price;
					}
				}
			}
		} else {
			foreach ($prices as $price){
				if (!isset($return_value)){
					$return_value = $price;
				} else {
					if ($return_value>$price){
						$return_value = $price;
					}
				}
			}						
		}
		if (isset($return_value)){
			return $return_value;
		}
		return -1;
	}
	
	
	/*
	 * @param string (output html)
	 * @param object (the product object)
	 * @return string
	 */
	public function print_as_discount($price_html='', $object=array()){
		if (isset(self::$input_prices[$object->id]) && isset(self::$output_prices[$object->id]) ){
			return $object->get_price_html_from_to(self::$input_prices[$object->id], self::$output_prices[$object->id]);
		}
		return $price_html;
	}
	
}

endif;
