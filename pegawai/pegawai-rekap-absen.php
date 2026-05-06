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
											Data Absensi Anda
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Periode : Oktober 2019 </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


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
														<a href="cetak-rekap-absen.php" class="kt-nav__link">
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
														<div class="alert-text">Notifikasi System</div>
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
						                          <label class="">Tanggal :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
						                        </div>
												<div class="col-lg-3">
						                          <label>Status Kehadiran :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Tidak Absen Datang</option>
						                              <option value="3">Tidak Absen Pulang</option>
						                              <option value="3">Terlambat</option>
						                              <option value="3">Izin</option>
						                              <option value="3">Cuti</option>
						                              <option value="3">Sakit</option>
						                              <option value="3">Perjalanan Dinas</option>
						                              <option value="3">Lembur</option>
						                              <option value="3">Tidak Absen Lembur</option>

						                          </select>
						                        </div>
												<div class="col-lg-3">
						                          <label>Lokasi Absensi :</label>
																		<select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Kantor</option>
						                              <option value="3">Mobile</option>
						                             

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

							<div class="kt-portlet">
								<div class="kt-portlet__body  kt-portlet__body--fit">
									<div class="row row-no-padding row-col-separator-lg">
										<div class="col-md-12 col-lg-6 col-xl-2">

											<!--begin::Total Profit-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Alpa
														</h4>
														<span class="kt-widget24__desc">
															Bulan ini
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														4
													</span>
												</div>

											</div>

											<!--end::Total Profit-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-2">

											<!--begin::New Feedbacks-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Izin
														</h4>
														<span class="kt-widget24__desc">
															Bulan ini
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														1
													</span>
												</div>

											</div>

											<!--end::New Feedbacks-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-2">

											<!--begin::New Orders-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Cuti
														</h4>
														<span class="kt-widget24__desc">
															Bulan ini
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														1
													</span>
												</div>

											</div>

											<!--end::New Orders-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-2">

											<!--begin::New Users-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Sakit
														</h4>
														<span class="kt-widget24__desc">
															Bulan ini
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														2
													</span>
												</div>

											</div>

											<!--end::New Users-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-2">

											<!--begin::New Users-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Tidak Absen Datang
														</h4>
														<span class="kt-widget24__desc">
															Bulan ini
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														2
													</span>
												</div>

											</div>

											<!--end::New Users-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-2">

											<!--begin::New Users-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Tidak Absen Pulang
														</h4>
														<span class="kt-widget24__desc">
															Bulan ini
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
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


							<!--end:: Widgets/Stats-->
							<div class="kt-portlet kt-portlet--mobile ">
								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">#</th>
												<th width="8%" bgcolor="#f7fcff" rowspan="2">Tanggal</th>
												<th colspan="3" bgcolor="#f7fcff">Absensi</th>
												<th width="10%" bgcolor="#f7fcff" colspan="3">Lembur</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Status Kehadiran</th>
												<th width="1%" bgcolor="#f7fcff" rowspan="2">Lokasi Absen</th>
											</tr>
											<tr>
											  <th width="5%" bgcolor="#f7fcff">Jam Masuk</th>
											  <th width="5%" bgcolor="#f7fcff">Jam Pulang</th>
											  <th width="7%" bgcolor="#f7fcff">Total Jam<br>Kerja Normal</th>
												<th width="5%" bgcolor="#f7fcff">Masuk </th>
												<th width="5%" bgcolor="#f7fcff">Pulang</th>
												<th width="7%" bgcolor="#f7fcff">Total Jam<br>Kerja Lembur </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td>12 Oktober 2019</td>
												<td style="text-align:center">08:00:00</td>
												<td style="text-align:center">17:00:00</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">08:00:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="OK" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Kantor" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Home / Building</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Home-/-Building" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#ff0000"></path>
        <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
        <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"></path>
    </g>
</svg></td>
										  </tr>
											<tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td>13 Oktober 2019</td>
												<td style="text-align:center">08:30:00</td>
												<td style="text-align:center">17:00:00</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">07:30:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--inline">Terlambat 30 Menit</span></td>
												<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Phone" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Devices / iPhone-X</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Devices-/-iPhone-X" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td>14 Oktober 2019</td>
												<td style="text-align:center">08:00:00</td>
												<td style="text-align:center">15:00:00</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">06:00:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--inline">Pulang Cepat 2 Jam</span></td>
												<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Kantor" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Home / Building</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Home-/-Building" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#ff0000"></path>
        <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
        <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"></path>
    </g>
</svg></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">4</td>
												<td>15 Oktober 2019</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center">17:00:00</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">00:00:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Tidak Absen Datang</span></td>
												<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Phone" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Devices / iPhone-X</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Devices-/-iPhone-X" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">5</td>
												<td>16 Oktober 2019</td>
												<td style="text-align:center">08:00:00</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">00:00:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Tidak Absen Pulang</span></td>
												<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Kantor" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Home / Building</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Home-/-Building" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#ff0000"></path>
        <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
        <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"></path>
    </g>
</svg></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">6</td>
												<td>17 Oktober 2019</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">00:00:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Sakit</span></td>
												<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Phone" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Devices / iPhone-X</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Devices-/-iPhone-X" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">7</td>
												<td>18 Oktober 2019</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">00:00:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Perjalanan Dinas</span></td>
												<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Kantor" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Home / Building</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Home-/-Building" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#ff0000"></path>
        <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
        <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"></path>
    </g>
</svg></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">8</td>
												<td>19 Oktober 2019</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">00:00:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Cuti Tahunan</span></td>
												<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Phone" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Devices / iPhone-X</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Devices-/-iPhone-X" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">9</td>
												<td>20 Oktober 2019</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center">-</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">00:00:00</span></td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
											  <td align="center" valign="middle" style="text-align:center">-</td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Cuti Menikah</span></td>
												<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Kantor" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Home / Building</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Home-/-Building" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" id="Combined-Shape" fill="#ff0000"></path>
        <rect id="Rectangle-Copy-2" fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
        <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" id="Rectangle-2" fill="#000000" opacity="0.3"></path>
    </g>
</svg></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">10</td>
												<td>21 Oktober 2019</td>
												<td style="text-align:center">08:00:00</td>
												<td style="text-align:center">17:00:00</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">08:00:00</span></td>
											  <td style="text-align:center">17:30:00</td>
												<td style="text-align:center">21:30:00</td>
												<td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">04:00:00</span></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="OK" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td align="center" valign="middle" style="text-align:center"><svg width="24px" data-toggle="kt-tooltip" data-skin="brand" title="Phone" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <title>Stockholm-icons / Devices / iPhone-X</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Stockholm-icons-/-Devices-/-iPhone-X" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg></td>
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
<?php require '../layouts/foot.php' ?>
