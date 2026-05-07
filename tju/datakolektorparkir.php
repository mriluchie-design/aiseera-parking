<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>



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
											Data Kolektor Parkir

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
											 <a href="kolektor-tju-add.php" class="btn btn-info btn-sm">
                    <i class="fa fa-plus-circle"></i> Tambah Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>

											
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
                                <label>Nama Pegawai :</label>
    	                        <div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000000001 - Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">000000003 - Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000000002 - Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000000004 - Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000000005 - Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
					                       </div>
                            </div>
                            <div class="col-lg-2">
                                <label>Departemen :</label>

                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label class="">Divisi :</label>
								 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Direksi</option>
                                      <option value="4">Umum dan Kepegawaian</option>
                                      <option value="5" selected="">Hukum dan Humas</option>
                                      <option value="6">Keuangan</option>
                                      <option value="12">Asset</option>
                                      <option value="12" >Pengelolaan</option>
                                      <option value="12" >Produksi</option>
                                      <option value="12" >Pengembangan</option>
                                      <option value="12" >Kerjasama</option>
                                  </select>

                            </div>
                            <div class="col-lg-2">
                                <label class="">Jabatan :</label>
								 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
									  <optgroup label="Direksi">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Umum</option>
                                      <option value="2">Direktur Keuangan dan Asset</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     
                                  </select>

                            </div>
							
							<div class="col-lg-2">
                                <label class="">Kantor :</label>
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
                            </div>
                            </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
							<div class="col-lg-2">
                                <label class="">Tanggal Kontrak :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label class="">Berakhir Kontrak :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
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
							
                        </div>
                    </div>
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
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
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">ID Kolektor</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Jabatan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Status<br />Pegawai</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Area Bertugas</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="7%" bgcolor="#feffed">Zona</th>
											  <th width="10%" bgcolor="#feffed">Wilayah</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td nowrap="nowrap" style="text-align:left">0001KTJU823</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_1.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>UMAR MALIK, SE</td>
												<td style="text-align:left" nowrap>Staff Administrasi Kepegawaian</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td style="text-align:left" nowrap>Mariso, Mamajang, Tamalate</td>
												<td nowrap style="text-align:left">Mattoangin, Bonto Biraeng, Parang,<br>Baji Mappakasunggu, Bongaya</td>
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
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-tugas">
																				<i class="kt-nav__link-icon fab fa-creative-commons-by"></i>
																				<span class="kt-nav__link-text">Tentukan Wilayah Tugas</span>
																			</div>
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
												<td nowrap="nowrap" style="text-align:left">0002KTJU823</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>LEONY HESTI KILALA</td>
												<td style="text-align:left" nowrap>Staff Administrasi Hukum</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Kontrak</button></td>
												<td nowrap style="text-align:left">Panakkukang, Rappocini, Manggala</td>
												<td nowrap style="text-align:left">Masale, Pandang, Paropo, Bua Kana, <br>Banta-bantaeng, Kassi-kassi, Borong</td>
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
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-tugas">
																				<i class="kt-nav__link-icon fab fa-creative-commons-by"></i>
																				<span class="kt-nav__link-text">Tentukan Wilayah Tugas</span>
																			</div>
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
												<td nowrap="nowrap" style="text-align:left">0003KTJU823</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_5.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>MUSLIMIN</td>
												<td style="text-align:left" nowrap>Staff Administrasi Keuangan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td nowrap style="text-align:left">Ujung Pandang, Makassar</td>
												<td nowrap style="text-align:left">Baru, Maloku, Sawerigading, Mangkura, <br>Losari, Maricaya Baru</td>
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
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-tugas">
																				<i class="kt-nav__link-icon fab fa-creative-commons-by"></i>
																				<span class="kt-nav__link-text">Tentukan Wilayah Tugas</span>
																			</div>
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
												<td nowrap="nowrap" style="text-align:left">0004KTJU823</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_3.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>HAERUL</td>
												<td style="text-align:left" nowrap>Staff Administrasi Asset</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td nowrap style="text-align:left">Panakkukang, Rappocini, Manggala</td>
												<td nowrap style="text-align:left">Masale, Pandang, Paropo, Bua Kana, <br>Banta-bantaeng, Kassi-kassi, Borong</td>
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
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-tugas">
																				<i class="kt-nav__link-icon fab fa-creative-commons-by"></i>
																				<span class="kt-nav__link-text">Tentukan Wilayah Tugas</span>
																			</div>
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
												<td nowrap="nowrap" style="text-align:left">0005KTJU823</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_8.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>WIRA YUDHA SAKTI. D</td>
												<td style="text-align:left" nowrap>Staff Administrasi Pengelolaan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td nowrap style="text-align:left">Ujung Pandang, Wajo, Makassar</td>

												<td nowrap style="text-align:left">Pisang Utara, Baru, Bulogading, Maloku, <br>Sawerigading, Lajangiru, Pisang Selatan, <br>Losari, Pattunuang, Lariang Bangi, <br>Maradekaya Selatan</td>                                                                                      
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
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-tugas">
																				<i class="kt-nav__link-icon fab fa-creative-commons-by"></i>
																				<span class="kt-nav__link-text">Tentukan Wilayah Tugas</span>
																			</div>
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
												<td nowrap="nowrap" style="text-align:left">0006KTJU823</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>RUDI RIVAI</td>
												<td style="text-align:left" nowrap>Staff Administrasi Produksi</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td nowrap style="text-align:left">Panakkukang</td>
												<td nowrap style="text-align:left">Masale, Pandang, Paropo</td>
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
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-tugas">
																				<i class="kt-nav__link-icon fab fa-creative-commons-by"></i>
																				<span class="kt-nav__link-text">Tentukan Wilayah Tugas</span>
																			</div>
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
												<td nowrap="nowrap" style="text-align:left">0007KTJU823</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_13.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>YUNUS TULAK, S.IP</td>
												<td style="text-align:left" nowrap>Staff Administrasi Pengembangan</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td nowrap style="text-align:left">Mariso</td>
												<td nowrap style="text-align:left">Lette, Kunjung Mae, Panambungan, <br>Mario, Mariso, Tamarunang</td>
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
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-tugas">
																				<i class="kt-nav__link-icon fab fa-creative-commons-by"></i>
																				<span class="kt-nav__link-text">Tentukan Wilayah Tugas</span>
																			</div>
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
												<td nowrap="nowrap" style="text-align:left">0008KTJU823</td>
												<td nowrap="" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP Pegawai&lt;hr&gt;No Handphone" data-html="true">
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>ANUGRAH. WL</td>
												<td style="text-align:left" nowrap>Staff Administrasi Kerjasama</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td nowrap style="text-align:left">Wajo, Bontoala</td>
												<td nowrap style="text-align:left">Ende, Mampu, Melayu, Butung, <br>Pattunuang, Bontoala Parang, <br>Wajo Baru, Gaddong</td>
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
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal-zona-tugas">
																				<i class="kt-nav__link-icon fab fa-creative-commons-by"></i>
																				<span class="kt-nav__link-text">Tentukan Wilayah Tugas</span>
																			</div>
																		</li>

																		
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
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
<!--begin::Modal 1-->
									<div class="modal fade" id="modal-zona-tugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-user-circle"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">PENENTUAN ZONA TUGAS KOLEKTOR TJU</h3>
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
														<label>ID Kolektor :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0001KTJU823">

												</div>
												<div class="col-lg-8">
														<label>Zona :</label>
														<select class="form-control kt-selectpicker" multiple="multiple">
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
												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group row">
												<div class="col-lg-12">
														<label>Wilayah :</label>
														
									<select class="form-control kt-selectpicker" multiple="multiple">
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
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
			

									</div>

									</div>
								</div>
							<!--End::Modal 1-->
							
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

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
