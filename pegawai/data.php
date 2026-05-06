<?php require '../layouts/head.php' ?>
<?php require './layouts/header.php' ?>

    <!-- breadcrumb -->
	<div class="col-xl-12 col-lg-12">

        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Dashboard
                    </h3>
                    <span class="kt-subheader__separator kt-hidden"></span>
                    <div class="kt-subheader__breadcrumbs">
                        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Nama Menu
                        </a>
                        <span class="kt-subheader__breadcrumbs-separator"></span>
                        <a href="" class="kt-subheader__breadcrumbs-link">
                            Nama Submenu
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- filter -->
    <div class="col-xl-12 col-lg-12">

        <div class="kt-portlet kt-portlet--mobile kt-portlet--sortable border-bottom" data-ktportlet="true" id="kt_portlet_tools_4">
            <div class="kt-portlet__head ui-sortable-handle">
            	<div class="kt-portlet__head-label">
            		<span class="kt-portlet__head-icon">
            			<i class="flaticon2-search"></i>
            		</span>
            		<h3 class="kt-portlet__head-title">
            			Filter
            		</h3>
            	</div>
            	<div class="kt-portlet__head-toolbar">
            		<div class="kt-portlet__head-group">
            			<a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-clean btn-icon-md" aria-describedby="tooltip_r1zlyps6v7"><i class="la la-angle-down"></i></a>
            			<a href="#" data-ktportlet-tool="reload" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-refresh"></i></a>
            			<a href="#" data-ktportlet-tool="remove" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-close"></i></a>
                		<div class="tooltip tooltip-portlet tooltip bs-tooltip-top" role="tooltip" id="tooltip_r1zlyps6v7" aria-hidden="true" x-placement="top" style="position: absolute; will-change: transform; visibility: hidden; top: 0px; left: 0px; transform: translate3d(1630px, -39px, 0px);">
                            <div class="tooltip-arrow arrow" style="left: 34px;"></div>
                            <div class="tooltip-inner">Collapse</div>
                        </div>
                    </div>
            	</div>
            </div>
            <div class="kt-portlet__body">

                <!-- content -->

            </div>
            <div class="kt-portlet__foot kt-portlet__foot--solid text-center">
                <div class="kt-form__actions kt-form__actions--center">
                    <button type="button" class="btn btn-success btn-sm m-btn 	m-btn m-btn--icon">
            			<span>
            				<i class="fa flaticon-refresh"></i>
            				<span>
            					Reset
            				</span>
            			</span>
            		</button>
                    <button type="button" class="btn btn-ilu m-btn btn-sm m-btn m-btn--icon">
            			<span>
            				<i class="fa flaticon-search"></i>
            				<span>
            					Filter
            				</span>
            			</span>
            		</button>
                </div>
            </div>
        </div>

    </div>

    <!-- table -->
    <div class="col-xl-12 col-lg-12">

        <div class="kt-portlet kt-portlet--mobile kt-portlet--sortable border-bottom">
            <!--begin::Portlet-->
            <div class="kt-portlet__head ui-sortable-handle">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="flaticon2-search"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Data
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-group">
                        <a href="#" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-angle-down"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-clean btn-icon-md"><i class="la la-refresh"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-clean btn-icon-md" data-toggle="dropdown"><i class="flaticon-apps"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item"> <a class="kt-nav__link" href="#"> <i class="kt-nav__link-icon flaticon2-add"></i> <span class="kt-nav__link-text">Tambah Baru</span> </a> </li>
                                <li class="kt-nav__item"> <a class="kt-nav__link" href="#"> <i class="kt-nav__link-icon flaticon2-print"></i> <span class="kt-nav__link-text">Cetak</span> </a> </li>
                                <li class="kt-nav__item"> <a class="kt-nav__link" href="#"> <i class="kt-nav__link-icon fa fa-file-excel"></i> <span class="kt-nav__link-text">Export Excel</span> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">
                <table class="table table-striped- table-hover table-checkable" id="kt_table_2" width="100%">
                    <thead class="text-center">
                        <!-- head -->
                    </thead>
                    <tbody>
                        <!-- body -->
                    </tbody>
                    <!-- foot -->
                </table>
            </div>
        </div>


    </div>

<?php require '../layouts/footer.php' ?>
<script src="js/pages/crud/datatables/basic/scrollable-2.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
