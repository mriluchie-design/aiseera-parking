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
				Pemasok
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
			<button type="button" class="btn btn-label-danger btn-sm" id="buttonLogin" onclick="displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
			<div class="btn-group">
				<button type="button" class="btn btn-label-success">
					<i class="flaticon-settings-1"></i>
				</button>
				<button type="button" class="btn btn-label-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
								<i class="kt-nav__link-icon flaticon2-download-1"></i>
								<span class="kt-nav__link-text">Import Data</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon la la-external-link"></i>
								<span class="kt-nav__link-text">Eksport Data</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<a href="pemasok-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus"></i>Buat Pemasok</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Pengaturan kolom
				</button>
				<form class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="height:300px; overflow-x:scroll;">
					<label class="dropdown-item"><input type="checkbox" name="nama" checked>Nama</label>
					<label class="dropdown-item"><input type="checkbox" name="kategoriPemasok">Kategori Pemasok</label>
					<label class="dropdown-item"><input type="checkbox" name="mataUang">Mata Uang</label>
					<label class="dropdown-item"><input type="checkbox" name="syaratPembayaran">Syarat Pembayaran</label>
					<label class="dropdown-item"><input type="checkbox" name="kontakUtama" checked>Kontak Utama</label>
					<label class="dropdown-item"><input type="checkbox" name="kontaklainnya1">Kontak Lainnya #1</label>
					<label class="dropdown-item"><input type="checkbox" name="kontaklainnya2">Kontak Lainnya #2</label>
					<label class="dropdown-item"><input type="checkbox" name="kontaklainnya3">Kontak Lainnya #3</label>
					<label class="dropdown-item"><input type="checkbox" name="nonAktif">Non Aktif</label>
					<label class="dropdown-item"><input type="checkbox" name="idPemasok" checked>ID Pemasok</label>
					<label class="dropdown-item"><input type="checkbox" name="saldo" checked>Saldo</label>
					<label class="dropdown-item"><input type="checkbox" name="cabang">Cabang</label>
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
						<label class="">Nama:</label>
						<input type="text" class="form-control form-control-sm " placeholder="">
					</div>
					<div class="col-lg-3">
						<label class="">Kontak Utama:</label>
						<input type="text" class="form-control form-control-sm " placeholder="">
					</div>
					<div class="col-lg-3">
						<label>Kategori:</label>
						<div class="form-group ">
							<div class="kt-input-icon kt-input-icon--right">
								<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kategori" list="kategoriname">
								<datalist id="kategoriname">
									<option value="-" disabled="" selected="">Cari/Pilih...</option>
									<option value="Umum">Umum</option>
								</datalist>
								<span class="kt-input-icon__icon kt-input-icon__icon--right">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
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
						<th bgcolor="#f7fcff" class="nama">Nama</th>
						<th bgcolor="#f7fcff" class="kategoriPemasok">Kategori Pemasok</th>
						<th bgcolor="#f7fcff" class="mataUang">Mata Uang</th>
						<th bgcolor="#f7fcff" class="syaratPembayaran">Syarat Pembayaran</th>
						<th bgcolor="#f7fcff" class="kontakUtama">Kontak Utama</th>
						<th bgcolor="#f7fcff" class="kontaklainnya1">Kontak Lainnya #1</th>
						<th bgcolor="#f7fcff" class="kontaklainnya2">Kontak Lainnya #2</th>
						<th bgcolor="#f7fcff" class="kontaklainnya3">kontak Lainnya #3</th>
						<th bgcolor="#f7fcff" class="nonAktif">Non Aktif</th>
						<th bgcolor="#f7fcff" class="idPemasok">ID Pemasok</th>
						<th bgcolor="#f7fcff" class="saldo">Saldo</th>
						<th bgcolor="#f7fcff" class="cabang">Cabang</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="nama"></td>
						<td class="kategoriPemasok"></td>
						<td class="mataUang"></td>
						<td class="syaratPembayaran"></td>
						<td class="kontakUtama"></td>
						<td class="kontaklainnya1"></td>
						<td class="kontaklainnya2"></td>
						<td class="kontaklainnya3"></td>
						<td class="nonAktif"></td>
						<td class="idPemasok"></td>
						<td class="saldo"></td>
						<td class="cabang"></td>
					</tr>
					<tr>
						<td class="nama"></td>
						<td class="kategoriPemasok"></td>
						<td class="mataUang"></td>
						<td class="syaratPembayaran"></td>
						<td class="kontakUtama"></td>
						<td class="kontaklainnya1"></td>
						<td class="kontaklainnya2"></td>
						<td class="kontaklainnya3"></td>
						<td class="nonAktif"></td>
						<td class="idPemasok"></td>
						<td class="saldo"></td>
						<td class="cabang"></td>
					</tr>
					<tr>
						<td class="nama"></td>
						<td class="kategoriPemasok"></td>
						<td class="mataUang"></td>
						<td class="syaratPembayaran"></td>
						<td class="kontakUtama"></td>
						<td class="kontaklainnya1"></td>
						<td class="kontaklainnya2"></td>
						<td class="kontaklainnya3"></td>
						<td class="nonAktif"></td>
						<td class="idPemasok"></td>
						<td class="saldo"></td>
						<td class="cabang"></td>
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

	$("input:checkbox").click(function() {
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
