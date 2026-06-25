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
											Form Permohonan Surat Keterangan Kerja
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
                      <div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pegawai Pemohon</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        <div class="col-lg-6">
                          <label>Nama Pegawai :</label>
                          <div class="form-group">

					                         <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan dan Asset" class="a">
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

					 														</select>
					                       </div>
                        </div>
<div class="col-lg-3">
                          <label>NIP Pegawai :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>

                        
						 <div class="col-lg-3">
                          <label>Tipe Pegawai :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pegawai Tetap">
                        </div>
                        </div>
						 
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
<div class="col-lg-6">
                          <label class="">Departemen :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                      </div>
                        </div>
<div class="col-lg-6">
                          <label class="">Bagian :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan">
                      </div>
                        </div>
                        </div>

<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
					  <div class="form-group row">
<div class="col-lg-6">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Pemetaan dan Pengembangan">
                      </div>
                        </div>

<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
                      </div>
                      
                       
                        
					  

                      </div>
                    </div>
							<!--end:: Portlet-->

									
										</div>
										<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Permohonan</div><br><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                        

                        <div class="col-lg-6">
                          <label>ID Permohonan :</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="003/PSKB/XII/2022">
                        </div>

                        <div class="col-lg-6">
                          <label class="">Waktu Permohonan :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12 Oktober 2019 - 09:00 WITA">
                        </div>
						 
                      </div>
 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
                        <div class="col-lg-6">
                          <label>No. Surat Keterangan Bekerja :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="003/SKB/XII/2022">
                        </div>
                        
                        <div class="col-lg-6">
                          <label class="">Tujuan Permohonan :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="4"></textarea>
                        </div>
                      </div>
                      </div>
                      </div>
                     
					  
					
							<!--end:: Portlet-->

									
										</div>
										
										
										


								
                        

									<!--end::Portlet-->
								</div>
								</div>
								
								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
        </div>
            </div>


									<!--End::Portlet-->
								</div>

									<!--end:: Widgets/Notifications-->
								</div>
							</div>
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
