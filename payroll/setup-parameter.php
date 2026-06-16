<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Setup Parameter Pendapatan Gaji
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
                <!--<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_parameter_gaji"><i class="fa fa-plus-circle"></i>Tambah Data</button>-->
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
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
                                <label>Nama Parameter :</label>
								
                                <div class="kt-input-icon kt-input-icon--right">
        							<input type="text" class="form-control form-control-sm" placeholder="Pencarian..." id="generalSearch">
        							<span class="kt-input-icon__icon kt-input-icon__icon--right">
    		                            <span><i class="la la-search"></i></span>
    		                        </span>
    		                    </div>
    		                    </div>
								<div class="col-lg-2">
                                <label>Jenis Parameter :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Pendapatan</option>
                                      <option value="2">Potongan</option>
                                      
                                  </select>
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
											  <th width="1%" bgcolor="#f7fcff">Jenis<br>Parameter Gaji</th>
											  <th width="1%" bgcolor="#f7fcff">Kode<br>Parameter Gaji</th>
											  <th width="30%" bgcolor="#f7fcff">Nama Parameter Gaji</th>
											  <th width="1%" bgcolor="#f7fcff">Berlaku Untuk Jabatan</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
												<td nowrap="nowrap" style="text-align:center">TGP</td>
												<td style="text-align:left" nowrap>Gaji Pokok</td>
												<td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Keseluruhan</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																  <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
											  <td id="kt_table_9">2</td>
											  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
											  <td nowrap="nowrap" style="text-align:center">TJB</td>
											  <td style="text-align:left" nowrap>Tunjangan Jabatan</td>
											  <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
											  <td style="text-align:center" nowrap><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
										        </div>
										      </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_8">3</td>
											  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
											  <td nowrap="nowrap" style="text-align:center">TJK</td>
											  <td style="text-align:left" nowrap>Tunjangan Keluarga</td>
											  <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
											  <td style="text-align:center" nowrap="nowrap"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
										        </div>
											    </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_7">4</td>
											  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
											  <td nowrap="nowrap" style="text-align:center">TKS</td>
											  <td style="text-align:left" nowrap>Tunjangan Kesehatan</td>
											  <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
											  <td style="text-align:center" nowrap="nowrap"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
										        </div>
											    </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_6">5</td>
											  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
											  <td nowrap="nowrap" style="text-align:center">TTR</td>
											  <td style="text-align:left" nowrap>Tunjangan Transport</td>
											  <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
											  <td style="text-align:center" nowrap="nowrap"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
										        </div>
											    </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_5">6</td>
											  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
											  <td nowrap="nowrap" style="text-align:center">TTE</td>
											  <td style="text-align:left" nowrap>Tunjangan Telekomunikasi</td>
											  <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
											  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
										        </div>
											    </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_4">7</td>
											  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
											  <td nowrap="nowrap" style="text-align:center">TMM</td>
											  <td style="text-align:left" nowrap>Tunjangan Makan/Minum</td>
											  <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
											  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
										        </div>
											    </div></td>
										  </tr>
											<tr>
											  <td id="kt_table_3">8</td>
											  <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
											  <td nowrap="nowrap" style="text-align:center">TRE</td>
											  <td style="text-align:left" nowrap>Tunjangan Representasi</td>
											  <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
											  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
											    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
											      <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
										        </div>
											    </div></td>
										  </tr>
									      <tr>
										      <td id="kt_table_10">9</td>
										      <td class="text-center"><span class="btn btn-label-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Pendapatan</span></td>
										      <td nowrap="nowrap" style="text-align:center">TKI</td>
										      <td style="text-align:left" nowrap>Tunjangan Kinerja</td>
										      <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
										      <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
										        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										          <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
									            </div>
										        </div></td>
									      </tr>
									      <tr>
									        <td id="kt_table_18">10</td>
									        <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Potongan</span></td>
									        <td nowrap="nowrap" style="text-align:center">PKT</td>
									        <td style="text-align:left" nowrap>Keterlambatan</td>
									        <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
									        <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
									          <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									            <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
								              </div>
									          </div></td>
								          </tr>
									      <tr>
									        <td id="kt_table_17">11</td>
									        <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Potongan</span></td>
									        <td nowrap="nowrap" style="text-align:center">PAB</td>
									        <td style="text-align:left" nowrap>Absen</td>
									        <td class="text-center"><span class="btn btn-brand btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Lihat Data</span></td>
									        <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
									          <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									            <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
								              </div>
									          </div></td>
								          </tr>
									      <tr>
									        <td id="kt_table_16">12</td>
									        <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Potongan</span></td>
									        <td nowrap="nowrap" style="text-align:center">PPH</td>
									        <td style="text-align:left" nowrap>PPH 21</td>
									        <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Keseluruhan</span></td>
									        <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
									          <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									            <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
								              </div>
									          </div></td>
								          </tr>
									      <tr>
									        <td id="kt_table_15">13</td>
									        <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Potongan</span></td>
									        <td nowrap="nowrap" style="text-align:center">PJT</td>
									        <td style="text-align:left" nowrap>JHT</td>
									        <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Keseluruhan</span></td>
									        <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
									          <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									            <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
								              </div>
									          </div></td>
								          </tr>
									      <tr>
									        <td id="kt_table_14">14</td>
									        <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Potongan</span></td>
									        <td nowrap="nowrap" style="text-align:center">PJK</td>
									        <td style="text-align:left" nowrap>JKK</td>
									        <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Keseluruhan</span></td>
									        <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
									          <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									            <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
								              </div>
									          </div></td>
								          </tr>
									      <tr>
									        <td id="kt_table_13">15</td>
									        <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Potongan</span></td>
									        <td nowrap="nowrap" style="text-align:center">PJM</td>
									        <td style="text-align:left" nowrap>JKM</td>
									        <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Keseluruhan</span></td>
									        <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
									          <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									            <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
								              </div>
									          </div></td>
								          </tr>
									      <tr>
									        <td id="kt_table_12">16</td>
									        <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Potongan</span></td>
									        <td nowrap="nowrap" style="text-align:center">PBK</td>
									        <td style="text-align:left" nowrap>BPJS Kesehatan</td>
									        <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Keseluruhan</span></td>
									        <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
									          <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									            <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
																			  <i class="kt-nav__link-icon fa fa-trash-alt"></i>
																			  <span class="kt-nav__link-text">Hapus</span>
																		  </a>
																			
																	  </li>
																		
																	</ul>
								              </div>
									          </div></td>
								          </tr>
									      <tr>
									        <td id="kt_table_11">17</td>
									        <td class="text-center"><span class="btn btn-label-danger btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Potongan</span></td>
									        <td nowrap="nowrap" style="text-align:center">PFQ</td>
									        <td nowrap="nowrap" style="text-align:left">Infaq</td>
									        <td class="text-center"><span class="btn btn-label-success btn-sm" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="" data-html="true">Keseluruhan</span></td>
									        <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
									          <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
									            <ul class="kt-nav">
																	  <li class="kt-nav__item" data-toggle="modal" data-target="#modal_edit_gapok" data-skin="brand" data-html="true">
																			<a href="#" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-user-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																	  
																	  <li class="kt-nav__item">
																		  <a href="hapus-parameter-gaji-pegawai-tetap.php" class="kt-nav__link" id="kt_sweetalert_demo_9">
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
									<div class="modal fade" id="modal_edit_gapok" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">FORM TAMBAH PARAMETER GAJI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">X</button>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_tabs_7_1" role="tabpanel">
													
												
												<div class="form-group row">
												

												
													<div class="col-lg-6">
														<label>Nama Parameter :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Gaji Pokok">
													</div>
													<div class="col-lg-2">
                                <label class="">Satuan :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Rp</option>
                                      <option value="2">%</option>
                                  </select>
                             
                            </div>
							<div class="col-lg-4">
                                <label class="">Nominal :</label>
								  <input type="text" class="form-control form-control-sm" placeholder="Isikan Data">
                             
                            </div>
													
												

												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												
<div class="form-group row">
												
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Berlaku Untuk :</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-3" id="hide1">Seluruh Pegawai</button>&nbsp;
      													
                                <button type="button" class="btn btn-secondary btn-square btn-sm col-lg-3" id="show">Sebagian Pegawai</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                  <div class="form-group row">
    													<div class="col-lg-6">
														<label class="kt-font-danger">Jabatan :</label>
														 <select class="form-control kt-selectpicker" multiple="multiple">
                                      <option value="2" selected="">- Tidak Ada Pilihan -</option>
									  <optgroup label="Dewan Pengawas">
					 																<option value="AK">Dewan Pengawas</option>
					 															</optgroup>
									  <optgroup label="Direksi">
                                      <option value="2">Direktur Utama</option>
                                      <option value="2">Direktur Umum</option>
                                      <option value="2">Direktur Keuangan dan Asset</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     
                                  </select>
													</div>
													<div class="col-lg-6">
														<label class="kt-font-danger">Nama Pegawai :</label>
														 <select class="form-control kt-selectpicker form-control" multiple="multiple">
					 															 <option value="2" selected="">- Tidak Ada Pilihan -</option>
																				<optgroup label="Direksi">
					 																<option value="AK" >000000001 - Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">000000003 - Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">000000002 - Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">000000004 - Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">000000005 - Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
													</div>
												
                          </div>
						



											</div>
											</div>
											
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<button type="button" class="btn btn-sm btn-brand">
					<i class="fa fa-check-circle"></i>Simpan Data</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="serah-terima-rompi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger">SERAH TERIMA ROMPI</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
										</div>

										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="m-portlet m-portlet--tabs">
									
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-12">
                          <label>ID Mitra :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0000000001">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Zona :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kepulauan Sangkarrang">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-4">
                          <label><span style="color:#ff0000">*</span> Wil :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="I">
                        </div>
						<div class="col-lg-8">
                          <label><span style="color:#ff0000">*</span> Titik Parkir :</label>
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Coto Nusantara">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Nama Pegawai :</label>
                           <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="HARIS DAENG PAWA">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
                          <label>NPP :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000 000 001">
                        </div>
						<div class="col-lg-6">
                          <label>Kantor :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pusat">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label class="">Department :</label>
                          <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha & Kerja Sama">
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Jabatan :</label>
                         <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direktur Pengembangan Usaha & Kerjasama">
                        </div>
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Mitra Jukir</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
</div>



										</div>




									</div>
									<div class="col-lg-6">
                      <div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Tanda Tangan Anda</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						
						<div class="col-lg-12">
                          <div class="swal2-content"><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" placeholder="" style="display: flex;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div>
                        </div>
                       
						
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     
                    
					  
                     
									</div>
									
									
									</div>


									</div>
							<!--end:: Portlet-->
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
												
									<div class="kt-portlet__foot kt-align-center">
												<div class="">

													<a href="datamitraparkir.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>&nbsp;
									<a href="#" class="btn btn-label-brand btn-sm">
															<span>
																<i class="fa fa-print"></i>
																<span>Print ID Card</span>
															</span>
														</a>
												
													<div class="btn-group">
				<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
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
							<!--End::Modal 2-->
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

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
