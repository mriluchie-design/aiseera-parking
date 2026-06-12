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
											Edit Hak Akses
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

								<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data User Group</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">

                     <div class="form-group row">
						
						
                       

                       
						<div class="col-lg-12">
                          <label class="">User Group :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Super Admin">
                      </div>
                        </div>
						

                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Multi Select User :</label>
                          <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000 000 001 - Yulianti Tomu, SE</option>
																					<option value="HI">000 000 002 - Rizal Asjadad</option>
																					<option value="HI">000 000 003 - Christofher Rio Aviary</option>
																					<option value="HI">000 000 004 - Mu’amar Nor Amin</option>
																					<option value="HI">000 000 005 - Zulfadli Syahrir</option>
					 															</optgroup>
					 															<optgroup label="Umum">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>

					 														</select>
                        </div>
						

                        </div>

                        </div>
                        </div>






									<!--end::Portlet-->
								</div>

								<div class="col-xl-9">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Hak Akses</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="2%" bgcolor="#f7fcff">Modul</td>
																								  <td width="3%" bgcolor="#f7fcff">Menu</td>
																								  <td width="3%" bgcolor="#f7fcff">Sub Menu</td>
																								  <td width="1%" bgcolor="#f7fcff">Add</td>
																								  <td width="1%" bgcolor="#f7fcff">View</td>
																								  <td width="1%" bgcolor="#f7fcff">Edit</td>
																								  <td width="1%" bgcolor="#f7fcff">Delete</td>
																								  <td width="1%" bgcolor="#f7fcff">Validate</td>
																								  <td width="1%" bgcolor="#f7fcff">Approve</td>
																								  <td width="1%" bgcolor="#f7fcff">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								
																								
																								
																								
																								
																								
																								

																								<tr>
																								  <td style="text-align:right">1</td>
																									<td style="text-align:left">HR Department</td>
																									<td style="text-align:left">Pegawai</td>
																									<td style="text-align:left">Pegawai Tetap</td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																								  <td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
													</tr>
													
													<tr>
																								  <td style="text-align:right">2</td>
																									<td style="text-align:left">HR Department</td>
																									<td style="text-align:left">Pegawai</td>
																									<td style="text-align:left">Pegawai Kontrak Bulanan</td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																								  <td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
													</tr>
													<tr>
																								  <td style="text-align:right">3</td>
																									<td style="text-align:left">HR Department</td>
																									<td style="text-align:left">Pegawai</td>
																									<td style="text-align:left">Pegawai Kontrak Harian</td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																								  <td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
													</tr>
													<tr>
																								  <td style="text-align:right">4</td>
																									<td style="text-align:left">HR Department</td>
																									<td style="text-align:left">Pegawai</td>
																									<td style="text-align:left">Calon Pegawai</td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																								  <td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
													</tr>
													<tr>
																								  <td style="text-align:right">5</td>
																									<td style="text-align:left">HR Department</td>
																									<td style="text-align:left">Pegawai</td>
																									<td style="text-align:left">Pegawai Honor</td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																									<td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
																								  <td style="text-align:center"><label class="kt-checkbox kt-checkbox--success" checked="checked">
																		<input type="checkbox" checked="checked">
																		<span></span>
																	</label></td>
													</tr>
													
													
																							</tbody>
																							
																						</table>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						







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
