<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Rekap Perubahan Target Setoran Jukir
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
			
		</div>
            <div class="kt-subheader__toolbar">
		
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="kt-nav">
					
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">PDF</span>
                            </a>
                          </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
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
	<div class="row">
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">A simple primary alert—check it out!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

            <!--begin::Filter-->
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
                                <label>ID Jukir :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
                            <div class="col-lg-2">
                                <label>Nama Jukir :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
                           
							<div class="col-lg-2">
                                <label>Tanggal Perubahan :</label>
								
                                <div class="input-group">
						                        <input type="text" class="form-control kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							
							
							
							
                            </div>
							<br>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="6%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Foto</th>
											  <th width="15%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Nama Jukir</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">ID<br>Target Setoran</th>
											  
											  <th colspan="14" bgcolor="#feffed">Target Setoran</th>
											  <th width="2%" colspan="2" bgcolor="#f7fcff">Penetapan<br>Target Setoran</th>
											 
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Keterangan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Dibuat</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kolektor</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Verifikasi</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
								          </tr>
											<tr style="text-align:center">
											  <th width="1%" colspan="2" bgcolor="#feffed">Senin</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Selasa</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Rabu</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Kamis</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Jumat</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Sabtu</th>
											  <th width="1%" colspan="2" bgcolor="#feffed">Minggu</th>
											  <th bgcolor="#f7fcff">Dibuat</th>
											  <th bgcolor="#f7fcff">Terakhir Diubah</th>
										  </tr>
										</thead>
										<tbody>
											
										  <tr>
												<td rowspan="2" id="kt_table_1" style="text-align:right">1</td>
												<td rowspan="2" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001" data-html="true">
																		<img src="../assets/media/users/100_2.jpg" alt="image">
																	</a></td>
												<td rowspan="2" style="text-align:left">A. LUTFIA AGUSTINAPUTRI</td>
												<td style="text-align:center">00009TPTJU823</td>
											
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td nowrap style="text-align:center">23/01/2023<br>06:00:00 WITA</td>
												<td nowrap style="text-align:center">24/01/2023<br>06:00:00 WITA</td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Baru</span></td>
												<td class="text-center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001<hr>Deddy Rafsanjani, S.Kom<hr>Staff Pengelolaan Tepi Jalan" data-html="true">
																		<img src="../assets/media/users/100_3.jpg" alt="image">
																	</a></td>
												<td style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001<hr>Deddy Rafsanjani, S.Kom<hr>082244444436" data-html="true">
																		<img src="../assets/media/users/100_6.jpg" alt="image">
																	</a></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
																						  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																						    <ul class="kt-nav">
																						      <li class="kt-nav__item"> <a href="detail-perubahan-target.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
																						
																					        </ul>
																					      </div>
																						  </div></td>
												
										  </tr>
										  <tr>
												<td style="text-align:center">00001TPTJU823</td>
											
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td style="text-align:right" nowrap>25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td style="text-align:left; border-right: 1px solid #fff" nowrap>Rp.</td>
												<td nowrap="nowrap" style="text-align:right">25.000,-</td>
												<td nowrap style="text-align:center">12/01/2023<br>06:00:00 WITA</td>
												<td nowrap style="text-align:center">22/01/2023<br>06:00:00 WITA</td>
												<td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lama</span></td>
												<td class="text-center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001<hr>Deddy Rafsanjani, S.Kom<hr>Staff Pengelolaan Tepi Jalan" data-html="true">
																		<img src="../assets/media/users/100_3.jpg" alt="image">
																	</a></td>
												<td style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000 000 001<hr>Deddy Rafsanjani, S.Kom<hr>082244444436" data-html="true">
																		<img src="../assets/media/users/100_6.jpg" alt="image">
																	</a></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release"data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
																						  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																						    <ul class="kt-nav">
																						      <li class="kt-nav__item"> <a href="detail-perubahan-target.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
																						
																					        </ul>
																					      </div>
																						  </div></td>
												
										  </tr>
										  
									    </tbody>
									</table>
                    <!--end: Datatable -->

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




                </div>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
