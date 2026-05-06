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
											Realisasi Biaya Perjalanan Dinas Pegawai
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
													<i class="flaticon2-website"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Data
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Perjalanan Dinas
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
													<i class="flaticon-notepad"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Realisasi Biaya
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Perjalanan Dinas
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
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE">
                        </div>

                        <div class="col-lg-2">
                          <label>Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">
                        </div>
                        <div class="col-lg-2">
                          <label class="">Department :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label>Tipe Perjalanan Dinas :</label>
                     <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Operasional Kantor">
                        </div>
						<div class="col-lg-2">
                          <label>Jenis Perjalanan Dinas :</label>
                      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Luar Daerah Sulawesi Selatan">
                        </div>
						<div class="col-lg-2">
                          <label>Transportasi :</label>
                      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pesawat Udara">
                        </div>
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">

                        <div class="col-lg-2">
                          <label class="">Tanggal Berangkat :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="22 Desember 2022">
                        </div>
						<div class="col-lg-2">
                          <label class="">Estimasi Tanggal Kembali :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="29 Desember 2022">
                        </div>
                        <div class="col-lg-2">
                          <label>Tempat Berangkat :</label>
                      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">
                        </div>

						<div class="col-lg-2">
                          <label>Tujuan :</label>
                      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Jakarta">
                        </div>
						<div class="col-lg-4">
                          <label>Maksud Perjalanan Dinas :</label>
                      <textarea class="form-control" id="exampleTextarea" rows="4" disabled="disabled" placeholder="Melakukan Kordinasi dengan Jukir"></textarea>
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
    <td width="15%" bgcolor="#f7fcff">Nama Pegawai</td>
    <td width="7%" bgcolor="#f7fcff">NIP</td>
    <td width="20%" bgcolor="#f7fcff">Department</td>
    <td width="20%" bgcolor="#f7fcff">Bagian</td>
    <td width="20%" bgcolor="#f7fcff">Jabatan</td>
    <td width="5%" bgcolor="#f7fcff">Tipe Pegawai</td>
    <td width="5%" bgcolor="#f7fcff">Kantor</td>
   
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
													</div></td>
    </tr>
   <tr>
    <td style="text-align:center">2</td>
     <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad"></td>
     <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 002"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
	 <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
													</div></td>
    
  </tr>
 <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary">
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 003">
	</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
	 <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
													</div></td>
   

  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin">
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 004">
	</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
	 <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
													</div></td>
   
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir">
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 005">
	</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
	 <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
													</div></td>
    
  </tr>
  <tr>
    <td style="text-align:center">6</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM">
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 006">
	</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
	 <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
													</div></td>
    
  </tr>
  <tr>
    <td style="text-align:center">7</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
	</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
	 <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
													</div></td>
   
  </tr>
  <tr>
    <td style="text-align:center">8</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE">
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 007">
	</td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan"></td>
	<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kontrak"></td>
	 <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
													</div></td>
    
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
    <td width="1%" bgcolor="#f7fcff">NO</td>
    <td width="10%" colspan="2" bgcolor="#f7fcff">URAIAN </td>
    <td width="10%" bgcolor="#f7fcff">JABATAN / GOLONGAN</td>
    <td colspan="2" bgcolor="#f7fcff">VOL</td>
    <td width="6%" bgcolor="#f7fcff">ESTIMASI</td>
    <td width="6%" bgcolor="#f7fcff">REALISASI</td>
    <td width="6%" bgcolor="#f7fcff">SELISIH</td>
  </tr>
  <tr style="text-align:center">
    <td bgcolor="#f5f5f5">a</td>
    <td colspan="2" bgcolor="#f5f5f5">b</td>
    <td bgcolor="#f5f5f5">c</td>
    <td width="1%" bgcolor="#f5f5f5">d</td>
    <td width="1%" bgcolor="#f5f5f5">e</td>
    <td bgcolor="#f5f5f5">f</td>
    <td bgcolor="#f5f5f5">g</td>
    <td bgcolor="#f5f5f5">h (g-f)</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Penginapan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td style="text-align:center" width="1%">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
     <td style="text-align:left">
       <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
	</tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left"  class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Saku"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.850.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.850.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.150.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.150.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
<tr>
    <td style="text-align:center">3</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Makan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td></tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.800.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.800.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Transportasi Setempat"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.150.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.150.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.450.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.450.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.400.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.400.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Biaya Berangkat dan Kepulangan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
       <td><div class="input-group input-group-sm">
         <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
         <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1" />
         <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
       </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
       <td><div class="input-group input-group-sm">
         <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
         <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1" />
         <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
       </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
       <td><div class="input-group input-group-sm">
         <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
         <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1" />
         <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
       </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
       <td><div class="input-group input-group-sm">
         <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
         <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1" />
         <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
       </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
      <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
      <td><div class="input-group input-group-sm">
        <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
        <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
        <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
      </div></td>
	   </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.100.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">6</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Transportasi"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Yulianti Tomu, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">c</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Christofher Rio Aviary" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Operasional" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">d</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mu’amar Nor Amin" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Keuangan" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">e</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Zulfadli Syahrir" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">f</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ir. Asrarudin Mamonto, MM" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">g</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	 </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">h</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mahdinar, SE" /></td>
   <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan" style="text-align:center">
      </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
     <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
     <td><div class="input-group input-group-sm">
       <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
       <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
       <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
     </div></td>
	  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td colspan="2"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Transportasi</option>
                              <option value="HI">Uang Saku</option>
                              <option value="HI">Lainnya</option>
                            </select></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" style="text-align:center"></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">- Pilih -</option>
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
							  <option value="AK">7</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
							  <option value="AK">- Pilih -</option>
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
	</tr>
  
  <tr>
    <td style="text-align:center">4</td>
    <td colspan="2"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Komunikasi</option>
                              <option value="HI">Transportasi</option>
                              <option value="HI">Uang Saku</option>
                              <option value="HI">Lainnya</option>
                            </select></td>
    <td><input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="" style="text-align:center"></td>
    <td><div class="form-group">
      <select class="form-control form-control-sm kt-selectpicker" id="exampleSelects">
         <option value="AK">- Pilih -</option>
		<option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
    </div></td>
    <td><div class="form-group">
      <select class="form-control kt-selectpicker" data-live-search="true">
         <option value="AK">- Pilih -</option>
		<option>Hari</option>
        <option>Ls</option>
        <option>Pieces</option>
        <option>Roll</option>
        <option>Box</option>
        </select>
    </div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="0" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
	</tr>
  <tr>
    <td colspan="9" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" style="text-align:right" bgcolor="#feffed"><strong>TOTAL BIAYA </strong></td>
    <td bgcolor="#feffed"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="7.000.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td bgcolor="#feffed"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="7.000.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td style="text-align:center" bgcolor="#feffed"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
   
  </tr>
 
  <tr>
    <td colspan="9" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" style="text-align:left" bgcolor="#f7fcff"><b>Terbilang :</b></td>
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
															Kembali
														</button>
														<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
															Simpan
														</button>
														<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
															Selanjutnya
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
            </div>


									<!--End::Portlet-->
								</div>

									<!--end:: Widgets/Notifications-->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
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

<?php require '../layouts/footer.php' ?>
<script src="../assets/dist/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./../assets/js/pages/custom/wizard/wizard-4.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
