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
                    History Perangkat
                </h3>
				

            </div>
            <div class="kt-subheader__toolbar">
                <div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="#.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
				
			</div>
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
                                <label>QR Code :</label>
								
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
								
								<div class="col-lg-2">
                                <label>Status :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Instalasi</option>
                                      <option value="1">Service</option>
                                      <option value="1">Penggantian</option>
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
								
								
								
								
								
								<div class="col-xl-3">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label" style="margin-left:0px;">
												<h3 class="kt-portlet__head-title">
													Statistik
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar" style="margin-right:0px;">
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
																Service
															</span>

															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">5</span>
															
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Penggantian
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">3</span>
															</span>
														</div>
														
														
														
														
														
														
														
														
														
														
													</div>
													
													
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>
								<div class="col-lg-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Gate</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
						<div class="col-lg-4">
                          <label class="">Lokasi :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">
                        </div>
                        
						<div class="col-lg-4">
                          <label class="">Gate :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1">
                        </div>
						<div class="col-lg-4">
                          <label class="">Jalur :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Masuk">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                        
						<div class="col-lg-12">
                          <label class="">Nama Jalur :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mobil - 1">
                        </div>
						
						
						
                        </div>
						
						
						 </div>
						
                        </div>
                      </div>
					  <div class="col-lg-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Perangkat</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Nomor SKU	 :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000101010726">
                        </div>
                        
						<div class="col-lg-3">
                          <label class="">Kategori :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Barrier Gate">
                        </div>
						<div class="col-lg-6">
                          <label class="">Jenis :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hub Switch Gigabit Manage">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
                        
						<div class="col-lg-12">
                          <label class="">Nama Barang :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Asus NUC 14MNK15 - DDR5 8Gb +NVME 256Gb">
                        </div>
						
						
						
                        </div>
						
						
						 </div>
						
                        </div>
                      </div>
								</div>

							<!--End::Section-->

							

						
								
								
								
								
								
								
			

			<div class="kt-portlet__body">
				
					  
					  
					  <div class="form-group row">
				
					  
					  
						 
					  
						
					  
						<div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Perangkat</div><br><br>
										 
						<div class="form-group row">
						
								<div class="col-xl-12">

									<!--begin::Portlet-->
										
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
						
						<div class="form-group row">
						<div class="col-lg-12">
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Waktu</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">QR Code</th>
											  <th width="15%" rowspan="2" bgcolor="#f7fcff">Nama Barang</th>
											  <th colspan="2" bgcolor="#f7fcff">Installer / Pemohon</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">By</th>
											  <th width="1%" bgcolor="#f7fcff">Perangkat</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:right" id="kt_table_1">1</td>
												<td nowrap="nowrap" style="text-align:center">25 September 2026<hr />11:47:00 WITA</td>
												<td nowrap="nowrap" style="text-align:left">Instalasi</td>
												<td nowrap="nowrap" style="text-align:left">0001010107260001</td>
												<td nowrap="nowrap" style="text-align:left">Custom Casing Dispenser Single</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026<hr>07:36:00 WITA<hr>12321355123123214<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
										  </tr>
											<tr>
											  <td id="kt_table_4" style="text-align:right">2</td>
											  <td nowrap="nowrap" style="text-align:center">25 September 2027<hr />11:47:00 WITA</td>
											  <td nowrap="nowrap" style="text-align:left">Service</td>
											  <td nowrap="nowrap" style="text-align:left">0001010107260001</td>
											  <td>Payment Reader</td>
											  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026&lt;hr&gt;07:36:00 WITA&lt;hr&gt;12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
											  <td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
										  </tr>
									      <tr>
									        <td id="kt_table_4" style="text-align:right">3</td>
										      <td nowrap="nowrap" style="text-align:center">25 September 2027<hr />12:47:00 WITA</td>
										      <td nowrap="nowrap" style="text-align:left">Penggantian</td>
										      <td nowrap="nowrap" style="text-align:left">0003010107260001</td>
										      <td>Payment Reader</td>
										      <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="24 September 2026&lt;hr&gt;07:36:00 WITA&lt;hr&gt;12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
										      <td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
									      </tr>
</tbody>
									</table>
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
											
												
						
                     
						
                     
					  
                     
									</div>
									

									</div>


							<!--end:: Portlet-->


										</div>
								
													</div>
                        </div>
                        </div>
					  
					  
					  
					  
                      </div>
                      </div>

                     
					<!--begin: Datatable -->
					
                    <!--end: Datatable -->

                    <div class="modal fade" id="modal_tambah_material_dispenser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-boxes"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH BARANG</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
										<div class="form-group row">	
					  <div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Barang</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
						<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Perangkat :</label>
														 <select class="form-control kt-selectpicker" data-live-search="true">
                                      
                                      <option value="2">Dispenser Double</option>
                                      <option value="2" selected>Dispenser Single</option>
                                                                           
                                  </select>
													</div>
													
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<div class="form-group row">
						<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Kategori :</label>
														 <select class="form-control kt-selectpicker" data-live-search="true">
                                      
									  <option value="1">Casing</option>
                                      <option value="2">Reader</option>
                                      <option value="2">Scanner</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
													</div>
													<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Jenis :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      
									  <option value="1">Casing</option>
                                      <option value="2">Payment Reader</option>
                                      <option value="2">Honeywel</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
													</div>
													</div>
													
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">Nama Barang :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001501180726" selected>UHF READER MID RANGE</option>
          <option value="5" data-subtext="001601180726">IP CAMERA</option>
          <option value="5" data-subtext="001701180726">ANPR CAMERA</option>
          <option value="5" data-subtext="001801180726">QUADBEAM</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
<div class="col-lg-6">
														<label class="kt-font-brand">Volume :</label>
														<input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1">
													</div>
													<div class="col-lg-6">
														<label class="kt-font-brand">Satuan :</label>
														<select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
													</div>
													</div>
													
												
													
						 
						
						  
						
                      </div>
                      </div>
                      </div>
					  
												




												



												
													
													

												</div>
												
												
												
												


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							</div>
							</div>
							<div class="modal fade" id="modal_tambah_material_barrier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-boxes"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH BARANG</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
										<div class="form-group row">	
					  <div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Barang</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
						<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Perangkat :</label>
														 <select class="form-control kt-selectpicker" data-live-search="true">
                                      
                                     
                                      <option value="2" selected>Barrier Gate</option>
                                                                           
                                  </select>
													</div>
													
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<div class="form-group row">
						<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Kategori :</label>
														 <select class="form-control kt-selectpicker" data-live-search="true">
                                      
									  <option value="1">Casing</option>
                                      <option value="2">Reader</option>
                                      <option value="2">Scanner</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
													</div>
													<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Jenis :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      
									  <option value="1">Casing</option>
                                      <option value="2">Payment Reader</option>
                                      <option value="2">Honeywel</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
													</div>
													</div>
													
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">Nama Barang :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001501180726" selected>UHF READER MID RANGE</option>
          <option value="5" data-subtext="001601180726">IP CAMERA</option>
          <option value="5" data-subtext="001701180726">ANPR CAMERA</option>
          <option value="5" data-subtext="001801180726">QUADBEAM</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
<div class="col-lg-6">
														<label class="kt-font-brand">Volume :</label>
														<input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1">
													</div>
													<div class="col-lg-6">
														<label class="kt-font-brand">Satuan :</label>
														<select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
													</div>
													</div>
													
												
													
						 
						
						  
						
                      </div>
                      </div>
                      </div>
					  
												




												



												
													
													

												</div>
												
												
												
												


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							</div>
							</div>
							<div class="modal fade" id="modal_tambah_material_sensor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-boxes"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH BARANG</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
										<div class="form-group row">	
					  <div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Barang</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
						<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Perangkat :</label>
														 <select class="form-control kt-selectpicker" data-live-search="true">
                                      
                                     
                                      <option value="2" selected>Sensor</option>
                                                                           
                                  </select>
													</div>
													
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<div class="form-group row">
						<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Kategori :</label>
														 <select class="form-control kt-selectpicker" data-live-search="true">
                                      
									  <option value="1">Casing</option>
                                      <option value="2">Reader</option>
                                      <option value="2">Scanner</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
													</div>
													<div class="col-lg-6">
														<label class="kt-font-brand"><code>*</code> Jenis :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      
									  <option value="1">Casing</option>
                                      <option value="2">Payment Reader</option>
                                      <option value="2">Honeywel</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
													</div>
													</div>
													
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">Nama Barang :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001501180726" selected>UHF READER MID RANGE</option>
          <option value="5" data-subtext="001601180726">IP CAMERA</option>
          <option value="5" data-subtext="001701180726">ANPR CAMERA</option>
          <option value="5" data-subtext="001801180726">QUADBEAM</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
<div class="col-lg-6">
														<label class="kt-font-brand">Volume :</label>
														<input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1">
													</div>
													<div class="col-lg-6">
														<label class="kt-font-brand">Satuan :</label>
														<select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
													</div>
													</div>
													
												
													
						 
						
						  
						
                      </div>
                      </div>
                      </div>
					  
												




												



												
													
													

												</div>
												
												
												
												


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							</div>
							</div>
<!--begin::Modal 1-->
									<div class="modal fade" id="titik-parkir-tutup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-danger flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">FORM LAPORAN TITIK PARKIR TUTUP</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="row">
									<div class="col-xl-7">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-12">
					   <label>Nama Lengkap</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Jukir">

                        </div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
					   <label>Zona</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Jukir">

                        </div>
						<div class="col-lg-6">
                          <label>Wilayah :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
											</div>
											<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
					   <label>Nama Titik Parkir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Jukir">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Alamat Titik Parkir :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
											</div>
									
										</div>
										</div>
										</div>
										
										</div>
										


									<div class="col-xl-5">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Keterangan</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-12">
					   
                         <textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Isikan Keterangan Anda"></textarea>

                        </div>
						
						
                        </div>
						
									
										</div>
										</div>
										</div>
									<div class="kt-portlet kt-portlet--height-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Upload Foto</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-12">
					   <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files, File Format : PDF</span>
													</div>
												</div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									
									
								</div>
								</div>
								<div class="col-xl-12">
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>NIP Pegawai</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
                       
						<div class="col-lg-6">
                          <label>Nama Kolektor :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
						
                        </div>
						
									
										</div>
										</div>
										</div>
									</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													
									
												
													<div class="btn-group">
				<button type="button" class="btn btn-brand btn-sm">
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
																	Kepala Bagian Kepegawaian
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Direktur Umum
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_15.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Muhammad Nasrullah, S.Kom
																</a>
																<p class="kt-widget4__text">
																	Direktur Utama
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
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

									<!--end: Datatable -->
								


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
