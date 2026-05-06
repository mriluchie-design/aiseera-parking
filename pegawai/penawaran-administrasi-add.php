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
										Buat Penawaran
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									
									
								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#" class="btn btn-label-primary btn-sm" data-toggle="dropdown">
												<i class="flaticon-reply"></i> Kembali</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											
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
																<span>1</span> Setup Administrasi
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>2</span> Administrasi Legalitas
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>3</span> Administrasi Keuangan
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>4</span> Administrasi Teknis
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>5</span> Review & Submit
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
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
														
							</div>
							<div class="row">
								<div class="col-xl-7">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Tender</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-2">
														<label>ID Penawaran :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1102019">
												
												</div>
												
												<div class="col-lg-2">
														<label>Tipe Penawaran :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Tender">
												</div>
													</div>
													<div class="col-lg-2">
														<label>Tipe Pekerjaan :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Baru">
												</div>
													</div>
													<div class="col-lg-3">
														<label>Masa Berlaku :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="90 Hari">
												</div>
												
												</div>
												<div class="col-lg-3">
														<label>Deadline Penawaran :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="30 September 2019">
												
												</div>
												
													
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Client :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="PT. Pelabuhan Indonesia IV (Persero) Cabang Makassar">
												
												</div>
												
												<div class="col-lg-3">
														<label>PIC Client :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Hidayat">
												
												</div>
												<div class="col-lg-3">
														<label>Kategori Pekerjaan :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Custom Web Application">
												</div>
													</div>
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-9">
														<label>Nama Pekerjaan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Pemasangan Access Door Lock & Penggantian Reader Door Lock pada Kantor Pusat PT. Pelabuhan Indonesia IV (Persero) ">
												
												</div>
												
												<div class="col-lg-3">
														<label>Lokasi Pekerjaan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Kantor Pusat">
												
												</div>
												
												
												</div>
												</div>
												</div>
									</div>
									</div>

									<!--end::Portlet-->
									
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Dokumen Tender</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div>&nbsp;</div>
												<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" >NO</td>
    <td width="60%" bgcolor="#f7fcff">URAIAN DOKUMEN</td>
    <td width="30%" bgcolor="#f7fcff">UPLOAD</td>
    <td width="4%" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td><input type="email" class="form-control form-control-sm"></td>
    <td width="30%"><div class="input-group input-group-sm">
														<input type="text" class="form-control" placeholder="Cari File.." aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Go!</span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td><input type="email" class="form-control form-control-sm"></td>
     <td width="30%"><div class="input-group input-group-sm">
														<input type="text" class="form-control" placeholder="Cari File.." aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Go!</span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    <td width="30%"><div class="input-group input-group-sm">
														<input type="text" class="form-control" placeholder="Cari File.." aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Go!</span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    <td width="30%"><div class="input-group input-group-sm">
														<input type="text" class="form-control" placeholder="Cari File.." aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Go!</span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
     <td width="30%"><div class="input-group input-group-sm">
														<input type="text" class="form-control" placeholder="Cari File.." aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Go!</span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
</table>
											</div>
												</div>
									</div>
									</div>

									<!--end::Portlet-->
									
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Jaminan Penawaran</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div>&nbsp;</div>
											<div class="form-group row">
												<div class="col-lg-3">
														<label>Masa Jaminan Penawaran :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>90 Hari</option>
														<option>Non Tender</option>
														<option>Lainnya</option>
														
													</select>
												</div>
												
												</div>
												<div class="col-lg-3">
														<label>Nilai Jaminan Penawaran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control" placeholder="1.000.000.000,-" aria-describedby="basic-addon1">
													</div>
												</div>
												</div>
												<div class="col-lg-3">
														<label>Dari Tanggal :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												</div>
												<div class="col-lg-3">
														<label>Hingga Tanggal :</label>
														<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-8">
														<label>Tujuan Jaminan Penawaran :</label>
														<input type="email" class="form-control form-control-sm" placeholder="PT. Pelabuhan Indonesia IV (Persero) Cabang Makassar">
												
												</div>
												
												<div class="col-lg-4">
														<label>Penjamin Penawaran :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
												
												</div>
												
												
												</div>
												</div>
												</div>
									</div>
									</div>

									<!--end::Portlet-->

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Time Schedule</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div>&nbsp;</div>
												<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" >NO</td>
    <td width="50%" bgcolor="#f7fcff">URAIAN KEGIATAN</td>
    <td width="20%" bgcolor="#f7fcff">MULAI</td>
    <td width="20%" bgcolor="#f7fcff">HINGGA</td>
    <td width="4%" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td><input type="email" class="form-control form-control-sm"></td>
    <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td><input type="email" class="form-control form-control-sm"></td>
     <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
     <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
     <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
     <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="20%"><div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div></td>
    <td width="4%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
</table>
											</div>
										</div>
									</div>
									</div>

									<!--end::Portlet-->
								</div>
								
								<div class="col-xl-5">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Dokumen Checklist</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div>&nbsp;</div>
												
												<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  
  <tr style="text-align:center">
    <td width="5%" bgcolor="#f7fcff" >NO</td>
    <td width="80%" bgcolor="#f7fcff">URAIAN</td>
    
    <td width="8%" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td><input type="email" class="form-control form-control-sm"></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td><input type="email" class="form-control form-control-sm"></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">6</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">7</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">8</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">9</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">10</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">11</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">12</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">13</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">14</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">15</td>
    <td><input type="email" class="form-control form-control-sm" /></td>
    
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
</table>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								</div>

								</div>
								</div>
								</div>
												
															

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
														
							</div>
							<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
											
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="fa fa-briefcase kt-font-success"></i>
												</span>
												<h3 class="kt-portlet__head-title kt-font-brand">
													Akta Perusahaan
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-success btn-sm" data-toggle="modal" data-target="#kt_modal_6"><i class="fa fa-print"></i> Export Data</button></div>&nbsp;
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-info btn-sm" data-toggle="modal" data-target="#kt_modal_6"><i class="fa fa-file-signature"></i> Tambah Data</button></div>
												
											</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">No</td>
    <td width="8%" bgcolor="#f7fcff">Nomor Akta</td>
    <td width="10%" bgcolor="#f7fcff">Tanggal</td>
    <td width="15%" bgcolor="#f7fcff">Nama Notaris</td>
    <td width="45%" bgcolor="#f7fcff">Keterangan</td>
    <td width="2%" bgcolor="#f7fcff">File</td>
    <td width="1%" bgcolor="#f7fcff">Pilih File</td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">24</td>
    <td width="10%">24 September 2008</td>
    <td width="15%">Mardiana Kadir, SH.,MH</td>
    <td width="2%">Akta Pendirian Perusahaan</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">24</td>
    <td width="10%">24 September 2008</td>
    <td width="15%">Mardiana Kadir, SH.,MH</td>
    <td width="2%">Akta Perubahan Terakhir</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
	<td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
 
</table>

									</div>
									</div>

									<!--end::Portlet-->
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="fa fa-briefcase kt-font-success"></i>
												</span>
												<h3 class="kt-portlet__head-title kt-font-brand">
													Kemenkumham
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-success btn-sm" data-toggle="modal" data-target="#kt_modal_2"><i class="fa fa-print"></i> Export Data</button></div>&nbsp;
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-info btn-sm" data-toggle="modal" data-target="#kt_modal_2"><i class="fa fa-file-signature"></i> Tambah Data</button></div>
												
											</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">No</td>
    <td width="8%" bgcolor="#f7fcff">Nomor Akta</td>
    <td width="10%" bgcolor="#f7fcff">Tanggal</td>
    <td width="15%" bgcolor="#f7fcff">Nama Notaris</td>
    <td width="45%" bgcolor="#f7fcff">Keterangan</td>
    <td width="2%" bgcolor="#f7fcff">File</td>
    <td width="1%" bgcolor="#f7fcff">Pilih File</td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">24</td>
    <td width="10%">24 September 2008</td>
    <td width="15%">Mardiana Kadir, SH.,MH</td>
    <td width="2%">Akta Pendirian Perusahaan</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">24</td>
    <td width="10%">24 September 2008</td>
    <td width="15%">Mardiana Kadir, SH.,MH</td>
    <td width="2%">Akta Perubahan Terakhir</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
	<td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
 
</table>

										</div>
									</div>

									<!--end::Portlet-->
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="fa fa-briefcase kt-font-success"></i>
												</span>
												<h3 class="kt-portlet__head-title kt-font-brand">
													Ijin Usaha
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>&nbsp;
											
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-success btn-sm" data-toggle="modal" data-target="#kt_modal_3"><i class="fa fa-print"></i> Export Data</button></div>&nbsp;
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-info btn-sm" data-toggle="modal" data-target="#kt_modal_3"><i class="fa fa-file-signature"></i> Tambah Data</button></div>
												
											</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">No</td>
    <td width="8%" bgcolor="#f7fcff">No. Surat</td>
    <td width="20%" bgcolor="#f7fcff">Jenis Izin</td>
    <td width="15%" bgcolor="#f7fcff">Berlaku Sejak</td>
    <td width="15%" bgcolor="#f7fcff">Hingga</td>
    <td width="30%" bgcolor="#f7fcff">Instansi Pemberi Izin</td>
    <td width="15%" bgcolor="#f7fcff">Kualifikasi</td>
    <td width="2%" bgcolor="#f7fcff">File</td>
    <td width="1%" bgcolor="#f7fcff">Pilih File</td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">SIUP</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">SITU</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
 <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">TDP</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">IUJK</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">Sertifikat Ardin</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">Terdaftar Ardin</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">Sertifikat BPJS Ketenagakerjaan</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">BPJS Ketenagakerjaan</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
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
										</div>
									</div>

									<!--end::Portlet-->
									<!--begin::Modal 1-->
									<div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Tambah Akta Perusahaan
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-3">
														<label>Nomor Akta :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm">
												</div>
												
												</div>
												
												<div class="col-lg-3">
														<label>Tanggal Akta :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												</div>
												<div class="col-lg-6">
														<label>Nama Notaris :</label>
														<input type="email" class="form-control form-control-sm" >
												
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
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Tambah Kemenkumham
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-3">
														<label>Nomor Akta :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm">
												</div>
												
												</div>
												
												<div class="col-lg-3">
														<label>Tanggal Akta :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												</div>
												<div class="col-lg-6">
														<label>Nama Notaris :</label>
														<input type="email" class="form-control form-control-sm" >
												
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
							<!--End::Modal 2-->
							<!--begin::Modal 3-->
									<div class="modal fade" id="kt_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Tambah Ijin Usaha
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-3">
														<label>Nomor Surat :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm">
												</div>
												
												</div>
												
												<div class="col-lg-3">
														<label>Jenis Izin Usaha :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>SITU</option>
														<option>SIUP</option>
														<option>TDP</option>
														<option>IUJK</option>
														<option>Terdaftar Ardin</option>
														<option>Sertifikat Ardin</option>
														<option>Sertifikat BPJS Ketenagakerjaan</option>
														<option>Lainnya</option>
														
													</select>
												</div>
												</div>
												<div class="col-lg-3">
														<label>Berlaku Dari :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												
												</div>
												<div class="col-lg-3">
														<label>Berlaku Hingga :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Instansi Pemberi Izin Usaha :</label>
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
							<!--End::Modal 3-->
							
												</div>
												<div class="tab-pane" id="kt_tabs_7_2" role="tabpanel">
													It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
												</div>
												<div class="tab-pane" id="kt_tabs_7_3" role="tabpanel">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
												</div>
											</div>
											
										</div>
									</div>
									</div>

									<!--end::Portlet-->

									
								</div>
								</div>
								
												
															

												<!--end: Form Wizard Step 2-->


												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
														
							</div>
							<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="fa fa-briefcase kt-font-success"></i>
												</span>
												<h3 class="kt-portlet__head-title kt-font-brand">
													Data Pajak
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>&nbsp;
											
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-success btn-sm" data-toggle="modal" data-target="#kt_modal_4"><i class="fa fa-print"></i> Export Data</button></div>&nbsp;
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-info btn-sm" data-toggle="modal" data-target="#kt_modal_4"><i class="fa fa-file-signature"></i> Tambah Data</button></div>
												
											</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">No</td>
    <td width="30%" bgcolor="#f7fcff">Jenis Pajak</td>
    <td width="3%" bgcolor="#f7fcff">Masa Pajak</td>
    <td width="3%" bgcolor="#f7fcff">Tahun Pajak</td>
    <td width="15%" bgcolor="#f7fcff">No. Bukti Pelaporan</td>
    <td width="10%" bgcolor="#f7fcff">Tanggal Bukti Tanda Terima</td>
    <td width="2%" bgcolor="#f7fcff">File</td>
    <td width="1%" bgcolor="#f7fcff">Pilih File</td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="30%" style="text-align:left">SPT Masa PPH 21</td>
    <td width="3%" style="text-align:center">01/01</td>
    <td width="3%" style="text-align:center">2019</td>
    <td width="15%">00166806401192013031</td>
    <td width="2%">13 September 2019</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
    
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">2</td>
    <td width="30%" style="text-align:left">SPT Masa PPN</td>
    <td width="3%" style="text-align:center">01/01</td>
    <td width="3%" style="text-align:center">2019</td>
    <td width="15%">00166806401192013031</td>
    <td width="2%">13 September 2019</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
    
  </tr>
  <tr>
    <td  style="text-align:center">3</td>
    <td style="text-align:left">SPT Tahunan</td>
    <td style="text-align:center">01/12</td>
    <td style="text-align:center">2019</td>
    <td width="15%">00166806401192013031</td>
    <td width="2%">13 September 2019</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
    
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="30%" style="text-align:left">SPT Masa PPH 21</td>
    <td width="3%" style="text-align:center">02/02</td>
    <td width="3%" style="text-align:center">2019</td>
    <td width="15%">00166806401192013031</td>
    <td width="2%">13 Maret 2019</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
   
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">2</td>
    <td width="30%" style="text-align:left">SPT Masa PPN</td>
    <td width="3%" style="text-align:center">01/01</td>
    <td width="3%" style="text-align:center">2019</td>
    <td width="15%">00166806401192013031</td>
    <td width="2%">13 September 2019</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
    
  </tr>
  
 
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
										</div>
										
									</div>

									<!--end::Portlet-->
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="fa fa-briefcase kt-font-success"></i>
												</span>
												<h3 class="kt-portlet__head-title kt-font-brand">
													Jaminan Penawaran
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>&nbsp;
											
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-success btn-sm" data-toggle="modal" data-target="#kt_modal_5"><i class="fa fa-print"></i> Export Data</button></div>&nbsp;
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-info btn-sm" data-toggle="modal" data-target="#kt_modal_5"><i class="fa fa-file-signature"></i> Tambah Data</button></div>
												
											</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">No</td>
    <td width="8%" bgcolor="#f7fcff">Nomor Akta</td>
    <td width="10%" bgcolor="#f7fcff">Tanggal</td>
    <td width="15%" bgcolor="#f7fcff">Nama Notaris</td>
    <td width="45%" bgcolor="#f7fcff">Keterangan</td>
    <td width="2%" bgcolor="#f7fcff">File</td>
    <td width="1%" bgcolor="#f7fcff">Pilih File</td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">24</td>
    <td width="10%">24 September 2008</td>
    <td width="15%">Mardiana Kadir, SH.,MH</td>
    <td width="2%">Akta Pendirian Perusahaan</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">24</td>
    <td width="10%">24 September 2008</td>
    <td width="15%">Mardiana Kadir, SH.,MH</td>
    <td width="2%">Akta Perubahan Terakhir</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
	<td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
 
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
										</div>
									</div>

									<!--end::Portlet-->
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="fa fa-briefcase kt-font-success"></i>
												</span>
												<h3 class="kt-portlet__head-title kt-font-brand">
													Audit Akuntan Publik
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>&nbsp;
											
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-success btn-sm" data-toggle="modal" data-target="#kt_modal_7"><i class="fa fa-print"></i> Export Data</button></div>&nbsp;
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-info btn-sm" data-toggle="modal" data-target="#kt_modal_7"><i class="fa fa-file-signature"></i> Tambah Data</button></div>
												
											</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">No</td>
    <td width="8%" bgcolor="#f7fcff">No. Surat</td>
    <td width="20%" bgcolor="#f7fcff">Jenis Izin</td>
    <td width="15%" bgcolor="#f7fcff">Berlaku Sejak</td>
    <td width="15%" bgcolor="#f7fcff">Hingga</td>
    <td width="30%" bgcolor="#f7fcff">Instansi Pemberi Izin</td>
    <td width="15%" bgcolor="#f7fcff">Kualifikasi</td>
    <td width="2%" bgcolor="#f7fcff">File</td>
    <td width="1%" bgcolor="#f7fcff">Pilih File</td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">SIUP</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">SITU</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
 <tr>
    <td width="1%"  style="text-align:center">1</td>
    <td width="4%" style="text-align:center">050/123/IV/2013</td>
    <td width="10%">TDP</td>
    <td width="15%">24 September 2008</td>
    <td width="2%">24 September 2013</td>
    <td width="2%">Kantor Dinas Perizinan Kota Makassar</td>
    <td width="2%">Perusahaan Menengah</td>
    <td width="1%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download File"> <i class="fa flaticon-download-1"></i> </span></td>
    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  
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
										</div>
									</div>

									<!--end::Portlet-->
									
									<!--begin::Modal 4-->
									<div class="modal fade" id="kt_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Tambah Data Pajak
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-3">
														<label>Jenis Pajak :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>SPT Masa PPH 21</option>
														<option>SPT Masa PPH 26</option>
														<option>SPT Masa PPN</option>
														<option>SPT Tahunan</option>
														<option>NPWP</option>
														<option>Surat Keterangan Fiskal</option>
														<option>Keterangan Terdaftar Pajak</option>
														<option>Pengukuhan Pengusaha Kena Pajak</option>
														<option>Lainnya</option>
														
													</select>
												</div>
												
												</div>
												
												<div class="col-lg-3">
														<label>Masa Pajak :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects"></option>
														<option>Januari</option>
														<option>Februari</option>
														<option>Maret</option>
														<option>April</option>
														<option>Mei</option>
														<option>Juni</option>
														<option>Juli</option>
														<option>Agustus</option>
														<option>September</option>
														<option>Oktober</option>
														<option>November</option>
														<option>Desember</option>
														<option>Januari - Desember</option>
														<option>Lainnya</option>
														
													</select>
												</div>
												</div>
												<div class="col-lg-3">
														<label>Tahun Pajak :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>2019</option>
														<option>2020</option>
														
													</select>
												</div>
												</div>
												<div class="col-lg-3">
														<label>Tgl Pelaporan :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>No. Bukti Pelaporan :</label>
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
							<!--End::Modal 4-->
							<!--begin::Modal 5-->
									<div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Tambah Jaminan Penawaran
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-3">
														<label>Masa Berlaku :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>90 Hari</option>
														<option>Non Tender</option>
														<option>Lainnya</option>
														
													</select>
												</div>
												
												</div>
												<div class="col-lg-3">
														<label>Nilai Jaminan Penawaran :</label>
														<div class="form-group">
													<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control" placeholder="1.000.000.000,-" aria-describedby="basic-addon1">
													</div>
												</div>
												</div>
												<div class="col-lg-3">
														<label>Berlaku Sejak :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												</div>
												<div class="col-lg-3">
														<label>Hingga Tanggal :</label>
														<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-12">
														<label>Tujuan Jaminan Penawaran :</label>
														<input type="email" class="form-control form-control-sm" placeholder="PT. Pelabuhan Indonesia IV (Persero) Cabang Makassar">
												
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Penjamin Penawaran :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
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
							<!--End::Modal 5-->
							<!--begin::Modal 7-->
									<div class="modal fade" id="kt_modal_7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Tambah Akuntan Publik
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-3">
														<label>Nomor Akta :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm">
												</div>
												
												</div>
												
												<div class="col-lg-3">
														<label>Tanggal Akta :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												</div>
												<div class="col-lg-6">
														<label>Nama Notaris :</label>
														<input type="email" class="form-control form-control-sm" >
												
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
							<!--End::Modal 7-->
												</div>
												<div class="tab-pane" id="kt_tabs_7_2" role="tabpanel">
													It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
												</div>
												<div class="tab-pane" id="kt_tabs_7_3" role="tabpanel">
													Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
												</div>
											</div>
											
										</div>
									</div>
									</div>

									<!--end::Portlet-->

									
								</div>
								</div>
												
															

												<!--end: Form Wizard Step 3-->


												<!--begin: Form Wizard Step 4-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
														
							</div>
							<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="fa fa-briefcase kt-font-success"></i>
												</span>
												<h3 class="kt-portlet__head-title kt-font-brand">
													Tenaga Ahli
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>&nbsp;
											
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-success btn-sm" data-toggle="modal" data-target="#kt_modal_8"><i class="fa fa-print"></i> Export Data</button></div>&nbsp;
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-info btn-sm" data-toggle="modal" data-target="#kt_modal_8"><i class="fa fa-file-signature"></i> Tambah Data</button></div>
												
											</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" rowspan="2" bgcolor="#f7fcff">No</td>
    <td colspan="2" rowspan="2" bgcolor="#f7fcff">Nama </td>
    <td width="4%" rowspan="2" bgcolor="#f7fcff">Umur</td>
    <td colspan="2" bgcolor="#f7fcff">Pendidikan Formal Terakhir **)</td>
    <td colspan="2" bgcolor="#f7fcff">Pendidikan Informal **)</td>
    <td width="4%" rowspan="2" bgcolor="#f7fcff">Pengalaman Kerja</td>
	 <td width="4%" rowspan="2" bgcolor="#f7fcff">Aksi</td>
  </tr>
  <tr style="text-align:center">
    <td width="15%" bgcolor="#f7fcff">Strata/ Tingkatan</td>
    <td width="8%" bgcolor="#f7fcff">Tahun Ijasah</td>
    <td width="20%" bgcolor="#f7fcff">Sertifikat dikeluarkan oleh</td>
    <td width="8%" bgcolor="#f7fcff">Tahun Sertifikat</td>
  </tr>
  <tr>
    <td style="text-align:center">A</td>
    <td colspan="9">PROJECT MANAGER</td>
  </tr>
  <tr>
    <td width="1%" style="text-align:center">&nbsp;</td>
    <td width="1%">1</td>
    <td width="15%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom"></td>
    <td width="4%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="32 Tahun"></td>
    <td width="15%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="S1 Ilmu Komputer"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2008"></td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Microsoft Most Valuable Professional"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2019"></td>
    <td width="4%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="11 Tahun"></td>
	<td width="4%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td colspan="6" style="text-align:center">&nbsp;</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Google Inc"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2019"></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td style="text-align:center">B</td>
    <td colspan="9">APPLICATION ANALYST</td>
  </tr>
  <tr>
    <td width="1%" rowspan="2" style="text-align:center">&nbsp;</td>
    <td width="1%">1</td>
    <td width="15%"><div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Cari Pegawai..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div></td>
    <td width="4%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="32 Tahun"></td>
    <td width="15%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="S1 Ilmu Komputer"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2008"></td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Microsoft Most Valuable Professional"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2019"></td>
    <td width="4%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="11 Tahun"></td>
	<td width="4%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td width="1%">2</td>
    <td width="15%"><div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Cari Pegawai..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div></td>
    <td width="4%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="32 Tahun"></td>
    <td width="15%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="S1 Ilmu Komputer"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2008"></td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Microsoft Most Valuable Professional"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2019"></td>
    <td width="4%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="11 Tahun"></td>
	<td width="4%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">C</td>
    <td colspan="9">PROGRAMMER</td>
  </tr>
  <tr>
    <td width="1%" style="text-align:center">&nbsp;</td>
    <td width="1%">1</td>
    <td width="15%"><div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Cari Pegawai..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div></td>
    <td width="4%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="32 Tahun"></td>
    <td width="15%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="S1 Ilmu Komputer"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2008"></td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Microsoft Most Valuable Professional"></td>
    <td width="8%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="2019"></td>
    <td width="4%"><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="11 Tahun"></td>
	<td width="4%" style="text-align:center"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
</table>
										</div>
									</div>

									<!--end::Portlet-->
									<!--begin::Modal 8-->
									<div class="modal fade" id="kt_modal_8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									
										<div class="modal-body">
										
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--right kt-ribbon kt-ribbon--danger">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">Tambah Tenaga Ahli - Non Pegawai</div>
											<div class="kt-portlet__head-label" style="align-self: center;">
												<div class="col-lg-9 col-md-9 col-sm-12">
														<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--brand">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
													</div>
											</div>
										</div>
										
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-4">
														<label>Jabatan Project :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Project Manager</option>
														<option>Application Analyst</option>
														<option>Network Engineer</option>
														<option>Senior Programmer</option>
														<option>Junior Programmer</option>
														<option>Hardware Specialist</option>
														<option>Project Administration</option>
														<option>Project Finance</option>
														<option>Team Instalasi</option>
														<option>Tambah Data</option>
														
													</select>
												</div>
												
												</div>
												
												<div class="col-lg-6">
														<label>Nama :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm" >
												</div>
												</div>
												<div class="col-lg-2">
														<label>Umur :</label>
														<input type="email" class="form-control form-control-sm" >
												
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
												<div class="col-lg-7">
														<label>Strata / Tingkatan :</label>
														<input type="email" class="form-control form-control-sm" >
												
												</div>
												<div class="col-lg-2">
														<label>Tahun Ijazah :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>2019</option>
														<option>2018</option>
														<option>2017</option>
														
													</select>
												</div>
												
												</div>
												
												<div class="col-lg-3">
														<label>Pengalaman Kerja :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>1 Tahun</option>
														<option>2 Tahun</option>
														<option>3 Tahun</option>
														<option>4 Tahun</option>
														<option>5 Tahun</option>
														<option>6 Tahun</option>
														<option>7 Tahun</option>
														<option>8 Tahun</option>
														<option>9 Tahun</option>
														<option>10 Tahun</option>
														<option>Tambah Data</option>
														
													</select>
												</div>
												
												</div>
												
									</div>
											
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
												<div class="col-lg-9">
														<label>Sertifikat Dikeluarkan Oleh :</label>
														<input type="email" class="form-control form-control-sm" >
												
												</div>
												<div class="col-lg-3">
														<label>Tahun Sertifikat :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>2019</option>
														<option>2018</option>
														<option>2017</option>
														
													</select>
												</div>
												
												</div>
									</div>
									
											
												</div>
												<div class="kt-portlet__head kt-portlet__head--right kt-ribbon kt-ribbon--danger">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">Tambah Tenaga Ahli -Pegawai</div>
											<div class="kt-portlet__head-label" style="align-self: center;">
												<div class="col-lg-9 col-md-9 col-sm-12">
														<span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--brand">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
													</div>
											</div>
										</div>
												<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-4">
														<label>Jabatan Project :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Project Manager</option>
														<option>Application Analyst</option>
														<option>Network Engineer</option>
														<option>Senior Programmer</option>
														<option>Junior Programmer</option>
														<option>Hardware Specialist</option>
														<option>Project Administration</option>
														<option>Project Finance</option>
														<option>Team Instalasi</option>
														<option>Tambah Data</option>
														
													</select>
												</div>
												
												</div>
												
												<div class="col-lg-6">
														<label>Nama :</label>
														<div class="form-group">
													<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Cari Pegawai..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
												</div>
												</div>
												<div class="col-lg-2">
														<label>Umur :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >
												
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
												<div class="col-lg-7">
														<label>Strata / Tingkatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >
												
												</div>
												<div class="col-lg-2">
														<label>Tahun Ijazah :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects" disabled="disabled" placeholder="Auto Complete">
														<option>2019</option>
														<option>2018</option>
														<option>2017</option>
														
													</select>
												</div>
												
												</div>
												
												<div class="col-lg-3">
														<label>Pengalaman Kerja :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>1 Tahun</option>
														<option>2 Tahun</option>
														<option>3 Tahun</option>
														<option>4 Tahun</option>
														<option>5 Tahun</option>
														<option>6 Tahun</option>
														<option>7 Tahun</option>
														<option>8 Tahun</option>
														<option>9 Tahun</option>
														<option>10 Tahun</option>
														<option>Tambah Data</option>
														
													</select>
												</div>
												
												</div>
												
									</div>
											
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
												<div class="col-lg-9">
														<label>Sertifikat Dikeluarkan Oleh :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >
												
												</div>
												<div class="col-lg-3">
														<label>Tahun Sertifikat :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects" disabled="disabled" placeholder="Auto Complete">
														<option>2019</option>
														<option>2018</option>
														<option>2017</option>
														
													</select>
												</div>
												
												</div>
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
												
												<div class="col-lg-9">
														<label>Sertifikat Dikeluarkan Oleh :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >
												
												</div>
												<div class="col-lg-3">
														<label>Tahun Sertifikat :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects" disabled="disabled" placeholder="Auto Complete">
														<option>2019</option>
														<option>2018</option>
														<option>2017</option>
														
													</select>
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
							<!--End::Modal 8-->
												</div>
												
											</div>
											
										</div>
										<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="fa fa-briefcase kt-font-success"></i>
												</span>
												<h3 class="kt-portlet__head-title kt-font-brand">
													Pengalaman Perusahaan
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<button type="button" class="btn btn-label-danger btn-sm"><i class="flaticon-interface-6"></i> Filter Data</button>&nbsp;
											
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-success btn-sm" data-toggle="modal" data-target="#kt_modal_9"><i class="fa fa-print"></i> Export Data</button></div>&nbsp;
											<div class="kt-portlet__head-actions"><button type="button" class="btn btn-label-info btn-sm" data-toggle="modal" data-target="#kt_modal_9"><i class="fa fa-file-signature"></i> Tambah Data</button></div>
												
											</div>
										</div>
										<div class="kt-portlet__body">
											<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" style="text-align:left"><strong>1</strong></td>
    <td colspan="9" style="text-align:left"><strong>PEKERJAAN YANG TELAH SELESAI DILAKSANAKAN</strong></td>
  </tr>
  <tr style="text-align:center">
    <td width="1%" style="text-align:left"><strong>A.</strong></td>
    <td colspan="9" style="text-align:left"><strong>PEKERJAAN SEJENIS</strong></td>
  </tr>
  <tr style="text-align:center">
    <td colspan="10" >&nbsp;</td>
  </tr>
  <tr style="text-align:center">
    <td width="1%" rowspan="2" bgcolor="#f7fcff">NO</td>
    <td width="16%" rowspan="2" bgcolor="#f7fcff">NAMA PEKERJAAN</td>
    <td colspan="4" bgcolor="#f7fcff">SURAT PERJANJIAN / KONTRAK *)</td>
    <td colspan="2" bgcolor="#f7fcff">SERAH TERIMA</td>
    <td width="4%" rowspan="2" bgcolor="#f7fcff">Nama dan Lokasi Penempatan</td>
    <td width="4%" rowspan="2" bgcolor="#f7fcff">KET</td>
  </tr>
  <tr style="text-align:center">
    <td width="10%" bgcolor="#f7fcff">No dan Tanggal</td>
    <td width="15%" bgcolor="#f7fcff">Pemberi Pekerjaan</td>
    <td width="8%" bgcolor="#f7fcff">Nilai Kontrak (Rp/USD)</td>
    <td width="4%" bgcolor="#f7fcff">Jumlah Unit</td>
    <td width="8%" bgcolor="#f7fcff">Jangka Waktu Pelaksanaan</td>
    <td width="4%" bgcolor="#f7fcff">No dan Tangga BA</td>
  </tr>
  <tr>
    <td rowspan="2" style="text-align:center">1</td>
    <td rowspan="2">PEKERJAAN PEMASANGAN E-PARKING PT PELABUHAN INDONESIA IV (PERSERO)</td>
    <td style="text-align:center">20/LP.001/33/PI.IV-2017</td>
    <td rowspan="2">PT PELABUHAN INDONESIA IV (PERSERO)</td>
    <td rowspan="2" style="text-align:right">3.188.970.000,-</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">45 HARI KALENDER</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center">15 NOVEMBER 2017</td>
  </tr>
</table>
<div>&nbsp;</div>
<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td width="1%" style="text-align:left"><strong>B.</strong></td>
    <td colspan="9" style="text-align:left"><strong>PEKERJAAN TIDAK SEJENIS</strong></td>
  </tr>
  <tr style="text-align:center">
    <td colspan="10" >&nbsp;</td>
  </tr>
  <tr style="text-align:center">
    <td width="1%" rowspan="2" bgcolor="#f7fcff">NO</td>
    <td width="16%" rowspan="2" bgcolor="#f7fcff">NAMA PEKERJAAN</td>
    <td colspan="4" bgcolor="#f7fcff">SURAT PERJANJIAN / KONTRAK *)</td>
    <td colspan="2" bgcolor="#f7fcff">SERAH TERIMA</td>
    <td width="4%" rowspan="2" bgcolor="#f7fcff">Nama dan Lokasi Penempatan</td>
    <td width="4%" rowspan="2" bgcolor="#f7fcff">KET</td>
  </tr>
  <tr style="text-align:center">
    <td width="10%" bgcolor="#f7fcff">No dan Tanggal</td>
    <td width="15%" bgcolor="#f7fcff">Pemberi Pekerjaan</td>
    <td width="8%" bgcolor="#f7fcff">Nilai Kontrak (Rp/USD)</td>
    <td width="4%" bgcolor="#f7fcff">Jumlah Unit</td>
    <td width="8%" bgcolor="#f7fcff">Jangka Waktu Pelaksanaan</td>
    <td width="4%" bgcolor="#f7fcff">No dan Tangga BA</td>
  </tr>
  <tr>
    <td rowspan="2" style="text-align:center">1</td>
    <td rowspan="2">PEKERJAAN PEMASANGAN E-PARKING PT PELABUHAN INDONESIA IV (PERSERO)</td>
    <td style="text-align:center">20/LP.001/33/PI.IV-2017</td>
    <td rowspan="2">PT PELABUHAN INDONESIA IV (PERSERO)</td>
    <td rowspan="2" style="text-align:right">3.188.970.000,-</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">45 HARI KALENDER</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center">15 NOVEMBER 2017</td>
  </tr>
</table>
										</div>
									</div>

									<!--end::Portlet-->
									<!--begin::Modal 8-->
									<div class="modal fade" id="kt_modal_9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Tambah Pengalaman Perusahaan
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-3">
														<label>Nomor Akta :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm">
												</div>
												
												</div>
												
												<div class="col-lg-3">
														<label>Tanggal Akta :</label>
														<div class="form-group">
													<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												</div>
												</div>
												<div class="col-lg-6">
														<label>Nama Notaris :</label>
														<input type="email" class="form-control form-control-sm" >
												
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
							<!--End::Modal 8-->
												</div>
												
											</div>
											
										</div>
									</div>
									<!--end::Portlet-->

									
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

						<!-- end:: Content -->
					</div>
						
                
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>
<!--begin::Page Scripts(used by this page) -->
		<script src="../assets/js/pages/dashboard.js" type="text/javascript"></script>
		<script src="../assets/js/scripts.bundle.js" type="text/javascript"></script>

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/custom/user/list-datatable.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/portlets/tools.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
