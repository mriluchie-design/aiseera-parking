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

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
				Setup Jam Kerja
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
			<button type="button" class="btn btn-label-danger btn-sm" id="buttonLogin" onclick="displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
			<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
				<i class="flaticon2-printer"></i> Export Data
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
				<!--begin::Nav-->
				<ul class="kt-nav">
					<li class="kt-nav__item">
						<a href="#" class="kt-nav__link">
							<i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">PDF</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#" class="kt-nav__link">
							<i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
						</a>
					</li>
				</ul>
				<!--end::Nav-->
			</div>
			<a href="add-jam-kerja.php" class="btn btn-info btn-sm">
				<i class="flaticon2-plus"></i> Tambah Jam Kerja
				<!--<i class="flaticon2-plus"></i>-->
			</a>
		</div>
	</div>
</div>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<div class="kt-portlet" id="login_Box_Div">
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
						<label>Departemen :</label>
						<select class="form-control kt-selectpicker">
							<option value="2">Creative</option>
							<option value="2">IT & Development</option>
						</select>
					</div>
					<div class="col-lg-3">
						<label class="">Jabatan :</label>
						<select class="form-control kt-selectpicker">
							<option value="12">Designer</option>
							<option value="12">Web Developer</option>
						</select>
					</div>
				</div>
				<div class="kt-portlet__foot text-center">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-outline-brand btn-sm">Reset</button>
						<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
					</div>
				</div>
			</div>
		</form>
		<!--end::Form-->
	</div>

	<div class="kt-portlet kt-portlet--mobile ">
							<div class="kt-portlet__body">
	<div class="row">

		<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Direksi
									</a>
									<span class="kt-widget__desc">
										Jam Kerja Direksi
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Umum
									</a>
									<span class="kt-widget__desc">
										Bidang Umum dan Kepegawaian
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
		<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Umum
									</a>
									<span class="kt-widget__desc">
										Bidang Hukum dan Humas
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
		<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Keuangan dan Asset
									</a>
									<span class="kt-widget__desc">
										Bidang Keuangan
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
		<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Keuangan dan Asset
									</a>
									<span class="kt-widget__desc">
										Bidang Asset
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
		<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Operasional
									</a>
									<span class="kt-widget__desc">
										Bidang Pengelolaan
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
		<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Operasional
									</a>
									<span class="kt-widget__desc">
										Bidang Produksi
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
		<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Pengembangan Usaha dan Kerjasama
									</a>
									<span class="kt-widget__desc">
										Bidang Pengembangan Usaha
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
		<div class="col-xl-4">
			<!--begin:: Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
											<!--begin::status -->
					<div class="kt-ribbon__target" style="top: 70px; right: -2px;">Opened</div>
											<!--end::status -->

					<!--begin::Widget -->
					<div class="kt-widget kt-widget--project-1">
						<div class="kt-widget__head d-flex">
							<div class="kt-widget__label">
								<div class="kt-widget__info kt-padding-0 kt-margin-l">
									<a href="#" class="kt-widget__title">
										Pengembangan Usaha dan Kerjasama
									</a>
									<span class="kt-widget__desc">
										Bidang Kerjasama
									</span>
								</div>
							</div>
							<div class="kt-widget__toolbar">
																	<span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="kt-widget__body" style="padding-bottom:0 !important">
															<br>
															<div class="row">
																	<div class="col-md-6">
																			<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Senin</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Selasa</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Rabu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Kamis</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Jumat</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 06:00 PM
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">Sabtu</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															09:00 AM - 03:00 PM
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="col-md-6" style="border-left:1px solid #eee">
										<div class="kt-widget6">
											<div class="kt-widget6__body">
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
												<div class="kt-widget6__item">
													<span>Durasi Istirahat</span>
													<span>60 Menit</span>
												</div>
											</div>
										</div>
																	</div>
															</div>

						</div>
						<div class="kt-widget__footer">
							<div class="kt-widget__wrapper" style="padding:10px 20px">
								<div class="kt-widget__section">
									<div class="kt-widget__blog">
										<i class="flaticon-users-1"></i>
										<a href="#" class="kt-widget__value kt-font-danger">Kebijakan Ini berlaku untuk</a>
									</div>
								</div>
								<div class="kt-widget__section">
									<a href="applicant.php" class="btn btn-outline-brand btn-sm"><i class="fa flaticon-eye"></i> Lihat Pegawai</a>
								</div>
							</div>
						</div>
					</div>
					<!--end::Widget -->
				</div>
			<!--end:: Portlet-->
		</div>
	</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
	<div class="row">
		<div class="col-xl-12">
			<!--begin:: Components/Pagination/Default-->

											<!-- begin:: pageline -->
						<!-- <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div> -->
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
											<!-- end:: pageline -->
			<!--end:: Components/Pagination/Default-->
		</div>
	</div>

	<!--End::Section-->

</div>
</div>

</div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
