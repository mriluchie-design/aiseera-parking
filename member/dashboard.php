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
											Member </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
							</div>
						</div>
						

            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
			<div class="row">
								
								
								
								<div class="col-xl-6">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label" style="margin-left:20px">
												<h3 class="kt-portlet__head-title">
													Statistik Member
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar" style="margin-right:20px">
												<a href="#" class="btn btn-label-light btn-sm dropdown-toggle" data-toggle="dropdown">
													2026
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2025</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2024</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Keseluruhan</span>
															</a>
														</li>
														
														
														
													</ul>
												</div>
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
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 23.68"><g id="F549_Car_vehicle" data-name="F549, Car, vehicle"><polygon points="15.97 12.34 15.49 15.78 13.98 15.78 13.98 12.34 15.97 12.34" style="fill:#fff"/><rect x="9.98" y="12.34" width="2" height="3.48" style="fill:#fff"/><rect x="11.98" y="12.34" width="2" height="3.48" style="fill:#fff"/><polygon points="9.98 12.34 9.98 15.78 8.51 15.78 7.99 12.34 9.98 12.34" style="fill:#fff"/><polygon points="21.48 13.8 21.48 15.78 17.97 15.78 18.97 13.8 21.48 13.8" style="fill:#fff"/><polygon points="4.99 13.8 5.99 15.78 2.52 15.78 2.52 13.8 4.99 13.8" style="fill:#fff"/><rect x="4.51" y="20.24" width="2.99" height="2.97" style="fill:#fff"/><rect x="16.49" y="20.24" width="2.99" height="2.97" style="fill:#fff"/><path d="M3.75,20.52C2.08,20.52.68,18.9.48,16.84h0A.2.2,0,0,0,.76,17a3.85,3.85,0,0,0,1.84.75H21.28A3.38,3.38,0,0,0,23,17c.12.08.2.08.32-.08-.2,2-1.6,3.56-3.23,3.56H4.51l-.76,0Z" transform="translate(0 -0.27)" style="fill:#a1c6e9"/><path d="M23.48,15v1.7c-.12.12-.24.2-.36.32a3.93,3.93,0,0,1-1.76.71H2.64A3.85,3.85,0,0,1,.8,17a1.74,1.74,0,0,1-.28-.24V14.9h0V11.11c0-1.11,1.36-2.34,2.87-2.5h0v0l.6.44H19.73l.92-.52c1.55.12,2.87,1.35,2.87,2.5v3.79h0C23.44,14.94,23.48,15,23.48,15Zm-2,1.07v-2H19l-1,2Zm-6,0L16,12.57H8l.52,3.48h6.94Zm-9.5,0-1-2H2.48v2Z" transform="translate(0 -0.27)" style="fill:#a1c6e9"/><path d="M1.52,5.17a1.13,1.13,0,0,1,1,1.23,1.13,1.13,0,0,1-1,1.23,1.13,1.13,0,0,1-1-1.23A1.13,1.13,0,0,1,1.52,5.17Z" transform="translate(0 -0.27)" style="fill:#fff"/><path d="M22.48,5.17a1.13,1.13,0,0,1,1,1.23,1.13,1.13,0,0,1-1,1.23,1.13,1.13,0,0,1-1-1.23A1.13,1.13,0,0,1,22.48,5.17Z" transform="translate(0 -0.27)" style="fill:#fff"/><path d="M19.77,3.28l.84,5.37-1.16.48H4l-.56-.48.8-5.37C4.19,1.89,5.87.75,8,.75h8C18.05.75,19.77,1.85,19.77,3.28Z" transform="translate(0 -0.27)" style="fill:#fff"/><path d="M7.51,24h-3A.53.53,0,0,1,4,23.44v-3a.52.52,0,0,1,1,0V23H7V20.48a.52.52,0,0,1,1,0v3A.68.68,0,0,1,7.51,24Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M19.49,24h-3a.53.53,0,0,1-.52-.52v-3a.52.52,0,1,1,1,0V23h2V20.48a.52.52,0,1,1,1,0v3A.68.68,0,0,1,19.49,24Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M19.49,21H3.75C1.84,21,.2,19.21,0,16.88a.77.77,0,0,1,.12-.4.43.43,0,0,1,.36-.16h0a.45.45,0,0,1,.32.12.56.56,0,0,1,.4.2.45.45,0,0,1-.12.67h0A3.74,3.74,0,0,0,2,19.05,2.4,2.4,0,0,0,3.79,20H20.17a3,3,0,0,0,2.67-2.61l0,0a.54.54,0,0,1,0-.71.6.6,0,0,1,.44-.16.47.47,0,0,1,.4,0,.45.45,0,0,1,.32.52C23.64,19.25,22,21,20.17,21Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M4,9.64a.58.58,0,0,1-.28-.08l-.6-.43a.47.47,0,0,1-.19-.48v0l.83-5.33A2.72,2.72,0,0,1,5,1.1,5.22,5.22,0,0,1,8,.27h8a5.22,5.22,0,0,1,3,.83,2.68,2.68,0,0,1,1.32,2.18l.83,5.33a.56.56,0,0,1-.23.52L20,9.64a.57.57,0,0,1-.24.08h-.24a.52.52,0,1,1,0-1h.12l.48-.27-.8-5V3.32c0-1.11-1.48-2.06-3.28-2.06H8c-1.76,0-3.28,1-3.28,2.06V3.4l-.8,5.14.36.27a.46.46,0,0,1,.12.67A.61.61,0,0,1,4,9.64Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M21.32,18.18H2.56a4,4,0,0,1-2.08-.87A2.26,2.26,0,0,1,.16,17,.6.6,0,0,1,0,16.68V11.11c0-1.39,1.6-2.81,3.31-3a.65.65,0,0,1,.36.12h0l.44.35H19.29l1-.43a.51.51,0,0,1,.24,0,3.74,3.74,0,0,1,2.31,1,2.77,2.77,0,0,1,1,2v5.61a.43.43,0,0,1-.16.36c-.12.11-.28.23-.4.35a4,4,0,0,1-2,.79S21.36,18.18,21.32,18.18Zm-18.64-1H21.32a3.26,3.26,0,0,0,1.52-.59s.12-.08.16-.12V11.11a2.51,2.51,0,0,0-2.27-2l-1,.43a.36.36,0,0,1-.2,0H4a.45.45,0,0,1-.32-.12l-.44-.35C2,9.33,1,10.31,1,11.07v5.37s.08,0,.12.08A2.69,2.69,0,0,0,2.68,17.19Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M6,16.56H2.48A.53.53,0,0,1,2,16.05v-2a.52.52,0,0,1,.52-.51H5a.5.5,0,0,1,.44.27l1,1.94a.57.57,0,0,1,.08.24A.54.54,0,0,1,6,16.56Zm-3-1H5.19l-.48-1H3Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M21.48,16.56H18a.55.55,0,0,1-.44-.24.64.64,0,0,1,0-.47l1-2a.48.48,0,0,1,.44-.27h2.51a.52.52,0,0,1,.52.51v2A.52.52,0,0,1,21.48,16.56Zm-2.71-1H21v-1H19.29Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M9.42,6.2A.49.49,0,0,1,9.06,6a.51.51,0,0,1,0-.71l3.56-3.48a.53.53,0,0,1,.72,0,.5.5,0,0,1,0,.71L9.78,6A.49.49,0,0,1,9.42,6.2Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M10.5,8.14A.49.49,0,0,1,10.14,8a.5.5,0,0,1,0-.71L13.7,3.79a.51.51,0,0,1,.72,0,.5.5,0,0,1,0,.71L10.86,8A.49.49,0,0,1,10.5,8.14Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M1.52,8.14A1.65,1.65,0,0,1,0,6.4,1.65,1.65,0,0,1,1.52,4.66,1.65,1.65,0,0,1,3,6.4,1.71,1.71,0,0,1,1.52,8.14Zm0-2.45C1.24,5.69,1,6,1,6.44s.24.75.52.75S2,6.84,2,6.44,1.76,5.69,1.52,5.69Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M3,9.13A.49.49,0,0,1,2.64,9l-1-1a.5.5,0,0,1,0-.71.51.51,0,0,1,.72,0l1,1a.5.5,0,0,1,0,.71A.48.48,0,0,1,3,9.13Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M22.48,8.14A1.65,1.65,0,0,1,21,6.4a1.65,1.65,0,0,1,1.52-1.74A1.65,1.65,0,0,1,24,6.4,1.71,1.71,0,0,1,22.48,8.14Zm0-2.45c-.28,0-.52.35-.52.75s.24.75.52.75.52-.35.52-.75S22.72,5.69,22.48,5.69Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M21,9.13A.48.48,0,0,1,20.61,9a.5.5,0,0,1,0-.71l1-1a.51.51,0,0,1,.72,0,.5.5,0,0,1,0,.71l-1,1A.47.47,0,0,1,21,9.13Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M12,13.08H10a.52.52,0,0,1-.52-.51.53.53,0,0,1,.52-.52h2a.53.53,0,0,1,.52.52A.52.52,0,0,1,12,13.08Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M12,16.56H10a.52.52,0,1,1,0-1h2a.52.52,0,1,1,0,1Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M10,16.56H8.47A.51.51,0,0,1,8,16.13l-.52-3.48a.48.48,0,0,1,.12-.4A.43.43,0,0,1,8,12.09h2a.53.53,0,0,1,.52.52v3.48A.46.46,0,0,1,10,16.56Zm-1.07-1h.55V13.08H8.55Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M15.49,16.56H14a.52.52,0,1,1,0-1h1.08L15.41,13H14a.52.52,0,0,1-.52-.51A.53.53,0,0,1,14,12h2a.51.51,0,0,1,.36.16.68.68,0,0,1,.12.4l-.52,3.48A.46.46,0,0,1,15.49,16.56Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/><path d="M14,16.56H12a.53.53,0,0,1-.52-.51V12.57a.53.53,0,0,1,.52-.52h2a.53.53,0,0,1,.52.52v3.48A.53.53,0,0,1,14,16.56Zm-1.48-1h1V13.08h-1Z" transform="translate(0 -0.27)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Sedan / Jeep / Pick Up
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:18px;" class="kt-nav__link kt-font-danger" data-toggle="modal" data-target="#modal_hadir"><b>556</b></span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 2 24 22"><path d="M26.34,23.46c0,.3-6.46.54-14.44.54s-14.44-.24-14.44-.54,6.47-.55,14.44-.55S26.34,23.16,26.34,23.46Z" transform="translate(3.19 0.43)" style="fill:#1e5d73;opacity:0.2"/><path d="M26,19.34a3.94,3.94,0,1,1-3.94-3.93A3.93,3.93,0,0,1,26,19.34Z" transform="translate(3.19 0.43)" style="fill:#42525e;stroke:#36444d;stroke-miterlimit:10;stroke-width:2.04184px"/><path d="M24.25,19.34a2.2,2.2,0,1,1-2.2-2.19A2.19,2.19,0,0,1,24.25,19.34Z" transform="translate(3.19 0.43)" style="fill:#b4bbba;stroke:#36444d;stroke-miterlimit:10;stroke-width:1.64677px"/><path d="M23.32,19.34a1.27,1.27,0,1,1-1.27-1.27A1.27,1.27,0,0,1,23.32,19.34Z" transform="translate(3.19 0.43)" style="fill:#fcfadb;stroke:#5d8d9b;stroke-miterlimit:10;stroke-width:1.5313800000000002px"/><path d="M6.61,19.34a3.93,3.93,0,1,1-3.93-3.93A3.93,3.93,0,0,1,6.61,19.34Z" transform="translate(3.19 0.43)" style="fill:#42525e;stroke:#36444d;stroke-miterlimit:10;stroke-width:2.04184px"/><path d="M4.87,19.34a2.19,2.19,0,1,1-2.19-2.19A2.19,2.19,0,0,1,4.87,19.34Z" transform="translate(3.19 0.43)" style="fill:#b4bbba;stroke:#36444d;stroke-miterlimit:10;stroke-width:1.64677px"/><path d="M4,19.34a1.27,1.27,0,1,1-1.27-1.27A1.27,1.27,0,0,1,4,19.34Z" transform="translate(3.19 0.43)" style="fill:#fcfadb;stroke:#699baf;stroke-miterlimit:10;stroke-width:1.5313800000000002px"/><path d="M1.39,13.51H-.8l-1,1.13H.28A12.06,12.06,0,0,1,1.39,13.51Z" transform="translate(3.19 0.43)" style="fill:#e48642;stroke:#cc7e48;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M.33,14.64H-1.81v.71H-.3A4.19,4.19,0,0,1,.33,14.64Z" transform="translate(3.19 0.43)" style="fill:#dd4942;stroke:#c6423f;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M17.75,4.71c0,.09,0,.16-.05.18h0c-.07,0-.14,0-.16-.13l-.74-3.21c0-.09,0-.17.08-.19h0c.07,0,.11,0,.13.13Z" transform="translate(3.19 0.43)" style="fill:#452a1c;stroke:#3b2217;stroke-miterlimit:10;stroke-width:0.7894789999999999px"/><path d="M16.71,1.12a.36.36,0,0,0-.19.13l.11.46a.28.28,0,0,0,.22,0,.32.32,0,0,0-.14-.62Z" transform="translate(3.19 0.43)" style="fill:#643c16;stroke:#3b2217;stroke-miterlimit:10;stroke-width:0.7894789999999999px"/><path d="M16.58,3.07,15.92.2a.06.06,0,0,1,0,0,2.65,2.65,0,0,0-.29,1.17,2,2,0,0,0,1,1.77S16.58,3.08,16.58,3.07Z" transform="translate(3.19 0.43)" style="fill:#e8d8aa;stroke:#c9b177;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.18422px"/><polygon points="21.06 8.8 19.57 9.46 18.93 7.72 19.7 6.93 21.06 8.8" style="fill:#15898d"/><polygon points="21.06 8.8 19.57 9.46 18.93 7.72 19.7 6.93 21.06 8.8" style="fill:#fff;stroke:#5d8d9b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><polygon points="19.45 7.18 18.93 7.72 19.57 9.46 20.38 9.11 19.45 7.18" style="fill:#fff;stroke:#5d8d9b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M17.84,8.34,16.38,9c-.08.28,1.35,3.06,1.27,4.54A3.5,3.5,0,0,1,15,17.13a17.93,17.93,0,0,1-4.48.44c-.91,0-2.1-.4-1.19-2.14.66-1.26,1.62-1.95,1.56-2.29a1.65,1.65,0,0,1-.32.07H2a1.65,1.65,0,0,1-.32-.07c-.48.43-3.87,3.53-4.12,5.85,0,.25,0,.32.43.37H-.46s2-2.49,3.74-2.49a4.06,4.06,0,0,1,4,3.39c.09,0,1,0,1.54,0,5.42,0,5.54-.06,7.24-.9a5.23,5.23,0,0,0,3.42-3.93C19.75,13.31,19.43,9.25,17.84,8.34Z" transform="translate(3.19 0.43)" style="fill:#71beea;stroke:#5d8d9b;stroke-miterlimit:10;stroke-width:0.7894789999999999px"/><path d="M15.93,19.42H7.08c0,.17.2.63.23.81H9.36C13.49,20.33,14.76,20.12,15.93,19.42Z" transform="translate(3.19 0.43)" style="fill:#fff;stroke:#5d8d9b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M17.84,8.34,16.35,9c.06.27,1.38,3,1.3,4.53A3.5,3.5,0,0,1,15,17.13a17.93,17.93,0,0,1-4.48.44c-.91,0-2.1-.4-1.19-2.14.66-1.26,1.62-1.92,1.56-2.27a1.21,1.21,0,0,1-.32.11H2a1.7,1.7,0,0,1-.32-.1C1.24,13.6-2.15,16.68-2.4,19c0,.24,0,.31.43.35H-.46s2-2.49,3.74-2.49a4.06,4.06,0,0,1,4,3.39c.09,0,1,0,1.54,0,5.42,0,5.54-.06,7.24-.9a5.23,5.23,0,0,0,3.42-3.93C19.75,13.31,19.43,9.25,17.84,8.34Z" transform="translate(3.19 0.43)" style="fill:none;stroke:#5c8b99;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M18.79,9.48a12.4,12.4,0,0,1,.77,5.24h0a3.82,3.82,0,0,1,2-.61,2.24,2.24,0,0,0-.94-1.55,3.93,3.93,0,0,1-1.39-2.2,5.44,5.44,0,0,0-.55-1l.06.11Z" transform="translate(3.19 0.43)" style="fill:#fff;stroke:#5d8d9b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M18.29,4.28c-1.4.17-2.44,1-2.33,2s1.33,1.52,2.73,1.35a4.21,4.21,0,0,0,.74-.17,4.51,4.51,0,0,0,.05-1.6A4.36,4.36,0,0,0,19,4.27,3.78,3.78,0,0,0,18.29,4.28Z" transform="translate(3.19 0.43)" style="fill:#fcfadb;stroke:#5d8d9b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.18422px"/><path d="M19,4.27a4.36,4.36,0,0,1,.44,1.56,4.24,4.24,0,0,1-.05,1.59,2.59,2.59,0,0,0,.8-1.22C20.4,5.56,20.19,4.74,19,4.27Z" transform="translate(3.19 0.43)" style="fill:#e48642;stroke:#cc7e48;stroke-miterlimit:10;stroke-width:1.18422px"/><path d="M-2,19.33l9.72.06s1.82-3.18,0-4.59C6.43,13.77.87,13.09-2,19.33Z" transform="translate(3.19 0.43)" style="fill:#fff;stroke:#5d8d9b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M19,4.27s0-.1-.23-.1-.22.09-.22.09a4.18,4.18,0,0,1,.47,1.63A4.34,4.34,0,0,1,19,7.55a.52.52,0,0,0,.25,0,.28.28,0,0,0,.18-.14,4.51,4.51,0,0,0,.05-1.6A4.36,4.36,0,0,0,19,4.27Z" transform="translate(3.19 0.43)" style="fill:#71beea;stroke:#5d8d9b;stroke-miterlimit:10;stroke-width:1.18422px"/><path d="M19,4.27s0-.1-.23-.1-.22.09-.22.09a4.18,4.18,0,0,1,.47,1.63A4.34,4.34,0,0,1,19,7.55a.52.52,0,0,0,.25,0,.28.28,0,0,0,.18-.14,4.51,4.51,0,0,0,.05-1.6A4.36,4.36,0,0,0,19,4.27Z" transform="translate(3.19 0.43)" style="fill:none;stroke:#699baf;stroke-miterlimit:10;stroke-width:1.18422px"/><path d="M17.06,6.91a.56.56,0,0,1-.56.56h-2A.56.56,0,0,1,14,6.91h0a.56.56,0,0,1,.57-.56h2a.56.56,0,0,1,.56.56Z" transform="translate(3.19 0.43)" style="fill:#71beea;stroke:#5d8d9b;stroke-miterlimit:10;stroke-width:1.18422px"/><path d="M22.69,17.52c.5,0,2.51-.08,3.85-.06A4.65,4.65,0,0,0,22,13.72a4.56,4.56,0,0,0-2.3.61c0,.24,0,.47-.06.68a5.35,5.35,0,0,1-2.29,3.5,4.82,4.82,0,0,0,.11.85,18.65,18.65,0,0,0,2.43-.1C20.94,19,22,17.57,22.69,17.52Z" transform="translate(3.19 0.43)" style="fill:#fff;stroke:#5d8d9b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M17.84,8.34l-.67.29a13.18,13.18,0,0,1,1.52,5.23c0,1.61-.18,3.11-2.6,5.47a5.53,5.53,0,0,0,3.64-4.12C20.13,13.55,19.45,9.25,17.84,8.34Z" transform="translate(3.19 0.43)" style="fill:#fff;stroke:#5d8d9b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5789600000000001px"/><path d="M11.59,12c0,.64-.33,1.35-1,1.35H2A1.52,1.52,0,0,1,.66,12v0c0-.65.72-1,1.38-1H10.6a.89.89,0,0,1,1,1Z" transform="translate(3.19 0.43)" style="fill:#e8d8aa;stroke:#c9b177;stroke-miterlimit:10;stroke-width:1.9737px"/><path d="M2,10.86a1.32,1.32,0,0,0-1.24.76A1.37,1.37,0,0,0,2,12.47H10.6a1,1,0,0,0,1-.81,1.05,1.05,0,0,0-1-.8Z" transform="translate(3.19 0.43)" style="fill:#e8d8aa;stroke:#c9b177;stroke-miterlimit:10;stroke-width:1.9737px"/><path d="M16.92,3a.14.14,0,0,1-.12.19h0a.17.17,0,0,1-.22-.11L15.92.2A.14.14,0,0,1,16,0h0a.16.16,0,0,1,.22.11Z" transform="translate(3.19 0.43)" style="fill:#71beea;stroke:#5d8d9b;stroke-miterlimit:10;stroke-width:0.7894789999999999px"/></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Member - Motor
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:18px;" class="kt-nav__link kt-font-danger" data-toggle="modal" data-target="#modal_hadir"><b>1.471</b></span>
															</span>
														</div>
														
														
													</div>
													<div class="kt-widget17__items">
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.91 24"><g id="_664_Auto_transport_truck_van" data-name="664, Auto, transport, truck, van"><path d="M20.86,14.27A1.92,1.92,0,0,0,19,12.61H4.26a1.88,1.88,0,0,0-1.87,1.66v4.14a1.86,1.86,0,0,0,1.87,1.87H19a1.86,1.86,0,0,0,1.87-1.87V14.53A1.58,1.58,0,0,0,20.86,14.27Z" transform="translate(-0.17 -0.07)" style="fill:#a1c6e9"/><path d="M17.63,15.36a1.09,1.09,0,1,1-1.09,1.09A1.08,1.08,0,0,1,17.63,15.36Z" transform="translate(-0.17 -0.07)" style="fill:#fff"/><path d="M5.66,15.36a1.09,1.09,0,1,1-1.09,1.09A1.08,1.08,0,0,1,5.66,15.36Z" transform="translate(-0.17 -0.07)" style="fill:#fff"/><rect x="0.57" y="9.28" width="1.66" height="3.79" style="fill:#fff"/><rect x="20.73" y="8.75" width="1.66" height="3.79" style="fill:#fff"/><path d="M18.72,20.24v1.91a1.36,1.36,0,0,1-1.35,1.35A1.39,1.39,0,0,1,16,22.15V20.24Z" transform="translate(-0.17 -0.07)" style="fill:#fff"/><path d="M4.57,12.61H4.26a1.88,1.88,0,0,0-1.87,1.66h0V2.16A1.51,1.51,0,0,1,3.91.64H19.33a1.52,1.52,0,0,1,1.53,1.52V14.27h0A1.92,1.92,0,0,0,19,12.61Z" transform="translate(-0.17 -0.07)" style="fill:#fff"/><path d="M18.72,8.35v4.26H4.57V8.35A1.17,1.17,0,0,1,5.74,7.17H17.59A1.16,1.16,0,0,1,18.72,8.35Z" transform="translate(-0.17 -0.07)" style="fill:#fff"/><path d="M7.27,20.24v1.91a1.35,1.35,0,0,1-2.7,0V20.24Z" transform="translate(-0.17 -0.07)" style="fill:#fff"/><path d="M19,20.8h-.3a.57.57,0,1,1,0-1.13H19a1.36,1.36,0,0,0,1.35-1.35V14.27A1.35,1.35,0,0,0,19,13.09h-.31a.57.57,0,0,1,0-1.13H19a2.4,2.4,0,0,1,2.39,2.09v4.18A2.47,2.47,0,0,1,19,20.8Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M4.57,20.8H4.26a2.44,2.44,0,0,1-2.44-2.44V14.18a2.41,2.41,0,0,1,2.4-2.09h.3a.57.57,0,1,1,0,1.13h-.3A1.32,1.32,0,0,0,2.91,14.4v4A1.36,1.36,0,0,0,4.26,19.8h.31a.57.57,0,0,1,.56.57A.67.67,0,0,1,4.57,20.8Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M16,20.8H7.27a.57.57,0,1,1,0-1.13H16a.57.57,0,0,1,0,1.13Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M18.72,13.18H4.57A.58.58,0,0,1,4,12.61V8.35a1.7,1.7,0,0,1,1.7-1.7H17.55a1.7,1.7,0,0,1,1.69,1.7v4.26A.57.57,0,0,1,18.72,13.18ZM5.09,12.09H18.16V8.35a.6.6,0,0,0-.61-.61H5.7a.59.59,0,0,0-.61.61v3.74Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M2.39,14.79a.57.57,0,0,1-.57-.56V13.14a.57.57,0,1,1,1.13,0v1.09A.64.64,0,0,1,2.39,14.79Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M2.39,9.91a.57.57,0,0,1-.57-.56V2.16A2.1,2.1,0,0,1,3.91.07H19.33a2.09,2.09,0,0,1,2.09,2.09V8.78a.57.57,0,1,1-1.13,0V2.16a1,1,0,0,0-1-1H3.91a1,1,0,0,0-1,1V9.35A.57.57,0,0,1,2.39,9.91Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M20.9,14.79a.58.58,0,0,1-.57-.56V12.57a.57.57,0,0,1,1.14,0v1.66A.66.66,0,0,1,20.9,14.79Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M22.51,13.18H20.86a.58.58,0,0,1-.57-.57V8.78a.57.57,0,0,1,.57-.56h1.65a.57.57,0,0,1,.57.56v3.83A.58.58,0,0,1,22.51,13.18Zm-1.09-1.09H22V9.35h-.57Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M2.39,13.7H.73a.57.57,0,0,1-.56-.56V9.35a.57.57,0,0,1,.56-.57H2.39A.57.57,0,0,1,3,9.35v3.83A.64.64,0,0,1,2.39,13.7ZM1.3,12.61h.57V9.87H1.3Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M5.92,24.07A1.93,1.93,0,0,1,4,22.15V20.24a.58.58,0,0,1,.57-.57h2.7a.57.57,0,0,1,.56.57v1.91A1.93,1.93,0,0,1,5.92,24.07ZM5.09,20.8v1.35a.83.83,0,1,0,1.65,0V20.8Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M17.33,24.07a1.93,1.93,0,0,1-1.92-1.92V20.24a.58.58,0,0,1,.57-.57h2.74a.58.58,0,0,1,.57.57v1.91A2,2,0,0,1,17.33,24.07Zm-.79-3.27v1.35a.83.83,0,0,0,1.66,0V20.8Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M22,24.07H1.3a.57.57,0,1,1,0-1.13H22a.58.58,0,0,1,.57.56A.66.66,0,0,1,22,24.07Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M5.66,18.06A1.66,1.66,0,1,1,7.31,16.4,1.68,1.68,0,0,1,5.66,18.06Zm0-2.18a.57.57,0,1,0,.56.57A.6.6,0,0,0,5.66,15.88Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M17.63,18.06a1.66,1.66,0,1,1,1.66-1.66A1.69,1.69,0,0,1,17.63,18.06Zm0-2.18a.57.57,0,1,0,.57.57A.61.61,0,0,0,17.63,15.88Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M14.37,17H8.92a.57.57,0,0,1,0-1.13h5.45a.57.57,0,0,1,.56.56A.6.6,0,0,1,14.37,17Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M13.28,18.63H10a.59.59,0,0,1-.57-.57.58.58,0,0,1,.57-.57h3.27a.57.57,0,0,1,.56.57A.65.65,0,0,1,13.28,18.63Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M13.28,15.36H10a.57.57,0,1,1,0-1.13h3.27a.57.57,0,0,1,.56.56A.6.6,0,0,1,13.28,15.36Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M12.19,11.53a.54.54,0,0,1-.44-.22.58.58,0,0,1,.13-.79l2.18-1.65a.57.57,0,0,1,.79.13.52.52,0,0,1-.14.78l-2.17,1.66A1.5,1.5,0,0,1,12.19,11.53Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/><path d="M9.62,11.53a.54.54,0,0,1-.44-.22.58.58,0,0,1,.13-.79l1.44-1.09a.57.57,0,0,1,.79.14.56.56,0,0,1-.14.78L10,11.44A1.13,1.13,0,0,1,9.62,11.53Z" transform="translate(-0.17 -0.07)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Truck / Tronton / Trailer
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:18px;" class="kt-nav__link kt-font-danger" data-toggle="modal" data-target="#modal_hadir"><b>2.363</b></span> 
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,6 L20.5,6 C21.3284271,6 22,6.67157288 22,7.5 C22,8.32842712 21.3284271,9 20.5,9 L8,9 L8,19.5 C8,20.3284271 7.32842712,21 6.5,21 C5.67157288,21 5,20.3284271 5,19.5 L5,9 L3.5,9 C2.67157288,9 2,8.32842712 2,7.5 C2,6.67157288 2.67157288,6 3.5,6 L5,6 L5,4.5 C5,3.67157288 5.67157288,3 6.5,3 C7.32842712,3 8,3.67157288 8,4.5 L8,6 Z" fill="#000000"/>
        <path d="M10,11 L20.5,11 C21.3284271,11 22,11.6715729 22,12.5 L22,15 C22,17.209139 20.209139,19 18,19 L11.5,19 C10.6715729,19 10,18.3284271 10,17.5 L10,11 Z M20,12 C19.4477153,12 19,12.4477153 19,13 L19,16 C19,16.5522847 19.4477153,17 20,17 C20.5522847,17 21,16.5522847 21,16 L21,13 C21,12.4477153 20.5522847,12 20,12 Z" fill="#000000" opacity="0.3"/>
    </g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Pegawai / Instansi / Others
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:18px;" class="kt-nav__link kt-font-danger" data-toggle="modal" data-target="#modal_hadir"><b>1.432</b></span>
															</span>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>
								
								<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Statistik Member &nbsp;&nbsp;|&nbsp;&nbsp;<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
					Tahun Ke Tahun </span>
												</h3>
											</div>
										<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-sm dropdown-toggle" data-toggle="dropdown">
													 Makassar
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														
														
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon fa fa-chart-bar"></i>
																<span class="kt-nav__link-text">Ambon</span>
															</a>
															
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon fa fa-chart-bar"></i>
																<span class="kt-nav__link-text">Ternate</span>
															</a>
															
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon fa fa-chart-bar"></i>
																<span class="kt-nav__link-text">Keseluruhan</span>
															</a>
															
														</li>
														
														
														
													</ul>
												</div>
												
										</div>	
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
										    <div id="container-perbandingan" style="height:300px"></div>
										</figure>
										</div>
									</div>
						</div>

							<!--End::Section-->

							

						
						</div>
<div class="row">
								
										

							<!--end:: Portlet-->
								

								
								
								

									<!--end:: Widgets/Activity-->
							
								
									

								</div>
							

								

								
						</div>

						<?php require '../layouts/footer.php' ?>
						<script src="https://code.highcharts.com/highcharts.js"></script>
						<script src="https://code.highcharts.com/modules/exporting.js"></script>
						<script src="https://code.highcharts.com/modules/export-data.js"></script>
						<script src="https://code.highcharts.com/modules/accessibility.js"></script>
						<script src="../assets/js/chart/highchart.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-monitoring-perbandingan-member.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-terlambat.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-kendaraan-masukvskeluar.js" type="text/javascript"></script>
						<?php require '../layouts/foot.php' ?>
