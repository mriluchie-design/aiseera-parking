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
											Detail Lembur
									</h3>
									<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ed1c24">
											[ Nomor Surat Perintah Lembur ] </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">
										</form>
									</div>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="hr-lembur.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

							<!--Begin::App-->

								<!--Begin:: App Content-->

								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
										<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__body">
													<div class="row">
<div class="col-xl-5">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pemberi Tugas</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-6">
                          <label>Nama Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">
                        </div>
                       <div class="col-lg-3">
                          <label class="">NIP Pegawai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Status Pegawai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                      </div>
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Divisi :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">
                      </div>
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi">
                      </div>
                        </div>
						

                        </div>

                        </div>
                        </div>
						

									</div>
									</div>

<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Lembur</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Tanggal Lembur :</label>
						                          <div class="input-group date" >
													<input type="text" class="form-control form-control-sm" readonly="" disabled placeholder="13 November 2025" id="kt_datepicker_2" disabled >
													<div class="input-group-append" >
														<span class="input-group-text" >
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
						                        </div>


						<div class="col-lg-6">
                          <label class="">Lampiran :</label><br>
                          
                        <button type="button" class="btn btn-outline-brand btn-sm 	m-btn m-btn--icon" data-toggle="modal" data-target="#modal_view_map" data-skin="" title="" data-html="true" data-original-title="">
															<span>
																<i class="flaticon-download"></i>
																<span>Download</span>
															</span>
														</button>
                    
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Waktu Mulai Lembur :</label>
                          <div class="input-group timepicker">
													<input class="form-control form-control-sm" id="kt_timepicker_2" readonly="" disabled  placeholder="17:30 WITA" type="text">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-clock-o"></i>
														</span>
													</div>
												</div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Waktu Selesai Lembur :</label>
                          <div class="input-group timepicker">
													<input class="form-control form-control-sm" id="kt_timepicker_2" readonly="" disabled placeholder="22:30 WITA" type="text">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-clock-o"></i>
														</span>
													</div>
												</div>
                        </div>

                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Keterangan Lembur :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Melaksanakan Penataan Konser Mulia HUT Kota Makassar" disabled></textarea>
                        </div>
						

                        </div>


                        </div>
                        </div>






									<!--end::Portlet-->
								</div>




								
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <div id="kt_repeater_2">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="10%" bgcolor="#f7fcff">Kepada</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum" /></td>
													</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Umum" /></td>
																									</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama" /></td>
																									</tr>
																								
																								
																								
																								
																								
																								

																								
																							</tbody>
																							
																							<tfoot>
																							</tfoot>
																						</table>
                                          </div>
                        </div>






											</div>

										</div>

									</div>

									<!--end::Portlet-->
								</div>

									</div>
									</div>

							<div class="row">







								
								

<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pelaksana</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-12">
						<div id="kt_repeater_1">
												<table width="729" class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="9%" bgcolor="#f7fcff">Nama Pegawai</td>
																									<td width="6%" bgcolor="#f7fcff">Department</td>
																									<td width="9%" bgcolor="#f7fcff">Divisi</td>
																									<td width="10%" bgcolor="#f7fcff">Jabatan</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom"></td>
																									
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Keuangan"></td>
													</tr>
																								<tr data-repeater-item>
																								
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Deddy Rafsanjani, S.Sos"></td>
																									
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Kepegawaian"></td>
													</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Oklan Zulkifli, SE"></td>
																									
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
													</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">4</td>
																								  <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Nursiah, S.Kom"></td>
																									
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
													</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Ramadhan Lerrick, ST"></td>
																									
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Asset" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Asset"></td>
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
										</div>
									</div>

									<!--end::Portlet-->
									


							<!--end:: Portlet-->


          </div>



								</div>

								<!--End:: App Content-->
							</div>

							<!--End::App-->
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
