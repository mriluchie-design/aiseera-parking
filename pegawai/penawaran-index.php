<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
          <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
              Project Administrasi
            </h3>
            <div class="kt-subheader__breadcrumbs">
                      <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                      <span class="kt-subheader__breadcrumbs-separator"></span>
                      <a href="" class="kt-subheader__breadcrumbs-link">
                          Nama Menu
                      </a>
                      <span class="kt-subheader__breadcrumbs-separator"></span>
                      <a href="" class="kt-subheader__breadcrumbs-link">
                          Nama Submenu
                      </a>
                  </div>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group kt-hidden" id="kt_subheader_group_actions">
              <div class="kt-subheader__desc"><span id="kt_subheader_group_selected_rows"></span> Selected:</div>
              <div class="btn-toolbar kt-margin-l-20">
                <div class="dropdown" id="kt_subheader_group_actions_status_change">
                  <button type="button" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                    Update Status
                  </button>
                  <div class="dropdown-menu">
                    <ul class="kt-nav">
                      <li class="kt-nav__section kt-nav__section--first">
                        <span class="kt-nav__section-text">Change status to:</span>
                      </li>
                      <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="1">
                          <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold">Approved</span></span>
                        </a>
                      </li>
                      <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="2">
                          <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-danger kt-badge--inline kt-badge--bold">Rejected</span></span>
                        </a>
                      </li>
                      <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="3">
                          <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-warning kt-badge--inline kt-badge--bold">Pending</span></span>
                        </a>
                      </li>
                      <li class="kt-nav__item">
                        <a href="#" class="kt-nav__link" data-toggle="status-change" data-status="4">
                          <span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-info kt-badge--inline kt-badge--bold">On Hold</span></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <button class="btn btn-label-success btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">
                  Fetch Selected
                </button>
                <button class="btn btn-label-danger btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_delete_all">
                  Delete All
                </button>
              </div>
            </div>
          </div>
          <div class="kt-subheader__toolbar">
            <a href="#" class="">
            </a>
              <a href="custom/apps/user/add-user.html" class="btn btn-bold">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect x="0" y="0" width="24" height="24"/>
                  <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                  <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
              </g>
          </svg>
          </a>
            <a href="custom/apps/user/add-user.html" class="btn btn-label-brand btn-bold">
              Add Project </a>
            <div class="kt-subheader__wrapper">
              <div class="dropdown dropdown-inline" data-toggle="kt-tooltip-" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24" />
                      <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                      <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                    </g>
                  </svg>

                  <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                  <!--begin::Nav-->
                  <ul class="kt-nav">
                    <li class="kt-nav__head">
                      Add New:
                      <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                    </li>
                    <li class="kt-nav__separator"></li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                        <span class="kt-nav__link-text">Orders</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                        <span class="kt-nav__link-text">Members</span>
                        <span class="kt-nav__link-badge">
                          <span class="kt-badge kt-badge--brand kt-badge--rounded">15</span>
                        </span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                        <span class="kt-nav__link-text">Reports</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-link"></i>
                        <span class="kt-nav__link-text">Finance</span>
                      </a>
                    </li>
                    <li class="kt-nav__separator"></li>
                    <li class="kt-nav__foot">
                      <a class="btn btn-label-brand btn-bold btn-sm" href="#">More options</a>
                      <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                    </li>
                  </ul>

                  <!--end::Nav-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										&nbsp;
										&nbsp;
											Data Penawaran
										
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											54 Total </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">
											
										</form>
									</div>
									<div class="kt-subheader__group kt-hidden" id="kt_subheader_group_actions">
										<div class="kt-subheader__desc"><span id="kt_subheader_group_selected_rows"></span> Selected:</div>
										<div class="btn-toolbar kt-margin-l-20">
											<div class="dropdown" id="kt_subheader_group_actions_status_change">
												<button type="button" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
													Update Status
												</button>
												<div class="dropdown-menu">
													<ul class="kt-nav">
														<li class="kt-nav__section kt-nav__section--first">
															<span class="kt-nav__section-text">Change status to:</span>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-toggle="status-change" data-status="1">
																<span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-success kt-badge--inline kt-badge--bold">Approved</span></span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-toggle="status-change" data-status="2">
																<span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-danger kt-badge--inline kt-badge--bold">Rejected</span></span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-toggle="status-change" data-status="3">
																<span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-warning kt-badge--inline kt-badge--bold">Pending</span></span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link" data-toggle="status-change" data-status="4">
																<span class="kt-nav__link-text"><span class="kt-badge kt-badge--unified-info kt-badge--inline kt-badge--bold">On Hold</span></span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<button class="btn btn-label-success btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_fetch" data-toggle="modal" data-target="#kt_datatable_records_fetch_modal">
												Fetch Selected
											</button>
											<button class="btn btn-label-danger btn-bold btn-sm btn-icon-h" id="kt_subheader_group_actions_delete_all">
												Delete All
											</button>
										</div>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									
										<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>
									<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="project-add-penawaran.php" class="btn btn-label-info btn-sm">
												<i class="fa fa-calculator"></i> Buat Penawaran</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											
										</div>
										</div>
										</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="row">
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

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
															Total Penawaran
														</h4>
														<span class="kt-widget24__desc">
															Keseluruhan Penawaran
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														Rp. 1.000.000.000,-
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
															Penawaran Diterima
														</h4>
														<span class="kt-widget24__desc">
															Enjoy It
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-success">
														1349
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
															Penawaran Batal
														</h4>
														<span class="kt-widget24__desc">
															yang ditolak
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														567
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
															Penawaran Pending
														</h4>
														<span class="kt-widget24__desc">
															Follow Up Please
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-warning">
														4
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
								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">ID Penawaran</th>
											  <th width="6%" rowspan="2" bgcolor="#f7fcff">Tipe Penawaran</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Tipe Pekerjaan</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff" style="text-align:center">Client</th>
											  <th width="25%" rowspan="2" bgcolor="#f7fcff">Nama Pekerjaan</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Kategori Pekerjaan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Dibuat Oleh</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">PIC Adm</th>
											  <th colspan="2" bgcolor="#f7fcff">Tanggal</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Masa Berlaku</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Persetujuan Penawaran</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Status Pengiriman</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Status Client</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Actions</th>
										  </tr>
											<tr>
												<th width="10%" style="text-align:center" bgcolor="#f7fcff">Surat Penawaran</th>
												<th width="10%" style="text-align:center" bgcolor="#f7fcff">Deadline Pemasukan Penawaran</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td width="1%" id="kt_table_1">1</td>
												<td width="3%" style="text-align:center">1102019</td>
												<td width="5%" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--inline">Tender</span></td>
												<td width="3%">Baru</td>
												<td width="2%" style="text-align:center"><span class="kt-media kt-media--sm kt-margin-r-5 kt-margin-t-5" style="text-align:center" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia IV (Persero)">
														<img src="../assets/media/project-logos/4.png" alt="image">
													</span></td>
												<td width="25%">Epass Management System</td>
											  
											  <td width="10%" align="center" valign="middle" style="text-align:center">Custom Application Development</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Muhammad Nasrullah, S.Kom<hr>24 September 2019 - 08:00" data-html="true">
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
													<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Nur Achfiah Budhi Artha, S. ST<hr>24 September 2019 - 09:00" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>
												<td style="text-align:center">12 Oktober 2019 - 09:00 </td>
												<td style="text-align:center">12 Oktober 2019 - 09:00 </td>
												<td width="3%" style="text-align:center" nowrap>90 Hari</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Diterima<hr>Ilham - Staff<br>31 Desember 2018 - 14:30" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penawaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-send.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-signature"></i>
																				<span class="kt-nav__link-text">Serah Terima Penawaran</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-nego.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-calculator"></i>
																				<span class="kt-nav__link-text">Negosiasi Biaya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="project-add" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-project-diagram"></i>
																				<span class="kt-nav__link-text">Buat Project</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">2</td>
												<td width="3%" style="text-align:center">2102019</td>
												<td width="6%" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--inline">Non Tender</span></td>
												<td width="3%">Maintenance</td>
												<td width="2%" style="text-align:center"><span class="kt-media kt-media--sm kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia IV (Persero) Cabang Makassar New Port">
														<img src="../assets/media/project-logos/6.png" alt="image">
													</span></td>
												<td width="25%">Epass Management System</td>
											  
											  <td width="10%" align="center" valign="middle" style="text-align:center">Mobile Application</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Muhammad Nasrullah, S.Kom<hr>24 September 2019 - 08:00" data-html="true">
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
													<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Nur Achfiah Budhi Artha, S. ST<hr>24 September 2019 - 09:00" data-html="true">
														<img src="../assets/media/users/100_7.jpg" alt="image">
													</a></td>
												<td style="text-align:center">12 Oktober 2019 - 09:00 </td>
												<td style="text-align:center">12 Oktober 2019 - 09:00 </td>
												<td width="3%" style="text-align:center" nowrap>60 Hari</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui<hr>Muhammad Nasrullah, S.Kom<br>31 Desember 2018 - 14:30" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
														<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--info kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Direvisi" data-html="true">
															<i class="fa fa-sync"></i>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true">
															<i class="fa fa-clock"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penawaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-send.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-signature"></i>
																				<span class="kt-nav__link-text">Serah Terima Penawaran</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-nego.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-calculator"></i>
																				<span class="kt-nav__link-text">Negosiasi Biaya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="project-add" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-project-diagram"></i>
																				<span class="kt-nav__link-text">Buat Project</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">40</td>
												<td width="3%" style="text-align:center">3102019</td>
												<td width="6%" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--inline">Non Tender</span></td>
												<td width="3%">Baru</td>
												<td width="2%" style="text-align:center"><span class="kt-media kt-media--sm kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia IV (Persero) Cabang Makassar">
														<img src="../assets/media/project-logos/2.png" alt="image">
													</span></td>
												<td width="25%">Epass Management System</td>
											  
											  <td width="10%" align="center" valign="middle" style="text-align:center">Videotron</td>
												<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Muhammad Nasrullah, S.Kom<hr>24 September 2019 - 08:00" data-html="true">
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
													<td width="1%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>24 September 2019 - 09:00" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center">12 Oktober 2019 - 09:00 </td>
												<td style="text-align:center">12 Oktober 2019 - 09:00 </td>
												<td width="3%" style="text-align:center" nowrap>30 Hari</td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true">
															<i class="fa fa-clock"></i>
														</span></td>
														<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Belum Dikirim" data-html="true">
															<i class="fa fa-crow"></i></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true">
															<i class="fa fa-clock"></i>
														</span></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penawaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-send.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-signature"></i>
																				<span class="kt-nav__link-text">Serah Terima Penawaran</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-nego.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-calculator"></i>
																				<span class="kt-nav__link-text">Negosiasi Biaya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="project-add" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-project-diagram"></i>
																				<span class="kt-nav__link-text">Buat Project</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										</tbody>
									</table>

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
<script src="../assets/js/pages/custom/user/list-datatable.js" type="text/javascript"></script>
<script src="../assets/js/pages/custom/projects/list-datatable.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
