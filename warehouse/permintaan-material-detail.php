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
                    Detail 
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Permintaan Material</span>
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
														<i class="fa fa-file-alt"></i> Data Permintaan
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-boxes"></i> Data Material
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
															<div class="kt-portlet__content">
																
					  <div class="form-group row">
				
					  
					  
					  <div class="col-lg-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
					  
						
					  
						<div class="col-lg-12">
                           <label class="">Penerima :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Gudang Makassar">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
					  
						<div class="col-lg-12">
                           <label class="">Nomor Permintaan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="RO.062026.01.001">
                        </div>
                        </div>
						
						
						  
						
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pemohon</div><br><br>
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
					  <div class="col-lg-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Waktu</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
					  
						
					  
						
                          <div class="col-lg-6">
                          <label class="">Tanggal Permintaan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="24 September 2026">
                        </div>
						<div class="col-lg-6">
                          <label class="">Waktu Permintaan :</label>
                         <div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="09:30:00" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">WITA</span>
													</div>
												</div>
                        </div>
						
						
						
						
                        </div>
						 
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
					  
						
					  
						
                          <div class="col-lg-6">
                          <label class="">Tanggal Deadline :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="24 September 2026">
                        </div>
						<div class="col-lg-6">
                          <label class="">Waktu Deadline :</label>
                         <div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="21:30:00" aria-describedby="basic-addon2" disabled>
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">WITA</span>
													</div>
												</div>
                        </div>
						
						
						
						
                        </div>
						
						  
						
                      </div>
                      </div>
                      </div>
					  
					  <div class="col-lg-2">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Catatan Permintaan</div><br><br>
										 <div class="kt-portlet__body">
                      
						
						
						  <div class="form-group row">
						 
						
						<div class="col-lg-12">
                          <label class="">Catatan Permintaan :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="6" placeholder="Agar Segera Dikirimkan" disabled></textarea>
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
					 <div class="col-lg-12">
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th colspan="5" bgcolor="#f7fcff">Permintaan Material</th>
											  <th colspan="3" bgcolor="#f7fcff">Lokasi </th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Instalasi </th>
											  <th colspan="2" bgcolor="#f7fcff">Material Pengganti</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Penerima</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">QR Code<br>Material</th>
											  <th width="1%" bgcolor="#f7fcff">Kategori<br />Material</th>
											  <th width="8%" bgcolor="#f7fcff">Nama</th>
											  <th width="1%" bgcolor="#f7fcff">Volume</th>
											  <th width="1%" bgcolor="#f7fcff">Satuan</th>
											  <th width="1%" bgcolor="#f7fcff">Gate</th>
											  <th width="1%" bgcolor="#f7fcff">Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">Nama Jalur</th>
											  <th width="1%" bgcolor="#f7fcff">QR Code</th>
											  <th width="1%" bgcolor="#f7fcff">By</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:right">1</td>
												<td nowrap="nowrap" style="text-align:left">0001DSS01180626</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td nowrap="nowrap" style="text-align:left">HUB SWITCH 8 PORT MANAGEABLE CLOUD</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Masuk</td>
												<td nowrap="nowrap" style="text-align:center">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">0010DSS01180626</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
										  </tr>
										  <tr>
												<td style="text-align:right">2</td>
												<td nowrap="nowrap" style="text-align:left">0002DSS01180626</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td nowrap="nowrap" style="text-align:left">NFC PAYMENT READER</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Masuk</td>
												<td nowrap="nowrap" style="text-align:center">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">0011DSS01180626</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
										  </tr>
<tr>
												<td style="text-align:right">3</td>
												<td nowrap="nowrap" style="text-align:left">0003DSS01180626</td>
												<td nowrap="nowrap" style="text-align:left">Dispenser Single</td>
												<td nowrap="nowrap" style="text-align:left">PRINTER THERMAL</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Masuk</td>
												<td nowrap="nowrap" style="text-align:center">Mobil - 1</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">0012DSS01180626</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
										  </tr>
<tr>
												<td style="text-align:right">4</td>
												<td nowrap="nowrap" style="text-align:left">0001BRG01180626</td>
												<td nowrap="nowrap" style="text-align:left">Barrier Gate</td>
												<td nowrap="nowrap" style="text-align:left">VEHICLE LOOP DETECTOR</td>
												<td nowrap="nowrap" style="text-align:center">1</td>
												<td nowrap="nowrap" style="text-align:center">Unit</td>
												<td nowrap="nowrap" style="text-align:center">2</td>
												<td nowrap="nowrap" style="text-align:center">Keluar</td>
												<td nowrap="nowrap" style="text-align:center">Mobil - 2</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">0010BRG01180626</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
										  </tr>
<tr>
  <td style="text-align:right">5</td>
  <td style="text-align:left" nowrap="nowrap">0001SSR01180626</td>
  <td nowrap="nowrap" style="text-align:left">Sensor dan Lainnya</td>
  <td nowrap="nowrap" style="text-align:left">UHF READER MID RANGE</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">Unit</td>
  <td nowrap="nowrap" style="text-align:center">1</td>
  <td nowrap="nowrap" style="text-align:center">Keluar</td>
  <td nowrap="nowrap" style="text-align:center">Mobil - 1</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:left">0010SSR01180626</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="18 September 2026<hr>06:34:00 WITA<hr>12321355123123214&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  </tr>
</tbody>
<tfoot>
																							</tfoot>
									</table>
															</div>
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
									<div class="modal fade" id="modal_tambah_material" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-boxes"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH PERMINTAAN MATERIAL</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
										<div class="form-group row">	
					  <div class="col-lg-7">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Perangkat</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
						<div class="col-lg-12">
														<label class="kt-font-brand"><code>*</code> Scan QR Code :</label>
														<div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Perangkat" id="generalSearch">
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div>
													</div>
													</div>
													
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">QR Code :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0004G1INMO1ILU140626" />
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<div class="form-group row">
													<div class="col-lg-12">
														<label class="kt-font-brand">Kategori Material :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Dispenser Single" />
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">Nama Barang :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HUB SWITCH 8 PORT MANAGEABLE CLOUD" />
													</div>

												



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
													
													<div class="col-lg-3">
														<label class="kt-font-brand">Gate :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1" />
													</div>
													<div class="col-lg-3">
														<label class="kt-font-brand">Jalur :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Masuk" />
													</div>
													<div class="col-lg-6">
														<label class="kt-font-brand">Nama Jalur :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Mobil - 1" />
													</div>
													</div>
													
													
						 
						
						  
						
                      </div>
                      </div>
                      </div>
					  <div class="col-lg-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Petugas Instalasi</div><br><br>
										 <div class="kt-portlet__body">
                      
						<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand">Tanggal Instalasi :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="24 September 2026" />
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
													<div class="col-lg-12">
														<label class="kt-font-brand">Waktu Instalasi :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06:50:00 WITA" />
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">NIP :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="00000000000" />
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">Nama :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" />
													</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 
						
						  
						
                      </div>
                      </div>
                      </div>
												




												



												
													
													

												</div>
												
												
												
												


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan</button>
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
