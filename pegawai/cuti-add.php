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
											Form Cuti
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
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
								<div class="col-xl-9">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pegawai</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-4">
                          <label>Nama Pegawai :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">9130037 - Maghfirah Sharifudin Andy Omar S.Psi</option>
                              <option value="HI">9130014 - Nurul Insani Budhi Artha, A. Md</option>
                            </select>
                        </div>

                        <div class="col-lg-4">
                          <label>Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
                        <div class="col-lg-4">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Development">
                      </div>
                        </div>
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                        <div class="col-lg-4">
                          <label>Jenis Cuti :</label>
                      <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">cuti alasan penting</option>
                              <option value="3">cuti bersalin</option>
                              <option value="4">cuti besar</option>
                              <option value="5">cuti khusus</option>
                              <option value="6">cuti sakit</option>
                              <option value="7" selected>cuti tahunan</option>
                              <option value="12">menikah</option>
                          </select>
                        </div>
                        <div class="col-lg-4">
                          <label class="">Tanggal :</label>
                          <div class='input-group'>
                        <input type='text' class="form-control kt_daterangepicker_2" readonly placeholder="Select date range" />
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                        </div>
                      </div>
                        </div>
                        <div class="col-lg-4">
                          <label class="">Keterangan :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                        </div>
                      </div>
                      </div>
                    </div>
							<!--end:: Portlet-->

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pengganti</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
                        <div class="col-lg-4">
                          <label>Cari Pegawai :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">9130037 - Maghfirah Sharifudin Andy Omar S.Psi</option>
                              <option value="HI">9130014 - Nurul Insani Budhi Artha, A. Md</option>
                            </select>
                        </div>

                        <div class="col-lg-4">
                          <label>Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
                        <div class="col-lg-4">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Development">
                      </div>
                        </div>
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->
										</div>


								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Cuti</div>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Saldo Cuti Tahunan :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">12 Hari</div>
                        </div>
                        </div>
                      </div>

                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Cuti Tahunan Belum Digunakan :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">6 Hari</div>
                        </div>
                        </div>
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>Cuti Tahunan Telah Terpakai :</label>
                          <div class="progress">
                          <div class="progress-bar progress-bar-striped progress-bar-animated  bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">6 Hari</div>
                        </div>
                        </div>
                      </div>
                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<label><span class="kt-badge kt-badge--danger kt-badge--inline">Riwayat Cuti Tahun ini :</span></label>
                <!--Begin::Timeline 3 -->
											<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">21 Oktober 2019<br>23 Oktober 2019</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-danger"></i>
														</div>
														<div class="kt-timeline-v2__item-text  kt-padding-top-5">
															Temanin Teman yang punya teman pergi shopping
														</div>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time">21 Oktober 2019<br>23 Oktober 2019</span>
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
<?php require '../layouts/foot.php' ?>
