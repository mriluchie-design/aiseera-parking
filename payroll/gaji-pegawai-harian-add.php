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
											Setup Gaji Pegawai Kontrak Harian

									</h3>

								</div>
           <div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="data-gaji-pegawai-harian.php" class="btn btn-label-brand btn-sm">
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
													<i class="flaticon-users"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Penerima Penghasilan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Daftar Penerima Penghasilan
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
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
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
										</div>-->

									</div>
								</div>

								<!--end: Form Wizard Nav -->
								
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<!--begin: Form Wizard Step 1-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Periode Penggajian</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">

												
												
													<div class="col-lg-12">
														<label>Periode Gaji :</label>
														<div class="input-group">
<input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
<div class="input-group-append">
 <span class="input-group-text"><i class="la la-calendar-check-o"></i></span></div> </div>
													</div>




												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												


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
								
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Daftar Pegawai Penerima Penghasilan</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">


												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Tahun</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Periode Gaji</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="4%" rowspan="2" bgcolor="#f7fcff">NIP</th>
											  <th width="8%" rowspan="2" bgcolor="#f7fcff">Department</th>
											  <th width="8%" rowspan="2" bgcolor="#f7fcff">Bagian</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Jabatan</th>
											  <th width="6%" rowspan="2" bgcolor="#f7fcff">Pangkat <br>/ Golongan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Status Pegawai</th>
											  
										  </tr>
											
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												<td nowrap="nowrap" style="text-align:center">2022</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="SRI SUHARTINI,SE<hr>Kepala Seksi Administrasi Kepegawaian" data-html="true">
														<img src="../assets/media/users/100_15.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Yulianti Tomu, SE</td>
												<td style="text-align:center" nowrap>000 000 001</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direktur Utama</td>
												<td style="text-align:left">Pembina Utama / IV E	</td>
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td nowrap="nowrap" style="text-align:center">Harian</td>
												
												
										  </tr>
											<tr>
												<td id="kt_table_1" style="text-align:right">2</td>
												<td nowrap="nowrap" style="text-align:center">2022</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/dirum.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Rizal Asjadad</td>
												<td style="text-align:center" nowrap>000 000 002</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direktur Umum</td>
												<td style="text-align:left" nowrap>Pembina Madya / IV D</td>
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td nowrap="nowrap" style="text-align:center">Harian</td>
												</tr>
											<tr>
												<td id="kt_table_1" style="text-align:right">3</td>
												<td nowrap="nowrap" style="text-align:center">2022</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/dirops.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Christofher Rio Aviary</td>
												<td style="text-align:center" nowrap>000 000 003</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direktur Operasional</td>
												<td style="text-align:left" nowrap>Pembina Madya / IV D</td>
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td nowrap="nowrap" style="text-align:center">Harian</td>
											</tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">4</td>
												<td nowrap="nowrap" style="text-align:center">2022</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/dirkeu.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Mu’amar Nor Amin</td>
												<td style="text-align:center" nowrap>000 000 004</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direktur Keuangan dan Asset</td>
												<td style="text-align:left" nowrap>Pembina Madya / IV D</td>
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td nowrap="nowrap" style="text-align:center">Harian</td>
											</tr>
											<tr>
												<td id="kt_table_1" style="text-align:right">5</td>
												<td nowrap="nowrap" style="text-align:center">2022</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/dirjasa.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Zulfadli Syahrir</td>
												<td style="text-align:center" nowrap>000 000 005</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:center" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direktur Pengembangan Usaha & Kerjasama</td>
												<td style="text-align:left" nowrap>Pembina Madya / IV D</td>
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td nowrap="nowrap" style="text-align:center">Harian</td>
											</tr>
											<tr>
												<td id="kt_table_1" style="text-align:right">6</td>
												<td nowrap="nowrap" style="text-align:center">2022</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/300_21.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Ir. Asrarudin Mamonto, MM</td>
												<td style="text-align:center" nowrap>000 000 006</td>
												<td style="text-align:center" nowrap>Umum</td>
												<td style="text-align:center" nowrap>Umum</td>
												<td style="text-align:left" nowrap>Kepala Bagian Umum</td>
												<td style="text-align:left" nowrap>Pembina Madya / IV D</td>
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td nowrap="nowrap" style="text-align:center">Harian</td>
											</tr>
											<tr>
												<td id="kt_table_1" style="text-align:right">7</td>
												<td nowrap="nowrap" style="text-align:center">2022</td>
												<td nowrap="nowrap" style="text-align:center">Januari</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_16.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Sri Suhartini, SE</td>
												<td style="text-align:center" nowrap>238 004 032</td>
												<td style="text-align:center" nowrap>Umum</td>
												<td style="text-align:center" nowrap>Umum dan Kepegawaian</td>
												<td style="text-align:left" nowrap>Kepala Seksi Administrasi Kepegawaian</td>
												<td style="text-align:left" nowrap>Pembina Madya / IV D</td>
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td nowrap="nowrap" style="text-align:center">Harian</td>
											</tr>
										</tbody>
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
															Previous
														</button>
														<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
															Kirim
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
