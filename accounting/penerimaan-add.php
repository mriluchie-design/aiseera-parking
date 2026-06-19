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
				FORM
			</h3>

		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											PENERIMAAN</span>
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
										Ambil Data
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">

						<!--begin::Nav-->
						<ul class="kt-nav">

							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#lihat_favorit">
									<i class="kt-nav__link-icon fa fa-bookmark"></i>
									<span class="kt-nav__link-text">Dari Favorit</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#lihat_favorit">
									<i class="kt-nav__link-icon fa fa-file-invoice"></i>
									<span class="kt-nav__link-text">Pesanan Penjualan</span>
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
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Penerimaan</div><br><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">Kantor : <code>*</code></label>
											<input type="text" class="form-control form-control-sm" placeholder="Pusat" disabled>
									</div>
									<div class="col-lg-3">
										<label>No. Bukti#: <code>*</code></label>
										<div class="input-group">
											
											<input id="1" type="text" class="form-control" placeholder="PP.PQ.062026.01.0002" disabled>
											
										</div>
									</div>
									<div class="col-lg-3">
										<label class="">Tanggal Transaksi: <code>*</code></label>
										<div class="input-group date">
											<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="la la-calendar-check-o"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<label>Kas / Bank : <code>*</code></label>
										<select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
											<option value="1" disabled selected>Cari/Pilih...</option>
												<option value="2" data-subtext="Saldo : Rp. 500.000,-"><small class="text-muted">110101</small> - Kas Kecil</option>
												<option value="3" data-subtext="Saldo : Rp. 500.000,-">110102 - Bank</option>
												<option value="4" data-subtext="Saldo : Rp. 3.000.000.000,-">110201 - Deposito Bank</option>
										</select>
									</div>
									
									
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
								
								<div class="col-lg-3">
										<label>Referensi : <code>*</code></label>
										<select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari / Pilih...</option>
								
									<option>PQ.062026.01.0002</option>
							
								
								
							</select>
									</div>
									
									<div class="col-lg-6">
										<label class="">Terima Dari : <code>*</code></label>
											<input type="text" class="form-control form-control-sm" placeholder="">
									</div>
									
									<div class="col-lg-3">
										<label>Metode Pembayaran : <code>*</code></label>
										<select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari / Pilih...</option>
								
									<option>Tunai</option>
									<option>Transfer Bank</option>
									<option>Cek</option>
									<option>Lainnya</option>
							
								
								
							</select>
									</div>
									
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									
									
									
									
									
									
									
									
								</div>
								
								
									
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Info Lainnya</div><br><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
								<div class="col-lg-6">
										<label>Saldo Awal : </label>
										<div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" disabled>
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div>
									</div>
									<div class="col-lg-6">
										<label>Saldo Akhir : </label>
										<div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" disabled>
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div>
									</div>
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group">
									<label>Catatan Kas:</label>
									<textarea class="form-control" id="exampleTextarea" rows="3" placeholder=""></textarea>
								</div>
								
							</div>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>

				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<br>
					<div class="kt-portlet__body">
						<div class="kt-portlet__content">
							<div class="form-group row">
							<div class="col-xl-10">&nbsp;
 
 
										</div>
   
 <div class="col-xl-2" style="text-align:right;">
 <a href="#" class="btn btn-brand" data-toggle="modal" data-target="#modal_tambah_akun_penerimaan">
											<i class="fa fa-plus-circle"></i>Penerimaan
										</a>
 
										</div>

										
										
										</div>
							<table class="table table-striped table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="2%" bgcolor="#f7fcff">#</th>
																					  <th width="5%" bgcolor="#f7fcff"> Akun</th>
																					  <th width="15%" bgcolor="#f7fcff">Nama Akun</th>
																						<th width="15%" bgcolor="#f7fcff">Catatan</th>
																						<th width="10%" bgcolor="#f7fcff">Lampiran Dokumen</th>
																						<th width="10%" bgcolor="#f7fcff">Nilai</th>
																						<th width="1%" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td style="text-align:right"; align="center">1</td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="710003" /></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="Penjualan Persediaan / Perlengkapan" /></td>
																						<td><input type="text" class="form-control form-control-sm" placeholder="Isikan Catatan"></td>
																						<td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">2</td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="710005" /></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="Pendapatan Diluar Usaha Lainnya" /></td>
																						<td><input type="text" class="form-control form-control-sm" placeholder="Isikan Catatan"></td>
																						<td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					
																</tbody>
																<tfoot style="border-top: 2px solid #5867dd">
																	<tr>
																		<th colspan="5" bgcolor="#f7fcff" class="text-right">Total</th>
																		<th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="4.000.000.000" disabled aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></th>
																		<th bgcolor="#f7fcff">&nbsp;</th>
																	</tr>
																</tfoot>

																			</table>
						</div>
					</div>
				</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_favorit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Salin dari Transaksi Favorit</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<select class="form-control kt-selectpicker w-50 mb-3">
						<option disabled selected>Cari/Pilih...</option>
					</select>

					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">Akun</th>
								<th bgcolor="#f7fcff">Nama Akun</th>
								<th bgcolor="#f7fcff">Nilai</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_pencatatan_beban" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Pencatatan Beban</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Beban#</th>
								<th bgcolor="#f7fcff">Tanggal</th>
								<th bgcolor="#f7fcff">Jatuh Tempo</th>
								<th bgcolor="#f7fcff">Total</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_pencatatan_beban" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Pencatatan Gaji</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Beban#</th>
								<th bgcolor="#f7fcff">Tanggal</th>
								<th bgcolor="#f7fcff">Jatuh Tempo</th>
								<th bgcolor="#f7fcff">Total</th>
								<th bgcolor="#f7fcff">Tipe</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_PPh_pembelian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">PPh Pembelian</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<select class="form-control kt-selectpicker w-50 mb-3">
						<option disabled selected>[Semua]</option>
						<option>Pajak Penghasilan Ps.4(2)</option>
						<option>Pajak Penghasilan Ps.15</option>
						<option>Pajak Penghasilan Ps.21</option>
						<option>Pajak Penghasilan Ps.23</option>
					</select>
					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Bukti#</th>
								<th bgcolor="#f7fcff">Jatuh Tempo PPh</th>
								<th bgcolor="#f7fcff">PPh</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>
<div class="modal fade" id="lihat_favorit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TRANSAKSI FAVORIT</h3>
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
														<label class="kt-font-brand">Transaksi Favorit :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option>Bensin</option>
                                                                           
                                  </select>
													</div>
												



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
												
      												<table class="table table-responsive table-striped- table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">#</th>
											  <th width="1%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Akun</th>
											  <th width="12%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Nama Akun</th>
											  <th width="10%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Nilai</th>
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
												  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
											    </div></td>
										  </tr>
  </tbody>
									</table>
      												</div>
                              


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
		<div class="modal fade" id="modal_tambah_akun_penerimaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH PENERIMAAN</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<div class="form-group row">
<div class="col-lg-8">
														<label class="kt-font-brand">Akun Penerimaan :</label>
														<select name="select" class="form-control kt-selectpicker col-lg-12 mb-6" data-size="7" data-live-search="true">
																					    <option value="1" disabled="disabled" selected="selected">Cari / Pilih Akun Perkiraan...</option>
																					    <optgroup label="Kewajiban Jangka Pendek" class="a">
																					      <option data-subtext="5101">Beban Pokok Penjualan</option>
																				        </optgroup>
																					    <optgroup label="Beban" class="a">
																					      <option data-subtext="600001">Beban Iklan</option>
																					      <option data-subtext="600002">Beban Komisi</option>
																					      <option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
																					      <option data-subtext="600004">Beban Gaji, Upah &amp; Honorer</option>
																					      <option data-subtext="600005">Beban Bonus, Pesangon &amp; Kompensasi</option>
																					      <option data-subtext="600006">Beban Transportasi Karyawan</option>
																					      <option data-subtext="600007">Beban Catering &amp; Makan Karyawan</option>
																					      <option data-subtext="600008">Beban Tunjangan Kesehatan</option>
																					      <option data-subtext="600009">Beban Asuransi Karyawan</option>
																					      <option data-subtext="600010">Beban THR</option>
																					      <option data-subtext="600011">Beban Listrik</option>
																					      <option data-subtext="600012">Beban PDAM</option>
																					      <option data-subtext="600013">Beban Telekomunikasi</option>
																					      <option data-subtext="600014">Beban Ekspedisi, POS, &amp; Materai</option>
																					      <option data-subtext="600015">Beban Perjalanan Dinas</option>
																					      <option data-subtext="600016">Beban Perlengkapan Kantor</option>
																					      <option data-subtext="600017">Beban Pajak Penghasilan</option>
																					      <option data-subtext="600018">Beban Restribusi &amp; Sumbangan</option>
																					      <option data-subtext="600019">Beban Sewa Gedung</option>
																					      <option data-subtext="600020">Beban Operasional Lainnya</option>
																					      <option data-subtext="600021">Beban Penyusutan Gedung</option>
																					      <option data-subtext="600022">Beban Penyusutan Kendaraan</option>
																					      <option data-subtext="600023">Beban Penyusutan Peralatan</option>
																					      <option data-subtext="600001">Beban Inventaris Kantor</option>
																				        </optgroup>
																					    <optgroup label="Beban Lainnya" class="a">
																					      <option data-subtext="720001">Beban Bunga Pinjaman</option>
																					      <option data-subtext="720002">Beban Adm.Bank &amp; Buku Cek/Giro</option>
																					      <option data-subtext="720003">Pajak Jasa Giro</option>
																					      <option data-subtext="720004">Laba/Rugi Terelasasi</option>
																					      <option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
																					      <option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
																					      <option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
																				        </optgroup>
																				      </select>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-brand">Akun :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="710003" />
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">Atas Penerimaan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Penjualan Persediaan / Perlengkapan" />
													</div>
												



												
													
													

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label class="kt-font-brand">Nilai :</label>
														<div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
											    </div>
													</div>
													
												



												
													
													

												</div>

                              


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
	<div class="modal fade" id="kt_modal_PPh_penjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">PPh Pembelian</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<select class="form-control kt-selectpicker w-50 mb-3">
						<option disabled selected>[Semua]</option>
						<option>Pajak Penghasilan Ps.4(2)</option>
						<option>Pajak Penghasilan Ps.15</option>
					</select>
					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Bukti#</th>
								<th bgcolor="#f7fcff">Jatuh Tempo PPh</th>
								<th bgcolor="#f7fcff">PPh</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
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
	$('#selectAll').click(function (e) {
		$(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
});
</script>
<?php require '../layouts/foot.php' ?>
