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
					History Akun
			</h3>

		</div>
		<div class="kt-subheader__toolbar">

				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

						<!--begin::Nav-->
						<ul class="kt-nav">

							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon fa fa-file-pdf"></i>
									<span class="kt-nav__link-text">PDF</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon fa fa-file-excel"></i>
									<span class="kt-nav__link-text">Excel</span>
								</a>
							</li>
						</ul>
						<!--end::Nav-->
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
																				 <label class="">Dari Tanggal :</label>
																				 <div class="input-group date">
																					<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date" id="kt_datepicker_2">
																					<div class="input-group-append">
																						<span class="input-group-text">
																							<i class="la la-calendar-check-o"></i>
																						</span>
																					</div>
																				 </div>
																			 </div>
								                        <div class="col-lg-3">
								                          <label class="">Sampai Tanggal :</label>
																					<div class="input-group date">
																					 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date" id="kt_datepicker_2">
																					 <div class="input-group-append">
																						 <span class="input-group-text">
																							 <i class="la la-calendar-check-o"></i>
																						 </span>
																					 </div>
																					</div>
								                        </div>
														<div class="col-lg-3">
								                          <label>Tipe Transaksi:</label>
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
																			<table class="table table-striped table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																						<th width="10%" bgcolor="#f7fcff" >Tanggal</th>
																						<th width="15%" bgcolor="#f7fcff" >No.Sumber#</th>
																						<th width="10%" bgcolor="#f7fcff">Tipe Transaksi</th>
																						<th width="30%" bgcolor="#f7fcff">Keterangan</th>
																						<th width="15%" bgcolor="#f7fcff">Mutasi</th>
																						<th width="10%" bgcolor="#f7fcff">Tipe</th>
																						<th width="10%" bgcolor="#f7fcff">Saldo</th>
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
<?php require '../layouts/foot.php' ?>
