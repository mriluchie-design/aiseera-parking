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
											<div class="kt-portlet__head-label">
												
											</div>
											<div class="kt-portlet__head-toolbar" style="margin-right:55px;">
												<a href="#" class="btn btn-label-light btn-sm " >
													Periode : 01/01/2026 s/d 31/01/2026
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
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center;">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.07 24.07"><g id="_121_Calculation_Calculator_Mathematics_Number_Cruncher" data-name="121, Calculation, Calculator, Mathematics, Number Cruncher"><path d="M19.38.27H4.62A1.88,1.88,0,0,0,2.77,2.12V21.88a1.88,1.88,0,0,0,1.85,1.85H19.38a1.88,1.88,0,0,0,1.85-1.85V2.12A1.88,1.88,0,0,0,19.38.27Z" transform="translate(-2.47 0.03)" style="fill:#fff"/><polygon points="15.61 18.77 15.61 21.87 12.51 21.87 12.51 18.77 12.51 15.61 15.61 15.61 15.61 18.77" style="fill:#a1c6e9"/><rect x="12.51" y="9.36" width="3.15" height="3.1" style="fill:#fff"/><rect x="9.36" y="12.51" width="3.15" height="3.15" style="fill:#fff"/><rect x="9.36" y="18.77" width="3.15" height="3.15" style="fill:#fff"/><rect x="3.1" y="18.77" width="3.15" height="3.15" style="fill:#fff"/><rect x="6.26" y="15.61" width="3.15" height="3.15" style="fill:#fff"/><rect x="3.1" y="12.51" width="3.15" height="3.15" style="fill:#fff"/><rect x="6.26" y="9.36" width="3.15" height="3.1" style="fill:#fff"/><rect x="12.51" y="12.51" width="3.15" height="3.15" style="fill:#a1c6e9"/><rect x="9.36" y="15.61" width="3.15" height="3.15" style="fill:#a1c6e9"/><rect x="9.36" y="9.36" width="3.15" height="3.1" style="fill:#a1c6e9"/><rect x="6.26" y="18.77" width="3.15" height="3.15" style="fill:#a1c6e9"/><rect x="6.26" y="12.51" width="3.15" height="3.15" style="fill:#a1c6e9"/><rect x="3.1" y="15.61" width="3.15" height="3.15" style="fill:#a1c6e9"/><rect x="3.1" y="9.36" width="3.15" height="3.1" style="fill:#a1c6e9"/><rect x="2.15" y="2.2" width="14.71" height="4.4" style="fill:#a1c6e9"/><path d="M18.38,4.42v.65a.11.11,0,0,1-.1.1L18.18,5v-.5l.2-.1Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M18.38,3.62v.65l-.05.05-.1-.1-.05,0v-.5l.05-.15h0C18.33,3.52,18.38,3.57,18.38,3.62Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="15.81 4.35 15.71 4.45 15.11 4.45 15.01 4.35 15.11 4.3 15.71 4.3 15.81 4.35" style="fill:#2c80c3"/><path d="M18.23,3.47l-.05.2h-.55l-.2,0a.11.11,0,0,1,.1-.1h.7Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M18.18,5l.05.2h-.7a.11.11,0,0,1-.1-.1l.2,0h.55Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="15.11 3.75 15.11 4.2 15.11 4.25 14.96 4.35 14.96 4.3 14.96 3.7 15.11 3.75" style="fill:#2c80c3"/><path d="M17,4.42v.65a.11.11,0,0,1-.1.1h0L16.83,5v-.5l.05,0,.1,0Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M17,3.62v.65l-.05.05-.1-.1,0,0v-.5l0-.15h0C16.93,3.52,17,3.57,17,3.62Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="14.41 4.35 14.31 4.45 13.71 4.45 13.61 4.35 13.71 4.3 14.31 4.3 14.41 4.35" style="fill:#2c80c3"/><path d="M16.83,3.47l0,.2h-.6l-.15,0a.11.11,0,0,1,.1-.1h.7Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M16.78,5l0,.2h-.7a.11.11,0,0,1-.1-.1l.2,0h.55Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="13.71 4.55 13.71 5 13.71 5 13.51 5.05 13.51 4.45 13.56 4.4 13.71 4.5 13.71 4.55" style="fill:#2c80c3"/><polygon points="13.71 3.75 13.71 4.2 13.71 4.25 13.56 4.35 13.51 4.3 13.51 3.7 13.71 3.75" style="fill:#2c80c3"/><path d="M15.58,4.42v.65a.11.11,0,0,1-.1.1L15.43,5v-.5l.15,0Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M15.58,3.62v.65l-.05.05-.15-.15v-.5l0-.2Q15.58,3.55,15.58,3.62Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M15.43,3.47l0,.2h-.55l-.2,0a.11.11,0,0,1,.1-.1h.7Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="12.31 3.75 12.31 4.2 12.16 4.35 12.11 4.3 12.11 3.7 12.31 3.75" style="fill:#2c80c3"/><path d="M14.18,4.42v.65a.11.11,0,0,1-.1.1h0L14,5v-.5l.15-.15v0Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M14.08,3.47l-.05.2h-.65l-.2,0a.11.11,0,0,1,.1-.1h.8Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="11.61 4.35 11.51 4.45 10.91 4.45 10.81 4.35 10.91 4.3 11.51 4.3 11.61 4.35" style="fill:#2c80c3"/><path d="M13.93,5l.05.2h-.7a.11.11,0,0,1-.1-.1l.2,0h.55Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="10.91 4.55 10.91 5 10.91 5 10.71 5.05 10.71 4.45 10.76 4.4 10.86 4.5 10.91 4.55" style="fill:#2c80c3"/><polygon points="10.91 3.75 10.91 4.2 10.76 4.35 10.71 4.3 10.71 3.7 10.91 3.75" style="fill:#2c80c3"/><path d="M12.78,4.42v.65a.11.11,0,0,1-.1.1l0-.2v-.5l.15,0Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M12.68,3.47l0,.2H12l-.21,0a.12.12,0,0,1,.1-.1h.81Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="10.21 4.35 10.11 4.45 9.51 4.45 9.41 4.35 9.51 4.3 10.11 4.3 10.21 4.35" style="fill:#2c80c3"/><path d="M12.53,5l.05.2h-.71a.12.12,0,0,1-.1-.1l.21,0h.55Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="9.51 3.75 9.51 4.2 9.36 4.35 9.31 4.3 9.31 3.7 9.51 3.75" style="fill:#2c80c3"/><path d="M11.37,4.42v.65a.11.11,0,0,1-.1.1L11.17,5v-.5l.2-.1Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M11.37,3.62v.65l0,.05-.15-.15v-.5l.05-.2Q11.37,3.55,11.37,3.62Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="8.81 4.35 8.71 4.45 8.11 4.45 8.01 4.35 8.11 4.3 8.71 4.3 8.81 4.35" style="fill:#2c80c3"/><polygon points="8.11 3.7 8.11 4.2 7.96 4.35 7.91 4.3 7.91 3.6 8.11 3.7" style="fill:#2c80c3"/><path d="M10,4.42v.65a.11.11,0,0,1-.1.1l0-.2v-.5l.15,0Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M10,3.62v.65l-.05.05-.15-.15v-.5l.05-.2Q10,3.55,10,3.62Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="7.41 4.35 7.31 4.45 6.71 4.45 6.61 4.35 6.71 4.3 7.31 4.3 7.41 4.35" style="fill:#2c80c3"/><path d="M9.82,3.47l-.05.2h-.6l-.2,0a.11.11,0,0,1,.1-.1h.75Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M9.72,5l0,.2h-.7a.11.11,0,0,1-.1-.1l.2,0h.55Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M8.57,3.62v.65l-.05.05-.15-.15v-.5l.05-.2Q8.57,3.55,8.57,3.62Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="6 4.35 5.91 4.45 5.3 4.45 5.2 4.35 5.3 4.3 5.91 4.3 6 4.35" style="fill:#2c80c3"/><path d="M8.42,5l.05.2H7.72a.11.11,0,0,1-.1-.1l.2,0h.6Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M8.42,3.47l-.05.2H7.82l-.25,0a.11.11,0,0,1,.1-.1h.75Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="5.3 4.55 5.3 5 5.1 5.05 5.1 4.45 5.15 4.4 5.3 4.55" style="fill:#2c80c3"/><path d="M7.17,4.42v.65a.11.11,0,0,1-.1.1L7,5v-.5l.15,0Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M7.17,3.62v.65l0,.05L7,4.17v-.5l0-.2Q7.17,3.55,7.17,3.62Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M6.57,4.42v.65a.11.11,0,0,1-.1.1h0l0-.15v-.5l.15-.1Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M6.57,3.62v.65l-.05.05-.15-.15v-.5l0-.15h0C6.52,3.52,6.57,3.57,6.57,3.62Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M6.42,3.47l0,.2H5.82l-.25,0a.11.11,0,0,1,.1-.1h.75Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M6.32,5l0,.2h-.7a.11.11,0,0,1-.1-.1l.2,0h.55Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><polygon points="3.3 4.55 3.3 5 3.3 5 3.1 5.05 3.1 4.45 3.15 4.4 3.3 4.55" style="fill:#2c80c3"/><polygon points="3.3 3.75 3.3 4.2 3.15 4.35 3.1 4.3 3.1 3.7 3.3 3.75" style="fill:#2c80c3"/><path d="M19.38,24H4.62a2.13,2.13,0,0,1-2.15-2.15V2.12A2.13,2.13,0,0,1,4.62,0H19.38a2.13,2.13,0,0,1,2.15,2.15V21.88A2.13,2.13,0,0,1,19.38,24ZM4.62.57A1.56,1.56,0,0,0,3.07,2.12V21.88a1.56,1.56,0,0,0,1.55,1.55H19.38a1.56,1.56,0,0,0,1.55-1.55V2.12A1.56,1.56,0,0,0,19.38.57Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M19.33,6.82H4.62a.32.32,0,0,1-.3-.3V2.12a.32.32,0,0,1,.3-.3H19.33a.32.32,0,0,1,.3.3v4.4A.27.27,0,0,1,19.33,6.82ZM5,6.22H19V2.47H5Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M8.72,22.18H5.57a.32.32,0,0,1-.3-.3V18.73a.3.3,0,0,1,.6,0v2.8h2.8a.32.32,0,0,1,.3.3C9,22,8.87,22.18,8.72,22.18Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M11.83,22.18H8.67a.32.32,0,0,1-.3-.3V18.73a.3.3,0,1,1,.6,0v2.8h2.8a.33.33,0,0,1,.31.3C12.08,22,12,22.18,11.83,22.18Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M15,22.18H11.83a.32.32,0,0,1-.31-.3V18.73a.31.31,0,0,1,.61,0v2.8h2.8a.32.32,0,0,1,.3.3C15.23,22,15.13,22.18,15,22.18Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M8.72,19H5.57a.32.32,0,0,1-.3-.3V15.58a.3.3,0,0,1,.6,0v2.8h2.8a.32.32,0,0,1,.3.3C9,18.83,8.87,19,8.72,19Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M11.83,19H8.67a.32.32,0,0,1-.3-.3V15.58a.3.3,0,0,1,.6,0v2.8h2.8a.33.33,0,0,1,.31.3C12.08,18.83,12,19,11.83,19Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M15,19H11.83a.32.32,0,0,1-.31-.3V15.58a.31.31,0,0,1,.61,0v2.8h2.8a.32.32,0,0,1,.3.3C15.23,18.83,15.13,19,15,19Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M18.08,22.18H14.93a.32.32,0,0,1-.3-.3v-6.3a.3.3,0,1,1,.6,0v6h2.5v-6a.3.3,0,0,1,.6,0v6.25A.25.25,0,0,1,18.08,22.18Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M8.72,15.93H5.57a.32.32,0,0,1-.3-.3V12.48a.3.3,0,0,1,.6,0v2.8h2.8a.32.32,0,0,1,.3.3C9,15.73,8.87,15.93,8.72,15.93Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M11.83,15.93H8.67a.32.32,0,0,1-.3-.3V12.48a.3.3,0,0,1,.6,0v2.8h2.8a.33.33,0,0,1,.31.3C12.08,15.73,12,15.93,11.83,15.93Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M15,15.93H11.83a.32.32,0,0,1-.31-.3V12.48a.31.31,0,0,1,.61,0v2.8h2.8a.32.32,0,0,1,.3.3C15.23,15.73,15.13,15.93,15,15.93Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M18.08,15.93H14.93a.32.32,0,0,1-.3-.3V12.48a.3.3,0,1,1,.6,0v2.8h2.5v-2.8a.3.3,0,1,1,.6,0v3.15A.23.23,0,0,1,18.08,15.93Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M8.72,12.78H5.57a.32.32,0,0,1-.3-.3V9.32a.32.32,0,0,1,.3-.3H8.72a.3.3,0,1,1,0,.6H5.92v2.5h2.8a.33.33,0,0,1,.3.31C9,12.58,8.87,12.78,8.72,12.78Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M11.83,12.78H8.67a.32.32,0,0,1-.3-.3V9.32a.32.32,0,0,1,.3-.3h3.16a.3.3,0,0,1,0,.6H9v2.5h2.81a.33.33,0,0,1,.3.31A.34.34,0,0,1,11.83,12.78Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M15,12.78H11.83a.32.32,0,0,1-.31-.3V9.32a.32.32,0,0,1,.31-.3H15a.3.3,0,1,1,0,.6H12.17v2.5H15a.33.33,0,0,1,.3.31C15.28,12.58,15.13,12.78,15,12.78Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/><path d="M18.08,12.78H14.93a.32.32,0,0,1-.3-.3V9.32a.32.32,0,0,1,.3-.3h3.15a.32.32,0,0,1,.3.3v3.16A.29.29,0,0,1,18.08,12.78Zm-2.8-.6h2.5V9.67h-2.5Z" transform="translate(-2.47 0.03)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Total Pendapatan
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">Rp. 30.865.000,-</span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g id="F541_Car_sedans_traffic_transport_vehicles" data-name="F541, Car, sedans, traffic, transport, vehicles"><rect x="2.99" y="20.53" width="3" height="2.99" style="fill:#fff"/><rect x="17.97" y="20.53" width="2.99" height="2.99" style="fill:#fff"/><circle cx="4.51" cy="16.53" r="2" style="fill:#fff"/><circle cx="19.49" cy="16.53" r="2" style="fill:#fff"/><path d="M23.48,12.54v8H.48v-8h23Zm-2,4a2,2,0,1,0-2,2A2,2,0,0,0,21.48,16.53Zm-15,0a2,2,0,0,0-2-2,2,2,0,0,0,0,4A2,2,0,0,0,6.51,16.53Z" transform="translate(0 0)" style="fill:#a1c6e9"/><rect x="7.51" y="0.56" width="7.99" height="2.52" style="fill:#a1c6e9"/><polygon points="19.49 3.04 21.96 12.54 2 12.54 4.51 3.04 7.51 3.04 15.49 3.04 19.49 3.04" style="fill:#fff"/><path d="M6,24a.53.53,0,0,1-.52-.52v-3a.52.52,0,0,1,1,0v3A.53.53,0,0,1,6,24Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M3,24a.53.53,0,0,1-.51-.52v-3a.52.52,0,1,1,1,0v3A.53.53,0,0,1,3,24Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M21,24a.53.53,0,0,1-.52-.52v-3a.52.52,0,1,1,1,0v3A.53.53,0,0,1,21,24Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M18,24a.53.53,0,0,1-.52-.52v-3a.52.52,0,1,1,1,0v3A.53.53,0,0,1,18,24Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M23.48,21H.52A.53.53,0,0,1,0,20.49v-8A.53.53,0,0,1,.52,12H2a.53.53,0,0,1,.52.52A.57.57,0,0,1,2,13H1v7H23V13H22a.52.52,0,0,1,0-1h1.52a.53.53,0,0,1,.52.52v8A.59.59,0,0,1,23.48,21Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M22,13H2a.49.49,0,0,1-.4-.2.56.56,0,0,1-.08-.44L4,2.88a.48.48,0,0,1,.48-.36h3a.52.52,0,1,1,0,1H4.91L2.68,12.06H21.36L19.13,3.55h-3.6a.52.52,0,1,1,0-1h4a.48.48,0,0,1,.48.36l2.51,9.5a.56.56,0,0,1-.08.44A.83.83,0,0,1,22,13Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M15.49,3.55h-8A.53.53,0,0,1,7,3V.52A.53.53,0,0,1,7.51,0h8A.53.53,0,0,1,16,.52V3A.59.59,0,0,1,15.49,3.55ZM8,2.56h7V1H8Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M4.51,19a2.52,2.52,0,0,1,0-5A2.5,2.5,0,0,1,7,16.49,2.54,2.54,0,0,1,4.51,19Zm0-4A1.52,1.52,0,1,0,6,16.53,1.55,1.55,0,0,0,4.51,15Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M19.49,19A2.52,2.52,0,1,1,22,16.49,2.54,2.54,0,0,1,19.49,19Zm0-4A1.52,1.52,0,1,0,21,16.53,1.54,1.54,0,0,0,19.49,15Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M15.49,17h-7a.52.52,0,0,1,0-1h7a.53.53,0,0,1,.52.52A.56.56,0,0,1,15.49,17Z" transform="translate(0 0)" style="fill:#2c80c3"/><path d="M23.48,24H.52a.52.52,0,0,1,0-1h23a.53.53,0,0,1,.52.52A.59.59,0,0,1,23.48,24Z" transform="translate(0 0)" style="fill:#2c80c3"/></g></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">Kendaraan Masuk</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">Rp. 21.667.000,-</span>
															</span>
														</div>
														
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22.45"><g id="_658_car_transport_parking" data-name="658, car, transport, parking"><path d="M13.69,3.32H10.31A1.32,1.32,0,0,0,9,4.64v3.9a1.32,1.32,0,0,0,1.31,1.31h3.38A1.33,1.33,0,0,0,15,8.54V4.64A1.36,1.36,0,0,0,13.69,3.32Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M7.2,3.08a1,1,0,0,1,.28.72,1,1,0,0,1-1,1H4a1.15,1.15,0,0,1-.72-.28A1,1,0,0,1,3,3.8a1.1,1.1,0,0,1,.11-.52H2A1.2,1.2,0,0,1,1.31,3,1,1,0,0,1,1,2.29a1,1,0,0,1,1-1H4a1.15,1.15,0,0,1,.72.28A1,1,0,0,1,5,2.29a1.1,1.1,0,0,1-.11.52H6.53A1.06,1.06,0,0,1,7.2,3.08Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M20.94,4.32a1,1,0,0,1,1,1,1.15,1.15,0,0,1-.28.72.9.9,0,0,1-.71.28H19a1,1,0,0,1-1-1,1.12,1.12,0,0,1,.28-.71A1,1,0,0,1,19,4.32Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M23.44,9.29v4.5H17L18.19,11a2.93,2.93,0,0,1,2.63-1.71h2.62Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M15.2,15.74a.76.76,0,0,1,.76.76.73.73,0,0,1-.76.75H13.45a4,4,0,0,1,.32-1.51Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M10.51,17.25H8.76A.75.75,0,0,1,8,16.5a.74.74,0,0,1,.76-.76h1.39A3.69,3.69,0,0,1,10.51,17.25Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M5.77,11,7,13.75H.56V9.29H3.14A2.78,2.78,0,0,1,5.77,11Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M13.49,17.73a.52.52,0,0,1-.51-.52,3.72,3.72,0,0,1,.39-1.71.51.51,0,1,1,.92.44A2.83,2.83,0,0,0,14,17.21.59.59,0,0,1,13.49,17.73Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M17,14.27a.36.36,0,0,1-.2,0,.48.48,0,0,1-.24-.64l1.23-2.74a3.36,3.36,0,0,1,3.11-2h2.58a.52.52,0,0,1,.52.51v4.5a.53.53,0,0,1-.52.52.52.52,0,0,1-.51-.52v-4H20.82a2.39,2.39,0,0,0-2.19,1.43L17.39,14A.47.47,0,0,1,17,14.27Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M23.44,16.26H19a.52.52,0,1,1,0-1h4.49a.53.53,0,0,1,.52.52A.56.56,0,0,1,23.44,16.26Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M10.51,17.73a.53.53,0,0,1-.52-.52,2.83,2.83,0,0,0-.28-1.27.51.51,0,0,1,.92-.44,4.16,4.16,0,0,1,.4,1.71A.59.59,0,0,1,10.51,17.73Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M7,14.27A.49.49,0,0,1,6.57,14L5.33,11.24A2.39,2.39,0,0,0,3.14,9.81H1v4a.52.52,0,0,1-.51.52A.53.53,0,0,1,0,13.79V9.29a.52.52,0,0,1,.52-.51H3.1a3.42,3.42,0,0,1,3.11,2l1.23,2.74a.47.47,0,0,1-.24.64C7.12,14.23,7.08,14.27,7,14.27Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M5,16.26H.56a.52.52,0,0,1,0-1H5.05a.53.53,0,0,1,.52.52A.57.57,0,0,1,5,16.26Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M12,22.71a.53.53,0,0,1-.52-.52V9.77a.52.52,0,0,1,1,0V22.23A.52.52,0,0,1,12,22.71Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M13.69,10.29H10.31A1.78,1.78,0,0,1,8.52,8.5V4.6a1.78,1.78,0,0,1,1.79-1.79h3.38A1.78,1.78,0,0,1,15.48,4.6V8.5A1.83,1.83,0,0,1,13.69,10.29ZM10.31,3.8a.8.8,0,0,0-.8.8V8.5a.79.79,0,0,0,.8.79h3.38a.79.79,0,0,0,.8-.79V4.6a.8.8,0,0,0-.8-.8Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M21.93,23.22H2a.52.52,0,1,1,0-1h19.9a.52.52,0,1,1,0,1Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M11,8.78a.53.53,0,0,1-.52-.52V6.79a.52.52,0,1,1,1,0V8.3A.52.52,0,0,1,11,8.78Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M12.22,7.3H11a.53.53,0,0,1-.52-.51V5.27A.52.52,0,0,1,11,4.76h1.23a1.24,1.24,0,0,1,.87,2.11A1.1,1.1,0,0,1,12.22,7.3Zm-.72-1h.76c.08,0,.16,0,.16-.08a.3.3,0,0,0,.08-.16.26.26,0,0,0-.24-.24H11.5v.48Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M6.53,5.31H4A1.61,1.61,0,0,1,3,4.88,1.39,1.39,0,0,1,2.51,3.8H2A1.58,1.58,0,0,1,1,3.36,1.37,1.37,0,0,1,.52,2.29,1.5,1.5,0,0,1,2,.78H4a1.61,1.61,0,0,1,1.07.43,1.39,1.39,0,0,1,.44,1.08h1a1.6,1.6,0,0,1,1.07.44A1.37,1.37,0,0,1,8,3.8,1.56,1.56,0,0,1,6.53,5.31ZM2,1.81a.53.53,0,0,0-.52.52.49.49,0,0,0,.16.36A.6.6,0,0,0,2,2.85H3.14a.52.52,0,0,1,.44.23.59.59,0,0,1,0,.52.57.57,0,0,0-.08.24.49.49,0,0,0,.16.36A.51.51,0,0,0,4,4.36H6.53A.52.52,0,0,0,7,3.84a.48.48,0,0,0-.15-.36.51.51,0,0,0-.36-.16H4.9a.5.5,0,0,1-.44-.24.57.57,0,0,1,0-.51.57.57,0,0,0,.08-.24A.49.49,0,0,0,4.38,2,.51.51,0,0,0,4,1.81Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M20.94,6.79H19a1.52,1.52,0,0,1-1.52-1.52,1.61,1.61,0,0,1,.44-1.07A1.55,1.55,0,0,1,19,3.76h2a1.52,1.52,0,0,1,1.51,1.51A1.62,1.62,0,0,1,22,6.35,1.61,1.61,0,0,1,20.94,6.79Zm-2-2a.49.49,0,0,0-.36.16.47.47,0,0,0-.16.35.5.5,0,0,0,.52.48h2a.48.48,0,0,0,.35-.16.51.51,0,0,0,.16-.36.52.52,0,0,0-.51-.51l-2,0Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M7.48,20.68h0A1.66,1.66,0,0,0,7.36,20s0-.16-.08-.16,0-.12-.08-.16h0a1.87,1.87,0,0,0-1.67-1,2,2,0,1,0,0,4,1.92,1.92,0,0,0,2-2S7.52,20.68,7.48,20.68Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M.56,15.74v-2H7a3.45,3.45,0,0,1,3.15,2H8.8A.76.76,0,0,0,8,16.5a.73.73,0,0,0,.76.75h1.75a3.54,3.54,0,0,1-3,3.47,1.69,1.69,0,0,0-.2-.8l-.08-.16h0a2,2,0,0,0-1.75-1,2,2,0,0,0-2,2h-3Z" transform="translate(0 -0.78)" style="fill:#a1c6e9"/><path d="M5.53,21.71a1,1,0,1,1,1-1A1,1,0,0,1,5.53,21.71Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M3.54,21.23h-3A.53.53,0,0,1,0,20.72v-7a.53.53,0,0,1,.52-.52H7a4,4,0,0,1,3.59,2.27.43.43,0,0,1,0,.48.46.46,0,0,1-.44.24H8.76a.24.24,0,0,0,0,.48h1.75a.53.53,0,0,1,.52.51,4,4,0,0,1-1,2.63A3.86,3.86,0,0,1,7.6,21.15.5.5,0,0,1,7,20.68,2.67,2.67,0,0,0,7,20.16a.39.39,0,0,1,.23-.6.52.52,0,0,1,.64.28c0,.08,0,.16.08.24a3,3,0,0,0,1.35-.88A2.75,2.75,0,0,0,10,17.73H8.76a1.24,1.24,0,1,1,0-2.47h.47a2.92,2.92,0,0,0-2.22-1H1v6H3.54a.53.53,0,0,1,.52.52A.59.59,0,0,1,3.54,21.23Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M5.53,23.22A2.51,2.51,0,0,1,3,20.72a2.48,2.48,0,0,1,3-2.43,2.5,2.5,0,0,1-.52,4.93ZM4,20.72a1.52,1.52,0,0,0,1.51,1.51A1.47,1.47,0,0,0,7,20.4s0-.08,0-.08a1.56,1.56,0,0,0-.44-.68,1.22,1.22,0,0,0-.28-.2.89.89,0,0,0-.4-.12.81.81,0,0,0-.2,0A1.43,1.43,0,0,0,4,20.72Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M18,18.77a2,2,0,0,0-1.27.91s0,.08-.08.12a1.74,1.74,0,0,0-.2.84h0v0A2,2,0,1,0,18,18.77Z" transform="translate(0 -0.78)" style="fill:#fff"/><path d="M23.44,15.74v5h-3A2,2,0,0,0,18,18.77a2,2,0,0,0-1.27.91s0,.08-.08.12a2,2,0,0,0-.2.84,3.47,3.47,0,0,1-2.11-1.16,3.57,3.57,0,0,1-.88-2.31h1.75a.75.75,0,0,0,.76-.75.74.74,0,0,0-.76-.76H13.85a3.45,3.45,0,0,1,3.15-2h6.44v2.07Z" transform="translate(0 -0.78)" style="fill:#a1c6e9"/><path d="M23.44,21.23h-3a.52.52,0,1,1,0-1H23v-6H17a2.93,2.93,0,0,0-2.23,1h.47a1.24,1.24,0,1,1,0,2.47H14.05a2.89,2.89,0,0,0,.68,1.47,3,3,0,0,0,1.35.88c0-.08,0-.2.08-.24a.49.49,0,1,1,.91.36,2,2,0,0,0-.07.52.48.48,0,0,1-.56.47A3.86,3.86,0,0,1,14,19.84a4,4,0,0,1-1-2.63.53.53,0,0,1,.52-.51h1.75a.24.24,0,0,0,0-.48H13.89a.55.55,0,0,1-.44-.24.51.51,0,0,1,0-.48A4,4,0,0,1,17,13.23h6.48a.53.53,0,0,1,.52.52v7A.68.68,0,0,1,23.44,21.23Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M18.47,23.22A2.49,2.49,0,0,1,16,20.16a2.87,2.87,0,0,1,.4-.88,2.46,2.46,0,0,1,2-1A2.52,2.52,0,0,1,21,20.76,2.49,2.49,0,0,1,18.47,23.22ZM17,20.48a1.5,1.5,0,0,0,1.47,1.75,1.51,1.51,0,1,0-.24-3h-.08A1.51,1.51,0,0,0,17,20.48Zm1.07-1.71.08.47h0Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/><path d="M18.47,21.71a1,1,0,1,1,1-1A1,1,0,0,1,18.47,21.71Z" transform="translate(0 -0.78)" style="fill:#2c80c3"/></g></svg></span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Kendaraan Keluar
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">Rp. 9.198.000,-</span>
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
											  <th width="2%" colspan="2" rowspan="2" bgcolor="#f7fcff">Volume Muatan</th>
											  <th width="3%" colspan="3" bgcolor="#f7fcff">Jumlah Durasi<br>										        Parkir</th>
											  <th colspan="4" bgcolor="#f7fcff">Tarif</th>
											  <th width="7%" rowspan="2" bgcolor="#f7fcff">Total</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
									      </tr>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff">Vol</th>
											  <th width="2%" bgcolor="#f7fcff">Satuan</th>
											  <th width="3%" bgcolor="#f7fcff">Jam</th>
											  <th width="3%" bgcolor="#f7fcff">Menit</th>
											  <th width="3%" bgcolor="#f7fcff">Detik</th>
											  <th width="3%" bgcolor="#f7fcff">Dasar</th>
											  <th width="3%" bgcolor="#f7fcff">Jam Pertama</th>
											  <th width="3%" bgcolor="#f7fcff">Jam Berikutnya</th>
											  <th width="3%" bgcolor="#f7fcff">Maksimum</th>
									      </tr>
										</thead>
										<tbody style="line-height:10px;">
											<tr>
											  <td id="kt_table_34" style="text-align:right"><strong>1</strong></td>
											  <td colspan="17" nowrap style="text-align:left"><strong>Makassar</strong></td>
										  </tr>
											<tr>
											  <td bgcolor="#f7fcff"  width="1%" id="kt_table_12" style="text-align:right"><strong>1.1</strong></td>
											  <td bgcolor="#f7fcff" colspan="17" nowrap style="text-align:left"><strong>Data Produksi Masuk</strong></td>
										  </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td width="1%" nowrap="nowrap" style="text-align:right">1.1.1</td>
											  <td width="5%" nowrap="nowrap" style="text-align:left">Reguler</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">94</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td colspan="5" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td colspan="2">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>752.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right"></td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">541</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td colspan="5" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span></div></td>
											  <td colspan="2">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.115.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">1.1.2</td>
											  <td nowrap="nowrap" style="text-align:left">Member</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td colspan="5" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="4" nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Sedan/Jeep/Pick Up</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td colspan="5" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="4" nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Truck/Tronton/Trailer</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td colspan="5" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="4" nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Pegawai / Instansi / Others</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td colspan="5" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="4" nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td nowrap style="text-align:right">1.1.3</td>
											  <td nowrap style="text-align:left">Pass Kade</td>
											  <td nowrap style="text-align:left">Truck</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">100</td>
											  <td nowrap="nowrap" style="text-align:right">m3</td>
											  <td colspan="3" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td><span style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></span></td>
											  <td colspan="2">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>800.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td colspan="2" rowspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">Tronton</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">m3</td>
											  <td colspan="3" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td colspan="3">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td nowrap style="text-align:left">Gerobak</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">Unit</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">m3</td>
											  <td colspan="3" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td colspan="3">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"><span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" id="kt_table_5" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">1.1.4</td>
											  <td nowrap="nowrap" style="text-align:left">Pass Orang</td>
											  <td nowrap style="text-align:left">Reguler</td>
											  <td nowrap="nowrap" style="text-align:right">1500</td>
											  <td nowrap="nowrap" style="text-align:right">Orang</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="3" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td colspan="3">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>12.000.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
										  </tr>
											<tr>
											  <td colspan="18" id="kt_table_7" style="text-align:right">&nbsp;</td>
										  </tr>
											<tr>
											  <td colspan="16" bgcolor="#f7fcff" id="kt_table_10" style="text-align:right"><b>Sub Total Produksi Masuk</b></td>
											  <td bgcolor="#f7fcff"><div style="display: flex; justify-content: space-between; align-items: center; font-weight: bold;"> <span>Rp.</span> <span>21.667.000,-</span></div></td>
											  <td bgcolor="#f7fcff">&nbsp;</td>
									      </tr>
											<tr>
											  <td colspan="18" id="kt_table_31" style="text-align:right">&nbsp;</td>
										  </tr>
											<tr>
											  <td bgcolor="#f7fcff"  style="text-align:right" id="kt_table_27"><strong>1.2</strong></td>
											  <td bgcolor="#f7fcff"  colspan="17" nowrap style="text-align:left"><strong>Data Produksi Keluar</strong></td>
										  </tr>
											<tr>
											  <td colspan="2" rowspan="13" id="kt_table_26" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">1.2.1</td>
											  <td nowrap="nowrap" style="text-align:left">Reguler</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">94</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>20.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.242.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">541</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>50.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.027.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">1.2.2</td>
											  <td nowrap="nowrap" style="text-align:left">Member</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" rowspan="3" nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Sedan/Jeep/Pick Up</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Truck/Tronton/Trailer</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pegawai / Instansi / Others</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.3</td>
											  <td nowrap="nowrap" style="text-align:left">Kendaraan Berangkat</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>20.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.242.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>50.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.027.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.4</td>
											  <td nowrap="nowrap" style="text-align:left">Muatan Kapal</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>210.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.250.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.5</td>
											  <td nowrap="nowrap" style="text-align:left">Free Pass</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.6</td>
											  <td nowrap="nowrap" style="text-align:left">Denda</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>700.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td colspan="2" nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.500..000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="18" id="kt_table_6" style="text-align:right">&nbsp;</td>
										  </tr>
											<tr>
											  <td colspan="16" bgcolor="#f7fcff" id="kt_table_11" style="text-align:right"><b>Sub Total Produksi Keluar</b></td>
											  <td bgcolor="#f7fcff"><div style="display: flex; justify-content: space-between; align-items: center; font-weight: bold;"> <span>Rp.</span> <span>9.198.000,-</span></div></td>
											  <td bgcolor="#f7fcff">&nbsp;</td>
									      </tr>
								          <tr>
										      <td bgcolor="" style="text-align:right" colspan="18" id="kt_table_8">&nbsp;</td>
									      </tr>
									      <tr>
										    <td bgcolor="#f7fcff" style="text-align:right" colspan="16" id="kt_table_10"><b>Grand Total</b></td>
										    <td bgcolor="#f7fcff"><div style="display: flex; justify-content: space-between; align-items: center; font-weight: bold;"> <span>Rp.</span> <span>30.865.000,-</span></div></td>
										    <td bgcolor="#f7fcff">&nbsp;</td>
									      </tr>
										  <tr>
										    <td bgcolor="#f7fcff" style="text-align:left" colspan="18" id="kt_table_2"><em><strong>Terbilang : Tiga Puluh Juta Delapan Ratus Enam Puluh Lima Ribu Rupiah</strong></em></td>
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
