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
                    Laporan
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Produksi </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

            </div>
            <div class="kt-subheader__toolbar">
                
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
                <a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">PDF</span>
                            </a>
                          </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Nav-->
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
                <div class="alert-text">A simple primary alert—check it out!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

            <!--begin::Filter-->
			<div class="kt-portlet" id = "login_Box_Div" >
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Filter Data
						</h3>
					</div>
				</div>

				<!--begin::Form-->
				<form class="kt-form">
					<div class="kt-portlet__body">
                        <div class="form-group row">
						<div class="col-lg-2">
                                <label>Lokasi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
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
                                      <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
                            
								
								
								
								<div class="col-lg-2">
                                <label>Kategori :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Reguler</option>
                                      <option value="2">Member</option>
                                      <option value="2">Pass Kade</option>
                                      <option value="2">Kendaraan Berangkat</option>
                                      <option value="2">Muatan Kapal</option>
                                      <option value="2">Free Pass</option>
                                      <option value="2">Denda</option>
									  <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
								<div class="col-lg-2">
                                <label>Jenis :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Motor</option>
                                      <option value="1">Mobil</option>
                                      <option value="1">Pegawai/Instansi/Others</option>
                                      <option value="2">Sepeda Motor</option>
                                      <option value="2">Sedan/Jeep/Pick Up</option>
                                      <option value="2">Truck/Tronton/Trailer</option>
                                      <option value="2">Truck</option>
                                      <option value="2">Tronton</option>
                                      <option value="2">Gerobak</option>
									  <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
								<div class="col-lg-2">
                                <label class="">Tanggal Produksi :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Parkir</option>
                                      <option value="2">Keluar</option>
                                                                           
                                  </select>
                            </div>
                            </div>
                            
							
                            
							
							
							
							<br>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1"">
										<thead>
											<tr style="text-align:center;">
											  <th rowspan="2" bgcolor="#f7fcff" id="kt_table_3">#</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Lokasi</th>
											  <th colspan="2" rowspan="2" bgcolor="#f7fcff">Kategori</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Jenis</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Jumlah<br>Kendaraan</th>
											  <th width="3%" colspan="3" bgcolor="#f7fcff">Jumlah Durasi<br>										        Parkir</th>
											  <th colspan="3" bgcolor="#f7fcff">Tarif</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Total</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
									      </tr>
											<tr style="text-align:center">
											  <th width="3%" bgcolor="#f7fcff">Jam</th>
											  <th width="3%" bgcolor="#f7fcff">Menit</th>
											  <th width="3%" bgcolor="#f7fcff">Detik</th>
											  <th width="3%" bgcolor="#f7fcff">Jam Pertama</th>
											  <th width="3%" bgcolor="#f7fcff">Jam Berikutnya</th>
											  <th width="3%" bgcolor="#f7fcff">Maksimum</th>
									      </tr>
										</thead>
										<tbody style="line-height:10px;">
											<tr>
											  <td id="kt_table_34" style="text-align:right"><strong>1</strong></td>
											  <td colspan="13" nowrap style="text-align:left"><strong>Makassar</strong></td>
										  </tr>
											<tr>
											  <td bgcolor="#f7fcff"  width="1%" id="kt_table_12" style="text-align:right"><strong>1.1</strong></td>
											  <td bgcolor="#f7fcff" colspan="13" nowrap style="text-align:left"><strong>Data Kendaraan Masuk</strong></td>
										  </tr>
											<tr>
											  <td colspan="2" rowspan="9" id="kt_table_4" style="text-align:right">&nbsp;</td>
											  <td width="1%" nowrap="nowrap" style="text-align:right">1.1.1</td>
											  <td width="5%" nowrap="nowrap" style="text-align:left">Reguler</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.242.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap="nowrap" style="text-align:right"></td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>15.000,-</span></div></td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.027.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">1.1.2</td>
											  <td nowrap="nowrap" style="text-align:left">Member</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" rowspan="3" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Sedan/Jeep/Pick Up</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Truck/Tronton/Trailer</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pegawai / Instansi / Others</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.1.3</td>
											  <td nowrap style="text-align:left">Pass Kade</td>
											  <td nowrap style="text-align:left">Truck</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.242.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" rowspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">Tronton</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.242.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:left">Gerobak</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td nowrap="nowrap" style="text-align:right">0</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.000,-</span></div></td>
											  <td>&nbsp;</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.242.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="14" id="kt_table_7" style="text-align:right">&nbsp;</td>
										  </tr>
											<tr>
											  <td colspan="12" bgcolor="#f7fcff" id="kt_table_10" style="text-align:right"><b>Sub Total Kendaraan Masuk</b></td>
											  <td bgcolor="#f7fcff"><div style="display: flex; justify-content: space-between; align-items: center; font-weight: bold;"> <span>Rp.</span> <span>9.198.000,-</span></div></td>
											  <td bgcolor="#f7fcff">&nbsp;</td>
									      </tr>
											<tr>
											  <td colspan="14" id="kt_table_31" style="text-align:right">&nbsp;</td>
										  </tr>
											<tr>
											  <td bgcolor="#f7fcff"  style="text-align:right" id="kt_table_27"><strong>1.2</strong></td>
											  <td bgcolor="#f7fcff"  colspan="13" nowrap style="text-align:left"><strong>Data Kendaraan Keluar</strong></td>
										  </tr>
											<tr>
											  <td colspan="2" rowspan="13" id="kt_table_26" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">1.2.1</td>
											  <td nowrap="nowrap" style="text-align:left">Reguler</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>20.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.242.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>50.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.027.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:right">1.2.2</td>
											  <td nowrap="nowrap" style="text-align:left">Member</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" rowspan="3" nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Sedan/Jeep/Pick Up</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Truck/Tronton/Trailer</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap="nowrap" style="text-align:left">Pegawai / Instansi / Others</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.3</td>
											  <td nowrap="nowrap" style="text-align:left">Kendaraan Berangkat</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>20.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.242.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td>&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>5.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>50.000,-</span></div></td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.027.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.4</td>
											  <td nowrap="nowrap" style="text-align:left">Muatan Kapal</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap="nowrap" style="text-align:right">477</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>210.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.250.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.5</td>
											  <td nowrap="nowrap" style="text-align:left">Free Pass</td>
											  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap="nowrap" style="text-align:right">712</td>
											  <td nowrap="nowrap" style="text-align:right">10</td>
											  <td nowrap="nowrap" style="text-align:right">60</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td nowrap style="text-align:right">1.2.6</td>
											  <td nowrap="nowrap" style="text-align:left">Denda</td>
											  <td nowrap="nowrap" style="text-align:left">Mobil</td>
											  <td nowrap="nowrap" style="text-align:right">14</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>700.000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="2" nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap="nowrap" style="text-align:left">Motor</td>
											  <td nowrap="nowrap" style="text-align:right">25</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td nowrap style="text-align:left">&nbsp;</td>
											  <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.500..000,-</span></div></td>
											  <td style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-eye"></i></button></td>
									      </tr>
											<tr>
											  <td colspan="14" id="kt_table_6" style="text-align:right">&nbsp;</td>
										  </tr>
											<tr>
											  <td colspan="12" bgcolor="#f7fcff" id="kt_table_11" style="text-align:right"><b>Sub Total Kendaraan Keluar</b></td>
											  <td bgcolor="#f7fcff"><div style="display: flex; justify-content: space-between; align-items: center; font-weight: bold;"> <span>Rp.</span> <span>9.198.000,-</span></div></td>
											  <td bgcolor="#f7fcff">&nbsp;</td>
									      </tr>
								          <tr>
										      <td bgcolor="" style="text-align:right" colspan="14" id="kt_table_8">&nbsp;</td>
									      </tr>
									      <tr>
										    <td bgcolor="#f7fcff" style="text-align:right" colspan="12" id="kt_table_10"><b>Grand Total</b></td>
										    <td bgcolor="#f7fcff"><div style="display: flex; justify-content: space-between; align-items: center; font-weight: bold;"> <span>Rp.</span> <span>9.198.000,-</span></div></td>
										    <td bgcolor="#f7fcff">&nbsp;</td>
									      </tr>
										  <tr>
										    <td bgcolor="#f7fcff" style="text-align:left" colspan="14" id="kt_table_2"><em><strong>Terbilang : Sembilan Juta Seratus Sembilan Puluh Delapan Ribu Rupiah</strong></em></td>
									      </tr>
  </tbody>
									</table>
                    <!--end: Datatable -->

                    <!-- begin:: pageline -->
					<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					<div class="kt-pagination  kt-pagination--danger">
						<select class="form-control kt-font-danger" style="width: 60px">
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="50">50</option>
								<option value="100">100</option>
							</select>
							<span class="pagination__desc">
								Menampilkan 10 dari 230 Data
							</span>
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
									<a href="#">31</a>
								</li>
								<li>
									<a href="#">32</a>
								</li>
								<li>
									<a href="#">33</a>
								</li>
								<li>
									<a href="#">34</a>
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
			<!--begin::Modal 1-->
									<div class="modal fade" id="serah-terima-atribut" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ID CARD</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-brand btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
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
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="serah-terima-rompi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ROMPI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											
											
											
											
											
											
										</div>
									</div>
								</div>
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-brand btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
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
							<!--End::Modal 2-->
        </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
