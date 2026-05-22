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
											Form Pengangkatan Calon Pegawai
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>
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
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-wizard-v4" id="kt_wizard_v4" data-ktwizard-state="step-first">

								<!--begin: Form Wizard Nav -->
								<div class="kt-wizard-v4__nav">
									<div class="kt-wizard-v4__nav-items">

										<!--doc: Replace A tag with SPAN tag to disable the step link click -->
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-checking"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Form
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Detail Surat Keputusan
													</div>
												</div>
													<div class="kt-wizard-v4__nav-number kt-block-center">
														1
													</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-grid-menu-v2"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Atribut
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Surat Keputusan
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-users"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Data
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Calon Pegawai
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>
										<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-interface-10"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Surat Keputusan 
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Pengangkatan Pegawai
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
												</div>
											</div>
										</div>
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon2-box-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview Surat
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Cetak Surat Pemberhentian
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													5
												</div>
											</div>
										</div>-->
									</div>
								</div>

								<!--end: Form Wizard Nav -->
								<div class="kt-portlet">
									<div class="kt-portlet__body kt-portlet__body--fit">
										<div class="kt-grid">
											<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

												<!--begin: Form Wizard Form-->
												<form class="kt-form" id="kt_form">

													<!--begin: Form Wizard Step 1-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-half kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Surat</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Nomor Surat :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="80.1-Peg/001/XI/2022">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Ditetapkan Di :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Makassar</option>
                              <option value="HI">Jakarta</option>
                            </select>
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Tanggal Surat :</label>
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
						
						
                      </div>
					  
                    </div>
							<!--end:: Portlet-->


										</div>
										<div class="col-xl-5">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Menimbang</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                         
						  <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_2">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="50px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="6" placeholder="bahwa sesuai ketentuan Peraturan Daerah  No. 10 Tahun 2000 tentang Ketentuan badan Pengawas, Direksi dan Pegawai Perumda Parkir Makassar Raya, calon pegawai perusahaan yang namanya  tersebut  dalam  lajur  2 (dua) selama masa percobaan sejak tanggal sebagimana  tersebut  dalam  laJur 6 (enam) dari daftar  lampiran  keputusan  ini,  temyata  telah memenuhi syarat dan dipandang cakap untuk diangkat menjadi Pegawai PD. Parkir Makassar Raya."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="bahwa untuk maksud pada huruf a diatas dituangkan dalam Surat Keputusan Direksi Perumda Parkir Makassar Raya.
"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tembusan</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div id="kt_repeater_2">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_3">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="10px" bgcolor="#f7fcff">No</td>
																								  <td width="700px" bgcolor="#f7fcff">Tembusan Surat</td>
																								  <td width="50px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Bapak Walikota Makassar</option>
                              <option value="HI">Dewan Pengawas Perusahaan Umum Daerah Parkir Makassar Raya</option>
                              <option value="AR">Arsip</option>
                            </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="HI">Dewan Pengawas Perusahaan Umum Daerah Parkir Makassar Raya</option>
							  <option value="AK">Bapak Walikota Makassar</option>
                              <option value="AR">Arsip</option>
                            </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AR">Arsip</option>
							  <option value="HI">Dewan Pengawas Perusahaan Umum Daerah Parkir Makassar Raya</option>
							  <option value="AK">Bapak Walikota Makassar</option>
                              
                            </select></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													
									
						
						
												
												</div>
									</div>
									
                      </div>

							<!--end:: Portlet-->
										</div>
										



								</div>
														</div>
													</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								
										
										<div class="col-xl-6">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Mengingat</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label></label>
						  <div id="kt_repeater_3">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_5">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">#</td>
																								  <td width="800px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="10px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Undang-undang Nomor S Tahun 1962 tentang Perusahaan Daerah (Lembaran Negara Tahun 1962 No.10, Tambahan Lembaran Negara Nomor 2787)"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Undang – Undang Nomor 28 Tahun 1999 tentang Penyelenggaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 75, tambahan Lembaran Negara Republik Indonesia Nomor 3851);"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Undang-Undang Nomor  22  Tahun  1999  Tentang  Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 60, Tambahan Lenibaran Negara Republik Indonesia Nomor 3839)"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Peraturan Pemerintah Nomor 51 Tahun 1971 Tentang Perubahan Batas-Batas Daerah Kota Madya Makassar dan Kabupaten Gowa ,Maros dan Pangkajene Kepulauan dalam lingkungan Propinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia tahun 1971 Nomor 65, Tambahan Lembaran Negara Republik Indonesia Nomor 2970)"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">5</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Peraturan Pemerintah No. 86 tahun 1999 Tentang Perubahan Kota Madya Ujung Pandang menjadi Kota Makassar dalam Wilayah Propinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 193)"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">6</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Peraturan Daerah Nomor 5 Tentang Tentang Pembentukan Perusahaan Umum Daerah Parkir Makassar Raya ( Lembaran Daerah Kota Makassar Nomor 19 Tahun 1999 Seri D Nomor 6)"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">7</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Peraturan Daerah Makassar No. 10 Tahun 2000 tentang Ketentuan Pokok Badan Pengawas, Direksi dan Kepegawaian Perusahaan Umum Daerah Parkir Makassar Raya. (Lembaran daerah nomor 2 tahun 2000 seri D Nomor 2)"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">8</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Keputusan Walikota Makassar No.736/S.Kep/137/2000 Tentang Penugasan Pengelolaan Perparkiran dalam Wilayah Kota Makassar kepada Perusahaan Umum Daerah Parkir Makassar Raya ."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">9</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Keputusan Walikota Makassar No.7040 tahun 1999 Tentang Struktur Organisasi dan tata kerja Perusahaan Daerah Parkir Makassar Raya Kota Makassar (Lembaran Daerah Kota Makassar Nomor 24 Tahun 1999 seri D Nomor 11)."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
                                          </div>
													
									
						
						

                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
							<!--end:: Portlet-->

  <div class="col-xl-6">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Menetapkan</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label></label>
						  <div id="kt_repeater_3">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_5">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">#</td>
																								  <td width="800px" bgcolor="#f7fcff">Uraian</td>
																								   <td width="10px" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">#</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="KEPUTUSAN DIREKSI PERUSAHAAN DAERAH PARKIR MAKASSAR RAYA TENTANG PENGANGKATAN PEGAWAI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">PERTAMA</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Calon pegawai yang namanya tersebut pada lampiran surat keputusan ini dalam lajur 2 (dua) diangkat menjadi Pegawai Perusahaan Umum Daerah Parkir Makassar Raya, dalam golongsn/ruang pada lajur  7 (tujuh)  dan  diberikan Gaji pokok sebagaimana tersebut dalam lajur 9 (sembilan) terhitung mulai tanggal tertera dalam lajur 10 (sepuluh) serta penghasilan lainnya sesuai ketentuan yang berlaku."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">KEDUA</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Surat keputusan ini berlaku sejak tanggal ditetapkannya dan bilamana terdapat kekeliruan dalam Keputusan ini, maka akan dilakukan perbaikan sebagaimana mestinya."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">KETIGA</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="1" placeholder="Keputusan ini disampaikan kepada yang bersangkutan untuk dipergunakan seperlunya."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="6">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
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
													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Calon Pegawai</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-6">
                          <label>Cari Nama Calon Pegawai :</label>
						  <select class="form-control kt-selectpicker" data-live-search="true">
								<optgroup label="- Bagian Umum">
                              <option value="AK">Sri Suhartini, SE</option>
                              <option value="HI">Muhammad Nasrullah, S.Kom</option>
                            </select>

                        </div>
						<div class="col-lg-3">
                          <label>Nomor Pokok Pegawai :</label>
						 <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2381980022062">
                        </div>
						<div class="col-lg-3">
                          <label>Kantor :</label>
						 <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha dan Kerjasama">
                        </div>
						<div class="col-lg-6">
                          <label class="">Bagian :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian">
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Pangkat / Golongan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staf Muda / C.1">
                        </div>
						<div class="col-lg-6">
                          <label class="">Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Administrasi Kepegawaian">
                        </div>

                        </div>
						
						
                      </div>
					  
                    </div>
							<!--end:: Portlet-->


										</div>
										
										<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atasan Langsung</div>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
					  <div class="col-lg-6">
                      <label>Cari Pegawai :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">\
																						<optgroup label="- Direksi">
                              <option value="2">000 000 001 - Yulianti Tomu, SE</option>
                              <option value="2">000 000 002 - Rizal Asjadad</option>
                              <option value="3">000 000 003 - Christofher Rio Aviary</option>
                              <option value="3">000 000 004 - Mu’amar Nor Amin</option>
                              <option value="3">000 000 005 - Zulfadli Syahrir</option>
							  <optgroup label="- Umum dan Kepegawaian">
                              <option value="3">000 000 006 - Ir. Asrarudin Mamonto, MM</option>
                              <option value="3">238 004 032 - Sri Suhartini, SE</option>

                          </select>
                        </div>
								<div class="col-lg-3">
                          <label>NIP Pegawai :</label>
						 <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        </div>
						<div class="col-lg-3">
                          <label>Kantor :</label>
						 <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>	
                      </div>
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha dan Kerjasama">
                        </div>
						<div class="col-lg-6">
                          <label class="">Bagian :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian">
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Pangkat / Golongan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staf Ahli / C.1">
                        </div>
						<div class="col-lg-6">
                          <label class="">Jabatan :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian">
                        </div>

                        </div>
						
						
                      </div>
                      </div>

							<!--end:: Portlet-->
										</div>
										



								</div>
														</div>
													</div>

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
													<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
															<div class="kt-wizard-v4__form">
														 
										<div class="bg-white w-50 ml-auto mr-auto mt-3">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
								<th colspan="6" class="text-center">
									<span style="text-align: center"><span style="font-family: Bookman Old Style; font-size: 12px;"><u>KEPUTUSAN DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA</b></u></span><br /><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>Nomor : 80.l-Peg/001/VIII/2022</b></span>
								</th>
							</tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;">TENTANG</span></p></td>
  </tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>PENGANGKATAN PEGAWAI</b></span><br />
							    <span style="font-family: Bookman Old Style; font-size: 12px;"><b>PADA PERUSAHAAN UMUM DAERAH PARKIR</b></span><br />
						      <span style="font-family: Bookman Old Style; font-size: 12px;"><b>MAKASSAR RAYA KOTA MAKASSAR TAHUN 2023</b></span></p></td>
							</tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
								<td colspan="6"><div align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>Dengan Rahmat Tuhan Yang Maha Esa</b></span></div></td>
							</tr>
							<tr>
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA</b></span></p></td>
  </tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">Menimbang</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">:</td>
							  <td width="10" valign="top">a.</td>
							  <td>&nbsp;</td>
							  <td>bahwa sesuai ketentuan Peraturan Daerah No. 10 Tahun 2000 tentang Ketentuan badan Pengawas, Direksi dan Pegawai Perumda Parkir Makassar Raya, calon pegawai perusahaan yang namanya  tersebut  dalam  lajur  2 (dua) selama masa percobaan sejak tanggal sebagimana  tersebut  dalam  laJur 6 (enam) dari daftar  lampiran  keputusan  ini,  temyata  telah memenuhi syarat dan dipandang cakap untuk diangkat menjadi Pegawai PD. Parkir Makassar Raya.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td>&nbsp;</td>
							  <td>bahwa untuk maksud pada huruf a diatas dituangkan dalam Surat Keputusan Direksi Perumda Parkir Makassar Raya.</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">Mengingat</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="10" valign="top">1.</td>
							  <td>&nbsp;</td>
							  <td>Undang-Undang Nomor 29 Tahun 1959 tentang Pembentukan  Daerah-daerah Tingkat II di Sulawesi (Lembaran Negara Republik Indonesia Tahun  1959 Nomor 74, Tambahan Lembaran Negara Republik Indonesia Nomor 1822);
						      <span style="text-align: justify"></span></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">2.</td>
							  <td>&nbsp;</td>
							  <td>Undang – Undang Nomor 28 Tahun 1999 tentang Penyelenggaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 75, tambahan Lembaran Negara Republik Indonesia Nomor 3851);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">3.</td>
							  <td>&nbsp;</td>
							  <td>Undang – Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan Perundang – Undangan (Lembaran Negara Republik Indonesia Tahun 2011 Nomor 82, Tambahan Lembaran Negara Republik Indonesia Nomor 5234) sebagaimana telah diubah dengan Undang-Undang Nomor 15 Tahun 2019 Tentang Perubahan atas Undang-Undang Nomor 12 Tahun 2011 tentang Pembentukan Peraturan Perundang-undangan (Lembaran Negara Republik Indonesia Tahun 2019 Nomor 183, Tambahan Lembaran Negara Republik Indonesia Nomor 6398);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">4.</td>
							  <td>&nbsp;</td>
							  <td>Undang – Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 244, Tambahan Lembaran Negara Republik Indonesia Noomor 5587) sebagaimana telah diubah terakhir dengan Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2015 Nomor 58, Tambahan Lembaran Negara Republik Indonesia Nomor 5679);</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
  </table>
  <img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
  <div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">5.</td>
							  <td>&nbsp;</td>
							  <td>Undang – Undang Nomor 30 Tahun 2014 tentang Administrasi Pemerintahan (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 292, Tambahan Lembaran Negara Republik Indosesia Nomor 5601); </td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">6.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar Nomor 10 Tahun 2000 tentang Pokok-Pokok Badan Pengawas Direksi dan Kepegawaian PD.Parkir Makassar Raya;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">7.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar  Nomor 16 Tahun 2006 tentang Perubahan atas Peraturan Daerah Kota Makassar Nomor 5 Tahun 1999 tentang pendirian Perusahaan Daerah Parkir Makassar Raya Kotamadya Daerah Tingkat II Ujung Pandang;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">8.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Kota Makassar Nomor 17 Tahun 2006 tentang Pengelolaan Parkir Tepi Jalan Umum dalam daerah Kota Makassar;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">9.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Nomor 51 Tahun 1971 tentang Perubahan Batas – batas Daerah Kotamadya Makassar dan Kabupaten – Kabupaten Gowa, Maros dan Pangkajene dan Kepulauan dalam lingkungan Daerah Provinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia Tahun 1971 Nomor 65, Tambahan Lembaran Negara Republik Indonesia Nomor 2970);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">10.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan pemerintah Nomor 54 Tahun 2017 tentang Badan Usaha Milik Daerah;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">11.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Nomor 86 Tahun 1999 tentang Perubahan Nama Kota Ujung Pandang menjadi Kota Makassar dalam Wilayah Provinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia Nomor 5258);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">12.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Dalam Negeri Daerah Nomor 80 Tahun 2015 tentang Pembentukan Produk Hukum Daerah (Berita Negara Republik Indonesia Tahun 2015 Nomor 2036) sebagaimana telah diubah terakhir dengan Peraturan Menteri dalam Negeri Nomor 80 Tahun 2015 tentang Pembentukan Produk Hukum Daerah (Berita Negara Republik Indonesia Tahun 2018 Nomor 157);</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">13.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Menteri Dalam Negeri Nomor 37 Tahun 2018 tentang Pengangkatan dan Pemberhentian Anggota Dewan Pengawas atau Anggota Komisaris dan Anggota Direksi Badan Usaha Milik Daerah;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">14.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Menteri Dalam Negeri Nomor 118 tahun 2018 tentang Rencan Bisnis, Rencana Kerja dan Anggaran, Kerja Sama, Pelaporan dan Evaluasi Badan Usaha Milik Daerah; </td>
  </tr>
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>
						</table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
						<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td colspan="9"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>MEMUTUSKAN</b></p></td>
							</tr>
							<tr>
							  <td colspan="9">&nbsp;</td>
  </tr>
							<tr>
							  <td width="76" valign="top">Menetapkan</td>
							  <td width="1" valign="top">&nbsp;</td>
							  <td width="3" valign="top">:</td>
							  <td width="10" valign="top"></td>
							  <td width="1">&nbsp;</td>
							  <td colspan="4"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>KEPUTUSAN DIREKSI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA  TENTANG  PENGANGKATAN TENAGA KONTRAK KERJA WAKTU TERBATAS PADA PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA KOTA MAKASSAR TAHUN 2023</b></td>
  </tr>
							<tr>
							  <td colspan="9" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">KESATU</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"></td>
							  <td>&nbsp;</td>
							  <td colspan="4">Mengangkat Tenaga Kontrak Kerja Waktu Terbatas pada Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar Tahun 2023, sebagaimana namanya tercantum dalam Lampiran Keputusan ini yang merupakan satu kesatuan yang tidak terpisahkan dengan Keputusan ini; </td>
  </tr>
							<tr>
							  <td valign="top">KEDUA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="10" valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4">Hak dan Kewajiban Tenaga Kontrak Kerja Waktu Terbatas sebagaimana dimaksud dalam Diktum KESATU, dituangkan dalam Surat Perjanjian Kesepakatan Kerja Waktu terbatas yang ditandatangani oleh yang bersangkutan dengan Direksi Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar;   


</span></td>
  </tr>
							<tr>
							  <td valign="top">KETIGA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4">Segala Biaya yang timbul dari pelaksanaan Keputusan ini, akan dibebankan pada  Anggaran Belanja Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar Tahun Anggaran 2023;</td>
  </tr>
							<tr>
							  <td valign="top">KEEMPAT</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4">Ketentuan yang berkaitan dengan teknis pelaksanaan Keputusan ini akan diatur lebih lanjut dalam Surat Keputusan Direksi Perusahaan Umum Daerah Parkir Makassar Raya Kota Makassar;</td>
  </tr>
							<tr>
							  <td valign="top">KELIMA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4">Keputusan ini berlaku terhitung mulai tanggal 01 Januari 2023 sampai dengan 31 Desember 2023.</td>
  </tr>
							<tr>
							  <td colspan="9" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" rowspan="9" valign="top">&nbsp;</td>
							  <td width="84">Ditetapkan di </td>
							  <td width="8">:</td>
							  <td width="130">Makassar</td>
  </tr>
							<tr>
							  <td><u>Pada Tanggal</u></td>
							  <td><u>:</u></td>
							  <td><u>30 Desember 2022</u></td>
  </tr>
							<tr>
							  <td colspan="3">Direksi Perusahaan Umum Daerah </td>
  </tr>
							<tr>
							  <td colspan="3">Parkir Makassar Raya</td>
  </tr>
							<tr>
							  <td colspan="3">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="3"><img src="../assets/img/qrcode.jpg" width="75" height="75" /</td>
  </tr>
							<tr>
							  <td colspan="3">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="3"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<u><b>Yulianti Tomu, SE</b></u></td>
  </tr>
							<tr>
							  <td colspan="3">Direktur Utama</td>
  </tr>
							<tr>
							  <td colspan="9">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="9"><u>Tembusan disampaikan Kepada Yth.:</u></td>
  </tr>
							<tr>
							  <td colspan="9">1. Walikota Makassar;</td>
  </tr>
							<tr>
							  <td colspan="9">2.	Dewan Pengawas Perusahaan Umum Daerah Parkir Makassar Raya</td>
  </tr>
							<tr>
								<td colspan="9">3.	Pertinggal.</td>
							</tr>
							<tr>
								<td colspan="9">&nbsp;</td>
							</tr>
							<tr>
							  <td colspan="9">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="9"></td>
  </tr>
							<tr>
								<td colspan="9">&nbsp;</td>
							</tr>
						</table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
					<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td width="84"><b>Daftar</b></td>
    <td width="8">:</td>
    <td width="4">&nbsp;</td>
    <td width="437">Lampiran Keputusan Direksi PERUMDA Parkir Makassar Raya</td>
  </tr>
							<tr>
							  <td><b>Nomor</b></td>
							  <td>:</td>
							  <td>&nbsp;</td>
							  <td>001/20-S/Kep.Dir/PERUMDA-PMR/XI/2022</td>
  </tr>
							<tr>
							  <td><b>Tanggal</b></td>
							  <td>:</td>
							  <td>&nbsp;</td>
							  <td>29 November 2022</td>
  </tr>
							<tr>
							  <td colspan="4">&nbsp;</td>
  </tr>
						</table>
						<table align="center" border="1" cellpadding="1" style="width: 600px; text-align:justify; line-height:2.0; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td valign="center" style="text-align: right">1&nbsp;</td>
							  <td valign="center">&nbsp;Nomor</td>
							  <td valign="center">&nbsp;001</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">2&nbsp;</td>
							  <td valign="center">&nbsp;Nama</td>
							  <td valign="center">&nbsp;Mardiyah, SE</td>
  </tr>
							<tr>
							  <td width="24" valign="center" style="text-align: right">3&nbsp;</td>
							  <td width="214" valign="center">&nbsp;Nomor Pokok Pegawai</td>
							  <td width="331" valign="center">&nbsp;2381980022062</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">4&nbsp;</td>
							  <td valign="center">&nbsp;Tempat/Tanggal Lahir</td>
							  <td valign="center">&nbsp;Sungguminasa, 13 Januari 1980</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">5&nbsp;</td>
							  <td valign="center">&nbsp;Jenis Kelamin</td>
							  <td valign="center">&nbsp;Perempuan</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">6&nbsp;</td>
							  <td valign="center">&nbsp;Pendidikan Terakhir</td>
							  <td valign="center">&nbsp;S.1</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">7&nbsp;</td>
							  <td valign="center">&nbsp;Status</td>
							  <td valign="center">&nbsp;Calon Pegawai</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">8&nbsp;</td>
							  <td valign="center">&nbsp;Pangkat / Golongan</td>
							  <td valign="center">&nbsp;Staf Muda / C.1</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">9&nbsp;</td>
							  <td valign="center">&nbsp;Masa kerja Golongan</td>
							  <td valign="center">&nbsp;0 Tahun 0 Bulan</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">10&nbsp;</td>
							  <td valign="center">&nbsp;Gaji Pokok</td>
							  <td valign="center">&nbsp;80% x 2.456.700 = Rp. 1.965.360</td>
  </tr>
							<tr>
							  <td valign="center" style="text-align: right">11&nbsp;</td>
							  <td valign="center">&nbsp;Terhitung Mulai tanggal</td>
							  <td valign="center">&nbsp;01 Desember 2022</td>
  </tr>
  <tr>
							  <td valign="center" style="text-align: right">12&nbsp;</td>
							  <td valign="center">&nbsp;Tempat Bekerja</td>
							  <td valign="center">&nbsp;PERUMDA Parkir Makassar Raya</td>
  </tr>
  <tr>
							  <td valign="center" style="text-align: right">13&nbsp;</td>
							  <td valign="center">&nbsp;Keterangan</td>
							  <td valign="center">&nbsp;Masa Kerja Tambahan 15 Tahun</td>
  </tr>
   <tr>
							  <td valign="center" style="text-align: right">&nbsp;</td>
							  <td valign="center">&nbsp;</td>
							  <td valign="center">&nbsp;</td>
  </tr>
						</table>
						<br>
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
    <td width="24" valign="center" style="text-align: right">&nbsp;</td>
    <td width="331" valign="center">&nbsp;</td>
    <td width="90" valign="center">Ditetapkan di</td>
    <td width="7" valign="center">:</td>
    <td width="126" valign="center">Makassar</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td valign="center">Pada Tanggal </td>
    <td valign="center">:</td>
    <td valign="center">29 November 2022</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">PERUMDA Parkir Makassar Raya</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center"><u><b>Yulianti Tomu, SE</b></u></td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">Direktur Utama</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: left"></td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: left">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: left">&nbsp;</td>
  </tr>
</table>
						
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>

								<!--End:: App Content-->
							</div>
									</div>
						</div>
						</div>

													<!--end: Form Wizard Step 4-->

													<!--begin: Form Actions -->
													<div class="kt-form__actions">
														<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
															Kembali
														</button>
														<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
															Simpan
														</button>
														<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
															Selanjutnya
														</button>
													</div>

													<!--end: Form Actions -->
												</form>

												<!--end: Form Wizard Form-->
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


                    </div>
					<!--begin::Modal 1-->
									<div class="modal fade" id="modal_angsuran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">DATA ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
												<i class="fa fa-print"></i> Print

												<!--<i class="flaticon2-plus"></i>-->
											</a>
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" >NO</td>
    <td width="12%" bgcolor="#f7fcff">No. Kwitansi</td>
    <td width="8%" bgcolor="#f7fcff">Tgl Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Nominal Pembayaran</td>
    <td width="7%" colspan="2" bgcolor="#f7fcff">Sisa Kasbon</td>
    <td width="3%" bgcolor="#f7fcff">Kasir</td>
  </tr>
  <tr>
    <td style="text-align:center">1</td>
    <td style="text-align:center">8/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Agustus 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">200.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">2</td>
    <td style="text-align:center">7/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juli 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">300.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">3</td>
    <td style="text-align:center">6/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Juni 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">400.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">4</td>
    <td style="text-align:center">5/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Mei 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">500.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">4/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 April 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">600.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
 <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">3/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Maret 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">700.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">2/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Februari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">800.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>
  <tr>
    <td style="text-align:center">5</td>
    <td style="text-align:center">1/IM-KOP/VIII/2019</td>
    <td style="text-align:left">28 Januari 2019</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">100.000,-</td>
    <td style="text-align:left; border-right-color:#fff">Rp.</td>
	<td style="text-align:right;">900.000,-</td>
    <td style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Auto</span></td>
  </tr>

</table>

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
														<li class="kt-pagination__link--active">
															<a href="#">1</a>
														</li>
														<li>
															<a href="#">2</a>
														</li>
														<li>
															<a href="#">3</a>
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
												<div class="tab-pane" id="kt_tabs_7_2" role="tabpanel">
													It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently.
												</div>
												<div class="tab-pane" id="kt_tabs_7_3" role="tabpanel">
													<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full">

										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>No. Tanda Terima Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-6">
														<label>Waktu Penyerahan Berkas :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pengirim Berkas :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Utama">

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Penerima Berkas :</label>
														<input type="text" class="form-control form-control-sm">

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="text" class="form-control form-control-sm" >

												</div>


												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-6">
														<label>Tanda Tangan Pengirim Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>

												<div class="col-lg-6">
														<label>Tanda Tangan Penerima Berkas :</label>
														<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

												</div>


												</div>
												</div>
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
									<div class="modal fade" id="modal_pelunasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="flaticon2-list-1"></i></span>
												<h3 class="kt-portlet__head-title kt-font-info">FORM BAYAR ANGSURAN</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													<div class="form-group row">
												<div class="col-lg-4">
														<label>ID Kasbon :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="1/IM-TTD/XII/2019">

												</div>

												<div class="col-lg-4">
														<label>Waktu Pengajuan :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label>Nilai Pinjaman :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                              1.000.000,-">
												</div>
													</div>

												<div class="col-lg-4">
														<label>Nilai Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Rp.                                                100.000,-">
												</div>
													</div>
												<div class="col-lg-4">
														<label class="kt-font-danger">Sisa Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" disabled="disabled" placeholder="Rp.                                                200.000,-">
												</div>
													</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
												<div class="col-lg-4">
														<label class="kt-font-danger">Bayar Angsuran :</label>
														<div class="form-group">
													<input type="text" class="form-control form-control-sm kt-font-danger" placeholder="Rp.                                                200.000,-">
												</div>
													</div>
												<div class="col-lg-8">
														<label>Upload Bukti Pembayaran :</label>
														<div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_1">
													<div class="dropzone-msg dz-message needsclick">
														<h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
														<span class="dropzone-msg-desc">Upload up to 10 files</span>
													</div>
												</div>

												</div>

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="kt-portlet__foot kt-align-right">
												<div class="">

													<button type="reset" class="btn btn-brand btn-sm">Kirim</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 2-->

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
<?php require '../layouts/foot.php' ?>
