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
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ed1c24">
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pemberi Tugas</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						<div class="col-lg-6">
                          <label>Nama Pegawai :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">
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
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Operasional">
                              
							  

                          </select>
                        </div>
						<div class="col-lg-4">
                          <label>Jenis Perjalanan Dinas :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Luar Kota">
                        </div>
						
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						
                       
                       
						
<div class="col-lg-4">
                          <label>Transportasi :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pesawat Udara">
                        </div>
						<div class="col-lg-4">
                          <label>Tanggal Berangkat :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="26/10/2025">
                        </div>
						 <div class="col-lg-4">
                          <label>Estimasi Tanggal Kembali :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="30/10/2025">
                        </div>
						

                        </div>

						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label>Kota Asal :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">
                        </div>
						<div class="col-lg-4">
                          <label>Kota Tujuan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Jakarta">
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
																								   
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="MoU Parking Gate System" disabled></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								
																							</tbody>
																							
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
					  <div class="col-lg-12">
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
																								   
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Peraturan Daerah Kota Makassar Nomor 2 Tahun 2021 tentang Pendirian Perusahaan Umum Daerah Parkir Makassar Raya" disabled></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="PERDA No.17 tahun 2006 tentang Pengelolaan Parkir Tepi Jalan Umum dalam Kota Makassar" disabled></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="SK. Walikota No. 7040 Tahun 1999 tentang Struktur Organisasi dan Tata Kerja Perusahaan Daerah Parkir Makassar Raya" disabled></textarea></td>
																									
                                            
                                                                                                    
																								</tr>
																								
																							</tbody>
																							
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
																								  
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
																									
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum"></td>
																									    
																								</tr>
																							</tbody>
																							
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
																									<td width="6%" bgcolor="#f7fcff">Nama Pegawai</td>
																									<td width="4%" bgcolor="#f7fcff">Department</td>
																									<td width="6%" bgcolor="#f7fcff">Divisi</td>
																									<td width="7%" bgcolor="#f7fcff">Jabatan</td>
																									<td width="1%" bgcolor="#f7fcff">Status<br> Pegawai</td>
																									
																									
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																								  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									<td style="text-align:center">
																										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    
																									
																								</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																								  <td>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									<td style="text-align:center">
																									<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Deddy Rafsanjani, S.Sos">
																										</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum"></td>
   <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    
																									
																								</tr>
																								
																							</tbody>
																							
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
    </tr>
  <tr style="text-align:center">
    <td bgcolor="#f5f5f5">a</td>
    <td colspan="2" bgcolor="#f5f5f5">b</td>
    <td bgcolor="#f5f5f5">c</td>
    <td width="1%" bgcolor="#f5f5f5">d</td>
    <td width="3%" bgcolor="#f5f5f5">e</td>
    <td bgcolor="#f5f5f5">f</td>
    <td bgcolor="#f5f5f5">g</td>
    </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td colspan="7"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Penginapan"></td>
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
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
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
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    </tr>
  
  <tr>
    <td style="text-align:center">2</td>
    <td colspan="7"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Saku"></td>
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
    </tr>
  
<tr>
    <td style="text-align:center">3</td>
    <td colspan="7"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uang Makan"></td>
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
    </tr>
  
  <tr>
    <td style="text-align:center">4</td>
    <td colspan="7"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Transportasi Setempat"></td>
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
    </tr>
  
  <tr>
    <td style="text-align:center">5</td>
    <td colspan="7"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Biaya Berangkat dan Kepulangan"></td>
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
    </tr>
  
  <tr>
    <td style="text-align:center">6</td>
    <td colspan="7"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Transportasi"></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
    <td width="1%" style="text-align:center">a</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" style="text-align:center">
      </div></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center" />
      </div></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center" />
      </div></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    </tr>
  <tr>
    <td style="text-align:center">&nbsp;</td>
     <td style="text-align:center" width="1%">b</td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rizal Asjahad" /></td>
    <td style="text-align:left">
      <input type="text" style="text-align:left" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" style="text-align:center">
      </div></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7" style="text-align:center" />
      </div></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hari" style="text-align:center" />
      </div></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="650.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="4.550.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    </tr>
  
  
  
  
  
  <tr>
    <td colspan="8" style="text-align:center">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="7" style="text-align:right" bgcolor="#feffed"><b>GRAND TOTAL </b></td>
    <td bgcolor="#feffed"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="40.550.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
  
  <tr>
    <td colspan="8" style="text-align:left" bgcolor="#f7fcff"><b>Terbilang :</b></td>
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
														<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
								<div class="bg-white w-60 ml-auto mr-auto">
	<img src="../assets/img/header-potrait.png" style="width:835px; display:block; margin-left:0px;margin-right:auto;margin-bottom:20px;padding-top:0px;"/>
									<div>&nbsp;<div>
									<table align="center" border="0" cellpadding="1" style="width: 625px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;  position:relative;top:-130px;">
  
  
  <tr>
    <td colspan="7" style="text-align: center"><u><b>SURAT PERINTAH PERJALANAN DINAS</b></u></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center"><strong>NO : 33/10.1/PERUMDA-PMR/II/2025</strong></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  
</table>
<table align="center" border="1" cellpadding="1" style="width: 625px;  position:relative;top:-130px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; border:1px solid black; border-collapse: collapse;">
                    <tbody><tr style="border:1px solid black;">
                        <td style="text-align:right; padding-right:5px; border:1px solid black;" width="5%">1.</td>
                        <td style="border:1px solid black; padding-left:5px;" width="90">Pejabat yang memberi perintah</td>
                        <td style="border:1px solid black; padding-left:5px;" width="137">Direktur Utama 2022-2025</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="text-align:right; padding-right:5px; border:1px solid black;" width="5%">2.</td>
                      <td style="border:1px solid black; padding-left:5px;" width="90">Nama / Nip. Pegawai yang diperintah<br>mengadakan perjalanan dinas</td>
                        <td style="border:1px solid black; padding-left:5px;" width="137">Yulianti Tomu, SE, M.Trap </td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="text-align:right; padding-right:5px; border:1px solid black;" width="5%">3.</td>
                      <td style="border:1px solid black; padding-left:5px;" width="90">Jabatan, Pangkat dan Golongan dari<br>Pegawai yang diperintahkan </td>
                        <td style="border:1px solid black; padding-left:5px;" width="137">
                            Direktur Utama 2022-2025 Perumda
                            Parkir Makassar Raya</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="text-align:right; padding-right:5px; border:1px solid black;" width="5%">4.</td>
                        <td style="border:1px solid black; padding-left:5px;" width="90">Perjalanan Dinas yang diperintahkan</td>
                        <td style="border:1px solid black; padding-left:5px;" width="137">Dari : Kota Makassar
                            <br>Ke &nbsp; &nbsp;: Kabupaten Badung
                            <br>Transportasi Menggunakan: Pesawat Terbang
                        </td>
                    </tr>
                                        <tr style="border:1px solid black;">
                        <td style="text-align:right; padding-right:5px; border:1px solid black;" width="5%">5.</td>
                        <td style="border:1px solid black; padding-left:5px;" width="90">Perjalanan Dinas Direncanakan</td>
                        <td style="border:1px solid black; padding-left:5px;" width="137">Selama 3 hari
                            <br>Dari tanggal,
                            5 Februari 2025 s/d
                            7 Februari 2025

                        </td>
                    </tr>
                                        <tr style="border:1px solid black;">
                        <td style="text-align:right; padding-right:5px; border:1px solid black;" width="5%">6.</td>
                        <td style="border:1px solid black; padding-left:5px;" width="90">Maksud mengadakan perjalanan</td>
                        <td style="border:1px solid black; padding-left:5px;" width="137">
                                                            Melakukan koordinasi dan Studi Komparasi terkait Peningkatan dan pengelolaan PAD di Kabupaten Badung, Provinsi Bali
                                                    </td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="text-align:right; padding-right:5px; border:1px solid black;" width="5%">7.</td>
                        <td style="border:1px solid black; padding-left:5px;" width="90">Perhitungan Biaya Perjalanan</td>
                        <td style="border:1px solid black; padding-left:5px;" width="137">Atas Beban : Perumda Parkir Makassar Raya</td>
                    </tr>
                    <tr style="border:1px solid black;">
                        <td style="text-align:right; padding-right:5px; border:1px solid black;" width="5%">8.</td>
                        <td style="border:1px solid black; padding-left:5px;" width="90">Keterangan</td>
                        <td style="border:1px solid black; padding-left:5px;" width="137">Lihat Surat Tugas</td>
                    </tr>

                </tbody></table>

								
								<div><span>&nbsp;</span>
   <table align="center" border="0" cellpadding="1" style="width: 625px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
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
							  <td valign="top">Direksi [ Nama Perusahaan ]</td>
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
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
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
                <td colspan="2" valign="center" style="position: relative;top:-5px;text-align:left; padding-left:10px; padding-top:10px;">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur
                            bahwa
                            surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
             <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            <tr style=" width:650px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA</i></span></td>
            </tr>

        </tbody>
    </table>
  <img src="../assets/img/footer.png" style="width:833px; display:block; margin-top:10px; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:0px" />
					</div>
					
					
					
								</div>
								
								
								</div>
								
								

								<!--End:: App Content-->
							</div>
<div class="bg-white w-60 ml-auto mr-auto">
	<img src="../assets/img/header-potrait.png" style="width:835px; display:block; margin-left:0px;margin-right:auto;margin-bottom:20px;padding-top:0px;"/>
									<div>&nbsp;<div>
									<table align="center" border="0" cellpadding="2" style=" width: 625px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; position: relative; top:-130px;">

                        <tbody><tr>
                            <td><b>Keterangan</b></td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td><b>I. DARI PEJABAT YANG MEMBERIKAN PERINTAH</b></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>

                        <tr>
                        </tr></tbody></table>
						<table align="center" border="1" cellpadding="1" style="width: 625px;  text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; border:1px solid black; border-collapse: collapse; position: relative; top:-130px">
                            <tbody><tr style="border: 1px solid black">
                                <td style="text-align: center; border: 1px solid black" rowspan="2">Tempat Kedudukan Pegawai <br>Yang Diberikan Perintah</td>
                                <td style="text-align: center; border: 1px solid black" colspan="2" width="200px">Berangkat</td>
                                <td style="text-align: center; border: 1px solid black" colspan="2" width="200px">Kembali</td>
                            </tr>
                            <tr style="border: 1px solid black">
                                <td style="text-align: center; border: 1px solid black" width="100px">Tanggal</td>
                                <td style="text-align: center; border: 1px solid black" width="100px">Tanda Tangan</td>
                                <td style="text-align: center; border: 1px solid black" width="100px">Tanggal</td>
                                <td style="text-align: center; border: 1px solid black" width="100px">Tanda Tangan</td>
                            </tr>
                            <tr style="height: 140px; border: 1px solid black">
                                <td valign="top" height="200px" style="border: 1px solid black">
                                    <span style="padding: 5px">Perumda Parkir Makassar</span><br>
                                    <span style="padding: 5px">Raya Kota Makassar</span><br>
                                    <span style="padding: 5px">JI. Hati Mulya No. 7 Kota</span><br>
                                    <span style="padding: 5px">Makassar </span><br>
                                </td>
                                <td height="200px" style="border: 1px solid black"></td>
                                <td height="200px" style="border: 1px solid black"></td>
                                <td height="200px" style="border: 1px solid black"></td>
                                <td height="200px" style="border: 1px solid black"></td>
                            </tr>
                        </tbody></table>
						<div style="height:50px"></div>
						<table align="center" border="0" cellpadding="2" style=" width: 625px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; position: relative; top:-130px">

                        <tbody><tr>
                            <td></td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td><b>II. DARI PEJABAT DI DAERAH PENUGASAN YANG DIKUNJUNGI</b></td>
                        </tr>
                        <tr><td></td></tr>

                        <tr>
                        </tr></tbody></table>
						<table align="center" border="1" cellpadding="1" style="width: 625px; position:relative; top:-130px; margin-top:10px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px;border:1px solid black; border-collapse: collapse;">
                                <tbody><tr style="border: 1px solid black">
                                    <td style="text-align: center; border: 1px solid black" rowspan="2">Tempat Kedudukan/Daerah<br>yang dikunjungi</td>
                                    <td style="text-align: center; border: 1px solid black" colspan="2" width="200px">Tiba</td>
                                    <td style="text-align: center; border: 1px solid black" colspan="2" width="200px">Kembali</td>
                                </tr>
                                <tr style="border: 1px solid black">
                                    <td style="text-align: center; border: 1px solid black" width="100px">Tanggal</td>
                                    <td style="text-align: center; border: 1px solid black" width="100px">Tanda Tangan</td>
                                    <td style="text-align: center; border: 1px solid black" width="100px">Tanggal</td>
                                    <td style="text-align: center; border: 1px solid black" width="100px">Tanda Tangan</td>
                                </tr>
                                <tr style="height: 140px">
                                    <td valign="top" height="200px" style="border: 1px solid black">
                                        <span style="padding: 5px">Perumda Parkir Makassar</span><br>
                                        <span style="padding: 5px">Raya Kota Makassar</span><br>
                                        <span style="padding: 5px">JI. Hati Mulya No. 7 Kota</span><br>
                                        <span style="padding: 5px">Makassar </span><br>
                                    </td>
                                    <td height="300px" style="border: 1px solid black"></td>
                                    <td height="300px" style="border: 1px solid black"></td>
                                    <td height="300px" style="border: 1px solid black"></td>
                                    <td height="300px" style="border: 1px solid black"></td>
                                </tr>
                            </tbody></table>


								
								<div><span>&nbsp;</span>
   
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
                <td colspan="2" valign="center" style="position: relative;top:-5px;text-align:left; padding-left:10px; padding-top:10px;">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur
                            bahwa
                            surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
             <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            <tr style=" width:650px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA</i></span></td>
            </tr>

        </tbody>
    </table>
  <img src="../assets/img/footer.png" style="width:833px; display:block; margin-top:10px; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:0px" />
					</div>
							<!--End::App-->
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
															<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
								<div class="bg-white w-60 ml-auto mr-auto">
	<img src="../assets/img/header-potrait.png" style="width:835px; display:block; margin-left:0px;margin-right:auto;margin-bottom:20px;padding-top:0px;"/>
									<div>&nbsp;<div>
									<table align="center" border="0" cellpadding="1" style="width: 625px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px; position:relative; top:-130px;">
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
<table align="center" border="1" cellpadding="1" style="width: 625px;position:relative; top:-130px; text-align:left; line-height:1.5; font-family: Roboto; font-size: 13px;">
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
   <table align="center" border="0" cellpadding="1" style="width: 625px; position:relative; top:-130px; margin-bottom:-100px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 13px;">
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
							  <td colspan="11" valign="top">&nbsp;</td>
  </tr>
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
                <td colspan="2" valign="center" style="position: relative;top:-5px;text-align:left; padding-left:10px; padding-top:10px;">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur
                            bahwa
                            surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
             <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            <tr style=" width:650px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA</i></span></td>
            </tr>

        </tbody>
    </table>
  <img src="../assets/img/footer.png" style="width:833px; display:block; margin-top:10px; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:0px" />
					</div>
							<!--End::App-->
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
