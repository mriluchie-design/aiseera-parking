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
				FORM
			</h3>

		<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											PEMBUATAN ANGGARAN</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="mutasi-pegawai.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
					<i class="flaticon-reply"></i> Kembali</button>
					<script>
						function goBack() {
							window.history.back();
						}
					</script>
					<!--<i class="flaticon2-plus"></i>-->
				</a>
				


			</div>
			<a href="#" class="btn btn-brand btn-sm" data-toggle="dropdown">
						<i class="fa fa-arrow-circle-down"></i>Simpan Sebagai</button>
					</a>
					<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

						<!--begin::Nav-->
						<ul class="kt-nav">

							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon fa fa-file-alt"></i>
									<span class="kt-nav__link-text">Draft</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link">
									<i class="kt-nav__link-icon fa fa-check-circle"></i>
									<span class="kt-nav__link-text">Kirim</span>
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
						

							<!--Begin::App-->

								<!--Begin:: App Content-->
								
								
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
													<i class="flaticon2-website"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														SETUP
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														DETAIL ANGGARAN
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
													<i class="flaticon-notepad"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														RINCIAN
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														DETAIL DATA RKAP
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
													<i class="flaticon-notepad"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														RANGKUMAN
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														DOKUMEN RKAP
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
													<i class="flaticon2-box-1"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														PREVIEW
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														CETAK DATA RKAP
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

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											
											
								<div class="row">
											<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Anggaran</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-6">
                          <label>ID Anggaran :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="AK.UM.1.2026">
                        
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
						   <select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Pusat</option>
														<option>Cabang A</option>
														
														</select>
                        
                        </div>
						
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					 <div class="col-lg-6">
                          <label>Tahun Anggaran :</label>
						  <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
											
												<option value="2">2026</option>
												<option value="2">2025</option>
												<option value="3">2024</option>
											
										</select>
                        
                        </div>
					 <div class="col-lg-6">
                          <label>Tipe Anggaran :</label>
						  <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
											
												<option value="2">Pokok</option>
												<option value="3">Perubahan</option>
												<option value="3">Project</option>
											
										</select>
                        
                        </div>
						
						
						

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label>Department :</label>
						   <select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Direksi</option>
														<option>Umum</option>
														<option>Keuangan & Asset</option>
														<option>Operasional</option>
														<option>Pengembangan Usaha dan Kerjasama</option>
														
														</select>
                        
                        </div>
						<div class="col-lg-6">
                          <label>Project :</label>
						   <select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Epass Cabang Makassar</option>
														<option>Epass Cabang Makassar</option>
														
														</select>
                        
                        </div>
						

                        </div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												


												</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Petugas Pelaksana</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-8">
                          <label>Nama Pegawai :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
                        
                        </div>
                       <div class="col-lg-4">
                          <label>NIP :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="238 004 032">
                        
                        </div>

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					 <div class="col-lg-8">
                          <label>Department :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Keuangan dan Asset">
                        
                        </div>
						<div class="col-lg-4">
                          <label>Kantor :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-12">
                          <label>Jabatan :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepala Seksi Perencanaan Anggaran">
                        
                        </div>

                        </div>
						
						
						

                        </div>
												</div>
												</div>
												
									</div>
								
								<div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Info Lainnya</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group">
									<label>Catatan :</label>
									<textarea class="form-control" id="exampleTextarea" rows="6" placeholder=""></textarea>
								</div>
								
								
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>



								</div>
														</div>
														</div>

													<!--end: Form Wizard Step 1-->

													<!--begin: Form Wizard Step 2-->
													<form class="kt-form" id="kt_form">

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											
											
								<div class="row">
											<div class="col-xl-12">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">RINCIAN RENCANA KERJA ANGGARAN PERUSAHAAN</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											

											<div id="kt_repeater_1">
												<table class="table table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="1%" bgcolor="#f7fcff">#</th>
																						<th width="5%" bgcolor="#f7fcff">AKUN INDUK</th>
																						<th width="13%"bgcolor="#f7fcff">URAIAN KEBUTUHAN</th>
																						<th colspan="2" bgcolor="#f7fcff">VOLUME</th>
																						<th width="10%" bgcolor="#f7fcff">HARGA SATUAN</th>
																						<th width="10%" bgcolor="#f7fcff">NILAI</th>
																						<th width="3%" bgcolor="#f7fcff">AKSI</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td>A</td>
																					  <td><select name="select" class="form-control kt-selectpicker col-lg-12 mb-6" data-size="7" data-live-search="true">
																					    <option value="1" disabled="disabled" selected="selected">Cari/Pilih Akun Perkiraan...</option>
																					    <optgroup label="BIAYA OPERASIONAL" class="a">
																					      <option data-subtext="51.01.00">BIAYA CETAKAN</option>
																					      <option data-subtext="51.01.02">BIAYA PENGIRIMAN</option>
																					      <option data-subtext="51.02.00">BIAYA SURVEY / UJI PETIK</option>
																					      <option data-subtext="51.03.00">BIAYA OPERASIONAL PEGAWAI</option>
																					      <option data-subtext="51.04.00">BIAYA OPERASIONAL TIM PATROLI KHUSUS</option>
																					      <option data-subtext="51.05.00">BIAYA TIM PENEGAK PERDA</option>
																					      <option data-subtext="51.06.00">BIAYA PAJAK PARKIR PLB</option>
																					      <option data-subtext="51.07.00">BIAYA SHARING PENETAPAN BARU PLB</option>
																					      <option data-subtext="51.08.00">BIAYA SHARING PARKIR ELEKTRONIK</option>
																					      <option data-subtext="51.09.00">BIAYA PERLENGKAPAN JUKIR / KOLEKTOR</option>
																				        </optgroup>
																				      </select></td>
																					  <td colspan="5">&nbsp;</td>
																					  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data Akun Induk"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																				  </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td style="text-align:right">1</td>
																					  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Pokok Penjualan"  ></td>
																						<td width="3%" style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder=""></td>
																						<td width="5%" style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tiket</option>
                              <option value="AK">Hari</option>
                              <option value="HI">Ls</option>
                              <option value="HI">Orang</option>
                              <option value="HI">Box</option>
                              <option value="HI">Pieces</option>
                              <option value="HI">Km</option>
                              <option value="HI">m</option>
                            </select></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																			      </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td style="text-align:right">2</td>
																					  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Komisi"  ></td>
																						<td style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder="" /></td>
																						<td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
																						  <option value="AK">Tiket</option>
																						  <option value="AK">Hari</option>
																						  <option value="HI">Ls</option>
																						  <option value="HI">Orang</option>
																						  <option value="HI">Box</option>
																						  <option value="HI">Pieces</option>
																						  <option value="HI">Km</option>
																						  <option value="HI">m</option>
																						  </select></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					<tr>
																					  <td>&nbsp;</td>
																					  <td style="text-align:right">3</td>
																					  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Bensin, Parkir, Tol Kendaraan"  ></td>
																						<td style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder="" /></td>
																						<td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
																						  <option value="AK">Tiket</option>
																						  <option value="AK">Hari</option>
																						  <option value="HI">Ls</option>
																						  <option value="HI">Orang</option>
																						  <option value="HI">Box</option>
																						  <option value="HI">Pieces</option>
																						  <option value="HI">Km</option>
																						  <option value="HI">m</option>
																						  </select></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																</tbody>
																
																<tfoot style="border-top: 2px solid #5867dd;">
																	<tr>
																		<th colspan="6" bgcolor="#f7fcff" class="text-right" style="font-style: italic;"><strong>Sub Total</strong></th>
																		<th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																		  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
																		  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																		  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
																	    </div></th>
																		<th bgcolor="#f7fcff">&nbsp;</th>
																	</tr>
																	<tr>
																	  <td>B</td>
																	  <td><select name="select5" class="form-control kt-selectpicker col-lg-12 mb-6" data-size="7" data-live-search="true">
																	    <option value="1" disabled="disabled" selected="selected">Cari/Pilih Akun Perkiraan...</option>
																	    <optgroup label="BIAYA OPERASIONAL" class="a">
																	      <option data-subtext="51.01.00">BIAYA CETAKAN</option>
																	      <option data-subtext="51.01.02">BIAYA PENGIRIMAN</option>
																	      <option data-subtext="51.02.00">BIAYA SURVEY / UJI PETIK</option>
																	      <option data-subtext="51.03.00">BIAYA OPERASIONAL PEGAWAI</option>
																	      <option data-subtext="51.04.00">BIAYA OPERASIONAL TIM PATROLI KHUSUS</option>
																	      <option data-subtext="51.05.00">BIAYA TIM PENEGAK PERDA</option>
																	      <option data-subtext="51.06.00">BIAYA PAJAK PARKIR PLB</option>
																	      <option data-subtext="51.07.00">BIAYA SHARING PENETAPAN BARU PLB</option>
																	      <option data-subtext="51.08.00">BIAYA SHARING PARKIR ELEKTRONIK</option>
																	      <option data-subtext="51.09.00">BIAYA PERLENGKAPAN JUKIR / KOLEKTOR</option>
																        </optgroup>
																	    </select></td>
																	  <td colspan="5">&nbsp;</td>
																	  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data Akun Induk"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">1</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Pokok Penjualan" /></td>
																	  <td width="3%" style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder="" /></td>
																	  <td width="5%" style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
																	    <option value="AK">Tiket</option>
																	    <option value="AK">Hari</option>
																	    <option value="HI">Ls</option>
																	    <option value="HI">Orang</option>
																	    <option value="HI">Box</option>
																	    <option value="HI">Pieces</option>
																	    <option value="HI">Km</option>
																	    <option value="HI">m</option>
																	    </select></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">2</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Komisi" /></td>
																	  <td style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder="" /></td>
																	  <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
																	    <option value="AK">Tiket</option>
																	    <option value="AK">Hari</option>
																	    <option value="HI">Ls</option>
																	    <option value="HI">Orang</option>
																	    <option value="HI">Box</option>
																	    <option value="HI">Pieces</option>
																	    <option value="HI">Km</option>
																	    <option value="HI">m</option>
																	    </select></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">3</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Bensin, Parkir, Tol Kendaraan" /></td>
																	  <td style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder="" /></td>
																	  <td style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
																	    <option value="AK">Tiket</option>
																	    <option value="AK">Hari</option>
																	    <option value="HI">Ls</option>
																	    <option value="HI">Orang</option>
																	    <option value="HI">Box</option>
																	    <option value="HI">Pieces</option>
																	    <option value="HI">Km</option>
																	    <option value="HI">m</option>
																	    </select></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																  </tr>
																	<tr style="border-top: 2px solid #5867dd;">
																	  <th colspan="6" bgcolor="#f7fcff" class="text-right" style="font-style: italic;"><strong>Sub Total</strong></th>
																	  <th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon3">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon3">,-</span></div>
																	    </div></th>
																	  <th bgcolor="#f7fcff">&nbsp;</th>
																  </tr>
																	<tr>
																	  <td>C</td>
																	  <td><select name="select5" class="form-control kt-selectpicker col-lg-12 mb-6" data-size="7" data-live-search="true">
																	    <option value="1" disabled="disabled" selected="selected">Cari/Pilih Akun Perkiraan...</option>
																	    <optgroup label="BIAYA OPERASIONAL" class="a">
																	      <option data-subtext="51.01.00">BIAYA CETAKAN</option>
																	      <option data-subtext="51.01.02">BIAYA PENGIRIMAN</option>
																	      <option data-subtext="51.02.00">BIAYA SURVEY / UJI PETIK</option>
																	      <option data-subtext="51.03.00">BIAYA OPERASIONAL PEGAWAI</option>
																	      <option data-subtext="51.04.00">BIAYA OPERASIONAL TIM PATROLI KHUSUS</option>
																	      <option data-subtext="51.05.00">BIAYA TIM PENEGAK PERDA</option>
																	      <option data-subtext="51.06.00">BIAYA PAJAK PARKIR PLB</option>
																	      <option data-subtext="51.07.00">BIAYA SHARING PENETAPAN BARU PLB</option>
																	      <option data-subtext="51.08.00">BIAYA SHARING PARKIR ELEKTRONIK</option>
																	      <option data-subtext="51.09.00">BIAYA PERLENGKAPAN JUKIR / KOLEKTOR</option>
																        </optgroup>
																	    </select></td>
																	  <td colspan="5">&nbsp;</td>
																	  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data Akun Induk"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">1</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Pokok Penjualan" /></td>
																	  <td style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder="" /></td>
																	  <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																	    <option value="AK">Tiket</option>
																	    <option value="AK">Hari</option>
																	    <option value="HI">Ls</option>
																	    <option value="HI">Orang</option>
																	    <option value="HI">Box</option>
																	    <option value="HI">Pieces</option>
																	    <option value="HI">Km</option>
																	    <option value="HI">m</option>
																	    </select></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon6">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon6">,-</span></div>
																	    </div></td>
																	  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">2</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Komisi" /></td>
																	  <td style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder="" /></td>
																	  <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																	    <option value="AK">Tiket</option>
																	    <option value="AK">Hari</option>
																	    <option value="HI">Ls</option>
																	    <option value="HI">Orang</option>
																	    <option value="HI">Box</option>
																	    <option value="HI">Pieces</option>
																	    <option value="HI">Km</option>
																	    <option value="HI">m</option>
																	    </select></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon5">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon5">,-</span></div>
																	    </div></td>
																	  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																  </tr>
																	<tr>
																	  <th bgcolor="#fff" class="text-right">&nbsp;</th>
																	  <td style="text-align:right">3</td>
																	  <td><input type="text" class="form-control form-control-sm" placeholder="Beban Bensin, Parkir, Tol Kendaraan" /></td>
																	  <td style="text-align:center"><input type="number" class="form-control form-control-sm " placeholder="" /></td>
																	  <td style="text-align:center"><select name="select5" class="form-control kt-selectpicker" data-live-search="true">
																	    <option value="AK">Tiket</option>
																	    <option value="AK">Hari</option>
																	    <option value="HI">Ls</option>
																	    <option value="HI">Orang</option>
																	    <option value="HI">Box</option>
																	    <option value="HI">Pieces</option>
																	    <option value="HI">Km</option>
																	    <option value="HI">m</option>
																	    </select></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																	    </div></td>
																	  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon4">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon4">,-</span></div>
																	    </div></td>
																	  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																  </tr>
																	<tr style="border-top: 2px solid #5867dd; font-style: italic;">
																	  <th colspan="6" bgcolor="#f7fcff" class="text-right"><strong>Sub Total</strong></th>
																	  <th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon7">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon7">,-</span></div>
																	    </div></th>
																	  <th bgcolor="#f7fcff">&nbsp;</th>
																  </tr>
																	<tr>
																	  <th colspan="8" bgcolor="#fff" class="text-right">&nbsp;</th>
																  </tr>
																	<tr>
																	  <th colspan="6" bgcolor="#feffed" class="text-right">GRAND TOTAL</th>
																	  <th bgcolor="#feffed"><div class="input-group input-group-sm">
																	    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon7">Rp.</span></div>
																	    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																	    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon7">,-</span></div>
																	    </div></th>
																	  <th bgcolor="#feffed">&nbsp;</th>
																  </tr>
																	<tr>
																	  <th colspan="8" bgcolor="#feffed" class="text-left">Terbilang :<span style="text-align: left"></span></th>
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
									</div>

													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<form class="kt-form" id="kt_form">

													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">
														<div class="row">
											<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						
						
                       

                        </div>
						
												</div>
												
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-5">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						
						
                       

                        </div>
						
												</div>
												
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								<div class="col-xl-3">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Perbandingan Anggaran</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						
						<div class="col-lg-12">
                          <label>Periode Realisasi Anggaran :</label>
						  <div class='input-group' >
                        <input type='text' class="form-control kt_daterangepicker_2" readonly placeholder="Select date range" />
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                        </div>
                      </div>
                        
                        </div>
                       

                        </div>
						
												</div>
												
									</div>
									</div>

									<!--end::Portlet-->



								</div>
								
								
								



								</div>

											
											
								<div class="row">
											<div class="col-xl-12">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">RANGKUMAN DOKUMEN RENCANA KERJA ANGGARAN PERUSAHAAN</div><br>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div id="kt_repeater_1">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_1">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">No</td>
																								  <td width="5%" bgcolor="#f7fcff">KODE<br>REKENING</td>
																								  <td width="15%" bgcolor="#f7fcff">URAIAN</td>
																								   <td width="8%" bgcolor="#f7fcff">RKAP POKOK<BR />TAHUN 2024</td>
																								  <td width="8%" bgcolor="#f7fcff">REALISASI JANUARI <BR />S/D 31 OKTOBER 2023</td>
																								  <td width="8%" bgcolor="#f7fcff">RKAP PERUBAHAN<BR />TAHUN 2023</td>
																								  <td width="8%" bgcolor="#f7fcff">NAIK / TURUN</td>
																								  <td width="3%" bgcolor="#f7fcff">KETERANGAN</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																								  <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="91.01.00"></td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BIAYA CETAKAN"></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>98.160.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>139.368.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>243.400.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>-145.240.000,-</span> </div></td>
																									<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">BERKURANG</button></td>
																									</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																								  <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="91.02.00"></td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BIAYA SURVEY / UJI PETIK"></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>410.000.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>8.620.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>508.620.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>-98.620.000,-</span> </div></td>
																									<td style="text-align:center"><button type="button" class="btn btn-label-success btn-sm">BERKURANG</button></td>
																									</tr>
																									<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																								  <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="91.04.10"></td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BIAYA OPERASIONAL TIM PATROLI KHUSUS"></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>35.000.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>35.000.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>0,-</span> </div></td>
																									<td style="text-align:center"><button type="button" class="btn btn-label-brand btn-sm">TETAP</button></td>
																									</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">4</td>
																								  <td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="91.04.20"></td>
																									<td style="text-align:left"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="BIAYA OPERASIONAL KOLEKTOR"></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.083.828.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>95.092.451,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>311.250.000,-</span> </div></td>
																									<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>772.578.000,-</span> </div></td>
																									<td style="text-align:center"><button type="button" class="btn btn-label-danger btn-sm">BERTAMBAH</button></td>
																									</tr>
																								
																							</tbody>
																							
																						</table>
                                          </div>
													
									
						
						
												
												</div>
									</div>
									</div>
									</div>
									</div>
									</div>
									</div>
													

													<!--end: Form Wizard Step 3-->

													<!--begin: Form Wizard Step 4-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-form__section kt-form__section--first">
															<div class="kt-wizard-v4__form">
														<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
								<div class="bg-white w-75 ml-auto mr-auto">
	<img src="../assets/img/header.png" style="width:939px; display:block; margin-left:60px;margin-right:auto;margin-bottom:40px;padding-top:40px;"/>
									<table align="center" border="0" cellpadding="0" style="width:920px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 12px;">
  <tr>
    <td colspan="7" style="text-align: center"><b>RANGKUMAN DOKUMEN PELAKSANAAN</b><br><b>RENCANA KERJA ANGGARAN PERUSAHAAN (RKAP) POKOK</b></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center"><b>DEPARTMENT : OPERASIONAL<b></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  
  
 
</table>
<table style="width:920px;" align="center" class="table table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="1%" bgcolor="#f7fcff">#</th>
																					  <th width="1%" bgcolor="#f7fcff">KODE REKENING</th>
																						<th width="25%"bgcolor="#f7fcff">URAIAN KEBUTUHAN</th>
																						<th width="5%" colspan="2" bgcolor="#f7fcff">VOLUME</th>
																						<th width="5%" bgcolor="#f7fcff">HARGA SATUAN</th>
																						<th width="5%" bgcolor="#f7fcff">NILAI</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td style="background-color:#edffef">A</td>
																					  <td style="background-color:#edffef">92.02.00</td>
																					  <td colspan="5" style="background-color:#edffef">BIAYA HONOR KOORDINASI</td>
																				  </tr>
																					<tr>
																					  <td rowspan="3">&nbsp;</td>
																					  <td rowspan="3">&nbsp;</td>
																					  <td>- CETAK KERTAS KOP</td>
																						<td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Rim</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																					<tr>
																					  <td>- CETAK AMPLOP KOP</td>
																					  <td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Dus</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																					<tr>
																					  <td>- CETAK MAP PARKIR</td>
																					  <td><div style="text-align:right" />50</td>
																						<td><div style="text-align:left" />Buah</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																</tbody>
																
																
																	<tr>
																	  <td style="background-color:#edffef">B</td>
																	  <td style="background-color:#edffef">51.02.00</td>
																	  <td colspan="5" style="background-color:#edffef"> -BIAYA SURVEY / UJI PETIK</td>
																  </tr>
																	<tr>
																					  <td rowspan="3">&nbsp;</td>
																					  <td rowspan="3">&nbsp;</td>
																					  <td>- CETAK KERTAS KOP</td>
																						<td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Rim</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																					<tr>
																					  <td>- CETAK AMPLOP KOP</td>
																					  <td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Dus</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																					<tr>
																					  <td>- CETAK MAP PARKIR</td>
																					  <td><div style="text-align:right" />50</td>
																						<td><div style="text-align:left" />Buah</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																  
																	<tr>
																	  <td style="background-color:#edffef">C</td>
																	  <td style="background-color:#edffef">51.03.00</td>
																	  <td colspan="5" style="background-color:#edffef"> -BIAYA OPERASIONAL KOLEKTOR</td>
																  </tr>
																	<tr>
																					  <td rowspan="3">&nbsp;</td>
																					  <td rowspan="3">&nbsp;</td>
																					  <td>- CETAK KERTAS KOP</td>
																						<td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Rim</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																					<tr>
																					  <td>- CETAK AMPLOP KOP</td>
																					  <td><div style="text-align:right" />4</td>
																						<td><div style="text-align:left" />Dus</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																					<tr>
																					  <td>- CETAK MAP PARKIR</td>
																					  <td><div style="text-align:right" />50</td>
																						<td><div style="text-align:left" />Buah</td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																						<td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																				  </tr>
																	<tr>
																	  <th colspan="7" bgcolor="#fff" class="text-right">&nbsp;</th>
																  </tr>
																	<tr>
																	  <th colspan="6" bgcolor="#feffed" class="text-center"><b>TOTAL</b></th>
																	  <td bgcolor="#feffed"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>2.000.000.000,-</span> </div></td>
																  </tr>
																</table>
			
   <table align="left" border="0" cellpadding="1" style="width: 920px; margin-left:120px; margin-bottom:50px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 12px;">
							<tr>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="16" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="3" valign="top">&nbsp;</td>
							  <td width="7" valign="top">&nbsp;</td>
							  <td colspan="4" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top"><p>Tembusan</p></td>
							  <td width="6" >&nbsp;</td>
							  <td width="31" >&nbsp;</td>
							  <td width="217">Makassar, 22 Desember  2022</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">1.</td>
							  <td colspan="7" valign="top">Yth, Direktur Utama</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">PT. Aksi Kode Indonesia</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">2.</td>
							  <td colspan="7" valign="top">Yth, Direktur Keuangan</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">3.</td>
							  <td colspan="7" valign="top">Pertinggal</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="262" valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"><u><b>Oklan Zulkifli, SE</b></u></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Direktur Utama</td>
  </tr>
							
							
  </table>
  
  <table align="center" class="footnote-1" width="900px" style="margin-top:150px; margin-bottom:20px;">
        <thead>
            <tr><th></th>
            <th width="2%"></th>
            <th></th>
            <th></th>
        </tr></thead>
        <tbody>
            <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            
            <tr style="height: 10px"><td></td></tr>
            <tr style=" width:650px;">
                <td colspan="2" rowspan="2" style="text-align: center;">
                    <span class="span-qr" style="z-index: 99999">
                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="40" height="40" viewBox="0 0 40 40"><rect x="0" y="0" width="40" height="40" fill="#ffffff"></rect><g transform="scale(1.905)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M9 0L9 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L5 9L5 10L4 10L4 8L3 8L3 9L2 9L2 8L0 8L0 9L2 9L2 10L3 10L3 12L4 12L4 11L7 11L7 10L8 10L8 8L9 8L9 11L8 11L8 12L6 12L6 13L8 13L8 15L9 15L9 16L10 16L10 17L11 17L11 16L12 16L12 17L13 17L13 18L12 18L12 19L10 19L10 20L11 20L11 21L12 21L12 20L13 20L13 19L14 19L14 21L15 21L15 18L16 18L16 19L17 19L17 20L19 20L19 18L20 18L20 20L21 20L21 17L20 17L20 16L21 16L21 14L20 14L20 15L19 15L19 16L18 16L18 13L19 13L19 12L20 12L20 13L21 13L21 12L20 12L20 11L19 11L19 10L21 10L21 9L20 9L20 8L18 8L18 9L17 9L17 8L14 8L14 9L13 9L13 8L12 8L12 7L13 7L13 6L12 6L12 7L11 7L11 6L10 6L10 7L9 7L9 4L10 4L10 0ZM12 0L12 1L11 1L11 4L12 4L12 5L13 5L13 2L12 2L12 1L13 1L13 0ZM6 9L6 10L7 10L7 9ZM11 9L11 10L10 10L10 11L9 11L9 12L8 12L8 13L9 13L9 15L10 15L10 16L11 16L11 14L13 14L13 15L12 15L12 16L13 16L13 17L17 17L17 19L18 19L18 18L19 18L19 17L18 17L18 16L17 16L17 15L16 15L16 14L13 14L13 13L16 13L16 12L14 12L14 10L15 10L15 11L17 11L17 13L18 13L18 12L19 12L19 11L18 11L18 10L19 10L19 9L18 9L18 10L15 10L15 9L14 9L14 10L13 10L13 9ZM12 10L12 11L11 11L11 12L12 12L12 13L13 13L13 12L12 12L12 11L13 11L13 10ZM1 11L1 12L0 12L0 13L1 13L1 12L2 12L2 11ZM9 12L9 13L10 13L10 12ZM14 15L14 16L16 16L16 15ZM8 17L8 18L9 18L9 17ZM8 19L8 21L9 21L9 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                    </span>
                </td>
                <td colspan="2" valign="left" style="text-align: left">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan Peraturan Perusahaan yang berlaku, Perusahaan mengatur
                            bahwa
                            Dokumen ini telah ditandatangani dan diverifikasi secara elektronik,<br>sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
            
<tr style="height: 10px"><td></td></tr>
             <tr>
			 
                <td colspan="4" style="border-bottom: 1px solid #ccc; padding-bottom"></td>
            </tr>
			
        </tbody>
    </table>
	<table align="center" class="footnote-1" width="900px" style="margin-bottom:20px;">
       
        <tbody>
            
            
           
            
            <tr style=" width:650px;">
              <td colspan="2" valign="left" style="text-align: center; font-family: Roboto; font-size: 11px;"><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA - Halaman 1 dari 10</i></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
            
			
			<tr>
			 
                <td>&nbsp;</td>
            </tr>
        </tbody>
    </table>
  <img src="../assets/img/footer.png" style="width:900px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:0px" />
					</div>
													</div>
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
