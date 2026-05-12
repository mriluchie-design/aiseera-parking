<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                   Data Transaksi Valet
                </h3>
            </div>
            <div class="kt-subheader__toolbar">
                <button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
                <a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-pdf"></i><span class="kt-nav__link-text">PDF</span>
                            </a>
                          </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon fa fa-file-excel"></i><span class="kt-nav__link-text">Excel</span>
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
	<div class="row">
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">A simple primary alert—check it out!</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

            <!--begin::Filter-->
			<div class="kt-portlet" id = "login_Box_Div" >
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 class="kt-portlet__head-title">
							Filter Data
						</h3>
					</div>
				</div>

				<!--begin::Form-->
				<form class="kt-form">
					<div class="kt-portlet__body">
                        <div class="form-group row">
						<div class="col-lg-2">
                                <label>Nama Customer :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
						
                           
							<div class="col-lg-2">
                                <label>Zona :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Wilayah :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
                                     
                                  </select>
                            </div>
							
								 <div class="col-lg-1">
                                <label>ID Mitra Jukir :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
							<div class="col-lg-2">
                                <label>Nama Mitra Jukir :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
							<div class="col-lg-1">
                                <label>ID Member :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
							<div class="col-lg-2">
                                <label>Nama Member :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
							
							
                            
							
							
							
							
							
							
							
                            </div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
							<div class="form-group row">
							<div class="col-lg-2">
                                <label>ID Transaksi Valet :</label>
    	                      <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
        					
                            </div>
							<div class="col-lg-2">
                                <label>Tanggal Transaksi :</label>
    	                     <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
        					
                            </div>
							<div class="col-lg-2">
                                <label>Tanggal Valet :</label>
    	                   
											<div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="Select date range">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
        					
                            </div>
							<div class="col-lg-1">
                                <label>Jam Awal Valet :</label>
    	                      <div class="input-group timepicker">
												<input class="form-control m-input" id="kt_timepicker_2" readonly placeholder="Select time" type="text" />
												<div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-clock-o"></i>
													</span>
												</div>
											</div>
        					
                            </div>
							<div class="col-lg-1">
                                <label>Jam Akhir Valet :</label>
    	                       <div class="input-group timepicker">
												<input class="form-control m-input" id="kt_timepicker_2" readonly placeholder="Select time" type="text" />
												<div class="input-group-append">
													<span class="input-group-text">
														<i class="la la-clock-o"></i>
													</span>
												</div>
											</div>
        					
                            </div>
							<div class="col-lg-1">
                                <label>Jenis Kendaraan :</label>
    	                       <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Mobil</option>
                                      <option value="2">Motor</option>
                                     
                                  </select>
        					
                            </div>
							<div class="col-lg-1">
                                <label>Status Pembayaran :</label>
    	                       <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Tunai</option>
                                      <option value="2">Non Tunai</option>
                                     
                                  </select>
        					
                            </div>
							<div class="col-lg-1">
                                <label>Status Valet :</label>
    	                       <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Selesai</option>
                                      <option value="2">Progress</option>
                                      <option value="3">Pending Jukir</option>
                                     
                                  </select>
        					
                            </div>
						
                           
							
							
							
							
							
							
                            </div>
							<br>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-outline-brand btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->
<!--begin:: Widgets/Stats-->
			<div class="kt-portlet">
				<div class="kt-portlet__body  kt-portlet__body--fit">
					<div class="row row-no-padding row-col-separator-lg">
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Total 
										</h4>
										<span class="kt-widget24__desc">
											Data Transaksi Valet
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-brand">
										1140
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Tunai
										</h4>
										<span class="kt-widget24__desc">
											Data Transaksi Valet Tunai
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-success">
										1130
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Non Tunai
										</h4>
										<span class="kt-widget24__desc">
											Data Transaksi Valet Non Tunai
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-danger">
										10
									</span>
								</div>

							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							
						</div>
					</div>
				</div>
			</div>
			<!--end:: Widgets/Stats-->
			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_2">No</th>
											  <th colspan="4" bgcolor="#f7fcff">Customer Valet</th>
											  <th colspan="2" bgcolor="#f7fcff">Mitra Jukir Bertugas</th>
											   <th width="2%" colspan="9" bgcolor="#feffed">Detail Transaksi</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Status<br>
											  Pembayaran</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Status<br>Valet</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff">ID</th>
											  <th width="5%" bgcolor="#f7fcff">Nama</th>
											  <th width="3%" bgcolor="#f7fcff">Zona</th>
											  <th width="3%" bgcolor="#f7fcff">Wilayah</th>
											  <th width="1%" bgcolor="#f7fcff">ID Mitra</th>
											  <th width="10%" bgcolor="#f7fcff">Nama Mitra</th>
											  <th width="2%" bgcolor="#feffed">ID Transaksi<br>Valet</th>
											  <th width="2%" bgcolor="#feffed">Waktu  Transaksi</th>
											  <th width="2%" bgcolor="#feffed">ID Member</th>
											  <th width="2%" bgcolor="#feffed">Nama Member</th>
											  <th width="2%" bgcolor="#feffed">Jenis<br>Kendaraan</th>
											  <th width="1%" bgcolor="#feffed">Blok</th>
											  <th width="1%" bgcolor="#feffed">Nomor</th>
											  <th width="2%" bgcolor="#feffed">Waktu<br>											    
											    Valet</th>
											  <th width="12%" bgcolor="#feffed">Nominal</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1" style="text-align:right">1</td>
												<td style="text-align:center" nowrap>0001CV923</td>
												<td style="text-align:left" nowrap>Toko Agung</td>
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:left" nowrap>Bakung</td>
												<td align="center" valign="middle" style="text-align:center">00001MJPTJUVIII23</td>
												<td style="text-align:left" nowrap>HARIS DAENG PAWA</td>
												<td nowrap style="text-align:center">001TNMT823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>06:00 WITA</td>
												<td align="center" valign="middle" style="text-align:center">000001MP823</td>
												<td nowrap="nowrap" style="text-align:left">Muhammad Nasrullah</td>
												<td nowrap style="text-align:center">Mobil</td>
												<td nowrap style="text-align:center">A</td>
												<td nowrap style="text-align:center">01</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>
												07:00 - 09:00 WITA </td>
												<td nowrap style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="20.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Selesai</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">2</td>
												<td style="text-align:center" nowrap>0002CV923</td><td style="text-align:left" nowrap>Mall Ratu Indah</td>
												<td style="text-align:left" nowrap>Biringkanaya</td>
												<td style="text-align:left" nowrap>Berua</td>
												<td align="center" valign="middle" style="text-align:center">00002MJPTJUVIII23</td>
												<td style="text-align:left" nowrap>ARMAN</td>
												<td nowrap style="text-align:center">002TNMT823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>09:00 WITA</td>
												<td align="center" valign="middle" style="text-align:center">000002MP823</td>
												<td nowrap="nowrap" style="text-align:left">Sri Widya Ningsih, SE</td>
												<td nowrap style="text-align:center">Motor</td>
												<td nowrap="nowrap" style="text-align:center">B</td>
												<td nowrap="nowrap" style="text-align:center">04</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>												  
												  10:00 - 11:00 WITA</td>
												<td nowrap style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="10.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Selesai</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">3</td>
												<td style="text-align:center" nowrap>0003CV923</td><td style="text-align:left" nowrap>Mall Panakkukang</td>
												<td style="text-align:left" nowrap>Panakkukang</td>
												<td style="text-align:left" nowrap>Masale</td>
												<td align="center" valign="middle" style="text-align:center">00003MJPTJUVIII23</td>
												<td style="text-align:left" nowrap>KASIM DAENG BONTO</td>
												<td nowrap style="text-align:center">001TNME823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>13:00 WITA</td>
												<td align="center" valign="middle" style="text-align:center">000003MP823</td>
												<td nowrap="nowrap" style="text-align:left">Annisa Aila Bellvania</td>
												<td nowrap style="text-align:center">Mobil</td>
												<td nowrap="nowrap" style="text-align:center">A</td>
												<td nowrap="nowrap" style="text-align:center">02</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>
												14:00 - 16:00 WITA</td>
												<td nowrap style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="20.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Non Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Progress</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-non-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																	
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">4</td>
												<td style="text-align:center" nowrap><span style="text-align:center">0004CV923</span></td>
												<td style="text-align:left" nowrap>Amanda Brownies</td>
												<td nowrap="nowrap" style="text-align:left">Panakkukang</td>
												<td nowrap="nowrap" style="text-align:left">Masale</td>
												
												<td align="center" valign="middle" style="text-align:center">00004MJPTJUVIII23</td>
												<td style="text-align:left" nowrap>A. LUTFIA AGUSTINAPUTRI</td>
												<td nowrap style="text-align:center">003TNMT823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>17:00 WITA</td>
												<td align="center" valign="middle" style="text-align:center">000004MP823</td>
												<td nowrap="nowrap" style="text-align:left">Aisyah Chiara Pelangi</td>
												<td nowrap style="text-align:center">Motor</td>
												<td nowrap="nowrap" style="text-align:center">B</td>
												<td nowrap="nowrap" style="text-align:center">03</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>
												18:00 - 19:00 WITA</td>
												<td nowrap style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="20.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">Progress</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1" style="text-align:right">5</td>
												<td style="text-align:center" nowrap><span style="text-align:center">0005CV923</span></td>
												<td style="text-align:left" nowrap>Alfamidi</td>
												<td nowrap="nowrap" style="text-align:left">Panakkukang</td>
												<td nowrap="nowrap" style="text-align:left">Masale</td>
												
												<td align="center" valign="middle" style="text-align:center">00005MJPTJUVIII23</td>
												<td style="text-align:left" nowrap>BANI</td>
												<td nowrap style="text-align:center">004TNMT823</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>19:00 WITA</td>
												<td align="center" valign="middle" style="text-align:center">000005MP823</td>
												<td nowrap="nowrap" style="text-align:left">Almeera Rizqia Azalea</td>
												<td nowrap style="text-align:center">Mobil</td>
												<td nowrap="nowrap" style="text-align:center">A</td>
												<td nowrap="nowrap" style="text-align:center">05</td>
												<td nowrap style="text-align:center">17 Agustus 2023<br>
												20:00 - 22:00 WITA</td>
												<td nowrap style="text-align:left"><div class="input-group input-group-sm">
														<div class="input-group-prepend"><span class="input-group-text input-group-sm" id="basic-addon1">Rp.</span></div>
														<input style="text-align:right" type="text" class="form-control form-control-sm" disabled="disabled" placeholder="20.000" aria-describedby="basic-addon1">
														<div class="input-group-append"><span class="input-group-text input-group-sm" id="basic-addon1">,-</span></div>
													</div></td>
												<td style="text-align:center" nowrap><span class="kt-badge kt-badge--success kt-badge--md kt-badge--inline">Tunai</span></td>
												<td nowrap="nowrap" style="text-align:center"><span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">Pending Jukir</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="transaksi-non-member-tunai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
										  
									    </tbody>
									</table>
                    <!--end: Datatable -->

                    <!-- begin:: pageline -->
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
                    <!-- end:: pageline -->

                </div>
            </div>
        </div>
    </div>

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.min.js" type="text/javascript"></script>
<script src="../assets/dist/js/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="../assets/dist/js/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
