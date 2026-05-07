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
				Daftar Laporan
			</h3>

		</div>
		<div class="kt-subheader__toolbar">

			<button type="button" class="btn btn-label-danger btn-sm" id="buttonLogin" onclick="displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
			<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
				<i class="fa fa-print"></i> Export Data</button>
			</a>
			<a href="akun-perkiraan-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus"></i>Buat Akun Perkiraan</button>
				<!--<i class="flaticon2-plus"></i>-->
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

	<div class="kt-portlet" id="login_Box_Div">
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
						<label class="">Deskripsi:</label>
						<input type="text" class="form-control form-control-sm " placeholder="">
					</div>
					<div class="col-lg-3">
						<label class="">Nama Daftar Laporan:</label>
						<input type="text" class="form-control form-control-sm " placeholder="">
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

	<div class="kt-portlet kt-faq-v1">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					Daftar Laporan
				</h3>
			</div>
		</div>
		<div class="kt-portlet__body">
			<div class="row">
				<div class="col-xl-2">
					<ul class="kt-nav" id="kt_nav" role="tablist">
						<li class="kt-nav__item kt-nav__item--active">
							<a href="daftar-laporan.php" class="kt-nav__link">
								<span class="kt-nav__link-text">keuangan</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="buku-besar.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Buku Besar</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="kas-bank.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Kas & Bank</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="piutang.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Piutang</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="penjualan.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Penjualan</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<span class="kt-nav__link-text">Tenaga Penjual</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<span class="kt-nav__link-text">Hutang</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<span class="kt-nav__link-text">Pembelian</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<span class="kt-nav__link-text">Pekerjaan Pesanan</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xl-10" style="height:500px; overflow-y:scroll;">
					<div class="form-group row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<select class="form-control kt-selectpicker col-lg-6" data-live-search="true" id="select" name="cd-dropdown">
								<option value="1" data-subtext="Menampilkan laporan laba rugi untuk periode yg dipilih">Laba/Rugi (Standar)</option>
								<option value="2" data-subtext="Menampilkan Neraca Standar">Neraca (Standar)</option>
								<option value="1" data-subtext="Menampilkan laba rugi bulanan pada rentang periode terpilih">Laba/Rugi (Multi Periode)</option>
								<option value="2" data-subtext="Menampilkan Neraca per akhir bulan pada rentang periode terpilih">Neraca (Multi Periode)</option>
								<option value="4" data-subtext="Menampilkan arus kas dan aliran keluar kas untuk spesifik periode">Arus Kas (Tak Langsung)</option>
								<option value="5" data-subtext="Menampilkan perkiraan nilai kas pada 5 bulan kedepan">Proyeksi Kas per Bulan</option>
								<option value="9" name="data3" data-subtext="Menampilkan laba rugi dibandingkan dengan periode lalu dari selisihnya ditampilkan dengan persentase">Laba/Rugi (Perbandingan Periode)</option>
								<option value="6" data-subtext="Menampilkan laba rugi kuartal pada tahun yang dipilih">Laba/Rugi (Kuartal)</option>
								<option value="3" data-subtext="Menampilkan laba/rugi dengan penambahan kolom anggaran dan perbandingannya dan juga persentasenya">Laba/Rugi (Perbandingan Anggaran)</option>
								<option value="1" data-subtext="Menampilkan laba rugi dari cabang-cabang untuk periode yg dipilih">Laba/Rugi Cabang</option>
								<option value="1" name="select1" data-subtext="Menampilkan laba rugi per Departemen untuk periode yg dipilih">Laba/Rugi Departemen</option>
								<option value="1" name="select2" data-subtext="Menampilkan laba rugi per Proyek untuk periode yg dipilih">Laba/Rugi Proyek</option>
								<option value="2" data-subtext="Menampilkan neraca per masing-masing cabang">Neraca per Cabang</option>
								<option value="7" data-subtext="Menampilkan Neraca dibandingkan dengan periode lalu dari selisihnya ditampilkan dengan persentase">Neraca (Perbandingan Periode)</option>
								<option value="8" data-subtext="Neraca dengan penambahan kolom persentase">Neraca (Porsi)</option>
								<option value="2" data-subtext="Menampilkan laporan neraca secara horisontal">Neraca (Induk Skontro)</option>
								<option value="9" name="data4" data-subtext="Menampilkan laba/rugi per departemen dengan penambahan kolom anggaran dan perbandingannya dan juga persentasenya">Laba/Rugi Departemen (Perbandingan Anggaran)</option>
								<option value="9" name="data5" data-subtext="Menampilkan laba/rugi per proyek dengan penambahan kolom anggaran dan perbandingannya dan juga persentasenya">Laba/Rugi Proyek (Perbandingan Anggaran)</option>
								<option value="4" data-subtext="Menampilkan arus kas dan aliran keluar kas untuk spesifik periode">Arus Kas (Langsung)</option>
								<option value="10" data-subtext="Menampilkan arus kas dan aliran keluar kas untuk spesifik periode. Laporan ini terdiri dari 3 bagian: aktifitas operasi, Aktifitas invenstasi dan aktifitas">Rincian Arus Kas (Tak Langsung)</option>
								<option value="11" data-subtext="Menampilkan informasi rasio-rasio atas data perusahaan anda">Rasio Keuangan</option>
								<option value="12" data-subtext="laporan keuangan yang mencerminkan operasi perusahaan anda secara keseluruhan untuk periode tertentu. Terdiri dari Total pendapatan, laba kotor,">Fokus Keuangan</option>
								<option value="13" data-subtext="Menampilkan nilai laba ditahan hingga tahun terpilih">Laba Ditahan</option>
								<option value="14" data-subtext="laporan perubahan ekuitas pemilik">Perubahan Ekuitas Pemilik</option>
								<option value="15" data-subtext="Menampilkan grafik proyeksi ketersediaan atau kecukupan nilai kas di periode yang akan datang">Proyeksi Ketersediaan Kas</option>
								<option value="16" data-subtext="Menampilkan grafik garis perbandingan nilai akun yang di pilih">Grafik Perbandingan Nilai Akun</option>
								<option value="17" data-subtext="Menampilkan grafik nilai pendapatan dibandingkan dengan nilai pengeluaran">Grafik Pendapatan berbanding Biaya</option>
								<option value="18" data-subtext="Menampilkan nilai aset berbanding pada kewajiban untuk memperlihatkan nilai harta per bulan">Grafik Harta Bersih</option>
								<option value="19" data-subtext="Menampilkan nilai total aset likuid pada hutang">Grafik Rasio Likuiditas</option>
								<option value="20" data-subtext="Menampilkan nilai perbandingan dari laba bersih dibagi total aset">Grafik Pengembalian Aset</option>
								<option value="21" data-subtext="Menampilkan nilai perbandingan dari laba bersih dibagi modal yang disetor">Grafik Pengembalian pada Modal</option>
							</select>

							<div class="row pr-price d1">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<label>Dari Tanggal :</label>
												<div class="input-group input-group-sm mb-3">
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
													<span class="input-group-addon">s/d</span>
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label class="">Cabang : <code>*</code></label>
														<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
													</div>
													<div class="col-lg-6 vehicle" id="select1" style="display:none">
														<label class="">departemen: <code>*</code></label>
														<div class="form-group ">
															<div class="kt-input-icon kt-input-icon--right">
																<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="cabang" list="cabangname">
																<datalist id="cabangname">
																	<option value="-" disabled="" selected="">Cari/Pilih...</option>
																	<option value="Semua Cabang">Semua Cabang</option>
																	<option value="Kantor Pusat">Kantor Pusat</option>
																</datalist>
																<span class="kt-input-icon__icon kt-input-icon__icon--right">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
													</div>
													<div class="col-lg-6 vehicle" id="select2" style="display:none">
														<label class="">Proyek: <code>*</code></label>
														<div class="form-group ">
															<div class="kt-input-icon kt-input-icon--right">
																<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="cabang" list="cabangname">
																<datalist id="cabangname">
																	<option value="-" disabled="" selected="">Cari/Pilih...</option>
																	<option value="Semua Cabang">Semua Cabang</option>
																	<option value="Kantor Pusat">Kantor Pusat</option>
																</datalist>
																<span class="kt-input-icon__icon kt-input-icon__icon--right">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="checkbox"> Hanya Tampilkan Total
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan Akun Induk
																<span></span>
															</label>
															<label class="kt-checkbox ">
																<input type="checkbox" checked="checked"> Tampilkan Akun Anak
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan data dengan Saldo Nol
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan Saldo Akun Induk
																<span></span>
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d2">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<label>Per Tanggal :</label>
												<div class="input-group date">
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-12">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="checkbox"> Hanya Tampilkan Total
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan Akun Induk
																<span></span>
															</label>
															<label class="kt-checkbox ">
																<input type="checkbox" checked="checked"> Tampilkan Akun Anak
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan data dengan Saldo Nol
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan Saldo Akun Induk
																<span></span>
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d3">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<label>Dari Tanggal :</label>
												<div class="input-group input-group-sm mb-3">
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
													<span class="input-group-addon">s/d</span>
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<label>Dari Tanggal :</label>
												<div class="input-group input-group-sm mb-3">
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
													<span class="input-group-addon">s/d</span>
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label class="">Cabang : <code>*</code></label>
														<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
													</div>
													<div class="col-lg-6">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="checkbox"> Hanya Tampilkan Total
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan Akun Induk
																<span></span>
															</label>
															<label class="kt-checkbox ">
																<input type="checkbox" checked="checked"> Tampilkan Akun Anak
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan data dengan Saldo Nol
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan Saldo Akun Induk
																<span></span>
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d3"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d4">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Dari Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
													<div class="col-lg-6">
														<label>s/d Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d6">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>per Tahun</label>
														<input type="text" class="form-control form-control-sm datepicker">
													</div>
													<div class="col-lg-6">
														<label class="">Cabang : <code>*</code></label>
														<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="col-lg-6">
													<div class="kt-checkbox-list">
														<label class="kt-checkbox">
															<input type="checkbox"> Hanya Tampilkan Total
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan Akun Induk
															<span></span>
														</label>
														<label class="kt-checkbox ">
															<input type="checkbox" checked="checked"> Tampilkan Akun Anak
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan data dengan Saldo Nol
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan Saldo Akun Induk
															<span></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d6"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d7">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Tanggal :</label>
														<div class="input-group date">
															<input type="text" class="form-control" readonly="" placeholder="Select date" id="kt_datepicker_2">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar-check-o"></i>
																</span>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<label>Dan Tanggal :</label>
														<div class="input-group date">
															<input type="text" class="form-control" readonly="" placeholder="Select date" id="kt_datepicker_2">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar-check-o"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="col-lg-6">
													<div class="kt-checkbox-list">
														<label class="kt-checkbox">
															<input type="checkbox"> Hanya Tampilkan Total
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan Akun Induk
															<span></span>
														</label>
														<label class="kt-checkbox ">
															<input type="checkbox" checked="checked"> Tampilkan Akun Anak
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan data dengan Saldo Nol
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan Saldo Akun Induk
															<span></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d3"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d8">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Per Tanggal :</label>
														<div class="input-group date">
															<input type="text" class="form-control" readonly="" placeholder="Select date" id="kt_datepicker_2">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar-check-o"></i>
																</span>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="kt-checkbox-list">
															<label class="kt-checkbox">
																<input type="checkbox"> Hanya Tampilkan Total
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan Akun Induk
																<span></span>
															</label>
															<label class="kt-checkbox ">
																<input type="checkbox" checked="checked"> Tampilkan Akun Anak
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan data dengan Saldo Nol
																<span></span>
															</label>
															<label class="kt-checkbox">
																<input type="checkbox"> Tampilkan Saldo Akun Induk
																<span></span>
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d8"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d9">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row vehicle" id="data3" style="display:none">
													<div class="col-lg-12">
														<label>Dari :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<div class="col-lg-12">
														<label>Dari :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<div class="col-lg-12">
														<label class="">Cabang : <code>*</code></label>
														<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row vehicle" id="data4">
													<div class="col-lg-6">
														<label>Dari Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
													<div class="col-lg-6">
														<label class="">departemen: <code>*</code></label>
														<div class="form-group ">
															<div class="kt-input-icon kt-input-icon--right">
																<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="cabang" list="cabangname">
																<datalist id="cabangname">
																	<option value="-" disabled="" selected="">Cari/Pilih...</option>
																	<option value="Semua Cabang">Semua Cabang</option>
																	<option value="Kantor Pusat">Kantor Pusat</option>
																</datalist>
																<span class="kt-input-icon__icon kt-input-icon__icon--right">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row vehicle" id="data5">
													<div class="col-lg-6">
														<label>Dari Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
													<div class="col-lg-6">
														<label class="">Proyek: <code>*</code></label>
														<div class="form-group ">
															<div class="kt-input-icon kt-input-icon--right">
																<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="cabang" list="cabangname">
																<datalist id="cabangname">
																	<option value="-" disabled="" selected="">Cari/Pilih...</option>
																	<option value="Semua Cabang">Semua Cabang</option>
																	<option value="Kantor Pusat">Kantor Pusat</option>
																</datalist>
																<span class="kt-input-icon__icon kt-input-icon__icon--right">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="kt-checkbox-list">
														<label class="kt-checkbox">
															<input type="checkbox"> Hanya Tampilkan Total
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan Akun Induk
															<span></span>
														</label>
														<label class="kt-checkbox ">
															<input type="checkbox" checked="checked"> Tampilkan Akun Anak
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan data dengan Saldo Nol
															<span></span>
														</label>
														<label class="kt-checkbox">
															<input type="checkbox"> Tampilkan Saldo Akun Induk
															<span></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d10">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Dari Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
													<div class="col-lg-6">
														<label>s/d Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<label class="kt-checkbox">
													<input type="checkbox"> Tampilkan data dengan saldo Nol
													<span></span>
												</label>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d10"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d11">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="col-lg-6">
													<label>per Tahun</label>
													<input type="text" class="form-control form-control-sm datepicker">
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d11"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d12">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="col-lg-6">
													<label>per Tahun</label>
													<input type="text" class="form-control form-control-sm datepicker">
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d12"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d13">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="col-lg-6">
													<label>per Tahun</label>
													<input type="text" class="form-control form-control-sm datepicker">
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d13"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d14">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<label>Dari Tanggal :</label>
												<div class="input-group input-group-sm mb-3">
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
													<span class="input-group-addon">s/d</span>
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d15">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<label>Per Tanggal :</label>
												<div class="input-group date">
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<label class="">Cabang : <code>*</code></label>
												<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d15"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d16">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<label>Dari Tanggal :</label>
												<div class="input-group input-group-sm mb-3">
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
													<span class="input-group-addon">s/d</span>
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<label class="">Cabang : <code>*</code></label>
												<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_16"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d17">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<label>Dari Tanggal :</label>
												<div class="input-group input-group-sm mb-3">
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
													<span class="input-group-addon">s/d</span>
													<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<label class="">Cabang : <code>*</code></label>
												<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d17"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d18">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Dari Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
													<div class="col-lg-6">
														<label>s/d Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d18"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d19">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Dari Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
													<div class="col-lg-6">
														<label>s/d Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_19"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d20">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Dari Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
													<div class="col-lg-6">
														<label>s/d Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d20"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>

							<div class="row pr-price d21">
								<div class="col-xl-8">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Dari Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
													<div class="col-lg-6">
														<label>s/d Periode</label>
														<div class="row">
															<select class="form-control kt-selectpicker col-lg-6">
																<option>Januari</option>
																<option>Februari</option>
																<option>Maret</option>
																<option>April</option>
																<option>Mei</option>
																<option>Juni</option>
																<option>Juli</option>
																<option>Agustus</option>
																<option>September</option>
																<option>Oktober</option>
																<option>November</option>
																<option>Desember</option>
															</select>
															<input type="text" class="form-control form-control-sm col-lg-5 ml-3 datepicker">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__action text-center">
												<div class="btn-group" role="group">
													<button type="button" class="btn btn-primary">
														Tampilkan
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4">
									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
										<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Kolom</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group">
													<label>Parameter Kolom :</label>
													<table class="table no-border table-bordered table-hover">
														<tbody>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td></td>
															</tr>
														</tbody>
													</table>
													<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
															data-target="#kt_modal_tambah_d21"></i></button>
													<button type="button" class="btn btn-primary btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil-alt"></i></button>
													<button type="button" class="btn btn-warning btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Hapus"><i class="fa fa-minus text-white"></i></button>
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
	</div>

	<div class="modal fade" id="kt_modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Deskripsi</option>
						<option>Nilai</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Deskripsi</option>
						<option>Aktual</option>
						<option>Anggaran</option>
						<option>Variance</option>
						<option>% Var</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Deskripsi</option>
						<option>JAN-MAR</option>
						<option>APR-JUN</option>
						<option>JUL-SEP</option>
						<option>OKT-DES</option>
						<option>Total</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Deskripsi</option>
						<option>nilai</option>
						<option>% Of Total</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Keterangan</option>
						<option>nilai</option>
						<option>Kode Perkiraan Akun Perkiraan</option>
						<option>Nama Akun Perkiraan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Kategori Rasio</option>
						<option>Jenis Rasio</option>
						<option>Rata - Rata Perusahaan</option>
						<option>Rasio</option>
						<option>Tahun Sebelumnya</option>
						<option>Satuan</option>
						<option>Urutan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Katerangan</option>
						<option>Tahun Ini</option>
						<option>Tahun Lalu</option>
						<option>penambahan (%)</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Katerangan</option>
						<option>Tahun Ini</option>
						<option>Tahun Lalu</option>
						<option>penambahan (%)</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d15" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Tanggal</option>
						<option>Nilai</option>
						<option>Hari</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d16" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Akun Perkiraan</option>
						<option>Tanggal</option>
						<option>Nilai</option>
						<option>Pendapatan</option>
						<option>Beban Pokok Penjualan</option>
						<option>Beban</option>
						<option>Beban Lainnya</option>
						<option>Pendapatan Lainnya</option>
						<option>Total Pendapatan</option>
						<option>Total Biaya</option>
						<option>Bulan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Adalah</option>
						<option>Tidak mencangkup</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<select data-live-search="true" class="form-control kt-selectpicker">
						<option data-subtext="110101" value="Kas Kecil">Kas Kecil</option>
						<option data-subtext="110102" value="Bank">Bank</option>
						<option data-subtext="110201" value="Deposito Bank">Deposito Bank</option>
						<option data-subtext="110301" value="Piutang Usaha">Piutang Usaha</option>
						<option data-subtext="110302" value="Uang Muka Pembelian">Uang Muka Pembelian</option>
						<option data-subtext="110401" value="Persediaan">Persediaan</option>
						<option data-subtext="110402" value="Persediaan">Persediaan Terkirim</option>
						<option data-subtext="110501" value="Perlengkapan Kantor">Perlengkapan Kantor</option>
						<option data-subtext="110502" value="Sewa Gedung Dibayar Dimuka">Sewa Gedung Dibayar Dimuka</option>
						<option data-subtext="110503" value="Asuransi Dibayar Dimuka">Asuransi Dibayar Dimuka</option>
						<option data-subtext="110504" value="PPN Masukan">PPN Masukan</option>
						<option data-subtext="110505" value="PPh 23 Penjualan">PPh 23 Penjualan</option>
						<option data-subtext="110506" value="PPh Ps.4(2) Penjualan">PPh Ps.4(2) Penjualan</option>
						<option data-subtext="120001" value="Tanah">Tanah</option>
						<option data-subtext="120002" value="Gedung">Gedung</option>
						<option data-subtext="120003" value="Kendaraan">Kendaraan</option>
						<option data-subtext="120004" value="Peralatan">Peralatan</option>
						<option data-subtext="120005" value="Inventaris Kantor">Inventaris Kantor</option>
						<option data-subtext="12000601" value="Akumulasi Penyusutan Gedung">Akumulasi Penyusutan Gedung</option>
						<option data-subtext="12000602" value="Akumulasi Penyusutan Kendaraan">Akumulasi Penyusutan Kendaraan</option>
						<option data-subtext="12000603" value="Akumulasi Penyusutan Peralatan">Akumulasi Penyusutan Peralatan</option>
						<option data-subtext="210101" value="Hutang Usaha">Hutang Usaha</option>
						<option data-subtext="210102" value="Uang Muka Penjualan">Uang Muka Penjualan</option>
						<option data-subtext="210201" value="Uang Muka Penjualan">PPN Keluaran</option>
						<option data-subtext="210202" value="PPh 23 Pembelian">PPh 23 Pembelian</option>
						<option data-subtext="210203" value="Hutang Pembelian Belum Ditagih">Hutang Pembelian Belum Ditagih</option>
						<option data-subtext="210204" value="PPh Ps.4(2) Pembelian">PPh Ps.4(2) Pembelian</option>
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
						<option data-subtext="720001" value="Beban Bunga Pinjaman">Beban Bunga Pinjaman</option>
						<option data-subtext="720002" value="Beban Adm.Bank & Buku Cek/Giro">Beban Adm.Bank & Buku Cek/Giro</option>
						<option data-subtext="720003" value="Pajak Jasa Giro">Pajak Jasa Giro</option>
						<option data-subtext="720004" value="Laba/Rugi Terelasasi">Laba/Rugi Terelasasi</option>
						<option data-subtext="720005" value="Laba/Rugi Belum Terealisasi">Laba/Rugi Belum Terealisasi</option>
						<option data-subtext="720006" value="Laba/Rugi Disposisi Aset">Laba/Rugi Disposisi Aset</option>
						<option data-subtext="720007" value="Beban Diluar Usaha Lainnya">Beban Diluar Usaha Lainnya</option>
					</select>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d17" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Nama</option>
						<option>Tanggal</option>
						<option>Pendapatan</option>
						<option>Beban Pokok Penjualan</option>
						<option>Beban</option>
						<option>Beban Lainnya</option>
						<option>Pendapatan Lainnya</option>
						<option>Bulan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Adalah</option>
						<option>Tidak Mencangkup</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<select data-live-search="true" class="form-control kt-selectpicker">
						<option data-subtext="110101" value="Kas Kecil">Kas Kecil</option>
						<option data-subtext="110102" value="Bank">Bank</option>
						<option data-subtext="110201" value="Deposito Bank">Deposito Bank</option>
						<option data-subtext="110301" value="Piutang Usaha">Piutang Usaha</option>
						<option data-subtext="110302" value="Uang Muka Pembelian">Uang Muka Pembelian</option>
						<option data-subtext="110401" value="Persediaan">Persediaan</option>
						<option data-subtext="110402" value="Persediaan">Persediaan Terkirim</option>
						<option data-subtext="110501" value="Perlengkapan Kantor">Perlengkapan Kantor</option>
						<option data-subtext="110502" value="Sewa Gedung Dibayar Dimuka">Sewa Gedung Dibayar Dimuka</option>
						<option data-subtext="110503" value="Asuransi Dibayar Dimuka">Asuransi Dibayar Dimuka</option>
						<option data-subtext="110504" value="PPN Masukan">PPN Masukan</option>
						<option data-subtext="110505" value="PPh 23 Penjualan">PPh 23 Penjualan</option>
						<option data-subtext="110506" value="PPh Ps.4(2) Penjualan">PPh Ps.4(2) Penjualan</option>
						<option data-subtext="120001" value="Tanah">Tanah</option>
						<option data-subtext="120002" value="Gedung">Gedung</option>
						<option data-subtext="120003" value="Kendaraan">Kendaraan</option>
						<option data-subtext="120004" value="Peralatan">Peralatan</option>
						<option data-subtext="120005" value="Inventaris Kantor">Inventaris Kantor</option>
						<option data-subtext="12000601" value="Akumulasi Penyusutan Gedung">Akumulasi Penyusutan Gedung</option>
						<option data-subtext="12000602" value="Akumulasi Penyusutan Kendaraan">Akumulasi Penyusutan Kendaraan</option>
						<option data-subtext="12000603" value="Akumulasi Penyusutan Peralatan">Akumulasi Penyusutan Peralatan</option>
						<option data-subtext="210101" value="Hutang Usaha">Hutang Usaha</option>
						<option data-subtext="210102" value="Uang Muka Penjualan">Uang Muka Penjualan</option>
						<option data-subtext="210201" value="Uang Muka Penjualan">PPN Keluaran</option>
						<option data-subtext="210202" value="PPh 23 Pembelian">PPh 23 Pembelian</option>
						<option data-subtext="210203" value="Hutang Pembelian Belum Ditagih">Hutang Pembelian Belum Ditagih</option>
						<option data-subtext="210204" value="PPh Ps.4(2) Pembelian">PPh Ps.4(2) Pembelian</option>
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
						<option data-subtext="720001" value="Beban Bunga Pinjaman">Beban Bunga Pinjaman</option>
						<option data-subtext="720002" value="Beban Adm.Bank & Buku Cek/Giro">Beban Adm.Bank & Buku Cek/Giro</option>
						<option data-subtext="720003" value="Pajak Jasa Giro">Pajak Jasa Giro</option>
						<option data-subtext="720004" value="Laba/Rugi Terelasasi">Laba/Rugi Terelasasi</option>
						<option data-subtext="720005" value="Laba/Rugi Belum Terealisasi">Laba/Rugi Belum Terealisasi</option>
						<option data-subtext="720006" value="Laba/Rugi Disposisi Aset">Laba/Rugi Disposisi Aset</option>
						<option data-subtext="720007" value="Beban Diluar Usaha Lainnya">Beban Diluar Usaha Lainnya</option>
					</select>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d18" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Bulan</option>
						<option>Total Aset</option>
						<option>Total Kewajiban</option>
						<option>Harta Bersih</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d19" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Bulan</option>
						<option>Kas & Bank</option>
						<option>Hutang Usaha</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d20" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Bulan</option>
						<option>Laba/Rugi</option>
						<option>Total Aset</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_d21" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Penyaringan Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<label>Kolom :</label>
					<select class="form-control kt-selectpicker">
						<option>Bulan</option>
						<option>Laba/Rugi</option>
						<option>Harta Bersih</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama Dengan</option>
						<option>Tidak Sama Dengan</option>
						<option>Berisi Kata</option>
						<option>Tidak Berisi Kata</option>
						<option>Dimulai Dengan</option>
						<option>Tidak Dimulai Dengan</option>
						<option>Diakhiri Dengan</option>
						<option>Tidak Diakhiri Dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<div class="input-group date">
						<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="la la-calendar-check-o"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require '../layouts/footer.php' ?>
<script>
	$(function() {
		$('.pr-price').hide();
		$('.d1').show();
		$('#select').on("change", function() {
			$('.pr-price').hide();
			$('.d' + $(this).val()).show();
		}).val(1); // reflect the div shown
	});

	$('#select').on('change', function() {
		var value = $(this).val();
		if (value == 5) { // that is for Students
			window.location.href = 'pages.php';
		}
	});

	$('#select').change(function() {
		$('.vehicle').hide();
		$('#' + $(':selected', this).attr('name')).show();
	});

	$(".datepicker").datepicker({
		format: " yyyy",
		viewMode: "years",
		minViewMode: "years"
	});

</script>
<?php require '../layouts/foot.php' ?>
