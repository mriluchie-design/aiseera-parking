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
											Form Perjanjian Kontrak Pegawai
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
													<i class="flaticon-layers"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Preview
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Kontrak Kerja
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													2
												</div>
											</div>
										</div>
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
											<div class="kt-wizard-v4__nav-body">
												<div class="kt-wizard-v4__nav-icon">
													<i class="flaticon-grid-menu-v2"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Atribut Lanjutan
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Pasal Perjanjian
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
												</div>
											</div>
										</div>-->
										<!--<div class="kt-wizard-v4__nav-item" data-ktwizard-type="step">
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
										</div>-->
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Kontrak</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Nomor Surat :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="001/80-KK/PERUMDA-PMR/X/2022">

                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Ditetapkan Di :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Makassar</option>
                              <option value="HI">Jakarta</option>
                            </select>
                        </div>
						<div class="col-lg-6">
                          <label class="">Tahun Anggaran :</label>
                          <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">2023</option>
                              <option value="HI">2022</option>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Detail Calon Pegawai Kontrak</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-6">
                          <label>Nama Calon Pegawai Kontrak :</label>
						  <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Sri Suhartini, SE">
						 

                        </div>
						<div class="col-lg-4">
                          <label>Nomor Pokok Pegawai :</label>
						 <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="2381980022062">
                        </div>
						<div class="col-lg-2">
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
										<div class="col-xl-4">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Atribut Surat</div><br>
										 <div class="kt-portlet__body">
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label>Berdasarkan :</label>
						  <input type="text" class="form-control form-control-sm" placeholder="Surat Keputusan Direksi Perusahaan Umum Daerah Parkir Makassar">
						 

                        </div>
						
						
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Tanggal :</label>
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

											<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-50 ml-auto mr-auto mt-3">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
								<th colspan="6" class="text-center">
									<span style="text-align: center"><span style="font-family: Bookman Old Style; font-size: 12px;"><u>SURAT PERJANJIAN KONTRAK KERJA</b></u></span><br /><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem">
														<b>Nomor : 001/80-KK/PERUMDA-PMR/X/2022</b></span>
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
							  <td colspan="6"><p align="center"><span style="font-family: Bookman Old Style; font-size: 12px;"><b>KESEPAKATAN KERJA ANTARA PERUMDA PARKIR MAKASSAR RAYA</b></span><br />
							    <span style="font-family: Bookman Old Style; font-size: 12px;"><b>DENGAN TENAGA KONTRAK WAKTU TERBATAS</b></span><br />
						      <span style="font-family: Bookman Old Style; font-size: 12px;"><b>TAHUN ANGGARAN : 2022</b></span></p></td>
							</tr>
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
								<td colspan="6"><div align="justify"><span style="font-family: Bookman Old Style; font-size: 12px;">Pada hari ini Senin Tanggal Tiga Puluh Satu Bulan Oktober Tahun Dua Ribu Dua Puluh Dua masing-masing :</span></div></td>
							</tr>
							
							<tr>
							  <td colspan="6">&nbsp;</td>
  </tr>
							<tr>
							  <td width="11" valign="top">1.</td>
							  <td width="124" valign="top">Yulianti Tomu, SE</td>
							  <td width="7" valign="top">&nbsp;</td>
							  <td width="9" valign="top">:</td>
							  <td width="8">&nbsp;</td>
							  <td width="415"><div align="justify"><p>Direktur Utama PERUMDA Parkir Makassar Raya Berdasarkan  <br />
						      Peraturan Pemerintah No. 54  Tahun 2017 tentang Badan Usaha Milik Negara. Dalam hal ini bertindak untuk dan  atas nama Perusahaan Umum Daerah Parkir Makassar Raya, yang untuk selanjutnya  disebut PIHAK PERTAMA. </p></div></td>
  </tr>
							<tr>
							  <td valign="top">2.</td>
							  <td valign="top">N a m a</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">:</td>
							  <td>&nbsp;</td>
							  <td><strong>YUNUS  TULAK, S.IP</strong></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Tempat / Tgl. Lahir</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">:</td>
							  <td>&nbsp;</td>
							  <td>Tator, 05 Oktober 1964</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">Pendidikan Terakhir</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">:</td>
							  <td>&nbsp;</td>
							  <td>S.1</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">A l a m a t</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">:</td>
							  <td>&nbsp;</td>
							  <td>Jl. Haji Kalla II. No. 10</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>Selanjutnya disebut <strong>PIHAK KEDUA</strong></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top"><div align="justify"><p>Bahwa berdasarkan Surat Keputusan Direksi Perusahaan Umum Daerah Parkir Makassar Nomor : 154/20-S.Kep.Dir/PERUMDA-PMR/X/2022, Tanggal 31 Oktober  2022, <strong>PIHAK PERTAMA</strong> dan <strong>PIHAK KEDUA</strong> sepakat untuk mengadakan  kesepakatan kerja waktu terbatas dengan syarat-syarat dan ketentuan sebagai  berikut :</p></div></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top" style="text-align: center"><strong>TEMPAT DAN JANGKA WAKTU PEKERJAAN</strong></td>
  </tr>
							<tr>
							  <td colspan="6" valign="top" style="text-align: center"><strong>PASAL 1</strong></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top"><p><strong>PIHAK PERTAMA</strong> setuju menerima, sebagaimana <strong>PIHAK  KEDUA</strong> bersedia dan sanggup untuk menjadi Tenaga Kontrak pada Perusahaan  Umum Daerah Parkir Makassar Raya untuk Jangka waktu pekerjaan terhitung mulai  tanggal 01 November 2022 s/d 31 Desember 2022.</p></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top" style="text-align: center"><strong>PENGUPAHAN</strong></td>
  </tr>
							<tr>
							  <td colspan="6" valign="top" style="text-align: center"><strong>PASAL 2</strong></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">(1).</td>
							  <td colspan="5" valign="top">PIHAK KEDUA sebagai tenaga pendukung pada  Perusahaan Umum Daerah Parkir  Makassar Raya dengan status sebagai Tenaga Kontrak Kerja Waktu Terbatas, diberi  Gaji / Upah oleh PIHAK PERTAMA dan ditambah penghasilan lainnya berdasarkan  ketentuan Perusahaan yang berlaku. </td>
  </tr>
							<tr>
							  <td valign="top">(2).</td>
							  <td colspan="5" valign="top">Gaji/Upah hanya diberikan  jika PIHAK KEDUA mentaati ketentuan dalam  surat perjanjian ini.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
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
							  <td colspan="8" valign="top" style="text-align: center"><strong>HARI KERJA DAN JAM KERJA</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>PASAL 3</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td width="19" valign="top"><p>(1).</p></td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">Hari  Kerja adalah  5 (lima) hari dalam  seminggu dan atau disesuaikan dengan hari kerja yang berlaku sesuai  ketentuan Perusahaan.</td>
  </tr>
							<tr>
							  <td valign="top">(2).</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">Jam Kerja adalah 8 (delapan) jam kerja efektif sehari, atau 40 (empat puluh)  jam seminggu.</td>
  </tr>
							<tr>
							  <td valign="top">(3).</td>
							  <td valign="top"><p>&nbsp;</p></td>
							  <td colspan="6" valign="top">Jam  istirahat selama 1 (satu) jam setelah bekerja 4 (empat) jam terus-menerus.</td>
  </tr>
							<tr>
							  <td valign="top">(4).</td>
							  <td valign="top"><p>&nbsp;</p></td>
							  <td colspan="6" valign="top">Jam  mulai dan berakhir kerja adalah sesuai ketentuan jam kerja Perusahaan Umum  Daerah Parkir Makassar Raya.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td width="19" valign="top">&nbsp;</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td width="315">&nbsp;</td>
							  <td colspan="3">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>IZIN MENINGGALKAN PEKERJAAN</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>PASAL 4</strong></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="3">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">(1).</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top"><p>PIHAK  KEDUA dapat diberikan izin meninggalkan pekerjaan dengan pembayaran gaji/upah penuh  dalam hal sebagai berikut :</p></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">Pihak Kedua menjalankan cuti</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">a).</td>
							  <td valign="top">&nbsp;</td>
							  <td>Izin Perkawinan PIHAK KEDUA sendiri </td>
							  <td width="10">&nbsp;</td>
							  <td width="11">:</td>
							  <td width="184">12 (dua  belas) hari  kerja</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b).</td>
							  <td valign="top">&nbsp;</td>
							  <td>Cuti Bersalin PIHAK KEDUA (Wanita)</td>
							  <td>&nbsp;</td>
							  <td>:</td>
							  <td>12 (dua  belas) hari  kerja</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">c).</td>
							  <td valign="top">&nbsp;</td>
							  <td>Perkawinan anak PIHAK KEDUA</td>
							  <td>&nbsp;</td>
							  <td>:</td>
							  <td>3 (tiga) hari</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">d).</td>
							  <td valign="top">&nbsp;</td>
							  <td>Pengkhitanan / Pembabtisan anak PIHAK KEDUA</td>
							  <td>&nbsp;</td>
							  <td>:</td>
							  <td>2 (dua) hari</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">e).</td>
							  <td valign="top">&nbsp;</td>
							  <td>Istri Pihak Kedua melahirkan</td>
							  <td>&nbsp;</td>
							  <td>:</td>
							  <td>2 (dua) hari</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">f).</td>
							  <td valign="top">&nbsp;</td>
							  <td>Istri, anak, orang tua dan saudara</td>
							  <td>&nbsp;</td>
							  <td>:</td>
							  <td>7 (tujuh) hari</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td><p>PIHAK KEDUA meninggal dunia</p></td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">(2).</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">Prosedur pemberian izin tersebut ayat (1) huruf a, b, c, dan d pasal ini  diajukan selambat -lambatnya 6 (enam)   hari sebelumnya, sedang prosedur pemberian izin tersebut ayat  (1) huruf c dan f pasal ini dapat diajukan  pada hari / saat itu juga dan masing-masing izin tersebut baru dapat  dilaksanakan setelah memperoleh persetujuan dari PIHAK PERTAMA dan atau pejabat  yang ditunjuk.</td>
  </tr>
							<tr>
							  <td valign="top">(3).</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top"><p>Surat izin dimaksud ayat (1) pasal ini  diberikan/ditandatangani oleh PIHAK PERTAMA dan atau pejabat yang ditunjuk.</p></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>CUTI</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>PASAL 5</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">Cuti dimaksud Pasal 4 ayat (1) huruf a adalah:</td>
  </tr>
							<tr>
							  <td valign="top">1.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">Cuti tahunan dapat diberikan apabila<strong> </strong>telah bekerja selama 12 (dua belas)  bulan berturut-turut dengan ketentuan bagi PIHAK KEDUA (WANITA)  tidak pernah  cuti bersalin ;</td>
  </tr>
							<tr>
							  <td valign="top">2.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">Cuti bersalin dapat diberikan kepada PIHAK KEDUA (WANITA)  untuk persalinan anak pertama dan kedua selama 45 (empat puluh lima) hari kerja  sebelum dan sesudah persalinan terhitung sejak pertama diangkat berdasarkan  Surat Keputusan Direksi PERUMDA Parkir Makassar Raya sebagai Tenaga Kontrak waktu  terbatas ;</td>
  </tr>
							<tr>
							  <td valign="top">3.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">Cuti sakit hanya dapat diberikan kepada PIHAK KEDUA  dengan syarat :</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">a.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Ada pemberitahuan kepada  atasannya baik secara tertulis maupun dengan lisan apabila sakit selama 1  (satu) atau 2 (dua) hari;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Apabila sakit lebih dari 2 (dua) hari s/d 14 (empat  belas) hari, PIHAK KEDUA mengajukan permintaan cuti sakit secara tertulis  kepada PIHAK PERTAMA dengan melampirkan Surat Keterangan Dokter. </td>
  </tr>
  
							<tr>
							  <td valign="top">4.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">Penandatanganan Surat Cuti dimaksud ayat (1) dan ayat  (2) pasal ini dilakukan oleh PIHAK PERTAMA atau Pejabat yang  ditunjuk.</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
  </table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
					<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>SAKIT DAN PENGOBATAN</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>PASAL 6</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td width="19" valign="top"><p>(1).</p></td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">PIHAK  PERTAMA dapat memberikan jaminan pemeriksaan dokter dan pengobatan kepada PIHAK  KEDUA melalui Dokter yang ditunjuk atau puskesmas-puskesmas yang ditetapkan  oleh PIHAK PERTAMA ;</td>
  </tr>
							<tr>
							  <td valign="top">(2).</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">PIHAK  KEDUA yang sakit wajib menyampaikan kepada PIHAK PERTAMA dan atau atasan  langsungnya, baik secara tertulis atau lisan pada saat hari kerja pertama tidak  masuk kerja selanjutnya pada hari kedua dan berikutnya dikuatkan dengan Surat  Keterangan Dokter.</td>
  </tr>
							<tr>
							  <td valign="top">(3).</td>
							  <td valign="top"><p>&nbsp;</p></td>
							  <td colspan="6" valign="top">PIHAK  KEDUA yang sakit tetapi tanpa pemberitahuan sebagairnana dimaksud ayat (1) dan  ayat (2) pasal ini dianggap lalai masuk kerja,</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td width="19" valign="top">&nbsp;</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td width="315">&nbsp;</td>
							  <td colspan="3">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>PERALATAN KERJA</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>PASAL 7</strong></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="3">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">(1).</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">PIHAK  PERTAMA dapat memberikan peralatan kerja dan alat keselamatan kerja kepada  PIHAK KEDUA yang disesuaikan dengan kondisi dan sifat pekerjaan ;</td>
  </tr>
							<tr>
							  <td valign="top">(2).</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">PIHAK  KEDUA wajib menjaga dan memelihara keselamatan dan keamanan peralatan kerja  tersebut sebagai tanggung jawab.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td width="10">&nbsp;</td>
							  <td width="11">&nbsp;</td>
							  <td width="184">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>DISIPLIN DAN TATA TERTIB KERJA</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>PASAL 8</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">1.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">PIHAK KEDUA tunduk dan taat kepada Peraturan Perundang-Undangan yang  berlaku ;</td>
  </tr>
							<tr>
							  <td valign="top">2.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">PIHAK KEDUA dalam menjalankan tugasnya sebagai tenaga Kontrak Waktu  terbatas (Tenaga Pendukung) mempunyai kewajiban yang dilaksanakan sebagai  berikut :</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">a.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Setia dan taat sepenuhnya  kepada Pancasila, Undang-Undang Dasar 1945, Negara dan Pemerintah;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Mengutamakan  kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta  menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan  golongan diri sendiri, atau pihak lain ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">c.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menjunjung tinggi  kehormatan, martabat Negara dan   Pemerintah ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">d.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menyimpan rahasia  Negara dengan sebaik-baiknya ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">e.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Memperhatikan dan  melaksanakan segala ketentuan Pemerintah baik yang langsung menyangkut tugas  kedinasannya maupun yang berlaku secara umum;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">f.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Melaksanakan tugas  kedinasan dengan sebaik-baiknya dan penuh pengabdian, kesadaran dan tanggung  jawab ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">g.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Bekerja dengan  jujur, tertib, cermat dan bersemangat untuk kepentingan Negara ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">h.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Memelihara dan  meningkatkan keutuhan, kekompakan dan persatuan ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">i.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Segera melaporkan  kepada atasannya apabaila mengetahui ada hal yang dapat membahayakan atau  merugikan Negara/Pemerintah, terutama di bidang keamanan, keuangan dan materil  ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">j.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Mentaati ketentuan  jam kerja ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">k.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menciptakan dan memelihara  suasana kerja yang baik ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">l.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menggunakan dan  memelihara barang-barang milik Negara dengan sebaik-baiknya ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">m.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Memberikan  pelayanan dengan sebaik-baiknya kepada masyarakat menurut bidang tugasnya  masing-masing ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">n.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Berpakaian rapi dan  sopan serta bersikap dan bertingkah laku sopan santun terhadap masyarakat dan  terhadap atasan ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">o.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Hormat menghormati  antara sesama warga negara pemeluk agama/kepercayaan terhadap Tuhan Yang Maha  Esa, yang berlainan ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">p.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menjadi teladan  sebagai warganegara yang baik dalam masyarakat ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">q.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Mentaati segala  peraturan perundang-undangan dan peraturan kedinasan yang berlaku;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">r.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Mentaati perintah  kedinasan dari atasan yang berwenang.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
  </table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
					<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td width="19" valign="top">3.</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">PIHAK KEDUA dilarang melakukan hal-hal berupa :</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="19" valign="top">a.</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td colspan="4">Melakukan hal-hal  yang dapat menurunkan kehormatan atau martabat Negara dan Pemerintah ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menyalahgunakan  wewenangnya ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">c.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Tanpa izin  Pemerintah Kota Makassar menjadi Pegawai atau bekerja di tempat lain ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">d.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Melakukan  pernikahan kedua, ketiga dan bagi Wanita tidak menjadi atau berkedudukan sebagai  Istri kedua, ketiga dan seterusnya ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">e.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menyalahgunakan  barang-barang, uang atau surat-surat berharga milik Negara &amp; Pemerintah ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">f.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Memiliki, menjual,  membeli, menggadaikan, menyewakan atau meminjamkan barang-barang, dokumen atau  surat-surat berharga milik Negara dan Pemerintah secara tidah sah;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">g.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Melakukan kegiatan  bersama dengan atasan, teman sejawat, bawahan atau orang lain dalam maupun  diluar lingkungan kerjanya dengan tujuan untuk keuntungan pribadi, golongan  atau pihak lain yang secara langsung atau tidak langsung merugikan Negara ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">h.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menerima hadiah  atau sesuatu pemberian berupa apa saja dari siapapun juga yang diketahui atau  patut dapat diduga bahwa pemberian itu bersangkutan atau mungkin bersangkutan  dengan pekerjaan Pegawai ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">i.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Memasuki  tempat-tempat yang dapat mencermarkan kehormatan, kecuali untuk kepentingan  tugas ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">j.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Melakukan suatu  tindakan atau segaja tidak melakukan suatu tindakan yang dapat berakibat  menghalangi atau mempersulit salah  satu  pihak yang dilayaninya sehingga mengakibatkan kerugian bagi pihak yang dilayani  ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">k.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Menghalangi  berjalannya tugas kedinasan ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">l.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Membocorkan dan  atau memanfaatkan rahasia Negara yang diketahui karena kedudukan jabatan untuk  kepentingan pribadi, golongan atau pihak lain ;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">m.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Bertindak selaku  perantara bagi sesuatu pengusaha atau golongan untuk mendapatkan pekerjaan atau  pesanan dari kantor/instansi Pemerintah ;</td>
  </tr>
							<tr>
							  <td valign="top">4.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top">PIHAK PERTAMA dan atau pejabat yang ditunjuk memberikan peringatan jika  PIHAK KEDUA lalai apel kerja pagi/siang dan atau tidak masuk kerja tanpa  keterangan yang dibuktikan sesuai absensi bulanan yang dilaporkan.</td>
  </tr>
							<tr>
							  <td valign="top">5.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="6" valign="top"><p>PIHAK KEDUA wajib menjaga tertib administrasi ditempat  kerjanya dan kerahasiaan pekerjaan yang dibebankan kepadanya,</p></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>KESALAHAN RINGAN</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top" style="text-align: center"><strong>PASAL 9</strong></td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top"><p>Yang termasuk kesalahan ringan adalah :</p></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">a.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Terlambat masuk  kerja dari jam kerja yang telah ditetapkan</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Pulang  sebelum jam kerja berakhir</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">c.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Tidak masuk kerja  tanpa izin dari atasan</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">d.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Tidak  melaksanakan perintah atasan.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">e.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="4">Tidak masuk kantor  selama 10 (sepuluh) hari kerja berturut-turut dalam bulan berjalan tanpa  keterangan</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="315">&nbsp;</td>
							  <td width="10">&nbsp;</td>
							  <td width="11">&nbsp;</td>
							  <td width="184">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="8" valign="top">&nbsp;</td>
  </tr>
  </table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
					<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td colspan="5" valign="top" style="text-align: center"><strong>KESALAHAN BERAT</strong></td>
  </tr>
							<tr>
							  <td colspan="5" valign="top" style="text-align: center"><strong>PASAL 10</strong></td>
  </tr>
							<tr>
							  <td colspan="5" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="5" valign="top"><p>Yang termasuk kesalahan berat adalah :</p></td>
  </tr>
							<tr>
							  <td width="19" valign="top">&nbsp;</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td width="19" valign="top">a.</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td>Pada saat  perjanjian kerja diadakan memberikan keterangan palsu atau yang dipalsukan</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Mabuk, pemakai obat  bius atau narkotika baik ditempat kerja maupun diluar</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">c.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Melakukan tindakan  kejahatan, misalnya : mencuri, menggelapkan, menipu, pemalsuan, memperdagangkan barang terlarang baik dalam lingkungan  kerja maupun diluar lingkungan kerja</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">d.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Penganiayaan,  menghina secara kasar atau mengancam Atasan / Pimpinan dan teman sekerja</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">e.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Membujuk Atasan /  Pimpinan atau teman sekerja untuk melakukan sesuatu yang bertentangan dengan  hukum atau kesusilaan</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">f.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Dengan sengaja atau  ceroboh merusak, merugikan atau membiarkannya dalam keadaan rusak peralatan  kerja milik PIHAK PERTAMA</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">g.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Mencemarkan nama  baik atau membocorkan rahasia PIHAK PERTAMA termasuk pimpinan / atasan dan  keluarganya, teman sekerjanya dalam keadaan bahaya</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">h.</td>
							  <td valign="top">&nbsp;</td>
							  <td><p>Membocorkan rahasia PIHAK PERTAMA atau mencermarkan nama  baik Pimpinan / atasan dan  keluarganya  yang seharusnya dirahasiakan, kecuali untuk kepentingan Negara</p></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">i.</td>
							  <td valign="top">&nbsp;</td>
							  <td><p>Melakukan suatu perbuatan <em>I </em>kegiatan  yang cenderung menghambat kelancaran pekerjaan.</p></td>
  </tr>
							<tr>
							  <td colspan="5" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="5" valign="top" style="text-align: center"><strong>SANKSI KESALAHAN RINGAN</strong></td>
  </tr>
							<tr>
							  <td colspan="5" valign="top" style="text-align: center"><strong>PASAL 11</strong></td>
  </tr>
							<tr>
							  <td colspan="5" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="5" valign="top"><p>PIHAK KEDUA dikenakan sanksi :</p></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">a.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Berupa  teguran lisan oleh atasan langsungnya apabila melakukan kesalahan sebagaimana dalam  Pasal 9 Huruf. a, b, c, d dan e, Surat Perjanjian ini.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Bagi  yang tidak masuk kantor selama 10 (sepuluh) hari berturut-turut tanpa  keterangan, gaji / upah tidak dibayarkan dalam bulan berjalan. </td>
  </tr>
							<tr>
							  <td colspan="5" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="5" valign="top" style="text-align: center"><strong>PEMUTUSAN HUBUNGAN KERJA</strong></td>
  </tr>
							<tr>
							  <td colspan="5" valign="top" style="text-align: center"><strong>PASAL 12</strong></td>
  </tr>
							<tr>
							  <td colspan="5" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="5" valign="top"><p>PIHAK  PERTAMA akan memutuskan hubungan kerja kepada PIHAK KEDUA secara sepihak tanpa  menuntut uang pesangon, apabila ;</p></td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">a.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Jangka  waktu yang telah ditentukan dalam Perjanjian Kerja berakhir dan atau  PIHAK KEDUA tidak mendaftar ulang sesuai jadwal  yang telah ditetapkan oleh PIHAK PERTAMA.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">b.</td>
							  <td valign="top">&nbsp;</td>
							  <td>PIHAK  PERTAMA tidak lagi membutuhkan tenaga pendukung (tenaga kontrak)</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">c.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Pengunduran  diri atas permintaan PIHAK KEDUA sendiri</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">d.</td>
							  <td valign="top">&nbsp;</td>
							  <td>PIHAK  KEDUA meninggal dunia</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">e.</td>
							  <td valign="top">&nbsp;</td>
							  <td>PIHAK  KEDUA telah terangkat menjadi CPNS atau telah bekerja sebagai Pegawai pada  pihak lain menggunakan jam kerja sesuai maksud Surat Perjanjian ini</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">f.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Kesehatan  PIHAK KEDUA tidak memungkinkan lagi melakukan pekerjaannya</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">g.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Melakukan  pelanggaran / kesalahan sebagaimana diatur dalam Pasal 8, 9 dan 10 Surat Perjanjian  ini</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">h.</td>
							  <td valign="top">&nbsp;</td>
							  <td>PIHAK  KEDUA tertangkap tangan dan atan nyata-nyata telah melakukan / turut serta  dalam suatu perbuatan kejahatan dan pelanggaran sebagaimana diatur dalam Kitab  Undang Undang Hukum Pidana (KUHP)</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">i.</td>
							  <td valign="top">&nbsp;</td>
							  <td>Jika  terjadi. kelalaian PIHAK KEDUA dalam mentaati ketentuan jam kerja dimaksud  Pasal 3 ayat (4) sesuai. dengan laporan rekap Absensi bulanan dengan jumlah  ketidakhadiran Tanpa Keterangan (TK) sekurang-kurangnya 30 (tiga puluh) hari  kerja secara berturut-turut tanpa keterangan (TK) terhitung sejak  penandatanganan Surat Perjanjian ini yang dibuktikan dengan laporan rekap absen  bulanan</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">j.</td>
							  <td valign="top">&nbsp;</td>
							  <td>PIHAK  PERTAMA menemukan dan atau menerima laporan yang dapat dipertanggungjawabkan  bahwa PIHAK KEDUA menyerahkan pekerjaan atau tugasnya kepada orang lain sebagai  pengganti, maka perbuatan ini adalah pelanggaran</td>
  </tr>
							<tr>
							  <td colspan="5" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="5" valign="top">&nbsp;</td>
  </tr>
  </table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
						
					<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:center; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td colspan="12" valign="top" style="text-align: center"><strong>PENUTUP</strong></td>
  </tr>
							<tr>
							  <td colspan="12" valign="top" style="text-align: center"><strong>PASAL 13</strong></td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td width="14" valign="top" style="text-align: left">1.</td>
							  <td width="2" valign="top">&nbsp;</td>
							  <td width="534" colspan="10" valign="top" style="text-align: left">Perjanjian Kontrak ini bukan  merupakan jaminan akan diangkat menjadi Calon Pegawai Organik PERUMDA Parkir  Makassar Raya </td>
  </tr>
							<tr>
							  <td valign="top" style="text-align: left">2.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="10" valign="top" style="text-align: left">Apabila terjadi perselisihan  antara kedua belah pihak, maka dapat diselesaikan secara kekeluargaan dan  musyawarah oleh atasan langsung secara berjenjang kepada <strong>PIHAK PERTAMA .</strong></td>
  </tr>
							<tr>
							  <td valign="top" style="text-align: left">3.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="10" valign="top" style="text-align: left">Segala biaya yang  dikeluarkan sehubungan dengan pelaksanaan Surat Perjanjian ini dibebankan pada  Anggaran Belanja Perusahaan Umum Daerah Parkir Makassar Raya Tahun 2022.</td>
  </tr>
							<tr>
							  <td valign="top" style="text-align: left">4.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="10" valign="top" style="text-align: left">Surat Perjanjian ini dibuat  dengan sukarela tanpa paksaan dari siapapun, setelah membaca dan memahami  isinya kemudian ditandatangani oleh kedua belah pihak.</td>
  </tr>
							<tr>
							  <td valign="top" style="text-align: left">5.</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="10" valign="top" style="text-align: left">Surat Perjanjian ini dibuat diatas materai,  ditandatangani oleh Pihak Kedua sebagai bukti sah yang mempunyai kekuatan hukum  atas Surat Perjanjian ini.</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
</table>
  <br />
  <table align="center" border="0" cellpadding="1" style="width: 600px; text-align:center; line-height:1; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td width="14" valign="top">&nbsp;</td>
							  <td width="2" valign="top">&nbsp;</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td width="4" valign="top">&nbsp;</td>
							  <td colspan="3" valign="top" style="text-align: center"><strong>PIHAK PERTAMA</strong></td>
							  <td width="1" valign="top">&nbsp;</td>
							  <td width="12" valign="top">&nbsp;</td>
							  <td width="197" valign="top"><strong>PIHAK KEDUA</strong></td>
							  <td width="18" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="3" valign="top" style="text-align: center"><strong>DIREKSI PERUMDA PARKIR MAKASSAR RAYA</strong></td>
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
							  <td colspan="3" valign="top" style="text-align: center"><strong>KOTA MAKASSAR</strong></td>
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
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="3" valign="top"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
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
							  <td width="128" valign="top">&nbsp;</td>
							  <td width="17" valign="top">&nbsp;</td>
							  <td width="149" valign="top">&nbsp;</td>
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
							  <td colspan="3" valign="top"><p align="center"><strong><u>YULIANTI TOMU, SE</u></strong></p></td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"><strong>YUNUS TULAK, S.IP</strong></td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td colspan="3" valign="top" >Direktur Utama</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
    </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
    </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
    </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
    </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
    </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
  <tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
  <tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
  <tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
  <tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
  <tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
  <tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
  <tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="11" valign="top"><hr /></td>
  </tr>
							<tr>
							  <td colspan="11" valign="top"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
							<tr>
							  <td colspan="12" valign="top">&nbsp;</td>
  </tr>
  
  </table>
						
						
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>

					
				</div>
								</div>
								</div>
								</div>
					  
  
													<!--end: Form Wizard Step 2-->

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
														<div class="kt-form__section kt-form__section--first">

											<div class="row">
								
										
										<div class="col-xl-4">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pasal 7</div>
										 <div class="kt-portlet__body">
										 <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Judul Pasal :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="PERALATAN KERJA">
                        </div>
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label></label>
						  <div id="kt_repeater_3">
												<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_5">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">#</td>
																								  <td width="10%" bgcolor="#f7fcff">Uraian</td>
																								   <td width="1%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">1</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="PIHAK PERTAMA dapat memberikan peralatan kerja dan alat keselamatan kerja kepada PIHAK KEDUA yang disesuaikan dengan kondisi dan sifat pekerjaan ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="PIHAK KEDUA wajib menjaga dan memelihara keselamatan dan keamanan peralatan kerja tersebut sebagai tanggung jawab."></textarea></td>
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
					  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						
						
						
						
                      </div>
					  
					  
                      </div>
                      </div>
					  
							<!--end:: Portlet-->
							

  <div class="col-xl-4">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pasal 8</div>
										 <div class="kt-portlet__body">
										 <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Judul Pasal :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="DISIPLIN DAN TATA TERTIB KERJA">
                        </div>
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label></label>
						  <div id="kt_repeater_4">
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
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="PIHAK KEDUA tunduk dan taat kepada Peraturan Perundang-Undangan yang berlaku ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="PIHAK KEDUA dalam menjalankan tugasnya sebagai tenaga Kontrak Waktu terbatas (Tenaga Pendukung) mempunyai kewajiban yang dilaksanakan sebagai berikut :"></textarea></td>
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
																								  <td style="text-align:center">a</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Setia dan taat sepenuhnya kepada Pancasila, Undang-Undang Dasar 1945, Negara dan Pemerintah;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Mengutamakan kepentingan Negara diatas kepentingan golongan atau diri sendiri, serta menghindarkan segala sesuatu yang mendesak kepentingan Negera oleh kepentingan golongan diri sendiri, atau pihak lain ;"></textarea></td>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pasal 3</div>
										 <div class="kt-portlet__body">
										 <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Judul Pasal :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="HARI KERJA DAN JAM KERJA">
                        </div>
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Hari Kerja adalah  5 (lima) hari dalam seminggu dan atau disesuaikan dengan hari kerja yang berlaku sesuai ketentuan Perusahaan."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Jam Kerja adalah 8 (delapan) jam kerja efektif sehari, atau 40 (empat puluh) jam seminggu."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Jam istirahat selama 1 (satu) jam setelah bekerja 4 (empat) jam terus-menerus."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">4</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Jam mulai dan berakhir kerja adalah sesuai ketentuan jam kerja Perusahaan Umum Daerah Parkir Makassar Raya."></textarea></td>
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
                      </div>
					  <div class="row">
								
										
										<div class="col-xl-4">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pasal 4</div>
										 <div class="kt-portlet__body">
										 <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Judul Pasal :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="IZIN MENINGGALKAN PEKERJAAN">
                        </div>
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="PIHAK KEDUA dapat diberikan izin meninggalkan pekerjaan dengan pembayaran gaji/upah penuh dalam hal sebagai berikut :"></textarea></td>
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
																						<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_repeater_5">
																								<thead>
																								<tr style="text-align:center">
																								  <td width="1%" bgcolor="#f7fcff">#</td>
																								  <td width="10%" bgcolor="#f7fcff">Uraian</td>
																								  <td width="3%" colspan="2" bgcolor="#f7fcff" style="text-align:center">Quota</td>
																								   <td width="1%" bgcolor="#f7fcff" style="text-align:center">Aksi</td>
																								  </tr>
																								<thead>
																									<tbody data-repeater-list="">
																								<tr data-repeater-item>
																								  <td style="text-align:center">a</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Izin Perkawinan PIHAK KEDUA sendiri"></textarea></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
																									<td style="text-align:center">Hari Kerja</td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Cuti Bersalin PIHAK KEDUA (Wanita)"></textarea></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="12"></td>
																									<td style="text-align:center">Hari Kerja</td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">c</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Perkawinan anak PIHAK KEDUA"></textarea></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="3"></td>
																									<td style="text-align:center">Hari Kerja</td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">d</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Pengkhitanan / Pembabtisan anak PIHAK KEDUA"></textarea></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="2"></td>
																									<td style="text-align:center">Hari Kerja</td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">e</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="1" placeholder="Istri Pihak Kedua melahirkan"></textarea></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="2"></td>
																									<td style="text-align:center">Hari Kerja</td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">f</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Istri, anak, orang tua dan saudara PIHAK KEDUA meninggal dunia"></textarea></td>
																									<td style="text-align:center"><input id="kt_touchspin_4" type="text" class="form-control form-control-sm bootstrap-touchspin-vertical-btn" value="" name="demo1" placeholder="7"></td>
																									<td style="text-align:center">Hari Kerja</td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
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
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="7" placeholder="Prosedur pemberian izin tersebut ayat (1) huruf a, b, c, dan d pasal ini diajukan selambat -lambatnya 6 (enam)  hari sebelumnya, sedang prosedur pemberian izin tersebut ayat  (1) huruf c dan f pasal ini dapat diajukan pada hari / saat itu juga dan masing-masing izin tersebut baru dapat dilaksanakan setelah memperoleh persetujuan dari PIHAK PERTAMA dan atau pejabat yang ditunjuk."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Surat izin dimaksud ayat (1) pasal ini diberikan/ditandatangani oleh PIHAK PERTAMA dan atau pejabat yang ditunjuk."></textarea></td>
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
					  
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						
						
						
                      </div>
					  
					  
                      </div>
                      </div>
					  
							<!--end:: Portlet-->
							

  <div class="col-xl-4">
									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pasal 5</div>
										 <div class="kt-portlet__body">
										 <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Judul Pasal :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="CUTI">
                        </div>
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                      <div class="form-group row">
                       <div class="col-lg-12">
                          <label></label>
						  <div id="kt_repeater_4">
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
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="1" placeholder="Cuti dimaksud Pasal 4 ayat (1) huruf a adalah :"></textarea></td>
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
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Cuti tahunan dapat diberikan apabila telah bekerja selama 12 (dua belas) bulan berturut-turut dengan ketentuan bagi PIHAK KEDUA (WANITA)  tidak pernah cuti bersalin ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="6" placeholder="Cuti bersalin dapat diberikan kepada PIHAK KEDUA (WANITA) untuk persalinan anak pertama dan kedua selama 45 (empat puluh lima) hari kerja sebelum dan sesudah persalinan terhitung sejak pertama diangkat berdasarkan Surat Keputusan Direksi PERUMDA Parkir Makassar Raya sebagai Tenaga Kontrak waktu terbatas ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="2" placeholder="Cuti sakit hanya dapat diberikan kepada PIHAK KEDUA dengan syarat :"></textarea></td>
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
																								  <td style="text-align:center">a</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Ada pemberitahuan kepada atasannya baik secara tertulis maupun dengan lisan apabila sakit selama 1 (satu) atau 2 (dua) hari;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
                                                                                                    
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">b</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="Apabila sakit lebih dari 2 (dua) hari s/d 14 (empat belas) hari, PIHAK KEDUA mengajukan permintaan cuti sakit secara tertulis kepada PIHAK PERTAMA dengan melampirkan Surat Keterangan Dokter."></textarea></td>
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
																								  <td style="text-align:center">4</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Penandatanganan Surat Cuti dimaksud ayat (1) dan ayat (2) pasal ini dilakukan oleh PIHAK PERTAMA atau Pejabat yang ditunjuk."></textarea></td>
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
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Pasal 6</div>
										 <div class="kt-portlet__body">
										 <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Judul Pasal :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="SAKIT DAN PENGOBATAN">
                        </div>
						
                        </div>
						 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
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
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="4" placeholder="PIHAK PERTAMA dapat memberikan jaminan pemeriksaan dokter dan pengobatan kepada PIHAK KEDUA melalui Dokter yang ditunjuk atau puskesmas-puskesmas yang ditetapkan oleh PIHAK PERTAMA ;"></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">2</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="5" placeholder="PIHAK KEDUA yang sakit wajib menyampaikan kepada PIHAK PERTAMA dan atau atasan langsungnya, baik secara tertulis atau lisan pada saat hari kerja pertama tidak masuk kerja selanjutnya pada hari kedua dan berikutnya dikuatkan dengan Surat Keterangan Dokter."></textarea></td>
																									<td style="text-align:center"><a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="dropdown"><i class="fa flaticon2-trash"></i></a></td>
                                            
																								</tr>
																								<tr data-repeater-item>
																								  <td style="text-align:center">3</td>
																									<td style="text-align:left"><textarea class="form-control" id="exampleTextarea" rows="3" placeholder="PIHAK KEDUA yang sakit tetapi tanpa pemberitahuan sebagairnana dimaksud ayat (1) dan ayat (2) pasal ini dianggap lalai masuk kerja,"></textarea></td>
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
							  <td>Undang-undang Nomor S Tahun 1962 tentang Perusahaan Daerah (Lembaran Negara Tahun 1962 No.10, Tambahan Lembaran Negara Nomor 2787)
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
							  <td>Undang-Undang Nomor  22  Tahun  1999  Tentang  Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 60, Tambahan Lenibaran Negara Republik Indonesia Nomor 3839)</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">4.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah Nomor 51 Tahun 1971 Tentang Perubahan Batas-Batas Daerah Kota Madya Makassar dan Kabupaten Gowa ,Maros dan Pangkajene Kepulauan dalam lingkungan Propinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia tahun 1971 Nomor 65, Tambahan Lembaran Negara Republik Indonesia Nomor 2970)</td>
  </tr>
							<tr>
							  <td colspan="6" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
  </tr>
  </table>
  <img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
  <div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
							<tr>
							  <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">5.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Pemerintah No. 86 tahun 1999 Tentang Perubahan Kota Madya Ujung Pandang menjadi Kota Makassar dalam Wilayah Propinsi Sulawesi Selatan (Lembaran Negara Republik Indonesia Tahun 1999 Nomor 193)</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">6.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Nomor 5 Tentang Tentang Pembentukan Perusahaan Umum Daerah Parkir Makassar Raya ( Lembaran Daerah Kota Makassar Nomor 19 Tahun 1999 Seri D Nomor 6)</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">7.</td>
							  <td>&nbsp;</td>
							  <td>Peraturan Daerah Makassar No. 10 Tahun 2000 tentang Ketentuan Pokok Badan Pengawas, Direksi dan Kepegawaian Perusahaan Umum Daerah Parkir Makassar Raya. (Lembaran daerah nomor 2 tahun 2000 seri D Nomor 2)</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">8.</td>
							  <td>&nbsp;</td>
							  <td>Keputusan Walikota Makassar No.736/S.Kep/137/2000 Tentang Penugasan Pengelolaan Perparkiran dalam Wilayah Kota Makassar kepada Perusahaan Umum Daerah Parkir Makassar Raya.</td>
  </tr>
							<tr>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">9.</td>
							  <td>&nbsp;</td>
							  <td>Keputusan Walikota Makassar No.7040 tahun 1999 Tentang Struktur Organisasi dan tata kerja Perusahaan Daerah Parkir Makassar Raya Kota Makassar (Lembaran Daerah Kota Makassar Nomor 24 Tahun 1999 seri D Nomor 11).</td>
  </tr>
							
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>
							<tr>
								<td valign="top">Memperhatikan</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							  <td>&nbsp;</td>
								<td valign="middle">Persetujuan Dewan Pengawas Perusahaan Umum Daerah Parkir Makassar Raya</td>
							</tr>
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>
						</table>
						<img src="../assets/img/footer.png" style="width:700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-bottom:20px" />
					</div>
						<div class="bg-white w-50 ml-auto mr-auto">
						<img src="../assets/img/header.png" style="width: 700px; display:block; margin-left:auto;margin-right:auto;margin-bottom:20px;padding-top:20px;" />
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:right; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
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
							  <td colspan="4" style="text-align: left"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem"><b>KEPUTUSAN DIREKSI PERUSAHAAN DAERAH PARKIR MAKASSAR RAYA TENTANG PENGANGKATAN PEGAWAI PERUSAHAAN UMUM DAERAH PARKIR MAKASSAR RAYA.</b></td>
  </tr>
							<tr>
							  <td colspan="9" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td valign="top" style="text-align: left">PERTAMA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top"></td>
							  <td>&nbsp;</td>
							  <td colspan="4" style="text-align: left">Calon pegawai yang namanya tersebut pada lampiran surat keputusan ini dalam lajur 2 (dua) diangkat menjadi Pegawai Perusahaan Umum Daerah Parkir Makassar Raya, dalam golongsn/ruang pada lajur  7 (tujuh)  dan  diberikan Gaji pokok sebagaimana tersebut dalam lajur 9 (sembilan) terhitung mulai tanggal tertera dalam lajur 10 (sepuluh) serta penghasilan lainnya sesuai ketentuan yang berlaku.</td>
  </tr>
							<tr>
							  <td valign="top" style="text-align: left">KEDUA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td width="10" valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4" style="text-align: left">Surat keputusan ini berlaku sejak tanggal ditetapkannya dan bilamana terdapat kekeliruan dalam Keputusan ini, maka akan dilakukan perbaikan sebagaimana mestinya.</td>
  </tr>
							<tr>
							  <td valign="top" style="text-align: left">KETIGA</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td valign="top">&nbsp;</td>
							  <td>&nbsp;</td>
							  <td colspan="4" style="text-align: left">Keputusan ini disampaikan kepada yang bersangkutan untuk dipergunakan seperlunya.</td>
  </tr>
							
							<tr>
							  <td colspan="9" valign="top">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="6" rowspan="9" valign="top"><img src="../assets/img/paraf.png" width="50" height="50" /></td>
							  <td width="84" style="text-align: left">Ditetapkan di </td>
							  <td width="8" style="text-align: left">:</td>
							  <td width="130" style="text-align: left">Makassar</td>
  </tr>
							<tr>
							  <td style="text-align: left"><u>Pada Tanggal</u></td>
							  <td style="text-align: left"><u>:</u></td>
							  <td style="text-align: left"><u>30 Desember 2022</u></td>
  </tr>
							<tr>
							  <td colspan="3" style="text-align: left">Direksi Perusahaan Umum Daerah </td>
  </tr>
							<tr>
							  <td colspan="3" style="text-align: left">Parkir Makassar Raya</td>
  </tr>
							<tr>
							  <td colspan="3" style="text-align: left">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="3" style="text-align: left"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>>
							<tr>
							  <td colspan="3" style="text-align: left">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="3" style="text-align: left"><span style="font-family: Bookman Old Style; font-size: 12px; margin-bottom:3rem"><u><b>Yulianti Tomu, SE</b></u></td>
  </tr>
							<tr>
							  <td colspan="3" style="text-align: left">Direktur Utama</td>
  </tr>
							<tr>
							  <td colspan="9">&nbsp;</td>
  </tr>
							<tr>
							  <td colspan="9" style="text-align: left"><u>Tembusan disampaikan Kepada Yth.:</u></td>
  </tr>
							<tr>
							  <td colspan="9" style="text-align: left">1. Bapak Walikota Makassar di Makassar;</td>
  </tr>
							<tr>
							  <td colspan="9" style="text-align: left">2. Dewan Pengawas Perusahaan Umum Daerah Parkir Makassar Raya</td>
  </tr>
							<tr>
								<td colspan="9" style="text-align: left">3.	Pertinggal.</td>
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
							  <td>80.l-Peg/001/VIII/2022</td>
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
						<table align="center" border="0" cellpadding="1" style="width: 600px; text-align:right; line-height:1.5; font-family: Bookman Old Style; font-size: 12px;">
  <tr>
							  <td colspan="5">&nbsp;</td>
  </tr>
<tr>
    <td width="24" valign="center" style="text-align: right">&nbsp;</td>
    <td width="331" rowspan="3" valign="top"><img src="../assets/img/paraf.png" width="50" height="50" /></td>
    <td width="90" valign="center" style="text-align: left">Ditetapkan di</td>
    <td width="7" valign="center" style="text-align: left">:</td>
    <td width="126" valign="center" style="text-align: left">Makassar</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center" style="text-align: left">Pada Tanggal </td>
    <td valign="center" style="text-align: left">:</td>
    <td valign="center" style="text-align: left">29 November 2022</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td colspan="3" valign="center" style="text-align: left">PERUMDA Parkir Makassar Raya</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center" style="text-align: left"><img src="../assets/img/qrcode.jpg" width="75" height="75" /></td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center">&nbsp;</td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center" style="text-align: left"><u><b>Yulianti Tomu, SE</b></u></td>
  </tr>
  <tr>
    <td valign="center" style="text-align: right">&nbsp;</td>
    <td valign="center">&nbsp;</td>
    <td colspan="3" valign="center" style="text-align: left">Direktur Utama</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" valign="center" style="text-align: right">&nbsp;</td>
  </tr>
  <tr>
							  <td colspan="5"><hr /></td>
  </tr>
							<tr>
							  <td colspan="5"><span style="text-align:justify; line-height:1.5; font-family: Bookman Old Style; font-size: 10px;"><i>Sesuai dengan ketentuan yang berlaku, Perusahaan Umum Daerah Parkir Makassar Raya mengatur bahwa surat ini telah ditandatangani dan diverifikasi secara elektronik, sehingga tidak diperlukan tanda tangan basah pada Surat ini</i></span></td>
  </tr>
							<tr>
							  <td colspan="5">&nbsp;</td>
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
