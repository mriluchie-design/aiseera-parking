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
				Kas Bank
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
						<li class="kt-nav__item">
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
						<li class="kt-nav__item kt-nav__item--active">
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
					<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample1">
						<div class="card">
							<div class="card-header" id="headingOne">
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
									Penjualan Per Pelanggan
									<small>Menampilkan daftar nilai penjualan per pelanggan</small>
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
																	data-target="#kt_modal_tambah_faktur"></i></button>
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
								<div class="card-title d-grid collapsed kt-font-danger" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
									Penjualan per Barang
									<small>Menampilkan daftar nilai penjualan per barang</small> </div>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_faktur"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
									Penjualan Barang per Pelanggan
									<small>Menampilkan nilai penjualan barang per pelanggan</small>
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
																	data-target="#kt_modal_tambah_umur"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree1">
									Penjualan Pelanggan per Barang
									<small>Menampilkan nilai penjualan pelanggan per barang</small>
								</div>
								<div id="collapseThree2" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample1">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-8">
												<!--begin::Portlet-->
												<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
													<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
													<div class="kt-portlet__body">
														<div class="kt-portlet__content">
															<div class="kt-portlet__content">
																<label>Dari Tanggal :</label>
																<div class="input-group input-group-sm mb-3">
																	<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
																	<span class="input-group-addon">s/d</span>
																	<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
																</div>
																<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																		data-target="#kt_modal_tambah_buku_besar"></i></button>
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
						<div class="card">
							<div class="card-header" id="headingThree3">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree1">
									Histori Proses Penjualan
									<small>Menampilkan rantai proses penjualan dari penawaran hingga pembayaran</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_histori_piutang"></i></button>
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
									Rincian Penjualan per Pelanggan
									<small>Menampilkan rincian nilai penjualan per pelanggan</small>
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
																	data-target="#kt_modal_tambah_rata_pembayaran"></i></button>
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
									Rincian Penjualan per Barang
									<small>Menampilkan rincian nilai penjualan per barang</small>
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
																	data-target="#kt_modal_rincian_piutang"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree1">
									Penjualan per Cabang
									<small>Menampilkan daftar nilai penjualan per cabang</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_grafik_umur_piutang"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseThree1">
									Penjualan Barang Per Cabang
									<small>Menampilkan nilai penjualan barang per cabang</small>
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
																<label class="">Dari:</label>
																<div class="input-group input-group-sm mb-3">
																	<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
																	<span class="input-group-addon">s/d</span>
																	<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
																</div>
																<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_rincian_buku_pembantu"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree1">
									Retur Penjualan per Barang
									<small>Menampilkan nilai retur penjualan per barang</small>
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
														<label>Dari Tanggal :</label>
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
																	data-target="#kt_modal_tambah_pernyataan_piutang"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Retur Penjualan per Barang
									<small>Menampilkan nilai retur penjualan per barang</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_grafik_pembayaran"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-primary" data-toggle="collapse" data-target="#collapseThree11" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Grafik Penjualan Bulanan
									<small>enampilkan grafik batang penjualan per bulan</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_bayar_faktur"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-primary" data-toggle="collapse" data-target="#collapseThree12" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Porsi Penjualan per Pelanggan
									<small>Menampilkan porsi penjualan dari pelanggan</small>
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
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_pembayar_pph"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-primary" data-toggle="collapse" data-target="#collapseThree13" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Porsi Penjualan per Barang
									<small>Menampilkan porsi penjualan dari barang</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_pembayar_pph"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapseThree14" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Penawaran per Pelanggan (Belum Proses)
									<small>Menampilkan nilai penawaran penjualan yang belum di proses per pelanggan</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_rincian_penerimaan"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapseThree15" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Penawaran per Barang (Belum Proses)
									<small>Menampilkan nilai penawaran penjualan yang belum di proses per barang</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																	data-target="#kt_modal_tambah_daftar_pelanggan"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapseThree16" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Pesanan per Pelanggan (Belum Proses)
									<small>Menampilkan nilai pesanan penjualan yang belum di proses per pelanggan</small>
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
																	data-target="#kt_modal_tambah_rincian_tukar"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapseThree17" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Pesanan per Barang (Belum Proses)
									<small>Menampilkan nilai pesanan penjualan yang belum di proses per barang</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
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
																	data-target="#kt_modal_tambah_limit_piutang"></i></button>
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
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree18" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Uang Muka Penjualan
									<small>Menampilkan daftar uang muka penjualan grup per pelanggan</small>
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
																	data-target="#kt_modal_tambah_limit_piutang"></i></button>
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
							<div class="card-header" id="headingThree19">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree19" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Target Penjualan Barang
									<small>Menampilkan target dan ril penjualan barang</small>
								</div>
							</div>
							<div id="collapseThree19" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<label>Per Tahun :</label>
														<input type="text" class="form-control form-control-sm datepicker">
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
																	data-target="#kt_modal_tambah_limit_piutang"></i></button>
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
							<div class="card-header" id="headingThree20">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree20" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Target Penjualan per Kategori
									<small>Menampilkan target dan ril penjualan per kategori barang</small>
								</div>
							</div>
							<div id="collapseThree20" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
														<label>Per Tahun :</label>
														<input type="text" class="form-control form-control-sm datepicker">
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
																	data-target="#kt_modal_tambah_limit_piutang"></i></button>
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

	<div class="modal fade" id="kt_modal_tambah_faktur" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Tipe</option>
						<option>Nomor #</option>
						<option>Tanggal</option>
						<option>Jatuh Tempo</option>
						<option>Keterangan</option>
						<option>Mata Uang</option>
						<option>Pelanggan</option>
						<option>Total</option>
						<option>Sisa Kredit</option>
						<option>Pembayaran</option>
						<option>Terima Bayar</option>
						<option>Retur</option>
						<option>Retur Pajak</option>
						<option>Piutang</option>
						<option>Piutang Pajak</option>
						<option>Umur (hr)</option>
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

	<div class="modal fade" id="kt_modal_tambah_umur" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Nomor #</option>
						<option>Tanggal</option>
						<option>Keterangan</option>
						<option>Mata Uang</option>
						<option>Pelanggan</option>
						<option>Total</option>
						<option>Pembayaran</option>
						<option>terima Pajak</option>
						<option>Retur</option>
						<option>Retur Pajak</option>
						<option>Piutang</option>
						<option>Piutang Pajak</option>
						<option>Umur (hr)</option>
						<option>Sisa Kredit</option>
						<option>Blm Tempo</option>
						<option>Blm Tempo (Pjk)</option>
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

	<div class="modal fade" id="kt_modal_tambah_buku_besar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Negara/Nama</option>
						<option>Nama</option>
						<option>Saldo Awal</option>
						<option>Faktur</option>
						<option>Pembayaran</option>
						<option>Retur</option>
						<option>Jurnal Umum</option>
						<option>Saldo Akhir</option>
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
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_histori_piutang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Nama Pelanggan</option>
						<option>Negara/Nama Mata Uang</option>
						<option>Nomor</option>
						<option>Tanggal</option>
						<option>Tipe Transaksi</option>
						<option>Deskripsi</option>
						<option>Nilai</option>
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
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_rata_pembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>ID Pelanggan pelanggan</option>
						<option>Nama Pelanggan</option>
						<option>Bayar (Hari)</option>
						<option>Syarat Bayar (Hari)</option>
						<option>Nunggak (Hari)</option>
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
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_grafik_umur_piutang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Mata Uang</option>
						<option>Grup Umur/option>
						<option>Piutang</option>
						<option>Piutang Pajak</option>
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
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_rincian_buku_pembantu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Nama Pelanggan</option>
						<option>Negara/Nama Mata Uang</option>
						<option>Nomor</option>
						<option>Tanggal</option>
						<option>Tipe Transaksi</option>
						<option>Deskripsi</option>
						<option>Piutang</option>
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
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_pernyataan_piutang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Pelanggan</option>
						<option>Mata Uang</option>
						<option>Nomor #</option>
						<option>Tanggal</option>
						<option>Tipe Transaksi</option>
						<option>Deskripsi</option>
						<option>Bertambah</option>
						<option>Berkurang</option>
						<option>Nilai</option>
						<option>Saldo</option>
						<option>Handphone</option>
						<option>Faximili</option>
						<option>Email</option>
						<option>Alamat</option>
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
					<input type="text" class="form-control form-control-sm" placeholder="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_grafik_pembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Basis Tgl</option>
						<option>Bulan</option>
						<option>Bayar (Hari)</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama dengan</option>
						<option>Tidak sama dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
						<option>Lebih Besar Dari</option>
						<option>Lebih Besar atau sama dengan </option>
						<option>Lebih Kecil Dari</option>
						<option>Lebih Kecil atau sama dengan </option>
						<option>Antara Kisaran</option>
						<option>Adalah Hari Ini</option>
						<option>Adalah Minggu Ini</option>
						<option>Dari Awal Minggu Sampai Hari Ini</option>
						<option>Adalah Bulan Ini</option>
						<option>Dari Awal Bulan Sampai Hari Ini</option>
						<option>Adalah Kuartal Ini</option>
						<option>Dari Awal Kuartal Sampai Hari Ini</option>
						<option>Adalah Tahun Ini</option>
						<option>Dari Awal Tahun Sampai Hari Ini</option>
						<option>Kemarin</option>
						<option>Minggu Lalu</option>
						<option>Dari Awal Minggu Lalu Sampai Hari Ini</option>
						<option>Bulan Lalu</option>
						<option>Dari Awal Bulan Lalu Sampai Hari Ini</option>
						<option>Kuartal Sebelum</option>
						<option>Dari Kuartal Sebelum Sampai Hari Ini</option>
						<option>Tahun Lalu</option>
						<option>Dari Awal Tahun Lalu Sampai Hari Ini</option>
						<option>Minggu Depan</option>
						<option>Empat Minggu Kemudian</option>
						<option>Bulan Depan</option>
						<option>Kuartal Selanjutnya</option>
						<option>Tahun Depan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<div class="input-group date">
						<input type="text" class="form-control" readonly="" placeholder="Select date" id="kt_datepicker_2">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="la la-calendar-check-o"></i>
							</span>
						</div>
					</div>				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_bayar_faktur" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Tanggal Faktur Penjualan</option>
						<option>Nomor # Faktur Penjualan</option>
						<option>Pelanggan</option>
						<option>Mata Uang</option>
						<option>No.Form</option>
						<option>Tgl Pembayaran</option>
						<option>Bank</option>
						<option>No.Cek</option>
						<option>Tanggal Cek</option>
						<option>Keterangan</option>
						<option>Total Faktur</option>
						<option>Total Pemotongan PPh23</option>
						<option>Pembayaran</option>
						<option>Negara/Nama Mata uang Penerimaan Penjualan</option>
						<option>Nama Pelanggan Penerimaan Penjualan</option>
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
					<div class="input-group date">
						<input type="text" class="form-control" readonly="" placeholder="Select date" id="kt_datepicker_2">
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="la la-calendar-check-o"></i>
							</span>
						</div>
					</div>				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_pembayar_pph" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Tanggal Faktur Penjualan</option>
						<option>Faktur Penjualan</option>
						<option>Pelanggan</option>
						<option>Mata Uang</option>
						<option>No. Form</option>
						<option>Tgl Pembayaran</option>
						<option>Bank</option>
						<option>No. Cek</option>
						<option>Tanggal Cek</option>
						<option>Keterangan</option>
						<option>PPh</option>
						<option>Bayar PPh</option>
						<option>NTPN</option>
						<option>Tgl Bayar PPh</option>
						<option>Tipe Pajak Pajak</option>
						<option>Nama Pelanggan Penerimaan Penjualan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama dengan</option>
						<option>Tidak sama dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
						<option>Lebih Besar Dari</option>
						<option>Lebih Besar atau sama dengan </option>
						<option>Lebih Kecil Dari</option>
						<option>Lebih Kecil atau sama dengan </option>
						<option>Antara Kisaran</option>
						<option>Adalah Hari Ini</option>
						<option>Adalah Minggu Ini</option>
						<option>Dari Awal Minggu Sampai Hari Ini</option>
						<option>Adalah Bulan Ini</option>
						<option>Dari Awal Bulan Sampai Hari Ini</option>
						<option>Adalah Kuartal Ini</option>
						<option>Dari Awal Kuartal Sampai Hari Ini</option>
						<option>Adalah Tahun Ini</option>
						<option>Dari Awal Tahun Sampai Hari Ini</option>
						<option>Kemarin</option>
						<option>Minggu Lalu</option>
						<option>Dari Awal Minggu Lalu Sampai Hari Ini</option>
						<option>Bulan Lalu</option>
						<option>Dari Awal Bulan Lalu Sampai Hari Ini</option>
						<option>Kuartal Sebelum</option>
						<option>Dari Kuartal Sebelum Sampai Hari Ini</option>
						<option>Tahun Lalu</option>
						<option>Dari Awal Tahun Lalu Sampai Hari Ini</option>
						<option>Minggu Depan</option>
						<option>Empat Minggu Kemudian</option>
						<option>Bulan Depan</option>
						<option>Kuartal Selanjutnya</option>
						<option>Tahun Depan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<div class="input-group date">
						<input type="text" class="form-control" readonly="" placeholder="Select date" id="kt_datepicker_2">
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

	<div class="modal fade" id="kt_modal_tambah_rincian_penerimaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>No.Faktur</option>
						<option>Tgl. Faktur</option>
						<option>Total Faktur</option>
						<option>Bayar</option>
						<option>Diskon</option>
						<option>Pembayaran</option>
						<option>No.Form</option>
						<option>Tgl Pembayaran</option>
						<option>Pelanggan</option>
						<option>Bank</option>
						<option>Mata Uang</option>
						<option>Nilai Pembayaran</option>
						<option>No. Cek Penerimaan Penjualan</option>
						<option>Tanggal Cek Penerimaan Penjualan</option>
						<option>Informasi Diskon</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama dengan</option>
						<option>Tidak sama dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
						<option>Lebih Besar Dari</option>
						<option>Lebih Besar atau sama dengan </option>
						<option>Lebih Kecil Dari</option>
						<option>Lebih Kecil atau sama dengan </option>
						<option>Antara Kisaran</option>
						<option>Adalah Hari Ini</option>
						<option>Adalah Minggu Ini</option>
						<option>Dari Awal Minggu Sampai Hari Ini</option>
						<option>Adalah Bulan Ini</option>
						<option>Dari Awal Bulan Sampai Hari Ini</option>
						<option>Adalah Kuartal Ini</option>
						<option>Dari Awal Kuartal Sampai Hari Ini</option>
						<option>Adalah Tahun Ini</option>
						<option>Dari Awal Tahun Sampai Hari Ini</option>
						<option>Kemarin</option>
						<option>Minggu Lalu</option>
						<option>Dari Awal Minggu Lalu Sampai Hari Ini</option>
						<option>Bulan Lalu</option>
						<option>Dari Awal Bulan Lalu Sampai Hari Ini</option>
						<option>Kuartal Sebelum</option>
						<option>Dari Kuartal Sebelum Sampai Hari Ini</option>
						<option>Tahun Lalu</option>
						<option>Dari Awal Tahun Lalu Sampai Hari Ini</option>
						<option>Minggu Depan</option>
						<option>Empat Minggu Kemudian</option>
						<option>Bulan Depan</option>
						<option>Kuartal Selanjutnya</option>
						<option>Tahun Depan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<input type="text" class="form-control form-control-sm">
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_daftar_pelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Kategori Pelanggan</option>
						<option>ID Pelanggan</option>
						<option>Nama</option>
						<option>Mata Uang Utama</option>
						<option>Saldo (Mata Uang)</option>
						<option>Limit Piutang</option>
						<option>Sisa Limit</option>
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
					<input type="text" class="form-control form-control-sm">
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success">Simpan</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_tambah_rincian_tukar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Nomor #</option>
						<option>Tanggal</option>
						<option>Tgl Tukar</option>
						<option>Jatuh Tempo</option>
						<option>Tenaga Penjual</option>
						<option>No Faktur</option>
						<option>Tgl Faktur</option>
						<option>Pelanggan</option>
						<option>Total Faktur</option>
						<option>Terhutang</option>
						<option>Umur (hr)</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama dengan</option>
						<option>Tidak sama dengan</option>
						<option>Kosong</option>
						<option>Tidak Kosong</option>
						<option>Lebih Besar Dari</option>
						<option>Lebih Besar atau sama dengan </option>
						<option>Lebih Kecil Dari</option>
						<option>Lebih Kecil atau sama dengan </option>
						<option>Antara Kisaran</option>
						<option>Adalah Hari Ini</option>
						<option>Adalah Minggu Ini</option>
						<option>Dari Awal Minggu Sampai Hari Ini</option>
						<option>Adalah Bulan Ini</option>
						<option>Dari Awal Bulan Sampai Hari Ini</option>
						<option>Adalah Kuartal Ini</option>
						<option>Dari Awal Kuartal Sampai Hari Ini</option>
						<option>Adalah Tahun Ini</option>
						<option>Dari Awal Tahun Sampai Hari Ini</option>
						<option>Kemarin</option>
						<option>Minggu Lalu</option>
						<option>Dari Awal Minggu Lalu Sampai Hari Ini</option>
						<option>Bulan Lalu</option>
						<option>Dari Awal Bulan Lalu Sampai Hari Ini</option>
						<option>Kuartal Sebelum</option>
						<option>Dari Kuartal Sebelum Sampai Hari Ini</option>
						<option>Tahun Lalu</option>
						<option>Dari Awal Tahun Lalu Sampai Hari Ini</option>
						<option>Minggu Depan</option>
						<option>Empat Minggu Kemudian</option>
						<option>Bulan Depan</option>
						<option>Kuartal Selanjutnya</option>
						<option>Tahun Depan</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Nilai :</label>
					<div class="input-group date">
						<input type="text" class="form-control" readonly="" placeholder="Select date" id="kt_datepicker_2">
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

	<div class="modal fade" id="kt_modal_tambah_limit_piutang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Kategori Pelanggan</option>
						<option>ID Pelanggan</option>
						<option>Nama</option>
						<option>Mata Uang Utama</option>
						<option>Saldo (Mata Uang)</option>
						<option>Pesanan</option>
						<option>Limit Piutang</option>
						<option>Sisa Limit</option>
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
					<div class="input-group date">
						<input type="text" class="form-control" readonly="" placeholder="Select date" id="kt_datepicker_2">
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
$(".datepicker").datepicker({
	format: " yyyy",
	viewMode: "years",
	minViewMode: "years"
});
</script>
<?php require '../layouts/foot.php' ?>
