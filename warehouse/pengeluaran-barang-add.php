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
                    Form Pengeluaran Barang
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											WH/OUT/0826.01.005</span>
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
										<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

				
                    <div class="kt-portlet__body">
<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
														<i class="fa fa-boxes"></i> Pengeluaran Barang
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-file-alt"></i> Data Barang
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
				
					  <div class="col-lg-2">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pengeluaran Barang</div><br><br>
										 <div class="kt-portlet__body">
                     
						
						<div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Nomor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="WH/OUT/0826.01.005">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Tanggal :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="24 September 2026">
                        </div>
                        </div>
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pembuat Pengeluaran Barang</div><br><br>
										 <div class="kt-portlet__body">
                     
						
						<div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Nama Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="SPV Operasional Gate">
                        </div>
                        </div>
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Permintaan</div><br><br>
										 <div class="kt-portlet__body">
                     
						
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Nomor Permintaan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="00005RO010826">
                        </div>
						<div class="col-lg-6">
                          <label class="">Tanggal Permintaan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="24 September 2026">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Nama Pegawai :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK">Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan" class="a">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional" class="a">
					 																<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Teknologi dan Riset" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<option value="12" selected>Keseluruhan</option>

					 														</select>
                        </div>
						
						<div class="col-lg-6">
                          <label class="">Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="SPV Operasional Gate">
                        </div>
                        </div>
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-2">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Catatan</div><br><br>
										 <div class="kt-portlet__body">
                      
						
						
						  <div class="form-group row">
						 
						
						<div class="col-lg-12">
                          <label class="">Tujuan Pengeluaran Barang :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="6" placeholder="Agar Segera Dikirimkan" ></textarea>
                        </div>
                        </div>
						
						  
						
                      </div>
                      </div>
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
							<div class="col-xl-10">&nbsp;
 
 
										</div>
   
 <div class="col-xl-2" style="text-align:right; padding-right:20px;">
 <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_tambah_barang_keluar">
											<i class="fa fa-plus-circle"></i>Tambah Barang
										</a>
 
										</div>
										

										
										
										</div>
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					 <div class="col-lg-12">
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
										
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th colspan="6" bgcolor="#f7fcff">Barang</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Vol</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Satuan</th>
											  <th colspan="2" bgcolor="#f7fcff">Kondisi</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Foto</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">Kode SKU</th>
											  <th width="1%" bgcolor="#f7fcff">QR Code Barang</th>
											  <th width="1%" bgcolor="#f7fcff">Kategori</th>
											  <th width="8%" bgcolor="#f7fcff">Jenis</th>
											  <th width="8%" bgcolor="#f7fcff">Nama</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal Pembelian</th>
											  <th width="1%" bgcolor="#f7fcff">Baru</th>
											  <th width="1%" bgcolor="#f7fcff">Bekas</th>
								          </tr>
										</thead>
										<tbody>
										
											<tr>
											  <td align="right">1</td>
												<td nowrap="nowrap" style="text-align:center">001201010726</td>
												<td nowrap="nowrap" style="text-align:left">0011010107260001</td>
												<td nowrap="nowrap" style="text-align:left">Jaringan</td>
												<td nowrap="nowrap" style="text-align:left">Hub Switch Gigabit Manage</td>
												<td nowrap="nowrap" style="text-align:left">Ruijie Reyee RG-ES208GC</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">3</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td style="text-align:center">2</td>
												<td style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" data-toggle="modal" data-target="#modal_foto" data-skin="brand" data-html="true" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_barang_keluar"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>

										  </tr>
										  <tr>

												<td align="right">2</td>
												<td nowrap="nowrap" style="text-align:center">000201010726</td>
												<td nowrap="nowrap" style="text-align:left">0002010107260001</td>
												<td nowrap="nowrap" style="text-align:left">Reader</td>
												<td nowrap="nowrap" style="text-align:left">Payment Reader</td>
												<td nowrap="nowrap" style="text-align:left">NFC PAYMENT READER</td>
												<td nowrap="nowrap" style="text-align:center">24 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td style="text-align:center">1</td>
												<td style="text-align:center">0</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" data-toggle="modal" data-target="#modal_foto" data-skin="brand" data-html="true" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_barang_keluar"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
											    </div></td>
										  </tr>
<tr>
												<td align="right">3</td>
												<td nowrap="nowrap" style="text-align:center">000401010726</td>
												<td nowrap="nowrap" style="text-align:left">0004010107260001</td>
												<td nowrap="nowrap" style="text-align:left">Printer</td>
												<td nowrap="nowrap" style="text-align:left">Thermal</td>
												<td nowrap="nowrap" style="text-align:left">TMT82X Lan Port</td>
	  <td nowrap="nowrap" style="text-align:center">24 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td style="text-align:center">1</td>
												<td style="text-align:center">0</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" data-toggle="modal" data-target="#modal_foto" data-skin="brand" data-html="true" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												   <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_barang_keluar"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
											    </div></td>
										  </tr>
<tr>
												<td align="right">4</td>
												<td nowrap="nowrap" style="text-align:center">002201010726</td>
												<td nowrap="nowrap" style="text-align:left">0022010107260001</td>
												<td nowrap="nowrap" style="text-align:left">Sensor</td>
												<td nowrap="nowrap" style="text-align:left">VLD</td>
												<td nowrap="nowrap" style="text-align:left">VLD Barrier Gate Matrix</td>
	  <td nowrap="nowrap" style="text-align:center">24 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td style="text-align:center">1</td>
												<td style="text-align:center">0</td>
												<td nowrap="nowrap" style="text-align:center"><button type="button" data-toggle="modal" data-target="#modal_foto" data-skin="brand" data-html="true" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												   <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_barang_keluar"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
											        </ul>
											      </div>
											    </div></td>
										  </tr>
<tr>
  <td align="right">5</td>
  <td nowrap="nowrap" style="text-align:center">002601010726</span></td>
  <td nowrap="nowrap" style="text-align:left">0026010107260001</td>
  <td nowrap="nowrap" style="text-align:left">Sensor</td>
  <td nowrap="nowrap" style="text-align:left">Member Mid Range</td>
  <td nowrap="nowrap" style="text-align:left">Electron HW-VX6330K V2</td>
  <td nowrap="nowrap" style="text-align:center">24 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">Unit</td>
  <td style="text-align:center">1</td>
  <td style="text-align:center">0</td>
  <td nowrap="nowrap" style="text-align:center"><button type="button" data-toggle="modal" data-target="#modal_foto" data-skin="brand" data-html="true" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="#" class="kt-nav__link" data-toggle="modal" data-target="#modal_detail_barang_keluar"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail</span> </a> </li>
												      
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
					  
					 
									
									
					
										

                     
					<!--begin: Datatable -->
					
                    <!--end: Datatable -->

                    
<!--begin::Modal 1-->
									<div class="modal fade" id="modal_tambah_barang_keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-luggage-cart"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH BARANG KELUAR</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_7_1" role="tab">
														<i class="fa fa-boxes"></i> Rincian Barang
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_2" role="tab">
														<i class="fa fa-file-alt"></i> Data Barang Keluar
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_7_3" role="tab">
														<i class="fa fa-file-alt"></i> Spesifikasi
													</a>
												</li>
												
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="m_tabs_7_1" role="tabpanel">
													
														
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<div class="form-group row">
																<div class="col-xl-6">
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Gudang</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
						 <div class="col-lg-12">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Gudang :</label>
                           <input type="text" class="form-control form-control-sm" disabled placeholder="Makassar - Slamet Riyadi">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Stok Saat ini :</label>
                          <input type="text" class="form-control form-control-sm" disabled placeholder="100">
                        </div>
						<div class="col-lg-6">
                          <label class="">Satuan :</label>
                          <input type="text" class="form-control form-control-sm" disabled placeholder="Pieces">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                     <div class="col-lg-4">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Rak :</label>
                            <input type="text" class="form-control form-control-sm" disabled placeholder="1">
                        </div>
						<div class="col-lg-4">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Row :</label>
                           <input type="text" class="form-control form-control-sm" disabled placeholder="1">
                        </div>
						<div class="col-lg-4">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Box :</label>
                           <input type="text" class="form-control form-control-sm" disabled placeholder="1">
                        </div>
						
						
                    
						
						
                    


						
																										
																										
																										
																								</div>
																								
																							</div>

									</div>
									
					  
					  
					  
                      </div>
                      </div>
																<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Barang Keluar</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
																									
<div class="col-lg-12">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="Cari Barang" data-html="true">*</code> Cari Barang / Jasa :</label>
                         <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>- Silahkan Pilih -</option>
								<optgroup label="Casing" class="a">
									<option data-subtext="000101010726">Custom Casing Dispenser Single</option>
									
								</optgroup>
								<optgroup label="Jaringan" class="a">
									<option data-subtext="001101010726">Ruijie Reyee RG-ES108GC</option>
									<option data-subtext="001201010726">Ruijie Reyee RG-ES208GC</option>
									<option data-subtext="001301010726">Ruijie Reyee RG-ES308GC</option>
								</optgroup>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-eye'></i> Lihat Semua</a>" class="select-option-add" value="add"></option>
								
							</select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Volume :</label>
                          <input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="3">
                        </div>
						<div class="col-lg-6">
                          <label class="">Satuan :</label>
                          <input type="text" class="form-control form-control-sm" disabled placeholder="Pieces">
                        </div>
                        </div>
						
                     
                    
						
						
                     
						
						
						
                     
																		
																										
																								</div>
																								
																							</div>

									</div>
									</div>
									
					  <div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Barang</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									
						

						
<div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Kode SKU :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000101010726">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Kategori :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mini PC">
                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Jenis :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hub Switch Gigabit Manage">
                      </div>
                        </div>
                        </div>
						
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

						
						<div class="col-lg-6">
                          <label class="">Nama Barang :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled placeholder="Asus NUC 14MNK15 - DDR5 8Gb +NVME 256Gb">
                      </div>
                        </div>
						<div class="col-lg-6" >
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Tanggal Pembelian :</label>
                          <div class="input-group date">
													<input type="text" class="form-control form-control-sm" disabled placeholder="15 September 2026" id="kt_datepicker_2" >
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
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
												<div class="tab-pane" id="m_tabs_7_2" role="tabpanel">
													
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<br>
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>

											  <th width="7%" bgcolor="#f7fcff">QR Code</th>
											  <th width="1%" bgcolor="#f7fcff">Kondisi</th>
											  <th width="7%" bgcolor="#f7fcff">Foto Barang</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center;" valign="top" id="kt_table_1">1</td>
												
												<td style="text-align:left" valign="top" nowrap><div class="kt-input-icon kt-input-icon--right">
												  <input type="text" class="form-control form-control-sm" placeholder="Input / Scan Perangkat" id="generalSearch">
											  <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div></td>
												<td style="text-align:center" valign="top" nowrap><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td valign="top" nowrap="nowrap" style="text-align:left"><div class="kt-input-icon kt-input-icon--right">
												  <input type="text" class="form-control form-control-sm" placeholder="Input / Scan Perangkat" id="generalSearch" />
												  <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
												<td valign="top" nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Bekas</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td valign="top" nowrap="nowrap" style="text-align:left"><div class="kt-input-icon kt-input-icon--right">
												  <input type="text" class="form-control form-control-sm" placeholder="Input / Scan Perangkat" id="generalSearch" />
												  <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
												<td valign="top" nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
										  </tr>

										</tbody>
									</table>
															</div>
														</div>
												</div>
												
												<div class="tab-pane" id="m_tabs_7_3" role="tabpanel">
													
														<div class="kt-portlet__body">
											<div class="kt-portlet__content">
<br>
												<div class="col-lg-12">
					    
                          <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>

											  <th width="7%" bgcolor="#f7fcff">Spesifikasi</th>
											  <th width="15%" bgcolor="#f7fcff">Detail Spesifikasi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" disabled placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" disabled placeholder=""></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" /></td>
												<td nowrap="nowrap" style="text-align:center"><input type="text" class="form-control form-control-sm" disabled placeholder=""></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" /></td>
												<td nowrap="nowrap" style="text-align:center"><input type="text" class="form-control form-control-sm" disabled placeholder=""></td>
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
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">
													<button type="button" class="btn btn-success">
					<i class="fa fa-check-circle"></i>Simpan</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							</div>
							<div class="modal fade" id="modal_foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon" style="font-size:25px;"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-bold">FOTO</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										
										<div class="kt-portlet__body" align="center">
											<div class="kt-portlet__content">
											<div class="col-xl-12">
											<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/blog/blog3.jpg" alt="image" style="max-width:185px !important;height:150px" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">&nbsp;&nbsp;<img src="../assets/img/blog/blog3.jpg" alt="image" style="max-width:185px !important;height:150px" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/blog/blog3.jpg" alt="image" style="max-width:185px !important;height:150px" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">&nbsp;&nbsp;<img src="../assets/img/blog/blog3.jpg" alt="image" style="max-width:185px !important;height:150px" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
											
					
				</div>
											
												
						
                     
						
                     
					  
                     
									</div>
									

									</div>
								</div>
							</div>

									</div>
								</div>
							</div>
							<div class="modal fade" id="modal_detail_barang_keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-luggage-cart"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">DETAIL BARANG KELUAR</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_9_1" role="tab">
														<i class="fa fa-boxes"></i> Rincian Barang
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_9_2" role="tab">
														<i class="fa fa-file-alt"></i> Data Barang Keluar
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_9_3" role="tab">
														<i class="fa fa-file-alt"></i> Spesifikasi Barang
													</a>
												</li>
												
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="m_tabs_9_1" role="tabpanel">
													
														
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<div class="form-group row">
																<div class="col-xl-6">
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Gudang</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
						 <div class="col-lg-12">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Gudang :</label>
                           <input type="text" class="form-control form-control-sm" disabled placeholder="Makassar - Slamet Riyadi">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Stok Saat ini :</label>
                          <input type="text" class="form-control form-control-sm" disabled placeholder="100">
                        </div>
						<div class="col-lg-6">
                          <label class="">Satuan :</label>
                          <input type="text" class="form-control form-control-sm" disabled placeholder="Pieces">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                     <div class="col-lg-4">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Rak :</label>
                            <input type="text" class="form-control form-control-sm" disabled placeholder="1">
                        </div>
						<div class="col-lg-4">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Row :</label>
                           <input type="text" class="form-control form-control-sm" disabled placeholder="1">
                        </div>
						<div class="col-lg-4">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Box :</label>
                           <input type="text" class="form-control form-control-sm" disabled placeholder="1">
                        </div>
						
						
                    
						
						
                    


						
																										
																										
																										
																								</div>
																								
																							</div>

									</div>
									
					  
					  
					  
                      </div>
                      </div>
																<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Barang Keluar</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									
<div class="form-group row">
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Volume :</label>
                          <input type="text" class="form-control form-control-sm" disabled placeholder="3">
                        </div>
						<div class="col-lg-6">
                          <label class="">Satuan :</label>
                          <input type="text" class="form-control form-control-sm" disabled placeholder="Pieces">
                        </div>
                        </div>
						
                     
                    
						
						
                     
						
						
						
                     
																		
																										
																								</div>
																								
																							</div>

									</div>
									</div>
									
					  <div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Barang</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									
						

						
<div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Kode SKU :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000101010726">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Kategori :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mini PC">
                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Jenis :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Hub Switch Gigabit Manage">
                      </div>
                        </div>
                        </div>
						
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

						
						<div class="col-lg-6">
                          <label class="">Nama Barang :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled placeholder="Asus NUC 14MNK15 - DDR5 8Gb +NVME 256Gb">
                      </div>
                        </div>
						<div class="col-lg-6" >
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Tanggal Pembelian :</label>
                          <div class="input-group date">
													<input type="text" class="form-control form-control-sm" disabled placeholder="15 September 2026" id="kt_datepicker_2" >
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
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
												<div class="tab-pane" id="m_tabs_9_2" role="tabpanel">
													
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<br>
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>

											  <th width="7%" bgcolor="#f7fcff">QR Code</th>
											  <th width="1%" bgcolor="#f7fcff">Kondisi</th>
											  <th width="1%" bgcolor="#f7fcff">Foto</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center;" valign="top" id="kt_table_1">1</td>
												
												<td style="text-align:left" valign="top" nowrap><div class="kt-input-icon kt-input-icon--right">
												  <input type="text" class="form-control form-control-sm" disabled placeholder="0001010107260001" id="generalSearch">
											  <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div></td>
												<td style="text-align:center" valign="top" nowrap><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download"> <i class="fa flaticon-download-1"></i> </span></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td valign="top" nowrap="nowrap" style="text-align:left"><div class="kt-input-icon kt-input-icon--right">
												  <input type="text" class="form-control form-control-sm" disabled placeholder="0001010107260002" id="generalSearch" />
												  <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
												<td valign="top" nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-danger btn-sm">Bekas</span></td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download"> <i class="fa flaticon-download-1"></i> </span></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td valign="top" nowrap="nowrap" style="text-align:left"><div class="kt-input-icon kt-input-icon--right">
												  <input type="text" class="form-control form-control-sm" disabled placeholder="0001010107260003" id="generalSearch" />
												  <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
												<td valign="top" nowrap="nowrap" style="text-align:center"><span type="button" class="btn btn-label-brand btn-sm">Baru</span></td>
												<td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Download"> <i class="fa flaticon-download-1"></i> </span></td>
										  </tr>

										</tbody>
									</table>
															</div>
														</div>
												</div>
												<div class="tab-pane" id="m_tabs_9_3" role="tabpanel">
													
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<br>
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>

											  <th width="10%" bgcolor="#f7fcff">Spesifikasi</th>
											  <th width="10%" bgcolor="#f7fcff">Detail Spesifikasi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" disabled placeholder=""></td>
												<td style="text-align:center" nowrap><textarea class="form-control" disabled id="exampleTextarea" rows="3" placeholder=""></textarea></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" /></td>
												<td nowrap="nowrap" style="text-align:center"><textarea class="form-control" disabled="disabled" id="exampleTextarea" rows="3" placeholder=""></textarea></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" /></td>
												<td nowrap="nowrap" style="text-align:center"><textarea class="form-control" disabled="disabled" id="exampleTextarea" rows="3" placeholder=""></textarea></td>
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
