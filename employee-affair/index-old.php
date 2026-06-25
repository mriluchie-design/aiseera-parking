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
									<h3 class="kt-subheader__title">Aside Light</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<span class="kt-subheader__desc">#XRS-45670</span>
									<a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
										Add New
									</a>
									<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
										<input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="flaticon2-search-1"></i></span>
										</span>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<div class="kt-subheader__wrapper">
										<a href="#" class="btn kt-subheader__btn-secondary">Today</a>
										<a href="#" class="btn kt-subheader__btn-secondary">Month</a>
										<a href="#" class="btn kt-subheader__btn-secondary">Year</a>
										<a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Select dashboard daterange">
											<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today:</span>&nbsp;
											<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Sep 30</span>
											<i class="flaticon2-calendar-1"></i>
										</a>
										<div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
											<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
													</g>
												</svg>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">
													<li class="kt-nav__head">
														Add anything or jump to:
														<i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-drop"></i>
															<span class="kt-nav__link-text">Order</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
															<span class="kt-nav__link-text">Ticket</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
															<span class="kt-nav__link-text">Goal</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-new-email"></i>
															<span class="kt-nav__link-text">Support Case</span>
															<span class="kt-nav__link-badge">
																<span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
															</span>
														</a>
													</li>
													<li class="kt-nav__separator"></li>
													<li class="kt-nav__foot">
														<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
														<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
													</li>
												</ul>

												<!--end::Nav-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-lg-4">
									<div class="kt-portlet kt-widget kt-widget--user-profile-1">
										<div class="kt-portlet__body">
									<div class="kt-portlet kt-iconbox kt-iconbox--danger kt-iconbox--animate-faster">
										<div class="kt-portlet__body">
											<div class="kt-iconbox__body">
												<div class="kt-iconbox__desc">
													<h3 class="kt-iconbox__title">
														Hi, <b>Pablo,</b> Selamat Pagi
													</h3>
													<div class="kt-iconbox__content">
														Anda Melakukan Absen Hari Ini Pukul <b> 07:55 </b>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row mt-5">
										<div class="col-lg-3">
											<div class="kt-section__content">
													<a href="#" class="kt-media">
														<img src="../assets/img/users/100_1.jpg" alt="image" style="max-width:100px !important;height:auto">
													</a>
												</div>
										</div>
									<div class="col-lg-9">
									<h4 class="name">
										Pablo Cambeiro
									</h4>
									<i>Manager</i>
									<div class="deskripsi-pegawai">
									Contrary-to-popular-belief,-Lorem-Ipsum-is-not-simply
									<br>random text. It has roots in a piece of classical.
								</div>
								<div class="kt-separator kt-separator--border-dashed-2 kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="row mt-3">
									<div class="col-lg-3">
										Date Of Birth
									</div>
									<div class="col-lg-9">
										<b>03/01/1995</b>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-lg-3">
										Work Phone
									</div>
									<div class="col-lg-9">
										0812 3456 7890
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-lg-3">
										Email
									</div>
									<div class="col-lg-9">
										kondoleyasu@officemail.com
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed-2 kt-separator--space-lg kt-separator--portlet-fit"></div>
									</div>
									</div>

									<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Grafik Kepegawaian
														</h3>
														<span class="kt-widget14__desc">
															Statistik Kepegawaian
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
															<div class="kt-widget14__stat">45</div>
															<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px; display: block;" width="140" height="140" class="chartjs-render-monitor"></canvas>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats">37% Mutasi Pegawai</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats">47% Pegawai Pensiun </span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-brand"></span>
																<span class="kt-widget14__stats">19% Pegawai Resign</span>
															</div>
														</div>
													</div>
												</div>
								</div>
							</div>
								</div>
								<div class="col-lg-4">
									<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head hari">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Notifications
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-pills nav-pills-notif nav-pills-sm nav-pills-label nav-pills-bold" role="tablist" style="margin: 25px 0 25px 0 !important;">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#" role="tab">
															Terbaru
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#" role="tab">
															Semua
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body pt-0">
													<div class="kt-notification">
												<a href="#" class="btn-label-brand btn btn-sm btn-bold notif-button">Pending</a>
														<a href="#" class="kt-notification__item notif-dashboard">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
																		<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Pemrohonan Mutasi Pegawai
																</div>
																<div class="kt-notification__item-time">
																	2 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="btn-label-brand btn btn-sm btn-bold notif-button">Pending</a>
														<a href="#" class="kt-notification__item notif-dashboard">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000"></path>
																		<path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Permohonan Pengajuan Resign
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<div class="kt-user-card-v2 notif-user">
															<div class="kt-user-card-v2__details mr-3 text-right">
																<a class="kt-user-card-v2__name kt-font-danger" href="#">Nixie Sailor</a>
																<span class="kt-user-card-v2__desc">Sales</span>
															</div>
															<div class="kt-user-card-v2__pic">
																<img src="../assets/img/users/100_1.jpg" alt="image">
															</div>
														</div>
														<a href="#" class="kt-notification__item notif-active">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<circle fill="#000000" cx="12" cy="9" r="5"></circle>
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Ulang Tahun Hari Ini
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
														<a href="#" class="btn-label-danger btn btn-sm btn-bold notif-button-deacline">Decline</a>
														<a href="#" class="btn-label-brand btn btn-sm btn-bold notif-button">Approve</a>
														<a href="#" class="kt-notification__item notif-dashboard mb-4" style="border-bottom:1px solid #f7f8fa">
															<div class="kt-notification__item-icon">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<circle fill="#000000" cx="12" cy="9" r="5"></circle>
																	</g>
																</svg> </div>
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Pegawai Kontrak yang akan berakhir
																</div>
																<div class="kt-notification__item-time">
																	3 hrs ago
																</div>
															</div>
														</a>
													</div>
										</div>
									</div>
									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid-full">
										<div class="kt-portlet__head hari">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												Recent Task
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-pills nav-pills-notif nav-pills-sm nav-pills-label nav-pills-bold" role="tablist" style="margin: 25px 0 25px 0 !important;">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
															Tasking
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
										<div class="kt-portlet__body pt-0">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget2_tab1_content">
													<div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--danger">
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
														<div class="kt-widget2__item kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Prepare Docs For Metting On Monday
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
														<div class="kt-widget2__item kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Make Widgets Development. Estudiat Communy Elit
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
														<div class="kt-widget2__item kt-widget2__item--danger">
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
													</div>
												</div>
												<div class="tab-pane" id="kt_widget2_tab2_content">
													<div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Make Metronic Development.Lorem Ipsum
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
																	Prepare Docs For Metting On Monday
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
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head hari">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Download Files
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-pills nav-pills-notif nav-pills-sm nav-pills-label nav-pills-bold" role="tablist" style="margin: 25px 0 25px 0 !important;">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
															Terbaru
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
															Semua
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body pt-0">
											<!--begin::k-widget4-->
											<div class="kt-widget4">
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="../assets/media/files/doc.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Form Pensiun
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="../assets/media/files/jpg.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Form Mutasi
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="../assets/media/files/pdf.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Laporan Kepegawaian
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="../assets/media/files/javascript.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Form Resign
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
												<div class="kt-widget4__item">
													<div class="kt-widget4__pic kt-widget4__pic--icon">
														<img src="../assets/media/files/zip.svg" alt="">
													</div>
													<a href="#" class="kt-widget4__title">
														Document Pegawai
													</a>
													<div class="kt-widget4__tools">
														<a href="#" class="btn btn-clean btn-icon btn-sm">
															<i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
														</a>
													</div>
												</div>
											</div>
											<!--end::Widget 9-->
										</div>
									</div>

								</div>
							</div>
						</div>

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/dashboard.js" type="text/javascript"></script>
<script src="../assets/dist/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/charts/amcharts/charts.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
