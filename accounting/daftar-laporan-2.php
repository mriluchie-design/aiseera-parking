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
						<label class="">Kode Perkiraan :</label>
						<input type="text" class="form-control form-control-sm " placeholder="">
					</div>
					<div class="col-lg-3">
						<label class="">Nama :</label>
						<input type="text" class="form-control form-control-sm " placeholder="">
					</div>
					<div class="col-lg-3">
						<label>Tipe Akun:</label>
						<select class="form-control kt-selectpicker" multiple data-actions-box="true">
							<option>Akumulasi Penyusutan</option>
							<option>Aset Lainnya</option>
							<option>Aset Lancar Lainnya</option>
							<option>Aset Tetap</option>
							<option>Beban</option>
							<option>Beban Lainnya</option>
							<option>Beban Pokok Penjualan</option>
							<option>Hutang Usaha</option>
							<option>Kas & Bank</option>
							<option>Kewajiban Jangka Panjang</option>
							<option>Kewajiban Jangka Pendek</option>
							<option>Modal</option>
							<option>Pendapatan</option>
							<option>Pendapatan Lainnya</option>
							<option>Persediaan</option>
							<option>Piutang Usaha</option>
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
							<a href="#" class="kt-nav__link">
								<span class="kt-nav__link-text">Kas & Bank</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<span class="kt-nav__link-text">Piutang</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
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
					<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample1">
						<div class="card">
							<div class="card-header" id="headingOne">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
									Laba/Rugi (Standar)
									<small>Menampilkan laporan laba rugi untuk periode yg dipilih</small>
								</div>
							</div>
							<div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1" style="">
								<div class="card-body">
									<div class="row">
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<div class="card-title d-grid collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
									Laba/Rugi (Multi periode)
									<small>Menampilkan laba rugi bulanan pada rentang periode terpilih</small> </div>
							</div>
							<div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Cabang : <code>*</code></label>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree1">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
									Arus Kas (Tak Langsung)
									<small>Menampilkan arus kas dan aliran keluar kas untuk spesifik periode</small>
								</div>
							</div>
							<div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
																</div>
															</div>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree2">
								<div class="card-title collapsed d-grid" data-toggle="collapse" onclick="document.location = 'pages.php'" aria-expanded="false" aria-controls="collapseThree1">
									Proyeksi Kas Per Bulan
									<small>Menampilkan perkiraan nilai kas pada 5 bulan kedepan</small>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree3">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree1">
									Laba /Rugi (Kuartal)
									<small>Menampilkan perkiraan nilai kas pada 5 bulan kedepan</small>
								</div>
							</div>
							<div id="collapseThree3" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
																<label>Per Tahun</label>
																	<select class="form-control kt-selectpicker">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree5">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree1">
									Laba /Rugi Cabang
									<small>Menampilkan laba rugi dari cabang - cabang untuk periode yang dipilih</small>
								</div>
							</div>
							<div id="collapseThree5" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																		<input type="checkbox" checked="checked"> Tampilkan Akun Induk
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading6">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseThree1">
									Laba /Rugi Proyek
									<small>Menampilkan laba rugi per proyek untuk periode yang dipilih</small>
								</div>
							</div>
							<div id="collapse6" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																		<input type="checkbox" checked="checked"> Tampilkan Akun Induk
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading7">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree1">
									Neraca (Perbandingan Periode)
									<small>Menampilkan Neraca dibandingkan dengan periode lalu dari selisihnya ditampilkan dengan Persentase</small>
								</div>
							</div>
							<div id="collapse7" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Tanggal:</label>
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
																<label class="">Dan Tanggal : </label>
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
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Cabang : <code>*</code></label>
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
																		<input type="checkbox" checked="checked"> Tampilkan Akun Induk
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading8">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree1">
									Neraca (Induk Skontro)
									<small>Menampilkan Laoran Neraca secara horizontal</small>
								</div>
							</div>
							<div id="collapse8" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Per Tanggal:</label>
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
																<label class="">Cabang : <code>*</code></label>
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
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
															<div class="col-lg-12">
																<div class="kt-checkbox-list">
																	<label class="kt-checkbox">
																		<input type="checkbox"> Hanya Tampilkan Total
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox" checked="checked"> Tampilkan Akun Induk
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading9">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree1">
									Laba/Rugi Proyek (Perbandingan Anggaran)
									<small>Menampilkan Laba/Rugi per Proyek dengan penambahan kolom Anggaran dan Perbandingan dan juga persentasenya</small>
								</div>
							</div>
							<div id="collapse9" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Periode :</label>
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
																<input type="number" class="form-control form-control-sm col-lg-5 ml-3" placeholder="Cari/Pilih..." value="2020">
															</div>
															</div>
															<div class="col-lg-6">
																<label class="">Proyek : <code>*</code></label>
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
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
															<div class="col-lg-12">
																<div class="kt-checkbox-list">
																	<label class="kt-checkbox">
																		<input type="checkbox"> Hanya Tampilkan Total
																		<span></span>
																	</label>
																	<label class="kt-checkbox">
																		<input type="checkbox" checked="checked"> Tampilkan Akun Induk
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading10">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseThree1">
									Rincian Arus Kas (Tak Langsung)
									<small>Menampilkan arus kas dan aliran keluar kas spesifik periode. Laporan ini terdiri dari 3 bagian : aktifitas operasi, aktifitas investasi dan aktifitas</small>
								</div>
							</div>
							<div id="collapse10" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Dari Periode :</label>
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
																<input type="number" class="form-control form-control-sm col-lg-5 ml-3" placeholder="Cari/Pilih..." value="2020">
															</div>
															</div>
															<div class="col-lg-6">
																<label class="">s/d Periode </label>
																<div class="row">
																<select class="form-control kt-selectpicker col-lg-6">
																	<option>Januari</option>
																	<option selected>Februari</option>
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
																<input type="number" class="form-control form-control-sm col-lg-5 ml-3" placeholder="Cari/Pilih..." value="2020">
															</div>
														</div>
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
															<div class="col-lg-12">
																<div class="kt-checkbox-list">
																	<label class="kt-checkbox">
																		<input type="checkbox"> Tampilkan dara dengan Saldo Nol
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree11">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree11" aria-expanded="false" aria-controls="collapseThree1">
									Fokus Keuangan
									<small>Laporan keuangan yang mencerminkan operasi perusahaan anda secara keseluruhan untuk periode tertentu. Terdiri dari total pendapatan, laba kotor</small>
								</div>
							</div>
							<div id="collapseThree11" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
																<label>Per Tahun</label>
																	<select class="form-control kt-selectpicker">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree12">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree12" aria-expanded="false" aria-controls="collapseThree1">
									Perubahan Ekuitas Pemilik
									<small>Laporan perubahan ekuitas pemilik</small>
								</div>
							</div>
							<div id="collapseThree12" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree13">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree13" aria-expanded="false" aria-controls="collapseThree1">
									Neraca (Standar)
									<small>Menampilkan Neraca standar</small>
								</div>
							</div>
							<div id="collapseThree13" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree14">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree14" aria-expanded="false" aria-controls="collapseThree1">
									Neraca (Multi Periode)
									<small>Menampilkan Neraca per akhir bulan pada rentang periode terpilih</small>
								</div>
							</div>
							<div id="collapseThree14" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
																</div>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree15">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree15" aria-expanded="false" aria-controls="collapseThree1">
									Laba/Rugi (Perbandingan Periode)
									<small>Menampilkan laba rugi dibandingkan dengan periode lalu dari selisihnya ditampilkan dengan persentase</small>
								</div>
							</div>
							<div id="collapseThree15" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Cabang : <code>*</code></label>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree16">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree16" aria-expanded="false" aria-controls="collapseThree1">
									Laba/Rugi (Perbandingan Anggaran)
									<small>Menampilkan laba/rugi dengan penambahan anggaran dan perbandingannya dan juga persentasenya</small>
								</div>
							</div>
							<div id="collapseThree16" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label>Periode</label>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
																</div>
															</div>
															<div class="col-lg-6">
																<label class="">Cabang : <code>*</code></label>
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
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree17">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree17" aria-expanded="false" aria-controls="collapseThree1">
									Laba/Rugi Departemen
									<small>Menampilkan laba rugi per Departemen untuk periode yg dipilih</small>
								</div>
							</div>
							<div id="collapseThree17" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
															<div class="col-lg-6">
																<label class="">Cabang : <code>*</code></label>
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
																<label class="">Departemen : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="departemen" list="departemenname">
																		<datalist id="departemenname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																			<option value="Non Departemen">Non Departemen</option>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree18">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree18" aria-expanded="false" aria-controls="collapseThree1">
									Neraca Per Cabang
									<small>Menampilkan Neraca per masing-masing cabang</small>
								</div>
							</div>
							<div id="collapseThree18" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label>Per Tanggal</label>
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
																<label class="">Cabang: <code>*</code></label>
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
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
														<div class="form-group row">
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading20">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapseThree1">
									Neraca (Porsi)
									<small>Neraca dengan penambahan kolom persentase</small>
								</div>
							</div>
							<div id="collapse20" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label>Per Tanggal</label>
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
																<div class="form-group row">
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading21">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapseThree1">
									Laba/Rugi Departemen (Perbandingan Anggaran)
									<small>Menampilkan laba/rugi per departemen dengan penambahan kolom anggaran dan perbandingannya dan juga persentasenya</small>
								</div>
							</div>
							<div id="collapse21" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
															<div class="col-lg-6">
																<label>Periode : </label>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
																</div>
															</div>
															<div class="col-lg-6">
																<label class="">Departemen : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="departemen" list="departemenname">
																		<datalist id="departemenname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																			<option value="Non Departemen">Non Departemen</option>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading22">
								<div class="card-title d-grid collapsed" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapseTwo1">
									Arus Kas (Langsung)
									<small>Menampilkan arus kas aliran keluar kas untuk spesifik periode</small> </div>
							</div>
							<div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading23">
								<div class="card-title d-grid collapsed" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapseTwo1">
									Rasio Keuangan
									<small>Menampilkan Informasi rasio-rasio atas data perusahaan anda</small> </div>
							</div>
							<div id="collapse23" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
																<label>Per Tahun</label>
																	<select class="form-control kt-selectpicker">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading24">
								<div class="card-title d-grid collapsed" data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapseTwo1">
									Rasio Keuangan
									<small>Menampilkan nilai laba ditahan hingga tahun terpilih</small> </div>
							</div>
							<div id="collapse24" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<div class="form-group row">
																<label>Per Tahun</label>
																	<select class="form-control kt-selectpicker">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading25">
								<div class="card-title d-grid collapsed kt-font-primary" data-toggle="collapse" data-target="#collapse25" aria-expanded="false" aria-controls="collapseTwo1" style="font-weight: bold !important">
									Proyeksi Ketersediaan Kas
									<small>Menampilkan grafik proyeksi ketersediaan atau kecukupan nilai kas di periode yang akan datang</small> </div>
							</div>
							<div id="collapse25" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																</tbody>
															</table>
															<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
																	data-target="#kt_modal_tambah_grafik"></i></button>
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
						<div class="card">
							<div class="card-header" id="heading26">
								<div class="card-title d-grid collapsed kt-font-primary" data-toggle="collapse" data-target="#collapse26" aria-expanded="false" aria-controls="collapseTwo1" style="font-weight: bold !important">
									Grafik Perbandingan Nilai Akun
									<small>Menampilkan grafik garis perbandingan nilai akun yang di pilih</small> </div>
							</div>
							<div id="collapse26" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="heading27">
								<div class="card-title d-grid collapsed kt-font-primary" data-toggle="collapse" data-target="#collapse27" aria-expanded="false" aria-controls="collapseTwo1" style="font-weight: bold !important">
									Grafik Pendapatan berbanding Biaya
									<small>Menampilkan grafik nilai pendapatan dibandingkan dengan nilai pengeluaran</small> </div>
							</div>
							<div id="collapse27" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="heading28">
								<div class="card-title d-grid collapsed kt-font-primary" data-toggle="collapse" data-target="#collapse28" aria-expanded="false" aria-controls="collapseTwo1" style="font-weight: bold !important">
									Grafik Harta Bersih
									<small>Menampilkan nilai aset berbanding pada kewajiban untuk memperlihatkan nilai harta per bulan</small> </div>
							</div>
							<div id="collapse28" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="heading29">
								<div class="card-title d-grid collapsed kt-font-primary" data-toggle="collapse" data-target="#collapse29" aria-expanded="false" aria-controls="collapseTwo1" style="font-weight: bold !important">
									Grafik Rasio Likuiditas
									<small>Menampilkan nilai total aset likuid pada hutang</small>
								</div>
							</div>
							<div id="collapse29" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="heading30">
								<div class="card-title d-grid collapsed kt-font-primary" data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapseTwo1" style="font-weight: bold !important">
									Grafik Pengembalian Aset
									<small>Menampilkan nilai perbandingan dari laba bersih dibagi total aset</small>
								</div>
							</div>
							<div id="collapse30" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header" id="heading31">
								<div class="card-title d-grid collapsed kt-font-primary" data-toggle="collapse" data-target="#collapse31" aria-expanded="false" aria-controls="collapseTwo1" style="font-weight: bold !important">
									Grafik Pengembalian pada Modal
									<small>Menampilkan nilai perbandingan dari laba bersih dibagi modal yang disetor</small>
								</div>
							</div>
							<div id="collapse31" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
																	<select class="form-control kt-selectpicker col-lg-5 ml-3">
																		<option>2020</option>
																		<option>2019</option>
																		<option>2018</option>
																		<option>2017</option>
																		<option>2016</option>
																		<option>2015</option>
																		<option>2014</option>
																		<option>2013</option>
																	</select>
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
	<div class="modal fade" id="kt_modal_tambah_grafik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<?php require '../layouts/foot.php' ?>
