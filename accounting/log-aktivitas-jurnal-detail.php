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
				JV.2020.01.00001
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
				<div class="col-xl-12">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">jurnal Umum</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Tanggal </label>
										<div class="input-group date">
										<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="20/01/2020" id="kt_datepicker_2">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-calendar-check-o"></i>
											</span>
										</div>
										</div>									</div>
									<div class="col-lg-6">
										<label>Nomor # </label>
										<input type="text" class="form-control form-control-sm " placeholder="JV.2020.01.00001" disabled>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Tipe Transaksi</label>
										<input type="text" class="form-control form-control-sm " placeholder="Pencatatan Beban" disabled>
									</div>
									<div class="col-lg-6">
										<label class="">No. Trans #</label>
										<input type="text" class="form-control form-control-sm " placeholder="EXP.2020.01.00001" disabled>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Tampilkan</label>
										<select class="form-control kt-selectpicker">
											<option>Semua Perubahan</option>
											<option>Data Awal</option>
										</select>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Anggaran</div><br>
				<div class="kt-portlet__body">
					<div class="kt-portlet__content">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="text-left" bgcolor="#f7fcff">Beban/Pendapatan</th>
									<th class="text-left" bgcolor="#f7fcff">Nama Perkiraan</th>
									<th class="text-right" bgcolor="#f7fcff">Debit</th>
									<th class="text-right" bgcolor="#f7fcff">Kredit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="4"><h6>Per 16 Jan 2020 15:46:19 (Aktif)</h6>
									<label>Pengguna : Nursiah</label></td>
								</tr>
								<tr>
									<td>5101</td>
									<td>Beban Pokok Penjualan</td>
									<td class="text-right">100,000</td>
									<td></td>
								</tr>
								<tr>
									<td>210201</td>
									<td>PPN Keluaran</td>
									<td></td>
									<td class="text-right">100,000</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th></th>
									<th></th>
									<th class="text-right"><h6>100,000</h6></th>
									<th class="text-right"><h6>100,000</h6></th>
								</tr>
							</tfoot>
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
