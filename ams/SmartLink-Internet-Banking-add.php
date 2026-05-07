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
				Form SmartLink Internet Banking
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
										<label>Jenis Internet Banking : <code>*</code></label>
										<select class="form-control kt-selectpicker" id="tipe">
											<option value="1" selected>--Pilih Internet Banking--</option>
											<option value="1">KlikBCA personal</option>
											<option value="2">KlikBCA Bisnis</option>
											<option value="3">KlikBCA Bisnis(API)</option>
											<option value="2">Mandiri Intenet Bisnis</option>
											<option value="2">OCBC NISP API Bisnis (Velocity)</option>
											<option value="2">OCBC NISP Bisnis (Velocity)</option>
											<option value="1">DBS Ideal</option>
											<option value="1">BNI Internet Bisnis</option>
											<option value="2">BRI Cash Management Bisnis</option>
											<option value="2">BRI IB (BRI Intenet Banking)</option>
											<option value="1">BRI IBBIZ (Internet Banking Bisnis)</option>
											<option value="1">Permata Intenet Bisnis</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label>No. Rekening Bank <code>*</code></label>
											<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row value" id="1">
									<div class="col-lg-6">
										<label>Relasi Akun Bank : <code>*</code></label>
										<div class="form-group ">
									<div class="kt-input-icon kt-input-icon--right">
										<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="akun" list="akunname">
										<datalist id="akunname">
											<option value="-" disabled selected>Cari/Pilih...</option>
												<option value="Kas Kecil" label="110101">Kas Kecil</option>
												<option value="Bank" label="110102">Bank</option>
												<option value="Deposito Bank" label="110201">Deposito Bank</option>
								    </datalist>
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="la la-search"></i></span>
										</span>
									</div>
								</div>
									</div>
								</div>

								<div class="form-group row value hide" id="2" style="display:none">
									<div class="col-lg-6">
										<label>Corpote ID : <code>*</code></label>
										<div class="form-group ">
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>
									<div class="col-lg-6">
										<label>Relasi Akun Bank : <code>*</code></label>
										<div class="form-group ">
									<div class="kt-input-icon kt-input-icon--right">
										<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="akun" list="akunname">
										<datalist id="akunname">
											<option value="-" disabled selected>Cari/Pilih...</option>
												<option value="Kas Kecil" label="110101">Kas Kecil</option>
												<option value="Bank" label="110102">Bank</option>
												<option value="Deposito Bank" label="110201">Deposito Bank</option>
								    </datalist>
										<span class="kt-input-icon__icon kt-input-icon__icon--right">
											<span><i class="la la-search"></i></span>
										</span>
									</div>
								</div>
									</div>
								</div>

								<div class="value" id="3" style="display:none">
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Corpote ID : <code>*</code></label>
										<div class="form-group ">
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>
									<div class="col-lg-6">
										<label>Client ID : <code>*</code></label>
										<div class="form-group ">
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Client Secret : <code>*</code></label>
										<div class="form-group ">
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>
									<div class="col-lg-6">
										<label>API Key : <code>*</code></label>
										<div class="form-group ">
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>API Secret : <code>*</code></label>
										<div class="form-group ">
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>
								<div class="col-lg-6">
									<label>Relasi Akun Bank : <code>*</code></label>
									<div class="form-group ">
								<div class="kt-input-icon kt-input-icon--right">
									<input type="text" class="form-control form-control-sm" placeholder="Cari/Pilih..." name="akun" list="akunname">
									<datalist id="akunname">
										<option value="-" disabled selected>Cari/Pilih...</option>
											<option value="Kas Kecil" label="110101">Kas Kecil</option>
											<option value="Bank" label="110102">Bank</option>
											<option value="Deposito Bank" label="110201">Deposito Bank</option>
									</datalist>
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
									<label>Pembatasan Harian : </label>
									<div class="form-group ">
										<label class="kt-checkbox">
																									<input type="checkbox"> Ya
																									<span></span>
																								</label>
										</div>
								</div>
							<div class="col-lg-6">
								<label>Pembatasan Bulanan : </label>
								<div class="form-group ">
									<label class="kt-checkbox">
																	<input type="checkbox"> Ya
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

</div>

<?php require '../layouts/footer.php' ?>
<script>
$(function() {
  $('#tipe').change(function(){
    $('.value').hide();
    $('#' + $(this).val()).show();
  });
});
</script>
<?php require '../layouts/foot.php' ?>
