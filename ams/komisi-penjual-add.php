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
				Form Komisi Penjual
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
										<label>Nama perhitungan komisi : <code>*</code></label>
										<input type="text" class="form-control form-control-sm" placeholder="">
									</div>
									<div class="col-lg-6">
										<label>Berlaku ke Tenaga Penjual : <code>*</code></label>
										<div class="kt-radio-list">
											<label class="kt-radio">
												<input type="radio" name="radio1" checked> Semua
												<span></span>
											</label>
											<label class="kt-radio">
												<input type="radio" name="radio1"> Tertentu
												<span></span>
											</label>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label class="">Diberikan pada penjual urutan (Urutan input penjual di faktur): <code>*</code></label>
										<div class="kt-checkbox-inline">
											<label class="kt-checkbox">
												<input type="checkbox" checked> Pertama
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Kedua
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Ketiga
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Keempat
												<span></span>
											</label>
											<label class="kt-checkbox">
												<input type="checkbox"> Kelima
												<span></span>
											</label>
										</div>
									</div>
									<div class="col-lg-6">
										<label class="">Komisi berlaku untuk barang : <code>*</code></label>
										<div class="row">
											<select class="form-control form-control-sm col-lg-5 barang">
												<option value="0">Semua Barang</option>
												<option value="1">Pilih Kategori Barang</option>
												<option value="2">Pilih Barang</option>
											</select>
											<div class="kt-input-icon kt-input-icon--right col-lg-6 ml-3">
												<input type="text" class="form-control form-control-sm xyz" placeholder="Cari/Pilih..." id="generalSearch">
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
										<label class="">Dari pemasok utama : <code>*</code></label>
										<div class="row ml-auto">
											<select class="form-control form-control-sm col-lg-5 pemasok">
												<option value="0">Semua Pemasok</option>
												<option value="1">Pilih Pemasok</option>
											</select>
											<div class="kt-input-icon kt-input-icon--right col-lg-6 ml-3">
												<input type="text" class="form-control form-control-sm pem" placeholder="Cari/Pilih..." id="generalSearch">
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
										<label class="">Dari pemasok utama : <code>*</code></label>
										<div class="row ml-auto">
											<select class="form-control form-control-sm col-lg-5 utama"  data-target=".jual">
												<option value="persen"  data-show=".persen">Persentase</option>
												<option value="tetap"  data-show=".tetap">Nilai Tetap</option>
											</select>
											<div class="kt-input-icon kt-input-icon--right col-lg-6 ml-3 mb-3">
												<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih...">
												<span class="kt-input-icon__icon kt-input-icon__icon--right">
													<span><i class="la la-search"></i></span>
												</span>
											</div>
										</div>
										<div class="jual">
										<div class="input-group input-group-sm persen hide">
											<div class="input-group-prepend"><span class="input-group-text">% dari</span></div>
											<select class="form-control">
												<option>Nilai Penjualan</option>
												<option>Laba Kotor</option>
											</select>
										</div>
										<select class="form-control form-control-sm tetap hide">
											<option>Per Faktur</option>
											<option>Per Kuantitas Barang</option>
										</select>
									</div>
									</div>
									<div class="col-lg-6">
										<label class="">Dengan syarat perhitungan : <code>*</code></label>
										<div class="kt-radio-list">
											<label class="kt-radio">
												<input type="radio" name="radio2" checked> Tanpa batasan dan syarat
												<span></span>
											</label>
											<label class="kt-radio">
												<input type="radio" name="radio2"> Nilai Penjualan antara
												<span></span>
											</label>
											<div class="input-group input-group-sm mb-3">
												<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
												<span class="input-group-addon">s/d</span>
												<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
											</div>
											<label class="kt-radio">
												<input type="radio" name="radio2"> Kuantitas penjualan antara
												<span></span>
											</label>
											<div class="input-group input-group-sm mb-3">
												<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
												<span class="input-group-addon">s/d</span>
												<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
											</div>
											<label class="kt-radio">
												<input type="radio" name="radio2"> Kuantitas terjual per
												<span></span>
											</label>
											<div class="input-group input-group-sm">
												<input type="text" class="form-control" placeholder="">
												<div class="input-group-append"><span class="input-group-text">Unit (Berlaku kelipatan)</span></div>
											</div>
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
<script>
	$(".barang").change(function() {
		if ($(this).val() == 0) {
			$(".xyz").attr("disabled", "disabled");
		} else {
			$(".xyz").removeAttr("disabled");
		}
	}).trigger("change");
	$(".pemasok").change(function() {
		if ($(this).val() == 0) {
			$(".pem").attr("disabled", "disabled");
		} else {
			$(".pem").removeAttr("disabled");
		}
	}).trigger("change");

	$(document).on('change', '.utama', function() {
  var target = $(this).data('target');
  var show = $("option:selected", this).data('show');
  $(target).children().addClass('hide');
  $(show).removeClass('hide');
});
$(document).ready(function(){
	$('.utama').trigger('change');
});
</script>
<?php require '../layouts/foot.php' ?>
