<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Setup Gaji Pokok Pegawai Tetap
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
                            <div class="col-lg-3">
                                <label>Nama Pegawai :</label>
    	                       <div class="form-group">

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
        					
                            </div>
                            <div class="col-lg-2">
                                <label>Department :</label>
								
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
                                <label>Divisi :</label>
								
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
                            <div class="col-lg-3">
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
                                <label class="">Kantor :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pusat</option>
                                      <option value="2">Cabang</option>
                                  </select>
                             
                            </div>
                            </div>
							
						
					<div class="kt-portlet__foot text-center">
																		<div class="kt-form__actions">
																			<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																			<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																		</div>
																	</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">QR Code Pegawai</th>
											  <th width="2%" bgcolor="#f7fcff">Foto</th>
											  <th width="3%" bgcolor="#f7fcff">Nama Pegawai</th>
											  <th width="3%" bgcolor="#f7fcff">Department</th>
											  <th width="3%" bgcolor="#f7fcff">Divisi</th>
											  <th width="3%" bgcolor="#f7fcff">Jabatan</th>
											  <th width="1%" bgcolor="#f7fcff">Kantor</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal<br>Mulai Kerja</th>
											  <th colspan="2" bgcolor="#fdfdec">Gaji Pokok</th>
											  <th colspan="2" bgcolor="#fdfdec">Lembur / Jam</th>
											  <th width="3%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td width="1%" id="kt_table_1">1</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000001" data-html="true"> <img src="../assets/img/users/100_15.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Utama</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="1%" style="text-align:right" nowrap>5.000.000,-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="1%" style="text-align:right" nowrap>50.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="update-gapok-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-bill"></i>
																				<span class="kt-nav__link-text">Update Gaji Pokok</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">2</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000002" data-html="true"> <img src="../assets/img/users/100_9.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:left">Oklan Zulkifli, SE</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Umum</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">50.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="update-gapok-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-bill"></i>
																				<span class="kt-nav__link-text">Update Gaji Pokok</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td width="1%" id="kt_table_1">3</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000003" data-html="true"> <img src="../assets/img/users/100_8.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:left">Deddy Rafsanjani, S.Sos</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Operasional</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</button></td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">50.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="update-gapok-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-bill"></i>
																				<span class="kt-nav__link-text">Update Gaji Pokok</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td width="1%" id="kt_table_1">4</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000004" data-html="true"> <img src="../assets/img/users/100_6.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:left">Akmal Baharuddin</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Keuangan dan Asset</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang B">Cabang</button></td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">50.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="update-gapok-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-bill"></i>
																				<span class="kt-nav__link-text">Update Gaji Pokok</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>

<tr>
												<td width="1%" id="kt_table_1">5</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000005" data-html="true"> <img src="../assets/img/users/100_2.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:left">Nursiah, S.Kom</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:center" nowrap>Direksi</td>
												<td width="3%" style="text-align:left" nowrap>Direktur Pengembangan Usaha & Kerjasama</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">50.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="update-gapok-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-bill"></i>
																				<span class="kt-nav__link-text">Update Gaji Pokok</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
<tr>
												<td width="1%" id="kt_table_1">6</td>
												<td align="center" valign="middle" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000006" data-html="true"> <img src="../assets/img/users/300_21.jpg" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:left">Muhammad Ramadhan Lerrick, ST</td>
												<td width="3%" style="text-align:center" nowrap>Umum</td>
												<td width="3%" style="text-align:center" nowrap>Umum</td>
												<td width="3%" style="text-align:left" nowrap>Kepala Bagian Umum</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td width="3%" style="text-align:center" nowrap>24 September 2008</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">5.000.000,-</td>
												<td nowrap="nowrap" style="text-align:center">Rp.</td>
												<td nowrap="nowrap" style="text-align:right">50.000,-</td>
												<td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="update-gapok-pegawai-tetap.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-money-bill"></i>
																				<span class="kt-nav__link-text">Update Gaji Pokok</span>
																			</a>
																		</li>
																		
																		
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
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
