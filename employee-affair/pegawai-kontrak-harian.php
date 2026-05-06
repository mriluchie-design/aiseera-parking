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
											Data Pegawai Kontrak Harian

									</h3>


								</div>
								<div class="kt-subheader__toolbar">

										<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
										<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="flaticon2-printer"></i> Export Data</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">

													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">PDF</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-excel"></i>
															<span class="kt-nav__link-text">Excel</span>

														</a>
													</li>

												</ul>

												<!--end::Nav-->
											</div>

											<a href="pegawai-kontrak-harian-add.php" class="btn btn-info btn-sm">
												<i class="fa fa-user-plus"></i> Tambah Data</button>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
										</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="row">
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

													<!--begin::Filter-->
			<div class="kt-portlet" id = "login_Box_Div" >
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Filter Data
						</h3>
					</div>
				</div>

				<!--begin::Form-->
				<form class="kt-form">
					<div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-2">
                                <label>Nama Pegawai :</label>
    	                        <div class="form-group">

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
                             <div class="col-lg-2">
                                <label>Departemen :</label>

                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label class="">Bagian :</label>
								 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Direksi</option>
                                      <option value="4">Umum dan Kepegawaian</option>
                                      <option value="5" selected="">Hukum dan Humas</option>
                                      <option value="6">Keuangan</option>
                                      <option value="12">Asset</option>
                                      <option value="12" >Pengelolaan</option>
                                      <option value="12" >Produksi</option>
                                      <option value="12" >Pengembangan</option>
                                      <option value="12" >Kerjasama</option>
                                  </select>

                            </div>
                            <div class="col-lg-2">
                                <label class="">Jabatan :</label>
								 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
									  <optgroup label="Direksi">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Umum</option>
                                      <option value="2">Direktur Keuangan dan Asset</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     
                                  </select>
							</div>
							<div class="col-lg-2">
                                <label class="">Pangkat / Golongan :</label>
								 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
									  <optgroup label="Direksi">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Umum</option>
                                      <option value="2">Direktur Keuangan dan Asset</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     
                                  </select>

                            </div>
							<div class="col-lg-2">
                                <label class="">Kantor :</label>
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
                            </div>
                            </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
							<div class="col-lg-2">
                                <label class="">Tanggal Kontrak :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label class="">Berakhir Kontrak :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							
                        </div>
                    </div>
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-brand btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->
							<!--begin:: Widgets/Stats-->
							<div class="kt-portlet">
								<div class="kt-portlet__body  kt-portlet__body--fit">
									<div class="row row-no-padding row-col-separator-lg">
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::Total Profit-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Total
														</h4>
														<span class="kt-widget24__desc">
															Kontrak Harian
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														4
													</span>
												</div>

											</div>

											<!--end::Total Profit-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Feedbacks-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Kontrak Harian
														</h4>
														<span class="kt-widget24__desc">
															Pria
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-success">
														2
													</span>
												</div>

											</div>

											<!--end::New Feedbacks-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Orders-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Kontrak Harian
														</h4>
														<span class="kt-widget24__desc">
															Wanita
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														2
													</span>
												</div>

											</div>

											<!--end::New Orders-->
										</div>
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Users-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Kontrak Harian
														</h4>
														<span class="kt-widget24__desc">
															Hampir Berakhir
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-warning">
														4
													</span>
												</div>

											</div>

											<!--end::New Users-->
										</div>
									</div>
								</div>
							</div>

							<!--end:: Widgets/Stats-->

							<div class="kt-portlet kt-portlet--mobile ">
								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">QR Code Pegawai</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="4%" rowspan="2" bgcolor="#f7fcff">Nama Lengkap</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">NIK</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Department</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Bagian</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Jabatan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th colspan="2" bgcolor="#f7fcff">Tanggal</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Email</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">HP</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">WA</th>
											  <th colspan="3" bgcolor="#f7fcff">Status Pengajuan<br>Menjadi Calon Pegawai</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="5%" bgcolor="#f7fcff">Kontrak Awal</th>
											  <th width="5%" bgcolor="#f7fcff">Kontrak Berakhir</th>
											  <th width="1%" bgcolor="#f7fcff">Kepegawaian</th>
											  <th width="1%" bgcolor="#f7fcff">Direktur Umum</th>
											  <th width="1%" bgcolor="#f7fcff">Direktur Utama</th>
								          </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>000 000 000</td>
												<td style="text-align:left" nowrap>Umum</td>
												<td style="text-align:left" nowrap>Umum dan Kepegawaian</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Kepegawaian</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Diusulkan" data-html="true"><i class="fa fa-user-tie"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Diusulkan" data-html="true"><i class="fa fa-user-tie"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-kontrak-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-pegawai-kontrak-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Pegawai</span>
																			</a>
																		</li>
<li class="kt-nav__item">
																			<a href="kontrak-add-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-tie"></i>
																				<span class="kt-nav__link-text">Pengajuan Calon Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-perpanjangan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-clock"></i>
																				<span class="kt-nav__link-text">Perpanjang Kontrak Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">2</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>000 000 000</td>
												<td style="text-align:left" nowrap>Umum</td>
												<td style="text-align:left" nowrap>Hukum dan Humas</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Hukum</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Diusulkan" data-html="true"><i class="fa fa-user-tie"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Diusulkan" data-html="true"><i class="fa fa-user-tie"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-kontrak-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-pegawai-kontrak-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Pegawai</span>
																			</a>
																		</li>
<li class="kt-nav__item">
																			<a href="kontrak-add-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-tie"></i>
																				<span class="kt-nav__link-text">Pengajuan Calon Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-perpanjangan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-clock"></i>
																				<span class="kt-nav__link-text">Perpanjang Kontrak Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">3</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>000 000 000</td>
												<td style="text-align:left" nowrap>Keuangan dan Asset</td>
												<td style="text-align:left" nowrap>Keuangan</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Keuangan</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Belum Diusulkan"><i class="fa fa-user-slash"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-kontrak-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-pegawai-kontrak-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Pegawai</span>
																			</a>
																		</li>
<li class="kt-nav__item">
																			<a href="kontrak-add-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-tie"></i>
																				<span class="kt-nav__link-text">Pengajuan Calon Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-perpanjangan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-clock"></i>
																				<span class="kt-nav__link-text">Perpanjang Kontrak Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">4</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>000 000 000</td>
												<td style="text-align:left" nowrap>Keuangan dan Asset</td>
												<td style="text-align:left" nowrap>Asset</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Asset</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Belum Diusulkan"><i class="fa fa-user-slash"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-kontrak-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-pegawai-kontrak-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Pegawai</span>
																			</a>
																		</li>
<li class="kt-nav__item">
																			<a href="kontrak-add-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-tie"></i>
																				<span class="kt-nav__link-text">Pengajuan Calon Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-perpanjangan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-clock"></i>
																				<span class="kt-nav__link-text">Perpanjang Kontrak Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">5</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>000 000 000</td>
												<td style="text-align:left" nowrap>Operasional</td>
												<td style="text-align:left" nowrap>Pengelolaan</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Pengelolaan</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Belum Diusulkan"><i class="fa fa-user-slash"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-kontrak-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-pegawai-kontrak-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Pegawai</span>
																			</a>
																		</li>
<li class="kt-nav__item">
																			<a href="kontrak-add-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-tie"></i>
																				<span class="kt-nav__link-text">Pengajuan Calon Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-perpanjangan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-clock"></i>
																				<span class="kt-nav__link-text">Perpanjang Kontrak Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>

																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">6</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>000 000 000</td>
												<td style="text-align:left" nowrap>Operasional</td>
												<td style="text-align:left" nowrap>Produksi</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Produksi</td>
												<td style="text-align:center" nowrap>Pusat</td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Belum Diusulkan"><i class="fa fa-user-slash"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-kontrak-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-pegawai-kontrak-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Pegawai</span>
																			</a>
																		</li>
<li class="kt-nav__item">
																			<a href="kontrak-add-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-tie"></i>
																				<span class="kt-nav__link-text">Pengajuan Calon Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-perpanjangan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-clock"></i>
																				<span class="kt-nav__link-text">Perpanjang Kontrak Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>

																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">7</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>000 000 000</td>
												<td style="text-align:left" nowrap>Pengembangan Usaha dan Kerjasama</td>
												<td style="text-align:left" nowrap>Pengembangan</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Pengembangan</td>
												<td style="text-align:center" nowrap>Cabang</td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Diusulkan" data-html="true"><i class="fa fa-user-tie"></i></button></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui<hr>Nama Direktur Umum<br>31 Desember 2018 - 14:30 WITA">
								<i class="fa flaticon2-check-mark"></i>
							</span></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Ditolak<hr>Tidak Memenuhi Persyaratan<hr>01 Januari 2023 - 09:00:00 WITA"><i class="fa flaticon2-delete"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-kontrak-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-pegawai-kontrak-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Pegawai</span>
																			</a>
																		</li>
<li class="kt-nav__item">
																			<a href="kontrak-add-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-tie"></i>
																				<span class="kt-nav__link-text">Pengajuan Calon Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-perpanjangan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-clock"></i>
																				<span class="kt-nav__link-text">Perpanjang Kontrak Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
<tr>
												<td id="kt_table_1">8</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" >
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>000 000 000</td>
												<td style="text-align:left" nowrap>Pengembangan Usaha dan Kerjasama</td>
												<td style="text-align:left" nowrap>Kerjasama</td>
												<td wstyle="text-align:left" nowrap>Staff Administrasi Kerjasama</td>
												<td style="text-align:center" nowrap>Cabang</td>
												<td style="text-align:center" nowrap>24 September 2019</td>
												<td style="text-align:center" nowrap>24 September 2020</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="Diusulkan" data-html="true"><i class="fa fa-user-tie"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Ditolak<hr>Tidak Memenuhi Persyaratan<hr>01 Januari 2023 - 09:00:00 WITA"><i class="fa flaticon2-delete"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Ditolak"><i class="fa flaticon2-delete"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-kontrak-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-id-card-pegawai-kontrak-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-address-card"></i>
																				<span class="kt-nav__link-text">Cetak ID Card Pegawai</span>
																			</a>
																		</li>
<li class="kt-nav__item">
																			<a href="kontrak-add-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-tie"></i>
																				<span class="kt-nav__link-text">Pengajuan Calon Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-perpanjangan.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-clock"></i>
																				<span class="kt-nav__link-text">Perpanjang Kontrak Pegawai</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="pegawai-kontrak-hapus.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										</tbody>
									</table>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-pagination  kt-pagination--danger">
													<select class="form-control kt-font-danger" style="width: 60px">
															<option value="10">10</option>
															<option value="20">20</option>
															<option value="30">30</option>
															<option value="50">50</option>
															<option value="100">100</option>
														</select>
														<span class="pagination__desc">
															Menampilkan 10 dari 230 Data
														</span>

													<div class="kt-pagination__toolbar">
														<ul class="kt-pagination__links">
														<li class="kt-pagination__link--first">
															<a href="#"><i class="fa fa-angle-double-left kt-font-danger"></i></a>
														</li>
														<li class="kt-pagination__link--next">
															<a href="#"><i class="fa fa-angle-left kt-font-danger"></i></a>
														</li>
														<li>
															<a href="#">...</a>
														</li>
														<li>
															<a href="#">29</a>
														</li>
														<li class="kt-pagination__link--active">
															<a href="#">30</a>
														</li>
														<li>
															<a href="#">31</a>
														</li>
														<li>
															<a href="#">32</a>
														</li>
														<li>
															<a href="#">33</a>
														</li>
														<li>
															<a href="#">34</a>
														</li>
														<li>
															<a href="#">...</a>
														</li>
														<li class="kt-pagination__link--prev">
															<a href="#"><i class="fa fa-angle-right kt-font-danger"></i></a>
														</li>
														<li class="kt-pagination__link--last">
															<a href="#"><i class="fa fa-angle-double-right kt-font-danger"></i></a>
														</li>
													</ul>
													</div>
												</div>
<!--begin::Modal 1-->
									<div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--tabs">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-danger nav-tabs-line-2x nav-tabs-line-right nav-tabs-bold" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_portlet_base_demo_2_3_tab_content" role="tab" aria-selected="true">
															<i class="fa fa-dolly" aria-hidden="true"></i>Checklist
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_portlet_base_demo_2_2_tab_content" role="tab" aria-selected="false">
															<i class="fab fa-dribbble" aria-hidden="true"></i>Serah Terima
														</a>
													</li>

												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_portlet_base_demo_2_3_tab_content" role="tabpanel">
												<div class="form-group row">
												<div class="col-lg-3">
														<label>ID Penawaran :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1102019">

												</div>
												<div class="col-lg-9">
														<label>Nama Pekerjaan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Pemasangan Access Door Lock dan Penggantian Reader Door Lock Pada Kantor Pusat">

												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>

												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tr style="text-align:center">
    <td width="5%" bgcolor="#f7fcff" >NO</td>
    <td width="80%" bgcolor="#f7fcff">URAIAN</td>

    <td width="8%" bgcolor="#f7fcff">AKSI</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Surat Penawaran"></td>

    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td style="text-align:center">2</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Rencana Anggaran dan Biaya Penawaran"></td>

   <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Proposal Penawaran" /></td>

   <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>
  <tr>
    <td style="text-align:center">4</td>
    <td><input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Lampiran Teknis Penawaran" /></td>

    <td width="1%" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--danger">
															<input type="checkbox">
															<span></span>
														</label></td>
  </tr>

</table>
												</div>
												<div class="tab-pane" id="kt_portlet_base_demo_2_2_tab_content" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-6">
														<label>No. Tanda Terima Berkas :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-6">
														<label>Waktu Penyerahan Berkas :</label>
														<div class="form-group">
													<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pengirim Berkas :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">

												</div>

												<div class="col-lg-6">
														<label>Nama Penerima Berkas :</label>
														<input type="email" class="form-control form-control-sm" placeholder="Direktur Utama">

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" >

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Tanda Tangan Pengirim Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>

												<div class="col-lg-6">
														<label>Tanda Tangan Penerima Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>


												</div>
												</div>
												</div>

											</div>
										</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Assign Project Director</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												</div>

											</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
