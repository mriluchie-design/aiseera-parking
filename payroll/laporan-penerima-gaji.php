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
											Data Penerima Penghasilan
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
                            <div class="col-lg-1">
                                <label class="">Tahun :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">2025</option>
                                      <option value="2">2024</option>
                                  </select>
                             
                            </div>
							<div class="col-lg-1">
                                <label class="">Bulan :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">November</option>
                                      <option value="2">Oktober</option>
                                  </select>
                             
                            </div>
							<div class="col-lg-3">
                                <label>Nama Pegawai :</label>
    	                       <div class="form-group">

					                         <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan dan Asset" class="a">
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

					 														</select>
					                       </div>
        					
                            </div>
							
                            
                            
							<div class="col-lg-1">
                                <label class="">Status Pegawai :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Tetap</option>
                                      <option value="2">Kontrak</option>
                                  </select>
                             
                            </div>
							<div class="col-lg-1">
                                <label class="">Verifikasi :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Disetujui</option>
                                      <option value="2">Pending</option>
                                  </select>
                             
                            </div>
							<div class="col-lg-2">
                                <label class="">Status Pembayaran :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Terbayar</option>
                                      <option value="2">Belum Terbayar</option>
                                  </select>
                             
                            </div>
							<div class="col-lg-1">
                                <label class="">Kantor :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pusat</option>
                                      <option value="2">Nama Cabang A</option>
                                      <option value="2">Nama Cabang B</option>
                                  </select>
                             
                            </div>
							
							
                            </div>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
							<!--begin:: Widgets/Stats-->
						
								
										

											<!--begin::Total Profit-->
											

							<!--end:: Widgets/Stats-->

							<div class="kt-portlet kt-portlet--mobile ">
								<div class="kt-portlet__body">
								
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="m_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">#</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">ID</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Tahun</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Periode</th>
												<th colspan="4" bgcolor="#f7fcff">Penerima Penghasilan</th>
												<th width="12%" rowspan="2" bgcolor="#fdfdec">Total Pendapatan</th>
												<th width="12%" rowspan="2" bgcolor="#fdfdec">Total Potongan</th>
												<th width="12%" rowspan="2" bgcolor="#fdfdec">Total Dibayarkan</th>
												<th width="1%" rowspan="2" bgcolor="#f7fcff">Verifikasi</th>
												<th width="2%" rowspan="2" bgcolor="#f7fcff">Status</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>
											</tr>
											<tr>
											  <th width="16%" colspan="2" bgcolor="#f7fcff">Detail Pegawai</th>
											  <th width="2%" bgcolor="#f7fcff">Kantor</th>
											  <th width="8%" bgcolor="#f7fcff">Status Pegawai</th>
										    </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td id="kt_table_1">001171125</td>
												<td id="kt_table_1">2025</td>
												<td id="kt_table_1">November</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="36.171.240" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.232.344" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="33.938.896" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true"> <i class="fa flaticon2-check-mark"></i> </span></td>
												<td style="text-align:center" nowrap=""><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Terbayar&lt;hr&gt;Muhammad Nasrullah, S.Kom&lt;hr&gt;Staff Keuangan&lt;hr&gt;31 Desember 2018 - 14:30 WITA"><i class="fa fa-money-bill-alt"></i></button></td>
											  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
															  <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																  <i class="flaticon-more-1"></i>
															  </a>
															  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																  <ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																	  </li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="print-slip-gaji.php" class="kt-nav__link">
																			  <i class="kt-nav__link-icon fa fa-print"></i>
																			  <span class="kt-nav__link-text">Print Slip Gaji</span>
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
												<td id="kt_table_1">002171125</td>
												<td id="kt_table_1">2025</td>
												<td id="kt_table_1">November</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Oklan Zulkifli, SE</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Kontrak</button></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="36.171.240" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.232.344" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="33.938.896" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true"> <i class="fa flaticon2-check-mark"></i> </span></td>
												<td style="text-align:center" nowrap=""><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Terbayar&lt;hr&gt;Muhammad Nasrullah, S.Kom&lt;hr&gt;Staff Keuangan&lt;hr&gt;31 Desember 2018 - 14:30 WITA"><i class="fa fa-money-bill-alt"></i></button></td>
											  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
															  <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																  <i class="flaticon-more-1"></i>
															  </a>
															  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																  <ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																	  </li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="print-slip-gaji.php" class="kt-nav__link">
																			  <i class="kt-nav__link-icon fa fa-print"></i>
																			  <span class="kt-nav__link-text">Print Slip Gaji</span>
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
												<td id="kt_table_1">003171125</td>
												<td id="kt_table_1">2025</td>
												<td id="kt_table_1">November</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_8.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Deddy Rafsanjani, S.Sos</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Honor</button></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="36.171.240" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.232.344" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="33.938.896" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true"> <i class="fa flaticon2-check-mark"></i> </span></td>
												<td style="text-align:center" nowrap=""><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Terbayar&lt;hr&gt;Muhammad Nasrullah, S.Kom&lt;hr&gt;Staff Keuangan&lt;hr&gt;31 Desember 2018 - 14:30 WITA"><i class="fa fa-money-bill-alt"></i></button></td>
											  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
															  <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																  <i class="flaticon-more-1"></i>
															  </a>
															  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																  <ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																	  </li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="print-slip-gaji.php" class="kt-nav__link">
																			  <i class="kt-nav__link-icon fa fa-print"></i>
																			  <span class="kt-nav__link-text">Print Slip Gaji</span>
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
												<td id="kt_table_1">004171125</td>
												<td id="kt_table_1">2025</td>
												<td id="kt_table_1">November</td>
												<td width="3%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/300_21.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Muhammad Ramadhan Lerrick, ST</td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang B">Cabang</span></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-warning btn-sm">Calon Pegawai</button></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="36.171.240" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.232.344" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="33.938.896" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true"> <i class="fa flaticon2-check-mark"></i> </span></td>
												<td style="text-align:center" nowrap=""><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Terbayar&lt;hr&gt;Muhammad Nasrullah, S.Kom&lt;hr&gt;Staff Keuangan&lt;hr&gt;31 Desember 2018 - 14:30 WITA"><i class="fa fa-money-bill-alt"></i></button></td>
										     <td style="text-align:center" nowrap><div class="kt-widget2__actions">
															 <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																 <i class="flaticon-more-1"></i>
															 </a>
															 <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																 <ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-gaji-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																	  </li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="print-slip-gaji.php" class="kt-nav__link">
																			  <i class="kt-nav__link-icon fa fa-print"></i>
																			  <span class="kt-nav__link-text">Print Slip Gaji</span>
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
									<div class="modal fade" id="modal_persetujuan_pending" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Kepala Bagian Kepegawaian
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Direktur Umum
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_15.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Muhammad Nasrullah, S.Kom
																</a>
																<p class="kt-widget4__text">
																	Direktur Utama
																</p>
															</div>
															<button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button>
														</div>
														
														
														
													</div>
												</div>

												
												
												

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_release" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Kepala Bagian Kepegawaian
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Direktur Umum
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_15.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Muhammad Nasrullah, S.Kom
																</a>
																<p class="kt-widget4__text">
																	Direktur Utama
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														
														
														
													</div>
												</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Assign Project Director</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												</div>

											</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->
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


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
