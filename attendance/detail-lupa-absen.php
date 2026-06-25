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
											Detail Lupa Absen
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="hr-lupa-absen.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pegawai</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						<div class="col-lg-6">
                          <label>Nama Pegawai :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Ramadhan Lerrick, ST">
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">NIP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000000000009">
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






									<!--end::Portlet-->
								</div>

								<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Lupa Absen</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
												<div class="col-lg-12">
                          <label>Jenis Lupa Absen :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Absen Datang">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Tanggal Lupa Absen :</label>
						                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="16 Juli 2025">
						                        </div>
<div class="col-lg-6">
                          <label class="">Jam Lupa Absen :</label>
						                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="08:00 WITA">
						                        </div>
						                        </div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
												<div class="col-lg-8">
                          <label>Keterangan Lupa Absen :</label>
                         <textarea class="form-control" id="exampleTextarea" rows="6" placeholder="Khilaf" disabled></textarea>

                        </div>
						<div class="col-lg-4">
                          <label class="">Lampiran :</label>
                          <div class="form-group">
                        <a href="#" class="btn btn-label-brand btn-sm">
                    <i class="fa fa-download"></i>Download</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Verifikasi</div><br><br>
										<div class="kt-portlet__body">

											<!--Begin::Timeline 3 -->
											<div class="kt-timeline-v2">
												<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time"><span style="color:#0961ae;">15/07/2025</span><br>15:51 WITA</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-brand"></i>
														</div>

														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															<span class="kt-list-pics kt-list-pics--md"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000020<hr>Sri Murti Ningrum, SE<hr>Staff Administrasi Kepegawaian" data-html="true">
														<img src="../assets/img/users/100_10.jpg" alt="image">
													</a></span> 
														</div>
														&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-sm btn-label-brand">Dibuat</a>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time"><span style="color:#0961ae;">15/07/2025</span><br>16:51 WITA</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>

														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															<span class="kt-list-pics kt-list-pics--md"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000021<hr>Sri Widya Ningsih, SE<hr>Kepala Administrasi Kepegawaian" data-html="true">
														<img src="../assets/img/users/100_11.jpg" alt="image">
													</a></span> 
														</div>
														&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-sm btn-label-success">Disetujui</a>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time"><span style="color:#0961ae;">15/07/2025</span><br>17:51 WITA</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>

														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															<span class="kt-list-pics kt-list-pics--md"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002<hr>Oklan Zulkifli, SE<hr>Direktur Umum" data-html="true">
														<img src="../assets/img/users/100_12.jpg" alt="image">
													</a></span> 
														</div>
														&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-sm btn-label-success">Disetujui</a>
													</div>
													<div class="kt-timeline-v2__item">
														<span class="kt-timeline-v2__item-time"><span style="color:#0961ae;">15/07/2025</span><br>18:51 WITA</span>
														<div class="kt-timeline-v2__item-cricle">
															<i class="fa fa-genderless kt-font-success"></i>
														</div>

														<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
															<span class="kt-list-pics kt-list-pics--md"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Muhammad Nasrullah, S.Kom<hr>Direktur Utama" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></span> 
														</div>
														&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-sm btn-label-success">Disetujui</a>
													</div>
													
												</div>
											</div>

											<!--End::Timeline 3 -->
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
