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
<link href="../assets/dist/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
<link href="../assets/dist/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
<link href="../assets/dist/bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
<link href="../assets/dist/main/main.css" rel="stylesheet">
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
											Agenda Perusahaan

									</h3>
								
									

								</div>
							</div>
						</div>

            <div class="mt-3 kt-container kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="content-i">
            <div class="content-box">
              <div class="element-wrapper">
                <div class="element-box">
                  <div id="fullCalendar"></div>
                </div>
              </div>
						</div>
					</div>
				</div>

						<?php require '../layouts/footer.php' ?>
		    <script src="../assets/dist/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
		    <script src="../assets/dist/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
		    <script src="../assets/dist/main/main.js?version=4.4.0"></script>
		    <script>
		      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		      ga('create', 'UA-XXXXXXX-9', 'auto');
		      ga('send', 'pageview');
		    </script>
						<?php require '../layouts/foot.php' ?>
