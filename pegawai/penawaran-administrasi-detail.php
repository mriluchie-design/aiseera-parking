<?php require '../layouts/head.php' ?>
<script src="../assets/dist/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										Project Administrasi
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Detail Penawaran </span>
										
									</div>
									
								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											
											
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
								</div>
      </div>

      <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	  <!--begin:: Widgets/Stats-->
							
								<div class="kt-portlet__body  kt-portlet__body--fit">
									
										<div class="row">
								<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Penawaran</div>
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
													<select class="form-control form-control-sm" disabled="disabled" id="exampleSelects">
														<option>Tender</option>
														<option>Non Tender</option>
														<option>Lainnya</option>
														
													</select>
												</div>
													</div>
													<div class="col-lg-2">
														<label>Tipe Pekerjaan :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects" disabled="disabled">
														<option>Baru</option>
														<option>Maintenance</option>
														<option>Lainnya</option>
														
													</select>
												</div>
													</div>
													<div class="col-lg-2">
														<label>Masa Berlaku :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects" disabled="disabled">
														<option>90 Hari</option>
														<option>60 Hari</option>
														<option>30 Hari</option>
														<option>14 Hari</option>
														<option>7 Hari</option>
														
													</select>
												</div>
												
												</div>
												<div class="col-lg-3">
														<label>Deadline Penawaran :</label>
														<div class="input-group">
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
												
												</div>
												
													
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Client :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
												
												</div>
												
												<div class="col-lg-4">
														<label>PIC Client :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
												
												</div>
												<div class="col-lg-3">
														<label>Kategori Pekerjaan :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" id="exampleSelects" disabled="disabled">
														<option>Application Development</option>
														<option>Custom Web Development</option>
														<option>Videotron</option>
														<option>Mobile Application</option>
														
													</select>
												</div>
													</div>
												
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Nama Pekerjaan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Masukkan Nama Pekerjaan">
												
												</div>
												
												<div class="col-lg-4">
														<label>Lokasi Pekerjaan :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Search..." id="generalSearch">
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lampiran Penawaran - Dokumen Teknis</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div>&nbsp;</div>
												<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  
  <tr style="text-align:center">
    <td width="5%" bgcolor="#f7fcff" >NO</td>
    <td width="50%" bgcolor="#f7fcff">URAIAN DOKUMEN</td>
    <td width="30%" bgcolor="#f7fcff">FILE</td>
    <td width="8%" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled"></td>
    <td width="30%"><input type="email" class="form-control form-control-sm" disabled="disabled"></td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled"></td>
    <td width="30%"><input type="email" class="form-control form-control-sm" disabled="disabled"></td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled"/></td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled"/></td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
</table>
											</div>
										</div>
									</div>
									</div>

									<!--end::Portlet-->
								</div>
								
								<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Administrasi Keuangan</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div>&nbsp;</div>
												<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">
  
  <tr style="text-align:center">
    <td width="5%" bgcolor="#f7fcff" >NO</td>
    <td width="67%" bgcolor="#f7fcff">URAIAN DOKUMEN</td>
    <td width="20%" bgcolor="#f7fcff">STATUS</td>
    <td width="8%" bgcolor="#f7fcff">FILE</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td>Rekening Koran 3 Bulan Terakhir</td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled"></td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled"/></td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
    <td width="8%"><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
</table>
												
													
									</div>
									</div>
									</div>

									<!--end::Portlet-->
								</div>
								</div>
								<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Administrasi Teknis</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Doc Status :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" disabled="disabled" id="exampleSelects">
														<option>Draft</option>
														<option>Final</option>
													</select>
												</div>
													</div>
													<div class="col-lg-6">
														<label>Doc Version :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1.0">
													</div>
													</div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Klasifikasi :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" disabled="disabled" id="exampleSelects">
														<option>Sangat Penting</option>
														<option>Penting</option>
														<option>Biasa</option>
													</select>
												</div>
													</div>
													<div class="col-lg-6">
														<label>Lampiran :</label>
														<div class="form-group">
													<select class="form-control form-control-sm" disabled="disabled" id="exampleSelects">
														<option>1 Berkas</option>
														<option>2 Berkas</option>
														<option>3 Berkas</option>
													</select>
												</div>
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<label>Perihal :</label>
														<textarea class="form-control" disabled="disabled" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
													</div>
													
													
												</div>
												
											<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<label>Tujuan Surat :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Masukkan Tujuan Surat">
													</div>
													
													
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<label>Tanggal Surat :</label>
														<div class="input-group">
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="== Pilih Tanggal ==" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2"><i class="la la-calendar"></i></span></div>
													</div>
													</div>
													
													
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<label>Penanda Tangan Surat :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
													</div>
													
													
												</div>
											</div>
										</div>
									</div>

									<!--end::Portlet-->
								</div>
								</div>
								</div>
										
										
								</div>
							</div>

							<!--end:: Widgets/Stats-->

							<!--begin::Portlet-->

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/custom/user/list-datatable-director.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/datatables/data-sources/html.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
