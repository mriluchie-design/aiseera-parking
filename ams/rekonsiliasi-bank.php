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
					Rekonsiliasi Bank
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
																											<select class="form-control kt-selectpicker" data-live-search="true">
																					<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
																					<option data-subtext="110101">Kas Kecil</option>
																					<option data-subtext="110102">Bank</option>
																					<option data-subtext="110201">Deposito Bank</option>
																				</select>
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

																	<div class="row">
																		<div class="col-xl-6">

											<!--begin:: Widgets/Last Updates-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head bg-success">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title text-white">
															Jurnal
														</h3>
													</div>
												</div>
												<div class="kt-portlet__body">

													<!--begin::widget 12-->
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																Saldo <span class="lead">Rp. 5.000.000 </span>, <i>2 Data Belum cocok</i>
															</a>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon-calendar kt-font-success"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																01/11/2017
															</a>
															<br>110103.2017.11.00002</br>
															<span class="kt-widget4__number kt-font-success">(Cr) 0.75</span>
														</div>
														<div class="kt-widget4__item text-center">
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																<i>Penerimaan Pendapatan Diluar Usaha Lainnya</i>
															</a>
															<div class="kt-section__content kt-section__content--solid">
													<button type="button" class="btn btn-success btn-sm"><i class="flaticon2-check-mark"></i> Cocok</button>&nbsp;
													<button type="button" class="btn btn-primary btn-sm"> Cari</button>&nbsp;
													<button type="button" class="btn btn-info btn-sm"> Buat</button>&nbsp;
												</div>
														</div>
														<div class="kt-widget4__item">
															<span class="kt-widget4__icon">
																<i class="flaticon-calendar kt-font-success"></i>
															</span>
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																01/11/2017
															</a>
															<br>110103.2017.11.00001</br>
															<span class="kt-widget4__number kt-font-success">(Cr) 0.75</span>
														</div>
														<div class="kt-widget4__item text-center">
															<a href="#" class="kt-widget4__title kt-widget4__title--light">
																<i>Pembayaran Pendapatan Bunga Deposito</i>
															</a>
														</div>
													</div>

													<!--end::Widget 12-->
												</div>
											</div>

											<!--end:: Widgets/Last Updates-->
										</div>

										<div class="col-xl-6">

			<!--begin:: Widgets/Last Updates-->
			<div class="kt-portlet kt-portlet--height-fluid">
				<div class="kt-portlet__head bg-primary">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title text-white">
							Rekening Bank
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">

					<!--begin::widget 12-->
					<div class="kt-widget4">
						<div class="kt-widget4__item">
							<a href="#" class="kt-widget4__title kt-widget4__title--light">
								Saldo <span class="lead">Rp. 5.000.000 </span>, <i>2 Data Belum cocok</i>
							</a>
						</div>
						<div class="kt-widget4__item">
							<span class="kt-widget4__icon">
								<i class="flaticon-calendar kt-font-success"></i>
							</span>
							<a href="#" class="kt-widget4__title kt-widget4__title--light">
								01/11/2017
							</a>
							<br>110103.2017.11.00002</br>
							<span class="kt-widget4__number kt-font-success">(Cr) 0.75</span>
						</div>
						<div class="kt-widget4__item text-center">
							<a href="#" class="kt-widget4__title kt-widget4__title--light">
								<i>Pembayaran Beban Adm, Bank & Buku Cek Giro</i>
							</a>
						</div>
						<div class="kt-widget4__item">
							<span class="kt-widget4__icon">
								<i class="flaticon-calendar kt-font-success"></i>
							</span>
							<a href="#" class="kt-widget4__title kt-widget4__title--light">
								01/11/2017
							</a>
							<br>110103.2017.11.00001</br>
							<span class="kt-widget4__number kt-font-success">(Cr) 0.75</span>
						</div>
						<div class="kt-widget4__item text-center">
							<a href="#" class="kt-widget4__title kt-widget4__title--light">
								<i>Pembayaran Pendapatan Bunga Deposito</i>
							</a>
						</div>
					</div>

					<!--end::Widget 12-->
				</div>
			</div>

			<!--end:: Widgets/Last Updates-->
		</div>
																	</div>
							</div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
