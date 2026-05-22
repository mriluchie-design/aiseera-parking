<?php require '../layouts/head.php' ?>
<link href="../assets/dist/@fullcalendar/core/main.css" rel="stylesheet" type="text/css" />
<link href="../assets/dist/@fullcalendar/daygrid/main.css" rel="stylesheet" type="text/css" />
<link href="../assets/dist/@fullcalendar/list/main.css" rel="stylesheet" type="text/css" />
<link href="../assets/dist/@fullcalendar/timegrid/main.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>



      <!-- begin:: Content Head -->
						<div class="kt-subheader   kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon-time-2"></i>
										</span>
										&nbsp;
										&nbsp;
											Kalender Perjalanan Dinas
									</h3>

								</div>
								<div class="kt-subheader__toolbar">
									<div class="dropdown dropdown-inline" data-placement="left">
											<a href="#" class="btn btn-label btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali
                        <script>
function goBack() {
  window.history.back();
}
</script>
											</a>
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
              <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">

                  <div class="kt-portlet__body">
                    <div id="kt_calendar"></div>
                    <div class="kt-section__content kt-section__content--solid text-center mt-3">
            <span class="kt-badge kt-badge--unified-brand kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Alasan Penting"></span>
            <span class="kt-badge kt-badge--unified-primary kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Bersalin"></span>
            <span class="kt-badge kt-badge--unified-success kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Besar"></span>
            <span class="kt-badge kt-badge--unified-info kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Khusus"></span>
            <span class="kt-badge kt-badge--unified-dark kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Sakit"></span>
            <span class="kt-badge kt-badge--unified-warning kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Tahunan"></span>
            <span class="kt-badge kt-badge--unified-danger kt-badge--lg kt-badge--bold mr-3" data-container="body" data-toggle="kt-popover" data-placement="top" data-content="Cuti Menikah"></span>
          </div>
                    </div>
                  </div>
							</div>


<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<script src="../assets/dist/@fullcalendar/core/main.js" type="text/javascript"></script>
<script src="../assets/dist/@fullcalendar/daygrid/main.js" type="text/javascript"></script>
<script src="../assets/dist/@fullcalendar/google-calendar/main.js" type="text/javascript"></script>
<script src="../assets/dist/@fullcalendar/interaction/main.js" type="text/javascript"></script>
<script src="../assets/dist/@fullcalendar/list/main.js" type="text/javascript"></script>
<script src="../assets/dist/@fullcalendar/timegrid/main.js" type="text/javascript"></script>
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<?php require '../layouts/foot.php' ?>
