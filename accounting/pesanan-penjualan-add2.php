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
											Pesanan Penjualan</span>
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
			<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-label-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Ambil Data
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">

						<!--begin::Nav-->
						<ul class="kt-nav">
<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#lihat_favorit">
									<i class="kt-nav__link-icon fa fa-file-alt"></i>
									<span class="kt-nav__link-text">Dari Penawaran</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#lihat_favorit">
									<i class="kt-nav__link-icon fa fa-bookmark"></i>
									<span class="kt-nav__link-text">Dari Favorit</span>
								</a>
							</li>


							
						</ul>
						<!--end::Nav-->
					</div>
								</div>
			
<div class="btn-group" role="group">
									<button id="btnGroupDrop1" type="button" class="btn btn-label-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Proses
									</button>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-left">

						<!--begin::Nav-->
						<ul class="kt-nav">
<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#uang_muka">
									<i class="kt-nav__link-icon fa fa-truck-moving"></i>
									<span class="kt-nav__link-text">Pengiriman</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#uang_muka">
									<i class="kt-nav__link-icon fa fa-file-invoice"></i>
									<span class="kt-nav__link-text">Faktur</span>
								</a>
							</li>
							<li class="kt-nav__item">
								<a href="#" class="kt-nav__link" data-toggle="modal" data-target="#uang_muka">
									<i class="kt-nav__link-icon fa fa-coins"></i>
									<span class="kt-nav__link-text">Uang Muka</span>
								</a>
							</li>
							
						</ul>
						<!--end::Nav-->
					</div>
								</div>
			<div class="btn-group">
				<button type="button" class="btn btn-brand">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Save</span>
				</button>
				<button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-right" style="min-width:17rem !important">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-printer"></i>
								<span class="kt-nav__link-text">Cetak</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon-attachment"></i>
								<span class="kt-nav__link-text">Upload Dokumen</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon-suitcase"></i>
								<span class="kt-nav__link-text">Tambah Favorit</span>
							</a>
						</li>
					</ul>
				</div>
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
	<div class="kt-portlet kt-portlet--height-full">
		<div class="kt-portlet__body">
		
			<div class="row">
				<div class="col-xl-8">
					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Pesanan</div><br><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
								<div class="col-lg-3">
                          <label class="">Kantor :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Cabang Makassar">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Nomor :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="SQ.062026.01.001">
                      </div>
                        </div>
						<div class="col-lg-3">
										<label class="">Tanggal Pesanan : <code>*</code></label>
										<div class="input-group date">
											<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
											<div class="input-group-append">
												<span class="input-group-text">
													<i class="la la-calendar-check-o"></i>
												</span>
											</div>
										</div>
									</div>
									<div class="col-lg-2">
														<label>Syarat Pembayaran :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>COD</option>
														
														<option>7 Hari</option>
														<option>14 Hari</option>
														<option>21 Hari</option>
														<option>30 Hari</option>
														
														
														</select>
													</div>
									</div>
									<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
						<div class="col-lg-3">
                          <label class=""><code data-toggle="kt-tooltip" data-skin="light" title="" data-original-title="Pilih Kategori" data-html="true">*</code> Kategori Pelanggan :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
						
														
														<option>Personal</option>
														<option>BUMN</option>
														<option>Pemerintah Provinsi</option>
														<option>Pemerintah Daerah</option>
														<option>Swasta</option>
														
														 <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
													</select>
                        </div>
						<div class="col-lg-6">
														<label>Pilih Pelanggan :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>PT. Angkasa Pura Indonesia (Persero)</option>
														<option>PT. Pelabuhan Indonesia (Persero) Regional 4</option>
														<option>PT. Pelabuhan Indonesia (Persero) Regional 4 - Cabang Makassar</option>
														
														</select>
													</div>
													<div class="col-lg-3">
													<label>Pajak :</label>
									<div class="kt-checkbox-inline">
										<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
															    <input type="checkbox" checked="checked">
															    <span></span> Kena Pajak</label>
										<label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
											<input type="checkbox"> Total Termasuk Pajak
											<span></span>
										</label>
									</div>
								</div>
                        </div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									
									
										<div class="col-lg-9">
										<div class="form-group">
											<label>Keterangan Pesanan :</label>
											<input type="text" class="form-control form-control-sm" placeholder="">
										</div>
									</div>			
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pengiriman</div><br><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">							
								<div class="form-group row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Pengiriman :</label>
											
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Internal</option>
														<option>TIKI</option>
														<option>JNE</option>
														<option>Pos Indonesia</option>
														<option>SiCepat</option>
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
														</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Tanggal Pengiriman :</label>
									<div class="input-group date">
											<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="01/01/2020" value="01/01/2020" id="kt_datepicker_2">
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
										<div class="form-group">
											<label>Alamat  :</label>
											
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Sesuai Data Pelanggan</option>
														<option>Baru</option>
														
														
														</select>
										</div>
									</div>	
									
										<div class="col-lg-6">
										<div class="form-group">
											<label>Penerima :</label>
											<input type="text" class="form-control form-control-sm" placeholder="" disabled>
										</div>
									</div>
								
								</div>
													
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									
									<div class="col-lg-12">
										<div class="form-group">
											<label>Alamat Pengiriman :</label>
									<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="" disabled></textarea>
										</div>
									</div>
								</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>
			</div>
			</div>

			<div class="kt-portlet__body">
											<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Pembayaran</div><br><br>
					<div class="kt-portlet__body">
						<div class="kt-portlet__content">
							
							<table class="table table-striped table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="2%" rowspan="2" bgcolor="#f7fcff">#</th>
																						<th width="1%" colspan="3" rowspan="2" bgcolor="#f7fcff">Uraian</th>
																					  <th colspan="2" bgcolor="#f7fcff">Quantity</th>
																						<th width="10%" rowspan="2" bgcolor="#f7fcff">Harga Satuan</th>
																						<th width="10%" rowspan="2" bgcolor="#f7fcff">Total</th>
																						<th width="5%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																					<tr>
																					  <th width="5%" bgcolor="#f7fcff">Vol</th>
																					  <th width="5%" bgcolor="#f7fcff">Satuan</th>
																			      </tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td width="1%" style="text-align:right"; align="center">1</td>
																						<td colspan="3" align="center"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Material</option>
												  <option>Jasa</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
																						<td>&nbsp;</td>
																						<td>&nbsp;</td>
																						<td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																						<td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">&nbsp;</td>
																					  <td width="1%" align="center">1.1</td>
																					  <td colspan="2"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Kategori Material</option>
												  <option>Dispenser Single</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																				  </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">&nbsp;</td>
																					  <td align="center">&nbsp;</td>
																					  <td width="1%">1.1.1</td>
																					  <td width="15%"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Kode - Nama Barang</option>
												  <option>IP CAM 4MP OUTDOOR BULLET CAMERA</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
											    </select></td>
																					  <td><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="1" /></td>
																					  <td><select class="form-control kt-selectpicker" data-live-search="true">
												  <option selected="selected">Unit</option>
												  <option>Pieces</option>
												  <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
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
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																				  </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">2</td>
																					  <td colspan="3" align="center"><select name="select3" class="form-control kt-selectpicker" data-live-search="true">
																					    <option selected="selected">Material</option>
																					    <option>Jasa</option>
																					    <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
																					    </select></td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a></td>
																				  </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">&nbsp;</td>
																					  <td align="center">2.1</td>
																					  <td colspan="2"><select name="select3" class="form-control kt-selectpicker" data-live-search="true">
																					    <option selected="selected">Kategori Material</option>
																					    <option>Dispenser Single</option>
																					    <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
																					    </select></td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																				  </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">&nbsp;</td>
																					  <td align="center">&nbsp;</td>
																					  <td>2.1.1</td>
																					  <td><select name="select3" class="form-control kt-selectpicker" data-live-search="true">
																					    <option selected="selected">Kode - Nama Barang</option>
																					    <option>IP CAM 4MP OUTDOOR BULLET CAMERA</option>
																					    <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
																					    </select></td>
																					  <td><input id="kt_touchspin_" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="kt_touchspin_" placeholder="1" /></td>
																					  <td><select name="select3" class="form-control kt-selectpicker" data-live-search="true">
																					    <option selected="selected">Unit</option>
																					    <option>Pieces</option>
																					    <option data-content="&lt;a href='#' class='btn btn-sm m-button-add'&gt;&lt;i class='fa fa-plus-circle'&gt;&lt;/i&gt; Tambah Data&lt;/a&gt;" class="select-option-add" value="add"></option>
																					    </select></td>
																					  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
																					    </div></td>
																					  <td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
																					    </div></td>
																					  <td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																				  </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">&nbsp;</td>
																					  <td align="center">&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td style="text-align:center">&nbsp;</td>
																				  </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">&nbsp;</td>
																					  <td align="center">&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td style="text-align:center">&nbsp;</td>
																				  </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">&nbsp;</td>
																					  <td align="center">&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td>&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td nowrap="nowrap" style="text-align:left">&nbsp;</td>
																					  <td style="text-align:center">&nbsp;</td>
																				  </tr>
																					
												                </tbody>
																<tfoot style="border-top: 2px solid #5867dd">
																	<tr>
																		<th colspan="6" bgcolor="#f7fcff" class="text-right">Total</th>
																		<th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></th>
																		<th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																		  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																		  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" disabled="disabled" aria-describedby="basic-addon1" />
																		  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																		  </div></th>
																		<th bgcolor="#f7fcff">&nbsp;</th>
																	</tr>
																</tfoot>
																			</table>
						</div>
					</div>
				</div>
											<div class="row">
														<div class="col-lg-6">
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #5867dd">
																<h5>Subtotal</h5>
																<label class="text-right">0</label>
															</div>
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #0abb87">
																<h5>Diskon <span class="kt-badge kt-badge--inline kt-badge--success">%</span></h5>
																<input type="number" class="form-control form-control-sm" placeholder="" >
															</div>
														</div>
														<div class="col-lg-2">
															<div class="kt-portlet p-3" style="border-top:3px solid #ed1c24">
																<h5>Total</h5>
																<label class="text-right">0</label>
															</div>
														</div>
													</div>
										</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_favorit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Salin dari Transaksi Favorit</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<select class="form-control kt-selectpicker w-50 mb-3">
						<option disabled selected>Cari/Pilih...</option>
					</select>

					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">Akun</th>
								<th bgcolor="#f7fcff">Nama Akun</th>
								<th bgcolor="#f7fcff">Nilai</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
								<li>
									<a href="#">...</a>
								</li>
								<li>
									<a href="#">29</a>
								</li>
								<li class="kt-pagination__link--active">
									<a href="#">30</a>
								</li>
								<li>
									<a href="#">31</a>
								</li>
								<li>
									<a href="#">32</a>
								</li>
								<li>
									<a href="#">33</a>
								</li>
								<li>
									<a href="#">34</a>
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
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_pencatatan_beban" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Pencatatan Beban</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Beban#</th>
								<th bgcolor="#f7fcff">Tanggal</th>
								<th bgcolor="#f7fcff">Jatuh Tempo</th>
								<th bgcolor="#f7fcff">Total</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
								<li>
									<a href="#">...</a>
								</li>
								<li>
									<a href="#">29</a>
								</li>
								<li class="kt-pagination__link--active">
									<a href="#">30</a>
								</li>
								<li>
									<a href="#">31</a>
								</li>
								<li>
									<a href="#">32</a>
								</li>
								<li>
									<a href="#">33</a>
								</li>
								<li>
									<a href="#">34</a>
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
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_pencatatan_beban" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Pencatatan Gaji</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Beban#</th>
								<th bgcolor="#f7fcff">Tanggal</th>
								<th bgcolor="#f7fcff">Jatuh Tempo</th>
								<th bgcolor="#f7fcff">Total</th>
								<th bgcolor="#f7fcff">Tipe</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
								<li>
									<a href="#">...</a>
								</li>
								<li>
									<a href="#">29</a>
								</li>
								<li class="kt-pagination__link--active">
									<a href="#">30</a>
								</li>
								<li>
									<a href="#">31</a>
								</li>
								<li>
									<a href="#">32</a>
								</li>
								<li>
									<a href="#">33</a>
								</li>
								<li>
									<a href="#">34</a>
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
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_PPh_pembelian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">PPh Pembelian</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<select class="form-control kt-selectpicker w-50 mb-3">
						<option disabled selected>[Semua]</option>
						<option>Pajak Penghasilan Ps.4(2)</option>
						<option>Pajak Penghasilan Ps.15</option>
						<option>Pajak Penghasilan Ps.21</option>
						<option>Pajak Penghasilan Ps.23</option>
					</select>
					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Bukti#</th>
								<th bgcolor="#f7fcff">Jatuh Tempo PPh</th>
								<th bgcolor="#f7fcff">PPh</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
								<li>
									<a href="#">...</a>
								</li>
								<li>
									<a href="#">29</a>
								</li>
								<li class="kt-pagination__link--active">
									<a href="#">30</a>
								</li>
								<li>
									<a href="#">31</a>
								</li>
								<li>
									<a href="#">32</a>
								</li>
								<li>
									<a href="#">33</a>
								</li>
								<li>
									<a href="#">34</a>
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
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kt_modal_PPh_penjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">PPh Pembelian</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
				<div class="modal-body">
					<select class="form-control kt-selectpicker w-50 mb-3">
						<option disabled selected>[Semua]</option>
						<option>Pajak Penghasilan Ps.4(2)</option>
						<option>Pajak Penghasilan Ps.15</option>
					</select>
					<table class="table table-striped table-bordered table-hover table-checkable">
						<thead>
							<tr>
								<th width="10%" bgcolor="#f7fcff"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="selectAll">&nbsp;<span></span></label></th>
								<th bgcolor="#f7fcff">No.Bukti#</th>
								<th bgcolor="#f7fcff">Jatuh Tempo PPh</th>
								<th bgcolor="#f7fcff">PPh</th>
								<th bgcolor="#f7fcff">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="1">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="2">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="text-center"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox" id="3">&nbsp;<span></span></label></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

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
								<li>
									<a href="#">...</a>
								</li>
								<li>
									<a href="#">29</a>
								</li>
								<li class="kt-pagination__link--active">
									<a href="#">30</a>
								</li>
								<li>
									<a href="#">31</a>
								</li>
								<li>
									<a href="#">32</a>
								</li>
								<li>
									<a href="#">33</a>
								</li>
								<li>
									<a href="#">34</a>
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
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Lanjut</button>
				</div>
			</div>
		</div>
	</div>

</div>

<?php require '../layouts/footer.php' ?>
<script>
	$('#btnClick').on('click', function() {
		$("#1").css("display", "none");
		$("#2").css("display", "block");
	});
	$('tbody').sortable();
	$('#selectAll').click(function(e) {
		$(this).closest('table').find('td input:checkbox').prop('checked', this.checked);
	});
</script>
<?php require '../layouts/foot.php' ?>
