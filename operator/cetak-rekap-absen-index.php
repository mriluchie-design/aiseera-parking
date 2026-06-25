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
<link href="../assets/dist/main/main.css" rel="stylesheet" type="text/css" />
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
											Rekap Absen Pegawai
									</h3>
								<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											Deddy Rafsanjani, S.Sos </span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>

								</div>
								<div class="kt-subheader__toolbar">
								<a href="#.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
											
											
											
			<a href="#" class="btn btn-label-success btn-sm" data-toggle="dropdown">
				<i class="fa fa-print"></i> Export Data</button>
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
						<a class="kt-nav__link" onclick="window.print();">
							<i class="kt-nav__link-icon fa fa-print"></i>
							<span class="kt-nav__link-text">Cetak</span>
						</a>
					</li>
				</ul>
				<!--end::Nav-->
			</div>
		</div>

							</div>
						</div>

							<div class="tab-content" style="background:#f2f3f8;overflow:scroll;height:auto">
							<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-3">
								<div class="bg-white w-50 ml-auto mr-auto">
	
						<table class="table-checkable" align="center" width="650" border="0" style="line-height:1.5; position:relative;top:100px; font-family: Roboto; font-size: 12px;" id="kt_table_1">
  <tr>
    <td colspan="10" style="text-align: center"><strong><U>DATA REKAP ABSEN<U></strong></td>
  </tr>
  <tr>
    <td colspan="10" style="text-align: center; font-style: italic;">Periode : 01/01/2025 s/d 31/01/2025</td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%">Nama Pegawai</td>
    <td style="text-align: center">:</td>
    <td width="34%">Muhammad Ramadhan Lerrick, ST</td>
    <td width="2%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="8%">&nbsp;</td>
    <td width="2%">&nbsp;</td>
    <td width="13%">&nbsp;</td>
    <td width="7%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%">Jabatan</td>
    <td width="3%" style="text-align: center">:</td>
    <td width="34%">Staff Administrasi Kepegawaian</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
  </tr>
</table>
						<table align="center" border="1" cellpadding="5" style="width: 650px; position:relative;top:100px; text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px;">
  <tr>
    <td width="1%" rowspan="2" bgcolor="#f7fcff" style="text-align:center"><b>No<b></td>
    <td width="18%" rowspan="2" bgcolor="#f7fcff" style="text-align:center"><b>Tanggal<b></td>
    <td colspan="3" bgcolor="#f7fcff" style="text-align:center"><b>Absensi<b></td>
    <td colspan="3" bgcolor="#f7fcff" style="text-align:center"><b>Lembur<b></td>
    <td width="17%" rowspan="2" bgcolor="#f7fcff" style="text-align:center"><b>Status<br>
    Kehadiran<b></td>
    <td width="12%" rowspan="2" bgcolor="#f7fcff" style="text-align:center"><b>Lokasi<br>
    Absen<b></td>
  </tr>
  <tr>
    <td width="9%" bgcolor="#f7fcff" style="text-align:center"><b>Jam<br>Masuk<b></td>
    <td width="9%" bgcolor="#f7fcff" style="text-align:center"><b>Jam<br>Pulang<b></td>
    <td width="9%" bgcolor="#f7fcff" style="text-align:center"><b>Total<br>Jam Kerja<b></td>
    <td width="9%" bgcolor="#f7fcff" style="text-align:center"><b>Masuk<b></td>
    <td width="9%" bgcolor="#f7fcff" style="text-align:center"><b>Pulang<b></td>
    <td width="9%" bgcolor="#f7fcff" style="text-align:center"><b>Total<br>Lembur<b></td>
  </tr>
  <tr>
    <td style="text-align: right">1</td>
    <td>1 November 2025</td>
    <td style="text-align: center">08:00:00</td>
    <td style="text-align: center">17:00:00</td>
    <td style="text-align: center">08:00:00</td>
    <td style="text-align: center">-</td>
    <td style="text-align: center">-</td>
    <td style="text-align: center">-</td>
    <td>Hadir</td>
    <td style="text-align: center">Kantor</td>
  </tr>
  <tr>
    <td style="text-align: right">2</td>
    <td>2 November 2025</td>
    <td style="text-align: center">08:00:00</td>
    <td style="text-align: center">17:00:00</td>
    <td style="text-align: center">08:00:00</td>
    <td style="text-align: center">-</td>
    <td style="text-align: center">-</td>
    <td style="text-align: center">-</td>
    <td>Perjalanan Dinas</td>
    <td style="text-align: center">Mobile</td>
  </tr>
  <tr>
    <td style="text-align: right">3</td>
    <td>3 November 2025</td>
    <td style="text-align: center">08:00:00</td>
    <td style="text-align: center">17:00:00</td>
    <td style="text-align: center">08:00:00</td>
    <td style="text-align: center">-</td>
    <td style="text-align: center">-</td>
    <td style="text-align: center">-</td>
    <td>Hadir</td>
    <td style="text-align: center">Kantor</td>
  </tr>
  <tr>
    <td style="text-align: right">4</td>
    <td>4 November 2025</td>
    <td style="text-align: center">08:00:00</td>
    <td style="text-align: center">17:00:00</td>
    <td style="text-align: center">08:00:00</td>
    <td style="text-align: center">-</td>
    <td style="text-align: center">-</td>
    <td style="text-align: center">-</td>
    <td>Hadir</td>
    <td style="text-align: center">Kantor</td>
  </tr>
  <tr>
    &nbsp;
  </tr>
  
</table>
<table align="center" class="footnote-1" width="650px" style="margin-top:450px; margin-bottom:20px; padding-top:5px; padding-bottom:20px;">
        <thead>
            <tr><th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr></thead>
        <tbody>
            <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            
            <tr style="height: 10px"><td></td></tr>
            <tr style=" width:650px;">
                <td style="text-align: left;">
                    <span class="span-qr" style="z-index: 99999">
                        <!--?xml version="1.0" encoding="UTF-8"?-->
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="40" height="40" viewBox="0 0 40 40"><rect x="0" y="0" width="40" height="40" fill="#ffffff"></rect><g transform="scale(1.905)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M9 0L9 1L8 1L8 3L9 3L9 4L8 4L8 8L6 8L6 9L5 9L5 10L4 10L4 8L3 8L3 9L2 9L2 8L0 8L0 9L2 9L2 10L3 10L3 12L4 12L4 11L7 11L7 10L8 10L8 8L9 8L9 11L8 11L8 12L6 12L6 13L8 13L8 15L9 15L9 16L10 16L10 17L11 17L11 16L12 16L12 17L13 17L13 18L12 18L12 19L10 19L10 20L11 20L11 21L12 21L12 20L13 20L13 19L14 19L14 21L15 21L15 18L16 18L16 19L17 19L17 20L19 20L19 18L20 18L20 20L21 20L21 17L20 17L20 16L21 16L21 14L20 14L20 15L19 15L19 16L18 16L18 13L19 13L19 12L20 12L20 13L21 13L21 12L20 12L20 11L19 11L19 10L21 10L21 9L20 9L20 8L18 8L18 9L17 9L17 8L14 8L14 9L13 9L13 8L12 8L12 7L13 7L13 6L12 6L12 7L11 7L11 6L10 6L10 7L9 7L9 4L10 4L10 0ZM12 0L12 1L11 1L11 4L12 4L12 5L13 5L13 2L12 2L12 1L13 1L13 0ZM6 9L6 10L7 10L7 9ZM11 9L11 10L10 10L10 11L9 11L9 12L8 12L8 13L9 13L9 15L10 15L10 16L11 16L11 14L13 14L13 15L12 15L12 16L13 16L13 17L17 17L17 19L18 19L18 18L19 18L19 17L18 17L18 16L17 16L17 15L16 15L16 14L13 14L13 13L16 13L16 12L14 12L14 10L15 10L15 11L17 11L17 13L18 13L18 12L19 12L19 11L18 11L18 10L19 10L19 9L18 9L18 10L15 10L15 9L14 9L14 10L13 10L13 9ZM12 10L12 11L11 11L11 12L12 12L12 13L13 13L13 12L12 12L12 11L13 11L13 10ZM1 11L1 12L0 12L0 13L1 13L1 12L2 12L2 11ZM9 12L9 13L10 13L10 12ZM14 15L14 16L16 16L16 15ZM8 17L8 18L9 18L9 17ZM8 19L8 21L9 21L9 19ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM14 0L14 7L21 7L21 0ZM15 1L15 6L20 6L20 1ZM16 2L16 5L19 5L19 2ZM0 14L0 21L7 21L7 14ZM1 15L1 20L6 20L6 15ZM2 16L2 19L5 19L5 16Z" fill="#000000"></path></g></g></svg>

                    </span>
                </td>
                <td>&nbsp;</td>
               <td colspan="2" valign="left" style="text-align: center">
                    <span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Sesuai
                            dengan ketentuan Peraturan Perusahaan yang berlaku, Perusahaan mengatur
                            bahwa
                            Dokumen ini telah ditandatangani dan diverifikasi secara elektronik, sehingga
                            tidak
                            diperlukan
                            tanda tangan basah pada Dokumen ini.</i></span></td>
            </tr>
<tr style="height: 10px"><td></td></tr>
             <tr>
                <td colspan="4" style="border-bottom: 1px solid #ccc;"></td>
            </tr>
            <tr style=" width:650px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; "><i>Document Printed By : Muhammad Nasrullah, S.Kom - 16/11/2025 - 20:39 WITA - Halaman 1 dari 1</i></span></td>
            </tr>
			<tr style=" width:650px;">
              <td colspan="4" style="text-align: center;"><span style="text-align:justify; line-height:1.5; font-family: Roboto; font-size: 11px; ">&nbsp;</span></td>
            </tr>

        </tbody>
    </table>
  

  
								</div>

								<!--End:: App Content-->
							</div>

							<!--End::App-->
						</div>

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
