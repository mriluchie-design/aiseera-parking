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
											Slip Gaji Anda
									</h3>

								</div>
								<div class="kt-subheader__toolbar">

										<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
										<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Export Data</button>

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
											  <div class="col-lg-2">
						                          <label>No. Slip Gaji :</label>
																		<div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
						                        </div>
												<div class="col-lg-1">
						                          <label class="">Tipe Gaji :</label>
						                          <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                              <option value="AK">Bulanan</option>
                              <option value="HI">Mingguan</option>
                              <option value="HI">Harian</option>

                            </select>
						                        </div>
												<div class="col-lg-2">
						                          <label class="">Periode Penggajian :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
						                        </div>


												<div class="col-lg-2">
						                          <label>Status Pembayaran :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Terbayar</option>
						                              <option value="3">Pending</option>
						                              <option value="3">Belum Terbayar</option>


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
<!--begin:: Widgets/Stats-->


							<!--end:: Widgets/Stats-->


							<!--end:: Widgets/Stats-->
							<div class="kt-portlet kt-portlet--mobile ">

								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="3%" bgcolor="#f7fcff">No. Slip Gaji</th>
												<th width="1%" bgcolor="#f7fcff">Tipe Gaji</th>
												<th width="7%" bgcolor="#f7fcff">Periode Gaji</th>
												<th width="6%" colspan="2" bgcolor="#f7fcff">Pendapatan</th>
												<th width="4%" colspan="2" bgcolor="#f7fcff">Potongan</th>
												<th width="6%" colspan="2" bgcolor="#f7fcff">Gaji Diterima</th>
												<th width="1%" bgcolor="#f7fcff">Waktu Pembayaran</th>
												<th width="1%" bgcolor="#f7fcff">Status Pembayaran</th>
												<th width="2%" bgcolor="#f7fcff">Aksi</th>
											</tr>
										</thead>
										<tbody>


										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">1/IMKEU-SG/I/2019</td>
												<td style="text-align:center">Bulanan</td>
												<td style="text-align:center">1 Januari 2019 s/d 31 Januari 2019</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">1.000.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">100.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">200.000,-</td>
												<td style="text-align:center" nowrap>12 Oktober 2019 - 09:00 WITA</td>
											  <td style="text-align:center" nowrap><button type="button" class="btn btn-brand btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="Terbayar<br>Mandiri - 152004444456" data-html="true"><i class="fa fa-money-bill-alt"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="detail-gaji-pegawai-view.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																	<li class="kt-nav__item">
																			<a href="hr-cetak-penghasilan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Slip Gaji</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td style="text-align:center;">1/IMKEU-SG/I/2019</td>
												<td style="text-align:center">Mingguan</td>
												<td style="text-align:center">1 Januari 2019 s/d 7 Januari 2019</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">1.000.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">100.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">200.000,-</td>
												<td style="text-align:center" nowrap>12 Oktober 2019 - 09:00 WITA</td>
											  <td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Terbayar<br>Mandiri - 152004444456" data-html="true"><i class="fa fa-money-bill-alt"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_slipgaji">
																				<a href="hr-cetak-penghasilan.php"><i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Slip Gaji</span></a>
																			</div>
																		</li>

																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td style="text-align:center;">1/IMKEU-SG/I/2019</td>
												<td style="text-align:center">Harian</td>
												<td style="text-align:center">1 Januari 2019 s/d 1 Januari 2019</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">1.000.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">100.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">200.000,-</td>
												<td style="text-align:center" nowrap>12 Oktober 2019 - 09:00 WITA</td>
											  <td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Terbayar<br>Mandiri - 152004444456" data-html="true"><i class="fa fa-money-bill-alt"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_slipgaji">
																				<a href="hr-cetak-penghasilan.php"><i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Slip Gaji</span></a>
																			</div>
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
<?php require '../layouts/foot.php' ?>
