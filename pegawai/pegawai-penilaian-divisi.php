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
											Data Penilaian Divisi Anda
									</h3>
<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Periode Desember 2022 </span>
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


																<!--begin::Form-->
																<form class="kt-form">
																	<div class="kt-portlet__body">
						                      <div class="form-group row">
												 <div class="col-lg-3">
						                          <label>Pejabat Penilai :</label>
												  <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000 000 001 - Yulianti Tomu, SE</option>
																					<option value="HI">000 000 002 - Rizal Asjadad</option>
																					<option value="HI">000 000 003 - Christofher Rio Aviary</option>
																					<option value="HI">000 000 004 - Mu’amar Nor Amin</option>
																					<option value="HI">000 000 005 - Zulfadli Syahrir</option>
					 															</optgroup>
					 															<optgroup label="Umum">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>

					 														</select>

						                        </div>
												
						                        <div class="col-lg-3">
						                          <label>Department Penilai :</label>
												  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>

						                        </div>
												 <div class="col-lg-3">
						                          <label>Jabatan Penilai :</label>
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
												
												<div class="col-lg-1">
						                          <label>Tipe Pegawai :</label>
																			<select class="form-control kt-selectpicker" data-live-search="true">
			                                      <option value="2" selected="">Pegawai Tetap</option>
			                                      <option value="2">Pegawai Kontrak</option>
			                                      <option value="2">Pegawai Honor</option>

			                                  </select>
						                        </div>
												
												<div class="col-lg-2">
						                          <label>Status Penilaian :</label>
																			<select class="form-control kt-selectpicker" data-live-search="true">
			                                      <option value="2" selected="">Menunggu Persetujuan</option>
			                                      <option value="3">Disetujui</option>
			                                      <option value="3">Ditolak</option>

			                                  </select>
						                        </div>
												
						                        </div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
												 <div class="col-lg-3">
						                          <label>Pegawai yang Dinilai :</label>
												  <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000 000 001 - Yulianti Tomu, SE</option>
																					<option value="HI">000 000 002 - Rizal Asjadad</option>
																					<option value="HI">000 000 003 - Christofher Rio Aviary</option>
																					<option value="HI">000 000 004 - Mu’amar Nor Amin</option>
																					<option value="HI">000 000 005 - Zulfadli Syahrir</option>
					 															</optgroup>
					 															<optgroup label="Umum">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>

					 														</select>

						                        </div>
												
						                        <div class="col-lg-3">
						                          <label>Department yang Dinilai :</label>
												  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>

						                        </div>
												<div class="col-lg-3">
						                          <label>Jabatan yang Dinilai :</label>
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
												
												<div class="col-lg-1">
						                          <label>Kantor :</label>
																			<select class="form-control kt-selectpicker" data-live-search="true">
			                                      <option value="2" selected="">Pusat</option>
			                                      <option value="2">Cabang</option>

			                                  </select>
						                        </div>
												
												<div class="col-lg-2">
						                          <label class="">Tanggal Penilaian :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
						                        </div>
						                      </div>

																	<div class="kt-portlet__foot text-center">
																		<div class="kt-form__actions">
																			<button type="reset" class="btn btn-outline-brand btn-sm">Reset</button>
																			<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>

																		</div>
																	</div>
																</form>

																<!--end::Form-->
															</div>
							<!--begin:: Widgets/Stats-->
							

							<!--end:: Widgets/Stats-->
<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Bagian Umum dan Kepegawaian</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
                        <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="m_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">#</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Periode Penilaian</th>
												
											  <th colspan="3" bgcolor="#f7fcff">Pejabat Penilai</th>
												<th colspan="7" bgcolor="#feffed">Pegawai yang Dinilai</th>
												<th width="5%" bgcolor="#f7fcff" rowspan="2">Waktu<br>
											  Penilaian</th>
												<th colspan="2" bgcolor="#feffed">Prestasi Kerja (%)</th>
												<th colspan="2" bgcolor="#feffed">Beban Kerja (%)</th>
												<th width="4%" bgcolor="#feffed" rowspan="2">Mutu</th>
												<th colspan="2" bgcolor="#f7fcff">Verifikasi</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>
											</tr>
											<tr>
											  <th width="2%" bgcolor="#f7fcff">Foto</th>
											  <th width="5%" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="3%" bgcolor="#f7fcff">NIP</th>
											 
											  <th width="2%" bgcolor="#feffed">Foto</th>
												<th width="5%" bgcolor="#feffed">Nama Pegawai</th>
												<th width="3%" bgcolor="#feffed">NIP </th>
												<th width="1%" bgcolor="#feffed">Tipe Pegawai</th>
												<th width="5%" bgcolor="#feffed">Department</th>
												<th width="5%" bgcolor="#feffed">Jabatan</th>
												<th width="1%" bgcolor="#feffed">Kantor</th>
												<th bgcolor="#feffed">Tingkat Kehadiran</th>
												<th bgcolor="#feffed">Efektifitas &amp; Efisiensi</th>
												<th bgcolor="#feffed">Besaran Aktifitas</th>
												<th bgcolor="#feffed">Besaran Tanggung Jawab Dikelola</th>
												<th width="1%" bgcolor="#f7fcff">Direktur Umum</th>
												<th width="1%" bgcolor="#f7fcff">Direktur Utama</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td id="kt_table_1">Januari 2023</td>
												
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>
												<td id="kt_table_1" style="text-align:left">Sri Suhartini, SE</td>
												<td id="kt_table_1" style="text-align:center">238 004 032</td>
												
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td id="kt_table_1" style="text-align:left">Sri Suhartini, SE</td>
												<td id="kt_table_1" style="text-align:center">238 004 032</td>
												<td id="kt_table_1" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
												<td id="kt_table_1" style="text-align:center">Pengembangan Usaha dan Kerjasama</td>
												<td id="kt_table_1" style="text-align:center">Kepala Seksi Administrasi Kepegawaian</td>
											  <td style="text-align:center">Pusat</td>
											  <td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="4%" style="text-align:center">25</td>
											  <td width="4%" style="text-align:center">0</td>
											  <td width="4%" style="text-align:center">0</td>
											  <td width="4%" style="text-align:center">0</td>
											  <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Baik</span></td>
											  
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-penilaian-kinerja.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-penilaian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Cetak Penilaian</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-mutasi.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link kt_sweetalert_demo_9" id="kt_sweetalert_demo_9">
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
												<td id="kt_table_1">Februari 2023</td>
												
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_14.jpg" alt="image">
													</a></td>
												<td id="kt_table_1" style="text-align:left">Sri Suhartini, SE</td>
												<td id="kt_table_1" style="text-align:center">238 004 032</td>
												
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_15.jpg" alt="image">
													</a></td>
												<td id="kt_table_1" style="text-align:left">Sri Suhartini, SE</td>
												<td id="kt_table_1" style="text-align:center">238 004 032</td>
												<td id="kt_table_1" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Honor</span></td>
												<td id="kt_table_1" style="text-align:center">Pengembangan Usaha dan Kerjasama</td>
												<td id="kt_table_1" style="text-align:center">Kepala Seksi Administrasi Kepegawaian</td>
											  <td style="text-align:center">Pusat</td>
											  <td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center">25</td>
											  <td style="text-align:center">25</td>
											  <td style="text-align:center">25</td>
											  <td style="text-align:center">25</td>
											  <td style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Atensi</span></td>
											  
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-penilaian-kinerja.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-penilaian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Cetak Penilaian</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-mutasi.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link kt_sweetalert_demo_9" id="kt_sweetalert_demo_9">
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


                      </div>
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

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
