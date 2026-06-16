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
                    Data Setoran Operator
                </h3>
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
                            <a href="cetak-setoran-operator.php" class="kt-nav__link">
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
                                <label>Cabang :</label>
								
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
                                <label>Operator :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Muhammad Nasrullah, S.Kom</option>
                                      <option value="1">Muhammad Ramadhan, S.T</option>
                                      <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							
								
								
								
								<div class="col-lg-2">
                                <label>Kategori :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Karcis Masuk</option>
                                      <option value="2">Karcis Keluar</option>
                                    
									  <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
								<div class="col-lg-2">
                                <label class="">Tanggal Transaksi :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Belum Setor</option>
                                      <option value="2">Tunai</option>
                                      <option value="2">Non Tunai</option>
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

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Cabang</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">OP</th>
											  <th colspan="8" bgcolor="#feffed">Transaksi</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#feffed">Kategori</th>
											  <th width="1%" bgcolor="#feffed">Gate</th>
											  <th width="1%" bgcolor="#feffed">Jalur</th>
											  <th width="4%" bgcolor="#feffed">Nama Jalur</th>
											  <th width="4%" bgcolor="#feffed">Waktu Cetak</th>
											  <th width="4%" bgcolor="#feffed">Jlh. Karcis</th>
											  <th width="4%" bgcolor="#feffed">Tagihan</th>
											  <th width="3%" bgcolor="#feffed">Status</th>
				                          </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000001MP1025" data-html="true"> <img src="../assets/media/users/100_1.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-linkedin btn-sm">Karcis Masuk</span></td>
												<td style="text-align:center">1</td>
												<td style="text-align:center">Masuk</td>
												<td nowrap="nowrap" style="text-align:left"><span style="text-align:center">Mobil - 1</span></td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026
												  <hr />
												  15:36:00 WITA</td>
												<td><div class="input-group">
    <input type="text" style="text-align:right" class="form-control form-control-sm kt-input-sm" placeholder="10" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">Karcis</span> </div>
  </div></td>
  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>150.000,-</span></div></td>
											  <td class="text-center"><span class="btn btn-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="-" data-html="true">Belum Setor</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_tagihan" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Tagihan</span>
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
												<td id="kt_table_1" style="text-align:right">2</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000002MP1025" data-html="true"> <img src="../assets/media/users/100_2.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-skype btn-sm">Karcis Keluar</span></td>
												<td style="text-align:center">2</td>
												<td style="text-align:center">Keluar</td>
												<td nowrap="nowrap" style="text-align:left"><span style="text-align:center">Motor - 1</span></td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026
												  <hr />
												  15:36:00 WITA</td>
												<td><div class="input-group">
    <input type="text" style="text-align:right" class="form-control form-control-sm kt-input-sm" placeholder="10" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">Karcis</span> </div>
  </div></td>
  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>150.000,-</span></div></td>
												<td class="text-center"><span class="btn btn-label-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Penerima<hr>Yuni Saslia, SE<hr>31 September 2026<br>10:02 WITA" data-html="true">Tunai</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_tagihan" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Tagihan</span>
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
												<td id="kt_table_1" style="text-align:right">3</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000003MP1025" data-html="true"> <img src="../assets/media/users/100_3.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-linkedin btn-sm">Karcis Masuk</span></td>
												<td style="text-align:center">2</td>
												<td style="text-align:center">Masuk</td>
												<td nowrap="nowrap" style="text-align:left"><span style="text-align:center">Mobil - 1</span></td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026
												  <hr />
												  15:36:00 WITA</td>
												<td><div class="input-group">
    <input type="text" style="text-align:right" class="form-control form-control-sm kt-input-sm" placeholder="10" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">Karcis</span> </div>
  </div></td>
  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>150.000,-</span></div></td>
												<td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135&lt;hr&gt;e-Wallet&lt;hr&gt;Gopay" data-html="true">Non Tunai</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_tagihan" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Tagihan</span>
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
 <td id="kt_table_1" style="text-align:right">4</td>
												<td style="text-align:left" nowrap>Makassar</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000003MP1025" data-html="true"> <img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-skype btn-sm">Karcis Keluar</span></td>
  <td style="text-align:center">2</td>
  <td style="text-align:center">Keluar</td>
  <td nowrap="nowrap" style="text-align:left">Motor - 2</td>
  <td nowrap="nowrap" style="text-align:center">1 September 2026
    <hr />
    15:36:00 WITA</td>
  <td><div class="input-group">
    <input type="text" style="text-align:right" class="form-control form-control-sm kt-input-sm" placeholder="10" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">Karcis</span> </div>
  </div></td>
  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>150.000,-</span></div></td>
  <td class="text-center"><span class="btn btn-label-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Penerima<hr>Yuni Saslia, SE<hr>31 September 2026<br>10:02 WITA" data-html="true">Tunai</span></td>
  <td style="text-align:center" nowrap="nowrap"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
																	
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_tagihan" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Tagihan</span>
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
								Menampilkan 10 dari 23.000 Data
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
							<!--begin::Modal Registrasi Sticker-->
									<div class="modal fade" id="modal_registrasi_sticker" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">REGISTRASI STICKER</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
													<div class="col-lg-12">
														<label>Sticker Kendaraan :</label>
														<div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="fa fa-credit-card"></i></span>
    		                        </span>
    		                    </div>

												</div>
												
												
												</div>
												
												</div>
												
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">
<button type="reset" class="btn btn-secondary btn-sm">Batal</button>
													<button type="reset" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i>Simpan</button>
												</div>
											</div>




									</div>

									</div>
								</div>
								</div>
								</div>
								</div>
							<!--End::Modal Modal Registrasi Sticker-->
							<!--begin::Modal Ubah Sticker-->
									<div class="modal fade" id="modal_tagihan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">TAGIHAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
													<div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Setoran</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  
						
					  <div class="col-lg-4">
                          <label class="">ID Transaksi :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="34978TKMTJU102025">
                        </div>
						 <div class="col-lg-4">
                          <label class="">Total Tagihan :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
                        </div>
						 <div class="col-lg-4" >
                          <label style="color:#a2050c">Pembayaran :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Tunai</option>
                                      <option value="2">Non Tunai</option>
                                  </select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">
<button type="reset" class="btn btn-secondary btn-sm">Batal</button>
													<button type="reset" class="btn btn-primary btn-sm"><i class="fa fa-hand-holding-usd"></i>Terima Setoran</button>
												</div>
											</div>




									</div>
						
                      </div>
                      </div>
                      </div>
					  <div class="row">
					  <div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Karcis</div><br><br>
										 <div class="kt-portlet__body">
										
											<div class="tab-content">
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="1%" bgcolor="#f7fcff">No</th>
																<th width="1%" bgcolor="#f7fcff">ID Transaksi</th>
																<th width="3%" bgcolor="#f7fcff">Tanggal Cetak</th>
																<th width="7%" bgcolor="#feffed">Tagihan</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">1</td>
															  <td align="center" valign="middle" style="text-align:center">000001INTEM0626</td>
															  <td align="center" valign="middle" style="text-align:center">1 September 2026<br>15:36:00 WITA</td>
																<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span> </div></td>
														    </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">2</td>
															  <td align="center" valign="middle" style="text-align:center">000002INTEM0626</td>
															  <td align="center" valign="middle" style="text-align:center">1 September 2026<br>15:36:00 WITA</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span> </div></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">3</td>
															  <td align="center" valign="middle" style="text-align:center">000003INTEM0626</td>
															  <td align="center" valign="middle" style="text-align:center">1 September 2026<br>15:36:00 WITA</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span> </div></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">4</td>
															  <td align="center" valign="middle" style="text-align:center">000004INTEM0626</td>
															  <td align="center" valign="middle" style="text-align:center">1 September 2026<br>15:36:00 WITA</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span> </div></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">5</td>
															  <td align="center" valign="middle" style="text-align:center">000005INTEM0626</td>
															  <td align="center" valign="middle" style="text-align:center">1 September 2026<br>15:36:00 WITA</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span> </div></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:right">6</td>
															  <td align="center" valign="middle" style="text-align:center">000006INTEM0626</td>
															  <td align="center" valign="middle" style="text-align:center">1 September 2026<br>15:36:00 WITA</td>
															  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span> </div></td>
														  </tr>
														</tbody>
													</table>

					
                    </div>

                  </form>
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
								Menampilkan 6 dari 10 Data
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
									<a href="#">1</a>
								</li>
								<li class="kt-pagination__link--active">
									<a href="#">2</a>
								</li>
								<li>
									<a href="#">3</a>
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
<?php require '../layouts/foot.php' ?>
