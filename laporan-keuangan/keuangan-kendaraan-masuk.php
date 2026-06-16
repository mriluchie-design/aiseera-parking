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
                    Transaksi
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Kendaraan Masuk </span>
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
                            <a href="cetak-rekap-transaksi-kendaraan-masuk.php" class="kt-nav__link">
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
                                      <option value="1" selected="">Reguler</option>
                                      <option value="2">Member</option>
                                      <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
								
								
								
								<div class="col-lg-2">
                                <label>Jenis :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Mobil</option>
									  <option value="2">Sepeda Motor</option>
                                      <option value="1" >Pegawai/Instansi/Others</option>
                                      <option value="2">Sedan/Jeep/Pick Up</option>
                                      <option value="2">Truck/Tronton/Trailer</option>
									  <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
								<div class="col-lg-2">
                                <label>ID Transaksi :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label>No. Plat :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
							
							
							
							
							
							
    		                    </div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
								
								<div class="col-lg-2">
                                <label>ID Pembayaran :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label class="">Tanggal Pembayaran :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
								<div class="col-lg-2">
                                <label>ID Reff :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label>Pembayaran :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">e-Money</option>
                                      <option value="1">QRIS</option>
                                      <option value="2">Tunai</option>
                                      <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
								<div class="col-lg-2">
                                <label>Provider Pembayaran :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Mandiri</option>
                                      <option value="1">BCA Flazz</option>
                                      <option value="1">Brizzi</option>
                                      <option value="1">BNI Tap Cash</option>
                                      <option value="1">OVO</option>
                                      <option value="1">DANA</option>
                                      <option value="1">Shoope Pay</option>
                                      <option value="1">BCA</option>
                                      <option value="1">Livin Mandiri</option>
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
																<span style="color:#ed1c24; font-size:17px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">Rp. 53.000,-</span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 15.4"><path d="M23.4,7V8H.52V7A2.25,2.25,0,0,1,2.77,4.75H21.16A2.24,2.24,0,0,1,23.4,7Z" transform="translate(0 -4.3)" style="fill:#a1c6e9"/><path d="M23.4,10.8v6.13a2.24,2.24,0,0,1-2.24,2.25H2.77A2.26,2.26,0,0,1,.52,16.93V10.8Z" transform="translate(0 -4.3)" style="fill:#a1c6e9"/><rect x="0.52" y="3.66" width="22.88" height="2.84" style="fill:#fff"/><path d="M23.4,8.49A.49.49,0,0,1,23,8v-1a1.82,1.82,0,0,0-1.79-1.8H2.77A1.82,1.82,0,0,0,1,7.07V8a.48.48,0,0,1-.45.45A.48.48,0,0,1,.08,8v-1A2.75,2.75,0,0,1,2.84,4.3H21.23A2.76,2.76,0,0,1,24,7.07V8A.67.67,0,0,1,23.4,8.49Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M21.16,19.7H2.77A2.76,2.76,0,0,1,0,16.93V10.8a.47.47,0,0,1,.45-.44.48.48,0,0,1,.45.44v6.13a1.82,1.82,0,0,0,1.79,1.8H21.08a1.82,1.82,0,0,0,1.8-1.8V10.8a.47.47,0,0,1,.45-.44.48.48,0,0,1,.45.44v6.13A2.6,2.6,0,0,1,21.16,19.7Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M23.4,11.25H.52a.47.47,0,0,1-.44-.45V8a.48.48,0,0,1,.44-.45H23.4a.48.48,0,0,1,.45.45V10.8C23.92,11,23.7,11.25,23.4,11.25ZM1,10.36H23V8.49H1Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M3.36,14.09a.47.47,0,0,1-.44-.45v-1a.48.48,0,0,1,.44-.45.48.48,0,0,1,.45.45v1A.48.48,0,0,1,3.36,14.09Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M5.23,14.09a.47.47,0,0,1-.44-.45v-1a.48.48,0,0,1,.44-.45.48.48,0,0,1,.45.45v1A.48.48,0,0,1,5.23,14.09Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M7.1,14.09a.48.48,0,0,1-.45-.45v-1a.49.49,0,0,1,.45-.45.48.48,0,0,1,.45.45v1A.48.48,0,0,1,7.1,14.09Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M9,14.09a.48.48,0,0,1-.45-.45v-1A.49.49,0,0,1,9,12.22a.48.48,0,0,1,.45.45v1A.48.48,0,0,1,9,14.09Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M10.84,14.09a.48.48,0,0,1-.45-.45v-1a.49.49,0,0,1,.45-.45.48.48,0,0,1,.45.45v1A.48.48,0,0,1,10.84,14.09Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M12.71,14.09a.48.48,0,0,1-.45-.45v-1a.45.45,0,0,1,.9,0v1A.48.48,0,0,1,12.71,14.09Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/><path d="M9.87,16.86H3.29a.48.48,0,0,1-.45-.45A.49.49,0,0,1,3.29,16H9.87a.49.49,0,0,1,.45.45A.43.43,0,0,1,9.87,16.86Z" transform="translate(0 -4.3)" style="fill:#2c80c3"/></svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">Emoney</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">Rp. 23.000,-</span>
															</span>
														</div>
														
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19.12 24"><g id="_102_Barcode_Mobile_Phone_Scan_Scanner" data-name="102, Barcode, Mobile, Phone, Scan, Scanner"><path d="M18.5,20.16v1.51a2,2,0,0,1-2.05,2H7.27a2,2,0,0,1-2-2V20.16Z" transform="translate(-2.44)" style="fill:#a1c6e9"/><path d="M18.5,3.06V16l-4.17,4.16H5.23V7.22L9.39,3.06Z" transform="translate(-2.44)" style="fill:#fff"/><polygon points="16.05 16 16.05 20.16 11.89 20.16 16.05 16" style="fill:#fff"/><polygon points="6.95 3.06 2.79 7.22 2.79 6.9 2.79 3.06 6.95 3.06" style="fill:#fff"/><path d="M11.84,21.18a.78.78,0,0,1,.78.78.75.75,0,0,1-.78.77.76.76,0,0,1-.77-.77A.8.8,0,0,1,11.84,21.18Z" transform="translate(-2.44)" style="fill:#fff"/><path d="M18.5,2.33v.73H5.23V2.33a2,2,0,0,1,2-2h9.14A2.05,2.05,0,0,1,18.5,2.33Z" transform="translate(-2.44)" style="fill:#a1c6e9"/><path d="M11.84,23a1,1,0,1,1,1-1A1,1,0,0,1,11.84,23Zm0-1.55a.54.54,0,0,0-.53.53.55.55,0,0,0,.53.53.54.54,0,0,0,.53-.53A.53.53,0,0,0,11.84,21.43Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M12.62,2H11.07a.26.26,0,0,1-.25-.24.26.26,0,0,1,.25-.25h1.55a.26.26,0,0,1,.24.25A.23.23,0,0,1,12.62,2Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M14.33,20.41a.21.21,0,0,1-.16-.08.31.31,0,0,1,0-.37l4.16-4.16a.29.29,0,0,1,.37,0,.3.3,0,0,1,0,.36l-4.2,4.17C14.45,20.41,14.41,20.41,14.33,20.41Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M5.23,7.47a.21.21,0,0,1-.16-.08.31.31,0,0,1,0-.37L9.23,2.86a.31.31,0,0,1,.37,0,.3.3,0,0,1,0,.36L5.39,7.43S5.31,7.47,5.23,7.47Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M18.5,3.35H5.23A.27.27,0,0,1,5,3.1a.26.26,0,0,1,.24-.24H18.5a.26.26,0,0,1,.24.24A.27.27,0,0,1,18.5,3.35Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M18.5,20.41H5.23a.25.25,0,0,1,0-.49H18.5a.25.25,0,0,1,0,.49Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M16.45,24H7.27a2.33,2.33,0,0,1-2.33-2.33V2.33A2.33,2.33,0,0,1,7.27,0h9.14a2.33,2.33,0,0,1,2.33,2.33V21.67A2.32,2.32,0,0,1,16.45,24ZM7.27.53a1.81,1.81,0,0,0-1.79,1.8V21.67a1.81,1.81,0,0,0,1.79,1.8h9.14a1.82,1.82,0,0,0,1.8-1.8V2.33a1.82,1.82,0,0,0-1.8-1.8Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M21.05,7v7.2a1.69,1.69,0,0,1-1.67,1.67H4.55a1.69,1.69,0,0,1-1.67-1.67V7A1.69,1.69,0,0,1,4.55,5.35h14.9A1.73,1.73,0,0,1,21.05,7Z" transform="translate(-2.44)" style="fill:#a1c6e9"/><path d="M19.45,16.32H4.55a2.11,2.11,0,0,1-2.11-2.1V7A2.12,2.12,0,0,1,4.55,4.91h14.9A2.12,2.12,0,0,1,21.56,7v7.2A2.11,2.11,0,0,1,19.45,16.32ZM4.55,5.86A1.14,1.14,0,0,0,3.39,7v7.2a1.14,1.14,0,0,0,1.16,1.16h14.9a1.14,1.14,0,0,0,1.16-1.16V7a1.14,1.14,0,0,0-1.16-1.16Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M18.36,14.51a.47.47,0,0,1-.44-.44V7.24a.44.44,0,1,1,.88,0v6.83A.47.47,0,0,1,18.36,14.51Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M16.54,14.07a.47.47,0,0,1-.43-.44V7.24a.44.44,0,1,1,.87,0v6.39A.47.47,0,0,1,16.54,14.07Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M14.73,13.56a.47.47,0,0,1-.44-.44V7.24a.44.44,0,1,1,.87,0v5.88A.47.47,0,0,1,14.73,13.56Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M12.91,13.12a.46.46,0,0,1-.44-.43V7.24a.47.47,0,0,1,.44-.44.46.46,0,0,1,.43.44v5.45A.45.45,0,0,1,12.91,13.12Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M11.09,13.12a.45.45,0,0,1-.43-.43V7.24a.46.46,0,0,1,.43-.44.47.47,0,0,1,.44.44v5.45A.46.46,0,0,1,11.09,13.12Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M9.27,13.56a.47.47,0,0,1-.43-.44V7.24a.44.44,0,1,1,.87,0v5.88A.47.47,0,0,1,9.27,13.56Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M7.46,14.07A.47.47,0,0,1,7,13.63V7.24a.44.44,0,1,1,.87,0v6.39A.47.47,0,0,1,7.46,14.07Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M5.64,14.51a.47.47,0,0,1-.44-.44V7.24a.47.47,0,0,1,.44-.44.47.47,0,0,1,.44.44v6.83A.47.47,0,0,1,5.64,14.51Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M13.88,16.08H6.74a.25.25,0,0,1,0-.49h7.14a.26.26,0,0,1,.25.25A.23.23,0,0,1,13.88,16.08Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M13.88,17.1H6.74a.25.25,0,0,1,0-.49h7.14a.26.26,0,0,1,.25.25A.23.23,0,0,1,13.88,17.1Z" transform="translate(-2.44)" style="fill:#2c80c3"/><path d="M11.35,18.12H6.74a.26.26,0,0,1-.24-.24.27.27,0,0,1,.24-.25h4.61a.27.27,0,0,1,.25.25A.26.26,0,0,1,11.35,18.12Z" transform="translate(-2.44)" style="fill:#2c80c3"/></g></svg></span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																QRIS
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">Rp. 30.000,-</span>
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
					<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center;">
											  <th rowspan="2" bgcolor="#f7fcff" id="kt_table_3">#</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Lokasi</th>
											  <th colspan="4" bgcolor="#f7fcff">Kendaraan Masuk</th>
											  <th colspan="6" bgcolor="#fdfdec">Pembayaran</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
									      </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">Kategori</th>
											  <th width="2%" bgcolor="#f7fcff">Jenis</th>
											  <th width="2%" bgcolor="#f7fcff">ID</th>
											  <th width="2%" bgcolor="#f7fcff">Plat</th>
											  <th width="2%" bgcolor="#fdfdec">ID </th>
											  <th width="2%" bgcolor="#fdfdec">Waktu</th>
											  <th width="3%" bgcolor="#fdfdec">ID Reff</th>
											  <th width="1%" bgcolor="#fdfdec">Pembayaran</th>
											  <th width="5%" bgcolor="#fdfdec">Provider</th>
											  <th width="5%" bgcolor="#fdfdec">Nominal</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
											  <td id="kt_table_34" style="text-align:right"><strong>1</strong></td>
											  <td nowrap style="text-align:left">Makassar</td>
											  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm" >Reguler</span></td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap style="text-align:left">000001INTEM0626</td>
											  <td nowrap style="text-align:left">DD 1111 LUU</td>
											  <td nowrap style="text-align:left">000001PINTEM0626</td>
											  <td nowrap style="text-align:center">1 September 2026<hr>15:37:00 WITA</td>
											  <td nowrap style="text-align:left">000001PGTEM0626</td>
											  <td nowrap style="text-align:center"><span class="btn btn-label-brand btn-sm" >eMoney</span></td>
											  <td>Mandiri</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-transaksi-masuk.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-keuangan-karcis-masuk.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Karcis Masuk</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
											<tr>
											  <td  width="1%" id="kt_table_12" style="text-align:right">2</td>
											  <td nowrap="nowrap" style="text-align:left">Makassar</td>
											  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm" >Reguler</span></td>
											  <td nowrap style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:left">000002INTEM0626</td>
											  <td nowrap="nowrap" style="text-align:left">DD 1111 LU</td>
											  <td nowrap="nowrap" style="text-align:left">000002PINTEM0626</td>
											  <td nowrap="nowrap" style="text-align:center">1 September 2026<hr />15:38:00 WITA</td>
											  <td nowrap="nowrap" style="text-align:left">000002PGTEM0626</td>
											  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm" >eMoney</span></td>
											  <td>BNI Tapcash</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span></div></td>
											  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-transaksi-masuk.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-keuangan-karcis-masuk.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Karcis Masuk</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
										  <tr>
											  <td  width="1%" id="kt_table_12" style="text-align:right">3</td>
											  <td nowrap="nowrap" style="text-align:left">Makassar</td>
											  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm" >Reguler</span></td>
											  <td nowrap style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:left">000001INTQR0626</td>
											  <td nowrap="nowrap" style="text-align:left">DD 1111 LU</td>
											  <td nowrap="nowrap" style="text-align:left">000001PINTQR0626</td>
											  <td nowrap="nowrap" style="text-align:center">1 September 2026<hr />15:39:00 WITA</td>
											  <td nowrap="nowrap" style="text-align:left">000001PGTQR0626</td>
											  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-warning btn-sm" >QRIS</span></td>
											  <td>OVO</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span></div></td>
											  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-transaksi-masuk.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-keuangan-karcis-masuk.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Karcis Masuk</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
										  </tr>
										  <tr>
											  <td  width="1%" id="kt_table_12" style="text-align:right">4</td>
											  <td nowrap="nowrap" style="text-align:left">Makassar</td>
											  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm" >Reguler</span></td>
											  <td nowrap style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:left">000002INTQR0626</td>
											  <td nowrap="nowrap" style="text-align:left">DD 1111 LU</td>
											  <td nowrap="nowrap" style="text-align:left">000002PINTQR0626</td>
											  <td nowrap="nowrap" style="text-align:center">1 September 2026<hr />15:40:00 WITA</td>
											  <td nowrap="nowrap" style="text-align:left">000002PGTQR0626</td>
											  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-warning btn-sm" >QRIS</span></td>
											  <td>DANA</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span></div></td>
											  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-transaksi-masuk.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-keuangan-karcis-masuk.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Karcis Masuk</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
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
