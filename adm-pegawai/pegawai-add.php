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
				Form Tambah Pegawai Tetap
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="pegawai.php" class="btn btn-label-brand btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				&nbsp;
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
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
														<i class="fa fa-user-tie"></i> Data Pribadi
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-address-card"></i> Data Kepegawaian
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
														<i class="fa fa-users"></i>Data Keluarga
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_4" role="tab">
														<i class="fa fa-user-graduate"></i>Data Pendidikan
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_5" role="tab">
														<i class="fa fa-copy"></i>Data Sertifikat
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_6" role="tab">
														<i class="fa fa-file-alt"></i>Data Pengalaman Kerja
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
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                      <div class="row">
								<div class="col-xl-8">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Diri</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                       <div class="col-lg-3">
                          <label>Gelar Depan :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						<div class="col-lg-3">
                          <label>Gelar Belakang :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Nama Panggilan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder=""  >
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Jenis Kelamin :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option data-content="<span class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</span>" class="select-option-add" value="add"></option>
														<option selected>Pria</option>
														<option>Wanita</option>
														
														
													</select>
                        </div>
						
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Status :</label>
                        <select class="form-control kt-selectpicker" data-live-search="true">
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														<option selected>Single</option>
														<option>Menikah</option>
														<option>Janda</option>
														<option>Duda</option>
														</select>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Agama :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														<option selected>Islam</option>
														<option>Kristen Protestan</option>
														<option>Kristen Katholik</option>
														<option>Hindu</option>
														<option>Budha</option>
														<option>Konghucu</option>
														</select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">


						<div class="col-lg-3">
					                           <label class=""><span style="color:#ff0000">*</span> Tempat Kelahiran :</label>
					                         <select class="form-control kt-selectpicker" data-live-search="true">
					 															<optgroup label="Sulawesi Selatan">
					 																<option value="AK">Maros</option>
					 																<option value="AK" selected>Makassar</option>
					 																
					 															</optgroup>

					 														</select>
					                         </div>
						<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Tanggal Kelahiran :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>

                        </div>


                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					 <div class="col-lg-6">
					                           <label class=""><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
					                         <input type="text" class="form-control form-control-sm" placeholder=""  >
					                         </div>


						<div class="col-lg-2">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="">

                        </div>
						<div class="col-lg-2">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="">
                        </div>
						<div class="col-lg-2">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="">
                        </div>
					  
					  </div>
									 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Provinsi :</label>
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
                          <label class=""><span style="color:#ff0000">*</span> Kab / Kota :</label>
                           <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Makassar</option>
                                      
                                  </select>
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Kecamatan :</label>
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
					                           <label><span style="color:#ff0000">*</span> Kelurahan :</label>
                       <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
                                     
                                  </select>
					                         </div>

									</div>
									 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">


						
						
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Email :</label>
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
                          <label class=""><span style="color:#ff0000">*</span> No. KTP / SIM :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                      </div>
					  

									</div>
									 
									
									</div>
									
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

						<div class="col-lg-3">
					                           <label><span style="color:#ff0000">*</span> No. Rekening :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="">
					                         </div>
						<div class="col-lg-3">
					                           <label class=""><span style="color:#ff0000">*</span> Bank :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Mandiri</option>
														<option>BNI</option>
														<option>BRI</option>
														<option>BTN</option>
														<option>Bukopin</option>
														<option>Mega</option>
														<option>BCA</option>
														
														</select>
                      </div>
						<div class="col-lg-3">
					                           <label><span style="color:#ff0000">*</span> Nama Pemilik Rekening :</label>
                         <input type="text" class="form-control form-control-sm" placeholder="">
					                         </div>
											 <div class="col-lg-3">
                          <label class="">NPWP Pribadi :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="" >
                      </div>
                      </div>

									</div>
									</div>


									</div>
							<!--end:: Portlet-->
</div>
<div class="col-xl-4">

									<!--begin::Portlet-->
									
<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Darurat</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="">

                        </div>
						
						
						
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                         <input type="text" class="form-control form-control-sm"  placeholder="">

                        </div>
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="">

                        </div>
						<div class="col-lg-3">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="">
                        </div>
						<div class="col-lg-3">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="">
                        </div>
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                        <div class="col-lg-6">
                          
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
							<div class="col-lg-6">
                          <label class="">Kab / Kota :</label>
                        <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Makassar</option>
                                      <option value="2">Maros</option>
                                     
                                  </select>
                      </div>
							
						

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          
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
						<div class="col-lg-6">
                          
                                <label>Kelurahan :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
                                     
                                  </select>
                            </div>
                        
					  
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> No. Handphone :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm"  placeholder="">
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
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Kepegawaian</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-6">
																						<label>Status Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="Pegawai Tetap" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> NIP Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="" placeholder="">
																					</div>
																					
																					
																				</div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> Masuk Kerja :</label>
																						<div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
						<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> Tanggal SK Pegawai Tetap :</label>
																						<div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div>
																					</div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
																					
																					<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> No. SK Pegawai Tetap :</label>
																						<input type="text" class="form-control form-control-sm" value="" placeholder="" id="kt_datepicker_2" >
																					</div>
																					<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> Upload SK Pegawai Tetap :</label>
																						<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div>
																						
																					</div>
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> Departemen :</label>
																						<select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
														<option selected>Direksi</option>
														<option>Dewan Pengawas</option>
														<option>Umum</option>
														<option>Keuangan & Asset</option>
														<option>Operasional</option>
														<option>Pengembangan Usaha dan Kerjasama</option>
														
														</select>
																					</div>
<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> Divisi :</label>
																						<select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														<option selected>Umum dan Kepegawaian</option>
														<option>Hukum dan Humas</option>
														<option>Keuangan</option>
														<option>Asset</option>
														<option>Pengelolaan</option>
														<option>Produksi</option>
														<option>Pengembangan</option>
														<option>Kerja Sama</option>
														
														</select>
																					</div>
																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">

						<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> Kantor :</label>
																						<select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Pusat</option>
														<option>Nama Cabang A</option>
														<option>Nama Cabang B</option>
													
														
														</select>
																					</div>
																					<div class="col-lg-6">
																						<label><span style="color:#ff0000">*</span> Jabatan :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
							  
                              <option value="2" selected>Direktur Utama</option>
                              <option value="2">Direktur Umum</option>
                              <option value="2">Direktur Keuangan dan Asset</option>
                              <option value="2">Direktur Operasional</option>
                              <option value="2">Direktur Pengembangan Usaha & Kerjasama</option>

                          </select>
																					</div>

						
                        </div>
						
                        </div>
						
                     
					  
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						
						
                        </div>

									

									</div>
									


									</div>
							<!--end:: Portlet-->
</div>
<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atasan Langsung</div><br><br>
																							<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-12">
																						<label><span style="color:#ff0000">*</span> Cari Pegawai :</label>
																						<select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >000000001 - Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">000000003 - Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000000002 - Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000000004 - Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000000005 - Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
																						
																					</div>
																					
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>NIP :</label>
																						<input type="text" class="form-control form-control-sm" value="238 004 032" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Departemen :</label>
																						<input type="text" class="form-control form-control-sm" value="Umum" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Bagian :</label>
																						<input type="text" class="form-control form-control-sm" value="Umum dan Kepegawaian" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

						
                        </div>
                        </div>
						
                     
					  
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Jabatan :</label>
																					<input type="text" class="form-control form-control-sm" value="Kepala Seksi Administrasi Kepegawaian" placeholder="31 Desember 2022" id="kt_datepicker_2" disabled>
																					</div>

						
                        </div>

									

									</div>
																						</div>

									</div>
									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Pegawai</div><br><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Upload Foto">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Pegawai</div><br><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Scan Fingerprint">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Fingerprint Pegawai</div><br><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:left">
																										<div class="col-lg-12">
																						<label>UID :</label>
																					<input type="text" class="form-control form-control-sm" placeholder="UID Fingerprint">
																					</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>

									</div>

									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Avatar Pegawai</div><br><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Upload Foto">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
									<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Paraf Pegawai</div><br><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Tanda Tangan">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
																						
																						<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Face Recognize Pegawai</div><br><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:left">
																										<div class="col-lg-12">
																						<label>UID :</label>
																					<input type="text" class="form-control form-control-sm" placeholder="UID Face">
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
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Keluarga</div><br>
                   
                      <div class="row">
								<div class="col-xl-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="2%" bgcolor="#f7fcff">Hubungan<br>Keluarga</th>
											  <th width="6%" bgcolor="#f7fcff">Nama Lengkap</th>
											  <th width="1%" bgcolor="#f7fcff">Jenis<br>Kelamin</th>
											  <th width="4%" bgcolor="#f7fcff">Tanggal Lahir</th>
											  <th width="1%" bgcolor="#f7fcff">Pendidikan<br>Terakhir</th>
											  <th width="5%" bgcolor="#f7fcff">Pekerjaan </th>
											  <th width="4%" bgcolor="#f7fcff" rowspan="2">Upload File<br> ( Akta Nikah / Akta Kelahiran )</th>
											  <th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Suami</option>
																							<option value="HI">Istri</option>
																							<option value="HI">Anak</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Pria</option>
																							<option value="HI">Wanita</option>
																						</select>
																					</div></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																							<option value="HI">Belum Sekolah</option>
																						</select>
																					</div></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Suami</option>
																							<option value="HI">Istri</option>
																							<option value="HI">Anak</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Pria</option>
																							<option value="HI">Wanita</option>
																						</select>
																					</div></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						
																						</select>
																					</div></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Suami</option>
																							<option value="HI">Istri</option>
																							<option value="HI">Anak</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Pria</option>
																							<option value="HI">Wanita</option>
																						</select>
																					</div></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																							<option value="HI">Belum Sekolah</option>
																						</select>
																					</div></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Suami</option>
																							<option value="HI">Istri</option>
																							<option value="HI">Anak</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>Pria</option>
																							<option value="HI">Wanita</option>
																						</select>
																					</div></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																							<option value="HI">Belum Sekolah</option>
																						</select>
																					</div></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
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
											<div class="tab-pane" id="m_tabs_6_4" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pendidikan</div><br>
                   
                      <div class="row">
								<div class="col-xl-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">Jenjang<br>Pendidikan</th>
											  <th width="5%" bgcolor="#f7fcff">Jurusan / Fakultas</th>
											  <th width="3%" bgcolor="#f7fcff">Tahun Masuk</th>
											  <th width="3%" bgcolor="#f7fcff">Tahun Lulus</th>

											  <th width="5%" bgcolor="#f7fcff">Nama Sekolah / Universitas </th>
											  <th width="3%" bgcolor="#f7fcff" rowspan="2">Upload Ijazah</th>
											  <th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
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
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
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
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
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
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
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
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" data-live-search="true">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
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
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
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
