<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->

<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-list-1"></i>
				</span>
				&nbsp;
				&nbsp;
					Kategori Pelanggan
			</h3>

		</div>
		<div class="kt-subheader__toolbar">

				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

						<!--begin::Nav-->
						<ul class="kt-nav">

							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon fa fa-file-pdf"></i>
									<span class="kt-nav__link-text">PDF</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon fa fa-file-excel"></i>
									<span class="kt-nav__link-text">Excel</span>
								</a>
							</li>
						</ul>
						<!--end::Nav-->
					</div>
					<a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#kt_modal_pelanggan">
				<i class="fa fa-plus"></i>Buat Baru
				<!--<i class="flaticon2-plus"></i>-->
			</a>
				</div>
	</div>
</div>

							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
								<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
																<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
																<div class="alert-text">A simple primary alert—check it out!</div>
																<div class="alert-close">
																	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																		<span aria-hidden="true"><i class="la la-close"></i></span>
																	</button>
																</div>
															</div>

															<div class="kt-portlet" id = "login_Box_Div" >
																		<div class="kt-portlet__head">
																			<div class="kt-portlet__head-label">
																				<h3 class="kt-portlet__head-title">
																					Filter Data
																				</h3>
																			</div>
																		</div>

																		<!--begin::Form-->
																		<form class="kt-form">
																			<div class="kt-portlet__body">
								                      <div class="form-group row">
																				<div class="col-lg-3">
														                          <label>Tipe Transaksi:</label>
																											<div class="form-group ">
									<div class="kt-input-icon kt-input-icon--right">
										<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih...">
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="la la-search"></i></span>
										</span>
									</div>
								</div>
														           </div>
																				<div class="col-lg-3">
																				 <label class="">Dari Tanggal :</label>
																				 <div class="input-group date">
																					<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date" id="kt_datepicker_2">
																					<div class="input-group-append">
																						<span class="input-group-text">
																							<i class="la la-calendar-check-o"></i>
																						</span>
																					</div>
																				 </div>
																			 </div>
								                        <div class="col-lg-3">
								                          <label class="">Sampai Tanggal :</label>
																					<div class="input-group date">
																					 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date" id="kt_datepicker_2">
																					 <div class="input-group-append">
																						 <span class="input-group-text">
																							 <i class="la la-calendar-check-o"></i>
																						 </span>
																					 </div>
																					</div>
								                        </div>

								                      </div>
								                      </div>
																			<div class="kt-portlet__foot text-center">
																				<div class="kt-form__actions">
																					<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																					<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																				</div>
																			</div>
																		</form>
																	</div>

																	<div class="kt-portlet kt-portlet--mobile ">
																		<div class="kt-portlet__body">
																			<!--begin: Datatable -->
																			<table class="table table-striped table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																						<th width="80%" bgcolor="#f7fcff" >Nama Kategori</th>
																						<th width="15%" bgcolor="#f7fcff">Kategori Default</th>
																						<th width="5%" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td></td>
																						<td></td>
																						<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penawaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="penawaran-nego.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-calculator"></i>
																				<span class="kt-nav__link-text">Negosiasi Biaya</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="penawaran-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-code-branch"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				</tbody>
																			</table>

																			<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																			<div class="kt-pagination  kt-pagination--danger">
																							<select class="form-control kt-font-danger" style="width: 60px">
																									<option value="10">10</option>
																									<option value="20">20</option>
																									<option value="30">30</option>
																									<option value="50">50</option>
																									<option value="100">100</option>
																								</select>
																								<span class="pagination__desc">
																									Menampilkan 10 dari 230 Data
																								</span>

																							<div class="kt-pagination__toolbar">
																								<ul class="kt-pagination__links">
																								<li class="kt-pagination__link--first">
																									<a href="#"><i class="fa fa-angle-double-left kt-font-danger"></i></a>
																								</li>
																								<li class="kt-pagination__link--next">
																									<a href="#"><i class="fa fa-angle-left kt-font-danger"></i></a>
																								</li>
																								<li>
																									<a href="#">...</a>
																								</li>
																								<li>
																									<a href="#">29</a>
																								</li>
																								<li class="kt-pagination__link--active">
																									<a href="#">30</a>
																								</li>
																								<li>
																									<a href="#">31</a>
																								</li>
																								<li>
																									<a href="#">32</a>
																								</li>
																								<li>
																									<a href="#">33</a>
																								</li>
																								<li>
																									<a href="#">34</a>
																								</li>
																								<li>
																									<a href="#">...</a>
																								</li>
																								<li class="kt-pagination__link--prev">
																									<a href="#"><i class="fa fa-angle-right kt-font-danger"></i></a>
																								</li>
																								<li class="kt-pagination__link--last">
																									<a href="#"><i class="fa fa-angle-double-right kt-font-danger"></i></a>
																								</li>
																							</ul>
																							</div>
																						</div>
										  </div>
										  </div>
							</div>

							<div class="modal fade" id="kt_modal_pelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Kategori Pelanggan</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger mt-0">
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Nama Kategori : <code>*</code></label>
																	<input type="text" class="form-control form-control-sm">
															</div>
															<div class="col-lg-6">
																<label>Kategori Default:</label>
																<div class="kt-checkbox-inline">
																	<label class="kt-checkbox">
																		<input type="checkbox" checked> Ya
																		<span></span>
																	</label>
																</div>
															</div>
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="kt-checkbox">
																	<input type="checkbox" id="myCheck"  onclick="myFunction()">
																	<span></span>
																</label><label class="">Sub Kategori : </label>
																<div class="form-group" id="text" style="display:none;">
									<div class="kt-input-icon kt-input-icon--right">
										<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kategori" list="kategoriname">
										<datalist id="kategoriname">
											<option value="-" disabled="" selected="">Cari/Pilih...</option>
												<option value="Umum">Umum</option>
								    </datalist>
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="la la-search"></i></span>
										</span>
									</div>
								</div>
															</div>
														</div>
													</div>
												</div>
											</div>


										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary">Save</button>
										</div>
									</div>
								</div>
							</div>

<?php require '../layouts/footer.php' ?>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
<?php require '../layouts/foot.php' ?>
