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
											TRANSFER BANK</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="#" class="btn btn-label-brand btn-smdata-toggle="dropdown" onclick="goBack()">
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
				<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>
				
				
			</div>
			<a href="#" class="btn btn-success btn-sm" data-toggle="dropdown">
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
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Rincian Transfer</div><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="form-group row">
									
									<div class="col-lg-4">
										<label>Kantor : <code>*</code></label>
										<div class="input-group">
											
											<input id="1" type="text" class="form-control" placeholder="Pusat" disabled>
											
										</div>
									</div>
									<div class="col-lg-4">
										<label>No. Bukti#: <code>*</code></label>
										<div class="input-group">
											
											<input id="1" type="text" class="form-control" placeholder="BT.062026.01.0001" disabled>
											
										</div>
									</div>
									<div class="col-lg-4">
										<label>Tanggal : <code>*</code></label>
										<div class="input-group date">
										<input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="20/01/2020" id="kt_datepicker_2">
										<div class="input-group-append">
										 <span class="input-group-text">
											 <i class="la la-calendar-check-o"></i>
										 </span>
										</div>
										</div>
									</div>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-4">
										<label>Dari Kas/Bank : <code>*</code></label>
										<select data-live-search="true" class="form-control kt-selectpicker" id="tipe">
											<option value="1" disabled selected>Cari/Pilih...</option>
												<option value="Kas Kecil" data-subtext="110101">Kas Kecil</option>
												<option value="Bank" data-subtext="110102">Bank</option>
												<option value="Deposito Bank" data-subtext="110201">Deposito Bank</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label>Ke Kas/Bank : <code>*</code></label>
										<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe2">
											<option value="1" disabled selected>Cari/Pilih...</option>
												<option value="Kas Kecil" data-subtext="110101">Kas Kecil</option>
												<option value="Bank" data-subtext="110102">Bank</option>
												<option value="Deposito Bank" data-subtext="110201">Deposito Bank</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label class="">Nilai Transfer : <code>*</code></label>
										
											<div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div>
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
									<textarea class="form-control" id="exampleTextarea" rows="1" placeholder=""></textarea>
								</div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								<div class="form-group row">
									<div class="col-lg-6">
                          <label class="">Saldo Kas / Bank Asal  :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
                        </div>
<div class="col-lg-6">
                          <label class="">Saldo Kas / Bank Tujuan  :</label>
                          <div class="input-group input-group-sm">
																					    <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																					    <input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2.000.000" aria-describedby="basic-addon1">
																					    <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																					    </div>
                        </div>
							</div>
							</div>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
			</div>

				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Biaya Transfer</div><br><br>
					<div class="kt-portlet__body">
						<div class="kt-portlet__content">
							<div class="form-group row">
							
   
 <div class="col-xl-2">
 <a href="#" class="btn btn-brand" data-toggle="modal" data-target="#modal_tambah_biaya_transfer">
											<i class="fa fa-plus-circle"></i>Biaya Transfer
										</a>
 
										</div>

										
										
										</div>
							<table class="table table-striped table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="2%" bgcolor="#f7fcff">#</th>
																					  <th width="5%" bgcolor="#f7fcff"> Akun</th>
																					  <th width="15%" bgcolor="#f7fcff">Nama Akun</th>
																						<th width="15%" bgcolor="#f7fcff">Catatan</th>
																						<th width="10%" bgcolor="#f7fcff">Bukti Transfer</th>
																						<th width="10%" bgcolor="#f7fcff">Nilai</th>
																						<th width="1%" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td style="text-align:right"; align="center">1</td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="710003" /></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="Penjualan Persediaan / Perlengkapan" /></td>
																						<td><input type="text" class="form-control form-control-sm" placeholder="Isikan Catatan"></td>
																						<td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">2</td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="710005" /></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled placeholder="Pendapatan Diluar Usaha Lainnya" /></td>
																						<td><input type="text" class="form-control form-control-sm" placeholder="Isikan Catatan"></td>
																						<td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td nowrap="nowrap" style="text-align:left"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="2.000.000.000" aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					
																</tbody>
																<tfoot style="border-top: 2px solid #5867dd">
																	<tr>
																		<th colspan="5" bgcolor="#f7fcff" class="text-right">Total</th>
																		<th bgcolor="#f7fcff"><div class="input-group input-group-sm">
																						  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
																						  <input style="text-align:right" type="text" class="form-control form-control-sm" disabled placeholder="4.000.000.000" disabled aria-describedby="basic-addon1">
																						  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
																						  </div></th>
																		<th bgcolor="#f7fcff">&nbsp;</th>
																	</tr>
																</tfoot>

																			</table>
						</div>
					</div>
				</div>
				<div class="modal fade" id="modal_tambah_biaya_transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">BIAYA TRANSFER</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												

<div class="form-group row">
<div class="col-lg-4">
														<label class="kt-font-brand">Akun :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="710003" />
													</div>
<div class="col-lg-8">
														<label class="kt-font-brand">Akun Biaya Transfer :</label>
														<select name="select" class="form-control kt-selectpicker col-lg-12 mb-6" data-size="7" data-live-search="true">
																					    <option value="1" disabled="disabled" selected="selected">Cari / Pilih Akun Perkiraan...</option>
																					    <optgroup label="Kewajiban Jangka Pendek" class="a">
																					      <option data-subtext="5101">Beban Pokok Penjualan</option>
																				        </optgroup>
																					    <optgroup label="Beban" class="a">
																					      <option data-subtext="600001">Beban Iklan</option>
																					      <option data-subtext="600002">Beban Komisi</option>
																					      <option data-subtext="600003">Beban Bensin, Parkir, Tol Kendaraan</option>
																					      <option data-subtext="600004">Beban Gaji, Upah &amp; Honorer</option>
																					      <option data-subtext="600005">Beban Bonus, Pesangon &amp; Kompensasi</option>
																					      <option data-subtext="600006">Beban Transportasi Karyawan</option>
																					      <option data-subtext="600007">Beban Catering &amp; Makan Karyawan</option>
																					      <option data-subtext="600008">Beban Tunjangan Kesehatan</option>
																					      <option data-subtext="600009">Beban Asuransi Karyawan</option>
																					      <option data-subtext="600010">Beban THR</option>
																					      <option data-subtext="600011">Beban Listrik</option>
																					      <option data-subtext="600012">Beban PDAM</option>
																					      <option data-subtext="600013">Beban Telekomunikasi</option>
																					      <option data-subtext="600014">Beban Ekspedisi, POS, &amp; Materai</option>
																					      <option data-subtext="600015">Beban Perjalanan Dinas</option>
																					      <option data-subtext="600016">Beban Perlengkapan Kantor</option>
																					      <option data-subtext="600017">Beban Pajak Penghasilan</option>
																					      <option data-subtext="600018">Beban Restribusi &amp; Sumbangan</option>
																					      <option data-subtext="600019">Beban Sewa Gedung</option>
																					      <option data-subtext="600020">Beban Operasional Lainnya</option>
																					      <option data-subtext="600021">Beban Penyusutan Gedung</option>
																					      <option data-subtext="600022">Beban Penyusutan Kendaraan</option>
																					      <option data-subtext="600023">Beban Penyusutan Peralatan</option>
																					      <option data-subtext="600001">Beban Inventaris Kantor</option>
																				        </optgroup>
																					    <optgroup label="Beban Lainnya" class="a">
																					      <option data-subtext="720001">Beban Bunga Pinjaman</option>
																					      <option data-subtext="720002">Beban Adm.Bank &amp; Buku Cek/Giro</option>
																					      <option data-subtext="720003">Pajak Jasa Giro</option>
																					      <option data-subtext="720004">Laba/Rugi Terelasasi</option>
																					      <option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
																					      <option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
																					      <option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
																				        </optgroup>
																				      </select>
													</div>
													
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">Untuk Pembayaran :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Penjualan Persediaan / Perlengkapan" />
													</div>
													
												



												
													
													

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label class="kt-font-brand">Nilai :</label>
														<div class="input-group input-group-sm">
												  <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
												  <input style="text-align:right" type="text" class="form-control form-control-sm" placeholder="2.000.000.000" aria-describedby="basic-addon1" />
												  <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
											    </div>
													</div>
													<div class="col-lg-6">
														<label class="kt-font-brand">Dibebankan Ke :</label>
														<select name="select" class="form-control kt-selectpicker col-lg-12 mb-6" data-size="7" data-live-search="true">
																					    <option value="1" disabled="disabled" selected="selected">Cari / Pilih...</option>
																					    
																					      <option>Kas/Bank Pengirim</option>
																					      <option>Kas/Bank Penerima</option>
																					      
																				      
																				      </select>
													</div>
													
												



												
													
													

												</div>

                              


												</div>
												
												
												


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">
													<button type="button" class="btn btn-success">
					<i class="fa fa-check-circle"></i>Lanjut</button>
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

</div>

<?php require '../layouts/footer.php' ?>
<script>
	$('#btnClick').on('click', function() {
		$("#1").css("display", "none");
		$("#2").css("display", "block");
	});
  $('tbody').sortable();
</script>
<script>
$(function() {
  $("#tipe").on("change", function() {
    $("#result").text($("#tipe").val());
  }).trigger("change");
	$("#tipe2").on("change", function() {
		$("#result2").text($("#tipe2").val());
	}).trigger("change");
});
</script>
<?php require '../layouts/foot.php' ?>
