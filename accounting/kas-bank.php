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
						<li class="kt-nav__item kt-nav__item">
							<a href="laporan-transaksi.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Transaksi</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="daftar-laporan.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Keuangan</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="buku-besar.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Buku Besar</span>
							</a>
						</li>
						<li class="kt-nav__item kt-nav__item--active">
							<a href="kas-bank.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Kas & Bank</span>
							</a>
						</li>
						<!--<li class="kt-nav__item">
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
						</li>-->
					</ul>
				</div>
				<div class="col-xl-10" style="height:500px; overflow-y:scroll;">
					<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample1">
						<div class="card">
							<div class="card-header" id="headingOne">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
									History Bank
									<small>Laporan Histori Bank</small>
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
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_histori"></i></button>
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
									Transaksi Bank Terekonsiliasi
									<small>Laporan Transaksi Bank yang Telah di Rekonsiliasi</small> </div>
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
														<div class="kt-portlet__content">
															<label>Dari Tanggal :</label>
															<div class="input-group input-group-sm mb-3">
																<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
																<span class="input-group-addon">s/d</span>
																<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															</div>
															<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																	<label class="">Kas/Bank : <code>*</code></label>
																	<div class="form-group ">
																		<div class="kt-input-icon kt-input-icon--right">
																			<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																			<datalist id="kasname">
																				<option value="-" disabled="" selected="">Cari/Pilih...</option>
																					<option value="Kas Kecil" label="110101">Kas Kecil</option>
																					<option value="Bank" label="110102">Bank</option>
																					<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_Terekonsiliasi"></i></button>
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
									Transaksi Bank belum Terekonsiliasi
									<small>Laporan Transaksi Bank yang belum di Rekonsiliasi</small>
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
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
																		</datalist>
																		<span class="kt-input-icon__icon kt-input-icon__icon--right">
																			<span><i class="la la-search"></i></span>
																		</span>
																	</div>
																</div>`
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
																	data-target="#kt_modal_tambah_belum_Terekonsiliasi"></i></button>
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
									Ringkasan Pembayaran per Bank
									<small>Laporan Ringkasan Pembayaran per Bank</small>
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
																		<label class="">Kas/Bank : <code>*</code></label>
																		<div class="form-group ">
																			<div class="kt-input-icon kt-input-icon--right">
																				<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																				<datalist id="kasname">
																					<option value="-" disabled="" selected="">Cari/Pilih...</option>
																						<option value="Kas Kecil" label="110101">Kas Kecil</option>
																						<option value="Bank" label="110102">Bank</option>
																						<option value="Deposito Bank" label="110201">Deposito Bank</option>
																				</datalist>
																				<span class="kt-input-icon__icon kt-input-icon__icon--right">
																					<span><i class="la la-search"></i></span>
																				</span>
																			</div>
																		</div>`
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
																		data-target="#kt_modal_tambah_ringkasan"></i></button>
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
								<div class="card-title collapsed d-grid kt-font-danger" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree1">
									Ringkasan Penerimaan per Bank
									<small>Laporan Ringkasan Penerimaan per Bank</small>
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
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_ringkasan"></i></button>
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
									Giro Mundur (Belum Jatuh Tempo)
									<small>Laporan daftar cek yang belum jatuh tempo</small>
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
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_giro"></i></button>
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
									Arus Kas per Akun
									<small>laporan Arus Kas untuk rincian per akun pengeluaran/pemasukan</small>
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
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_arus"></i></button>
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
									Rincian Pembayaran per Bank
									<small>Laporan Rincian Pembayaran per Bank</small>
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
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_rincian"></i></button>
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
									Rincian Penerimaan per Bank
									<small>Laporan Rincian Penerimaan per Bank</small>
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
																<label class="">Dari:</label>
																<div class="input-group input-group-sm mb-3">
																	<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
																	<span class="input-group-addon">s/d</span>
																	<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
																</div>
															</div>
															<div class="col-lg-6">
																<label class="">Cabang : <code>*</code></label>
																<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
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
																	<tr>
																		<td></td>
																	</tr>
																	<tr>
																		<td></td>
																	</tr>
																</tbody>
															</table>
															<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
																	data-target="#kt_modal_tambah_rincian"></i></button>
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
									Daftar Kas
									<small>Laporan Daftar Akun Kas dan Bank</small>
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
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_kas"></i></button>
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
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Rekening Koran
									<small>Menampilkan rincian rekening koran atas bank dalam rentang waktu tertentu</small>
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
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_rekening"></i></button>
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
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree11" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Ringkasan Daftar Pembayaran
									<small>Laporan yang berisi ringkasan daftar pembayaran</small>
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
																</tbody>
															</table>
															<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
																	data-target="#kt_modal_tambah_daftar"></i></button>
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
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree12" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Ringkasan Daftar Penerimaan
									<small>Laporan yang berisi ringkasan daftar penerimaan</small>
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
																</tbody>
															</table>
															<button type="button" class="btn btn-success btn-sm btn-icon" data-container="body" data-toggle="kt-tooltip" data-placement="top" title="Tambah"><i class="fa fa-plus" data-toggle="modal"
																	data-target="#kt_modal_tambah_daftar"></i></button>
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
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree13" aria-expanded="false" aria-controls="collapseThree1" style="font-weight:bold">
									Rincian Beban Pembayaran
									<small>Laporan yang berisi rincian beban pembayaran</small>
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
																<label class="">Kas/Bank : <code>*</code></label>
																<div class="form-group ">
																	<div class="kt-input-icon kt-input-icon--right">
																		<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kas" list="kasname">
																		<datalist id="kasname">
																			<option value="-" disabled="" selected="">Cari/Pilih...</option>
																				<option value="Kas Kecil" label="110101">Kas Kecil</option>
																				<option value="Bank" label="110102">Bank</option>
																				<option value="Deposito Bank" label="110201">Deposito Bank</option>
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
																	data-target="#kt_modal_tambah_beban"></i></button>
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

	<div class="modal fade" id="kt_modal_tambah_histori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Kode</option>
						<option>Nama</option>
						<option>Saldo Awal</option>
						<option>Tanggal</option>
						<option>No. Bukti#</option>
						<option>No. Trans#</option>
						<option>Tipe Transaksi</option>
						<option>Keterangan</option>
						<option>Debit</option>
						<option>Kredit</option>
						<option>Saldo Akhir</option>
						<option>Kode Perkiraan</option>
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

	<div class="modal fade" id="kt_modal_tambah_Terekonsiliasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Kode</option>
						<option>Nama</option>
						<option>Tanggal Rekonsiliasi</option>
						<option>No.Trans #</option>
						<option>Tipe Transaksi</option>
						<option>Keterangan</option>
						<option>Nilai</option>
						<option>Referensi</option>
						<option>Kode Perkiraan</option>
						<option>Debit</option>
						<option>Kredit</option>
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

	<div class="modal fade" id="kt_modal_tambah_belum_Terekonsiliasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Kode</option>
						<option>Nama</option>
						<option>Bagian</option>
						<option>Tanggal</option>
						<option>Transaksi</option>
						<option>Nilai</option>
						<option>Referensi</option>
						<option>Kode Perkiraan</option>
						<option>Debit</option>
						<option>Kredit</option>
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

	<div class="modal fade" id="kt_modal_tambah_ringkasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Nama Akun Perkiraan</option>
						<option>Tanggal</option>
						<option>No Cek #</option>
						<option>Catatan</option>
						<option>Jumlah</option>
						<option>Kurs</option>
						<option>Mata Uang</option>
						<option>Kas/Bank</option>
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

	<div class="modal fade" id="kt_modal_tambah_giro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Tgl Transaksi</option>
						<option>Tanggal Cek</option>
						<option>Tipe Transaksi</option>
						<option>No. Cek</option>
						<option>Pelanggan/Pemasok</option>
						<option>Terima</option>
						<option>Bayar</option>
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

	<div class="modal fade" id="kt_modal_tambah_arus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Tipe Transaksi</option>
						<option>No. Trans #</option>
						<option>Keterangan</option>
						<option>Nilai (Domestik)</option>
						<option>Nama Akun Perkiraan</option>
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

	<div class="modal fade" id="kt_modal_tambah_rincian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>No Cek #</option>
						<option>Kode Perkiraan</option>
						<option>Nama</option>
						<option>Keterangan Pembayaran</option>
						<option>Jumlah</option>
						<option>Mata Uang</option>
						<option>Kas/Bank</option>
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

	<div class="modal fade" id="kt_modal_tambah_kas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Kode Perkiraan</option>
						<option>Nama</option>
						<option>Saldo (per Mata Uang)</option>
						<option>Saldo</option>
						<option>Negara/Mata Uang</option>
						<option>LFT</option>
						<option>RGT</option>
					</select>
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<label>Operator :</label>
					<select class="form-control kt-selectpicker">
						<option>Sama dengan</option>
						<option>Tidak sama dengan</option>
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

	<div class="modal fade" id="kt_modal_tambah_rekening" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Kode</option>
						<option>Nama</option>
						<option>Tanggal</option>
						<option>Keterangan</option>
						<option>Mutasi</option>
						<option>Tipe Mutasi</option>
						<option>Saldo</option>
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

	<div class="modal fade" id="kt_modal_tambah_daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>No Cek #</option>
						<option>Kas/Bank</option>
						<option>Nilai</option>
						<option>Kurs</option>
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

	<div class="modal fade" id="kt_modal_tambah_beban" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
						<option>Nomor # Pembayaran</option>
						<option>Tanggal pembayaran</option>
						<option>Kas/Bank</option>
						<option>Rincian Pembayaran</option>
						<option>Nilai</option>
						<option>Rincian Catatan Detail</option>
						<option>Tipe</option>
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

</div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
