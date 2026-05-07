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
				Form Anggaran
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
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">jurnal Umum</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Bulan : <code>*</code></label>
										<select class="form-control kt-selectpicker">
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
											<option>Desemeber</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label>Tahun : <code>*</code></label>
										<input type="Number" class="form-control form-control-sm " placeholder="2020" value="2020">
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Tipe : <code>*</code></label>
										<select class="form-control kt-selectpicker">
											<option>Umum</option>
											<option>Per Departemen</option>
											<option>Per Proyek</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label class="">Tipe : <code>*</code></label>
										<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
											<optgroup label="Pendapatan" class="a">
												<option data-subtext="400001" value="penjualan">Penjualan</option>
												<option data-subtext="400002" value="Pendapatan Usaha">Pendapatan Usaha</option>
												<option data-subtext="400003" value="Retur Penjualan">Retur Penjualan</option>
												<option data-subtext="400004" value="Diskon Penjualan">Diskon Penjualan</option>
											</optgroup>
											<optgroup label="Beban Pokok Penjualan" class="a">
												<option data-subtext="5101" value="Beban Pokok Penjualan">Beban Pokok Penjualan</option>
											</optgroup>
											<optgroup label="Beban" class="a">
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
											</optgroup>
											<optgroup label="Beban Lainnya" class="a">
												<option data-subtext="720001" value="Beban Bunga Pinjaman">Beban Bunga Pinjaman</option>
												<option data-subtext="720002" value="Beban Adm.Bank & Buku Cek/Giro">Beban Adm.Bank & Buku Cek/Giro</option>
												<option data-subtext="720003" value="Pajak Jasa Giro">Pajak Jasa Giro</option>
												<option data-subtext="720004" value="Laba/Rugi Terelasasi">Laba/Rugi Terelasasi</option>
												<option data-subtext="720005" value="Laba/Rugi Belum Terealisasi">Laba/Rugi Belum Terealisasi</option>
												<option data-subtext="720006" value="Laba/Rugi Disposisi Aset">Laba/Rugi Disposisi Aset</option>
												<option data-subtext="720007" value="Beban Diluar Usaha Lainnya">Beban Diluar Usaha Lainnya</option>
											</optgroup>
										</select>
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
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#kt_modal_ambil">Favorit</a>
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
									<label>Catatan :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group">
									<label>Penganalisa :</label>
									<input type="text" class="form-control form-control-sm " placeholder="">
								</div>
							</div>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>

			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Anggaran</div><br>
				<div class="kt-portlet__body">
					<div class="kt-portlet__content">
						<table class="table table-striped table-bordered table-hover table-checkable">
							<thead>
								<tr>
									<th width="70%" bgcolor="#f7fcff">Beban/Pendapatan</th>
									<th bgcolor="#f7fcff">Kode</th>
									<th bgcolor="#f7fcff">Anggaran</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Anggaran</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<form class="kt-form">
						<div class="form-group row">
							<div class="col-lg-6">
							 <label class="">Beban/Pendapatan:</label>
							 <input id="get_id_val" value="" type="text" class="form-control form-control-sm " placeholder="" disabled>
						 </div>
							<div class="col-lg-6">
							 <label class="">Anggran:</label>
							 <div class="input-group date">
								<input type="number" class="form-control form-control-sm">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-money"></i>
									</span>
								</div>
							 </div>
						 </div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
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

	$('#selectAll').click(function (e) {
    $(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
});

$('#tipe').change(function(){
  //this is just getting the value that is selected
	var select = $(this).find('option:selected').val()
    $('#get_id_val').val(select)
  $('.modal').modal('show');
});
</script>
<?php require '../layouts/foot.php' ?>
