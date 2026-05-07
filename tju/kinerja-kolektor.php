<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>

      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Kinerja Kolektor
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Periode : Agustus 2023</span>
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
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">PDF</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-excel"></i>
															<span class="kt-nav__link-text">Excel</span>

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
						<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
														<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
														<div class="alert-text">A simple primary alert—check it out!</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>

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
						<div class="col-lg-1">
                                <label>Tahun :</label>
								
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">2023</option>
                                      <option value="2">2022</option>
                                      <option value="3">2021</option>
                                      <option value="4">2020</option>
                                      <option value="5">2019</option>
                                      <option value="6">2018</option>
                                      <option value="7">2017</option>
                                      <option value="8">2016</option>
                                      <option value="9">2015</option>
                                      <option value="10">2014</option>
                                      <option value="11">2013</option>
                                      <option value="12">2012</option>
                                  </select>
    		                    </div>
								<div class="col-lg-1">
                                <label>Bulan :</label>
								
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Januari</option>
                                      <option value="2">Februari</option>
                                      <option value="3">Maret</option>
                                      <option value="4">April</option>
                                      <option value="5">Mei</option>
                                      <option value="6">Juni</option>
                                      <option value="7">Juli</option>
                                      <option value="8">Agustus</option>
                                      <option value="9">September</option>
                                      <option value="10">Oktober</option>
                                      <option value="11">November</option>
                                      <option value="12">Desember</option>
                                  </select>
    		                    </div>
						 <div class="col-lg-2">
                                <label>Nama Kolektor :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
                            
                           
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
							
							
							
								<div class="col-lg-1">
                                <label>Status :</label>
								
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Baik</option>
                                      <option value="2">Atensi</option>
                                     
                                     
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

																<!--end::Form-->

							<div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">

                  <form class="kt-form" id="kt_form">
                  <div class="kt-portlet__body">
										
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Jabatan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Area Bertugas</th>
											  <th width="1%" colspan="3" bgcolor="#feffed">Data Setoran</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">Status Kinerja</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="12%" bgcolor="#feffed">Zona</th>
											  <th width="12%" bgcolor="#feffed">Wilayah</th>
											  <th width="1%" bgcolor="#feffed">Tidak Setor</th>
											  <th width="1%" bgcolor="#feffed">Kurang Setor</th>
											  <th width="1%" bgcolor="#feffed">Tidak  Target</th>
								          </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>UMAR MALIK, SE</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Kepegawaian</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td nowrap style="text-align:left">Mariso, Mamajang, Tamalate</td>
												<td nowrap style="text-align:left">Mattoangin, Bonto Biraeng, Parang,<br>Baji Mappakasunggu, Bongaya</td>
												<td nowrap style="text-align:center">0</td>
												<td nowrap style="text-align:center">0</td>
												<td nowrap style="text-align:center">0</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Baik</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="lihat-jukir-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Mitra Jukir</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
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
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>LEONY HESTI KILALA</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Hukum</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td nowrap style="text-align:left">Panakkukang, Rappocini, Manggala</td>
												<td nowrap style="text-align:left">Masale, Pandang, Paropo, Bua Kana, <br>Banta-bantaeng, Kassi-kassi, Borong</td>
												<td nowrap style="text-align:center">0</td>
												<td nowrap style="text-align:center">0</td>
												<td nowrap style="text-align:center">0</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Baik</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="lihat-jukir-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Mitra Jukir</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
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
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>MUSLIMIN</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Keuangan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td nowrap style="text-align:left">Ujung Pandang, Makassar</td>
												<td nowrap style="text-align:left">Baru, Maloku, Sawerigading, Mangkura, <br>Losari, Maricaya Baru</td>
												<td nowrap style="text-align:center">0</td>
												<td nowrap style="text-align:center">0</td>
												<td nowrap style="text-align:center">0</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Baik</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="lihat-jukir-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Mitra Jukir</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
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
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>HAERUL</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Asset</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td nowrap style="text-align:left">Panakkukang, Rappocini, Manggala</td>
												<td nowrap style="text-align:left">Masale, Pandang, Paropo, Bua Kana, <br>Banta-bantaeng, Kassi-kassi, Borong</td>
												<td nowrap style="text-align:center">0</td>
												<td nowrap style="text-align:center">0</td>
												<td nowrap style="text-align:center">0</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Baik</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="lihat-jukir-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Mitra Jukir</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
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
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_8.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>WIRA YUDHA SAKTI. D</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Pengelolaan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td nowrap style="text-align:left">Ujung Pandang, Wajo, Makassar</td>

												<td nowrap style="text-align:left">Pisang Utara, Baru, Bulogading, Maloku, <br>Sawerigading, Lajangiru, Pisang Selatan, <br>Losari, Pattunuang, Lariang Bangi, <br>Maradekaya Selatan</td>     
												<td nowrap style="text-align:center">1</td>
												<td nowrap style="text-align:center">1</td>
												<td nowrap style="text-align:center">1</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Atensi</span></td>                                                                                      
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="lihat-jukir-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Mitra Jukir</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">6</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>RUDI RIVAI</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Produksi</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td nowrap style="text-align:left">Panakkukang</td>
												<td nowrap style="text-align:left">Masale, Pandang, Paropo</td>
												<td nowrap style="text-align:center">2</td>
												<td nowrap style="text-align:center">2</td>
												<td nowrap style="text-align:center">2</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Atensi</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="lihat-jukir-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Mitra Jukir</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">7</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_13.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>YUNUS TULAK, S.IP</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Pengembangan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</span></td>
												<td nowrap style="text-align:left">Mariso</td>
												<td nowrap style="text-align:left">Lette, Kunjung Mae, Panambungan, <br>Mario, Mariso, Tamarunang</td>
												<td nowrap style="text-align:center">3</td>
												<td nowrap style="text-align:center">3</td>
												<td nowrap style="text-align:center">3</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Atensi</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="lihat-jukir-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Mitra Jukir</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
<tr>
												<td id="kt_table_1">8</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>ANUGRAH. WL</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Kerjasama</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</span></td>
												<td nowrap style="text-align:left">Wajo, Bontoala</td>
												<td nowrap style="text-align:left">Ende, Mampu, Melayu, Butung, <br>Pattunuang, Bontoala Parang, <br>Wajo Baru, Gaddong</td>
												<td nowrap style="text-align:center">4</td>
												<td nowrap style="text-align:center">4</td>
												<td nowrap style="text-align:center">4</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Atensi</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="lihat-jukir-kolektor.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Mitra Jukir</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link">
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

                  </form>
                  </div>
						</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
