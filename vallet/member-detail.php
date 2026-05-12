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
											Profil Member
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>

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
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

								<!--Begin:: App Aside Mobile Toggle-->
								<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
									<i class="la la-close"></i>
								</button>

								<!--End:: App Aside Mobile Toggle-->

								<!--Begin:: App Aside-->
								<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

									<!--begin:: Widgets/Applications/User/Profile1-->
									<div class="kt-portlet kt-portlet--height-fluid-">
										<div class="kt-portlet__head  kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												</h3>
											</div>

										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-y">

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--user-profile-1">
												<div class="form-group row" style="text-align:center">
																	<div class="col-lg-12">
														<label>Foto Member :</label>
														<div>&nbsp;</div>
														<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																			<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/100_1.jpg&quot;);"></div>


																		</div>

												</div>
												</div>
												<div class="kt-widget__body">
													<div>&nbsp;</div>
													<div class="kt-widget__items">
														<a href="member-detail.php" class="kt-widget__item kt-widget__item--active">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Data Pribadi
																</span>
															</span>
														</a>
														
														


													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									</div>

									<!--end:: Widgets/Applications/User/Profile1-->
								</div>

								<!--End:: App Aside-->

								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">
                    <div class="kt-portlet__body">
                      <div class="row">
								<div class="col-xl-8">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Diri</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">
                        </div>
                       <div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> No. Identitas KTP / SIM :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="7371122301870002" >
                      </div>
                      </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Nama Panggilan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mr.iLu"  >
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Jenis Kelamin :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pria"  >
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Status Pernikahan :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Menikah"  >
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Agama :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Islam"  >
                        </div>
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">

<div class="col-lg-3">
					                           <label class=""><span style="color:#ff0000">*</span> Tempat Kelahiran :</label>
					                            <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar"  >
					                         </div>
						<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Tanggal Kelahiran :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="22 Januari 1987"  >

                        </div>
						<div class="col-lg-3">
					                           <label>Tlp / HP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="082244444436"  >
					                         </div>
											 <div class="col-lg-3">
					                           <label>Whatsapp :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="082244444436"  >
					                         </div>
						
						
						


                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">


						<div class="col-lg-6">
                          <label>Email :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="xxx@xxx.xxx"  >
                        </div>
						<div class="col-lg-6">
					                           <label>NPWP Pribadi :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="082244444436"  >
					                         </div>
											 
						

									</div>
									</div>
									
									</div>


									</div>

									
							<!--end:: Portlet-->
</div>
<div class="col-xl-4">

									<!--begin::Portlet-->
									
<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Korespondensi</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label>Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Jl. Toddopuli Raya Timur">

                        </div>
						
                        </div>
						



										


										</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
                       <div class="col-lg-3">
					  <label>RT :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="003">

                        </div>
<div class="col-lg-3">
					  <label>RW :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="005">

                        </div>
<div class="col-lg-6">
					  <label>Kode Pos :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="90233">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
						   <div class="col-lg-6">
					  <label>Provinsi :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sulawesi Selatan">

                        </div>
                       <div class="col-lg-6">
					  <label>Kecamatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Borong">

                        </div>

                        </div>
						
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
                       <div class="col-lg-6">
					  <label>Kelurahan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Manggala">

                        </div>
						<div class="col-lg-6">
					  <label>Kota :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">

                        </div>


                        </div>
						




										


										</div>



								</div>

                    </div>
                    </div>
					<div class="row">
<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Membership</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-1">
                          <label>ID Member :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000001MP823">

                        </div>
						<div class="col-lg-1">
                          <label>Tipe Member :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pribadi">
                        </div>
						<div class="col-lg-1">
                          <label>Jenis Member :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Silver">
                        </div>
						<div class="col-lg-1">
                          <label>Kendaraan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="3">
                        </div>
						<div class="col-lg-2">
                          <label>Tanggal Registrasi :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="10 Agustus 2023">

                        </div>
						<div class="col-lg-2">
                          <label>Aktif Hingga :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Agustus 2023">
                        </div>
						<div class="col-lg-3">
					   <label>Tempat Registrasi :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Perumda Parkir Makassar Raya atau Online">

                        </div>
                        </div>
						
						
						
						  




											</div>

										</div>

									</div>


                    </div>

									</div>

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
