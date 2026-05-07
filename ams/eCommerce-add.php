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
				Form Smartlink-eCommerce
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
				<div class="dropdown-menu dropdown-menu-right">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-reload"></i>
								<span class="kt-nav__link-text">Save & continue</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-power"></i>
								<span class="kt-nav__link-text">Save & exit</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-edit-interface-symbol-of-pencil-tool"></i>
								<span class="kt-nav__link-text">Save & edit</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-add-1"></i>
								<span class="kt-nav__link-text">Save & add new</span>
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
			<div class="row">
				<div class="col-xl-8">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Nama Toko: <code>*</code></label>
										<div class="row">
											<select class="form-control form-control-sm col-lg-5">
												<option disabled>Silahkan Pilih</option>
												<option>Tokopedia</option>
												<option>Shopee</option>
												<option>Bukalapak</option>
												<option>JD.ID</option>
												<option>Lazada</option>
												<option>Elevania</option>
												<option>Blibli</option>
											</select>
										<input type="text" class="form-control form-control-sm col-lg-6 ml-3" placeholder="">
									</div>
									</div>
									<div class="col-lg-6">
										<label>Penjualan Atas Cabang : <code>*</code></label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="cabang" list="cabangname">
												<datalist id="cabangname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
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
									<div class="col-lg-6">
										<label class="">Gudang Penjualan : <code>*</code></label>
										<div class="kt-radio-list">
											<label class="kt-radio">
												<input type="radio" name="radio1" checked> <div class="form-group ">
													<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="cabang" list="cabangname">
														<datalist id="cabangname">
															<option value="-" disabled="" selected="">Cari/Pilih...</option>
															<option value="Utama">Utama</option>
														</datalist>
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
												</div>
												<span></span>
											</label>
											<label class="kt-radio">
												<input type="radio" name="radio1"> Otomatis (Sesuai kecukupan stok gudang)
												<span></span>
											</label>
										</div>
									</div>
									<div class="col-lg-6">
										<label class="">Penjualan atas Pelanggan : </label>
										<div class="kt-radio-list">
											<label class="kt-radio">
												<input type="radio" name="radio2" checked> <div class="form-group ">
													<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Cari/kosongkan untuk dibuat otomatis" name="pelanggan" list="pelangganname">
														<datalist id="pelangganname">
															<option value="-" disabled="" selected="">Cari/kosongkan untuk dibuat otomatis</option>
														</datalist>
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>
												</div>
												<span></span>
											</label>
											<label class="kt-radio">
												<input type="radio" name="radio2">Sesuai pelanggan di e-Commerce
												<span></span>
											</label>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Kas/Bank Saldo e-Commerce: </label>
										<div class="form-group ">
									<div class="kt-input-icon kt-input-icon--right">
										<input type="text" class="form-control form-control-sm" placeholder="Cari/kosongkan untuk dibuat otomatis" name="akun" list="akunname">
										<datalist id="akunname">
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
									<div class="col-lg-6">
										<label class="">Pendapatan/Tagihan Ongkos Kirim : </label>
										<select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
														<option value="-" disabled="" selected="">Cari/kosongkan untuk dibuat otomatis</option>
														<optgroup label="Kewajiban Jangka Pendek" class="a">
															<option data-subtext="210201" value="PPN Keluaran">PPN Keluaran</option>
															<option data-subtext="210202" value="PPh 23 Pembelian">PPh 23 Pembelian</option>
															<option data-subtext="210203" value="Hutang Pembelian Belum Ditagih">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204" value="Diskon Penjualan">PPh Ps.2(4) Pembelian</option>
														</optgroup>
														<optgroup label="Pendapatan Lainnya" class="a">
															<option data-subtext="710001" value="Pendapatan Jasa Giro">Pendapatan Jasa Giro</option>
															<option data-subtext="710002" value="Pendapatan Bunga Deposito">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003" value="Pendapatan Bunga Deposito">Penjualan Persiapan / Perlengkapan </option>
															<option data-subtext="710004" value="Laba/Rugi Revaluasi Aset">Laba/Rugi Revaluasi Aset </option>
															<option data-subtext="710005" value="Pendapatan Diluar Usaha Lainnya">Pendapatan Diluar Usaha Lainnya </option>
														</optgroup>
													</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lain - Lain</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group">
									<label>Catatan :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
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

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
