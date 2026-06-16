<?php require '../layouts/head.php' ?>
<link href="../assets/css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                   Grafik
                </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
			<div class="kt-subheader__group" id="kt_subheader_search">
				<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
					Gate Masuk </span>
				<form class="kt-margin-l-20" id="kt_subheader_search_form">
				</form>
			</div>
		</div>
            <div class="kt-subheader__toolbar">
                <div class="btn-group">
				<button type="button" class="btn btn-label-danger btn-sm" id = "buttonLogin" onclick = "displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
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
                                <label>Cabang :</label>
								
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
                        <div class="col-lg-2">
                            <label>Gate :</label>
                            <select class="form-control kt-selectpicker">
                                  <option value="2" selected>Gate - 1</option>
                                  <option value="2">Gate - 2</option>
                                  <option value="2" selected>Keseluruhan</option>
                            </select>
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
			<div class="row">
								
										

							<!--end:: Portlet-->
								

								
								
								<div class="col-xl-12">

									<!--begin:: Widgets/Activity-->
									
										
									
									<!--end:: Widgets/Activity-->
								</div>
								</div>
							<div class="kt-portlet">
							
								<div class="kt-portlet__body  kt-portlet__body--fit">
								
									<div class="row row-no-padding row-col-separator-lg">
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::Total Profit-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Total
														</h4>
														<span class="kt-widget24__desc">
															Kendaraan Masuk
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-brand">
														51.318
													</span>
												</div>

											</div>

											<!--end::Total Profit-->
										</div>
										
										
										
										
										
										<div class="col-md-12 col-lg-6 col-xl-3">

											<!--begin::New Feedbacks-->
											<div class="kt-widget24">
												<div class="kt-widget24__details">
													<div class="kt-widget24__info">
														<h4 class="kt-widget24__title">
															Kendaraan Parkir 
														</h4>
														<span class="kt-widget24__desc">
															Saat ini
														</span>
													</div>
													<span class="kt-widget24__stats kt-font-danger">
														168
													</span>
												</div>

											</div>

											<!--end::New Feedbacks-->
										</div>
										
										
									</div>
								</div>
								</div>
								<div class="row">
						
						<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Kendaraan Masuk Vs Keluar
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-sm dropdown-toggle" data-toggle="dropdown">
													2026
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														
														
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2025</span>
															</a>
															
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2024</span>
															</a>
															
														</li>
														
														
														
													</ul>
												</div>&nbsp;
												
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
										    <div id="container-kendaraan-masukvskeluar" style="height:300"></div>
										</figure>
										</div>
									</div>
						</div>
						<div class="col-lg-6">
							<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Kendaraan Masuk
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-label-brand btn-sm dropdown-toggle" data-toggle="dropdown">
													Hari ini
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														
														
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Minggu ini</span>
															</a>
															
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">Bulan ini</span>
															</a>
															
														</li>
														
														
														
													</ul>
												</div>&nbsp;
												
										</div>
										</div>
										<div class="kt-portlet__body">
											<figure class="highcharts-figure">
										    <div id="container-kendaraan-masuk" style="height:300"></div>
										</figure>
										</div>
									</div>
						</div>
						
						
						
					

								
									
									
									</div>
								
								</div>
								
								
									
									
								</div>

								
						</div>

						<?php require '../layouts/footer.php' ?>
						<script src="https://code.highcharts.com/highcharts.js"></script>
						<script src="https://code.highcharts.com/modules/exporting.js"></script>
						<script src="https://code.highcharts.com/modules/export-data.js"></script>
						<script src="https://code.highcharts.com/modules/accessibility.js"></script>
						<script src="../assets/js/chart/highchart.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-tju-target-setoran.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-kendaraan-masukvskeluar.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-kendaraan-keluar.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-kendaraan-masuk.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-mobilvsmotor.js" type="text/javascript"></script>
						<script src="../assets/js/chart/highchart-setoran-kolektor.js" type="text/javascript"></script>
						<?php require '../layouts/foot.php' ?>
						<?php require './layouts/script.php' ?>
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
