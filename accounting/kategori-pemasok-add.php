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
				Form Kategori Pemasok
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
			<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian SmartLink Internet Banking</div><br>
				<div class="kt-portlet__body">
					<div class="kt-portlet__content">
						<div class="form-group row">
							<div class="col-lg-6">
								<label>Nama Kategori <code>*</code></label>
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="col-lg-6">
								<label>Kategori Default : </label>
								<div class="form-group ">
									<label class="kt-checkbox">
										<input type="checkbox"> Ya
										<span></span>
									</label>
								</div>
							</div>
						</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
							<div class="col-lg-6">
								<div class="form-group ">
									<div class="kt-input-icon kt-input-icon--right">
										<input id="result" type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="kategori" list="kategoriname" disabled>
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
							<div class="col-lg-auto">
								<div class="form-group ">
									<label class="kt-checkbox">
										<input type="checkbox" id="kategoricheck"> Sub Kategori
										<span></span>
									</label>
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
	$(function() {
		$('#tipe').change(function() {
			$('.value').hide();
			$('#' + $(this).val()).show();
		});
	});
	document.getElementById('kategoricheck').onchange = function() {
    document.getElementById('result').disabled = !this.checked;
};
</script>
<?php require '../layouts/foot.php' ?>
