<?php require '../layouts/head.php' ?>
<link src="../assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
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
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--begin:: Portlet-->

              <div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

								<!--begin: Form Wizard Nav -->
								<div class="kt-wizard-v4__nav">
									<div class="kt-wizard-v4__nav-items">

										<!--doc: Replace A tag with SPAN tag to disable the step link click -->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-calendar"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Kalender
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Kalender Cuti
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													1
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-responsive"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Saldo Cuti
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Saldo Cuti
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-trophy"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Pengaturan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Pengaturan kebijakan cuti
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<!--begin: Form Wizard Step 1-->

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-heading kt-heading--md">Kelender</div>
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
															    <div id="kt_calendar"></div>
                                  <div class="kt-section__content kt-section__content--solid text-center mt-3">
													<span class="kt-badge kt-badge--unified-brand kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Alasan Penting"></span>
													<span class="kt-badge kt-badge--unified-primary kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Bersalin"></span>
													<span class="kt-badge kt-badge--unified-success kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Besar"></span>
													<span class="kt-badge kt-badge--unified-info kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Khusus"></span>
                          <span class="kt-badge kt-badge--unified-dark kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Sakit"></span>
													<span class="kt-badge kt-badge--unified-warning kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Tahunan"></span>
													<span class="kt-badge kt-badge--unified-danger kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Menikah"></span>
												</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-heading kt-heading--md">Saldo cuti</div>
														<div class="kt-form__section kt-form__section--first">
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
															</svg> Cuti Tahunan
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									<div class="ordered-item-number text-dark">
  										<div class="form-control-static">1.</div>
  									</div>
  									<div class="order-item-right">
  										<div class="ordered-item-head clearfix text-dark">
  											<h5>Standar perusahaan</h5>
  												<button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo</button>
  										</div>
  										<div class="clearfix"></div>
  										<div class="ordered-item-content">
  											<div class="outer-spaced-bottom-20">
  												<span class="mr-2">Saldo cuti</span>
  												<span class="small">
  													12 hari
  												</span>

  											</div>
  										</div>
  									</div>
  								</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Alasan Penting
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit Saldo</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Bersalin
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit Saldo</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
                        <div class="card">
													<div class="card-header" id="headingfour7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefour7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Besar
														</div>
													</div>
													<div id="collapsefour7" class="collapse" aria-labelledby="headingfour7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit Saldo</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
                        <div class="card">
													<div class="card-header" id="headingfive7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefive7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Khusus
														</div>
													</div>
													<div id="collapsefive7" class="collapse" aria-labelledby="headingfive7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit Saldo</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
                        <div class="card">
													<div class="card-header" id="headingsix7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsesix7" aria-expanded="false" aria-controls="collapsThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Sakit
														</div>
													</div>
													<div id="collapsesix7" class="collapse" aria-labelledby="headingsix7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit Saldo</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
                        <div class="card">
													<div class="card-header" id="headingeight7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseeight7" aria-expanded="false" aria-controls="collapsThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Menikah
														</div>
													</div>
													<div id="collapseeight7" class="collapse" aria-labelledby="headingeight7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit Saldo</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
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

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-heading kt-heading--md">Pengaturan kebijakan cuti</div>
														<div class="kt-form__section kt-form__section--first">
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
															</svg> Cuti Tahunan
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="edit-item clearfix mb-3">
  									<div class="edit-item-number text-dark">
  										<div class="form-control-static">1.</div>
  									</div>
  									<div class="edit-item-right">
  										<div class="ordered-item-head clearfix text-dark">
  											<h5>Standar perusahaan
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-pengaturan">Edit</button></h5>
  										</div>
                      <div class="d-inline-flex">
  												<h5 class="mr-2">Saldo cuti</h5>
  													<span>12 hari</span>
                      </div>
  									</div>
  								</div>

                  <h5 class="ml-head">Berlaku untuk : </h5>
                  <div class="row mt-4 mb-4">
                    <div class="col-lg-3">
                <h5 class="ml-head">General</h5>
                  <div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
														CEO
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															Corporate Secretary
														</div>
													</div>
												</div>
											</div>
                    </div>
                    <div class="col-lg-3">
                <h5 class="ml-head">Human Resource</h5>
                  <div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															General Affair Officer
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															HRD Assistant
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															HRD Manager
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-warning"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Maintenance Officer
														</div>
													</div>
												</div>
											</div>
                    </div>
                    <div class="col-lg-3">
                <h5 class="ml-head">Finance and Accounting</h5>
                  <div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															Accountant
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															Bookkeeper
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Finance-Accounting Manager
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-warning"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Treasure
														</div>
													</div>
												</div>
											</div>
                    </div>
                    <div class="col-lg-3">
                <h5 class="ml-head">Engineer</h5>
                  <div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															Back-end Engineer
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															Front-end Engineer
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Lead Engineer
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-warning"></i>
														</div>
														<div class="kt-timeline-v2__item-text kt-padding-top-5">
															Project Manager
														</div>
													</div>
												</div>
											</div>
                    </div>
                    </div>

                    <div class="row mt-4 mb-4">
                      <div class="col-lg-3">
                  <h5 class="ml-head">Marketing</h5>
                    <div class="kt-timeline-v2">
  												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
  													<div class="kt-timeline-v2__item">
  														<div class="kt-timeline-v2__item-cricle">
  															<i class="fa fa-genderless kt-font-danger"></i>
  														</div>
  														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
  														Marketing Junior Intern
  														</div>
  													</div>
  													<div class="kt-timeline-v2__item">
  														<div class="kt-timeline-v2__item-cricle">
  															<i class="fa fa-genderless kt-font-success"></i>
  														</div>
  														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
  															Marketing Manager
  														</div>
  													</div>
  												</div>
  											</div>
                      </div>
                      <div class="col-lg-3">
                  <h5 class="ml-head">Sales</h5>
                    <div class="kt-timeline-v2">
  												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
  													<div class="kt-timeline-v2__item">
  														<div class="kt-timeline-v2__item-cricle">
  															<i class="fa fa-genderless kt-font-danger"></i>
  														</div>
  														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
  															Sales
  														</div>
  													</div>
  													<div class="kt-timeline-v2__item">
  														<div class="kt-timeline-v2__item-cricle">
  															<i class="fa fa-genderless kt-font-success"></i>
  														</div>
  														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
  															Sales Leader
  														</div>
  													</div>
  													<div class="kt-timeline-v2__item">
  														<div class="kt-timeline-v2__item-cricle">
  															<i class="fa fa-genderless kt-font-brand"></i>
  														</div>
  														<div class="kt-timeline-v2__item-text kt-padding-top-5">
  															Telemarketing
  														</div>
  													</div>
  												</div>
  											</div>
                      </div>
                      <div class="col-lg-3">
                  <h5 class="ml-head">Public Relation</h5>
                    <div class="kt-timeline-v2">
  												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
  													<div class="kt-timeline-v2__item">
  														<div class="kt-timeline-v2__item-cricle">
  															<i class="fa fa-genderless kt-font-danger"></i>
  														</div>
  														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
  															PR Executive
  														</div>
  													</div>
  													<div class="kt-timeline-v2__item">
  														<div class="kt-timeline-v2__item-cricle">
  															<i class="fa fa-genderless kt-font-success"></i>
  														</div>
  														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
  															Promotion Team
  														</div>
  													</div>
  												</div>
  											</div>
                      </div>
                      </div>

														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Alasan Penting
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="headingThree7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Bersalin
														</div>
													</div>
													<div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
                        <div class="card">
													<div class="card-header" id="headingfour7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefour7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Besar
														</div>
													</div>
													<div id="collapsefour7" class="collapse" aria-labelledby="headingfour7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
                        <div class="card">
													<div class="card-header" id="headingfive7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefive7" aria-expanded="false" aria-controls="collapseThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Khusus
														</div>
													</div>
													<div id="collapsefive7" class="collapse" aria-labelledby="headingfive7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
                        <div class="card">
													<div class="card-header" id="headingsix7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapsesix7" aria-expanded="false" aria-controls="collapsThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Sakit
														</div>
													</div>
													<div id="collapsesix7" class="collapse" aria-labelledby="headingsix7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                            </div>
													</div>
												</div>
                        <div class="card">
													<div class="card-header" id="headingeight7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseeight7" aria-expanded="false" aria-controls="collapsThree7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Cuti Menikah
														</div>
													</div>
													<div id="collapseeight7" class="collapse" aria-labelledby="headingeight7" data-parent="#accordionExample7">
                            <div class="card-body">
                              <div class="ordered-item clearfix">
                    <div class="ordered-item-number text-dark">
                      <div class="form-control-static">1.</div>
                    </div>
                    <div class="order-item-right">
                      <div class="ordered-item-head clearfix text-dark">
                        <h5>Standar perusahaan</h5>
                          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right">Edit</button>
                      </div>
                      <div class="clearfix"></div>
                      <div class="ordered-item-content">
                        <div class="outer-spaced-bottom-20">
                          <span class="mr-2">Saldo cuti</span>
                          <span class="small">
                            12 hari
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
													<!--end: Form Wizard Step 4-->
													<!--end: Form Actions -->
												</form>
												<!--end: Form Wizard Form-->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end:: Portlet-->
							</div>
              <div class="modal fade" id="edit-saldo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  									<div class="modal-content">
  										<div class="modal-header">
  											<h5 class="modal-title" id="exampleModalLongTitle">Saldo Cuti tahunan - Standar perusahaan</h5>
  											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  											</button>
  										</div>
  										<div class="modal-body">
                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                        <table class="kt-datatable__table" style="display: block;">
                          <thead class="kt-datatable__head">
                            <tr class="kt-datatable__row" style="left: 0px;">
                              <th data-field="AgentName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 200px;">Nama</span></th>
                              <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Budget Standar</span></th>
                              <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 120px;">Budget Periode Ini</span></th>
                              <th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 70px;">Terpakai</span></th>
                              <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Direncanakan</span></th>
                              <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Saldo</span></th>
                            </tr>
                          </thead>
                          <tbody style="" class="kt-datatable__body">
                            <tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
                              <td data-field="AgentName" class="kt-datatable__cell"><span style="width: 200px;">
                                  <div class="kt-user-card-v2">
                                    <div class="kt-user-card-v2__pic"> <img alt="photo" src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/../../assets/media/users/100_10.jpg"> </div>
                                    <div class="kt-user-card-v2__details"> <a class="kt-user-card-v2__name" href="#">Obed Helian</a> <span class="kt-user-card-v2__desc">Developer</span> </div>
                                  </div>
                                </span></td>
                              <td data-field="Country" class="kt-datatable__cell"><span style="width: 100px;"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12"></span></td>
                              <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 120px;"><input type="text" class="form-control form-control-sm" placeholder="12"></span></td>
                              <td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 70px;">0
                                </span></td>
                              <td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;">0</span></td>
                              <td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">12</span></span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="kt-datatable__pager kt-datatable--paging-loaded">
                          <div class="kt-datatable__pager-info">
                            <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
                                <div class="filter-option">
                                  <div class="filter-option-inner">
                                    <div class="filter-option-inner-inner">10</div>
                                  </div>
                                </div>
                              </button>
                              <div class="dropdown-menu ">
                                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                  <ul class="dropdown-menu inner show" role="presentation"></ul>
                                </div>
                              </div>
                            </div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 40</span>
                          </div>
                          <ul class="kt-datatable__pager-nav">
                            <li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                            <li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                            <li style=""></li>
                            <li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
                            <li style=""></li>
                            <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
                            <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="4"><i class="flaticon2-fast-next"></i></a></li>
                          </ul>
                        </div>
                      </div>
  										</div>
  										<div class="modal-footer">
  											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  											<button type="button" class="btn btn-primary">Save changes</button>
  										</div>
  									</div>
  								</div>
  							</div>

              <!--<div class="modal fade" id="edit-pengaturan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    									<div class="modal-content">
    										<div class="modal-header">
    											<h5 class="modal-title" id="exampleModalLongTitle">Pengaturan Cuti tahunan - Standar perusahaan</h5>
    											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    											</button>
    										</div>
    										<div class="modal-body">
                          <div class="form-group">
													<label>Nama kebijakan cuti</label>
													<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Standar Perusahaan">
                        	</div>
                          <div class="form-group">
													<label>saldo setiap staf adalah</label>
                          <div class="input-group">
														<input type="text" class="form-control" placeholder="12" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Hari / Tahun</span></div>
													</div>
                        	</div>
                          <div class="form-group">
													<label>Saldo akan diperbaharui setiap</label>
                          <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
													<button type="button" class="btn btn-secondary btn-square col-lg-3" id="hide1">1 Januari</button>&nbsp;
													<button type="button" class="btn btn-secondary btn-square col-lg-3" id="hide2">Tanggal Bergabung Staff</button>&nbsp;
                          <button type="button" class="btn btn-secondary btn-square col-lg-3" id="show">Tanggal Tertentu</button>&nbsp;
												</div>
                        	</div>
                          <div class="form-group tampil">
													<label>Tanggal</label>
                          <div class="input-group date">
													<input type="text" class="form-control" readonly placeholder="" id="kt_datepicker_2" />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
                        	</div>
    										</div>
                        <div class="form-group">
                        <label>Staf dapat menggunakan saldo cuti ini sejak</label>
                        <div class="kt-section__content kt-section__content--solid">
                        <button type="button" class="btn btn-secondary btn-square ">Tanggal Bergabung Staff</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">1 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">3 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">6 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">1 Tahun Bergabung</button>&nbsp;
                      </div>
                        </div>
                        <div class="form-group">
                        <label>Hak cuti ini diberikan kepada</label>
                        <div class="row">
                        <div class="col-lg-3">
                        <div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	General
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	CEO
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Corporate Secretary
																</a>
															</div>
														</div>
													</div>
                        </div>
                        <div class="col-lg-3">
                        <div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Human Resource
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	General Affair Officer
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	 HRD Assistant
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--success">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	HRD Manager
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Maintenance Officer
																</a>
															</div>
														</div>
													</div>
                        </div>
                      </div>
                      </div>
    										<div class="modal-footer">
    											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    											<button type="button" class="btn btn-primary">Save changes</button>
    										</div>
    									</div>
    								</div>
    							</div>
                </div>-->

                <div class="modal fade" id="edit-pengaturan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Pengaturan Cuti tahunan - Standar perusahaan
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-12">
                          <div class="form-group">
                          <label>Nama kebijakan cuti</label>
                          <input type="text" class="form-control form-control-sm" aria-describedby="emailHelp" placeholder="Standar Perusahaan">
                          </div>
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                        <div class="form-group row">
  												<div class="col-lg-12">
                            <div class="form-group">
  													<label>saldo setiap staf adalah</label>
                            <div class="input-group">
  														<input type="text" class="form-control form-control-sm" placeholder="12" aria-describedby="basic-addon2">
  														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Hari / Tahun</span></div>
  													</div>
                          	</div>
  												</div>
  												</div>
  												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                          <div class="form-group row">
                            <div class="col-lg-12">
                              <div class="form-group">
                              <label>Staf dapat menggunakan saldo cuti ini sejak</label>
                              <div class="kt-section__content kt-section__content--solid row">
                              <button type="button" class="btn btn-secondary btn-square btn-sm">1 Bulan Bergabung</button>&nbsp;
                              <button type="button" class="btn btn-secondary btn-square btn-sm">Tanggal Bergabung Staff</button>&nbsp;
                              <button type="button" class="btn btn-secondary btn-square btn-sm">6 Bulan Bergabung</button>&nbsp;
                              <button type="button" class="btn btn-secondary btn-square btn-sm">3 Bulan Bergabung</button>&nbsp;
                              <button type="button" class="btn btn-secondary btn-square btn-sm">1 Tahun Bergabung</button>&nbsp;
                            </div>
                              </div>
                            </div>
                            </div>
                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                            <div class="form-group row">
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Saldo akan diperbaharui setiap</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square col-lg-3" id="hide1">1 Januari</button>&nbsp;
      													<button type="button" class="btn btn-secondary btn-square col-lg-3" id="hide2">Tanggal Bergabung Staff</button>&nbsp;
                                <button type="button" class="btn btn-secondary btn-square col-lg-3" id="show">Tanggal Tertentu</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Keterangan :</label>
														<input type="email" class="form-control form-control-sm" >
												</div>
												<div class="col-lg-6">
														<label>Upload File :</label>
													<div class="input-group">
														<div class="input-group input-group-sm">
														<input type="text" class="form-control" placeholder="Cari File.." aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Go!</span></div>
													</div>
												</div>
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


<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<script src="../assets/js/pages/custom/wizard/wizard-4.js" type="text/javascript"></script>
<script src="../assets/js/pages/custom/user/list-datatable.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
