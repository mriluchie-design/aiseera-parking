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

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">
				<span class="kt-portlet__head-icon">
					<i class="kt-font-brand flaticon2-list-1"></i>
				</span>
				&nbsp;
				&nbsp;
				Data Mesin Absen
			</h3>
		</div>
		<div class="kt-subheader__toolbar">
			<button type="button" class="btn btn-label-danger btn-sm" id="buttonLogin" onclick="displayLoginBox()"><i class="flaticon-interface-6"></i> Filter Data</button>
			<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
				<i class="flaticon2-printer"></i> Export Data</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
				<!--begin::Nav-->
				<ul class="kt-nav">
					<li class="kt-nav__item">
						<a href="#" class="kt-nav__link">
							<i class="kt-nav__link-icon fa fa-file-pdf"></i>
							<span class="kt-nav__link-text">PDF</span>
						</a>
					</li>
					<li class="kt-nav__item">
						<a href="#" class="kt-nav__link">
							<i class="kt-nav__link-icon fa fa-file-excel"></i>
							<span class="kt-nav__link-text">Excel</span>

						</a>
					</li>

				</ul>

				<!--end::Nav-->
			</div>

			<a href="mesin-absen-add.php" class="btn btn-info btn-sm">
				<i class="fa fa-calculator"></i> Tambah Data</button>
				<!--<i class="flaticon2-plus"></i>-->
			</a>


		</div>
	</div>
</div>

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

	<div class="kt-portlet" id="login_Box_Div">
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
					<div class="col-lg-4">
						<label>Nama Mesin :</label>
						<input type="text" class="form-control form-control-sm" placeholder="">
					</div>
					<div class="col-lg-4">
						<label>IP :</label>
						<input type="text" class="form-control form-control-sm" placeholder="">
					</div>
					<div class="col-lg-4">
						<label>Lokasi :</label>
						<select class="form-control kt-selectpicker" data-live-search="true">
							<option value="2">Pusat</option>
							<option value="3">Cabang Sulawesi Barat</option>

						</select>
					</div>
				</div>
			</div>
			<div class="kt-portlet__foot text-center">
				<div class="kt-form__actions">
					<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
					<button type="reset" class="btn btn-primary btn-sm"><i class="flaticon-interface-6"></i> Filter</button>
				</div>
			</div>
		</form>
	</div>
	<div class="kt-portlet">
		<div class="kt-portlet__body">
			<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
				<thead>
					<tr style="text-align:center">
						<th width="2%" bgcolor="#f7fcff">NO</th>
						<th width="31%" bgcolor="#f7fcff">Nama Mesin</th>
						<th width="31%" bgcolor="#f7fcff">IP</th>
						<th width="31%" bgcolor="#f7fcff">Lokasi</th>
						<th width="5%" bgcolor="#f7fcff">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Royal Spring</td>
						<td><a href="#">192.168.10.206:80</a></td>
						<td>Gowa</td>
						<td style="text-align:center" nowrap>
							<div class="kt-widget2__actions">
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="detail-mesin-absen.php" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Lihat Detail</span>
											</a>
										</li>
										
										<li class="kt-nav__item">
											<a href="edit-mesin-absen.php" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit Data</span>
											</a>
										</li>
										<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>I14 Villa Surya Mas</td>
						<td><a href="#">192.168.10.206:81</a></td>
						<td>Makassar</td>
						<td style="text-align:center" nowrap>
							<div class="kt-widget2__actions">
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="detail-mesin-absen.php" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Lihat Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="edit-mesin-absen.php" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit Data</span>
											</a>
										</li>
										<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>j/6 Villa Surya Mas</td>
						<td><a href="#">192.168.10.206:82</a></td>
						<td>Makassar</td>
						<td style="text-align:center" nowrap>
							<div class="kt-widget2__actions">
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="detail-mesin-absen.php" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Lihat Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="edit-mesin-absen.php" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit Data</span>
											</a>
										</li>
										<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>4</td>
						<td>J/9 Villa Surya Mas</td>
						<td><a href="#">192.168.10.206:80</a></td>
						<td>Makassar</td>
						<td style="text-align:center" nowrap>
							<div class="kt-widget2__actions">
								<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
									<i class="flaticon-more-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-149px, 33px, 0px);">
									<ul class="kt-nav">
										<li class="kt-nav__item">
											<a href="detail-mesin-absen.php" class="kt-nav__link">
												<i class="kt-nav__link-icon fa fa-eye"></i>
												<span class="kt-nav__link-text">Lihat Detail</span>
											</a>
										</li>
										<li class="kt-nav__item">
											<a href="edit-mesin-absen.php" class="kt-nav__link">
												<i class="kt-nav__link-icon fa flaticon-edit-1"></i>
												<span class="kt-nav__link-text">Edit Data</span>
											</a>
										</li>
										<li class="kt-nav__item">
																			<a href="#" class="kt-nav__link" id="kt_sweetalert_demo_9">
																				<i class="kt-nav__link-icon fa fa-trash-alt"></i>
																				<span class="kt-nav__link-text">Hapus</span>
																			</a>
																		</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>

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

		</div>
	</div>
</div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
