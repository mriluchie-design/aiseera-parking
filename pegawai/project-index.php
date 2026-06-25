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
										Projects
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											54 Total </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">
											<div class="kt-input-icon kt-input-icon--right kt-subheader__search">
												<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>

														<!--<i class="flaticon2-search-1"></i>-->
													</span>
												</span>
											</div>
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
											<a href="project-add.php" class="btn btn-label-info btn-sm">
												<i class="fa fa-file-alt"></i> Buat Project</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											
										</div>
										</div>
										</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
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
															Total Profit
														</h4>
														<span class="kt-widget24__desc">
															All Customs Value
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														$18M
													</span>
												</div>
												<div class="progress progress--sm">
													<div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
													<span class="kt-widget24__number">
														78%
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
															New Feedbacks
														</h4>
														<span class="kt-widget24__desc">
															Customer Review
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-warning">
														1349
													</span>
												</div>
												<div class="progress progress--sm">
													<div class="progress-bar kt-bg-warning" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
													<span class="kt-widget24__number">
														84%
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
															New Orders
														</h4>
														<span class="kt-widget24__desc">
															Fresh Order Amount
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														567
													</span>
												</div>
												<div class="progress progress--sm">
													<div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
													<span class="kt-widget24__number">
														69%
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
															New Users
														</h4>
														<span class="kt-widget24__desc">
															Joined New User
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-success">
														276
													</span>
												</div>
												<div class="progress progress--sm">
													<div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
													<span class="kt-widget24__number">
														90%
													</span>
												</div>
											</div>

											<!--end::New Users-->
										</div>
									</div>
								</div>
							</div>

							<!--end:: Widgets/Stats-->

							<!--begin::Portlet-->
							<div class="kt-portlet kt-portlet--mobile">
								
								<div class="kt-portlet__body">
<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center;">
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_3">#</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">ID Project</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Tipe Project</th>
											  <th width="6%" rowspan="2" bgcolor="#f7fcff">Tipe Penawaran</th>
											  <th width="20%" rowspan="2" bgcolor="#f7fcff">Nama Pekerjaan</th>
											  <th width="25%" rowspan="2" bgcolor="#f7fcff">Client</th>
											  <th colspan="3" bgcolor="#f7fcff">Administrasi</th>
											  <th colspan="3" bgcolor="#f7fcff">Status</th>
											  <th width="3%" rowspan="2" bgcolor="#f7fcff">Actions</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff">Penawaran</th>
											  <th width="2%" bgcolor="#f7fcff"> Pelaksanaan</th>
											  <th width="3%" bgcolor="#f7fcff">Pembayaran</th>
											  <th bgcolor="#f7fcff">Penawaran</th>
											  <th bgcolor="#f7fcff"> Pelaksanaan</th>
											  <th bgcolor="#f7fcff">Pembayaran</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td width="1%" id="kt_table_1">1</td>
												<td width="3%" style="text-align:center">1102019</td>
												<td width="5%" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--inline">External</span></td>
												<td width="5%" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--inline">Tender</span></td>
												<td width="20%">Epass Management System</td>
												<td width="25%">PT. Pelabuhan Indonesia IV (Persero) Cabang Makassar</td>
												<td width="2%" style="text-align:center" nowrap><div class="progress" style="height: 5px;width: 100%;">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 80%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="kt-widget__stats">
															80%
														</div></td>
												<td width="2%" style="text-align:center" nowrap><div class="progress" style="height: 5px;width: 100%;">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 80%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="kt-widget__stats">
															80%
														</div></td>
												<td width="3%" style="text-align:center" nowrap><div class="progress" style="height: 5px;width: 100%;">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 80%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="kt-widget__stats">
															80%
														</div></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"><i class="fa flaticon2-check-mark"></i></span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"><i class="fa flaticon2-check-mark"></i></span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"><i class="fa flaticon2-check-mark"></i></span></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="penawaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Selengkapnya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-administrasi-tender.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Administrasi</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-pengiriman.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Pengiriman</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-nego.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Negosiasi Biaya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="project-add" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Buat Project</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
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
												<td width="5%" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--inline">External</span></td>
												<td width="6%" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--inline">Non Tender</span></td>
												<td width="20%">Epass Management System</td>
												<td width="25%">PT. Pelabuhan Indonesia IV (Persero) Cabang Makassar</td>
												<td width="2%" style="text-align:center" nowrap><div class="progress" style="height: 5px;width: 100%;">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 80%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="kt-widget__stats">
															80%
														</div></td>
												<td width="2%" style="text-align:center" nowrap><div class="progress" style="height: 5px;width: 100%;">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 80%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="kt-widget__stats">
															80%
														</div></td>
												<td width="3%" style="text-align:center" nowrap><div class="progress" style="height: 5px;width: 100%;">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 80%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="kt-widget__stats">
															80%
														</div></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--rounded"><i class="fa fa-clock"></i></span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--rounded"><i class="fa fa-clock"></i></span></td>
												<td width="3%" style="text-align:center" nowrap><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--rounded"><i class="fa fa-clock"></i></span></td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="penawaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Selengkapnya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-administrasi.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Administrasi</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-pengiriman.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Pengiriman</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-nego.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Negosiasi Biaya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="project-add" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Buat Project</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
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
												<td width="5%" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--inline">Internal</span></td>
												<td width="6%" style="text-align:center">-</td>
												<td width="20%">Epass Management System</td>
												<td width="25%">-</td>
												<td width="2%" style="text-align:center" nowrap>-</td>
												<td width="2%" style="text-align:center" nowrap>-</td>
												<td width="3%" style="text-align:center" nowrap>-</td>
												<td width="3%" style="text-align:center" nowrap>-</td>
												<td width="3%" style="text-align:center" nowrap>-</td>
												<td width="3%" style="text-align:center" nowrap>-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																		<li class="kt-nav__item">
																			<a href="penawaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																				<span class="kt-nav__link-text">Selengkapnya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-administrasi.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																				<span class="kt-nav__link-text">Administrasi</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-pengiriman.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Pengiriman</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-nego.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-send"></i>
																				<span class="kt-nav__link-text">Negosiasi Biaya</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="project-add" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-avatar"></i>
																				<span class="kt-nav__link-text">Buat Project</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="penawaran-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon2-settings"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										</tbody>
									</table>
									
								</div>
							</div>

							<!--End::Section-->

						</div>

						<!-- end:: Content -->
					</div>
                
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/custom/user/list-datatable.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
