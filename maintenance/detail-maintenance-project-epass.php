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
											Permintaan Maintenance
									</h3>

								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											0001MKS0626 </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

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
<div class="btn-group">
				<button type="button" class="btn btn-success">
					<i class="la la-check"></i>
					<span class="kt-hidden-mobile">Save</span>
				</button>
				<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				</button>
				<div class="dropdown-menu dropdown-menu-right">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon fa fa-clock"></i>
								<span class="kt-nav__link-text">Sementara</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon fa fa-check-circle"></i>
								<span class="kt-nav__link-text">Selesai</span>
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
													<i class="flaticon-cogwheel"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Data
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Maintenance
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
													<i class="flaticon-file-2"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														Surat Tugas
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Maintenance
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
													<i class="flaticon-layers"></i>
												</div>
												<div class="kt-wizard-v4__nav-label">
													<div class="kt-wizard-v4__nav-label-title">
														E-Receipt
													</div>
													<div class="kt-wizard-v4__nav-label-desc">
														Bukti Transaksi
													</div>
												</div>
												<div class="kt-wizard-v4__nav-number kt-block-center">
													3
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
											
								<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Maintenance</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-3">
                          <label class="">ID Permintaan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0001PREPMKS0626">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Priority :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="High">
                      </div>
                        </div>
						
<div class="col-lg-3">
                          <label class="">Kategori :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Project">
                      </div>
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Waktu Permintaan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
                      </div>
                        </div>
						
						<div class="col-lg-6">
                          <label class="">Project :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Epass Pelindo Cabang Makassar">
                      </div>
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
						<div class="col-lg-6">
                          <label class="">Nama Petugas :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Deddy Rafsanjani, S.Sos">
                      </div>
                        </div>
						
						<div class="col-lg-6">
                          <label class="">Jabatan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="SPV Operational Gate">
                      </div>
                        </div>
                        </div>
		
						
									 
									 
									
									</div>
									
									
									</div>


									</div>
									
							<!--end:: Portlet-->


										</div>
										<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Gate</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												
						
						
						<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Lokasi</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="Makassar" disabled>

                        </div>
						<div class="col-lg-3">
                          <label>Gate :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="1" disabled>
                        </div>
						
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                        <div class="col-lg-6">
					   <label>Jalur</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="Masuk" disabled>

                        </div>
						<div class="col-lg-6">
                          <label>Nama Jalur :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="Mobil - 1" disabled>
                        </div>
							
							
						

                        </div>

						
						




											</div>

										</div>

									</div>
									

									</div>
									<div class="col-xl-3">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Catatan</div><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
                       <div class="col-lg-12">
                          <label class="">Catatan Permintaan :</label>
                          <textarea class="form-control" id="exampleTextarea" rows="6" placeholder="Agar Segera Dikirimkan" disabled=""></textarea>
                        </div>
						
						
						
						
						
                        </div>
						
																									
																										
																										
																								</div>
																								
																							</div>

									</div>
									

									</div>
									</div>
									<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--brand">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Transaksi</div><br><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

  <tbody><tr style="text-align:center">
    <td width="1%" bgcolor="#f7fcff" rowspan="2">NO</td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff">PART ID</td>
    <td width="9%" rowspan="2" bgcolor="#f7fcff">NAMA PERANGKAT </td>
    <td colspan="3" bgcolor="#f7fcff">PENANGANAN</td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff">QC</td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff">STATUS</td>
    <td width="1%" rowspan="2" bgcolor="#f7fcff">AKSI</td>
  </tr>
    <tr style="text-align:center">
      <td width="1%" bgcolor="#f7fcff">TIPE</td>
      <td width="5%" bgcolor="#f7fcff">INSTALASI</td>
      <td width="1%" bgcolor="#f7fcff">BY</td>
    </tr>
  
  <tr>
    <td style="text-align:right">1</td>
    <td style="text-align:center">0001G1INMO1ILU140626</td>
    <td style="text-align:left">NFC PAYMENT READER</td>
    <td style="text-align:center"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK" selected="selected">Service</option>
      <option value="AK">Selesai</option>
      
    </select></td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="Scan Perangkat" id="generalSearch">
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div></td>
    <td style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="15 September 2026<hr>00:30:00 WITA<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
    <td style="text-align:center" nowrap=""><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
    <td style="text-align:center"><span class="btn btn-label-warning btn-sm">Menunggu Part</span></td>
    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="history-perangkat-project-epass.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat History Perangkat</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
  </tr>
<tr>
    <td style="text-align:right">2</td>
    <td style="text-align:center">0002G1INMO1ILU140626</td>
    <td style="text-align:left">PRINTER THERMAL</td>
    <td style="text-align:center"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">Service</option>
      <option value="AK" selected>Selesai</option>
      
    </select></td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="" id="generalSearch" disabled>
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div></td>
    <td style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="15 September 2026<hr>00:31:00 WITA<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
    <td style="text-align:center" nowrap=""><button type="button" class="btn btn-warning btn-sm btn-icon" data-toggle="modal" data-target="#modal_persetujuan_pending" data-skin="brand" title="Menunggu Persetujuan" data-html="true"><i class="fa fa-clock"></i></button></td>
   <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm">Menunggu QC</span></td>
    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="history-perangkat-project-epass.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat History Perangkat</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
  </tr>
<tr>
    <td style="text-align:right">3</td>
    <td style="text-align:center">0003G1INMO1ILU140626</td>
    <td style="text-align:left">HUB SWITCH 8 PORT MANAGEABLE CLOUD</td>
    <td style="text-align:center"><select name="select2" class="form-control kt-selectpicker" data-live-search="true">
      <option value="AK">Service</option>
      <option value="AK" selected>Selesai</option>
      
    </select></td>
    <td><div class="kt-input-icon kt-input-icon--right">
      <input type="text" class="form-control form-control-sm" placeholder="" id="generalSearch" disabled>
      <span class="kt-input-icon__icon kt-input-icon__icon--right"> <span><i class="fa fa-barcode"></i></span> </span> </div></td>
    <td style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="15 September 2026<hr>00:31:00 WITA<hr>Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
    <td style="text-align:center" nowrap=""><span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="modal" data-target="#modal_persetujuan_release" data-html="true">
															<i class="fa flaticon2-check-mark"></i>
														</span></td>
    <td nowrap="nowrap" style="text-align:center"><span class="btn btn-success btn-sm">Selesai</span></td>
    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="history-perangkat-project-epass.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat History Perangkat</span> </a> </li>
												      
											        </ul>
											      </div>
												  </div></td>
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
									
										




													<!--end: Form Wizard Step 1-->
													

													

													<!--begin: Form Wizard Step 3-->
													<div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
													<div class="kt-form__section kt-form__section--first">
										<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:800px">
				<div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">
					<div class="bg-white w-50 ml-auto mr-auto">
						<div>&nbsp;<div>
									<table class="table-responsive" cellpadding="3" align="center" width="250" border="0" style="line-height:1; margin-left:70px; padding-top:10px; font-family: Tahoma; font-size: 11px;" id="kt_table_1">
   <tr>
    <td width="3%" style="text-align: center; font-size:12px;">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: center; font-size:12px;">&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left; font-size:12px;"><strong>PT. PELABUHAN INDONESIA (PERSERO)</strong></td>
  </tr>
  <tr>
     <td style="text-align: left; font-size:12px; font-family: Tahoma;"><strong>REGIONAL 4 - CABANG MAKASSAR</strong></td>
  </tr>
  <tr>
     <td style="text-align: left; font-size:13px; font-family: Tahoma;">Jl. Soekarno No. 1 Makassar</td>
  </tr>
  
  
 
 
  <tr>
    <td ></td>
  </tr>
  
  
</table>
									<table align="center" border="0" cellpadding="1" style="width: 500px; margin-top:50px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 11px;">
  
  
  <tr>
    <td colspan="7" style="text-align: center"><b>LAPORAN REKAP PENDAPATAN</b></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: center"><strong>PERIODE : 1 JANUARI 2025 s/d 31 JANUARI 2025</strong></td>
  </tr>
  <tr>
    <td colspan="7" style="text-align: right">&nbsp;</td>
  </tr>
  
</table>
									<table align="center" cellpadding="1" style="width: 600px; text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; border-collapse: collapse;">
            <tbody>

                                                                        <tr>
                                <td style="font-weight:bold; width: 70%">PENDAPATAN</td>
                                <td style="text-align:right; width: 30%"></td>
                            </tr>
                                                                                                            <tr>
                                                                        <td>41.01.01 | Pendapatan Parkir Masuk</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="../laporan-grafik/laporan-kendaraan-masuk.php">162.111.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.02 | Pendapatan Parkir Keluar</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDI=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">235.270.000,-</a></span> </div></td>
									<td style="font-size:11px; text-align:right;">
                                        
                                    </td>
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.03 | Pendapatan Kendaraan Berangkat</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDM=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">58.175.000,-</a></span> </div></td>
									
									<td style="font-size:11px; text-align:right;">
                                        
                                    </td>
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.04 | Pendapatan Muatan Kapal</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDQ=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">0,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.05 | Pendapatan Pass Kade</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDU=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">58.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                                              <td>41.01.06 | Pendapatan Pass Orang</td>
                                                                                              <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDU=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">45.000.000,-</a></span></div></td>
                                                                                            </tr>
                                                                                            <tr>
                                                                        <td>41.01.07 | Pendapatan Member</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDY=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">950.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.08 | Pendapatan Denda Parkir</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDc=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">4.000.000,-</a></span> </div></td>
									
                                </tr>
                                                                                            <tr>
                                                                        <td>41.01.09 | Pendapatan Lain - Lain</td>
                                    <td><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span><a href="https://stagging.pdparkir.id/finance/accounting/laporan/export/pdf/detail/NDEuMDEuMDg=?reportName=Laba%2FRugi+%28Standar%29&amp;fromDate=2025-01-01&amp;toDate=2025-02-28&amp;fromDate1=2025-01-10&amp;toDate1=Invalid+date&amp;fromDate2=2025-01-11&amp;toDate2=Invalid+date&amp;fromMonthPeriod=1&amp;fromYearPeriod=2025&amp;toMonthPeriod=6&amp;toYearPeriod=2025&amp;quarterlyYear=2025">0,-</a></span> </div></td>
									
                                </tr>
                                                                                                                                       
                                                                                                                        
                                <tr>
                                  <td colspan="2" style="font-weight:bold; border-bottom: 1px solid #000"></td>
                                  </tr>
                                                                                                                                        <tr>
                                <td style="font-weight:bold;">TOTAL PENDAPATAN</td>
								<td style="font-weight:bold; border-bottom: 3px double #000"><div style="display: flex; justify-content: space-between; align-items: center;"> <span>Rp.</span> <span>1.512.556.000,-</span> </div></td>
                                
                            </tr>
                                                                                                <tr>
                                                                                                                                          <td colspan="2" style="font-weight:bold; width: 70%">&nbsp;</td>
              </tr>
                                                                                                <tr>
                                                                                                                                                                                                  <td colspan="2" style="width: 70%"><em>Terbilang : Satu Milyar Lima Ratus Dua Belas Juta Lima Ratus Lima Puluh Enam Ribu Rupiah</em></td>
              </tr>
                                                        </tbody>
        </table>
		

								
								<div><span>&nbsp;</span>
   <table align="center" width="600px" border="0" cellpadding="1" style="text-align:justify; line-height:1.5; font-family: Tahoma; font-size: 12px; margin-top:50px; margin-left:70px; margin-bottom:50px;">

                                <tbody><tr>
                                    <td colspan="3" valign="top">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="180" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">
                                        <strong>DIBUAT OLEH</strong></td>
                                    <td width="258" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-right:20px;">
                                        <strong>DIKETAHUI OLEH</strong></td>
                                    <td width="180" valign="middle" style="text-align: center; border: 0px solid #ccc; margin-left:20px;">
                                        <strong>DISETUJUI OLEH</strong></td>
                                </tr>
                                <tr style="padding-top:10px">
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc; padding-top:10px; padding-bottom:10px;">
                                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="45" height="45" viewBox="0 0 45 45"><rect x="0" y="0" width="45" height="45" fill="#ffffff"></rect><g transform="scale(2.143)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 1L9 1L9 4L10 4L10 5L11 5L11 6L10 6L10 7L9 7L9 6L8 6L8 8L9 8L9 9L8 9L8 10L9 10L9 12L8 12L8 11L7 11L7 10L5 10L5 8L3 8L3 9L4 9L4 10L5 10L5 11L7 11L7 12L3 12L3 13L7 13L7 12L8 12L8 14L12 14L12 15L9 15L9 16L8 16L8 18L9 18L9 19L8 19L8 21L10 21L10 18L13 18L13 16L14 16L14 17L16 17L16 20L19 20L19 21L20 21L20 20L21 20L21 18L19 18L19 19L17 19L17 17L16 17L16 16L18 16L18 15L17 15L17 14L13 14L13 13L11 13L11 12L12 12L12 11L11 11L11 8L12 8L12 10L13 10L13 11L15 11L15 8L14 8L14 10L13 10L13 4L12 4L12 3L11 3L11 2L12 2L12 1L13 1L13 0ZM10 1L10 2L11 2L11 1ZM11 4L11 5L12 5L12 4ZM11 6L11 7L12 7L12 6ZM0 8L0 10L1 10L1 11L0 11L0 13L1 13L1 11L3 11L3 10L2 10L2 8ZM6 8L6 9L7 9L7 8ZM20 8L20 9L18 9L18 10L19 10L19 11L20 11L20 12L18 12L18 11L17 11L17 9L16 9L16 11L17 11L17 13L18 13L18 14L19 14L19 16L20 16L20 17L21 17L21 16L20 16L20 14L21 14L21 8ZM10 11L10 12L11 12L11 11ZM14 12L14 13L15 13L15 12ZM14 15L14 16L16 16L16 15ZM10 16L10 17L9 17L9 18L10 18L10 17L11 17L11 16ZM14 18L14 19L13 19L13 20L15 20L15 18ZM19 19L19 20L20 20L20 19ZM11 20L11 21L12 21L12 20ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                                    </td>
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc">
                                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="45" height="45" viewBox="0 0 45 45"><rect x="0" y="0" width="45" height="45" fill="#ffffff"></rect><g transform="scale(2.143)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 1L9 1L9 2L8 2L8 5L11 5L11 4L12 4L12 3L13 3L13 0L12 0L12 3L11 3L11 2L10 2L10 0ZM9 2L9 4L11 4L11 3L10 3L10 2ZM8 6L8 7L9 7L9 8L8 8L8 9L7 9L7 8L6 8L6 9L5 9L5 10L0 10L0 12L1 12L1 11L2 11L2 12L3 12L3 13L7 13L7 12L5 12L5 11L7 11L7 10L8 10L8 9L9 9L9 8L10 8L10 10L11 10L11 6L10 6L10 7L9 7L9 6ZM12 6L12 7L13 7L13 6ZM0 8L0 9L4 9L4 8ZM13 8L13 9L12 9L12 12L11 12L11 11L10 11L10 12L9 12L9 11L8 11L8 12L9 12L9 13L8 13L8 14L9 14L9 16L10 16L10 17L8 17L8 21L13 21L13 19L14 19L14 20L15 20L15 19L14 19L14 17L15 17L15 16L16 16L16 15L17 15L17 16L18 16L18 18L20 18L20 17L21 17L21 15L20 15L20 14L21 14L21 11L20 11L20 10L21 10L21 8L20 8L20 10L19 10L19 12L18 12L18 13L17 13L17 12L16 12L16 13L17 13L17 14L16 14L16 15L15 15L15 14L14 14L14 11L18 11L18 9L19 9L19 8L16 8L16 9L15 9L15 10L13 10L13 9L14 9L14 8ZM6 9L6 10L7 10L7 9ZM16 9L16 10L17 10L17 9ZM12 12L12 13L10 13L10 15L13 15L13 12ZM19 13L19 14L18 14L18 16L19 16L19 17L20 17L20 16L19 16L19 14L20 14L20 13ZM12 16L12 17L10 17L10 18L9 18L9 20L10 20L10 19L11 19L11 18L12 18L12 19L13 19L13 17L14 17L14 16ZM16 17L16 20L18 20L18 19L17 19L17 17ZM19 19L19 21L20 21L20 20L21 20L21 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                                    </td>
                                    <td valign="middle" style="text-align: center; border: 0px solid #ccc">
                                        
                                    </td>
                                </tr>
                                <tr style="margin-right:20px">
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; font-style:underline; margin-right:20px;"><strong>YUNI SASLIA,SE</strong></td>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; margin-right:20px;"><strong>FADLI DJUNAEDI, SE</strong></td>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc; margin-right:20px;"><strong>DESSYANTI EKA PUTRI, SE</strong></td>
                                  </tr>
                                <tr>
                                    <td valign="top" style="text-align: center; border: 0px solid #ccc">Kepala Seksi Pembukuan</td>
                                    <td valign=" top" style="text-align: center; border: 0px solid #ccc">Kepala Bagian Keuangan &amp; Asset</td>
                                    <td valign=" top" style="text-align: center; border: 0px solid #ccc">Direktur Keuangan &amp; Asset</td>
                                  </tr>
                                <tr>
                                  <td valign="top" style="text-align: center; border: 0px solid #ccc">&nbsp;</td>
                                  <td valign=" top" style="text-align: center; border: 0px solid #ccc">&nbsp;</td>
                                  <td valign="top" style="text-align: center; border-top: 0px solid #000"></td>
                                </tr>
                                
                               
                            </tbody>
</table>
  
  <table align="center" class="footnote-1" width="650px" style="margin-top:20px; padding-top:5px; padding-bottom:20px;">
        <thead>
            <tr><th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr></thead>
        <tbody>
            <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            
            <tr style="height: 10px"><td></td></tr>
            <tr style=" width:650px;">
                <td style="text-align: left;">
                    <span class="span-qr" style="z-index: 99999">
                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="40" height="40" viewBox="0 0 40 40"><rect x="0" y="0" width="40" height="40" fill="#ffffff"></rect><g transform="scale(1.905)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M9 0L9 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L5 9L5 10L4 10L4 8L3 8L3 9L2 9L2 8L0 8L0 9L2 9L2 10L3 10L3 12L4 12L4 11L7 11L7 10L8 10L8 8L9 8L9 11L8 11L8 12L6 12L6 13L8 13L8 15L9 15L9 16L10 16L10 17L11 17L11 16L12 16L12 17L13 17L13 18L12 18L12 19L10 19L10 20L11 20L11 21L12 21L12 20L13 20L13 19L14 19L14 21L15 21L15 18L16 18L16 19L17 19L17 20L19 20L19 18L20 18L20 20L21 20L21 17L20 17L20 16L21 16L21 14L20 14L20 15L19 15L19 16L18 16L18 13L19 13L19 12L20 12L20 13L21 13L21 12L20 12L20 11L19 11L19 10L21 10L21 9L20 9L20 8L18 8L18 9L17 9L17 8L14 8L14 9L13 9L13 8L12 8L12 7L13 7L13 6L12 6L12 7L11 7L11 6L10 6L10 7L9 7L9 4L10 4L10 0ZM12 0L12 1L11 1L11 4L12 4L12 5L13 5L13 2L12 2L12 1L13 1L13 0ZM6 9L6 10L7 10L7 9ZM11 9L11 10L10 10L10 11L9 11L9 12L8 12L8 13L9 13L9 15L10 15L10 16L11 16L11 14L13 14L13 15L12 15L12 16L13 16L13 17L17 17L17 19L18 19L18 18L19 18L19 17L18 17L18 16L17 16L17 15L16 15L16 14L13 14L13 13L16 13L16 12L14 12L14 10L15 10L15 11L17 11L17 13L18 13L18 12L19 12L19 11L18 11L18 10L19 10L19 9L18 9L18 10L15 10L15 9L14 9L14 10L13 10L13 9ZM12 10L12 11L11 11L11 12L12 12L12 13L13 13L13 12L12 12L12 11L13 11L13 10ZM1 11L1 12L0 12L0 13L1 13L1 12L2 12L2 11ZM9 12L9 13L10 13L10 12ZM14 15L14 16L16 16L16 15ZM8 17L8 18L9 18L9 17ZM8 19L8 21L9 21L9 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                    </span>
                </td>
                <td>&nbsp;</td>
               <td colspan="2" valign="left" style="text-align: center">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan Peraturan Perusahaan yang berlaku, Perusahaan mengatur
                            bahwa
                            Dokumen ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
             <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            <tr style=" width:650px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA - Halaman 1 dari 1</i></span></td>
            </tr>

        </tbody>
    </table>
  <img src="../assets/img/footer.png" style="width:650px; display:block; margin-left:auto; margin-top: 10px; margin-right:auto;margin-bottom:20px;padding-bottom:0px" />
					</div>

					
				</div>
				</div>
				</div>
				</div>
						

								<!--End:: App Content-->
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
									<div class="modal fade" id="modal_persetujuan_pending" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Wahyudi Djunaedi, ST
																</a>
																<p class="kt-widget4__text">
																	SVP Engineering
																</p>
															</div>
															<button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button>
														</div>
<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	SVP Operational Gate
																</p>
															</div>
															<button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button>
														</div>
														
														
														
														
													</div>
												</div>

												
												
												

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_release" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Wahyudi Djunaedi, ST
																</a>
																<p class="kt-widget4__text">
																	SVP Engineering
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;15 September 2026<hr>00:48:00 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	SVP Operational Gate
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;15 September 2026<hr>00:48:00 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														
														
														
														
													</div>
												</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_ditolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Kepala Bagian Kepegawaian
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Direktur Umum
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_15.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Muhammad Nasrullah, S.Kom
																</a>
																<p class="kt-widget4__text">
																	Direktur Utama
																</p>
															</div>
															<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Ditolak&lt;hr&gt;11 Juli 2025 - 22:33 WITA&lt;hr&gt;Minta Dipertimbangkan Kembali">
															<i class="fa flaticon2-delete"></i>
														</span>
														</div>
														
														
														
													</div>
												</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Assign Project Director</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												</div>

											</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->
									<!--end: Datatable -->
								</div>

						<!-- end:: Content -->



  </div>
  </div>
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>
            </div>


<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>