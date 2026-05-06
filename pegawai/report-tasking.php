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
											Laporan Tugas
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="mutasi-pegawai.php" class="btn btn-label-primary btn-sm" data-toggle="dropdown" onclick="goBack()">
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
										<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
										</div>
										</div>
						</div>

						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<!-- begin:: Content -->

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
							<!--begin:: Portlet-->
              <div class="row">
              <div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

                    <div class="kt-portlet__body">
					
					<div class="col-lg-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Laporan Hasil Tugas</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <table class="table table-bordered table-hover table-checkable" id="kt_repeater_6">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="15%" bgcolor="#f7fcff">Uraian Kegiatan</td>
																									<td width="8%" bgcolor="#f7fcff">Laporan Hasil Tugas</td>
																									<td width="2%" bgcolor="#f7fcff" style="text-align:center">Status</td>
																								</tr>
																								</thead>
                                                <tbody data-repeater-list="">
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center"><input type="text" disabled="disabled" class="form-control form-control-sm" placeholder="Uraian Tugas 1"></td>
																									<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																									<td style="text-align:center">
																										 <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0%</div>
																									</td>
																								</tr>
																								<tr>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Uraian Tugas 2"></td>
																									<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																									<td style="text-align:center">
																										 <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0%</div>
																									</td>
																								</tr>
																								
																								
																								
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder="Isikan Uraian Kegiatan"></td>
																									<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																									<td style="text-align:center">
																										 <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 20%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0%</div>
																									</td>
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="4">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
						

						
						

						
                       
                        </div>
						
                  

						<!-- end:: Content -->
					</div>

						<!-- end:: Content -->
					</div>

  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
