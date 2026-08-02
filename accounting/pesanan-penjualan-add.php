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
                    Form 
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											PESANAN PENJUALAN</span>
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
			<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-label-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Ambil Data
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">

						<!--begin::Nav-->
						<ul class="kt-nav">
<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#lihat_favorit">
									<i class="kt-nav__link-icon fa fa-file-alt"></i>
									<span class="kt-nav__link-text">Dari Penawaran</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#lihat_favorit">
									<i class="kt-nav__link-icon fa fa-bookmark"></i>
									<span class="kt-nav__link-text">Dari Favorit</span>
								</a>
							</li>


							
						</ul>
						<!--end::Nav-->
					</div>
								</div>
			
<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-label-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Proses
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">

						<!--begin::Nav-->
						<ul class="kt-nav">
<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#uang_muka">
									<i class="kt-nav__link-icon fa fa-truck-moving"></i>
									<span class="kt-nav__link-text">Pengiriman</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#uang_muka">
									<i class="kt-nav__link-icon fa fa-file-invoice"></i>
									<span class="kt-nav__link-text">Faktur</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#uang_muka">
									<i class="kt-nav__link-icon fa fa-coins"></i>
									<span class="kt-nav__link-text">Uang Muka</span>
								</a>
							</li>
							
						</ul>
						<!--end::Nav-->
					</div>
								</div>
			<div class="btn-group">
				<button type="button" class="btn btn-success">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-right" style="min-width:17rem !important">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon fa fa-save"></i>
								<span class="kt-nav__link-text">Draft</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon fa fa-check-circle"></i>
								<span class="kt-nav__link-text">Simpan</span>
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
				
					  
					  
					  <div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid" id="kt_page_portlet">

				
                    <div class="kt-portlet__body">
<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
														<i class="fa fa-file-contract"></i> Detail Pesanan Penjualan
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-file-invoice-dollar"></i>Barang / Jasa
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
														<i class="fa fa-file-pdf"></i>Preview Cetak
													</a>
												</li>
												<!--<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_4" role="tab">
														<i class="fa fa-calculator"></i>Akuntansi
													</a>
												</li>-->
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
													
														
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<div class="form-group row">
																<div class="col-xl-8">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Pesanan</div><br><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
								<div class="col-lg-3">
                          <label class="">Kantor :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Cabang Makassar">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Nomor :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="SQ.062026.01.001">
                      </div>
                        </div>
						<div class="col-lg-3">
										<label class="">Tanggal Pesanan : <code>*</code></label>
										<div class="input-group date">
											<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="la la-calendar-check-o"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-lg-2">
														<label>Syarat Pembayaran :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>COD</option>
														
														<option>7 Hari</option>
														<option>14 Hari</option>
														<option>21 Hari</option>
														<option>30 Hari</option>
														
														
														</select>
													</div>
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
						<div class="col-lg-3">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="Pilih Kategori" data-html="true">*</code> Kategori Pelanggan :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
						
														
														<option>Personal</option>
														<option>BUMN</option>
														<option>Pemerintah Provinsi</option>
														<option>Pemerintah Daerah</option>
														<option>Swasta</option>
														
														 <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
													</select>
                        </div>
						<div class="col-lg-6">
														<label>Pilih Pelanggan :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>PT. Angkasa Pura Indonesia (Persero)</option>
														<option>PT. Pelabuhan Indonesia (Persero) Regional 4</option>
														<option>PT. Pelabuhan Indonesia (Persero) Regional 4 - Cabang Makassar</option>
														
														</select>
													</div>
													<div class="col-lg-3">
													<label>Pajak :</label>
									<div class="kt-checkbox-inline">
										<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">
															    <span></span> Kena Pajak</label>
										<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
											<input type="checkbox"> Total Termasuk Pajak
											<span></span>
										</label>
									</div>
								</div>
                        </div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									
									
										<div class="col-lg-9">
										<div class="form-group">
											<label>Keterangan Pesanan :</label>
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>			
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								
							</div>
						</div>
						
					</div>
				</div>
					  <div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pengiriman</div><br><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">							
								<div class="form-group row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Pengiriman :</label>
											
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Internal</option>
														<option>TIKI</option>
														<option>JNE</option>
														<option>Pos Indonesia</option>
														<option>SiCepat</option>
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
														</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Tanggal Pengiriman :</label>
									<div class="input-group date">
											<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
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
									<div class="col-lg-6">
										<div class="form-group">
											<label>Alamat  :</label>
											
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Sesuai Data Pelanggan</option>
														<option>Baru</option>
														
														
														</select>
										</div>
									</div>	
									
										<div class="col-lg-6">
										<div class="form-group">
											<label>Penerima :</label>
											<input type="text" class="form-control form-control-sm" placeholder="" disabled>
										</div>
									</div>
								
								</div>
													
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									
									<div class="col-lg-12">
										<div class="form-group">
											<label>Alamat Pengiriman :</label>
									<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="" disabled></textarea>
										</div>
									</div>
								</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>
			</div>
						
						
						
						
                             
                                <div class="col-lg-6">
								
                                  <div class="form-group row">
    													
													
												
                          </div>
						



											</div>
											
											</div>
											
						
						
						
					 
                        </div>
                        </div>
																
															</div>
												<div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
													
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<br><table class="table table-responsive table-striped- table-hover table-checkable table-bordered" cellpadding="3" align="center" style="line-height:1.5;">
																
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="15%" colspan="3" rowspan="2" bgcolor="#f7fcff">URAIAN</th>
											  <th width="5%" colspan="2" bgcolor="#f7fcff">VOLUME</th>
											  <th width="7%" rowspan="2" bgcolor="#f7fcff">HARGA SATUAN</th>
											  <th width="7%" rowspan="2" bgcolor="#f7fcff">JUMLAH</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">AKSI</th>

										  </tr>
											<tr style="text-align:center">
											  <th width="4%" bgcolor="#f7fcff">QTY</th>
											  <th width="4%" bgcolor="#f7fcff">SATUAN</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:right" id="kt_table_1">1</td>
												<td colspan="3" nowrap style="text-align:left"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Material</option>
												  <option>Jasa</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
												<td colspan="4" nowrap style="text-align:left">&nbsp;</td>
											  <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">&nbsp;</td>
												<td width="1%" style="text-align:right" nowrap>1.1</td>
												<td colspan="2" nowrap style="text-align:left"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Kategori Material</option>
												  <option>Dispenser Single</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
												<td colspan="4" nowrap style="text-align:left">&nbsp;</td>
											<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:left">&nbsp;</td>
												<td width="1%" style="text-align:right" nowrap>1.1.1</td>
												<td nowrap="nowrap" style="text-align:left"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
												  <option>Kode - Nama Barang</option>
												  <option selected>IPC01190626 - IP CAM 4MP OUTDOOR BULLET CAMERA</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
												<td nowrap="nowrap" style="text-align:left"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1" /></td>
												<td nowrap="nowrap" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Unit</option>
												  <option>Pieces</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
												  </select></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
												  </div></td>
											<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_27">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:right">1.1.2</td>
										    <td nowrap="nowrap" style="text-align:left"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Kode - Nama Barang</option>
										      <option>IPC01190626 - IP CAM 4MP OUTDOOR BULLET CAMERA</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:left"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1" /></td>
										    <td nowrap="nowrap" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Unit</option>
										      <option>Pieces</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
										      <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled="disabled" aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
										      </div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
										      <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled="disabled" aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
										      </div></td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_26">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:right">1.1.3</td>
										    <td nowrap="nowrap" style="text-align:left"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Kode - Nama Barang</option>
										      <option>IPC01190626 - IP CAM 4MP OUTDOOR BULLET CAMERA</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:left"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1" /></td>
										    <td nowrap="nowrap" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Unit</option>
										      <option>Pieces</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
										      <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled="disabled" aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
										      </div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
										      <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled="disabled" aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
										      </div></td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_23">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:right">1.2</td>
										    <td colspan="2" nowrap="nowrap" style="text-align:left"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Kategori Material</option>
										      <option>Dispenser Single</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td colspan="4" nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_29">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:right">1.2.1</td>
										    <td nowrap="nowrap" style="text-align:left"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Kode - Nama Barang</option>
										      <option>IPC01190626 - IP CAM 4MP OUTDOOR BULLET CAMERA</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:left"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1" /></td>
										    <td nowrap="nowrap" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Unit</option>
										      <option>Pieces</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
										      <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled="disabled" aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
										      </div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
										      <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled="disabled" aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
										      </div></td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_28">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:right">1.2.2</td>
										    <td nowrap="nowrap" style="text-align:left"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Kode - Nama Barang</option>
										      <option>IPC01190626 - IP CAM 4MP OUTDOOR BULLET CAMERA</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:left"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1" /></td>
										    <td nowrap="nowrap" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Unit</option>
										      <option>Pieces</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
										      <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled="disabled" aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
										      </div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
										      <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled="disabled" aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
										      </div></td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:right" id="kt_table_8">2</td>
										    <td colspan="3" nowrap="nowrap" style="text-align:left"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Jasa</option>
												  <option>Material</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
										    <td colspan="4" nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_7">&nbsp;</td>
										    <td width="1%" style="text-align:right" nowrap>2.1</td>
										    <td colspan="2" nowrap="nowrap" style="text-align:left"><select name="select3" class="form-control kt-selectpicker" data-live-search="true">
									          <option selected="selected">Pilih Kategori Jasa</option>
                                              <option>Akomodasi</option>
										        <option>Instalasi</option>
									          <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
								            </select></td>
										    <td colspan="4" nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_6">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td width="1%" style="text-align:right" nowrap>2.1.1</td>
										    <td nowrap="nowrap" style="text-align:left"><select name="select4" class="form-control kt-selectpicker" data-live-search="true">
									          <option selected="selected">Pilih Akomodasi</option>
										         <option>Transport</option>
                                                <option>Konsumsi</option>
                                                <option>Hotel</option>
									          <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
								            </select></td>
										    <td nowrap="nowrap" style="text-align:left"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1" /></td>
										    <td nowrap="nowrap" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Unit</option>
										      <option>Pieces</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										   <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
												  </div></td>
										   <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
												  </div></td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:right" id="kt_table_4">&nbsp;</td>
										    <td width="1%" style="text-align:right" nowrap>2.2</td>
										    <td colspan="2" nowrap="nowrap" style="text-align:left"><select name="select6" class="form-control kt-selectpicker" data-live-search="true">
									          <option selected="selected">Pilih Kategori Jasa</option>
										        <option>Akomodasi</option>
										        <option>Instalasi</option>
										        <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
								            </select></td>
										    <td colspan="4" nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_3">&nbsp;</td>
										    <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
										    <td width="1%" style="text-align:right" nowrap>2.2.1</td>
										    <td nowrap="nowrap" style="text-align:left"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Pilih Jasa Instalasi</option>
                                              <option selected="selected">Jasa Instalasi Fiber Optic</option>
										      <option>Jasa Instalasi Perangkat</option>
										      <option>Lainnya</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
									        </select></td>
										    <td nowrap="nowrap" style="text-align:left"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1" /></td>
										    <td nowrap="nowrap" style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Unit</option>
										      <option>Pieces</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
										      </select></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
												  </div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
												  </div></td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td colspan="9" id="kt_table_12" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td colspan="7" id="kt_table_11" style="text-align:right">TOTAL</td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm"  id="basic-addon2">,-</span></div>
												  </div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td colspan="6" id="kt_table_10" style="text-align:right">&nbsp;</td>
										    <td id="kt_table_10" style="text-align:right"><div class="col-lg-12">
										      <label>Pajak :</label>
										      <select name="select7" class="form-control kt-selectpicker" style="align:right" data-live-search="true">
										        <option>12%</option>
										        <option>11%</option>
										        <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
									          </select>
									        </div></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon3">Rp.</span></div>
										      <input style="text-align:right; border-color:#0e62ae;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon3">,-</span></div>
									        </div></td>
										    <td nowrap="nowrap" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td colspan="7" bgcolor="#f7fcff" id="kt_table_9" style="text-align:right">GRAND TOTAL</td>
										    <td nowrap="nowrap" bgcolor="#f7fcff" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon4">Rp.</span></div>
										      <input style="text-align:right; border-color:#0e62ae;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon4">,-</span></div>
									        </div></td>
										    <td nowrap="nowrap" bgcolor="#f7fcff" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td colspan="7" bgcolor="#f7fcff" id="kt_table_5" style="text-align:right">PEMBULATAN</td>
										    <td nowrap="nowrap" bgcolor="#f7fcff" style="text-align:center"><div class="input-group input-group-sm">
										      <div class="input-group-prepend"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon5">Rp.</span></div>
										      <input style="text-align:right; border-color:#0e62ae;" type="text" class="form-control form-control-sm" placeholder="2.000.000" disabled aria-describedby="basic-addon1" />
										      <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon5">,-</span></div>
									        </div></td>
										    <td nowrap="nowrap" bgcolor="#f7fcff" style="text-align:center">&nbsp;</td>
									      </tr>
										  <tr>
										    <td colspan="9" id="kt_table_13" bgcolor="#f7fcff" style="text-align:left">Terbilang : </td>
									      </tr>

										</tbody>
									</table>
															</div>
														</div>
												</div>
												<div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
													
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																
																<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-50 ml-auto mr-auto">
						<div>&nbsp;<div>
									<table class="table-responsive" cellpadding="3" align="center" width="250" border="0" style="line-height:1; margin-left:70px; padding-top:10px; font-family: Tahoma; font-size: 11px;" id="kt_table_1">
   <tr>
    <td width="3%" style="text-align: center; font-size:12px;">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: center; font-size:12px;">&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left; font-size:12px;"><strong>PT. PELABUHAN INDONESIA (PERSERO)</strong></td>
  </tr>
  <tr>
     <td style="text-align: left; font-size:12px; font-family: Tahoma;"><strong>REGIONAL 4 - CABANG MAKASSAR</strong></td>
  </tr>
  <tr>
     <td style="text-align: left; font-size:13px; font-family: Tahoma;">Jl. Soekarno No. 1 Makassar</td>
  </tr>
  
  
 
 
  <tr>
    <td ></td>
  </tr>
  
  
</table>
									<table align="center" border="0" cellpadding="1" style="width: 500px; margin-top:50px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 11px;">
  
  
  <tr>
    <td colspan="7" style="text-align: center"><b>LAPORAN REKAP PENDAPATAN</b></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center"><strong>PERIODE : 1 JANUARI 2025 s/d 31 JANUARI 2025</strong></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  
</table>
									<table align="center" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; border-collapse: collapse;">
            <tbody>

                                                                        <tr>
                                <td style="font-weight:bold; width: 70%">PENDAPATAN</td>
                                <td style="text-align:right; width: 30%"></td>
                            </tr>
                                                                                                            <tr>
                                                                        <td>41.01.01 | Pendapatan Parkir Masuk</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="../laporan-grafik/laporan-kendaraan-masuk.php">162.111.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.02 | Pendapatan Parkir Keluar</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDI=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">235.270.000,-</a></span> </div></td>
									<td style="font-size:11px; text-align:right;">
                                        
                                    </td>
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.03 | Pendapatan Kendaraan Berangkat</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDM=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">58.175.000,-</a></span> </div></td>
									
									<td style="font-size:11px; text-align:right;">
                                        
                                    </td>
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.04 | Pendapatan Muatan Kapal</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDQ=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">0,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.05 | Pendapatan Pass Kade</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDU=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">58.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                                              <td>41.01.06 | Pendapatan Pass Orang</td>
                                                                                              <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDU=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">45.000.000,-</a></span></div></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                        <td>41.01.07 | Pendapatan Member</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDY=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">950.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.08 | Pendapatan Denda Parkir</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDc=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">4.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.09 | Pendapatan Lain - Lain</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDg=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">0,-</a></span> </div></td>
									
                                </tr>
                                                                                                                                       
                                                                                                                        
                                <tr>
                                  <td colspan="2" style="font-weight:bold; border-bottom: 1px solid #000"></td>
                                  </tr>
                                                                                                                                        <tr>
                                <td style="font-weight:bold;">TOTAL PENDAPATAN</td>
								<td style="font-weight:bold; border-bottom: 3px double #000"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.512.556.000,-</span> </div></td>
                                
                            </tr>
                                                                                                <tr>
                                                                                                                                          <td colspan="2" style="font-weight:bold; width: 70%">&nbsp;</td>
              </tr>
                                                                                                <tr>
                                                                                                                                                                                                  <td colspan="2" style="width: 70%"><em>Terbilang : Satu Milyar Lima Ratus Dua Belas Juta Lima Ratus Lima Puluh Enam Ribu Rupiah</em></td>
              </tr>
                                                        </tbody>
        </table>
		

								
								<div><span>&nbsp;</span>
   <table align="center" width="600px" border="0" cellpadding="1" style="text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; margin-top:50px; margin-left:70px; margin-bottom:50px;">

                                <tbody><tr>
                                    <td colspan="3" valign="top">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="180" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">
                                        <strong>DIBUAT OLEH</strong></td>
                                    <td width="258" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">
                                        <strong>DIKETAHUI OLEH</strong></td>
                                    <td width="180" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-left:20px;">
                                        <strong>DISETUJUI OLEH</strong></td>
                                </tr>
                                <tr style="padding-top:10px">
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc; padding-top:10px; padding-bottom:10px;">
                                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="45" height="45" viewBox="0 0 45 45"><rect x="0" y="0" width="45" height="45" fill="#ffffff"></rect><g transform="scale(2.143)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 1L9 1L9 4L10 4L10 5L11 5L11 6L10 6L10 7L9 7L9 6L8 6L8 8L9 8L9 9L8 9L8 10L9 10L9 12L8 12L8 11L7 11L7 10L5 10L5 8L3 8L3 9L4 9L4 10L5 10L5 11L7 11L7 12L3 12L3 13L7 13L7 12L8 12L8 14L12 14L12 15L9 15L9 16L8 16L8 18L9 18L9 19L8 19L8 21L10 21L10 18L13 18L13 16L14 16L14 17L16 17L16 20L19 20L19 21L20 21L20 20L21 20L21 18L19 18L19 19L17 19L17 17L16 17L16 16L18 16L18 15L17 15L17 14L13 14L13 13L11 13L11 12L12 12L12 11L11 11L11 8L12 8L12 10L13 10L13 11L15 11L15 8L14 8L14 10L13 10L13 4L12 4L12 3L11 3L11 2L12 2L12 1L13 1L13 0ZM10 1L10 2L11 2L11 1ZM11 4L11 5L12 5L12 4ZM11 6L11 7L12 7L12 6ZM0 8L0 10L1 10L1 11L0 11L0 13L1 13L1 11L3 11L3 10L2 10L2 8ZM6 8L6 9L7 9L7 8ZM20 8L20 9L18 9L18 10L19 10L19 11L20 11L20 12L18 12L18 11L17 11L17 9L16 9L16 11L17 11L17 13L18 13L18 14L19 14L19 16L20 16L20 17L21 17L21 16L20 16L20 14L21 14L21 8ZM10 11L10 12L11 12L11 11ZM14 12L14 13L15 13L15 12ZM14 15L14 16L16 16L16 15ZM10 16L10 17L9 17L9 18L10 18L10 17L11 17L11 16ZM14 18L14 19L13 19L13 20L15 20L15 18ZM19 19L19 20L20 20L20 19ZM11 20L11 21L12 21L12 20ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                                    </td>
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc">
                                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="45" height="45" viewBox="0 0 45 45"><rect x="0" y="0" width="45" height="45" fill="#ffffff"></rect><g transform="scale(2.143)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 1L9 1L9 2L8 2L8 5L11 5L11 4L12 4L12 3L13 3L13 0L12 0L12 3L11 3L11 2L10 2L10 0ZM9 2L9 4L11 4L11 3L10 3L10 2ZM8 6L8 7L9 7L9 8L8 8L8 9L7 9L7 8L6 8L6 9L5 9L5 10L0 10L0 12L1 12L1 11L2 11L2 12L3 12L3 13L7 13L7 12L5 12L5 11L7 11L7 10L8 10L8 9L9 9L9 8L10 8L10 10L11 10L11 6L10 6L10 7L9 7L9 6ZM12 6L12 7L13 7L13 6ZM0 8L0 9L4 9L4 8ZM13 8L13 9L12 9L12 12L11 12L11 11L10 11L10 12L9 12L9 11L8 11L8 12L9 12L9 13L8 13L8 14L9 14L9 16L10 16L10 17L8 17L8 21L13 21L13 19L14 19L14 20L15 20L15 19L14 19L14 17L15 17L15 16L16 16L16 15L17 15L17 16L18 16L18 18L20 18L20 17L21 17L21 15L20 15L20 14L21 14L21 11L20 11L20 10L21 10L21 8L20 8L20 10L19 10L19 12L18 12L18 13L17 13L17 12L16 12L16 13L17 13L17 14L16 14L16 15L15 15L15 14L14 14L14 11L18 11L18 9L19 9L19 8L16 8L16 9L15 9L15 10L13 10L13 9L14 9L14 8ZM6 9L6 10L7 10L7 9ZM16 9L16 10L17 10L17 9ZM12 12L12 13L10 13L10 15L13 15L13 12ZM19 13L19 14L18 14L18 16L19 16L19 17L20 17L20 16L19 16L19 14L20 14L20 13ZM12 16L12 17L10 17L10 18L9 18L9 20L10 20L10 19L11 19L11 18L12 18L12 19L13 19L13 17L14 17L14 16ZM16 17L16 20L18 20L18 19L17 19L17 17ZM19 19L19 21L20 21L20 20L21 20L21 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                                    </td>
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc">
                                        
                                    </td>
                                </tr>
                                <tr style="margin-right:20px">
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; font-style:underline; margin-right:20px;"><strong>YUNI SASLIA,SE</strong></td>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; margin-right:20px;"><strong>FADLI DJUNAEDI, SE</strong></td>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; margin-right:20px;"><strong>DESSYANTI EKA PUTRI, SE</strong></td>
                                  </tr>
                                <tr>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc">Kepala Seksi Pembukuan</td>
                                    <td valign=" top" style="text-align: center; border: 0px solid #ccc">Kepala Bagian Keuangan &amp; Asset</td>
                                    <td valign=" top" style="text-align: center; border: 0px solid #ccc">Direktur Keuangan &amp; Asset</td>
                                  </tr>
                                <tr>
                                  <td valign="top" style="text-align: center; border: 0px solid #ccc">&nbsp;</td>
                                  <td valign=" top" style="text-align: center; border: 0px solid #ccc">&nbsp;</td>
                                  <td valign="top" style="text-align: center; border-top: 0px solid #000"></td>
                                </tr>
                                
                               
                            </tbody>
</table>
  
  <table align="center" class="footnote-1" width="650px" style="margin-top:20px; padding-top:5px; padding-bottom:20px;">
        <thead>
            <tr><th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr></thead>
        <tbody>
            <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            
            <tr style="height: 10px"><td></td></tr>
            <tr style=" width:650px;">
                <td style="text-align: left;">
                    <span class="span-qr" style="z-index: 99999">
                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="40" height="40" viewBox="0 0 40 40"><rect x="0" y="0" width="40" height="40" fill="#ffffff"></rect><g transform="scale(1.905)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M9 0L9 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L5 9L5 10L4 10L4 8L3 8L3 9L2 9L2 8L0 8L0 9L2 9L2 10L3 10L3 12L4 12L4 11L7 11L7 10L8 10L8 8L9 8L9 11L8 11L8 12L6 12L6 13L8 13L8 15L9 15L9 16L10 16L10 17L11 17L11 16L12 16L12 17L13 17L13 18L12 18L12 19L10 19L10 20L11 20L11 21L12 21L12 20L13 20L13 19L14 19L14 21L15 21L15 18L16 18L16 19L17 19L17 20L19 20L19 18L20 18L20 20L21 20L21 17L20 17L20 16L21 16L21 14L20 14L20 15L19 15L19 16L18 16L18 13L19 13L19 12L20 12L20 13L21 13L21 12L20 12L20 11L19 11L19 10L21 10L21 9L20 9L20 8L18 8L18 9L17 9L17 8L14 8L14 9L13 9L13 8L12 8L12 7L13 7L13 6L12 6L12 7L11 7L11 6L10 6L10 7L9 7L9 4L10 4L10 0ZM12 0L12 1L11 1L11 4L12 4L12 5L13 5L13 2L12 2L12 1L13 1L13 0ZM6 9L6 10L7 10L7 9ZM11 9L11 10L10 10L10 11L9 11L9 12L8 12L8 13L9 13L9 15L10 15L10 16L11 16L11 14L13 14L13 15L12 15L12 16L13 16L13 17L17 17L17 19L18 19L18 18L19 18L19 17L18 17L18 16L17 16L17 15L16 15L16 14L13 14L13 13L16 13L16 12L14 12L14 10L15 10L15 11L17 11L17 13L18 13L18 12L19 12L19 11L18 11L18 10L19 10L19 9L18 9L18 10L15 10L15 9L14 9L14 10L13 10L13 9ZM12 10L12 11L11 11L11 12L12 12L12 13L13 13L13 12L12 12L12 11L13 11L13 10ZM1 11L1 12L0 12L0 13L1 13L1 12L2 12L2 11ZM9 12L9 13L10 13L10 12ZM14 15L14 16L16 16L16 15ZM8 17L8 18L9 18L9 17ZM8 19L8 21L9 21L9 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                    </span>
                </td>
                <td>&nbsp;</td>
               <td colspan="2" valign="left" style="text-align: center">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan Peraturan Perusahaan yang berlaku, Perusahaan mengatur
                            bahwa
                            Dokumen ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
             <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            <tr style=" width:650px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA - Halaman 1 dari 1</i></span></td>
            </tr>

        </tbody>
    </table>
  <img src="../assets/img/footer.png" style="width:650px; display:block; margin-left:auto; margin-top: 10px; margin-right:auto;margin-bottom:20px;padding-bottom:0px" />
					</div>

					
				</div>
				</div>
				</div>
				</div>
						

								<!--End:: App Content-->
							</div>
																										
																										
																										
																								</div>
																								
																							</div>

									</div>
									
					  
					  
					  
                      </div>
															</div>
														</div>
												</div>
												<div class="tab-pane" id="m_tabs_6_4" role="tabpanel">
													
														<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-4"><br>
                          <label class="">Akun Persediaan :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>110401 - Persediaan</option>
								
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
									<option data-subtext="600001">Beban Iklan</option>
									<option data-subtext="600002">Beban Komisi</option>
									<option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
									<option data-subtext="600004">Beban Gaji, Upah & Honorer</option>
									<option data-subtext="600005">Beban Bonus, Pesangon & Kompensasi</option>
									<option data-subtext="600006">Beban Transportasi Karyawan</option>
									<option data-subtext="600007">Beban Catering & Makan Karyawan</option>
									<option data-subtext="600008">Beban Tunjangan Kesehatan</option>
									<option data-subtext="600009">Beban Asuransi Karyawan</option>
									<option data-subtext="600010">Beban THR</option>
									<option data-subtext="600011">Beban Listrik</option>
									<option data-subtext="600012">Beban PDAM</option>
									<option data-subtext="600013">Beban Telekomunikasi</option>
									<option data-subtext="600014">Beban Ekspedisi, POS, & Materai</option>
									<option data-subtext="600015">Beban Perjalanan Dinas</option>
									<option data-subtext="600016">Beban Perlengkapan Kantor</option>
									<option data-subtext="600017">Beban Pajak Penghasilan</option>
									<option data-subtext="600018">Beban Restribusi & Sumbangan</option>
									<option data-subtext="600019">Beban Sewa Gedung</option>
									<option data-subtext="600020">Beban Operasional Lainnya</option>
									<option data-subtext="600021">Beban Penyusutan Gedung</option>
									<option data-subtext="600022">Beban Penyusutan Kendaraan</option>
									<option data-subtext="600023">Beban Penyusutan Peralatan</option>
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
							</select>
                        </div>
						<div class="col-lg-4">
						<br>
                          <label class="">Akun Penjualan :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>400001 - Penjualan</option>
								
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
									<option data-subtext="600001">Beban Iklan</option>
									<option data-subtext="600002">Beban Komisi</option>
									<option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
									<option data-subtext="600004">Beban Gaji, Upah & Honorer</option>
									<option data-subtext="600005">Beban Bonus, Pesangon & Kompensasi</option>
									<option data-subtext="600006">Beban Transportasi Karyawan</option>
									<option data-subtext="600007">Beban Catering & Makan Karyawan</option>
									<option data-subtext="600008">Beban Tunjangan Kesehatan</option>
									<option data-subtext="600009">Beban Asuransi Karyawan</option>
									<option data-subtext="600010">Beban THR</option>
									<option data-subtext="600011">Beban Listrik</option>
									<option data-subtext="600012">Beban PDAM</option>
									<option data-subtext="600013">Beban Telekomunikasi</option>
									<option data-subtext="600014">Beban Ekspedisi, POS, & Materai</option>
									<option data-subtext="600015">Beban Perjalanan Dinas</option>
									<option data-subtext="600016">Beban Perlengkapan Kantor</option>
									<option data-subtext="600017">Beban Pajak Penghasilan</option>
									<option data-subtext="600018">Beban Restribusi & Sumbangan</option>
									<option data-subtext="600019">Beban Sewa Gedung</option>
									<option data-subtext="600020">Beban Operasional Lainnya</option>
									<option data-subtext="600021">Beban Penyusutan Gedung</option>
									<option data-subtext="600022">Beban Penyusutan Kendaraan</option>
									<option data-subtext="600023">Beban Penyusutan Peralatan</option>
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
							</select>
                        </div>
						<div class="col-lg-4">
						<br>
                          <label class="">Retur Penjualan :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>400003 - Retur Penjualan</option>
								
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
									<option data-subtext="600001">Beban Iklan</option>
									<option data-subtext="600002">Beban Komisi</option>
									<option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
									<option data-subtext="600004">Beban Gaji, Upah & Honorer</option>
									<option data-subtext="600005">Beban Bonus, Pesangon & Kompensasi</option>
									<option data-subtext="600006">Beban Transportasi Karyawan</option>
									<option data-subtext="600007">Beban Catering & Makan Karyawan</option>
									<option data-subtext="600008">Beban Tunjangan Kesehatan</option>
									<option data-subtext="600009">Beban Asuransi Karyawan</option>
									<option data-subtext="600010">Beban THR</option>
									<option data-subtext="600011">Beban Listrik</option>
									<option data-subtext="600012">Beban PDAM</option>
									<option data-subtext="600013">Beban Telekomunikasi</option>
									<option data-subtext="600014">Beban Ekspedisi, POS, & Materai</option>
									<option data-subtext="600015">Beban Perjalanan Dinas</option>
									<option data-subtext="600016">Beban Perlengkapan Kantor</option>
									<option data-subtext="600017">Beban Pajak Penghasilan</option>
									<option data-subtext="600018">Beban Restribusi & Sumbangan</option>
									<option data-subtext="600019">Beban Sewa Gedung</option>
									<option data-subtext="600020">Beban Operasional Lainnya</option>
									<option data-subtext="600021">Beban Penyusutan Gedung</option>
									<option data-subtext="600022">Beban Penyusutan Kendaraan</option>
									<option data-subtext="600023">Beban Penyusutan Peralatan</option>
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
							</select>
                        </div>
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-4">
                          <label class="">Akun Diskon Penjualan :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>400004 - Diskon Penjualan</option>
								
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
									<option data-subtext="600001">Beban Iklan</option>
									<option data-subtext="600002">Beban Komisi</option>
									<option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
									<option data-subtext="600004">Beban Gaji, Upah & Honorer</option>
									<option data-subtext="600005">Beban Bonus, Pesangon & Kompensasi</option>
									<option data-subtext="600006">Beban Transportasi Karyawan</option>
									<option data-subtext="600007">Beban Catering & Makan Karyawan</option>
									<option data-subtext="600008">Beban Tunjangan Kesehatan</option>
									<option data-subtext="600009">Beban Asuransi Karyawan</option>
									<option data-subtext="600010">Beban THR</option>
									<option data-subtext="600011">Beban Listrik</option>
									<option data-subtext="600012">Beban PDAM</option>
									<option data-subtext="600013">Beban Telekomunikasi</option>
									<option data-subtext="600014">Beban Ekspedisi, POS, & Materai</option>
									<option data-subtext="600015">Beban Perjalanan Dinas</option>
									<option data-subtext="600016">Beban Perlengkapan Kantor</option>
									<option data-subtext="600017">Beban Pajak Penghasilan</option>
									<option data-subtext="600018">Beban Restribusi & Sumbangan</option>
									<option data-subtext="600019">Beban Sewa Gedung</option>
									<option data-subtext="600020">Beban Operasional Lainnya</option>
									<option data-subtext="600021">Beban Penyusutan Gedung</option>
									<option data-subtext="600022">Beban Penyusutan Kendaraan</option>
									<option data-subtext="600023">Beban Penyusutan Peralatan</option>
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
							</select>
                        </div>
						<div class="col-lg-4">
                          <label class="">Barang Terkirim :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>110402 - Persediaan Terkirim</option>
								
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
									<option data-subtext="600001">Beban Iklan</option>
									<option data-subtext="600002">Beban Komisi</option>
									<option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
									<option data-subtext="600004">Beban Gaji, Upah & Honorer</option>
									<option data-subtext="600005">Beban Bonus, Pesangon & Kompensasi</option>
									<option data-subtext="600006">Beban Transportasi Karyawan</option>
									<option data-subtext="600007">Beban Catering & Makan Karyawan</option>
									<option data-subtext="600008">Beban Tunjangan Kesehatan</option>
									<option data-subtext="600009">Beban Asuransi Karyawan</option>
									<option data-subtext="600010">Beban THR</option>
									<option data-subtext="600011">Beban Listrik</option>
									<option data-subtext="600012">Beban PDAM</option>
									<option data-subtext="600013">Beban Telekomunikasi</option>
									<option data-subtext="600014">Beban Ekspedisi, POS, & Materai</option>
									<option data-subtext="600015">Beban Perjalanan Dinas</option>
									<option data-subtext="600016">Beban Perlengkapan Kantor</option>
									<option data-subtext="600017">Beban Pajak Penghasilan</option>
									<option data-subtext="600018">Beban Restribusi & Sumbangan</option>
									<option data-subtext="600019">Beban Sewa Gedung</option>
									<option data-subtext="600020">Beban Operasional Lainnya</option>
									<option data-subtext="600021">Beban Penyusutan Gedung</option>
									<option data-subtext="600022">Beban Penyusutan Kendaraan</option>
									<option data-subtext="600023">Beban Penyusutan Peralatan</option>
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
							</select>
                        </div>
						<div class="col-lg-4">
                          <label class="">Beban Pokok Penjualan :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>5101 - Beban Pokok Penjualan</option>
								
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
									<option data-subtext="600001">Beban Iklan</option>
									<option data-subtext="600002">Beban Komisi</option>
									<option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
									<option data-subtext="600004">Beban Gaji, Upah & Honorer</option>
									<option data-subtext="600005">Beban Bonus, Pesangon & Kompensasi</option>
									<option data-subtext="600006">Beban Transportasi Karyawan</option>
									<option data-subtext="600007">Beban Catering & Makan Karyawan</option>
									<option data-subtext="600008">Beban Tunjangan Kesehatan</option>
									<option data-subtext="600009">Beban Asuransi Karyawan</option>
									<option data-subtext="600010">Beban THR</option>
									<option data-subtext="600011">Beban Listrik</option>
									<option data-subtext="600012">Beban PDAM</option>
									<option data-subtext="600013">Beban Telekomunikasi</option>
									<option data-subtext="600014">Beban Ekspedisi, POS, & Materai</option>
									<option data-subtext="600015">Beban Perjalanan Dinas</option>
									<option data-subtext="600016">Beban Perlengkapan Kantor</option>
									<option data-subtext="600017">Beban Pajak Penghasilan</option>
									<option data-subtext="600018">Beban Restribusi & Sumbangan</option>
									<option data-subtext="600019">Beban Sewa Gedung</option>
									<option data-subtext="600020">Beban Operasional Lainnya</option>
									<option data-subtext="600021">Beban Penyusutan Gedung</option>
									<option data-subtext="600022">Beban Penyusutan Kendaraan</option>
									<option data-subtext="600023">Beban Penyusutan Peralatan</option>
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
							</select>
                        </div>
						
						
						
						
                        </div>
						
					
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-4">
                          <label class="">Retur Pembelian :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>110401 - Persediaan</option>
								
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
									<option data-subtext="600001">Beban Iklan</option>
									<option data-subtext="600002">Beban Komisi</option>
									<option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
									<option data-subtext="600004">Beban Gaji, Upah & Honorer</option>
									<option data-subtext="600005">Beban Bonus, Pesangon & Kompensasi</option>
									<option data-subtext="600006">Beban Transportasi Karyawan</option>
									<option data-subtext="600007">Beban Catering & Makan Karyawan</option>
									<option data-subtext="600008">Beban Tunjangan Kesehatan</option>
									<option data-subtext="600009">Beban Asuransi Karyawan</option>
									<option data-subtext="600010">Beban THR</option>
									<option data-subtext="600011">Beban Listrik</option>
									<option data-subtext="600012">Beban PDAM</option>
									<option data-subtext="600013">Beban Telekomunikasi</option>
									<option data-subtext="600014">Beban Ekspedisi, POS, & Materai</option>
									<option data-subtext="600015">Beban Perjalanan Dinas</option>
									<option data-subtext="600016">Beban Perlengkapan Kantor</option>
									<option data-subtext="600017">Beban Pajak Penghasilan</option>
									<option data-subtext="600018">Beban Restribusi & Sumbangan</option>
									<option data-subtext="600019">Beban Sewa Gedung</option>
									<option data-subtext="600020">Beban Operasional Lainnya</option>
									<option data-subtext="600021">Beban Penyusutan Gedung</option>
									<option data-subtext="600022">Beban Penyusutan Kendaraan</option>
									<option data-subtext="600023">Beban Penyusutan Peralatan</option>
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
							</select>
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
					  
					  
									
									
					
										

                     
					<!--begin: Datatable -->
					
                    <!--end: Datatable -->

                    
<!--begin::Modal 1-->
<div class="modal fade" id="tambah_favorit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH FAVORIT</h3>
											</div>
<div class="kt-widget__toolbar"><br>
																	 <span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								
							</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">Nama Favorit :</label>
														<input type="text" class="form-control form-control-sm" placeholder="">
													</div>
												



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
												
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Hak Akses Favorit :</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-6" id="hide1">Keseluruhan</button>&nbsp;
      													
                                <button type="button" class="btn btn-secondary btn-square btn-sm col-lg-5" id="show">Sebagian Cabang</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                  <div class="form-group row">
    													<div class="col-lg-12">
														<label class="kt-font-danger">Cabang :</label>
														 <select class="form-control kt-selectpicker" multiple="multiple">
                                      <option value="1" selected="">Makassar</option>
                                      <option value="2">Pare-Pare</option>
                                      <option value="2">Balikpapan</option>
                                      <option value="2">Samarinda</option>
                                      <option value="2">Tarakan</option>
                                      <option value="2">Nunukan</option>
                                      <option value="2">Manado</option>
                                      <option value="2">Bitung</option>
                                      <option value="2">Ambon - Yos Sudarso</option>
                                      <option value="2">Ambon - Slamet Riyadi</option>
                                      <option value="2">Ternate</option>
                                      <option value="2">Sorong</option>
                                  </select>
													</div>
													
												
                          </div>
						



											</div>
											</div>


												</div>
												
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">Hanya Pegawai  :</label>
														<select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
													</div>
												
										
									</div>
									


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-center">
												<div class="">
<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
<div class="modal fade" id="log_aktifitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">LOG AKTIFITAS</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
  <thead>
<tr style="text-align:center">
     <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">Pegawai</th>
     <th width="3%" rowspan="2" bgcolor="#f7fcff">Waktu</th>
	 <th width="3%" rowspan="2" bgcolor="#f7fcff">Status</th>
  </tr>
</thead>
  <tr>
    <td style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Nursiah, S.Kom&lt;hr&gt;Staff Accounting" data-html="true"><img src="../assets/media/users/100_7.jpg" alt="image" /></a></td>
    
    <td style="text-align:center">16 November 2025<br />
    08:38:00 WITA</span></td>
	<td style="text-align:center">Created</td>
  </tr>
<tr>
    <td style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Nursiah, S.Kom&lt;hr&gt;Staff Accounting" data-html="true"><img src="../assets/media/users/100_7.jpg" alt="image" /></a></td>
   
    <td style="text-align:center">16 November 2025<br />
    08:38:00 WITA</span></td>
	<td style="text-align:center">Modified</td>
  </tr>
<tr>
    <td style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003&lt;hr&gt;Nursiah, S.Kom&lt;hr&gt;Staff Accounting" data-html="true"><img src="../assets/media/users/100_7.jpg" alt="image" /></a></td>
    
    <td style="text-align:center">16 November 2025<br />
    08:38:00 WITA</span></td>
	<td style="text-align:center">Release</td>
  </tr>
</table>
<!-- begin:: pageline -->
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="kt-pagination  kt-pagination--danger">
						<select class="form-control kt-font-danger" style="width: 60px">
								<option value="10">5</option>
								<option value="20">10</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select>
							
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
                    <!-- end:: pageline -->

												
												
												
												
													
													

												</div>
												
											
									




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
    </div>
<div class="modal fade" id="rincian_jurnal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">RINCIAN JURNAL</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<table class="table-checkable" cellpadding="3" align="center" style="line-height:1.5; font-family: Tahoma; font-size: 12px;">
   <tr>
    <td width="10%" style="border-bottom:1px solid #ccc;"><b>Tanggal</b></td>
    <td width="1%" style="text-align: center; border-bottom:1px solid #ccc;">:</td>
    <td width="27%"  style="border-bottom:1px solid #ccc;">17 September 2026</td>
    <td width="3%" rowspan="2" >&nbsp;</td>
    <td style="text-align: left; border-bottom:1px solid #ccc;"><b>Nomor</b></td>
    <td width="1%" style="text-align: center; border-bottom:1px solid #ccc;">:</td>
    <td style="text-align: left; border-bottom:1px solid #ccc;">JV.2026.06.00002 &nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-default btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Lihat Data"><i class="fa fa-eye"></i></a></td>
  </tr>
  <tr>
    <td width="2%" style="border-bottom:1px solid #ccc;"><b>Keterangan</b></td>
   <td width="1%" style="text-align: center; border-bottom:1px solid #ccc;">:</td>
    <td width="47%" style="border-bottom:1px solid #ccc;">Pencatatan Beban Beban Pokok Penjualan</td>
    
  </tr>
</table>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

<table class="table table-responsive table-striped- table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="10%" colspan="2" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Akun Perkiraan</th>
											  <th width="10%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Debit</th>
											  <th width="10%" bgcolor="#f7fcff" style="border-bottom:2px solid #0e62ae; border-top:2px solid #0e62ae;">Kredit</th>
									      </tr>
										</thead>
										<tbody>
											<tr>
												<td colspan="2" nowrap style="text-align:left; border-bottom:1px solid #ccc;"><b>5101</b> - Beban Pokok Penjualan<br><i>Bensin</i></td>
												<td nowrap="nowrap" style="text-align:center; border-bottom:1px solid #ccc;"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
											    </div></td>
												<td nowrap="nowrap" style="text-align:center; border-bottom:1px solid #ccc;">&nbsp;</td>
									      </tr>
										  <tr>
												<td width="1%" nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td width="7%" class="text-left"><b>210202</b> - PPh 23 Pembelian<br><i>Pencatatan Beban Beban Pokok Penjualan<i></td>
												<td nowrap="nowrap" style="text-align:center">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:center"><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
											    </div></td>
										  </tr>
</tbody>
									</table>
												</div>
												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												

												
												
												
												
													
													

												</div>
												
											
									




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>
    </div>
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
<?php require '../layouts/foot.php' ?>
