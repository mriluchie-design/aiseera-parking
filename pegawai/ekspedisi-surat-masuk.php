<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>



      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Data Ekspedisi Surat Masuk
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
								<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>

										
										<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Export Data</button>

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

												<!--begin::Nav-->
												<ul class="kt-nav">

													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">PDF</span>
														</a>
													</li>
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-excel"></i>
															<span class="kt-nav__link-text">Excel</span>

														</a>
														
													</li>

												</ul>

												<!--end::Nav-->
											</div>
									



										</div>
							</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
														<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
														<div class="alert-text">Notifikasi Sistem</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="la la-close"></i></span>
															</button>
														</div>
													</div>

													

<!--begin:: Widgets/Stats-->

							


							<!--end:: Widgets/Stats-->

							<div class="kt-portlet kt-portlet--mobile ">
								<div class="kt-portlet__body">
									<!--begin: Datatable -->
									
								
											<div class="row">
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Surat Masuk</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Nomor Surat :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Generate">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
<div class="col-lg-12">
                          <label>Tanggal Surat :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Generate">
                        </div>
                       
                        </div>
						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Pengirim :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Generate">
                        </div>

                       
                        </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Perihal :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Generate">
                        </div>

                       
                        </div>
						
                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>
										<div class="col-xl-9">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Ekspedisi Surat Masuk</div><br>
										 <div class="kt-portlet__body">
                      <table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead style="text-align:center">
											<tr>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">#</th>
											  <th width="2%" rowspan="2" bgcolor="#f7fcff">Tanggal</th>
											  <th colspan="3" bgcolor="#f7fcff">Penerima</th>
											  <th colspan="3" bgcolor="#f7fcff">Pengirim</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr>
												<th width="3%" bgcolor="#f7fcff">Nama</th>
												<th width="1%" bgcolor="#f7fcff">NIP</th>
												<th width="1%" bgcolor="#f7fcff">Status</th>
												<th width="3%" bgcolor="#f7fcff">Nama</th>
												<th width="1%" bgcolor="#f7fcff">Nip</th>
												<th width="1%" bgcolor="#f7fcff">Kantor</th>
											</tr>
											
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center">1</td>
												<td style="text-align:left">&nbsp;</td>
												<td style="text-align:left">                                                
												<td style="text-align:left">                                                
												<td>
											    <td style="text-align:left">
										        <td></td>
									            <td>
								                <td style="text-align:center"><button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="Hapus" data-html="true"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
											<tr>
												<td style="text-align:center" >2</td>
												<td style="text-align:left">&nbsp;</td>
												<td style="text-align:left">                                                
												<td style="text-align:left">                                                
												<td>
											    <td style="text-align:left">
										        <td>
									            <td>
								                <td style="text-align:center"><button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="Hapus" data-html="true"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										</tbody>
									</table>

						
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Catatan Direktur :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Generate">
                        </div>

                       
                       

                       
                        </div>
						
                      </div>
                    </div>
							<!--end:: Portlet-->


										</div>
										
										
										

									<!--end: Datatable -->
								</div>
							</div>

            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
