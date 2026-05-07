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
					Pencatatan Gaji
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<a href="pencatatan-gaji-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus"></i>Buat Pencatatan Beban</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pengaturan kolom
</button>
<form class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<label class="dropdown-item"><input type="checkbox" name="nomor" checked>Nomor</label>
<label class="dropdown-item"><input type="checkbox" name="tanggal" checked>Tanggal</label>
<label class="dropdown-item"><input type="checkbox" name="JatuhTempo" checked>Jatuh Tempo</label>
<label class="dropdown-item"><input type="checkbox" name="total" checked>Total</label>
<label class="dropdown-item"><input type="checkbox" name="dibayar" checked>Dibayar</label>
<label class="dropdown-item"><input type="checkbox" name="TipePembayaran" checked>Tipe Pembayaran</label>
<label class="dropdown-item"><input type="checkbox" name="status" checked>Status</label>
<label class="dropdown-item"><input type="checkbox" name="cabang" checked>Cabang</label>
<label class="dropdown-item"><input type="checkbox" name="tahun" checked>Tahun</label>
<label class="dropdown-item"><input type="checkbox" name="JatuhTempoPPh" checked>Jatuh Tempo PPh</label>
<label class="dropdown-item"><input type="checkbox" name="PremiKesehatan" checked>Premi Kesehatan</label>
<label class="dropdown-item"><input type="checkbox" name="KelebihanPajak" checked>Kelebihan Pajak</label>
<label class="dropdown-item"><input type="checkbox" name="JatuhTempoPremiKesehatan" checked>Jatuh Tempo Premi Kesehatan</label>
<label class="dropdown-item"><input type="checkbox" name="JatuhTempoPremiPensiun" checked>Jatuh Tempo Premi Pensiun</label>
<label class="dropdown-item"><input type="checkbox" name="PajakPenghasilan" checked>Pajak Penghasilan</label>
<label class="dropdown-item"><input type="checkbox" name="PendapatanBruto" checked>Pendapatan Bruto</label>
<label class="dropdown-item"><input type="checkbox" name="pensiun" checked>Pensiun/JKK/JKM</label>
<label class="dropdown-item"><input type="checkbox" name="GajiDibayarkan" checked>Gaji Dibayarkan</label>
<label class="dropdown-item"><input type="checkbox" name="keterangan">Keterangan</label>
<label class="dropdown-item"><input type="checkbox" name="PembuatData" checked>Pembuat Data</label>
</form>
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

															<div class="kt-portlet" id = "login_Box_Div" >
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
																				 <label class="">Nomor:</label>
																				 <input type="text" class="form-control form-control-sm " placeholder="">
																			 </div>
																				<div class="col-lg-3">
																				 <label class="">Tanggal:</label>
																				 <div class="input-group date">
																				 	<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date" id="kt_datepicker_2">
																				 	<div class="input-group-append">
																				 		<span class="input-group-text">
																				 			<i class="la la-calendar-check-o"></i>
																				 		</span>
																				 	</div>
																				 </div>
																			 </div>
								                        <div class="col-lg-3">
								                          <label class="">Jatuh Tempo :</label>
																					<div class="input-group date">
																					 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="Select date" id="kt_datepicker_2">
																					 <div class="input-group-append">
																						 <span class="input-group-text">
																							 <i class="la la-calendar-check-o"></i>
																						 </span>
																					 </div>
																					</div>
																			</div>
														<div class="col-lg-3">
								                          <label>Status:</label>
																					<select class="form-control kt-selectpicker" multiple data-actions-box="true">
															<option>Sebagian Dibayar</option>
															<option>Sedang Diproses</option>
															<option>Terbayar</option>
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

																	<div class="kt-portlet kt-portlet--mobile ">
																		<div class="kt-portlet__body">
																			<!--begin: Datatable -->
																			<table class="table table-striped table-bordered table-hover table-resizable">
																				<thead>
																					<tr>
																						<th bgcolor="#f7fcff" class="nomor">Nomor</th>
																						<th bgcolor="#f7fcff" class="tanggal">Tanggal</th>
																						<th bgcolor="#f7fcff" class="JatuhTempo">Jatuh Tempo</th>
																						<th bgcolor="#f7fcff" class="total">Total</th>
																						<th bgcolor="#f7fcff" class="dibayar">Dibayar</th>
																						<th bgcolor="#f7fcff" class="TipePembayaran">Tipe Pembayaran</th>
																						<th bgcolor="#f7fcff" class="status">Status</th>
																						<th bgcolor="#f7fcff" class="cabang">Cabang</th>
																						<th bgcolor="#f7fcff" class="tahun">Tahun</th>
																						<th bgcolor="#f7fcff" class="JatuhTempoPPh">Jatuh Tempo PPh</th>
																						<th bgcolor="#f7fcff" class="PremiKesehatan">Premi Kesehatan</th>
																						<th bgcolor="#f7fcff" class="KelebihanPajak">Kelebihan Pajak</th>
																						<th bgcolor="#f7fcff" class="JatuhTempoPremiKesehatan">Jatuh Tempo Premi Kesehatan</th>
																						<th bgcolor="#f7fcff" class="JatuhTempoPremiPensiun">Jatuh Tempo Premi Pensiun</th>
																						<th bgcolor="#f7fcff" class="PajakPenghasilan">Pajak Penghasilan</th>
																						<th bgcolor="#f7fcff" class="PendapatanBruto">Pendapatan Bruto</th>
																						<th bgcolor="#f7fcff" class="pensiun">Pensiun/JKK/JKM</th>
																						<th bgcolor="#f7fcff" class="GajiDibayarkan">Gaji Dibayarkan</th>
																						<th bgcolor="#f7fcff" class="periode">Periode</th>
																						<th bgcolor="#f7fcff" class="keterangan">Keterangan</th>
																						<th bgcolor="#f7fcff" class="PembuatData">Pembuat Data</th>
																						<th bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td class="nomor"></td>
																						<td class="tanggal"></td>
																						<td class="JatuhTempo"></td>
																						<td class="total"></td>
																						<td class="dibayar"></td>
																					  <td class="TipePembayaran"></td>
																					  <td class="status"></td>
																					  <td class="cabang"></td>
																						<td class="tahun"></td>
																						<td class="JatuhTempoPPh"></td>
																						<td class="PremiKesehatan"></td>
																						<td class="KelebihanPajak"></td>
																						<td class="JatuhTempoPremiKesehatan"></td>
																						<td class="JatuhTempoPremiPensiun"></td>
																						<td class="PajakPenghasilan"></td>
																						<td class="PendapatanBruto"></td>
																						<td class="pensiun"></td>
																						<td class="GajiDibayarkan"></td>
																						<td class="periode"></td>
																						<td class="keterangan"></td>
																						<td class="PembuatData"></td>
																						<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="penawaran-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="penawaran-nego.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-calculator"></i>
																				<span class="kt-nav__link-text">Negosiasi Biaya</span>
																			</a>
																		</li>

																		<li class="kt-nav__item">
																			<a href="penawaran-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-code-branch"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																				  </tr>
																</tbody>
																			</table>

																			<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
										  </div>
							</div>

<?php require '../layouts/footer.php' ?>
<script>
$("input:checkbox:not(:checked)").each(function() {
    var column = "table ." + $(this).attr("name");
    $(column).hide();
});

$("input:checkbox").click(function(){
    var column = "table ." + $(this).attr("name");
    $(column).toggle();
});

$(function() {
	var startX,
		 startWidth,
		 $handle,
		 $table,
		 pressed = false;

	$(document).on({
		mousemove: function(event) {
			if (pressed) {
				$handle.width(startWidth + (event.pageX - startX));
			}
		},
		mouseup: function() {
			if (pressed) {
				$table.removeClass('resizing');
				pressed = false;
			}
		}
	}).on('mousedown', '.table-resizable th', function(event) {
		$handle = $(this);
		pressed = true;
		startX = event.pageX;
		startWidth = $handle.width();

		$table = $handle.closest('.table-resizable').addClass('resizing');
	}).on('dblclick', '.table-resizable thead', function() {
		// Reset column sizes on double click
		$(this).find('th[style]').css('width', '');
	});
});
</script>
<?php require '../layouts/foot.php' ?>
