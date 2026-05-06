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
											Mesin Absen
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
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
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
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
										<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__body">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mesin</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						<div class="col-lg-3">
                          <label>Nama Mesin :</label>
                          <div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm kt-input" placeholder="Masukkan Nama Mesin Absen">
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span>
															<i class="la la-tablet"></i>
														</span>
													</span>
												</div>
                        </div>
                       <div class="col-lg-3">
                          <label class="">IP :</label>
                          <div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm kt-input" placeholder="Masukkan IP Mesin Absen">
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span>
															<i class="la la-server"></i>
														</span>
													</span>
												</div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Lokasi :</label>
                          <div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm kt-input" placeholder="Masukkan Lokasi Mesin Absen">
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span>
															<i class="la la-home"></i>
														</span>
													</span>
												</div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Port :</label>
                          <div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm kt-input" placeholder="Masukkan Port Mesin Absen">
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span>
															<i class="la la-share-alt-square"></i>
														</span>
													</span>
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

						</div>

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
