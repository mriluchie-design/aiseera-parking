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
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Pegawai</th>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Divisi</th>
																<th width="2%" bgcolor="#f7fcff" rowspan="2">Status Pegawai</th>
																<th width="25%" bgcolor="#f7fcff" rowspan="2">Kantor</th>
																<th width="35%" bgcolor="#f7fcff" rowspan="2">Keterangan</th>
																<th width="1%" bgcolor="#f7fcff">01</th>
																<th width="1%" bgcolor="#f7fcff">02</th>
																<th width="1%" bgcolor="#f7fcff">03</th>
																<th width="1%" bgcolor="#f7fcff">04</th>
																<th width="1%" bgcolor="#f7fcff">05</th>
																<th width="1%" bgcolor="#f7fcff">06</th>
																<th width="1%" bgcolor="#F5F5F5">07</th>
																<th width="1%" bgcolor="#f7fcff">08</th>
																<th width="1%" bgcolor="#f7fcff">09</th>
																<th width="1%" bgcolor="#f7fcff">10</th>
																<th width="1%" bgcolor="#f7fcff">11</th>
																<th width="1%" bgcolor="#f7fcff">12</th>
																<th width="1%" bgcolor="#f7fcff">13</th>
																<th width="1%" bgcolor="#F5F5F5">14</th>
																<th width="1%" bgcolor="#f7fcff">15</th>
																<th width="1%" bgcolor="#f7fcff">16</th>
																<th width="1%" bgcolor="#f7fcff">17</th>
																<th width="1%" bgcolor="#f7fcff">18</th>
																<th width="1%" bgcolor="#f7fcff">19</th>
																<th width="1%" bgcolor="#f7fcff">20</th>
																<th width="1%" bgcolor="#F5F5F5">21</th>
																<th width="1%" bgcolor="#f7fcff">22</th>
																<th width="1%" bgcolor="#f7fcff">23</th>
																<th width="1%" bgcolor="#f7fcff">24</th>
																<th width="1%" bgcolor="#f7fcff">25</th>
																<th width="1%" bgcolor="#f7fcff">26</th>
																<th width="1%" bgcolor="#f7fcff">27</th>
																<th width="1%" bgcolor="#F5F5F5">28</th>
																<th width="1%" bgcolor="#f7fcff">29</th>
																<th width="1%" bgcolor="#f7fcff">30</th>
																<th width="1%" bgcolor="#f7fcff">31</th>
																<th colspan="8" bgcolor="#f7fcff" style="border-bottom:1px solid #ccc;">TOTAL DATA</th>
															</tr>
															<tr>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#F5F5F5" style="color: #74788d !important" class="hari">MGU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#F5F5F5" style="color: #74788d !important" class="hari">MGU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#F5F5F5" style="color: #74788d !important" class="hari">MGU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#F5F5F5" style="color: #74788d !important" class="hari">MGU</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" class="hari" style="border-top:1px solid #ccc"><strong>Hari Kerja</strong></td>
																<td width="1%" bgcolor="#f7fcff" class="hari"><strong>Hari Lembur</strong></td>
																<td width="1%" bgcolor="#f7fcff" class="hari"><strong>Absen</strong></td>
																<td width="1%" bgcolor="#f7fcff" class="hari"><strong>Ijin</strong></td>
																<td width="1%" bgcolor="#f7fcff" class="hari"><strong>Cuti</strong></td>
																<td width="1%" bgcolor="#f7fcff" class="hari"><strong>Dinas</strong></td>
																<td width="1%" bgcolor="#f7fcff" class="hari"><strong>Jam Kerja</strong></td>
																<td width="1%" bgcolor="#f7fcff" class="hari"><strong>Lembur</strong></td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td colspan="44" bgcolor="#008fd1"><span style="text-align:left; color: #FFF;">Direksi</span></td>
															</tr>
															<tr>
																<td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Muhammad Nasrullah,S.Kom<hr>Direktur Utama" data-html="true">
																		<img src="../assets/media/users/100_15.jpg" alt="image">
																	</a></td>
																<td rowspan="6" align="center" valign="middle" style="text-align:center">Muhammad Nasrullah, S.Kom</td>
																<td rowspan="6" align="center" valign="middle" style="text-align:center"><span class="btn btn-label-success btn-sm">Tetap</span></td>
																<td rowspan="6" align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
																<td align="center" valign="middle" style="text-align:center">Masuk</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">-</td>
																	<td align="center" valign="middle" style="text-align:center">-</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">09:00:00</td>
																	<td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">10:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td align="center" valign="middle" style="text-align:center">08:00:00</td>
																	<td rowspan="6" align="center" valign="middle" style="text-align:center">27</td>
																	<td rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td rowspan="6" align="center" valign="middle" style="text-align:center">2</td>
																	<td rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
																	<td rowspan="6" align="center" valign="middle" style="text-align:center">172:00:00</td>
																	<td rowspan="6" align="center" valign="middle" style="text-align:center">05:30:00</td>
															</tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Pulang</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">14:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">17:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">14:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">Jlh Jam Kerja</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Masuk Lembur</td>
															  <td align="center" valign="middle" style="text-align:center">16:31:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Pulang Lembur</td>
															  <td align="center" valign="middle" style="text-align:center">22:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">Total Lembur</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td colspan="4" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Status</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Lembur</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Absen</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Cuti</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Ijin<br />Cepat Pulang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">Dinas</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Terlambat 30 Menit</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Kerja Hari Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Ijin<br />Telat Datang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Cepat Pulang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td colspan="8" align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">&nbsp;</td>
														  </tr>
															<tr>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rizal Asjadad&lt;hr&gt;000 000 002&lt;hr&gt;Direktur Umum" data-html="true"> <img src="../assets/media/users/dirum.jpg" alt="image" /> </a></td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">Umum dan Kepegawaian</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">Tetap</span></td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">Masuk</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">09:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">10:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">27</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">2</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">1</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">172:00:00</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">05:30:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Pulang</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">14:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">17:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">14:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">Jlh Jam Kerja</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Masuk Lembur</td>
															  <td align="center" valign="middle" style="text-align:center">16:31:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Pulang Lembur</td>
															  <td align="center" valign="middle" style="text-align:center">22:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">Total Lembur</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td colspan="4" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Status</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Lembur</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Absen</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Cuti</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Ijin<br />
															    Cepat Pulang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">Dinas</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Terlambat 30 Menit</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Ijin<br />
															    Telat Datang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Cepat Pulang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td colspan="8" align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">&nbsp;</td>
														  </tr>
															<tr>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Christofher Rio Aviary&lt;hr&gt;000 000 003&lt;hr&gt;Direktur Operasional" data-html="true"> <img src="../assets/media/users/dirops.jpg" alt="image" /> </a></td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">Keuangan</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">Tetap</span></td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">Masuk</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">09:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">10:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">25</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">25</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">08:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Pulang</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">14:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">17:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">14:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">Jlh Jam Kerja</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>

															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Masuk Lembur</td>
															  <td align="center" valign="middle" style="text-align:center">16:31:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Pulang Lembur</td>
															  <td align="center" valign="middle" style="text-align:center">22:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>

															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">Total Lembur</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td colspan="4" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Status</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Lembur</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Absen</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Cuti</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Ijin<br />
															    Cepat Pulang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">Dinas</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Terlambat 30 Menit</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Kerja Hari Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Ijin<br />
															    Telat Datang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Cepat Pulang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td colspan="8" align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">&nbsp;</td>
														  </tr>
															<tr>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Mu’amar Nor Amin&lt;hr&gt;000 000 004&lt;hr&gt;Direktur Keuangan dan Asset" data-html="true"> <img src="../assets/media/users/dirkeu.jpg" alt="image" /> </a></td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">Asset</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center"><span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">Tetap</span></td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">Masuk</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">09:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">10:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">25</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">25</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">0</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">08:00:00</td>
															  <td rowspan="6" align="center" valign="middle" style="text-align:center">08:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Pulang</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">14:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">17:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">14:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">16:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">Jlh Jam Kerja</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">06:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">07:00:00</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Masuk Lembur</td>
															  <td align="center" valign="middle" style="text-align:center">16:31:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" style="text-align:center">Pulang Lembur</td>
															  <td align="center" valign="middle" style="text-align:center">22:00:00</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
															  <td align="center" valign="middle" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">Total Lembur</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">05:30:00</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F5F5F5" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
															  <td align="center" valign="middle" bgcolor="#F3F8FF" style="text-align:center">-</td>
														  </tr>
															<tr>
															  <td colspan="4" align="center" valign="middle" style="text-align:center">&nbsp;</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Status</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Lembur</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Absen</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Cuti</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Ijin<br />
															    Cepat Pulang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">Dinas</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Terlambat 30 Menit</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Kerja Hari Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Ijin<br />
															    Telat Datang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Cepat Pulang</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">Libur</td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td align="center" valign="middle" bgcolor="#fafaec" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Hadir</span></td>
															  <td colspan="8" align="center" valign="middle" bgcolor="#fafaec" style="text-align:center">&nbsp;</td>
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
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
