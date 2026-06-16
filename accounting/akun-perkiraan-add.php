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
				Form
			</h3>
<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Akun Perkiraan </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="mutasi-pegawai.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
					<i class="flaticon-reply"></i> Kembali</button>
					<script>
						function goBack() {
							window.history.back();
						}
					</script>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				


			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
				<div class="col-xl-9">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Informasi Umum</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									<div class="col-lg-3">
										<label>Tipe Akun :</label>
										 <select class="form-control kt-selectpicker" data-live-search="true">
												<option value="1" selected>Kas & Bank</option>
												<option value="2">Piutang Usaha</option>
												<option value="3">Persediaan</option>
												<option value="1">Aset Lancar Lainnya</option>
												<option value="1">Aset Tetap</option>
												<option value="1">Akumulasi Penyusutan</option>
												<option value="1">Aset Lainnya</option>
												<option value="1">Hutang Usaha</option>
												<option value="1">Kewajiaban Jangka Pendek</option>
												<option value="1">Kewajiban Jangka Panjang</option>
												<option value="1">Modal</option>
												<option value="1">Pendapatan</option>
												<option value="1">Beban Pokok Penjualan</option>
												<option value="1">Beban</option>
												<option value="1">Beban Lainnya</option>
												<option value="1">Pendapatan Lainnya</option>
												<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
										</select>
									</div>
									
									<div class="form-group row">
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Sub Akun :</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-md col-lg-6" id="hide1" selected>Tidak</button>&nbsp;
      													
                                <button type="button" class="btn btn-secondary btn-square btn-md col-lg-5" id="show">Ya</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
								
                                  <div class="form-group row">
    													
													<div class="col-lg-10">
														<label class="kt-font-danger">Pilih Sub Akun :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Virtual Account</option>
														<option>QRIS</option>
														<option>Transfer Bank</option>
														<option>Gopay</option>
														<option>ShopeePay</option>
														
														</select>
													</div>
												
                          </div>
						



											</div>
											
											</div>

										<div class="form-group row">	
									<div class="col-lg-14">
                                <div class="form-group">
      													<label>Kode COA :</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													
														<button type="button" class="btn btn-secondary btn-square btn-md col-lg-6" id="hide3">Otomatis</button>
      													
                                <button type="button" class="btn btn-secondary btn-square btn-md col-lg-5" id="show2" selected>Tidak</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>&nbsp;&nbsp;&nbsp;
                              <div class="form-group row tampil2">
                                <div class="col-lg-12">
								
                                  <div class="form-group row">
    													
													<div class="col-lg-12">
										<label class="">&nbsp;</label>
										<div class="form-group">
											<input type="text" class="form-control form-control-sm" placeholder="Isikan Kode COA">
										</div>

									</div>
												
                          </div>
						



											</div>
											
											</div>
											<div class="col-lg-1">
										<label class="">Status</label>
										<input data-switch="true" data-size="small" data-toggle="kt-tooltip" data-skin="brand" data-on-text="Aktif" data-off-text="Tidak" data-on-color="success" type="checkbox" checked="checked">
										

									</div>
									
									
      												</div>
									
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								
								<div class="form-group row">
									
									
									
									<div class="col-lg-3">
										<label class="">Nama : <code>*</code></label>
										<div class="form-group">
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>
									<div class="col-lg-3 tipe-akun 2" id="2">
										<label class="">Mata Uang : </label>
										<select class="form-control kt-selectpicker" multiple="multiple">
                                      <option value="1" selected="">Indonesia Rupiah</option>
                                      <option value="2">Dollar</option>
                                      
                                     
                                  </select>
									</div>
									<div class="col-lg-3">
										<label class="">Saldo Awal:</label>
										<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
									</div>
									<div class="col-lg-3">
										<label class="">Per Tgl:</label>
										<div class="form-group">
											<div class="input-group date">
																									 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="- Pilih Tanggal -" id="kt_datepicker_2">
																									 <div class="input-group-append">
																											 <span class="input-group-text">
																													 <i class="la la-calendar-check-o"></i>
																											 </span>
																									 </div>
																							 </div>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									
									<div class="tipe-akun 1" style="display:contents" id="1">
									
									
								</div>
								</div>
							</div>
						</div>
					</div>
				<div class="col-xl-3">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Lain - Lain</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group">
									<label>Catatan :</label>
									<textarea class="form-control" id="exampleTextarea" rows="3" placeholder=""></textarea>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="m-separator m-separator--dashed m-separator--lg"></div>
												
													<label class="col-lg-12 col-form-label">Akses Pengguna:</label>
													<select class="form-control kt-selectpicker" multiple data-actions-box="true">
															<option>Semua Pengguna</option>
															<option>Direksi</option>
															<option>Aset Lancar Lainnya</option>
															<option>Aset Tetap</option>
															<option>Beban</option>
															<option>Beban Lainnya</option>
															<option>Beban Pokok Penjualan</option>
															<option>Hutang Usaha</option>
															<option>Kas & Bank</option>
															<option>Kewajiban Jangka Panjang</option>
															<option>Kewajiban Jangka Pendek</option>
															<option>Modal</option>
															<option>Pendapatan</option>
															<option>Pendapatan Lainnya</option>
															<option>Persediaan</option>
															<option>Piutang Usaha</option>
														</select>
												</div>
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
$(function() {
  $('#select').change(function(){
    $('.tipe-akun').hide();
    $('#' + $(this).val()).show();
  });
});

function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

	var text1 = document.getElementById("text1");

		var text2 = document.getElementById("text2");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
		text1.style.display = "none";
		text2.style.display = "block";
  } else {
    text.style.display = "none";
		text1.style.display = "block";
		text2.style.display = "none";
  }

}
</script>
<script>
$("#show").click(function(){
    $(".tampil").show();
  });
  $("#hide1").click(function(){
      $(".tampil").hide();
    });
    $("#hide2").click(function(){
        $(".tampil").hide();
      });
</script>
<script>
$(function() {
  $('#select').change(function(){
    $('.tipe-akun').hide();
    $('#' + $(this).val()).show();
  });
});

function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

	var text1 = document.getElementById("text1");

		var text2 = document.getElementById("text2");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
		text1.style.display = "none";
		text2.style.display = "block";
  } else {
    text.style.display = "none";
		text1.style.display = "block";
		text2.style.display = "none";
  }

}
</script>
<script>
$("#show2").click(function(){
    $(".tampil2").show();
  });
  $("#hide1").click(function(){
      $(".tampil2").hide();
    });
    $("#hide3").click(function(){
        $(".tampil2").hide();
      });
</script>
<?php require '../layouts/foot.php' ?>
