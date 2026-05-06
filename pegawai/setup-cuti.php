<?php require '../layouts/head.php' ?>
<link src="../assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
<?php require './layouts/header.php' ?>

<div class="kt-subheader   kt-grid__item" id="kt_subheader">
  <div class="kt-container  kt-container--fluid ">
          <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
              Form Cuti
            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
              <span class="kt-subheader__desc" id="kt_subheader_total">
                Buat Pengajuan Cuti </span>

            </div>

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

						<!-- begin:: Content -->
						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
              <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                  <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                      <h3 class="kt-portlet__head-title">Tambah Cuti <small>Buat Pengajuan Cuti Baru</small></h3>
                    </div>
                  </div>
                  <form class="kt-form" id="kt_form">
                  <div class="kt-portlet__body">
                    <div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
              <div class="card">
                <div class="card-header" id="headingOne7">
                  <div class="card-title" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Tahunan
                  </div>
                </div>
                <div id="collapseOne7" class="collapse show" aria-labelledby="headingOne7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col-lg-9 col-md-12 xol-sm-12">
                    <div class="edit-item clearfix">
          <div class="edit-item-number text-dark">
            <div class="form-control-static">1.</div>
          </div>
          <div class="edit-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <h5>Standar perusahaan</h5>
            </div>
            <div class="d-inline-flex">
                <h5 class="mr-2">Saldo cuti</h5>
                  <span>12 hari</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12">
          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
          <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button>
        </div>
      </div>
        <h5 class="ml-head">Berlaku untuk : </h5>
        <div class="row mt-4 mb-4">
          <div class="col-lg-3 col-md-12 col-sm-12">
      <h5 class="ml-head">General</h5>
        <div class="kt-timeline-v2 kt-timeline-v2-setup">
              <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-danger"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                  CEO
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-success"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text">
                    Corporate Secretary
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
      <h5 class="ml-head">Human Resource</h5>
        <div class="kt-timeline-v2 kt-timeline-v2-setup">
              <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-danger"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                    General Affair Officer
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-success"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text">
                    HRD Assistant
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-brand"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    HRD Manager
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-warning"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Maintenance Officer
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
      <h5 class="ml-head">Finance and Accounting</h5>
        <div class="kt-timeline-v2 kt-timeline-v2-setup">
              <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-danger"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                    Accountant
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-success"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text">
                    Bookkeeper
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-brand"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Finance-Accounting Manager
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-warning"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Treasure
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-sm-12">
      <h5 class="ml-head">Engineer</h5>
        <div class="kt-timeline-v2 kt-timeline-v2-setup">
              <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-danger"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                    Back-end Engineer
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-success"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text">
                    Front-end Engineer
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-brand"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Lead Engineer
                  </div>
                </div>
                <div class="kt-timeline-v2__item">
                  <div class="kt-timeline-v2__item-cricle">
                    <i class="fa fa-genderless kt-font-warning"></i>
                  </div>
                  <div class="kt-timeline-v2__item-text kt-padding-top-5">
                    Project Manager
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

          <div class="row mt-4 mb-4">
            <div class="col-lg-3 col-md-12 col-sm-12">
        <h5 class="ml-head">Marketing</h5>
          <div class="kt-timeline-v2 kt-timeline-v2-setup">
                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-danger"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                    Marketing Junior Intern
                    </div>
                  </div>
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-success"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text">
                      Marketing Manager
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
        <h5 class="ml-head">Sales</h5>
          <div class="kt-timeline-v2 kt-timeline-v2-setup">
                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-danger"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                      Sales
                    </div>
                  </div>
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-success"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text">
                      Sales Leader
                    </div>
                  </div>
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-brand"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text kt-padding-top-5">
                      Telemarketing
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
        <h5 class="ml-head">Public Relation</h5>
          <div class="kt-timeline-v2 kt-timeline-v2-setup">
                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-danger"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                      PR Executive
                    </div>
                  </div>
                  <div class="kt-timeline-v2__item">
                    <div class="kt-timeline-v2__item-cricle">
                      <i class="fa fa-genderless kt-font-success"></i>
                    </div>
                    <div class="kt-timeline-v2__item-text">
                      Promotion Team
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Alasan Penting
                  </div>
                </div>
                <div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          <div class="ordered-item-number text-dark">
            <div class="form-control-static">1.</div>
          </div>
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <h5>Standar perusahaan
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button></h5>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="small">
                  12 hari
                </span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Bersalin
                  </div>
                </div>
                <div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          <div class="ordered-item-number text-dark">
            <div class="form-control-static">1.</div>
          </div>
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <h5>Standar perusahaan
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button></h5>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="small">
                  12 hari
                </span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingfour7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefour7" aria-expanded="false" aria-controls="collapseThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Besar
                  </div>
                </div>
                <div id="collapsefour7" class="collapse" aria-labelledby="headingfour7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          <div class="ordered-item-number text-dark">
            <div class="form-control-static">1.</div>
          </div>
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <h5>Standar perusahaan
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button></h5>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="small">
                  12 hari
                </span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingfive7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsefive7" aria-expanded="false" aria-controls="collapseThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Khusus
                  </div>
                </div>
                <div id="collapsefive7" class="collapse" aria-labelledby="headingfive7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          <div class="ordered-item-number text-dark">
            <div class="form-control-static">1.</div>
          </div>
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <  <h5>Standar perusahaan
                  <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                  <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button></h5>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="small">
                  12 hari
                </span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingsix7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapsesix7" aria-expanded="false" aria-controls="collapsThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Sakit
                  </div>
                </div>
                <div id="collapsesix7" class="collapse" aria-labelledby="headingsix7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          <div class="ordered-item-number text-dark">
            <div class="form-control-static">1.</div>
          </div>
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <h5>Standar perusahaan
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button></h5>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="small">
                  12 hari
                </span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingeight7">
                  <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseeight7" aria-expanded="false" aria-controls="collapsThree7">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
                      </g>
                    </svg> Cuti Menikah
                  </div>
                </div>
                <div id="collapseeight7" class="collapse" aria-labelledby="headingeight7" data-parent="#accordionExample7">
                  <div class="card-body">
                    <div class="ordered-item clearfix">
          <div class="ordered-item-number text-dark">
            <div class="form-control-static">1.</div>
          </div>
          <div class="order-item-right">
            <div class="ordered-item-head clearfix text-dark">
              <h5>Standar perusahaan
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right ml-3" data-toggle="modal" data-target="#edit-pengaturan">Edit Kebijakan Cuti</button>
                <button type="button" class="btn btn-secondary btn-hover-brand btn-sm float-right" data-toggle="modal" data-target="#edit-saldo">Edit Saldo Cuti</button></h5>
            </div>
            <div class="clearfix"></div>
            <div class="ordered-item-content">
              <div class="outer-spaced-bottom-20">
                <span class="mr-2">Saldo cuti</span>
                <span class="small">
                  12 hari
                </span>

              </div>
            </div>
          </div>
        </div>
                  </div>
                </div>
              </div>
            </div>
                    </div>

                  </form>
                  </div>
							<!--end:: Portlet-->
							</div>
              <div class="modal fade" id="edit-saldo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
  									<div class="modal-content">
  										<div class="modal-header">
  											<h5 class="modal-title" id="exampleModalLongTitle">Saldo Cuti tahunan - Standar perusahaan</h5>
  											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  											</button>
  										</div>
  										<div class="modal-body">
                        <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                        <table class="kt-datatable__table" style="display: block;">
                          <thead class="kt-datatable__head">
                            <tr class="kt-datatable__row" style="left: 0px;">
                              <th data-field="AgentName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 200px;">Nama</span></th>
                              <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Budget Standar</span></th>
                              <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 120px;">Budget Periode Ini</span></th>
                              <th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 70px;">Terpakai</span></th>
                              <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Direncanakan</span></th>
                              <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Saldo</span></th>
                            </tr>
                          </thead>
                          <tbody style="" class="kt-datatable__body">
                            <tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;">
                              <td data-field="AgentName" class="kt-datatable__cell"><span style="width: 200px;">
                                  <div class="kt-user-card-v2">
                                    <div class="kt-user-card-v2__pic"> <img alt="photo" src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/../../assets/media/users/100_10.jpg"> </div>
                                    <div class="kt-user-card-v2__details"> <a class="kt-user-card-v2__name" href="#">Obed Helian</a> <span class="kt-user-card-v2__desc">Developer</span> </div>
                                  </div>
                                </span></td>
                              <td data-field="Country" class="kt-datatable__cell"><span style="width: 100px;"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="12"></span></td>
                              <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 120px;"><input type="text" class="form-control form-control-sm" placeholder="12"></span></td>
                              <td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 70px;">0
                                </span></td>
                              <td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;">0</span></td>
                              <td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 110px;"><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">12</span></span>
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="kt-datatable__pager kt-datatable--paging-loaded">
                          <div class="kt-datatable__pager-info">
                            <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select page size">
                                <div class="filter-option">
                                  <div class="filter-option-inner">
                                    <div class="filter-option-inner-inner">10</div>
                                  </div>
                                </div>
                              </button>
                              <div class="dropdown-menu ">
                                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                  <ul class="dropdown-menu inner show" role="presentation"></ul>
                                </div>
                              </div>
                            </div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 40</span>
                          </div>
                          <ul class="kt-datatable__pager-nav">
                            <li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
                            <li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
                            <li style=""></li>
                            <li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li>
                            <li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li>
                            <li style=""></li>
                            <li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li>
                            <li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="4"><i class="flaticon2-fast-next"></i></a></li>
                          </ul>
                        </div>
                      </div>
  										</div>
  										<div class="modal-footer">
  											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  											<button type="button" class="btn btn-primary">Save changes</button>
  										</div>
  									</div>
  								</div>
  							</div>

              <!--<div class="modal fade" id="edit-pengaturan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    								<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    									<div class="modal-content">
    										<div class="modal-header">
    											<h5 class="modal-title" id="exampleModalLongTitle">Pengaturan Cuti tahunan - Standar perusahaan</h5>
    											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    											</button>
    										</div>
    										<div class="modal-body">
                          <div class="form-group">
													<label>Nama kebijakan cuti</label>
													<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Standar Perusahaan">
                        	</div>
                          <div class="form-group">
													<label>saldo setiap staf adalah</label>
                          <div class="input-group">
														<input type="text" class="form-control" placeholder="12" aria-describedby="basic-addon2">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Hari / Tahun</span></div>
													</div>
                        	</div>
                          <div class="form-group">
													<label>Saldo akan diperbaharui setiap</label>
                          <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
													<button type="button" class="btn btn-secondary btn-square col-lg-3" id="hide1">1 Januari</button>&nbsp;
													<button type="button" class="btn btn-secondary btn-square col-lg-3" id="hide2">Tanggal Bergabung Staff</button>&nbsp;
                          <button type="button" class="btn btn-secondary btn-square col-lg-3" id="show">Tanggal Tertentu</button>&nbsp;
												</div>
                        	</div>
                          <div class="form-group tampil">
													<label>Tanggal</label>
                          <div class="input-group date">
													<input type="text" class="form-control" readonly placeholder="" id="kt_datepicker_2" />
													<div class="input-group-append">
														<span class="input-group-text">
															<i class="la la-calendar-check-o"></i>
														</span>
													</div>
                        	</div>
    										</div>
                        <div class="form-group">
                        <label>Staf dapat menggunakan saldo cuti ini sejak</label>
                        <div class="kt-section__content kt-section__content--solid">
                        <button type="button" class="btn btn-secondary btn-square ">Tanggal Bergabung Staff</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">1 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">3 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">6 Bulan Bergabung</button>&nbsp;
                        <button type="button" class="btn btn-secondary btn-square ">1 Tahun Bergabung</button>&nbsp;
                      </div>
                        </div>
                        <div class="form-group">
                        <label>Hak cuti ini diberikan kepada</label>
                        <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	General
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	CEO
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Corporate Secretary
																</a>
															</div>
														</div>
													</div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="kt-widget2">
														<div class="kt-widget2__item kt-widget2__item--primary">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Human Resource
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--warning">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	General Affair Officer
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--brand">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	 HRD Assistant
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--success">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	HRD Manager
																</a>
															</div>
														</div>
														<div class="kt-widget2__item kt-widget2__item--danger">
															<div class="kt-widget2__checkbox">
																<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
																	<input type="checkbox">
																	<span></span>
																</label>
															</div>
															<div class="kt-widget2__info">
																<a href="#" class="kt-widget2__title">
																	Maintenance Officer
																</a>
															</div>
														</div>
													</div>
                        </div>
                      </div>
                      </div>
    										<div class="modal-footer">
    											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    											<button type="button" class="btn btn-primary">Save changes</button>
    										</div>
    									</div>
    								</div>
    							</div>
                </div>-->

                <div class="modal fade" id="edit-pengaturan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
                    <form class="kt-form kt-form--fit kt-form--label-right">
										<div class="modal-body">
											<div class="kt-portlet kt-portlet--responsive-mobile">
										<div class="kt-portlet__head kt-portlet__head--noborder  kt-ribbon kt-ribbon--danger kt-ribbon--shadow kt-ribbon--left kt-ribbon--round">
											<div class="kt-ribbon__target" style="top: 10px; left: -2px;">
												Pengaturan Cuti tahunan - Standar perusahaan
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="form-group row">
												<div class="col-lg-12">
                          <div class="form-group">
                          <label>Nama kebijakan cuti</label>
                          <input type="text" class="form-control form-control-sm" aria-describedby="emailHelp" placeholder="Standar Perusahaan">
                          </div>
												</div>
												</div>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                        <div class="form-group row">
  												<div class="col-lg-12">
                            <div class="form-group">
  													<label>saldo setiap staf adalah</label>
                            <div class="input-group input-group-sm">
  														<input type="text" class="form-control" placeholder="12" aria-describedby="basic-addon2">
  														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">Hari / Tahun</span></div>
  													</div>
                          	</div>
  												</div>
  												</div>
  												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                          <div class="form-group row">
                            <div class="col-lg-12">
                              <div class="form-group">
                              <label>Staf dapat menggunakan saldo cuti ini sejak</label>
                              <select class="form-control kt-selectpicker" data-live-search="true">
                              <option value="AK">Tanggal Bergabung Staff</option>
                              <option value="HI">1 Bulan Bergabung</option>
                              <option value="CA">3 Bulan Bergabung</option>
                              <option value="NV">6 Bulan Bergabung</option>
                              <option value="NV">1 Tahun Bergabung</option>
                            </select>
                        </div>
                            </div>
                              </div>
                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                            <div class="form-group row">
      												<div class="col-lg-12">
                                <div class="form-group">
      													<label>Saldo akan diperbaharui setiap</label>
                                <div class="kt-section__content kt-section__content--solid" role="group" aria-label="...">
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-3" id="hide1">1 Januari</button>&nbsp;
      													<button type="button" class="btn btn-secondary btn-square btn-sm col-lg-3" id="hide2">Tanggal Bergabung Staff</button>&nbsp;
                                <button type="button" class="btn btn-secondary btn-square btn-sm col-lg-3" id="show">Tanggal Tertentu</button>&nbsp;
      												</div>
                              	</div>
      												</div>
      												</div>
                              <div class="form-group row tampil">
                                <div class="col-lg-12">
                                  <div class="form-group">
    													<label>Tanggal</label>
                              <div class="input-group date">
    													<input type="text" class="form-control" readonly placeholder="" id="kt_datepicker_2" />
    													<div class="input-group-append">
    														<span class="input-group-text">
    															<i class="la la-calendar-check-o"></i>
    														</span>
    													</div>
                            	</div>
                            </div>
                          </div>
        										</div>
                  <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <label>Hak cuti ini diberikan kepada</label>
                    </div>
                    <div class="col-lg-12">
                      <select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple">
															<optgroup label="General">
																<option value="AK" selected>CEO</option>
																<option value="HI">Corporate Secretary</option>
															</optgroup>
															<optgroup label="Human Resource">
																<option value="CA">General Affair Officer</option>
																<option value="NV" selected>HRD Assistant</option>
																<option value="OR">HRD Manager</option>
																<option value="WA">Maintenance Officer</option>
															</optgroup>
															<optgroup label="Finance and Accounting">
																<option value="AZ">Accountant</option>
																<option value="CO">Bookkeeper</option>
																<option value="ID">Finance-Accounting Manager</option>
																<option value="MT" selected>Treasure</option>
															</optgroup>
															<optgroup label="Engineer">
																<option value="SD">Back-end Engineer</option>
																<option value="TX">Front-end Engineer</option>
																<option value="TN">Lead Engineer</option>
																<option value="WI">Project Manager</option>
															</optgroup>
															<optgroup label="Marketing">
																<option value="CT">Marketing Junior Intern</option>
																<option value="DE">Marketing Manager</option>
															</optgroup>
														</select>
                    </div>
                      </div>
      </div>
    </div>
</div>
</form>
												</div>
										</div>
									</div>
								</div>
							</div>


<!--begin::Page Scripts(used by this page) -->

<?php require '../layouts/footer.php' ?>
<script src="../assets/js/pages/components/calendar/calendar-cuti.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script>
$("#show").click(function(){
    $(".tampil").show();
  });
  $("#hide1").click(function(){
      $(".tampil").hide();
    });
    $("#hide2").click(function(){
        $(".tampil").hide();
      });
</script>
<?php require '../layouts/foot.php' ?>
