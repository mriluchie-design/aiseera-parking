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
                    Laporan
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Produksi </span>
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
                            
								
								
								
								<div class="col-lg-2">
                                <label>Kategori :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Reguler</option>
                                      <option value="2">Member</option>
                                      <option value="2">Pass Kade</option>
                                      <option value="2">Kendaraan Berangkat</option>
                                      <option value="2">Muatan Kapal</option>
                                      <option value="2">Free Pass</option>
                                      <option value="2">Denda</option>
									  <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
								<div class="col-lg-2">
                                <label>Jenis :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Motor</option>
                                      <option value="1">Mobil</option>
                                      <option value="1">Pegawai/Instansi/Others</option>
                                      <option value="2">Sepeda Motor</option>
                                      <option value="2">Sedan/Jeep/Pick Up</option>
                                      <option value="2">Truck/Tronton/Trailer</option>
                                      <option value="2">Truck</option>
                                      <option value="2">Tronton</option>
                                      <option value="2">Gerobak</option>
									  <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
								<div class="col-lg-2">
                                <label class="">Tanggal Produksi :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Parkir</option>
                                      <option value="2">Keluar</option>
                                                                           
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
											<div class="kt-portlet__head-label" style="margin-left:40px;">
												<h3 class="kt-portlet__head-title">
													Rekap Produksi
												</h3>
											</div>
											<div class="kt-portlet__head-label" style="margin-right:40px;">
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
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.96 24"><g id="F578_Add_car_more_plus_vehicles" data-name="F578, Add, car, more, plus, vehicles"><path d="M20,15.05a1.48,1.48,0,1,1-1.48,1.48A1.48,1.48,0,0,1,20,15.05Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M4,15.05a1.48,1.48,0,1,1-1.47,1.48A1.48,1.48,0,0,1,4,15.05Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M6,20v1.75a1.76,1.76,0,1,1-3.51,0V20Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M21.5,20v1.75a1.76,1.76,0,1,1-3.51,0V20Z" transform="translate(-0.02)" style="fill:#fff"/><rect x="7.99" y="17.01" width="7.99" height="3" style="fill:#a1c6e9"/><path d="M23.5,13v7H16V17H8v3H.5V13h23Zm-2,3.51A1.52,1.52,0,1,0,20,18.05,1.56,1.56,0,0,0,21.5,16.53Zm-16,0A1.52,1.52,0,1,0,4,18.05,1.55,1.55,0,0,0,5.53,16.53Z" transform="translate(-0.02)" style="fill:#a1c6e9"/><path d="M16.51,6.55A3.52,3.52,0,0,0,20,10.06a3.37,3.37,0,0,0,1.43-.32l1,3.32h-21L5.09,1.92A1.9,1.9,0,0,1,6.93.6H17.15A1.93,1.93,0,0,1,19,1.92l.4,1.23A3.41,3.41,0,0,0,16.51,6.55Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M20,10a3.52,3.52,0,0,1-3.52-3.51,3.48,3.48,0,0,1,2.84-3.44A3.55,3.55,0,0,1,20,3a3.49,3.49,0,0,1,1.47,6.66A3.16,3.16,0,0,1,20,10Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M2.54,20.53h-2A.53.53,0,0,1,0,20V13a.53.53,0,0,1,.52-.52h1a.52.52,0,1,1,0,1H1v6H2.54a.53.53,0,0,1,.52.52A.6.6,0,0,1,2.54,20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M8,20.53H6a.52.52,0,0,1,0-1H8a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M18,20.53H16a.52.52,0,0,1,0-1h2a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M23.5,20.53h-2a.52.52,0,0,1,0-1H23v-6h-.52a.52.52,0,0,1,0-1h1A.53.53,0,0,1,24,13v7A.53.53,0,0,1,23.5,20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M4.25,24A2.23,2.23,0,0,1,2,21.76V20a.53.53,0,0,1,.52-.52H6.05a.53.53,0,0,1,.52.52v1.75A2.33,2.33,0,0,1,4.25,24ZM3,20.53v1.23a1.24,1.24,0,1,0,2.48,0V20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M19.75,24a2.24,2.24,0,0,1-2.24-2.24V20a.53.53,0,0,1,.52-.52h3.51a.53.53,0,0,1,.52.52v1.75A2.35,2.35,0,0,1,19.75,24Zm-1.24-3.47v1.23a1.24,1.24,0,1,0,2.48,0V20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M4,18.53a2,2,0,1,1,2-2A2,2,0,0,1,4,18.53Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,4,15.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M20,18.53a2,2,0,1,1,2-2A2,2,0,0,1,20,18.53Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,20,15.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M16,20.53H8A.53.53,0,0,1,7.49,20V17A.53.53,0,0,1,8,16.49h8a.53.53,0,0,1,.52.52v3A.53.53,0,0,1,16,20.53Zm-7.46-1h7v-2h-7Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M12,5a.53.53,0,0,1-.52-.52v-4a.52.52,0,1,1,1,0v4A.53.53,0,0,1,12,5Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M14,5H10a.52.52,0,0,1,0-1h4a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M22.5,13.54h-21a.49.49,0,0,1-.4-.2.56.56,0,0,1-.08-.44L4.61,1.72A2.41,2.41,0,0,1,6.93,0H17.11a2.45,2.45,0,0,1,2.32,1.68L19.83,3a.52.52,0,0,1-.32.63.52.52,0,0,1-.64-.32L18.47,2a1.45,1.45,0,0,0-1.36-1H6.89A1.45,1.45,0,0,0,5.53,2L2.22,12.54H21.78L21,9.9a.5.5,0,1,1,.95-.32l1,3.32a.44.44,0,0,1-.08.44A.48.48,0,0,1,22.5,13.54Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M20,10.54a4,4,0,0,1-.76-7.9A4.9,4.9,0,0,1,20,2.56a4,4,0,0,1,1.63,7.62A3.84,3.84,0,0,1,20,10.54Zm0-7a3,3,0,1,0,0,6,2.61,2.61,0,0,0,1.23-.28A3,3,0,0,0,23,6.55,3,3,0,0,0,20,3.55Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M20,8.55A.53.53,0,0,1,19.47,8V5a.52.52,0,0,1,1,0V8A.53.53,0,0,1,20,8.55Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M21.5,7h-3a.52.52,0,0,1,0-1h3a.53.53,0,0,1,.52.52A.56.56,0,0,1,21.5,7Z" transform="translate(-0.02)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Kendaraan Masuk
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500;" class="kt-nav__link">39</span>
															
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.96 24"><g id="F577_Car_delete_less_minus_vehicles" data-name="F577, Car, delete, less, minus, vehicles"><path d="M4,15.05a1.48,1.48,0,1,1-1.47,1.48A1.48,1.48,0,0,1,4,15.05Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M20,15.05a1.48,1.48,0,1,1-1.48,1.48A1.48,1.48,0,0,1,20,15.05Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M12,.56h5.11A1.93,1.93,0,0,1,19,1.88l.4,1.23a3.51,3.51,0,0,0,.68,7,3.37,3.37,0,0,0,1.43-.32l1,3.32h-21L5.09,1.92A1.9,1.9,0,0,1,6.93.6H12Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M6,20v1.75a1.76,1.76,0,1,1-3.51,0V20Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M21.5,20v1.75a1.76,1.76,0,1,1-3.51,0V20Z" transform="translate(-0.02)" style="fill:#fff"/><rect x="7.99" y="17.01" width="7.99" height="3" style="fill:#a1c6e9"/><path d="M23.5,13v7H16V17H8v3H.5V13h23Zm-2,3.51A1.52,1.52,0,1,0,20,18.05,1.56,1.56,0,0,0,21.5,16.53Zm-16,0A1.52,1.52,0,1,0,4,18.05,1.55,1.55,0,0,0,5.53,16.53Z" transform="translate(-0.02)" style="fill:#a1c6e9"/><path d="M20,10a3.52,3.52,0,0,1-3.52-3.51,3.48,3.48,0,0,1,2.84-3.44A3.55,3.55,0,0,1,20,3a3.49,3.49,0,0,1,1.47,6.66A3.16,3.16,0,0,1,20,10Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M2.54,20.53h-2A.53.53,0,0,1,0,20V13a.53.53,0,0,1,.52-.52h1a.52.52,0,1,1,0,1H1v6H2.54a.53.53,0,0,1,.52.52A.6.6,0,0,1,2.54,20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M8,20.53H6a.52.52,0,0,1,0-1H8a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M18,20.53H16a.52.52,0,0,1,0-1h2a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M23.5,20.53h-2a.52.52,0,0,1,0-1H23v-6h-.52a.52.52,0,0,1,0-1h1A.53.53,0,0,1,24,13v7A.53.53,0,0,1,23.5,20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M4.25,24A2.23,2.23,0,0,1,2,21.76V20a.53.53,0,0,1,.52-.52H6.05a.53.53,0,0,1,.52.52v1.75A2.33,2.33,0,0,1,4.25,24ZM3,20.53v1.23a1.24,1.24,0,1,0,2.48,0V20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M19.75,24a2.24,2.24,0,0,1-2.24-2.24V20a.53.53,0,0,1,.52-.52h3.51a.53.53,0,0,1,.52.52v1.75A2.35,2.35,0,0,1,19.75,24Zm-1.24-3.47v1.23a1.24,1.24,0,1,0,2.48,0V20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M4,18.53a2,2,0,1,1,2-2A2,2,0,0,1,4,18.53Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,4,15.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M20,18.53a2,2,0,1,1,2-2A2,2,0,0,1,20,18.53Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,20,15.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M16,20.53H8A.53.53,0,0,1,7.49,20V17A.53.53,0,0,1,8,16.49h8a.53.53,0,0,1,.52.52v3A.53.53,0,0,1,16,20.53Zm-7.46-1h7v-2h-7Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M12,5a.53.53,0,0,1-.52-.52v-4a.52.52,0,1,1,1,0v4A.53.53,0,0,1,12,5Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M14,5H10a.52.52,0,0,1,0-1h4a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M22.5,13.54h-21a.49.49,0,0,1-.4-.2.56.56,0,0,1-.08-.44L4.61,1.72A2.41,2.41,0,0,1,6.93,0H17.11a2.45,2.45,0,0,1,2.32,1.68L19.83,3a.52.52,0,0,1-.32.63.52.52,0,0,1-.64-.32L18.47,2a1.45,1.45,0,0,0-1.36-1H6.89A1.45,1.45,0,0,0,5.53,2L2.22,12.54H21.78L21,9.9a.5.5,0,1,1,.95-.32l1,3.32a.44.44,0,0,1-.08.44A.48.48,0,0,1,22.5,13.54Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M20,10.54a4,4,0,0,1-.76-7.9A4.9,4.9,0,0,1,20,2.56a4,4,0,0,1,1.63,7.62A3.84,3.84,0,0,1,20,10.54Zm0-7a3,3,0,1,0,0,6,2.61,2.61,0,0,0,1.23-.28A3,3,0,0,0,23,6.55,3,3,0,0,0,20,3.55Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M21.5,7h-3a.52.52,0,0,1,0-1h3a.53.53,0,0,1,.52.52A.56.56,0,0,1,21.5,7Z" transform="translate(-0.02)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Kendaraan Keluar
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">35</span>
															</span>
														</div>
														
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 23.96"><g id="B549_Car_Parking_Sign_Area" data-name="B549, Car, Parking, Sign, Area"><path d="M18.1.54V5h5.52V.54Z" transform="translate(-0.13 -0.02)" style="fill:#fff"/><path d="M21.22,2.7c.08,0,.12,0,.2-.08a.43.43,0,0,0,.08-.24c0-.24-.12-.36-.28-.36h-.48V2.7Zm0,.51H20.7V4h-.64V1.5h1.16a.87.87,0,0,1,.8.56.92.92,0,0,1-.16.91A.84.84,0,0,1,21.26,3.21Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M23.62,24H.65a.52.52,0,1,1,0-1h23a.52.52,0,0,1,.51.52A.58.58,0,0,1,23.62,24Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M18.82,15.1H1.89A1.21,1.21,0,0,0,.68,16.31v3.82a1.21,1.21,0,0,0,1.21,1.21H18.82A1.22,1.22,0,0,0,20,20.13V16.31A1.22,1.22,0,0,0,18.82,15.1Z" transform="translate(-0.13 -0.02)" style="fill:#fff"/><path d="M13.25,17.19a1,1,0,0,1,1.05,1A1.19,1.19,0,0,1,14,19a1,1,0,0,1-.75.3H7.47a1,1,0,0,1-1-1.05,1.19,1.19,0,0,1,.29-.75,1,1,0,0,1,.76-.3Z" transform="translate(-0.13 -0.02)" style="fill:#a1c6e9"/><path d="M3.82,17.19a1.05,1.05,0,1,1-1,1A1,1,0,0,1,3.82,17.19Z" transform="translate(-0.13 -0.02)" style="fill:#a1c6e9"/><path d="M16.89,17.19a1.05,1.05,0,1,1,0,2.1,1.05,1.05,0,0,1,0-2.1Z" transform="translate(-0.13 -0.02)" style="fill:#a1c6e9"/><rect x="2.64" y="21.36" width="2.09" height="2.1" style="fill:#a1c6e9"/><rect x="15.71" y="21.36" width="2.09" height="2.1" style="fill:#a1c6e9"/><polygon points="16.76 6.15 18.35 15.08 2.1 15.08 3.69 6.15 16.76 6.15" style="fill:#a1c6e9"/><path d="M2.77,21.88H1.89A1.77,1.77,0,0,1,.13,20.13V16.31a1.78,1.78,0,0,1,1.76-1.76h.34a.55.55,0,0,1,0,1.09H1.89a.74.74,0,0,0-.71.71v3.82a.74.74,0,0,0,.71.71h.88a.55.55,0,0,1,.55.54A.62.62,0,0,1,2.77,21.88Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M15.85,21.88h-11a.54.54,0,1,1,0-1.08h11a.54.54,0,1,1,0,1.08Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M18.82,21.88h-.88a.55.55,0,0,1-.54-.54.52.52,0,0,1,.54-.5h.88a.73.73,0,0,0,.71-.71V16.31a.73.73,0,0,0-.71-.71h-.33a.55.55,0,1,1,0-1.09h.33a1.78,1.78,0,0,1,1.76,1.76v3.81A1.78,1.78,0,0,1,18.82,21.88Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M18.49,15.6H2.23a.71.71,0,0,1-.42-.17A.83.83,0,0,1,1.68,15l1.6-8.92a.5.5,0,0,1,.5-.42H16.89a.51.51,0,0,1,.51.42L19,15v.13A.54.54,0,0,1,18.49,15.6Zm-15.63-1h15L16.47,6.68H4.24Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M4.87,24a.56.56,0,0,1-.55-.54v-1.6h-1v1.6a.55.55,0,0,1-1.09,0v-2.1a.55.55,0,0,1,.54-.54h2.1a.55.55,0,0,1,.54.54v2.1A.55.55,0,0,1,4.87,24Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M17.94,24a.55.55,0,0,1-.54-.54v-1.6h-1v1.6a.55.55,0,0,1-1.09,0v-2.1a.55.55,0,0,1,.54-.54h2.1a.55.55,0,0,1,.54.54v2.1A.49.49,0,0,1,17.94,24Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M3.82,19.79A1.59,1.59,0,1,1,5.41,18.2,1.64,1.64,0,0,1,3.82,19.79Zm0-2.09a.54.54,0,1,0,0,1.08.56.56,0,0,0,.55-.54A.59.59,0,0,0,3.82,17.7Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M16.89,19.79a1.59,1.59,0,1,1,1.6-1.59A1.59,1.59,0,0,1,16.89,19.79Zm0-2.09a.54.54,0,1,0,.55.54A.55.55,0,0,0,16.89,17.7Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M8,11.41a.52.52,0,0,1-.38-.17.53.53,0,0,1,0-.75l2.64-2.64a.54.54,0,0,1,.76,0,.53.53,0,0,1,0,.75L8.39,11.24A.5.5,0,0,1,8,11.41Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M9.56,13.51a.56.56,0,0,1-.38-.17.54.54,0,0,1,0-.76l2.64-2.64a.54.54,0,0,1,.76.76L9.94,13.34A.54.54,0,0,1,9.56,13.51Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M13.25,19.79H7.47a1.6,1.6,0,0,1-1.6-1.59,1.66,1.66,0,0,1,.47-1.13,1.87,1.87,0,0,1,1.13-.42h5.78a1.59,1.59,0,0,1,1.59,1.59,1.7,1.7,0,0,1-.46,1.13A1.9,1.9,0,0,1,13.25,19.79ZM7.47,17.7a.53.53,0,0,0-.38.16.66.66,0,0,0-.17.38.55.55,0,0,0,.55.54h5.78a.55.55,0,0,0,.38-.16.65.65,0,0,0,.16-.38.55.55,0,0,0-.54-.54Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M21.1,24a.53.53,0,0,1-.52-.52V5a.52.52,0,0,1,1,0V23.5A.52.52,0,0,1,21.1,24Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/><path d="M23.62,5.53H18.1A.53.53,0,0,1,17.59,5V.54A.53.53,0,0,1,18.1,0h5.52a.52.52,0,0,1,.51.52V5A.58.58,0,0,1,23.62,5.53Zm-5-1H23.1V1H18.62Z" transform="translate(-0.13 -0.02)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Sedang Parkir
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">70</span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g id="F544_Car_service_wash" data-name="F544, Car, service, wash"><polygon points="23.48 0.51 23.48 2.49 21.96 2.49 19.97 2.49 11.98 2.49 3.99 2.49 2 2.49 0.52 2.49 0.52 0.51 23.48 0.51" style="fill:#a1c6e9"/><rect x="19.97" y="2.49" width="2" height="20.76" style="fill:#a1c6e9"/><path d="M18,19v.87a.87.87,0,0,1-.2.16,1.64,1.64,0,0,1-.92.35H7.13a1.94,1.94,0,0,1-1-.39s-.12-.08-.16-.12V19H6V17c0-.59.72-1.22,1.48-1.3h0v0l.32.24H16l.48-.28A1.54,1.54,0,0,1,18,17v2h0S18,19,18,19Zm-2-.79a.75.75,0,0,0-.76-.75.75.75,0,1,0,.76.75Zm-6.47,0a.75.75,0,0,0-.75-.75.75.75,0,1,0,0,1.5A.75.75,0,0,0,9.52,18.24Z" transform="translate(-0.02 -0.21)" style="fill:#a1c6e9"/><path d="M17.79,20.06A.1.1,0,0,0,18,20a1.93,1.93,0,0,1-1.68,1.86H7.69A1.94,1.94,0,0,1,6,20H6c0,.08.08.08.16,0a1.94,1.94,0,0,0,1,.39h9.74A1.66,1.66,0,0,0,17.79,20.06Z" transform="translate(-0.02 -0.21)" style="fill:#a1c6e9"/><path d="M16.07,12.9l.44,2.81-.6.28H7.81l-.32-.24.44-2.81c0-.71.88-1.3,2-1.3h4.2C15.19,11.6,16.07,12.19,16.07,12.9Z" transform="translate(-0.02 -0.21)" style="fill:#fff"/><rect x="14.34" y="21.67" width="1.56" height="1.54" style="fill:#a1c6e9"/><path d="M15.23,17.53a.75.75,0,0,1,.76.75.7.7,0,0,1-.76.71.72.72,0,0,1-.75-.75A.77.77,0,0,1,15.23,17.53Z" transform="translate(-0.02 -0.21)" style="fill:#fff"/><path d="M13.52,6.65v.48h-3V6.62A1.51,1.51,0,0,1,12,5.11,1.56,1.56,0,0,1,13.52,6.65Z" transform="translate(-0.02 -0.21)" style="fill:#fff"/><rect x="8.07" y="21.67" width="1.56" height="1.54" style="fill:#a1c6e9"/><path d="M8.77,17.53a.75.75,0,0,1,.75.75.72.72,0,0,1-.75.71A.75.75,0,0,1,8,18.24.72.72,0,0,1,8.77,17.53Z" transform="translate(-0.02 -0.21)" style="fill:#fff"/><rect x="2" y="2.49" width="2" height="20.76" style="fill:#a1c6e9"/><path d="M4,23.93a.52.52,0,0,1-.52-.51V2.7a.52.52,0,0,1,1,0V23.46A.52.52,0,0,1,4,23.93Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M2,23.93a.52.52,0,0,1-.52-.51V2.7a.52.52,0,0,1,1,0V23.46A.52.52,0,0,1,2,23.93Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M23.5,3.18H22a.53.53,0,0,1-.52-.52A.52.52,0,0,1,22,2.15h1V1.2H1v1H20a.51.51,0,1,1,0,1H.54A.52.52,0,0,1,0,2.7v-2A.53.53,0,0,1,.54.21h23A.53.53,0,0,1,24,.72v2A.59.59,0,0,1,23.5,3.18Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M22,23.93a.52.52,0,0,1-.52-.51V3.18h-1V23.46a.52.52,0,0,1-1,0V2.7A.52.52,0,0,1,20,2.19h2a.52.52,0,0,1,.52.51V23.46A.45.45,0,0,1,22,23.93Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M9.64,23.93a.52.52,0,0,1-.52-.51V21.88a.52.52,0,0,1,1,0v1.54A.52.52,0,0,1,9.64,23.93Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M8.09,23.93a.52.52,0,0,1-.52-.51V21.88a.52.52,0,0,1,1,0v1.54A.52.52,0,0,1,8.09,23.93Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M15.91,23.93a.52.52,0,0,1-.52-.51V21.88a.52.52,0,0,1,1,0v1.54A.55.55,0,0,1,15.91,23.93Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M14.36,23.93a.52.52,0,0,1-.52-.51V21.88a.52.52,0,0,1,1,0v1.54A.55.55,0,0,1,14.36,23.93Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M15.91,22.39H7.73A2.42,2.42,0,0,1,5.53,20a.77.77,0,0,1,.12-.4A.46.46,0,0,1,6,19.47a.73.73,0,0,1,.24.07.55.55,0,0,1,.32.2.48.48,0,0,1,0,.56,1.29,1.29,0,0,0,1.12,1.06h8.54a1.29,1.29,0,0,0,1.12-1.06.54.54,0,0,1,0-.64.38.38,0,0,1,.36-.15.55.55,0,0,1,.36,0,.43.43,0,0,1,.32.51,2.4,2.4,0,0,1-2.2,2.29l-.32.08Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M7.81,16.46a.58.58,0,0,1-.28-.08l-.32-.24a.44.44,0,0,1-.2-.47v0l.44-2.77a2.24,2.24,0,0,1,2.47-1.78h4.2a2.24,2.24,0,0,1,2.47,1.78L17,15.63a.52.52,0,0,1-.24.51l-.48.28a.57.57,0,0,1-.24.08H16a.53.53,0,0,1-.52-.51.56.56,0,0,1,.48-.52l0,0L15.55,13V12.9c0-.39-.63-.83-1.47-.83H9.88c-.83,0-1.47.44-1.47.83V13L8,15.51l.08,0a.46.46,0,0,1,.12.67A.44.44,0,0,1,7.81,16.46Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M16.87,20.93H7.05a2.18,2.18,0,0,1-1.2-.52c-.08,0-.12-.11-.2-.15a.6.6,0,0,1-.16-.36V17a2,2,0,0,1,2-1.77,1.15,1.15,0,0,1,.36.07l0,0,.16.16h7.78l.52-.2a.51.51,0,0,1,.24,0,2.05,2.05,0,0,1,2,1.78v2.93a.49.49,0,0,1-.16.36,1,1,0,0,1-.24.19A2.75,2.75,0,0,1,17,21S16.91,20.93,16.87,20.93Zm-9.7-1h9.7a1.31,1.31,0,0,0,.64-.28V17a1.08,1.08,0,0,0-.92-.79l-.48.2a.36.36,0,0,1-.2,0H7.81a.45.45,0,0,1-.32-.12l-.12-.08c-.48.12-.84.52-.84.75V19.7A1.53,1.53,0,0,0,7.17,19.94Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M8.77,19.51A1.23,1.23,0,1,1,10,18.28,1.27,1.27,0,0,1,8.77,19.51Zm0-1.51a.24.24,0,1,0,.24.24A.26.26,0,0,0,8.77,18Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M15.23,19.51a1.23,1.23,0,1,1,1.24-1.23A1.24,1.24,0,0,1,15.23,19.51Zm0-1.51a.24.24,0,0,0,0,.48.26.26,0,0,0,.24-.24C15.51,18.12,15.39,18,15.23,18Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M23.5,23.93H.54a.51.51,0,1,1,0-1h23a.52.52,0,0,1,.52.51A.58.58,0,0,1,23.5,23.93Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M12,5.15a.53.53,0,0,1-.52-.51v-2a.52.52,0,0,1,1,0v2A.53.53,0,0,1,12,5.15Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M13.52,7.64A.52.52,0,0,1,13,7.13V6.62a1,1,0,0,0-2,0v.51a.52.52,0,0,1-1,0V6.62a2,2,0,0,1,4,0v.51A.46.46,0,0,1,13.52,7.64Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M15,7.64H9a.51.51,0,1,1,0-1h6a.51.51,0,0,1,0,1Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M8.53,9.62a.49.49,0,0,1-.36-.16.5.5,0,0,1,0-.71l.52-.51A.5.5,0,1,1,9.4,9l-.51.51A.72.72,0,0,1,8.53,9.62Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M7,11.08a.52.52,0,0,1-.36-.15.51.51,0,0,1,0-.72l.52-.51a.51.51,0,0,1,.72,0,.5.5,0,0,1,0,.71l-.52.52A.52.52,0,0,1,7,11.08Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M16.51,9.62a.49.49,0,0,1-.36-.16L15.63,9a.5.5,0,0,1,0-.71.51.51,0,0,1,.72,0l.52.51a.5.5,0,0,1,0,.71A.72.72,0,0,1,16.51,9.62Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M18,11.08a.52.52,0,0,1-.36-.15l-.52-.52a.5.5,0,0,1,0-.71.51.51,0,0,1,.72,0l.52.51a.51.51,0,0,1,0,.72A.52.52,0,0,1,18,11.08Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M11.52,9.62A.53.53,0,0,1,11,9.11V8.59a.52.52,0,0,1,1,0v.52A.59.59,0,0,1,11.52,9.62Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/><path d="M13.52,9.62A.53.53,0,0,1,13,9.11V8.59a.52.52,0,0,1,1,0v.52A.59.59,0,0,1,13.52,9.62Z" transform="translate(-0.02 -0.21)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Member Masuk
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">10</span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39.93"><g id="F548_Car_garage_transport" data-name="F548, Car, garage, transport"><path d="M25.38,29.36a1.25,1.25,0,0,1,1.26,1.26,1.17,1.17,0,0,1-1.26,1.2,1.22,1.22,0,0,1-1.26-1.26A1.3,1.3,0,0,1,25.38,29.36Z" transform="translate(0 -0.26)" style="fill:#fff"/><path d="M14.62,29.36a1.26,1.26,0,0,1,1.26,1.26,1.21,1.21,0,0,1-1.26,1.2,1.25,1.25,0,0,1-1.26-1.26A1.21,1.21,0,0,1,14.62,29.36Z" transform="translate(0 -0.26)" style="fill:#fff"/><rect x="23.92" y="36.41" width="2.59" height="2.59" style="fill:#fff"/><rect x="13.49" y="36.41" width="2.59" height="2.59" style="fill:#fff"/><path d="M29.63,33.61a.17.17,0,0,0,.27-.06c-.2,1.72-1.4,3.12-2.79,3.12H12.82c-1.46,0-2.65-1.4-2.85-3.19h0c.06.13.13.13.26.07a3.5,3.5,0,0,0,1.6.66H28A2.89,2.89,0,0,0,29.63,33.61Z" transform="translate(0 -0.26)" style="fill:#a1c6e9"/><path d="M30,31.88v1.47a1.43,1.43,0,0,1-.34.26,2.88,2.88,0,0,1-1.52.6H11.89a3.46,3.46,0,0,1-1.59-.66c-.07-.07-.2-.14-.27-.2V31.82h0V28.5a2.72,2.72,0,0,1,2.46-2.2h0v.07l.53.4H26.64l.8-.47a2.58,2.58,0,0,1,2.46,2.2v3.32h0C30,31.82,30,31.82,30,31.88Zm-3.33-1.32a1.26,1.26,0,0,0-1.26-1.27,1.27,1.27,0,1,0,1.26,1.27Zm-10.76,0a1.26,1.26,0,0,0-1.26-1.27,1.27,1.27,0,0,0,0,2.53A1.26,1.26,0,0,0,15.88,30.56Z" transform="translate(0 -0.26)" style="fill:#a1c6e9"/><path d="M26.78,21.59l.73,4.71-1,.47H13l-.53-.4.73-4.72c0-1.19,1.46-2.19,3.26-2.19h7C25.32,19.39,26.78,20.39,26.78,21.59Z" transform="translate(0 -0.26)" style="fill:#fff"/><rect x="6.71" y="7.51" width="26.58" height="3.32" style="fill:#a1c6e9"/><rect x="6.71" y="10.83" width="26.58" height="3.32" style="fill:#fff"/><rect x="6.71" y="4.19" width="26.58" height="3.32" style="fill:#fff"/><polygon points="39.14 0.86 39.14 4.19 36.61 4.19 33.29 4.19 6.71 4.19 3.39 4.19 0.93 4.19 0.93 0.86 39.14 0.86" style="fill:#a1c6e9"/><polygon points="36.61 4.19 36.61 39.07 33.29 39.07 33.29 14.15 33.29 10.83 33.29 7.51 33.29 4.19 36.61 4.19" style="fill:#a1c6e9"/><polygon points="6.71 14.15 6.71 39.07 3.39 39.07 3.39 4.19 6.71 4.19 6.71 7.51 6.71 10.83 6.71 14.15" style="fill:#a1c6e9"/><path d="M6.71,40.12a.88.88,0,0,1-.86-.86V14.41a.86.86,0,0,1,1.72,0V39.33A.86.86,0,0,1,6.71,40.12Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M3.39,40.12a.88.88,0,0,1-.87-.86V4.44a.87.87,0,0,1,1.73,0V39.33A.87.87,0,0,1,3.39,40.12Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M39.14,5.24H36.61a.87.87,0,0,1,0-1.73h1.66V1.92H1.73V3.58h5a.87.87,0,0,1,0,1.73H.86A.88.88,0,0,1,0,4.44V1.12A.87.87,0,0,1,.86.26H39.07a.87.87,0,0,1,.86.86V4.44A.86.86,0,0,1,39.14,5.24Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M6.71,8.56a.88.88,0,0,1-.86-.86V4.38a.88.88,0,0,1,.86-.87H33.29a.87.87,0,0,1,0,1.73H7.57V7.76A.86.86,0,0,1,6.71,8.56Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M6.71,11.88A.87.87,0,0,1,5.85,11V7.7a.88.88,0,0,1,.86-.87H33.29a.87.87,0,0,1,0,1.73H7.57v2.53A.86.86,0,0,1,6.71,11.88Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M33.29,15.21H6.71a.88.88,0,0,1-.86-.87V11a.88.88,0,0,1,.86-.86H33.29a.86.86,0,1,1,0,1.72H7.57v1.67H33.36a.87.87,0,0,1,.86.86A.89.89,0,0,1,33.29,15.21Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M36.61,40.12a.88.88,0,0,1-.86-.86v-34H34.09V39.33a.87.87,0,0,1-1.73,0V4.44a.88.88,0,0,1,.86-.86h3.32a.88.88,0,0,1,.87.86V39.33A.77.77,0,0,1,36.61,40.12Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M16.08,40.12a.87.87,0,0,1-.86-.86V36.67a.86.86,0,1,1,1.72,0v2.59A.88.88,0,0,1,16.08,40.12Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M13.49,40.12a.88.88,0,0,1-.87-.86V36.67a.87.87,0,1,1,1.73,0v2.59A.88.88,0,0,1,13.49,40.12Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M26.51,40.12a.88.88,0,0,1-.86-.86V36.67a.87.87,0,1,1,1.73,0v2.59A.93.93,0,0,1,26.51,40.12Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M23.92,40.12a.87.87,0,0,1-.86-.86V36.67a.86.86,0,1,1,1.72,0v2.59A.92.92,0,0,1,23.92,40.12Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M26.51,37.53H12.89c-1.86,0-3.45-1.73-3.65-4a1.24,1.24,0,0,1,.2-.67.7.7,0,0,1,.59-.26.86.86,0,0,1,.4.13.86.86,0,0,1,.53.33A.8.8,0,0,1,11,34a2.17,2.17,0,0,0,1.86,1.79H27A2.15,2.15,0,0,0,28.9,34,.89.89,0,0,1,29,33a.65.65,0,0,1,.6-.27,1,1,0,0,1,.6,0,.76.76,0,0,1,.53.87c-.27,2.19-1.8,3.85-3.66,3.85l-.53.13Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M13,27.56a.89.89,0,0,1-.46-.13L12,27a.76.76,0,0,1-.34-.79v-.07l.74-4.65c.06-1.66,1.86-3,4.11-3h7c2.26,0,4.05,1.33,4.12,3l.73,4.65A.89.89,0,0,1,28,27l-.79.47a1.1,1.1,0,0,1-.4.13h-.2a.88.88,0,0,1-.87-.86.93.93,0,0,1,.8-.87l.07-.06-.67-4.12v-.13c0-.67-1.06-1.4-2.46-1.4h-7c-1.4,0-2.46.73-2.46,1.4v.13L13.36,26l.13.07a.79.79,0,0,1,.2,1.13A.74.74,0,0,1,13,27.56Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M28.11,35.07H11.76a3.59,3.59,0,0,1-2-.86c-.14-.07-.2-.2-.33-.27a.93.93,0,0,1-.27-.59V28.43a3.43,3.43,0,0,1,3.26-3,2.16,2.16,0,0,1,.59.13l.07.07.27.26h13l.87-.33a.89.89,0,0,1,.39-.06,3.42,3.42,0,0,1,3.26,3v4.91a.82.82,0,0,1-.27.6,1.63,1.63,0,0,1-.39.33,4.57,4.57,0,0,1-1.93.8C28.17,35.07,28.17,35.07,28.11,35.07ZM12,33.41H28.11A2.18,2.18,0,0,0,29.17,33V28.43a1.79,1.79,0,0,0-1.53-1.33l-.8.33a.57.57,0,0,1-.33.07H13a.76.76,0,0,1-.53-.2l-.2-.13c-.8.2-1.39.86-1.39,1.26V33A2.4,2.4,0,0,0,12,33.41Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M14.62,32.68a2.06,2.06,0,1,1,2.06-2.06A2.12,2.12,0,0,1,14.62,32.68Zm0-2.52a.4.4,0,1,0,.4.4A.43.43,0,0,0,14.62,30.16Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M25.38,32.68a2.06,2.06,0,1,1,2.06-2.06A2.07,2.07,0,0,1,25.38,32.68Zm0-2.52a.4.4,0,1,0,.4.4C25.85,30.36,25.65,30.16,25.38,30.16Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/><path d="M39.14,40.12H.93a.86.86,0,0,1,0-1.72H39.14a.87.87,0,0,1,.86.86A1,1,0,0,1,39.14,40.12Z" transform="translate(0 -0.26)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Member Keluar
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">10</span>
															</span>
														</div>
														
														
														
														
														
													</div>
													<div class="kt-widget17__items">
														
														
														
														
														
														
													</div>
													<div class="kt-widget17__items">
														
														
														
														
														
													</div>
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.91 24"><g id="_664_Auto_transport_truck_van" data-name="664, Auto, transport, truck, van"><path d="M21.23,14.2a1.91,1.91,0,0,0-1.87-1.66H4.64A1.88,1.88,0,0,0,2.77,14.2v4.14a1.85,1.85,0,0,0,1.87,1.87H19.4a1.86,1.86,0,0,0,1.88-1.87V14.46A1.29,1.29,0,0,0,21.23,14.2Z" transform="translate(-0.54)" style="fill:#a1c6e9"/><path d="M18,15.29a1.09,1.09,0,1,1-1.09,1.09A1.08,1.08,0,0,1,18,15.29Z" transform="translate(-0.54)" style="fill:#fff"/><path d="M6,15.29a1.09,1.09,0,1,1-1.09,1.09A1.08,1.08,0,0,1,6,15.29Z" transform="translate(-0.54)" style="fill:#fff"/><rect x="0.57" y="9.28" width="1.66" height="3.79" style="fill:#fff"/><rect x="20.73" y="8.75" width="1.66" height="3.79" style="fill:#fff"/><path d="M19.1,20.17v1.91a1.36,1.36,0,0,1-1.35,1.35,1.39,1.39,0,0,1-1.39-1.35V20.17Z" transform="translate(-0.54)" style="fill:#fff"/><path d="M4.94,12.54h-.3A1.88,1.88,0,0,0,2.77,14.2h0V2.09A1.51,1.51,0,0,1,4.29.57H19.71a1.51,1.51,0,0,1,1.52,1.52V14.2h0a1.91,1.91,0,0,0-1.87-1.66Z" transform="translate(-0.54)" style="fill:#fff"/><path d="M19.1,8.28v4.26H4.94V8.28A1.18,1.18,0,0,1,6.12,7.1H18A1.16,1.16,0,0,1,19.1,8.28Z" transform="translate(-0.54)" style="fill:#fff"/><path d="M7.64,20.17v1.91a1.35,1.35,0,0,1-2.7,0V20.17Z" transform="translate(-0.54)" style="fill:#fff"/><path d="M19.36,20.73h-.3a.57.57,0,1,1,0-1.13h.3a1.36,1.36,0,0,0,1.35-1.35V14.2A1.36,1.36,0,0,0,19.4,13h-.3a.57.57,0,1,1,0-1.13h.3A2.41,2.41,0,0,1,21.8,14v4.18A2.47,2.47,0,0,1,19.36,20.73Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M4.94,20.73h-.3A2.44,2.44,0,0,1,2.2,18.29V14.11A2.4,2.4,0,0,1,4.6,12h.3a.57.57,0,1,1,0,1.13H4.6a1.32,1.32,0,0,0-1.31,1.18v4a1.36,1.36,0,0,0,1.35,1.35h.3a.58.58,0,0,1,.57.57A.67.67,0,0,1,4.94,20.73Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M16.36,20.73H7.64a.57.57,0,0,1,0-1.13h8.72a.57.57,0,0,1,0,1.13Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M19.1,13.11H4.94a.57.57,0,0,1-.56-.57V8.28a1.7,1.7,0,0,1,1.7-1.7H17.92a1.7,1.7,0,0,1,1.7,1.7v4.26A.57.57,0,0,1,19.1,13.11ZM5.47,12H18.53V8.28a.59.59,0,0,0-.61-.61H6.08a.59.59,0,0,0-.61.61V12Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M2.77,14.72a.57.57,0,0,1-.57-.56V13.07a.57.57,0,1,1,1.13,0v1.09A.64.64,0,0,1,2.77,14.72Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M2.77,9.84a.57.57,0,0,1-.57-.56V2.09A2.09,2.09,0,0,1,4.29,0H19.71A2.09,2.09,0,0,1,21.8,2.09V8.71a.57.57,0,1,1-1.13,0V2.09a1,1,0,0,0-1-1H4.29a1,1,0,0,0-1,1V9.28A.57.57,0,0,1,2.77,9.84Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M21.28,14.72a.57.57,0,0,1-.57-.56V12.5a.57.57,0,1,1,1.13,0v1.66A.64.64,0,0,1,21.28,14.72Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M22.89,13.11H21.23a.57.57,0,0,1-.56-.57V8.71a.57.57,0,0,1,.56-.56h1.66a.58.58,0,0,1,.57.56v3.83A.58.58,0,0,1,22.89,13.11ZM21.8,12h.57V9.28H21.8Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M2.77,13.63H1.11a.58.58,0,0,1-.57-.56V9.28a.58.58,0,0,1,.57-.57H2.77a.57.57,0,0,1,.56.57v3.83A.64.64,0,0,1,2.77,13.63ZM1.68,12.54h.56V9.8H1.68Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M6.29,24a1.93,1.93,0,0,1-1.91-1.92V20.17a.57.57,0,0,1,.56-.57h2.7a.58.58,0,0,1,.57.57v1.91A1.93,1.93,0,0,1,6.29,24Zm-.82-3.27v1.35a.82.82,0,0,0,.82.83.83.83,0,0,0,.83-.83V20.73Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M17.71,24a1.93,1.93,0,0,1-1.92-1.92V20.17a.58.58,0,0,1,.57-.57H19.1a.58.58,0,0,1,.57.57v1.91A2,2,0,0,1,17.71,24Zm-.79-3.27v1.35a.83.83,0,1,0,1.66,0V20.73Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M22.37,24H1.68a.57.57,0,1,1,0-1.13H22.37a.57.57,0,0,1,.56.56A.64.64,0,0,1,22.37,24Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M6,18a1.66,1.66,0,1,1,1.66-1.66A1.69,1.69,0,0,1,6,18Zm0-2.18a.57.57,0,1,0,.57.57A.61.61,0,0,0,6,15.81Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M18,18a1.66,1.66,0,1,1,1.66-1.66A1.69,1.69,0,0,1,18,18Zm0-2.18a.57.57,0,1,0,0,1.13.57.57,0,0,0,.57-.56A.61.61,0,0,0,18,15.81Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M14.74,16.9H9.3a.57.57,0,1,1,0-1.13h5.44a.57.57,0,0,1,.57.56A.6.6,0,0,1,14.74,16.9Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M13.66,18.56H10.39A.58.58,0,0,1,9.82,18a.58.58,0,0,1,.57-.57h3.27a.57.57,0,0,1,.56.57A.65.65,0,0,1,13.66,18.56Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M13.66,15.29H10.39a.57.57,0,1,1,0-1.13h3.27a.57.57,0,0,1,.56.56A.6.6,0,0,1,13.66,15.29Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M12.57,11.46a.54.54,0,0,1-.44-.22.58.58,0,0,1,.13-.79L14.44,8.8a.55.55,0,0,1,.78.13.52.52,0,0,1-.13.78l-2.18,1.66A1.57,1.57,0,0,1,12.57,11.46Z" transform="translate(-0.54)" style="fill:#2c80c3"/><path d="M10,11.46a.54.54,0,0,1-.44-.22.58.58,0,0,1,.13-.79l1.44-1.09a.56.56,0,0,1,.65.92l-1.44,1.09A1.07,1.07,0,0,1,10,11.46Z" transform="translate(-0.54)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Pass Kade
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">42 m3</span>
															</span>
														</div>
														
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g id="F530_Boat_marine_sea_vehicles" data-name="F530, Boat, marine, sea, vehicles"><rect x="12.71" y="9.84" width="8.77" height="2.92" style="fill:#a1c6e9"/><polygon points="10.76 9.85 10.76 12.77 1.99 12.77 1.99 9.85 3.94 9.85 3.94 5.95 8.81 5.95 8.81 9.85 10.76 9.85" style="fill:#fff"/><path d="M12.37,18.62a1.21,1.21,0,1,1-1.21,1.21A1.21,1.21,0,0,1,12.37,18.62Z" transform="translate(-0.39)" style="fill:#fff"/><path d="M7.49,18.62a1.21,1.21,0,1,1-1.21,1.21A1.21,1.21,0,0,1,7.49,18.62Z" transform="translate(-0.39)" style="fill:#fff"/><path d="M17.24,18.62A1.21,1.21,0,1,1,16,19.83,1.21,1.21,0,0,1,17.24,18.62Z" transform="translate(-0.39)" style="fill:#fff"/><polygon points="22.97 12.77 22.23 16.01 1.25 16.01 0.55 12.77 1.99 12.77 10.76 12.77 12.71 12.77 21.49 12.77 22.97 12.77" style="fill:#a1c6e9"/><path d="M22.62,16l-1.71,7.48H3.36L1.64,16Zm-4.13,3.82A1.21,1.21,0,1,0,17.28,21,1.17,1.17,0,0,0,18.49,19.83Zm-4.88,0A1.21,1.21,0,1,0,12.4,21,1.17,1.17,0,0,0,13.61,19.83Zm-4.87,0A1.21,1.21,0,1,0,7.53,21,1.17,1.17,0,0,0,8.74,19.83Z" transform="translate(-0.39)" style="fill:#a1c6e9"/><path d="M23.36,24H20.91a.51.51,0,1,1,0-1h2.45a.52.52,0,0,1,.51.5A.57.57,0,0,1,23.36,24Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M3.36,24H.9a.51.51,0,1,1,0-1H3.36a.51.51,0,0,1,0,1Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M21.88,13.28a.53.53,0,0,1-.51-.51V10.31h-7.8v2.46a.51.51,0,1,1-1,0V9.84a.51.51,0,0,1,.51-.5h8.77a.52.52,0,0,1,.51.5v2.93A.47.47,0,0,1,21.88,13.28Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M7.49,21.54a1.72,1.72,0,1,1,1.72-1.71A1.73,1.73,0,0,1,7.49,21.54Zm0-2.41a.74.74,0,0,0-.74.74.71.71,0,0,0,.74.74.74.74,0,0,0,.74-.74A.71.71,0,0,0,7.49,19.13Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M12.37,21.54a1.72,1.72,0,1,1,1.71-1.71A1.73,1.73,0,0,1,12.37,21.54Zm0-2.41a.75.75,0,0,0-.75.74.72.72,0,0,0,.75.74.74.74,0,0,0,.74-.74A.72.72,0,0,0,12.37,19.13Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M17.24,21.54A1.72,1.72,0,1,1,19,19.83,1.73,1.73,0,0,1,17.24,21.54Zm0-2.41a.74.74,0,0,0-.74.74.71.71,0,0,0,.74.74.74.74,0,0,0,.74-.74A.71.71,0,0,0,17.24,19.13Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M22.62,16.47H22.5a.46.46,0,0,1-.35-.58l.59-2.65H1.52l.59,2.65a.48.48,0,0,1-.35.58.49.49,0,0,1-.59-.35L.43,12.89a.52.52,0,0,1,.08-.43.47.47,0,0,1,.39-.2H23.32a.52.52,0,0,1,.39.2.52.52,0,0,1,.08.43l-.74,3.23C23.05,16.32,22.82,16.47,22.62,16.47Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M20.91,24H3.36a.47.47,0,0,1-.47-.39L1.17,16.12a.54.54,0,0,1,.08-.43.51.51,0,0,1,.39-.19H22.58a.56.56,0,0,1,.39.19.54.54,0,0,1,.08.43l-1.72,7.49A.42.42,0,0,1,20.91,24ZM3.75,23H20.52L22,16.47H2.27Z" transform="translate(-0.39)" style="fill:#2c80c3"/></g><g id="F541_Car_sedans_traffic_transport_vehicles" data-name="F541, Car, sedans, traffic, transport, vehicles"><rect x="1.96" y="10.51" width="1.41" height="1.53" style="fill:#fff"/><rect x="9.03" y="10.51" width="1.41" height="1.53" style="fill:#fff"/><ellipse cx="2.68" cy="8.47" rx="0.94" ry="1.02" style="fill:#fff"/><ellipse cx="9.75" cy="8.47" rx="0.94" ry="1.02" style="fill:#fff"/><path d="M12,6.42v4.09H1.17V6.42H12Zm-.94,2.05a.95.95,0,1,0-1.89,0,1,1,0,0,0,.94,1A1,1,0,0,0,11.09,8.47ZM4,8.47a1,1,0,0,0-.94-1,1,1,0,0,0-.94,1,1,1,0,0,0,.94,1A1,1,0,0,0,4,8.47Z" transform="translate(-0.39)" style="fill:#a1c6e9"/><rect x="4.09" y="0.29" width="3.77" height="1.29" style="fill:#a1c6e9"/><polygon points="9.75 1.55 10.92 6.42 1.49 6.42 2.68 1.55 4.09 1.55 7.86 1.55 9.75 1.55" style="fill:#fff"/><path d="M3.77,12.29A.26.26,0,0,1,3.52,12V10.49a.26.26,0,0,1,.25-.26.25.25,0,0,1,.24.26V12A.25.25,0,0,1,3.77,12.29Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M2.35,12.29A.25.25,0,0,1,2.11,12V10.49a.25.25,0,1,1,.49,0V12A.26.26,0,0,1,2.35,12.29Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M10.84,12.29A.25.25,0,0,1,10.6,12V10.49a.25.25,0,0,1,.24-.26.26.26,0,0,1,.25.26V12A.26.26,0,0,1,10.84,12.29Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M9.43,12.29A.26.26,0,0,1,9.18,12V10.49a.26.26,0,0,1,.25-.26.25.25,0,0,1,.24.26V12A.25.25,0,0,1,9.43,12.29Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M12,10.76H1.18a.26.26,0,0,1-.24-.27V6.4a.25.25,0,0,1,.24-.26H1.9a.26.26,0,0,1,.25.26.29.29,0,0,1-.27.27H1.41v3.58H11.78V6.67h-.47a.26.26,0,0,1-.24-.27.25.25,0,0,1,.24-.26H12a.26.26,0,0,1,.25.26v4.09A.31.31,0,0,1,12,10.76Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M11.31,6.67H1.88a.23.23,0,0,1-.19-.11.32.32,0,0,1,0-.22L2.84,1.47a.24.24,0,0,1,.23-.18H4.49a.25.25,0,0,1,.24.26.26.26,0,0,1-.24.27H3.26L2.2,6.18H11L10,1.82H8.28A.26.26,0,0,1,8,1.55a.26.26,0,0,1,.25-.26h1.88a.23.23,0,0,1,.23.18l1.19,4.87a.28.28,0,0,1,0,.22A.35.35,0,0,1,11.31,6.67Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M8.26,1.82H4.49a.26.26,0,0,1-.25-.27V.27A.26.26,0,0,1,4.49,0H8.26A.26.26,0,0,1,8.5.27V1.55A.29.29,0,0,1,8.26,1.82ZM4.71,1.31H8V.53H4.71Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M3.07,9.73a1.29,1.29,0,0,1,0-2.57A1.24,1.24,0,0,1,4.26,8.45,1.25,1.25,0,0,1,3.07,9.73Zm0-2a.75.75,0,0,0-.72.78.74.74,0,0,0,.72.77.74.74,0,0,0,.72-.77A.76.76,0,0,0,3.07,7.69Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M10.14,9.73A1.24,1.24,0,0,1,9,8.45a1.24,1.24,0,0,1,1.18-1.29,1.24,1.24,0,0,1,1.19,1.29A1.24,1.24,0,0,1,10.14,9.73Zm0-2a.75.75,0,0,0-.71.78.72.72,0,1,0,1.43,0A.76.76,0,0,0,10.14,7.69Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M8.26,8.71H5a.27.27,0,0,1,0-.53h3.3a.26.26,0,0,1,.24.27A.27.27,0,0,1,8.26,8.71Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M12,12.29H1.18A.25.25,0,0,1,.94,12a.26.26,0,0,1,.24-.27H12a.27.27,0,0,1,.25.27A.3.3,0,0,1,12,12.29Z" transform="translate(-0.39)" style="fill:#2c80c3"/></g><path d="M16.24,23a1.6,1.6,0,0,1-1.53-1.66.53.53,0,1,1,1,0,.52.52,0,1,0,1,0,.52.52,0,1,1,1,0A1.71,1.71,0,0,1,16.24,23Z" transform="translate(-0.39)" style="fill:#2c80c3"/><path d="M18.24,23a1.59,1.59,0,0,1-1.52-1.66.52.52,0,1,1,1,0,.52.52,0,1,0,1,0,.52.52,0,1,1,1,0A1.71,1.71,0,0,1,18.24,23Z" transform="translate(-0.39)" style="fill:#2c80c3"/></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Berangkat
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">150</span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 20.05"><g id="F585_Car_cargo_ship_transport_vessel" data-name="F585, Car, cargo, ship, transport, vessel"><path d="M17,4.14v2.4H11.53l-1-4h4.88A1.58,1.58,0,0,1,17,4.14Z" transform="translate(0 -1.98)" style="fill:#fff"/><path d="M10.53,2.54l1,4H8V4.14a1.6,1.6,0,0,1,1.6-1.6Z" transform="translate(0 -1.98)" style="fill:#fff"/><path d="M18.53,6.54a2.5,2.5,0,1,1,0,5h-12a2.5,2.5,0,1,1,0-5h12Z" transform="translate(0 -1.98)" style="fill:#a1c6e9"/><path d="M17,11.54A1.48,1.48,0,1,1,15.53,13,1.48,1.48,0,0,1,17,11.54Z" transform="translate(0 -1.98)" style="fill:#fff"/><path d="M8.53,11.54A1.48,1.48,0,1,1,7.05,13,1.48,1.48,0,0,1,8.53,11.54Z" transform="translate(0 -1.98)" style="fill:#fff"/><path d="M17,14.54h6.52l-2.8,5.64a2.5,2.5,0,0,1-2.24,1.36H5.17A2.47,2.47,0,0,1,2.88,20L.52,14.54H17ZM12.53,18a.52.52,0,1,0-.52.52A.53.53,0,0,0,12.53,18ZM9,18a.52.52,0,1,0-.52.52A.53.53,0,0,0,9,18ZM5.53,18a.52.52,0,1,0-.52.52A.53.53,0,0,0,5.53,18Z" transform="translate(0 -1.98)" style="fill:#a1c6e9"/><path d="M17,18.54a.53.53,0,0,1-.52-.52V14.5a.52.52,0,0,1,1,0V18A.53.53,0,0,1,17,18.54Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M16,19.54A1.52,1.52,0,0,1,14.49,18a.52.52,0,0,1,1,0,.52.52,0,1,0,1,0,.52.52,0,0,1,1,0A1.65,1.65,0,0,1,16,19.54Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M18,19.54A1.52,1.52,0,0,1,16.49,18a.52.52,0,0,1,1,0,.52.52,0,0,0,1,0,.52.52,0,0,1,1,0A1.65,1.65,0,0,1,18,19.54Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M5,19a1,1,0,1,1,1-1A1,1,0,0,1,5,19Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M8.53,19a1,1,0,1,1,1-1A1,1,0,0,1,8.53,19Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M12,19a1,1,0,1,1,1-1A1,1,0,0,1,12,19Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M18.45,22H5.17a3,3,0,0,1-2.77-1.8L0,14.74a.51.51,0,0,1,0-.48A.44.44,0,0,1,.48,14h23a.55.55,0,0,1,.44.24.67.67,0,0,1,0,.48l-2.8,5.64A3.06,3.06,0,0,1,18.45,22ZM1.24,15l2,4.8A2,2,0,0,0,5.13,21H18.45a2,2,0,0,0,1.8-1.12L22.69,15Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M18.53,12h-12a3,3,0,0,1,0-6H8.05A.5.5,0,1,1,8,7H6.49a1.88,1.88,0,0,0-1.4.6A2,2,0,0,0,4.49,9a2,2,0,0,0,2,2h12a1.88,1.88,0,0,0,1.4-.6,2,2,0,0,0,.6-1.4,2,2,0,0,0-2-2H17a.52.52,0,1,1,0-1h1.52a3,3,0,0,1,0,6Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M8.53,15a2,2,0,1,1,2-2A2,2,0,0,1,8.53,15Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,8.53,12Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M17,15a2,2,0,1,1,2-2A2,2,0,0,1,17,15Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,17,12Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M17,7H8a.53.53,0,0,1-.52-.52V4.1A2.13,2.13,0,0,1,9.61,2h5.8A2.13,2.13,0,0,1,17.53,4.1V6.5A.53.53,0,0,1,17,7ZM8.53,6h8V4.1A1.12,1.12,0,0,0,15.41,3H9.61A1.12,1.12,0,0,0,8.49,4.1V6Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/><path d="M11.49,7A.48.48,0,0,1,11,6.66l-1-4a.49.49,0,1,1,1-.24l1,4a.47.47,0,0,1-.36.6Z" transform="translate(0 -1.98)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Muatan Kapal
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">250</span>
															</span>
														</div>
<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 23.8"><g id="D528_Avatar_body_description_human_profile" data-name="D528, Avatar, body, description, human, profile"><path d="M22.44,2.19h-4.8A1.14,1.14,0,0,0,16.52,3.3V10a1.14,1.14,0,0,0,1.12,1.11H22.4A1.14,1.14,0,0,0,23.52,10V3.3A1.08,1.08,0,0,0,22.44,2.19Z" transform="translate(0 -0.17)" style="fill:#acc5e7"/><path d="M20,4.17a1,1,0,1,1-1,1A1,1,0,0,1,20,4.17Z" transform="translate(0 -0.17)" style="fill:#fff"/><path d="M7.56,23.5H3V17.55H.52V11.1a3,3,0,0,1,3-3h8a3,3,0,0,1,3,3v6.45H12V23.5Z" transform="translate(0 -0.17)" style="fill:#acc5e7"/><path d="M7.56.72a3,3,0,0,1,3,3,3,3,0,0,1-6,0A3,3,0,0,1,7.56.72Z" transform="translate(0 -0.17)" style="fill:#fff"/><path d="M12,24H3a.53.53,0,0,1-.52-.51V18h-2A.53.53,0,0,1,0,17.52V11.1A3.47,3.47,0,0,1,3.48,7.65h8A3.47,3.47,0,0,1,15,11.1v6.45a.53.53,0,0,1-.52.52h-2v5.47C12.56,23.73,12.32,24,12,24ZM3.56,23h8V17.55a.53.53,0,0,1,.52-.51h2V11.1A2.48,2.48,0,0,0,11.6,8.64H3.52A2.48,2.48,0,0,0,1,11.1V17H3a.53.53,0,0,1,.52.51Z" transform="translate(0 -0.17)" style="fill:#4f7fc1"/><path d="M7.56,7.14a3.49,3.49,0,1,1,3.52-3.49A3.51,3.51,0,0,1,7.56,7.14Zm0-5.94a2.5,2.5,0,1,0,2.52,2.49A2.52,2.52,0,0,0,7.56,1.2Z" transform="translate(0 -0.17)" style="fill:#4f7fc1"/><path d="M7.56,24A.53.53,0,0,1,7,23.46V18a.52.52,0,0,1,1,0V23.5A.59.59,0,0,1,7.56,24Z" transform="translate(0 -0.17)" style="fill:#4f7fc1"/><path d="M22.44,11.61h-4.8A1.59,1.59,0,0,1,16,10V3.3a1.6,1.6,0,0,1,1.6-1.59H22.4A1.6,1.6,0,0,1,24,3.3V10A1.57,1.57,0,0,1,22.44,11.61ZM17.64,2.7a.59.59,0,0,0-.6.6V10a.61.61,0,0,0,.6.59H22.4A.61.61,0,0,0,23,10V3.3a.62.62,0,0,0-.6-.6Z" transform="translate(0 -0.17)" style="fill:#4f7fc1"/><path d="M20,6.66a1.51,1.51,0,1,1,1.52-1.5A1.51,1.51,0,0,1,20,6.66Zm0-2a.53.53,0,0,0-.52.52.52.52,0,0,0,1,0A.5.5,0,0,0,20,4.68Z" transform="translate(0 -0.17)" style="fill:#4f7fc1"/><path d="M21.56,9.63h-3A.52.52,0,0,1,18,9.12a.53.53,0,0,1,.52-.52h3a.53.53,0,0,1,.52.52A.58.58,0,0,1,21.56,9.63Z" transform="translate(0 -0.17)" style="fill:#4f7fc1"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Pass Orang
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">1</span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.96 24"><g id="F579_Car_important_star_vehicles" data-name="F579, Car, important, star, vehicles"><path d="M20,10a3.52,3.52,0,0,1-3.52-3.51,3.48,3.48,0,0,1,2.84-3.44A4.59,4.59,0,0,1,20,3a3.49,3.49,0,0,1,1.47,6.66A3.16,3.16,0,0,1,20,10Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M16.51,6.55A3.52,3.52,0,0,0,20,10.06a3.37,3.37,0,0,0,1.43-.32l1,3.32h-21L5.09,1.92A1.9,1.9,0,0,1,6.93.6H17.15A1.93,1.93,0,0,1,19,1.92l.4,1.23A3.41,3.41,0,0,0,16.51,6.55Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M4,15.06a1.48,1.48,0,1,1-1.47,1.47A1.47,1.47,0,0,1,4,15.06Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M6,20v1.75a1.76,1.76,0,1,1-3.51,0V20Z" transform="translate(-0.02)" style="fill:#fff"/><path d="M21.5,20v1.75a1.76,1.76,0,1,1-3.51,0V20Z" transform="translate(-0.02)" style="fill:#fff"/><rect x="7.99" y="17.01" width="7.99" height="3" style="fill:#a1c6e9"/><path d="M23.5,13v7H16V17H8v3H.5V13h23Zm-2,3.51A1.52,1.52,0,1,0,20,18.05,1.56,1.56,0,0,0,21.5,16.53Zm-16,0A1.52,1.52,0,1,0,4,18.05,1.55,1.55,0,0,0,5.53,16.53Z" transform="translate(-0.02)" style="fill:#a1c6e9"/><path d="M20,15.06a1.48,1.48,0,1,1-1.48,1.47A1.47,1.47,0,0,1,20,15.06Z" transform="translate(-0.02)" style="fill:#fff"/><polygon points="22.16 5.87 20.81 6.87 21.32 8.47 19.97 7.47 18.61 8.47 19.13 6.87 17.77 5.87 19.45 5.87 19.97 4.27 20.49 5.87 22.16 5.87" style="fill:#fff"/><path d="M2.54,20.53h-2A.53.53,0,0,1,0,20V13a.53.53,0,0,1,.52-.52h1a.52.52,0,1,1,0,1H1v6H2.54a.53.53,0,0,1,.52.52A.6.6,0,0,1,2.54,20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M8,20.53H6a.52.52,0,0,1,0-1H8a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M18,20.53H16a.52.52,0,0,1,0-1h2a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M23.5,20.53h-2a.52.52,0,0,1,0-1H23v-6h-.52a.52.52,0,0,1,0-1h1A.53.53,0,0,1,24,13v7A.53.53,0,0,1,23.5,20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M4.25,24A2.23,2.23,0,0,1,2,21.76V20a.53.53,0,0,1,.52-.52H6.05a.53.53,0,0,1,.52.52v1.75A2.33,2.33,0,0,1,4.25,24ZM3,20.53v1.23a1.24,1.24,0,1,0,2.48,0V20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M19.75,24a2.24,2.24,0,0,1-2.24-2.24V20a.53.53,0,0,1,.52-.52h3.51a.53.53,0,0,1,.52.52v1.75A2.35,2.35,0,0,1,19.75,24Zm-1.24-3.47v1.23a1.24,1.24,0,1,0,2.48,0V20.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M4,18.53a2,2,0,1,1,2-2A2,2,0,0,1,4,18.53Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,4,15.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M20,18.53a2,2,0,1,1,2-2A2,2,0,0,1,20,18.53Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,20,15.53Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M16,20.53H8A.53.53,0,0,1,7.49,20V17A.53.53,0,0,1,8,16.49h8a.53.53,0,0,1,.52.52v3A.53.53,0,0,1,16,20.53Zm-7.46-1h7v-2h-7Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M12,5a.53.53,0,0,1-.52-.52v-4a.52.52,0,1,1,1,0v4A.53.53,0,0,1,12,5Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M14,5H10a.52.52,0,0,1,0-1h4a.52.52,0,0,1,0,1Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M22.5,13.54h-21a.49.49,0,0,1-.4-.2.56.56,0,0,1-.08-.44L4.61,1.72A2.41,2.41,0,0,1,6.93,0H17.11a2.45,2.45,0,0,1,2.32,1.68L19.83,3a.52.52,0,0,1-.32.63.52.52,0,0,1-.64-.32L18.47,2a1.45,1.45,0,0,0-1.36-1H6.89A1.45,1.45,0,0,0,5.53,2L2.22,12.54H21.78L21,9.9a.5.5,0,1,1,.95-.32l1,3.32a.44.44,0,0,1-.08.44A.48.48,0,0,1,22.5,13.54Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M20,10.54a4,4,0,0,1-.76-7.9A4.9,4.9,0,0,1,20,2.56a4,4,0,0,1,1.63,7.62A3.84,3.84,0,0,1,20,10.54Zm0-7a3,3,0,1,0,0,6,2.61,2.61,0,0,0,1.23-.28A3,3,0,0,0,23,6.55,3,3,0,0,0,20,3.55Z" transform="translate(-0.02)" style="fill:#2c80c3"/><path d="M21.34,9a.51.51,0,0,1-.27-.08L20,8.07l-1.08.8a.54.54,0,0,1-.6,0,.59.59,0,0,1-.2-.56L18.51,7l-1.08-.8a.59.59,0,0,1-.2-.56.48.48,0,0,1,.48-.36H19L19.43,4a.52.52,0,0,1,.48-.36.5.5,0,0,1,.48.36l.4,1.28h1.39a.5.5,0,0,1,.48.36.44.44,0,0,1-.2.56L21.38,7l.4,1.28a.46.46,0,0,1-.2.56C21.54,9,21.46,9,21.34,9ZM20,7a.58.58,0,0,1,.28.08l.12.08,0-.16a.46.46,0,0,1,.2-.56l.12-.08h-.16A.5.5,0,0,1,20,6l0-.16L20,6a.52.52,0,0,1-.48.36h-.16l.12.08a.59.59,0,0,1,.2.56l0,.16L19.71,7A.58.58,0,0,1,20,7Z" transform="translate(-0.02)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Free Pass
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">10</span>
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
					<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1"">
										<thead>
											<tr style="text-align:center;">
											  <th rowspan="2" bgcolor="#f7fcff" id="kt_table_3">#</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Lokasi</th>
											  <th colspan="2" rowspan="2" bgcolor="#f7fcff">Kategori</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Jenis</th>
											  <th colspan="2" bgcolor="#f7fcff">Qty<br></th>
											  <th width="3%" colspan="3" bgcolor="#f7fcff">Jumlah Durasi<br>										        Parkir</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
									      </tr>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff">Vol</th>
											  <th width="2%" bgcolor="#f7fcff">Sat</th>
											  <th width="3%" bgcolor="#f7fcff">Jam</th>
											  <th width="3%" bgcolor="#f7fcff">Menit</th>
											  <th width="3%" bgcolor="#f7fcff">Detik</th>
										  </tr>
										</thead>
										<tbody style="line-height:10px;">
											<tr>
											  <td id="kt_table_34" style="text-align:right"><strong>1</strong></td>
											  <td colspan="10" nowrap style="text-align:left"><strong>Makassar</strong></td>
										  </tr>
											<tr>
											  <td bgcolor="#f7fcff"  width="1%" id="kt_table_12" style="text-align:right"><strong>1.1</strong></td>
											  <td bgcolor="#f7fcff" colspan="10" nowrap style="text-align:left"><strong>Data Produksi Masuk</strong></td>
										  </tr>
											<tr>
											  <td colspan="2" rowspan="10" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td width="1%" nowrap="nowrap" style="text-align:right">1.1.1</td>
											  <td width="5%" nowrap="nowrap" style="text-align:left">Reguler</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap="nowrap" style="text-align:right"></td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">1.1.2</td>
											  <td nowrap="nowrap" style="text-align:left">Member</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" rowspan="3" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Sedan/Jeep/Pick Up</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Truck/Tronton/Trailer</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pegawai / Instansi / Others</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.1.3</td>
											  <td nowrap style="text-align:left">Pass Kade</td>
											  <td nowrap style="text-align:left">Truck</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">m3</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" rowspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">Tronton</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">m3</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:left">Gerobak</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">m3</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">1.1.4</td>
											  <td nowrap="nowrap" style="text-align:left">Pass Orang</td>
											  <td id="kt_table_2" style="text-align:right">&nbsp;</td>
											  <td id="kt_table_2" style="text-align:right">1500</td>
											  <td id="kt_table_2" style="text-align:right">Orang</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
										  </tr>
											<tr>
											  <td colspan="11" id="kt_table_7" style="text-align:right">&nbsp;</td>
										  </tr>
											<tr>
											  <td bgcolor="#f7fcff"  style="text-align:right" id="kt_table_27"><strong>1.2</strong></td>
											  <td bgcolor="#f7fcff"  colspan="10" nowrap style="text-align:left"><strong>Data Produksi Keluar</strong></td>
										  </tr>
											<tr>
											  <td colspan="2" rowspan="13" id="kt_table_26" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">1.2.1</td>
											  <td nowrap="nowrap" style="text-align:left">Reguler</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">1.2.2</td>
											  <td nowrap="nowrap" style="text-align:left">Member</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" rowspan="3" nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Sedan/Jeep/Pick Up</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Truck/Tronton/Trailer</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pegawai / Instansi / Others</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.3</td>
											  <td nowrap="nowrap" style="text-align:left">Kendaraan Berangkat</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.4</td>
											  <td nowrap="nowrap" style="text-align:left">Muatan Kapal</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.5</td>
											  <td nowrap="nowrap" style="text-align:left">Free Pass</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.6</td>
											  <td nowrap="nowrap" style="text-align:left">Denda</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="11" id="kt_table_6" style="text-align:right">&nbsp;</td>
										  </tr>
										  <tr>
										      <td bgcolor="" style="text-align:right" colspan="11" id="kt_table_8">&nbsp;</td>
									      </tr>
									      <tr>
										    <td colspan="5" bgcolor="#f7fcff" id="kt_table_10" style="text-align:right"><b>Total</b></td>
										    <td bgcolor="#f7fcff" style="text-align:right" id="kt_table_10">&nbsp;</td>
										    <td bgcolor="#f7fcff" style="text-align:right" id="kt_table_10">&nbsp;</td>
										    <td bgcolor="#f7fcff" style="text-align:right" id="kt_table_10">&nbsp;</td>
										    <td bgcolor="#f7fcff" style="text-align:right" id="kt_table_10">&nbsp;</td>
										    <td bgcolor="#f7fcff" style="text-align:right" id="kt_table_10">&nbsp;</td>
										    <td bgcolor="#f7fcff">&nbsp;</td>
									      </tr>
  </tbody>
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
									<div class="modal fade" id="serah-terima-atribut" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ID CARD</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-brand btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
			
												</div>
											</div>
												
												

									<!--end::Portlet-->
												</div>
											</div>
											</div>

									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="serah-terima-rompi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ROMPI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-brand btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
			
												</div>
											</div>
												
												

									<!--end::Portlet-->
												</div>
											</div>
											</div>

									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 2-->
        </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
