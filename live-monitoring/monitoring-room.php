<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>

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
											Monitoring Room </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
<div class="kt-subheader__toolbar">
			
                <button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
                <a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
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
				<div class="btn-group">
				<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>
				
				
			</div>
							
						</div>
						</div>
						</div>
						

            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
			
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
						<div class="col-lg-2">
                                <label>Lokasi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Makassar</option>
                                      <option value="2">Pare-Pare</option>
                                      <option value="2">Balikpapan</option>
                                      <option value="2">Samarinda</option>
                                      <option value="2">Tarakan</option>
                                      <option value="2">Nunukan</option>
                                      <option value="2">Manado</option>
                                      <option value="2">Bitung</option>
                                      <option value="2">Ambon - Yos Sudarso</option>
                                      <option value="2">Ambon - Slamet Riyadi</option>
                                      <option value="2">Ternate</option>
                                      <option value="2">Sorong</option>
                                      <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
                             
							
							
							
							<div class="col-lg-2">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" >Ready</option>
                                      <option value="1">Online</option>
                                      <option value="2">Offline</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							
    		                    </div>
								
                            
							
                            
							
							
							
							<br>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
            <!--end::Form-->
        </div>
<div class="row">
								
								
								
								
								
								<div class="col-xl-12">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label" style="margin-left:55px;">
												<h3 class="kt-portlet__head-title">
													STATISTIK
												</h3>
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
															<span class="kt-widget17__subtitle" style="text-align:center">
																Monitoring Room
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">13</span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">Online</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">13</span>
															</span>
														</div>
														
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Offline
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">0</span>
															</span>
														</div>
														
														
														
														
														
													</div>
													<div class="kt-widget17__items">
														
														
														
														
														
														
													</div>
													<div class="kt-widget17__items">
														
														
														
														
														
													</div>
													
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>

							<!--End::Section-->

							

						
						</div>
							
								<div class="row">
								
						

			<div class="col-xl-4">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_1.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">BALIKPAPAN</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">AMBON - YOS SUDARSO</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_4.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                             
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">AMBON - SLAMET RIYADI</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                              
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">SORONG</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">BITUNG</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MANADO</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">NUNUKAN</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">TERNATE</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_10.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                               
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">TARAKAN</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_11.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                              
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">KENDARI</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                              
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
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
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">PARE-PARE</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">MONITORING ROOM</span>
										
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436<hr>Muhammad Nasrullah, S.Kom" data-html="true"></span>
													</div>
									
								</div>
							</div>
							<div class="kt-widget__body" style="padding-bottom:0 !important">
                             
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Server
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												NVR CCTV
        											</div>
													
        										</div>

        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
												
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV
        											</div>
        										</div>
        									</div>

        								</div>
                      </div>
					  <div class="col-md-5" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.123</span>
													</div>


<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
									<div class="col-md-1" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
													<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>



													
													
													
												</div>
											</div>
                                    </div>
					 
					  
					  
                   

                                </div>


							</div><br>
							<div class="kt-widget__footer">
								<div class="kt-widget__wrapper" style="padding:10px 20px">
									<div class="kt-widget__section">
										<div class="kt-widget__blog">
											<i class="fa fa-clock"></i>
											<a href="#" class="kt-widget__value kt-font-brand">10 Februari 2023 - 20:07:00 WITA</a>
										</div>
									</div>
									<div class="kt-widget__section">
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa fa-eye"></i>LIHAT CCTV</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>

			

			</div>
						
						
						
						
						
					</div>
					<div>&nbsp;</div>
					<div>&nbsp;</div>
					

								
									
								
								
									
									
								

						<?php require '../layouts/footer.php' ?>
						<script src="https://code.highcharts.com/highcharts.js"></script>
						<script src="https://code.highcharts.com/modules/exporting.js"></script>
						<script src="https://code.highcharts.com/modules/export-data.js"></script>
						<script src="https://code.highcharts.com/modules/accessibility.js"></script>
						<script src="../assets/js/chart/highchart.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-kendaraan-masukvskeluar.js" type="text/javascript"></script>
						<?php require '../layouts/foot.php' ?>
						<?php require './layouts/script.php' ?>
						<script>
$(document).ready(function(){
$(".btn-collapse-onboarding").click(function(){
	$(".show-large-tb").hide(1000);
});
$("#btnShowHide").click(function(){
	$("#divShowHide").toggle();
});
$("#btnShowHide2").click(function(){
	$("#divShowHide2").toggle();
});
$("#btnShowHide3").click(function(){
	$("#divShowHide3").toggle();
});
$("#btnShowHide4").click(function(){
	$("#divShowHide4").toggle();
});
$("#btnShowHide5").click(function(){
	$("#divShowHide5").toggle();
});
$("#btnShowHide6").click(function(){
	$("#divShowHide6").toggle();
});
$("#btnShowHide7").click(function(){
	$("#divShowHide7").toggle();
});
$("#btnShowHide8").click(function(){
	$("#divShowHide8").toggle();
});
});
</script>
