<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>



      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Form Perjalanan Dinas Pegawai
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>
										</div>
								</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<!-- begin:: Content -->

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
							<!--begin:: Portlet-->
              <div class="row">
              <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">
                    <div class="kt-portlet__body">
                      <div class="row">
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

								<!--begin: Form Wizard Nav -->
								<div class="kt-wizard-v4__nav">
									<div class="kt-wizard-v4__nav-items">

										<!--doc: Replace A tag with SPAN tag to disable the step link click -->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-globe"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form Perjalanan Dinas
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Isikan Detail Perjalanan Dinas
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
													<i class="flaticon-bus-stop"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Kas Keluar Sementara
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Rincian Biaya Perjalanan Dinas
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
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
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">
											<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Perjalanan Dinas</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-2">
                          <label>Pemberi Tugas :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">
                        </div>

                        <div class="col-lg-2">
                          <label>Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
                        <div class="col-lg-2">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Development">
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label>Tipe Perjalanan Dinas :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Project</option>
                              <option value="3">Operasional Kantor</option>

                          </select>
                        </div>
						<div class="col-lg-2">
                          <label>Jenis Perjalanan Dinas :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Dalam Negeri</option>
                              <option value="3">Luar Negeri</option>

                          </select>
                        </div>
						<div class="col-lg-2">
                          <label>Transportasi :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Pesawat Udara</option>
                              <option value="3">Kapal</option>
                              <option value="3">Kendaraan Pribadi</option>
                              <option value="3">Kendaraan Dinas</option>

                          </select>
                        </div>
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">

                        <div class="col-lg-2">
                          <label class="">Tanggal Berangkat :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="Select date" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label class="">Estimasi Tanggal Kembali :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="Select date" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
                        <div class="col-lg-2">
                          <label>Tempat Berangkat :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Makassar</option>
                              <option value="3">Manado</option>

                          </select>
                        </div>

						<div class="col-lg-2">
                          <label>Tujuan :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Samarinda</option>
                              <option value="3">Balikpapan</option>

                          </select>
                        </div>
						<div class="col-lg-4">
                          <label>Maksud Perjalanan Dinas :</label>
                      <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                        </div>
                      </div>
                      </div>
                    </div>
							<!--end:: Portlet-->

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pelaksana</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
                        <table class="table-responsive table table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tbody><tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">NO</td>
    <td width="20%" bgcolor="#f7fcff">Nama Pegawai</td>
    <td width="20%" bgcolor="#f7fcff">Department</td>
    <td width="20%" bgcolor="#f7fcff">Jabatan</td>
    <td width="30%" bgcolor="#f7fcff">Keterangan</td>
    <td width="5%" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">9130006 - Deddy Rafsanjani, S.Sos</option>
                              <option value="HI">9130014 - Nurul Insani Budhi Artha, A. Md</option>
                            </select></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Information Technology"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Network & Infrastructure Manager "></td>
    <td><input type="text" class="form-control form-control-sm"  placeholder="">
													</div></td>
    <td><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
   <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">9130008 - Wahyu Djunaedi</option>
                              <option value="HI">9130014 - Nurul Insani Budhi Artha, A. Md</option>
                            </select></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Teknis"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor"></td>
    <td><input type="text" class="form-control form-control-sm"  placeholder="">
													</div></td>
    <td><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
 <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">9130019 - Ade Rismawan</option>
                              <option value="HI">9130014 - Nurul Insani Budhi Artha, A. Md</option>
                            </select></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Teknis"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant"></td>
    <td><input type="text" class="form-control form-control-sm"  placeholder="">
													</div></td>
    <td><button type="button" class="btn btn-outline-success btn-sm btn-icon"><i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
</tbody></table>
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->
										</div>



								</div>
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tbody><tr style="text-align:center">
    <td width="1%" rowspan="2" bgcolor="#f7fcff">NO</td>
    <td width="15%" colspan="2" rowspan="2" bgcolor="#f7fcff">URAIAN </td>
    <td colspan="2" bgcolor="#f7fcff">VOL I</td>
    <td colspan="2" bgcolor="#f7fcff">VOL II</td>
    <td colspan="2" bgcolor="#f7fcff">HARGA SATUAN</td>
    <td colspan="2" bgcolor="#f7fcff">JUMLAH</td>
    <td width="3%" rowspan="2" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">VOL</td>
    <td width="3%" bgcolor="#f7fcff">SATUAN</td>
	<td width="1%" bgcolor="#f7fcff">VOL</td>
    <td width="3%" bgcolor="#f7fcff">SATUAN</td>
    <td width="6%" bgcolor="#f7fcff">MATERIAL</td>
    <td width="6%" bgcolor="#f7fcff">JASA</td>
    <td width="6%" bgcolor="#f7fcff">MATERIAL</td>
    <td width="6%" bgcolor="#f7fcff">JASA</td>
  </tr>
  <tr style="text-align:center">
    <td bgcolor="#f5f5f5">a</td>
    <td colspan="2" bgcolor="#f5f5f5">b</td>
    <td bgcolor="#f5f5f5">c</td>
    <td bgcolor="#f5f5f5">d</td>
    <td bgcolor="#f5f5f5">e</td>
    <td bgcolor="#f5f5f5">f</td>
    <td bgcolor="#f5f5f5">g</td>
    <td bgcolor="#f5f5f5">h</td>
    <td bgcolor="#f5f5f5">i = (c x e x g)</td>
    <td bgcolor="#f5f5f5">j = (c x e x h)</td>
    <td bgcolor="#f5f5f5">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td colspan="2"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Penginapan"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2" style="text-align:center" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kamar" style="text-align:center" /></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                      300.000,-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                    4.200.000,-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-" style="text-align:center"></td>

    <td width="3%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"> <i class="fa fa-plus-circle"></i> </span> <span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"> <i class="fa fa-trash-alt"></i> </span></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td colspan="2"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Saku"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Deddy Rafsanjani, S.Sos" /></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Orang" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                      125.000,-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                      875.000,-" style="text-align:center"></td>
    <td width="3%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"> <i class="fa fa-plus-circle"></i> </span> <span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"> <i class="fa fa-trash-alt"></i> </span></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td style="text-align:center">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Wahyu Djunaedi" /></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Orang" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                      100.000,-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                      700.000,-" style="text-align:center"></td>
    <td width="3%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"> <i class="fa fa-plus-circle"></i> </span> <span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"> <i class="fa fa-trash-alt"></i> </span></td>
  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td style="text-align:center">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ade Rismawan" /></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Orang" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                       75.000,-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-" style="text-align:center"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                      525.000,-" style="text-align:center"></td>
    <td width="3%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"> <i class="fa fa-plus-circle"></i> </span> <span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"> <i class="fa fa-trash-alt"></i> </span></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td colspan="2"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Transportasi</option>
                              <option value="HI">Uang Saku</option>
                              <option value="HI">Lainnya</option>
                            </select></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm" id="exampleSelects">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
    </div></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm" id="exampleSelects">
        <option>Hari</option>
        <option>Ls</option>
        <option>Pieces</option>
        <option>Roll</option>
        <option>Box</option>
        </select>
      </div></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm" id="exampleSelects">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
    </div></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm" id="exampleSelects">
        <option>Hari</option>
        <option>Ls</option>
        <option>Pieces</option>
        <option>Roll</option>
        <option>Box</option>
        </select>
      </div></td>
    <td><input type="text" class="form-control form-control-sm" ></td>
    <td><input type="text" class="form-control form-control-sm"></td>
    <td><input type="text" class="form-control form-control-sm" ></td>
    <td><input type="text" class="form-control form-control-sm" ></td>

    <td width="3%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"> <i class="fa fa-plus-circle"></i> </span> <span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"> <i class="fa fa-trash-alt"></i> </span></td>
  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td colspan="2"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Komunikasi</option>
                              <option value="HI">Transportasi</option>
                              <option value="HI">Uang Saku</option>
                              <option value="HI">Lainnya</option>
                            </select></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm" id="exampleSelects">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
    </div></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm" id="exampleSelects">
        <option>Hari</option>
        <option>Ls</option>
        <option>Pieces</option>
        <option>Roll</option>
        <option>Box</option>
        </select>
      </div></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm" id="exampleSelects">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
    </div></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm" id="exampleSelects">
        <option>Hari</option>
        <option>Ls</option>
        <option>Pieces</option>
        <option>Roll</option>
        <option>Box</option>
        </select>
      </div></td>
    <td><input type="text" class="form-control form-control-sm" ></td>
    <td><input type="text" class="form-control form-control-sm"></td>
    <td><input type="text" class="form-control form-control-sm" ></td>
    <td><input type="text" class="form-control form-control-sm" ></td>

    <td width="3%" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded"> <i class="fa fa-plus-circle"></i> </span> <span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded"> <i class="fa fa-trash-alt"></i> </span></td>
  </tr>
  <tr>
    <td colspan="12" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" style="text-align:right" bgcolor="#feffed"><strong>TOTAL </strong></td>
    <td bgcolor="#feffed"><b>Rp.</b></td>
    <td bgcolor="#feffed"><b>Rp.</b></td>
    <td style="text-align:center" bgcolor="#feffed">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10" style="text-align:right" bgcolor="#feffed"><b>GRAND TOTAL </b></td>
    <td bgcolor="#feffed"><b>Rp.</b></td>
    <td style="text-align:center" bgcolor="#feffed">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" style="text-align:left" bgcolor="#f7fcff"><b>Terbilang :</b></td>
  </tr>
</tbody></table>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-heading kt-heading--md">Enter your Payment Details</div>
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
																<div class="row">
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label>Name on Card</label>
																			<input type="text" class="form-control" name="ccname" placeholder="Card Name" value="John Wick">
																			<span class="form-text text-muted">Please enter your Card Name.</span>
																		</div>
																	</div>
																	<div class="col-xl-6">
																		<div class="form-group">
																			<label>Card Number</label>
																			<input type="text" class="form-control" name="ccnumber" placeholder="Card Number" value="4444 3333 2222 1111">
																			<span class="form-text text-muted">Please enter your Address.</span>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-xl-4">
																		<div class="form-group">
																			<label>Card Expiry Month</label>
																			<input type="number" class="form-control" name="ccmonth" placeholder="Card Expiry Month" value="01">
																			<span class="form-text text-muted">Please enter your Card Expiry Month.</span>
																		</div>
																	</div>
																	<div class="col-xl-4">
																		<div class="form-group">
																			<label>Card Expiry Year</label>
																			<input type="number" class="form-control" name="ccyear" placeholder="Card Expire Year" value="21">
																			<span class="form-text text-muted">Please enter your Card Expiry Year.</span>
																		</div>
																	</div>
																	<div class="col-xl-4">
																		<div class="form-group">
																			<label>Card CVV Number</label>
																			<input type="password" class="form-control" name="cccvv" placeholder="Card CVV Number" value="123">
																			<span class="form-text text-muted">Please enter your Card CVV Number.</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-heading kt-heading--md">Review your Details and Submit</div>
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__review">
																<div class="kt-wizard-v4__review-item">
																	<div class="kt-wizard-v4__review-title">
																		Your Account Details
																	</div>
																	<div class="kt-wizard-v4__review-content">
																		John Wick<br />
																		Phone: +61412345678<br />
																		Email: johnwick@reeves.com
																	</div>
																</div>
																<div class="kt-wizard-v4__review-item">
																	<div class="kt-wizard-v4__review-title">
																		Your Address Details
																	</div>
																	<div class="kt-wizard-v4__review-content">
																		Address Line 1<br />
																		Address Line 2<br />
																		Melbourne 3000, VIC, Australia
																	</div>
																</div>
																<div class="kt-wizard-v4__review-item">
																	<div class="kt-wizard-v4__review-title">
																		Payment Details
																	</div>
																	<div class="kt-wizard-v4__review-content">
																		Card Number: xxxx xxxx xxxx 1111<br />
																		Card Name: John Wick<br />
																		Card Expiry: 01/21
																	</div>
																</div>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 4-->

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


                    </div>

									</div>
									</div>

							<!--end:: Portlet-->


          </div>
        </div>

<?php require '../layouts/footer.php' ?>
<script src="../assets/dist/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="../assets/js/pages/custom/wizard/wizard-4.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
