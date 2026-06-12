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
											Detail Transaksi Non Member
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
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pegawai</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-4">
                          <label>Nama Pegawai :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">\
																						<optgroup label="- Direksi">
                              <option value="2">000 000 001 - Yulianti Tomu, SE</option>
                              <option value="2">000 000 002 - Rizal Asjadad</option>
                              <option value="3">000 000 003 - Christofher Rio Aviary</option>
                              <option value="3">000 000 004 - Mu’amar Nor Amin</option>
                              <option value="3">000 000 005 - Zulfadli Syahrir</option>
							  <optgroup label="- Umum dan Kepegawaian">
                              <option value="3">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
                              <option value="3">238 004 032 - Sri Suhartini, SE</option>

                          </select>
                        </div>

                        <div class="col-lg-2">
                          <label>NIP Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>

                        <div class="col-lg-2">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						 <div class="col-lg-4">
                          <label>Status Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pegawai Tetap">
                        </div>
                      </div>
                      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
                       <div class="col-lg-4">
                          <label class="">Department :</label>
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
                          <label class="">Tanggal Cuti :</label>
                          <div class='input-group' >
                        <input type='text' class="form-control kt_daterangepicker_2" readonly placeholder="Select date range" />
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                        </div>
                      </div>
                        </div>
                        <div class="col-lg-4">
                          <label class="">Tujuan Cuti :</label>
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
                          <select class="form-control kt-selectpicker" data-live-search="true">\
																						<optgroup label="- Direksi">
                              <option value="2">000 000 001 - Yulianti Tomu, SE</option>
                              <option value="2">000 000 002 - Rizal Asjadad</option>
                              <option value="3">000 000 003 - Christofher Rio Aviary</option>
                              <option value="3">000 000 004 - Mu’amar Nor Amin</option>
                              <option value="3">000 000 005 - Zulfadli Syahrir</option>
							  <optgroup label="- Umum dan Kepegawaian">
                              <option value="3">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
                              <option value="3">238 004 032 - Sri Suhartini, SE</option>

                          </select>
                        </div>
						<div class="col-lg-2">
                          <label>NIP Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>

                        <div class="col-lg-2">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						<div class="col-lg-4">
                          <label>Status Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pegawai Tetap">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                        <div class="col-lg-4">
                          <label class="">Department :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum">
                      </div>
                        </div>
						 <div class="col-lg-4">
                          <label class="">Bagian :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian">
                      </div>
                        </div>
						<div class="col-lg-4">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Bagian Umum dan Kepegawaian">
                      </div>
                        </div>
                      </div>

                      </div>
                    </div>
							<!--end:: Portlet-->
										</div>


								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pejabat Pembuat</div><br>
										<div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-7">
                          <label>Nama Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
                        </div>
						<div class="col-lg-5">
                          <label>NIP Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>
                        </div>
						 

					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Department :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
						
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Bagian :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan">
                        </div>
						
                      </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label>Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Pemetaan dan Pengembangan">
                        </div>
						
                      </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-6">
                          <label>Pangkat / Golongan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pena">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                      </div>
                     
                      </div>
                        

									<!--end::Portlet-->
								</div>
								</div>
								<div class="col-xl-3">

									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Saldo Cuti</div>
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
