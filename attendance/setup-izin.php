<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Pengaturan Izin Pegawai
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
				<a href="add-cuti.php" class="btn btn-info btn-sm">
												<i class="fa fa-plus-circle"></i> Tambah Data</button>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
                
				
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
                                <label>Jenis Izin :</label>
    	                       
        							 <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Cuti Tahunan</option>
                              <option value="2">Cuti Alasan Penting</option>
                              <option value="3">Cuti Bersalin</option>
                              <option value="3">Cuti Besar</option>
                              <option value="3">Cuti Khusus</option>
                              <option value="3">Cuti Sakit</option>
                              <option value="3">Cuti Menikah</option>

                          </select>
        					
                            </div>
							
							<div class="col-lg-2">
						                          <label>Pejabat Pembuat :</label>
												  <div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
					                       </div>

						                        </div>
												<div class="col-lg-2">
						                          <label class="">Tanggal Dibuat :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
												<div class="col-lg-2">
						                          <label class="">Tanggal Diubah :</label>
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
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Cari</button>
						</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->

			<!--begin:: Widgets/Stats-->
			
			<!--end:: Widgets/Stats-->

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="15%" rowspan="2" bgcolor="#f7fcff">Jenis Cuti</th>
											  <th width="1%" colspan="2" rowspan="2" bgcolor="#f7fcff">Budget</th>
											  <th colspan="2" bgcolor="#f7fcff">Dibuat Oleh</th>
											  <th colspan="2" bgcolor="#f7fcff">Tanggal</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Berlaku Untuk</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">Foto</th>
											  <th width="7%" bgcolor="#f7fcff">Nama</th>
											  <th width="3%" bgcolor="#f7fcff">Dibuat</th>
											  <th width="3%" bgcolor="#f7fcff">Diubah</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td align="left" valign="left" style="text-align:left">Cuti Tahunan</td>
												<td style="text-align:center" nowrap>12</td>
												<td style="text-align:center" nowrap>Hari / Tahun</td>
												<td align="center" valign="center" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000006&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"> <img src="../assets/media/users/100_16.jpg" alt="image" /> </a></td>
												<td align="left" valign="left" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td align="center" valign="center" style="text-align:center">13 Agustus 2023</td>
												<td align="center" valign="center" style="text-align:center">13 Agustus 2023</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-sm" data-toggle="modal" data-target="#modal_cuti_departemen"><i class="fa fa-eye"></i>Lihat</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item">
																			<a href="edit-setup-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
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
												<td align="left" valign="left" style="text-align:left">Cuti Alasan Penting</td>
												
												<td nowrap style="text-align:center">12</td>
												<td nowrap style="text-align:center">Hari / Tahun</td>
												<td align="center" valign="center" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000006&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"> <img src="../assets/media/users/100_16.jpg" alt="image" /> </a></td>
												<td align="left" valign="left" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td align="center" valign="center" style="text-align:center">13 Agustus 2023</td>
												<td align="center" valign="center" style="text-align:center">13 Agustus 2023</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-sm" data-toggle="modal" data-target="#modal_cuti_departemen"><i class="fa fa-eye"></i>Lihat</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item">
																			<a href="edit-setup-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
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
												<td align="left" valign="left" style="text-align:left">Cuti Bersalin</td>
												<td nowrap style="text-align:center">12</td>
												<td nowrap style="text-align:center">Hari / Tahun</td>
												<td align="center" valign="center" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000006&lt;hr&gt;Kepala Seksi Administrasi Kepegawaian" data-html="true"> <img src="../assets/media/users/100_16.jpg" alt="image" /> </a></td>
												<td align="left" valign="left" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td align="center" valign="center" style="text-align:center">13 Agustus 2023</td>
												<td align="center" valign="center" style="text-align:center">13 Agustus 2023</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-sm" data-toggle="modal" data-target="#modal_cuti_departemen"><i class="fa fa-eye"></i>Lihat</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item">
																			<a href="edit-setup-cuti.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
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
                    <!--end: Datatable -->
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
  <div class="modal fade" id="modal_cuti_departemen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><i class="flaticon2-list-1" style="color:#ef5325"></i>&nbsp;&nbsp;<span style="color:#0961ae";>BERLAKU UNTUK</span></span>
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
							<div class="modal fade" id="modal_cuti_divisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
							<div class="modal fade" id="modal_cuti_jabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
