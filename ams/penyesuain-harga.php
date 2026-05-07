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
					Penyesuaian Harga/Diskon
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<a href="Penyesuaian-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus"></i>Buat Penawaran Penjualan</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pengaturan kolom
</button>
<form class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<label class="dropdown-item"><input type="checkbox" name="nomor" checked>Nomor#</label>
<label class="dropdown-item"><input type="checkbox" name="mulaiBerlaku" checked>Mulai Berlaku</label>
<label class="dropdown-item"><input type="checkbox" name="kategoriPenjualan" checked>Kategori Penjualan</label>
<label class="dropdown-item"><input type="checkbox" name="keterangan" checked>Keterangan</label>
<label class="dropdown-item"><input type="checkbox" name="cabang">Cabang</label>
<label class="dropdown-item"><input type="checkbox" name="tipePenyesuaian" checked>Tipe Penyesuaian</label>










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
																				 <label class="">Mulai Berlaku:</label>
																				 <div class="input-group date">
																				 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="20/01/2020" id="kt_datepicker_2">
																				 <div class="input-group-append">
																				 	<span class="input-group-text">
																				 		<i class="la la-calendar-check-o"></i>
																				 	</span>
																				 </div>
																				 </div>
																			 </div>
														<div class="col-lg-3">
								                          <label>Kategori Penjualan:</label>
																					<select class="form-control kt-selectpicker" multiple data-actions-box="true">
																						<option>Umum</option>
																					</select>
								                        </div>
																				<div class="col-lg-3">
																											<label>Tipe Penyesuaian:</label>
																											<select class="form-control kt-selectpicker" multiple data-actions-box="true">
																												<option>Diskon (%)</option>
																												<option>Harga</option>
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
																						<th bgcolor="#f7fcff" class="nomor">Nomor#</th>
																						<th bgcolor="#f7fcff" class="mulaiBerlaku">Mulai Berlaku</th>
																						<th bgcolor="#f7fcff" class="kategoriPenjualan">Kategori Penjualan</th>
																						<th bgcolor="#f7fcff" class="keterangan">Keterangan</th>
																						<th bgcolor="#f7fcff" class="cabang">Cabang</th>
																						<th bgcolor="#f7fcff" class="tipePenyesuaian">Tipe Penyesuaian</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td class="nomor"></td>
																						<td class="mulaiBerlaku"></td>
																						<td class="kategoriPenjualan"></td>
																						<td class="keterangan"></td>
																						<td class="cabang"></td>
																						<td class="tipePenyesuaian"></td>
																				  </tr>
																					<tr>
																						<td class="nomor"></td>
																						<td class="mulaiBerlaku"></td>
																						<td class="kategoriPenjualan"></td>
																						<td class="keterangan"></td>
																						<td class="cabang"></td>
																						<td class="tipePenyesuaian"></td>
																				  </tr>
																					<tr>
																						<td class="nomor"></td>
																						<td class="mulaiBerlaku"></td>
																						<td class="kategoriPenjualan"></td>
																						<td class="keterangan"></td>
																						<td class="cabang"></td>
																						<td class="tipePenyesuaian"></td>
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
