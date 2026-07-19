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
                    Perangkat Terpasang
                </h3>
				

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
                            <a href="cetak-rekap-kendaraan-masuk.php" class="kt-nav__link">
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
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="2">3</option>
                                      <option value="2">4</option>
                                      <option value="2" selected>Keseluruhan</option>
                                      
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Jalur :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Masuk</option>
                                      <option value="2">Keluar</option>
									  <option value="2" selected>Keseluruhan</option>
                                     
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Nama Jalur :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Mobil - 1</option>
                                      <option value="1">Mobil - 2</option>
                                      <option value="1">Motor - 1</option>
                                      <option value="1">Mobil - 2</option>
									  <option value="2" selected>Keseluruhan</option>
                                     
                                  </select>
                            </div>
							
                            
								
								
							
							
							
    		                    </div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
								<div class="col-lg-2">
                                <label>Part Code :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label>Kategori Barang :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Mobil - 1</option>
                                      <option value="1">Mobil - 2</option>
                                      <option value="1">Motor - 1</option>
                                      <option value="1">Mobil - 2</option>
									  <option value="2" selected>Keseluruhan</option>
                                     
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Jenis :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Mobil - 1</option>
                                      <option value="1">Mobil - 2</option>
                                      <option value="1">Motor - 1</option>
                                      <option value="1">Mobil - 2</option>
									  <option value="2" selected>Keseluruhan</option>
                                     
                                  </select>
                            </div>
								<div class="col-lg-2">
                                <label>QR Code :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label>Nama Barang :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label>Installer :</label>
    	                       <div class="form-group">

					                         <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK">Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan" class="a">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional" class="a">
					 																<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Teknologi dan Riset" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<option value="12" selected>Keseluruhan</option>

					 														</select>
					                       </div>
        					
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
													Statistik
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar" style="margin-right:55px;">
												<a href="#" class="btn btn-label-light btn-sm dropdown-toggle" data-toggle="dropdown">
													Keseluruhan
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
																Total Perangkat
															</span>

															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">5</span>
															
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Selesai
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">3</span>
															</span>
														</div>
														
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Proses
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">2</span>
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Ditolak
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">0</span>
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
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="5%" bgcolor="#f7fcff">Lokasi<br></th>
											  <th width="1%" bgcolor="#f7fcff">Gate</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Nama Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Part Code</th>
											  <th width="1%" bgcolor="#f7fcff">Kategori</th>
											  <th width="1%" bgcolor="#f7fcff">Jenis</th>
											  <th width="1%" bgcolor="#f7fcff">QR Code</th>
											  <th width="10%" bgcolor="#f7fcff">Nama Barang</th>
											  <th width="1%" bgcolor="#f7fcff">Installer</th>
											  
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:right" id="kt_table_1">1</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td style="text-align:left" nowrap>Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">000101180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Casing</td>
												<td nowrap="nowrap" style="text-align:left">0001DSS01180726</td>
												<td style="text-align:left">CUSTOM CASING DISPENSER SINGLE</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-penerimaan.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly-flatbed"></i> <span class="kt-nav__link-text">Penerimaan Material</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>

										  </tr>
										  <tr>
												<td style="text-align:right" id="kt_table_1">2</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td style="text-align:left" nowrap>Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">000201180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Payment</td>
												<td nowrap="nowrap" style="text-align:left">0002DSS01180726</td>
												<td style="text-align:left">NFC PAYMENT READER</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-penerimaan.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly-flatbed"></i> <span class="kt-nav__link-text">Penerimaan Material</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>

										  </tr>
										  <tr>
												<td style="text-align:right" id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:left">Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">000301180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Printer</td>
												<td nowrap="nowrap" style="text-align:left">0003DSS01180726</td>
												<td style="text-align:left">PRINTER THERMAL</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td style="text-align:right" id="kt_table_1">4</td>
												<td nowrap="nowrap" style="text-align:left">Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">000401180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Webcam</td>
												<td nowrap="nowrap" style="text-align:left">0001BRG01180726</td>
												<td style="text-align:left">WEBCAM</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												  <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td style="text-align:right" id="kt_table_1">5</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">000501180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Button</td>
												<td nowrap="nowrap" style="text-align:left">0001SSR01180726</td>
												<td style="text-align:left">BUTTON BANTUAN</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
  <td style="text-align:right" id="kt_table_1">6</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
  <td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:left">000601180726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
  <td style="text-align:left">Display</td>
  <td nowrap="nowrap" style="text-align:left">0004DSS01180726</td>
  <td style="text-align:left">DISPLAY LAYAR</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
</tr>
<tr>
												<td style="text-align:right" id="kt_table_1">7</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td style="text-align:left" nowrap>Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">000701180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Mini PC</td>
												<td nowrap="nowrap" style="text-align:left">0001DSS01180726</td>
												<td style="text-align:left">MINI PC</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-penerimaan.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly-flatbed"></i> <span class="kt-nav__link-text">Penerimaan Material</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>

										  </tr>
										  <tr>
												<td style="text-align:right" id="kt_table_1">8</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td style="text-align:left" nowrap>Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">000801180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Switch</td>
												<td nowrap="nowrap" style="text-align:left">0002DSS01180726</td>
												<td style="text-align:left">HUB SWITCH 8 PORT MANAGEABLE CLOUD</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-penerimaan.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly-flatbed"></i> <span class="kt-nav__link-text">Penerimaan Material</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>

										  </tr>
										  <tr>
												<td style="text-align:right" id="kt_table_1">9</td>
												<td nowrap="nowrap" style="text-align:left">Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">000901180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">VLD</td>
												<td nowrap="nowrap" style="text-align:left">0003DSS01180726</td>
												<td style="text-align:left">VLD DISPENSER</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td style="text-align:right" id="kt_table_1">10</td>
												<td nowrap="nowrap" style="text-align:left">Makassar</td>

												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">001001180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Controller</td>
												<td nowrap="nowrap" style="text-align:left">0001BRG01180726</td>
												<td style="text-align:left">CONTROLLER DISPENSER</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												  <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td style="text-align:right" id="kt_table_1">11</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
												<td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:left">001101180726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td style="text-align:left">Speaker</td>
												<td nowrap="nowrap" style="text-align:left">0001SSR01180726</td>
												<td style="text-align:left">SOUND SPEAKER</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
  <td style="text-align:right" id="kt_table_1">12</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
  <td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:left">001201180726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
  <td style="text-align:left">UPS</td>
  <td nowrap="nowrap" style="text-align:left">0004DSS01180726</td>
  <td style="text-align:left">UPS</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
</tr>
<tr>
  <td id="kt_table_1" style="text-align:right">13</td>
  <td nowrap="nowrap" style="text-align:left">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
  <td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:left">001301180726</td>
  <td style="text-align:left">Barrier Gate</td>
  <td style="text-align:left">Barrier Gate</td>
  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
  <td style="text-align:left">BARRIER GATE SERVO</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026&lt;hr&gt;07:36:00 WITA&lt;hr&gt;12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_1" style="text-align:right">14</td>
  <td nowrap="nowrap" style="text-align:left">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
  <td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:left">001401180726</td>
  <td style="text-align:left">Barrier Gate</td>
  <td style="text-align:left">VLD</td>
  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
  <td style="text-align:left">VLD BARRIER GATE</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026&lt;hr&gt;07:36:00 WITA&lt;hr&gt;12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly"></i> <span class="kt-nav__link-text">Proses Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-penerimaan.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly-flatbed"></i> <span class="kt-nav__link-text">Penerimaan Material</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right" id="kt_table_6">15</td>
  <td nowrap="nowrap" style="text-align:left">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
  <td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:left">001501180726</td>
  <td style="text-align:left">Sensor dan Lainnya</td>
  <td style="text-align:left">Sensor</td>
  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
  <td style="text-align:left">UHF READER MID RANGE</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026&lt;hr&gt;07:36:00 WITA&lt;hr&gt;12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly"></i> <span class="kt-nav__link-text">Proses Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-penerimaan.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-dolly-flatbed"></i> <span class="kt-nav__link-text">Penerimaan Material</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right" id="kt_table_5">16</td>
  <td nowrap="nowrap" style="text-align:left">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
  <td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:left">001601180726</td>
  <td style="text-align:left">Sensor dan Lainnya</td>
  <td style="text-align:left">IP Camera</td>
  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
  <td style="text-align:left">IP CAMERA</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026&lt;hr&gt;07:36:00 WITA&lt;hr&gt;12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right" id="kt_table_4">17</td>
  <td nowrap="nowrap" style="text-align:left">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
  <td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:left">001701180726</td>
  <td style="text-align:left">Sensor dan Lainnya</td>
  <td style="text-align:left">ANPR Camera</td>
  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
  <td style="text-align:left">ANPR CAMERA</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026&lt;hr&gt;07:36:00 WITA&lt;hr&gt;12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right" id="kt_table_3">18</td>
  <td nowrap="nowrap" style="text-align:left">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--dark kt-badge--md kt-badge--inline">1</span></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">Masuk</span></td>
  <td nowrap="nowrap" style="text-align:left">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:left">001801180726</td>
  <td style="text-align:left">Sensor dan Lainnya</td>
  <td style="text-align:left">Sensor</td>
  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
  <td style="text-align:left">QUADBEAM</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026&lt;hr&gt;07:36:00 WITA&lt;hr&gt;12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="permintaan-material-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-proses.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-boxes"></i> <span class="kt-nav__link-text">Proses Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="permintaan-material-cetak.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Permintaan</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
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

                <!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_pending" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Operating Supervisor
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_5.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Operating Manager
																</p>
															</div>
															<button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button>
														</div>
														
														
														
													</div>
												</div>

												
												
												

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_release" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Operating Supervisor
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_5.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Operating Manager
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 21:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														
														
														
													</div>
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
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Assign Project Director</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												</div>

											</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  </div>
</div>

									<!--end: Datatable -->
								


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
