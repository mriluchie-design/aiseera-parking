<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                   Detail Setoran Kolektor
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
				&nbsp;
			</div>
			
		</div>
            
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
 <div class="row">
            <!-- end:: Alert -->
			<div class="col-lg-12">
                      <div class="row">
								

									
									




     
										
									<div class="col-xl-7">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Jukir</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
					  
						
					  <div class="col-lg-4">
                          <label class="">ID Jukir :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025">
                        </div>
						<div class="col-lg-4" >
                          <label>Nama Jukir :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025">
																					    </div>
						<div class="col-lg-4" >
                          <label>Zona :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025">
																					    </div>
																					    </div>
																						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
																						<div class="col-lg-4" >
                          <label>Wilayah :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025">
																					    </div>
																						<div class="col-lg-4" >
                          <label>Titik Parkir :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025">
																					    </div>
						<div class="col-lg-4" >
                          <label>Alamat Titik Parkir :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025">
																					    </div>
						 
						 
                        </div>
						
											</div>
											</div>
											


									</div>
									
									


										</div>
										<div class="col-xl-5">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Tagihan</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
					  
						
					  <div class="col-lg-4">
                          <label class="">Tanggal Target :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025">
                        </div>
						
						<div class="col-lg-8">
                          <label class="">Nama Kolektor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="06/11/2025">
                        </div>
						
																					    </div>
																						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
						  <div class="col-lg-4" >
                          <label>Target Setoran Jukir :</label>
                           <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
																					    </div>
						<div class="col-lg-4" >
                          <label style="color:#a2050c">Nilai Setoran Jukir :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="300.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
                        </div>
						<div class="col-lg-4">
                          <label style="color:#a2050c">Sisa Setoran Jukir :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
                        </div>
						 
						 
                        </div>
						
											</div>
											</div>
											


									</div>
									
									


										</div>
										
									
									


										
										<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Pembayaran Jukir</div><br><br>
										<div class="kt-portlet__body">
										
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">ID<br>Transaksi</th>
											  <th width="1%" bgcolor="#f7fcff">ID<br>Pembayaran</th>
											  <th width="4%" bgcolor="#f7fcff">Target Setoran</th>
											  <th width="4%" bgcolor="#f7fcff">Nilai Setoran</th>
											  <th width="4%" bgcolor="#f7fcff">Sisa Setoran</th>
											  <th width="2%" bgcolor="#f7fcff">Tipe Transaksi</th>
											  <th width="1%" bgcolor="#f7fcff">Metode</th>
											  <th width="1%" bgcolor="#f7fcff">Provider</th>
											  <th width="1%" bgcolor="#f7fcff">Waktu Setoran</th>
											  <th width="1%" bgcolor="#f7fcff">Kasir</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
									      </tr>
										</thead>
										<tbody>
										  <tr>
												<td style="text-align:right" id="kt_table_1">1</td>
												<td style="text-align:center" nowrap>001/TRANS/PLB/1/2025</td>
												<td style="text-align:center" nowrap>001/PT-PLB/I/2025</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>300.000,-</span> </div></td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>100.000,-</span> </div></td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>200.000,-</span> </div></td>
												<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">Tunai</button></td>
												<td nowrap="nowrap" style="text-align:center">Cash</td>
												<td nowrap="nowrap" style="text-align:center">Tunai</td>
												<td nowrap="nowrap" style="text-align:center">7 Oktober 2024
												  <hr />
												  22:12:00 WITA</td>
												<td width="1%" style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Nama Penginput<hr>Jabatan Penginput" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item">
																			<a href="print-setoran-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Cetak Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td style="text-align:right" id="kt_table_1">2</td>
												<td style="text-align:center" nowrap>002/TRANS/PLB/1/2025</td>
												<td style="text-align:center" nowrap>001A/PT-PLB/I/2025</td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>300.000,-</span> </div></td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>200.000,-</span> </div></td>
												<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
												<td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="ID Reff : 01521531355135" data-html="true">Non Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center">Bank Transfer</td>
												<td nowrap="nowrap" style="text-align:center">Bank Central Asia</td>
												<td nowrap="nowrap" style="text-align:center">7 Oktober 2024
												  <hr />
												  22:12:00 WITA</td>
												<td width="1%" style="text-align:center" nowrap><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="Nama Penginput<hr>Jabatan Penginput" data-html="true">
														<img src="../assets/media/users/100_10.jpg" alt="image">
													</a></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
																	<ul class="kt-nav">
																	
																		<li class="kt-nav__item">
																			<a href="print-setoran-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon2-print"></i>
																				<span class="kt-nav__link-text">Cetak Tanda Terima</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="edit-setoran-jukir.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
																				<span class="kt-nav__link-text">Edit Data</span>
																			</a>
																		</li>
																		<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
																	</ul>
																</div>
															</div></td>
										  </tr>
									    </tbody>
									</table>
											</div>
											


									</div>
									
									


										</div>
										
				
				
			<!--end:: Widgets/Stats-->
			

			
				
        </div>
        </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
