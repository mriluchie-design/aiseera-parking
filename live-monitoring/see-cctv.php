<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                   MONITORING 
                </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
			<div class="kt-subheader__group" id="kt_subheader_search">
				<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
					CCTV </span>
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
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

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
                                      <option value="1" selected="">Makassar</option>
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
                                      <option value="2">Keseluruhan</option>
                                                                           
                                  </select>
    		                    </div>
                             
							
							<div class="col-lg-1">
                                <label>Gate :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">1</option>
                                      <option value="1">2</option>
                                      <option value="1">3</option>
                                      <option value="1">4</option>
									  <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Jalur :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Masuk</option>
                                      <option value="1">Keluar</option>
									  <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>Nama Jalur :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Mobil - 1</option>
                                      <option value="1">Mobil - 2</option>
                                      <option value="1">Motor - 1</option>
                                      <option value="1">Motor - 2</option>
									  <option value="2"selected>Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-2">
                                <label>SPV :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Muhammad Nasrullah, S.Kom</option>
                                      <option value="1">Muhammad Ramadhan, S.T</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
                                  </select>
                            </div>
							<div class="col-lg-1">
                                <label>Status :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1">Online</option>
                                      <option value="1">Offline</option>
                                      <option value="2" selected>Keseluruhan</option>
                                                                           
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

        <!--Begin::Section-->
								<div class="kt-portlet__body">
		<div class="row">

			<div class="col-xl-3">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										
										<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MASUK - MOBIL - 1</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
								
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">&nbsp;</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="text-align:center">
                                <span><img src="../assets/media/users/no_image.jpg" alt="image" style="max-width:400px !important;height:auto"  data-toggle="" data-skin="brand" title="" data-original-title="" data-html="true"></span>

							</div><br>
							
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
<div class="col-xl-3">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										
										<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MASUK - MOBIL - 2</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
								
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">&nbsp;</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="text-align:center">
                                <span><img src="../assets/media/users/no_image.jpg" alt="image" style="max-width:400px !important;height:auto"  data-toggle="" data-skin="brand" title="" data-original-title="" data-html="true"></span>

							</div><br>
							
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			<div class="col-xl-3">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										
										<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MASUK - MOTOR - 1</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
								
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">&nbsp;</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="text-align:center">
                                <span><img src="../assets/media/users/no_image.jpg" alt="image" style="max-width:400px !important;height:auto"  data-toggle="" data-skin="brand" title="" data-original-title="" data-html="true"></span>

							</div><br>
							
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			<div class="col-xl-3">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										
										<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--inline">GATE - 1</span>
										<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MASUK - MOTOR - 2</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
								
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">&nbsp;</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="text-align:center">
                                <span><img src="../assets/media/users/no_image.jpg" alt="image" style="max-width:400px !important;height:auto"  data-toggle="" data-skin="brand" title="" data-original-title="" data-html="true"></span>

							</div><br>
							
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			
			</div>
			
			
			
		<div class="row">
<div class="col-xl-3">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										
										<span class="kt-badge kt-badge--brand kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MASUK - MOBIL - 1</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
								
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">&nbsp;</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="text-align:center">
                                <span><img src="../assets/media/users/no_image.jpg" alt="image" style="max-width:400px !important;height:auto"  data-toggle="" data-skin="brand" title="" data-original-title="" data-html="true"></span>

							</div><br>
							
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
<div class="col-xl-3">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										
										<span class="kt-badge kt-badge--brand kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MASUK - MOBIL - 2</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
								
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">&nbsp;</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="text-align:center">
                                <span><img src="../assets/media/users/no_image.jpg" alt="image" style="max-width:400px !important;height:auto"  data-toggle="" data-skin="brand" title="" data-original-title="" data-html="true"></span>

							</div><br>
							
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			<div class="col-xl-3">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										
										<span class="kt-badge kt-badge--brand kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MASUK - MOTOR - 1</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
								
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">&nbsp;</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="text-align:center">
                                <span><img src="../assets/media/users/no_image.jpg" alt="image" style="max-width:400px !important;height:auto"  data-toggle="" data-skin="brand" title="" data-original-title="" data-html="true"></span>

							</div><br>
							
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			<div class="col-xl-3">
				<!--begin:: Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--success">
                        <!--begin::status -->
						
                        <!--end::status -->

						<!--begin::Widget -->
						<div class="kt-widget kt-widget--project-1">
							<div class="kt-widget__head d-flex">
								<div class="kt-widget__label">
									<div class="kt-widget__info kt-padding-0 kt-margin-l">
										
										<span class="kt-badge kt-badge--brand kt-badge--md kt-badge--inline">GATE - 2</span>
										<a href="#" class="kt-widget__title">
											<span class="kt-badge kt-badge--info kt-badge--md kt-badge--inline">MASUK - MOTOR - 2</span>
										</a>
									</div>
								</div>
								<div class="kt-widget__toolbar">
								
                                    <span class="kt-switch kt-switch--sm kt-switch--icon">
                                        <label>
                                            <input type="checkbox" checked="checked" name="">
                                            <span></span>
                                        </label>
                                    </span>
									<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
										<i class="flaticon-more-1"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
										<ul class="kt-nav">
											<li class="kt-nav__item">
												<a href="lowongan-form.php" class="kt-nav__link">
													<i class="kt-nav__link-icon flaticon2-line-chart"></i>
													<span class="kt-nav__link-text">&nbsp;</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="kt-widget__body" style="text-align:center">
                                <span><img src="../assets/media/users/no_image.jpg" alt="image" style="max-width:400px !important;height:auto"  data-toggle="" data-skin="brand" title="" data-original-title="" data-html="true"></span>

							</div><br>
							
						</div>
						<!--end::Widget -->
					</div>
				<!--end:: Portlet-->
			</div>
			

			
			</div>
			
		</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		

		<!--End::Section-->

	

<?php require '../layouts/footer.php' ?>


<script src="../assets/dist/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/dist/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>

<?php require '../layouts/foot.php' ?>
