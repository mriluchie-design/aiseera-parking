<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                   Data Transaksi Non Member
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
                                <label>Titik Parkir :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
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
                                <label>Periode Transaksi :</label>
    	                     <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
        					
                            </div>
							<div class="col-lg-1">
                                <label>Jenis Kendaraan :</label>
    	                       <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Mobil</option>
                                      <option value="2">Motor</option>
                                     
                                  </select>
        					
                            </div>
							<div class="col-lg-1">
                                <label>Status Transaksi :</label>
    	                       <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Tunai</option>
                                      <option value="2">Non Tunai</option>
                                     
                                  </select>
        					
                            </div>
                            
							
							
							
							
							
							
							
                            </div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group row">
						<div class="col-lg-2">
                                <label>ID Mitra :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
                           <div class="col-lg-2">
                                <label>Nama Mitra :</label>
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
											Data Transaksi
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
											Tunai
										</h4>
										<span class="kt-widget24__desc">
											Data Transaksi Tunai
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
											Non Tunai
										</h4>
										<span class="kt-widget24__desc">
											Data Transaksi Non Tunai
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">No</th>
											  
											 
											  
											 
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Zona</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Wilayah</th>
											  <th width="14%" rowspan="2" bgcolor="#f7fcff">Titik Parkir</th>
											  <th width="14%" rowspan="2" bgcolor="#f7fcff">Alamat Titik Parkir</th>
											   <th colspan="2" bgcolor="#f7fcff">Mitra Jukir Bertugas</th>
											   <th width="1%" colspan="4" bgcolor="#feffed">Detail Transaksi</th>
											  <th width="7%" rowspan="2" bgcolor="#f7fcff">Metode<br>
											  Transaksi</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="4%" bgcolor="#f7fcff">Foto</th>
											  <th width="10%" bgcolor="#f7fcff">Nama Mitra</th>
											  <th width="2%" bgcolor="#feffed">ID Transaksi</th>
											  <th width="2%" bgcolor="#feffed">Waktu  Transaksi</th>
											  <th width="2%" bgcolor="#feffed">Jenis<br>Kendaraan</th>
											  <th width="9%" bgcolor="#feffed">Nominal</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												
												
												
												
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td nowrap="nowrap" style="text-align:center">Nama Kelurahan</td>
												<td nowrap="nowrap" style="text-align:left">MEGATECH</td>
												<td nowrap="nowrap" style="text-align:left">JL. PENGAYOMAN</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="00001MJPTJUVIII23" data-html="true">
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>HARIS DAENG PAWA</td>
												<td nowrap style="text-align:center">001TNMT823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<hr />17:00:00 WITA</td>
												<td nowrap style="text-align:center">Mobil</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>20.000,-</span> </div></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
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
												<td nowrap="nowrap" style="text-align:left">MIE GACOAN</td>
												<td nowrap="nowrap" style="text-align:left">JL. SULTAN ALAUDDIN</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="00002MJPTJUVIII23" data-html="true">
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>ARMAN</td>
												<td nowrap style="text-align:center">002TNMT823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<hr />16:00:00 WITA</td>
												<td nowrap style="text-align:center">Motor</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>10.000,-</span> </div></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
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
												<td nowrap="nowrap" style="text-align:left">RM. 17 PROPINSI (KIOS MAHKOTA)</td>
												<td nowrap="nowrap" style="text-align:left">JL. DATUK MUSENG</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="00003MJPTJUVIII23" data-html="true">
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>KASIM DAENG BONTO</td>
												<td nowrap style="text-align:center">001TNME823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<hr />15:00:00 WITA</td>
												<td nowrap style="text-align:center">Mobil</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>20.000,-</span> </div></td>
												<td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135&lt;hr&gt;e-Wallet&lt;hr&gt;Gopay" data-html="true">Non Tunai</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-non-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
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
												<td nowrap="nowrap" style="text-align:left">HOLLAND BAKERY</td>
												<td nowrap="nowrap" style="text-align:left">JL. JEND SUDIRMAN</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="00004MJPTJUVIII23" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>
												

												<td style="text-align:left" nowrap>A. LUTFIA AGUSTINAPUTRI</td>
												<td nowrap style="text-align:center">003TNMT823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<hr />14:00:00 WITA</td>
												<td nowrap style="text-align:center">Motor</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>20.000,-</span> </div></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
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
												<td nowrap="nowrap" style="text-align:left">COTO MAROS MALAM</td>
												<td nowrap="nowrap" style="text-align:left">JL. JEND SUDIRMAN</td>
												<td nowrap style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="00005MJPTJUVIII23" data-html="true">
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>BANI</td>
												<td nowrap style="text-align:center">004TNMT823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<hr />13:00:00 WITA</td>
												<td nowrap style="text-align:center">Mobil</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>20.000,-</span> </div></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
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
        </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
