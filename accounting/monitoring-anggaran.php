<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->

<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-list-1"></i>
				</span>
				&nbsp;
				&nbsp;
					Rencana Kerja Anggaran Perusahaan
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
		
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					
			

				</div>
	</div>
</div>
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
																				
																				
								                        <div class="col-lg-1">
																					<label class="">Tahun Anggaran:</label>
 																				  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">2024</option>
                                      <option value="2">2023</option>
                                      <option value="3">2022</option>
                                      <option value="4">2021</option>
                                      <option value="5">2020</option>
                                      <option value="12" >2019</option>
                                  </select>
																			 </div>
																			 <div class="col-lg-1">
																					<label class="">Tipe Anggaran:</label>
 																				  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pokok</option>
                                      <option value="2">Perubahan</option>
                                     
                                  </select>
																			 </div>
																			 <div class="col-lg-3">
																				 <label class="">Cari Kode Rekening :</label>
																				 <select name="select" class="form-control kt-selectpicker col-lg-12 mb-6" data-size="7" data-live-search="true">
																					    <option value="1" disabled="disabled" selected="selected">Cari / Pilih Akun Perkiraan...</option>
																					    <optgroup label="BIAYA OPERASIONAL" class="a">
																					      <option data-subtext="51.01.00">BIAYA CETAKAN</option>
																					      <option data-subtext="51.01.02">BIAYA PENGIRIMAN</option>
																					      <option data-subtext="51.02.00">BIAYA SURVEY / UJI PETIK</option>
																					      <option data-subtext="51.03.00">BIAYA OPERASIONAL PEGAWAI</option>
																					      <option data-subtext="51.04.00">BIAYA OPERASIONAL TIM PATROLI KHUSUS</option>
																					      <option data-subtext="51.05.00">BIAYA TIM PENEGAK PERDA</option>
																					      <option data-subtext="51.06.00">BIAYA PAJAK PARKIR PLB</option>
																					      <option data-subtext="51.07.00">BIAYA SHARING PENETAPAN BARU PLB</option>
																					      <option data-subtext="51.08.00">BIAYA SHARING PARKIR ELEKTRONIK</option>
																					      <option data-subtext="51.09.00">BIAYA PERLENGKAPAN JUKIR / KOLEKTOR</option>
																				        </optgroup>
																				      </select>
																			 </div>
																			 
																			 
																			 <div class="col-lg-2">
						                          <label class="">Periode Realisasi :</label>
						                          <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
						                        </div>
												<div class="col-lg-1">
																					<label class="">Kantor:</label>
 																				  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
																			 </div>
																			 
														
														
							
								                      </div>
																			
								                      </div>
																			<div class="kt-portlet__foot text-center">
																				<div class="kt-form__actions">
																					<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
																					<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
																				</div>
																			</div>
																		</form>
																	</div>
																	<!--begin:: Widgets/Stats-->
			
															

															
																	

																	<div class="kt-portlet kt-portlet--mobile ">
																		<div class="kt-portlet__body">
																			<!--begin: Datatable -->
																			
											
											
								<div class="row">
											<div class="col-xl-12">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">REKAPITULASI RENCANA KERJA ANGGARAN PERUSAHAAN (RKAP) POKOK TAHUN 2026</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="1%" bgcolor="#f7fcff">#</th>
																						<th width="15%"bgcolor="#f7fcff">URAIAN KEBUTUHAN</th>
																						<th width="5%" colspan="2" bgcolor="#f7fcff">VOLUME</th>
																						<th width="10%" bgcolor="#f7fcff">HARGA SATUAN</th>
																						<th width="10%" bgcolor="#f7fcff">NILAI</th>
																						<th width="10%" bgcolor="#f7fcff">RKAP POKOK TAHUN 2026</th>
																						<th width="10%" bgcolor="#f7fcff">REALISASI JANUARI<br>S/D 20 JUNI 2026</th>
																						<th width="10%" bgcolor="#f7fcff">PRESENTASE REALISASI</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td style="background-color:#edffef">A</td>
																					  <td colspan="8" style="background-color:#edffef">51.01.00 - BIAYA CETAKAN</td>
																				  </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK KERTAS KOP</td>
																						<td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Rim</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																					  <td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div></div></td>
																			      </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK AMPLOP KOP</td>
																					  <td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Dus</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div></div></td>
																			      </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK MAP</td>
																					  <td><div style="text-align:right" />50</td>
																						<td><div style="text-align:left" />Buah</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div></div></td>
																			      </tr>
																</tbody>
																
																
																	<tr>
																	  <td style="background-color:#edffef">B</td>
																	  <td colspan="8" style="background-color:#edffef">51.02.00 - BIAYA SURVEY / UJI PETIK</td>
																  </tr>
																	<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK KERTAS KOP</td>
																						<td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Rim</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																					  <td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div></div></td>
																			      </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK AMPLOP KOP</td>
																					  <td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Dus</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div></div></td>
																			      </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK MAP</td>
																					  <td><div style="text-align:right" />50</td>
																						<td><div style="text-align:left" />Buah</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div></div></td>
																			      </tr>
																  
																	<tr>
																	  <td style="background-color:#edffef">C</td>
																	  <td colspan="8" style="background-color:#edffef">51.03.00 - BIAYA OPERASIONAL KOLEKTOR</td>
																  </tr>
																	<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK KERTAS KOP</td>
																						<td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Rim</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																					  <td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div></div></td>
																			      </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK AMPLOP KOP</td>
																					  <td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Dus</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div></div></td>
																			      </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td>- CETAK MAP</td>
																					  <td><div style="text-align:right" />50</td>
																						<td><div style="text-align:left" />Buah</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td style="text-align:center"><div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div></div></td>
																			      </tr>
																	<tr>
																	  <th colspan="9" bgcolor="#fff" class="text-right">&nbsp;</th>
																  </tr>
																	<tr>
																	  <th colspan="5" bgcolor="#feffed" class="text-center"><b>TOTAL</b></th>
																	  <td bgcolor="#feffed"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																	  <td bgcolor="#feffed"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																	  <td bgcolor="#feffed"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																	  <td bgcolor="#feffed" style="text-align:center"><div class="progress">
																	    <div class="progress-bar progress-bar-striped progress-bar-animated bg-brand" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
																      </div></td>
																  </tr>
																</tfoot>
																			</table>
                                          </div>
													
									
						
						
												
												</div>

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
										  </div>
										  </div>
										  </div>
										  </div>
										  </div>
										  </div>
										

<?php require '../layouts/footer.php' ?>
<script>
$("input:checkbox:not(:checked)").each(function() {
    var column = "table ." + $(this).attr("name");
    $(column).hide();
});

$("input:checkbox").click(function(){
    var column = "table ." + $(this).attr("name");
    $(column).toggle();
});

$(function() {
	var startX,
		 startWidth,
		 $handle,
		 $table,
		 pressed = false;

	$(document).on({
		mousemove: function(event) {
			if (pressed) {
				$handle.width(startWidth + (event.pageX - startX));
			}
		},
		mouseup: function() {
			if (pressed) {
				$table.removeClass('resizing');
				pressed = false;
			}
		}
	}).on('mousedown', '.table-resizable th', function(event) {
		$handle = $(this);
		pressed = true;
		startX = event.pageX;
		startWidth = $handle.width();

		$table = $handle.closest('.table-resizable').addClass('resizing');
	}).on('dblclick', '.table-resizable thead', function() {
		// Reset column sizes on double click
		$(this).find('th[style]').css('width', '');
	});
});
</script>
<?php require '../layouts/foot.php' ?>
