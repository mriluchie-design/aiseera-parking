<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-5.16081,119.395713),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
			
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Edit
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Perangkat</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
								
            <div class="kt-subheader__toolbar">
			
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="#.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
				<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>
				
				
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-right">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon fa fa-clock"></i>
								<span class="kt-nav__link-text">Sementara</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon fa fa-check-circle"></i>
								<span class="kt-nav__link-text">Selesai</span>
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
            <!-- begin:: Alert -->
			
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">CCTV Sedang Offline !</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

          

			
				<div class="kt-portlet__body">
				
					  
					  
					  <div class="form-group row">
				
					  
					  <div class="col-lg-2">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Gate</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  
						
					 
						
						<div class="col-lg-12">
                          <label class="">Lokasi :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Gate :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1">
                        </div>
						<div class="col-lg-6">
                          <label class="">Jalur :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Masuk">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Nama Jalur :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mobil - 1">
                        </div>
						<div class="col-lg-6">
                          <label class="">Transaksi :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ya">
                        </div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Dispenser :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Ya">
                        </div>
						<div class="col-lg-6">
                          <label class="">Tipe Dispenser :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Single">
                        </div>
						
						
                        </div>
						
                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 </div>
						<div class="form-group row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											
											
												
						
                     
						
                     
					  
                     
									</div>
									

									</div>


							<!--end:: Portlet-->


										</div>
								
													</div>
                        </div>
                        </div>
						<div class="col-lg-10">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Perangkat</div><br><br>
										 
						<div class="form-group row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="col-xl-12" style="height:550px; overflow-y:scroll;">
					<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample1">
						<div class="card">
							<div class="card-header" id="headingOne">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
									Dispenser
									<small>Perangkat yang digunakan</small>
								</div>
							</div>
							<div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample1" style="">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-12">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Perangkat</div><br><br>
												<div class="kt-portlet__body">
													<div class="kt-portlet__content">
													<div class="form-group row">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

  <tbody><tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" rowspan="2" >NO</td>
    <td width="15%" rowspan="2" bgcolor="#f7fcff" >NAMA PERANGKAT </td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff" >Part Code</td>
    <td width="5%" rowspan="2" bgcolor="#f7fcff" >Kategori</td>
    <td width="5%" rowspan="2" bgcolor="#f7fcff" >Jenis</td>
    <td colspan="2" bgcolor="#f7fcff">Qty</td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff" >AKSI</td>
  </tr>
    <tr style="text-align:center">
      <td width="5%" bgcolor="#f7fcff" >Volume</td>
      <td width="2%" bgcolor="#f7fcff" >Satuan</td>
    </tr>
  
    
    <tr>
    <td style="text-align:right">1</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726" selected>CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
      
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000101180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Casing</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
<tr>
    <td style="text-align:right">2</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726" >CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726" selected>NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000201180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Payment</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
<tr>
    <td style="text-align:right">3</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726" >CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726" selected>PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000301180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Printer</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">4</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726">CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726" selected>WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000401180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Webcam</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">5</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726">CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726" selected>BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000501180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Button</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">6</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726">CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726" selected>DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000601180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Display</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">7</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726" >CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726" selected>MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000701180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Mini PC</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">8</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726">CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726" selected>HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000801180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Switch</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">9</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726">CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726" selected>VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">000901180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">VLD</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">10</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726">CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726" selected>CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001001180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Controller</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">11</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726">CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726" selected>SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726">UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001101180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">Speaker</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">12</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="000101180726">CUSTOM CASING DISPENSER SINGLE</option>
          <option value="3" data-subtext="000201180726">NFC PAYMENT READER</option>
          <option value="4" data-subtext="000301180726">PRINTER THERMAL</option>
          <option value="5" data-subtext="000401180726">WEBCAM</option>
          <option value="5" data-subtext="000501180726">BUTTON BANTUAN</option>
          <option value="5" data-subtext="000601180726">DISPLAY LAYAR</option>
          <option value="5" data-subtext="000701180726">MINI PC</option>
          <option value="5" data-subtext="000801180726">HUB SWITCH 8 PORT MANAGEABLE CLOUD</option>
          <option value="5" data-subtext="000901180726">VLD DISPENSER</option>
          <option value="5" data-subtext="001001180726">CONTROLLER DISPENSER</option>
          <option value="5" data-subtext="001101180726">SOUND SPEAKER</option>
          <option value="5" data-subtext="001201180726" selected>UPS</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001201180726</td>
    <td style="text-align:left">Dispenser</td>
    <td style="text-align:left">UPS</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>


  </tbody>
</table>
													</div>
												
												
											</div>
										</div>
										</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<div class="card-title d-grid collapsed" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
									Barrier Gate
									<small>Material</small> </div>
							</div>
							<div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-12">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Perangkat</div><br><br>
												<div class="kt-portlet__body">
													<div class="form-group row">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

  <tbody><tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" rowspan="2" >NO</td>
    <td width="15%" rowspan="2" bgcolor="#f7fcff" >NAMA PERANGKAT </td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff" >Part Code</td>
    <td width="5%" rowspan="2" bgcolor="#f7fcff" >Kategori</td>
    <td width="5%" rowspan="2" bgcolor="#f7fcff" >Jenis</td>
    <td colspan="2" bgcolor="#f7fcff">Qty</td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff" >AKSI</td>
  </tr>
    <tr style="text-align:center">
      <td width="5%" bgcolor="#f7fcff" >Volume</td>
      <td width="2%" bgcolor="#f7fcff" >Satuan</td>
    </tr>
  
    
    <tr>
    <td style="text-align:right">1</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001301180726" selected>BARRIER GATE SERVO</option>
          <option value="5" data-subtext="001401180726">VLD BARRIER GATE</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
      
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001301180726</td>
    <td style="text-align:left">Barrier Gate</td>
    <td style="text-align:left">Barrier Gate</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
<tr>
    <td style="text-align:right">2</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001301180726" >BARRIER GATE SERVO</option>
          <option value="5" data-subtext="001401180726" selected>VLD BARRIER GATE</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001401180726</td>
    <td style="text-align:left">Barrier Gate</td>
    <td style="text-align:left">VLD</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>


  </tbody>
</table>
													</div>
												</div>
												
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree1">
								<div class="card-title collapsed d-grid" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
									Peralatan
									<small>Sensor dan Lainnya</small>
								</div>
							</div>
							<div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-12">
											<!--begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
												<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Perangkat</div><br><br>
												<div class="kt-portlet__body">
													<div class="form-group row">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

  <tbody><tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" rowspan="2" >NO</td>
    <td width="15%" rowspan="2" bgcolor="#f7fcff" >NAMA PERANGKAT </td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff" >Part Code</td>
    <td width="5%" rowspan="2" bgcolor="#f7fcff" >Kategori</td>
    <td width="5%" rowspan="2" bgcolor="#f7fcff" >Jenis</td>
    <td colspan="2" bgcolor="#f7fcff">Qty</td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff" >AKSI</td>
  </tr>
    <tr style="text-align:center">
      <td width="5%" bgcolor="#f7fcff" >Volume</td>
      <td width="2%" bgcolor="#f7fcff" >Satuan</td>
    </tr>
  
    
    <tr>
    <td style="text-align:right">1</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001501180726" selected>UHF READER MID RANGE</option>
          <option value="5" data-subtext="001601180726">IP CAMERA</option>
          <option value="5" data-subtext="001701180726">ANPR CAMERA</option>
          <option value="5" data-subtext="001801180726">QUADBEAM</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
      
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001501180726</td>
    <td style="text-align:left">Sensor dan Lainnya</td>
    <td style="text-align:left">Sensor</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
<tr>
    <td style="text-align:right">2</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001501180726" >UHF READER MID RANGE</option>
          <option value="5" data-subtext="001601180726" selected>IP CAMERA</option>
          <option value="5" data-subtext="001701180726">ANPR CAMERA</option>
          <option value="5" data-subtext="001801180726">QUADBEAM</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001601180726</td>
    <td style="text-align:left">Sensor dan Lainnya</td>
    <td style="text-align:left">IP Camera</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">3</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001501180726" >UHF READER MID RANGE</option>
          <option value="5" data-subtext="001601180726" >IP CAMERA</option>
          <option value="5" data-subtext="001701180726" selected>ANPR CAMERA</option>
          <option value="5" data-subtext="001801180726">QUADBEAM</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001701180726</td>
    <td style="text-align:left">Sensor dan Lainnya</td>
    <td style="text-align:left">ANPR Camera</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>
  <tr>
    <td style="text-align:right">4</td>
    <td style="text-align:left"><span style="text-align:center">
      <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
        <option value="1" disabled>Cari/Pilih Barang...</option>
        <optgroup label="Dispenser" class="a">
          <option value="2" data-subtext="001501180726" >UHF READER MID RANGE</option>
          <option value="5" data-subtext="001601180726" >IP CAMERA</option>
          <option value="5" data-subtext="001701180726" >ANPR CAMERA</option>
          <option value="5" data-subtext="001801180726" selected>QUADBEAM</option>
          <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-search'></i> Cari Barang Lainnya</a>" class="select-option-add" value="add"></option>
          </optgroup>
        </select>
    </span></td>
    <td nowrap="nowrap" style="text-align:left">001801180726</td>
    <td style="text-align:left">Sensor dan Lainnya</td>
    <td style="text-align:left">Sensor</td>
    <td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1"></td>
    <td><span style="text-align:center">
      <select name="select5" class="form-control kt-selectpicker" data-live-search="true">
        <option value="AK" selected="selected">Unit</option>
        <option value="AK">Pieces</option>
        <option value="AK">Lembar</option>
      </select>
    </span></td>
    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
  </tr>


  </tbody>
</table>
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
											
												
						
                     
						
                     
					  
                     
									</div>
									

									</div>


							<!--end:: Portlet-->


										</div>
								
													</div>
                        </div>
                        </div>
					  
					  
					  
					  
                      </div>

                     
					<!--begin: Datatable -->
					
                    <!--end: Datatable -->

                    
<!--begin::Modal 1-->
									<div class="modal fade" id="titik-parkir-tutup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-danger flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">FORM LAPORAN TITIK PARKIR TUTUP</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="row">
									<div class="col-xl-7">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-12">
					   <label>Nama Lengkap</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Jukir">

                        </div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
					   <label>Zona</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Jukir">

                        </div>
						<div class="col-lg-6">
                          <label>Wilayah :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
											</div>
											<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
					   <label>Nama Titik Parkir</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Jukir">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label>Alamat Titik Parkir :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
											</div>
									
										</div>
										</div>
										</div>
										
										</div>
										


									<div class="col-xl-5">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Keterangan</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-12">
					   
                         <textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Isikan Keterangan Anda"></textarea>

                        </div>
						
						
                        </div>
						
									
										</div>
										</div>
										</div>
									<div class="kt-portlet kt-portlet--height-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Upload Foto</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-12">
					   <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files, File Format : PDF</span>
													</div>
												</div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						
						
											</div>
									
										</div>
										

									</div>
									

									
									</div>
									
									
								</div>
								</div>
								<div class="col-xl-12">
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kolektor</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
                       <div class="col-lg-6">
					   <label>NIP Pegawai</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Nama Kasir">

                        </div>
                       
						<div class="col-lg-6">
                          <label>Nama Kolektor :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000 000 000">
                        </div>
						
                        </div>
						
						
                        </div>
						
									
										</div>
										</div>
										</div>
									</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													
									
												
													<div class="btn-group">
				<button type="button" class="btn btn-brand btn-sm">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
												</div>
											</div>
												
												

									<!--end::Portlet-->
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
							<!--End::Modal 1-->
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_release" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Kepala Bagian Kepegawaian
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Direktur Umum
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_15.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Muhammad Nasrullah, S.Kom
																</a>
																<p class="kt-widget4__text">
																	Direktur Utama
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														
														
														
													</div>
												</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Assign Project Director</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												</div>

											</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  </div>

									<!--end: Datatable -->
								
									

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
