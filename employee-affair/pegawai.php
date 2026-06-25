<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Data Pegawai Tetap
                </h3>
            </div>
            <div class="kt-subheader__toolbar">
                <button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
                <a href="#" class="btn btn-label-warning btn-sm">
												<i class="fa fa-file-import"></i> Import Data</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
							
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">PDF</span>
                            </a>
                          </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Nav-->
                </div>
                <a href="pegawai-add.php" class="btn btn-info btn-sm">
                    <i class="fa fa-address-card"></i>Tambah Data Pegawai</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">A simple primary alert—check it out!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

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
                                <label class="">Kantor :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pusat</option>
                                      <option value="2">Nama Cabang A</option>
                                      <option value="2">Nama Cabang B</option>
									  <option value="HI">Keseluruhan</option>
                                  </select>
                             
                            </div>
                            <div class="col-lg-3">
                                <label>Nama Pegawai :</label>
    	                       <div class="form-group">

					                         <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan" class="a">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional" class="a">
					 																<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Teknologi dan Riset" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
					                       </div>
        					
                            </div>
                            <div class="col-lg-2">
                                <label>Departemen :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="4">Keuangan</option>
                                      <option value="5">Operasional</option>
                                      <option value="5">Teknologi dan Riset</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
									  <option value="HI">Keseluruhan</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Divisi :</label>
								
                               <select class="form-control kt-selectpicker" data-live-search="true">
                                      <optgroup label="Direksi" class="a">
									  <option value="3">Direksi</option>
									  </optgroup>
									  
									    <optgroup label="Keuangan" class="a">
                                      <option value="6">Keuangan</option>
                                      <option value="12">Asset</option>
									  </optgroup>
									  <optgroup label="Operasional" class="a">
                                      <option value="4">Umum</option>
                                      <option value="4">Kepegawaian</option>
									  </optgroup>
									   <optgroup label="Teknologi dan Riset" class="a">
                                      <option value="12" >Teknologi</option>
                                      <option value="12" >Riset</option>
									   </optgroup>
									   <optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
                                      <option value="12" >Pengembangan</option>
                                      <option value="12" >Kerjasama</option>
									  </optgroup>
                                      <option value="12" >Keseluruhan</option>

                                </select>
                            </div>
                            <div class="col-lg-2">
                                <label class="">Jabatan :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                   
									 <optgroup label="Direksi" class="a">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Keuangan</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Teknologi dan Riset</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  <option value="HI">Keseluruhan</option>
									  </optgroup>
                                     
                                  </select>
                             
                            </div>
							
							
							
							<div class="col-lg-1">
                                <label class="">Jenis Kelamin :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pria</option>
                                      <option value="2">Wanita</option>
									  <option value="HI">Keseluruhan</option>
                                     
                                  </select>
                             
                            </div>
                            </div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
							<div class="col-lg-2">
                                <label class="">Tanggal Mulai Kerja :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							
                            </div>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->
<div class="row">
								
								
								
								
								
								<div class="col-xl-12">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label" style="margin-left:55px;">
												<h3 class="kt-portlet__head-title">
													Statistik
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar" style="margin-right:55px;">
												<a href="#" class="btn btn-label-light btn-sm dropdown-toggle" data-toggle="dropdown">
													Keseluruhan
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Bulan ini</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Tahun ini</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon fa fa-chart-bar"></i>
																<span class="kt-nav__link-text">Keseluruhan</span>
															</a>
														</li>
														
														
													</ul>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit">
											<div class="kt-widget17">
												<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #0961ae">
													<div class="kt-widget17__chart" style="height:120px;">
														<canvas id="kt_chart_activities"></canvas>
													</div>
												</div>
												<div class="kt-widget17__stats">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															
															<span class="kt-widget17__subtitle" style="text-align:center">
																Total Pegawai
															</span>

															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px; font-weight:500;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">105</span>
															
															</span>
														</div>
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Pria
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">35</span>
															</span>
														</div>
														
														
														<div class="kt-widget17__item">
															<span class="kt-widget17__subtitle" style="text-align:center">
																Wanita
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:20px;" class="kt-nav__link" data-toggle="modal" data-target="#modal_hadir">70</span>
															</span>
														</div>
														
														
														
														
														
													</div>
													
													
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>

							<!--End::Section-->

							

						
						</div>
			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="2%" bgcolor="#f7fcff">Foto</th>
											  <th width="3%" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="7%" bgcolor="#f7fcff">Departemen</th>
											  <th width="7%" bgcolor="#f7fcff">Divisi</th>
											  <th width="7%" bgcolor="#f7fcff">Jabatan</th>
											  
											  
											  <th width="3%" bgcolor="#f7fcff">Tanggal<br>Mulai Kerja</th>
											  <th width="3%" bgcolor="#f7fcff">Jenis<br>Kelamin</th>
											  <th width="3%" bgcolor="#f7fcff">Tempat<br>Tanggal Lahir</th>
											  <th width="1%" bgcolor="#f7fcff">Email</th>
											  <th width="1%" bgcolor="#f7fcff">HP</th>
											  <th width="1%" bgcolor="#f7fcff">WA</th>
											  <th width="1%" bgcolor="#f7fcff">QR Code Pegawai</th>
											  <th width="1%" bgcolor="#f7fcff">Kantor</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000001" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></td>
												

												<td style="text-align:left" nowrap>Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:left" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direktur Utama</td>
												
												
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Pria</td>
												<td style="text-align:center" nowrap>Makassar<br>22 Januari 1987</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="cetak-id-card.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card-alt"></i>
																				<span class="kt-nav__link-text">Cetak ID Card</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-cv-pegawai.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card"></i>
																				<span class="kt-nav__link-text">Cetak CV Pegawai</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">2</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000002" data-html="true">
														<img src="../assets/img/users/100_9.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Oklan Zulkifli, SE</td>
												<td style="text-align:left" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direksi</td>
												<td style="text-align:left" nowrap>Direktur Umum</td>
												
												
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Pria</td>
												<td style="text-align:center" nowrap>Makassar<br>22 Januari 1987</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="cetak-id-card.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card-alt"></i>
																				<span class="kt-nav__link-text">Cetak ID Card</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-cv-pegawai.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card"></i>
																				<span class="kt-nav__link-text">Cetak CV Pegawai</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">3</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000003" data-html="true">
														<img src="../assets/img/users/100_8.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Deddy Rafsanjani, S.Sos</td>
												<td nowrap="nowrap" style="text-align:left">Umum</td>
												<td nowrap="nowrap" style="text-align:left">Umum dan Kepegawaian</td>
												<td nowrap="nowrap" wstyle="text-align:left">Staff Administrasi Kepegawaian</td>
												
												
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Pria</td>
												<td style="text-align:center" nowrap>Makassar<br>22 Januari 1987</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="cetak-id-card.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card-alt"></i>
																				<span class="kt-nav__link-text">Cetak ID Card</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-cv-pegawai.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card"></i>
																				<span class="kt-nav__link-text">Cetak CV Pegawai</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">4</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000004" data-html="true">
														<img src="../assets/img/users/100_6.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Akmal Baharuddin</td>
												<td nowrap="nowrap" style="text-align:left">Umum</td>
												<td nowrap="nowrap" style="text-align:left">Hukum dan Humas</td>
												<td nowrap="nowrap" wstyle="text-align:left">Staff Administrasi Hukum</td>
												
												
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Pria</td>
												<td style="text-align:center" nowrap>Makassar<br>22 Januari 1987</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang B">Cabang</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="cetak-id-card.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card-alt"></i>
																				<span class="kt-nav__link-text">Cetak ID Card</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-cv-pegawai.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card"></i>
																				<span class="kt-nav__link-text">Cetak CV Pegawai</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>

<tr>
												<td id="kt_table_1">5</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000005" data-html="true">
														<img src="../assets/img/users/100_2.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Nursiah, S.Kom</td>
												<td nowrap="nowrap" style="text-align:left">Keuangan dan Asset</td>
												<td nowrap="nowrap" style="text-align:left">Keuangan</td>
												<td nowrap="nowrap" wstyle="text-align:left">Staff Administrasi Keuangan</td>
											
												
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Wanita</td>
												<td style="text-align:center" nowrap>Makassar<br>22 Januari 1987</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="cetak-id-card.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card-alt"></i>
																				<span class="kt-nav__link-text">Cetak ID Card</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-cv-pegawai.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card"></i>
																				<span class="kt-nav__link-text">Cetak CV Pegawai</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
<tr>
												<td id="kt_table_1">6</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000006" data-html="true">
														<img src="../assets/img/users/300_21.jpg" alt="image">
													</a></td>

												<td style="text-align:left" nowrap>Muhammad Ramadhan Lerrick, ST</td>
												<td nowrap="nowrap" style="text-align:left">Keuangan dan Asset</td>
												<td nowrap="nowrap" style="text-align:left">Asset</td>
												<td nowrap="nowrap" wstyle="text-align:left">Staff Administrasi Asset</td>
												
												
												<td style="text-align:center" nowrap>24 September 2008</td>
												<td style="text-align:center" nowrap>Pria</td>
												<td style="text-align:center" nowrap>Makassar<br>22 Januari 1987</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="dirut@ilugroup.co.id"><i class="flaticon2-send"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fa fa-phone-square"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-facebook btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="082244444436"><i class="fab fa-whatsapp"></i></button></td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Profil</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="cetak-id-card.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card-alt"></i>
																				<span class="kt-nav__link-text">Cetak ID Card</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="cetak-cv-pegawai.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-id-card"></i>
																				<span class="kt-nav__link-text">Cetak CV Pegawai</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="pegawai-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>

										  
										</tbody>
									</table>
                    <!--end: Datatable -->

                    <!-- begin:: pageline -->
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
                    <!-- end:: pageline -->

            </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
