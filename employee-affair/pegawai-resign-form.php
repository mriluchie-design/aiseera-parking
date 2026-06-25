<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>



      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Form
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Resign Pegawai</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
								
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="pegawai-resign.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
													<i class="flaticon-file-2"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form Resign
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Detail Resign
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
													<i class="flaticon-user-ok"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Data
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Kewajiban Pegawai
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
													<i class="flaticon-background"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview Surat
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Pemberhentian
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
													<i class="flaticon-browser"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview Surat
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Pengalaman Kerja
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
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
										<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pegawai Resign</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-4">
                          <label>Cari Pegawai :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan dan Asset" class="a">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional" class="a">
					 																<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Teknologi dan Riset" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
                        </div>
<div class="col-lg-2">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>

                        <div class="col-lg-2">
                          <label class="">Status Pegawai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kontrak">
                      </div>
                        </div>
						
						<div class="col-lg-2">
                          <label class="">Kantor :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                      </div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-4">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                      </div>
                        </div>
						<div class="col-lg-4">
                          <label class="">Bagian :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan">
                      </div>
                        </div>
						<div class="col-lg-4">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Pemetaan dan Pengembangan">
                      </div>
                        </div>
						
                        </div>
						 
						
                      </div>
					  
                    </div>
                    </div>
					
					<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Resign</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
						<div class="col-lg-2">
                          <label class="">No. Surat Pemberhentian :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Auto" disabled>
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label class="">No. Surat Pengalaman Kerja :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Auto" disabled>
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label class="">Ditetapkan di :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Makassar</option>
							  
                             

                          </select>
                        </div>
						<div class="col-lg-2">
                          <label>Tipe Resign :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Kontrak Selesai</option>
                              <option value="2">Diberhentikan Dengan Hormat</option>
                              <option value="3">Dipecat</option>
                              <option value="3">Permintaan Sendiri</option>

                          </select>
                        </div>
						<div class="col-lg-2">
                          <label class="">Tanggal Pengajuan :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label class="">Tanggal Efektif Resign :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
						
						
                        </div>
						
                     
						
                      </div>

                      </div>
					  
                    </div>
                    </div>
					<div class="row">
					<div class="col-xl-12">

									<!--begin::Portlet-->
										
							<!--end:: Portlet-->
							<div class="row">
							
										<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Dasar Pemberhentian</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="50px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder=""></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								
																								
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-label-brand float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus-circle"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													
									
						
						

                        </div>
						
                        </div>
						
						
                      </div>
                    </div>


										</div>
										
										
										


								<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat</div>
							<br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div id="kt_repeater_2">
												<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Tembusan Surat</td>
																								  <td width="50px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                  
									 <optgroup label="Direksi" class="a">
                                      <option value="2" selected="">Yth, Direktur Utama</option>
                                      <option value="2">Yth, Direktur Keuangan</option>
                                      <option value="2">Yth, Direktur Operasional</option>
                                      <option value="2">Yth, Direktur Teknologi & Riset</option>
                                      <option value="2">Yth, Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     <optgroup label="Lainnya" class="a">
 <option value="2">Pertinggal</option>
</optgroup>
<option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
                                  </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                  
									 <optgroup label="Direksi" class="a">
                                      <option value="2">Yth, Direktur Utama</option>
                                      <option value="2"  selected>Yth, Direktur Keuangan</option>
                                      <option value="2">Yth, Direktur Operasional</option>
                                      <option value="2">Yth, Direktur Teknologi & Riset</option>
                                      <option value="2">Yth, Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     <optgroup label="Lainnya" class="a">
 <option value="2">Pertinggal</option>
</optgroup>
<option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
                                  </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
<tr>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                  
									 <optgroup label="Direksi" class="a">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Keuangan</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Teknologi & Riset</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     <optgroup label="Lainnya" class="a">
 <option value="2" selected="">Pertinggal</option>
</optgroup>
<option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
                                  </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-label-brand float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus-circle"></i> Tambah Data</button>
																									</td>
																								</tr>
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
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Upload Surat Resign Pegawai</div><br><br>
										 <div class="kt-portlet__body">
                      
						
						 <div class="form-group row">
                       
					<div class="col-lg-12">
					    
                          <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files, File Format : PDF</span>
													</div>
												</div>
						
						
						
                    </div>
                    </div>
                    </div>
					
							<!--end:: Portlet-->


										</div>
										
										
										
										



								</div>
								</div>
								</div>
								
								

									<!--begin::Portlet-->
										
					
							<!--end:: Portlet-->


									<!--begin::Portlet-->
									
										
														</div>
													</div>
													</div>
								

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
														<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tasking Pegawai</div><br><br>
										 <div class="kt-portlet__body">
                      <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" rowspan="2" bgcolor="#f7fcff">#</th>
												<th width="2%" rowspan="2" bgcolor="#f7fcff">ID Tasking</th>
												<th colspan="4" bgcolor="#f7fcff">Pemberi<br>Tugas</th>
												<th width="8%" rowspan="2" bgcolor="#f7fcff">Uraian Tasking</th>
												<th width="6%" rowspan="2" bgcolor="#f7fcff">Tanggal Tugas</th>
												<th width="6%" rowspan="2" bgcolor="#f7fcff">Deadline</th>
												<th width="6%" rowspan="2" bgcolor="#f7fcff">Progress Tasking</th>
												<th width="2%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
											</tr>
											<tr>
											  <th bgcolor="#f7fcff">Foto</th>
											  <th width="2%" bgcolor="#f7fcff">Nama</th>
											  <th width="12%" bgcolor="#f7fcff">Jabatan</th>
											  <th width="2%" bgcolor="#f7fcff">Kantor</th>
								          </tr>
										</thead>
										<tbody>


										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">2XI2019</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Umum<hr>Umum" data-html="true">
														<img src="../assets/media/users/300_21.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Muhammad Ramadhan Lerrick, ST</td>
												<td style="text-align:left;">Kepala Seksi Administrasi Kepegawaian</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-label-twitter btn-sm">Pusat</button></td>
												<td style="text-align:left;">&nbsp;</td>
												<td style="text-align:center;">12 Oktober 2019<br>09:00 WITA</td>
												<td style="text-align:center">13 Oktober 2019<br>09:00 WITA</td>
												<td style="text-align:center" nowrap><div class="progress">
												  <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">4 dari 10</div>
</div></td>
											  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
															  <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																  <i class="flaticon-more-1"></i>
															  </a>
															  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																  <ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_angsuran">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Tasking</span>
																			</div>
																	  </li>
																	  

																  </ul>
															  </div>
														  </div></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td style="text-align:center;">2XI2019</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002<hr>Umum<hr>Umum" data-html="true">
														<img src="../assets/media/users/100_8.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Deddy Rafsanjani, S.Sos</td>
												<td style="text-align:left" nowrap>Staff Administrasi Keuangan</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-label-twitter btn-sm">Pusat</button></td>
												<td style="text-align:left;">&nbsp;</td>
												<td style="text-align:center;">12 Oktober 2019<br>09:00 WITA</td>
												<td style="text-align:center">13 Oktober 2019<br>09:00 WITA</td>
												<td style="text-align:center" nowrap><div class="progress">
												  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">2 dari 10</div>
</div></td>
											  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
															  <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																  <i class="flaticon-more-1"></i>
															  </a>
															  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																  <ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_angsuran">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Tasking</span>
																			</div>
																	  </li>
																	  

																  </ul>
															  </div>
														  </div></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td style="text-align:center;">2XI2019</td>
												<td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Direksi<hr>Direksi" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></td>
												<td style="text-align:left" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left;">Direktur Utama</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-label-twitter btn-sm">Pusat</button></td>
												<td style="text-align:left;">&nbsp;</td>
												<td style="text-align:center;">12 Oktober 2019<br>09:00 WITA</td>
												<td style="text-align:center">13 Oktober 2019<br>09:00 WITA</td>
												<td style="text-align:center" nowrap><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">8 dari 10</div>
</div></td>
											  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
															  <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																  <i class="flaticon-more-1"></i>
															  </a>
															  <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																  <ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_angsuran">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Tasking</span>
																			</div>
																	  </li>
																	  

																  </ul>
															  </div>
														  </div></td>
										  </tr>
									    </tbody>
									</table>
						
                      </div>
					  
                    </div>
							<!--end:: Portlet-->


										</div>
										
										



								</div>
								<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kasbon Pegawai</div><br><br>
										 <div class="kt-portlet__body">
                      <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="5%" bgcolor="#f7fcff">ID Kasbon</th>
												<th width="7%" bgcolor="#f7fcff">Waktu<br>Pengajuan</th>
												<th width="6%" colspan="2" bgcolor="#f7fcff">Nilai Pinjaman</th>
												<th width="1%" bgcolor="#f7fcff">Bunga</th>
												<th width="3%" bgcolor="#f7fcff">Tenor</th>
												<th width="4%" colspan="2" bgcolor="#f7fcff">Angsuran</th>
												<th width="6%" colspan="2" bgcolor="#f7fcff">Sisa Pinjaman</th>
												<th width="6%" bgcolor="#f7fcff">Progress Angsuran</th>
												<th width="1%" bgcolor="#f7fcff">Status Permohonan</th>
												<th width="2%" bgcolor="#f7fcff">Aksi</th>
											</tr>
										</thead>
										<tbody>


										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">2/IM-KASBON/III/2019</td>
												<td style="text-align:center">12 Oktober 2019 <br>09:00 WITA</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">1.000.000,-</td>
												<td style="text-align:right">0 %</td>
												<td style="text-align:right">10 Bulan</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">100.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">200.000,-</td>
												<td style="text-align:center" nowrap><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">8 dari 10</div>
</div></td>
											  <td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
													    <i class="fa flaticon2-check-mark"></i>
												    </span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_angsuran">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Angsuran</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_pelunasan">
																				<i class="kt-nav__link-icon fa fa-money-bill-wave"></i>
																				<span class="kt-nav__link-text">Ajukan Pelunasan</span>
																			</div>
																		</li>

																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
						
                      </div>
					  
                    </div>
							<!--end:: Portlet-->


										</div>
										
										



								</div>
								<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Inventaris Kantor</div><br><br>
										 <div class="kt-portlet__body">
                      <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="3%" bgcolor="#f7fcff">ID Asset</th>
                                                <th width="2%" bgcolor="#f7fcff">QR Code</th>
                                                <th width="10%" bgcolor="#f7fcff">Nama Barang</th>
                                                <th width="7%" bgcolor="#f7fcff">Tipe Asset</th>
                                                <th width="7%" bgcolor="#f7fcff">Kategori Asset</th>
                                                <th width="7%" bgcolor="#f7fcff">Diserahkan Oleh</th>
												<th width="7%" bgcolor="#f7fcff">Waktu<br>Penyerahan</th>
												<th width="1%" bgcolor="#f7fcff">Status Penyerahan</th>
												<th width="2%" bgcolor="#f7fcff">Aksi</th>
											</tr>
										</thead>
										<tbody>


										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">2/IM-KASBON/III/2019</td>
                                                <td style="text-align:center" nowrap=""><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
                                                <td style="text-align:left;">Laptop Asus Core i5</td>
                                                <td style="text-align:center">Elektronik</td>
                                                <td style="text-align:center">Laptop</td>
                                               <td width="2%" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Muhammad Nasrullah, S.Kom<hr>Direktur Utama" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></td>
												<td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
													    <i class="fa flaticon2-check-mark"></i>
												    </span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_asset">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_serah_terima_asset">
																				<i class="kt-nav__link-icon fa fa-luggage-cart"></i>
																				<span class="kt-nav__link-text">Serah Terima Barang</span>
																			</div>
																		</li>

																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">2/IM-KASBON/III/2019</td>
                                                <td style="text-align:center" nowrap=""><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
                                                <td style="text-align:left;">Laptop Asus Core i5</td>
                                                <td style="text-align:center">Elektronik</td>
                                                <td style="text-align:center">Laptop</td>
                                                <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="000000000001<hr>Muhammad Ramadhan Lerrick, ST<hr>Kepala Bagian Umum dan Kepegawaian" data-html="true">
														<img src="../assets/media/users/300_21.jpg" alt="image">
													</a></td>
												<td style="text-align:center">12 Oktober 2019<br>09:00 WITA</td>
											  <td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
													    <i class="fa flaticon2-check-mark"></i>
												    </span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_asset">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_serah_terima_asset">
																				<i class="kt-nav__link-icon fa fa-luggage-cart"></i>
																				<span class="kt-nav__link-text">Serah Terima Barang</span>
																			</div>
																		</li>

																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
						
                      </div>
					  
                    </div>
							<!--end:: Portlet-->


										</div>
										
										



								</div>
															<div class="kt-wizard-v4__form">
																
															</div>
														</div>
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
														<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">

								<div class="bg-white w-70 ml-auto mr-auto">
									
									<table align="center" border="0" cellpadding="1" style="width: 700px; margin-top:50px; position:relative; top:150px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
  <tr>
    <td colspan="7" style="text-align: center"><u><b>SURAT PEMBERHENTIAN</b></u></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center">Nomor : [Nomor-Surat]/[Nama-Perusahaan]/[Bulan]/[Tahun]</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left"><strong>A.</strong></td>
    <td colspan="6" style="text-align: left"><strong>Dasar :</strong></td>
  </tr>
  
  <tr>
    <td width="17" style="text-align: right">&nbsp;</td>
    <td width="16" valign="top">1.</td>
    <td width="5">&nbsp;</td>
    <td colspan="4">Berdasarkan Surat Permohonan Pengunduran diri</td>
  </tr>
  
 
</table>
<br>
<table align="center" border="0" cellpadding="1" style="width: 700px; position:relative; top:150px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
  <tr>
    <td style="text-align: left"><strong>B.</strong></td>
    <td colspan="7" style="text-align: left"><strong>Disampaikan Kepada :</strong></td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">Nama</td>
    <td>:</td>
    <td width="407" colspan="4">Khaeriah Djamaludin, SH</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">NIP</td>
    <td>:</td>
    <td colspan="4">238230923015</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">Status Pegawai</td>
    <td>:</td>
    <td colspan="4">Pegawai Tetap</td>
  </tr>
  <tr>
    <td width="12" style="text-align: right">&nbsp;</td>
    <td width="22" valign="top">&nbsp;</td>
    <td width="123" valign="top">Departemen</td>
    <td width="14">:</td>
    <td colspan="4">Pengembangan Usaha &amp; Kerja Sama</td>
  </tr>
  <tr>
    <td width="12" style="text-align: right">&nbsp;</td>
    <td width="22" valign="top">&nbsp;</td>
    <td width="123" valign="top">Bidang</td>
    <td width="14">:</td>
    <td colspan="4">Pengembangan</td>
  </tr>
  <tr>
    <td width="12" style="text-align: right">&nbsp;</td>
    <td width="22" valign="top">&nbsp;</td>
    <td width="123" valign="top">Jabatan</td>
    <td width="14">:</td>
    <td colspan="4">Kepala Seksi Pemetaan dan Pengembangan</td>
  </tr>
  
 
</table>
<div>&nbsp;</div>
<table align="center" border="0" cellpadding="1" style="width: 700px; position:relative; top:150px; text-align:justify; line-height:2; font-family: Roboto; font-size: 13px;">
  <tr>
    <td style="text-align: left"><strong>C.</strong></td>
    <td colspan="6" style="text-align: left"><strong>Dasar Pertimbangan:</strong></td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">1.</td>
    <td>&nbsp;</td>
    <td width="1182" colspan="4">Berdasarkan Permintaan sendiri mundur sebagai Tenaga  Kontrak [Nama-Perusahaan],</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">2.</td>
    <td>&nbsp;</td>
    <td colspan="4">Atas maksud Point 1 diatas, maka dengan ini  Direksi <strong>[Nama-Perusahaan]</strong> memutuskan untuk <strong>Memberhentikan dengan Hormat</strong>; Saudara selaku tenaga Kontrak <strong>[Nama-Perusahaan]</strong> terhitung  mulai tanggal <strong>[Tanggal-Efektif]</strong>, sekaligus mengucapkan terimakasih atas pengabdian dan kerjasamanya selama bekerja di <strong>[Nama-Perusahaan]</strong>. </td>
  </tr>
  <tr>
    <td width="17" style="text-align: right">&nbsp;</td>
    <td width="16" valign="top">&nbsp;</td>
    <td width="5">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
</table><br>
<table align="center" border="0" cellpadding="1" style="width: 700px; position:relative; top:150px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
  <tr>
    <td colspan="7" style="text-align: justify">Demikian surat pemberhentian ini dibuat dan  disampaikan kepada yang bersangkutan untuk diketahui.</td>
  </tr>
</table>


								<div><span>&nbsp;</span>
   <table align="center" border="0" cellpadding="1" style="width: 700px;  margin-top:100px; position:relative; top:150px; text-align:left; line-height:1.5; font-family: Roboto; font-size: 13px;">
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
							  <td colspan="8" valign="top"><p>Tembusan :</p></td>
							  <td width="6" >&nbsp;</td>
							  <td width="31" rowspan="3" style="text-align: right"></td>
							  <td width="217" style="text-align: left">[Tempat, Tanggal/Bulan/Tahun]</td>
  </tr>
							<tr>
							  <td valign="top">1</td>
							  <td colspan="7" valign="top">Yth, Direktur Utama</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" style="text-align: left">[Nama-Perusahaan]</td>
  </tr>
							
  </tr>
							<tr>
							  <td valign="top">2.</td>
							  <td colspan="7" valign="top">Yth, Direktur Operasional</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" style="text-align: left">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">3.</td>
							  <td colspan="7" valign="top">Arsip</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" style="text-align: left"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="562" valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" style="text-align: left">&nbsp;</td>
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
							  <td valign="top" style="text-align: left"><u><b>[Nama-Pejabat]</b></u></td>
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
							  <td valign="top" style="text-align: left">[Jabatan-Pejabat]</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
							
							
							
							
							
  </table>
<table align="center" class="footnote-1" width="700px" style="margin-top:220px; margin-bottom:50px; padding-top:5px; padding-bottom:20px;">
        <thead>
            <tr><th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr></thead>
        <tbody>
            <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
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
               <td colspan="2" valign="left" style="text-align: center">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan Peraturan Perusahaan yang berlaku, Perusahaan mengatur
                            bahwa
                            Dokumen ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
             <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            <tr style=" width:700px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA - Halaman 1 dari 1</i></span></td>
            </tr>
<tr>
                <td>&nbsp;</td>
            </tr>
<tr>
                <td>&nbsp;</td>
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
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
														<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">

								<div class="bg-white w-70 ml-auto mr-auto">
									
									<table align="center" border="0" cellpadding="1" style="width: 700px; position:relative; top:150px; margin-top:50px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
  <tr>
    <td colspan="7" style="text-align: center"><u><b>SURAT PENGALAMAN KERJA</b></u></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center">Nomor : [Nomor-Surat]/[Nama-Perusahaan]/[Bulan]/[Tahun]</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
<tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: left">Yang bertanda tangan dibawah ini menerangkan bahwa :</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">Nama</td>
    <td>:</td>
    <td width="435" colspan="4">Khaeriah Djamaludin, SH</td>
  </tr>
  <tr>
    <td style="text-align: right">&nbsp;</td>
    <td valign="top">NIP</td>
    <td>:</td>
    <td colspan="4">238230923015</td>
  </tr>
  <tr>
    <td width="40" style="text-align: right">&nbsp;</td>
    <td width="77" valign="top">Alamat.</td>
    <td width="30">:</td>
    <td colspan="4">Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/9</td>
  </tr>
</table>
<br>
<br>
<table align="center" border="0" cellpadding="1" style="width: 700px; position:relative; top:150px; text-align:justify; line-height:2; font-family: Roboto; font-size: 13px;">
  <tr>
    <td colspan="8" style="text-align: justify">Adalah benar pernah bekerja pada <strong>[Nama-Perusahaan]</strong> terhitung sejak tanggal<strong> [Tanggal-Masuk-Kerja]</strong> hingga <strong>[Tanggal-Efektif]</strong> dengan jabatan sebagai <strong>[Jabatan-Pegawai]</strong>. Selama bekerja, yang bersangkutan telah bekerja dengan baik dalam mengerjakan tugas dan tanggung jawabnya serta tidak pernah terlibat dalam tindakan yang merugikan perusahaan.</td>
  </tr>
  <tr>
    <td width="12" style="text-align: right">&nbsp;</td>
    <td width="22" valign="top">&nbsp;</td>
    <td width="123" valign="top">&nbsp;</td>
    <td width="14">&nbsp;</td>
    <td width="407" colspan="4">&nbsp;</td>
  </tr>
</table>
<table align="center" border="0" cellpadding="1" style="width: 700px; position:relative; top:150px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
  <tr>
    <td colspan="8" style="text-align: justify">Demikian surat keterangan ini dibuat dengan sebenar-benarnya untuk dipergunakan sebagaimana mestinya.</td>
  </tr>
  
</table>


				
   <table align="center" border="0" cellpadding="1" style="width: 700px;  margin-top:100px; position:relative; top:150px; text-align:left; line-height:1.5; font-family: Roboto; font-size: 13px;">
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
							  <td colspan="8" valign="top"><p>Tembusan :</p></td>
							  <td width="6" >&nbsp;</td>
							  <td width="31" rowspan="3" style="text-align: right"></td>
							  <td width="217" style="text-align: left">[Tempat, Tanggal/Bulan/Tahun]</td>
  </tr>
							<tr>
							  <td valign="top">1</td>
							  <td colspan="7" valign="top">Yth, Direktur Utama</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" style="text-align: left">[Nama-Perusahaan]</td>
  </tr>
							
  </tr>
							<tr>
							  <td valign="top">2.</td>
							  <td colspan="7" valign="top">Yth, Direktur Operasional</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" style="text-align: left">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">3.</td>
							  <td colspan="7" valign="top">Arsip</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" style="text-align: left"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="562" valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top" style="text-align: left">&nbsp;</td>
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
							  <td valign="top" style="text-align: left"><u><b>[Nama-Pejabat]</b></u></td>
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
							  <td valign="top" style="text-align: left">[Jabatan-Pejabat]</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
							
							
							
							
							
  </table>
  <table align="center" class="footnote-1" width="700px" style="margin-top:320px; margin-bottom:50px; padding-top:5px; padding-bottom:20px;">
        <thead>
            <tr><th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr></thead>
        <tbody>
            <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
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
               <td colspan="2" valign="left" style="text-align: center">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan Peraturan Perusahaan yang berlaku, Perusahaan mengatur
                            bahwa
                            Dokumen ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
             <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            <tr style=" width:700px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA - Halaman 1 dari 1</i></span></td>
            </tr>
<tr>
                <td>&nbsp;</td>
            </tr>
<tr>
                <td>&nbsp;</td>
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
														<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
													</div>

												<div class="col-lg-4">
														<label>Nilai Angsuran :</label>
														<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
													</div>
												<div class="col-lg-4">
														<label class="kt-font-danger">Sisa Angsuran :</label>
														<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Bayar Angsuran :</label>
														<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
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
