<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'navdr123_blog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'navdr123_blog');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'licococo734');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v$fy~YodSz>;Q,nX5V{v{D#rBos!sGDG7zB1T^|>2WvpJ(&{A8%IBO!Du$sgS3rr');
define('SECURE_AUTH_KEY',  'Q;|_9jb!{*Niowj1i/ciJPaDU{!TJ^9 =JzA:(6;,E4Jw($yfX{f1^`3]8%REr;;');
define('LOGGED_IN_KEY',    'j*H/Q]1R:oe2>_vNki+b(uSj2YuowoD}3n<J8tl(2M&#gxsyXu(/*^GVd|.^KL@)');
define('NONCE_KEY',        'i&itst:qTc%^Y(4sfD9HiT9oa2v_Z)]0XC3t1`!S=V)x0UCPJuih$9e}$*Qz*BEA');
define('AUTH_SALT',        'C|L{NgDKs%Kit?B{|^4.V=rz%$>AD,9;M1&$E{$$kN/6[1uYBlwtEghXHlY%01t8');
define('SECURE_AUTH_SALT', 'or,X[Ji4h$lb<Ys&BfT,~95nPhfs~cItPx7pcDlsG_}9]r_pxFPmdLuca{P2X`;o');
define('LOGGED_IN_SALT',   'BP#F1p,o1tNap6ihRR!E:8KG!Q=$8(;7=Xgz.(1@C4OJ];E]XIz +Q}h )hnuSx9');
define('NONCE_SALT',       '@eJU0;TWrJyo+(<`.>6PeSV-`3oy$DG*[YaDY2=y[v/cA~TxDE<@RWGKVD.aznpE');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
