<?php require '../layouts/head.php' ?>
<link href="../assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="../assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
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
											Form Izin Pegawai
									</h3>
									
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
											<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
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
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pegawai</div><br><br>
										 <div class="kt-portlet__body">
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
                          <label>NIP Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>

                        <div class="col-lg-3">
                          <label>Status Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
                       <div class="col-lg-6">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                      </div>
                        </div>
                        <div class="col-lg-6">
                          <label class="">Divisi :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan">
                      </div>
                        </div>
                        
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  
					  <div class="form-group row">
						 <div class="col-lg-6">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Pemetaan dan Pengembangan">
                      </div>
                        </div>
						 <div class="col-lg-6">
                          <label>Kantor:</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Nama Cabang A">
                        </div>
                      </div>
                      
					  
                      </div>
                    </div>
							<!--end:: Portlet-->

									
										</div>
										<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Izin</div><br><br>
										 <div class="kt-portlet__body">
                      
                      
					  
                     <div class="form-group row">
                        <div class="col-lg-6">
                          <label>Jenis Izin :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Izin Terlambat Datang</option>
                              <option value="2">Izin Cepat Pulang</option>
                              <option value="2">Izin Jam Kantor</option>
                          </select>
                        </div>
                        <div class="col-lg-6">
                          <label class="">Tanggal Izin:</label>
                         
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
                          <label class="">Jam Awal :</label>
                          <div class="input-group timepicker">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="la la-exclamation-circle"></i>
														</span>
													</div>
													<input class="form-control form-control-sm" id="kt_timepicker_1" readonly="" value="10:30:20 AM" type="text">
												</div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Jam Akhir :</label>
                          <div class="input-group timepicker">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="la la-exclamation-circle"></i>
														</span>
													</div>
													<input class="form-control form-control-sm" id="kt_timepicker_1" readonly="" value="10:30:20 AM" type="text">
												</div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  
					  <div class="form-group row">
                        <div class="col-lg-12">
                          <label class="">Tujuan Izin :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                        </div>
                      </div>
                      </div>
                    </div>
							<!--end:: Portlet-->

									
										</div>


								
								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Izin</div><br>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Quota Izin Terlambat Datang :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">12 Hari</div>
                        </div>
                        </div>
                      </div>

                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Izin Belum Digunakan :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">6 Hari</div>
                        </div>
                        </div>
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Izin Telah Terpakai :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">6 Hari</div>
                        </div>
                        </div>
                      </div>
                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<label><span class="kt-badge kt-badge--danger kt-badge--inline">Riwayat Izin Tahun ini :</span></label>
                <!--Begin::Timeline 3 -->
											<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">21/10/2019<br>23/10/2019</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															Temanin Teman yang punya teman pergi shopping
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">21/10/2019<br>23/10/2019</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-info"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															Temanin Teman yang punya teman pergi shopping
														</div>
													</div>

												</div>
											</div>

											<!--End::Timeline 3 -->
									</div>

									<!--end::Portlet-->
								</div>
								</div>
								</div>

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
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<script src="../assets/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="../assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="../assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
