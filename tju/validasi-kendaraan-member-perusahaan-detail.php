<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>



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
											Detail Kendaraan Member
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
													<i class="fa fa-car"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Data Kendaraan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Roda Empat / Mobil
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
														Data Kendaraan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Roda Dua / Motor
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
												</div>
											</div>
										</div>
										
										
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-box-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview Surat
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Cetak Surat Pemberhentian
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													5
												</div>
											</div>
										</div>-->
									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tbody><tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff">NO</td>
    <td width="3%" bgcolor="#f7fcff">ID NFC<br>KENDARAAN</td>
    <td width="2%" bgcolor="#f7fcff">NO. PLAT<br>KENDARAAN</td>
    <td width="6%" bgcolor="#f7fcff">NAMA PEMILIK</td>
    <td width="9%" bgcolor="#f7fcff">ALAMAT PEMILIK</td>
    <td width="6%" bgcolor="#f7fcff">MERK<br>/ TYPE</td>
    <td width="2%" bgcolor="#f7fcff">JENIS<br>/ MODEL</td>
    <td width="1%" bgcolor="#f7fcff">TAHUN<br>PEMBUATAN</td>
    <td width="5%" bgcolor="#f7fcff">NOMOR<br>RANGKA</td>
    <td width="3%" bgcolor="#f7fcff">NOMOR<br>MESIN</td>
    <td width="1%" bgcolor="#f7fcff">Aksi</td>
  </tr>
  <tr>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1" /></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="002DD516A51351" /></td>
    <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="DD 1111 LUU" /></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" style="text-align:left">
      </div></td>
    <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="VILLA SURYA MAS J/9 MKS RT 006 RW 003 BORONG" /></td>
    <td style="text-align:left">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="INNOVA ZENIX Q MODELISTA" style="text-align:left">
      </div></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="MINIBUS" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2023" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="MHRGK5860JJ807780" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="006079598" /></td>
    <td style="text-align:center"><button type="button" class="btn btn-outline-info btn-elevate btn-icon btn-icon btn-sm" data-toggle="modal" data-target="#modal_kantor" data-skin="brand" title="" data-html="true" data-original-title="Lihat Detail"><i class="fa fa-eye"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2" /></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="002DD516A51352" /></td>
    <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="DD 1111 LU" /></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" style="text-align:left">
      </div></td>
    <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="VILLA SURYA MAS J/9 MKS RT 006 RW 003 BORONG" /></td>
    <td style="text-align:left">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="XTRAIL 2.0" style="text-align:left">
      </div></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="MINIBUS" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2011" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="MHRGK5860JJ807781" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="006079599" /></td>
    <td style="text-align:center"><button type="button" class="btn btn-outline-info btn-elevate btn-icon btn-icon btn-sm" data-toggle="modal" data-target="#modal_kantor" data-skin="brand" title="" data-html="true" data-original-title="Lihat Detail"><i class="fa fa-eye"></i></button></td>
  </tr>
</tbody></table>
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
    <td width="3%" bgcolor="#f7fcff">ID NFC<br>KENDARAAN</td>
    <td width="2%" bgcolor="#f7fcff">NO. PLAT<br>KENDARAAN</td>
    <td width="6%" bgcolor="#f7fcff">NAMA PEMILIK</td>
    <td width="9%" bgcolor="#f7fcff">ALAMAT PEMILIK</td>
    <td width="6%" bgcolor="#f7fcff">MERK<br>/ TYPE</td>
    <td width="2%" bgcolor="#f7fcff">JENIS<br>/ MODEL</td>
    <td width="1%" bgcolor="#f7fcff">TAHUN<br>PEMBUATAN</td>
    <td width="5%" bgcolor="#f7fcff">NOMOR<br>RANGKA</td>
    <td width="3%" bgcolor="#f7fcff">NOMOR<br>MESIN</td>
    <td width="1%" bgcolor="#f7fcff">Aksi</td>
  </tr>
  <tr>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1" /></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="002DD516A51351" /></td>
    <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="DD 4444 ILA" /></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" style="text-align:left">
      </div></td>
    <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="VILLA SURYA MAS J/9 MKS RT 006 RW 003 BORONG" /></td>
    <td style="text-align:left">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="INNOVA ZENIX Q MODELISTA" style="text-align:left">
      </div></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="MINIBUS" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2023" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="MHRGK5860JJ807780" /></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="006079598" /></td>
    <td style="text-align:center"><button type="button" class="btn btn-outline-info btn-elevate btn-icon btn-icon btn-sm" data-toggle="modal" data-target="#modal_kantor" data-skin="brand" title="" data-html="true" data-original-title="Lihat Detail"><i class="fa fa-eye"></i></button></td>
  </tr>
  
</tbody></table>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
														

								<div class="bg-white w-50 ml-auto mr-auto">
									<img src="../assets/img/header.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;"/>
									<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td width="19" style="text-align: right">&nbsp;</td>
    <td width="6">&nbsp;</td>
    <td width="205">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="66">Nomor</td>
    <td width="8" style="text-align: center">:</td>
    <td width="256">002/10.1/PERUMDA-PMR/XII/2022</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Lembar</td>
    <td style="text-align: center">:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center"><u><b>SURAT PERINTAH PERJALANAN DINAS</b></u></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center"><strong>SPPD</strong></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: right">A.</td>
    <td>&nbsp;</td>
    <td>Pejabat yang memberi perintah</td>
    <td>:</td>
    <td colspan="3">Direktur Utama</td>
  </tr>
  <tr>
    <td style="text-align: right">B.</td>
    <td>&nbsp;</td>
    <td>Nama Pegawai Pelaksana</td>
    <td>:</td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td style="text-align: right"></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td colspan="3"></td>
  </tr>
</table>
<table align="center" border="1" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td width="10" style="text-align: center"><b>No</b></td>
    <td width="90" style="text-align: center"><b>Nama Pegawai</b></td>
    <td width="137" style="text-align: center"><b>Jabatan</b></td>
  </tr>
  <tr>
    <td style="text-align: right">1.</td>
    <td>Yulianti Tomu, SE</td>
    <td>Direktur Utama</td>
  </tr>
  <tr>
    <td style="text-align: right">2.</td>
    <td>Rizal Asjadad</td>
    <td>Direktur Umum</td>
  </tr>
  <tr>
    <td style="text-align: right">3.</td>
    <td>Christofher Rio Aviary</td>
    <td>Direktur Operasional</td>
  </tr>
  <tr>
    <td style="text-align: right">4.</td>
    <td>Mu’amar Nor Amin</td>
    <td>Direktur Keuangan dan Asset</td>
  </tr>
  <tr>
    <td style="text-align: right">5.</td>
    <td>Zulfadli Syahrir</td>
    <td>Direktur Pengembangan Usaha dan Kerjasama</td>
  </tr>
  <tr>
    <td style="text-align: right">6.</td>
    <td>Ir. Asrarudin Mamonto, MM</td>
    <td>Kepala Bagian Umum dan Kepegawaian</td>
  </tr>
  <tr>
    <td style="text-align: right">7.</td>
    <td>Sri Suhartini, SE</td>
    <td>Kepala Seksi Administrasi Kepegawaian</td>
  </tr>
  <tr>
    <td style="text-align: right">8.</td>
    <td>Mahdinar, SE</td>
    <td>Staff Keuangan</td>
  </tr>
</table>
<div>&nbsp;</div>
<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td width="19" style="text-align: right">C.</td>
    <td width="6">&nbsp;</td>
    <td width="205">Jenis Perjalanan Dinas</td>
    <td width="10">:</td>
    <td width="330">Luar Kota</td>
  </tr>
  <tr>
    <td style="text-align: right">D.</td>
    <td>&nbsp;</td>
    <td>Kota Asal</td>
    <td>:</td>
    <td>Makassar</td>
  </tr>
  <tr>
    <td style="text-align: right">E.</td>
    <td>&nbsp;</td>
    <td>Kota Tujuan</td>
    <td>:</td>
    <td>Bali</td>
  </tr>
  <tr>
    <td style="text-align: right">F.</td>
    <td>&nbsp;</td>
    <td>Tanggal Berangkat</td>
    <td>:</td>
    <td>29 Desember 2022</td>
  </tr>
  <tr>
    <td style="text-align: right">G.</td>
    <td>&nbsp;</td>
    <td>Estimasi Tanggal Kembali</td>
    <td>:</td>
    <td>31 Desember 2022</td>
  </tr>
  <tr>
    <td style="text-align: right">H.</td>
    <td>&nbsp;</td>
    <td>Transportasi</td>
    <td>:</td>
    <td>Pesawat Udara</td>
  </tr>
  <tr>
    <td valign="top" style="text-align: right">I.</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">Maksud Perjalanan Dinas</td>
    <td valign="top">:</td>
    <td>Melakukan Rapat Kordinasi Khusus dengan Bapak Walikota Makassar pada Kegiatan RAKORSUS BUMD Kota Makassar</td>
  </tr>
  <tr>
    <td valign="top" style="text-align: right">J.</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">Pembiayaan Perjalanan Dinas</td>
    <td valign="top">:</td>
    <td>Perumda Parkir Makassar Raya</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  
 
</table>
								
</div>
								</div>
								<div><span>&nbsp;</span>
   <table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="16" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="7" valign="top">&nbsp;</td>
							  <td colspan="4" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="262"><p>&nbsp;</p></td>
							  <td width="6" >&nbsp;</td>
							  <td width="31" >&nbsp;</td>
							  <td width="217">Makassar, 22 Desember  2022</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Direksi Perusahaan Umum Daerah</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Parkir  Makassar Raya</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"><u><b>YULIANTI TOMU, SE</b></u></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Direktur Utama</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
							
							<tr>
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top"><hr /></td>
  </tr>
							<tr>
							  <td colspan="11" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
							<tr>
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
  </table>
  <img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
													</div>
													</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
															
														<div class="bg-white w-50 ml-auto mr-auto">
									<img src="../assets/img/header.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;"/>
									<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td colspan="7" style="text-align: center"><u><b>SURAT TUGAS</b></u></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center">Nomor : 097/80.3/PERUMDA-PMR/ST/XII/2022</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: left">Dasar :</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">1.</td>
    <td>&nbsp;</td>
    <td width="1182" colspan="4">Perda No 2 Tahun 2021 Tentang Pendirian Perusahaan Umum Daerah Parkir Makassar Raya</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">2.</td>
    <td>&nbsp;</td>
    <td colspan="4">Perda No 17 Tahun 2006 Tentang Pengelolaan Parkir Tepi Jalan Umum dalam Kota Makassar</td>
  </tr>
  <tr>
    <td width="17" style="text-align: right">&nbsp;</td>
    <td width="16" valign="top">3.</td>
    <td width="5">&nbsp;</td>
    <td colspan="4">Surat Perintah Walikota Makassar Nomor : 094/465/SP/VII/2022 Tanggal 22 Juli 2022 Mengikuti seluruh rangkaian kegiatan Rapat Kerja Nasional XV APEKSI Tahun 2022 di Kota Padang.</td>
  </tr>
  
 
</table>
<div>&nbsp;</div>
<table align="center" border="1" cellpadding="1" style="width: 600px; text-align:left; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td colspan="5" style="text-align: center"><strong>PEJABAT YANG BERTANDA TANGAN DIBAWAH INI</strong></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="3" valign="top" style="text-align: right">A.</td>
    <td colspan="2" style="text-align: left">Nama Pegawai</td>
    <td width="355" style="text-align: left">Yulianti Tomu, SE</td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: left">Jabatan</td>
    <td style="text-align: left">Direktur Utama</td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: left">Nama Instansi</td>
    <td style="text-align: left">Perumda Parkir Makassar Raya</td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: center"><strong>MEMBERIKAN TUGAS KEPADA</strong></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="9" valign="top" style="text-align: right">B.</td>
    <td colspan="2" style="text-align: center"><strong>NAMA PEGAWAI</strong></td>
    <td style="text-align: center"><strong>JABATAN</strong></td>
  </tr>
  <tr>
    <td width="12">1.</td>
    <td width="200">Yulianti Tomu, SE</td>
    <td style="text-align: left">Direktur Utama</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>Rizal Asjadad</td>
    <td>Direktur Umum</td>
  </tr>
  <tr>
    <td>3.</td>
    <td>Christofher Rio Aviary</td>
    <td>Direktur Operasional</td>
  </tr>
  <tr>
    <td>4.</td>
    <td>Mu&rsquo;amar Nor Amin</td>
    <td>Direktur Keuangan dan Asset</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Zulfadli Syahrir</td>
    <td>Direktur Pengembangan Usaha dan Kerjasama</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Ir. Asrarudin Mamonto, MM</td>
    <td>Kepala Bagian Umum dan Kepegawaian</td>
  </tr>
  <tr>
    <td valign="top">7</td>
    <td valign="top">Sri Suhartini, SE</td>
    <td>Kepala Seksi Administrasi Kepegawaian</td>
  </tr>
  <tr>
    <td valign="top">8</td>
    <td valign="top">Mahdinar, SE</td>
    <td>Staff Keuangan</td>
  </tr>
  <tr>
    <td colspan="5" valign="top" style="text-align: center"><strong>KETERANGAN</strong></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" valign="top" style="text-align: right">C.</td>
    <td valign="top">1.</td>
    <td colspan="2" valign="top">Peserta pada Acara Rapat Kerja Nasional XV APEKSI Tahun 2022 di Kota Padang Provinsi Sumatera Barat, Tanggal 6-10 Agustus 2022</td>
  </tr>
  <tr>
    <td valign="top">2.</td>
    <td colspan="2" valign="top">Pelaksanaan Surat Tugas ini terhitung mulai tanggal 6-11 Agustus 2022</td>
  </tr>
</table>
								
</div>
								</div>
								<div><span>&nbsp;</span>
   <table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="16" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="7" valign="top">&nbsp;</td>
							  <td colspan="4" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="262"><p>&nbsp;</p></td>
							  <td width="6" >&nbsp;</td>
							  <td width="31" >&nbsp;</td>
							  <td width="217">Makassar, 22 Desember  2022</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Direksi Perusahaan Umum Daerah</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Parkir  Makassar Raya</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"><u><b>YULIANTI TOMU, SE</b></u></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Direktur Utama</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top">Tembusan :</td>
  </tr>
							
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">1.</td>
							  <td colspan="7" valign="top">Yth, Bapak Walikota Makassar</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">2.</td>
							  <td colspan="7" valign="top">Yth, Dewan  Pengawas PERUMDA. Parkir Makassar Raya</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">3.</td>
							  <td colspan="7" valign="top">Pertinggal</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="7" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top"><hr /></td>
  </tr>
							<tr>
							  <td colspan="11" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
							<tr>
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
  </table>
  <img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
													</div>
													</div>

													<!--end: Form Wizard Step 4-->

													<!--begin: Form Actions -->
													

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
					<!--begin::Modal 1-->
									<div class="modal fade" id="modal_kantor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list-1"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">DETAIL KENDARAAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kendaraan</div><br>
																							<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-4">
																						<label>ID NFC Kendaraan :</label>
																						<input type="text" class="form-control form-control-sm" value="002DD516A51351" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-4">
																						<label>No. Plat Kendaraan :</label>
																						<input type="text" class="form-control form-control-sm" value="DD 1111 LUU" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					
																					
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
																						<label>Nama Pemilik :</label>
																						<input type="text" class="form-control form-control-sm" value="Muhammad Nasrullah, S.Kom" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-8">
																						<label>Alamat Pemilik :</label>
																						<input type="text" class="form-control form-control-sm" value="VILLA SURYA MAS J/9 MKS RT 006 RW 003 BORONG" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
																						<label>Merk / Type :</label>
																						<input type="text" class="form-control form-control-sm" value="HONDA JAZZ 1.5 CVT" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-4">
																						<label>Jenis / Model :</label>
																						<input type="text" class="form-control form-control-sm" value="MINIBUS" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-4">
																						<label>Tahun Pembuatan :</label>
																						<input type="text" class="form-control form-control-sm" value="2018" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
																						<label>No. Rangka :</label>
																						<input type="text" class="form-control form-control-sm" value="MHRGK5860JJ807780" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-4">
																						<label>No. Mesin :</label>
																						<input type="text" class="form-control form-control-sm" value="006079598" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

						
                        </div>
                        </div>
						
                     
					  
									
                  

									

									</div>
																						</div>

									</div>
<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Validator</div><br>
																							<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-4">
																						<label>Nama Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="Muhammad Nasrullah, S.Kom" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-4">
																						<label>NIP :</label>
																						<input type="text" class="form-control form-control-sm" value="238 004 032" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-4">
																						<label>Department :</label>
																						<input type="text" class="form-control form-control-sm" value="Umum" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					
																					
																					
																				</div>
						
                     
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						
																					<div class="col-lg-4">
																						<label>Bagian :</label>
																						<input type="text" class="form-control form-control-sm" value="Umum dan Kepegawaian" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-8">
																						<label>Jabatan :</label>
																					<input type="text" class="form-control form-control-sm" value="Kepala Seksi Administrasi Kepegawaian" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
																						<label>Waktu Validasi :</label>
																						<input type="text" class="form-control form-control-sm" value="11 Agustus 2023 / 10:30:00 WITA " placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-8">
																						<label>Lokasi Validasi :</label>
																						<input type="text" class="form-control form-control-sm" value="Inkubator Center Mamajang" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>


						
                        </div>
                        </div>
						
						
                     
					  
									
                     

									

									</div>
																						</div>
																						

									</div>
												
								<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Membership</div><br>
																							<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-12">
																						<label>ID Member :</label>
																						<input type="text" class="form-control form-control-sm" value="000000001" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					</div>
																					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																					<div class="form-group row">
																					<div class="col-lg-12">
																						<label>Waktu Registrasi Member :</label>
																						<input type="text" class="form-control form-control-sm" value="11 Agustus 2023 / 10:30:00 WITA" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					</div>
																					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																					<div class="form-group row">
																					<div class="col-lg-12">
																						<label>Nama Member :</label>
																						<input type="text" class="form-control form-control-sm" value="Muhammad Nasrullah, S.Kom" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					</div>
																					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																					<div class="form-group row">
																					<div class="col-lg-12">
																						<label>Nama Perusahaan :</label>
																						<input type="text" class="form-control form-control-sm" value="PT. iLugroup Multimedia Indonesia" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					</div>
																					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																					<div class="form-group row">
																					<div class="col-lg-12">
																						<label>Aktif Hingga :</label>
																						<input type="text" class="form-control form-control-sm" value="11 Agustus 2023 / 23:59:00 WITA" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
																					
																					
																					
																				</div>
						
                     
						
                     

                        </div>

												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
												
									




									</div>

									</div>
									
								</div>
								<div class="col-xl-6">
								<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Kendaraan</div><br>
																							<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-5">
                          <label>&nbsp;</label>
                         
																		<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																			<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/alp.jpg&quot;);"></div>&nbsp;<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/alp.jpg&quot;);"></div>


																		</div>
																		

                        </div>
																					<div class="col-lg-5">
                          <label>&nbsp;</label>
                         
																		<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																			<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/alp.jpg&quot;);"></div>&nbsp;<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/alp.jpg&quot;);"></div>


																		</div>
																		

                        </div>
																					
																					
																					
																					
																				</div>
						
                     
						
                     

                        </div>

												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
												
												
									




									</div>

									</div>
								</div>
								
								</div>
								</div>
								</div>
								</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="modal_pelunasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list-1"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">FORM BAYAR ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-4">
														<label>ID Kasbon :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-4">
														<label>Waktu Pengajuan :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Nilai Pinjaman :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                              1.000.000,-">
												</div>
													</div>

												<div class="col-lg-4">
														<label>Nilai Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                                100.000,-">
												</div>
													</div>
												<div class="col-lg-4">
														<label class="kt-font-danger">Sisa Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" disabled="disabled" placeholder="Rp.                                                200.000,-">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Bayar Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" placeholder="Rp.                                                200.000,-">
												</div>
													</div>
												<div class="col-lg-8">
														<label>Upload Bukti Pembayaran :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>

												</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm">Kirim</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 2-->

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
<?php require '../layouts/foot.php' ?>
