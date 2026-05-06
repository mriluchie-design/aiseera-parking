<?php require '../layouts/head.php' ?>
<script src="../assets/dist/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
          <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
              Project Director
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
            <div class="kt-subheader__group" id="kt_subheader_search">
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
            <a href="#" class="">
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

      <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--begin::Portlet-->
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__body kt-portlet__body--fit">

									<!--begin: Datatable -->
                  <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded">
                    <table class="kt-datatable" id="kt_apps_user_list_datatable">
                  <thead>
                    <thead class="text-center">
																		<tr>
							                                    <th data-field="RecordID">
							                                        No
							                                    </th>
							                                    <th data-field="IDProject">
							                                        ID Project
							                                    </th>
							                                    <th data-field="Tipe Project">
							                                        Tipe Projects
							                                    </th>
							                                    <th data-field="Nama Project">
							                                        Nama Projects
							                                    </th>
							                                    <th data-field="kategori">
							                                        Kategori
							                                    </th>
							                                    <th data-field="client">
							                                        Client
							                                    </th>
							                                    <th data-field="PIC Client">
							                                        PIC Client
							                                    </th>
                                                  <th data-field="Status">
							                                        Status
							                                    </th>
							                                    <th data-field="Administrasi">
							                                        Administrasi
							                                    </th>
                                                  <th data-field="Pelaksanaan">
							                                        Pelaksanaan
							                                    </th>
                                                  <th data-field="Pembayaran">
							                                        Pembayaran
							                                    </th>
                                                  <th data-field="Penawaran">
							                                       Penawaran
							                                    </th>
							                                    <th data-field="Owner">
							                                        Owner
							                                    </th>
																									<th data-field="Project Manager">
							                                        Project Manager
							                                    </th>
							                                    <th  data-field="Actions">
							                                        Aksi
							                                    </th>
							                          </tr>

																	</thead>
                  <tbody>
                    <tr>
  							                                    <td>
  																										1
  							                                    </td>
  							                                    <td>
  							                                        00001052018
  							                                    </td>
  							                                    <td>
  							                                        Tender
  							                                    </td>
  							                                    <td>
  							                                        <b>Pengerjaan EPass</b>
  							                                    </td>
  							                                    <td>
  																										<span class="btn btn-bold btn-sm btn-font-sm  btn-label-brand">Internal</span>
  							                                    </td>
  							                                    <td>
  							                                        Pelindo IV
  							                                    </td>
  							                                    <td>
  																										HIdayat
  							                                    </td>
                                                    <td>
                                                      <input list="status" name="status" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
                                                      <datalist id="status">
              																				 <option>Revisi</option>
              																				 <option>Batal</option>
              																				 <option>Diterima</option>
              																			 </datalist>
                                                    </td>
  							                                    <td>
  																										<div class="progress" style="height:10px;">
  																											<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
  																										</div>
  							                                    </td>
  							                                    <td>
  																										<div class="progress" style="height:10px;">
  																											<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
  																										</div>
  							                                    </td>
  							                                    <td>
  																										<div class="progress" style="height:10px;">
  																											<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
  																										</div>
  							                                    </td>
  							                                    <td>
                                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
            																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
            																			 		<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
            																			 	</div>
  							                                    </td>
  							                                    <td>
                							                    <div class="kt-user-card-v2">
                																		<div class="kt-user-card-v2__pic">
                																			<img alt="photo" src="../../assets/img/users/100_6.jpg" data-toggle="kt-popover" data-placement="top" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
                                                    </div>
                																		</div>
  							                                    </td>
  																									<td>
                                                      <div class="kt-user-card-v2">
                    																		<div class="kt-user-card-v2__pic">
                    																			<img alt="photo" src="../../assets/img/users/100_6.jpg" data-toggle="kt-popover" data-placement="top" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
                                                        </div>
                    																		</div>
  							                                    </td>
  							                                    <td>
  																										<div class="dropdown dropdown-inline">
  																					<button type="button" class="btn btn-hover-brand btn-elevate-hover btn-icon btn-sm btn-icon-md btn-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  																						<i class="flaticon-more-1"></i>
  																					</button>
  																					<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
  																						<a class="dropdown-item" href="upload-dok-tender.php"><i class="la la-plus"></i> Upload Dokumen Tender</a>
  																						<a class="dropdown-item" href="adm-tender.php"><i class="la la-user"></i> Administrasi Tender</a>
  																						<a class="dropdown-item" href="pengiriman-penawaran.php"><i class="la la-cloud-download"></i> Pengiriman Penawaran</a>
  																						<a class="dropdown-item" href="upload-kontrak.php"><i class="la la-cloud-download"></i>Upload Kontrak</a>

  																					</div>
  																				</div>
  							                                    </td>
  							                                </tr>
                  </tbody>
                </table>
                <div class="kt-datatable__pager kt-datatable--paging-loaded">
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
    <div class="kt-datatable__pager-info">
      <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-selected="10" tabindex="-98">
          <option class="bs-title-option" value=""></option>
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
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
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>
            </div>

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/custom/user/list-datatable-director.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
