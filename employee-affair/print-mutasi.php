<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>



      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Print
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Mutasi Pegawai</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


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
													<i class="flaticon-file-2"></i>
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
													<i class="fa fa-file-pdf"></i>
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
								
								
								
								<div class="col-xl-8">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Surat Mutasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-4">
                          <label>No. SK Mutasi :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        
                        </div>
<div class="col-lg-4">
                          <label>Ditetapkan Di :</label>
						   <div class="form-group">

					                         <input type="text" class="form-control form-control-sm" placeholder="Makassar" disabled>
					                       </div>
                        
                        </div>
<div class="col-lg-4">
                          <label>Tanggal SK Mutasi :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="20 Oktober 2026" disabled>
                        
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Penerima Mutasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-12">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label>NIP :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032" />
                        
                        </div>
<div class="col-lg-6">
                          <label>Kantor :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat" />
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Department :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha" />
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Divisi :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032" />
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032" />
                        
                        </div>
                       

                        </div>
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								
								</div>
<div class="col-xl-6">

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
						   <input type="text" class="form-control form-control-sm" placeholder="Pusat" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Atasan Langsung :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Departemen Baru :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Divisi Baru :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Jabatan Baru :</label>
						   <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        
                        </div>
                       

                        </div>
						
											
												
									</div>

									<!--end::Portlet-->



								</div>
								
								</div>
								
								
								</div>
								
								
								</div>
								</div>
<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat Mutasi</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div id="kt_repeater_2">
												<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Tembusan Surat</td>
																								 
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" placeholder="Yth, Direktur Utama" disabled></td>
																									
                                                                                                    
																								</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" placeholder="Yth, Direktur Keuangan" disabled></td>
																									
                                                                                                    
																								</tr>
<tr>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" placeholder="Pertinggal" disabled></td>
																									
                                                                                                    
																								</tr>
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						
												
												</div>
									</div>
                       

                       
                     
						
												
												
									</div>

									<!--end::Portlet-->



								</div>
								
								

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Verifikasi</div><br><br>
										<div class="kt-portlet__body">

											<!--Begin::Timeline 3 -->
											<div class="kt-timeline-v2" >
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30" >
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time"><span style="color:#0961ae;">15/07/2025</span><br>15:51 WITA</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>

														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															<span class="kt-list-pics kt-list-pics--md"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Muhammad Nasrullah, S.Kom<hr>Direktur Utama" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></span> 
														</div>
														&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-sm btn-label-brand">Dibuat</a>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time"><span style="color:#0961ae;">15/07/2025</span><br>15:51 WITA</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>

														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															<span class="kt-list-pics kt-list-pics--md"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Muhammad Nasrullah, S.Kom<hr>Direktur Utama" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></span> 
														</div>
														&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-sm btn-label-twitter">Disetujui</a>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time"><span style="color:#0961ae;">15/07/2025</span><br>15:51 WITA</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>

														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															<span class="kt-list-pics kt-list-pics--md"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Muhammad Nasrullah, S.Kom<hr>Direktur Utama" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></span> 
														</div>
														&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-sm btn-label-twitter">Disetujui</a>
													</div>
													
													
												</div>
											</div>

											<!--End::Timeline 3 -->
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

											
<div class="kt-wizard-v4__form">
														<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
														<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-70 ml-auto mr-auto mt-3">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						
						
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
</body>
						

						
						

					

						

				</div>
				</div>
				
</div>
</div>
<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											

									<!--begin::Portlet-->
										
			
			<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-50 ml-auto mr-auto mt-3">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						
						
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
</body>
						

						
						

					

						

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
