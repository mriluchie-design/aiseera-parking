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
											Data Rekap Target Kolektor
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
						                          <label>Nama Kolektor :</label>
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
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="background:#5d78ff !important; color:#fff !important">2023</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" data-toggle="tab" href="#">2022</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2021</a>
														<a class="dropdown-item" data-toggle="tab" href="#">2020</a>
													</div>
												</li>
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_3_1" >Januari</a>
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
												<div class="tab-pane active" id="kt_tabs_3_1" role="tabpanel">
													<table class="table absen table-responsive table-striped- table-bordered table-hover table-checkable">
														<thead style="text-align:center">
															<tr>
																<th width="5%" bgcolor="#f7fcff" rowspan="2">Foto</th>
																<th width="12%" bgcolor="#f7fcff" rowspan="2">Nama Kolektor</th>
																<th width="1%" bgcolor="#f7fcff">01</th>
																<th width="1%" bgcolor="#f7fcff">02</th>
																<th width="1%" bgcolor="#f7fcff">03</th>
																<th width="1%" bgcolor="#f7fcff">04</th>
																<th width="1%" bgcolor="#f7fcff">05</th>
																<th width="1%" bgcolor="#f7fcff">06</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">07</th>
																<th width="1%" bgcolor="#f7fcff">08</th>
																<th width="1%" bgcolor="#f7fcff">09</th>
																<th width="1%" bgcolor="#f7fcff">10</th>
																<th width="1%" bgcolor="#f7fcff">11</th>
																<th width="1%" bgcolor="#f7fcff">12</th>
																<th width="1%" bgcolor="#f7fcff">13</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">14</th>
																<th width="1%" bgcolor="#f7fcff">15</th>
																<th width="1%" bgcolor="#f7fcff">16</th>
																<th width="1%" bgcolor="#f7fcff">17</th>
																<th width="1%" bgcolor="#f7fcff">18</th>
																<th width="1%" bgcolor="#f7fcff">19</th>
																<th width="1%" bgcolor="#f7fcff">20</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">21</th>
																<th width="1%" bgcolor="#f7fcff">22</th>
																<th width="1%" bgcolor="#f7fcff">23</th>
																<th width="1%" bgcolor="#f7fcff">24</th>
																<th width="1%" bgcolor="#f7fcff">25</th>
																<th width="1%" bgcolor="#f7fcff">26</th>
																<th width="1%" bgcolor="#f7fcff">27</th>
																<th width="1%" bgcolor="#ff0000" style="color: #fff !important">28</th>
																<th width="1%" bgcolor="#f7fcff">29</th>
																<th width="1%" bgcolor="#f7fcff">30</th>
																<th width="1%" bgcolor="#f7fcff">31</th>
															</tr>
															<tr>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">KAM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">JUM</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SAB</td>
																<td width="1%" bgcolor="#ff0000" style="color: #fff !important" class="hari">MIN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEN</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">SEL</td>
																<td width="1%" bgcolor="#f7fcff" style="color: #74788d !important" class="hari">RAB</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td colspan="33" bgcolor="#feffe2">Kolektor Tepi Jalan Umum</td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true">
																		<img src="../assets/media/users/100_1.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">UMAR MALIK, SE</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 002" data-html="true">
																		<img src="../assets/media/users/100_7.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">LEONY HESTI KILALA</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 003" data-html="true">
																		<img src="../assets/media/users/100_5.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">MUSLIMIN</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_3.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">HAERUL</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_8.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">WIRA YUDHA SAKTI. D</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_9.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">RUDI RIVAI</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--warning kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp. 15.000,- <hr> Selisih : (-) Rp. 10.000,-<hr> Setoran Kurang" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
															</tr>
															<tr>
																<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 004" data-html="true">
																		<img src="../assets/media/users/100_13.jpg" alt="image">
																	</a></td>
																<td width="1%" align="center" valign="middle" style="text-align:left">YUNUS TULAK, S.IP	</td>
																<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--danger kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Tidak Ada Setoran" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--info kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp. 35.000,- <hr> Selisih : (+) Rp. 10.000,-<hr> Setoran Lebih" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--unified-brand kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Titik Parkir Tutup" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
																	<td align="center" valign="middle" style="text-align:center"><button type="button" class="btn kt-badge kt-badge--success kt-badge--dot kt-badge--xl" data-toggle="kt-tooltip" data-placement="right" data-skin="brand" title="" data-original-title="Target : Rp. 25.000,- <hr> Setoran : Rp.25.000,- <hr> Selisih : -" data-html="true"></button></td>
															</tr>
															
															
															
														</tbody>
													</table>

					<label> Keterangan : </label>
					<div class="kt-section__content kt-section__content--solid mt-3">
            <span class="kt-badge kt-badge--unified-brand kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Titik Parkir Tutup" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--danger kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Tidak Ada Setoran" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--success kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Lunas" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--warning kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Setoran Kurang" data-original-title="" title=""></span>
            <span class="kt-badge kt-badge--info kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Setoran Lebih" data-original-title="" title=""></span>
						<span class="kt-badge kt-badge--unified-brand kt-badge--xlkt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Libur" data-original-title="" title="" style="background:rgb(235, 237, 242) !important"></span>
          </div>

												</div>
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



<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
