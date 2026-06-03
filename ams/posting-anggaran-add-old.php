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
				Form Posting Anggaran
			</h3>

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
				&nbsp;


			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-success">
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
				
				<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Anggaran</div>
							<br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
						<div class="col-lg-6">
                          <label>ID Anggaran :</label>
						   <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="PMR.UM.1.2023">
                        
                        </div>
						<div class="col-lg-6">
                          <label>Tahun Anggaran :</label>
						  <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
											
												<option value="2">2024</option>
												<option value="2">2023</option>
												<option value="3">2022</option>
											
										</select>
                        
                        </div>
                       

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
					 <div class="col-lg-6">
                          <label>Tipe Anggaran :</label>
						  <select data-size="7" data-live-search="true" class="form-control kt-selectpicker">
											
												<option value="2">Anggaran Pokok</option>
												<option value="3">Anggaran Perubahan</option>
											
										</select>
                        
                        </div>
						
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

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-6">
                          <label>Kantor :</label>
						   <select class="form-control form-control kt-selectpicker" id="exampleSelects">
														<option>Pusat</option>
														<option>Cabang A</option>
														
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
			<div class="col-xl-4">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Petugas Pelaksana</div>
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
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												


												</div>
									</div>

									<!--end::Portlet-->



								</div>
			
			

				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Beban</div><br>
					<div class="kt-portlet__body">
						<div class="kt-portlet__content">
							
							<table class="table table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="1%" bgcolor="#f7fcff">#</th>
																						<th width="20%" bgcolor="#f7fcff">Akun</th>
																						<th width="20%"bgcolor="#f7fcff">Untuk Beban</th>
																						<th width="15%" bgcolor="#f7fcff">Lampiran Dokumen</th>
																						<th width="15%" bgcolor="#f7fcff">Catatan</th>
																						<th width="10%" bgcolor="#f7fcff">Nilai</th>
																						<th width="5%" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td>1</td>
																						<td><select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari/Pilih Akun Perkiraan...</option>
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
																						<td><input type="text" class="form-control form-control-sm" placeholder="Beban Pokok Penjualan"  ></td>
																						<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder=""  ></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					<tr>
																					  <td>2</td>
																						<td><select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari/Pilih Akun Perkiraan...</option>
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
																						<td><input type="text" class="form-control form-control-sm" placeholder="Beban Komisi"  ></td>
																						<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder=""  ></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					<tr>
																					  <td>3</td>
																						<td><select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>Cari/Pilih Akun Perkiraan...</option>
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
																						<td><input type="text" class="form-control form-control-sm" placeholder="Beban Bensin, Parkir, Tol Kendaraan"  ></td>
																						<td style="text-align:center"><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td style="text-align:center"><input type="text" class="form-control form-control-sm" placeholder=""  ></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm"  placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-success btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Tambah Data"><i class="fa fa-plus-circle"></i></a>&nbsp;<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																</tbody>
																
																<tfoot style="border-top: 2px solid #5867dd">
																	<tr>
																		<th colspan="5" bgcolor="#f7fcff" class="text-right"><strong>Total</strong></th>
																		<th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																		  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon2">Rp.</span></div>
																		  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
																		  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon2">,-</span></div>
																	    </div></th>
																		<th bgcolor="#f7fcff">&nbsp;</th>
																	</tr>
																</tfoot>
																			</table>
						</div>
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
</script>
<?php require '../layouts/foot.php' ?>
