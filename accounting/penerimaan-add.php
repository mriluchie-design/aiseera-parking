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
				Form Penerimaan
			</h3>

		</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="mutasi-pegawai.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
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
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Save</span>
				</button>
				<button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-right" style="min-width:17rem !important">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-printer"></i>
								<span class="kt-nav__link-text">Cetak</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon-attachment"></i>
								<span class="kt-nav__link-text">Upload Dokumen</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon-suitcase"></i>
								<span class="kt-nav__link-text">Tambah Favorit</span>
							</a>
						</li>
					</ul>
				</div>
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
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Penerimaan</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Hutang Beban : <code>*</code></label>
										<select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
											<option value="1" disabled selected>Cari/Pilih...</option>
												<option value="2" data-subtext="110101">Kas Kecil</option>
												<option value="3" data-subtext="110102">Bank</option>
												<option value="4" data-subtext="110201">Deposito Bank</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label>No. Bukti#: <code>*</code></label>
										<div class="input-group">
											<div class="input-group-prepend" id="btnClick">
												<button class="btn btn-sm btn-success" type="button"><i class="text-white flaticon2-edit"></i></button>
											</div>
											<input id="1" type="text" class="form-control" placeholder="Search for...">
											<select id="2" data-size="7" data-live-search="true" class="form-control" style="display:none !important">
												<option value="1">Bank</option>
												<option value="2">Deposito Bank</option>
												<option value="3">Kas Kecil</option>
												<option value="4">Nomor Bukti Kas/Bank</option>
											</select>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">No.Cek# : <code>*</code></label>
											<input type="text" class="form-control form-control-sm" placeholder="">
									</div>
									<div class="col-lg-6">
										<label class="">Tanggal: <code>*</code></label>
										<div class="input-group date">
											<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="la la-calendar-check-o"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kt-portlet__foot">
							<div class="kt-form__action text-center">
								<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Ambil
									</button>
									<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_favorit" >Favorit</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Info Lainnya</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group">
									<label>Catatan :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group">
									<label>Penerima :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
								</div>
								<div class="form-group">
									<label>Cabang :</label>
									<input type="text" class="form-control form-control-sm" placeholder="Kantor Pusat" disabled>
								</div>
							</div>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>

				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Penerimaan</div><br>
					<div class="kt-portlet__body">
						<div class="kt-portlet__content">
							<select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-6 mb-3">
								<option value="1" disabled selected>Cari/Pilih Akun Perkiraan...</option>
								<optgroup label="Persediaan" class="a">
									<option data-subtext="110401">Persediaan</option>
									<option data-subtext="110402">Persediaan Terkirim</option>
								</optgroup>
								<optgroup label="Aset Lancar Lainnya" class="a">
									<option data-subtext="110501">Perlengkapan Kantor</option>
									<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
									<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
									<option data-subtext="110504">PPN Masukan</option>
									<option data-subtext="110505">PPh 23 Penjualan</option>
									<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
								</optgroup>
								<optgroup label="Aset Tetap" class="a">
								<option data-subtext="120001">Tanah</option>
								<option data-subtext="120002">Gedung</option>
								<option data-subtext="120003">Kendaraan</option>
								<option data-subtext="120004">Peralatan</option>
								<option data-subtext="120005">Inventaris Kantor</option>
							</optgroup>
							<optgroup label="Akumulasi Penyusutan" class="a">
							<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
							<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
							<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
							<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
						</optgroup>
						<optgroup label="Kewajiban Jangka Pendek" class="a">
							<option value="2" data-subtext="210201">PPN Keluaran</option>
							<option value="3" data-subtext="210202">PPh 23 Pembelian</option>
							<option value="4" data-subtext="210203">Hutang pembelian Belum Ditagih</option>
							<option value="5" data-subtext="210203">PPh Ps.4(2) Pembelian</option>
						</optgroup>
						<optgroup label="Kewajiban Jangka Panjang" class="a">
							<option value="2" data-subtext="2201">Hutang Jangka Panjang</option>
						</optgroup>
							<optgroup label="Modal" class="a">
							<option data-subtext="300001">Equitas Saldo Awal</option>
							<option data-subtext="300002">Laba Ditahan</option>
							<option data-subtext="300003">Modal Saham</option>
						</optgroup>
						<optgroup label="Pendapatan" class="a">
							<option data-subtext="400001">Penjualan</option>
							<option data-subtext="400002">Pendapatan Usaha</option>
							<option data-subtext="400003">Retur Penjualan</option>
							<option data-subtext="400004">Diskon Penjualan</option>
						</optgroup>
							<optgroup label="Beban Pokok Penjualan" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
									<option data-subtext="600001">Beban Iklan</option>
									<option data-subtext="600002">Beban Komisi</option>
									<option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
									<option data-subtext="600004">Beban Gaji, Upah & Honorer</option>
									<option data-subtext="600005">Beban Bonus, Pesangon & Kompensasi</option>
									<option data-subtext="600006">Beban Transportasi Karyawan</option>
									<option data-subtext="600007">Beban Catering & Makan Karyawan</option>
									<option data-subtext="600008">Beban Tunjangan Kesehatan</option>
									<option data-subtext="600009">Beban Asuransi Karyawan</option>
									<option data-subtext="600010">Beban THR</option>
									<option data-subtext="600011">Beban Listrik</option>
									<option data-subtext="600012">Beban PDAM</option>
									<option data-subtext="600013">Beban Telekomunikasi</option>
									<option data-subtext="600014">Beban Ekspedisi, POS, & Materai</option>
									<option data-subtext="600015">Beban Perjalanan Dinas</option>
									<option data-subtext="600016">Beban Perlengkapan Kantor</option>
									<option data-subtext="600017">Beban Pajak Penghasilan</option>
									<option data-subtext="600018">Beban Restribusi & Sumbangan</option>
									<option data-subtext="600019">Beban Sewa Gedung</option>
									<option data-subtext="600020">Beban Operasional Lainnya</option>
									<option data-subtext="600021">Beban Penyusutan Gedung</option>
									<option data-subtext="600022">Beban Penyusutan Kendaraan</option>
									<option data-subtext="600023">Beban Penyusutan Peralatan</option>
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
							</select>
							<table class="table table-striped table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																						<th width="10%" bgcolor="#f7fcff">Akun</th>
																						<th bgcolor="#f7fcff">Nama Akun</th>
																						<th bgcolor="#f7fcff">Nilai</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td></td>
																						<td></td>
																						<td></td>
																				  </tr>
																					<tr>
																						<td></td>
																						<td></td>
																						<td></td>
																				  </tr>
																					<tr>
																						<td></td>
																						<td></td>
																						<td></td>
																				  </tr>
																</tbody>
																<tfoot style="border-top: 3px solid #5867dd">
																	<tr>
																		<th colspan="2" class="text-right"><h5>Total</h5></th>
																		<th><h5>0</h5></th>
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
