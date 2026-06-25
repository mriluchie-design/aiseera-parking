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
											Setup Cuti Pegawai
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="pegawai-resign.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>
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
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

								<!--begin: Form Wizard Nav -->
								<div class="kt-wizard-v4__nav">
									<div class="kt-wizard-v4__nav-items">

										<!--doc: Replace A tag with SPAN tag to disable the step link click -->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-settings-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Setup
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Cuti Pegawai
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-user-settings"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Setup 
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Saldo Pegawai
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
												</div>
											</div>
										</div>
										
										
									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<!--begin: Form Wizard Step 1-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Setup Cuti</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-2">
                          <label>Kebijakan Cuti :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Standar Perusahaan</option>
                              <option value="2">Khusus</option>
                              

                          </select>
                        </div>
<div class="col-lg-2">
                          <label>Jenis Cuti :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Cuti Tahunan</option>
                              <option value="2">Cuti Alasan Penting</option>
                              <option value="3">Cuti Bersalin</option>
                              <option value="3">Cuti Besar</option>
                              <option value="3">Cuti Khusus</option>
                              <option value="3">Cuti Sakit</option>
                              <option value="3">Cuti Menikah</option>

                          </select>
                        </div>

                        <div class="col-lg-2">
                          <label class="">Digunakan Sejak :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tanggal Bergabung Staff</option>
                              <option value="HI">1 Bulan Bergabung</option>
                              <option value="CA">3 Bulan Bergabung</option>
                              <option value="NV">6 Bulan Bergabung</option>
                              <option value="NV">1 Tahun Bergabung</option>
                            </select>
                        </div>
						<div class="col-lg-6">
                                <div class="form-group">
      													<label>Saldo akan diperbaharui setiap</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-label-brand btn-square btn-sm col-lg-3" id="hide1">1 Januari</button>&nbsp;
      													<button type="button" class="btn btn-label-brand btn-square btn-sm col-lg-4" id="hide2">Tanggal Bergabung Pegawai</button>&nbsp;
                                <button type="button" class="btn btn-label-brand btn-square btn-sm col-lg-4" id="show">Tanggal Tertentu</button>&nbsp;
      												</div>
                              	</div>
      												</div>
						
						
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
      												
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-2">
                                  <div class="form-group">
    													<label>Tanggal</label>
                              <div class="input-group date">
    													<input type="text" class="form-control" readonly placeholder="" id="kt_datepicker_2" />
    													<div class="input-group-append">
    														<span class="input-group-text">
    															<i class="la la-calendar-check-o"></i>
    														</span>
    													</div>
                            	</div>
                            </div>
                          </div>
						  
        										</div>

                        
						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label>Berlaku Untuk :</label>
                     
                      <select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple">
															<optgroup label="Dewan Pengawas">
																<option value="AK">Dewan Pengawas</option>
															</optgroup>
															<optgroup label="Direksi">
																<option value="AK" selected>Direksi</option>
															</optgroup>
															<optgroup label="Umum">
																<option value="AK" selected>Umum dan Kepegawaian</option>
																<option value="AK" selected>Hukum dan Humas</option>
															</optgroup>
															<optgroup label="Keuangan dan Asset">
																<option value="AK" selected>Keuangan</option>
																<option value="AK" selected>Asset</option>
															</optgroup>
															<optgroup label="Operasional">
																<option value="AK" selected>Pengelolaan</option>
																<option value="AK" selected>Produksi</option>
															</optgroup>
															<optgroup label="Pengembangan Usaha & Kerja Sama">
																<option value="AK" selected>Pengembangan</option>
																<option value="AK" selected>Kerjasama</option>
															</optgroup>
															<optgroup label="Keseluruhan">
																<option value="SD">Keseluruhan</option>
																
															</optgroup>
															
														</select>
                    
                        </div>
						
						
                      </div>

                      </div>
					  
                    </div>
							<!--end:: Portlet-->


										</div>
										
										



								</div>
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="1%" bgcolor="#f7fcff">Foto</th>
												<th width="10%" bgcolor="#f7fcff">Nama Pegawai</th>
												<th width="4%" bgcolor="#f7fcff">NIP</th>
												
												<th width="14%" bgcolor="#f7fcff">Jabatan</th>
												<th width="2%" bgcolor="#f7fcff">Status Pegawai</th>
												<th width="2%" bgcolor="#f7fcff">Kantor</th>
												<th width="2%" bgcolor="#f7fcff">Budget<br>Standar</th>
												<th width="2%" bgcolor="#f7fcff">Budget<br>Saat ini</th>
												<th width="1%" bgcolor="#f7fcff">Terpakai</th>
												<th width="1%" bgcolor="#f7fcff">Saldo</th>
											</tr>
										</thead>
										<tbody>
											<tr>
											  <td colspan="11" bgcolor="#fdfdec">Direksi</td>
										  </tr>
											<tr>
												<td align="right">1</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par" data-html="true">
														<img src="../assets/media/users/100_15.jpg" alt="image">
													</a></td>
												<td style="text-align:left">Muhammad Nasrullah, S.Kom</td>
												<td style="text-align:center">000000000001</td>
												
												<td style="text-align:left">Direktur Utama</td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">0</td>
												<td style="text-align:center">12</td>
										  </tr>
											<tr>
												<td align="right">2</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title=""  data-html="true">
														<img src="../assets/media/users/100_9.jpg" alt="image">
													</a></td>
												<td style="text-align:left">Oklan Zulkifli, SE</td>
												<td style="text-align:center">000000000002</td>
												
												<td style="text-align:left">Direktur Umum</td>
												<td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Kontrak</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">0</td>
												<td style="text-align:center">12</td>
										  </tr>
										  <tr>
												<td align="right">3</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title=""  data-html="true">
														<img src="../assets/media/users/100_2.jpg" alt="image">
													</a></td>
												<td style="text-align:left">Nursiah, S.Kom</td>
												<td style="text-align:center">000000000003</td>
												
												<td style="text-align:left">Direktur Keuangan dan Asset</td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Honor</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">0</td>
												<td style="text-align:center">12</td>
										  </tr>
										  <tr>
												<td align="right">4</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title=""  data-html="true">
														<img src="../assets/media/users/300_21.jpg" alt="image">
													</a></td>
												<td style="text-align:left">Muhammad Ramadhan Lerrick, ST</td>
												<td style="text-align:center">000000000004</td>
												
												<td style="text-align:left">Direktur Operasional</td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</button></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">0</td>
												<td style="text-align:center">12</td>
										  </tr>
										  <tr>
												<td align="right">5</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title=""  data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:left">Sri Murti Ningrum, SE</td>
												<td style="text-align:center">000000000005</td>
												
												<td style="text-align:left">Direktur Pengembangan Usaha dan Kerjasama</td>
												<td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">Kontrak</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-warning btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang B">Cabang</button></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">0</td>
												<td style="text-align:center">12</td>
										  </tr>
										  <tr>
										    <td colspan="11" bgcolor="#fdfdec">Umum dan Kepegawaian</td>
									      </tr>
										  <tr>
												<td align="right">6</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title=""  data-html="true">
														<img src="../assets/media/users/100_8.jpg" alt="image">
													</a></td>
												<td style="text-align:left">Deddy Rafsanjani, S.Sos</td>
												<td style="text-align:center">000000000006</td>
												
												<td style="text-align:left">HR Staff</td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
											<tr>
												<td align="right">7</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title=""  data-html="true">
														<img src="../assets/media/users/100_6.jpg" alt="image">
													</a></td>
												<td style="text-align:left">Akmal Baharuddin</td>
												<td style="text-align:center">000000000007</td>
												
												<td style="text-align:left">HR Staff</td>
												<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">Tetap</button></td>
												<td style="text-align:center"><button type="button" class="btn btn-brand btn-sm">Pusat</button></td>
												<td style="text-align:center">12</td>
												<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
												<td style="text-align:center">6</td>
												<td style="text-align:center">6</td>
										  </tr>
										  
										  
										</tbody>
									</table>
									<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                        

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
														
														<li class="kt-pagination__link--active">
															<a href="#">1</a>
														</li>
														<li >
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
														</li>
														<li>
															<a href="#">4</a>
														</li>
														<li>
															<a href="#">5</a>
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
													</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="5%" bgcolor="#f7fcff">ID Kasbon</th>
												<th width="7%" bgcolor="#f7fcff">Waktu<br>Pengajuan</th>
												<th width="6%" colspan="2" bgcolor="#f7fcff">Nilai Pinjaman</th>
												<th width="1%" bgcolor="#f7fcff">Bunga</th>
												<th width="3%" bgcolor="#f7fcff">Tenor</th>
												<th width="4%" colspan="2" bgcolor="#f7fcff">Angsuran</th>
												<th width="6%" colspan="2" bgcolor="#f7fcff">Sisa Pinjaman</th>
												<th width="6%" bgcolor="#f7fcff">Progress Angsuran</th>
												<th width="1%" bgcolor="#f7fcff">Status Permohonan</th>
												<th width="2%" bgcolor="#f7fcff">Aksi</th>
											</tr>
										</thead>
										<tbody>


										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">2/IM-KASBON/III/2019</td>
												<td style="text-align:center">12 Oktober 2019 - 09:00 WITA</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">1.000.000,-</td>
												<td style="text-align:right">0 %</td>
												<td style="text-align:right">10 Bulan</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">100.000,-</td>
												<td style="text-align:left; border-right-color:#fff">Rp.</td>
												<td style="text-align:right">200.000,-</td>
												<td style="text-align:center" nowrap><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">8 dari 10</div>
</div></td>
											  <td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
													    <i class="fa flaticon2-check-mark"></i>
												    </span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_angsuran">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Angsuran</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_pelunasan">
																				<i class="kt-nav__link-icon fa fa-money-bill-wave"></i>
																				<span class="kt-nav__link-text">Ajukan Pelunasan</span>
																			</div>
																		</li>

																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
													</div>
													</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
												<th width="1%" bgcolor="#f7fcff">#</th>
												<th width="3%" bgcolor="#f7fcff">ID Asset</th>
                                                <th width="2%" bgcolor="#f7fcff">QR Code</th>
                                                <th width="10%" bgcolor="#f7fcff">Nama Barang</th>
                                                <th width="7%" bgcolor="#f7fcff">Tipe Produk</th>
                                                <th width="7%" bgcolor="#f7fcff">Kategori Produk</th>
                                                <th width="7%" bgcolor="#f7fcff">Diserahkan Oleh</th>
												<th width="7%" bgcolor="#f7fcff">Waktu<br>Penyerahan</th>
												<th width="1%" bgcolor="#f7fcff">Status Penyerahan</th>
												<th width="2%" bgcolor="#f7fcff">Aksi</th>
											</tr>
										</thead>
										<tbody>


										  <tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center;">2/IM-KASBON/III/2019</td>
                                                <td style="text-align:center;"><i class="fa fa-qrcode"></i></td>
                                                <td style="text-align:left;">Laptop Asus Core i5</td>
                                                <td style="text-align:center">Elektronik</td>
                                                <td style="text-align:center">Laptop</td>
                                                <td style="text-align:center">&nbsp;</td>
												<td style="text-align:left">12 Oktober 2019 - 09:00 WITA</td>
											  <td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="Disetujui" data-html="true">
													    <i class="fa flaticon2-check-mark"></i>
												    </span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_asset">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</div>
																		</li>
																		<li class="kt-nav__item">
																			<div class="kt-nav__link" data-toggle="modal" data-target="#modal_serah_terima_asset">
																				<i class="kt-nav__link-icon fa fa-luggage-cart"></i>
																				<span class="kt-nav__link-text">Serah Terima Barang</span>
																			</div>
																		</li>

																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
													</div>
													</div>
													</div>

													<!--end: Form Wizard Step 4-->

													<!--begin: Form Actions -->
													<div class="kt-form__actions">
														<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
															Previous
														</button>
														<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
															Submit
														</button>
														<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
															Next Step
														</button>
													</div>

													<!--end: Form Actions -->
												</form>

												<!--end: Form Wizard Form-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


                    </div>
					<!--begin::Modal 1-->
									<div class="modal fade" id="modal_angsuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">DATA ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" >NO</td>
    <td width="12%" bgcolor="#f7fcff">No. Kwitansi</td>
    <td width="8%" bgcolor="#f7fcff">Tgl Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Nominal Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Sisa Kasbon</td>
    <td width="3%" bgcolor="#f7fcff">Kasir</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center">8/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Agustus 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">200.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center">7/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juli 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">300.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center">6/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juni 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">400.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center">5/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Mei 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">500.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">4/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 April 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">600.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">3/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Maret 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">700.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">2/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Februari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">800.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">1/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Januari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">900.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>

</table>

												</div>
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
														<li class="kt-pagination__link--active">
															<a href="#">1</a>
														</li>
														<li>
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
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
												<div class="tab-pane" id="kt_tabs_7_2" role="tabpanel">
													It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
												</div>
												<div class="tab-pane" id="kt_tabs_7_3" role="tabpanel">
													<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">

										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>No. Tanda Terima Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-6">
														<label>Waktu Penyerahan Berkas :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pengirim Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Penerima Berkas :</label>
														<input type="text" class="form-control form-control-sm">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" >

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

									<!--end::Portlet-->
												</div>
											</div>
											</div>

									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="modal_pelunasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list-1"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">FORM BAYAR ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-4">
														<label>ID Kasbon :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-4">
														<label>Waktu Pengajuan :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Nilai Pinjaman :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                              1.000.000,-">
												</div>
													</div>

												<div class="col-lg-4">
														<label>Nilai Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                                100.000,-">
												</div>
													</div>
												<div class="col-lg-4">
														<label class="kt-font-danger">Sisa Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" disabled="disabled" placeholder="Rp.                                                200.000,-">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Bayar Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" placeholder="Rp.                                                200.000,-">
												</div>
													</div>
												<div class="col-lg-8">
														<label>Upload Bukti Pembayaran :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>

												</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm">Kirim</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 2-->

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
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script>
$("#show").click(function(){
    $(".tampil").show();
  });
  $("#hide1").click(function(){
      $(".tampil").hide();
    });
    $("#hide2").click(function(){
        $(".tampil").hide();
      });
</script>
<?php require '../layouts/foot.php' ?>
