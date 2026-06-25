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
              <ul class="nav nav-tabs m-0" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_1">
														<i class="la la-plus-circle"></i> Harga Penawaran
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2">
														<i class="la la-plus-circle"></i> Harga Produksi
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3">
														<i class="la la-plus-circle"></i> Request Order
													</a>
												</li>
											</ul>

                      <div class="tab-content tab-contents">
												<div class="tab-pane active border-bottom" id="kt_tabs_1_1" role="tabpanel">
													<table id="employee_grid" class="table table-condensed table-hover bootgrid-table" cellspacing="0">
														   <thead class="bg-head-table">
														      <tr>
														         <th rowspan="2" width="3%">No</th>
														         <th rowspan="2"  width="30%">Uraian</th>
														         <th rowspan="2"  width="7%">Volume</th>
																		 <th colspan="2"  width="25%" class="text-center">Harga Satuan</th>
																		<th colspan="2"  width="25%" class="text-center">Jumlah</th>
														      </tr>
																	<tr>
																		<th>Material</th>
																		<th>Jasa</th>
																		<th>Material</th>
																		<th>Jasa</th>
																	</tr>
														   </thead>
														   <tbody data-repeater-list="">
														      <tr data-row-id="1" class="bold">
																		<td>1</td>
														         <td contenteditable="true" colspan="4">GATE MASUK MOBIL - DISPENSER SINGLE - OPERATOR</td>
                                     <td class="text-right" colspan="2"><button type="button" class="btn btn-outline-hover-danger"><i class="fa fa-plus-circle"></i> Tambah Uraian</button>
                                     <button type="button" class="btn btn-outline-hover-danger"><i class="fa fa-plus-circle"></i> Tambah Sub Uraian</button></td>
														      </tr>
														      <tr data-row-id="2" data-repeater-item>
																		<td></td>
														         <td> <input list="uraian" name="uraian" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
																			 <datalist id="uraian">
																				 <option>Custom Casing Ticket Dispenser</option>
																				 <option>eP4ss Mini PC Dispense</option>
																				 <option>Printer Thermal</option>
																			 </datalist>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																			 		<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 				<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
																			 	</div>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 		<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 	</div>
																		 </td>
																		 <td>
																			<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 </div>
																		</td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																		 </div>
																	</td>
														      </tr>
																	<tr data-row-id="3">
																		<td></td>
																		 <td> <input list="uraian" name="uraian" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
																			 <datalist id="uraian">
																				 <option>Custom Casing Ticket Dispenser</option>
																				 <option selected="selected">eP4ss Mini PC Dispense</option>
																				 <option>Printer Thermal</option>
																			 </datalist>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																							<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
																				</div>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																				</div>
																		 </td>
																		 <td>
																			<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 </div>
																		</td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="4">
																		<td></td>
																		 <td> <input list="uraian" name="uraian" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
																			 <datalist id="uraian">
																				 <option>Custom Casing Ticket Dispenser</option>
																				 <option selected="selected">eP4ss Mini PC Dispense</option>
																				 <option>Printer Thermal</option>
																			 </datalist>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																							<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
																				</div>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																				</div>
																		 </td>
																		 <td>
																			<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 </div>
																		</td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="5">
																		<td>B</td>
																		 <td> <input list="uraian2" name="uraian" placeholder="IP Camera" class="edit-drop bg-trans">
																			 <datalist id="uraian2">
																				 <option>Custom Casing Ticket Dispenser</option>
																				 <option>eP4ss Mini PC Dispense</option>
																				 <option>Printer Thermal</option>
																				 <option>IP Camera</option>
																			 </datalist>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																							<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
																				</div>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																				</div>
																		 </td>
																		 <td>
																			<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 </div>
																		</td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="6" class="bg-subtotal">
																		<td colspan="5" class="text-right"><h6>Subtotal</h6></td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="1">
																		<td>2</td>
														         <td  contenteditable="true" colspan="4">GATE MASUK MOBIL - DISPENSER SINGLE - OPERATOR </td>
                                     <td class="text-right" colspan="2"><button type="button" class="btn btn-outline-hover-danger"><i class="fa fa-plus-circle"></i> Tambah Uraian</button>
                                     <button type="button" class="btn btn-outline-hover-danger"><i class="fa fa-plus-circle"></i> Tambah Sub Uraian</button></td>
														      </tr>
														      <tr data-row-id="2" data-repeater-item>
																		<td></td>
														         <td> <input list="uraian" name="uraian" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
																			 <datalist id="uraian">
																				 <option>Custom Casing Ticket Dispenser</option>
																				 <option>eP4ss Mini PC Dispense</option>
																				 <option>Printer Thermal</option>
																			 </datalist>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																			 		<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 				<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
																			 	</div>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 		<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 	</div>
																		 </td>
																		 <td>
																			<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 </div>
																		</td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																		 </div>
																	</td>
														      </tr>
																	<tr data-row-id="3">
																		<td></td>
																		 <td> <input list="uraian" name="uraian" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
																			 <datalist id="uraian">
																				 <option>Custom Casing Ticket Dispenser</option>
																				 <option selected="selected">eP4ss Mini PC Dispense</option>
																				 <option>Printer Thermal</option>
																			 </datalist>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																							<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
																				</div>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																				</div>
																		 </td>
																		 <td>
																			<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 </div>
																		</td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="4">
																		<td></td>
																		 <td> <input list="uraian" name="uraian" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
																			 <datalist id="uraian">
																				 <option>Custom Casing Ticket Dispenser</option>
																				 <option selected="selected">eP4ss Mini PC Dispense</option>
																				 <option>Printer Thermal</option>
																			 </datalist>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																							<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
																				</div>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																				</div>
																		 </td>
																		 <td>
																			<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 </div>
																		</td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="5">
																		<td>B</td>
																		 <td> <input list="uraian2" name="uraian" placeholder="IP Camera" class="edit-drop bg-trans">
																			 <datalist id="uraian2">
																				 <option>Custom Casing Ticket Dispenser</option>
																				 <option>eP4ss Mini PC Dispense</option>
																				 <option>Printer Thermal</option>
																				 <option>IP Camera</option>
																			 </datalist>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																							<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
																				</div>
																		 </td>
																		 <td>
																			 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																					<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																				</div>
																		 </td>
																		 <td>
																			<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																						<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			 </div>
																		</td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="6" data-row-id="6" class="bg-subtotal">
																		<td colspan="5" class="text-right"><h6>Subtotal</h6></td>
																		<td>
																		 <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					 <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
																				<input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
																			</div>
																	 </td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2">
																		 </div>
																	</td>
																	</tr>
																	<tr>
																		<td colspan="7"><button type="button" class="btn btn-outline-danger btn-sm"><i class="flaticon2-reload"></i>Pajak yang dipotong</button>
																		<button type="button" class="btn btn-outline-danger btn-sm"><i class="flaticon-file-1"></i>Lampiran</button></td>
																	</tr>
																	<tr data-row-id="6">
																		<td colspan="5" rowspan="3"><label>Catatan</label><textarea name="content" class="form-control" rows="5"></textarea></td>
																		<td class="text-right"><h6>Total</h6></td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="7">
																		<td class="text-right"><h6>Pajak Ppn 10%</h6></td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
																		 </div>
																	</td>
																	</tr>
																	<tr data-row-id="7">
																		<td class="text-right"><h6>Grand Total</h6></td>
																	 <td>
																		<div class="input-group input-group-sm" style="flex-wrap:inherit!important">
																					<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
																			 <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
																		 </div>
																	</td>
																	</tr>
														   </tbody>
														</table>
												</div>
												<div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
													<table id="employee_grid" class="table table-condensed table-hover bootgrid-table" cellspacing="0">
															 <thead class="bg-head-table">
																	<tr>
																		 <th rowspan="2" width="3%">No</th>
																		 <th rowspan="2"  width="28%">Uraian</th>
																		 <th rowspan="2"  width="7%">Volume</th>
																		 <th rowspan="2"  width="7%">Stok Gudang</th>
																		 <th rowspan="2"  width="5%">Selisih Stok</th>
																		 <th colspan="2"  width="20%" class="text-center">Harga Satuan</th>
																		<th colspan="2"  width="20%" class="text-center">Jumlah</th>
																	</tr>
																	<tr>
																		<th>Material</th>
																		<th>Jasa</th>
																		<th>Material</th>
																		<th>Jasa</th>
																	</tr>
															 </thead>
															 <tbody>
																 <tr data-row-id="1" class="bold">
                                   <td>1</td>
                                    <td contenteditable="true" colspan="5">GATE MASUK MOBIL - DISPENSER SINGLE - OPERATOR</td>
                                    <td class="text-right" colspan="3"><button type="button" class="btn btn-outline-hover-danger"><i class="fa fa-plus-circle"></i> Tambah Uraian</button>
                                    <button type="button" class="btn btn-outline-hover-danger"><i class="fa fa-plus-circle"></i> Tambah Sub Uraian</button></td>
                                 </tr>
                                 <tr data-row-id="2" class="bold">
                                   <td></td>
                                    <td contenteditable="true" colspan="8">A. Ticket Dispenser Single</td>
                                 </tr>
                                 <tr data-row-id="3" data-repeater-item>
                                   <td></td>
                                    <td> <input list="uraian" name="uraian" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
                                      <datalist id="uraian">
                                        <option>Custom Casing Ticket Dispenser</option>
                                        <option>eP4ss Mini PC Dispense</option>
                                        <option>Printer Thermal</option>
                                      </datalist>
                                    </td>
                                    <td>
                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                             <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
                                       </div>
                                    </td>
                                    <td>
                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                             <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
                                       </div>
                                    </td>
                                    <td>
                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                             <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
                                       </div>
                                    </td>
                                    <td>
                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                            <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
                                         <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                       </div>
                                    </td>
                                    <td>
                                     <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                           <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
                                        <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                      </div>
                                   </td>
                                   <td>
                                    <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                          <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
                                       <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                     </div>
                                  </td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                    </div>
                                 </td>
                                 </tr>
                                 <tr data-row-id="4" class="bg-subtotal">
                                   <td colspan="7" class="text-right"><h6>Subtotal</h6></td>
                                   <td>
                                    <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                          <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                       <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                     </div>
                                  </td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                    </div>
                                 </td>
                                 </tr>
                                 <tr>
                                   <td colspan="7"><button type="button" class="btn btn-outline-danger btn-sm"><i class="flaticon2-reload"></i>Pajak yang dipotong</button>
                                   <button type="button" class="btn btn-outline-danger btn-sm"><i class="flaticon-file-1"></i>Lampiran</button></td>
                                 </tr>
                                 <tr data-row-id="6">
                                   <td colspan="7" rowspan="3"><label>Catatan</label><textarea name="content" class="form-control" rows="5"></textarea></td>
                                   <td class="text-right"><h6>Total</h6></td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                    </div>
                                 </td>
                                 </tr>
                                 <tr data-row-id="7">
                                   <td class="text-right"><h6>Pajak Ppn 10%</h6></td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                    </div>
                                 </td>
                                 </tr>
                                 <tr data-row-id="7">
                                   <td class="text-right"><h6>Grand Total</h6></td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                    </div>
                                 </td>
                                 </tr>
															 </tbody>
														</table>
												</div>
												<div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
                          <table id="employee_grid" class="table table-condensed table-hover bootgrid-table" cellspacing="0">
															 <thead class="bg-head-table">
																	<tr>
																		 <th rowspan="2" width="3%">No</th>
																		 <th rowspan="2"  width="28%">Uraian</th>
																		 <th rowspan="2"  width="7%">Volume</th>
																		 <th rowspan="2"  width="7%">Stok Gudang</th>
																		 <th rowspan="2"  width="5%">Selisih Stok</th>
																		 <th colspan="2"  width="20%" class="text-center">Harga Satuan</th>
																		<th colspan="2"  width="20%" class="text-center">Jumlah</th>
																	</tr>
																	<tr>
																		<th>Material</th>
																		<th>Jasa</th>
																		<th>Material</th>
																		<th>Jasa</th>
																	</tr>
															 </thead>
															 <tbody>
																 <tr data-row-id="1" class="bold">
                                   <td>1</td>
                                    <td contenteditable="true" colspan="5">GATE MASUK MOBIL - DISPENSER SINGLE - OPERATOR</td>
                                    <td class="text-right" colspan="3"><button type="button" class="btn btn-outline-hover-danger"><i class="fa fa-plus-circle"></i> Tambah Uraian</button>
                                    <button type="button" class="btn btn-outline-hover-danger"><i class="fa fa-plus-circle"></i> Tambah Sub Uraian</button></td>
                                 </tr>
                                 <tr data-row-id="2" class="bold">
                                   <td></td>
                                    <td contenteditable="true" colspan="8">A. Ticket Dispenser Single</td>
                                 </tr>
                                 <tr data-row-id="3" data-repeater-item>
                                   <td></td>
                                    <td> <input list="uraian" name="uraian" placeholder="Custom Casing Ticket Dispenser" class="edit-drop bg-trans">
                                      <datalist id="uraian">
                                        <option>Custom Casing Ticket Dispenser</option>
                                        <option>eP4ss Mini PC Dispense</option>
                                        <option>Printer Thermal</option>
                                      </datalist>
                                    </td>
                                    <td>
                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                             <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
                                       </div>
                                    </td>
                                    <td>
                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                             <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
                                       </div>
                                    </td>
                                    <td>
                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                             <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Unit</span></div>
                                       </div>
                                    </td>
                                    <td>
                                      <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                            <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
                                         <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                       </div>
                                    </td>
                                    <td>
                                     <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                           <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
                                        <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                      </div>
                                   </td>
                                   <td>
                                    <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                          <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
                                       <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                     </div>
                                  </td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text label-table" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-trans" placeholder="" aria-describedby="basic-addon2" style="border:none">
                                    </div>
                                 </td>
                                 </tr>
                                 <tr data-row-id="6" class="bg-subtotal">
                                   <td colspan="7" class="text-right"><h6>Subtotal</h6></td>
                                   <td>
                                    <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                          <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                       <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                     </div>
                                  </td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                    </div>
                                 </td>
                                 </tr>
                                 <tr>
                                   <td colspan="7"><button type="button" class="btn btn-outline-danger btn-sm"><i class="flaticon2-reload"></i>Pajak yang dipotong</button>
                                   <button type="button" class="btn btn-outline-danger btn-sm"><i class="flaticon-file-1"></i>Lampiran</button></td>
                                 </tr>
                                 <tr data-row-id="6">
                                   <td colspan="7" rowspan="3"><label>Catatan</label><textarea name="content" class="form-control" rows="5"></textarea></td>
                                   <td class="text-right"><h6>Total</h6></td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                    </div>
                                 </td>
                                 </tr>
                                 <tr data-row-id="7">
                                   <td class="text-right"><h6>Pajak Ppn 10%</h6></td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                    </div>
                                 </td>
                                 </tr>
                                 <tr data-row-id="7">
                                   <td class="text-right"><h6>Grand Total</h6></td>
                                  <td>
                                   <div class="input-group input-group-sm" style="flex-wrap:inherit!important">
                                         <div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
                                      <input type="number" class="form-control bg-yellow" placeholder="" aria-describedby="basic-addon2" disabled>
                                    </div>
                                 </td>
                                 </tr>
															 </tbody>
														</table>
												</div>

												<div class="kt-form__actions submit-tab ">
															<button type="button" class="btn btn-outline-danger">
																Batal
															</button>
														<div class="btn-group">
																<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Simpan
																</button>
																<div class="dropdown-menu">
																	<h6 class="dropdown-header">Dropdown header</h6>
																	<a class="dropdown-item" href="#">Action</a>
																	<a class="dropdown-item" href="#">Another action</a>
																	<a class="dropdown-item" href="#">Something else here</a>
																	<div class="dropdown-divider"></div>
																	<a class="dropdown-item" href="#">Separated link</a>
																</div>
															</div>
													</div>
											</div>

            </div>





<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
