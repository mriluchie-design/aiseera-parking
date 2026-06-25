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
											Human Resource Department </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>

							</div>
						</div>

							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<!--Begin::App-->
							
								<div class="kt-portlet__body  kt-portlet__body--fit">
								<div class="row">
								
										

							<!--end:: Portlet-->
								

								
								
								<div class="col-xl-12">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Statistik Kehadiran
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-light btn-sm dropdown-toggle" data-toggle="dropdown">
													Hari ini
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Bulan ini</span>
															</a>
														</li>
														
														
														
													</ul>
												</div>&nbsp;
												<a href="#" class="btn btn-secondary kt-btn kt-btn--custom kt-btn--icon btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit">
											<div class="kt-widget17">
												<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #0961ae">
													<div class="kt-widget17__chart" style="height:120px;">
														<canvas id="kt_chart_activities"></canvas>
													</div>
												</div>
												<div class="kt-widget17__stats">
												<div class="row">
												<div class="col-lg-2">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g id="Stockholm-icons-/-General-/-Smile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="2" width="20" height="20" rx="10"></rect>
        <path d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z" id="Path-56" fill="#000000"></path>
    </g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Hadir
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:16px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">105</span> Orang
															</span>
														</div>
														</div>
														</div>
														<div class="col-lg-2">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
																	<g id="Stockholm-icons-/-General-/-Sad" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="2" width="20" height="20" rx="10"></rect>
        <path d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z" id="Path-56" fill="#000000" transform="translate(12.000000, 15.499947) scale(1, -1) translate(-12.000000, -15.499947) "></path>
    </g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Alpa
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:16px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_alpa">10</span> Orang
															</span>
														</div>
														</div>
														</div>
														<div class="col-lg-2">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g id="Stockholm-icons-/-Home-/-Book-open" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" id="Path-41-Copy" fill="#000000" opacity="0.3"></path>
    </g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Sakit
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:16px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_sakit">2</span> Orang
															</span>
														</div>
														</div>
														</div>
														<div class="col-lg-2">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <rect id="Rectangle" fill="#000000" x="6" y="11" width="9" height="2" rx="1"></rect>
        <rect id="Rectangle-Copy" fill="#000000" x="6" y="15" width="5" height="2" rx="1"></rect>
    </g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Izin
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:16px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_izin">2</span> Orang
															</span>
														</div>
														</div>
														</div>
														<div class="col-lg-2">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g id="Stockholm-icons-/-General-/-Clipboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" id="Combined-Shape" fill="#000000"></path>
        <rect id="Rectangle-152" fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"></rect>
        <rect id="Rectangle-152-Copy" fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"></rect>
    </g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Cuti
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:16px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_cuti">2</span> Orang
															</span>
														</div>
														</div>
														</div>
														<div class="col-lg-2">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g id="Stockholm-icons-/-Home-/-Timer" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000"></path>
    </g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Terlambat
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:16px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_terlambat">12</span> Orang
															</span>
														</div>
														</div>
														
														
													
														
														
													</div>
													
												</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>
								
								
							</div>
							</div>
								<div class="row">
								<div class="col-xl-4">

									
									<!--begin:: Widgets/Outbound Bandwidth-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet--head-noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Statistik
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
															Pegawai
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
															Department
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
															Usia
														</a>
													</li>
													

												</ul>
											</div>
										</div>
										
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget2_tab1_content" aria-expanded="true">
													<div class="kt-notification">
													<div class="kt-portlet__body">
											<figure class="highcharts-figure">
											    <div id="container-pegawai" style="height:300px"></div>
											</figure>
										</div>
														
														
														
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget2_tab2_content" aria-expanded="false">
													<div class="kt-notification">
														<div class="kt-portlet__body">
											<figure class="highcharts-figure">
											    <div id="container-department-pegawai" style="height:300px"></div>
											</figure>
										</div>
														
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget2_tab3_content" aria-expanded="false">
													<div class="kt-notification">
														<div class="kt-portlet__body">
											<figure class="highcharts-figure">
											    <div id="container-pegawai-usia" style="height:300px"></div>
											</figure>
										</div>
														
														
														
													</div>
												</div>
												
												
											</div>
										</div>


									</div>

									<!--end:: Widgets/Outbound Bandwidth-->
								</div>
								
								
									
								<div class="col-xl-4">

									
									<!--begin:: Widgets/Outbound Bandwidth-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet--head-noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Pegawai
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget7_tab1_content" role="tab">
															Ulang Tahun
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget7_tab2_content" role="tab">
															Pensiun
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget7_tab3_content" role="tab">
															Kontrak Berakhir
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
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Ultah Ke : 35 
																</div>
																<div class="kt-notification__item-time">
																Jabatan : IT Director & Business Transformation
																</div>
															</div>
																<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																		<i class="fa fa-gift"></i>
																	</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto">
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
																Jabatan : IT Director & Business Transformation
																</div>
															</div>
																<div onclick="window.location='#';" class="btn btn btn-outline-brand btn-elevate  btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																		<i class="fa fa-gift"></i>
																	</div>
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_15.jpg" alt="image" style="max-width:50px !important;height:auto">
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
																Jabatan : IT Director & Business Transformation
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
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Tanggal Pensiun : 27 September 2023
																</div>
																<div class="kt-notification__item-time">
																Direktur Pengembangan Usaha dan Kerjasama
																</div>
															</div>
																
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Tanggal Pensiun : 27 September 2023
																</div>
																<div class="kt-notification__item-time">
																Direktur Pengembangan Usaha dan Kerjasama
																</div>
															</div>
																
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Tanggal Pensiun : 27 September 2023
																</div>
																<div class="kt-notification__item-time">
																Direktur Pengembangan Usaha dan Kerjasama
																</div>
															</div>
																
														</a>
														
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget7_tab3_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_1.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Kontrak Berakhir : 27 September 2023
																</div>
																<div class="kt-notification__item-time">
																Direktur Pengembangan Usaha dan Kerjasama
																</div>
															</div>
																
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span>Muhammad Nasrullah S.Kom</span>
																</div>
																
																<div class="kt-notification__item-time">
																Kontrak Berakhir : 27 September 2023
																</div>
																<div class="kt-notification__item-time">
																Direktur Pengembangan Usaha dan Kerjasama
																</div>
															</div>
																
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																
																<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto">
															</div>
														&nbsp;
														&nbsp;
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	<span><b>Muhammad Nasrullah S.Kom</b>	</span>
																</div>
																
																<div class="kt-notification__item-time">
																Kontrak Berakhir : 27 September 2023
																</div>
																<div class="kt-notification__item-time">
																Direktur Pengembangan Usaha dan Kerjasama
																</div>
															</div>
																
														</a>
														
														
														
													</div>
												</div>
												
												
											</div>
										</div>


									</div>

									<!--end:: Widgets/Outbound Bandwidth-->
								</div>
								
								
								
								
								<div class="col-xl-4">

									<!--begin:: Widgets/Notifications-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Verifikasi
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget1_tab1_content" role="tab">
															Kontrak&nbsp;&nbsp;<span class="kt-badge kt-badge--danger">2</span>
														</a>
													</li>
													
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget1_tab3_content" role="tab">
															Mutasi&nbsp;&nbsp;<span class="kt-badge kt-badge--danger">2</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget1_tab4_content" role="tab">
															Pensiun&nbsp;&nbsp;<span class="kt-badge kt-badge--danger">2</span>
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget1_tab5_content" role="tab">
															Resign&nbsp;&nbsp;<span class="kt-badge kt-badge--danger">2</span>
														</a>
													</li>
													
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget1_tab1_content" aria-expanded="true">
													<div class="kt-notification">
														
														
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <rect id="Rectangle" fill="#000000" x="6" y="11" width="9" height="2" rx="1"></rect>
        <rect id="Rectangle-Copy" fill="#000000" x="6" y="15" width="5" height="2" rx="1"></rect>
    </g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Perpanjangan Kontrak
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	<i>3 Jam yang lalu - 001/AK-ADM/XI/2026</i>
																</div>
																
																
															</div>
															
														</a>
														
														<a href="#" class="kt-notification__item">
														
															<div class="kt-notification__item-icon">
															
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <rect id="Rectangle" fill="#000000" x="6" y="11" width="9" height="2" rx="1"></rect>
        <rect id="Rectangle-Copy" fill="#000000" x="6" y="15" width="5" height="2" rx="1"></rect>
    </g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Perpanjangan Kontrak
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Utama
																</div>
																<div class="kt-notification__item-time">
																	<i>3 Jam yang lalu - 002/AK-ADM/XI/2026</i>
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <rect id="Rectangle" fill="#000000" x="6" y="11" width="9" height="2" rx="1"></rect>
        <rect id="Rectangle-Copy" fill="#000000" x="6" y="15" width="5" height="2" rx="1"></rect>
    </g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Perpanjangan Kontrak
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	<i>27 September 2026 - 003/AK-ADM/XI/2026</i>
																</div>
															</div>
														</a>
														
														
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget1_tab2_content" aria-expanded="false">
													<div class="kt-notification">
														
														
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																
																<div class="kt-notification__item-title">
																	Pengajuan Pegawai<br>Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	3 Jam yang lalu - 004/AK-ADM/XI/2026
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <rect id="Rectangle" fill="#000000" x="6" y="11" width="9" height="2" rx="1"></rect>
        <rect id="Rectangle-Copy" fill="#000000" x="6" y="15" width="5" height="2" rx="1"></rect>
    </g>
																</svg> </div>
															<div class="kt-notification__item-details">
																
																<div class="kt-notification__item-title">
																	Pengajuan Pegawai<br>Menunggu Verifikasi Direktur Utama
																</div>
																<div class="kt-notification__item-time">
																	3 Jam yang lalu - 005/AK-ADM/XI/2026
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																
																<div class="kt-notification__item-title">
																	Pengajuan Pegawai<br>Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	27 September 2023 - 006/AK-ADM/XI/2026
																</div>
															</div>
														</a>
														
													</div>
												</div>
												<div class="tab-pane" id="kt_widget1_tab3_content" aria-expanded="false">
													<div class="kt-notification">
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Mutasi Pegawai
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	2 Jam yang lalu - 007/AK-ADM/XI/2026
																</div>
															</div>
														</a>
														
														
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Mutasi Pegawai
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Utama
																</div>
																<div class="kt-notification__item-time">
																	3 Jam yang lalu - 008/AK-ADM/XI/2026
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Mutasi Pegawai
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	27 September 2023 - 009/AK-ADM/XI/2026
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="tab-pane" id="kt_widget1_tab4_content" aria-expanded="false">
													<div class="kt-notification">
														
														
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Pegawai Pensiun
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	3 Jam yang lalu - 010/AK-ADM/XI/2026
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Pegawai Pensiun
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Utama
																</div>
																<div class="kt-notification__item-time">
																	3 Jam yang lalu - 011/AK-ADM/XI/2026
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Pegawai Pensiun
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	27 September 2023 - 012/AK-ADM/XI/2026
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="tab-pane" id="kt_widget1_tab5_content" aria-expanded="false">
													<div class="kt-notification">
														
														
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Pegawai Resign
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	3 Jam yang lalu - 002RESHRXI2022
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Pegawai Resign
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Utama
																</div>
																<div class="kt-notification__item-time">
																	3 Jam yang lalu - 002RESHRXI2022
																</div>
															</div>
														</a>
														<a href="#" class="kt-notification__item">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000" />
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details" style="color:#ff0000;">
																Pegawai Resign
																<div class="kt-notification__item-title">
																	Menunggu Verifikasi Direktur Umum
																</div>
																<div class="kt-notification__item-time">
																	27 September 2023 - 003RESHRXI2022
																</div>
															</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Notifications-->
								</div>
								
								
								
								
							</div>
							
								<!--begin::Modal 1-->
									<div class="modal fade" id="modal_alpa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><i class="flaticon2-list-1" style="color:#ef5325"></i>&nbsp;&nbsp;<span style="color:#0961ae";>DATA PEGAWAI ALPA - HARI INI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingOne7">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Kantor Pusat
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_1.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_4.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
												
												

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang A
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_10.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_11.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang B
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_15.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_16.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_17.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_18.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_19.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_20.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_21.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>
												</div>
												

									</div>
								</div>
							</div>
							<!--End::Modal 2-->
							
								
									
								</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="modal_hadir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><i class="flaticon2-list-1" style="color:#ef5325"></i>&nbsp;&nbsp;<span style="color:#0961ae";>DATA PEGAWAI HADIR - HARI INI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingOne7">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Kantor Pusat
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_1.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_4.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_22.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_23.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_24.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_25.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
												
												

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang A
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_10.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_11.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang B
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_15.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_16.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_17.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_18.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_19.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_20.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_21.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>
												</div>
												

									</div>
								</div>
							</div>
							<!--End::Modal 2-->
							
							
								
									
								</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>
							</div>
							</div>
							</div>
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_sakit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><i class="flaticon2-list-1" style="color:#ef5325"></i>&nbsp;&nbsp;<span style="color:#0961ae";>DATA PEGAWAI SAKIT - HARI INI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingOne7">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Kantor Pusat
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_1.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_4.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
												
												

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang A
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_10.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_11.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang B
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_15.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_16.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_17.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_18.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_19.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_20.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_21.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>
												</div>
												

									</div>
								</div>
							</div>
							<!--End::Modal 2-->
							
								
									
								</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 3-->
							<div class="modal fade" id="modal_izin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><i class="flaticon2-list-1" style="color:#ef5325"></i>&nbsp;&nbsp;<span style="color:#0961ae";>DATA PEGAWAI IZIN - HARI INI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingOne7">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Kantor Pusat
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_1.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_4.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
												
												

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang A
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_10.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_11.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang B
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_15.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_16.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_17.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_18.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_19.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_20.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_21.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>
												</div>
												

									</div>
								</div>
							</div>
							<!--End::Modal 2-->
							
								
									
								</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 3-->
							<div class="modal fade" id="modal_cuti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><i class="flaticon2-list-1" style="color:#ef5325"></i>&nbsp;&nbsp;<span style="color:#0961ae";>DATA PEGAWAI CUTI - HARI INI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingOne7">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Kantor Pusat
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_1.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_4.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
												
												

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang A
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_10.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_11.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang B
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_15.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_16.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_17.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_18.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_19.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_20.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_21.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>
												</div>
												

									</div>
								</div>
							</div>
							<!--End::Modal 2-->
							
								
									
								</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>

							<!--End::App-->
							<!--End::Modal 3-->
							<div class="modal fade" id="modal_terlambat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><i class="flaticon2-list-1" style="color:#ef5325"></i>&nbsp;&nbsp;<span style="color:#0961ae";>DATA PEGAWAI TERLAMBAT - HARI INI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingOne7">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Kantor Pusat
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_1.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_4.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
												
												

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang A
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_10.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_11.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang B
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_15.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_16.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_17.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_18.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_19.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_20.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_21.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>
												</div>
												

									</div>
								</div>
							</div>
							<!--End::Modal 2-->
							
								
									
								</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>

							<!--End::App-->
						</div>

<?php require '../layouts-index/footer.php' ?>
<!--begin:: Script tambahan -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="../assets/js/pages/dashboard.js" type="text/javascript"></script>
<script src="../assets/js/chart/highchart-pegawai.js" type="text/javascript"></script>
<script src="../assets/js/chart/highchart-pegawai-usia.js" type="text/javascript"></script>
<script src="../assets/js/chart/highchart-department-pegawai.js" type="text/javascript"></script>
<!--end:: Script tambahan -->
<?php require '../layouts-index/foot.php' ?>
