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
											Statistik Absen Pegawai
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
						                        <div class="col-lg-3">
						                          <label>Nama Pegawai :</label>
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
						                        
<div class="col-lg-2">
						                          <label>Department :</label>
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
						                          <label>Bagian :</label>
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
						                          <label class="">Tanggal :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
												<div class="col-lg-1">
						                          <label>Tipe Pegawai :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Tetap</option>
						                              <option value="3">Kontrak</option>
						                              <option value="3">Honor</option>

						                          </select>
						                        </div>
												<div class="col-lg-2">
						                          <label>Kantor :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Pusat</option>
						                              <option value="3">Cabang Sulawesi Barat</option>

						                          </select>
						                        </div>

						                      </div>


						                      </div>
																	<div class="kt-portlet__foot text-center">
																		<div class="kt-form__actions">
																			<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																			<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																		</div>
																	</div>
																</form>
															</div>

																<!--end::Form-->

							<div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">

                  <form class="kt-form" id="kt_form">
                  <div class="kt-portlet__body">
										<ul class="nav nav-pills nav-fill" role="tablist">
											<li class="nav-item dropdown">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:#1d2f53 !important; color:#fff !important">2023</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#">2022</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2021</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2020</a>
													</div>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Januari</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Februari</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Maret</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">April</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Mei</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juni</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juli</a>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_3_1">Agustus</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">September</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Oktober</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">November</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Desember</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
															  <th width="2%" bgcolor="#F3F8FF" rowspan="3">Pegawai</th>
															  <th width="2%" bgcolor="#F3F8FF" rowspan="3">Tipe Pegawai</th>
															  <th colspan="6" bgcolor="#F3F8FF">Minggu 1</th>
															  <th colspan="6" bgcolor="#F3F8FF">Minggu 2</th>
															  <th colspan="6" bgcolor="#F3F8FF">Minggu 3</th>
															  <th colspan="6" bgcolor="#F3F8FF">Minggu 4</th>
															  <th colspan="6" bgcolor="#F3F8FF">Minggu 5</th>
															  <th width="2%" colspan="6" rowspan="2" bgcolor="#F3F8FF" style="border-bottom:1px solid #ccc;">STATISTIK ABSENSI</th>
															  <th width="2%" colspan="6" rowspan="2" bgcolor="#F3F8FF" style="border-bottom:1px solid #ccc;">PERSENTASE (%)</th>
															  <th width="1%" rowspan="3" bgcolor="#F3F8FF" style="border-bottom:1px solid #ccc;">Aksi</th>
												          </tr>
															<tr>
																<th colspan="6" bgcolor="#F3F8FF">1 - 7 Oktober 2023</th>
																<th colspan="6" bgcolor="#F3F8FF">8 - 14 Oktober 2023</th>
																<th colspan="6" bgcolor="#F3F8FF"><strong>15</strong> - 21 Oktober 2023</th>
																<th colspan="6" bgcolor="#F3F8FF">22 - 28 Oktober 2023</th>
																<th colspan="6" bgcolor="#F3F8FF">29 - 31 Oktober 2023</th>
															</tr>
															<tr>
																<td width="1%" bgcolor="#F3F8FF" class="hari">H</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">A</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">I</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">S</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">C</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">D</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">H</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">A</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">I</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">S</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">C</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">D</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">H</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">A</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">I</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">S</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">C</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">D</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">H</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">A</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">I</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">S</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">C</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">D</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">H</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">A</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">I</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">S</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">C</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">D</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">H</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">A</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">I</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">S</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">C</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">D</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">H</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">A</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">I</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">S</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">C</td>
																<td width="1%" bgcolor="#F3F8FF" class="hari">D</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td colspan="45" bgcolor="#008fd1"><span style="text-align:left; color: #FFF;">Direksi</span></td>
															</tr>
															<tr>
																<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Yulianti Tomu, SE<hr>000 000 001<hr>Direktur Utama" data-html="true">
																		<img src="../assets/media/users/100_15.jpg" alt="image">
																	</a></td>
																<td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
																<td align="center" valign="middle" style="text-align:center">4</td>
																	<td align="center" valign="middle" style="text-align:center">1</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">3</td>
																	<td align="center" valign="middle" style="text-align:center">1</td>
																	<td align="center" valign="middle" style="text-align:center">1</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">3</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">1</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">3</td>
																	<td align="center" valign="middle" style="text-align:center">1</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">2</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" style="text-align:center">0</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>15</strong></td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>3</strong></td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>2</strong></td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>68</strong></td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>14</strong></td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>9</strong></td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_absen" data-html="true"><i class="fa fa-eye"></i></button></td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rizal Asjadad&lt;hr&gt;000 000 002&lt;hr&gt;Direktur Umum" data-html="true"> <img src="../assets/media/users/dirum.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">2</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>15</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>3</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>2</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>68</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>14</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>9</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_absen" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-eye"></i></button></td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Christofher Rio Aviary&lt;hr&gt;000 000 003&lt;hr&gt;Direktur Operasional" data-html="true"> <img src="../assets/media/users/dirops.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">2</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>15</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>3</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>2</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>68</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>14</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>9</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_absen" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-eye"></i></button></td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Mu’amar Nor Amin&lt;hr&gt;000 000 004&lt;hr&gt;Direktur Keuangan dan Asset" data-html="true"> <img src="../assets/media/users/dirkeu.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">2</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>15</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>3</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>2</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>68</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>14</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>9</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_absen" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-eye"></i></button></td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Zulfadli Syahrir&lt;hr&gt;000 000 005&lt;hr&gt;Direktur Pengembangan Usaha dan Kerjasama" data-html="true"> <img src="../assets/media/users/dirjasa.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>

															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">4</td>
															  <td align="center" valign="middle" style="text-align:center">1</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">2</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" style="text-align:center">0</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>15</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>3</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>2</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>68</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>14</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>9</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center"><strong>0</strong></td>
															  <td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-info btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_absen" data-skin="" title="" data-html="true" data-original-title=""><i class="fa fa-eye"></i></button></td>
													      </tr>
															<tr>
															  <td colspan="45" align="center" valign="middle" bgcolor="#008fd1" style="text-align:left; color: #FFF;">Umum<span style="text-align: left"></span></td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE&lt;hr&gt;238 004 032&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"><img src="../assets/media/users/100_16.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Kontrak</span></td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
												          </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE&lt;hr&gt;238 004 032&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /> </a></td>
															  <td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Harian</span></td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE&lt;hr&gt;238 004 032&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Honor</span></td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>

															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>

															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sri Suhartini, SE&lt;hr&gt;238 004 032&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"><img src="../assets/media/users/100_10.jpg" alt="image" /></a></td>
															  <td align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tetap</span></td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
													      </tr>
															<tr>
																<td colspan="45" bgcolor="#008fd1"><span style="text-align:left; color: #FFF;">Keuangan dan Asset</span></td>
															</tr>
															<tr>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
																<td colspan="45" bgcolor="#008fd1"><span style="text-align:left; color: #FFF;">Operasional</span></td>
															</tr>
															<tr>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
													      </tr>
															<tr>
																<td colspan="45" bgcolor="#008fd1"><span style="text-align:left; color: #FFF;">Pengembangan Usaha dan Kerja Sama</span></td>
															</tr>
															<tr>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
													      </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#feffe2" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">&nbsp;</td>
															</tr>
														</tbody>
													</table>

					<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
            <span class="kt-badge kt-badge--unified-success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Hadir" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Absen" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--primary kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Dinas" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Lembur" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--warning kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Terlambat" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--unified-danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Izin" data-original-title="" title=""></span>
						<span class="kt-badge kt-badge--unified-brand kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Libur" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"></span>
          </div>

												</div>
											</div>
                    </div>

                  </form>
                  </div>
						</div>

									<!--end: Datatable -->
									<!--begin::Modal 1-->
									<div class="modal fade" id="modal_angsuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">DATA AGAMA</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" >NO</td>
    <td width="12%" bgcolor="#f7fcff">No. Kwitansi</td>
    <td width="8%" bgcolor="#f7fcff">Tgl Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Nominal Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Sisa Kasbon</td>
    <td width="3%" bgcolor="#f7fcff">Kasir</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center">8/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Agustus 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">200.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center">7/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juli 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">300.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center">6/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juni 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">400.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center">5/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Mei 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">500.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">4/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 April 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">600.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">3/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Maret 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">700.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">2/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Februari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">800.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">1/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Januari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">900.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>

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
														<li class="kt-pagination__link--active">
															<a href="#">1</a>
														</li>
														<li>
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
												<div class="tab-pane" id="kt_tabs_7_2" role="tabpanel">
													It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
												</div>
												<div class="tab-pane" id="kt_tabs_7_3" role="tabpanel">
													<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">

										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>No. Tanda Terima Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-6">
														<label>Waktu Penyerahan Berkas :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pengirim Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Penerima Berkas :</label>
														<input type="text" class="form-control form-control-sm">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" >

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Tanda Tangan Pengirim Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>

												<div class="col-lg-6">
														<label>Tanda Tangan Penerima Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>


												</div>
												</div>
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
							<!--begin::Modal 2-->
									<div class="modal fade" id="modal_view_absen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list-1"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">LAPORAN ABSEN PEGAWAI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
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
											</div>&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
  <tr>
    <td width="10%" rowspan="2"><a href="#" class="kt-media">
																<img src="../assets/img/users/100_15.jpg" alt="image" style="max-width:100px !important;height:auto">
															</a></td>
    <td width="15%">Nama Pegawai</td>
    <td width="1%">:</td>
    <td width="30%">Yulianti Tomu, SE</td>
    <td width="2%" rowspan="2">&nbsp;</td>
    <td width="18%">Kantor</td>
    <td width="1%">:</td>
    <td width="37%">Pusat</td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>Direktur Pengembangan Usaha dan Kerjasama</td>
    <td>Periode Laporan</td>
    <td>:</td>
    <td>1 Oktober 2023 s/d 31 Oktober 2023</td>
  </tr>
</table>
<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
  <tr bgcolor="#f7fcff">
    <td width="1%" align="center" rowspan="2"><strong><span class="kt--font-boldest">NO</span></strong></td>
    <td width="5%" rowspan="2" align="center"><strong>HARI</strong></td>
    <td width="13%" align="center" rowspan="2"><strong>TANGGAL</strong></td>
    <td width="5%" align="center" rowspan="2"><strong>MASUK</strong></td>
    <td width="5%" align="center" rowspan="2"><strong>PULANG</strong></td>
    <td width="5%" align="center" rowspan="2"><strong>MASUK LEMBUR</strong></td>
    <td width="5%" align="center" rowspan="2"><strong>PULANG LEMBUR</strong></td>
    <td width="5%" align="center" colspan="2"><strong>JUMLAH JAM KERJA</strong></td>
    <td width="5%" align="center" rowspan="2"><strong>KETERANGAN</strong></td>
    <td width="5%" align="center" rowspan="2"><strong>Device</strong></td>
  </tr>
  <tr>
    <td bgcolor="#f7fcff"><strong>NORMAL</strong></td>
    <td bgcolor="#f7fcff"><strong>LEMBUR</strong></td>
  </tr>
  <tr>
    <td>1</td>
    <td>Minggu</td>
    <td>01-10-2023</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Absen</span></td>
    <td align="center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Phone" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Devices / iPhone-X</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Devices-/-iPhone-X" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg></td>
  </tr>
  <tr>
    <td>2</td>
    <td >Senin</td>
    <td>02-10-2023</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
    <td align="center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Kantor" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Home / Building</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Home-/-Building" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#ff0000"></path>
        <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
        <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"></path>
    </g>
</svg></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Selasa</td>
    <td>03-10-2023</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center">00:00:00</td>
    <td align="center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Lembur</span></td>
    <td align="center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Kantor" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Home / Building</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Home-/-Building" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#ff0000"></path>
        <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
        <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"></path>
    </g>
</svg></td>
  </tr>
</table>
												
												</div>

												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">
<button type="reset" class="btn btn-secondary btn-sm">Batal</button>
													<button type="reset" class="btn btn-success btn-sm">Simpan</button>
												</div>
											</div>




									</div>
								</div>
								</div>
								</div>
								</div>
								</div>
							<!--End::Modal 2-->
                    
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
