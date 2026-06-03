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
											Profil Member
									</h3>

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
										</div>
										</div>
						</div>

						<!-- end:: Content Head -->

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
							<!--Begin::App-->
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

								<!--Begin:: App Aside Mobile Toggle-->
								<button class="kt-app__aside-close" id="kt_user_profile_aside_close">
									<i class="la la-close"></i>
								</button>

								<!--End:: App Aside Mobile Toggle-->

								<!--Begin:: App Aside-->
								<div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

									<!--begin:: Widgets/Applications/User/Profile1-->
									<div class="kt-portlet kt-portlet--height-fluid-">
										<div class="kt-portlet__head  kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												</h3>
											</div>

										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-y">

											<!--begin::Widget -->
											<div class="kt-widget kt-widget--user-profile-1">
												<div class="form-group row" style="text-align:center">
																	<div class="col-lg-12">
														<label>Foto Member :</label>
														<div>&nbsp;</div>
														<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																			<div class="kt-avatar__holder" style="background-image: url(&quot;../assets/media/users/100_1.jpg&quot;);"></div>


																		</div>

												</div>
												</div>
												<div class="kt-widget__body">
													<div>&nbsp;</div>
													<div class="kt-widget__items">
														<a href="member-detail.php" class="kt-widget__item kt-widget__item">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg> </span>
																<span class="kt-widget__desc">
																	Data Pribadi
																</span>
															</span>
														</a>
														<a href="kendaraan-member.php" class="kt-widget__item kt-widget__item--active">
															<span class="kt-widget__section">
																<span class="kt-widget__icon">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
    </g>
</svg> </span>
																<span class="kt-widget__desc">
																	Data Kendaraan
																</span>
																</spandiv>
														</a>
														


													</div>
												</div>
											</div>

											<!--end::Widget -->
										</div>
									</div>

									<!--end:: Widgets/Applications/User/Profile1-->
								</div>

								<!--End:: App Aside-->

								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
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
														<i class="fa fa-car"></i> MOBIL
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-motorcycle"></i> MOTOR
													</a>
												</li>
												
											</ul>
												
		
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												
										<div class="col-lg-12">
								

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Kendaraan</div><br>
										<div class="kt-portlet__body">
											<table class="table table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																									<td width="3%" bgcolor="#f7fcff">ID NFC<br>Kendaraan</td>
																									<td width="1%" bgcolor="#f7fcff">No Plat<br>Kendaraan</td>
																									<td width="5%" bgcolor="#f7fcff">Nama Pemilik</td>
																									<td width="10%" bgcolor="#f7fcff">Alamat Pemilik</td>
																									<td width="5%" bgcolor="#f7fcff">Merk / Type</td>
																									<td width="2%" bgcolor="#f7fcff">Jenis <br>/ Model</td>
																									<td width="1%" bgcolor="#f7fcff">Tahun<br>Pembuatan</td>
																									<td width="5%" bgcolor="#f7fcff">Nomor<br>Rangka</td>
																									<td width="2%" bgcolor="#f7fcff">Nomor<br>Mesin</td>
																									<td width="1%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								</tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="002DD516A51351"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="DD 1111 LU"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="VILLA SURYA MAS J/9 MKS RT 006 RW 003 BORONG"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HONDA JAZZ 1.5 CVT"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="MINIBUS"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2018"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="MHRGK5860JJ807780"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="006079598"></td>
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																								
																								<tr>
																								  <td style="text-align:center">7</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum dan Kepegawaian"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Administrasi Kepegawaian"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>

																								<tr data-repeater-item>
																								  <td style="text-align:center">8</td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi"></td>
																									<td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Umum"></td>
    <td style="text-align:center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Staff Keuangan"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Tetap"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
    <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat"></td>
																									<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa fa-edit"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a>
																									</td>
																								</tr>
																							</tbody>
																							<tfoot>
																								<tr>
																									<td colspan="8">
																										<button type="button" class="btn btn-success btn-sm float-right" href="javascript:;" data-repeater-create=""> <i class="fa fa-plus"></i> Tambah Data</button>
																									</td>
																								</tr>
																							</tfoot>
																						</table>
									
                     

									


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
																						<label>Status Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="Pegawai Tetap" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					<div class="col-lg-6">
																						<label>NIP Pegawai :</label>
																						<input type="text" class="form-control form-control-sm" value="012311239933" placeholder="= Pilih Tanggal =" id="kt_datepicker_2" disabled>
																					</div>
																					
																					
																				</div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
																						<label>Masuk Kerja :</label>
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
						<div class="col-lg-6">
																						<label>SK Pegawai Tetap :</label>
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
																						<label>Department :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Direksi</option>
														<option>Dewan Pengawas</option>
														<option>Umum</option>
														<option>Keuangan & Asset</option>
														<option>Operasional</option>
														<option>Pengembangan Usaha dan Kerjasama</option>
														
														</select>
																					</div>
<div class="col-lg-6">
																						<label>Bagian :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Umum dan Kepegawaian</option>
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
																						<label>Pangkat / Golongan :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Pelaksanan Tingkat I / IV A</option>
                              <option value="2">Pelaksanan Tingkat I / IV B</option>
                              <option value="3">Pelaksanan Tingkat I / IV C</option>
                              <option value="3">Pelaksanan Tingkat I / IV D</option>

                          </select>
																					</div>
						<div class="col-lg-6">
																						<label>Kantor :</label>
																						<select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Pusat</option>
														<option>Cabang</option>
													
														
														</select>
																					</div>

						
                        </div>
                        </div>
						
                     
					  
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
																						<label>Jabatan :</label>
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">Dewan Pengawas</option>
                              <option value="2">Direktur Utama</option>
                              <option value="2">Direktur Umum</option>
                              <option value="2">Direktur Keuangan dan Asset</option>
                              <option value="2">Direktur Operasional</option>
                              <option value="2">Direktur Pengembangan Usaha & Kerjasama</option>

                          </select>
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
																						<select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="2">000 000 001 - Yulianti Tomu, SE</option>
                              <option value="2">000 000 002 - Rizal Asjadad</option>
                              <option value="3">000 000 003 - Christofher Rio Aviary</option>
                              <option value="3">000 000 004 - Mu’amar Nor Amin</option>
                              <option value="3">000 000 005 - Zulfadli Syahrir</option>
                              <option value="3">000 000 006 - Ir. Asrarudin Mamonto, MM</option>

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
																						<label>Department :</label>
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
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Fingerprint Pegawai</div><br>
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
																							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Face Recognize Pegawai</div><br>
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
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Keluarga</div>
                   
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
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>Suami</option>
																							<option value="HI">Istri</option>
																							<option value="HI">Anak</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" name="param">
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
																						<select class="form-control kt-selectpicker" name="param">
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
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>Suami</option>
																							<option value="HI">Istri</option>
																							<option value="HI">Anak</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" name="param">
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
																						<select class="form-control kt-selectpicker" name="param">
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
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>Suami</option>
																							<option value="HI">Istri</option>
																							<option value="HI">Anak</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" name="param">
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
																						<select class="form-control kt-selectpicker" name="param">
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
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>Suami</option>
																							<option value="HI">Istri</option>
																							<option value="HI">Anak</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><div class="form-group">
																						<select class="form-control kt-selectpicker" name="param">
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
																						<select class="form-control kt-selectpicker" name="param">
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
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pendidikan</div>
                   
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
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
																						<select class="form-control kt-selectpicker" name="param">
																							<option value="AK" selected>S3</option>
																							<option value="HI">S2</option>
																							<option value="HI">S1</option>
																							<option value="HI">SMA</option>
																							<option value="HI">SMP</option>
																							<option value="HI">SD</option>
																							<option value="HI">TK</option>
																						</select>
																					</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
												
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Sertifikat</div>
                   
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
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pengalaman Kerja</div>
                   
                      <div class="row">
								<div class="col-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_4">#</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Nama Instansi</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Alamat Instansi</th>

											  <th colspan="2" bgcolor="#f7fcff">Lama Bekerja</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Jabatan Terakhir</th>
											  <th width="4%" rowspan="2" bgcolor="#f7fcff">Upload Bukti</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="4%" bgcolor="#f7fcff">Awal</th>
											  <th width="4%" bgcolor="#f7fcff">Akhir</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>

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
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="Isikan Data Anda"></td>
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
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Login Aplikasi</div>

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
                          <input type="text" class="form-control form-control-sm" placeholder="dirut@ilugroup.co.id">
                        </div>
                       <div class="col-lg-3">
                          <label>Email Lupa Password :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="dirut@ilugroup.co.id">
                        </div>
						<div class="col-lg-3">
                          <label>Password Login :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="******">
                        </div>
						<div class="col-lg-3">
                          <label>Ulangi Password :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="******">
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

									<!--end: Datatable -->
								</div>
							</div>

            </div>
<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
