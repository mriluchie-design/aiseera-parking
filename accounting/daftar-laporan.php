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
				Laporan Keuangan
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
						<li class="kt-nav__item kt-nav__item--active">
							<a href="daftar-laporan.php" class="kt-nav__link">
								<span class="kt-nav__link-text">Keuangan</span>
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
									Laba Rugi
									<small>Data Laba Rugi Perusahaan</small>
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
													<div class="form-group row">
													<div class="col-lg-8">
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														</div>
														<div class="col-lg-4">
																<label class="">Kantor : <code>*</code></label>
																<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                      <option value="2" selected>Semua</option>
                                     
                                  </select>
													</div>
													</div>
												<div class="kt-portlet__foot">
												<div class="kt-form__action text-center">
												<a href="laporan-laba-rugi.php" class="btn btn-info btn-md">
				Tampilkan Data&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-alt-circle-right"></i>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			</div>
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
							<div class="card-header" id="headingTwo">
								<div class="card-title d-grid collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
									Neraca
									<small>Data Neraca Perusahaan</small> </div>
							</div>
							<div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="kt-portlet__body">
													<div class="form-group row">
													<div class="col-lg-8">
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														</div>
														<div class="col-lg-4">
																<label class="">Kantor : <code>*</code></label>
																<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                      <option value="2" selected>Semua</option>
                                     
                                  </select>
													</div>
													</div>
												</div>
												<div class="kt-portlet__foot">
												<div class="kt-form__action text-center">
												<a href="laporan-neraca.php" class="btn btn-info btn-md">
				Tampilkan Data&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-alt-circle-right"></i>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
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
									Arus Kas
									<small>Data Arus Kas</small>
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
													<div class="form-group row">
													<div class="col-lg-8">
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														</div>
														<div class="col-lg-4">
																<label class="">Kantor : <code>*</code></label>
																<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                      <option value="2" selected>Semua</option>
                                     
                                  </select>
													</div>
													</div>
												</div>
												<div class="kt-portlet__foot">
												<div class="kt-form__action text-center">
												<a href="laporan-arus-kas.php" class="btn btn-info btn-md">
				Tampilkan Data&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-alt-circle-right"></i>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
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
							<div class="card-header" id="heading9">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseThree1">
									Daftar Akun Perkiraan
									<small>Laporan yang berisi daftar akun perkiraan</small>
								</div>
							</div>
							<div id="collapse9" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
												<div class="form-group row">
													<div class="col-lg-8">
														<label>Dari Tanggal :</label>
														<div class="input-group input-group-sm mb-3">
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
															<span class="input-group-addon">s/d</span>
															<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
														</div>
														</div>
														<div class="col-lg-4">
																<label class="">Kantor : <code>*</code></label>
																<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                      <option value="2" selected>Semua</option>
                                     
                                  </select>
													</div>
													</div>
												<div class="kt-portlet__foot">
												<div class="kt-form__action text-center">
												<a href="laporan-akun-perkiraan.php" class="btn btn-info btn-md">
				Tampilkan Data&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-alt-circle-right"></i>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
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
