@extends('layouts.administrador')
@section('content')

	<div class="hr hr-18 dotted hr-double"></div>
			<button class="btn btn-lg btn-success">
				<i class="ace-icon fa fa-check"></i>
				Cadastrar Videconferência
			</button>
			<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter blue">Ecole Videconferências</h3>

						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						<div class="table-header">
							Quadro de Videoconferências
						</div>
						<div>
							<table id="dynamic-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</th>
										<th>Curso</th>
										<th>Price</th>
										<th class="hidden-480">Clicks</th>

										<th>
											<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
											Update
										</th>
										<th class="hidden-480">Status</th>

										<th></th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">app.com</a>
										</td>
										<td>$45</td>
										<td class="hidden-480">3,330</td>
										<td>Feb 12</td>

										<td class="hidden-480">
											<span class="label label-sm label-warning">Expiring</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">base.com</a>
										</td>
										<td>$35</td>
										<td class="hidden-480">2,595</td>
										<td>Feb 18</td>

										<td class="hidden-480">
											<span class="label label-sm label-success">Registered</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">max.com</a>
										</td>
										<td>$60</td>
										<td class="hidden-480">4,400</td>
										<td>Mar 11</td>

										<td class="hidden-480">
											<span class="label label-sm label-warning">Expiring</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">best.com</a>
										</td>
										<td>$75</td>
										<td class="hidden-480">6,500</td>
										<td>Apr 03</td>

										<td class="hidden-480">
											<span class="label label-sm label-inverse arrowed-in">Flagged</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">pro.com</a>
										</td>
										<td>$55</td>
										<td class="hidden-480">4,250</td>
										<td>Jan 21</td>

										<td class="hidden-480">
											<span class="label label-sm label-success">Registered</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">team.com</a>
										</td>
										<td>$40</td>
										<td class="hidden-480">3,200</td>
										<td>Feb 09</td>

										<td class="hidden-480">
											<span class="label label-sm label-inverse arrowed-in">Flagged</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">up.com</a>
										</td>
										<td>$95</td>
										<td class="hidden-480">8,520</td>
										<td>Feb 22</td>

										<td class="hidden-480">
											<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">view.com</a>
										</td>
										<td>$45</td>
										<td class="hidden-480">4,100</td>
										<td>Mar 12</td>

										<td class="hidden-480">
											<span class="label label-sm label-success">Registered</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">nice.com</a>
										</td>
										<td>$38</td>
										<td class="hidden-480">3,940</td>
										<td>Feb 12</td>

										<td class="hidden-480">
											<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">fine.com</a>
										</td>
										<td>$25</td>
										<td class="hidden-480">2,983</td>
										<td>Apr 01</td>

										<td class="hidden-480">
											<span class="label label-sm label-warning">Expiring</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">good.com</a>
										</td>
										<td>$50</td>
										<td class="hidden-480">6,500</td>
										<td>Feb 02</td>

										<td class="hidden-480">
											<span class="label label-sm label-inverse arrowed-in">Flagged</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">great.com</a>
										</td>
										<td>$55</td>
										<td class="hidden-480">6,400</td>
										<td>Feb 24</td>

										<td class="hidden-480">
											<span class="label label-sm label-success">Registered</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">shine.com</a>
										</td>
										<td>$25</td>
										<td class="hidden-480">2,200</td>
										<td>Apr 01</td>

										<td class="hidden-480">
											<span class="label label-sm label-inverse arrowed-in">Flagged</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">rise.com</a>
										</td>
										<td>$42</td>
										<td class="hidden-480">3,900</td>
										<td>Feb 01</td>

										<td class="hidden-480">
											<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">above.com</a>
										</td>
										<td>$35</td>
										<td class="hidden-480">3,420</td>
										<td>Mar 12</td>

										<td class="hidden-480">
											<span class="label label-sm label-warning">Expiring</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">share.com</a>
										</td>
										<td>$30</td>
										<td class="hidden-480">3,200</td>
										<td>Feb 11</td>

										<td class="hidden-480">
											<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">fair.com</a>
										</td>
										<td>$35</td>
										<td class="hidden-480">3,900</td>
										<td>Mar 26</td>

										<td class="hidden-480">
											<span class="label label-sm label-inverse arrowed-in">Flagged</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">year.com</a>
										</td>
										<td>$48</td>
										<td class="hidden-480">3,990</td>
										<td>Feb 15</td>

										<td class="hidden-480">
											<span class="label label-sm label-warning">Expiring</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">day.com</a>
										</td>
										<td>$55</td>
										<td class="hidden-480">5,600</td>
										<td>Jan 29</td>

										<td class="hidden-480">
											<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">light.com</a>
										</td>
										<td>$40</td>
										<td class="hidden-480">3,100</td>
										<td>Feb 17</td>

										<td class="hidden-480">
											<span class="label label-sm label-success">Registered</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">sight.com</a>
										</td>
										<td>$58</td>
										<td class="hidden-480">6,100</td>
										<td>Feb 19</td>

										<td class="hidden-480">
											<span class="label label-sm label-inverse arrowed-in">Flagged</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">right.com</a>
										</td>
										<td>$50</td>
										<td class="hidden-480">4,400</td>
										<td>Apr 01</td>

										<td class="hidden-480">
											<span class="label label-sm label-warning">Expiring</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="center">
											<label class="pos-rel">
												{{-- <input type="checkbox" class="ace" /> --}}
												<span class="lbl"></span>
											</label>
										</td>

										<td>
											<a href="#">once.com</a>
										</td>
										<td>$20</td>
										<td class="hidden-480">1,400</td>
										<td>Apr 04</td>

										<td class="hidden-480">
											<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
										</td>

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
												<a class="blue" href="#">
													<i class="ace-icon fa fa-search-plus bigger-130"></i>
												</a>

												<a class="green" href="#">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>

												<a class="red" href="#">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
											</div>

											<div class="hidden-md hidden-lg">
												<div class="inline pos-rel">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
														<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																<span class="blue">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																<span class="green">
																	<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																<span class="red">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
			</div>

@endsection
@section('last-body')
		<script src="{{asset('assets/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{asset('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
		<script src="{{asset('assets/js/dataTables.buttons.min.js') }}"></script>
		<script src="{{asset('assets/js/buttons.flash.min.js') }}"></script>
		<script src="{{asset('assets/js/buttons.html5.min.js') }}"></script>
		<script src="{{asset('assets/js/buttons.print.min.js') }}"></script>
		<script src="{{asset('assets/js/buttons.colVis.min.js') }}"></script>
		<script src="{{asset('assets/js/dataTables.select.min.js') }}"></script>
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],			
					
					
					
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: []
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>

@endsection