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
				Perpanjang Kontrak Pegawai
			</h3>
			<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#0961ae">
											Nama Pegawai </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="pegawai-kontrak-expired.php" class="btn btn-label-brand btn-sm">
					<i class="flaticon-reply"></i> Kembali</button>
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
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<!--Begin::Alert-->
	<div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
		<div class="alert-icon"><i class="fa fa-info-circle"></i></div>
		<div class="alert-text">A simple primary alert—check it out!</div>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Diri</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini">
                        </div>
                       <div class="col-lg-2">
                          <label>Gelar Depan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="-">
                        </div>
						<div class="col-lg-2">
                          <label>Gelar Belakang :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="SE">
                        </div>
						<div class="col-lg-2">
                          <label class=""><span style="color:#ff0000">*</span> No. KTP / SIM :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="737112301870002">
                      </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Nama Panggilan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri"  >
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Jenis Kelamin :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Wanita">
                        </div>
						
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Status :</label>
                       <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Single">
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Agama :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Islam">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">

<div class="col-lg-6">
					                           <label class=""><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
					                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Jl. Toddopuli Raya Timur Kompleks Villa Surya Mas J/9">
					                         </div>
						
						<div class="col-lg-3">
					                           <label class=""><span style="color:#ff0000">*</span> Tempat Kelahiran :</label>
					                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Bone">
					                         </div>
						<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Tanggal Kelahiran :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="22 Januari 1987">
                      </div>

                        </div>


                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">


						<div class="col-lg-1">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="90000">

                        </div>
						<div class="col-lg-1">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="003">
                        </div>
						<div class="col-lg-1">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="005">
                        </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Provinsi :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Sulawesi Selatan">
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="082244444436" >
                      </div>
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="082244444436" >
                      </div>
                      </div>

									</div>
									 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">
<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Kecamatan :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Biringkanaya" >
                      </div>

						<div class="col-lg-3">
					                           <label><span style="color:#ff0000">*</span> Kelurahan :</label>
                      <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Bakung" >
					                         </div>
						
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Kota :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Makassar" >
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Email :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="xxx@xxx.xxx" >
                      </div>
                      </div>
					  

									</div>
									 
									
									
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">

						<div class="col-lg-3">
					                           <label><span style="color:#ff0000">*</span> No. Rekening :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1520017942547">
					                         </div>
						<div class="col-lg-3">
					                           <label class=""><span style="color:#ff0000">*</span> Bank :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BCA">
                      </div>
						<div class="col-lg-3">
					                           <label><span style="color:#ff0000">*</span> Nama Pemilik Rekening :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Isikan Nama Pemilik Rekening">
					                         </div>
											 <div class="col-lg-3">
                          <label class="">NPWP Pribadi :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="02.821.616.6-805.000" >
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat Darurat</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Jl. Toddopuli Raya Timur">

                        </div>
						
						
						
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                       <div class="col-lg-12">
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Jl. Toddopuli Raya Timur">

                        </div>
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="90000">

                        </div>
						<div class="col-lg-3">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="003">
                        </div>
						<div class="col-lg-3">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="005">
                        </div>
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                        <div class="col-lg-6">
                          
                                <label>Provinsi :</label>
								
                               <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Sulawesi Selatan">
                            </div>
							<div class="col-lg-6">
                          
                                <label>Kecamatan :</label>
								
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Biringkanaya">
                            </div>
						

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          
                                <label>Kelurahan :</label>
								
                                <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Bakung">
                            </div>
                        <div class="col-lg-6">
                          <label class="">Kota :</label>
                        <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="Makassar">
                      </div>
					  
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> No. Handphone :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="082244444436">
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Kepegawaian</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-6">
																						<label>Tipe Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="Pegawai Kontrak Bulanan" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-6">
																						<label>NIP Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="012311239933" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
																						<label>Kontrak Mulai :</label>
																						<input type="text" class="form-control form-control-sm" placeholder="10 Juli 2025" id="kt_datepicker_2" disabled>
																					</div>
						<div class="col-lg-6">
																						<label>Kontrak Berakhir :</label>
																						<div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
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
																						<label>Departemen :</label>
																						<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum">
																					</div>
<div class="col-lg-6">
																						<label>Bagian :</label>
																						<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian">
																					</div>
																					</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
<div class="col-lg-6">
																						<label>Pangkat / Golongan :</label>
																						<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="085234006917">
																					</div>
						<div class="col-lg-6">
																						<label>Kantor :</label>
																						<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
																					</div>

						
                        </div>
                        </div>
						
                     
					  
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Jabatan :</label>
																						<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian">
																					</div>
						
                        </div>

									

									</div>
									


									</div>
							<!--end:: Portlet-->
</div>
<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atasan Langsung</div><br>
																							<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
																					<div class="col-lg-12">
																						<label>Cari Pegawai :</label>
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
									<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/300_7.jpg&quot;);"></div>
																												
																												
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Paraf Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/img/paraf.png&quot;);"></div>
																												
																												
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>

									</div>
									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:center">
																										<div class="col-lg-12">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/signature.jpg&quot;);"></div>
																												
																											</div>
																										</div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Fingerprint Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:left">
																										<div class="col-lg-12">
					                           <label>UID Fingerprint :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="123">
					                         </div>
																										
																									</div>
																								</div>
																							</div>
																						</div>
																						<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Face Pegawai</div><br>
																							<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row" style="text-align:left">
																										<div class="col-lg-12">
					                           <label>UID Face :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="123">
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
	


</div>
</div>

<!--end: Datatable -->
</div>
</div>

</div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
