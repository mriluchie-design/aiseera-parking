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
											Data Cuti
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

											<a href="cuti-add.php" class="btn btn-label-info btn-sm">
												<i class="fa fa-calculator"></i> Buat Cuti</button>
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
							                        <div class="col-lg-4">
							                          <label>Nama Pegawai :</label>
													  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="9130037 - Maghfirah Sharifudin Andy Omar S.Psi">

							                        </div>

							                        <div class="col-lg-4">
							                          <label>Jabatan :</label>
							                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
							                        </div>
							                        <div class="col-lg-4">
							                          <label class="">Departemen :</label>
							                          <div class="form-group">
							                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Development">
							                      </div>
							                        </div>
							                      </div>
							                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							                     <div class="form-group row">
							                        <div class="col-lg-4">
							                          <label>Jenis Cuti :</label>
																				<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="2">cuti alasan penting</option>
																							<option value="3">cuti bersalin</option>
																							<option value="4">cuti besar</option>
																							<option value="5">cuti khusus</option>
																							<option value="6">cuti sakit</option>
																							<option value="7" selected="">cuti tahunan</option>
																							<option value="12">menikah</option>
																					</select>
																			</div>
							                        <div class="col-lg-4">
							                          <label class="">Tanggal :</label>
							                          <div class="input-group">
							                        <input type="text" class="form-control kt_datepicker_2_modal" readonly="" placeholder="Select date range">
							                        <div class="input-group-append">
							                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
							                        </div>
							                      </div>
							                        </div>
							                        <div class="col-lg-4">
							                          <label class="">Keterangan :</label>
							                          <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
							                        </div>
							                      </div>
							                      </div>
																		<div class="kt-portlet__foot text-center">
																			<div class="kt-form__actions">
																				<button type="reset" class="btn btn-primary">Submit</button>
																				<button type="reset" class="btn btn-secondary">Cancel</button>
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
															Total
														</h4>
														<span class="kt-widget24__desc">
															Keseluruhan Cuti
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														4
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
															Cuti Disetujui
														</h4>
														<span class="kt-widget24__desc">
															Cuti yang telah disetujui
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-success">
														1
													</span>
												</div>

											</div>

											<!--end::New Feedbacks-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Orders-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Cuti Ditolak
														</h4>
														<span class="kt-widget24__desc">
															Cuti yang telah ditolak
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														1
													</span>
												</div>

											</div>

											<!--end::New Orders-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Users-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Cuti Pending
														</h4>
														<span class="kt-widget24__desc">
															Cuti yang sedang menunggu persetujuan
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-warning">
														2
													</span>
												</div>

											</div>

											<!--end::New Users-->
										</div>
									</div>
								</div>
								</div>

							<!--end:: Widgets/Stats-->

							<div class="kt-portlet kt-portlet--mobile ">
							<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">

											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="pegawai-saldo-cuti.php" class="btn btn-outline-brand btn-sm">
														<i class="fa fa-question-circle"></i>Saldo Cuti
													</a>
													&nbsp;
													<a href="pegawai-riwayat-cuti.php" class="btn btn-outline-brand btn-sm">
												<i class="fa fa-list"></i>Riwayat Cuti</button>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
											</div>
											</div>
								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">#</th>
												<th width="2%" bgcolor="#f7fcff" rowspan="2">Pegawai</th>
												<th width="2%" bgcolor="#f7fcff" rowspan="2">Nip</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Tipe Pegawai</th>
												<th width="16%" bgcolor="#f7fcff" rowspan="2">Departement</th>
												<th width="10%" bgcolor="#f7fcff" rowspan="2">Jenis Cuti</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">Waktu<br>Pengajuan</th>
												<th width="16%" bgcolor="#f7fcff" colspan="2">Tanggal Cuti</th>
												<th colspan="3" bgcolor="#f7fcff">Verifikasi</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Status Cuti</th>
												<th width="20%" bgcolor="#f7fcff" rowspan="2">Keterangan</th>
												<th width="3%" bgcolor="#f7fcff" rowspan="2">Actions</th>
											</tr>
											<tr>
												<th width="8%" bgcolor="#f7fcff">Awal </th>
												<th width="8%" bgcolor="#f7fcff">Akhir </th>
												<th width="3%" bgcolor="#f7fcff">Atasan</th>
												<th width="3%" bgcolor="#f7fcff">HR SPV</th>
												<th width="3%" bgcolor="#f7fcff">HR Manager</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td width="1%" id="kt_table_1">1</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Kontrak</td>
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="10%">Cuti Alasan Penting</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
													<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock" data-toggle="modal" data-target="#modal_persetujuan"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock" data-toggle="modal" data-target="#modal_persetujuan"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock" data-toggle="modal" data-target="#modal_persetujuan"></i></button></td>
												<td style="text-align:left">Cuti Alasan Penting </td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-trash"></i>
																				<span class="kt-nav__link-text">Hapus Data</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">2</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Kontrak</td>
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="10%">Cuti Alasan Penting</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
													<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock" data-toggle="modal" data-target="#modal_persetujuan"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan"><i class="fa fa-clock" data-toggle="modal" data-target="#modal_persetujuan"></i></button></td>
												<td style="text-align:left">Cuti Alasan Penting </td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-trash"></i>
																				<span class="kt-nav__link-text">Hapus Data</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td width="1%" id="kt_table_1">3</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Kontrak</td>
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="10%">Cuti Alasan Penting</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
													<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30 WITA" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td style="text-align:left">Cuti Alasan Penting </td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-trash"></i>
																				<span class="kt-nav__link-text">Hapus Data</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td width="1%" id="kt_table_1">4</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Electrical Engineer Supervisor Assistant" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td width="2%" id="kt_table_1">1102019</td>
												<td width="3%" style="text-align:center">Kontrak</td>
												<td width="15%" style="text-align:center">Commercial & Business Development</td>
												<td width="10%">Cuti Alasan Penting</td>
												<td width="8%" style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
											  <td width="8%" align="center" valign="middle" style="text-align:center">12 Oktober 2019</td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
													<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td width="3%" style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Ditolak" data-html="true"><i class="fa flaticon2-delete"></i></button></td>
												<td style="text-align:left">Cuti Alasan Penting </td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Print</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="detail-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-trash"></i>
																				<span class="kt-nav__link-text">Hapus Data</span>
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
									<div class="modal fade" id="modal_persetujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body">
											<div class="swal2-header">
											<div class="swal2-icon swal2-question swal2-animate-question-icon" style="display: flex;"></div>
											<h2 class="swal2-title" id="swal2-title" style="display: flex;">Menuggu Persetujuan</h2>
											<div id="swal2-content" style="display: block;">Segera Lakukan Konfirmasi !</div>
										</div>

									</div>
										<div class="modal-footer justify-content-center">
											<button type="button" class="btn btn-secondary btn-sm kt_sweetalert_demo_batal"><i class="fa fa-times"></i>Tolak</button>
											<button type="button" class="btn btn-success btn-sm kt_sweetalert_demo_confirm"><i class="fa fa-check"></i> Konfirmasi</button>
											<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Revisi</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
  </div>
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
<script>
	function displayLoginBox() {

    if ($("#login_Box_Div:hidden").length) {
        $("#login_Box_Div").show();

    } else if ($("#login_Box_Div:visible").length) {
        $("#login_Box_Div").hide();
    }
}
</script>
<?php require '../layouts/foot.php' ?>
