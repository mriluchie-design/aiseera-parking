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
											Detail Perjalanan Dinas Pegawai
									</h3>

								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#0961ae">
											002/SPPD/XII/2022 </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">
										</form>
									</div>
								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="#" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
														Form
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
														Estimasi Biaya
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
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-notepad"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Surat Perintah
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Perjalanan Dinas
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
														Surat Tugas
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Perjalanan Dinas
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
								<div class="col-xl-5">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pegawai</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Kantor :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Pusat</option>
						                              <option value="3">Nama Cabang A</option>
						                              <option value="3">Nama Cabang B</option>
						                             
													
						                          </select>
                        </div>
						<div class="col-lg-6">
                          <label>Nama Pegawai :</label>
                        <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">NIP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000000000001">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Status Pegawai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap">
                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum">
                      </div>
                        </div>

                        </div>

						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Divisi :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum">
                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha dan Kerjasama">
                      </div>
                        </div>

                        </div>

                        </div>
                        </div>
                        </div>
                        </div>
						<div class="col-xl-7">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Perjalanan Dinas</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						<div class="col-lg-4">
                          <label>No. SPPD :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238/10.1/PERUMDA-PMR/XII/2022">
                        </div>
						
<div class="col-lg-4">
                          <label>Tipe Perjalanan Dinas :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
							  <option value="2" selected>Project</option>
                              <option value="3">Operasional Kantor</option>
                              
							  

                          </select>
                        </div>
						<div class="col-lg-4">
                          <label>Jenis Perjalanan Dinas :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Dalam Kota</option>
                              <option value="3">Luar Kota</option>
                              <option value="3">Luar Negeri</option>

                          </select>
                        </div>
						
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						
                       
                       
						
<div class="col-lg-4">
                          <label>Transportasi :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Pesawat Udara</option>
                              <option value="3">Kapal</option>
                              <option value="3">Kendaraan Pribadi</option>
                              <option value="3">Kendaraan Dinas</option>
                              <option value="3">Kereta Api</option>

                          </select>
                        </div>
						<div class="col-lg-4">
                          <label>Tanggal Berangkat :</label>
                         <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="== Pilih Tanggal ==" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
						 <div class="col-lg-4">
                          <label>Estimasi Tanggal Kembali :</label>
                         <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="== Pilih Tanggal ==" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>
                        </div>
						

                        </div>

						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label>Kota Asal :</label>
                         <div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" name="param">
					 															<optgroup label="Sulawesi Selatan">
					 																<option value="AK" selected>Makassar</option>
					 																<option value="HI">Bantaeng</option>
					 															</optgroup>
					 															<optgroup label="Pacific Time Zone">
					 																<option value="CA">California</option>
					 																<option value="NV" >Nevada</option>
					 																<option value="OR">Oregon</option>
					 																<option value="WA">Washington</option>
					 															</optgroup>

					 														</select>
					                       </div>
                        </div>
						<div class="col-lg-4">
                          <label>Kota Tujuan :</label>
                         <div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" name="param">
					 															<optgroup label="Jayapura">
					 																<option value="AK" selected>Sorong</option>
					 																<option value="HI">Bantaeng</option>
					 															</optgroup>
					 															<optgroup label="Pacific Time Zone">
					 																<option value="CA">California</option>
					 																<option value="NV" >Nevada</option>
					 																<option value="OR">Oregon</option>
					 																<option value="WA">Washington</option>
					 															</optgroup>

					 														</select>
					                       </div>
                        </div>

                        </div>

                        </div>
                        </div>
                        </div>
                        </div>






									<!--end::Portlet-->
								</div>
					
							<div class="row">
							
										<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Maksud Perjalanan Dinas</div><br><br>
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
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Form Surat Tugas</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  <div class="col-lg-6">
                          <label class="">No. Surat Tugas :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="097/ST/XII/2022">
                        </div>
						
                       
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                       <div class="col-lg-12">
					    <label>Dasar Surat Tugas :</label>
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
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													
									
						
						

                        </div>
									</div>
						
						
                    </div>
					
							<!--end:: Portlet-->


										</div>
										
										
										



								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat Tugas</div><br><br>
										 <div class="kt-portlet__body">
                      
						
						 <div class="form-group row">
                       
					<div class="col-lg-12">
					   
                          <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
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
                              <option value="AK" Selected>Direktur Utama</option>
                              <option value="HI">Direktur Umum</option>
                              <option value="HI">Direktur Keuangan</option>
                              <option value="HI">Direktur Operasional</option>
                              <option value="HI">Pertinggal.</option>
                            </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK" Selected>Direktur Utama</option>
                              <option value="HI">Direktur Umum</option>
                              <option value="HI">Direktur Keuangan</option>
                              <option value="HI">Direktur Operasional</option>
                              <option value="HI">Pertinggal.</option>
                            </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													
									
						
						
												
												</div>
									</div>
						
						
                    </div>
					
							<!--end:: Portlet-->


										</div>
										
										
										



								</div>
								

									<!--begin::Portlet-->
										
					
							<!--end:: Portlet-->


									<!--begin::Portlet-->
								<div class="col-xl-12">
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pelaksana</div><br>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
                        <div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="1%" bgcolor="#f7fcff">Kantor</td>
																									<td width="2%" bgcolor="#f7fcff">Nama Pegawai</td>
																									<td width="4%" bgcolor="#f7fcff">Department</td>
																									<td width="6%" bgcolor="#f7fcff">Divisi</td>
																									<td width="7%" bgcolor="#f7fcff">Jabatan</td>
																									<td width="1%" bgcolor="#f7fcff">Status<br> Pegawai</td>
																									
																									<td width="1%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																								  <td><select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Pusat</option>
						                              <option value="3">Nama Cabang A</option>
						                              <option value="3">Nama Cabang B</option>
						                             
													
						                          </select></td>
																									<td style="text-align:center">
																										<div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
					                       </div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																								  <td>
                          <select class="form-control kt-selectpicker" data-live-search="true">
						                              <option value="2">Pusat</option>
						                              <option value="3">Nama Cabang A</option>
						                              <option value="3">Nama Cabang B</option>
						                             
													
						                          </select></td>
																									<td style="text-align:center">
																										<div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
					                       </div></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="8">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
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
    <td width="10%" bgcolor="#f7fcff">JABATAN</td>
    <td colspan="2" bgcolor="#f7fcff">VOL</td>
    <td width="6%" bgcolor="#f7fcff">BIAYA</td>
    <td width="6%" bgcolor="#f7fcff">JUMLAH</td>
    <td width="3%" bgcolor="#f7fcff">Aksi</td>
  </tr>
  <tr style="text-align:center">
    <td bgcolor="#f5f5f5">a</td>
    <td colspan="2" bgcolor="#f5f5f5">b</td>
    <td bgcolor="#f5f5f5">c</td>
    <td width="1%" bgcolor="#f5f5f5">d</td>
    <td width="3%" bgcolor="#f5f5f5">e</td>
    <td bgcolor="#f5f5f5">f</td>
    <td bgcolor="#f5f5f5">g</td>
    <td bgcolor="#f5f5f5">h</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Penginapan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td style="text-align:center" width="1%">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
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
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
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
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
  <tr>
    <td style="text-align:center">2</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Saku"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
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
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
<tr>
    <td style="text-align:center">3</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Makan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
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
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="600.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.200.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
  <tr>
    <td style="text-align:center">4</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Transportasi Setempat"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
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
      <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="3.500.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
  <tr>
    <td style="text-align:center">5</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Biaya Berangkat dan Kepulangan"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center">
    </div></td>
    <td style="text-align:center">
      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center">
      </div></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
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
       <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="700.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.900.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
  <tr>
    <td style="text-align:center">6</td>
    <td colspan="8"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Transportasi"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
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
                              <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
							  <option value="AK" selected>Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
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
                              <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
							  <option value="AK" selected>Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
     <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="650.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="4.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
  <tr>
    <td style="text-align:center">7</td>
    <td colspan="2"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
							  <option value="AK" selected>Transportasi</option>
                              <option value="HI">Uang Saku</option>
                              <option value="HI">Lainnya</option>
                            </select></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" style="text-align:center"></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">7</option>
                              <option value="AK">1</option>
                              <option value="HI">2</option>
                              <option value="HI">3</option>
                              <option value="HI">4</option>
                              <option value="HI">5</option>
                              <option value="HI">6</option>
                            </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
                              <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
							  <option value="AK" selected>Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
    <td><div class="input-group input-group-sm" >
														<div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="1.000.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" placeholder="7.000.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>

    <td width="3%" style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  
  
  <tr>
    <td colspan="9" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" style="text-align:center">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="7" style="text-align:right" bgcolor="#feffed"><b>GRAND TOTAL </b></td>
    <td bgcolor="#feffed"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="40.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    <td style="text-align:center" bgcolor="#feffed">&nbsp;</td>
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
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
														

								<div class="bg-white w-50 ml-auto mr-auto">
									<img src="../assets/img/header.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;"/>
									<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
  
  
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
    <td width="31" style="text-align: right">A.</td>
    <td width="16">&nbsp;</td>
    <td width="202">Pejabat yang memberi perintah</td>
    <td width="12">:</td>
    <td width="317" colspan="3">Direktur Utama</td>
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
<table align="center" border="1" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
  <tr>
    <td width="10" style="text-align: center"><b>No</b></td>
    <td width="90" style="text-align: center"><b>Nama Pegawai</b></td>
    <td width="137" style="text-align: center"><b>Jabatan</b></td>
  </tr>
  <tr>
    <td style="text-align: right">1.</td>
    <td>Muhammad Nasrullah, S.Kom</td>
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
<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
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
    <td>[Nama-Perusahaan]</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  
 
</table>
								
</div>
								</div>
								<div><span>&nbsp;</span>
   <table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
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
							  <td width="217">[Tempat, Tanggal Bulan Tahun]</td>
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
							  <td valign="top">[Nama-Perusahaan]</td>
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
							  <td valign="top">[Pemberi-Tugas]</td>
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
							  <td valign="top">[Jabatan-Pemberi-Tugas]</td>
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
							  <td colspan="11" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px;"><i>Sesuai dengan ketentuan yang berlaku, <strong>[Nama-Perusahaan]</strong> mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
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
									<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
  <tr>
    <td colspan="7" style="text-align: center"><u><b>SURAT TUGAS</b></u></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center">Nomor : 097/ST/XII/2022</td>
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
    <td width="1182" colspan="4"></td>
  </tr>
  
  
 
</table>
<div>&nbsp;</div>
<table align="center" border="1" cellpadding="1" style="width: 600px; text-align:left; line-height:1.5; font-family: Roboto; font-size: 13px;">
  <tr>
    <td colspan="5" style="text-align: center"><strong>PEJABAT YANG BERTANDA TANGAN DIBAWAH INI</strong></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="3" valign="top" style="text-align: right">A.</td>
    <td colspan="2" style="text-align: left">Nama Pegawai</td>
    <td width="355" style="text-align: left">Muhammad Nasrullah, S.Kom</td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: left">Jabatan</td>
    <td style="text-align: left">Direktur Utama</td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: left">Nama Perusahaan</td>
    <td style="text-align: left">[Nama-Perusahaan]</td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: left">&nbsp;</td>
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
    <td width="200">Muhammad Nasrullah, S.Kom</td>
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
    <td colspan="5" valign="top" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" valign="top" style="text-align: center"><strong>KETERANGAN</strong></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" valign="top" style="text-align: right">C.</td>
    <td valign="top">1.</td>
    <td colspan="2" valign="top"></td>
  </tr>
  
</table>
								
</div>
								</div>
								<div><span>&nbsp;</span>
   <table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
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
							  <td width="217">[Tempat, Tanggal Bulan Tahun]</td>
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
							  <td valign="top">[Nama-Perusahaan]</td>
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
							  <td valign="top">[Pemberi-Tugas]</td>
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
							  <td valign="top">[Jabatan-Pemberi-Tugas]</td>
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
							  <td colspan="7" valign="top">Direktur Utama</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">2.</td>
							  <td colspan="7" valign="top">Direktur Umum</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">3.</td>
							  <td colspan="7" valign="top">Arsip</td>
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
							  <td colspan="11" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px;"><i>Sesuai dengan ketentuan yang berlaku, <strong>[Nama-Perusahaan]</strong> mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
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
