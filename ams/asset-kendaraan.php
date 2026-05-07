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
											Data Asset Kendaraan
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
															<i class="kt-nav__link-icon fa fa-print"></i>
															<span class="kt-nav__link-text">Cetak KIB </span>
														</a>
													</li>
													
													
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">Qrcode Asset</span>
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

											<a href="asset-kendaraan-add.php" class="btn btn-info btn-sm">
												<i class="fa fa-plus-circle"></i> Tambah Asset</button>
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
						                          <label class="">Nama Asset :</label>
																			<div class="kt-input-icon kt-input-icon--right">
																 <input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
																 <span class="kt-input-icon__icon kt-input-icon__icon--right">
																							 <span><i class="la la-search"></i></span>
																					 </span>
																			 </div>
						                        </div>
												<div class="col-lg-2">
						                          <label class="">Kode Barang :</label>
																			<div class="kt-input-icon kt-input-icon--right">
																 <input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
																 <span class="kt-input-icon__icon kt-input-icon__icon--right">
																							 <span><i class="la la-search"></i></span>
																					 </span>
																			 </div>
						                        </div>
											<div class="col-lg-2">
						                          <label class="">Merk / Type :</label>
						                          <div class="kt-input-icon kt-input-icon--right">
																 <input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
																 <span class="kt-input-icon__icon kt-input-icon__icon--right">
																							 <span><i class="la la-search"></i></span>
																					 </span>
																			 </div>
						                        </div>
						                        
												

												
												
												<div class="col-lg-2">
						                          <label class="">PIC Pegawai :</label>
						                          <select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Direktur Utama</option>
																							<option value="HI">Direktur Umum</option>
																							<option value="HI">Direktur Operasional</option>
																						</select>
						                        </div>
												<div class="col-lg-1">
						                          <label class="">Kantor :</label>
						                          <select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Pusat</option>
																							<option value="HI">Cabang Sulawesi Barat</option>
																						</select>
						                        </div>
												<div class="col-lg-2">
						                          <label>Status Verifikasi :</label>
						                         <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Belum Diverifikasi</option>
                                      <option value="2">Sudah Diverifikasi</option>
                                      
									  </optgroup>
                                     
                                  </select>
						                        </div>
												<div class="col-lg-1">
						                          <label>Keadaan Barang :</label>
						                         <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Baik</option>
                                      <option value="2">Kurang Baik</option>
                                      <option value="2">Rusak Berat</option>
                                      
									  </optgroup>
                                     
                                  </select>
						                        </div>
						                      </div>
											  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
											  <div class="form-group row">
						  <div class="col-lg-2">
						                          <label class="">Tanggal Beli :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
												<div class="col-lg-2">
						                          <label class="">Tanggal Pakai :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
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
							<!--begin:: Widgets/Stats-->
							<div class="kt-portlet">
								<div class="kt-portlet__body  kt-portlet__body--fit">
									<div class="row row-no-padding row-col-separator-lg">
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::Total Profit-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Total Nilai Asset
														</h4>
														<span class="kt-widget24__desc">
															Kendaraan Saat ini
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														Rp. 25.000.000.000,-
													</span>
												</div>

											</div>

											<!--end::Total Profit-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Feedbacks-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Total Nilai Asset 
														</h4>
														<span class="kt-widget24__desc">
															Kendaraan Tahun Lalu
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-success">
														Rp. 25.000.000.000,-
													</span>
												</div>

											</div>

											<!--end::New Feedbacks-->
										</div>
										<div class="col-md-12 col-lg-9 col-xl-3">

											
										</div>
										
									</div>
								</div>
								</div>

							<!--end:: Widgets/Stats-->

							<div class="kt-portlet kt-portlet--mobile ">
								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">#</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">ID Asset</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Kode<br>Barang</th>
												<th width="15%" bgcolor="#f7fcff" rowspan="2">Nama Asset</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Merk / Type</th>
												<th width="1%" colspan="2" bgcolor="#f7fcff">Tanggal </th>
												<th width="1%" colspan="4" bgcolor="#f7fcff">Nomor</th>
												<th width="1%" colspan="2" rowspan="2" bgcolor="#f7fcff">Qty</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Kantor</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Dibuat<br>Oleh</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Status Verifikasi</th>
												<th width="12%" rowspan="2" bgcolor="#f7fcff">Keadaan Barang</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>
											</tr>
											<tr>
											  <th width="16%" bgcolor="#f7fcff">Perolehan</th>
											  <th width="16%" bgcolor="#f7fcff">Pakai</th>
											  <th width="1%" bgcolor="#f7fcff">Rangka</th>
											  <th width="5%" bgcolor="#f7fcff">Mesin</th>
											  <th width="10%" bgcolor="#f7fcff">Plat</th>
											  <th width="1%" bgcolor="#f7fcff">BPKB</th>
										    </tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>0001/AS/KIB/PMR/1996</td>
												<td>02.06.03.02.01</td>
												<td>Sepeda Motor</td>
												<td>YAMAHA</td>
												<td>12 Oktober 2019</td>
												<td>12 Oktober 2019</td>
												<td align="center" valign="middle" style="text-align:left">MH3SG3120HK267212</td>
												<td align="center" valign="middle" style="text-align:left">G3E4E-0379819</td>
												<td align="center" valign="middle" style="text-align:left">DD 6043 KC</td>
												<td align="center" valign="middle" style="text-align:left">20267212</td>
												<td align="center" valign="middle" style="text-align:right">10</td>
												<td align="center" valign="middle" style="text-align:center">Unit</td>
												<td align="center" valign="middle" style="text-align:center">Pusat</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Baik</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="foto-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-camera-retro"></i>
																				<span class="kt-nav__link-text">Lihat Foto Asset</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-qrcode-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-barcode"></i>
																				<span class="kt-nav__link-text">Print QRCode Asset</span>
																			</a>
																		</li>
																		<!--<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#putihkan-asset">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Putihkan Asset</span>
																			</div>
																		</li>-->

																		<li class="kt-nav__item">
																			<a href="edit-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
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
												<td>2</td>
												<td>0002/AS/KIB/PMR/1996</td>
												<td>02.06.02.01.48</td>
												<td>Sepeda Motor</td>
												<td>YAMAHA N MAX</td>
												<td>12 Oktober 2019</td>
												<td>12 Oktober 2019</td>
												<td align="center" valign="middle" style="text-align:left">MH3SG3120HK267213</td>
												<td align="center" valign="middle" style="text-align:left">G3E4E-0379820</td>
												<td align="center" valign="middle" style="text-align:left">DD 6044 KC</td>
												<td align="center" valign="middle" style="text-align:left">20267213</td>
												<td align="center" valign="middle" style="text-align:right">1</td>
												<td align="center" valign="middle" style="text-align:center">Unit</td>
												<td align="center" valign="middle" style="text-align:center">Pusat</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td class="text-center"><span class="btn btn-label-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Kurang Baik</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="foto-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-camera-retro"></i>
																				<span class="kt-nav__link-text">Lihat Foto Asset</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-qrcode-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-barcode"></i>
																				<span class="kt-nav__link-text">Print QRCode Asset</span>
																			</a>
																		</li>
																		<!--<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#putihkan-asset">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Putihkan Asset</span>
																			</div>
																		</li>-->

																		<li class="kt-nav__item">
																			<a href="edit-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
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
												<td>3</td>
												<td>0003/AS/KIB/PMR/1996</td>
												<td>02.06.02.01.61</td>
												<td>Sepeda Motor</td>
												<td>YAMAHA N MAX</td>
												<td>12 Oktober 2019</td>
												<td>12 Oktober 2019</td>
												<td align="center" valign="middle" style="text-align:left">MH3SG3120HK267214</td>
												<td align="center" valign="middle" style="text-align:left">G3E4E-0379821</td>
												<td align="center" valign="middle" style="text-align:left">DD 6045 KC</td>
												<td align="center" valign="middle" style="text-align:left">20267214</td>
												<td align="center" valign="middle" style="text-align:right">100</td>
												<td align="center" valign="middle" style="text-align:center">Unit</td>
												<td align="center" valign="middle" style="text-align:center">Pusat</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Rusak Berat</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="foto-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-camera-retro"></i>
																				<span class="kt-nav__link-text">Lihat Foto Asset</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-qrcode-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-barcode"></i>
																				<span class="kt-nav__link-text">Print QRCode Asset</span>
																			</a>
																		</li>
																		<!--<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#putihkan-asset">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Putihkan Asset</span>
																			</div>
																		</li>-->

																		<li class="kt-nav__item">
																			<a href="edit-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
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
												<td>4</td>
												<td>0004/AS/KIB/PMR/1996</td>
												<td>02.06.02.01.61</td>
												<td>Sepeda Motor</td>
												<td>YAMAHA N MAX</td>
												<td>12 Oktober 2019</td>
												<td>12 Oktober 2019</td>
												<td align="center" valign="middle" style="text-align:left">MH3SG3120HK267215</td>
												<td align="center" valign="middle" style="text-align:left">G3E4E-0379822</td>
												<td align="center" valign="middle" style="text-align:left">DD 6046 KC</td>
												<td align="center" valign="middle" style="text-align:left">20267215</td>
												<td align="center" valign="middle" style="text-align:right">100</td>
												<td align="center" valign="middle" style="text-align:center">Unit</td>
												<td align="center" valign="middle" style="text-align:center">Pusat</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true"> <i class="fa flaticon2-check-mark"></i> </span></td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Baik</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">

																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="foto-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-camera-retro"></i>
																				<span class="kt-nav__link-text">Lihat Foto Asset</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-qrcode-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-barcode"></i>
																				<span class="kt-nav__link-text">Print QRCode Asset</span>
																			</a>
																		</li>
																		<!--<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#putihkan-asset">
																				<i class="kt-nav__link-icon fa fa-tasks"></i>
																				<span class="kt-nav__link-text">Putihkan Asset</span>
																			</div>
																		</li>-->

																		<li class="kt-nav__item">
																			<a href="edit-asset-kendaraan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
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
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_ditolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
															<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Ditolak&lt;hr&gt;11 Juli 2025 - 22:33 WITA&lt;hr&gt;Minta Dipertimbangkan Kembali">
															<i class="fa flaticon2-delete"></i>
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
  <div class="modal fade" id="modal_perjalanan_dinas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><i class="flaticon2-list-1" style="color:#ef5325"></i>&nbsp;&nbsp;<span style="color:#0961ae";>DATA PEGAWAI PERJALANAN DINAS</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingOne7">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Kantor Pusat
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_2.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_4.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
												
												

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang A
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_9.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_10.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_11.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_12.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_13.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
  									</div>
  								</div>
														</div>
													</div>

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Nama Cabang B
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_16.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_17.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_18.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_19.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_20.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_21.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
  										
  										
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

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
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
