<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->

<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-list-1"></i>
				</span>
				&nbsp;
				&nbsp;
					Data Postingan Perencanaan Anggaran
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
		
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					
			
<a href="posting-anggaran-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-calculator"></i>Posting Anggaran</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
				</div>
	</div>
</div>

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
																				 <label class="">ID Perencanaan:</label>
																				 <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
																			 </div>
																				
								                        <div class="col-lg-1">
																					<label class="">Tahun Anggaran:</label>
 																				  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">2024</option>
                                      <option value="2">2023</option>
                                      <option value="3">2022</option>
                                      <option value="4">2021</option>
                                      <option value="5">2020</option>
                                      <option value="12" >2019</option>
                                  </select>
																			 </div>
																			 <div class="col-lg-1">
																					<label class="">Tipe Anggaran:</label>
 																				  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pokok</option>
                                      <option value="2">Perubahan</option>
                                     
                                  </select>
																			 </div>
																			 <div class="col-lg-2">
																					<label class="">Department:</label>
 																				  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>
																			 </div>
																			 <div class="col-lg-1">
																					<label class="">Kantor:</label>
 																				  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
																			 </div>
																			 
														<div class="col-lg-2">
								                          <label>Diposting Oleh:</label>
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
                                <label class="">Tanggal Posting :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-1">
																					<label class="">Status:</label>
 																				  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Final</option>
                                      <option value="2">Draft</option>
                                     
                                  </select>
																			 </div>
								                      </div>
								                      </div>
																			<div class="kt-portlet__foot text-center">
																				<div class="kt-form__actions">
																					<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																					<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																				</div>
																			</div>
																		</form>
																	</div>
																	<!--begin:: Widgets/Stats-->
			<div class="kt-portlet">
				<div class="kt-portlet__body  kt-portlet__body--fit">
					<div class="row row-no-padding row-col-separator-lg">
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Total
										</h4>
										<span class="kt-widget24__desc">
											Postingan Anggaran
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-brand">
										8
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Anggaran Pokok
										</h4>
										<span class="kt-widget24__desc">
											Total Postingan Anggaran Pokok
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-success">
										4
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Anggaran Perubahan
										</h4>
										<span class="kt-widget24__desc">
											Total Postingan Anggaran Perubahan
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-danger">
										4
									</span>
								</div>

							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							
						</div>
					</div>
				</div>
			</div>
			<!--end:: Widgets/Stats-->

																	<div class="kt-portlet kt-portlet--mobile ">
																		<div class="kt-portlet__body">
																			<!--begin: Datatable -->
																			<table class="table table-bordered table-hover table-resizable">
																				<thead>
																					<tr>
																					  <th width="1%" rowspan="2" bgcolor="#f7fcff" class="nomor">#</th>
																					  <th width="7%" rowspan="2" bgcolor="#f7fcff" class="tahun-anggaran">ID</th>
																					  <th width="5%" rowspan="2" bgcolor="#f7fcff" class="tahun-anggaran">Tahun<br />Anggaran</th>
																					  <th width="7%" rowspan="2" bgcolor="#f7fcff" class="nomor">Tipe<br>Anggaran</th>
																					  <th width="10%" rowspan="2" bgcolor="#f7fcff" class="nomor">Department</th>
																					  <th width="4%" rowspan="2" bgcolor="#f7fcff" class="nomor">Kantor</th>
																					  <th colspan="2" bgcolor="#f7fcff" class="nomor">Posting</th>
																					  <th colspan="2" bgcolor="#f7fcff" class="nomor">Perubahan</th>
																					  <th rowspan="2" bgcolor="#f7fcff" class="Keterangan">Keterangan</th>
																					  <th width="5%" rowspan="2" bgcolor="#f7fcff" class="Total">Status<br />Anggaran</th>
																						<th width="12%" rowspan="2" bgcolor="#f7fcff" class="Total">Total</th>
																						<th colspan="3" bgcolor="#f7fcff">Verifikasi</th>
																						<th rowspan="2" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																					<tr>
																					  <th width="3%" bgcolor="#f7fcff" class="nomor">Oleh</th>
																					  <th width="8%" bgcolor="#f7fcff" class="nomor">Tanggal</th>
																					  <th width="3%" bgcolor="#f7fcff" class="nomor">Oleh</th>
																					  <th width="8%" bgcolor="#f7fcff" class="nomor">Tanggal</th>
																					  <th width="3%" bgcolor="#f7fcff">Kabag<br>Terkait</th>
																					  <th width="3%" bgcolor="#f7fcff">Direksi<br>Terkait</th>
																					  <th width="3%" bgcolor="#f7fcff">Direktur<br>Utama</th>
																				  </tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td class="nomor">1</td>
																					  <td class="nomor">PMR.UM.1.2023</td>
																					  <td class="nomor" style="text-align:center">2023</td>
																					  <td class="nomor" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Pokok</span></td>
																					  <td class="nomor">Umum</td>
																					  <td class="nomor">Pusat</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																					  <td class="nomor" style="text-align:center">11 November 2023<br>21:24 WITA</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																					  <td style="text-align:center" class="nomor">11 November 2023<br>21:24 WITA</td>
																					  <td class="Keterangan">Pencatatan Beban Beban Pokok Penjualan</td>
																					  <td class="Total" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Final</span></td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td width="1%" nowrap style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="0%" nowrap style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="1%" nowrap style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="post-anggaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="post-anggaran-edit.php" class="kt-nav__link">
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
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				  <tr>
																					  <td class="nomor">2</td>
																					  <td class="nomor">PMR.OP.1.2023</td>
																					  <td class="nomor" style="text-align:center">2003</td>
																					  <td class="nomor" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Pokok</span></td>
																					  <td class="nomor">Operasional</td>
																					  <td class="nomor">Pusat</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																					  <td class="nomor" style="text-align:center">11 November 2023<br>21:24 WITA</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																					  <td style="text-align:center" class="nomor">11 November 2023<br>21:24 WITA</td>
																					  <td class="Keterangan">Pencatatan Beban Beban Pokok Penjualan</td>
																					  <td class="Total" style="text-align:center"><span class="kt-badge kt-badge--warning kt-badge--md kt-badge--inline">Draft</span></td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="post-anggaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="post-anggaran-edit.php" class="kt-nav__link">
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
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				  <tr>
																					  <td class="nomor">3</td>
																					  <td class="nomor">PMR.KU.1.2023</td>
																					  <td class="nomor" style="text-align:center">2003</td>
																					  <td class="nomor" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Pokok</span></td>
																					  <td class="nomor">Keuangan</td>
																					  <td class="nomor">Pusat</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																					  <td class="nomor" style="text-align:center">11 November 2023<br>21:24 WITA</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																					  <td style="text-align:center" class="nomor">11 November 2023<br>21:24 WITA</td>
																					  <td class="Keterangan">Pencatatan Beban Beban Pokok Penjualan</td>
																					  <td class="Total" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Final</span></td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="post-anggaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="post-anggaran-edit.php" class="kt-nav__link">
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
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				  <tr>
																					  <td class="nomor">4</td>
																					  <td class="nomor">PMR.PU.1.2023</td>
																					  <td class="nomor" style="text-align:center">2003</td>
																					  <td class="nomor" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Pokok</span></td>
																					  <td class="nomor">Pengembangan Usaha</td>
																					  <td class="nomor">Pusat</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																					  <td class="nomor" style="text-align:center">11 November 2023<br>21:24 WITA</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																					  <td style="text-align:center" class="nomor">11 November 2023<br>21:24 WITA</td>
																					  <td class="Keterangan">Pencatatan Beban Beban Pokok Penjualan</td>
																					  <td class="Total" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Final</span></td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="post-anggaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="post-anggaran-edit.php" class="kt-nav__link">
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
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				  <tr>
																					  <td class="nomor">5</td>
																					  <td class="nomor">PMR.UM.2.2023</td>
																					  <td class="nomor" style="text-align:center">2003</td>
																					  <td class="nomor" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Perubahan</span></td>
																					  <td class="nomor">Umum</td>
																					  <td class="nomor">Pusat</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																					  <td class="nomor" style="text-align:center">11 November 2023<br>21:24 WITA</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																					  <td style="text-align:center" class="nomor">11 November 2023<br>21:24 WITA</td>
																					  <td class="Keterangan">Pencatatan Beban Beban Pokok Penjualan</td>
																					  <td class="Total" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Final</span></td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td width="1%" nowrap style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="0%" nowrap style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="1%" nowrap style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="post-anggaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="post-anggaran-edit.php" class="kt-nav__link">
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
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				  <tr>
																					  <td class="nomor">6</td>
																					  <td class="nomor">PMR.OP.2.2023</td>
																					  <td class="nomor" style="text-align:center">2003</td>
																					  <td class="nomor" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Perubahan</span></td>
																					  <td class="nomor">Operasional</td>
																					  <td class="nomor">Pusat</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																					  <td class="nomor" style="text-align:center">11 November 2023<br>21:24 WITA</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																					  <td style="text-align:center" class="nomor">11 November 2023<br>21:24 WITA</td>
																					  <td class="Keterangan">Pencatatan Beban Beban Pokok Penjualan</td>
																					  <td class="Total" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Final</span></td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="post-anggaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="post-anggaran-edit.php" class="kt-nav__link">
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
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				  <tr>
																					  <td class="nomor">7</td>
																					  <td class="nomor">PMR.KU.2.2023</td>
																					  <td class="nomor" style="text-align:center">2003</td>
																					  <td class="nomor" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Perubahan</span></td>
																					  <td class="nomor">Keuangan</td>
																					  <td class="nomor">Pusat</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																					  <td class="nomor" style="text-align:center">11 November 2023<br>21:24 WITA</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																					  <td style="text-align:center" class="nomor">11 November 2023<br>21:24 WITA</td>
																					  <td class="Keterangan">Pencatatan Beban Beban Pokok Penjualan</td>
																					  <td class="Total" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Final</span></td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="post-anggaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="post-anggaran-edit.php" class="kt-nav__link">
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
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																				  <tr>
																					  <td class="nomor">8</td>
																					  <td class="nomor">PMR.PU.2.2023</td>
																					  <td class="nomor" style="text-align:center">2003</td>
																					  <td class="nomor" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Perubahan</span></td>
																					  <td class="nomor">Pengembangan Usaha</td>
																					  <td class="nomor">Pusat</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																					  <td class="nomor" style="text-align:center">11 November 2023<br>21:24 WITA</td>
																					  <td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_11.jpg" alt="image">
													</a></td>
																					  <td style="text-align:center" class="nomor">11 November 2023<br>21:24 WITA</td>
																					  <td class="Keterangan">Pencatatan Beban Beban Pokok Penjualan</td>
																					  <td class="Total" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Final</span></td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																					  <td width="3%" style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="post-anggaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="post-anggaran-edit.php" class="kt-nav__link">
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
										  </div>
										  </div>
							</div>

<?php require '../layouts/footer.php' ?>
<script>
$("input:checkbox:not(:checked)").each(function() {
    var column = "table ." + $(this).attr("name");
    $(column).hide();
});

$("input:checkbox").click(function(){
    var column = "table ." + $(this).attr("name");
    $(column).toggle();
});

$(function() {
	var startX,
		 startWidth,
		 $handle,
		 $table,
		 pressed = false;

	$(document).on({
		mousemove: function(event) {
			if (pressed) {
				$handle.width(startWidth + (event.pageX - startX));
			}
		},
		mouseup: function() {
			if (pressed) {
				$table.removeClass('resizing');
				pressed = false;
			}
		}
	}).on('mousedown', '.table-resizable th', function(event) {
		$handle = $(this);
		pressed = true;
		startX = event.pageX;
		startWidth = $handle.width();

		$table = $handle.closest('.table-resizable').addClass('resizing');
	}).on('dblclick', '.table-resizable thead', function() {
		// Reset column sizes on double click
		$(this).find('th[style]').css('width', '');
	});
});
</script>
<?php require '../layouts/foot.php' ?>
