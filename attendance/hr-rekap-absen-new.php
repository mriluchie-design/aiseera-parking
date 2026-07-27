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
											Data Rekap Absen Pegawai
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
											<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>




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
											  <div class="col-lg-2">
						                          <label>Kantor :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Pusat</option>
						                              <option value="3">Nama Cabang A</option>
						                              <option value="3">Nama Cabang B</option>
						                              <option value="3" selected>Keseluruhan</option>

						                          </select>
						                        </div>
						                        <div class="col-lg-3">
						                          <label>Nama Pegawai :</label>
												   <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK">Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan" class="a">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional" class="a">
					 																<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Teknologi dan Riset" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<option value="12" selected>Keseluruhan</option>

					 														</select>
						                        </div>
						                        
<div class="col-lg-2">
						                          <label>Departemen :</label>
																		 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Direksi</option>
                                      <option value="4">Keuangan</option>
                                      <option value="5">Operasional</option>
                                      <option value="5">Teknologi dan Riset</option>
                                      <option value="12">Pengembangan Usaha dan Kerjasama</option>
									  <option value="HI" selected>Keseluruhan</option>
                                  </select>
						                        </div>
												<div class="col-lg-2">
						                          <label>Divisi :</label>
																		  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <optgroup label="Direksi" class="a">
									  <option value="3">Direksi</option>
									  </optgroup>
									  
									    <optgroup label="Keuangan" class="a">
                                      <option value="6">Keuangan</option>
                                      <option value="12">Asset</option>
									  </optgroup>
									  <optgroup label="Operasional" class="a">
                                      <option value="4">Umum</option>
                                      <option value="4">Kepegawaian</option>
									  </optgroup>
									   <optgroup label="Teknologi dan Riset" class="a">
                                      <option value="12" >Teknologi</option>
                                      <option value="12" >Riset</option>
									   </optgroup>
									   <optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
                                      <option value="12" >Pengembangan</option>
                                      <option value="12" >Kerjasama</option>
									  </optgroup>
                                      <option value="12" selected>Keseluruhan</option>

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
						                              <option value="3" selected>Keseluruhan</option>

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
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:#4AB3F4 !important; color:#fff !important">2026</a>
													<div class="dropdown-menu dropdown-menu-fit dropdown-menu-left">
													<ul class="kt-nav">
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2025</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2024</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon fa fa-chart-bar"></i>
																<span class="kt-nav__link-text">Keseluruhan</span>
															</a>
														</li>
														
														
													</ul>
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
													<a class="nav-link  active" data-toggle="tab" href="#kt_tabs_3_1">Juni</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Juli</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_3_1">Agustus</a>
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
												<div>
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="40%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="15%" rowspan="2" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th width="1%" bgcolor="#f7fcff">1</th>
											  <th width="1%" bgcolor="#f7fcff">2</th>
											  
											  
											  <th width="1%" bgcolor="#f7fcff">3</th>
											  <th width="1%" bgcolor="#f7fcff">4</th>
											  <th width="1%" bgcolor="#f7fcff">5</th>
											  <th width="1%" bgcolor="#f7fcff">6</th>
											  <th width="1%" bgcolor="#f7fcff">7</th>
											  <th width="1%" bgcolor="#f7fcff">8</th>
											  <th width="1%" bgcolor="#f7fcff">9</th>
											  <th width="1%" bgcolor="#f7fcff">10</th>
											  <th width="1%" bgcolor="#f7fcff">11</th>
											  <th width="1%" bgcolor="#f7fcff">12</th>
											  <th width="1%" bgcolor="#f7fcff">13</th>
											  <th width="1%" bgcolor="#f7fcff">14</th>
											  <th width="1%" bgcolor="#f7fcff">15</th>
											  <th width="1%" bgcolor="#f7fcff">16</th>
											  <th width="1%" bgcolor="#f7fcff">17</th>
											  <th width="1%" bgcolor="#f7fcff">18</th>
											  <th width="1%" bgcolor="#f7fcff">19</th>
											  <th width="1%" bgcolor="#f7fcff">20</th>
											  <th width="1%" bgcolor="#f7fcff">21</th>
											  <th width="1%" bgcolor="#f7fcff">22</th>
											  <th width="1%" bgcolor="#f7fcff">23</th>
											  <th width="1%" bgcolor="#f7fcff">24</th>
											  <th width="1%" bgcolor="#f7fcff">25</th>
											  <th width="1%" bgcolor="#f7fcff">26</th>
											  <th width="1%" bgcolor="#f7fcff">27</th>
											  <th width="1%" bgcolor="#f7fcff">28</th>
											  <th width="1%" bgcolor="#f7fcff">29</th>
											  <th width="1%" bgcolor="#f7fcff">30</th>
											  <th width="1%" bgcolor="#f7fcff">31</th>
								          </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Senin" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">R</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">K</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Jumat" data-html="true">J</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sabtu" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Minggu" data-html="true">M</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Senin" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">R</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">K</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Jumat" data-html="true">J</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sabtu" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Minggu" data-html="true">M</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Senin" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">R</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">K</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Jumat" data-html="true">J</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sabtu" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Minggu" data-html="true">M</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Senin" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">R</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Kamis" data-html="true">K</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Jumat" data-html="true">J</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Sabtu" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="kt-badge kt-badge--danger kt-badge--sm kt-badge--inline"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Minggu" data-html="true">M</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Senin" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Selasa" data-html="true">S</span></th>
											  <th width="1%" bgcolor="#f7fcff"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Rabu" data-html="true">R</span></th>
										  </tr>
										</thead>
										<tbody>
											<tr>
											  <td colspan="35" id="kt_table_5" bgcolor="#e6f5fc">Direksi</td>
										  </tr>
											<tr>
												<td id="kt_table_1">1</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000001" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></td>
												

												<td style="text-align:left" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td width="1%" nowrap style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Cuti" data-html="true"></button></td>
												<td width="1%" nowrap style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 &lt;/br&gt; Jam Pulang : 17:00:00 &lt;/br&gt; Jam Kerja : 10:00:00 &lt;hr&gt; Masuk Lembur : -&lt;/br&gt; Pulang Lembur : - &lt;/br&gt; Jumlah Lembur : -" data-html="true"></button></td>
												
												
												<td width="1%" nowrap style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Alpa" data-html="true"></button></td>
												<td width="1%" nowrap style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Dinas" data-html="true"></button></td>
												<td width="1%" nowrap style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_absen" data-html="true"><i class="fa fa-mobile-alt"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Izin" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Alpa"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Alpa"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
								          </tr>
											<tr>
												<td id="kt_table_1">2</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000002" data-html="true">
														<img src="../assets/img/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Oklan Zulkifli, SE</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Cuti" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Alpa"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Dinas" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-toggle="modal" data-target="#modal_view_absen" data-html="true"><i class="fa fa-mobile-alt"></i></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Izin" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Alpa" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-light kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Alpa"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
								          </tr>
											<tr>
											  <td colspan="35" id="kt_table_3" bgcolor="#e6f5fc">Umum</td>
										  </tr>
											<tr>
												<td id="kt_table_1">3</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000003" data-html="true">
														<img src="../assets/img/users/100_8.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Deddy Rafsanjani, S.Sos</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Cuti" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Dinas" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Izin" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
								          </tr>
										  <tr>
												<td id="kt_table_1">4</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000004" data-html="true">
														<img src="../assets/img/users/100_6.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Akmal Baharuddin</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Cuti" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Dinas" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Izin" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
										  </tr>

                                          <tr>
                                            <td colspan="35" id="kt_table_6" bgcolor="#e6f5fc">Keuangan</td>
                                          </tr>
                                          <tr>
												<td id="kt_table_1">5</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000005" data-html="true">
														<img src="../assets/img/users/100_2.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Nursiah, S.Kom</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Cuti" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--primary kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Dinas" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Izin" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
										  </tr>
<tr>
												<td id="kt_table_1">6</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000006" data-html="true">
														<img src="../assets/img/users/300_21.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Muhammad Ramadhan Lerrick, ST</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang B">Cabang</button></td>
												<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : 17:30:00 </br> Pulang Lembur : 19:00:00 </br> Jumlah Lembur : 01:30:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:27:35 </br> Jam Pulang : 15:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : 07:00:00 </br> Pulang Lembur : 07:00:00 </br> Jumlah Lembur : 03:00:00" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : - </br> Jam Pulang : 17:00:35 </br> Jam Kerja : 06:30:00 <hr> Masuk Lembur : - </br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center" bgcolor="#ebedf2"></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Jam Masuk : 08:00:00 </br> Jam Pulang : 17:00:00 </br> Jam Kerja : 10:00:00 <hr> Masuk Lembur : -</br> Pulang Lembur : - </br> Jumlah Lembur : -" data-html="true"></button></td>
										  </tr>

										  
										</tbody>
									</table>

					<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
            <span class="kt-badge kt-badge--unified-info kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--unified-success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Hadir" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Alpa" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--primary kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Dinas" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--unified-light kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Lembur" data-original-title="" title=""></span>
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
									<!--begin::Modal 2-->
									<div class="modal fade" id="modal_view_absen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand fa fa-barcode"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">DATA ABSEN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="row">
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="form-group row">
											<div class="col-lg-2">

									<!--begin::Portlet-->
										
					  
							
										
                     
																					<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<a href="#" style="text-align:center" class="kt-media"><img src="../assets/img/users/100_15.jpg" alt="image" style="max-width:100px !important;height:auto" /></a>
																										</div>
																					
																					
																					
																				
																				
						
						
                     
					  
                      </div>
<div class="col-lg-10">

									<!--begin::Portlet-->
										
						
										 <div class="kt-portlet__body">
                      <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000000000001">
                        </div>
						<div class="col-lg-3">
                          <label class="">Total Jam Kerja :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="09:00:00">
                        </div>
						<div class="col-lg-3">
                          <label class="">Total Lembur :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="09:00:00">
                        </div>
						<div class="col-lg-2">
                          <label class="">Status :</label><br>
                          <span class="kt-badge kt-badge--unified-success kt-badge--md kt-badge--inline">Hadir</span>
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Nama Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">
                        </div>
						<div class="col-lg-6">
                          <label class="">Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Teknologi & Riset">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
                      </div>
                      </div>
					  <div class="col-xl-12">
					<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample1">
						<div class="card">
							<div class="card-header" id="headingOne">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
								Data Absen  
									<small>Masuk dan Keluar</small>
								</div>
							</div>
							<div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1" style="">
								<div class="card-body">
                              <table class="table table-responsive table-striped- table-checkable" id="kt_table_1">
  
  <tr>
    <td colspan="3" align="center" bgcolor="#f7fcff">Absen Masuk</td>
    <td width="2%" rowspan="6">&nbsp;</td>
    <td colspan="3" align="center" bgcolor="#f7fcff">Absen Keluar</td>
  </tr>
  <tr>
    <td width="15%">Jam Masuk</td>
    <td width="1%">:</td>
    <td width="36%">08:00:00</td>
    <td width="14%">Jam  Pulang</td>
    <td width="1%">:</td>
    <td width="31%">16:00:00</td>
  </tr>
  <tr>
    <td>Latitude</td>
    <td>:</td>
    <td>-5.14617381204051</td>
    <td>Latitude</td>
    <td>:</td>
    <td>-5.14617381204051</td>
  </tr>
  <tr>
    <td>Longitude</td>
    <td>:</td>
    <td>119.445692748891</td>
    <td>Longitude</td>
    <td>:</td>
    <td>119.445692748891</td>
  </tr>
  <tr>
    <td>Lokasi</td>
    <td>:</td>
    <td>Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas Blok J No.6</td>
    <td>Lokasi </td>
    <td>:</td>
    <td>Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas Blok J No.6</td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>:</td>
    <td><button type="reset" class="btn btn-label-brand btn-sm"><i class="flaticon-eye"></i>Lihat Foto</button></td>
    <td>Foto</td>
    <td>:</td>
    <td><button type="reset" class="btn btn-label-brand btn-sm"><i class="flaticon-eye"></i>Lihat Foto</button></td>
  </tr>
  
  
</table>
														</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<div class="card-title d-grid collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
									Data Lembur 
									<small>Masuk dan Keluar</small>
									 </div>
							</div>
							<div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample1">
								<div class="card-body">
                              <table class="table table-responsive table-striped- table-checkable" id="kt_table_1">
  
  
  <tr>
    <td colspan="3" align="center" bgcolor="#f7fcff">Lembur Masuk</td>
    <td rowspan="6">&nbsp;</td>
    <td colspan="3" align="center" bgcolor="#f7fcff">Lembur Keluar</td>
  </tr>
  <tr>
    <td>Lembur Masuk</td>
    <td>:</td>
    <td>16:30:00</td>
    <td>Lembur Keluar</td>
    <td>:</td>
    <td>22:00:00</td>
  </tr>
  <tr>
    <td>Latitude</td>
    <td>:</td>
    <td>-5.14617381204051</td>
    <td>Latitude</td>
    <td>:</td>
    <td>-5.14617381204051</td>
  </tr>
  <tr>
    <td>Longitude</td>
    <td>:</td>
    <td>119.445692748891</td>
    <td>Longitude</td>
    <td>:</td>
    <td>119.445692748891</td>
  </tr>
  <tr>
    <td>Lokasi </td>
    <td>:</td>
    <td>Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas Blok J No.6</td>
    <td>Lokasi </td>
    <td>:</td>
    <td>Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas Blok J No.6</td>
  </tr>
  <tr>
    <td>Foto</td>
    <td>:</td>
    <td><button type="reset" class="btn btn-label-brand btn-sm"><i class="flaticon-eye"></i>Lihat Foto</button></td>
    <td>Foto</td>
    <td>:</td>
    <td><button type="reset" class="btn btn-label-brand btn-sm"><i class="flaticon-eye"></i>Lihat Foto</button></td>
  </tr>
</table>
														</div>
							</div>
						</div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					</div>
				</div>
					  <div class="col-lg-3">

									<!--begin::Portlet-->
										
					  
							
										
                     
																					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Absen Masuk</div><br><br>
										 <div class="kt-portlet__body">
                      <a href="#" style="text-align:center" class="kt-media"><img src="../assets/img/users/100_15.jpg" alt="image" style="max-width:200px !important;height:auto" /></a>
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-3">

									<!--begin::Portlet-->
										
					  
							
										
                     
																					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Absen Keluar</div><br><br>
										 <div class="kt-portlet__body">
                      <a href="#" style="text-align:center" class="kt-media"><img src="../assets/img/users/100_15.jpg" alt="image" style="max-width:200px !important;height:auto" /></a>
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-3">

									<!--begin::Portlet-->
										
					  
							
										
                     
																					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--primary">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lembur Masuk</div><br><br>
										 <div class="kt-portlet__body">
                      <a href="#" style="text-align:center" class="kt-media"><img src="../assets/img/users/100_15.jpg" alt="image" style="max-width:200px !important;height:auto" /></a>
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-3">

									<!--begin::Portlet-->
										
					  
							
										
                     
																					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--primary">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lembur Keluar</div><br><br>
										 <div class="kt-portlet__body">
                      <a href="#" style="text-align:center" class="kt-media"><img src="../assets/img/users/100_15.jpg" alt="image" style="max-width:200px !important;height:auto" /></a>
                      </div>
                      </div>
					  
                    

					  
                    

					  

			

									<!--begin::Portlet-->
										


					  
					  
												


												
										

												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
												
									




									</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
							<!--End::Modal 2-->
								

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
