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
											Detail Gaji Anda

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
				<a href="pegawai-slip-gaji.php" class="btn btn-label-primary btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				&nbsp;
			</div>
                

            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
<div class="row">
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
													<i class="flaticon-browser"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Setup Gaji
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Setup Penggajian
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-coins"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Rincian Penghasilan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Detail Penghasilan Pegawai
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
														Review
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Preview Slip Gaji
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
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
								<div class="col-xl-2">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Periode Penggajian</div>
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
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Penerima Penghasilan</div>
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
													<div class="col-lg-6">
														<label>Department :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset">
													</div>
													<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Perencanaan dan Anggaran">
													</div>




												</div>
												
												


												</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Pembuat</div>
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
													<div class="col-lg-6">
														<label>Department :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset">
													</div>
													<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Perencanaan dan Anggaran">
													</div>




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
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-7">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pendapatan</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

											<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="5%" bgcolor="#f7fcff">Parameter Pendapatan</td>
																									<td width="1%" bgcolor="#f7fcff">Volume</td>
																									<td width="1%" bgcolor="#f7fcff">Satuan</td>
																									<td width="8%" bgcolor="#f7fcff">Biaya Satuan</td>
																									<td width="8%" bgcolor="#f7fcff">Nominal</td>
																									
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Gaji Pokok"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<input type="text" class="form-control form-control-sm" placeholder="1" disabled="disabled" aria-describedby="basic-addon2">
														
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ls"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.022.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.022.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tunjangan Jabatan"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<input type="text" class="form-control form-control-sm" placeholder="1" disabled="disabled" aria-describedby="basic-addon2">
														
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ls"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="540.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="540.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tunjangan Kesehatan"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<input type="text" class="form-control form-control-sm" placeholder="1" disabled="disabled" aria-describedby="basic-addon2">
														
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ls"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="164.748" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="164.748" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tunjangan BPJS TK"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<input type="text" class="form-control form-control-sm" placeholder="1" disabled="disabled" aria-describedby="basic-addon2">
														
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ls"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="304.454" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="304.454" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tunjangan Istri / Suami"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<input type="text" class="form-control form-control-sm" placeholder="1" disabled="disabled" aria-describedby="basic-addon2">
														
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ls"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="-" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="-" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">6</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tunjangan Anak"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<input type="text" class="form-control form-control-sm" placeholder="1" disabled="disabled" aria-describedby="basic-addon2">
														
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Org"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="60.442" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="60.442" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">7</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tunjangan Transportasi"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<input type="text" class="form-control form-control-sm" placeholder="1" disabled="disabled" aria-describedby="basic-addon2">
														
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ls"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.122.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.122.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">8</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tunjangan Makan"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<input type="text" class="form-control form-control-sm" placeholder="1" disabled="disabled" aria-describedby="basic-addon2">
														
													</div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ls"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="506.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="506.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>

																								
																									
																									
																							</tbody>
																							<tfoot>
																								
																							</tfoot>
																						</table>
                                          </div>
													<table class="table table-responsive  table-hover table-checkable" id="kt_table_2">
  <tr>
    <td width="24%" style="text-align:right" bgcolor="#f7fcff"><b>TOTAL PENDAPATAN</b></td>
    <td width="12%" bgcolor="#f7fcff" colspan="-4" style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="5.719.745" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
  <tr>
    <td colspan="3" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" style="text-align:left" bgcolor="#f7fcff"><b>Terbilang</b> : <i>Lima Juta Tujuh Ratus Sembilan Belas Ribu Tujuh Ratus Empat Puluh Lima Rupiah</i></td>
  </tr>
</table>
									</div>
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Potongan</div>
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
																								<tr>
																								</thead>
                                                <tbody data-repeater-list="">
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keterlambatan"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.941.270" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Absen"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.947.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="PPH 21"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.947.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="JHT 3,7%"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.947.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="JKK 0,24%"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.947.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">6</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="JKM 0,3%"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.947.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">7</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BPJS Kes 1%"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.947.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">8</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="JHT 2%"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.947.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">9</td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Cicilan Kasbon"></td>
																									<td style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="2.947.100" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
																									
																								</tr>




																								
																							</tbody>
																							<tfoot>
																								
																							</tfoot>
																						</table>
                                          </div>
													<table class="table table-responsive  table-hover table-checkable" id="kt_table_2">
  <tr>
    <td width="13%" bgcolor="#f7fcff" style="text-align:right"><b>TOTAL POTONGAN</b></td>
    <td width="12%" bgcolor="#f7fcff" colspan="-4" style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Calculation" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
  <tr>
    <td colspan="3" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" style="text-align:left" bgcolor="#f7fcff"><b>Terbilang :</b></td>
  </tr>
</table>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Grand Total</div>
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
							</div>
						</div>

						<!-- end:: Content -->
					</div>
            </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
