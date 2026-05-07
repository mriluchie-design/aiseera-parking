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
					Anggaran
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
		<div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Pengaturan Table
</button>
<form class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<label class="dropdown-item"><input type="checkbox" name="tahun" checked>&nbsp;Tahun</label>
<label class="dropdown-item"><input type="checkbox" name="#" checked>&nbsp;Nomor</label>
<label class="dropdown-item"><input type="checkbox" name="bulan" checked>&nbsp;Bulan</label>
<label class="dropdown-item"><input type="checkbox" name="tipe" checked>&nbsp;Tipe</label>
<label class="dropdown-item"><input type="checkbox" name="penganalisa" checked>&nbsp;Penganalisa</label>
<label class="dropdown-item"><input type="checkbox" name="catatan" checked>&nbsp;Catatan</label>
<label class="dropdown-item"><input type="checkbox" name="departemen" >&nbsp;Departemen</label>
<label class="dropdown-item"><input type="checkbox" name="proyek">&nbsp;Proyek</label>
</form>
</div>
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<a href="anggaran-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus"></i>Buat Anggaran</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			
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
																				 <label class="">Penganalisa:</label>
																				 <input type="text" class="form-control form-control-sm " placeholder="">
																			 </div>
																				<div class="col-lg-3">
																					<label class="">Bulan:</label>
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
														<div class="col-lg-3">
								                          <label>Tipe:</label>
																					<select class="form-control kt-selectpicker" multiple data-actions-box="true">
																						<option>Per Departemen</option>
																						<option>Per Proyek</option>
																						<option>Umum</option>
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
																					  <th bgcolor="#f7fcff" class="#">#</th>
																						<th bgcolor="#f7fcff" class="tahun">Tahun</th>
																						<th bgcolor="#f7fcff" class="bulan">Bulan</th>
																						<th bgcolor="#f7fcff" class="tipe">Tipe</th>
																						<th bgcolor="#f7fcff" class="penganalisa">Penganalisa</th>
																						<th bgcolor="#f7fcff" class="catatan">Catatan</th>
																						<th bgcolor="#f7fcff" class="departemen">Departemen</th>
																						<th bgcolor="#f7fcff" class="proyek">Proyek</th>
																						<th bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td class="tahun"></td>
																						<td class="tahun"></td>
																						<td class="bulan"></td>
																						<td class="tipe"></td>
																						<td class="penganalisa"></td>
																						<td class="catatan"></td>
																					  <td class="departemen"></td>
																					  <td class="proyek"></td>
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
