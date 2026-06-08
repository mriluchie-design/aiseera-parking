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
<link href="../assets/dist/main/main.css" rel="stylesheet" type="text/css" />
<?php require 'layouts/header.php' ?>

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Dashboard

									</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Zona Pegawai </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>

							</div>
						</div>

							<div class="kt-container  kt-container--fluid  ">
							<!--Begin::App-->
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
											<!--begin:: Widgets/User Progress -->
                    <!--START - Projects list-->
					<div class="row">
								<div class="col-xl-7">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pegawai</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-4">
                          <label>Nama Pegawai :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="9130037 - Maghfirah Sharifudin Andy Omar S.Psi">
                          
                        </div>

                        <div class="col-lg-4">
                          <label>Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
                        <div class="col-lg-4">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Development">
                      </div>
                        </div>
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                        <div class="col-lg-4">
                          <label>Jenis Cuti :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">cuti alasan penting</option>
                              <option value="3">cuti bersalin</option>
                              <option value="4">cuti besar</option>
                              <option value="5">cuti khusus</option>
                              <option value="6">cuti sakit</option>
                              <option value="7" selected>cuti tahunan</option>
                              <option value="12">menikah</option>
                          </select>
                        </div>
                        <div class="col-lg-4">
                          <label class="">Tanggal Cuti :</label>
                          <div class='input-group' >
                        <input type='text' class="form-control form-control-sm kt_daterangepicker_2" readonly placeholder="= Pilih Tanggal =" />
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                        </div>
                      </div>
                        </div>
                        <div class="col-lg-4">
                          <label class="">Keterangan :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                        </div>
                      </div>
                      </div>
                    </div>
							<!--end:: Portlet-->

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pengganti</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
                        <div class="col-lg-4">
                          <label>Cari Pegawai :</label>
                          <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000 000 001 - Yulianti Tomu, SE</option>
																					<option value="HI">000 000 002 - Rizal Asjadad</option>
																					<option value="HI">000 000 003 - Christofher Rio Aviary</option>
																					<option value="HI">000 000 004 - Mu’amar Nor Amin</option>
																					<option value="HI">000 000 005 - Zulfadli Syahrir</option>
					 															</optgroup>
					 															<optgroup label="Umum">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>

					 														</select>
                        </div>

                        <div class="col-lg-4">
                          <label>Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
                        <div class="col-lg-4">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Development">
                      </div>
                        </div>
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->
										</div>


								<div class="col-xl-2">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lampiran Cuti</div>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-12">
						<br>
                          <label>Upload Lampiran (Jika Ada) :</label>
                          <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>
                        </div>
                      </div>

                     
                      </div>
                        

									<!--end::Portlet-->
								</div>
								</div>
								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Cuti</div>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Saldo Cuti Tahunan :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">12 Hari</div>
                        </div>
                        </div>
                      </div>

                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Cuti Tahunan Belum Digunakan :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">6 Hari</div>
                        </div>
                        </div>
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Cuti Tahunan Telah Terpakai :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">6 Hari</div>
                        </div>
                        </div>
                      </div>
                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<label><span class="kt-badge kt-badge--danger kt-badge--inline">Riwayat Cuti Tahun ini :</span></label>
                <!--Begin::Timeline 3 -->
											<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">21/10/2019<br>23/10/2019</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															Temanin Teman yang punya teman pergi shopping
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">21/10/2019<br>23/10/2019</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-info"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															Temanin Teman yang punya teman pergi shopping
														</div>
													</div>

												</div>
											</div>

											<!--End::Timeline 3 -->
									</div>

									<!--end::Portlet-->
								</div>
								</div>
								</div>

                    </div>

									</div>

							<!--end:: Portlet-->

										<div class="row">
											<div class="col-lg-3">
												<div class="kt-portlet kt-portlet--height-fluid-full kt-iconbox kt-iconbox--danger kt-iconbox--animate-slower">
											<div class="kt-portlet__body">
												<div class="kt-iconbox__body">
											<div class="row">
												<div class="col-lg-3">
													<div class="kt-section__content">
															<a href="#" class="kt-media">
																<img src="../assets/img/users/100_15.jpg" alt="image" style="max-width:100px !important;height:auto">
															</a>
														</div>
												</div>
											<div class="col-lg-9">
											<div class="name" style="font-size:1rem">
												Muhammad Nasrullah, S.Kom
</div>
											<span style="font-size:.875rem; color:#374163; text-transform:italic">Direktur Utama</span>
											<div class="deskripsi-pegawai">
											
											
										</div>
										<div class="kt-separator kt-separator--border-solid-2 kt-separator--space-lg kt-separator--portlet-fit"></div>
										<div class="row mt-6">
											<div class="col-lg-5" style="font-size:.955rem; color:#374163; text-transform:italic">
												Absen Masuk
											</div>
											<div class="col-lg-6" >
												<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline" style="font-size:.955rem; color:#fff; text-transform:italic;">08:00:00 WITA</span>
											</div>
										</div>
										<div><br></div>
										<div class="row mt-6">
											<div class="col-lg-6" style="font-size:.955rem; color:#374163; text-transform:italic">
												Absen Pulang
											</div>
											<div class="col-lg-6">
												<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline" style="font-size:.955rem; color:#fff; text-transform:italic">Belum Absen</span>
											</div>
										</div>
										
										
											</div>
											</div>
												
													</div>
													</div>
										</div>
										

										
											</div>
											
											<div class="col-lg-5">
										<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Notifikasi
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
															Lembur
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
															Dinas
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab3_content" role="tab">
															Cuti
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab4_content" role="tab">
															Izin
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab4_content" role="tab">
															Perjalanan Dinas&nbsp;&nbsp;<span class="kt-badge kt-badge--danger">3</span>
											
														</a>
													</li>

												</ul>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g id="Stockholm-icons-/-Home-/-Timer" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000"></path>
    </g>
</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	001/OT/IM/2025
																</div>
																<span>Pelaksanaan Rakor Walikota</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - <span style="color:#0961ae">Mulai Lembur 17:00 - 22:00 WITA</span>
																</div>
															</div>
																<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																		<i class="fa fa-eye"></i>
																	</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
															    <g id="Stockholm-icons-/-Home-/-Timer" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000"></path>
    </g>
															</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	002OTHRXI2022
																</div>
																<span>Pelaksanaan Rakor HUT Kota Makassar</span>
																<div class="kt-notification__item-time">
																12 Desember 2019 - <span style="color:#0961ae">Mulai Lembur 17:00 - 22:00 WITA</span>
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g id="Stockholm-icons-/-Home-/-Timer" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000"></path>
    </g>
</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	001OTHRXI2022
																</div>
																<span>Pelaksanaan Rakor Makassar f8</span>
																<div class="kt-notification__item-time">
																11 Desember 2019 - <span style="color:#0961ae">Mulai Lembur 17:00 - 22:00 WITA</span>
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"></path>
        <path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg> </div>
															<div class="kt-notification__item-details">
																
																
																<div class="kt-notification__item-time" style="color:#0961ae">
																<table border="0">
  <tr>
    <td style="width:15%">Kota Asal</td>
    <td>:</td>
    <td style="width:5%">Makassar</td>
    <td style="width:2%">&nbsp;</td>
    <td style="width:15%">Tanggal Berangkat</td>
    <td>:</td>
    <td style="width:35%">05 Desember 2025 - 13:00 WITA</td>
  </tr>
  <tr>
	 <td style="width:15%">Kota Tujuan</td>
    <td>:</td>
    <td style="width:5%">Jakarta</td>
    
    <td style="width:2%">&nbsp;</td>
    <td style="width:15%">Tanggal Kembali</td>
    <td>:</td>
    <td  style="width:35%">08 Desember 2025 - 13:00 WITA</td>
  </tr>
</table>
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"></path>
        <path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	002ODHRXI2022
																</div>
																<span>Instalasi Epass Management System PT. Pelabuhan Indonesia IV (Persero) Cabang Manado</span>
																<div class="kt-notification__item-time">
																12 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"></path>
        <path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	001ODHRXI2022
																</div>
																<span>Instalasi Epass Management System PT. Pelabuhan Indonesia IV (Persero) Cabang Manado</span>
																<div class="kt-notification__item-time">
																11 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																		<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	001TOHRXI2022 - Cuti Alasan Penting
																</div>
																<span><b>Permohonan Cuti Telah Disetujui</b>	</span>
																<div class="kt-notification__item-time">
																	13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" fill="#000000" opacity="0.3" />
																		<path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" fill="#000000" />
																		<path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" fill="#000000" />
																		<path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
																		<rect fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
																		<rect fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
																		<path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget6_tab4_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																		<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Izin Telah Disetujui.
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" fill="#000000" opacity="0.3" />
																		<path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" fill="#000000" />
																		<path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" fill="#000000" />
																		<path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
																		<rect fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
																		<rect fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
																		<path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
											</div>
										</div>


									</div>
										</div>
										
										<div class="col-lg-4">
										<!--begin:: Widgets/Tasks -->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Tasking
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
															Internal
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
															Project
														</a>
													</li>

												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget2_tab1_content">
													<div class="kt-widget2">
														<div class="kt-widget2__item versi-2 kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														<div class="kt-widget2__item versi-2 kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														<div class="kt-widget2__item versi-2 kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														

														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget2_tab2_content">
													<div class="kt-widget2">
														<div class="kt-widget2__item versi-2 kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														<div class="kt-widget2__item versi-2 kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														
														

														<div class="kt-widget2__item versi-2 kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="kt_widget2_tab3_content">
													<div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Make Metronic Development. Lorem Ipsum
																</a>
																<a class="kt-widget2__username">
																	By James
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Completa Financial Report For Emirates Airlines
																</a>
																<a href="#" class="kt-widget2__username">
																	By Bob
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Make Widgets Development.Estudiat Communy Elit
																</a>
																<a href="#" class="kt-widget2__username">
																	By Aziko
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--info">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Completa Financial Report For Emirates Airlines
																</a>
																<a href="#" class="kt-widget2__username">
																	By Sean
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--success">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Completa Financial Report For Emirates Airlines
																</a>
																<a href="#" class="kt-widget2__username">
																	By Bob
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</a>
																<a href="#" class="kt-widget2__username">
																	By Bob
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Tasks -->
										</div>
										
									</div>
									<div class="row">
											
											<div class="col-lg-3">
										<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Pegawai Ulang Tahun
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget7_tab1_content" role="tab">
															Hari ini
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget7_tab2_content" role="tab">
															Bulan ini
														</a>
													</li>
													

												</ul>
											</div>
											
											
										</div>
										
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget7_tab1_content" aria-expanded="true">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span style="color:#0961ae">Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Ultah Ke : 35 
																</div>
																<div class="kt-notification__item-time">
																Head Of IT - Divisi : Bagian Umum
																</div>
															</div>
																<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																		<i class="fa fa-gift"></i>
																	</div>
														</a>
														
														
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget7_tab2_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_21.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Ultah Ke : 35
																</div>
																<div class="kt-notification__item-time">
																Head Of IT - Divisi : Bagian Umum
																</div>
															</div>
																<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																		<i class="fa fa-gift"></i>
																	</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_24.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Ultah Ke : 35 
																</div>
																<div class="kt-notification__item-time">
																Head Of IT - Divisi : Bagian Umum
																</div>
															</div>
																<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																		<i class="fa fa-gift"></i>
																	</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Ultah Ke : 35
																</div>
																<div class="kt-notification__item-time">
																Head Of IT - Divisi : Bagian Umum
																</div>
															</div>
																<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																		<i class="fa fa-gift"></i>
																	</div>
														</a>
														
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																		<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been received.
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
															<div onclick="window.location='index.php';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" fill="#000000" opacity="0.3" />
																		<path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" fill="#000000" />
																		<path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" fill="#000000" />
																		<path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='index.php';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
																		<rect fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
																		<rect fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
																		<path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='index.php';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget6_tab4_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																		<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Izin Telah Disetujui.
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
															<div onclick="window.location='index.php';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" fill="#000000" opacity="0.3" />
																		<path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" fill="#000000" />
																		<path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" fill="#000000" />
																		<path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='index.php';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
																		<rect fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
																		<rect fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
																		<path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='index.php';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
											</div>
										</div>


									</div>
										</div>
											<div class="col-lg-5">
										<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Persuratan
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget8_tab1_content" role="tab">
															Surat Masuk&nbsp;&nbsp;<span class="kt-badge kt-badge--danger">2</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget8_tab2_content" role="tab">
															Nota Dinas&nbsp;&nbsp;<span class="kt-badge kt-badge--danger">2</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget8_tab3_content" role="tab">
															Tembusan Surat
														</a>
													</li>
													

												</ul>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
    </g>
</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	003OTHRXI2022
																</div>
																<span style="color:#0961ae">Muhammad Nasrullah</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
																<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																		<i class="fa fa-eye"></i>
																	</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
															    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															        <polygon points="0 0 24 0 24 24 0 24"/>
															        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
															        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
															    </g>
															</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	002OTHRXI2022 - Perintah Lembur - Imsystem
																</div>
																<span style="color:#0961ae">Muhammad Nasrullah</span>
																<div class="kt-notification__item-time">
																12 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
    </g>
</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	001OTHRXI2022 - Perintah Lembur - Imsystem
																</div>
																<span style="color:#0961ae">Muhammad Nasrullah</span>
																<div class="kt-notification__item-time">
																11 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
    </g>
</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	003ODHRXI2022
																</div>
																<span><b>Instalasi Epass Management System PT. Pelabuhan Indonesia IV (Persero) Cabang Manado</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
																		<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
																		<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
																		<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	002ODHRXI2022 - Instalasi Epass Management System PT. Pelabuhan Indonesia IV (Persero) Cabang Manado
																</div>
																<div class="kt-notification__item-time">
																	12 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	001ODHRXI2022 - Instalasi Epass Management System PT. Pelabuhan Indonesia IV (Persero) Cabang Manado
																</div>
																<div class="kt-notification__item-time">
																	11 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																		<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New order has been received.
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" fill="#000000" opacity="0.3" />
																		<path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" fill="#000000" />
																		<path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" fill="#000000" />
																		<path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
																		<rect fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
																		<rect fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
																		<path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget6_tab4_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																		<path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Izin Telah Disetujui.
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" fill="#000000" opacity="0.3" />
																		<path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" fill="#000000" />
																		<path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" fill="#000000" />
																		<path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	New customer is registered
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
																		<rect fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
																		<rect fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
																		<path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" fill="#000000" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Application has been approved
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
															<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</div>
														</a>
														
														
													</div>
												</div>
											</div>
										</div>


									</div>
										</div>
										
										<div class="col-lg-4">
										<!--begin:: Widgets/Tasks -->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Berita
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
															Internal &nbsp;&nbsp;<span class="kt-badge kt-badge--danger">2</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
															Agenda
														</a>
													</li>

												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget2_tab1_content">
													<div class="kt-widget2">
														<div class="kt-widget2__item versi-2 kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														<div class="kt-widget2__item versi-2 kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														<div class="kt-widget2__item versi-2 kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														

														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget2_tab2_content">
													<div class="kt-widget2">
														<div class="kt-widget2__item versi-2 kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														<div class="kt-widget2__item versi-2 kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>

														
														

														<div class="kt-widget2__item versi-2 kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Perintah Lembur - Imsystem
																</div>
																<span>By : <b>Muhammad Nasrullah S.Kom</b>	</span>
																<div class="kt-notification__item-time">
																13 Desember 2019 - 15:00 WITA
																</div>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="fa fa-eye"></i>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="kt_widget2_tab3_content">
													<div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Make Metronic Development. Lorem Ipsum
																</a>
																<a class="kt-widget2__username">
																	By James
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Completa Financial Report For Emirates Airlines
																</a>
																<a href="#" class="kt-widget2__username">
																	By Bob
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Make Widgets Development.Estudiat Communy Elit
																</a>
																<a href="#" class="kt-widget2__username">
																	By Aziko
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--info">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Completa Financial Report For Emirates Airlines
																</a>
																<a href="#" class="kt-widget2__username">
																	By Sean
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--success">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Completa Financial Report For Emirates Airlines
																</a>
																<a href="#" class="kt-widget2__username">
																	By Bob
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Make Metronic Great Again.Lorem Ipsum Amet
																</a>
																<a href="#" class="kt-widget2__username">
																	By Bob
																</a>
															</div>
															<div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Reports</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Charts</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Members</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">Settings</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Tasks -->
										</div>
										
									</div>
                    <!--END - Projects list-->
											<!--end:: Widgets/User Progress -->

											
								</div>

								<!--End:: App Content-->
							</div>

							<!--End::App-->
						</div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
