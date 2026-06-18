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
                    Form Penerimaan Barang
                </h3>
				


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
				
					  
					  
					  <div class="col-xl-9">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

				
                    <div class="kt-portlet__body">
<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
														<i class="fa fa-boxes"></i> Penerimaan Barang
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-file-alt"></i> Referensi Dokumen
													</a>
												</li>
												<!--<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
														<i class="fa fa-image"></i>Foto Barang
													</a>
												</li>-->
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
													
														
														<div class="kt-portlet__body">
															<div class="kt-portlet__content"><br>
																<div class="form-group row">
						
						<div class="col-lg-3">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Terima Dari :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Pegawai</option>
														<option>Vendor</option>
														<option>Lainnya</option>
														
														
														</select>
                        </div>
						<div class="col-lg-3">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Pegawai :</label>
                          <select class="form-control kt-selectpicker form-control" data-live-search="true" disabled>
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
						<div class="col-lg-3">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Vendor :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true" disabled>
														<option>PT. Aksi Kode Indonesia</option>
														<option>PT. Dili Jaya Indonesia</option>
														<option>Lainnya</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-3">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Lainnya :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        </div>
						
						
											</div>
											
						
						
						
                        </div>
						
						
					 
                        </div>
                        </div>
																
												<div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
													
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<br>
																<div class="form-group row">
						<div class="col-lg-3">
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Referensi PO :</label>
                          <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
						<div class="col-lg-3">
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Vendor :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        </div>
						<div class="col-lg-3">
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Kategori :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        </div>
						<div class="col-lg-3">
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Project :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="" disabled>
                        </div>
						
                      
                      </div>
																
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
					 <div class="col-lg-12">
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th colspan="4" bgcolor="#f7fcff">Barang</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Volume</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Satuan</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">QC</th>
											  <th width="10%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">Kode</th>
											  <th width="8%" bgcolor="#f7fcff">Nama</th>
											  <th width="5%" bgcolor="#f7fcff">Kategori</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal Pembelian</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td nowrap="nowrap" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30"></td>
												<td nowrap="nowrap" style="text-align:left">HUB SWITCH 8 PORT MANAGEABLE CLOUD</td>
												<td nowrap="nowrap" style="text-align:left">Kebutuhan Project</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td nowrap="nowrap" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">
															    <span></span> </label></td>
												<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>

										  </tr>
										  <tr>
												<td id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:center"><img src="../assets/img/qrcode.jpg" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:left">NFC PAYMENT READER</td>
												<td nowrap="nowrap" style="text-align:left">Kebutuhan Project</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td nowrap="nowrap" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">
															    <span></span> </label></td>
												<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:center"><img src="../assets/img/qrcode.jpg" alt="" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:left">PRINTER THERMAL</td>
												<td nowrap="nowrap" style="text-align:left">Kebutuhan Project</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td nowrap="nowrap" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
												  <input type="checkbox" checked="checked" />
												  <span></span></label></td>
												<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												   <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td id="kt_table_1">4</td>
												<td nowrap="nowrap" style="text-align:center"><img src="../assets/img/qrcode.jpg" alt="" width="30" height="30" /></td>
												<td nowrap="nowrap" style="text-align:left">VEHICLE LOOP DETECTOR</td>
												<td nowrap="nowrap" style="text-align:left">Kebutuhan Project</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td nowrap="nowrap" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
												  <input type="checkbox" checked="checked" />
												  <span></span></label></td>
												<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
  <td id="kt_table_4">5</td>
  <td nowrap="nowrap" style="text-align:center"><span style="text-align:center"><img src="../assets/img/qrcode.jpg" alt="" width="30" height="30" /></span></td>
  <td nowrap="nowrap" style="text-align:left">UHF READER MID RANGE</td>
  <td nowrap="nowrap" style="text-align:left">Kebutuhan Project</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">Unit</td>
  <td nowrap="nowrap" style="text-align:center"><label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">
															    <span></span> </label></td>
  <td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="detail-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      <li class="kt-nav__item"> <a href="cetak-label-barang.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-receipt"></i> <span class="kt-nav__link-text">Cetak Label Barang</span> </a> </li>
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
</tr>
</tbody>
									</table>
															</div>
															</div>
														
															</div>
												</div>
												<div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
													
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																
																<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Barang</div><br><br>
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
																										</div>
																										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																										
																										
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
											<div class="kt-portlet__content">
												
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
						
						
						
					 
									 
									 
									
									</div>
									
									
									</div>


									</div>
									
							<!--end:: Portlet-->


										</div>
					  <div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Gudang</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Lokasi Gudang :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Makassar</option>
														<option>Ambon</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Lemari :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
														<option>1</option>
														<option>2</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Rak :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
														<option>1</option>
														<option>2</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						
						
						
						
                        </div>
						
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-12">
                          <label class="">Penanggung Jawab :</label>
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
