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
											Form Tambah Titik Valet Parkir
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;


										</div>
										<div class="btn-group">
				
				
				
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
													<i class="flaticon-search"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Pencarian
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Data Customer Valet
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
													<i class="flaticon-user-ok"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Detail Data
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Customer Valet
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														2
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-map-location"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Data Titik Valet
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														3
													</div>
											</div>
										</div>
										
										
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="fa fa-motorcycle"></i>
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
								<div class="col-xl-9">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pencarian Customer Valet</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-4">
                          <label>No. HP Customer :</label>
                          <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
                        </div>

                        <div class="col-lg-3">
                          <label>ID Customer :</label>
                          <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
                        </div>

                        <div class="col-lg-3">
                          <label>Nama Customer :</label>
                          <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
                        </div>
						<div class="col-lg-2">
                          <label>&nbsp;</label>
                          <div><a href="#" class="btn btn-success btn-sm m-btn 	m-btn m-btn--icon">
															<span>
																<i class="flaticon-search"></i>
																<span>Cari Data</span>
															</span>
														</a>
                        </div>
                        </div>
						 
                      </div>
                     
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
                      </div>
                    </div>
							<!--end:: Portlet-->

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Hasil Pencarian Customer</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
                        <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th colspan="9" bgcolor="#f7fcff">Data Customer</th>
											  <th width="1%" rowspan="2" bgcolor="#feffed">Tipe Customer</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">QR Code<br /></th>
											  <th width="1%" bgcolor="#f7fcff">ID Customer<br /></th>
											  <th width="2%" bgcolor="#f7fcff">Logo</th>
											  <th width="7%" bgcolor="#f7fcff">Nama Customer</th>
											  <th width="10%" bgcolor="#f7fcff">Alamat</th>
											  <th width="2%" bgcolor="#f7fcff">Tanggal<br />
											    Registrasi</th>
											  <th width="1%" bgcolor="#f7fcff">Email</th>
											  <th width="1%" bgcolor="#f7fcff">HP</th>
											  <th width="1%" bgcolor="#f7fcff">WA</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td style="text-align:center" nowrap><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td style="text-align:center" nowrap>0001CV923</td>
												
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/img/project-logos/2.png" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Muhammad Nasrullah</td>

												
												
												<td style="text-align:left" nowrap>Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/9</td>
												
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--primary kt-badge--md kt-badge--inline">Silver</span></td>
										  </tr>
										  
									    </tbody>
									</table>
                    </div>
                    </div>
                    </div>
							<!--end:: Portlet-->
										</div>


								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Petugas Pelaksana</div><br>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-7">
                          <label>Nama Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
                        </div>
						<div class="col-lg-5">
                          <label>NIP Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>
                        </div>
						 

					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Department :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
						
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Bagian :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan">
                        </div>
						
                      </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Pemetaan dan Pengembangan">
                        </div>
						
                      </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-6">
                          <label>Pangkat / Golongan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pena">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                      </div>
                     
                      </div>
                        

									<!--end::Portlet-->
								</div>
								</div>
								
								</div>


							<!--end:: Portlet-->


										
										
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											
										
										<div class="row">
										
										<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Customer</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						
						
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tipe Badan Usaha :</label>
                           <input type="text" class="form-control form-control-sm"  placeholder="PT" disabled>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Tipe Customer :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="Silver" disabled>
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Badan Usaha :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="iLugroup Multimedia Indonesia" disabled>
                        </div>
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="Jl. Toddopuli Raya Timur" disabled>

                        </div>
						<div class="col-lg-2">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="90000" disabled>

                        </div>
						<div class="col-lg-2">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="003" disabled>
                        </div>
						<div class="col-lg-2">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="005" disabled>
                        </div>
					
						
					 
                    
									 
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
						 <div class="col-lg-4">
                          
                                <label>Kecamatan :</label>
								
                                <input type="text" class="form-control form-control-sm"  placeholder="Biringkanaya" disabled>
                            </div>
						<div class="col-lg-4">
                          
                                <label>Kelurahan :</label>
								
                                <input type="text" class="form-control form-control-sm"  placeholder="Bakung" disabled>
                            </div>
							<div class="col-lg-4">
                          <label class=""><span style="color:#ff0000">*</span> Kota :</label>
                        <input type="text" class="form-control form-control-sm"  placeholder="Makassar" disabled>
                      </div>
						
					
						
					 
                    
									 
                      </div>						  
					  
					   

<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-6">
					                           <label>Email :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="hubungi@ilugroup.co.id" disabled>
					                         </div>
						<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>

                       <input type="text" class="form-control form-control-sm"  placeholder="082244444436" disabled>

                      </div>
					  <div class="col-lg-3">
                          <label class="">Whatsapp :</label>
                         
                         <input type="text" class="form-control form-control-sm"  placeholder="082244444436" disabled>
                  
                      </div>
                      </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
						<div class="col-lg-6">
					                           <label><span style="color:#ff0000">*</span>Zona :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="Biringkanaya" disabled>
					                         </div>
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> Wilayah :</label>

                         <input type="text" class="form-control form-control-sm"  placeholder="Bakung" disabled>
                            </div>

					  
                      </div>
					  
											
									</div>
									</div>
									
                    </div>
                    </div>
					
					<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Penanggung Jawab</div><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     <div class="form-group row">
                      
						
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> No. Identitas KTP :</label>
                           <input type="text" class="form-control form-control-sm"  placeholder="737112301870002" disabled>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                            <input type="text" class="form-control form-control-sm"  placeholder="Direksi" disabled>
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="Muhammad Nasrullah, S.Kom" disabled>
                        </div>
                        </div>
						 
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Alamat :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="Jl. Toddopuli Raya Timur" disabled>
                        </div>
						<div class="col-lg-2">
                          <label>Kode Pos :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="90233" disabled>
                        </div>
						<div class="col-lg-2">
					                           <label>RT :</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="003" disabled>
					                         </div>
											 <div class="col-lg-2">
					                           <label>RW :</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="005" disabled>
					                         </div>
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-4">
                          
                                <label>Kecamatan :</label>
								
                                <input type="text" class="form-control form-control-sm"  placeholder="Biringkanaya" disabled>
                            </div>
						<div class="col-lg-4">
                          
                                <label>Kelurahan :</label>
								
                               <input type="text" class="form-control form-control-sm"  placeholder="Bakung" disabled>
                            </div>
							<div class="col-lg-4">
                          <label class=""><span style="color:#ff0000">*</span> Kota :</label>
                       <input type="text" class="form-control form-control-sm"  placeholder="Makassar" disabled>
                      </div>
							
                            </div>
						
						
					 
                    
									 
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
						<div class="col-lg-6">
					                           <label>Email :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx" disabled>
					                         </div>
						<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>

                        <input type="text" class="form-control form-control-sm" placeholder="082244444436" disabled>

                      </div>
					  <div class="col-lg-3">
                          <label class="">Whatsapp :</label>
                          
                        <input type="text" class="form-control form-control-sm" placeholder="082244444436" disabled>
          
                      </div>
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					   <div class="form-group row">
					  
                      </div>
					  
                      </div>
					  
					  
					
									</div>
									
									
									
                    </div>
					
                    </div>
					<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">ID Customer</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row"
																										<div class="col-lg-12">
																											 <input type="text" class="form-control form-control-sm" placeholder="0001CV923" disabled>
																										
																									</div>
																									</div>
																								</div>
																							</div>
									<div class="kt-portlet kt-portlet--height-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Logo Badan Usaha</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/img/project-logos/2.png&quot;);"></div>
																												
																												
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

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											
										
										
								<div class="row">
										<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Titik Valet</div><br>
										<div class="kt-portlet__body">
																								<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="1%" bgcolor="#f7fcff">ID Titik Valet</td>
																								  <td width="15%" bgcolor="#f7fcff">Nama Titik Valet</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td valign="top" style="text-align:center">1</td>
																								  <td style="text-align:center">0001TV923</td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder=""></td>
																								  </tr>
																									
																							
																						</table>
																							</div>

									</div>

									</div>
										
										
					
									
										



								</div>
														</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
															
															
																<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="0.5%" bgcolor="#f7fcff">NO</td>
    <td width="3%" bgcolor="#f7fcff">ID NFC<br>KENDARAAN</td>
    <td width="1.7%" bgcolor="#f7fcff">NO. PLAT<br>KENDARAAN</td>
    <td width="7%" bgcolor="#f7fcff">NAMA PEMILIK</td>
    <td width="11%" bgcolor="#f7fcff">ALAMAT PEMILIK</td>
    <td width="7%" bgcolor="#f7fcff">MERK<br>/ TYPE</td>
    <td width="2.5%" bgcolor="#f7fcff">JENIS<br>/ MODEL</td>
    <td width="1%" bgcolor="#f7fcff">TAHUN<br>PEMBUATAN</td>
    <td width="6%" bgcolor="#f7fcff">NOMOR<br>RANGKA</td>
    <td width="3.5%" bgcolor="#f7fcff">NOMOR<br>MESIN</td>
    <td width="5%" bgcolor="#f7fcff">FOTO<br>KENDARAAN</td>
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1" /></td>
    <td><input type="text" class="form-control form-control-sm" placeholder="scan NFC" /></td>
    <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="DD 1111 CIE" /></td>
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
    <td style="text-align:center"><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">-Pilih-</label>
												</div>
											</div></td>
    
																								</tr>
																								

																								<tr data-repeater-item>
																								  
																								</tr>
																							</tbody>
																							
																						</table>
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 4-->

													<!--begin: Form Actions -->
													<div class="kt-form__actions">
														<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
															Sebelumnya
														</button>
														<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
															Kirim Data
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
