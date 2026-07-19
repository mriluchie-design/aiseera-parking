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
                    Master Data
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											BARANG </span>
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
				<a href="barang-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus-circle"></i>Tambah Data
				<!--<i class="flaticon2-plus"></i>-->
			</a>
				
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
                                <label>Lokasi Gudang :</label>
								
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
                                <label class="">Tanggal Pembelian :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-1">
                                <label>Lemari :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">1</option>
                                      <option value="2">2</option>
                                      <option value="2">3</option>
                                      <option value="2">4</option>
									  <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Rak :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">1</option>
                                      <option value="2">2</option>
                                      <option value="2">3</option>
                                      <option value="2">4</option>
									  <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Kondisi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true" >
                                      <option value="1">Baru</option>
                                      <option value="2">Bekas</option>
									  <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Ready</option>
                                      <option value="2">Limit</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							
    		                    </div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
								<div class="col-lg-4">
                                <label>Nama Barang :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								 <div class="col-lg-2">
                                <label>Kategori :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      
									  <option value="1">Kebutuhan Project</option>
                                      <option value="2">Peralatan Kantor</option>
                                      <option value="2">Peralatan Kerja</option>
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
            <!--begin::End-->
<div class="row">
								
								
								
								
								
								<div class="col-xl-12">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label" style="margin-left:55px;">
												<h3 class="kt-portlet__head-title">
													Data Barang
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
																Total Barang
															</span>

															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">105</span>
															
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Gudang
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">12</span>
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Gudang</th>
											  <th colspan="10" bgcolor="#f7fcff">Barang / Material</th>
											  <th colspan="3" bgcolor="#feffed">Stok</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">Kondisi</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">PIC</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">Foto</th>
											  <th width="1%" bgcolor="#f7fcff">Nomor SKU</th>
											  <th width="1%" bgcolor="#f7fcff">Kode Barang</th>
											  <th width="1%" bgcolor="#f7fcff">Kategori</th>
											  <th width="1%" bgcolor="#f7fcff">Jenis</th>
											  <th width="10%" bgcolor="#f7fcff">Nama</th>
											  <th width="2%" bgcolor="#f7fcff">Tanggal Expired</th>
											  <th width="1%" bgcolor="#f7fcff">Rak</th>
											  <th width="1%" bgcolor="#f7fcff">Row</th>
											  <th width="1%" bgcolor="#f7fcff">Box</th>
											  <th width="1%" bgcolor="#feffed">Vol</th>
											  <th width="1%" bgcolor="#feffed">Satuan</th>
											  <th width="1%" bgcolor="#feffed">Status</th>
									      </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_4" style="text-align:right">1</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" width="40" height="40"></td>
												<td nowrap="nowrap" style="text-align:left">0001010726</td>
												<td nowrap="nowrap" style="text-align:left">000101010726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser</td>
												<td nowrap="nowrap" style="text-align:left">Custom Casing Dispenser Single</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2031</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:right">10</td>
												<td nowrap="nowrap" style="text-align:left">Unit</td>
												<td style="text-align:center"><span type="button" class="btn btn-label-twitter btn-sm">Ready</span></td>
												<td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>

										  </tr>
										  <tr>
												<td id="kt_table_4" style="text-align:right">2</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" width="40" height="40"></td>
												<td nowrap="nowrap" style="text-align:left">0002010726</td>
												<td nowrap="nowrap" style="text-align:left">000102010726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser</td>
												<td nowrap="nowrap" style="text-align:left">Payment</td>
												<td width="198">Payment Reader</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2031</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">2</td>
												<td nowrap="nowrap" style="text-align:right">1</td>
												<td nowrap="nowrap" style="text-align:left">Unit</td>
												<td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
												<td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												     <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td id="kt_table_4" style="text-align:right">3</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" width="40" height="40"></td>
												<td nowrap="nowrap" style="text-align:left">0003010726</td>
												<td nowrap="nowrap" style="text-align:left">000103010726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser</td>
												<td nowrap="nowrap" style="text-align:left">Printer</td>
												<td>Printer Thermal</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2031</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">3</td>
												<td nowrap="nowrap" style="text-align:right">1</td>
												<td nowrap="nowrap" style="text-align:left">Unit</td>
												<td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
												<td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td id="kt_table_4" style="text-align:right">4</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" width="40" height="40"></td>
												<td nowrap="nowrap" style="text-align:left">0004010726</td>
												<td nowrap="nowrap" style="text-align:left">000104010726</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser</td>
												<td nowrap="nowrap" style="text-align:left">Webcam</td>
												<td>Webcam</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2031</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">4</td>
												<td nowrap="nowrap" style="text-align:right">1</td>
												<td nowrap="nowrap" style="text-align:left">Unit</td>
												<td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
												<td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												     <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
  <td id="kt_table_4" style="text-align:right">5</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" width="40" height="40"></td>
  <td nowrap="nowrap" style="text-align:left">0005010726</td>
  <td nowrap="nowrap" style="text-align:left">000105010726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser</td>
  <td nowrap="nowrap" style="text-align:left">Button</td>
  <td>Button Bantuan</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
												<td nowrap="nowrap" style="text-align:center">2</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
	  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												     <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
</tr>
<tr>
  <td id="kt_table_4" style="text-align:right">6</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" width="40" height="40"></td>
  <td nowrap="nowrap" style="text-align:left">0006010726</td>
  <td nowrap="nowrap" style="text-align:left">000106010726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser</td>
  <td nowrap="nowrap" style="text-align:left">Monitor</td>
  <td>Display Layar</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
												<td nowrap="nowrap" style="text-align:center">3</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
	  <td nowrap="nowrap" style="text-align:right">0</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												     <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
</tr>
<tr>
  <td id="kt_table_16" style="text-align:right">7</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0007010726</td>
  <td nowrap="nowrap" style="text-align:left">000107010726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser</td>
  <td nowrap="nowrap" style="text-align:left">Mini PC</td>
  <td width="198">Mini PC</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">10</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-twitter btn-sm">Ready</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_7"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
</tr>
<tr>
  <td id="kt_table_15" style="text-align:right">8</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0008010726</td>
  <td nowrap="nowrap" style="text-align:left">000108010726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser</td>
  <td nowrap="nowrap" style="text-align:left">Jaringan</td>
  <td>Hub Switch 8 Port Manageable    Cloud</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">2</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_6"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
</tr>
<tr>
  <td id="kt_table_14" style="text-align:right">9</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0009010726</td>
  <td nowrap="nowrap" style="text-align:left">000109010726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser</td>
  <td nowrap="nowrap" style="text-align:left">Sensor</td>
  <td>VLD Dispenser</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">3</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_5"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
</tr>
<tr>
  <td id="kt_table_13" style="text-align:right">10</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0010010726</td>
  <td nowrap="nowrap" style="text-align:left">000110010726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser</td>
  <td nowrap="nowrap" style="text-align:left">Controller</td>
  <td>Controller Dispenser</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">4</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_4"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
</tr>
<tr>
  <td id="kt_table_12" style="text-align:right">11</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0011010726</td>
  <td nowrap="nowrap" style="text-align:left">000111010726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser</td>
  <td nowrap="nowrap" style="text-align:left">Speaker</td>
  <td>Sound Speaker</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">2</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_3"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>

      </ul>
    </div>
  </div></td>
</tr>
<tr>
  <td id="kt_table_11" style="text-align:right">12</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0012010726</td>
  <td nowrap="nowrap" style="text-align:left">000112010726</td>
  <td nowrap="nowrap" style="text-align:left">Dispenser</td>
  <td nowrap="nowrap" style="text-align:left">UPS</td>
  <td>Ups</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">3</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">0</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_2"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
</tr>
<tr>
  <td id="kt_table_11" style="text-align:right">13</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0013010726</td>
  <td nowrap="nowrap" style="text-align:left">000113010726</td>
  <td nowrap="nowrap" style="text-align:left">Barrier Gate</td>
  <td nowrap="nowrap" style="text-align:left">Barrier Gate</td>
  <td width="198">Barrier    Gate Servo</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">3</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_5"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_11" style="text-align:right">14</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0014010726</td>
  <td nowrap="nowrap" style="text-align:left">000213010726</td>
  <td nowrap="nowrap" style="text-align:left">Barrier Gate</td>
  <td nowrap="nowrap" style="text-align:left">Sensor</td>
  <td>VLD  Barrier Gate</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">4</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_4"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_11" style="text-align:right">15</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0015010726</td>
  <td nowrap="nowrap" style="text-align:left">000210010726</td>
  <td nowrap="nowrap" style="text-align:left">Barrier Gate</td>
  <td nowrap="nowrap" style="text-align:left">Controller</td>
  <td>Controller Barrier Gate</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">2</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_3"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_11" style="text-align:right">16</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0016010726</td>
  <td nowrap="nowrap" style="text-align:left">000114010726</td>
  <td nowrap="nowrap" style="text-align:left">Sensor dan Lainnya</td>
  <td nowrap="nowrap" style="text-align:left">UHF Reader</td>
  <td>UHF Reader Mid Range</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">3</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">0</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_2"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_11" style="text-align:right">17</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0017010726</td>
  <td nowrap="nowrap" style="text-align:left">000115010726</td>
  <td nowrap="nowrap" style="text-align:left">Sensor dan Lainnya</td>
  <td nowrap="nowrap" style="text-align:left">IP Camera</td>
  <td>IP Camera</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">3</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_5"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>

    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_11" style="text-align:right">18</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0018010726</td>
  <td nowrap="nowrap" style="text-align:left">000215010726</td>
  <td nowrap="nowrap" style="text-align:left">Sensor dan Lainnya</td>
  <td nowrap="nowrap" style="text-align:left">ANPR Camera</td>
  <td>ANPR Camera</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">4</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_4"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_11" style="text-align:right">19</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0019010726</td>
  <td nowrap="nowrap" style="text-align:left">000116010726</td>
  <td nowrap="nowrap" style="text-align:left">Sensor dan Lainnya</td>
  <td nowrap="nowrap" style="text-align:left">Sensor</td>
  <td>Quadbeam</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">2</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">1</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-warning btn-sm">Limit</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_3"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_11" style="text-align:right">20</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0020010726</td>
  <td nowrap="nowrap" style="text-align:left">000117010726</td>
  <td nowrap="nowrap" style="text-align:left">Sensor dan Lainnya</td>
  <td nowrap="nowrap" style="text-align:left">Tiang</td>
  <td>Tiang Kamera Motor</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">3</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">0</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_2"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_5" style="text-align:right">21</td>
  <td style="text-align:left" nowrap="nowrap">Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0021010726</td>
  <td nowrap="nowrap" style="text-align:left">000217010726</td>
  <td nowrap="nowrap" style="text-align:left">Sensor dan Lainnya</td>
  <td nowrap="nowrap" style="text-align:left">Tiang</td>
  <td>Tiang Kamera Mobil</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">3</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">0</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
        </ul>
      </div>
    </div></td>
</tr>
<tr>
  <td id="kt_table_11" style="text-align:right">22</td>
  <td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><img src="../assets/img/illustrations/camera.png" alt="" width="40" height="40" /></td>
  <td nowrap="nowrap" style="text-align:left">0022010726</td>
  <td nowrap="nowrap" style="text-align:left">000317010726</td>
  <td nowrap="nowrap" style="text-align:left">Sensor dan Lainnya</td>
  <td nowrap="nowrap" style="text-align:left">Tiang</td>
  <td>Tiang Quadbeam</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2031</td>
  <td nowrap="nowrap" style="text-align:center">3</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:right">0</td>
  <td nowrap="nowrap" style="text-align:left">Unit</td>
  <td style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Kosong</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span></a></li>
        <li class="kt-nav__item"> <a href="history-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-history"></i> <span class="kt-nav__link-text">History Barang</span></a></li>
        <li class="kt-nav__item"> <a href="edit-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Barang</span></a></li>
        <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_2"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
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
								Menampilkan 21 dari 230 Data
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
