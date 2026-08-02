<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->

<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-list-1"></i>
				</span>
				&nbsp;
				&nbsp;
					Pengaturan
			</h3>
<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Tipe Pajak </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
		
		<div class="kt-subheader__toolbar">

				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_tambah_pajak"><i class="fa fa-plus-circle"></i>Tambah Data</button>
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
				</div>
	</div>
</div>

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
																				 <label class="">Tipe Pajak :</label>
																			 <select class="form-control kt-selectpicker" data-live-search="true">
												<option value="1">Pajak Pertambahan Nilai</option>
												<option value="2">Pajak Pertambahan Barang Mewah</option>
												<option value="3">Pajak Penghasilan Ps.4 (2)</option>
												<option value="1">Pajak Penghasilan Ps.15</option>
												<option value="1">Pajak Penghasilan Ps.21</option>
												<option value="1">Pajak Penghasilan Ps.22</option>
												<option value="1">Pajak Penghasilan Ps.23</option>
												
										</select>
																			 </div>
								                        <div class="col-lg-3">
								                          <label class="">Keterangan :</label>
								                        <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
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

																	<div class="kt-portlet kt-portlet--mobile ">
																		<div class="kt-portlet__body">
																			<!--begin: Datatable -->
																			<table class="table table-bordered table-hover table-resizable">
																				<thead>
																					<tr>
																						<th width="7%" bgcolor="#f7fcff" >Pajak Induk</th>
																						<th width="20%" bgcolor="#f7fcff" >Sub Pajak Induk</th>
																						<th width="1%" bgcolor="#f7fcff">Presentase</th>
																						<th width="1%" bgcolor="#f7fcff" >Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td >Pajak Pertambahan Nilai</td>
																					  <td style="text-align:left" nowrap>Pajak Pertambahan Nilai</td>
																					  <td style="text-align:center" nowrap=""><div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="11" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
																				  </tr>
<tr>
																						<td >Pajak Pertambahan Barang Mewah</td>
																					  <td style="text-align:left" nowrap>Pajak Pertambahan Barang Mewah</td>
																					  <td style="text-align:center" nowrap=""><div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="25" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				<tr>
																						<td >Pajak Penghasilan Ps.4 (2)</td>
																					  <td style="text-align:left" nowrap>Sewa Tanah dan/atau Bangunan</td>
																					  <td style="text-align:center" nowrap=""><div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="10" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				<tr>
																						<td >Pajak Penghasilan Ps.4 (2)</td>
																					  <td style="text-align:left" nowrap>Pengalihan Hak atas Tanah dan/atau Bangunan</td>
																					  <td style="text-align:center" nowrap=""><div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2,5" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
																				  </tr>
<tr>
																						<td >Pajak Penghasilan Ps.4 (2)</td>
																					  <td style="text-align:left" nowrap>Jasa pelaksanaan konstruksi usaha kecil</td>
																					  <td style="text-align:center" nowrap=""><div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="1,7" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
																				  </tr>
<tr>
																						<td >Pajak Penghasilan Ps.4 (2)</td>
																					  <td style="text-align:left" nowrap>Jasa pelaksanaan konstruksi menengah atau besar</td>
																					  <td style="text-align:center" nowrap=""><div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2,65" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
																				  </tr>
<tr>
																						<td >Pajak Penghasilan Ps.4 (2)</td>
																					  <td style="text-align:left" nowrap>Jasa pelaksanaan konstruksi lain</td>
																					  <td style="text-align:center" nowrap=""><div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="4" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
																				  </tr>
<tr>
  <td >Pajak Penghasilan Ps.15</td>
  <td style="text-align:left" nowrap>Pelayaran Dalam Negeri</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="1,2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span> </div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span> </a> </li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.15</td>
  <td style="text-align:left" nowrap>Pelayaran/Penerbangan Luar Negeri</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="1,8" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.21</td>
  <td style="text-align:left" nowrap>Pajak Penghasilan Ps.21</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="-" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.22</td>
  <td style="text-align:left" nowrap>Penyerahan barang oleh rekanan kepada pemerintah (APBN/APBD)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="1,5" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.22</td>
  <td style="text-align:left" nowrap>Penjualan barang oleh BUMN/BUMD kepada distributor, agen, pedagang</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="0,3" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.22</td>
  <td style="text-align:left" nowrap>Impor barang yang dipungut oleh Direktorat Jenderal Bea dan Cukai</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="7,5%" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.22</td>
  <td style="text-align:left" nowrap>Penjualan hasil produksi tertentu (semen, kertas, baja, otomotif, farmasi, BBM)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="0" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.22</td>
  <td style="text-align:left" nowrap>Pembelian barang untuk kegiatan usaha tertentu (Pertamina, PLN, dll)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="1,5" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.22</td>
  <td style="text-align:left" nowrap>Penjualan barang sangat mewah (kendaraan, pesawat, kapal, properti)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="5" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Dividen</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="15" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Bunga (Tidak termasuk bunga simpanan yang dibayarkan oleh koperasi kepada WP OP)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="15" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Royalti</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="15" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Hadiah dan penghargaan</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="15" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Sewa dan Penghasilan lain sehubungan dengan penggunaan harta (Kecuali sewa tanah dan bangunan)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Teknik</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Manajemen</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Penilai (Appraisal)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Akuntansi, Pembukuan, Dan Atestasi Laporan Keuangan</td>
 <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Hukum</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Perencanaan kota dan arsitektur landscape</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Perancang (design)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Pengeboran (drilling) di Bidang Penambangan Minyak dan Gas Bumi (Migas),<br>kecuali yang Dilakukan oleh Bentuk Usaha Tetap (BUT) Bumi (Migas), kecuali yang Dilakukan oleh Bentuk Usaha Tetap (BUT)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Penunjang di Bidang Penambangan Migas</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Penambangan dan dan Jasa Penunjang di Bidang Penambangan Selain Migas</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Penunjang di Bidang Penerbangan dan Bandar Udara</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Penebangan Hutan</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Pengolahan Limbah</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Penyedia Tenaga Kerja (outsourcing services)</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Perantara dan/atau Keagenan</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa di Bidang Perdagangan Surat-Surat Berharga, kecuali yang Dilakukan oleh Bursa Efek, KSEI dan KPEI</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Survey</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Sertifikasi</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Pelayanan/Pelabuhan</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Pengangkutan/Ekspedisi</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
  </tr>
<tr>
  <td >Pajak Penghasilan Ps.23</td>
  <td style="text-align:left" nowrap>Jasa Pencetakan/Penerbitan</td>
  <td nowrap="nowrap" style="text-align:center"><div class="input-group">
    <input type="text" class="form-control form-control-sm kt-input-sm" placeholder="2" aria-describedby="basic-addon2" disabled="disabled" />
    <div class="input-group-append"> <span class="input-group-text" id="basic-addon2">%</span></div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_edit_pajak"> <i class="kt-nav__link-icon fa fa-user-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span></a></li>
      </ul>
    </div>
  </div></td>
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
										  </div>
										  </div>
						<!--begin::Modal 1-->
									<div class="modal fade" id="modal_tambah_pajak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH PAJAK</h3>
											</div>
<div class="kt-widget__toolbar"><br>
																	 <span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								
							</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">Tipe Pajak :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
												<option value="1">Pajak Pertambahan Nilai</option>
												<option value="2">Pajak Pertambahan Barang Mewah</option>
												<option value="3">Pajak Penghasilan Ps.4 (2)</option>
												<option value="1">Pajak Penghasilan Ps.15</option>
												<option value="1">Pajak Penghasilan Ps.21</option>
												<option value="1">Pajak Penghasilan Ps.22</option>
												<option value="1">Pajak Penghasilan Ps.23</option>
												
										</select>
													</div>
												



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

<div class="col-lg-12">
														<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm pem" placeholder="Cari/Pilih..." id="generalSearch" disabled>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
												



												
													
													

												</div>
												</div>
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label class="kt-font-brand">Keterangan :</label>
														<input type="text" class="form-control form-control-sm" placeholder="">
													</div>
<div class="col-lg-6">
														<label class="kt-font-brand">Presentase :</label>
														<div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="1" aria-describedby="basic-addon2">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div>
													</div>
													


												
													
													

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
<div class="col-lg-6">
														<label class="kt-font-brand">Akun Pajak Penjualan  :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
											<optgroup label="Pendapatan" class="a">
												<option data-subtext="400001" value="penjualan">Penjualan</option>
												<option data-subtext="400002" value="Pendapatan Usaha">Pendapatan Usaha</option>
												<option data-subtext="400003" value="Retur Penjualan">Retur Penjualan</option>
												<option data-subtext="400004" value="Diskon Penjualan">Diskon Penjualan</option>
											</optgroup>
											<optgroup label="Beban Pokok Penjualan" class="a">
												<option data-subtext="5101" value="Beban Pokok Penjualan">Beban Pokok Penjualan</option>
											</optgroup>
											<optgroup label="Beban" class="a">
												<option data-subtext="600001" value="Beban Iklan">Beban Iklan</option>
												<option data-subtext="600002" value="Beban Komisi">Beban Komisi</option>
												<option data-subtext="600003" value="Beban Bensin, Parkir, Tol Kendaraan">Beban Bensin, Parkir, Tol Kendaraan</option>
												<option data-subtext="600004" value="Beban Gaji, Upah & Honorer">Beban Gaji, Upah & Honorer</option>
												<option data-subtext="600005" value="Beban Bonus, Pesangon & Kompensasi">Beban Bonus, Pesangon & Kompensasi</option>
												<option data-subtext="600006" value="Beban Transportasi Karyawan">Beban Transportasi Karyawan</option>
												<option data-subtext="600007" value="Beban Catering & Makan Karyawan">Beban Catering & Makan Karyawan</option>
												<option data-subtext="600008" value="Beban Tunjangan Kesehatan">Beban Tunjangan Kesehatan</option>
												<option data-subtext="600009" value="Beban Asuransi Karyawan">Beban Asuransi Karyawan</option>
												<option data-subtext="600010" value="Beban THR">Beban THR</option>
												<option data-subtext="600011" value="Beban Listrik">Beban Listrik</option>
												<option data-subtext="600012" value="Beban PDAM">Beban PDAM</option>
												<option data-subtext="600013" value="Beban Telekomunikasi">Beban Telekomunikasi</option>
												<option data-subtext="600014" value="Beban Ekspedisi, POS, & Materai">Beban Ekspedisi, POS, & Materai</option>
												<option data-subtext="600015" value="Beban Perjalanan Dinas">Beban Perjalanan Dinas</option>
												<option data-subtext="600016" value="Beban Perlengkapan Kantor">Beban Perlengkapan Kantor</option>
												<option data-subtext="600017" value="Beban Pajak Penghasilan">Beban Pajak Penghasilan</option>
												<option data-subtext="600018" value="Beban Restribusi & Sumbanga">Beban Restribusi & Sumbangan</option>
												<option data-subtext="600019" value="Beban Sewa Gedung">Beban Sewa Gedung</option>
												<option data-subtext="600020" value="Beban Operasional Lainnya">Beban Operasional Lainnya</option>
												<option data-subtext="600021" value="Beban Penyusutan Gedung">Beban Penyusutan Gedung</option>
												<option data-subtext="600022" value="Beban Penyusutan Kendaraan">Beban Penyusutan Kendaraan</option>
												<option data-subtext="600023" value="Beban Penyusutan Peralatan">Beban Penyusutan Peralatan</option>
												<option data-subtext="600001" value="Beban Inventaris Kantor">Beban Inventaris Kantor</option>
											</optgroup>
											<optgroup label="Beban Lainnya" class="a">
												<option data-subtext="720001" value="Beban Bunga Pinjaman">Beban Bunga Pinjaman</option>
												<option data-subtext="720002" value="Beban Adm.Bank & Buku Cek/Giro">Beban Adm.Bank & Buku Cek/Giro</option>
												<option data-subtext="720003" value="Pajak Jasa Giro">Pajak Jasa Giro</option>
												<option data-subtext="720004" value="Laba/Rugi Terelasasi">Laba/Rugi Terelasasi</option>
												<option data-subtext="720005" value="Laba/Rugi Belum Terealisasi">Laba/Rugi Belum Terealisasi</option>
												<option data-subtext="720006" value="Laba/Rugi Disposisi Aset">Laba/Rugi Disposisi Aset</option>
												<option data-subtext="720007" value="Beban Diluar Usaha Lainnya">Beban Diluar Usaha Lainnya</option>
											</optgroup>
										</select>
													</div>
												
										<div class="col-lg-6">
														<label class="kt-font-brand">Akun Pajak Pembelian :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
											<optgroup label="Pendapatan" class="a">
												<option data-subtext="400001" value="penjualan">Penjualan</option>
												<option data-subtext="400002" value="Pendapatan Usaha">Pendapatan Usaha</option>
												<option data-subtext="400003" value="Retur Penjualan">Retur Penjualan</option>
												<option data-subtext="400004" value="Diskon Penjualan">Diskon Penjualan</option>
											</optgroup>
											<optgroup label="Beban Pokok Penjualan" class="a">
												<option data-subtext="5101" value="Beban Pokok Penjualan">Beban Pokok Penjualan</option>
											</optgroup>
											<optgroup label="Beban" class="a">
												<option data-subtext="600001" value="Beban Iklan">Beban Iklan</option>
												<option data-subtext="600002" value="Beban Komisi">Beban Komisi</option>
												<option data-subtext="600003" value="Beban Bensin, Parkir, Tol Kendaraan">Beban Bensin, Parkir, Tol Kendaraan</option>
												<option data-subtext="600004" value="Beban Gaji, Upah & Honorer">Beban Gaji, Upah & Honorer</option>
												<option data-subtext="600005" value="Beban Bonus, Pesangon & Kompensasi">Beban Bonus, Pesangon & Kompensasi</option>
												<option data-subtext="600006" value="Beban Transportasi Karyawan">Beban Transportasi Karyawan</option>
												<option data-subtext="600007" value="Beban Catering & Makan Karyawan">Beban Catering & Makan Karyawan</option>
												<option data-subtext="600008" value="Beban Tunjangan Kesehatan">Beban Tunjangan Kesehatan</option>
												<option data-subtext="600009" value="Beban Asuransi Karyawan">Beban Asuransi Karyawan</option>
												<option data-subtext="600010" value="Beban THR">Beban THR</option>
												<option data-subtext="600011" value="Beban Listrik">Beban Listrik</option>
												<option data-subtext="600012" value="Beban PDAM">Beban PDAM</option>
												<option data-subtext="600013" value="Beban Telekomunikasi">Beban Telekomunikasi</option>
												<option data-subtext="600014" value="Beban Ekspedisi, POS, & Materai">Beban Ekspedisi, POS, & Materai</option>
												<option data-subtext="600015" value="Beban Perjalanan Dinas">Beban Perjalanan Dinas</option>
												<option data-subtext="600016" value="Beban Perlengkapan Kantor">Beban Perlengkapan Kantor</option>
												<option data-subtext="600017" value="Beban Pajak Penghasilan">Beban Pajak Penghasilan</option>
												<option data-subtext="600018" value="Beban Restribusi & Sumbanga">Beban Restribusi & Sumbangan</option>
												<option data-subtext="600019" value="Beban Sewa Gedung">Beban Sewa Gedung</option>
												<option data-subtext="600020" value="Beban Operasional Lainnya">Beban Operasional Lainnya</option>
												<option data-subtext="600021" value="Beban Penyusutan Gedung">Beban Penyusutan Gedung</option>
												<option data-subtext="600022" value="Beban Penyusutan Kendaraan">Beban Penyusutan Kendaraan</option>
												<option data-subtext="600023" value="Beban Penyusutan Peralatan">Beban Penyusutan Peralatan</option>
												<option data-subtext="600001" value="Beban Inventaris Kantor">Beban Inventaris Kantor</option>
											</optgroup>
											<optgroup label="Beban Lainnya" class="a">
												<option data-subtext="720001" value="Beban Bunga Pinjaman">Beban Bunga Pinjaman</option>
												<option data-subtext="720002" value="Beban Adm.Bank & Buku Cek/Giro">Beban Adm.Bank & Buku Cek/Giro</option>
												<option data-subtext="720003" value="Pajak Jasa Giro">Pajak Jasa Giro</option>
												<option data-subtext="720004" value="Laba/Rugi Terelasasi">Laba/Rugi Terelasasi</option>
												<option data-subtext="720005" value="Laba/Rugi Belum Terealisasi">Laba/Rugi Belum Terealisasi</option>
												<option data-subtext="720006" value="Laba/Rugi Disposisi Aset">Laba/Rugi Disposisi Aset</option>
												<option data-subtext="720007" value="Beban Diluar Usaha Lainnya">Beban Diluar Usaha Lainnya</option>
											</optgroup>
										</select>
													</div>
									</div>
									


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-center">
												<div class="">
<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
    </div>
    </div>
    </div>
	<div class="modal fade" id="modal_edit_pajak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">EDIT PAJAK</h3>
											</div>
<div class="kt-widget__toolbar"><br>
																	 <span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								
							</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">Tipe Pajak :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
												<option value="1">Pajak Pertambahan Nilai</option>
												<option value="2">Pajak Pertambahan Barang Mewah</option>
												<option value="3">Pajak Penghasilan Ps.4 (2)</option>
												<option value="1">Pajak Penghasilan Ps.15</option>
												<option value="1">Pajak Penghasilan Ps.21</option>
												<option value="1">Pajak Penghasilan Ps.22</option>
												<option value="1">Pajak Penghasilan Ps.23</option>
												
										</select>
													</div>
												



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

<div class="col-lg-12">
														<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm pem" placeholder="Cari/Pilih..." id="generalSearch" disabled>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
												



												
													
													

												</div>
												</div>
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label class="kt-font-brand">Keterangan :</label>
														<input type="text" class="form-control form-control-sm" placeholder="">
													</div>
<div class="col-lg-6">
														<label class="kt-font-brand">Presentase :</label>
														<div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="1" aria-describedby="basic-addon2">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">%</span>
													</div>
												</div>
													</div>
													


												
													
													

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
<div class="col-lg-6">
														<label class="kt-font-brand">Akun Pajak Penjualan  :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
											<optgroup label="Pendapatan" class="a">
												<option data-subtext="400001" value="penjualan">Penjualan</option>
												<option data-subtext="400002" value="Pendapatan Usaha">Pendapatan Usaha</option>
												<option data-subtext="400003" value="Retur Penjualan">Retur Penjualan</option>
												<option data-subtext="400004" value="Diskon Penjualan">Diskon Penjualan</option>
											</optgroup>
											<optgroup label="Beban Pokok Penjualan" class="a">
												<option data-subtext="5101" value="Beban Pokok Penjualan">Beban Pokok Penjualan</option>
											</optgroup>
											<optgroup label="Beban" class="a">
												<option data-subtext="600001" value="Beban Iklan">Beban Iklan</option>
												<option data-subtext="600002" value="Beban Komisi">Beban Komisi</option>
												<option data-subtext="600003" value="Beban Bensin, Parkir, Tol Kendaraan">Beban Bensin, Parkir, Tol Kendaraan</option>
												<option data-subtext="600004" value="Beban Gaji, Upah & Honorer">Beban Gaji, Upah & Honorer</option>
												<option data-subtext="600005" value="Beban Bonus, Pesangon & Kompensasi">Beban Bonus, Pesangon & Kompensasi</option>
												<option data-subtext="600006" value="Beban Transportasi Karyawan">Beban Transportasi Karyawan</option>
												<option data-subtext="600007" value="Beban Catering & Makan Karyawan">Beban Catering & Makan Karyawan</option>
												<option data-subtext="600008" value="Beban Tunjangan Kesehatan">Beban Tunjangan Kesehatan</option>
												<option data-subtext="600009" value="Beban Asuransi Karyawan">Beban Asuransi Karyawan</option>
												<option data-subtext="600010" value="Beban THR">Beban THR</option>
												<option data-subtext="600011" value="Beban Listrik">Beban Listrik</option>
												<option data-subtext="600012" value="Beban PDAM">Beban PDAM</option>
												<option data-subtext="600013" value="Beban Telekomunikasi">Beban Telekomunikasi</option>
												<option data-subtext="600014" value="Beban Ekspedisi, POS, & Materai">Beban Ekspedisi, POS, & Materai</option>
												<option data-subtext="600015" value="Beban Perjalanan Dinas">Beban Perjalanan Dinas</option>
												<option data-subtext="600016" value="Beban Perlengkapan Kantor">Beban Perlengkapan Kantor</option>
												<option data-subtext="600017" value="Beban Pajak Penghasilan">Beban Pajak Penghasilan</option>
												<option data-subtext="600018" value="Beban Restribusi & Sumbanga">Beban Restribusi & Sumbangan</option>
												<option data-subtext="600019" value="Beban Sewa Gedung">Beban Sewa Gedung</option>
												<option data-subtext="600020" value="Beban Operasional Lainnya">Beban Operasional Lainnya</option>
												<option data-subtext="600021" value="Beban Penyusutan Gedung">Beban Penyusutan Gedung</option>
												<option data-subtext="600022" value="Beban Penyusutan Kendaraan">Beban Penyusutan Kendaraan</option>
												<option data-subtext="600023" value="Beban Penyusutan Peralatan">Beban Penyusutan Peralatan</option>
												<option data-subtext="600001" value="Beban Inventaris Kantor">Beban Inventaris Kantor</option>
											</optgroup>
											<optgroup label="Beban Lainnya" class="a">
												<option data-subtext="720001" value="Beban Bunga Pinjaman">Beban Bunga Pinjaman</option>
												<option data-subtext="720002" value="Beban Adm.Bank & Buku Cek/Giro">Beban Adm.Bank & Buku Cek/Giro</option>
												<option data-subtext="720003" value="Pajak Jasa Giro">Pajak Jasa Giro</option>
												<option data-subtext="720004" value="Laba/Rugi Terelasasi">Laba/Rugi Terelasasi</option>
												<option data-subtext="720005" value="Laba/Rugi Belum Terealisasi">Laba/Rugi Belum Terealisasi</option>
												<option data-subtext="720006" value="Laba/Rugi Disposisi Aset">Laba/Rugi Disposisi Aset</option>
												<option data-subtext="720007" value="Beban Diluar Usaha Lainnya">Beban Diluar Usaha Lainnya</option>
											</optgroup>
										</select>
													</div>
												
										<div class="col-lg-6">
														<label class="kt-font-brand">Akun Pajak Pembelian :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
											<optgroup label="Pendapatan" class="a">
												<option data-subtext="400001" value="penjualan">Penjualan</option>
												<option data-subtext="400002" value="Pendapatan Usaha">Pendapatan Usaha</option>
												<option data-subtext="400003" value="Retur Penjualan">Retur Penjualan</option>
												<option data-subtext="400004" value="Diskon Penjualan">Diskon Penjualan</option>
											</optgroup>
											<optgroup label="Beban Pokok Penjualan" class="a">
												<option data-subtext="5101" value="Beban Pokok Penjualan">Beban Pokok Penjualan</option>
											</optgroup>
											<optgroup label="Beban" class="a">
												<option data-subtext="600001" value="Beban Iklan">Beban Iklan</option>
												<option data-subtext="600002" value="Beban Komisi">Beban Komisi</option>
												<option data-subtext="600003" value="Beban Bensin, Parkir, Tol Kendaraan">Beban Bensin, Parkir, Tol Kendaraan</option>
												<option data-subtext="600004" value="Beban Gaji, Upah & Honorer">Beban Gaji, Upah & Honorer</option>
												<option data-subtext="600005" value="Beban Bonus, Pesangon & Kompensasi">Beban Bonus, Pesangon & Kompensasi</option>
												<option data-subtext="600006" value="Beban Transportasi Karyawan">Beban Transportasi Karyawan</option>
												<option data-subtext="600007" value="Beban Catering & Makan Karyawan">Beban Catering & Makan Karyawan</option>
												<option data-subtext="600008" value="Beban Tunjangan Kesehatan">Beban Tunjangan Kesehatan</option>
												<option data-subtext="600009" value="Beban Asuransi Karyawan">Beban Asuransi Karyawan</option>
												<option data-subtext="600010" value="Beban THR">Beban THR</option>
												<option data-subtext="600011" value="Beban Listrik">Beban Listrik</option>
												<option data-subtext="600012" value="Beban PDAM">Beban PDAM</option>
												<option data-subtext="600013" value="Beban Telekomunikasi">Beban Telekomunikasi</option>
												<option data-subtext="600014" value="Beban Ekspedisi, POS, & Materai">Beban Ekspedisi, POS, & Materai</option>
												<option data-subtext="600015" value="Beban Perjalanan Dinas">Beban Perjalanan Dinas</option>
												<option data-subtext="600016" value="Beban Perlengkapan Kantor">Beban Perlengkapan Kantor</option>
												<option data-subtext="600017" value="Beban Pajak Penghasilan">Beban Pajak Penghasilan</option>
												<option data-subtext="600018" value="Beban Restribusi & Sumbanga">Beban Restribusi & Sumbangan</option>
												<option data-subtext="600019" value="Beban Sewa Gedung">Beban Sewa Gedung</option>
												<option data-subtext="600020" value="Beban Operasional Lainnya">Beban Operasional Lainnya</option>
												<option data-subtext="600021" value="Beban Penyusutan Gedung">Beban Penyusutan Gedung</option>
												<option data-subtext="600022" value="Beban Penyusutan Kendaraan">Beban Penyusutan Kendaraan</option>
												<option data-subtext="600023" value="Beban Penyusutan Peralatan">Beban Penyusutan Peralatan</option>
												<option data-subtext="600001" value="Beban Inventaris Kantor">Beban Inventaris Kantor</option>
											</optgroup>
											<optgroup label="Beban Lainnya" class="a">
												<option data-subtext="720001" value="Beban Bunga Pinjaman">Beban Bunga Pinjaman</option>
												<option data-subtext="720002" value="Beban Adm.Bank & Buku Cek/Giro">Beban Adm.Bank & Buku Cek/Giro</option>
												<option data-subtext="720003" value="Pajak Jasa Giro">Pajak Jasa Giro</option>
												<option data-subtext="720004" value="Laba/Rugi Terelasasi">Laba/Rugi Terelasasi</option>
												<option data-subtext="720005" value="Laba/Rugi Belum Terealisasi">Laba/Rugi Belum Terealisasi</option>
												<option data-subtext="720006" value="Laba/Rugi Disposisi Aset">Laba/Rugi Disposisi Aset</option>
												<option data-subtext="720007" value="Beban Diluar Usaha Lainnya">Beban Diluar Usaha Lainnya</option>
											</optgroup>
										</select>
													</div>
									</div>
									


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-center">
												<div class="">
<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
    </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
  

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/file-upload/dropzonejs.js" type="text/javascript"></script>
<script src="../assets/dist/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="../assets/dist/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script>
$("#show").click(function(){
    $(".tampil").show();
  });
  $("#hide1").click(function(){
      $(".tampil").hide();
    });
    $("#hide2").click(function(){
        $(".tampil").hide();
      });
</script>
<?php require '../layouts/foot.php' ?>