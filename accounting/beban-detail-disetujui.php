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
				DETAIL
			</h3>

		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											PENCATATAN BEBAN</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="#" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
					<i class="flaticon-reply"></i> Kembali</button>
					<script>
						function goBack() {
							window.history.back();
						}
					</script>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
		


			</div>
<div class="btn-group">
				<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>
				
				
			</div>
<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-label-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Tools
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">

						<!--begin::Nav-->
						<ul class="kt-nav">

							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#tambah_favorit">
									<i class="kt-nav__link-icon fa fa-bookmark"></i>
									<span class="kt-nav__link-text">Tambah Ke Favorit</span>
								</a>
							</li>
<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#log_aktifitas">
									<i class="kt-nav__link-icon fa fa-history"></i>
									<span class="kt-nav__link-text">Log Aktifitas</span>
								</a>
							</li>
<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#rincian_jurnal">
									<i class="kt-nav__link-icon fa fa-clipboard-list"></i>
									<span class="kt-nav__link-text">Rincian Jurnal</span>
								</a>
							</li>
							
						</ul>
						<!--end::Nav-->
					</div>
								</div>
<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-label-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Proses
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">

						<!--begin::Nav-->
						<ul class="kt-nav">

							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#pembayaran">
									<i class="kt-nav__link-icon fa fa-money-bill"></i>
									<span class="kt-nav__link-text">Pembayaran</span>
								</a>
							</li>
							
						</ul>
						<!--end::Nav-->
					</div>
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
	<div class="kt-portlet kt-portlet--height-full">
		<div class="kt-portlet__body">
		<div class="row">
				<div class="col-xl-8">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Beban</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									
									<div class="col-lg-3">
										<label>No. Beban : <code>*</code></label>
										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="EXP.062026.01.0005">
									</div>
									<div class="col-lg-5">
										<label>Hutang Beban : <code>*</code></label>
										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="210201 - PPN Keluaran ">
										
									</div>
									<div class="col-lg-4">
										<label class="">Tanggal : <code>*</code></label>
										<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="19 September 2026">
									</div>
									
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-8">
										<label class="">Catatan : <code>*</code></label>
										<input type="text" class="form-control form-control-sm" placeholder="" disabled>
									</div>
									<div class="col-lg-4">
										<label class="">Jatuh Tempo : <code>*</code></label>
										<div class="input-group date">
											<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="19 September 2026">
									</div>
									</div>
								</div>
							</div>

						</div>
						
					</div>
				</div>
				
			</div>

				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Beban</div><br><br>
					<div class="kt-portlet__body">
						<div class="kt-portlet__content">
							
							<table class="table table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="1%" bgcolor="#f7fcff">#</th>
																					  <th width="4%" bgcolor="#f7fcff">Akun</th>
																						<th width="12%" bgcolor="#f7fcff">Nama Akun</th>
																						<th width="15%" bgcolor="#f7fcff">Catatan</th>
																						<th width="3%" bgcolor="#f7fcff">Lampiran Dokumen</th>
																						<th width="7%" bgcolor="#f7fcff">Nilai</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td style="text-align:right">1</td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="710003" /></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="Penjualan Persediaan / Perlengkapan" /></td>
																					  <td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="" disabled="disabled" /></td>
																					  <td style="text-align:center"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa fa-file-download"></i>Download</button></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																				  </tr>
																					<tr>
																					  <td style="text-align:right">2</td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="710005" /></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="Pendapatan Diluar Usaha Lainnya" /></td>
																					  <td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder=""  disabled="disabled" /></td>
																					  <td style="text-align:center"><button type="button" class="btn btn-outline-brand btn-sm"><i class="fa fa-file-download"></i>Download</button></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																				  </tr>
																				  
																					
																</tbody>
																
																<tfoot style="border-top: 2px solid #5867dd">
																	<tr>
																		<th colspan="5" bgcolor="#f7fcff" class="text-right"><strong>Total</strong></th>
																		<th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																		  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
																		  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																		  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
																	    </div></th>
																	</tr>
																</tfoot>
																			</table>
						</div>
					</div>
				</div>
			
				
				
			
			

				
					
<div class="modal fade" id="tambah_favorit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH FAVORIT</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">Nama Favorit :</label>
														<input type="text" class="form-control form-control-sm" placeholder="">
													</div>
												



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
												
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Hak Akses Favorit :</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-6" id="hide1">Keseluruhan</button>&nbsp;
      													
                                <button type="button" class="btn btn-secondary btn-square btn-sm col-lg-5" id="show">Sebagian Cabang</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                  <div class="form-group row">
    													<div class="col-lg-12">
														<label class="kt-font-danger">Cabang :</label>
														 <select class="form-control kt-selectpicker" multiple="multiple">
                                      <option value="1" selected="">Makassar</option>
                                      <option value="2">Pare-Pare</option>
                                      <option value="2">Balikpapan</option>
                                      <option value="2">Samarinda</option>
                                      <option value="2">Tarakan</option>
                                      <option value="2">Nunukan</option>
                                      <option value="2">Manado</option>
                                      <option value="2">Bitung</option>
                                      <option value="2">Ambon - Yos Sudarso</option>
                                      <option value="2">Ambon - Slamet Riyadi</option>
                                      <option value="2">Ternate</option>
                                      <option value="2">Sorong</option>
                                  </select>
													</div>
													
												
                          </div>
						



											</div>
											</div>


												</div>
												</div>
												
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">Hanya Pegawai  :</label>
														<select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK">Muhammad Nasrullah, S.Kom</option>
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
																				
					 																<option value="0" selected></option>
					 															

					 														</select>
													</div>
												
										
									</div>
									


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
<div class="modal fade" id="log_aktifitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">LOG</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
  <thead>
<tr style="text-align:center">
     <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
     <th width="5%" rowspan="2" bgcolor="#f7fcff">Pegawai</th>
     <th width="3%" rowspan="2" bgcolor="#f7fcff">Waktu</th>
  </tr>
</thead>
  <tr>
    <td><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Nursiah, S.Kom&lt;hr&gt;Staff Accounting" data-html="true"><img src="../assets/media/users/100_7.jpg" alt="image" /></a></td>
    <td>Muhammad Nasrullah, S.Kom</td>
    <td style="text-align:center">16 November 2025<br />
    08:38:00 WITA</span></td>
  </tr>
<tr>
    <td><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Nursiah, S.Kom&lt;hr&gt;Staff Accounting" data-html="true"><img src="../assets/media/users/100_7.jpg" alt="image" /></a></td>
    <td>Muhammad Nasrullah, S.Kom</td>
    <td style="text-align:center">16 November 2025<br />
    08:38:00 WITA</span></td>
  </tr>
<tr>
    <td><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Nursiah, S.Kom&lt;hr&gt;Staff Accounting" data-html="true"><img src="../assets/media/users/100_7.jpg" alt="image" /></a></td>
    <td>Muhammad Nasrullah, S.Kom</td>
    <td style="text-align:center">16 November 2025<br />
    08:38:00 WITA</span></td>
  </tr>
</table>
<!-- begin:: pageline -->
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="kt-pagination  kt-pagination--danger">
						<select class="form-control kt-font-danger" style="width: 60px">
								<option value="10">5</option>
								<option value="20">10</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select>
							
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
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
    </div>
<div class="modal fade" id="rincian_jurnal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">RINCIAN JURNAL</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<table class="table-checkable" cellpadding="3" align="center" style="line-height:1.5; font-family: Tahoma; font-size: 12px;">
   <tr>
    <td width="10%" style="border-bottom:1px solid #ccc;"><b>Tanggal</b></td>
    <td width="1%" style="text-align: center; border-bottom:1px solid #ccc;">:</td>
    <td width="27%"  style="border-bottom:1px solid #ccc;">17 September 2026</td>
    <td width="3%" rowspan="2" >&nbsp;</td>
    <td style="text-align: left; border-bottom:1px solid #ccc;"><b>Nomor</b></td>
    <td width="1%" style="text-align: center; border-bottom:1px solid #ccc;">:</td>
    <td style="text-align: left; border-bottom:1px solid #ccc;">JV.2026.06.00002 &nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-default btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Lihat Data"><i class="fa fa-eye"></i></a></td>
  </tr>
  <tr>
    <td width="2%" style="border-bottom:1px solid #ccc;"><b>Keterangan</b></td>
   <td width="1%" style="text-align: center; border-bottom:1px solid #ccc;">:</td>
    <td width="47%" style="border-bottom:1px solid #ccc;">Pencatatan Beban Beban Pokok Penjualan</td>
    
  </tr>
</table>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

<table class="table table-responsive table-striped- table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="10%" colspan="2" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Akun Perkiraan</th>
											  <th width="10%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Debit</th>
											  <th width="10%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Kredit</th>
									      </tr>
										</thead>
										<tbody>
											<tr>
												<td colspan="2" nowrap style="text-align:left; border-bottom:1px solid #ccc;"><b>5101</b> - Beban Pokok Penjualan<br><i>Bensin</i></td>
												<td nowrap="nowrap" style="text-align:center; border-bottom:1px solid #ccc;"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
											    </div></td>
												<td nowrap="nowrap" style="text-align:center; border-bottom:1px solid #ccc;">&nbsp;</td>
									      </tr>
										  <tr>
												<td width="1%" nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td width="7%" class="text-left"><b>210202</b> - PPh 23 Pembelian<br><i>Pencatatan Beban Beban Pokok Penjualan<i></td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
											    </div></td>
										  </tr>
</tbody>
									</table>
												</div>
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												

												
												
												
												
													
													

												</div>
												
											
									




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
    </div>
<div class="modal fade" id="pembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-money-bill"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">PEMBAYARAN</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<div class="form-group row">
<div class="col-lg-6">
														<label class="kt-font-brand">Kas / Bank :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari/Pilih Akun Perkiraan...</option>
								
								<optgroup label="Kas / Bank" class="a">
									<div class="form-group row">
<option data-subtext="110101">Kas Kecil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span data-subtext="Rp. 500.000,-">Rp. 500.000,-</span></option>
<option data-subtext="110102">Bank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span data-subtext="Rp. 500.000,-">Rp. 500.000,-</span></option>
<option data-subtext="110201">Deposito Bank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span data-subtext="Rp. 500.000,-">Rp. 500.000,-</span></option>
<option data-subtext="110202">BCA - 0255804010&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span data-subtext="Rp. 500.000,-">Rp. 500.000,-</span></option>

								</optgroup>
								
							</select>
													</div>
<div class="col-lg-6">
														<label class="kt-font-brand">No. Bukti :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option>Bensin</option>
                                                                           
                                  </select>
													</div>
												



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Penerima : <code>*</code></label>
										<div class="row ml-auto">
											<select class="form-control form-control-sm col-lg-5 pemasok">
												<option value="0">Bukan Pegawai</option>
												<option value="1">Pegawai</option>
											</select>
											<div class="kt-input-icon kt-input-icon--right col-lg-6 ml-3">
												<input type="text" class="form-control form-control-sm pem" placeholder="Cari/Pilih..." id="generalSearch">
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
										
									
								</div>
<div class="col-lg-6">
                                <div class="form-group">
      													<label>&nbsp;</label>
                               <input type="text" class="form-control form-control-sm" placeholder="Isikan Penerima">
                              	</div>
      												</div>
								</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
      					<div class="col-lg-6">
														<label class="kt-font-brand">Tanggal :</label>
														<div class="input-group date">
											<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date" id="kt_datepicker_2">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="la la-calendar-check-o"></i>
												</span>
											</div>
										</div>
													</div>							
<div class="col-lg-6">
														<label class="kt-font-brand">No. Cek :</label>
														<input type="text" class="form-control form-control-sm" placeholder="">
													</div>
									
									
      												
                              
											</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">Catatan :</label>
														<input type="text" class="form-control form-control-sm" placeholder="">
													</div>

					



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
												
      												<table class="table table-responsive table-striped- table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">#</th>
											  <th width="1%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Akun</th>
											  <th width="10%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Nama Akun</th>
											  <th width="12%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Nilai</th>
											  <th width="1%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Aksi</th>
									      </tr>
										</thead>
										<tbody>
											<tr>
											  <td style="text-align:center" nowrap="nowrap"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">
															    <span></span> </label></td>
												<td nowrap style="text-align:left;">600003</td>
												<td nowrap style="text-align:left;">Beban Bensin, Parkir, Tol Kendaraan</td>
												<td nowrap="nowrap" style="text-align:center;"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
											    </div></td>
												<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
									      </tr>
<tr>
											  <td style="text-align:center" nowrap="nowrap"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">
															    <span></span> </label></td>
												<td nowrap style="text-align:left;">600003</td>
												<td nowrap style="text-align:left;">Beban Bensin, Parkir, Tol Kendaraan</td>
												<td nowrap="nowrap" style="text-align:center;"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
											    </div></td>
												<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
									      </tr>
<tr>
											  <td style="text-align:center" nowrap="nowrap"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">
															    <span></span> </label></td>
												<td nowrap style="text-align:left;">600003</td>
												<td nowrap style="text-align:left;">Beban Bensin, Parkir, Tol Kendaraan</td>
												<td nowrap="nowrap" style="text-align:center;"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
											    </div></td>
												<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
									      </tr>
  </tbody>
									</table>
      												</div>
                              


												</div>
												
												
												


												
													
													

											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Lanjut</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>

		</div>
				</div>

		</div>
	</div>

</div>

<?php require '../layouts/footer.php' ?>
<script>
	$('#btnClick').on('click', function() {
		$("#1").css("display", "none");
		$("#2").css("display", "block");
	});
  $('tbody').sortable();
</script>
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
<script>
	$(".barang").change(function() {
		if ($(this).val() == 0) {
			$(".xyz").attr("disabled", "disabled");
		} else {
			$(".xyz").removeAttr("disabled");
		}
	}).trigger("change");
	$(".pemasok").change(function() {
		if ($(this).val() == 0) {
			$(".pem").attr("disabled", "disabled");
		} else {
			$(".pem").removeAttr("disabled");
		}
	}).trigger("change");

	$(document).on('change', '.utama', function() {
  var target = $(this).data('target');
  var show = $("option:selected", this).data('show');
  $(target).children().addClass('hide');
  $(show).removeClass('hide');
});
$(document).ready(function(){
	$('.utama').trigger('change');
});
</script>
<?php require '../layouts/foot.php' ?>
