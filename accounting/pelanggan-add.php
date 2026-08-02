<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

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
				Form
			</h3>
		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											TAMBAH PELANGGAN</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
				<button type="button" class="btn btn-brand">
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
	<!--Begin::Alert-->
	<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
		<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
		<div class="alert-text">Isikan Bidang yang bertandakan <span style="color:#ff0000">*</span> </div>
		<div class="alert-close">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="la la-close"></i></span>
			</button>
		</div>
	</div>
	<!--end::Alert-->

	<!--Begin:: App Content-->

	<div class="row">
	<div class="col-lg-12">
		<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

				
                    <div class="kt-portlet__body">
<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_8" role="tab">
														<i class="fa fa-address-card"></i>Umum
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_1" role="tab">
														<i class="fa fa-building"></i>Perusahaan
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-truck-moving"></i>Pengiriman
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
														<i class="fa fa-file-invoice"></i>Akuntansi & Pajak
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_4" role="tab">
														<i class="fa fa-money-bill"></i>Piutang
													</a>
												</li>
												
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_7" role="tab">
														<i class="fa fa-door-open"></i>Data Login App
													</a>
												</li>
											</ul>
												
		
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_8" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                      <div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Registrasi</div><br><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
						
						 <div class="col-lg-3">
                          <label>ID Pelanggan :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="000000001" disabled>
                        </div>
						
						<div class="col-lg-3">
                          <label>Tanggal Registrasi :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="18 September 2026" disabled>
                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Tipe Pelanggan :</label>
                            <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Personal</option>
                              <option value="3">Instansi</option>

                          </select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> No. Identitas KTP / SIM :</label>
                           <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                        </div>	
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
						<div class="col-lg-6">
					                           <label>Email :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx">
					                         </div>
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP / WA :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  
					  
                      </div>						
																								</div>
																							</div>
																						</div>

																						

									</div>
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Penagihan</div><br><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     

						 <div class="form-group row">
                      
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Alamat :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						
						<div class="col-lg-2">
                          <label>Kode Pos :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-2">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-2">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-3">
                          
                                <label>Provinsi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
							<div class="col-lg-3">
                          
                                <label>Kab / Kota :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-6">
					                           <label>Kelurahan :</label>
                         <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Borong</option>
														</select>
					                         </div>
						<div class="col-lg-6">
                          <label class="">Kecamatan :</label>
                          <div class="form-group">
                        <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Manggala</option>
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

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											<div class="tab-pane" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                      <div class="row">
								
<div class="col-xl-6">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Perusahaan</div><br><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						 <div class="col-lg-6">
                          <label>ID Perusahaan :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="000000001" disabled>
                        </div>
						<div class="col-lg-6">
                          <label>Tanggal Registrasi :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Auto Date" disabled>
                        </div>
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
                      
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Badan Usaha :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-2">
                          <label><span style="color:#ff0000">*</span> Tipe :</label>
                           <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>PT</option>
														<option>CV</option>
														<option>Koperasi</option>
														<option>Firma</option>
														</select>
                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Logo Perusahaan :</label>
                          <div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						
						
						
						
					 
                    
									 
                      </div>	
					  
					   


					  
 
						
									</div>
									</div>






									<!--end::Portlet-->
								</div>
								
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Perusahaan</div><br><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     

						 <div class="form-group row">
                      
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Alamat :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						
						<div class="col-lg-2">
                          <label>Kode Pos :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-2">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-2">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-3">
                          
                                <label>Provinsi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
							<div class="col-lg-3">
                          
                                <label>Kecamatan :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-6">
					                           <label>Kelurahan :</label>
                         <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Borong</option>
														</select>
					                         </div>
						<div class="col-lg-6">
                          <label class="">Kecamatan :</label>
                          <div class="form-group">
                        <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Manggala</option>
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

							<!--end:: Portlet-->


          </div>



								</div>
											</div>
											<div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                      <div class="row">
								

								
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Pengiriman</div><br><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     

						 <div class="form-group row">
                      
						<div class="col-lg-6">
										
										<div class="kt-checkbox-inline">
										<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">Sama Dengan Alamat Penagihan
															    <span></span> </label>
											
											</label>
											
										</div>
									</div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                      
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Alamat :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						
						<div class="col-lg-2">
                          <label>Kode Pos :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-2">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-2">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-3">
                          
                                <label>Provinsi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
							<div class="col-lg-3">
                          
                                <label>Kecamatan :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-6">
					                           <label>Kelurahan :</label>
                         <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Borong</option>
														</select>
					                         </div>
						<div class="col-lg-6">
                          <label class="">Kecamatan :</label>
                          <div class="form-group">
                        <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Manggala</option>
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

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Akuntansi</div><br><br>
										 <div class="kt-portlet__body">
											
					
						<div class="form-group row">
                      
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Piutang :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
															<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
															<option data-subtext="110101">Kas Kecil</option>
															<option data-subtext="110102">Bank</option>
															<option data-subtext="110201">Deposito Bank</option>
															<option data-subtext="110301">Piutang Usaha</option>
															<option data-subtext="110302">Uang Muka Pembelian</option>
															<option data-subtext="110401">Persediaan</option>
															<option data-subtext="110402">Persediaan Terkirim</option>
															<option data-subtext="110501">Perlengkapan Kantor</option>
															<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
															<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
															<option data-subtext="110504">PPN Masukan</option>
															<option data-subtext="110505">PPh 23 Penjualan</option>
															<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
															<option data-subtext="120001">Tanah</option>
															<option data-subtext="120002">Gedung</option>
															<option data-subtext="120003">Kendaraan</option>
															<option data-subtext="120004">Peralatan</option>
															<option data-subtext="120005">Inventaris Kantor</option>
															<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
															<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
															<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
															<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
															<option data-subtext="210101">Hutang usaha</option>
															<option data-subtext="210102">Uang Muka Penjualan</option>
															<option data-subtext="210201">PPN Keluaran</option>
															<option data-subtext="210202">PPh 23 Pembelian</option>
															<option data-subtext="210203">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204">PPh Ps.4(2) Pembelian</option>
															<option data-subtext="2201">Hutang Jangka Panjang</option>
															<option data-subtext="300001">Equitas Saldo Awal</option>
															<option data-subtext="300002">Laba Ditahan</option>
															<option data-subtext="300003">Modal Saham</option>
															<option data-subtext="400001">Penjualan</option>
															<option data-subtext="400002">Pendapatan Jasa</option>
															<option data-subtext="400003">Retur Penjualan</option>
															<option data-subtext="400004">Diskon Penjualan</option>
															<option data-subtext="5010">Beban Pokok Penjualan</option>
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
															<option data-subtext="600024">Beban Inventaris Kantor</option>
															<option data-subtext="710001">Pendapatan Jasa Giro</option>
															<option data-subtext="710002">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003">Penjualan Persediaan/Perlengkapan</option>
															<option data-subtext="710004">Laba/Rugi Revaluasi Aset</option>
															<option data-subtext="710005">Pendapatan Diluar Usaha Lainnya</option>
															<option data-subtext="720001">Beban Bunga Pinjaman</option>
															<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003">Pajak Jasa Giro</option>
															<option data-subtext="720004">Laba/Rugi Terealisasi</option>
															<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
														</select>
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Uang Muka :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
															<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
															<option data-subtext="110101">Kas Kecil</option>
															<option data-subtext="110102">Bank</option>
															<option data-subtext="110201">Deposito Bank</option>
															<option data-subtext="110301">Piutang Usaha</option>
															<option data-subtext="110302">Uang Muka Pembelian</option>
															<option data-subtext="110401">Persediaan</option>
															<option data-subtext="110402">Persediaan Terkirim</option>
															<option data-subtext="110501">Perlengkapan Kantor</option>
															<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
															<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
															<option data-subtext="110504">PPN Masukan</option>
															<option data-subtext="110505">PPh 23 Penjualan</option>
															<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
															<option data-subtext="120001">Tanah</option>
															<option data-subtext="120002">Gedung</option>
															<option data-subtext="120003">Kendaraan</option>
															<option data-subtext="120004">Peralatan</option>
															<option data-subtext="120005">Inventaris Kantor</option>
															<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
															<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
															<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
															<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
															<option data-subtext="210101">Hutang usaha</option>
															<option data-subtext="210102">Uang Muka Penjualan</option>
															<option data-subtext="210201">PPN Keluaran</option>
															<option data-subtext="210202">PPh 23 Pembelian</option>
															<option data-subtext="210203">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204">PPh Ps.4(2) Pembelian</option>
															<option data-subtext="2201">Hutang Jangka Panjang</option>
															<option data-subtext="300001">Equitas Saldo Awal</option>
															<option data-subtext="300002">Laba Ditahan</option>
															<option data-subtext="300003">Modal Saham</option>
															<option data-subtext="400001">Penjualan</option>
															<option data-subtext="400002">Pendapatan Jasa</option>
															<option data-subtext="400003">Retur Penjualan</option>
															<option data-subtext="400004">Diskon Penjualan</option>
															<option data-subtext="5010">Beban Pokok Penjualan</option>
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
															<option data-subtext="600024">Beban Inventaris Kantor</option>
															<option data-subtext="710001">Pendapatan Jasa Giro</option>
															<option data-subtext="710002">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003">Penjualan Persediaan/Perlengkapan</option>
															<option data-subtext="710004">Laba/Rugi Revaluasi Aset</option>
															<option data-subtext="710005">Pendapatan Diluar Usaha Lainnya</option>
															<option data-subtext="720001">Beban Bunga Pinjaman</option>
															<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003">Pajak Jasa Giro</option>
															<option data-subtext="720004">Laba/Rugi Terealisasi</option>
															<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
														</select>
                        </div>
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Penjualan :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
															<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
															<option data-subtext="110101">Kas Kecil</option>
															<option data-subtext="110102">Bank</option>
															<option data-subtext="110201">Deposito Bank</option>
															<option data-subtext="110301">Piutang Usaha</option>
															<option data-subtext="110302">Uang Muka Pembelian</option>
															<option data-subtext="110401">Persediaan</option>
															<option data-subtext="110402">Persediaan Terkirim</option>
															<option data-subtext="110501">Perlengkapan Kantor</option>
															<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
															<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
															<option data-subtext="110504">PPN Masukan</option>
															<option data-subtext="110505">PPh 23 Penjualan</option>
															<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
															<option data-subtext="120001">Tanah</option>
															<option data-subtext="120002">Gedung</option>
															<option data-subtext="120003">Kendaraan</option>
															<option data-subtext="120004">Peralatan</option>
															<option data-subtext="120005">Inventaris Kantor</option>
															<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
															<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
															<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
															<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
															<option data-subtext="210101">Hutang usaha</option>
															<option data-subtext="210102">Uang Muka Penjualan</option>
															<option data-subtext="210201">PPN Keluaran</option>
															<option data-subtext="210202">PPh 23 Pembelian</option>
															<option data-subtext="210203">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204">PPh Ps.4(2) Pembelian</option>
															<option data-subtext="2201">Hutang Jangka Panjang</option>
															<option data-subtext="300001">Equitas Saldo Awal</option>
															<option data-subtext="300002">Laba Ditahan</option>
															<option data-subtext="300003">Modal Saham</option>
															<option data-subtext="400001">Penjualan</option>
															<option data-subtext="400002">Pendapatan Jasa</option>
															<option data-subtext="400003">Retur Penjualan</option>
															<option data-subtext="400004">Diskon Penjualan</option>
															<option data-subtext="5010">Beban Pokok Penjualan</option>
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
															<option data-subtext="600024">Beban Inventaris Kantor</option>
															<option data-subtext="710001">Pendapatan Jasa Giro</option>
															<option data-subtext="710002">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003">Penjualan Persediaan/Perlengkapan</option>
															<option data-subtext="710004">Laba/Rugi Revaluasi Aset</option>
															<option data-subtext="710005">Pendapatan Diluar Usaha Lainnya</option>
															<option data-subtext="720001">Beban Bunga Pinjaman</option>
															<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003">Pajak Jasa Giro</option>
															<option data-subtext="720004">Laba/Rugi Terealisasi</option>
															<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
														</select>
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Diskon Barang :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
															<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
															<option data-subtext="110101">Kas Kecil</option>
															<option data-subtext="110102">Bank</option>
															<option data-subtext="110201">Deposito Bank</option>
															<option data-subtext="110301">Piutang Usaha</option>
															<option data-subtext="110302">Uang Muka Pembelian</option>
															<option data-subtext="110401">Persediaan</option>
															<option data-subtext="110402">Persediaan Terkirim</option>
															<option data-subtext="110501">Perlengkapan Kantor</option>
															<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
															<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
															<option data-subtext="110504">PPN Masukan</option>
															<option data-subtext="110505">PPh 23 Penjualan</option>
															<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
															<option data-subtext="120001">Tanah</option>
															<option data-subtext="120002">Gedung</option>
															<option data-subtext="120003">Kendaraan</option>
															<option data-subtext="120004">Peralatan</option>
															<option data-subtext="120005">Inventaris Kantor</option>
															<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
															<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
															<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
															<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
															<option data-subtext="210101">Hutang usaha</option>
															<option data-subtext="210102">Uang Muka Penjualan</option>
															<option data-subtext="210201">PPN Keluaran</option>
															<option data-subtext="210202">PPh 23 Pembelian</option>
															<option data-subtext="210203">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204">PPh Ps.4(2) Pembelian</option>
															<option data-subtext="2201">Hutang Jangka Panjang</option>
															<option data-subtext="300001">Equitas Saldo Awal</option>
															<option data-subtext="300002">Laba Ditahan</option>
															<option data-subtext="300003">Modal Saham</option>
															<option data-subtext="400001">Penjualan</option>
															<option data-subtext="400002">Pendapatan Jasa</option>
															<option data-subtext="400003">Retur Penjualan</option>
															<option data-subtext="400004">Diskon Penjualan</option>
															<option data-subtext="5010">Beban Pokok Penjualan</option>
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
															<option data-subtext="600024">Beban Inventaris Kantor</option>
															<option data-subtext="710001">Pendapatan Jasa Giro</option>
															<option data-subtext="710002">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003">Penjualan Persediaan/Perlengkapan</option>
															<option data-subtext="710004">Laba/Rugi Revaluasi Aset</option>
															<option data-subtext="710005">Pendapatan Diluar Usaha Lainnya</option>
															<option data-subtext="720001">Beban Bunga Pinjaman</option>
															<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003">Pajak Jasa Giro</option>
															<option data-subtext="720004">Laba/Rugi Terealisasi</option>
															<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
														</select>
                        </div>
						
							
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Beban Pokok Penjualan :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
															<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
															<option data-subtext="110101">Kas Kecil</option>
															<option data-subtext="110102">Bank</option>
															<option data-subtext="110201">Deposito Bank</option>
															<option data-subtext="110301">Piutang Usaha</option>
															<option data-subtext="110302">Uang Muka Pembelian</option>
															<option data-subtext="110401">Persediaan</option>
															<option data-subtext="110402">Persediaan Terkirim</option>
															<option data-subtext="110501">Perlengkapan Kantor</option>
															<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
															<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
															<option data-subtext="110504">PPN Masukan</option>
															<option data-subtext="110505">PPh 23 Penjualan</option>
															<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
															<option data-subtext="120001">Tanah</option>
															<option data-subtext="120002">Gedung</option>
															<option data-subtext="120003">Kendaraan</option>
															<option data-subtext="120004">Peralatan</option>
															<option data-subtext="120005">Inventaris Kantor</option>
															<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
															<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
															<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
															<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
															<option data-subtext="210101">Hutang usaha</option>
															<option data-subtext="210102">Uang Muka Penjualan</option>
															<option data-subtext="210201">PPN Keluaran</option>
															<option data-subtext="210202">PPh 23 Pembelian</option>
															<option data-subtext="210203">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204">PPh Ps.4(2) Pembelian</option>
															<option data-subtext="2201">Hutang Jangka Panjang</option>
															<option data-subtext="300001">Equitas Saldo Awal</option>
															<option data-subtext="300002">Laba Ditahan</option>
															<option data-subtext="300003">Modal Saham</option>
															<option data-subtext="400001">Penjualan</option>
															<option data-subtext="400002">Pendapatan Jasa</option>
															<option data-subtext="400003">Retur Penjualan</option>
															<option data-subtext="400004">Diskon Penjualan</option>
															<option data-subtext="5010">Beban Pokok Penjualan</option>
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
															<option data-subtext="600024">Beban Inventaris Kantor</option>
															<option data-subtext="710001">Pendapatan Jasa Giro</option>
															<option data-subtext="710002">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003">Penjualan Persediaan/Perlengkapan</option>
															<option data-subtext="710004">Laba/Rugi Revaluasi Aset</option>
															<option data-subtext="710005">Pendapatan Diluar Usaha Lainnya</option>
															<option data-subtext="720001">Beban Bunga Pinjaman</option>
															<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003">Pajak Jasa Giro</option>
															<option data-subtext="720004">Laba/Rugi Terealisasi</option>
															<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
														</select>
                        </div>
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Retur Penjualan :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
															<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
															<option data-subtext="110101">Kas Kecil</option>
															<option data-subtext="110102">Bank</option>
															<option data-subtext="110201">Deposito Bank</option>
															<option data-subtext="110301">Piutang Usaha</option>
															<option data-subtext="110302">Uang Muka Pembelian</option>
															<option data-subtext="110401">Persediaan</option>
															<option data-subtext="110402">Persediaan Terkirim</option>
															<option data-subtext="110501">Perlengkapan Kantor</option>
															<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
															<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
															<option data-subtext="110504">PPN Masukan</option>
															<option data-subtext="110505">PPh 23 Penjualan</option>
															<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
															<option data-subtext="120001">Tanah</option>
															<option data-subtext="120002">Gedung</option>
															<option data-subtext="120003">Kendaraan</option>
															<option data-subtext="120004">Peralatan</option>
															<option data-subtext="120005">Inventaris Kantor</option>
															<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
															<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
															<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
															<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
															<option data-subtext="210101">Hutang usaha</option>
															<option data-subtext="210102">Uang Muka Penjualan</option>
															<option data-subtext="210201">PPN Keluaran</option>
															<option data-subtext="210202">PPh 23 Pembelian</option>
															<option data-subtext="210203">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204">PPh Ps.4(2) Pembelian</option>
															<option data-subtext="2201">Hutang Jangka Panjang</option>
															<option data-subtext="300001">Equitas Saldo Awal</option>
															<option data-subtext="300002">Laba Ditahan</option>
															<option data-subtext="300003">Modal Saham</option>
															<option data-subtext="400001">Penjualan</option>
															<option data-subtext="400002">Pendapatan Jasa</option>
															<option data-subtext="400003">Retur Penjualan</option>
															<option data-subtext="400004">Diskon Penjualan</option>
															<option data-subtext="5010">Beban Pokok Penjualan</option>
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
															<option data-subtext="600024">Beban Inventaris Kantor</option>
															<option data-subtext="710001">Pendapatan Jasa Giro</option>
															<option data-subtext="710002">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003">Penjualan Persediaan/Perlengkapan</option>
															<option data-subtext="710004">Laba/Rugi Revaluasi Aset</option>
															<option data-subtext="710005">Pendapatan Diluar Usaha Lainnya</option>
															<option data-subtext="720001">Beban Bunga Pinjaman</option>
															<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003">Pajak Jasa Giro</option>
															<option data-subtext="720004">Laba/Rugi Terealisasi</option>
															<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
														</select>
                        </div>
						
							
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                      
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Diskon Penjualan :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
															<option disabled selected>Cari/Pilih Akun Perkiraan...</option>
															<option data-subtext="110101">Kas Kecil</option>
															<option data-subtext="110102">Bank</option>
															<option data-subtext="110201">Deposito Bank</option>
															<option data-subtext="110301">Piutang Usaha</option>
															<option data-subtext="110302">Uang Muka Pembelian</option>
															<option data-subtext="110401">Persediaan</option>
															<option data-subtext="110402">Persediaan Terkirim</option>
															<option data-subtext="110501">Perlengkapan Kantor</option>
															<option data-subtext="110502">Sewa Gedung Dibayar Dimuka</option>
															<option data-subtext="110503">Asuransi Dibayar Dimuka</option>
															<option data-subtext="110504">PPN Masukan</option>
															<option data-subtext="110505">PPh 23 Penjualan</option>
															<option data-subtext="110506">PPh Ps.4(2) Penjualan</option>
															<option data-subtext="120001">Tanah</option>
															<option data-subtext="120002">Gedung</option>
															<option data-subtext="120003">Kendaraan</option>
															<option data-subtext="120004">Peralatan</option>
															<option data-subtext="120005">Inventaris Kantor</option>
															<option data-subtext="12000601">Akumulasi Penyusutan Gedung</option>
															<option data-subtext="12000602">Akumulasi Penyusutan Kendaraan</option>
															<option data-subtext="12000603">Akumulasi Penyusutan Peralatan</option>
															<option data-subtext="12000604">Akumulasi Penyusutan Inventaris Kantor</option>
															<option data-subtext="210101">Hutang usaha</option>
															<option data-subtext="210102">Uang Muka Penjualan</option>
															<option data-subtext="210201">PPN Keluaran</option>
															<option data-subtext="210202">PPh 23 Pembelian</option>
															<option data-subtext="210203">Hutang Pembelian Belum Ditagih</option>
															<option data-subtext="210204">PPh Ps.4(2) Pembelian</option>
															<option data-subtext="2201">Hutang Jangka Panjang</option>
															<option data-subtext="300001">Equitas Saldo Awal</option>
															<option data-subtext="300002">Laba Ditahan</option>
															<option data-subtext="300003">Modal Saham</option>
															<option data-subtext="400001">Penjualan</option>
															<option data-subtext="400002">Pendapatan Jasa</option>
															<option data-subtext="400003">Retur Penjualan</option>
															<option data-subtext="400004">Diskon Penjualan</option>
															<option data-subtext="5010">Beban Pokok Penjualan</option>
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
															<option data-subtext="600024">Beban Inventaris Kantor</option>
															<option data-subtext="710001">Pendapatan Jasa Giro</option>
															<option data-subtext="710002">Pendapatan Bunga Deposito</option>
															<option data-subtext="710003">Penjualan Persediaan/Perlengkapan</option>
															<option data-subtext="710004">Laba/Rugi Revaluasi Aset</option>
															<option data-subtext="710005">Pendapatan Diluar Usaha Lainnya</option>
															<option data-subtext="720001">Beban Bunga Pinjaman</option>
															<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
															<option data-subtext="720003">Pajak Jasa Giro</option>
															<option data-subtext="720004">Laba/Rugi Terealisasi</option>
															<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
															<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
															<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
														</select>
                        </div>
						
						
							
						
						
                        </div>
						
						
					 
                    
									 
					  
							
					  
					  
					
								
									
									</div>
									
									
                    </div>

									</div>
									<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pajak</div><br><br>
										 <div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
                     

						
						
						<div class="form-group row">
                      <div class="col-lg-2">
                          <label><span style="color:#ff0000">*</span> ID Pajak :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">NIK</option>
                                      <option value="1" selected="">NPWP</option>
                                      <option value="1">Passpor</option>
                                      <option value="1">Lainnya</option>
                                      
                                  </select>
                        </div>
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> NPWP :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Wajib Pajak :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
						
						
						<div class="col-lg-6">
                          
                                <label>Tipe Transaksi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Faktur Pajak</option>
                                      <option value="1">Dokumen Tertentu</option>
                                      <option value="1">Ekspor</option>
                                      <option value="1">Digunggung</option>
                                      
                                  </select>
                            </div>
							
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
                      
						<div class="col-lg-12">
                          
                                <label>Kode Pajak :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">01 - Kepada Selain Pemungut PPN</option>
                                      <option value="1">02 - kepada Pemungut PPN Instansi Pemerintah</option>
                                      <option value="1">03 - kepada Pemungut PPN selain Instansi Pemerintah</option>
                                      <option value="1">04 - DPP Nilai Lain</option>
                                      <option value="1">05 - Besaran tertentu</option>
                                      <option value="1">06 - kepada orang pribadi pemegang paspor luar negeri (16E UU PPN)</option>
                                      <option value="1">07 - penyerahan dengan fasilitas PPN atau PPN dan PPnBM tidak dipungut/ditanggung pemerintah</option>
                                      <option value="1">08 -  penyerahan dengan fasilitas dibebaskan PPN atau PPN dan PPnBM </option>
                                      <option value="1">09 - penyerahan aktiva yang menurut tujuan semula tidak diperjualbelikan (16D UU PPN)</option>
                                      <option value="1">10 - Penyerahan lainnya</option>
                                      <option value="0" selected></option>
                                     
                                  </select>
                            </div>
						
						
						
						
						
						
                        </div>
						
						
					 
                    
									 
					  
							
					  
					  
					
									</div>
									
									</div>
									
									
                    </div>
									</div>
									</div>
									

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_4" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Piutang</div><br>
                   
                      <div class="row">
								<div class="col-xl-12">
								
										

 <div class="kt-portlet__body">
 <div class="row">
 
														<div class="col-lg-8">
														</div>
														
														
													</div>
  <div class="form-group row">
   
 <div class="col-xl-10">
 <a href="#" style="margin-top:100px;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_tambah_piutang">
											<i class="fa fa-plus"></i>Tambah Piutang
										</a>
 
										</div>
										<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #5867dd">
																<div>Total Piutang</div><br>
																
																<div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
															</div>
														</div>
										
										</div>
										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
 
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">Nomor</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal</th>
											  <th width="5%" bgcolor="#f7fcff">Syarat Pembayaran</th>
											  <th width="15%" bgcolor="#f7fcff">Keterangan</th>
											  <th width="10%" bgcolor="#f7fcff">Jumlah</th>

											  <th width="1%" bgcolor="#f7fcff">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:left" nowrap>0001PIUAK0626</td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026
												  <hr>
											    15:36:00 WITA</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap>&nbsp;</td>
												<td style="text-align:center" nowrap><div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
												  <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="800.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
											    </div></td>
												
											  <td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
									    </tbody>
									</table>

                   
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_5" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Sertifikat</div><br>
                   
                      <div class="row">
								<div class="col-xl-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>

											  <th width="5%" bgcolor="#f7fcff">Uraian<br>Sertifikat</th>
											  <th width="5%" bgcolor="#f7fcff">Dikeluarkan Oleh</th>
											  <th width="2%" bgcolor="#f7fcff">Tahun<br>Sertifikat</th>

											
											  <th width="3%" bgcolor="#f7fcff" rowspan="2">Upload Sertifikat</th>
											  <th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
											<tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">4</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>

										</tbody>
									</table>

                   
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_6" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pengalaman Kerja</div><br>
                   
                      <div class="row">
								<div class="col-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_4">#</th>
											  <th colspan="3" bgcolor="#f7fcff">Data Perusahaan</th>
											  <th colspan="2" bgcolor="#f7fcff">Lama Bekerja</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Jabatan Terakhir</th>
											  <th width="4%" rowspan="2" bgcolor="#f7fcff">Upload Surat Pengalaman</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="5%" bgcolor="#f7fcff">Nama</th>
											  <th width="5%" bgcolor="#f7fcff">Alamat </th>
											  <th width="5%" bgcolor="#f7fcff"> Nomor Tlp</th>
											  <th width="4%" bgcolor="#f7fcff">Awal</th>
											  <th width="4%" bgcolor="#f7fcff">Akhir</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="" /></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>

												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>


										</tbody>
									</table>

                   
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_7" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Login Aplikasi</div><br>

                    <div class="kt-portlet__body">
                      <div class="row">
								<div class="col-xl-12">
									<!--begin::Portlet-->
										
										<div class="kt-portlet__body">
											<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																

																<div class="form-group row">
						<div class="col-lg-3">
                          <label>Email Kantor :</label>
                          <div class="form-group">
																							<div class="input-group email">
																								<input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-envelope"></i>
																									</span>
																								</div>
																							</div>
																						</div>
                        </div>
                       <div class="col-lg-3">
                          <label>Email Lupa Password :</label>
                          <div class="form-group">
																							<div class="input-group email">
																								<input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-envelope"></i>
																									</span>
																								</div>
																							</div>
																						</div>
                        </div>
						<div class="col-lg-3">
                          <label>Password Login :</label>
						  <div class="form-group">
																							<div class="input-group pass">
																								<input type="text" class="form-control form-control-sm" placeholder="*****">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-eye-slash"></i>
																									</span>
																								</div>
																							</div>
																						</div>
                          
                        </div>
						<div class="col-lg-3">
                          <label>Ulangi Password :</label>
                          <div class="form-group">
																							<div class="input-group pass">
																								<input type="text" class="form-control form-control-sm" placeholder="*****">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-eye-slash"></i>
																									</span>
																								</div>
																							</div>
																						</div>
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

									</div>

							<!--end:: Portlet-->


          </div>



								</div>

								<!--End:: App Content-->
							</div>
											</div>
										</div>
									</div>
								</div>
					

	<!--end::Portlet-->


	<!--end:: Portlet-->


</div>



</div>

<!--End:: App Content-->
</div>

<!--End::App-->
</div>

<!-- end:: Content -->
</div>


</div>
</div>
<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_pending" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
															<button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button>
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
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_ditolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
															<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Ditolak&lt;hr&gt;11 Juli 2025 - 22:33 WITA&lt;hr&gt;Minta Dipertimbangkan Kembali">
															<i class="fa flaticon2-delete"></i>
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
							<div class="modal fade" id="modal_tambah_piutang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH PIUTANG</h3>
											</div>
<div class="kt-widget__toolbar"><br>
																	 <span class="kt-switch kt-switch--sm kt-switch--icon">
																			<label>
																					<input type="checkbox" checked="checked" name="">
																					<span></span>
																			</label>
																	</span>
								
							</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													

												<div class="form-group row">
<div class="col-lg-3">
										<label class="">Nomor</label>
										<input data-switch="true" data-size="small" data-toggle="kt-tooltip" data-skin="brand" data-on-text="Otomatis" data-off-text="Tidak" data-on-color="info" type="checkbox" checked="checked">
										

									</div>&nbsp;&nbsp;&nbsp;&nbsp;
												<div class="col-lg-5">
														<label class="kt-font-brand">Nomor :</label>
														<input type="text" class="form-control form-control-sm" placeholder="Ex : 110101">
													</div>
<div class="col-lg-3">
														<label class="kt-font-brand">Pembayaran :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
												<option value="1" selected>Tunai Saat Pengantaran / COD</option>
												<option value="1" selected>Manual</option>
												<option value="1" selected>7 Hari</option>
												<option value="1" selected>14 Hari</option>
												<option value="1" selected>21 Hari</option>
												<option value="1" selected>30 Hari</option>
												
												<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
										</select>
													</div>

									</div>
									
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
									<div class="col-lg-6">
										<label class="">Tanggal Transaksi :</label>
										<div class="form-group">
											<div class="input-group date">
																									 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="- Pilih Tanggal -" id="kt_datepicker_2">
																									 <div class="input-group-append">
																											 <span class="input-group-text">
																													 <i class="la la-calendar-check-o"></i>
																											 </span>
																									 </div>
																							 </div>
										</div>
									</div>
									<div class="col-lg-6">
										<label class="">Jatuh Tempo :</label>
										<div class="form-group">
											<div class="input-group date">
																									 <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="- Pilih Tanggal -" id="kt_datepicker_2">
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


												
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
													<div class="col-lg-6">
														<label class="kt-font-brand">Penjual  :</label>
														<select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Muhammad Nasrullah, S.Kom</option>
                                      <option value="1">Muhammad Ramadhan, S.T</option>
                                      <option value="2">Keseluruhan</option>
                                                   <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>                        
                                  </select>
														
													</div>
													<div class="col-lg-6">
										<label class="">Jumlah:</label>
										<div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" class="form-control form-control-sm" placeholder="" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div>
									</div>


												
													
													

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												
													<div class="col-lg-12">
														<label class="kt-font-brand">Keterangan  :</label>
														<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
													</div>
													


												
													
													

												</div>
												
												
											
									<div class="kt-portlet__foot kt-align-center">
												<div class="">
<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
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
</div>

</div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
