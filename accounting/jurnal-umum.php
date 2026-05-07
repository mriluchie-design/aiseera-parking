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
					Jurnal Umum
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
		<!--<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pengaturan Table
</button>
<form class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<label class="dropdown-item"><input type="checkbox" name="nomor" checked>&nbsp;Nomor</label>
<label class="dropdown-item"><input type="checkbox" name="NomorTrans" checked>&nbsp;Nomor Trans</label>
<label class="dropdown-item"><input type="checkbox" name="Tanggal" checked>&nbsp;Tanggal</label>
<label class="dropdown-item"><input type="checkbox" name="Keterangan" checked>&nbsp;Keterangan</label>
<label class="dropdown-item"><input type="checkbox" name="Cabang" checked>&nbsp;Cabang</label>
<label class="dropdown-item"><input type="checkbox" name="Total" checked>&nbsp;Total</label>
<label class="dropdown-item"><input type="checkbox" name="TipeTransaksi"checked>&nbsp;Tipe Transaksi</label>
</form>
</div>-->
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					
			
<a href="jurnal-umum-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus-circle"></i>Buat Jurnal Umum</button>
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
																				 <label class="">Nomor Jurnal :</label>
																			 <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
																			 </div>
																				<div class="col-lg-2">
																				 <label class="">Nomor Transaksi :</label>
																			 <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
																			 </div>
																			 
																			 <div class="col-lg-3">
								                          <label>Kode Akun :</label>
																					<select class="form-control kt-selectpicker" data-live-search="true">
															<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
															<option data-subtext="110101">Kas Kecil</option>
															<option data-subtext="110102">Bank</option>
															<option data-subtext="110201">Deposito Bank</option>
															<option data-subtext="110301">Piutang Usaha</option>
															<option data-subtext="110302">Uang Muka Pembelian</option>
															<option data-subtext="110401">Persediaan</option>
															<option data-subtext="110402">Persediaan Terkirim</option>
															<option data-subtext="110501">Perlengkapan Kantor</option>
															<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
															<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
															<option data-subtext="110504">PPN Masukan</option>
															<option data-subtext="110505">PPh 23 Penjualan</option>
															<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
															<option data-subtext="120001">Tanah</option>
															<option data-subtext="120002">Gedung</option>
															<option data-subtext="120003">Kendaraan</option>
															<option data-subtext="120004">Peralatan</option>
															<option data-subtext="120005">Inventaris Kantor</option>
															<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
															<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
															<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
															<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
															<option data-subtext="210101">Hutang usaha</option>
															<option data-subtext="210102">Uang Muka Penjualan</option>
															<option data-subtext="210201">PPN Keluaran</option>
															<option data-subtext="210202">PPh 23 Pembelian</option>
															<option data-subtext="210203">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204">PPh Ps.4(2) Pembelian</option>
															<option data-subtext="2201">Hutang Jangka Panjang</option>
															<option data-subtext="300001">Equitas Saldo Awal</option>
															<option data-subtext="300002">Laba Ditahan</option>
															<option data-subtext="300003">Modal Saham</option>
															<option data-subtext="400001">Penjualan</option>
															<option data-subtext="400002">Pendapatan Jasa</option>
															<option data-subtext="400003">Retur Penjualan</option>
															<option data-subtext="400004">Diskon Penjualan</option>
															<option data-subtext="5010">Beban Pokok Penjualan</option>
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
															<option data-subtext="600024">Beban Inventaris Kantor</option>
															<option data-subtext="710001">Pendapatan Jasa Giro</option>
															<option data-subtext="710002">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003">Penjualan Persediaan/Perlengkapan</option>
															<option data-subtext="710004">Laba/Rugi Revaluasi Aset</option>
															<option data-subtext="710005">Pendapatan Diluar Usaha Lainnya</option>
															<option data-subtext="720001">Beban Bunga Pinjaman</option>
															<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003">Pajak Jasa Giro</option>
															<option data-subtext="720004">Laba/Rugi Terealisasi</option>
															<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
														</select>
								                        </div>
														<div class="col-lg-1">
							                          <label class="">Tipe Transaksi :</label>
							                          <div class="form-group">
							                       <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
																							<option value="2" selected>Tunai</option>
																							<option value="2">Non Tunai</option>
																					</select>
							                      </div>
							                        </div>	
<div class="col-lg-1">
							                          <label class="">Metode Transaksi :</label>
							                          <div class="form-group">
							                       <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
																							<option value="2">Transfer Bank</option>
																							<option value="2" selected>e-Wallet</option>
																							<option value="2">Kartu Kredit</option>
																							<option value="2">Counter</option>
																							<option value="2">Kredit Tanpa Kartu</option>
																					</select>
							                      </div>
							                        </div>	
<div class="col-lg-1">
							                          <label class="">Provider :</label>
							                          <div class="form-group">
							                       <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
																							<option value="2" selected>GoPay</option>
																							<option value="2">Dana</option>
																							<option value="2">Shoope Pay</option>
																							<option value="2">Gpay</option>
																							<option value="2">Kartu Kredit</option>
																					</select>
							                      </div>
							                        </div>
								                        </div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							                     <div class="form-group row">
												 <div class="col-lg-2">
																				 <label class="">Keterangan :</label>
																			 <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
																			 </div>
								                        <div class="col-lg-2">
								                          <label class="">Waktu Input :</label>
																					<div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>							                        
																							</div>
																							<div class="col-lg-2">
								                          <label class="">Waktu Transaksi :</label>
																					<div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
											  
		                        
																							</div>
																					
<div class="col-lg-1">
							                          <label class="">Kantor :</label>
							                          <div class="form-group">
							                       <select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
																							<option value="2">Pusat</option>
																							<option value="2">Cabang</option>
																					</select>
							                      </div>
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
																			<table class="table table-bordered table-hover">
																				<thead>
																					<tr>
																					  <th width="1%" bgcolor="#f7fcff" class="nomor">#</th>
																						<th width="4%" bgcolor="#f7fcff" class="nomor">ID Jurnal</th>
																						<th width="6%" bgcolor="#f7fcff" class="NomorTrans">Nomor Transaksi</th>
																						<th width="8%" bgcolor="#f7fcff" class="Tanggal">Waktu Input</th>
																						<th width="8%" bgcolor="#f7fcff" class="Tanggal">Waktu Transaksi</th>
																						<th width="15%" bgcolor="#f7fcff" class="Keterangan">Keterangan</th>
																						<th width="12%" bgcolor="#f7fcff" class="Total">Total</th>
																						<th width="6%" bgcolor="#f7fcff">Tipe<br>Transaksi</th>
																						<th width="6%" bgcolor="#f7fcff">Metode<br>Transaksi</th>
																						<th width="5%" bgcolor="#f7fcff">Provider</th>
																						<th width="1%" bgcolor="#f7fcff">Kantor</th>
																						<th width="1%" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td class="nomor">1</td>
																						<td class="nomor">JV.2020.01.00001</td>
																						<td class="NomorTrans">EXP.2020.01.00001</td>
																						<td style="text-align:center">16 November 2025<br />08:38:00 WITA</td>
																						<td style="text-align:center">16 November 2025<br />08:30:00 WITA</td>
																					  <td class="Keterangan">Terima Setoran TJU Kolektor SYARIFUDDIN, S.Pdi 01 September 2025</td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
																					  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
																					  <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Tunai</span></td>
																					  <td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--brand kt-badge--sm kt-badge--inline">Pusat</span></td>
																					  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="jurnal-umum-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="jurnal-umum-edit.php" class="kt-nav__link">
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
																						<td class="nomor">JV.2020.01.00001</td>
																						<td class="NomorTrans">EXP.2020.01.00001</td>
																						<td style="text-align:center">16 November 2025<br />08:38:00 WITA</td>
																						<td style="text-align:center">16 November 2025<br />08:30:00 WITA</td>
																					  <td class="Keterangan">Terima Setoran PLB Kolektor JAMALUDDIN. B 01 September 2025</td>
																					  <td class="Total" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																					  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135" data-html="true">Non Tunai</span></td>
																					  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">e-Wallet</span></td>
																					  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Gopay</span></td>
																					  <td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--warning kt-badge--sm kt-badge--inline" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Nama Cabang A">Cabang</span></td>
																					  <td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="jurnal-umum-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="jurnal-umum-edit.php" class="kt-nav__link">
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
