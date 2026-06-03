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
				Detail Posting Anggaran
			</h3>

		</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="mutasi-pegawai.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
				<button type="button" class="btn btn-success">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-right" style="min-width:17rem !important">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon-layer"></i>
								<span class="kt-nav__link-text">Sebagai Draft</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon fa fa-paper-plane"></i>
								<span class="kt-nav__link-text">Kirim</span>
							</a>
						</li>
						
					</ul>
				</div>
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
													<i class="flaticon2-website"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														SETUP
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														DETAIL ANGGARAN
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
														RINCIAN
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														DETAIL DATA RKAP
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
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
														RANGKUMAN
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														DOKUMEN RKAP
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>
										
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-box-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														PREVIEW
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														CETAK DATA RKAP
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
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

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											
											
								<div class="row">
											<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Anggaran</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-6">
                          <label>ID Anggaran :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="PMR.UM.1.2023">
                        
                        </div>
						<div class="col-lg-6">
                          <label>Tahun Anggaran :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2024">
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					 <div class="col-lg-6">
                          <label>Tipe Anggaran :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pokok">
                        
                        </div>
						
						<div class="col-lg-6">
                          <label>Department :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum">
                        
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-6">
                          <label>Kantor :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        
                        </div>

                        </div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												


												</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Petugas Pelaksana</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-8">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
                        
                        </div>
                       <div class="col-lg-4">
                          <label>NIP :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					 <div class="col-lg-8">
                          <label>Department :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset">
                        
                        </div>
						<div class="col-lg-4">
                          <label>Kantor :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-12">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Perencanaan Anggaran">
                        
                        </div>

                        </div>
						
						
						

                        </div>
												</div>
												</div>
												
									</div>
								
								<div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Info Lainnya</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group">
									<label>Catatan :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder="" disabled></textarea>
								</div>
								
								
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>



								</div>
														</div>
														</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<form class="kt-form" id="kt_form">

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											
											
								<div class="row">
											<div class="col-xl-12">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">RINCIAN RENCANA KERJA ANGGARAN PERUSAHAAN</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											

											<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="1%" bgcolor="#f7fcff">#</th>
																						<th width="5%" bgcolor="#f7fcff">AKUN INDUK</th>
																						<th width="13%"bgcolor="#f7fcff">URAIAN KEBUTUHAN</th>
																						<th colspan="2" bgcolor="#f7fcff">VOLUME</th>
																						<th width="8%" bgcolor="#f7fcff">HARGA SATUAN</th>
																						<th width="8%" bgcolor="#f7fcff">NILAI</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td>A</td>
																					  <td colspan="6"><input type="text" class="form-control form-control-sm" placeholder="51.01.00 - BIAYA CETAKAN" disabled="disabled" /></td>
																				  </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td style="text-align:right">1</td>
																					  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK KERTAS KOP" disabled="disabled" /></td>
																					  <td width="5%" style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="4" disabled="disabled" /></td>
																					  <td width="5%" style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Rim" disabled="disabled" /></td>
																					  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																				  </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td style="text-align:right">2</td>
																					  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK AMPLOP KOP" disabled="disabled" /></td>
																					  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="4" disabled="disabled" /></td>
																					  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Dus" disabled="disabled" /></td>
																					  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																				  </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td style="text-align:right">3</td>
																					  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK MAP PARKIR" disabled="disabled" /></td>
																					  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="50" disabled="disabled" /></td>
																					  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Buah" disabled="disabled" /></td>
																					  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																				  </tr>
																</tbody>
																
																<tfoot style="border-top: 2px solid #5867dd;">
																	<tr>
																		<th colspan="6" bgcolor="#f7fcff" class="text-right" style="font-style: italic;"><strong>Sub Total</strong></th>
																		<th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																		  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
																		  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																		  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
																	    </div></th>
																	</tr>
																	<tr>
																	  <td>B</td>
																	  <td colspan="6"><input type="text" class="form-control form-control-sm" placeholder="51.02.00 - BIAYA SURVEY / UJI PETIK" disabled="disabled" /></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">1</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK KERTAS KOP" disabled="disabled" /></td>
																	  <td width="5%" style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="4" disabled="disabled" /></td>
																	  <td width="5%" style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Rim" disabled="disabled" /></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">2</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK AMPLOP KOP" disabled="disabled" /></td>
																	  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="4" disabled="disabled" /></td>
																	  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Dus" disabled="disabled" /></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">3</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK MAP PARKIR" disabled="disabled" /></td>
																	  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="50" disabled="disabled" /></td>
																	  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Buah" disabled="disabled" /></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																  </tr>
																	<tr style="border-top: 2px solid #5867dd;">
																	  <th colspan="6" bgcolor="#f7fcff" class="text-right" style="font-style: italic;"><strong>Sub Total</strong></th>
																	  <th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon3">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon3">,-</span></div>
																	    </div></th>
																  </tr>
																	<tr>
																	  <td>C</td>
																	  <td colspan="6"><input type="text" class="form-control form-control-sm" placeholder="51.03.00 - BIAYA OPERASIONAL KOLEKTOR" disabled="disabled" /></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">1</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK KERTAS KOP" disabled="disabled" /></td>
																	  <td width="5%" style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="4" disabled="disabled" /></td>
																	  <td width="5%" style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Rim" disabled="disabled" /></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">2</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK AMPLOP KOP" disabled="disabled" /></td>
																	  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="4" disabled="disabled" /></td>
																	  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Dus" disabled="disabled" /></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">3</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="- CETAK MAP PARKIR" disabled="disabled" /></td>
																	  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="50" disabled="disabled" /></td>
																	  <td style="text-align:right"><input type="number" class="form-control form-control-sm " placeholder="Buah" disabled="disabled" /></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																  </tr>
																	<tr style="border-top: 2px solid #5867dd; font-style: italic;">
																	  <th colspan="6" bgcolor="#f7fcff" class="text-right"><strong>Sub Total</strong></th>
																	  <th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon7">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon7">,-</span></div>
																	    </div></th>
																  </tr>
																	<tr>
																	  <th colspan="7" bgcolor="#fff" class="text-right">&nbsp;</th>
																  </tr>
																	<tr>
																	  <th colspan="6" bgcolor="#feffed" class="text-right">GRAND TOTAL</th>
																	  <th bgcolor="#feffed"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon7">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon7">,-</span></div>
																	    </div></th>
																  </tr>
																	<tr>
																	  <th colspan="7" bgcolor="#feffed" class="text-left">Terbilang :<span style="text-align: left"></span></th>
																  </tr>
																</tfoot>
																			</table>
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
													<form class="kt-form" id="kt_form">

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">
														<div class="row">
											<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						
						
                       

                        </div>
						
												</div>
												
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						
						
                       

                        </div>
						
												</div>
												
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Perbandingan Anggaran</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						
						<div class="col-lg-12">
                          <label>Periode Realisasi Anggaran :</label>
						  <div class='input-group' >
                        <input type='text' class="form-control kt_daterangepicker_2" readonly placeholder="Select date range" />
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                        </div>
                      </div>
                        
                        </div>
                       

                        </div>
						
												</div>
												
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								
								
								



								</div>

											
											
								<div class="row">
											<div class="col-xl-12">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">RANGKUMAN DOKUMEN RENCANA KERJA ANGGARAN PERUSAHAAN</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div id="kt_repeater_1">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="5%" bgcolor="#f7fcff">KODE<br>REKENING</td>
																								  <td width="15%" bgcolor="#f7fcff">URAIAN</td>
																								   <td width="8%" bgcolor="#f7fcff">RKAP POKOK<BR />TAHUN 2024</td>
																								  <td width="8%" bgcolor="#f7fcff">REALISASI JANUARI <BR />S/D 31 OKTOBER 2023</td>
																								  <td width="8%" bgcolor="#f7fcff">RKAP PERUBAHAN<BR />TAHUN 2023</td>
																								  <td width="8%" bgcolor="#f7fcff">NAIK / TURUN</td>
																								  <td width="3%" bgcolor="#f7fcff">KETERANGAN</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																								  <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="51.01.00"></td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BIAYA CETAKAN"></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm ">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">BERTAMBAH</span></td>
																									</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																								  <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="51.02.00"></td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BIAYA SURVEY / UJI PETIK"></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm ">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">BERKURANG</span></td>
																									</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																								  <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="51.03.00"></td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BIAYA OPERASIONAL KOLEKTOR"></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm ">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																									<td style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">TETAP</span></td>
																									</tr>
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						
												
												</div>
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
															
														<div class="bg-white ml-auto mr-auto">
									<img src="../assets/img/header.png" style="width:auto; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;"/>
									<table align="center" border="0" cellpadding="0" style="width: auto; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td colspan="7" style="text-align: center"><b>RANGKUMAN DOKUMEN PELAKSANAAN</b><br><b>RENCANA KERJA ANGGARAN PERUSAHAAN (RKAP) POKOK</b></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center"><b>DEPARTMENT : OPERASIONAL<b></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  
  
 
</table>
<div>&nbsp;</div>
<table width="900px" class="table table-bordered table-hover">
																								<thead>
																								<tr style="text-align:center; font-weight: bold;">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="8%" bgcolor="#f7fcff">KODE<br>REKENING</td>
																								  <td width="10%" bgcolor="#f7fcff">URAIAN</td>
																								   <td width="10%" colspan="2" bgcolor="#f7fcff">RKAP POKOK<BR />
																							      TAHUN 2024</td>
																								  <td width="10%" colspan="2" bgcolor="#f7fcff">REALISASI JANUARI <BR />S/D 31 OKTOBER 2023</td>
																								  <td width="10%" colspan="2" bgcolor="#f7fcff">RKAP PERUBAHAN<BR />TAHUN 2023</td>
																								  <td width="10%" colspan="2" bgcolor="#f7fcff">NAIK / TURUN</td>
																								  <td width="5%" bgcolor="#f7fcff">KETERANGAN</td>
																								  </tr>
																								<thead>
																									<tbody>
																								<tr>
																								  <td style="text-align:right">1</td>
																								  <td style="text-align:center">51.01.00</td>
																									<td width="10%" style="text-align:left">BIAYA CETAKAN</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td style="text-align:center">BERTAMBAH</td>
																									</tr>
																								<tr>
																								  <td style="text-align:right">2</td>
																								  <td style="text-align:center">51.02.00</td>
																									<td width="10%" style="text-align:left">BIAYA SURVEY / UJI PETIK</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td style="text-align:center">BERKURANG</td>
																									</tr>
																								<tr>
																								  <td style="text-align:right">3</td>
																								  <td style="text-align:center">51.03.00</td>
																									<td width="10%" style="text-align:left">BIAYA OPERASIONAL KOLEKTOR</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td nowrap="nowrap" style="text-align:left">Rp.</td>
																									<td nowrap="nowrap" style="text-align:right">2.000.000.000,-</td>
																									<td style="text-align:center">TETAP</td>
																									</tr>
																							</tbody>
																							
																						</table>
								
</div>
								</div>
								<div><span>&nbsp;</span>
   <table align="center" border="0" cellpadding="1" style="width: 900px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
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
  <img src="../assets/img/footer.png" style="width:1000px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
													</div>
													</div>

													<!--end: Form Wizard Step 4-->

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
					<!--begin::Modal 1-->
									<div class="modal fade" id="modal_angsuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">DATA ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" >NO</td>
    <td width="12%" bgcolor="#f7fcff">No. Kwitansi</td>
    <td width="8%" bgcolor="#f7fcff">Tgl Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Nominal Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Sisa Kasbon</td>
    <td width="3%" bgcolor="#f7fcff">Kasir</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center">8/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Agustus 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">200.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center">7/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juli 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">300.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center">6/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juni 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">400.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center">5/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Mei 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">500.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">4/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 April 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">600.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">3/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Maret 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">700.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">2/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Februari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">800.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">1/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Januari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">900.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>

</table>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-pagination  kt-pagination--danger">
													<select class="form-control kt-font-danger" style="width: 60px">
															<option value="10">10</option>
															<option value="20">20</option>
															<option value="30">30</option>
															<option value="50">50</option>
															<option value="100">100</option>
														</select>
														<span class="pagination__desc">
															Menampilkan 10 dari 230 Data
														</span>

													<div class="kt-pagination__toolbar">
														<ul class="kt-pagination__links">
														<li class="kt-pagination__link--first">
															<a href="#"><i class="fa fa-angle-double-left kt-font-danger"></i></a>
														</li>
														<li class="kt-pagination__link--next">
															<a href="#"><i class="fa fa-angle-left kt-font-danger"></i></a>
														</li>
														<li class="kt-pagination__link--active">
															<a href="#">1</a>
														</li>
														<li>
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
														</li>
														<li>
															<a href="#">...</a>
														</li>
														<li class="kt-pagination__link--prev">
															<a href="#"><i class="fa fa-angle-right kt-font-danger"></i></a>
														</li>
														<li class="kt-pagination__link--last">
															<a href="#"><i class="fa fa-angle-double-right kt-font-danger"></i></a>
														</li>
													</ul>
													</div>
												</div>
												<div class="tab-pane" id="kt_tabs_7_2" role="tabpanel">
													It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
												</div>
												<div class="tab-pane" id="kt_tabs_7_3" role="tabpanel">
													<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">

										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>No. Tanda Terima Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-6">
														<label>Waktu Penyerahan Berkas :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pengirim Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Penerima Berkas :</label>
														<input type="text" class="form-control form-control-sm">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" >

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Tanda Tangan Pengirim Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>

												<div class="col-lg-6">
														<label>Tanda Tangan Penerima Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

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
