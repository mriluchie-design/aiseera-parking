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

<div class="kt-subheader  kt-grid__item" id="kt_subheader">
							<div class="kt-container  kt-container--fluid ">
								<div class="kt-subheader__main">
									<h3 class="kt-subheader__title">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-1"></i>
										</span>
										&nbsp;
										&nbsp;
											Dashboard

									</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Operasional - Reservasi Parkir </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>

							</div>
						</div>

							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
								<div class="show-large-tb" id="onboarding-container" style="margin-bottom:-9px">
            
            
          </div>

					

					

					

<?php require '../layouts/footer.php' ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="../assets/js/chart/highchart.js" type="text/javascript"></script>
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
<?php require '../layouts/foot.php' ?>
