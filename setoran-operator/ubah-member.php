<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>
<!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-5.16081,119.395713),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Ubah Member
                </h3>
				
									


								</div>
								
            <div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="#.php" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
			
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-label-google btn-sm">
					<i class="fa fa-book-reader"></i>
					<span class="kt-hidden-mobile">Bantuan</span>
				</button>
				
				
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
			
				 
               
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

	<!-- begin:: Content -->
		<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
			
            <div class="alert alert-elevate alert-solid-warning alert-bold" role="alert">
                <div class="alert-icon"><i class="fa fa-info-circle"></i></div>
                <div class="alert-text">CCTV Sedang Offline !</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                </div>
            </div>
            <!-- end:: Alert -->

          

				<div class="kt-portlet__body">
				
					  
					  <div class="form-group row">
				<div class="col-xl-6">

									<!--begin::Portlet-->
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Diri</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">
						<div class="col-lg-3">
                          <label class="">ID Member :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000002MP823">
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label class="">Tipe Member :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pribadi">
                      </div>
                        </div>
						<div class="col-lg-6">
                          <label class="">Waktu Registrasi :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="31 Desember 2019 - 15:00 WITA">
                      </div>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-6">
                          <label><span style="color:#ff0000">*</span> Nama Lengkap :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="">
                        </div>
                      
						
						<div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> No. KTP / SIM :</label>
                          <input type="text" class="form-control form-control-sm" placeholder="737112301870002">
                      </div>
					 
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">
						<div class="col-lg-3">
                          <label class="">Nama Panggilan :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder=""  >
                      </div>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Jenis Kelamin :</label>
                         
						 <select class="form-control kt-selectpicker" data-live-search="true">
						
														<option>Pria</option>
														<option>Wanita</option>
														 <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														
													</select>
                        </div>
						
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Status :</label>
                        <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Single</option>
														<option>Menikah</option>
														<option>Janda</option>
														<option>Duda</option>
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
						<div class="col-lg-3">
                          <label><span style="color:#ff0000">*</span> Agama :</label>
                         <select class="form-control kt-selectpicker" data-live-search="true">
														<option>Islam</option>
														<option>Kristen Protestan</option>
														<option>Kristen Katholik</option>
														<option>Hindu</option>
														<option>Budha</option>
														<option>Konghucu</option>
														<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
														</select>
                        </div>
                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                     <div class="form-group row">


						
						<div class="col-lg-3">
					                           <label class=""><span style="color:#ff0000">*</span> Tempat Kelahiran :</label>
					                         <select class="form-control kt-selectpicker" data-live-search="true">
					 															<optgroup label="Sulawesi Selatan">
					 																<option value="AK">Maros</option>
					 																<option value="AK" selected>Makassar</option>
					 																
					 															</optgroup>

					 														</select>
					                         </div>
						<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Tanggal Kelahiran :</label>
                          <div class="form-group">
                         <div class="input-group date">
													<input type="text" class="form-control form-control-sm" readonly="" placeholder="== Pilih Tanggal ==" id="kt_datepicker_2">
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
												</div>
                      </div>

                        </div>
						<div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> No. Tlp / HP :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="082244444436" >
                      </div>
                      </div>
					  <div class="col-lg-3">
                          <label class=""><span style="color:#ff0000">*</span> Whatsapp :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="082244444436" >
                      </div>
                      </div>


                      </div>
					 
									 <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
									<div class="form-group row">

					  <div class="col-lg-6">
                          <label class=""><span style="color:#ff0000">*</span> Email :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" placeholder="xxx@xxx.xxx" >
                      </div>
                      </div>
					 
					  

									</div>
									 
									
									</div>
									
									
									</div>


									</div>
									
							<!--end:: Portlet-->


										</div>
								
										<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Alamat</div><br>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
												<div class="form-group row">

						<div class="col-lg-12">
                          <label><span style="color:#ff0000">*</span> Alamat Lengkap :</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="Jl. Toddopuli Raya Timur">

                        </div>
						
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
                       <div class="col-lg-6">
					   <label>Kode Pos</label>
                         <input type="text" class="form-control form-control-sm"  placeholder="90000">

                        </div>
						<div class="col-lg-3">
                          <label>RT :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="003">
                        </div>
						<div class="col-lg-3">
                          <label>RW :</label>
                          <input type="text" class="form-control form-control-sm"  placeholder="005">
                        </div>
						
						
						
                        </div>
						
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						  <div class="form-group row">
                        <div class="col-lg-6">
                          
                                <label>Provinsi :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
									  <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                  </select>
                            </div>
							<div class="col-lg-6">
                          <label class="">Kab / Kota :</label>
                        <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Makassar</option>
                                      <option value="2">Maros</option>
									  <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                     
                                  </select>
                      </div>
							
						

                        </div>
						<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						<div class="form-group row">
						<div class="col-lg-6">
                          
                                <label>Kecamatan :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Biringkanaya</option>
                                      <option value="2">Bontoala</option>
                                      <option value="3">Kepulauan Sangkarrang</option>
                                      <option value="4">Makassar</option>
                                      <option value="5">Mamajang</option>
                                      <option value="6">Manggala</option>
                                      <option value="7">Mariso</option>
                                      <option value="8">Panakkukang</option>
                                      <option value="9">Rappocini</option>
                                      <option value="10">Tallo</option>
                                      <option value="11">Tamalanrea</option>
                                      <option value="12">Tamalate</option>
                                      <option value="13">Ujung Pandang</option>
                                      <option value="14">Ujung Tanah</option>
                                      <option value="15">Wajo</option>
									  <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                  </select>
                            </div>
						<div class="col-lg-6">
                          
                                <label>Kelurahan :</label>
								
                                <select class="form-control kt-selectpicker" data-live-search="true">
                                      <option value="1" selected="">Bakung</option>
                                      <option value="2">Berua</option>
                                      <option value="3">Bulurokeng</option>
                                      <option value="4">Daya</option>
                                      <option value="5">Katimbang</option>
                                      <option value="6">Laikang</option>
                                      <option value="7">Paccerakkang</option>
                                      <option value="8">Pai</option>
                                      <option value="9">Sudiang</option>
                                      <option value="10">Sudiang Raya</option>
                                      <option value="11">Untia</option>
									  <option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
                                     
                                  </select>
                            </div>
                        
					  
                        </div>
						




											</div>

										</div>

									</div>
									

									</div>
									<div class="col-xl-2">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Foto Member</div><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
																										<div class="col-lg-12" style="text-align:center">
																											<div>&nbsp;</div>
																											<div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
																												<div class="kt-avatar__holder" style="background-image: url(&quot;http://keenthemes.com/metronic/preview/default/custom/user/../assets/media/users/300_20.jpg&quot;);"></div>
																												<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Upload Foto">
																													<i class="fa fa-pen"></i>
																													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																												</label>
																												<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
																													<i class="fa fa-times"></i>
																												</span>
																											</div>
																										</div>
																										</div>
																										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																										
																										
																								</div>
																								
																							</div>
																							</div>
																							</div>

					  
					  
					

									<!--end: Datatable -->
								</div>
							</div>

            </div>
									

<?php require '../layouts/footer.php' ?>
<?php require '../layouts/foot.php' ?>
