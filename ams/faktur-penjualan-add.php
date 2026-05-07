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
				Form Faktur Penjualan
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
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Barang/Jasa</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Pelanggan : <code>*</code></label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="akun" list="akunname">
												<datalist id="akunname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
													<option value="Pelindo" label="110101">Pelindo</option>
													<option value="Chenwoo" label="110102">Chenwoo</option>
													<option value="Parahyangan" label="110201">Parahyangan</option>
												</datalist>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<label>No. Faktur#: <code>*</code></label>
										<div class="input-group">
											<div class="input-group-prepend" id="btnClick">
												<button class="btn btn-sm btn-success" type="button"><i class="text-white flaticon2-edit"></i></button>
											</div>
											<input id="1" type="text" class="form-control" placeholder="Search for...">
											<select id="2" data-size="7" data-live-search="true" class="form-control" style="display:none !important">
												<option value="1">Penawaran Penjualan</option>
											</select>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
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
									<div class="col-lg-6">
										<div class="form-group">
										<label>Faktur Dimuka :</label>
										<div class="kt-checkbox-inline">
											<label class="kt-checkbox">
												<input type="checkbox"> Ya (Mendahului Pengiriman)
												<span></span>
											</label>
										</div>
									</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">No. PO : </label>
										<input type="text" class="form-control form-control-sm" placeholder="">
									</div>
									<div class="col-lg-6">
										<div class="form-group">
										<label>Tgl.Pengiriman :</label>
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
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Pengiriman: </label>
										<div class="kt-input-icon kt-input-icon--right">
											<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="pengiriman" list="pengirimanname">
											<datalist id="pengirimanname" class="none">
												<option value="-" disabled="" selected="">Cari/Pilih...</option>
												<option value="Tidak Ditemukan Data Yang Cocok">Tidak Ditemukan Data Yang Cocok</option>
											</datalist>
											<span class="kt-input-icon__icon kt-input-icon__icon--right">
												<span><i class="la la-search"></i></span>
											</span>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
										<label>FOB :</label>
										<div class="kt-input-icon kt-input-icon--right">
											<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="fob" list="fobname">
											<datalist id="fobname" class="none">
												<option value="-" disabled="" selected="">Cari/Pilih...</option>
												<option value="Destination">Destination</option>
												<option value="Shipping Point">Shipping Point</option>
											</datalist>
											<span class="kt-input-icon__icon kt-input-icon__icon--right">
												<span><i class="la la-search"></i></span>
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
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_penawaran">Penawaran</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_favorit">Pesanan</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_favorit">Pengiriman</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_favorit">Favorit</a>
									</div>
								</div>
								<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Proses
									</button>
									<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										<a class="dropdown-item" href="#">Pembayaran</a>
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
									<label>Syarat Pembayaran :</label>
									<div class="form-group ">
										<div class="kt-input-icon kt-input-icon--right">
											<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="pembayaran" list="pembayaranname">
											<datalist id="pembayaranname">
												<option value="-" disabled="" selected="">Cari/Pilih...</option>
												<option value="COD" label="Tunai Saat Pengantaran">COD</option>
												<option value="Set Manual" label="Set syarat pembayaran manual">Set Manual</option>
												<option value="Net 15" label="Jatuh Tempo 15 Hari">Net 15</option>
												<option value="Net 30" label="Jatuh Tempo 30 Hari">Net 30</option>
												<option value="Net 45" label="Jatuh Tempo 45 Hari">Net 45</option>
												<option value="Net 60" label="Jatuh Tempo 60 Hari">Net 60</option>
												<option value="Net 7" label="Jatuh Tempo 7 Hari">Net 7</option>
											</datalist>
											<span class="kt-input-icon__icon kt-input-icon__icon--right">
												<span><i class="la la-search"></i></span>
											</span>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group">
									<label>Alamat :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group">
									<label>Pajak :</label>
									<div class="kt-checkbox-inline">
										<label class="kt-checkbox">
											<input type="checkbox"> Kena Pajak
											<span></span>
										</label>
										<label class="kt-checkbox">
											<input type="checkbox"> Total Termasuk Pajak
											<span></span>
										</label>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group">
									<label>Keterangan :</label>
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

			<div class="kt-portlet__body">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#" data-target="#kt_tabs_1_1">Rincian Barang</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2">Biaya Lainnya</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
													<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
														<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Barang & Jasa</div><br>
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<div class="form-group w-50">
												<div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih Barang & Jasa..." name="akun" list="jasaname">
													<datalist id="jasaname">
														<option value="-" disabled="" selected="">Cari/Pilih...</option>
														<option value="Epass" label="110101">Epass</option>
														<option value="Flap Barier" label="110102">Flap Barier</option>
														<option value="Security Patrol" label="110201">Security Patrol</option>
													</datalist>
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span><i class="la la-search"></i></span>
													</span>
												</div>
											</div>
																<table class="table table-striped table-bordered table-hover table-checkable">
																	<thead>
																		<tr>
																			<th width="40%" bgcolor="#f7fcff">Nama Barang</th>
																			<th bgcolor="#f7fcff">Kode#</th>
																			<th bgcolor="#f7fcff">Kuantitas</th>
																			<th bgcolor="#f7fcff">Satuan</th>
																			<th bgcolor="#f7fcff">@Harga</th>
																			<th bgcolor="#f7fcff">Diskon</th>
																			<th bgcolor="#f7fcff">Total Harga</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																		</tr>
																		<tr>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																		</tr>
																		<tr>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
													<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
														<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Barang & Jasa</div><br>
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<div class="form-group w-50">
													<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
														<option value="-" disabled="" selected="">Cari/Pilih Akun perkiraan...</option>
														<optgroup label="Pendapatan" class="a">
															<option data-subtext="400001" value="penjualan">Penjualan</option>
															<option data-subtext="400002" value="Pendapatan Usaha">Pendapatan Usaha</option>
															<option data-subtext="400003" value="Retur Penjualan">Retur Penjualan</option>
															<option data-subtext="400004" value="Diskon Penjualan">Diskon Penjualan</option>
														</optgroup>
														<optgroup label="Beban Pokok Penjualan" class="a">
															<option data-subtext="5101" value="Beban Pokok Penjualan">Beban Pokok Penjualan</option>
														</optgroup>
														<optgroup label="Beban" class="a">
															<option data-subtext="600001" value="Beban Iklan">Beban Iklan</option>
															<option data-subtext="600002" value="Beban Komisi">Beban Komisi</option>
															<option data-subtext="600003" value="Beban Bensin, Parkir, Tol Kendaraan">Beban Bensin, Parkir, Tol Kendaraan</option>
															<option data-subtext="600004" value="Beban Gaji, Upah & Honorer">Beban Gaji, Upah & Honorer</option>
															<option data-subtext="600005" value="Beban Bonus, Pesangon & Kompensasi">Beban Bonus, Pesangon & Kompensasi</option>
															<option data-subtext="600006" value="Beban Transportasi Karyawan">Beban Transportasi Karyawan</option>
															<option data-subtext="600007" value="Beban Catering & Makan Karyawan">Beban Catering & Makan Karyawan</option>
															<option data-subtext="600008" value="Beban Tunjangan Kesehatan">Beban Tunjangan Kesehatan</option>
															<option data-subtext="600009" value="Beban Asuransi Karyawan">Beban Asuransi Karyawan</option>
															<option data-subtext="600010" value="Beban THR">Beban THR</option>
															<option data-subtext="600011" value="Beban Listrik">Beban Listrik</option>
															<option data-subtext="600012" value="Beban PDAM">Beban PDAM</option>
															<option data-subtext="600013" value="Beban Telekomunikasi">Beban Telekomunikasi</option>
															<option data-subtext="600014" value="Beban Ekspedisi, POS, & Materai">Beban Ekspedisi, POS, & Materai</option>
															<option data-subtext="600015" value="Beban Perjalanan Dinas">Beban Perjalanan Dinas</option>
															<option data-subtext="600016" value="Beban Perlengkapan Kantor">Beban Perlengkapan Kantor</option>
															<option data-subtext="600017" value="Beban Pajak Penghasilan">Beban Pajak Penghasilan</option>
															<option data-subtext="600018" value="Beban Restribusi & Sumbanga">Beban Restribusi & Sumbangan</option>
															<option data-subtext="600019" value="Beban Sewa Gedung">Beban Sewa Gedung</option>
															<option data-subtext="600020" value="Beban Operasional Lainnya">Beban Operasional Lainnya</option>
															<option data-subtext="600021" value="Beban Penyusutan Gedung">Beban Penyusutan Gedung</option>
															<option data-subtext="600022" value="Beban Penyusutan Kendaraan">Beban Penyusutan Kendaraan</option>
															<option data-subtext="600023" value="Beban Penyusutan Peralatan">Beban Penyusutan Peralatan</option>
															<option data-subtext="600001" value="Beban Inventaris Kantor">Beban Inventaris Kantor</option>
														</optgroup>
														<optgroup label="Beban Lainnya" class="a">
															<option data-subtext="720001" value="Beban Bunga Pinjaman">Beban Bunga Pinjaman</option>
															<option data-subtext="720002" value="Beban Adm.Bank & Buku Cek/Giro">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003" value="Pajak Jasa Giro">Pajak Jasa Giro</option>
															<option data-subtext="720004" value="Laba/Rugi Terelasasi">Laba/Rugi Terelasasi</option>
															<option data-subtext="720005" value="Laba/Rugi Belum Terealisasi">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006" value="Laba/Rugi Disposisi Aset">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007" value="Beban Diluar Usaha Lainnya">Beban Diluar Usaha Lainnya</option>
														</optgroup>
													</select>
													</div>
																<table class="table table-striped table-bordered table-hover table-checkable">
																	<thead>
																		<tr>
																			<th width="40%" bgcolor="#f7fcff">Nama Biaya</th>
																			<th bgcolor="#f7fcff">Kode#</th>
																			<th bgcolor="#f7fcff">Jumlah</th>
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
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
														<div class="col-lg-6">
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #5867dd">
																<h5>Subtotal</h5>
																<label class="text-right">0</label>
															</div>
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #0abb87">
																<h5>Diskon <span class="kt-badge kt-badge--inline kt-badge--success">%</span></h5>
																<input type="number" class="form-control form-control-sm" placeholder="" >
															</div>
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #ed1c24">
																<h5>Total</h5>
																<label class="text-right">0</label>
															</div>
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
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">Akun</th>
								<th bgcolor="#f7fcff">Nama Akun</th>
								<th bgcolor="#f7fcff">Nilai</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
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
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Beban#</th>
								<th bgcolor="#f7fcff">Tanggal</th>
								<th bgcolor="#f7fcff">Jatuh Tempo</th>
								<th bgcolor="#f7fcff">Total</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
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
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Beban#</th>
								<th bgcolor="#f7fcff">Tanggal</th>
								<th bgcolor="#f7fcff">Jatuh Tempo</th>
								<th bgcolor="#f7fcff">Total</th>
								<th bgcolor="#f7fcff">Tipe</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
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
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Bukti#</th>
								<th bgcolor="#f7fcff">Jatuh Tempo PPh</th>
								<th bgcolor="#f7fcff">PPh</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
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
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Bukti#</th>
								<th bgcolor="#f7fcff">Jatuh Tempo PPh</th>
								<th bgcolor="#f7fcff">PPh</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
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
	$('#selectAll').click(function(e) {
		$(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
	});
</script>
<?php require '../layouts/foot.php' ?>
