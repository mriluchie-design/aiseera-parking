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
				Form Retur Pembelian
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
				<div class="dropdown-menu dropdown-menu-right" style="min-width:17rem !important">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-printer"></i>
								<span class="kt-nav__link-text">Cetak</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon-attachment"></i>
								<span class="kt-nav__link-text">Upload Dokumen</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon-suitcase"></i>
								<span class="kt-nav__link-text">Tambah Favorit</span>
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
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Barang/Jasa</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Pemasok : <code>*</code></label>
										<div class="form-group ">
											<div class="kt-input-icon kt-input-icon--right">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="akun" list="akunname">
												<datalist id="akunname">
													<option value="-" disabled="" selected="">Cari/Pilih...</option>
													<option value="Pelindo" label="110101">Pelindo</option>
													<option value="Chenwoo" label="110102">Chenwoo</option>
													<option value="Parahyangan" label="110201">Parahyangan</option>
												</datalist>
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<label>No. Retur #: <code>*</code></label>
										<div class="input-group">
											<div class="input-group-prepend" id="btnClick">
												<button class="btn btn-sm btn-success" type="button"><i class="text-white flaticon2-edit"></i></button>
											</div>
											<input id="1" type="text" class="form-control" placeholder="Search for...">
											<select id="2" data-size="7" data-live-search="true" class="form-control" style="display:none !important">
												<option value="1">Bank</option>
												<option value="2">Deposito Bank</option>
												<option value="3">Kas Kecil</option>
												<option value="4">Nomor Bukti Kas/Bank</option>
											</select>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Tanggal : <code>*</code></label>
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
										<div class="form-group">
											<label>Alamat :</label>
											<select class="form-control form-control-sm" >
												<option value="">Faktur</option>
												<option value="">Penerimaan</option>
												<option value="">Tanpa Faktur</option>
												<option value="">Uang Muka</option>
											</select>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Pajak :</label>
										<div class="kt-checkbox-inline">
											<label class="kt-checkbox">
												<input type="checkbox"> Kena Pajak
												<span></span>
											</label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Cabang :</label>
											<input type="text" class="form-control form-control-sm" placeholder="Kantor Pusat" disabled>
										</div>
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
									<label>Keterangan :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group">
									<label>Alamat :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
								</div>
							</div>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>

			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
			<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Barang</div><br>
				<div class="kt-portlet__body">
					<div class="kt-portlet__content">
						<div class="kt-input-icon kt-input-icon--right w-50 mb-3">
							<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih Tagihan..." name="pengiriman" list="pengirimanname">
							<datalist id="pengirimanname" class="none">
								<option value="-" disabled="" selected="">Cari/Pilih Tagihan...</option>
								<option value="Tidak Ditemukan Data Yang Cocok">Tidak Ditemukan Data Yang Cocok</option>
							</datalist>
							<span class="kt-input-icon__icon kt-input-icon__icon--right">
								<span><i class="la la-search"></i></span>
							</span>
						</div>
						<table class="table table-striped table-bordered table-hover table-checkable">
																			<thead>
																				<tr>
																					<th bgcolor="#f7fcff">No Barang</th>
																					<th bgcolor="#f7fcff">Kode #</th>
																					<th bgcolor="#f7fcff">Kuantitas</th>
																					<th bgcolor="#f7fcff">Satuan</th>
																					<th bgcolor="#f7fcff">@Harga</th>
																					<th bgcolor="#f7fcff">Diskon</th>
																					<th bgcolor="#f7fcff">Total Harga</th>
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
																				<tr>
																					<td></td>
																					<td></td>
																					<td></td>
																					<td></td>
																					<td></td>
																					<td></td>
																					<td></td>
																				</tr>
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

																		<div class="row">
														<div class="col-lg-6">
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #5867dd">
																<h5>Subtotal</h5>
																<label class="text-right">0</label>
															</div>
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #0abb87">
																<h5>Diskon <span class="kt-badge kt-badge--inline kt-badge--success">%</span></h5>
																<input type="number" class="form-control form-control-sm" placeholder="">
															</div>
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #ed1c24">
																<h5>Total</h5>
																<label class="text-right">0</label>
															</div>
														</div>
													</div>
					</div>
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
	$('#selectAll').click(function(e) {
		$(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
	});
</script>
<?php require '../layouts/foot.php' ?>
