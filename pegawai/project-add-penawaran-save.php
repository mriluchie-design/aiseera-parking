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
																<span>1</span> Setup Penawaran
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>2</span> Atribut Surat Penawaran
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>3</span> RAB Penawaran
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</div>
													<div class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>4</span> RAB Produksi
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
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="form-group row">
													<div class="col-lg-1">
														<label>ID Penawaran :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1102019">
													</div>
													<div class="col-lg-1">
														<label>Tipe Pekerjaan :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Baru</option>
														<option>Maintenance</option>
														<option>Lainnya</option>
														
													</select>
												</div>
													</div>
													<div class="col-lg-2">
														<label>Tipe Pemasukan Penawaran :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Tender</option>
														<option>Non Tender</option>
														
													</select>
												</div>
												
												</div>
												<div class="col-lg-2">
														<label class="">Tanggal Penawaran :</label>
														<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
													</div>
													<div class="col-lg-2">
														<label class="">Deadline Penawaran :</label>
														<div class="input-group">
														<input type="text" class="form-control form-control-sm" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
													</div>
													<div class="col-lg-2">
														<label>Kategori Pekerjaan :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Appplication Development</option>
														<option>Corporate Branding</option>
														<option>Videotron</option>
														<option>Visitor Management System</option>
														<option>Access Door</option>
														
													</select>
												</div>
												
												</div>
													<div class="col-lg-2">
														<label>Masa Berlaku Penawaran :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>Tender</option>
														<option>Non Tender</option>
														
													</select>
												</div>
												
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-4">
														<label>Nama Pekerjaan :</label>
														<input type="email" class="form-control form-control-sm" placeholder="Masukkan Nama Pekerjaan">
													</div>
													<div class="col-lg-4">
														<label>Client :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>== Pilih Client ==</option>
														<option>== Tambah Data ==</option>
														
													</select>
												</div>
													</div>
													<div class="col-lg-4">
														<label>PIC Client :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects">
														<option>== Pilih PIC Client ==</option>
														<option>== Tambah Data ==</option>
														
													</select>
												</div>
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

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td rowspan="2" width="1%";><strong>NO</strong></td>
    <td rowspan="2" width="25%"><strong>URAIAN</strong></td>
    <td rowspan="2" width="2%"><strong>VOL</strong></td>
    <td rowspan="2" width="2%"><strong>SATUAN</strong></td>
    <td colspan="2" width="10%"><strong>HARGA SATUAN</strong></td>
    <td colspan="2" width="10%"><strong>JUMLAH</strong></td>
  </tr>
  <tr style="text-align:center">
    <td width="10%"><strong>MATERIAL</strong></td>
    <td width="10%"><strong>JASA</strong></td>
    <td width="10%"><strong>MATERIAL</strong></td>
    <td width="10%"><strong>JASA</strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="10%">&nbsp;</td>
  </tr>
</table>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 3-->

												<!--begin: Form Wizard Step 4-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  <tr style="text-align:center">
    <td rowspan="3" width="2%";><strong>NO</strong></td>
    <td colspan="2" rowspan="3"><strong>URAIAN</strong></td>
    <td rowspan="3" width="2%"><strong>VOL</strong></td>
    <td rowspan="3" width="4%"><strong>SATUAN</strong></td>
    <td colspan="4" bgcolor="#FFFFCC"><strong>PENAWARAN</strong></td>
    <td colspan="4" bgcolor="#CCFFCC"><strong>PRODUKSI<strong></td>
    <td colspan="2" bgcolor="#33FFFF"><strong>SELISIH</strong></td>
  </tr>
  <tr style="text-align:center">
    <td colspan="2" ><strong>HARGA SATUAN</strong></td>
    <td colspan="2" ><strong>JUMLAH</strong></td>
    <td colspan="2" ><strong>HARGA SATUAN</strong></td>
    <td colspan="2" ><strong>JUMLAH</strong></td>
    <td colspan="2" ><strong>JUMLAH</strong></td>
  </tr>
  <tr style="text-align:center">
    <td width="6%" ><strong>MATERIAL</strong></td>
    <td width="5%" ><strong>JASA</strong></td>
    <td width="6%" ><strong>MATERIAL</strong></td>
    <td width="5%" ><strong>JASA</strong></td>
    <td width="6%" ><strong>MATERIAL</strong></td>
    <td width="5%" ><strong>JASA</strong></td>
    <td width="6%" ><strong>MATERIAL</strong></td>
    <td width="5%" ><strong>JASA</strong></td>
    <td width="6%" ><strong>MATERIAL</strong></td>
    <td width="5%" ><strong>JASA</strong></td>
  </tr>
  <tr>
    <td style="text-align:center">A</td>
    <td colspan="14">Gate 2 - Jalur In Mobil</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td colspan="14">Material Dispenser</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="text-align:center">a</td>
    <td>Cashing Ticket Dispenser Ticket - Single</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
    <td>Rp.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="2%"style="text-align:center">b</td>
    <td width="21%">Monitor Display 20 Inch</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td colspan="2">IP Camera</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
    <td width="6%">Rp.</td>
    <td width="5%">Rp.</td>
  </tr>
</table>
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

						<!-- end:: Content -->
						
                
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
