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
				Form Pelanggan
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
			<ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#" data-target="#kt_tabs_1_1">Umum</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_2">Pengiriman</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_3">Kontak</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_4">Penjualan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_5">Pajak</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_6">Saldo</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_7">Lain-Lain</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Umum</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">Kategori:</label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kategori" list="kategoriname">
												<datalist id="kategoriname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
													<option value="Umum">Umum</option>
												</datalist>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<label class="">ID Pelanggan:</label>
										<select class="form-control form-control-sm">
											<option>Pelanggan</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label class="">Nama:</label>
										<input type="text" class="form-control form-control-sm " placeholder="">
									</div>
									<div class="col-lg-3">
										<label>Email:</label>
										<input type="email" class="form-control form-control-sm " placeholder="Email">
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">No. Telp. Bisnis :</label>
										<input type="number" class="form-control form-control-sm " placeholder="">
									</div>
									<div class="col-lg-3">
										<label class="">Handphone:</label>
										<input type="number" class="form-control form-control-sm " placeholder="">
									</div>
									<div class="col-lg-3">
										<label class="">Faxmilie:</label>
										<input type="text" class="form-control form-control-sm " placeholder="">
									</div>
									<div class="col-lg-3">
										<label>Website</label>
										<input type="text" class="form-control form-control-sm " placeholder="Email">
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">Dipakai Di cabang :</label>
										<select class="form-control form-control-sm">
											<option>[Semua Cabang]</option>
											<option>Kantor Pusat</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label class="">Alamat Penagihan:</label>
										<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
									</div>
									<div class="col-lg-3">
										<label class="">Kota:</label>
										<input type="text" class="form-control form-control-sm " placeholder="">
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
										<label>K.POS</label>
										<input type="text" class="form-control form-control-sm " placeholder="Email">
									</div>
									<div class="col-lg-3">
										<label>Provinsi</label>
										<input type="text" class="form-control form-control-sm " placeholder="Email">
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
										<label>Negara</label>
										<input type="text" class="form-control form-control-sm " placeholder="Email">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">
					<div class="row">
						<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
								<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Utama</div><br>
								<div class="kt-portlet__body">
									<div class="kt-portlet__content">
										<label class="kt-checkbox">
											<input type="checkbox"> Sama Dengan Alamat Penagihan
											<span></span>
										</label>
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
										<div class="form-group row">
											<div class="col-lg-6">
												<label class="">Jalan:</label>
												<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
											</div>
											<div class="col-lg-6">
												<label class="">Kota:</label>
												<input type="text" class="form-control form-control-sm " placeholder="">
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<label>K.POS</label>
												<input type="text" class="form-control form-control-sm " placeholder="Email">
											</div>
										</div>
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
										<div class="form-group row">
											<div class="col-lg-6">
												<label class="">Provinsi :</label>
												<input type="number" class="form-control form-control-sm " placeholder="">
											</div>
											<div class="col-lg-6">
												<label class="">Negara :</label>
												<input type="number" class="form-control form-control-sm " placeholder="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
								<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Lainnya</div><br>
								<div class="kt-portlet__body">
									<div class="kt-portlet__content">
										<a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#kt_modal_tambah_alamat">
											<i class="fa fa-plus"></i>Tambah Alamat
										</a>
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
										<table class="table table-striped table-bordered table-hover table-resizable">
											<thead>
												<tr>
													<th bgcolor="#f7fcff"> Alamat </th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Jln. Duta Mas Periwi No.2 Ciputat 92114 Banten Indonesia</td>
												</tr>
												<tr>
													<td>Jln. Duta Mas Periwi No.2 Ciputat 92114 Banten Indonesia</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
					<a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#kt_modal_tambah_kontak">
						<i class="fa fa-plus"></i>Tambah Kontak
					</a>
					<table class="table table-striped table-bordered table-hover table-resizable mt-3">
						<thead>
							<tr>
								<th bgcolor="#f7fcff"> Nama Lengkap </th>
								<th bgcolor="#f7fcff"> Posisi Jabatan </th>
								<th bgcolor="#f7fcff"> Email </th>
								<th bgcolor="#f7fcff"> Handphone </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="4" class="text-center">Belum Ada Data</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="kt_tabs_1_4" role="tabpanel">
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Umum</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">Kategori Harga : <code>*</code></label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kategori" list="kategoriname">
												<datalist id="kategoriname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
													<option value="Umum">Umum</option>
												</datalist>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<label class="">Kategori Diskon:</label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kategori" list="kategoriname">
												<datalist id="kategoriname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
													<option value="Umum">Umum</option>
												</datalist>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<label class="">Syarat Pembayaran :</label>
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
									<div class="col-lg-3">
										<label>Default Penjual:</label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kategori" list="kategoriname">
												<datalist id="kategoriname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
													<option value="Data Tidak Ditemukan">Data Tidak Ditemukan</option>
												</datalist>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">Default Diskon :</label>
										<input type="Text" class="form-control form-control-sm " placeholder="%">
									</div>
									<div class="col-lg-3">
										<label class="">Default Deskripsi:</label>
										<input type="Text" class="form-control form-control-sm " placeholder="">
									</div>
									<div class="col-lg-3">
										<label class="">Konsinyasi :</label>
										<label class="kt-checkbox">
											<input type="checkbox"> Ya, Perusahaan menitipkan barang ke Pelanggan ini
											<span></span>
										</label>
									</div>
									<div class="col-lg-3">
										<label>Akun Piutang</label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="piutang" list="piutangname">
												<datalist id="piutangname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
													<option value="Piutang Usaha" label="110301">Piutang Usaha</option>
													<option value="Piutang Usaha" label="110302">Uang Muka Pembelian</option>
												</datalist>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">Akun Uang Muka :</label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="uangmuka" list="uangmukaname">
												<datalist id="uangmukaname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
													<option value="Hutang Usaha" label="210101">Hutang Usaha</option>
													<option value="Uang Muka Penjualan" label="210102">Uang Muka Penjualan</option>
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
					</div>
				</div>
				<div class="tab-pane" id="kt_tabs_1_5" role="tabpanel">
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pajak</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">Pajak : <code>*</code></label>
										<div class="kt-checkbox-list">
											<label class="kt-checkbox">
												<input type="checkbox"> Default Total Faktur sudah termasuk Pajak
												<span></span>
											</label>
										</div>
									</div>
									<div class="col-lg-3">
										<label class="">Nomor NPWP :</label>
										<input type="Text" class="form-control form-control-sm " placeholder="">
									</div>
									<div class="col-lg-3">
										<label class="">Nomor NIK :</label>
										<input type="Text" class="form-control form-control-sm " placeholder="">
									</div>
									<div class="col-lg-3">
										<label>Tipe Pajak:</label>
										<div class="form-group ">
											<select class="form-control form-control-sm">
												<option>Ekspor BKP Berwujud</option>
												<option>Ekspor BKP Tidak Berwujud</option>
												<option>Ekspor JKP</option>
												<option selected>Bukan Pemungutan PPN</option>
												<option>Pemungut Bendaharawan Pemerintah</option>
												<option>Pemungut PPN</option>
												<option>DPP Nilai Lain</option>
												<option>Pajak di Deemed</option>
												<option>Penyerahan Lainnya</option>
												<option>PPN Tidak Dipungut</option>
												<option>PPN Dibebaskan</option>
												<option>Penyerahan Aset</option>
											</select>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-3">
										<label class="">Kode Dokumen :</label>
										<select class="form-control form-control-sm">
											<option>Faktur Pajak</option>
											<option>Dokumen Yang Dipersamakan</option>
											<option>Dokumen Ekspor(FEB)</option>
											<option>Dingunggung</option>
										</select>
									</div>
									<div class="col-lg-3">
										<label>Alamat Pajak:</label>
										<div class="kt-checkbox-list">
											<label class="kt-checkbox">
												<input type="checkbox" id="checkboxOne" name="checkboxOne" onclick="disable()"> Sama Dengan Alamat Penagihan
												<span></span>
											</label>
											<label class="">Provinsi:</label>
											<input type="text" class="form-control form-control-sm alamat" placeholder="" id="yourText" name="ourText">
											<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
											<label>Negara</label>
											<input type="text" class="form-control form-control-sm alamat" placeholder="Email" id="yourText2" name="yourText2">
										</div>
									</div>
									<div class="col-lg-3">
										<label class="">Jalan:</label>
										<textarea class="form-control alamat" id="exampleTextarea" rows="8" placeholder="" id="yourText3" name="yourText3"></textarea>
									</div>
									<div class="col-lg-3">
										<label class="">Kota:</label>
										<input type="text" class="form-control form-control-sm alamat" placeholder="" id="yourText4" name="yourText4">
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
										<label>K.POS</label>
										<input type="text" class="form-control form-control-sm alamat" placeholder="" id="yourText5" name="yourText5">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="kt_tabs_1_6" role="tabpanel">
					<a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#kt_modal_tambah_saldo">
						<i class="fa fa-plus"></i>Tambah Saldo Awal
					</a>
					<table class="table table-striped table-bordered table-hover table-resizable mt-3">
						<thead>
							<tr>
								<th bgcolor="#f7fcff"> Tanggal </th>
								<th bgcolor="#f7fcff"> Saldo Awal </th>
								<th bgcolor="#f7fcff"> Mata Uang </th>
								<th bgcolor="#f7fcff"> Syarat Pembayaran </th>
								<th bgcolor="#f7fcff"> Nomor # </th>
								<th bgcolor="#f7fcff"> Keterangan </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="6" class="text-center">Belum Ada Data</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="kt_tabs_1_7" role="tabpanel">
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pembatasan Piutang Pelanggan</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-3">
										<div class="kt-checkbox-list">
											<label class="kt-checkbox">
												<input type="checkbox"> Jika ada Faktur Berumur Lebih Dari
												<span></span>
											</label>
										</div>
										<div class="input-group input-group-sm">
											<input type="number" class="form-control" placeholder="" aria-describedby="basic-addon2">
											<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Hari</span></div>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="kt-checkbox-list">
											<label class="kt-checkbox">
												<input type="checkbox"> Jika total piutang & pesanan melebihi
												<span></span>
											</label>
										</div>
										<div class="input-group input-group-sm">
											<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Rp.</span></div>
											<input type="number" class="form-control" placeholder="" aria-describedby="basic-addon2">
										</div>
									</div>
									<div class="col-lg-3">
										<label class="">Catatan :</label>
										<textarea class="form-control alamat" id="exampleTextarea" rows="8" placeholder="" id="yourText3" name="yourText3"></textarea>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_alamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Alamat Pengiriman</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">Jalan:</label>
							<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
						</div>
						<div class="col-lg-6">
							<label class="">Kota:</label>
							<input type="text" class="form-control form-control-sm " placeholder="">
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<label>K.POS</label>
							<input type="text" class="form-control form-control-sm " placeholder="Email">
						</div>
					</div>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">Provinsi :</label>
							<input type="number" class="form-control form-control-sm " placeholder="">
						</div>
						<div class="col-lg-6">
							<label class="">Negara :</label>
							<input type="number" class="form-control form-control-sm " placeholder="">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_kontak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Kontak</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">Nama Lengkap :</label>
							<input type="text" class="form-control form-control-sm " placeholder="">
						</div>
						<div class="col-lg-6">
							<label class="">Posisi Jabatan:</label>
							<input type="text" class="form-control form-control-sm " placeholder="">
						</div>
					</div>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">Email :</label>
							<input type="email" class="form-control form-control-sm " placeholder="">
						</div>
						<div class="col-lg-6">
							<label class="">Handphone :</label>
							<input type="number" class="form-control form-control-sm " placeholder="">
						</div>
					</div>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">No. Telp. Bisnis :</label>
							<input type="number" class="form-control form-control-sm " placeholder="">
						</div>
						<div class="col-lg-6">
							<label class="">Faximili :</label>
							<input type="text" class="form-control form-control-sm " placeholder="">
						</div>
					</div>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">No. Telp. Rumah :</label>
							<input type="number" class="form-control form-control-sm " placeholder="">
						</div>
						<div class="col-lg-6">
							<label class="">No. Whatsapp :</label>
							<input type="number" class="form-control form-control-sm " placeholder="">
						</div>
					</div>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">Website :</label>
							<input type="text" class="form-control form-control-sm " placeholder="">
						</div>
						<div class="col-lg-6">
							<label class="">Catatan :</label>
							<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Save</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_saldo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Saldo Awal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">Tanggal : <code>*</code></label>
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
							<label class="">Nomor# : <code>*</code></label>
							<div class="input-group">
								<div class="input-group-prepend" id="btnClick">
									<button class="btn btn-sm btn-success" type="button"><i class="text-white flaticon2-edit"></i></button>
								</div>
								<input id="1" type="text" class="form-control" placeholder="Search for...">
								<select id="2" data-size="7" data-live-search="true" class="form-control" style="display:none !important">
									<option value="1">Faktur Penjualan</option>
								</select>
							</div>
						</div>
					</div>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">Cabang :</label>
							<input type="email" class="form-control form-control-sm " placeholder="Kantor Pusat" disabled>
						</div>
						<div class="col-lg-6">
							<label class="">Syarat Pembayaran:</label>
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
					</div>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="form-group row">
						<div class="col-lg-6">
							<label class="">Jumlah : <code>*</code></label>
							<input type="number" class="form-control form-control-sm " placeholder="">
						</div>
						<div class="col-lg-6">
							<label class="">Keterangan :</label>
							<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
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
	function disable() {
		var elements = document.getElementsByClassName("alamat");
		document.getElementById("checkboxOne").checked ? doIt(elements, true) : doIt(elements, false);
	}

	function doIt(elements, status) {
		for (var i = 0; i < elements.length; i++) {
			elements[i].disabled = status;
		}
	}

	$('#btnClick').on('click', function() {
		$("#1").css("display", "none");
		$("#2").css("display", "block");
	});
</script>
<?php require '../layouts/foot.php' ?>
