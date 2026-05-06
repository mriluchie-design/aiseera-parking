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
											Detail Data Rekap Absen Pegawai
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
						                          <label>Divisi :</label>
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
						                          <label>Status Pegawai :</label>
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
						                              <option value="3">Nama Cabang A</option>
						                              <option value="3">Nama Cabang B</option>

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
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:#ef5325 !important; color:#fff !important">2023</a>
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
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="7%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="15%" rowspan="2" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Keterangan</th>
											  <th width="1%" bgcolor="#f7fcff">1</th>
											  <th width="1%" bgcolor="#f7fcff">2</th>
											  
											  
											  <th width="1%" bgcolor="#f7fcff">3</th>
											  <th width="1%" bgcolor="#f7fcff">4</th>
											  <th width="1%" bgcolor="#f7fcff">5</th>
											  <th width="1%" bgcolor="#f7fcff">6</th>
											  <th width="1%" bgcolor="#fd397a" style="color:#fff">7</th>
											  <th width="1%" bgcolor="#f7fcff">8</th>
											  <th width="1%" bgcolor="#f7fcff">9</th>
											  <th width="1%" bgcolor="#f7fcff">10</th>
											  <th width="1%" bgcolor="#f7fcff">11</th>
											  <th width="1%" bgcolor="#f7fcff">12</th>
											  <th width="1%" bgcolor="#f7fcff">13</th>
											  <th width="1%" bgcolor="#fd397a" style="color:#fff">14</th>
											  <th width="1%" bgcolor="#f7fcff">15</th>
											  <th width="1%" bgcolor="#f7fcff">16</th>
											  <th width="1%" bgcolor="#f7fcff">17</th>
											  <th width="1%" bgcolor="#f7fcff">18</th>
											  <th width="1%" bgcolor="#f7fcff">19</th>
											  <th width="1%" bgcolor="#f7fcff">20</th>
											  <th width="1%" bgcolor="#fd397a" style="color:#fff">21</th>
											  <th width="1%" bgcolor="#f7fcff">22</th>
											  <th width="1%" bgcolor="#f7fcff">23</th>
											  <th width="1%" bgcolor="#f7fcff">24</th>
											  <th width="1%" bgcolor="#f7fcff">25</th>
											  <th width="1%" bgcolor="#f7fcff">26</th>
											  <th width="1%" bgcolor="#f7fcff">27</th>
											  <th width="1%" bgcolor="#fd397a" style="color:#fff">28</th>
											  <th width="1%" bgcolor="#f7fcff">29</th>
											  <th width="1%" bgcolor="#f7fcff">30</th>
											  <th width="1%" bgcolor="#f7fcff">31</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Hari Kerja</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Hari Lembur</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Absen</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Ijin</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Cuti</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Dinas</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kerja Hari Libur</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Jam Kerja</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Jam Lembur</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Jumlah Terlambat</th>
							              </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">Senin</th>
											  <th width="1%" bgcolor="#f7fcff">Selasa</th>
											  <th width="1%" bgcolor="#f7fcff">Rabu</th>
											  <th width="1%" bgcolor="#f7fcff">Kamis</th>
											  <th width="1%" bgcolor="#f7fcff">Jumat</th>
											  <th width="1%" bgcolor="#f7fcff">Sabtu</th>
											  <th width="1%" bgcolor="#fd397a" style="color:#fff">Minggu</th>
											  <th width="1%" bgcolor="#f7fcff">Senin</th>
											  <th width="1%" bgcolor="#f7fcff">Selasa</th>
											  <th width="1%" bgcolor="#f7fcff">Rabu</th>
											  <th width="1%" bgcolor="#f7fcff">Kamis</th>
											  <th width="1%" bgcolor="#f7fcff">Jumat</th>
											  <th width="1%" bgcolor="#f7fcff">Sabtu</th>
											  <th width="1%" bgcolor="#fd397a" style="color:#fff">Minggu</th>
											  <th width="1%" bgcolor="#f7fcff">Senin</th>
											  <th width="1%" bgcolor="#f7fcff">Selasa</th>
											  <th width="1%" bgcolor="#f7fcff">Rabu</th>
											  <th width="1%" bgcolor="#f7fcff">Kamis</th>
											  <th width="1%" bgcolor="#f7fcff">Jumat</th>
											  <th width="1%" bgcolor="#f7fcff">Sabtu</th>
											  <th width="1%" bgcolor="#fd397a" style="color:#fff">Minggu</th>
											  <th width="1%" bgcolor="#f7fcff">Senin</th>
											  <th width="1%" bgcolor="#f7fcff">Selasa</th>
											  <th width="1%" bgcolor="#f7fcff">Rabu</th>
											  <th width="1%" bgcolor="#f7fcff">Kamis</th>
											  <th width="1%" bgcolor="#f7fcff">Jumat</th>
											  <th width="1%" bgcolor="#f7fcff">Sabtu</th>
											  <th width="1%" bgcolor="#fd397a" style="color:#fff">Minggu</th>
											  <th width="1%" bgcolor="#f7fcff">Senin</th>
											  <th width="1%" bgcolor="#f7fcff">Selasa</th>
											  <th width="1%" bgcolor="#f7fcff">Rabu</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
											  <td colspan="46" id="kt_table_5" bgcolor="#e6f5fc">Direksi</td>
										  </tr>
											<tr>
												<td rowspan="6" id="kt_table_1">1</td>
												<td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000001<hr>Direksi<hr>Direksi<hr>Direktur Utama" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></td>
												

												<td rowspan="6" nowrap style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td rowspan="6" nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:left" nowrap>Masuk</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">09:00</td>
												<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">10:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">27</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">2</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">172:00</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
																	<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
									      </tr>
											<tr>
											  <td style="text-align:left" nowrap>Pulang</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2">17:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">17:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										  </tr>
											<tr>
											  <td bgcolor="#F3F8FF" style="text-align:left" nowrap>Jam Kerja</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2">08:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										  </tr>
											<tr>
											  <td style="text-align:left" nowrap>Masuk Lembur</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:31</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td style="text-align:left" nowrap>Pulang Lembur</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">22:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td bgcolor="#F3F8FF" style="text-align:left" nowrap>Total Lembur</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td bgcolor="#fafaec" colspan="4" id="kt_table_11">&nbsp;</td>
											  <td bgcolor="#fafaec" style="text-align:left" nowrap>Status Kehadiran</td>
											  <td bgcolor="#fafaec" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-light kt-badge--sm kt-badge--inline">Lembur</span></td>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">Hadir</span></th>
											  <th bgcolor="#fafaec">Cepat Pulang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-success kt-badge--sm kt-badge--inline">Cuti</span></th>
											  <th bgcolor="#fafaec">Kerja Hari Libur</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--primary kt-badge--sm kt-badge--inline">Dinas</span></th>
											  <th bgcolor="#fafaec">Izin Telat Datang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline">Terlambat</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--inline">Izin</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <td bgcolor="#fafaec" colspan="10" align="center" valign="middle" style="text-align:center">&nbsp;</td>
										  </tr>
											<tr>
												<td rowspan="6" id="kt_table_1">2</td>
												<td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000002<hr>Direksi<hr>Direksi<hr>Direktur Umum" data-html="true">
														<img src="../assets/img/users/100_9.jpg" alt="image">
													</a></td>

												<td rowspan="6" nowrap style="text-align:left">Oklan Zulkifli, SE</td>
												<td rowspan="6" nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td nowrap="nowrap" style="text-align:left">Masuk</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">09:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">10:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">27</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">2</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">172:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
										  </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pulang</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">17:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										  </tr>
											<tr>
											  <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Jam Kerja</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										  </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Masuk Lembur</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:31</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pulang Lembur</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">22:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Total Lembur</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td bgcolor="#fafaec" colspan="4" id="kt_table_11">&nbsp;</td>
											  <td bgcolor="#fafaec" style="text-align:left" nowrap>Status Kehadiran</td>
											  <td bgcolor="#fafaec" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-light kt-badge--sm kt-badge--inline">Lembur</span></td>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">Hadir</span></th>
											  <th bgcolor="#fafaec">Cepat Pulang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-success kt-badge--sm kt-badge--inline">Cuti</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--primary kt-badge--sm kt-badge--inline">Dinas</span></th>
											  <th bgcolor="#fafaec">Izin Telat Datang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline">Terlambat</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--inline">Izin</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <td bgcolor="#fafaec" colspan="10" align="center" valign="middle" style="text-align:center">&nbsp;</td>
										  </tr>
											<tr>
											  <td colspan="46" id="kt_table_3" bgcolor="#e6f5fc">Umum</td>
										  </tr>
											<tr>
												<td rowspan="6" id="kt_table_1">3</td>
												<td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000003<hr>Umum<hr>Umum<hr>Staff Administrasi Kepegawaian" data-html="true">
														<img src="../assets/img/users/100_8.jpg" alt="image">
													</a></td>

												<td rowspan="6" nowrap style="text-align:left">Deddy Rafsanjani, S.Sos</td>
												<td rowspan="6" nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td nowrap="nowrap" style="text-align:left">Masuk</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">09:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">10:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">27</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">2</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">172:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
										  </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pulang</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">17:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										  </tr>
											<tr>
											  <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Jam Kerja</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										  </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Masuk Lembur</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">16:31</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pulang Lembur</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">22:00</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Total Lembur</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
											  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										  </tr>
											<tr>
											  <td bgcolor="#fafaec" colspan="4" id="kt_table_11">&nbsp;</td>
											  <td bgcolor="#fafaec" style="text-align:left" nowrap>Status Kehadiran</td>
											  <td bgcolor="#fafaec" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-light kt-badge--sm kt-badge--inline">Lembur</span></td>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">Hadir</span></th>
											  <th bgcolor="#fafaec">Cepat Pulang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-success kt-badge--sm kt-badge--inline">Cuti</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--primary kt-badge--sm kt-badge--inline">Dinas</span></th>
											  <th bgcolor="#fafaec">Izin Telat Datang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline">Terlambat</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--inline">Izin</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <td bgcolor="#fafaec" colspan="10" align="center" valign="middle" style="text-align:center">&nbsp;</td>
										  </tr>
										  <tr>
												<td rowspan="6" id="kt_table_1">4</td>
												<td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000004" data-html="true">
														<img src="../assets/img/users/100_6.jpg" alt="image">
													</a></td>

												<td rowspan="6" nowrap style="text-align:left">Akmal Baharuddin</td>
												<td rowspan="6" nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</button></td>
												<td nowrap="nowrap" style="text-align:left">Masuk</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">09:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">10:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">27</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">2</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">172:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
										  </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:left">Pulang</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">17:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
									      </tr>
										  <tr>
										    <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Jam Kerja</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:left">Masuk Lembur</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">16:31</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
									      </tr>
										  <tr>
										    <td nowrap="nowrap" style="text-align:left">Pulang Lembur</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">22:00</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
									      </tr>
										  <tr>
										    <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Total Lembur</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
										    <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
									      </tr>
										 <tr>
											  <td bgcolor="#fafaec" colspan="4" id="kt_table_11">&nbsp;</td>
											  <td bgcolor="#fafaec" style="text-align:left" nowrap>Status Kehadiran</td>
											  <td bgcolor="#fafaec" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-light kt-badge--sm kt-badge--inline">Lembur</span></td>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">Hadir</span></th>
											  <th bgcolor="#fafaec">Cepat Pulang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-success kt-badge--sm kt-badge--inline">Cuti</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--primary kt-badge--sm kt-badge--inline">Dinas</span></th>
											  <th bgcolor="#fafaec">Izin Telat Datang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline">Terlambat</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--inline">Izin</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <td bgcolor="#fafaec" colspan="10" align="center" valign="middle" style="text-align:center">&nbsp;</td>
										  </tr>

                                          <tr>
                                            <td colspan="46" id="kt_table_6" bgcolor="#e6f5fc">Keuangan</td>
                                          </tr>
                                          <tr>
												<td rowspan="6" id="kt_table_1">5</td>
												<td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000005" data-html="true">
														<img src="../assets/img/users/100_2.jpg" alt="image">
													</a></td>

												<td rowspan="6" nowrap style="text-align:left">Nursiah, S.Kom</td>
												<td rowspan="6" nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td nowrap="nowrap" style="text-align:left">Masuk</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">09:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">10:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">27</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">2</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">172:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
										  </tr>
                                          <tr>
                                            <td nowrap="nowrap" style="text-align:left">Pulang</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">17:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Jam Kerja</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
                                          </tr>
                                          <tr>
                                            <td nowrap="nowrap" style="text-align:left">Masuk Lembur</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">16:31</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                          </tr>
                                          <tr>
                                            <td nowrap="nowrap" style="text-align:left">Pulang Lembur</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">22:00</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
                                          </tr>
                                          <tr>
                                            <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Total Lembur</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                            <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
                                          </tr>
                                          <tr>
											  <td bgcolor="#fafaec" colspan="4" id="kt_table_11">&nbsp;</td>
											  <td bgcolor="#fafaec" style="text-align:left" nowrap>Status Kehadiran</td>
											  <td bgcolor="#fafaec" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-light kt-badge--sm kt-badge--inline">Lembur</span></td>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">Hadir</span></th>
											  <th bgcolor="#fafaec">Cepat Pulang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-success kt-badge--sm kt-badge--inline">Cuti</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--primary kt-badge--sm kt-badge--inline">Dinas</span></th>
											  <th bgcolor="#fafaec">Izin Telat Datang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline">Terlambat</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--inline">Izin</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <td bgcolor="#fafaec" colspan="10" align="center" valign="middle" style="text-align:center">&nbsp;</td>
										  </tr>
<tr>
												<td rowspan="6" id="kt_table_1">6</td>
												<td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000006" data-html="true">
														<img src="../assets/img/users/300_21.jpg" alt="image">
													</a></td>

												<td rowspan="6" nowrap style="text-align:left">Muhammad Ramadhan Lerrick, ST</td>
												<td rowspan="6" nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang B">Cabang</button></td>
												<td nowrap="nowrap" style="text-align:left">Masuk</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">-</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" style="text-align:center">09:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">10:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" align="center" valign="middle" style="text-align:center">08:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">27</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">2</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">172:00</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
												<td width="1%" rowspan="6" align="center" valign="middle" style="text-align:center">05:30</td>
										  </tr>
<tr>
  <td nowrap="nowrap" style="text-align:left">Pulang</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">17:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">14:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:00</td>
  </tr>
<tr>
  <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Jam Kerja</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00</td>
  </tr>
<tr>
  <td nowrap="nowrap" style="text-align:left">Masuk Lembur</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">16:31</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  </tr>
<tr>
  <td nowrap="nowrap" style="text-align:left">Pulang Lembur</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">22:00</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" style="text-align:center">-</td>
  </tr>
<tr>
  <td bgcolor="#F3F8FF" nowrap="nowrap" style="text-align:left">Total Lembur</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td align="center" valign="middle" bgcolor="#ebedf2" style="text-align:center"></td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  <td width="1%" align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
  </tr>
<tr>
											  <td bgcolor="#fafaec" colspan="4" id="kt_table_11">&nbsp;</td>
											  <td bgcolor="#fafaec" style="text-align:left" nowrap>Status Kehadiran</td>
											  <td bgcolor="#fafaec" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-light kt-badge--sm kt-badge--inline">Lembur</span></td>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">Alpa</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">Hadir</span></th>
											  <th bgcolor="#fafaec">Cepat Pulang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-success kt-badge--sm kt-badge--inline">Cuti</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--primary kt-badge--sm kt-badge--inline">Dinas</span></th>
											  <th bgcolor="#fafaec">Izin Telat Datang</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline">Terlambat</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--inline">Izin</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec">&nbsp;</th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <th bgcolor="#fafaec"><span class="kt-badge kt-badge--success kt-badge--sm kt-badge--inline">Hadir</span></th>
											  <td bgcolor="#fafaec" colspan="10" align="center" valign="middle" style="text-align:center">&nbsp;</td>
										  </tr>

										  
										</tbody>
									</table>

					<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
            <span class="kt-badge kt-badge--unified-success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Hadir" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Absen" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--primary kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Dinas" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--unified-light kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Lembur" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--warning kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Terlambat" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--unified-danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Izin" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--unified-brand kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Catatan" data-original-title="" title=""></span>
						<span class="kt-badge kt-badge--unified-brand kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Libur" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"></span>
          </div>

												</div>
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
