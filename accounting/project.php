<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Master Data
                </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ed1c24">
											Project </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">
										</form>
									</div>
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
                <a href="project-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-plus-circle"></i>Buat Project</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
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
                                <label>Nama Pegawai :</label>
    	                       <div class="form-group">

					                         <select class="form-control kt-selectpicker form-control" data-live-search="true">
					 															<optgroup label="Direksi">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															<optgroup label="Umum">
																					<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 															</optgroup>
																				<optgroup label="Keuangan dan Asset">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional">
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
					                       </div>
        					
                            </div>
                            <div class="col-lg-2">
                                <label>Departemen :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Direksi</option>
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Umum</option>
                                      <option value="4">Keuangan dan Asset</option>
                                      <option value="5">Operasional</option>
                                      <option value="12" >Pengembangan Usaha dan Kerjasama</option>
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Divisi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
                                      <option value="3">Direksi</option>
                                      <option value="4">Umum dan Kepegawaian</option>
                                      <option value="5" selected="">Hukum dan Humas</option>
                                      <option value="6">Keuangan</option>
                                      <option value="12">Asset</option>
                                      <option value="12" >Pengelolaan</option>
                                      <option value="12" >Produksi</option>
                                      <option value="12" >Pengembangan</option>
                                      <option value="12" >Kerjasama</option>
                                  </select>
                            </div>
                            <div class="col-lg-2">
                                <label class="">Jabatan :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2">Dewan Pengawas</option>
									  <optgroup label="Direksi">
                                      <option value="2" selected="">Direktur Utama</option>
                                      <option value="2">Direktur Umum</option>
                                      <option value="2">Direktur Keuangan dan Asset</option>
                                      <option value="2">Direktur Operasional</option>
                                      <option value="2">Direktur Pengembangan Usaha dan Kerjasama</option>
									  </optgroup>
                                     
                                  </select>
                             
                            </div>
							
							<div class="col-lg-2">
                                <label class="">Kantor :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pusat</option>
                                      <option value="2">Nama Cabang A</option>
                                      <option value="2">Nama Cabang B</option>
                                  </select>
                             
                            </div>
							
							<div class="col-lg-1">
                                <label class="">Jenis Kelamin :</label>
								  <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="2" selected="">Pria</option>
                                      <option value="2">Wanita</option>
                                     
                                  </select>
                             
                            </div>
                            </div>
							<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
							<div class="col-lg-2">
                                <label class="">Tanggal Mulai Kerja :</label>
                                <div class="input-group">
						                        <input type="text" class="form-control form-control-sm kt_datepicker_2_modal" readonly="" placeholder="= Pilih Tanggal =">
						                        <div class="input-group-append">
						                          <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
						                        </div>
						                      </div>
                            </div>
							
                            </div>
							
							
						
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
											Pegawai Tetap
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-brand">
										40
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Pegawai Pria
										</h4>
										<span class="kt-widget24__desc">
											Statistik Pegawai Pria
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-success">
										30
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 col-xl-3">
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											Pegawai Wanita
										</h4>
										<span class="kt-widget24__desc">
											Statistik Pegawai Wanita
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
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>
											  <th width="1%" bgcolor="#f7fcff">ID</th>
											  <th width="1%" bgcolor="#f7fcff">Client</th>
											  <th width="10%" bgcolor="#f7fcff">Nama Project</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal Mulai</th>
											  <th width="3%" bgcolor="#f7fcff">Tanggal Deadline</th>
											  <th width="3%" bgcolor="#f7fcff">Team</th>
											  <th width="1%" bgcolor="#f7fcff">PM</th>
											  <th width="5%" bgcolor="#f7fcff">Progress</th>
											  <th width="5%" bgcolor="#f7fcff">Tanggal Selesai</th>
											  <th width="1%" bgcolor="#f7fcff">Status</th>
											  <th width="1%" bgcolor="#f7fcff">Aksi</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td id="kt_table_1">1</td>
												<td style="text-align:left" nowrap>0001/AK/PR/0626</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /> </a></td>
												<td style="text-align:left" nowrap>Epass Cabang Makassar</td>
												<td style="text-align:center" nowrap>1 September 2026</td>
												<td style="text-align:center" nowrap>8 September 2026</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm">Team-1</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td style="text-align:center" nowrap=""> <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div></div></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td style="text-align:center" nowrap=""><span class="btn btn-brand btn-sm">On Going</span></td>
												<td style="text-align:center" nowrap><div class="kt-widget2__actions">
																<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
																	<i class="flaticon-more-1"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
																	<ul class="kt-nav">
																	<li class="kt-nav__item">
																			<a href="pegawai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-eye"></i>
																				<span class="kt-nav__link-text">Lihat Detail Project</span>
																			</a>
																		</li>
                                                                        <li class="kt-nav__item">
																			<a href="pegawai-detail.php" class="kt-nav__link">
																				<i class="kt-nav__link-icon fa fa-edit"></i>
																				<span class="kt-nav__link-text">Edit</span>
																			</a>
																		</li>
																		
																		
																		
																	</ul>
																</div>
															</div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">2</td>
												<td nowrap="nowrap" style="text-align:left">0002/AK/PR/0626</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /> </a></td>
												<td nowrap="nowrap" style="text-align:left">Epass Cabang Manado</td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">8 September 2026</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-success btn-sm">Team-2</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
											    </div></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span> </a> </li>
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span> </a> </li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
											<tr>
												<td id="kt_table_1">3</td>
												<td nowrap="nowrap" style="text-align:left">0003/AK/PR/0626</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">Epass Cabang Ternate</td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">8 September 2026</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-warning btn-sm">Team-3</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
										  <tr>
												<td id="kt_table_1">4</td>
												<td nowrap="nowrap" style="text-align:left">0004/AK/PR/0626</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">Epass Cabang Ambon</td>
												<td nowrap="nowrap" style="text-align:center">1 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">8 September 2026</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-skype btn-sm">Team-4</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>

<tr>
												<td id="kt_table_1">5</td>
												<td nowrap="nowrap" style="text-align:left">0005/AK/PR/0626</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">Epass Cabang Samarinda</td>
												<td nowrap="nowrap" style="text-align:center">10 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">18 September 2026</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm">Team-1</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
												<td id="kt_table_1">6</td>
												<td nowrap="nowrap" style="text-align:left">0006/AK/PR/0626</td>
												<td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:left">Epass Cabang Tarakan</td>
												<td nowrap="nowrap" style="text-align:center">10 September 2026</td>
												<td nowrap="nowrap" style="text-align:center">18 September 2026</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-success btn-sm">Team-2</span></td>
												<td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
												<td nowrap="nowrap" style="text-align:center"><div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
												  </div></td>
												<td nowrap="nowrap" style="text-align:center">-</td>
												<td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
												<td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
												  <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
												    <ul class="kt-nav">
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
												      <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
											        </ul>
											      </div>
												  </div></td>
										  </tr>
<tr>
  <td id="kt_table_8">7</td>
  <td nowrap="nowrap" style="text-align:left">0007/AK/PR/0626</td>
  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:left">Epass Cabang Balikpapan</td>
  <td nowrap="nowrap" style="text-align:center">10 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">18 September 2026</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-warning btn-sm">Team-3</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i> </a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span> </a> </li>
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span> </a> </li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_7">8</td>
  <td nowrap="nowrap" style="text-align:left">0008/AK/PR/0626</td>
  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:left">Epass Cabang Bitung</td>
  <td nowrap="nowrap" style="text-align:center">10 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">18 September 2026</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-skype btn-sm">Team-4</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_6">9</td>
  <td nowrap="nowrap" style="text-align:left">0009/AK/PR/0626</td>
  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:left">Epass Cabang Sorong</td>
  <td nowrap="nowrap" style="text-align:center">20 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">28 September 2026</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-brand btn-sm">Team-1</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_3.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_5">10</td>
  <td nowrap="nowrap" style="text-align:left">0010/AK/PR/0626</td>
  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:left">Epass Cabang Pare-Pare</td>
  <td nowrap="nowrap" style="text-align:center">20 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">28 September 2026</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-success btn-sm">Team-2</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_4.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_4">11</td>
  <td nowrap="nowrap" style="text-align:left">0011/AK/PR/0626</td>
  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:left">Epass Cabang Kendari</td>
  <td nowrap="nowrap" style="text-align:center">20 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">28 September 2026</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-warning btn-sm">Team-3</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_5.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
        </ul>
      </div>
  </div></td>
  </tr>
<tr>
  <td id="kt_table_3">12</td>
  <td nowrap="nowrap" style="text-align:left">0012/AK/PR/0626</td>
  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="PT. Pelabuhan Indonesia (Persero) Regional 4" data-html="true"> <img src="../assets/img/client-logos/pelindo.png" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:left">Epass Cabang Nunukan</td>
  <td nowrap="nowrap" style="text-align:center">20 September 2026</td>
  <td nowrap="nowrap" style="text-align:center">28 September 2026</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-label-skype btn-sm">Team-4</span></td>
  <td nowrap="nowrap" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="12321355123123211&lt;hr&gt;Muhammad Nasrullah, S.Kom" data-html="true"><img src="../assets/media/users/100_6.jpg" alt="image" /></a></td>
  <td nowrap="nowrap" style="text-align:center"><div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
  </div></td>
  <td nowrap="nowrap" style="text-align:center">-</td>
  <td nowrap="nowrap" style="text-align:center"><span class="btn btn-brand btn-sm">On Going</span></td>
  <td nowrap="nowrap" style="text-align:center"><div class="kt-widget2__actions"> <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown"> <i class="flaticon-more-1"></i></a>
    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
      <ul class="kt-nav">
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-eye"></i> <span class="kt-nav__link-text">Lihat Detail Project</span></a></li>
        <li class="kt-nav__item"> <a href="pegawai-detail.php" class="kt-nav__link"> <i class="kt-nav__link-icon fa fa-edit"></i> <span class="kt-nav__link-text">Edit</span></a></li>
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

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
