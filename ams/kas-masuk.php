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
					Kas Masuk
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
		
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
						<i class="fa fa-print"></i> Export Data</button>
					</a>
					<a href="pemasukan-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus"></i>Buat Pendapatan</button>
				<!--<i class="flaticon2-plus"></i>-->
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
																				<div class="col-lg-2">
																				 <label class="">Nomor Kas Masuk :</label>
																			 <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
																			 </div>
																				<div class="col-lg-2">
																				 <label class="">Tanggal Kas Masuk:</label>
																				 <div class="input-group date">
																				 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="20/01/2020" id="kt_datepicker_2">
																				 <div class="input-group-append">
																				 	<span class="input-group-text">
																				 		<i class="la la-calendar-check-o"></i>
																				 	</span>
																				 </div>
																				 </div>
																			 </div>
														<div class="col-lg-2">
								                          <label>Kas/Bank:</label>
																					<select class="form-control kt-selectpicker" multiple data-actions-box="true">
																						<option>Bank</option>
																						<option>Deposito Bank</option>
																						<option>Kas Kecil</option>
																					</select>
								                        </div>
														<div class="col-lg-2">
								                          <label>Kategori:</label>
																					<select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari / Pilih Akun Perkiraan...</option>
								<optgroup label="Pendapatan Operasional" class="a">
									<option data-subtext="410101">PENDAPATAN PARKIR TEPI JALAN UMUM (TJU)</option>
									<option data-subtext="410102">PENDAPATAN PARKIR INSIDENTIL</option>
									<option data-subtext="410103">PENDAPATAN PARKIR KOMERSIL</option>
									<option data-subtext="410104">PENDAPATAN PARKIR LANGGANAN BULANAN</option>
									<option data-subtext="410105">PENDAPATAN SEWA LAHAN PARKIR</option>
									<option data-subtext="410106">PENDAPATAN PARKIR TEKHNOLOGI / ONLINE)</option>
									<option data-subtext="410107">PENDAPATAN MEMBER PARKIR</option>
									<option data-subtext="410108">PENDAPATAN VALET</option>
									<option data-subtext="410109">PENDAPATAN PARKING GATE</option>
								</optgroup>
								
								
							</select>
								                        </div>
														
																			 <div class="col-lg-2">
								                          <label>Dibuat Oleh:</label>
																					<div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000 000 001 - Yulianti Tomu, SE</option>
																					<option value="HI">000 000 002 - Rizal Asjadad</option>
																					<option value="HI">000 000 003 - Christofher Rio Aviary</option>
																					<option value="HI">000 000 004 - Mu’amar Nor Amin</option>
																					<option value="HI">000 000 005 - Zulfadli Syahrir</option>
					 															</optgroup>
					 															<optgroup label="Umum">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
																					<option value="HI">000 000 007 - Sri Suhartini, SE</option>
					 																
					 															</optgroup>

					 														</select>
					                       </div>
								                        </div>
														<div class="col-lg-1">
								                          <label>Void:</label>
																					<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Tidak</option>
                                      <option value="2">Ya</option>
                                     
                                  </select>
								                        </div>
														<div class="col-lg-1">
								                          <label>Kantor:</label>
																					<select class="form-control kt-selectpicker" data-live-search="true" tabindex="-98">
                                      <option value="2">Pusat</option>
                                      <option value="2">Cabang</option>
                                     
                                  </select>
								                        </div>
														
								                      </div>
													  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
						  <div class="col-lg-2">
																				 <label class="">Nomor Cek :</label>
																			 <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
																			 </div>
																			 <div class="col-lg-2">
																				 <label class="">Tanggal Cek :</label>
																				 <div class="input-group date">
																				 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="20/01/2020" id="kt_datepicker_2">
																				 <div class="input-group-append">
																				 	<span class="input-group-text">
																				 		<i class="la la-calendar-check-o"></i>
																				 	</span>
																				 </div>
																				 </div>
																			 </div>
																			 <div class="col-lg-2">
																				 <label class="">Pemberi :</label>
																			 <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
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

																	<div class="kt-portlet kt-portlet--mobile ">
																		<div class="kt-portlet__body">
																			<!--begin: Datatable -->
																			<table class="table table-striped table-bordered table-hover table-resizable">
																				<thead>
																					<tr>
																					  <th width="1%" rowspan="2" bgcolor="#f7fcff" class="#">#</th>
																						<th width="8%" rowspan="2" bgcolor="#f7fcff" class="nomor">Nomor</th>
																						<th width="5%" rowspan="2" bgcolor="#f7fcff" class="tanggal">Tanggal</th>
																						<th width="10%" rowspan="2" bgcolor="#f7fcff" class="kas">Kas/Bank</th>
																						<th width="5%" rowspan="2" bgcolor="#f7fcff" class="noCek">Kategori</th>
																						<th width="5%" rowspan="2" bgcolor="#f7fcff" class="noCek">No.Cek#</th>
																						<th width="5%" rowspan="2" bgcolor="#f7fcff" class="tanggalCek">Tanggal Cek</th>
																						<th rowspan="2" bgcolor="#f7fcff" class="keterangan">Pemberi</th>
																						<th rowspan="2" bgcolor="#f7fcff" class="keterangan">Keterangan</th>
																						<th width="12%" rowspan="2" bgcolor="#f7fcff" class="nilai">Nilai</th>
																						<th width="4%" rowspan="2" bgcolor="#f7fcff" class="void">Void</th>
																						<th width="3%"rowspan="2" bgcolor="#f7fcff" class="dibuatoleh">Dibuat<br>Oleh</th>
																						<th width="5%" rowspan="2" bgcolor="#f7fcff" class="cabang">Kantor</th>
																						<th colspan="2" bgcolor="#f7fcff" class="verifikasi">Verifikasi</th>
																						<th width="5%" rowspan="2" bgcolor="#f7fcff" class="aksi">Aksi</th>
																					</tr>
																					<tr>
																					  <th width="5%" bgcolor="#f7fcff" class="kabagkeuangan">Kabag<br />Keuangan</th>
																					  <th width="5%" bgcolor="#f7fcff" class="direkturkeuangan">Direktur<br />Keuangan</th>
																				  </tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td class="#">1</td>
																					  <td class="nomor">110102.2023.08.00001</td>
																						<td class="tanggal">01/08/2023</td>
																						<td class="kas">BCA - 0255804010</td>
																						<td class="noCek">Operasional</td>
																						<td class="noCek">1232133</td>
																						<td class="tanggalCek">01/08/2023</td>
																						<td class="penerima">PT. iLugroup Multimedia Indonesia</td>
																						<td class="keterangan">Pembayaran Jasa Aplikasi</td>
																						<td class="nilai"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																						<td class="void" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tidak</span></td>
																						<td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																						<td class="cabang">Pusat</td>
																						</td>
																						<td style="text-align:center" class="kabagkeuangan"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																						<td style="text-align:center" class="direkturkeuangan"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																						<td width="3%" style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="kas-masuk-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="kas-masuk-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																	              </tr>
																					<tr>
																					  <td class="#">2</td>
																					  <td class="nomor">110102.2023.08.00002</td>
																						<td class="tanggal">02/08/2023</td>
																						<td class="kas">BCA - 0255804010</td>
																						<td class="noCek">Lainnya</td>
																						<td class="noCek">1232134</td>
																						<td class="tanggalCek">01/08/2023</td>
																						<td class="penerima">PT. Amanda Brownies</td>
																						<td class="keterangan">Pembayaran Brownies</td>
																						<td class="nilai"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div></td>
																						<td class="void" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Ya</span></td>
																						<td class="dibuatoleh" align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Amalia Restu Sugiarty S.Tr.Par<hr>Bendahara Pengeluaran" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
																						<td class="cabang">Pusat</td>
																						</td>
																						<td style="text-align:center" class="kabagkeuangan"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																						<td style="text-align:center" class="direkturkeuangan"><button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button></td>
																						<td width="3%" style="text-align:center" nowrap=""><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="kas-masuk-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		<li class="kt-nav__item">
																			<a href="kas-masuk-edit.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																		<li class="kt-nav__item">
																			<a href="hr-pegawai-log.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon flaticon-share"></i>
																				<span class="kt-nav__link-text">History Log</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div></td>
																	              </tr>
																					
																</tbody>
																			</table>

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
