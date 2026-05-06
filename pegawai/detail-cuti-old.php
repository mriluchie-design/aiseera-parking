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
											Detail Cuti
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
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="step-first">
										<div class="kt-grid__item">
										<div class="row">
								<div class="col-xl-9">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Data</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-3">
                          <label>Nama Pegawai</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="SRI SUHARTINI, SE">
                        </div>
                        <div class="col-lg-3">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>
                        <div class="col-lg-3">
                          <label>Jabatan</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian">
                        </div>
                        <div class="col-lg-3">
                          <label class="">Department</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Bagian Umum">
                      </div>
                        </div>
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
                        <div class="col-lg-3">
                          <label>Jenis Cuti :</label>
                     <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Cuti Tahunan">
                        </div>
                        <div class="col-lg-3">
                          <label class="">Tanggal Awal Cuti:</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="16 Desember 2022">
                        </div>
						<div class="col-lg-3">
                          <label class="">Tanggal Akhir Cuti:</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1 Januari 2023">
                        </div>
                        <div class="col-lg-3">
                          <label class="">Keterangan :</label>
                          <textarea class="form-control" disabled="disabled" id="exampleTextarea" rows="4"></textarea>
                        </div>
                      </div>
					   <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                        <div class="col-lg-12">
                          <label>File Lampiran :</label>
						  <div>
                      <a href="#" class="btn btn-brand m-btn btn-sm 	m-btn m-btn--icon">
															<span>
																<i class="la la-arrow-circle-o-down"></i>
																<span>Download File</span>
															</span>
														</a>
                        </div>
                        </div>
                        
                        
                      </div>
                      </div>
                    </div>
							<!--end:: Portlet-->

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Verifikasi Atasan Langsung</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
                        <div class="col-lg-3">
                          <label>Nama Pegawai</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Maghfirah Sharifudin Andy Omar S.Psi">
                        </div>
                        <div class="col-lg-1">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="9130001">
                        </div>
                        <div class="col-lg-3">
                          <label>Jabatan</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
                        <div class="col-lg-3">
                          <label class="">Departemen</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Commercial & Business Development">
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label class="">Waktu Persetujuan</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 09:00 WITA">
                      </div>
                        </div>
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Verifikasi Kabag Terkait</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
                        <div class="col-lg-3">
                          <label>Nama Pegawai</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Maghfirah Sharifudin Andy Omar S.Psi">
                        </div>
                        <div class="col-lg-1">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="9130001">
                        </div>
                        <div class="col-lg-3">
                          <label>Jabatan</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
                        <div class="col-lg-3">
                          <label class="">Departemen</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Commercial & Business Development">
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label class="">Waktu Persetujuan</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 09:00 WITA">
                      </div>
                        </div>
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Verifikasi Direksi Terkait</div>
							<div>&nbsp;</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
                        <div class="col-lg-3">
                          <label>Nama Pegawai</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Maghfirah Sharifudin Andy Omar S.Psi">
                        </div>
                        <div class="col-lg-1">
                          <label>NIP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="9130001">
                        </div>
                        <div class="col-lg-3">
                          <label>Jabatan</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Electrical Egineer Supervisor Assistant">
                        </div>
                        <div class="col-lg-3">
                          <label class="">Departemen</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Commercial & Business Development">
                      </div>
                        </div>
						<div class="col-lg-2">
                          <label class="">Waktu Persetujuan</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 09:00 WITA">
                      </div>
                        </div>
                      </div>
										</div>
									</div>

									</div>

									<!--end::Portlet-->

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
								</div>


            </div>
            </div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
