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
                    Data Mitra Juru Parkir
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
                <a href="mitra-add.php" class="btn btn-info btn-sm">
                    <i class="fa fa-plus-circle"></i> Tambah Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
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
                                <label>Kolektor :</label>
								
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
								
                            
							
                            
							
							
							<div class="col-lg-1">
                                <label>ID Card :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sudah</option>
                                      <option value="2">Belum</option>
                                      
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Rompi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Sudah</option>
                                      <option value="2">Belum</option>
                                      
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>BPJSTK :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Aktif</option>
                                      <option value="2">Belum Aktif</option>
                                      <option value="2">Non Aktif</option>
                                      
                                  </select>
                            </div>
							
							
							
                            </div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group row">
                            
								<div class="col-lg-2">
                                <label>Zona Kerja :</label>
								
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
											Mitra Juru Parkir
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-brand">
										40
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Pria
										</h4>
										<span class="kt-widget24__desc">
											Statistik Mitra Juru Parkir Pria
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-success">
										30
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Wanita
										</h4>
										<span class="kt-widget24__desc">
											Statistik Mitra Juru Parkir Wanita
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Qrcode<br>Mitra Jukir</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">ID Mitra Jukir</th>
											  
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="7%" rowspan="2" bgcolor="#f7fcff">Nama Mitra Jukir</th>
											 
											  <th colspan="4" bgcolor="#fdfdec">Area Bertugas</th>
											  
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">WA</th>
											 
											  <th width="1%" colspan="3" bgcolor="#f7fcff">Atribut Kerja</th>
											    <th width="2%" rowspan="2" bgcolor="#f7fcff">Kolektor</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#fdfdec">Zona</th>
											  <th width="2%" bgcolor="#fdfdec">Wilayah</th>
											  <th width="10%" bgcolor="#fdfdec">Nama Titik Parkir</th>
											  <th width="15%" bgcolor="#fdfdec">Alamat Titik Parkir</th>
											  <th width="1%" bgcolor="#f7fcff">ID Card</th>
											  <th width="1%" bgcolor="#f7fcff">Rompi</th>
											  <th width="1%" bgcolor="#f7fcff">BPJSTK</th>
								          </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td style="text-align:center" nowrap><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td style="text-align:center" nowrap>00001MJPTJUVIII23</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>HARIS DG. PAWA</td>
												
												
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:left" nowrap>Bakung</td>
												<td nowrap="nowrap" style="text-align:left">MEGATECH</td>
												<td style="text-align:left" nowrap>JL. PENGAYOMAN</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Diserahkan<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-barcode"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Diserahkan<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-user-tie"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Aktif<hr>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP PEGAWAI<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="kolektor-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Kolektor</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Jukir</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-atribut">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima ID Card</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-rompi">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima Rompi</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#ubah-password">
																				<i class="kt-nav__link-icon fa fa-lock"></i>
																				<span class="kt-nav__link-text">Ubah Password</span>
																			</div>
																		</li>
																		
																			
																		<li class="kt-nav__item">
																		<a href="mitra-remove.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-slash"></i>
																				<span class="kt-nav__link-text">Berhentikan Mitra</span>
																			</li></a>
																		
																		<li class="kt-nav__item">
																			<a href="mitra-edit-area.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Ubah Area Tugas</span>
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
												<td id="kt_table_1">2</td>
												<td style="text-align:center" nowrap><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td style="text-align:center" nowrap>00002MJPTJUVIII23</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>ARMAN</td>
											
												
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:left" nowrap>Berua</td>
												<td nowrap="nowrap" style="text-align:left">MIE GACOAN</td>
												<td style="text-align:left" nowrap>JL. SULTAN ALAUDDIN</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Diserahkan<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-barcode"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Diserahkan<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-user-tie"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Aktif<hr>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP PEGAWAI<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_2.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="kolektor-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Kolektor</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Jukir</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-atribut">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima ID Card</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-rompi">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima Rompi</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#ubah-password">
																				<i class="kt-nav__link-icon fa fa-lock"></i>
																				<span class="kt-nav__link-text">Ubah Password</span>
																			</div>
																		</li>
																		
																			
																		<li class="kt-nav__item">
																		<a href="mitra-remove.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-slash"></i>
																				<span class="kt-nav__link-text">Berhentikan Mitra</span>
																			</li></a>
																		
																		<li class="kt-nav__item">
																			<a href="mitra-edit-area.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Ubah Area Tugas</span>
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
												<td id="kt_table_1">3</td>
												<td style="text-align:center" nowrap><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td style="text-align:center" nowrap>00003MJPTJUVIII23</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>KASIM DG. BONTO</td>
												
												
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:left" nowrap>Bulurokeng</td>
												<td nowrap="nowrap" style="text-align:left">RM. 17 PROPINSI (KIOS MAHKOTA)</td>
												<td style="text-align:left" nowrap>JL. DATUK MUSENG</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Belum Diserahkan" data-html="true">
															<i class="fa fa-barcode"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Belum Diserahkan" data-html="true"><i class="fa fa-user-tie"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Aktif<hr>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP PEGAWAI<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="kolektor-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Kolektor</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Jukir</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-atribut">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima ID Card</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-rompi">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima Rompi</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#ubah-password">
																				<i class="kt-nav__link-icon fa fa-lock"></i>
																				<span class="kt-nav__link-text">Ubah Password</span>
																			</div>
																		</li>
																		
																			
																		<li class="kt-nav__item">
																		<a href="mitra-remove.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-slash"></i>
																				<span class="kt-nav__link-text">Berhentikan Mitra</span>
																			</li></a>
																		
																		<li class="kt-nav__item">
																			<a href="mitra-edit-area.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Ubah Area Tugas</span>
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
												<td id="kt_table_1">4</td>
												<td style="text-align:center" nowrap><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td style="text-align:center" nowrap>00004MJPTJUVIII23</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>A. LUTFIA AGUSTINAPUTRI</td>
												
												
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:left" nowrap>Daya</td>
												<td nowrap="nowrap" style="text-align:left">HOLLAND BAKERY</td>
												<td style="text-align:left" nowrap>JL. JEND SUDIRMAN</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Diserahkan<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-barcode"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Belum Diserahkan" data-html="true"><i class="fa fa-user-tie"></i></button></td>
												<td width="1%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Tidak Aktif" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP PEGAWAI<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_4.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="kolektor-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Kolektor</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Jukir</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-atribut">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima ID Card</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-rompi">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima Rompi</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#ubah-password">
																				<i class="kt-nav__link-icon fa fa-lock"></i>
																				<span class="kt-nav__link-text">Ubah Password</span>
																			</div>
																		</li>
																		
																			
																		<li class="kt-nav__item">
																		<a href="mitra-remove.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-slash"></i>
																				<span class="kt-nav__link-text">Berhentikan Mitra</span>
																			</li></a>
																		
																		<li class="kt-nav__item">
																			<a href="mitra-edit-area.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Ubah Area Tugas</span>
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
												<td id="kt_table_1">5</td>
												<td style="text-align:center" nowrap><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td style="text-align:center" nowrap>00005MJPTJUVIII23</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>BANI</td>
												
												
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:left" nowrap>Katimbang</td>
												<td nowrap="nowrap" style="text-align:left">COTO MAROS MALAM</td>
												<td style="text-align:left" nowrap>JL. JEND SUDIRMAN</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Diserahkan<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-barcode"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Diserahkan<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa fa-user-tie"></i>
														</span></td>
												<td width="1%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Aktif<hr>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP PEGAWAI<hr>UMAR MALIK, SE<hr>082244444436" data-html="true">
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="mitra-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="kolektor-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil Kolektor</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Jukir</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-atribut">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima ID Card</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#serah-terima-rompi">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Serah Terima Rompi</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#ubah-password">
																				<i class="kt-nav__link-icon fa fa-lock"></i>
																				<span class="kt-nav__link-text">Ubah Password</span>
																			</div>
																		</li>
																		
																			
																		<li class="kt-nav__item">
																		<a href="mitra-remove.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-slash"></i>
																				<span class="kt-nav__link-text">Berhentikan Mitra</span>
																			</li></a>
																		
																		<li class="kt-nav__item">
																			<a href="mitra-edit-area.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Ubah Area Tugas</span>
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
									<div class="modal fade" id="serah-terima-atribut" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-id-card-alt"></i></span>
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
										<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-6">
                          <label>ID Mitra Jukir :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="00001MJPTJUVIII23">
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Wilayah :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Bulurokeng">
                        </div>
                       
						
                        </div>
						
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Alamat Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>
									
									<div class="col-lg-12">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Penyerahan ID Card</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="7%" bgcolor="#f7fcff">Pegawai yang Menyerahkan</th>
											 
											  <th width="2%" bgcolor="#f7fcff">Waktu  Penyerahan</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:right">1</td>
												<td style="text-align:left" nowrap>HARIS DG. PAWA</td>
												
												<td style="text-align:center" nowrap>24 September 2009 - 07:15:00 WITA</td>
										  </tr>
										  <tr>
												<td style="text-align:right">2</td>
												<td style="text-align:left" nowrap>HARIS DG. PAWA</td>
												
												<td style="text-align:center" nowrap>24 September 2008 - 07:15:00 WITA</td>
										  </tr>
									    </tbody>
									</table>
						
                     
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
							<!--begin::Modal 1-->
									<div class="modal fade" id="ubah-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-user-lock"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">Ubah Password</h3>
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
										<div class="col-lg-12">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-6">
                          <label>Password Baru :</label>
                          <div class="form-group">
																							<div class="input-group pass">
																								<input type="text" class="form-control form-control-sm" placeholder="Isikan No Handphone Aktif">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-eye-slash"></i>
																									</span>
																								</div>
																							</div>
																						</div>
                        </div>
						<div class="col-lg-6">
                          <label>Ulangi Password Baru :</label>
                          <div class="form-group">
																							<div class="input-group pass">
																								<input type="text" class="form-control form-control-sm" placeholder="Isikan No Handphone Aktif">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-eye-slash"></i>
																									</span>
																								</div>
																							</div>
																						</div>
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
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-list-alt"></i></span>
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
										<div class="col-lg-12">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-6">
                          <label>ID Mitra Jukir :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="00001MJPTJUVIII23">
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Wilayah :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Bulurokeng">
                        </div>
                       
						
                        </div>
						
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Alamat Titik Parkir :</label>
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
									
									<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">History Penyerahan Rompi</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="7%" bgcolor="#f7fcff">Pegawai yang Menyerahkan</th>
											 
											  <th width="2%" bgcolor="#f7fcff">Waktu  Penyerahan</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:right" id="kt_table_1">1</td>
												<td style="text-align:left" nowrap>HARIS DG. PAWA</td>
												
												<td style="text-align:center" nowrap>24 September 2009 - 07:15:00 WITA</td>
										  </tr>
										  <tr>
												<td style="text-align:right" id="kt_table_1">2</td>
												<td style="text-align:left" nowrap>HARIS DG. PAWA</td>
												
												<td style="text-align:center" nowrap>24 September 2008 - 07:15:00 WITA</td>
										  </tr>
									    </tbody>
									</table>
						
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
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
							<!--End::Modal 2-->
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
