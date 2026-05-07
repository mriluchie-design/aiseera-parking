<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
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
                   Data Titik Parkir
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
				<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_tambah_titik_parkir"><i class="fa fa-plus-circle"></i>Tambah Data</button>
                
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
                                <label>Zona :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Wilayah :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
                                     
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Nama Titik Parkir :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
							<div class="col-lg-2">
                                <label>Alamat Titik Parkir :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								
								<div class="col-lg-2">
                                <label class="">Tanggal Dibuat :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-1">
                                <label>Verifikasi :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Disetujui</option>
                                      <option value="2">Pending</option>
                                      
                                     
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Status :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Aktif</option>
                                      <option value="2">Tidak Aktif</option>
                                      
                                     
                                  </select>
                            </div>
    		                    </div>
								
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group row">
								 <div class="col-lg-2">
                                <label>ID Jukir :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
                            <div class="col-lg-2">
                                <label>Nama Jukir :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
							
                            <div class="col-lg-2">
                                <label>Nama Kolektor :</label>
    	                      <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
        					
                            </div>
							
							
                            </div>
							<br>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->
<!--begin:: Widgets/Stats-->
			<div class="kt-portlet">
				<div class="kt-portlet__body  kt-portlet__body--fit">
					<div class="row row-no-padding row-col-separator-lg">
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Total
										</h4>
										<span class="kt-widget24__desc">
											Data Titik Parkir
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-brand">
										1140
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Aktif
										</h4>
										<span class="kt-widget24__desc">
											Data Titik Parkir
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-success">
										1130
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Non Aktif
										</h4>
										<span class="kt-widget24__desc">
											Data Titik Parkir
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-danger">
										10
									</span>
								</div>

							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							
						</div>
					</div>
				</div>
			</div>
			<!--end:: Widgets/Stats-->
			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">No</th>
											  
											 
											  
											 
											  <th width="3%" bgcolor="#f7fcff">Zona</th>
											  <th width="5%" bgcolor="#f7fcff">Wilayah</th>
											  <th width="12%" bgcolor="#f7fcff">Nama Titik Parkir</th>
											  <th width="17%" bgcolor="#f7fcff">Alamat Titik Parkir</th>
											  <th width="1%" bgcolor="#f7fcff">Mitra<br />Jukir</th>
											   <th width="1%" bgcolor="#f7fcff">Kolektor</th>
											  <th width="2%" bgcolor="#f7fcff">Tanggal Dibuat</th>
											  <th width="2%" bgcolor="#f7fcff">Dibuat Oleh</th>
											 
											 
											  <th width="1%" bgcolor="#f7fcff">Verifikasi</th>
											  <th width="5%" bgcolor="#f7fcff">Status<br>Titik Parkir</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												
												
												
												
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:center" nowrap>Nama Kelurahan</td>
												<td nowrap="nowrap" style="text-align:left">Ayam Goreng Sulawesi</td>
												<td style="text-align:left" nowrap>JL. SLAMET RIYADI</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="02991MJPTJUVIII2025<hr>HARIS DAENG PAWA<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>

												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
												<td nowrap style="text-align:center">12/01/2023<hr>06:00:00 WITA</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Aktif</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_view_titik_parkir" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="non-aktif-titik-parkir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-tint-slash"></i>
																				<span class="kt-nav__link-text">Non Aktif Titik Parkir</span>
																			</a>
																		</li>
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">2</td>
												
												
												
												
												<td style="text-align:left" nowrap>Bontoala</td>
												<td nowrap="nowrap" style="text-align:center">Nama Kelurahan</td>
												<td nowrap="nowrap" style="text-align:left">Toko Segar Buah</td>
												<td style="text-align:left" nowrap>JL. UJUNG PANDANG</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="02991MJPTJUVIII2025<hr>HARIS DAENG PAWA<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_2.jpg" alt="image">
													</a></td>

												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>
												<td nowrap style="text-align:center">12/01/2023<hr>06:01:00 WITA</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Aktif</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_view_titik_parkir" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="non-aktif-titik-parkir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-tint-slash"></i>
																				<span class="kt-nav__link-text">Non Aktif Titik Parkir</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">3</td>
												
												
												
												
												
												<td style="text-align:left" nowrap>Kepulauan Sangkarrang</td>
												<td nowrap="nowrap" style="text-align:center">Nama Kelurahan</td>
												<td nowrap="nowrap" style="text-align:left">Kroket Sulawesi</td>
												<td style="text-align:left" nowrap>JL. WR. SUPRATMAN</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="02991MJPTJUVIII2025<hr>HARIS DAENG PAWA<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_4.jpg" alt="image">
													</a></td>

												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>
												<td nowrap style="text-align:center">12/01/2023<hr>06:02:00 WITA</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Non Aktif</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_view_titik_parkir" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="non-aktif-titik-parkir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-tint-slash"></i>
																				<span class="kt-nav__link-text">Non Aktif Titik Parkir</span>
																			</a>
																		</li>
																	
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">4</td>
												
											
												
												
												
												<td style="text-align:left" nowrap>Makassar</td>
												<td nowrap="nowrap" style="text-align:center">Nama Kelurahan</td>
												<td nowrap="nowrap" style="text-align:left">Toko Aroma</td>
												<td style="text-align:left" nowrap>JL. PATTIMURA</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="02991MJPTJUVIII2025<hr>HARIS DAENG PAWA<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>

												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>
												<td nowrap style="text-align:center">12/01/2023<hr>06:03:00 WITA</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Aktif</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_view_titik_parkir" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="non-aktif-titik-parkir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-tint-slash"></i>
																				<span class="kt-nav__link-text">Non Aktif Titik Parkir</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">5</td>
												
											
												
												
												
												<td style="text-align:left" nowrap>Mamajang</td>
												<td nowrap="nowrap" style="text-align:center">Nama Kelurahan</td>
												<td nowrap="nowrap" style="text-align:left">Jangkar Mas</td>
												<td style="text-align:left" nowrap>JL. USMAN JAFAR</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="02991MJPTJUVIII2025<hr>HARIS DAENG PAWA<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_8.jpg" alt="image">
													</a></td>

												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000004<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>
												<td nowrap style="text-align:center">12/01/2023<hr>06:04:00 WITA</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Aktif</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item" data-toggle="modal" data-target="#modal_view_titik_parkir" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="non-aktif-titik-parkir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-tint-slash"></i>
																				<span class="kt-nav__link-text">Non Aktif Titik Parkir</span>
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
							<!--begin::Modal 2-->
									<div class="modal fade" id="modal_tambah_titik_parkir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand flaticon-map-location"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">FORM TAMBAH TITIK PARKIR</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
													<div class="col-lg-6">
														<label>Pilih Zona :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>

												</div>
												<div class="col-lg-6">
														<label>Wilayah :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
                                     
                                  </select>

												</div>
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Titik Parkir :</label>
														<input type="text" class="form-control form-control-sm" placeholder="Isikan Data">

												</div>
												<div class="col-lg-6">
														<label>Alamat Titik Parkir :</label>
														<input type="text" class="form-control form-control-sm" placeholder="Isikan Data">

												</div>
												</div>
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
												<div class="col-lg-3">
														<label>Latitude :</label>
														<input type="text" class="form-control form-control-sm" placeholder="-5.164227924842015">

												</div>
												<div class="col-lg-3">
														<label>Longitude :</label>
														<input type="text" class="form-control form-control-sm" placeholder="119.45105984987575">

												</div>
												<div class="col-lg-4">
																					<label>Map :</label><br>
																					<button type="button" class="btn btn-sm btn-brand" data-toggle="modal" data-target="#modal_peta">Lihat Peta</button>
																						
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
							<!--End::Modal 2-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="modal_view_titik_parkir" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand flaticon-map-location"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DETAIL TITIK PARKIR</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
													<div class="col-lg-6">
														<label>Zona :</label>
														<input type="text" class="form-control form-control-sm" placeholder="Biringkanaya" disabled>

												</div>
												<div class="col-lg-6">
														<label>Wilayah :</label>
														<input type="text" class="form-control form-control-sm" placeholder="Paccerakkang" disabled>

												</div>
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Titik Parkir :</label>
														<input type="text" class="form-control form-control-sm" placeholder="Isikan Data" disabled>

												</div>
												<div class="col-lg-6">
														<label>Alamat Titik Parkir :</label>
														<input type="text" class="form-control form-control-sm" placeholder="Isikan Data" disabled>

												</div>
												</div>
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
												<div class="col-lg-3">
														<label>Latitude :</label>
														<input type="text" class="form-control form-control-sm" placeholder="-5.164227924842015" disabled>

												</div>
												<div class="col-lg-3">
														<label>Longitude :</label>
														<input type="text" class="form-control form-control-sm" placeholder="119.45105984987575" disabled>

												</div>
												<div class="col-lg-4">
																					<label>Map :</label><br>
																					<button type="button" class="btn btn-sm btn-outline-brand" data-toggle="modal" data-target="#modal_peta"><i class="fa fa-map-marker-alt"></i>Lihat Peta</button>
																						
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
							<!--End::Modal 2-->
							<!--begin::Modal 5-->
									<div class="modal fade" id="modal_peta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon-earth-globe"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">Peta</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											 <div id="googleMap" style="width:100%;height:680px;"></div>
									</div>
								</div>
							</div>
							<!--End::Modal 5-->
                    
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
