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
                    Pengaturan
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Metode Pembayaran</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
            <div class="kt-subheader__toolbar">
                <button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
                <div class="btn-group">
				<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>
				
				
			</div>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
														<a href="cetak-tarif-index.php" class="kt-nav__link">
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
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_tambah_pembayaran"><i class="fa fa-plus-circle"></i>Tambah Data</button>
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
	<div class="row">
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
                                      <option value="1">Makassar</option>
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
                                      <option value="4" selected>Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
                            
								<div class="col-lg-2">
                                <label>Transaksi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Parkir Kendaraan</option>
                                      <option value="2">Pendaftaran Member</option>
									   <option value="4" selected>Keseluruhan</option>
                                      
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Metode Pembayaran :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">eMoney</option>
                                      <option value="2"><span class="btn btn-label-warning btn-sm">QRIS</span></option>
                                      <option value="3"><span class="btn btn-label-success btn-sm">Virtual Account</span></option>
                                      <option value="3"><span class="btn btn-label-danger btn-sm">Credit Card</span></option>
                                      <option value="4" selected>Keseluruhan</option>
                                     
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

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Lokasi</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Transaksi</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Metode Pembayaran</th>
											  <th width="8%" rowspan="2" bgcolor="#f7fcff">Provider</th>
											  <th colspan="3" bgcolor="#f7fcff">Payment Gateway</th>
											  <th colspan="2" bgcolor="#f7fcff">Biaya Layanan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">%</th>
											  <th width="1%" bgcolor="#f7fcff">+%</th>
											  <th width="2%" bgcolor="#f7fcff">Rp</th>
											  <th width="1%" bgcolor="#f7fcff">%</th>
											  <th width="2%" bgcolor="#f7fcff">Rp</th>
							              </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_13" style="text-align:right">1</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
												<td style="text-align:center" nowrap><span class="btn btn-label-brand btn-sm">e-Money</span></td>
												<td nowrap="nowrap" style="text-align:left">Mandiri</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_13" style="text-align:right">2</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
												<td style="text-align:center" nowrap><span class="btn btn-label-brand btn-sm">e-Money</span></td>
												<td nowrap="nowrap" style="text-align:left">Tapcash BNI</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">3</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
												<td style="text-align:center" nowrap><span class="btn btn-label-brand btn-sm">e-Money</span></td>
												<td nowrap="nowrap" style="text-align:left">Brizzi</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
											<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">4</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
												<td nowrap="" style="text-align:center"><span class="btn btn-label-brand btn-sm">e-Money</span></td>
												<td nowrap="nowrap" style="text-align:left">BCA Flazz</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
											<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">5</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
											<td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-warning btn-sm">QRIS</span></td>
											<td nowrap="nowrap" style="text-align:left">OVO</td>
										    <td nowrap="nowrap" style="text-align:center">0,7</td>
										    <td nowrap="nowrap" style="text-align:center">1,8</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
											<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">6</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-warning btn-sm">QRIS</span></td>
											<td nowrap="nowrap" style="text-align:left">DANA</td>
											<td nowrap="nowrap" style="text-align:center">0,7</td>
											<td nowrap="nowrap" style="text-align:center">1,8</td>
											<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">7</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-warning btn-sm">QRIS</span></td>
											<td nowrap="nowrap" style="text-align:left">GoPay</td>
											<td nowrap="nowrap" style="text-align:center">0,7</td>
											<td nowrap="nowrap" style="text-align:center">1,8</td>
											<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-list-ol"></i> <span class="kt-nav__link-text">History Perubahan Tarif</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa flaticon-edit-1"></i> <span class="kt-nav__link-text">Edit Tarif</span> </a> </li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
									            </ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">8</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-warning btn-sm">QRIS</span></td>
											<td nowrap="nowrap" style="text-align:left">LinkAja</td>
											<td nowrap="nowrap" style="text-align:center">0,7</td>
											<td nowrap="nowrap" style="text-align:center">1,8</td>
											<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">9</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-warning btn-sm">QRIS</span></td>
											<td nowrap="nowrap" style="text-align:left">ShopeePay</td>
											<td nowrap="nowrap" style="text-align:center">0,7</td>
											<td nowrap="nowrap" style="text-align:center">1,8</td>
											<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">10</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-warning btn-sm">QRIS</span></td>
											<td nowrap="nowrap" style="text-align:left">Livin Mandiri</td>
											<td nowrap="nowrap" style="text-align:center">0,7</td>
											<td nowrap="nowrap" style="text-align:center">1,8</td>
											<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">11</td>
										    <td nowrap="nowrap" style="text-align:left">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Parkir Kendaraan</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-warning btn-sm">QRIS</span></td>
											<td nowrap="nowrap" style="text-align:left">BCA</td>
											<td nowrap="nowrap" style="text-align:center">0,7</td>
											<td nowrap="nowrap" style="text-align:center">1,8</td>
											<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">3</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										   <td id="kt_table_13" style="text-align:right">12</td>
										    <td style="text-align:left" nowrap>Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-success btn-sm">Virtual Account</span></td>
											<td nowrap="nowrap" style="text-align:left">MANDIRI</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>4.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">13</td>
										    <td style="text-align:left" nowrap>Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-success btn-sm">Virtual Account</span></td>
											<td nowrap="nowrap" style="text-align:left">CIMB NIAGA</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.500,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">14</td>
										    <td style="text-align:left" nowrap>Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-success btn-sm">Virtual Account</span></td>
											<td nowrap="nowrap" style="text-align:left">BNI</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.500,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">15</td>
										    <td style="text-align:left" nowrap="nowrap">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-success btn-sm">Virtual Account</span></td>
											<td nowrap="nowrap" style="text-align:left">BRI</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.500,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-list-ol"></i> <span class="kt-nav__link-text">History Perubahan Tarif</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa flaticon-edit-1"></i> <span class="kt-nav__link-text">Edit Tarif</span> </a> </li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
									            </ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">16</td>
										    <td style="text-align:left" nowrap>Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-success btn-sm">Virtual Account</span></td>
											<td nowrap="nowrap" style="text-align:left">PERMATA BANK</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.500,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-list-ol"></i>
																				<span class="kt-nav__link-text">History Perubahan Tarif</span>
																			</a>
																		</li>
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Tarif</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																	</ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">17</td>
										    <td style="text-align:left" nowrap="nowrap">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-success btn-sm">Virtual Account</span></td>
											<td nowrap="nowrap" style="text-align:left">BTN</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.500,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-list-ol"></i> <span class="kt-nav__link-text">History Perubahan Tarif</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa flaticon-edit-1"></i> <span class="kt-nav__link-text">Edit Tarif</span> </a> </li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
									            </ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">18</td>
										    <td style="text-align:left" nowrap="nowrap">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-success btn-sm">Virtual Account</span></td>
											<td nowrap="nowrap" style="text-align:left">BANK MUAMALAT</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.500,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-list-ol"></i> <span class="kt-nav__link-text">History Perubahan Tarif</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa flaticon-edit-1"></i> <span class="kt-nav__link-text">Edit Tarif</span> </a> </li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
									            </ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">19</td>
										    <td style="text-align:left" nowrap="nowrap">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-success btn-sm">Virtual Account</span></td>
											<td nowrap="nowrap" style="text-align:left">DANAMON</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.500,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-list-ol"></i> <span class="kt-nav__link-text">History Perubahan Tarif</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa flaticon-edit-1"></i> <span class="kt-nav__link-text">Edit Tarif</span> </a> </li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
									            </ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">20</td>
										    <td style="text-align:left" nowrap="nowrap">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-danger btn-sm">Credit Card</span></td>
											<td nowrap="nowrap" style="text-align:left">VISA</td>
										    <td nowrap="nowrap" style="text-align:center">2,5</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span>2.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">2,5</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-list-ol"></i> <span class="kt-nav__link-text">History Perubahan Tarif</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa flaticon-edit-1"></i> <span class="kt-nav__link-text">Edit Tarif</span> </a> </li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
									            </ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
										    <td id="kt_table_13" style="text-align:right">21</td>
										    <td style="text-align:left" nowrap="nowrap">Makassar</td>
										    <td nowrap="nowrap" style="text-align:center">Pendaftaran Member</td>
											<td style="text-align:center" nowrap><span class="btn btn-label-danger btn-sm">Credit Card</span></td>
											<td nowrap="nowrap" style="text-align:left">MASTER CARD</td>
										    <td nowrap="nowrap" style="text-align:center">2,5</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span>2.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center">2,5</td>
										    <td nowrap="nowrap" style="text-align:center"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span></div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_detail_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_history_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-list-ol"></i> <span class="kt-nav__link-text">History Perubahan Tarif</span> </a> </li>
										          <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_tarif" data-skin="brand" data-html="true"> <a href="#" class="kt-nav__link"> <i class="kt-nav__link-icon fa flaticon-edit-1"></i> <span class="kt-nav__link-text">Edit Tarif</span> </a> </li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
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
									<div class="modal fade" id="modal_tarif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
							<!--begin::Modal Edit Tarif-->
									<div class="modal fade" id="modal_edit_tarif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">EDIT TARIF</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-4">
														<label>ID Tarif :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-4">
														<label>Waktu Penetapan :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>
													
													

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
<div class="col-lg-4">
														<label class="kt-font-danger">Tipe Tarif :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Reguler</option>
                                      <option value="2">Member</option>
									  <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                     
                                  </select>
													</div>
													
													<div class="col-lg-4">
														<label class="kt-font-danger">Kategori Tarif :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Reguler - Motor</option>
                                      <option value="2">Reguler - Mobil</option>
                                      <option value="3">Reguler - Truck/Tronton/Trailer</option>
                                      <option value="4">Member - Motor</option>
                                      <option value="4">Member - Sedan/Jeep/Pick Up</option>
                                      <option value="4">Member - Truck/Tronton/Trailer</option>
                                      <option value="4">Member - Pegawai / Instansi / Others</option>
                                      <option value="4">Kendaraan Berangkat - Motor</option>
                                      <option value="4">Kendaraan Berangkat - Mobil</option>
                                      <option value="4">Bongkaran Kapal - Motor</option>
                                      <option value="4">Bongkaran Kapal - Mobil</option>
                                      <option value="4">Free Pass</option>
                                      <option value="4">Denda - Motor</option>
                                      <option value="4">Denda - Mobil</option>
                                      <option value="4">Pass Kade</option>
                                     <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                  </select>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Jenis Tarif :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Progresif</option>
                                      <option value="2">Flat</option>
									  <option value="3">Volume</option>
                                     <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                  </select>
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Jenis Kendaraan :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Motor</option>
                                      <option value="2">Mobil</option>
                                      <option value="2">Truck/Tronton/Trailer</option>
                                      <option value="2">Sedan/Jeep/Pick Up</option>
                                    <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                     
                                  </select>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Biaya Sticker :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="10.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													
													
													
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Tarif Pokok :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="10.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Jam Selanjutnya :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="10.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Tarif Maksimal :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="10.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Tarif Berlaku Untuk :</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-4" id="hide1">Seluruh Cabang</button>&nbsp;
      													
                                <button type="button" class="btn btn-secondary btn-square btn-sm col-lg-4" id="show">Sebagian Cabang</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                  <div class="form-group row">
    													<div class="col-lg-12">
														<label class="kt-font-danger">Nama Cabang :</label>
														 <select class="form-control kt-selectpicker" multiple="multiple">
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
                                  </select>
													</div>
													
												
                          </div>
						



											</div>
											</div>
											
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
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
							<!--End::Modal Edit Tarif-->
							<!--begin::Modal Detail Tarif-->
									<div class="modal fade" id="modal_detail_tarif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DETAIL TARIF</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-4">
														<label>ID Tarif :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-4">
														<label>Waktu Penetapan :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>
													<div class="col-lg-4">
														<label>Register By :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">
												</div>
													</div>
													
													

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
<div class="col-lg-4">
														<label>Tipe Tarif :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Reguler">
													</div>
													
													<div class="col-lg-4">
														<label>Kategori Tarif :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Reguler - Motor">
													</div>
													<div class="col-lg-4">
														<label>Jenis Tarif :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Progresif">
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Jenis Kendaraan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Motor">
													</div>
													<div class="col-lg-4">
														<label>Biaya Sticker :</label>
														<div class="form-group">
													<div class="input-group input-group-sm" disabled>
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="10.000" aria-describedby="basic-addon1" disabled>
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													
													
													
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Tarif Pokok :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="10.000" aria-describedby="basic-addon1" disabled>
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label>Jam Selanjutnya :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="10.000" aria-describedby="basic-addon1" disabled>
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label>Tarif Maksimal :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="10.000" aria-describedby="basic-addon1" disabled>
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Tarif Berlaku Untuk :</label>
                                <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                  <div class="form-group row">
    													<div class="col-lg-12">
														<label class="kt-font-danger">Nama Cabang :</label>
														 <select class="form-control kt-selectpicker" multiple="multiple">
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
                                  </select>
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
								</div>
								</div>
							<!--End::Modal Detail Tarif-->
							<!--begin::Modal History Tarif-->
									<div class="modal fade" id="modal_history_tarif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">HISTORY PERUBAHAN TARIF</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Cabang</th>
											  <th colspan="3" bgcolor="#f7fcff">Tarif</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Status</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="3%" bgcolor="#f7fcff">Tanggal Registrasi</th>
											  <th width="3%" bgcolor="#f7fcff">Aktif Hingga</th>
											  <th width="1%" bgcolor="#f7fcff">Register By</th>
										  </tr>
										</thead>
										<tbody>
										  
<tr>
  <td id="kt_table_4">1</td>
  <td nowrap="nowrap" style="text-align:center">Makassar</td>
  <td nowrap="nowrap" style="text-align:left">1 Januari 2026</td>
  <td nowrap="nowrap" style="text-align:left">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000003MP1025<hr>Muhammad Nasrullah,S.Kom" data-html="true"> <img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td style="text-align:center" nowrap="nowrap"><button type="button" class="btn btn-success btn-sm">Aktif</button></td>
  </tr>
												<td id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:center">Makassar</td>
												<td nowrap="nowrap" style="text-align:left">1 Januari 2025</td>
												<td nowrap="nowrap" style="text-align:left">31 Desember 2025</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000002MP1025<hr>Nursiah, S.Kom" data-html="true"> <img src="../assets/media/users/100_2.jpg" alt="image" /></a></td>
												<td style="text-align:center" nowrap=""><button type="button" class="btn btn-label-danger btn-sm">Berakhir</button></td>
												</tr>
										  <tr>
												<td id="kt_table_1">3</td>
												<td style="text-align:center" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:left">1 September 2024</td>
												<td nowrap="nowrap" style="text-align:left">31 Desember 2024</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000002MP1025<hr>Nursiah, S.Kom" data-html="true"> <img src="../assets/media/users/100_2.jpg" alt="image" /></a></td>
												<td style="text-align:center" nowrap=""><button type="button" class="btn btn-label-danger btn-sm">Berakhir</button></td>
										  </tr>


  </tbody>
									</table>

									</div>
								</div>

									</div>
								</div>
								</div>
								</div>
								</div>
							<!--End::Modal History Tarif-->
							<!--begin::Modal Ubah Sticker-->
									<div class="modal fade" id="modal_tambah_tarif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">TAMBAH TARIF</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-4">
														<label>ID Tarif :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-4">
														<label>Waktu Penetapan :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>
													<div class="col-lg-4">
														<label>Lokasi :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected>Makassar</option>
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
                                                                           
                                  </select>
													</div>
													
													

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
<div class="col-lg-4">
														<label>Tipe Tarif :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Reguler</option>
                                      <option value="2">Member</option>
                                      <option value="2">Berangkat</option>
                                      <option value="2">Muatan Kapal</option>
                                      <option value="2">Pass Kade</option>
                                      <option value="2">Pass Orang</option>
                                      <option value="2">Free Pass</option>
                                      <option value="2">Denda</option>
                                      
                                  </select>
													</div>
													<div class="col-lg-4">
														<label>Jenis Kendaraan :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Motor</option>
                                      <option value="2">Mobil</option>
                                      <option value="3">Free Pass</option>
                                      <option value="3">Orang</option>
                                      <option value="4">Truck</option>
                                      <option value="4">Tronton</option>
                                      <option value="4">Pick Up</option>
                                      <option value="4">Gerobak</option>
                                      <option value="4" selected>Keseluruhan</option>
                                     
                                  </select>
													</div>
													<div class="col-lg-4">
														<label>Kategori Kendaraan :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Motor</option>
                                      <option value="2">Mobil</option>
                                      <option value="3">Sedan/Jeep/Pick Up</option>
                                      <option value="3">Truck/Tronton/Trailer</option>
                                      <option value="4">Pegawai / Instansi / Others</option>
                                      <option value="4" selected>Keseluruhan</option>
                                     
                                  </select>
													</div>
													
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Jenis Tarif :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Progresif</option>
                                      <option value="2">Flat</option>
									  <option value="3">Volume</option>
                                     <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                  </select>
													</div>
													<div class="col-lg-4">
														<label>Biaya Sticker :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													
													
													
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Tarif Pokok :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Jam Selanjutnya :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-danger">Tarif Maksimal :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right"  class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
												</div>
													</div>
													
													</div>
													
											
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>
												</div>

									</div>
								</div>
								</div>
								</div>
								</div>
								</div>
							<!--End::Modal Ubah Sticker-->
							<!--begin::Modal history sticker-->
									<div class="modal fade" id="modal_history_sticker" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">HISTORY STICKER MEMBER</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											 <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Cabang</th>
											  <th colspan="5" bgcolor="#feffed">Kendaraan</th>
											  <th colspan="3" bgcolor="#feffed">Status</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#feffed">Kategori</th>
											  <th width="2%" bgcolor="#feffed">No. Plat</th>
											  <th width="4%" bgcolor="#feffed">Sticker Member</th>
											  <th width="4%" bgcolor="#feffed">Tanggal Registrasi</th>
											  <th width="4%" bgcolor="#feffed">Aktif Hingga</th>
											  <th width="3%" bgcolor="#feffed">By</th>
											  <th width="3%" bgcolor="#feffed"> Member</th>
											  <th width="3%" bgcolor="#feffed">Pembayaran</th>
				                          </tr>
										</thead>
										<tbody>
										  <tr>
												<td id="kt_table_1">1</td>
												<td style="text-align:center" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:left">Sepeda Motor</td>
												<td nowrap="nowrap" style="text-align:left">DD 1111 LU</td>
												<td nowrap="nowrap" style="text-align:left"><span style="text-align:center">12321355123124</span></td>
												<td nowrap="nowrap" style="text-align:left">1 Januari 2026</td>
												<td nowrap="nowrap" style="text-align:left">31 Desember 2026</td>
												<td style="text-align:center" nowrap="">Online</td>
												<td style="text-align:center" nowrap=""><button type="button" class="btn btn-success btn-sm">Aktif</button></td>
												<td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Penerima<hr>Yuni Saslia, SE<hr>31 September 2026<br>10:02 WITA" data-html="true">Tunai</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="member-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Member</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="ubah-member.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-edit"></i>
																				<span class="kt-nav__link-text">Ubah Data Member</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="sticker-member.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-barcode"></i>
																				<span class="kt-nav__link-text">Register Sticker Member</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="history-member.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-coins"></i>
																				<span class="kt-nav__link-text">History Pembayaran</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="member-suspend.php" class="kt-nav__link">
																		
																				<i class="kt-nav__link-icon fa fa-user-slash"></i>
																				<span class="kt-nav__link-text">Suspend</span></a>
																			</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
										    <td id="kt_table_4">2</td>
										    <td style="text-align:center" nowrap>Makassar</td>
										    <td nowrap="nowrap" style="text-align:left">Sepeda Motor</td>
										    <td nowrap="nowrap" style="text-align:left">DD 1111 LU</td>
										    <td nowrap="nowrap" style="text-align:left"><span style="text-align:center">12321355123124</span></td>
										    <td nowrap="nowrap" style="text-align:left">1 Januari 2026</td>
										    <td nowrap="nowrap" style="text-align:left">31 Desember 2026</td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-success btn-sm">Aktif</button></td>
										    <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Penerima&lt;hr&gt;Yuni Saslia, SE&lt;hr&gt;31 September 2026&lt;br&gt;10:02 WITA" data-html="true">Tunai</span></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										        <ul class="kt-nav">
										          <li class="kt-nav__item"> <a href="member-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Profil Member</span> </a> </li>
										          <li class="kt-nav__item"> <a href="ubah-member.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Ubah Data Member</span> </a> </li>
										          <li class="kt-nav__item"> <a href="sticker-member.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-barcode"></i> <span class="kt-nav__link-text">Register Sticker Member</span> </a> </li>
										          <li class="kt-nav__item"> <a href="history-member.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-coins"></i> <span class="kt-nav__link-text">History Pembayaran</span> </a> </li>
										          <li class="kt-nav__item"> <a href="member-suspend.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-user-slash"></i> <span class="kt-nav__link-text">Suspend</span></a> </li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
									            </ul>
									          </div>
										      </div></td>
									      </tr>
  </tbody>
									</table>
									</div>
								</div>
							</div>
							<!--End::Modal history sticker-->
                    
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>




                </div>
            </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/file-upload/dropzonejs.js" type="text/javascript"></script>
<script src="../assets/dist/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="../assets/dist/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script>
$("#show").click(function(){
    $(".tampil").show();
  });
  $("#hide1").click(function(){
      $(".tampil").hide();
    });
    $("#hide2").click(function(){
        $(".tampil").hide();
      });
</script>
<?php require '../layouts/foot.php' ?>
