<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Data Gaji Pegawai Kontrak Harian
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
                <a href="gaji-pegawai-harian-add.php" class="btn btn-info btn-sm">
                    <i class="fa fa-plus"></i> Setup Gaji</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
	<div class="row">
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
                                <label class="">Periode Gaji :</label>
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Januari</option>
                                      <option value="2">Februari</option>
                                      <option value="2">Maret</option>
                                     
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label class="">Tahun :</label>
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">2019</option>
                                      <option value="2">2018</option>
                                      <option value="2">2017</option>
                                     
                                  </select>
                            </div>
                            <div class="col-lg-3">
                                <label>Nama Pegawai :</label>
    	                       
        							<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">9130037 - Maghfirah Sharifudin Andy Omar S.Psi</option>
                                      <option value="3" selected="">9130038 - Maghfirah Sharifudin Andy Omar S.Psi</option>
                                      
                                  </select>
        					
                            </div>
                            <div class="col-lg-2">
                                <label>Departemen :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Direksi</option>
                                      <option value="3">Finance</option>
                                      <option value="4">SDM & UMUM</option>
                                      <option value="5" selected="">Infrastruktur</option>
                                      <option value="6">Information Technology</option>
                                      <option value="12">Creative</option>
                                      <option value="12" >Commercial & Business Development</option>
                                  </select>
                            </div>
                            <div class="col-lg-2">
                                <label class="">Jabatan :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Electrical Engineering Supervisor</option>
                                      <option value="2" selected="">Electrical Engineering Supervisor Assistant</option>
                                      <option value="2">Electrical Engineering</option>
                                     
                                  </select>
                             
                            </div>
							<div class="col-lg-2">
                                <label class="">Kantor :</label>
                                 <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang Sulawesi Barat</option>
                                      <option value="2">Cabang Bandung</option>
                                     
                                  </select>
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

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Tahun</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Bulan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Periode Gaji</th>
											  
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Kantor</th>
											  <th width="3%" colspan="2" rowspan="2" bgcolor="#f7fcff">Total Gaji</th>
											  <th width="1%" colspan="2" rowspan="2" bgcolor="#f7fcff">Total Potongan</th>
											  <th width="1%" colspan="2" rowspan="2" bgcolor="#f7fcff">Total Pengeluaran</th>
											  <th width="1%" colspan="2" rowspan="2" bgcolor="#f7fcff">Total Terbayar</th>
											  <th colspan="4" bgcolor="#f7fcff">Status</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">Dibuat</th>
											  <th width="1%" bgcolor="#f7fcff">Diperiksa</th>
											  <th width="1%" bgcolor="#f7fcff">Disetujui</th>
											  <th width="1%" bgcolor="#f7fcff">Dibayar</th>
							              </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												<td nowrap="nowrap" style="text-align:center">2019</td>
												<td id="kt_table_1" style="text-align:right">Januari</td>
												<td nowrap="nowrap" style="text-align:center">21/01/2023 - 28/01/2023</td>
												
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>5.000.000,-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>500.000,-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>4.500.000-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>4.500.000-</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Muhammad Nasrullah, S.Kom<br>Staff Keuangan<hr>31 Desember 2018 - 14:30 WITA"><i class="fa fa-calculator"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Terbayar<hr>Muhammad Nasrullah, S.Kom<br>Staff Keuangan<hr>31 Desember 2018 - 14:30 WITA"><i class="fa fa-money-bill-alt"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penerima-gaji-pegawai-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Penerima Penghasilan</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Slip Gaji</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Standing Instruction Bank</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="payroll-edit.php" class="kt-nav__link">
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
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1" style="text-align:right">2</td>
												<td nowrap="nowrap" style="text-align:center">2019</td>
												<td id="kt_table_1" style="text-align:right">Januari</td>
												<td nowrap="nowrap" style="text-align:center">14/01/2023 - 21/01/2023</td>
												
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">5.000.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">500.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">4.500.000-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>4.500.000-</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Muhammad Nasrullah, S.Kom<br>Staff Keuangan<hr>31 Desember 2018 - 14:30 WITA"><i class="fa fa-calculator"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Terbayar<hr>Muhammad Nasrullah, S.Kom<br>Staff Keuangan<hr>31 Desember 2018 - 14:30 WITA"><i class="fa fa-money-bill-alt"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penerima-gaji-pegawai-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Penerima Penghasilan</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Slip Gaji</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Standing Instruction Bank</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="payroll-edit.php" class="kt-nav__link">
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
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1" style="text-align:right">3</td>
												<td nowrap="nowrap" style="text-align:center">2019</td>
												<td id="kt_table_1" style="text-align:right">Januari</td>
												<td nowrap="nowrap" style="text-align:center">08/01/2023 - 14/01/2023</td>
												
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">5.000.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">500.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">4.500.000-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>4.500.000-</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Muhammad Nasrullah, S.Kom<br>Staff Keuangan<hr>31 Desember 2018 - 14:30 WITA"><i class="fa fa-calculator"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Terbayar<hr>Muhammad Nasrullah, S.Kom<br>Staff Keuangan<hr>31 Desember 2018 - 14:30 WITA"><i class="fa fa-money-bill-alt"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penerima-gaji-pegawai-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Penerima Penghasilan</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Slip Gaji</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Standing Instruction Bank</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="payroll-edit.php" class="kt-nav__link">
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
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-users"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">4</td>
												<td nowrap="nowrap" style="text-align:center">2019</td>
												<td id="kt_table_1" style="text-align:right">Januari</td>
												<td nowrap="nowrap" style="text-align:center">01/01/2023 - 07/01/2023</td>
												
												<td nowrap="nowrap" style="text-align:center">Pusat</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">5.000.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">500.000,-</td>
												<td width="1%" nowrap style="text-align:center">Rp.</td>
												<td width="3%" nowrap style="text-align:right">4.500.000-</td>
												<td width="1%" style="text-align:center" nowrap>Rp.</td>
												<td width="3%" style="text-align:right" nowrap>4.500.000-</td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Muhammad Nasrullah, S.Kom<br>Staff Keuangan<hr>31 Desember 2018 - 14:30 WITA"><i class="fa fa-calculator"></i></button></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Muhammad Nasrullah, S.Kom<br>SPV Keuangan<hr>31 Desember 2018 - 14:30 WITA">
								<i class="fa flaticon2-check-mark"></i>
							</span></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Muhammad Nasrullah, S.Kom<br>Manager Keuangan<hr>31 Desember 2018 - 14:30 WITA">
								<i class="fa flaticon2-check-mark"></i>
							</span></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-info btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Terbayar<hr>Muhammad Nasrullah, S.Kom<br>Staff Keuangan<hr>31 Desember 2018 - 14:30 WITA"><i class="fa fa-money-bill-alt"></i></button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penerima-gaji-pegawai-harian.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-receipt"></i>
																				<span class="kt-nav__link-text">Lihat Penerima Penghasilan</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Print Slip Gaji</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="print-slip-gaji.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-print"></i>
																				<span class="kt-nav__link-text">Standing Instruction Bank</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="payroll-edit.php" class="kt-nav__link">
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
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
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
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
