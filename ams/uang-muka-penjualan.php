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
					Uang Muka Penjualan
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<a href="uang-muka-penjualan-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus"></i>Uang Muka Penjualan</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pengaturan kolom
</button>
<form class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="height:500px;overflow-y:scroll">
<label class="dropdown-item"><input type="checkbox" name="nomor" checked>Nomor#</label>
<label class="dropdown-item"><input type="checkbox" name="tanggal" checked>Tanggal</label>
<label class="dropdown-item"><input type="checkbox" name="pelanggan" checked>Pelanggan</label>
<label class="dropdown-item"><input type="checkbox" name="mataUang">Mata Uang</label>
<label class="dropdown-item"><input type="checkbox" name="po">No. PO</label>
<label class="dropdown-item"><input type="checkbox" name="tglFaktur">Tgl. Faktur Pajak</label>
<label class="dropdown-item"><input type="checkbox" name="keterangan" checked>Keterangan</label>
<label class="dropdown-item"><input type="checkbox" name="status" checked>Status</label>
<label class="dropdown-item"><input type="checkbox" name="uangMukaTerpakai">Uang Muka Terpakai</label>
<label class="dropdown-item"><input type="checkbox" name="sisaUangMuka">Sisa Uang Muka</label>
<label class="dropdown-item"><input type="checkbox" name="pph22">PPh 22</label>
<label class="dropdown-item"><input type="checkbox" name="cabang">Cabang</label>
<label class="dropdown-item"><input type="checkbox" name="pph">PPh</label>
<label class="dropdown-item"><input type="checkbox" name="ditukarFaktur">Ditukar Faktur</label>
<label class="dropdown-item"><input type="checkbox" name="nomorFaktur">Nomor Faktur Pajak</label>
<label class="dropdown-item"><input type="checkbox" name="fakturDimuka">Faktur Dimuka</label>
<label class="dropdown-item"><input type="checkbox" name="jatuhTempo1">Jatuh Tempo (Tukar Faktur)</label>
<label class="dropdown-item"><input type="checkbox" name="fileFaktur">File eFaktur</label>
<label class="dropdown-item"><input type="checkbox" name="fakturKodeUnik">Faktur Kode Unik</label>
<label class="dropdown-item"><input type="checkbox" name="kodeUnik">Kode Unik</label>
<label class="dropdown-item"><input type="checkbox" name="totalTransfer">Total Transfer</label>
<label class="dropdown-item"><input type="checkbox" name="jatuhTempo">Jatuh Tempo</label>
<label class="dropdown-item"><input type="checkbox" name="penjualUtama">Penjual Utama</label>
<label class="dropdown-item"><input type="checkbox" name="umur" checked>Umur (hr)</label>
<label class="dropdown-item"><input type="checkbox" name="dicetak">Dicetak/Email</label>
<label class="dropdown-item"><input type="checkbox" name="waktucetak">Waktu Cetak/Email</label>
<label class="dropdown-item"><input type="checkbox" name="noPengepakan">No.Pengepakan</label>
<label class="dropdown-item"><input type="checkbox" name="pembuatData">Pembuat Data</label>
<label class="dropdown-item"><input type="checkbox" name="kategoriPelanggan">Kategori Pelanggan</label>
<label class="dropdown-item"><input type="checkbox" name="diskon1">Diskon %</label>
<label class="dropdown-item"><input type="checkbox" name="diskon">Diskon</label>
<label class="dropdown-item"><input type="checkbox" name="nilaippn">Nilai PPN</label>
<label class="dropdown-item"><input type="checkbox" name="nilaippnbm">Nilai PPNBM</label>
<label class="dropdown-item"><input type="checkbox" name="biayaLainnya">Biaya Lainnya</label>
<label class="dropdown-item"><input type="checkbox" name="total" checked>Total</label>
<label class="dropdown-item"><input type="checkbox" name="pembayaran">Pembayaran</label>
<label class="dropdown-item"><input type="checkbox" name="terimaPajak">Terima Pajak</label>
<label class="dropdown-item"><input type="checkbox" name="retur">Retur</label>
<label class="dropdown-item"><input type="checkbox" name="returPajak">Retur Pajak</label>
<label class="dropdown-item"><input type="checkbox" name="piutang">Piutang</label>
<label class="dropdown-item"><input type="checkbox" name="piutangPajak">Piutang Pajak</label>
</form>
</div>
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
																				<div class="col-lg-3">
																				 <label class="">Nomor:</label>
																				 <input type="text" class="form-control form-control-sm " placeholder="">
																			 </div>
																				<div class="col-lg-3">
																				 <label class="">Tanggal:</label>
																				 <div class="input-group date">
																				 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="20/01/2020" id="kt_datepicker_2">
																				 <div class="input-group-append">
																				 	<span class="input-group-text">
																				 		<i class="la la-calendar-check-o"></i>
																				 	</span>
																				 </div>
																				 </div>
																			 </div>
																			 <div class="col-lg-3">
																				<label class="">Pelanggan:</label>
																				<input type="text" class="form-control form-control-sm " placeholder="">
																			</div>
														<div class="col-lg-3">
								                          <label>Status:</label>
																					<select class="form-control kt-selectpicker" multiple data-actions-box="true">
																						<option>Diajukan</option>
																						<option>Ditolak</option>
																						<option>Ditutup</option>
																						<option>Draf</option>
																						<option>Menunggu Diproses</option>
																						<option>Sebagian Diproses</option>
																						<option>Terproses</option>
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

																	<div class="kt-portlet kt-portlet--mobile ">
																		<div class="kt-portlet__body">
																			<!--begin: Datatable -->
																			<table class="table table-striped table-bordered table-hover table-resizable">
																				<thead>
																					<tr>
																						<th bgcolor="#f7fcff" class="nomor">Nomor#</th>
																						<th bgcolor="#f7fcff" class="tanggal">Tanggal</th>
																						<th bgcolor="#f7fcff" class="pelanggan">Pelanggan</th>
																						<th bgcolor="#f7fcff" class="mataUang">Mata Uang</th>
																						<th bgcolor="#f7fcff" class="po">No. PO</th>
																						<th bgcolor="#f7fcff" class="tglFaktur">Tgl. Faktur Pajak</th>
																						<th bgcolor="#f7fcff" class="keterangan">Keterangan</th>
																						<th bgcolor="#f7fcff" class="status">Status</th>
																						<th bgcolor="#f7fcff" class="uangMukaTerpakai">Uang Muka Terpakai</th>
																						<th bgcolor="#f7fcff" class="sisaUangMuka">Sisa Uang Muka</th>
																						<th bgcolor="#f7fcff" class="pph22">PPh 22</th>
																						<th bgcolor="#f7fcff" class="cabang">Cabang</th>
																						<th bgcolor="#f7fcff" class="pph">PPh</th>
																						<th bgcolor="#f7fcff" class="ditukarFaktur">Ditukar Faktur</th>
																						<th bgcolor="#f7fcff" class="nomorFaktur">No. Faktur Pajak</th>
																						<th bgcolor="#f7fcff" class="fakturDimuka">Faktur Dimuka</th>
																						<th bgcolor="#f7fcff" class="jatuhTempo1">Jatuh Tempo (Tukar Faktur)</th>
																						<th bgcolor="#f7fcff" class="fileFaktur">File eFaktur</th>
																						<th bgcolor="#f7fcff" class="fakturKodeUnik">Faktur Kode Unik</th>
																						<th bgcolor="#f7fcff" class="kodeUnik">Kode Unik</th>
																						<th bgcolor="#f7fcff" class="totalTransfer">Total Transfer</th>
																						<th bgcolor="#f7fcff" class="jatuhTempo">Jatuh Tempo</th>
																						<th bgcolor="#f7fcff" class="penjualUtama">Penjual Utama</th>
																						<th bgcolor="#f7fcff" class="umur">Umur</th>
																						<th bgcolor="#f7fcff" class="dicetak">Dicetak/Email</th>
																						<th bgcolor="#f7fcff" class="waktucetak">Waktu Cetak/Email</th>
																						<th bgcolor="#f7fcff" class="noPengepakan">No. Pengepakan</th>
																						<th bgcolor="#f7fcff" class="pembuatData">Pembuat Data</th>
																						<th bgcolor="#f7fcff" class="kategoriPelanggan">Kategori Pelanggan</th>
																						<th bgcolor="#f7fcff" class="diskon">Diskon %</th>
																						<th bgcolor="#f7fcff" class="diskon2">Diskon</th>
																						<th bgcolor="#f7fcff" class="uangMuka">Uang Muka</th>
																						<th bgcolor="#f7fcff" class="nilaippn">Nilai PPN</th>
																						<th bgcolor="#f7fcff" class="nilaippnbm">Nilai PPNBM</th>
																						<th bgcolor="#f7fcff" class="biayaLainnya">Biaya Lainnya</th>
																						<th bgcolor="#f7fcff" class="total">Total</th>
																						<th bgcolor="#f7fcff" class="pembayaran">Pembayaran</th>
																						<th bgcolor="#f7fcff" class="terimaPajak">Terima Pajak</th>
																						<th bgcolor="#f7fcff" class="retur">Retur</th>
																						<th bgcolor="#f7fcff" class="returPajak">Retur Pajak</th>
																						<th bgcolor="#f7fcff" class="piutang">Piutang</th>
																						<th bgcolor="#f7fcff" class="piutangPajak">Piutang Pajak</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td class="nomor"></td>
																						<td class="tanggal"></td>
																						<td class="pelanggan"></td>
																						<td class="mataUang"></td>
																						<td class="po"></td>
																						<td class="tglFaktur"></td>
																						<td class="keterangan"></td>
																						<td class="status"></td>
																						<td class="uangMukaTerpakai"></td>
																						<td class="sisaUangMuka"></td>
																						<td class="pph22"></td>
																						<td class="cabang"></td>
																						<td class="pph"></td>
																						<td class="ditukarFaktur"></td>
																						<td class="nomorFaktur"></td>
																						<td class="fakturDimuka"></td>
																						<td class="jatuhTempo1"></td>
																						<td class="fileFaktur"></td>
																						<td class="fakturKodeUnik"></td>
																						<td class="kodeUnik"></td>
																						<td class="totalTransfer"></td>
																						<td class="jatuhTempo"></td>
																						<td class="penjualUtama"></td>
																						<td class="umur"></td>
																						<td class="dicetak"></td>
																						<td class="waktucetak"></td>
																						<td class="noPengepakan"></td>
																						<td class="pembuatData"></td>
																						<td class="kategoriPelanggan"></td>
																						<td class="diskon"></td>
																						<td class="diskon2"></td>
																						<td class="uangMuka"></td>
																						<td class="nilaippn"></td>
																						<td class="nilaippnbm"></td>
																						<td class="biayaLainnya"></td>
																						<td class="total"></td>
																						<td class="pembayaran"></td>
																						<td class="terimaPajak"></td>
																						<td class="retur"></td>
																						<td class="returPajak"></td>
																						<td class="piutang"></td>
																						<td class="piutangPajak"></td>
																				  </tr>
																					<tr>
																						<td class="nomor"></td>
																						<td class="tanggal"></td>
																						<td class="pelanggan"></td>
																						<td class="mataUang"></td>
																						<td class="po"></td>
																						<td class="tglFaktur"></td>
																						<td class="keterangan"></td>
																						<td class="status"></td>
																						<td class="uangMukaTerpakai"></td>
																						<td class="sisaUangMuka"></td>
																						<td class="pph22"></td>
																						<td class="cabang"></td>
																						<td class="pph"></td>
																						<td class="ditukarFaktur"></td>
																						<td class="nomorFaktur"></td>
																						<td class="fakturDimuka"></td>
																						<td class="jatuhTempo1"></td>
																						<td class="fileFaktur"></td>
																						<td class="fakturKodeUnik"></td>
																						<td class="kodeUnik"></td>
																						<td class="totalTransfer"></td>
																						<td class="jatuhTempo"></td>
																						<td class="penjualUtama"></td>
																						<td class="umur"></td>
																						<td class="dicetak"></td>
																						<td class="waktucetak"></td>
																						<td class="noPengepakan"></td>
																						<td class="pembuatData"></td>
																						<td class="kategoriPelanggan"></td>
																						<td class="diskon"></td>
																						<td class="diskon2"></td>
																						<td class="uangMuka"></td>
																						<td class="nilaippn"></td>
																						<td class="nilaippnbm"></td>
																						<td class="biayaLainnya"></td>
																						<td class="total"></td>
																						<td class="pembayaran"></td>
																						<td class="terimaPajak"></td>
																						<td class="retur"></td>
																						<td class="returPajak"></td>
																						<td class="piutang"></td>
																						<td class="piutangPajak"></td>
																				  </tr>
																					<tr>
																						<td class="nomor"></td>
																						<td class="tanggal"></td>
																						<td class="pelanggan"></td>
																						<td class="mataUang"></td>
																						<td class="po"></td>
																						<td class="tglFaktur"></td>
																						<td class="keterangan"></td>
																						<td class="status"></td>
																						<td class="uangMukaTerpakai"></td>
																						<td class="sisaUangMuka"></td>
																						<td class="pph22"></td>
																						<td class="cabang"></td>
																						<td class="pph"></td>
																						<td class="ditukarFaktur"></td>
																						<td class="nomorFaktur"></td>
																						<td class="fakturDimuka"></td>
																						<td class="jatuhTempo1"></td>
																						<td class="fileFaktur"></td>
																						<td class="fakturKodeUnik"></td>
																						<td class="kodeUnik"></td>
																						<td class="totalTransfer"></td>
																						<td class="jatuhTempo"></td>
																						<td class="penjualUtama"></td>
																						<td class="umur"></td>
																						<td class="dicetak"></td>
																						<td class="waktucetak"></td>
																						<td class="noPengepakan"></td>
																						<td class="pembuatData"></td>
																						<td class="kategoriPelanggan"></td>
																						<td class="diskon"></td>
																						<td class="diskon2"></td>
																						<td class="uangMuka"></td>
																						<td class="nilaippn"></td>
																						<td class="nilaippnbm"></td>
																						<td class="biayaLainnya"></td>
																						<td class="total"></td>
																						<td class="pembayaran"></td>
																						<td class="terimaPajak"></td>
																						<td class="retur"></td>
																						<td class="returPajak"></td>
																						<td class="piutang"></td>
																						<td class="piutangPajak"></td>
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
