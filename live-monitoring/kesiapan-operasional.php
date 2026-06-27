<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-5.16081,119.395713),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Dashboard Monitoring
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Kesiapan Operasional </span>
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
                            <a href="cetak-kesiapan-operasional.php" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">PDF</span>
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
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">A simple primary alert—check it out!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

            <!--begin::Filter-->
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
                             
							
							<div class="col-lg-1">
                                <label>Gate :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected>1</option>
                                      <option value="1">2</option>
                                      <option value="1">3</option>
                                      <option value="1">4</option>
									  <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Jalur :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected>Masuk</option>
                                      <option value="1">Keluar</option>
									  <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Nama Jalur :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected>Mobil - 1</option>
                                      <option value="1">Mobil - 2</option>
                                      <option value="1">Motor - 1</option>
                                      <option value="1">Motor - 2</option>
									  <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>SPV :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Muhammad Nasrullah, S.Kom</option>
                                      <option value="1">Muhammad Ramadhan, S.T</option>
                                      <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Normal</option>
                                      <option value="1">Menunggu</option>
                                      <option value="2">Keseluruhan</option>
                                                                           
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
            <!--begin::End-->
<div class="row">
								
								
								
								
								
								<div class="col-xl-12">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label" style="margin-left:55px;">
												<h3 class="kt-portlet__head-title">
													KESIAPAN OPERASIONAL
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar" style="margin-right:55px;">
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
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Tahun ini</span>
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
																Ready
															</span>

															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">85</span>
															
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Maintenance
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">0</span>
															</span>
														</div>
														
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Offline
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">0</span>
															</span>
														</div>
														
														
														
														
														
														
													</div>
													
													
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>

							<!--End::Section-->

							

						
						</div>
			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="3" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="3" bgcolor="#f7fcff">LOKASI</th>
											  <th width="1%" rowspan="3" bgcolor="#f7fcff">GATE</th>
											  <th colspan="8" bgcolor="#0e62ae" style="color:#fff;">KENDARAAN MASUK</th>
											  <th colspan="8" bgcolor="#217c7c" style="color:#fff;">KENDARAAN KELUAR</th>
											  <th width="1%" rowspan="3" bgcolor="#f7fcff">SPV</th>
											  <th width="1%" rowspan="3" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th colspan="4" bgcolor="#5867dd" style="color:#fff;">MOBIL</th>
											  <th colspan="4" bgcolor="#b400ff" style="color:#fff;">MOTOR</th>
											  <th colspan="4" bgcolor="#5867dd" style="color:#fff;">MOBIL</th>
											  <th colspan="4" bgcolor="#b400ff" style="color:#fff;">MOTOR</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" >Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
						                  </tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" style="text-align:right">1</td>
												<td rowspan="2" nowrap style="text-align:left">Makassar</td>
												<td nowrap style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_masuk_mobil_gate_1" data-html="true" >Ready</button></td>
												<td class="text-center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_jalur_masuk_mobil_2_gate_1" data-html="true" >Offline</button></td>
												<td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_jalur_masuk_motor_gate_1" data-html="true">Maintenance</span></td>
												<td class="text-center"><span class="btn btn-outline-warning btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_masuk_motor_2_gate_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_lihat_jalur_keluar_mobil_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_lihat_jalur_keluar_mobil_2" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_lihat_jalur_keluar_motor_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_lihat_jalur_keluar_motor_2" data-html="true" >Ready</button></td>
												<td rowspan="2" nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_1.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												     <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
										 
<tr>
												<td nowrap style="text-align:center"><span class="btn btn-twitter btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_masuk_mobil_1" data-html="true" >Ready</button></td>
												<td class="text-center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_masuk_mobil_2" data-html="true" >Ready</button></td>
												<td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_masuk_motor_1" data-html="true" >Ready</button></td>
												<td class="text-center"><span class="btn btn-outline-warning btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_masuk_motor_2" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_keluar_mobil_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_keluar_mobil_2" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_keluar_motor_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_keluar_motor_2" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												   <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
</tbody>										<tr>
												<td rowspan="3" style="text-align:right">2</td>
												<td rowspan="3" nowrap style="text-align:left"">Balikpapan</td>
												<td nowrap style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_masuk_motor_gate_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_lihat_jalur_keluar_motor_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td rowspan="3" nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_2.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												     <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
										 
<tr>
												<td nowrap style="text-align:center"><span class="btn btn-twitter btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_masuk_mobil_1" data-html="true" >Ready</button></td>
												<td class="text-center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_2_lihat_jalur_masuk_mobil_2" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												   <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
  <td nowrap style="text-align:center"><span class="btn btn-instagram btn-sm">3</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_3_lihat_jalur_keluar_mobil_1" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_gate_3_lihat_jalur_keluar_mobil_2" data-html="true" >Ready</button></td>

  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
  <tr>
												<td rowspan="2" style="text-align:right">3</td>
												<td rowspan="2" nowrap style="text-align:left"">Samarinda</td>
												<td nowrap style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_1_lihat_jalur_masuk_mobil_1" data-html="true" >Ready</button></td>
												<td class="text-center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_1_lihat_jalur_masuk_mobil_2" data-html="true" >Ready</button></td>
												<td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_1_lihat_jalur_masuk_motor_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_1_lihat_jalur_keluar_mobil_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_1_lihat_jalur_keluar_mobil_2" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_1_lihat_jalur_keluar_motor_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td rowspan="2" nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												     <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
										 
<tr>
												<td nowrap style="text-align:center"><span class="btn btn-twitter btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_2_lihat_jalur_masuk_mobil_1" data-html="true" >Ready</button></td>
												<td class="text-center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_2_lihat_jalur_masuk_mobil_2" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_2_lihat_jalur_keluar_mobil_1" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_smd_gate_2_lihat_jalur_keluar_mobil_2" data-html="true" >Ready</button></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												   <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
  <td style="text-align:right">4</td>
  <td nowrap style="text-align:left">Ambon - Yos Sudarso</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">5</td>
  <td nowrap style="text-align:left"">Ambon - Slamet Riyadi</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td rowspan="2" style="text-align:right">6</td>
  <td rowspan="2" nowrap style="text-align:left">Sorong</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td rowspan="2" nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-twitter btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td rowspan="3" style="text-align:right">7</td>
  <td rowspan="3" nowrap style="text-align:left">Bitung</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td rowspan="3" nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_7.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-twitter btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td class="text-center"><span class="btn btn-outline-primary btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td nowrap style="text-align:center"><span class="btn btn-instagram btn-sm">3</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td rowspan="3" style="text-align:right">8</td>
  <td rowspan="3" nowrap style="text-align:left">Manado</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td rowspan="3" nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_8.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-twitter btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td nowrap style="text-align:center"><span class="btn btn-instagram btn-sm">3</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">9</td>
  <td nowrap style="text-align:left">Nunukan</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_9.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">10</td>
  <td nowrap style="text-align:left">Ternate</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">11</td>
  <td nowrap style="text-align:left">Tarakan</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_11.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">12</td>
  <td nowrap style="text-align:left">Kendari</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_12.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td rowspan="2" style="text-align:right">13</td>
  <td rowspan="2" nowrap style="text-align:left">Pare - Pare</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-linkedin btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td class="text-center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td rowspan="2" nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="082244444436&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_13.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-twitter btn-sm">2</span></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-primary btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-outline-warning btn-sm">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal_jalur_keluar" data-html="true" >Ready</button></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
									</table>
                    <!--end: Datatable -->

                    <!-- begin:: pageline -->
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
                    <!-- end:: pageline -->

                </div>
            </div>
			<!--begin::Modal 1-->
									<div class="modal fade" id="modal_jalur_keluar_offline" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										</div>

										
											<div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-youtube btn-sm">KELUAR</span>
<span class="btn btn-youtube btn-sm">MOBIL - 1</span>
										</a>
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001&lt;hr&gt;Umum&lt;hr&gt;Umum&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"></span>
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
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-danger btn-sm">Offline</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
        											</div>
													
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
					  <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
					  <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Controller
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Plat
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Record
        											</div>
        										</div>
												
        									</div>
        								</div>
                      </div>
					  
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													
													<div class="kt-widget6__item">
														<span>IP Controller </span>
														<span>192.168.0.123</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.124</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.125</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.126</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV Record</span>
														<span>192.168.0.127</span>
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
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa flaticon-eye"></i>LIHAT CCTV</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Widget -->
					
				<!--end:: Portlet-->
			</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal Jalur Keluar-->
									<div class="modal fade" id="modal_jalur_keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											<div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-youtube btn-sm">KELUAR</span>
<span class="btn btn-youtube btn-sm">MOBIL - 1</span>
										</a>
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001&lt;hr&gt;Umum&lt;hr&gt;Umum&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"></span>
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
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
        											</div>
													
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
					  <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
					  <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Controller
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Plat
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Record
        											</div>
        										</div>
												
        									</div>
        								</div>
                      </div>
					  
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													
													<div class="kt-widget6__item">
														<span>IP Controller </span>
														<span>192.168.0.123</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.124</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.125</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.126</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV Record</span>
														<span>192.168.0.127</span>
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
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa flaticon-eye"></i>LIHAT CCTV</a>
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
								</div>
								</div>
								</div>
							<!--End::Modal Modal Registrasi Sticker-->
							<div class="modal fade" id="modal_jalur_keluar_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											<div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-youtube btn-sm">KELUAR</span>
<span class="btn btn-youtube btn-sm">MOBIL - 2</span>
										</a>
<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">READY</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
                                    <div class="kt-widget6__item">
														
														<span><img src="../assets/img/users/300_8.jpg" alt="image" style="max-width:80px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001&lt;hr&gt;Umum&lt;hr&gt;Umum&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"></span>
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
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
        											</div>
													
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
					  <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
					  <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Controller
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Plat
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Record
        											</div>
        										</div>
												
        									</div>
        								</div>
                      </div>
					  
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													
													<div class="kt-widget6__item">
														<span>IP Controller </span>
														<span>192.168.0.123</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.124</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.125</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.126</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV Record</span>
														<span>192.168.0.127</span>
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
										<a href="see-cctv.php" class="btn btn-label-brand btn-sm"><i class="fa flaticon-eye"></i>LIHAT CCTV</a>
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
								</div>
								</div>
								</div>
							<!--begin::Modal Jalur Masuk Offline-->
									<div class="modal fade" id="modal_jalur_offline" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											<div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-primary btn-sm">MASUK</span>
<span class="btn btn-primary btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-danger btn-sm">Offline</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
					  <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
					  <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Controller
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Plat
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Record
        											</div>
        										</div>
												
        									</div>
        								</div>
                      </div>
					  
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													
													<div class="kt-widget6__item">
														<span>IP Controller </span>
														<span>192.168.0.123</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.124</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.125</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.126</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV Record</span>
														<span>192.168.0.127</span>
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
										<a href="see-cctv.php" class="btn btn-brand btn-sm"><i class="fa flaticon-eye"></i>LIHAT CCTV</a>
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
								</div>
								</div>
								</div>
							<!--End::Modal Ubah Sticker-->
							<!--begin::Modal Lihat Jalur Masuk-->
									<div class="modal fade" id="modal_lihat_jalur_masuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-primary btn-sm">MASUK</span>
<span class="btn btn-primary btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Hub / Switch
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												PC
        											</div>
        										</div>
        									</div>
        								</div>
                      </div>
					  <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
												<div class="kt-widget6__item">
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
													
													
													
												</div>
											</div>
                                    </div>
					  <div class="col-md-6">
                                        <div class="kt-timeline-v2">
        									<div class="kt-timeline-v2__items">
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Dispenser Controller
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Plat
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Ready</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												CCTV Record
        											</div>
        										</div>
												
        									</div>
        								</div>
                      </div>
					  
                    <div class="col-md-6" style="border-left:1px solid #eee">
											<div class="kt-widget6">
												<div class="kt-widget6__body">
													
													<div class="kt-widget6__item">
														<span>IP Controller </span>
														<span>192.168.0.123</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.124</span>
													</div>&nbsp;
													<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.125</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV</span>
														<span>192.168.0.126</span>
													</div>
													<div class="kt-widget6__item">
														<span>IP CCTV Record</span>
														<span>192.168.0.127</span>
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
										<a href="see-cctv.php" class="btn btn-brand btn-sm"><i class="fa flaticon-eye"></i>LIHAT CCTV</a>
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  <div class="modal fade" id="modal_jalur_masuk_mobil_gate_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  <div class="modal fade" id="modal_jalur_masuk_mobil_2_gate_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOBIL - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_jalur_masuk_motor_gate_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOTOR - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_jalur_masuk_motor_2_gate_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOTOR - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_lihat_jalur_keluar_mobil_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_lihat_jalur_keluar_mobil_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_lihat_jalur_keluar_motor_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOTOR - 1</span>
										</a>
<a href="#" class="kt-widget__title">
											<span class="btn btn-danger btn-sm">OFFLINE</span>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-danger btn-sm">Offline</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
														<a href="report-maintenance-add.php" class="btn btn-label-brand btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Proses" data-html="true"><i class="la la-clock-o"></i></a>
														
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
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_lihat_jalur_keluar_motor_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOTOR - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_2_lihat_jalur_masuk_mobil_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_2_lihat_jalur_masuk_mobil_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOBIL - 2</span>
										</a>
<a href="#" class="kt-widget__title">
											<span class="btn btn-danger btn-sm">OFFLINE</span>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-danger btn-sm">Offline</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-danger"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
														<a href="report-maintenance-add.php" class="btn btn-label-brand btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Proses" data-html="true"><i class="la la-clock-o"></i></a>
														
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
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_2_lihat_jalur_masuk_motor_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOTOR - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_2_lihat_jalur_masuk_motor_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOTOR - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_2_lihat_jalur_keluar_mobil_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_2_lihat_jalur_keluar_mobil_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_2_lihat_jalur_keluar_motor_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOTOR - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_2_lihat_jalur_keluar_motor_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOTOR - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>
								</div>

						<!-- end:: Content -->
</div>
</div>
<div class="modal fade" id="modal_gate_3_lihat_jalur_keluar_mobil_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">BALIKPAPAN</span><hr>
										<span class="btn btn-instagram btn-sm">GATE - 3</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_gate_3_lihat_jalur_keluar_mobil_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">BALIKPAPAN</span><hr>
										<span class="btn btn-instagram btn-sm">GATE - 3</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
 
<!-- Samarinda -->
<div class="modal fade" id="modal_smd_gate_1_lihat_jalur_masuk_mobil_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  <div class="modal fade" id="modal_smd_gate_1_lihat_jalur_masuk_mobil_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOBIL - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_1_lihat_jalur_masuk_motor_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOTOR - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_1_lihat_jalur_masuk_motor_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOTOR - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_1_lihat_jalur_keluar_mobil_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_1_lihat_jalur_keluar_mobil_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_1_lihat_jalur_keluar_motor_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOTOR - 1</span>
										</a>
<a href="#" class="kt-widget__title">
											<span class="btn btn-danger btn-sm">OFFLINE</span>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-danger btn-sm">Offline</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
														<a href="report-maintenance-add.php" class="btn btn-label-brand btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Proses" data-html="true"><i class="la la-clock-o"></i></a>
														
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
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_1_lihat_jalur_keluar_motor_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOTOR - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_2_lihat_jalur_masuk_mobil_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_2_lihat_jalur_masuk_mobil_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOBIL - 2</span>
										</a>
<a href="#" class="kt-widget__title">
											<span class="btn btn-danger btn-sm">OFFLINE</span>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-danger btn-sm">Offline</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-danger"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
														<a href="report-maintenance-add.php" class="btn btn-label-brand btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Proses" data-html="true"><i class="la la-clock-o"></i></a>
														
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
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_2_lihat_jalur_masuk_motor_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOTOR - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_2_lihat_jalur_masuk_motor_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-twitter btn-sm">MASUK</span>
<span class="btn btn-twitter btn-sm">MOTOR - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Masuk
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_2_lihat_jalur_keluar_mobil_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_2_lihat_jalur_keluar_mobil_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">SAMARINDA</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOBIL - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_2_lihat_jalur_keluar_motor_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOTOR - 1</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
<div class="modal fade" id="modal_smd_gate_2_lihat_jalur_keluar_motor_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA KESIAPAN PERANGKAT & SYSTEM</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
											 <div class="col-xl-12">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										<span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">MAKASSAR</span><hr>
										<span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="btn btn-label-warning btn-sm">KELUAR</span>
<span class="btn btn-label-warning btn-sm">MOTOR - 2</span>
										</a>
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
                                <br>
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
        												Dispenser Keluar
        											</div>
        										</div>
        										<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Printer
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
        											<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Payment Reader
        											</div>
													
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-brand"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Scanner
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
        												Dispenser Controller
        											</div>
        										</div>
												<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Barrier Gate Controller
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												Member Reader
        											</div>
        										</div>
<div class="kt-timeline-v2__item">
        											<span class="kt-timeline-v2__item-time"><span class="btn btn-success btn-sm">Online</span></span>
        											<div class="kt-timeline-v2__item-cricle">
        												<i class="fa fa-genderless kt-font-success"></i>
        											</div>
                              <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
        												ANPR Camera
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
														<span>IP Dispenser </span>
														<span>192.168.0.121</span>
													</div>
													
													<div class="kt-widget6__item">
														<span>Sisa Print Karcis</span>
														<span>50</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>&nbsp;</span>
														<span>&nbsp;</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Address</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Controller</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Barrier Gate</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP Member Reader</span>
														<span>192.168.0.122</span>
													</div>
<div class="kt-widget6__item">
														<span>IP ANPR</span>
														<span>192.168.0.122</span>
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
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-4px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-5px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
														<a href="#" class="btn btn-label-danger btn-icon btn-sm" data-toggle="modal" data-target="#modal_maintenance" data-original-title="Maintenance" data-html="true"><i class="la la-bell"></i></a>
														
													</div>
<div class="kt-widget6__item" style="margin-top:-3px;">
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
							<!--End::Modal Lihat Jalur Masuk-->
                    
									<!--end: Datatable -->
								</div>
								</div>

						<!-- end:: Content -->
</div>
</div>
</div>
<!-- End Samarinda -->
						



                
       
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
$(document).READY(function(){
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
