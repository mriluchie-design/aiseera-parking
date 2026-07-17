<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-5.16081,119.395713),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
			
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Team
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Instalasi Perangkat</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
            <div class="kt-subheader__toolbar">
                <button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
                <div class="btn-group">
				<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>
				
				
			</div>
				<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
                    <i class="flaticon2-printer"></i> Export Data</button>
                    <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
														<a href="cetak-index-team-instalasi-perangkat.php" class="kt-nav__link">
															<i class="kt-nav__link-icon fa fa-file-pdf"></i>
															<span class="kt-nav__link-text">PDF</span>
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
				<a href="team-add.php" class="btn btn-info btn-sm">
												<i class="fa fa-user-tie"></i>Setup Team</button>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
                
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
                                <label>Lokasi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Makassar</option>
                                      <option value="2">Pare-Pare</option>
                                      <option value="2">Balikpapan</option>
                                      <option value="2">Samarinda</option>
                                      <option value="2">Tarakan</option>
                                      <option value="2">Nunukan</option>
                                      <option value="2">Manado</option>
                                      <option value="2">Bitung</option>
                                      <option value="2">Ambon - Yos Sudarso</option>
                                      <option value="2">Ambon - Slamet Riyadi</option>
                                      <option value="2">Ternate</option>
                                      <option value="2">Sorong</option>
                                      <option value="4" selected>Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
								
                            
								
							
							<div class="col-lg-1">
                                <label>Team :</label>
    	                       <div class="form-group">

					                         <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Team-1</option>
                                      <option value="2">Team-2</option>
                                      <option value="2">Team-3</option>
                                      <option value="2">Team-4</option>
									   <option value="4" selected>Keseluruhan</option>
                                      
                                  </select>
					                       </div>
        					
                            </div>
							<div class="col-lg-2">
                                <label class="">Tanggal Mulai :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label class="">Tanggal Deadline :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-2">
                                <label class="">Tanggal Selesai :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_daterangepicker_2" readonly="" placeholder="-- Pilih Tanggal --">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar"></i></span>
						                        </div>
						                      </div>
                            </div>
							<div class="col-lg-3">
                                <label>PM :</label>
    	                       <div class="form-group">

					                         <select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK">Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan" class="a">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional" class="a">
					 																<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Teknologi dan Riset" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<option value="12" selected>Keseluruhan</option>

					 														</select>
					                       </div>
        					
                            </div>
							
							
								
							
                            
							
							
							
							
							
                            </div>
							
							
							<br>
							
							
						
					<div class="kt-portlet__foot text-center">
						<div class="kt-form__actions">
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
							<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i>Filter Data</button>
						</div>
					</div>
					</div>
				</form>
				<!--end::Form-->
			</div>
            <!--begin::End-->

			

			<div class="kt-portlet kt-portlet--mobile ">
				<div class="kt-portlet__body">
					<!--begin: Datatable -->
					<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">ID</th>
											  <th width="10%" bgcolor="#f7fcff">Lokasi</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal Mulai</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal Deadline</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal Selesai</th>
											  <th width="1%" bgcolor="#f7fcff">PM</th>
											  <th width="1%" bgcolor="#f7fcff">Team</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:right">1</td>
												<td style="text-align:left" nowrap>0001/AK/PR/0626</td>
												<td style="text-align:left" nowrap>Makassar</td>
												<td style="text-align:center" nowrap>1 September 2026</td>
												<td style="text-align:center" nowrap>8 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-brand btn-sm" data-toggle="modal" data-target="#modal_team">Team-1</button></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	 <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="team-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail</span> </a> </li>
        <li class="kt-nav__item"> <a href="team-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Team</span> </a> </li>
        <li class="kt-nav__item"> <a href="team-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
        </ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td style="text-align:right">2</td>
												<td nowrap="nowrap" style="text-align:left">0002/AK/PR/0626</td>
												<td nowrap="nowrap" style="text-align:left">Manado</td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">8 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-twitter btn-sm" data-toggle="modal" data-target="#modal_team">Team-2</button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
        </ul>
											      </div>
												  </div></td>
										  </tr>
											<tr>
												<td style="text-align:right">3</td>
												<td nowrap="nowrap" style="text-align:left">0003/AK/PR/0626</td>
												<td nowrap="nowrap" style="text-align:left">Ternate</td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">8 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-warning btn-sm" data-toggle="modal" data-target="#modal_team">Team-3</button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
        </ul>
											      </div>
												  </div></td>
										  </tr>
										  <tr>
												<td style="text-align:right">4</td>
												<td nowrap="nowrap" style="text-align:left">0004/AK/PR/0626</td>
												<td nowrap="nowrap" style="text-align:left">Ambon - Yos Sudarso</td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">8 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-skype btn-sm" data-toggle="modal" data-target="#modal_team">Team-4</button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
        </ul>
											      </div>
												  </div></td>
										  </tr>
										  <tr>
										    <td style="text-align:right">5</td>
										    <td nowrap="nowrap" style="text-align:left">0005/AK/PR/0626</td>
										    <td nowrap="nowrap" style="text-align:left">Ambon - Slamet Riyadi</td>
										    <td nowrap="nowrap" style="text-align:center">1 September 2026</td>
										    <td nowrap="nowrap" style="text-align:center">8 September 2026</td>
										    <td nowrap="nowrap" style="text-align:center">-</td>
										    <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
										    <td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-skype btn-sm" data-toggle="modal" data-target="#modal_team">Team-4</button></td>
										    <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										      <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										        <ul class="kt-nav">
										          <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span></a></li>
										          <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span></a></li>
										          <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span></a></li>
										          <li class="kt-nav__item"> <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_"> <i class="kt-nav__link-icon fa fa-trash-alt"></i> <span class="kt-nav__link-text">Hapus</span> </a> </li>
									            </ul>
									          </div>
										      </div></td>
									      </tr>
										  <tr>
												<td style="text-align:right">6</td>
												<td nowrap="nowrap" style="text-align:left">0006/AK/PR/0626</td>
												<td nowrap="nowrap" style="text-align:left">Samarinda</td>
												<td nowrap="nowrap" style="text-align:center">10 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">18 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-brand btn-sm" data-toggle="modal" data-target="#modal_team">Team-1</button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td style="text-align:right">7</td>
												<td nowrap="nowrap" style="text-align:left">0007/AK/PR/0626</td>
												<td nowrap="nowrap" style="text-align:left">Tarakan</td>
												<td nowrap="nowrap" style="text-align:center">10 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">18 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-twitter btn-sm" data-toggle="modal" data-target="#modal_team">Team-2</button></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																			
																		</li>
        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
  <td style="text-align:right">8</td>
  <td nowrap="nowrap" style="text-align:left">0008/AK/PR/0626</td>
  <td nowrap="nowrap" style="text-align:left">Balikpapan</td>
  <td nowrap="nowrap" style="text-align:center">10 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">18 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-warning btn-sm" data-toggle="modal" data-target="#modal_team">Team-3</button></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
          <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
            <i class="kt-nav__link-icon fa fa-trash-alt"></i>
            <span class="kt-nav__link-text">Hapus</span>
            </a>
          
          </li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">9</td>
  <td nowrap="nowrap" style="text-align:left">0009/AK/PR/0626</td>
  <td nowrap="nowrap" style="text-align:left">Bitung</td>
  <td nowrap="nowrap" style="text-align:center">10 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">18 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-skype btn-sm" data-toggle="modal" data-target="#modal_team">Team-4</button></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
          <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
            <i class="kt-nav__link-icon fa fa-trash-alt"></i>
            <span class="kt-nav__link-text">Hapus</span>
            </a>
          
          </li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">10</td>
  <td nowrap="nowrap" style="text-align:left">0010/AK/PR/0626</td>
  <td nowrap="nowrap" style="text-align:left">Sorong</td>
  <td nowrap="nowrap" style="text-align:center">20 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">28 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-brand btn-sm" data-toggle="modal" data-target="#modal_team">Team-1</button></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
          <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
            <i class="kt-nav__link-icon fa fa-trash-alt"></i>
            <span class="kt-nav__link-text">Hapus</span>
            </a>
          
          </li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">11</td>
  <td nowrap="nowrap" style="text-align:left">0011/AK/PR/0626</td>
  <td nowrap="nowrap" style="text-align:left">Pare-Pare</td>
  <td nowrap="nowrap" style="text-align:center">20 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">28 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-twitter btn-sm" data-toggle="modal" data-target="#modal_team">Team-2</button></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
          <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
            <i class="kt-nav__link-icon fa fa-trash-alt"></i>
            <span class="kt-nav__link-text">Hapus</span>
            </a>
          
          </li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">12</td>
  <td nowrap="nowrap" style="text-align:left">0012/AK/PR/0626</td>
  <td nowrap="nowrap" style="text-align:left">Kendari</td>
  <td nowrap="nowrap" style="text-align:center">20 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">28 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-warning btn-sm" data-toggle="modal" data-target="#modal_team">Team-3</button></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
          <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
            <i class="kt-nav__link-icon fa fa-trash-alt"></i>
            <span class="kt-nav__link-text">Hapus</span>
            </a>
          
          </li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td style="text-align:right">13</td>
  <td nowrap="nowrap" style="text-align:left">0013/AK/PR/0626</td>
  <td nowrap="nowrap" style="text-align:left">Nunukan</td>
  <td nowrap="nowrap" style="text-align:center">20 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">28 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><button class="btn btn-label-skype btn-sm" data-toggle="modal" data-target="#modal_team">Team-4</button></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="project-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-edit.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="project-print.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-print"></i> <span class="kt-nav__link-text">Print</span> </a> </li>
        <li class="kt-nav__item">
          <a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
            <i class="kt-nav__link-icon fa fa-trash-alt"></i>
            <span class="kt-nav__link-text">Hapus</span>
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
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
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
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
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
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
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
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
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
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
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
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
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
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
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
															<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Ditolak&lt;hr&gt;11 Juli 2025 - 22:33 WITA&lt;hr&gt;Minta Dipertimbangkan Kembali">
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
  <div class="modal fade" id="modal_team" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TEAM INSTALASI</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingOne7">
														<div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Project Manager
														</div>
													</div>
													<div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/100_15.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001<hr>Muhammad Nasrullah, S.Kom" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
												
												

									</div>
									<div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
												<div class="card">
													<div class="card-header" id="headingTwo7">
														<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
																</g>
															</svg> Data Team
														</div>
													</div>
													<div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
														<div class="card-body">
                              <div class="ordered-item clearfix">
  									
  									<div class="order-item-right">
  										<a href="#" class="kt-notification__item versi-2">
															<div class="kt-notification__item-icon">
																<img src="../assets/img/users/300_3.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002<hr>Muhammad Ramadhan Lerrick, ST" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_14.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003<hr>Andi Marwan Arsyad, ST" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_5.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000005<hr>Wahyudi Djunaedi, ST" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_7.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000007<hr>Rofiqoh Nurhasanah, ST" data-html="true">&nbsp;&nbsp;<img src="../assets/img/users/300_6.jpg" alt="image" style="max-width:50px !important;height:auto" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000008<hr>Deddy Rafsanjani, ST" data-html="true">
															</div>
														&nbsp;
														&nbsp;
															
														</a>
														
														
  										<div class="clearfix"></div>
  										
  									</div>
  								</div>
														</div>
													</div>

									</div>
									
								</div>
							</div>
							<!--End::Modal 2-->
							
								
									
								</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
  </div>
  </div>
</div>

									<!--end: Datatable -->
								</div>
							</div>

            </div>

									<!--end: Datatable -->
								

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/file-upload/dropzonejs.js" type="text/javascript"></script>
<script src="../assets/dist/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="../assets/dist/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
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
