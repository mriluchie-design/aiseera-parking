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
				Form Pengepakan Barang
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
										<label class="">Tgl Pengiriman: <code>*</code></label>
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
										<label>No. Pengepakan#: <code>*</code></label>
										<div class="input-group">
											<div class="input-group-prepend" id="btnClick">
												<button class="btn btn-sm btn-success" type="button"><i class="text-white flaticon2-edit"></i></button>
											</div>
											<input id="1" type="text" class="form-control" placeholder="Search for...">
											<select id="2" data-size="7" data-live-search="true" class="form-control" style="display:none !important">
												<option value="1">Pengepakan Barang</option>
											</select>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Penanggung Jawab : <code>*</code></label>
										<div class="kt-input-icon kt-input-icon--right">
											<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="penanggungJawab" list="penanggungJawabname">
											<datalist id="penanggungJawabname">
												<option value="-" disabled="" selected="">Cari/Pilih...</option>
												<option value="Pelindo" label="110101">Pelindo</option>
												<option value="Ilugroup Multimedia" label="110102">Ilugroup Multimedia</option>
												<option value="Chenwoo" label="110201">Chenwoo</option>
											</datalist>
											<span class="kt-input-icon__icon kt-input-icon__icon--right">
												<span><i class="la la-search"></i></span>
											</span>
										</div>
									</div>
									<div class="col-lg-6">
										<label class="">Tgl Dokumen : <code>*</code></label>
										<div class="input-group date">
											<input type="text" class="form-control form-control-sm " placeholder="01/01/2020" value="01/01/2020" disabled>
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="la la-calendar-check-o"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kt-portlet__foot">
							<div class="kt-form__action text-center">
								<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Ambil
									</button>
									<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_faktur">Faktur Penjualan</a>
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_faktur">Pengiriman Pesanan</a>
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
								<label class="">Pengirim : <code>*</code></label>
								<div class="kt-input-icon kt-input-icon--right">
									<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="penanggungJawab" list="penanggungJawabname">
									<datalist id="penanggungJawabname">
										<option value="-" disabled="" selected="">Cari/Pilih...</option>
										<option value="Pelindo" label="110101">Pelindo</option>
										<option value="Ilugroup Multimedia" label="110102">Ilugroup Multimedia</option>
										<option value="Chenwoo" label="110201">Chenwoo</option>
									</datalist>
									<span class="kt-input-icon__icon kt-input-icon__icon--right">
										<span><i class="la la-search"></i></span>
									</span>
								</div>
							</div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group">
								<label>Cabang :</label>
								<input type="text" class="form-control form-control-sm" placeholder="Kantor Pusat" disabled>
							</div>
						</div>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>

			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Barang & Jasa</div><br>
				<div class="kt-portlet__body">
					<div class="kt-portlet__content">
						<table class="table table-striped table-bordered table-hover table-checkable">
							<thead>
								<tr>
									<th width="40%" bgcolor="#f7fcff">Pelanggan</th>
									<th bgcolor="#f7fcff">Alamat Pengiriman </th>
									<th bgcolor="#f7fcff">Nomor DO/Faktur</th>
									<th bgcolor="#f7fcff">Tgl DO/Faktur</th>

								</tr>
							</thead>
							<tbody>
								<tr>
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
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="modal fade" id="kt_modal_faktur" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Faktur Penjualan</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							</button>
						</div>
						<div class="modal-body">

							<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger mt-0">
								<div class="kt-ribbon__target">Rincian Barang/Jasa</div><br>
								<div class="kt-portlet__body">
									<div class="kt-portlet__content">
										<div class="form-group row">
											<div class="col-lg-6">
												<label class="">Dari Tanggal : <code>*</code></label>
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
												<label>Sampai Tangal: <code>*</code></label>
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
												<label class="">Filter Pelanggan : <code>*</code></label>
												<div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="penanggungJawab" list="penanggungJawabname">
													<datalist id="penanggungJawabname">
														<option value="-" disabled="" selected="">Cari/Pilih...</option>
														<option value="Pelindo" label="110101">Pelindo</option>
														<option value="Ilugroup Multimedia" label="110102">Ilugroup Multimedia</option>
														<option value="Chenwoo" label="110201">Chenwoo</option>
													</datalist>
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span><i class="la la-search"></i></span>
													</span>
												</div>
											</div>
											<div class="col-lg-6">
												<label class="">Filter Penjual : <code>*</code></label>
												<div class="kt-input-icon kt-input-icon--right">
													<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="penanggungJawab" list="penanggungJawabname">
													<datalist id="penanggungJawabname">
														<option value="-" disabled="" selected="">Cari/Pilih...</option>
														<option value="Pelindo" label="110101">Pelindo</option>
														<option value="Ilugroup Multimedia" label="110102">Ilugroup Multimedia</option>
														<option value="Chenwoo" label="110201">Chenwoo</option>
													</datalist>
													<span class="kt-input-icon__icon kt-input-icon__icon--right">
														<span><i class="la la-search"></i></span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<table class="table table-striped table-bordered table-hover table-checkable">
								<thead>
									<tr>
										<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
										<th bgcolor="#f7fcff">Pelanggan</th>
										<th bgcolor="#f7fcff">Alamat Pengiriman</th>
										<th bgcolor="#f7fcff">No.Faktur</th>
										<th bgcolor="#f7fcff">Tgl. Faktur</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>

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
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Lanjut</button>
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
