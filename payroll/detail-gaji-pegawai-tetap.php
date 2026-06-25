<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<link href="../assets/css/pages/invoices/invoice-2.css" rel="stylesheet" type="text/css" />

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
											Detail Gaji Pegawai Tetap

									</h3>
<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Sri Suhartini, SE </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
           <div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="#.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
				&nbsp;
			</div>
                

            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

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
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-browser"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Setup
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Penggajian
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>-->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-coins"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Rincian 
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Penghasilan
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-rocket"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Rincian Potongan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Potongan Gaji Pegawai
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>-->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-list-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Slip Gaji
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
								
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Penerima Penghasilan</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">

												
												
													<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
													</div>
													<div class="col-lg-3">
														<label>NIP :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
													</div>
													<div class="col-lg-3">
														<label>Kantor :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
													</div>
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													
													
													<div class="col-lg-12">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Perencanaan dan Anggaran">
													</div>




												</div>
												
												


												</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Periode Penggajian</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
													<div class="col-lg-12">
														<label>Periode Gaji :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/12/2022 - 28/12/2022">
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<label>Last Update :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="3 Januari 2022">
													</div>
												</div>
												</div>
												
												</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
												
												</div>
												
												</div>
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
											
											<div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pendapatan</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

											<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="18%" bgcolor="#f7fcff">Parameter Pendapatan</td>
																									<td width="1%" bgcolor="#f7fcff">Volume</td>
																									<td width="1%" bgcolor="#f7fcff">Satuan</td>
																									<td width="10%" bgcolor="#f7fcff">Biaya Satuan</td>
																									<td width="10%" bgcolor="#f7fcff">Nominal</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:right">1</td>
																									<td style="text-align:left">Gaji Pokok</td>
																									<td style="text-align:center">1</td>
																									<td style="text-align:center">Ls</td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.500.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.500.000,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">2</td>
																									<td style="text-align:left">Tunjangan Jabatan</td>
																									<td style="text-align:center">1</td>
																									<td style="text-align:center">Ls</td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>4.950.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>4.950.000,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">3</td>
																									<td style="text-align:left">Tunjangan Keluarga</td>
																									<td style="text-align:center">1</td>
																									<td style="text-align:center">Ls</td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>495.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>495.000,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">4</td>
																									<td style="text-align:left">Tunjangan Kesehatan</td>
																									<td style="text-align:center">1</td>
																									<td style="text-align:center">Ls</td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.508.200,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.508.200,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">5</td>
																									<td style="text-align:left">Tunjangan Transportasi</td>
																									<td style="text-align:center">1</td>
																									<td style="text-align:center">Ls</td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.124.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.124.000,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">6</td>
																									<td style="text-align:left">Tunjangan Telekomunikasi</td>
																									<td style="text-align:center">1</td>
																									<td style="text-align:center">Ls</td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.500.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.500.000,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">7</td>
																									<td style="text-align:left">Tunjangan Makan / Minum</td>
																									<td style="text-align:center">1</td>
																									<td style="text-align:center">Ls</td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.200.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.200.000,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">8</td>
																									<td style="text-align:left">Tunjangan Representasi</td>
																									<td style="text-align:center">1</td>
																									<td style="text-align:center">Ls</td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>14.894.040,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>14.894.040,-</span> </div></td>
																								</tr>
																								
																								
																								<tr>
																								  <td colspan="6" style="text-align:center">&nbsp;</div>
																							      </div></td>
																									</tr>
																								<tr>
																								  <td colspan="5" bgcolor="#f7fcff" style="text-align:center"><b>TOTAL PENDAPATAN</b></td>
																								  <td bgcolor="#f7fcff"><div style="display: flex; justify-content: space-between; align-items: center;"> <span><strong>Rp.</strong></span> <strong><span>14.894.040,-</span></strong> </div></td>
																								  </tr>
																								<tr>
																								  <td colspan="6" bgcolor="#f7fcff" style="text-align:left"><span style="text-align:left">Terbilang : <i>Lima Juta Tujuh Ratus Sembilan Belas Ribu Tujuh Ratus Empat Puluh Lima Rupiah</i></span></td>
																								  </tr>
																			                </tbody>
																							<tfoot>
																							</tfoot>
																						</table>
                                          </div>
													
									</div>
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Potongan</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                        <div id="kt_repeater_6">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_6">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="8%" bgcolor="#f7fcff">Parameter Potongan</td>
																									<td width="10%" bgcolor="#f7fcff">Nominal</td>
																								  </tr>
																								</thead>
                                                <tbody data-repeater-list="">
																								  <tr>
																								  <td style="text-align:right">1</td>
																									<td style="text-align:left">Keterlambatan</td>
																									
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">2</td>
																									<td style="text-align:left">Absen</td>
																									
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">3</td>
																									<td style="text-align:left">PPH 21</td>
																									
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.716.004,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">4</td>
																									<td style="text-align:left">JHT 3,7%</td>
																									
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>378.840,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">5</td>
																									<td style="text-align:left">JKK 0,24%</td>
																									
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">6</td>
																									<td style="text-align:left">JKM 0,3%</td>
																									
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">7</td>
																									<td style="text-align:left">BPJS Kes 1%</td>
																									
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td style="text-align:right">8</td>
																									<td style="text-align:left">Infaq</td>
																									
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>137.500,-</span> </div></td>
																								</tr>
																								<tr>
																								  <td colspan="3" style="text-align:right">&nbsp;</td>
												  </tr>
																								<tr>
																								  <td colspan="2" bgcolor="#f7fcff" style="text-align:center"><b>TOTAL POTONGAN</b></td>
																								  <td bgcolor="#f7fcff"><div style="display: flex; justify-content: space-between; align-items: center;"> <span><strong>Rp.</strong></span> <strong><span>14.894.040,-</span></strong> </div></td>
																								  </tr>
																								<tr>
																								  <td colspan="3" bgcolor="#f7fcff" style="text-align:left"><span style="text-align:left">Terbilang : <i>Lima Juta Tujuh Ratus Sembilan Belas Ribu Tujuh Ratus Empat Puluh Lima Rupiah</i></span></td>
																								  </tr>
												  
																								
																								
																								
																								
																								
																								




																								</tbody>
																							<tfoot>
																							</tfoot>
																						</table>
                                          </div>
													
									</div>

									<!--end::Portlet-->



								</div>
								</div>
								</div>
								</div>
								<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Grand Total</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">


												<table class="table table-bordered table-hover table-checkable">

																							<tbody data-repeater-list="">
																							<thead>
																								<tr style="text-align:center">
																								  <td width="20%" bgcolor="#f7fcff">Total Pendapatan</td>
																									<td width="20%" bgcolor="#f7fcff">Total Potongan</td>
																									<td width="20%" bgcolor="#f7fcff">Gaji Diterima</td>
																								</tr>
																								</thead>
																								<tbody>
																								<tr>
																								  <td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="5.719.745" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="745" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center" bgcolor="#0abb87"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="5.719.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																								</tr>
																								<tr>
																								  <td colspan="3" style="text-align:left">&nbsp;</td>
																							  </tr>
																								<tr>
																								  <td colspan="3" style="text-align:left" bgcolor="#f7fcff"><b>Terbilang</b> : <i>Lima Juta Tujuh Ratus Sembilan Belas Ribu Tujuh Ratus Empat Puluh Lima Rupiah</i></td>
																							  </tr>
																							</tbody>
																							<tfoot>
																							</tfoot>
																						</table>

									</div>
									</div>
									</div>

									<!--end::Portlet-->



								</div>

								</div>
								</div>
								</div>




												<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
								<div class="bg-white w-60 ml-auto mr-auto">
	<img src="../assets/img/header.png" style="width:793px; display:block; margin-left:40px;margin-right:auto;margin-bottom:20px;padding-top:40px;"/>
									<div>&nbsp;<div>
									<table align="center" border="0" cellpadding="1" style="width: 650px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px;">
  <tr>
    <td colspan="7" style="text-align:center; border-bottom: 3px double #000"><strong>SLIP GAJI PEGAWAI</strong></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align:left">&nbsp;</td>
  </tr>
  <tr>
    <td width="25%" style="text-align:left">Nama</td>
    <td width="2%" style="text-align:left">:</td>
    <td colspan="5" style="text-align:left">Muhammad Ramadhan Lerrick, ST</td>
  </tr>
  <tr>
    <td style="text-align:left">Jabatan</td>
    <td style="text-align:left">:</td>
    <td colspan="5" style="text-align:left">Staff Administrasi Kepegawaian</td>
  </tr>
  <tr>
    <td style="text-align:left">Periode</td>
    <td style="text-align:left">:</td>
    <td colspan="5" style="text-align:left">Januari 2025</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align:left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" style="text-align:left; border-bottom: 1px solid #000"><strong>RINCIAN PENDAPATAN :<span style="text-align: left"></span></strong></td>
    <td width="3%" style="text-align:left">&nbsp;</td>
    <td colspan="3" style="text-align:left; border-bottom: 1px solid #000"><strong>POTONGAN :<span style="text-align: left"></span></strong></td>
  </tr>
  <tr>
    <td style="text-align: left"> - Gaji Pokok</td>
    <td>:</td>
    <td width="17%"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000.000,-</span> </div></td>
    <td width="3%">&nbsp;</td>
    <td width="35%">- BPJS Ketenagakerjaan &amp; Kesehatan</td>
    <td width="1%">:</td>
    <td width="17%"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>583.840,-</span></div></td>
  </tr>
  <tr>
    <td style="text-align: left"> - Tunjangan Jabatan</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>4.500.000,-</span> </div></td>
    <td width="3%">&nbsp;</td>
    <td>- Infaq</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>125.000,-</span></div></td>
  </tr>
  <tr>
    <td style="text-align: left"> - Tunjangan Keluarga</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>550.000,-</span> </div></td>
    <td width="3%">&nbsp;</td>
    <td>- Keterlambatan</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
  </tr>
  <tr>
    <td style="text-align: left"> - Tunjangan Kesehatan</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.262.000,-</span></div></td>
    <td width="3%">&nbsp;</td>
    <td>- Absen</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
  </tr>
  <tr>
    <td style="text-align: left"> - Tunjangan Transport</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>3.124.000,-</span></div></td>
    <td width="3%">&nbsp;</td>
    <td>- PPh</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.451.074,-</span></div></td>
  </tr>
  <tr>
    <td style="text-align: left"> - Tunjangan Telekomunikasi</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.250.000,-</span></div></td>
    <td width="3%">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left"> - Tunjangan Makan/Minum</td>
    <td>:</td>
    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.200.000,-</span></div></td>
    <td width="3%">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left; border-bottom: 1px solid #000">- Tunjangan Representasi</td>
    <td style="border-bottom: 1px solid #000">:</td>
    <td style="border-bottom: 1px solid #000"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>13.920.200,-</span></div></td>
    <td width="3%">&nbsp;</td>
    <td style="border-bottom: 1px solid #000">&nbsp;</td>
    <td style="border-bottom: 1px solid #000">&nbsp;</td>
    <td style="border-bottom: 1px solid #000">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:left"><strong>JUMLAH PENDAPATAN</strong></td>
    <td>:</td>
    <td><div style="border-bottom: 3px double #000; display: flex; justify-content: space-between; align-items: center;"> <span><strong>Rp.</strong></span> <strong><span>33.806.200,-</span></strong></div></td>
    <td width="3%">&nbsp;</td>
    <td style="text-align:left"><strong>JUMLAH POTONGAN</strong></td>
    <td>:</td>
    <td><div style="border-bottom: 3px double #000;display: flex; justify-content: space-between; align-items: center;"> <span><strong>Rp.</strong></span> <strong><span>2.159.914,-</span></strong></div></td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:left;"><strong>JUMLAH YANG DITERIMA</strong></td>
    <td>:</td>
    <td><div style=" border-bottom: 3px double #000; display: flex; justify-content: space-between; align-items: center;"> <span><strong>Rp.</strong></span> <strong><span>31.646.286,-</span></strong></div></td>
    <td width="3%">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" style="text-align:left;"><strong>TERBILANG </strong></td>
    <td valign="top">:</td>
    <td colspan="5"><span style="text-align:left;"><strong><em>Tiga Puluh Satu Juta Enam Ratus Empat Puluh Enam Ribu Dua Ratus Delapan Puluh Enam Rupiah</em></strong></span></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align:left;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align:left;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align:left;">&nbsp;</td>
  </tr>
</table>
<table align="center" border="0" cellpadding="1" style="width: 650px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; margin-top:10px; margin-left:70px; margin-bottom:50px;">

                                <tbody><tr>
                                    <td colspan="5" valign="top">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="180" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">
                                        <strong>DISETUJUI</strong></td>
                                    <td width="10" rowspan="5" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">&nbsp;</td>
                                    <td width="228" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">
                                        <strong>DIBAYARKAN OLEH</strong></td>
                                    <td width="10" rowspan="5" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-left:20px;">&nbsp;</td>
                                    <td width="250" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-left:20px;">
                                        <strong>PENERIMA</strong></td>
                                </tr>
                                <tr style="padding-top:10px">
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc; padding-top:10px; padding-bottom:10px;">
                                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="45" height="45" viewBox="0 0 45 45"><rect x="0" y="0" width="45" height="45" fill="#ffffff"></rect><g transform="scale(2.143)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 1L9 1L9 4L10 4L10 5L11 5L11 6L10 6L10 7L9 7L9 6L8 6L8 8L9 8L9 9L8 9L8 10L9 10L9 12L8 12L8 11L7 11L7 10L5 10L5 8L3 8L3 9L4 9L4 10L5 10L5 11L7 11L7 12L3 12L3 13L7 13L7 12L8 12L8 14L12 14L12 15L9 15L9 16L8 16L8 18L9 18L9 19L8 19L8 21L10 21L10 18L13 18L13 16L14 16L14 17L16 17L16 20L19 20L19 21L20 21L20 20L21 20L21 18L19 18L19 19L17 19L17 17L16 17L16 16L18 16L18 15L17 15L17 14L13 14L13 13L11 13L11 12L12 12L12 11L11 11L11 8L12 8L12 10L13 10L13 11L15 11L15 8L14 8L14 10L13 10L13 4L12 4L12 3L11 3L11 2L12 2L12 1L13 1L13 0ZM10 1L10 2L11 2L11 1ZM11 4L11 5L12 5L12 4ZM11 6L11 7L12 7L12 6ZM0 8L0 10L1 10L1 11L0 11L0 13L1 13L1 11L3 11L3 10L2 10L2 8ZM6 8L6 9L7 9L7 8ZM20 8L20 9L18 9L18 10L19 10L19 11L20 11L20 12L18 12L18 11L17 11L17 9L16 9L16 11L17 11L17 13L18 13L18 14L19 14L19 16L20 16L20 17L21 17L21 16L20 16L20 14L21 14L21 8ZM10 11L10 12L11 12L11 11ZM14 12L14 13L15 13L15 12ZM14 15L14 16L16 16L16 15ZM10 16L10 17L9 17L9 18L10 18L10 17L11 17L11 16ZM14 18L14 19L13 19L13 20L15 20L15 18ZM19 19L19 20L20 20L20 19ZM11 20L11 21L12 21L12 20ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                                    </td>
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc">
                                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="45" height="45" viewBox="0 0 45 45"><rect x="0" y="0" width="45" height="45" fill="#ffffff"></rect><g transform="scale(2.143)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 1L9 1L9 2L8 2L8 5L11 5L11 4L12 4L12 3L13 3L13 0L12 0L12 3L11 3L11 2L10 2L10 0ZM9 2L9 4L11 4L11 3L10 3L10 2ZM8 6L8 7L9 7L9 8L8 8L8 9L7 9L7 8L6 8L6 9L5 9L5 10L0 10L0 12L1 12L1 11L2 11L2 12L3 12L3 13L7 13L7 12L5 12L5 11L7 11L7 10L8 10L8 9L9 9L9 8L10 8L10 10L11 10L11 6L10 6L10 7L9 7L9 6ZM12 6L12 7L13 7L13 6ZM0 8L0 9L4 9L4 8ZM13 8L13 9L12 9L12 12L11 12L11 11L10 11L10 12L9 12L9 11L8 11L8 12L9 12L9 13L8 13L8 14L9 14L9 16L10 16L10 17L8 17L8 21L13 21L13 19L14 19L14 20L15 20L15 19L14 19L14 17L15 17L15 16L16 16L16 15L17 15L17 16L18 16L18 18L20 18L20 17L21 17L21 15L20 15L20 14L21 14L21 11L20 11L20 10L21 10L21 8L20 8L20 10L19 10L19 12L18 12L18 13L17 13L17 12L16 12L16 13L17 13L17 14L16 14L16 15L15 15L15 14L14 14L14 11L18 11L18 9L19 9L19 8L16 8L16 9L15 9L15 10L13 10L13 9L14 9L14 8ZM6 9L6 10L7 10L7 9ZM16 9L16 10L17 10L17 9ZM12 12L12 13L10 13L10 15L13 15L13 12ZM19 13L19 14L18 14L18 16L19 16L19 17L20 17L20 16L19 16L19 14L20 14L20 13ZM12 16L12 17L10 17L10 18L9 18L9 20L10 20L10 19L11 19L11 18L12 18L12 19L13 19L13 17L14 17L14 16ZM16 17L16 20L18 20L18 19L17 19L17 17ZM19 19L19 21L20 21L20 20L21 20L21 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                                    </td>
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc">
                                      
                                    </td>
                                </tr>
                                <tr style="margin-right:20px">
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; font-style:underline; margin-right:20px;"><b>ADI RASYID ALI, SE</td>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; margin-right:20px;"><b>SRI SUHARTINI,SE</td>
                                    <td valign=" top" style="text-align: center; border: 0px solid #ccc; margin-right:20px;"><b>MUHAMMAD RAMADHAN LERRICK, ST</td>
                                </tr>
                                <tr>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc">Direktur Utama</td>
                                    <td valign=" top" style="text-align: center; border: 0px solid #ccc">Kasie Adm / Kepegawaian</td>
                                    <td valign="top" style="text-align: center; border-top: 0px solid #000">Staff Administrasi Kepegawaian</td>
                                </tr>
                                <tr>
                                  <td valign="top" style="text-align: center; border: 0px solid #ccc">&nbsp;</td>
                                  <td valign=" top" style="text-align: center; border: 0px solid #ccc">&nbsp;</td>
                                  <td valign="top" style="text-align: center; border-top: 0px solid #000"></td>
                                </tr>
                                
                               
                            </tbody>
</table>
									
									
					<table align="center" class="footnote-1" width="650px" style="margin-top:50px; padding-top:55px; padding-bottom:20px;">
        <thead>
            <tr><th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr></thead>
        <tbody>
            <tr>
                <td colspan="4" style="border-bottom: 1px solid #5b5b5b;"></td>
            </tr>
            
            <tr style="height: 10px"><td></td></tr>
            <tr style=" width:650px;">
                <td style="text-align: left;">
                    <span class="span-qr" style="z-index: 99999">
                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="40" height="40" viewBox="0 0 40 40"><rect x="0" y="0" width="40" height="40" fill="#ffffff"></rect><g transform="scale(1.905)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M9 0L9 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L5 9L5 10L4 10L4 8L3 8L3 9L2 9L2 8L0 8L0 9L2 9L2 10L3 10L3 12L4 12L4 11L7 11L7 10L8 10L8 8L9 8L9 11L8 11L8 12L6 12L6 13L8 13L8 15L9 15L9 16L10 16L10 17L11 17L11 16L12 16L12 17L13 17L13 18L12 18L12 19L10 19L10 20L11 20L11 21L12 21L12 20L13 20L13 19L14 19L14 21L15 21L15 18L16 18L16 19L17 19L17 20L19 20L19 18L20 18L20 20L21 20L21 17L20 17L20 16L21 16L21 14L20 14L20 15L19 15L19 16L18 16L18 13L19 13L19 12L20 12L20 13L21 13L21 12L20 12L20 11L19 11L19 10L21 10L21 9L20 9L20 8L18 8L18 9L17 9L17 8L14 8L14 9L13 9L13 8L12 8L12 7L13 7L13 6L12 6L12 7L11 7L11 6L10 6L10 7L9 7L9 4L10 4L10 0ZM12 0L12 1L11 1L11 4L12 4L12 5L13 5L13 2L12 2L12 1L13 1L13 0ZM6 9L6 10L7 10L7 9ZM11 9L11 10L10 10L10 11L9 11L9 12L8 12L8 13L9 13L9 15L10 15L10 16L11 16L11 14L13 14L13 15L12 15L12 16L13 16L13 17L17 17L17 19L18 19L18 18L19 18L19 17L18 17L18 16L17 16L17 15L16 15L16 14L13 14L13 13L16 13L16 12L14 12L14 10L15 10L15 11L17 11L17 13L18 13L18 12L19 12L19 11L18 11L18 10L19 10L19 9L18 9L18 10L15 10L15 9L14 9L14 10L13 10L13 9ZM12 10L12 11L11 11L11 12L12 12L12 13L13 13L13 12L12 12L12 11L13 11L13 10ZM1 11L1 12L0 12L0 13L1 13L1 12L2 12L2 11ZM9 12L9 13L10 13L10 12ZM14 15L14 16L16 16L16 15ZM8 17L8 18L9 18L9 17ZM8 19L8 21L9 21L9 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                    </span>
                </td>
                <td>&nbsp;</td>
                <td colspan="2" valign="bottom" style="position: relative;top:-5px;text-align:left; padding-left:10px; padding-top:10px;">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur
                            bahwa
                            surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
            <tr class="pageOrder-break" height="20px"></tr>
        </tbody>
    </table>
  <img src="../assets/img/footer.png" style="width:833px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:0px" />
					
					
								

								<!--End:: App Content-->
							
							<!--End::App-->
						</div>
						</div>
						</div>
						</div>
						</div>
													</div>
													</div>
													</div>



												<!--end: Form Wizard Step 2-->



													<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-invoice-2">
										<div class="kt-invoice__head">
											<div class="kt-invoice__container">
												<div class="kt-invoice__brand">
													<h1 class="kt-invoice__title">INVOICE</h1>
													<div href="#" class="kt-invoice__logo">
														<a href="#"><img src="../assets/media/company-logos/logo_client_color.png"></a>
														<span class="kt-invoice__desc">
															<span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
															<span>Mississippi 96522</span>
														</span>
													</div>
												</div>
												<div class="kt-invoice__items">
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">DATA</span>
														<span class="kt-invoice__text">Dec 12, 2017</span>
													</div>
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">INVOICE NO.</span>
														<span class="kt-invoice__text">GS 000014</span>
													</div>
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">INVOICE TO.</span>
														<span class="kt-invoice__text">Iris Watson, P.O. Box 283 8562 Fusce RD.<br>Fredrick Nebraska 20620</span>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-invoice__body">
											<div class="kt-invoice__container">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th>DESCRIPTION</th>
																<th>HOURS</th>
																<th>RATE</th>
																<th>AMOUNT</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Creative Design</td>
																<td>80</td>
																<td>$40.00</td>
																<td class="kt-font-danger kt-font-lg">$3200.00</td>
															</tr>
															<tr>
																<td>Front-End Development</td>
																<td>120</td>
																<td>$40.00</td>
																<td class="kt-font-danger kt-font-lg">$4800.00</td>
															</tr>
															<tr>
																<td>Back-End Development</td>
																<td>210</td>
																<td>$60.00</td>
																<td class="kt-font-danger kt-font-lg">$12600.00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="kt-invoice__footer">
											<div class="kt-invoice__container">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th>BANK</th>
																<th>ACC.NO.</th>
																<th>DUE DATE</th>
																<th>TOTAL AMOUNT</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>BARCLAYS UK</td>
																<td>12345678909</td>
																<td>Jan 07, 2018</td>
																<td class="kt-font-danger kt-font-xl kt-font-boldest">20,600.00</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="kt-invoice__actions">
											<div class="kt-invoice__container">
												<button type="button" class="btn btn-label-brand btn-bold" onclick="window.print();">Download Slip Gaji</button>
												<button type="button" class="btn btn-brand btn-bold" onclick="window.print();">Print Slip Gaji</button>
											</div>
										</div>
									</div>

</div>



												<!--end: Form Wizard Step 3-->
													<div>&nbsp;</div>
													<!--begin: Form Actions -->
													<div class="kt-form__actions">
														<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
															Kembali
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

						<!-- end:: Content -->
					</div>
            </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
