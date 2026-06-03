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
				Form Jurnal Umum
			</h3>

		</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="mutasi-pegawai.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
				<button type="button" class="btn btn-success">
					<i class="la la-check"></i>
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
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">jurnal Umum</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Tanggal : <code>*</code></label>
										<div class="input-group date">
										<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="20/01/2020" id="kt_datepicker_2">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-calendar-check-o"></i>
											</span>
										</div>
									 </div>
									</div>
									<div class="col-lg-4">
										<label>Nomor : <code>*</code></label>
										
										<input type="text" class="form-control form-control-sm" placeholder="Isikan Nomor">
									</div>
									<div class="col-lg-2">
										<label>Penomoran Otomatis : </label>
										
										
											<input data-switch="true" data-size="small" data-toggle="kt-tooltip" data-skin="brand" data-on-text="Otomatis" data-off-text="Tidak" data-on-color="success" type="checkbox" checked="checked">
											
										
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Tipe Transaksi : <code>*</code></label>
										<input type="text" class="form-control form-control-sm" placeholder="Jurnal Umum" disabled="disabled">
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
								
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>

			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Jurnal</div><br>
				<div class="kt-portlet__body">
					<div class="kt-portlet__content">
						<table class="table table-bordered table-hover table-checkable">
							<thead>
								<tr>
								  <th width="1%" bgcolor="#f7fcff">#</th>
									<th width="10%" bgcolor="#f7fcff">Akun Perkiraan</th>
									<th width="10%" bgcolor="#f7fcff">Nama Perkiraan</th>
									<th width="10%" bgcolor="#f7fcff">Memo</th>
									<th width="8%" bgcolor="#f7fcff">Lampiran</th>
									<th width="7%" bgcolor="#f7fcff">Debit</th>
									<th width="7%" bgcolor="#f7fcff">Kredit</th>
									<th width="3%" bgcolor="#f7fcff">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								  <td style="text-align:right">1</td>
									<td><select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari/Pilih Akun Perkiraan...</option>
								<optgroup label="Kewajiban Jangka Pendek" class="a">
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
							</select></td>
									<td><input type="text" class="form-control form-control-sm" placeholder="Beban Pokok Penjualan" disabled></td>
									<td nowrap="nowrap" style="text-align:left"><input type="text" class="form-control form-control-sm" placeholder="Isikan Memo"></td>
									<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
								</tr>
								<tr>
								  <td style="text-align:right">2</td>
									<td><select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari/Pilih Akun Perkiraan...</option>
								<optgroup label="Kewajiban Jangka Pendek" class="a">
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
							</select></td>
									<td><input type="text" class="form-control form-control-sm" placeholder="Beban Pokok Penjualan" disabled></td>
									<td nowrap="nowrap" style="text-align:left"><input type="text" class="form-control form-control-sm" placeholder="Isikan Memo"></td>
									<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
								</tr>
								<tr>
								  <td style="text-align:right">3</td>
									<td><select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari/Pilih Akun Perkiraan...</option>
								<optgroup label="Kewajiban Jangka Pendek" class="a">
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
							</select></td>
									<td><input type="text" class="form-control form-control-sm" placeholder="Beban Pokok Penjualan" disabled></td>
									<td nowrap="nowrap" style="text-align:left"><input type="text" class="form-control form-control-sm" placeholder="Isikan Memo"></td>
									<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
									<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
								</tr>
							</tbody>
							<tfoot style="border-top: 2px solid #5867dd">
								<tr>
									<th bgcolor="#f7fcff" colspan="5" class="text-right">
										<strong>Total</strong>
									</th>
									<th bgcolor="#f7fcff">
										<h5><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></h5>
									</th bgcolor="#f7fcff">
									<th bgcolor="#f7fcff">
										<h5><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></h5>
									</th bgcolor="#f7fcff">
									<th bgcolor="#f7fcff">&nbsp;</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_ambil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Salin Karyawan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<select class="form-control kt-selectpicker w-50 mb-3">
						<option>Pegawai Tetap</option>
						<option>Pegawai Tidak Tetap</option>
						<option>Bukan Pegawai - Distributor MLM</option>
						<option>Bukan Pegawai - Petugas Dinas Luar Asuransi</option>
						<option>Bukan Pegawai - Penjaga Barang Dagangan</option>
						<option>Bukan Pegawai - Tenaga Ahli</option>
						<option>Anggota Dewan Komisaris atau Dewan Pengawas</option>
						<option>Bukan Pegawai Yang menerima imbalan yang bersifat berkesinambungan</option>
						<option>Bukan Pegawai Yang menerima imbalan yang tidak bersifat berkesinambungan</option>
					</select>

					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">Karyawan</th>
								<th bgcolor="#f7fcff">Nilai</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox"  id="3">&nbsp;<span></span></label></td>
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
