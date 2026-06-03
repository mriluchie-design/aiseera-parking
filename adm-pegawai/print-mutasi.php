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
											Print Mutasi Pegawai
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
								<a href="pegawai.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div>&nbsp;</div>
			<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
				<i class="fa fa-print"></i> Export Data</button>
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
							<i class="kt-nav__link-icon fa fa-print"></i>
							<span class="kt-nav__link-text">Cetak</span>
						</a>
					</li>
				</ul>
				<!--end::Nav-->
			</div>
										</div>
						</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						

							<!--Begin::App-->

								<!--Begin:: App Content-->
								
								
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
														Data Surat
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Mutasi Pegawai
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
													<i class="flaticon-list-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview Surat
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Mutasi Pegawai
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
													4
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

													<!--begin: Form Wizard Step 1-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											
								<div class="row">
								
								
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Penerima Mutasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-12">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Ramadhan Lerrick, ST" />
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>NIP :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032" />
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Department :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset" />
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Divisi :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Asset" />
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Asset" />
                        
                        </div>
                       

                        </div>
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								
								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tujuan Mutasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-12">
                          <label>Kantor Baru :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Nama Cabang A" />
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Atasan Langsung :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Ramadhan Lerrick, ST" />
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Department Baru :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum" />
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Divisi Baru :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian" />
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Jabatan Baru :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Kepala Bagian Umum dan Kepegawaian" disabled>
                        
                        </div>
                       

                        </div>
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								
								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Surat Mutasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-12">
                          <label>No. SK Mutasi :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="001/SK-MUTASI/VII/2025" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Ditetapkan Di :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Makassar" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Tanggal SK Mutasi :</label>
						  <input type="text" class="form-control form-control-sm" placeholder="11 Juli 2025" disabled>
                        
                        </div>
                       

                        </div>
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								
								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat Mutasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10" bgcolor="#f7fcff">No</td>
																								  <td width="700" bgcolor="#f7fcff">Tembusan Surat</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" placeholder="Direktur Utama" disabled></td>
																									</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" placeholder="Arsip" disabled></td>
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
								
								
								</div>
								
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Pembuat</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-12">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Muhammad Ramadhan Lerrick, ST" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Department :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Umum" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Divisi :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Kepegawaian" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Staff Administrasi Kepegawaian" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Kantor :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Nama Cabang A" disabled>
                        
                        </div>
						
                       

                        </div>
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								
								</div>
								<div class="col-xl-9">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Verifikasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-4">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Muhammad Ramadhan Lerrick, ST" disabled>
                        
                        </div>
						<div class="col-lg-4">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Staff Administrasi Kepegawaian" disabled>
                        
                        </div>
						<div class="col-lg-4">
                          <label>Waktu Verifikasi :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="12 Desember 2024 - 12:18 WITA" disabled>
                        
                        </div>
                        </div>
						
						
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Verifikasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-4">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Muhammad Ramadhan Lerrick, ST" disabled>
                        
                        </div>
						<div class="col-lg-4">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Staff Administrasi Kepegawaian" disabled>
                        
                        </div>
						<div class="col-lg-4">
                          <label>Waktu Verifikasi :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="12 Desember 2024 - 12:18 WITA" disabled>
                        
                        </div>
                        </div>
						
						
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Verifikasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-4">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Muhammad Ramadhan Lerrick, ST" disabled>
                        
                        </div>
						<div class="col-lg-4">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="Staff Administrasi Kepegawaian" disabled>
                        
                        </div>
						<div class="col-lg-4">
                          <label>Waktu Verifikasi :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="12 Desember 2024 - 12:18 WITA" disabled>
                        
                        </div>
                        </div>
						
						
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								
								</div>
								
								
								
								
								
								
								</div>
								
								
								</div>
								
								
								</div>
								
								</div>



												<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											

									<!--begin::Portlet-->
										
			
			<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-50 ml-auto mr-auto mt-3">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						
						
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>

												<!--end: Form Wizard Form-->
											</div>
										</div>
								

							<!--end:: Portlet-->




							

  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>
							</div>
							</div>
							</div>
							</div>

            </div>
<!--begin::Page Scripts(used by this page) -->
<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
