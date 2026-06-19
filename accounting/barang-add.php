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
											TAMBAH BARANG</span>
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
				
					  
					  
					  <div class="col-xl-9">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid" id="kt_page_portlet">

				
                    <div class="kt-portlet__body">
<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
														<i class="fa fa-boxes"></i> Rincian Barang
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-file-alt"></i> Spesifikasi Barang
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
														<i class="fa fa-image"></i>Foto Barang
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_4" role="tab">
														<i class="fa fa-calculator"></i>Akuntansi
													</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
													
														
														<div class="kt-portlet__body">
															<div class="kt-portlet__content">
																<div class="form-group row">
																<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
																										<div class="col-lg-6">
                          <label class="">Kode Barang :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0001SKUAK0626">
                      </div>
                        </div>
						
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="Pilih Kategori" data-html="true">*</code> Kategori :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
						
														
														<option>Dispenser Single</option>
														<option>Sensor</option>
														<option>Jasa</option>
														 <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
													</select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					 <div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="Pilih Kategori" data-html="true">*</code> Kebutuhan :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
						
														
														<option>Project</option>
														<option>Internal</option>
														<option>Lainnya</option>
														 <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
													</select>
                        </div>
						<div class="col-lg-6">
														<label class="kt-font-danger">Pilih Project :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Epass</option>
														
														</select>
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					 <div class="col-lg-6">
                          <label class="">Scan Barcode :</label>
                          <div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Barcode disini" id="generalSearch">
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div>
                      </div>
					  <div class="col-lg-6">
                          <label class="">Vendor :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
														<option>PT. ABC</option>
														<option>PT. CDE</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						<div class="col-lg-12">
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="Isikan Nama Barang dengan Lengkap" data-html="true">*</code> Nama Barang :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
																										</div>
																										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																										
																										
																								</div>
																								
																							</div>

									</div>
									
					  
					  
					  
                      </div>
					  <div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Barang</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
					  
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Harga Pembelian :</label>
                          <div class="input-group input-group-sm">
															    <div class="input-group-prepend"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon2">Rp.</span></div>
															    <input style="text-align:right; border-color:#0e62ae;" type="text" class="form-control form-control-sm" placeholder="2.000.000" aria-describedby="basic-addon1">
															    <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon2">,-</span></div>
															    </div>
                        </div>
						
						
						<div class="col-lg-2">
                          <label>Pajak :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>12%</option>
														<option>11%</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-4" >
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Tanggal Pembelian :</label>
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
						
						
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Harga Penjualan :</label>
                          <div class="input-group input-group-sm">
															    <div class="input-group-prepend"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon2">Rp.</span></div>
															    <input style="text-align:right; border-color:#0e62ae;" type="text" class="form-control form-control-sm" placeholder="2.000.000" aria-describedby="basic-addon1">
															    <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon2">,-</span></div>
															    </div>
                        </div>
						
						
						<div class="col-lg-2">
                          <label>Pajak :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>12%</option>
														<option>11%</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-4" >
                          <label>Tanggal Expired :</label>
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
                          <label class="">Catatan Internal :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
                        </div>
						
						
						
						
						
						
                        </div>
																										
																										
																										
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
																<br>
																<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>

											  <th width="10%" bgcolor="#f7fcff">Spesifikasi</th>
											  <th width="10%" bgcolor="#f7fcff">Detail Spesifikasi</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
											  <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
											<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
											<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
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
					  <div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Gudang</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Lokasi Gudang :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Makassar</option>
														<option>Ambon</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Kondisi :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Baru</option>
														<option>Bekas</option>
														
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
						
						<div class="col-lg-6">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Stok :</label>
                          <input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12">
                        </div>
						<div class="col-lg-6">
                          <label><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="" data-html="true">*</code> Satuan :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option selected>Unit</option>
														<option>Pieces</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-4">
										<label class="">Request Order</label>
										<input data-switch="true" data-size="small" data-toggle="kt-tooltip" data-skin="brand" data-on-text="Otomatis" data-off-text="Tidak" data-on-color="success" type="checkbox" checked="checked">
										

									</div>
						<div class="col-lg-4">
                          <label class="">Stok Minimum :</label>
                          <input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1">
                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Satuan :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option selected>Unit</option>
														<option>Pieces</option>
														
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
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						
						
						




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
<?php require '../layouts/foot.php' ?>
