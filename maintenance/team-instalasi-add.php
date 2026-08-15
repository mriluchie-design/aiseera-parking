<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>



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
											Form Team Instalasi
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
													<i class="fa flaticon-file-2"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Project
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
														Form
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Tugas
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
													<i class="flaticon-list-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Tugas
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
													<i class="flaticon-layers"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														E-Receipt
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Bukti Transaksi
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
											<div class="col-lg-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Project</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  <div class="col-lg-6">
                          <label class="">Cari ID Project :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
							                              <option value="2">0001/AK/PR/0626 - Epass Cabang Makassar</option>
							                              <option value="2">0002/AK/PR/0626 - Epass Cabang Manado</option>
							                          </select>
                        </div>
 <div class="col-lg-4">
                          <label class="">ID Project :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="0001/AK/PR/0626" disabled>
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
						
						
						
					  <div class="col-lg-6">
                          <label class="">Nama Project :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="Epass Cabang Makassar" disabled>
                        </div>
						<div class="col-lg-6">
                          <label class="">Client :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="PT. Pelabuhan Indonesia (Persero) Regional 4" disabled>
                        </div>
						
					  
						
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
						
						
						
					  <div class="col-lg-4">
                          <label class="">Lokasi :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Makassar</option>
                                      <option value="2">Pare-Pare</option>
                                      <option value="2">Balikpapan</option>
                                      <option value="2">Samarinda</option>
                                      <option value="2">Tarakan</option>
                                      <option value="2">Nunukan</option>
                                      <option value="2">Manado</option>
                                      <option value="2">Bitung</option>
                                      <option value="2">Ambon - Yos Sudarso</option>
                                      <option value="2">Ambon - Slamet Riyadi</option>
                                      <option value="2">Ternate</option>
                                      <option value="2">Sorong</option>
                                      <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                        </div>
						<div class="col-lg-2">
                          <label class="">Gate :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">1</option>
                                      <option value="2" selected>2</option>
                                      <option value="2">3</option>
                                      <option value="2">4</option>
									  <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
                        </div>
						
					  
						
                        </div>
                        </div>
						
                      </div>
                      </div>
<div class="col-lg-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Instalasi</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       
						<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" rowspan="2" bgcolor="#f7fcff">No</td>
																								  <td width="8%" rowspan="2" bgcolor="#f7fcff">Lokasi</td>
																								  <td width="2%" rowspan="2" bgcolor="#f7fcff">Gate</td>
																								  <td colspan="2" bgcolor="#f7fcff">Masuk</td>
																								  <td colspan="2" bgcolor="#f7fcff">Keluar</td>
																								  </tr>
																								<tr style="text-align:center">
																								  <td width="2%" bgcolor="#f7fcff">Mobil</td>
																								  <td width="2%" bgcolor="#f7fcff">Motor</td>
																								  <td width="2%" bgcolor="#f7fcff">Mobil</td>
																								  <td width="2%" bgcolor="#f7fcff">Motor</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="Makassar" disabled="disabled" /></td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="1" disabled></td>
																								  <td style="text-align:center"><select name="select3" class="form-control kt-selectpicker" data-live-search="true">
																								    <option value="1">1</option>
                                                                                                    <option value="1" selected>2</option>
																									<option value="1">3</option>
																									<option value="1">4</option>

																							      </select></td>
																								  <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																								    <option value="1">1</option>
																								    <option value="1" selected>2</option>
																									<option value="1">3</option>
																									<option value="1">4</option>
																							      </select></td>
																								  <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																								    <option value="1">1</option>
																								    <option value="1" selected>2</option>
																									<option value="1">3</option>
																									<option value="1">4</option>
																							      </select></td>
																								  <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																								    <option value="1" selected>0</option>
																								    <option value="1">1</option>
																								    <option value="1">2</option>
																									<option value="1">3</option>
																									<option value="1">4</option>
																							      </select></td>
																								  </tr>
																								<tr data-repeater-item>
																								  <td colspan="2" style="text-align:center">&nbsp;</td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="2" disabled></td>
																								 <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																								    <option value="1">0</option>
																								    <option value="1">1</option>
																								    <option value="1" selected>2</option>
																									<option value="1">3</option>
																									<option value="1">4</option>
																							      </select></td>
																								 <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																								    <option value="1">0</option>
																								    <option value="1">1</option>
																								    <option value="1" selected>2</option>
																									<option value="1">3</option>
																									<option value="1">4</option>
																							      </select></td>
																								 <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																								    <option value="1">0</option>
																								    <option value="1">1</option>
																								    <option value="1" selected>2</option>
																									<option value="1">3</option>
																									<option value="1">4</option>
																							      </select></td>
																								 <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																								    <option value="1">0</option>
																								    <option value="1">1</option>
																								    <option value="1" selected>2</option>
																									<option value="1">3</option>
																									<option value="1">4</option>
																							      </select></td>
																								  </tr>
																								
																								
																								
																								
																								
																								
																								

																								
																					        </tbody>
																							
																						</table>

						
                       
                       
						 
						

						
                       
                        </div>
                        </div>
						
                      </div>
                    </div>
                    </div>
					  

						<!-- end:: Content -->
					</div>
<div class="row">
<div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pelaksana Tugas</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       
						<table class="table table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="2%" bgcolor="#f7fcff">Nama Pegawai</td>
																									<td width="10%" bgcolor="#f7fcff">Jabatan</td>
																									<td width="1%" bgcolor="#f7fcff">Status Pegawai</td>
																									<td width="2%" bgcolor="#f7fcff">Kantor</td>
																									<td width="10%" bgcolor="#f7fcff">Jabatan Dalam Project</td>
																									<td width="2%" bgcolor="#f7fcff">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
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
																								  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><span class="form-group">
      <select name="select" class="form-control kt-selectpicker form-control" data-live-search="true">
        
          
        <optgroup label="Direksi" class="a">
          <option value="HI">Project Director</option>
          </optgroup>
		<optgroup label="Manager" class="a">
          <option value="HI">Project Manager</option>
          </optgroup>
		<optgroup label="Project SPV" class="a">
          <option value="HI">Operational Project SPV </option>
          <option value="HI" selected>Electrical Engineering SPV </option>
          <option value="HI">Network Engineering SPV </option>
          <option value="HI">Hardware Specialist SPV </option>
          <option value="HI">System Specialist SPV </option>
          <option value="HI">Server Administrator SPV </option>
          </optgroup>
        <optgroup label="Project Engineering" class="a">
          <option value="HI">Electrical Engineering</option>
          <option value="HI">Network Engineering</option>
          <option value="HI">System Analyst</option>
          <option value="HI">Database Analyst</option>
          <option value="HI">Server Administrator</option>
          </optgroup>
        <optgroup label="Project Finance" class="a">
          <option value="HI">Oklan Zulkifli, SE</option>
          </optgroup>
        <optgroup label="Project Operasional" class="a">
          <option value="HI">Operasional Team</option>
          <option value="HI">Project Administration</option>
          </optgroup>
        
      </select>
    </span></td>
    <td style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
																									</tr>
																								
																								
																								
																								
																								
																								

																								
																							</tbody>
																							
																						</table>

						
                       
                       
						 
						

						
                       
                        </div>
                        </div>
						
                      </div>
                    </div>




                    </div>
					  

						<!-- end:: Content -->
					</div>

						<div class="row">

					
					
								
									
										 
										
							<!--end:: Portlet-->

								
								
  
                      </div>
					  
									
										




													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
										<div class="row">
<div class="col-lg-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Uraian Tugas</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
						
                        <div class="col-lg-12">
                          <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_3">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="10%" bgcolor="#f7fcff">Uraian</td>
																								   <td width="1%" bgcolor="#f7fcff">Bobot</td>
																								   <td width="1%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Uraian Tugas 1"></textarea></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="10"></td>
																									<td style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
                                            
                                                                                                    
																								</tr>
																								
																								
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						

                        </div>
                        </div>
                      

					  
                     
					  
						  </div>
                        </div>
						
						 
                        

									<!--end::Portlet-->
								</div>
<div class="col-lg-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
						
                        <div class="col-lg-12">
                          <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_4">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="5%" bgcolor="#f7fcff">Tembusan Surat</td>
																								   <td width="7%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK" >Direktur Utama</option>
                              <option value="AK" >Direktur Umum</option>
                              <option value="AK" >Direktur Keuangan</option>
                              <option value="AK" >Arsip</option>
                            </select></td>
																									<td style="text-align:center"><button type="button" class="btn btn-outline-brand btn-elevate btn-icon btn-icon btn-sm" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus-circle"></i></button>&nbsp;<button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
                                            
                                                                                                    
																								</tr>
																								
																								
																							</tbody>
																							
																						</table>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Catatan Internal</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  <div class="col-lg-12">
                          
                          <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Isikan Keterangan"></textarea>
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
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
										<div class="tab-content" style="background:#f2f3f8; overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-75 ml-auto mr-auto" style="position:relative;top:50px;">
						<div>&nbsp;<div>
									<table class="table-responsive" cellpadding="3" align="center" width="250" border="0" style="line-height:1;  margin-left:70px; padding-top:10px; font-family: Tahoma; font-size: 11px;" id="kt_table_1">
   <tr>
    <td width="3%" style="text-align: center; font-size:12px;">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: center; font-size:12px;">&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left; font-size:12px;"><strong>PT. PELABUHAN INDONESIA (PERSERO)</strong></td>
  </tr>
  <tr>
     <td style="text-align: left; font-size:12px; font-family: Tahoma;"><strong>REGIONAL 4 - CABANG MAKASSAR</strong></td>
  </tr>
  <tr>
     <td style="text-align: left; font-size:13px; font-family: Tahoma;">Jl. Soekarno No. 1 Makassar</td>
  </tr>
  
  
 
 
  <tr>
    <td ></td>
  </tr>
  
  
</table>
									<table align="center" border="0" cellpadding="1" style="width: 500px; margin-top:50px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 11px;">
  
  
  <tr>
    <td colspan="7" style="text-align: center"><b>LAPORAN REKAP PENDAPATAN</b></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center"><strong>PERIODE : 1 JANUARI 2025 s/d 31 JANUARI 2025</strong></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  
</table>
									<table align="center" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; border-collapse: collapse;">
            <tbody>

                                                                        <tr>
                                <td style="font-weight:bold; width: 70%">PENDAPATAN</td>
                                <td style="text-align:right; width: 30%"></td>
                            </tr>
                                                                                                            <tr>
                                                                        <td>41.01.01 | Pendapatan Parkir Masuk</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="../laporan-grafik/laporan-kendaraan-masuk.php">162.111.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.02 | Pendapatan Parkir Keluar</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDI=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">235.270.000,-</a></span> </div></td>
									<td style="font-size:11px; text-align:right;">
                                        
                                    </td>
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.03 | Pendapatan Kendaraan Berangkat</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDM=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">58.175.000,-</a></span> </div></td>
									
									<td style="font-size:11px; text-align:right;">
                                        
                                    </td>
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.04 | Pendapatan Muatan Kapal</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDQ=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">0,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.05 | Pendapatan Pass Kade</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDU=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">58.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                                              <td>41.01.06 | Pendapatan Pass Orang</td>
                                                                                              <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDU=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">45.000.000,-</a></span></div></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                        <td>41.01.07 | Pendapatan Member</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDY=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">950.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.08 | Pendapatan Denda Parkir</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDc=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">4.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.09 | Pendapatan Lain - Lain</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDg=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">0,-</a></span> </div></td>
									
                                </tr>
                                                                                                                                       
                                                                                                                        
                                <tr>
                                  <td colspan="2" style="font-weight:bold; border-bottom: 1px solid #000"></td>
                                  </tr>
                                                                                                                                        <tr>
                                <td style="font-weight:bold;">TOTAL PENDAPATAN</td>
								<td style="font-weight:bold; border-bottom: 3px double #000"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.512.556.000,-</span> </div></td>
                                
                            </tr>
                                                                                                <tr>
                                                                                                                                          <td colspan="2" style="font-weight:bold; width: 70%">&nbsp;</td>
              </tr>
                                                                                                <tr>
                                                                                                                                                                                                  <td colspan="2" style="width: 70%"><em>Terbilang : Satu Milyar Lima Ratus Dua Belas Juta Lima Ratus Lima Puluh Enam Ribu Rupiah</em></td>
              </tr>
                                                        </tbody>
        </table>
		

								
								<div><span>&nbsp;</span>
   <table align="center" width="600px" border="0" cellpadding="1" style="text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; margin-top:50px; margin-left:70px; margin-bottom:50px;">

                                <tbody><tr>
                                    <td colspan="3" valign="top">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="180" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">
                                        <strong>DIBUAT OLEH</strong></td>
                                    <td width="258" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">
                                        <strong>DIKETAHUI OLEH</strong></td>
                                    <td width="180" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-left:20px;">
                                        <strong>DISETUJUI OLEH</strong></td>
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
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; font-style:underline; margin-right:20px;"><strong>YUNI SASLIA,SE</strong></td>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; margin-right:20px;"><strong>FADLI DJUNAEDI, SE</strong></td>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; margin-right:20px;"><strong>DESSYANTI EKA PUTRI, SE</strong></td>
                                  </tr>
                                <tr>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc">Kepala Seksi Pembukuan</td>
                                    <td valign=" top" style="text-align: center; border: 0px solid #ccc">Kepala Bagian Keuangan &amp; Asset</td>
                                    <td valign=" top" style="text-align: center; border: 0px solid #ccc">Direktur Keuangan &amp; Asset</td>
                                  </tr>
                                <tr>
                                  <td valign="top" style="text-align: center; border: 0px solid #ccc">&nbsp;</td>
                                  <td valign=" top" style="text-align: center; border: 0px solid #ccc">&nbsp;</td>
                                  <td valign="top" style="text-align: center; border-top: 0px solid #000"></td>
                                </tr>
                                
                               
                            </tbody>
</table>
  
  <table align="center" class="footnote-1" width="650px" style="margin-top:20px; padding-top:5px; padding-bottom:20px;">
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
            <tr style=" width:650px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA - Halaman 1 dari 1</i></span></td>
            </tr>

        </tbody>
    </table>
  <img src="../assets/img/footer.png" style="width:650px; display:block; margin-left:auto; margin-top: 10px; margin-right:auto;margin-bottom:20px;padding-bottom:0px" />
					</div>

					
				</div>
				</div>
				</div>
				</div>
						

								<!--End:: App Content-->
							</div>
									</div>
									</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-invoice-2">
										<div class="kt-invoice__head">
											<div class="kt-invoice__container">
												<div class="kt-invoice__brand">
													<h1 class="kt-invoice__title">Kwitansi</h1>
													<div href="#" class="kt-invoice__logo">
														
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
												<button type="button" class="btn btn-label-brand btn-bold" onclick="window.print();">Download Kwitansi</button>
												<button type="button" class="btn btn-brand btn-bold" onclick="window.print();">Print Kwitansi</button>
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
              

            </div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
