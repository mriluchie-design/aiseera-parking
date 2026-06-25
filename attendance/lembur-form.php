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
											Form Lembur
									</h3>

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
										<div class="btn-group">
				<button type="button" class="btn btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
										</div>
										</div>
						</div>

						<!-- end:: Content Head -->

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
						                          <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="Pilih Tanggal" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
						                        </div>


                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Waktu Mulai Lembur :</label>
                          <div class="input-group timepicker">
													<input class="form-control form-control-sm" id="kt_timepicker_2" readonly="" placeholder="Pilih Jam" type="text">
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
													<input class="form-control form-control-sm" id="kt_timepicker_2" readonly="" placeholder="Pilih Jam" type="text">
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
                          <textarea class="form-control" id="exampleTextarea" rows="2" placeholder=""></textarea>
                        </div>
						

                        </div>


                        </div>
                        </div>






									<!--end::Portlet-->
								</div>




								
								<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lampiran</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label>Upload Lampiran (Jika Ada) :</label>
                          <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
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







								
								

<div class="col-xl-9">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pelaksana</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-12">
						<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="2%" bgcolor="#f7fcff">Nama Pegawai</td>
																									<td width="6%" bgcolor="#f7fcff">Department</td>
																									<td width="9%" bgcolor="#f7fcff">Divisi</td>
																									<td width="9%" bgcolor="#f7fcff">Jabatan</td>
																									
																									<td width="1%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center"><select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK" >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 																<option value="HI" selected>Akmal Baharuddin</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Keuangan"></td>
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center"><select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK" >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI" selected>Deddy Rafsanjani, S.Sos</option>
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

					 														</select></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Kepegawaian"></td>
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center"><select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK" >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI" selected>Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:center"><select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK" >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI" selected>Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama"></td>
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:center"><select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK" >Muhammad Nasrullah, S.Kom</option>
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
					 																<option value="HI" selected>Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset"></td>
							<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Asset" /></td>
							<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Asset"></td>
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								
																								
																								
																								
																								

																								
																							</tbody>
																							
																							<tfoot>
																								<tr>
																									<td colspan="9">
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
									
									
									
                         
													
  
  
  


											

										</div>
										<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan Surat</div><br><br>
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
																									
																									<td width="1%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center"><select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															
					 																<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
																					<option value="AK"selected >Direktur Utama</option>
																					<option value="HI">Direktur Umum</option>
																					<option value="AK" >Arsip</option>
																					
					 														
					 															

					 														</select></td>
						
													</div></td>
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center"><select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															
					 																<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
																					<option value="AK">Direktur Utama</option>
																					<option value="HI" selected>Direktur Umum</option>
																					<option value="AK" >Arsip</option>
																					
					 														
					 															

					 														</select></td>
							
												
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center"><select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
					 																<option value="AK" >Direktur Utama</option>
																					<option value="HI">Direktur Umum</option>
																					<option value="AK" selected >Arsip</option>
																					
					 															
					 															

					 														</select></td>
							
												
																									
																									
																									
																									
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
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
