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
											PENAWARAN</span>
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
										Lainnya
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">

						<!--begin::Nav-->
						<ul class="kt-nav">

							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#tambah_favorit">
									<i class="kt-nav__link-icon fa fa-bookmark"></i>
									<span class="kt-nav__link-text">Tambah Ke Favorit</span>
								</a>
							</li>
<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#log_aktifitas">
									<i class="kt-nav__link-icon fa fa-history"></i>
									<span class="kt-nav__link-text">Log Aktifitas</span>
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
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#pelaksanaan">
									<i class="kt-nav__link-icon fa fa-file-export"></i>
									<span class="kt-nav__link-text">Pelaksanaan</span>
								</a>
							</li>
							
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#faktur">
									<i class="kt-nav__link-icon fa fa-file-invoice"></i>
									<span class="kt-nav__link-text">Faktur</span>
								</a>
							</li>
							
						</ul>
						<!--end::Nav-->
					</div>
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
														<i class="fa fa-file-contract"></i> Rincian Penawaran
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-file-invoice-dollar"></i> Rencana Anggaran Biaya
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
														<i class="fa fa-file-upload"></i>Dokumen Pendukung
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
																<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
																										<div class="col-lg-6">
                          <label class="">Nomor :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="SQ.062026.01.001">
                      </div>
                        </div>
						<div class="col-lg-6">
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
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
														<label class="kt-font-danger">Pilih Pelanggan :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>PT. Angkasa Pura Indonesia (Persero)</option>
														<option>PT. Pelabuhan Indonesia (Persero) Regional 4</option>
														<option>PT. Pelabuhan Indonesia (Persero) Regional 4 - Cabang Makassar</option>
														
														</select>
													</div>
													</div>
													
                    
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="Isikan Nama Barang dengan Lengkap" data-html="true">*</code> Nama Pekerjaan :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
																										</div>
																										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																										
																										
																								</div>
																								
																							</div>

									</div>
									
					  
					  
					  
                      </div>
					  <div class="col-xl-5">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Surat Penawaran</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
					  
						
						
						
						<div class="col-lg-2">
                          <label>Lampiran :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>1</option>
														<option>2</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-4" >
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Satuan Lampiran :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Berkas</option>
														<option>Dokumen</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-6" >
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Perihal :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Tujuan Penawaran :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
						<div class="col-lg-6" >
                          <label>Tanggal Penawaran :</label>
                          <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="5 Mei 2026" id="kt_datepicker_2" >
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="Pilih Kategori" data-html="true">*</code> Tanda Tangan :</label>
                          <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000000001 - Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">000000003 - Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000000002 - Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000000004 - Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000000005 - Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
                        </div>
						
						
						
						
						
						
						
                        </div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>																	
																										
																										
																								</div>
																								
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
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">HARGA SATUAN</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">TOTAL</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">AKSI</th>

										  </tr>
											<tr style="text-align:center">
											  <th width="2%" bgcolor="#f7fcff">QTY</th>
											  <th width="2%" bgcolor="#f7fcff">SATUAN</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:right" id="kt_table_1">1</td>
												<td colspan="7" nowrap style="text-align:left"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Material</option>
												  <option>Jasa</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
											  <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">&nbsp;</td>
												<td width="1%" style="text-align:right" nowrap>1.1</td>
												<td colspan="6" nowrap style="text-align:left"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Kategori Material</option>
												  <option>Dispenser Single</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
											<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">&nbsp;</td>
												<td nowrap="nowrap" style="text-align:left">&nbsp;</td>
												<td width="1%" style="text-align:right" nowrap>1.1.1</td>
												<td nowrap="nowrap" style="text-align:left"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Kode - Nama Barang</option>
												  <option>IP CAM 4MP OUTDOOR BULLET CAMERA</option>
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
											<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
										    <td style="text-align:right" id="kt_table_8">2</td>
										    <td colspan="7" nowrap="nowrap" style="text-align:left"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Jasa</option>
												  <option>Material</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
										    <td nowrap="nowrap" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
										      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
									      </tr>
										  <tr>
										    <td style="text-align:center" id="kt_table_7">&nbsp;</td>
										    <td width="1%" style="text-align:right" nowrap>2.1</td>
										    <td colspan="6" nowrap="nowrap" style="text-align:left"><select name="select3" class="form-control kt-selectpicker" data-live-search="true">
									          <option selected="selected">Pilih Kategori Jasa</option>
                                              <option>Akomodasi</option>
										        <option>Instalasi</option>
									          <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
								            </select></td>
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
										    <td colspan="6" nowrap="nowrap" style="text-align:left"><select name="select6" class="form-control kt-selectpicker" data-live-search="true">
									          <option selected="selected">Pilih Kategori Jasa</option>
										        <option>Akomodasi</option>
										        <option>Instalasi</option>
										        <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
								            </select></td>
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
										    <td colspan="7" id="kt_table_11" style="text-align:right">SUB TOTAL</td>
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
																									<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="10%" bgcolor="#f7fcff">Dokumen</th>

											  <th width="10%" bgcolor="#f7fcff">File</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:left" nowrap><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Perencanaan</option>
                                              <option selected="selected">Document Sheet</option>
										      <option>Analisa Biaya</option>
										      <option>Lainnya</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
									        </select></td>
												
												<td style="text-align:center" nowrap><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div></td>
											  <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td style="text-align:left" nowrap><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Perencanaan</option>
                                              <option selected="selected">Document Sheet</option>
										      <option>Analisa Biaya</option>
										      <option>Lainnya</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
									        </select></td>
												
												<td style="text-align:center" nowrap><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div></td>
											<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td style="text-align:left" nowrap><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
										      <option selected="selected">Perencanaan</option>
                                              <option selected="selected">Document Sheet</option>
										      <option>Analisa Biaya</option>
										      <option>Lainnya</option>
										      <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
									        </select></td>
												
												<td style="text-align:center" nowrap><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div></td>
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
		<div class="modal fade" id="pengiriman" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">PENGIRIMAN</h3>
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
