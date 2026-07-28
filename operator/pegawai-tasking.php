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
											Data Tugas Anda
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
<div class="btn-group">
				<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>
				
				
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

													<div class="kt-portlet" id="login_Box_Div">
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
						<label>Nomor Tugas :</label>
						<div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
					</div>
					<div class="col-lg-2">
						<label>Uraian Tugas :</label>
						<div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
					</div>
					<div class="col-lg-1">
						<label>Kategori :</label>
						<select class="form-control kt-selectpicker" data-live-search="true">
							<option value="2">Operasional</option>
							<option value="3">Administrasi</option>
							<option value="3">Keuangan</option>
							<option value="3" selected>Keseluruhan</option>


						</select>
					</div>
					<div class="col-lg-2">
						<label class="">Pemberi Tugas :</label>
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
						<label class="">Tanggal Awal Tugas :</label>
						<div class="input-group">
							<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="-- Pilih Tanggal --">
							<div class="input-group-append">
								<span class="input-group-text"><i class="la la-calendar"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<label class="">Tanggal Akhir Tugas :</label>
						<div class="input-group">
							<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="-- Pilih Tanggal --">
							<div class="input-group-append">
								<span class="input-group-text"><i class="la la-calendar"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-1">
						<label>Status :</label>
						<select class="form-control kt-selectpicker" data-live-search="true">
							<option value="2">Diterima</option>
							<option value="3">Progress</option>
							<option value="3">Batal</option>
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

																<!--end::Form-->
															</div>
							<!--begin:: Widgets/Stats-->
							<div class="row">
							<div class="col-xl-12">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label" style="margin-left:55px;">
												<h3 class="kt-portlet__head-title">
													Statistik
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar" style="margin-right:55px;">
												<a href="#" class="btn btn-label-light btn-sm dropdown-toggle" data-toggle="dropdown">
													Hari ini
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Bulan ini</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Tahun ini</span>
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
												
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit">
											<div class="kt-widget17">
												<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #0961ae">
													<div class="kt-widget17__chart" style="height:120px;">
														<canvas id="kt_chart_activities"></canvas>
													</div>
												</div>
												<div class="kt-widget17__stats">
												<div class="row">
												<div class="col-lg-3">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--twitter">
																	<g id="Stockholm-icons-/-Files-/-File" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <rect id="Rectangle" fill="#000000" x="6" y="11" width="9" height="2" rx="1"></rect>
        <rect id="Rectangle-Copy" fill="#000000" x="6" y="15" width="5" height="2" rx="1"></rect>
    </g>
																	
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Total
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">105</span>
															</span>
														</div>
														</div>
														</div>
														<div class="col-lg-3">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
																	<g id="Stockholm-icons-/-General-/-Smile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="2" width="20" height="20" rx="10"></rect>
        <path d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z" id="Path-56" fill="#000000"></path>
    </g>
																	
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Selesai
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_alpa">10</span>
															</span>
														</div>
														</div>
														</div>
														<div class="col-lg-3">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
																	 <g id="Stockholm-icons-/-General-/-Half-heart" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M16.5,4.5 C14.8905,4.5 13.00825,6.32463215 12,7.5 C10.99175,6.32463215 9.1095,4.5 7.5,4.5 C4.651,4.5 3,6.72217984 3,9.55040872 C3,12.6834696 6,16 12,19.5 C18,16 21,12.75 21,9.75 C21,6.92177112 19.349,4.5 16.5,4.5 Z" id="Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <path d="M12,19.5 C6,16 3,12.6834696 3,9.55040872 C3,6.72217984 4.651,4.5 7.5,4.5 C9.1095,4.5 10.99175,6.32463215 12,7.5 L12,19.5 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
    </g>
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Progress
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_sakit">2</span> 
															</span>
														</div>
														</div>
														</div>
														<div class="col-lg-3">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															<span class="kt-widget17__icon" style="text-align:center">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
																	<g id="Stockholm-icons-/-General-/-Sad" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="2" width="20" height="20" rx="10"></rect>
        <path d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z" id="Path-56" fill="#000000" transform="translate(12.000000, 15.499947) scale(1, -1) translate(-12.000000, -15.499947) "></path>
    </g>
																	
																</svg> </span>
															<span class="kt-widget17__subtitle" style="text-align:center">
																Batal
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:17px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_izin">2</span>
															</span>
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

							<!--end:: Widgets/Stats-->
<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							
										<div class="kt-portlet__body">
											<div>
                        <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="m_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="3%" bgcolor="#f7fcff">Nomor Tugas</th>
												<th width="5%" bgcolor="#f7fcff">Kategori</th>
											  <th colspan="2" bgcolor="#f7fcff">Pemberi Tugas</th>
											  <th width="15%" bgcolor="#feffed">Uraian Tugas</th>
											  <th width="7%" bgcolor="#feffed">Tanggal Awal<br>
											  Tugas</th>
												<th width="7%" bgcolor="#feffed">Tanggal Akhir<br>Tugas</th>
												<th width="2%" bgcolor="#feffed">Bobot</th>
												<th width="7%" bgcolor="#feffed">Progress</th>
												<th width="4%" bgcolor="#feffed">Status</th>
												<th width="1%" bgcolor="#f7fcff">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td align="right">1</td>
												<td id="kt_table_1">002/TASK/PMR/VIII/2023</td>
												<td style="text-align:left">Operasional</td>
												<td width="3%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>
												<td width="10%" id="kt_table_1" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left">Menghadiri Koordinasi Pembahasan Parkir pada Mall Ratu Indah</td>
											  <td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center">10</td>
											  <td style="text-align:center" nowrap=""> <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div></div></td>
											  <td style="text-align:center"><span class="btn btn-label-brand btn-sm">Progress</span></td>
											  
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
															<ul class="kt-nav">
															  <li class="kt-nav__item">
																	  <a href="pegawai-detail-tasking.php" class="kt-nav__link">
																		  <i class="kt-nav__link-icon fa fa-eye"></i>
																		  <span class="kt-nav__link-text">Lihat Detail</span>
																	  </a>
															    </li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="" data-html="true">
																		<i class="kt-nav__link-icon fa fa-clipboard-check"></i>
																		<span class="kt-nav__link-text">Terima Tugas</span>
																	</a>
															    </li>
																<li class="kt-nav__item">
																	<a href="report-tasking.php" class="kt-nav__link">
																		<i class="kt-nav__link-icon fa fa-file-upload"></i>
																		<span class="kt-nav__link-text">Lapor Tugas</span>
																	</a>
															    </li>
																
														    </ul>
													    </div>
													</div></td>
										  </tr>
										  <tr>
												<td align="right">2</td>
												<td id="kt_table_1">001/TASK/PMR/VIII/2023</td>
												<td style="text-align:left">Administrasi</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_14.jpg" alt="image">
													</a></td>
												<td id="kt_table_1" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left">Menyiapkan Dokumen Administrasi Tender</td>
											  <td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center">10</td>
											  <td style="text-align:center" nowrap=""> <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div></div></td>
											  <td style="text-align:center"><span class="btn btn-label-brand btn-sm">Progress</span></td>
											  
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
															<ul class="kt-nav">
															  <li class="kt-nav__item">
																	  <a href="pegawai-detail-tasking.php" class="kt-nav__link">
																		  <i class="kt-nav__link-icon fa fa-eye"></i>
																		  <span class="kt-nav__link-text">Lihat Detail</span>
																	  </a>
															    </li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="" data-html="true">
																		<i class="kt-nav__link-icon fa fa-clipboard-check"></i>
																		<span class="kt-nav__link-text">Terima Tugas</span>
																	</a>
															    </li>
																<li class="kt-nav__item">
																	<a href="report-tasking.php" class="kt-nav__link">
																		<i class="kt-nav__link-icon fa fa-file-upload"></i>
																		<span class="kt-nav__link-text">Lapor Tugas</span>
																	</a>
															    </li>
																
														    </ul>
													    </div>
													</div></td>
										  </tr>
										  <tr>
												<td align="right">3</td>
												<td id="kt_table_1">001/TASK/PMR/VIII/2023</td>
												<td style="text-align:left">Keuangan</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000000<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_14.jpg" alt="image">
													</a></td>
												<td id="kt_table_1" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left">Menyiapkan Dokumen Administrasi</td>
											  <td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center">10</td>
											  <td style="text-align:center" nowrap=""> <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div></div></td>
											  <td style="text-align:center"><span class="btn btn-label-success btn-sm">Selesai</span></td>
											  
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
														<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
															<i class="flaticon-more-1"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
															<ul class="kt-nav">
															  <li class="kt-nav__item">
																	  <a href="pegawai-detail-tasking.php" class="kt-nav__link">
																		  <i class="kt-nav__link-icon fa fa-eye"></i>
																		  <span class="kt-nav__link-text">Lihat Detail</span>
																	  </a>
															    </li>
																<li class="kt-nav__item">
																	<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="" data-html="true">
																		<i class="kt-nav__link-icon fa fa-clipboard-check"></i>
																		<span class="kt-nav__link-text">Terima Tugas</span>
																	</a>
															    </li>
																<li class="kt-nav__item">
																	<a href="report-tasking.php" class="kt-nav__link">
																		<i class="kt-nav__link-icon fa fa-file-upload"></i>
																		<span class="kt-nav__link-text">Lapor Tugas</span>
																	</a>
															    </li>
																
														    </ul>
													    </div>
													</div></td>
										  </tr>
										</tbody>
									</table>


                      </div>
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
<div class="modal fade" id="modal_persetujuan_pending" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-list-alt"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">VERIFIKASI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										
							
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                         
                                <div class="kt-form__actions" align="center">
							<button type="reset" class="btn btn-secondary" data-toggle="modal" data-target="#modal_assign_tugas" data-skin="brand" title="" data-html="true"><i class="fa fa-file-export"></i>Alihkan</button>&nbsp;
							<button type="reset" class="btn btn-success kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title=""><i class="fa fa-check-circle"></i>Terima</button>
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
  <div class="modal fade" id="modal_assign_tugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-list-alt"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">ASSIGN TUGAS</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-12">
                                <label>Cari Pegawai :</label>
    	                       <div class="form-group">

					                         <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK">Muhammad Nasrullah, S.Kom</option>
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
																				<option value="12" selected>Keseluruhan</option>

					 														</select>
                            </div>
                          
							
						 <div class="kt-portlet__foot kt-align-center">
												<div class="">
<button type="button" class="btn btn-sm btn-secondary">
					<i class="fa fa-times-circle"></i>Reset</button>
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Kirim</button>
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

									<!--end: Datatable -->
								


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
