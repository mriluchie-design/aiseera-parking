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
											Status Transaksi</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
            <div class="kt-subheader__toolbar">
                <!--<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>-->
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
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_tambah_status_transaksi"><i class="fa fa-plus-circle"></i>Tambah Data</button>
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
                                <label>Tipe Tarif :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Reguler</option>
                                      <option value="2">Member</option>
                                      
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Kategori Tarif :</label>
								
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
                                     
                                  </select>
                            </div>
								<div class="col-lg-2">
                                <label>Jenis Tarif :</label>
								
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Progressif</option>
                                      <option value="2">Flat</option>
                                      <option value="3">Volume</option>
                                     
                                  </select>
                            </div>
                            
							
                            
							
							<div class="col-lg-2">
                                <label>Jenis Kendaraan :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Motor</option>
                                      <option value="2">Mobil</option>
                                      <option value="2">Truck/Tronton/Trailer</option>
                                      <option value="2">Sedan/Jeep/Pick Up</option>
                                    
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
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="20%" bgcolor="#f7fcff">Status Transaksi</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												
												<td style="text-align:left" nowrap><span class="btn btn-success btn-sm">Selesai</span></td>
												
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_status_transaksi" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-edit"></i>
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
												<td id="kt_table_1" style="text-align:right">2</td>
												<td style="text-align:left" nowrap><span class="btn btn-label-twitter btn-sm">Member</span></td>
											
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_status_transaksi" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-edit"></i>
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
										    <td id="kt_table_1" style="text-align:right">3</td>
										    <td style="text-align:left" nowrap><span class="btn btn-label-danger btn-sm">Parkir</span></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_status_transaksi" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-edit"></i>
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
										    <td id="kt_table_1" style="text-align:right">4</td>
										    <td nowrap="nowrap" style="text-align:left"><span class="btn btn-label-skype btn-sm">Berangkat</span></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_status_transaksi" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-edit"></i>
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
										    <td id="kt_table_1" style="text-align:right">5</td>
										    <td nowrap="nowrap" style="text-align:left"><span class="btn btn-label-youtube btn-sm">Free Pass</span></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_status_transaksi" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-edit"></i>
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
										    <td id="kt_table_1" style="text-align:right">6</td>
										    <td nowrap="nowrap" style="text-align:left"><span class="btn btn-danger btn-sm">Denda</span></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
										      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
										        <ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_status_transaksi" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-edit"></i>
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
									<div class="modal fade" id="modal_tambah_jenis_transaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH JENIS TRANSAKSI</h3>
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
														<label class="kt-font-brand">Jenis Transaksi :</label>
														<input type="text" class="form-control form-control-sm" placeholder="">
													</div>


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
    </div>
    </div>
    </div>
	<div class="modal fade" id="modal_edit_jenis_transaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">EDIT JENIS TRANSAKSI</h3>
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
														<label class="kt-font-brand">Jenis Transaksi :</label>
														<input type="text" class="form-control form-control-sm" placeholder="Masuk">
													</div>


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
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

