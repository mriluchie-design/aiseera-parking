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
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown">
												<i class="flaticon-reply"></i> Kembali</button>

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
									<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>
									<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="flaticon2-printer"></i> Export Data</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">
													
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
															
														</a>
													</li>
													
												</ul>

												<!--end::Nav-->
											</div>
										</div>
										</div>
									
												
									
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="step-first">
										<div class="kt-grid__item">

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v3__nav">
												<div class="kt-wizard-v3__nav-items">

													<!--doc: Replace A tag with SPAN tag to disable the step link click -->
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>1</span> Setup Location
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>2</span> Enter Details
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>3</span> Select Services
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>4</span> Delivery Address
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>5</span> Review and Submit
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">

											<!--begin: Form Wizard Form-->
											<form class="kt-form" id="kt_form">

												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="row">
								<div class="col-xl-9">
							<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon-stopwatch"></i></span>
												<h3 class="kt-portlet__head-title">Form Penawaran</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-group">
													<a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-angle-down"></i></a>
													
												</div>
											</div>
										</div>

										<!--begin::Form-->
										<form class="kt-form kt-form--label-right">
											<div class="kt-portlet__body">
												<div class="form-group row">
													<div class="col-lg-2">
														<label>ID Penawaran :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1102019">
													</div>
													<div class="col-lg-2">
														<label>Tipe Penawaran :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Tender</option>
														<option>Non Tender</option>
														
													</select>
												</div>
													</div>
													<div class="col-lg-2">
														<label>Doc Status :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Draft</option>
														<option>Final</option>
														
													</select>
												</div>
													</div>
													<div class="col-lg-2">
														<label>Doc Version :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>1.0</option>
														<option>60 Hari</option>
														<option>30 Hari</option>
														<option>14 Hari</option>
														<option>7 Hari</option>
													</select>
												</div>
													</div>
													
													
													
													<div class="col-lg-2">
														<label class="">Tanggal Penawaran :</label>
														<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="Recipient's username" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-group"></i></span></div>
													</div>
													</div>
													<div class="col-lg-2">
														<label class="">Deadline Penawaran :</label>
														
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="Recipient's username" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-group"></i></span></div>
													</div>
											
													</div>
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-4">
														<label>Nama Proyek :</label>
														<input type="email" class="form-control form-control-sm" placeholder="Masukkan Nama Proyek">
													</div>
													<div class="col-lg-4">
														<label>Nama Dokumen :</label>
														<input type="email" class="form-control form-control-sm" placeholder="Masukkan Nama Proyek">
													</div>
													<div class="col-lg-3">
														<label>Kategori :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Appplication Development</option>
														<option>60 Hari</option>
														<option>30 Hari</option>
														<option>14 Hari</option>
														<option>7 Hari</option>
														
													</select>
												</div>
													</div>
													<div class="col-lg-1">
														<label>Expired :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>90 Hari</option>
														<option>60 Hari</option>
														<option>30 Hari</option>
														<option>14 Hari</option>
														<option>7 Hari</option>
														
													</select>
												</div>
													</div>
													
												</div>
												
											<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-4">
														<label>Nama Proyek :</label>
														<input type="email" class="form-control form-control-sm" placeholder="Masukkan Nama Proyek">
													</div>
													<div class="col-lg-4">
														<label>Nama Proyek :</label>
														<input type="email" class="form-control form-control-sm" placeholder="Masukkan Nama Proyek">
													</div>
													<div class="col-lg-2">
														<label class="">Estimasi Mulai :</label>
														<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="Recipient's username" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-group"></i></span></div>
													</div>
													</div>
													<div class="col-lg-2">
														<label class="">Estimasi Selesai :</label>
														
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="Recipient's username" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-group"></i></span></div>
													</div>
											
													</div>
													
												</div>
												
										</form>

										<!--end::Form-->
									</div>
							
							<!--end:: Portlet-->
							
							</div>
							</div>
							<div class="col-xl-3">
							<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon-stopwatch"></i></span>
												<h3 class="kt-portlet__head-title">Atribut Surat Penawaran</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="kt-portlet__head-group">
													<a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-angle-down"></i></a>
													
												</div>
											</div>
										</div>
										<!--begin::Form-->
										<form class="kt-form kt-form--label-right">
											<div class="kt-portlet__body">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Klasifikasi :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1102019">
													</div>
													<div class="col-lg-6">
														<label>Lampiran :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1102019">
													</div>
													</div>
													
													
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<label>Perihal :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
													</div>
													
													
												</div>
												
											<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<label>Tujuan Surat :</label>
														<input type="email" class="form-control form-control-sm" placeholder="Masukkan Nama Proyek">
													</div>
													
													
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<label>Tanggal Surat :</label>
														<input type="email" class="form-control form-control-sm" placeholder="Masukkan Nama Proyek">
													</div>
													
													
												</div>
										</form>

										<!--end::Form-->
									</div>
									</div>
									</div>
							
							<!--end:: Portlet-->

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Enter the Details of your Delivery</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="form-group">
																<label>Package Details</label>
																<input type="text" class="form-control" name="package" placeholder="Package Details" value="Complete Workstation (Monitor, Computer, Keyboard & Mouse)">
																<span class="form-text text-muted">Please enter your Pakcage Details.</span>
															</div>
															<div class="form-group">
																<label>Package Weight in KG</label>
																<input type="text" class="form-control" name="weight" placeholder="Package Weight" value="25">
																<span class="form-text text-muted">Please enter your Package Weight in KG.</span>
															</div>
															<div class="kt-wizard-v3__form-label">Package Dimensions</div>
															<div class="row">
																<div class="col-xl-4">
																	<div class="form-group">
																		<label>Package Width in CM</label>
																		<input type="text" class="form-control" name="width" placeholder="Package Width" value="110">
																		<span class="form-text text-muted">Please enter your Package Width in CM.</span>
																	</div>
																</div>
																<div class="col-xl-4">
																	<div class="form-group">
																		<label>Package Height in CM</label>
																		<input type="text" class="form-control" name="height" placeholder="Package Length" value="90">
																		<span class="form-text text-muted">Please enter your Package Width in CM.</span>
																	</div>
																</div>
																<div class="col-xl-4">
																	<div class="form-group">
																		<label>Package Length in CM</label>
																		<input type="text" class="form-control" name="length" placeholder="Package Length" value="150">
																		<span class="form-text text-muted">Please enter your Package Length in CM.</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Select your Services</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="form-group">
																<label>Delivery Type</label>
																<select name="delivery" class="form-control">
																	<option value="">Select a Service Type Option</option>
																	<option value="overnight" selected>Overnight Delivery (within 48 hours)</option>
																	<option value="express">Express Delivery (within 5 working days)</option>
																	<option value="basic">Basic Delivery (within 5 - 10 working days)</option>
																</select>
															</div>
															<div class="form-group">
																<label>Packaging Type</label>
																<select name="packaging" class="form-control">
																	<option value="">Select a Packaging Type Option</option>
																	<option value="regular" selected>Regular Packaging</option>
																	<option value="oversized">Oversized Packaging</option>
																	<option value="fragile">Fragile Packaging</option>
																	<option value="frozen">Frozen Packaging</option>
																</select>
															</div>
															<div class="form-group">
																<label>Preferred Delivery Window</label>
																<select name="preferreddelivery" class="form-control">
																	<option value="">Select a Preferred Delivery Option</option>
																	<option value="morning" selected>Morning Delivery (8:00AM - 11:00AM)</option>
																	<option value="afternoon">Afternoon Delivery (11:00AM - 3:00PM)</option>
																	<option value="evening">Evening Delivery (3:00PM - 7:00PM)</option>
																</select>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 3-->

												<!--begin: Form Wizard Step 4-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Setup Your Delivery Location</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="form-group">
																<label>Address Line 1</label>
																<input type="text" class="form-control" name="locaddress1" placeholder="Address Line 1" value="Address Line 1">
																<span class="form-text text-muted">Please enter your Address.</span>
															</div>
															<div class="form-group">
																<label>Address Line 2</label>
																<input type="text" class="form-control" name="locaddress2" placeholder="Address Line 2" value="Address Line 2">
																<span class="form-text text-muted">Please enter your Address.</span>
															</div>
															<div class="row">
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>Postcode</label>
																		<input type="text" class="form-control" name="locpostcode" placeholder="Postcode" value="3072">
																		<span class="form-text text-muted">Please enter your Postcode.</span>
																	</div>
																</div>
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>City</label>
																		<input type="text" class="form-control" name="loccity" placeholder="City" value="Preston">
																		<span class="form-text text-muted">Please enter your City.</span>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>State</label>
																		<input type="text" class="form-control" name="locstate" placeholder="State" value="VIC">
																		<span class="form-text text-muted">Please enter your Postcode.</span>
																	</div>
																</div>
																<div class="col-xl-6">
																	<div class="form-group">
																		<label>Country:</label>
																		<select name="loccountry" class="form-control">
																			<option value="">Select</option>
																			<option value="AF">Afghanistan</option>
																			<option value="AX">Åland Islands</option>
																			<option value="AL">Albania</option>
																			<option value="DZ">Algeria</option>
																			<option value="AS">American Samoa</option>
																			<option value="AD">Andorra</option>
																			<option value="AO">Angola</option>
																			<option value="AI">Anguilla</option>
																			<option value="AQ">Antarctica</option>
																			<option value="AG">Antigua and Barbuda</option>
																			<option value="AR">Argentina</option>
																			<option value="AM">Armenia</option>
																			<option value="AW">Aruba</option>
																			<option value="AU" selected>Australia</option>
																			<option value="AT">Austria</option>
																			<option value="AZ">Azerbaijan</option>
																			<option value="BS">Bahamas</option>
																			<option value="BH">Bahrain</option>
																			<option value="BD">Bangladesh</option>
																			<option value="BB">Barbados</option>
																			<option value="BY">Belarus</option>
																			<option value="BE">Belgium</option>
																			<option value="BZ">Belize</option>
																			<option value="BJ">Benin</option>
																			<option value="BM">Bermuda</option>
																			<option value="BT">Bhutan</option>
																			<option value="BO">Bolivia, Plurinational State of</option>
																			<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																			<option value="BA">Bosnia and Herzegovina</option>
																			<option value="BW">Botswana</option>
																			<option value="BV">Bouvet Island</option>
																			<option value="BR">Brazil</option>
																			<option value="IO">British Indian Ocean Territory</option>
																			<option value="BN">Brunei Darussalam</option>
																			<option value="BG">Bulgaria</option>
																			<option value="BF">Burkina Faso</option>
																			<option value="BI">Burundi</option>
																			<option value="KH">Cambodia</option>
																			<option value="CM">Cameroon</option>
																			<option value="CA">Canada</option>
																			<option value="CV">Cape Verde</option>
																			<option value="KY">Cayman Islands</option>
																			<option value="CF">Central African Republic</option>
																			<option value="TD">Chad</option>
																			<option value="CL">Chile</option>
																			<option value="CN">China</option>
																			<option value="CX">Christmas Island</option>
																			<option value="CC">Cocos (Keeling) Islands</option>
																			<option value="CO">Colombia</option>
																			<option value="KM">Comoros</option>
																			<option value="CG">Congo</option>
																			<option value="CD">Congo, the Democratic Republic of the</option>
																			<option value="CK">Cook Islands</option>
																			<option value="CR">Costa Rica</option>
																			<option value="CI">Côte d'Ivoire</option>
																			<option value="HR">Croatia</option>
																			<option value="CU">Cuba</option>
																			<option value="CW">Curaçao</option>
																			<option value="CY">Cyprus</option>
																			<option value="CZ">Czech Republic</option>
																			<option value="DK">Denmark</option>
																			<option value="DJ">Djibouti</option>
																			<option value="DM">Dominica</option>
																			<option value="DO">Dominican Republic</option>
																			<option value="EC">Ecuador</option>
																			<option value="EG">Egypt</option>
																			<option value="SV">El Salvador</option>
																			<option value="GQ">Equatorial Guinea</option>
																			<option value="ER">Eritrea</option>
																			<option value="EE">Estonia</option>
																			<option value="ET">Ethiopia</option>
																			<option value="FK">Falkland Islands (Malvinas)</option>
																			<option value="FO">Faroe Islands</option>
																			<option value="FJ">Fiji</option>
																			<option value="FI">Finland</option>
																			<option value="FR">France</option>
																			<option value="GF">French Guiana</option>
																			<option value="PF">French Polynesia</option>
																			<option value="TF">French Southern Territories</option>
																			<option value="GA">Gabon</option>
																			<option value="GM">Gambia</option>
																			<option value="GE">Georgia</option>
																			<option value="DE">Germany</option>
																			<option value="GH">Ghana</option>
																			<option value="GI">Gibraltar</option>
																			<option value="GR">Greece</option>
																			<option value="GL">Greenland</option>
																			<option value="GD">Grenada</option>
																			<option value="GP">Guadeloupe</option>
																			<option value="GU">Guam</option>
																			<option value="GT">Guatemala</option>
																			<option value="GG">Guernsey</option>
																			<option value="GN">Guinea</option>
																			<option value="GW">Guinea-Bissau</option>
																			<option value="GY">Guyana</option>
																			<option value="HT">Haiti</option>
																			<option value="HM">Heard Island and McDonald Islands</option>
																			<option value="VA">Holy See (Vatican City State)</option>
																			<option value="HN">Honduras</option>
																			<option value="HK">Hong Kong</option>
																			<option value="HU">Hungary</option>
																			<option value="IS">Iceland</option>
																			<option value="IN">India</option>
																			<option value="ID">Indonesia</option>
																			<option value="IR">Iran, Islamic Republic of</option>
																			<option value="IQ">Iraq</option>
																			<option value="IE">Ireland</option>
																			<option value="IM">Isle of Man</option>
																			<option value="IL">Israel</option>
																			<option value="IT">Italy</option>
																			<option value="JM">Jamaica</option>
																			<option value="JP">Japan</option>
																			<option value="JE">Jersey</option>
																			<option value="JO">Jordan</option>
																			<option value="KZ">Kazakhstan</option>
																			<option value="KE">Kenya</option>
																			<option value="KI">Kiribati</option>
																			<option value="KP">Korea, Democratic People's Republic of</option>
																			<option value="KR">Korea, Republic of</option>
																			<option value="KW">Kuwait</option>
																			<option value="KG">Kyrgyzstan</option>
																			<option value="LA">Lao People's Democratic Republic</option>
																			<option value="LV">Latvia</option>
																			<option value="LB">Lebanon</option>
																			<option value="LS">Lesotho</option>
																			<option value="LR">Liberia</option>
																			<option value="LY">Libya</option>
																			<option value="LI">Liechtenstein</option>
																			<option value="LT">Lithuania</option>
																			<option value="LU">Luxembourg</option>
																			<option value="MO">Macao</option>
																			<option value="MK">Macedonia, the former Yugoslav Republic of</option>
																			<option value="MG">Madagascar</option>
																			<option value="MW">Malawi</option>
																			<option value="MY">Malaysia</option>
																			<option value="MV">Maldives</option>
																			<option value="ML">Mali</option>
																			<option value="MT">Malta</option>
																			<option value="MH">Marshall Islands</option>
																			<option value="MQ">Martinique</option>
																			<option value="MR">Mauritania</option>
																			<option value="MU">Mauritius</option>
																			<option value="YT">Mayotte</option>
																			<option value="MX">Mexico</option>
																			<option value="FM">Micronesia, Federated States of</option>
																			<option value="MD">Moldova, Republic of</option>
																			<option value="MC">Monaco</option>
																			<option value="MN">Mongolia</option>
																			<option value="ME">Montenegro</option>
																			<option value="MS">Montserrat</option>
																			<option value="MA">Morocco</option>
																			<option value="MZ">Mozambique</option>
																			<option value="MM">Myanmar</option>
																			<option value="NA">Namibia</option>
																			<option value="NR">Nauru</option>
																			<option value="NP">Nepal</option>
																			<option value="NL">Netherlands</option>
																			<option value="NC">New Caledonia</option>
																			<option value="NZ">New Zealand</option>
																			<option value="NI">Nicaragua</option>
																			<option value="NE">Niger</option>
																			<option value="NG">Nigeria</option>
																			<option value="NU">Niue</option>
																			<option value="NF">Norfolk Island</option>
																			<option value="MP">Northern Mariana Islands</option>
																			<option value="NO">Norway</option>
																			<option value="OM">Oman</option>
																			<option value="PK">Pakistan</option>
																			<option value="PW">Palau</option>
																			<option value="PS">Palestinian Territory, Occupied</option>
																			<option value="PA">Panama</option>
																			<option value="PG">Papua New Guinea</option>
																			<option value="PY">Paraguay</option>
																			<option value="PE">Peru</option>
																			<option value="PH">Philippines</option>
																			<option value="PN">Pitcairn</option>
																			<option value="PL">Poland</option>
																			<option value="PT">Portugal</option>
																			<option value="PR">Puerto Rico</option>
																			<option value="QA">Qatar</option>
																			<option value="RE">Réunion</option>
																			<option value="RO">Romania</option>
																			<option value="RU">Russian Federation</option>
																			<option value="RW">Rwanda</option>
																			<option value="BL">Saint Barthélemy</option>
																			<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
																			<option value="KN">Saint Kitts and Nevis</option>
																			<option value="LC">Saint Lucia</option>
																			<option value="MF">Saint Martin (French part)</option>
																			<option value="PM">Saint Pierre and Miquelon</option>
																			<option value="VC">Saint Vincent and the Grenadines</option>
																			<option value="WS">Samoa</option>
																			<option value="SM">San Marino</option>
																			<option value="ST">Sao Tome and Principe</option>
																			<option value="SA">Saudi Arabia</option>
																			<option value="SN">Senegal</option>
																			<option value="RS">Serbia</option>
																			<option value="SC">Seychelles</option>
																			<option value="SL">Sierra Leone</option>
																			<option value="SG">Singapore</option>
																			<option value="SX">Sint Maarten (Dutch part)</option>
																			<option value="SK">Slovakia</option>
																			<option value="SI">Slovenia</option>
																			<option value="SB">Solomon Islands</option>
																			<option value="SO">Somalia</option>
																			<option value="ZA">South Africa</option>
																			<option value="GS">South Georgia and the South Sandwich Islands</option>
																			<option value="SS">South Sudan</option>
																			<option value="ES">Spain</option>
																			<option value="LK">Sri Lanka</option>
																			<option value="SD">Sudan</option>
																			<option value="SR">Suriname</option>
																			<option value="SJ">Svalbard and Jan Mayen</option>
																			<option value="SZ">Swaziland</option>
																			<option value="SE">Sweden</option>
																			<option value="CH">Switzerland</option>
																			<option value="SY">Syrian Arab Republic</option>
																			<option value="TW">Taiwan, Province of China</option>
																			<option value="TJ">Tajikistan</option>
																			<option value="TZ">Tanzania, United Republic of</option>
																			<option value="TH">Thailand</option>
																			<option value="TL">Timor-Leste</option>
																			<option value="TG">Togo</option>
																			<option value="TK">Tokelau</option>
																			<option value="TO">Tonga</option>
																			<option value="TT">Trinidad and Tobago</option>
																			<option value="TN">Tunisia</option>
																			<option value="TR">Turkey</option>
																			<option value="TM">Turkmenistan</option>
																			<option value="TC">Turks and Caicos Islands</option>
																			<option value="TV">Tuvalu</option>
																			<option value="UG">Uganda</option>
																			<option value="UA">Ukraine</option>
																			<option value="AE">United Arab Emirates</option>
																			<option value="GB">United Kingdom</option>
																			<option value="US">United States</option>
																			<option value="UM">United States Minor Outlying Islands</option>
																			<option value="UY">Uruguay</option>
																			<option value="UZ">Uzbekistan</option>
																			<option value="VU">Vanuatu</option>
																			<option value="VE">Venezuela, Bolivarian Republic of</option>
																			<option value="VN">Viet Nam</option>
																			<option value="VG">Virgin Islands, British</option>
																			<option value="VI">Virgin Islands, U.S.</option>
																			<option value="WF">Wallis and Futuna</option>
																			<option value="EH">Western Sahara</option>
																			<option value="YE">Yemen</option>
																			<option value="ZM">Zambia</option>
																			<option value="ZW">Zimbabwe</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 4-->

												<!--begin: Form Wizard Step 5-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Review your Details and Submit</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__review">
															<div class="kt-wizard-v3__review-item">
																<div class="kt-wizard-v3__review-title">
																	Current Address
																</div>
																<div class="kt-wizard-v3__review-content">
																	Address Line 1<br />
																	Address Line 2<br />
																	Melbourne 3000, VIC, Australia
																</div>
															</div>
															<div class="kt-wizard-v3__review-item">
																<div class="kt-wizard-v3__review-title">
																	Delivery Details
																</div>
																<div class="kt-wizard-v3__review-content">
																	Package: Complete Workstation (Monitor, Computer, Keyboard & Mouse)<br />
																	Weight: 25kg<br />
																	Dimensions: 110cm (w) x 90cm (h) x 150cm (L)
																</div>
															</div>
															<div class="kt-wizard-v3__review-item">
																<div class="kt-wizard-v3__review-title">
																	Delivery Service Type
																</div>
																<div class="kt-wizard-v3__review-content">
																	Overnight Delivery with Regular Packaging<br />
																	Preferred Morning (8:00AM - 11:00AM) Delivery
																</div>
															</div>
															<div class="kt-wizard-v3__review-item">
																<div class="kt-wizard-v3__review-title">
																	Delivery Address
																</div>
																<div class="kt-wizard-v3__review-content">
																	Address Line 1<br />
																	Address Line 2<br />
																	Preston 3072, VIC, Australia
																</div>
															</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 5-->

												<!--begin: Form Actions -->
												<div class="kt-form__actions">
													<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
														Previous
													</button>
													<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
														Submit
													</button>
													<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
														Next Step
													</button>
												</div>

												<!--end: Form Actions -->
											</form>

											<!--end: Form Wizard Form-->
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>

						<!-- end:: Content -->
            </div>
<!--begin::Page Scripts(used by this page) -->
<?php require '../layouts/footer.php' ?>
<!--begin::Page Scripts(used by this page) -->
		<script src="../assets/js/pages/custom/wizard/wizard-4.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
