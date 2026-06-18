<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->

<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Dashboard

									</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Accounting </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>

							</div>
						</div>

							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
								<div class="show-large-tb" id="onboarding-container" style="margin-bottom:-9px">
            <div class="onboarding-card" id="onboarding-card" style="display:block">
              <div class="tab-container">
                <div class="tab">
                  <button class="tablinks active" id="defaultOpen" name="sales-invoice">
                    <span class="checked-flag">
                      <img class="icon" src="../assets/img/files/check.svg">
                    </span>
                    <span class="text-tab">
                      Memulai membuat invoice
                    </span>
                  </button>
                  <button class="tablinks" name="manage-expense">
                    <span class="checked-flag">
                    <img class="icon" src="../assets/img/files/check.svg">
                    </span>
                    <span class="text-tab">
                      Mengatur Pengeluaran
                    </span>
                  </button>
                  <button class="tablinks" name="view-reports">
                    <span class="checked-flag">
                      <img class="icon" src="../assets/img/files/check.svg">
                    </span>
                    <span class="text-tab">
                      Melihat laporan
                    </span>
                  </button>
                  <button class="tablinks" name="connect-bank">
                    <span class="checked-flag">
                      <img class="icon" src="../assets/img/files/check.svg">
                    </span>
                    <span class="text-tab">
                      Hubungkan Bank Anda
                    </span>
                  </button>
                  <button class="tablinks" name="advance-setup">
                    <span class="checked-flag">
                      <img class="icon" src="../assets/img/files/upload.svg" style="">
                    </span>
                    <span class="text-tab">
                      Pengaturan Lebih Lanjut
                    </span>
                  </button>
                </div>
              </div>
              <div class="content-container">
                <div class="text-right dont-show-onboarding-small">
                  <a class="dont-show-onboarding" data-remote="true" rel="nofollow" data-method="post" href="/dashboard/dont_show_onboarding"><small class="underline">Jangan tampilkan lagi</small>
                  </a></div>
                <div class="tabcontent" id="sales-invoice">
                  <table class="table" id="manage-invoice-table">
                    <tbody>
                      <tr>
                        <td>
                          <img class="icon-img unfilled-img" id="invoice-1" src="../assets/img/files/file-check.svg" style="width:90px">
                        </td>
                        <td>
                          <img class="icon-img unfilled-img" id="invoice-2" src="../assets/img/files/archive.svg" style="width:90px;">
                        </td>
                        <td>
                          <img class="icon-img unfilled-img" id="invoice-3" src="../assets/img/files/cloud-computing.svg" style="width:75px;">
                        </td>
                      </tr>
                      <tr>
                        <td class="text-label">
                          Buat Faktur pertama Anda
                        </td>
                        <td class="text-label">
                          Email faktur ke pelanggan Anda
                        </td>
                        <td class="text-label">
                          Terima pembayaran lebih cepat dengan Jurnal Pay
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a class="blue btn try-now" href="/invoices/new?obd=inc">
                            Pilih
                          </a>
                        </td>
                        <td>
                          <a href="#" target="_blank">
                            Pelajari lebih lanjut
                          </a>
                        </td>
                        <td>
                          <a href="#" target="_blank">
                            Pelajari lebih lanjut
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <button class="btn btn-collapse-onboarding" style="margin-top:-2px">
              Sembunyikan
              <i class="la la-angle-up" style="font-size: .8rem !important"></i>
            </button>
          </div>

					<div class="row">
						<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Arus Kas
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter" id="btnShowHide">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
												<div id="divShowHide" style="background-color: #fff; width: 200px; height: 250px; position:absolute; margin-top:12.5rem; margin-left:-10rem; z-index:1; display:none; padding:25px; box-shadow:0px 0px 13px 0px rgba(82, 63, 105, 0.05)">
													<div class="form-group">
													<label>Period</label>
													<select class="form-control" id="exampleSelect1">
														<option>Harian</option>
														<option>Mingguan</option>
														<option>Bulanan</option>
														<option>Kuartalan</option>
														<option>Tahunan</option>
													</select>
												</div>

												<div class="form-group">
												<label>Tags</label>
												<input id="kt_tagify_5" name='tags' placeholder='type...' value='' autofocus data-blacklist='.NET,PHP'>
											</div>

											<div class="kt-radio-list">
															<label class="kt-radio">
																<input type="radio" name="radio3"> Mencangkup Semua
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" name="radio3"> Salah Satu
																<span></span>
															</label>
														</div>

														<div class="kt-section__content kt-section__content--solid">
															<button type="button" class="btn btn-secondary btn-hover-brand btn-sm">Reset</button>
													<button type="button" class="btn btn-primary btn-sm">Filter</button>
												</div>

														</div>
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
													<div id="container"></div>
											</figure>
										</div>
									</div>
						</div>
						<div class="col-lg-3">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Penjualan Terhutang
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter" id="btnShowHide2">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
												<div id="divShowHide2" style="background-color: #fff; width: 200px; height: 250px; position:absolute; margin-top:12.5rem; margin-left:-10rem; z-index:1; display:none; padding:25px; box-shadow:0px 0px 13px 0px rgba(82, 63, 105, 0.05)">
													<div class="form-group">
													<label>Period</label>
													<select class="form-control" id="exampleSelect1">
														<option>Harian</option>
														<option>Mingguan</option>
														<option>Bulanan</option>
														<option>Kuartalan</option>
														<option>Tahunan</option>
													</select>
												</div>
												<div class="form-group">
												<label>Tags</label>
												<input id="kt_tagify_5" name='tags' placeholder='type...' value='' autofocus data-blacklist='.NET,PHP'>
											</div>
											<div class="kt-radio-list">
															<label class="kt-radio">
																<input type="radio" name="radio3"> Mencangkup Semua
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" name="radio3"> Salah Satu
																<span></span>
															</label>
														</div>
														<div class="kt-section__content kt-section__content--solid">
															<button type="button" class="btn btn-secondary btn-hover-brand btn-sm">Reset</button>
													<button type="button" class="btn btn-primary btn-sm">Filter</button>
												</div>
														</div>
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
										    <div id="container2" style="height:300"></div>
										</figure>
										</div>
									</div>
						</div>
						<div class="col-lg-3">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Tagihan belum Dibayar
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter" id="btnShowHide3">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
												<div id="divShowHide3" style="background-color: #fff; width: 200px; height: 250px; position:absolute; margin-top:12.5rem; margin-left:-10rem; z-index:1; display:none; padding:25px; box-shadow:0px 0px 13px 0px rgba(82, 63, 105, 0.05)">
													<div class="form-group">
													<label>Period</label>
													<select class="form-control" id="exampleSelect1">
														<option>Harian</option>
														<option>Mingguan</option>
														<option>Bulanan</option>
														<option>Kuartalan</option>
														<option>Tahunan</option>
													</select>
												</div>
												<div class="form-group">
												<label>Tags</label>
												<input id="kt_tagify_5" name='tags' placeholder='type...' value='' autofocus data-blacklist='.NET,PHP'>
											</div>
											<div class="kt-radio-list">
															<label class="kt-radio">
																<input type="radio" name="radio3"> Mencangkup Semua
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" name="radio3"> Salah Satu
																<span></span>
															</label>
														</div>
														<div class="kt-section__content kt-section__content--solid">
															<button type="button" class="btn btn-secondary btn-hover-brand btn-sm">Reset</button>
													<button type="button" class="btn btn-primary btn-sm">Filter</button>
												</div>
														</div>
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
										    <div id="container3" style="height:300"></div>
										</figure>
										</div>
									</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-3">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Piutang Usaha
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter" id="btnShowHide4">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
												<div id="divShowHide4" style="background-color: #fff; width: 200px; height: 250px; position:absolute; margin-top:12.5rem; margin-left:-10rem; z-index:1; display:none; padding:25px; box-shadow:0px 0px 13px 0px rgba(82, 63, 105, 0.05)">
													<div class="form-group">
													<label>Period</label>
													<select class="form-control" id="exampleSelect1">
														<option>Harian</option>
														<option>Mingguan</option>
														<option>Bulanan</option>
														<option>Kuartalan</option>
														<option>Tahunan</option>
													</select>
												</div>
												<div class="form-group">
												<label>Tags</label>
												<input id="kt_tagify_5" name='tags' placeholder='type...' value='' autofocus data-blacklist='.NET,PHP'>
											</div>
											<div class="kt-radio-list">
															<label class="kt-radio">
																<input type="radio" name="radio3"> Mencangkup Semua
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" name="radio3"> Salah Satu
																<span></span>
															</label>
														</div>
														<div class="kt-section__content kt-section__content--solid">
															<button type="button" class="btn btn-secondary btn-hover-brand btn-sm">Reset</button>
													<button type="button" class="btn btn-primary btn-sm">Filter</button>
												</div>
														</div>
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
													<div id="container4"></div>
											</figure>
										</div>
									</div>
						</div>
						<div class="col-lg-3">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Kas
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter" id="btnShowHide5">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
												<div id="divShowHide5" style="background-color: #fff; width: 200px; height: 250px; position:absolute; margin-top:12.5rem; margin-left:-10rem; z-index:1; display:none; padding:25px; box-shadow:0px 0px 13px 0px rgba(82, 63, 105, 0.05)">
													<div class="form-group">
													<label>Period</label>
													<select class="form-control" id="exampleSelect1">
														<option>Harian</option>
														<option>Mingguan</option>
														<option>Bulanan</option>
														<option>Kuartalan</option>
														<option>Tahunan</option>
													</select>
												</div>
												<div class="form-group">
												<label>Tags</label>
												<input id="kt_tagify_5" name='tags' placeholder='type...' value='' autofocus data-blacklist='.NET,PHP'>
											</div>
											<div class="kt-radio-list">
															<label class="kt-radio">
																<input type="radio" name="radio3"> Mencangkup Semua
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" name="radio3"> Salah Satu
																<span></span>
															</label>
														</div>
														<div class="kt-section__content kt-section__content--solid">
															<button type="button" class="btn btn-secondary btn-hover-brand btn-sm">Reset</button>
													<button type="button" class="btn btn-primary btn-sm">Filter</button>
												</div>
														</div>
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
										    <div id="container5" style="height:300"></div>
										</figure>
										</div>
									</div>
						</div>
						<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Daftar Akun Terpantau
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter" id="btnShowHide6">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
												<div id="divShowHide6" style="background-color: #fff; width: 200px; height: 250px; position:absolute; margin-top:12.5rem; margin-left:-10rem; z-index:1; display:none; padding:25px; box-shadow:0px 0px 13px 0px rgba(82, 63, 105, 0.05)">
													<div class="form-group">
													<label>Period</label>
													<select class="form-control" id="exampleSelect1">
														<option>Harian</option>
														<option>Mingguan</option>
														<option>Bulanan</option>
														<option>Kuartalan</option>
														<option>Tahunan</option>
													</select>
												</div>
												<div class="form-group">
												<label>Tags</label>
												<input id="kt_tagify_5" name='tags' placeholder='type...' value='' autofocus data-blacklist='.NET,PHP'>
											</div>
											<div class="kt-radio-list">
															<label class="kt-radio">
																<input type="radio" name="radio3"> Mencangkup Semua
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" name="radio3"> Salah Satu
																<span></span>
															</label>
														</div>
														<div class="kt-section__content kt-section__content--solid">
															<button type="button" class="btn btn-secondary btn-hover-brand btn-sm">Reset</button>
													<button type="button" class="btn btn-primary btn-sm">Filter</button>
												</div>
														</div>
										</div>
										</div>
										<div class="kt-portlet__body">
											<div class="table-responsive">
											<table class="table">
																	<thead>
																		<tr>
																			<td style="width:60%">Akun</td>
																			<td style="width:20%">Bulan ini</td>
																			<td style="width:20%">Tahun ini</td>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td>
																				<a href="#">(1-10001) Kas </a>
																			</td>
																			<td>
																				Rp. 0,00
																			</td>
																			<td>Rp. 0,00	</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#">(1-10002) Rekening Bank </a>
																			</td>
																			<td>
																				Rp. 0,00
																			</td>
																			<td>Rp. 0,00</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#">(1-10100) Piutang Usaha </a>
																			</td>
																			<td>
																				Rp. 11.000.000,00
																			</td>
																			<td>Rp. 11.000.000,00	</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#">(1-10200) Persediaan Barang</a>
																			</td>
																			<td>
																				Rp. 0,00
																			</td>
																			<td>Rp. 0,00	</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#">(1-10300) Piutang Lainnya</a>
																			</td>
																			<td>
																				Rp. 0,00
																			</td>
																			<td>Rp. 0,00	</td>
																		</tr>
																	</tbody>
																</table>
															</div>
										</div>
									</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Biaya Operasional
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter" id="btnShowHide7">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
												<div id="divShowHide7" style="background-color: #fff; width: 200px; height: 250px; position:absolute; margin-top:12.5rem; margin-left:-10rem; z-index:1; display:none; padding:25px; box-shadow:0px 0px 13px 0px rgba(82, 63, 105, 0.05)">
													<div class="form-group">
													<label>Period</label>
													<select class="form-control" id="exampleSelect1">
														<option>Harian</option>
														<option>Mingguan</option>
														<option>Bulanan</option>
														<option>Kuartalan</option>
														<option>Tahunan</option>
													</select>
												</div>
												<div class="form-group">
												<label>Tags</label>
												<input id="kt_tagify_5" name='tags' placeholder='type...' value='' autofocus data-blacklist='.NET,PHP'>
											</div>
											<div class="kt-radio-list">
															<label class="kt-radio">
																<input type="radio" name="radio3"> Mencangkup Semua
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" name="radio3"> Salah Satu
																<span></span>
															</label>
														</div>
														<div class="kt-section__content kt-section__content--solid">
															<button type="button" class="btn btn-secondary btn-hover-brand btn-sm">Reset</button>
													<button type="button" class="btn btn-primary btn-sm">Filter</button>
												</div>
														</div>
										</div>
										</div>
										<div class="kt-portlet__body">
							<figure class="highcharts-figure">
								<div id="container6" style="height:300"></div>
						</figure>
</div>
</div>
						</div>
						<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Laba Rugi
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="period-labels float-right show-card-filter" id="btnShowHide8">
													Bulanan
													<span class="fa fa-caret-down fa-caret-up" style="margin-left: 3px; margin-right: 3px;"></span>
												</span>
												<div id="divShowHide8" style="background-color: #fff; width: 200px; height: 250px; position:absolute; margin-top:12.5rem; margin-left:-10rem; z-index:1; display:none; padding:25px; box-shadow:0px 0px 13px 0px rgba(82, 63, 105, 0.05)">
													<div class="form-group">
													<label>Period</label>
													<select class="form-control" id="exampleSelect1">
														<option>Harian</option>
														<option>Mingguan</option>
														<option>Bulanan</option>
														<option>Kuartalan</option>
														<option>Tahunan</option>
													</select>
												</div>
												<div class="form-group">
												<label>Tags</label>
												<input id="kt_tagify_5" name='tags' placeholder='type...' value='' autofocus data-blacklist='.NET,PHP'>
											</div>
											<div class="kt-radio-list">
															<label class="kt-radio">
																<input type="radio" name="radio3"> Mencangkup Semua
																<span></span>
															</label>
															<label class="kt-radio">
																<input type="radio" name="radio3"> Salah Satu
																<span></span>
															</label>
														</div>
														<div class="kt-section__content kt-section__content--solid">
															<button type="button" class="btn btn-secondary btn-hover-brand btn-sm">Reset</button>
													<button type="button" class="btn btn-primary btn-sm">Filter</button>
												</div>
														</div>
										</div>
										</div>
										<div class="kt-portlet__body">
								<figure class="highcharts-figure">
									<div id="container7" style="height:300"></div>
							</figure>
							</div>
						</div>
					</div>

						</div>

<?php require '../layouts/footer.php' ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="../assets/js/chart/highchart.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
$(".btn-collapse-onboarding").click(function(){
	$(".show-large-tb").hide(1000);
});
$("#btnShowHide").click(function(){
	$("#divShowHide").toggle();
});
$("#btnShowHide2").click(function(){
	$("#divShowHide2").toggle();
});
$("#btnShowHide3").click(function(){
	$("#divShowHide3").toggle();
});
$("#btnShowHide4").click(function(){
	$("#divShowHide4").toggle();
});
$("#btnShowHide5").click(function(){
	$("#divShowHide5").toggle();
});
$("#btnShowHide6").click(function(){
	$("#divShowHide6").toggle();
});
$("#btnShowHide7").click(function(){
	$("#divShowHide7").toggle();
});
$("#btnShowHide8").click(function(){
	$("#divShowHide8").toggle();
});
});
</script>
<?php require '../layouts/foot.php' ?>
