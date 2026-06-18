<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<link href="../assets/css/pages/invoices/invoice-2.css" rel="stylesheet" type="text/css" />



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
											Form Tambah Barang
									</h3>

								</div>
								
								<div class="kt-subheader__toolbar">
									
									<div class="dropdown dropdown-inline" ddata-placement="left">
											<a href="#.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
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
													<i class="flaticon-open-box"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Umum
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Informasi Barang
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
													<i class="flaticon-avatar"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Pembelian
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Detail Vendor
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
													<i class="flaticon-layers"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Stok
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Persediaan Barang
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
													<i class="flaticon-coins"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Akuntansi
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Beban / Pendapatan
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													4
												</div>
											</div>
										</div>
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
											
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Barang</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Kode Barang :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000002MP823">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Kategori :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
						
														
														<option>Peralatan Project</option>
														<option>Peralatan Kerja</option>
														<option>Peralatan Kantor</option>
														 <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
													</select>
                        </div>
						<div class="form-group row">
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Project :</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-6" id="hide1">Tidak</button>&nbsp;
      													
                                <button type="button" class="btn btn-secondary btn-square btn-sm col-lg-4" id="show">Ya</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
								
                                  <div class="form-group row">
    													
													<div class="col-lg-12">
														<label class="kt-font-danger">Pilih Project :</label>
														 <select class="form-control form-control kt-selectpicker" data-live-search="true">
														<option>Epass</option>
														
														</select>
													</div>
												
                          </div>
						



											</div>
											
											</div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Barang :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                      
						
						<div class="col-lg-6">
                          <label class="">Scan Barcode :</label>
                          <div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Barcode disini" id="generalSearch">
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div>
                      </div>
					 
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						
						<div class="col-lg-4">
                          <label class="">Harga Penjualan :</label>
                          <div class="input-group input-group-sm">
															    <div class="input-group-prepend"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon2">Rp.</span></div>
															    <input style="text-align:right; border-color:#0e62ae;" type="text" class="form-control form-control-sm" placeholder="2.000.000" aria-describedby="basic-addon1">
															    <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#0e62ae" id="basic-addon2">,-</span></div>
															    </div>
                        </div>
						
						
						<div class="col-lg-2">
                          <label><span style="color:#ff0000">*</span> Pajak :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>12%</option>
														<option>11%</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-2">
                          <label class="">Stok :</label>
                          <input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12">
                        </div>
						<div class="col-lg-2">
                          <label><span style="color:#ff0000">*</span> Satuan :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option selected>Unit</option>
														<option>Pieces</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-4">
                          <label class="">Harga Pembelian :</label>
                          <div class="input-group input-group-sm">
															    <div class="input-group-prepend"><span class="input-group-text input-group-sm" style="border-color:#ff0000" id="basic-addon2">Rp.</span></div>
															    <input style="text-align:right; border-color:#ff0000;" type="text" class="form-control form-control-sm" placeholder="2.000.000" aria-describedby="basic-addon1">
															    <div class="input-group-append"><span class="input-group-text input-group-sm" style="border-color:#ff0000" id="basic-addon2">,-</span></div>
															    </div>
                        </div>
						
						
						<div class="col-lg-2">
                          <label><span style="color:#ff0000">*</span> Pajak :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>12%</option>
														<option>11%</option>
														
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-6">
                          <label class="">Catatan Internal :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="3" placeholder=""></textarea>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Akuntansi</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label class="">Akun Penjualan :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>4101 - Penjualan Umum</option>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
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
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
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
                          <label class="">Akun Pembelian :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>5101 - Harga Pokok Penjualan</option>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
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
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
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
                          <label class="">Akun Diskon Penjualan :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>== Pilih Akun ==</option>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
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
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
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
                          <label class="">Akun Diskon Pembelian :</label>
                          <select data-size="7" data-live-search="true" class="form-control kt-selectpicker col-lg-12 mb-6">
								<option value="1" disabled selected>== Pilih Akun ==</option>
								<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
								<option value="1">Lihat Semua</option>
								
								
								
								<optgroup label="Kewajiban Jangka Pendek" class="a">
									<option data-subtext="5101">Beban Pokok Penjualan</option>
								</optgroup>
								<optgroup label="Beban" class="a">
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
									<option data-subtext="600001">Beban Inventaris Kantor</option>
								</optgroup>
								<optgroup label="Beban Lainnya" class="a">
									<option data-subtext="720001">Beban Bunga Pinjaman</option>
									<option data-subtext="720002">Beban Adm.Bank & Buku Cek/Giro</option>
									<option data-subtext="720003">Pajak Jasa Giro</option>
									<option data-subtext="720004">Laba/Rugi Terelasasi</option>
									<option data-subtext="720005">Laba/Rugi Belum Terealisasi</option>
									<option data-subtext="720006">Laba/Rugi Disposisi Aset</option>
									<option data-subtext="720007">Beban Diluar Usaha Lainnya</option>
								</optgroup>
							</select>
                        </div>
						
						
						
						
                        </div>
						
						
						




											</div>

										</div>

									</div>
									

									</div>
									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Barang</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
																										<div class="col-lg-12" style="text-align:center">
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
																										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																										
																										
																								</div>
																								
																							</div>

									</div>
									

									</div>
									</div>
									
									</div>
									</div>
									
										




													<!--end: Form Wizard Step 1-->
													

													

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">
														<div class="row">
														<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Transaksi</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-2">
                          <label>ID Transaksi :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000001PS823">

                        </div>
						<div class="col-lg-2">
                          <label>ID Pembayaran :</label>
                         <input type="text" class="form-control form-control-sm"  disabled="disabled" placeholder="000001PMPS823">

                        </div>
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  
						
						  




											</div>

										</div>

									</div>
														<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Transaksi</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_2">

  <tbody><tr style="text-align:center">
    <td width="1%" bgcolor="#0961ae" style="color:#fff;">NO</td>
    <td width="6%" bgcolor="#0961ae" style="color:#fff;">URAIAN </td>
    <td width="1%" colspan="2" bgcolor="#0961ae" style="color:#fff;">JUMLAH<br>KENDARAAN</td>
    <td width="7%" bgcolor="#0961ae" style="color:#fff;">NO PLAT<br>KENDARAAN</td>
    <td width="1%" colspan="2" bgcolor="#0961ae" style="color:#fff;">DURASI</td>
    <td width="8%" bgcolor="#0961ae" style="color:#fff;">TARIF SATUAN</td>
    <td width="8%" bgcolor="#0961ae" style="color:#fff;">JUMLAH</td>
    <td width="3%" bgcolor="#0961ae" style="color:#fff;">AKSI</td>
  </tr>
  <tr style="text-align:center">
    <td bgcolor="#f5f5f5">a</td>
    <td bgcolor="#f5f5f5">b</td>
    <td colspan="2" bgcolor="#f5f5f5">c</td>
    <td bgcolor="#f5f5f5">d</td>
    <td colspan="2" bgcolor="#f5f5f5">e</td>
    <td bgcolor="#f5f5f5">f</td>
    <td bgcolor="#f5f5f5">g</td>
    <td bgcolor="#f5f5f5">h</td>
  </tr>
  <tr>
    <td style="text-align:center">A</td>
    <td colspan="9"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Biaya Membership Parkir"></td>
  </tr>
  <tr>
    <td bgcolor="#feffed" style="text-align:right">1</td>
    <td bgcolor="#feffed"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">Pegawai/Instansi/Others</option>
      <option value="AK" selected>Sepeda Motor</option>
      <option value="AK">Sedan/Jeep/Pick Up</option>
      <option value="AK">Truck/Tronton/Trailer</option>
	  <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
    </select></td>
    <td bgcolor="#feffed"><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI" selected="selected">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td bgcolor="#feffed"><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">Unit</option>
    </select></td>
    <td colspan="5" bgcolor="#feffed">&nbsp;</td>
    <td bgcolor="#feffed" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
    </tr>
  <tr>
    <td style="text-align:right">1.1</td>
    <td><div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="fa fa-credit-card"></i></span>
    		                        </span>
    		                    </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="800.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="800.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:right">1.2</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-credit-card"></i></span> </span> </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="800.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="800.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
    </tr>
  <tr>
    <td style="text-align:right">1.3</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch" />

      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-credit-card"></i></span> </span> </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="800.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="800.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
    </tr>
  <tr>
    <td bgcolor="#feffed" style="text-align:right">2</td>
    <td bgcolor="#feffed"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">Pegawai/Instansi/Others</option>
      <option value="AK">Sepeda Motor</option>
      <option value="AK" selected>Sedan/Jeep/Pick Up</option>
      <option value="AK">Truck/Tronton/Trailer</option>
	  <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
    </select></td>
    <td bgcolor="#feffed"><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI" selected="selected">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td bgcolor="#feffed"><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">Unit</option>
    </select></td>
    <td colspan="5" bgcolor="#feffed">&nbsp;</td>
    <td bgcolor="#feffed" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
    </tr>
  <tr>
    <td style="text-align:right">2.1</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-credit-card"></i></span> </span> </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.250.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.250.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
    </tr>
  <tr>
    <td style="text-align:right">2.2</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-credit-card"></i></span> </span> </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.250.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.250.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
    </tr>
  <tr>
    <td style="text-align:right">2.3</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-credit-card"></i></span> </span> </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.250.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.250.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
    </tr>
  <tr>
    <td bgcolor="#feffed" style="text-align:right">3</td>
    <td bgcolor="#feffed"><select name="select" class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">Pegawai/Instansi/Others</option>
      <option value="AK">Sepeda Motor</option>
      <option value="AK" >Sedan/Jeep/Pick Up</option>
      <option value="AK" selected>Truck/Tronton/Trailer</option>
	  <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
    </select></td>
    <td bgcolor="#feffed"><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI" selected="selected">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td bgcolor="#feffed"><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">Unit</option>
    </select></td>
    <td colspan="5" bgcolor="#feffed">&nbsp;</td>
    <td bgcolor="#feffed" style="text-align:center"><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button>
      <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
    </tr>
  <tr>
    <td style="text-align:right">3.1</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-credit-card"></i></span> </span> </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
    </tr>
  <tr>
    <td style="text-align:right">3.2</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-credit-card"></i></span> </span> </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
    </tr>
  <tr>
    <td style="text-align:right">3.3</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Sticker Member Disini..." id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-credit-card"></i></span> </span> </div></td>
    <td colspan="2">&nbsp;</td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="No Plat Kendaraan" id="generalSearch" />
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span></span></div></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">1</option>
      <option value="HI">2</option>
      <option value="HI">3</option>
      <option value="HI">4</option>
      <option value="HI">5</option>
    </select></td>
    <td><select class="form-control kt-selectpicker" data-live-search="true" disabled="disabled">
      <option value="AK">Hari</option>
      <option value="AK">Minggu</option>
      <option value="HI">Bulan</option>
      <option value="HI" selected="selected">Tahun</option>
    </select></td>
    <td><div class="input-group input-group-sm" >
      <div class="input-group-prepend" ><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td><div class="input-group input-group-sm">
      <div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
      <input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="1.750.000" aria-describedby="basic-addon1" />
      <div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
    </div></td>
    <td style="text-align:center">&nbsp;</td>
    </tr>
  
  
  <tr>
    <td colspan="10" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="8" style="text-align:right">Sub Total</td>
    <td colspan="2" style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="10.400.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
	<tr>
    <td colspan="8" style="text-align:right">Metode Pembayaran</td>
    <td colspan="2" style="text-align:center"><select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Virtual Account</option>
                                      <option value="1">Credit Card</option>
                                      <option value="2">Tunai</option>
                                                                           
                                  </select></td>
    </tr>
  <tr>
    <td colspan="8" style="text-align:right">Biaya Layanan&nbsp;&nbsp;<button type="button" style="margin-bottom:20px; font-size:12px;" class="btn btn-label-brand btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Digunakan Untuk<br>Peningkatan Layanan">?</button></td>
    <td colspan="2" style="text-align:center"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="50.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
  
  <tr>
    <td colspan="8" style="text-align:right" bgcolor="#CCEAFF"><b>GRAND TOTAL </b></td>
    <td colspan="2" bgcolor="#CCEAFF"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input type="text" style="text-align:right" class="form-control form-control-sm" disabled="disabled" placeholder="11.450.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
    </tr>
  <tr>
    <td colspan="10" style="text-align:center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10" style="text-align:left" bgcolor="#f7fcff"><b><i>Terbilang : Sebelas Juta Empat Ratus Lima Puluh Ribu Rupiah</i></b></td>
  </tr>
</tbody></table>
												
						
                     
						
                     
					  
                     
									</div>
									

									</div>


									</div>
							<!--end:: Portlet-->


										</div>
								
													</div>
													</div>
													</div>
													
													</div>
													</div>

													<!--end: Form Wizard Step 3-->

													
<!--begin: Form Wizard Kwitansi-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
														<div class="kt-invoice-2">
										<div class="kt-invoice__head">
											<div class="kt-invoice__container">
												<div class="kt-invoice__brand">
													<h1 class="kt-invoice__title">Kwitansi<br>Pembayaran</h1>
													<div href="#" class="kt-invoice__logo">
														
														<span class="kt-invoice__desc">
															<span class="span-qr" style="z-index: 99999">
                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100" height="100" viewBox="0 0 40 40"><rect x="0" y="0" width="40" height="40" fill="#ffffff"></rect><g transform="scale(1.905)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M9 0L9 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L5 9L5 10L4 10L4 8L3 8L3 9L2 9L2 8L0 8L0 9L2 9L2 10L3 10L3 12L4 12L4 11L7 11L7 10L8 10L8 8L9 8L9 11L8 11L8 12L6 12L6 13L8 13L8 15L9 15L9 16L10 16L10 17L11 17L11 16L12 16L12 17L13 17L13 18L12 18L12 19L10 19L10 20L11 20L11 21L12 21L12 20L13 20L13 19L14 19L14 21L15 21L15 18L16 18L16 19L17 19L17 20L19 20L19 18L20 18L20 20L21 20L21 17L20 17L20 16L21 16L21 14L20 14L20 15L19 15L19 16L18 16L18 13L19 13L19 12L20 12L20 13L21 13L21 12L20 12L20 11L19 11L19 10L21 10L21 9L20 9L20 8L18 8L18 9L17 9L17 8L14 8L14 9L13 9L13 8L12 8L12 7L13 7L13 6L12 6L12 7L11 7L11 6L10 6L10 7L9 7L9 4L10 4L10 0ZM12 0L12 1L11 1L11 4L12 4L12 5L13 5L13 2L12 2L12 1L13 1L13 0ZM6 9L6 10L7 10L7 9ZM11 9L11 10L10 10L10 11L9 11L9 12L8 12L8 13L9 13L9 15L10 15L10 16L11 16L11 14L13 14L13 15L12 15L12 16L13 16L13 17L17 17L17 19L18 19L18 18L19 18L19 17L18 17L18 16L17 16L17 15L16 15L16 14L13 14L13 13L16 13L16 12L14 12L14 10L15 10L15 11L17 11L17 13L18 13L18 12L19 12L19 11L18 11L18 10L19 10L19 9L18 9L18 10L15 10L15 9L14 9L14 10L13 10L13 9ZM12 10L12 11L11 11L11 12L12 12L12 13L13 13L13 12L12 12L12 11L13 11L13 10ZM1 11L1 12L0 12L0 13L1 13L1 12L2 12L2 11ZM9 12L9 13L10 13L10 12ZM14 15L14 16L16 16L16 15ZM8 17L8 18L9 18L9 17ZM8 19L8 21L9 21L9 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                    </span>
															
														</span>
													</div>
												</div>
												<div class="kt-invoice__items">
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">Tanggal</span>
														<span class="kt-invoice__text">03 September 2026</span>
													</div>
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">ID Transaksi</span>
														<span class="kt-invoice__text">GS 000014</span>
													</div>
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">ID Pembayaran</span>
														<span class="kt-invoice__text">GS 000014</span>
													</div>
													<div class="kt-invoice__item">
														<span class="kt-invoice__subtitle">INVOICE TO.</span>
														<span class="kt-invoice__text">Iris Watson, P.O. Box 283 8562 Fusce RD.<br>Fredrick Nebraska 20620</span>
													</div>
												</div>
											</div>
										</div>
										
										<div class="kt-invoice__footer">
											<div class="kt-invoice__container">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th width="20%">URAIAN</th>
																<th width="1%" colspan="2" style="text-align:center">VOLUME</th>
																<th width="10%" colspan="2" style="text-align:center">TARIF SATUAN</th>
																<th width="10%" colspan="2" style="text-align:center">TOTAL</th>
															</tr>
														</thead>
														<tbody style="font-weight:400;">
															<tr>
																<td>Biaya Member - Sepeda Motor</td>
																<td>3</td>
																<td>Kendaraan</td>
																<td>Rp.</td>
																<td style="text-align:right">800.000,-</td>
																<td>Rp.</td>
																<td style="text-align:right">2.400.000,-</td>
															</tr>
															<tr>
																<td>Biaya Member - Sedan/Jeep/Pickup</td>
																<td>3</td>
																<td>Kendaraan</td>
																<td>Rp.</td>
																<td style="text-align:right">1.250.000,-</td>
																<td>Rp.</td>
																<td style="text-align:right">3.750.000,-</td>
															</tr>
															<tr>
																<td>Biaya Member - Truck/Tronton/Trailer</td>
																<td>3</td>
																<td>Kendaraan</td>
																<td>Rp.</td>
																<td style="text-align:right">1.750.000,-</td>
																<td>Rp.</td>
																<td style="text-align:right">5.250.000,-</td>
															</tr>
															<tr>
															  <td colspan="7">&nbsp;</td>
														  </tr>
															<tr>
															  <td style="text-align:right" colspan="5">Sub Total</td>
															  <td>Rp.</td>
															  <td style="text-align:right">11.400.000,-</td>
														  </tr>
														  
															<tr>
															  <td style="text-align:right" colspan="5">Biaya Layanan</td>
															  <td>Rp.</td>
															  <td style="text-align:right">79.800,-</td>
														  </tr>
														  <tr>
															  <td style="text-align:right" colspan="5"><b>Grand Total</b></td>
															  <td><b>Rp.</b></td>
															  <td style="text-align:right"><b>11.479.800,-</b></td>
														  </tr>
														  <tr>
															  <td style="text-align:left" colspan="7"><i>Terbilang : Sebelas Juta Empat Ratus Tujuh Puluh Sembilan Ribu Delapan Ratus Rupiah</i></td>
															 
														  </tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="kt-invoice__actions">
											<div class="kt-invoice__container">
												<span><a href="#"><button type="button" class="btn btn-label-brand">Download Kwitansi</button></a></span>
                   
               
												<span><a href="cetak-kwitansi-registrasi-member.php"><button type="button" class="btn btn-brand">Print Kwitansi</button></a></span>
											</div>
										</div>
									</div>
													</div>

													<!--end: Form Wizard Step Kwitansi-->
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
<script>
$(function() {
  $('#select').change(function(){
    $('.tipe-akun').hide();
    $('#' + $(this).val()).show();
  });
});

function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

	var text1 = document.getElementById("text1");

		var text2 = document.getElementById("text2");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
		text1.style.display = "none";
		text2.style.display = "block";
  } else {
    text.style.display = "none";
		text1.style.display = "block";
		text2.style.display = "none";
  }

}
</script>
<script>
$("#show").click(function(){
    $(".tampil").show();
  });
  $("#hide1").click(function(){
      $(".tampil").hide();
    });
    $("#hide2").click(function(){
        $(".tampil").hide();
      });
</script>
<?php require '../layouts/foot.php' ?>
