@extends('component.main')

@section('title', 'Home')

@section('style')
@endsection

@section('main')


</div>
<div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
  <div class="container position-relative z-index">
    <div class="row">
      <div class="col-12 col-lg-6 p-0 image-container translate-effect-right wow fadeInLeft mb-3 mb-md-0"
        data-wow-delay="1s" data-wow-duration="1.5s">
        <img src="assets/custom/images/choose-img.jpg" alt="" class="w-100">
      </div>
      <div class="col-12 col-lg-6 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s"
        data-wow-duration="1.5s">
        <h2 class="font-30 font-weight-bold fables-second-text-color">ASUS ROG Strix Scar 16 (G634)</h2>
        <p class="fables-main-text-color font-14 my-3">
          ASUS ROG Strix Scar 16 (G634) tidak hanya memenuhi kebutuhan gaming yang tinggi, tetapi juga memberikan
          pengalaman gaming yang luar biasa dan tanpa kompromi bagi para pengguna. </p>
        <div id="accordion">
          <div class="card border-0 mb-2">
            <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
              <h5 class="mb-0 position-relative">
                <span
                  class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                  <i class="fas fa-plus"></i>
                </span>
                <button
                  class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate"
                  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Performa Maksimal:
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                Didukung oleh prosesor 13th Gen Intel Core i9-13980HX yang sangat bertenaga, laptop ini menawarkan
                performa maksimal untuk menjalankan game AAA terbaru dan tugas-tugas berat lainnya tanpa kendala. </div>
            </div>
          </div>
          <div class="card border-0 mb-2">
            <div class="card-header bg-transparent p-0 border rounded-0" id="headingTwo">
              <h5 class="mb-0 position-relative">
                <span
                  class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                  <i class="fas fa-plus"></i>
                </span>
                <button
                  class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Grafis Super NVIDIA GeForce RTX 4090:
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                Dilengkapi dengan kartu grafis terbaik hingga NVIDIA GeForce RTX 4090 Laptop GPU, laptop ini menyajikan
                pengalaman visual yang luar biasa dengan detail yang tajam dan grafis yang mulus. </div>
            </div>
          </div>
          <div class="card border-0 mb-2">
            <div class="card-header p-0 border bg-transparent rounded-0" id="headingThree">
              <h5 class="mb-0 position-relative">
                <span
                  class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                  <i class="fas fa-plus"></i>
                </span>
                <button
                  class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  Layar Mini LED ROG Nebula HDR: </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                Layar Mini LED berteknologi ROG Nebula HDR Display berukuran 16 inci dengan resolusi Quad HD+ 2560x1600
                pixel memberikan pengalaman gaming yang memukau dengan refresh rate 240Hz dan 3ms response time. </div>
            </div>
          </div>
          <div class="card border-0 mb-2">
            <div class="card-header p-0 border bg-transparent rounded-0" id="headingfour">
              <h5 class="mb-0 position-relative">
                <span
                  class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                  <i class="fas fa-plus"></i>
                </span>
                <button
                  class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed"
                  data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                  aria-controls="collapseThree">
                  Akses Gratis Xbox Game Pass: </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                Pengguna yang membeli laptop ini akan mendapatkan akses gratis Xbox Game Pass selama 3 bulan, memberikan
                akses ke berbagai pilihan game AAA terbaru yang dapat dimainkan tanpa harus membeli secara terpisah.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



<div class="container mt-6 mb-4 mb-md-5">
  <div class="row">
    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
      <div class="text-center">
        <h2 class="fables-main-text-color font-35 font-weight-bold mb-4">Latest Laptop</h2>

      </div>
    </div>
  </div>

  <div class="gallery-filter">

    <div class="portfolioContainer row filter-masonry">
      <div class="drawings places col-sm-6 col-md-3 mb-2">
        <div class="filter-img-block position-relative image-container translate-effect-right">
          <img src="assets/custom/images/index-testimonial1.jpg" alt="image" class="w-100">
          <div class="img-filter-overlay fables-main-color-transparent row m-0">
          </div>
        </div>
      </div>

      <div class="webDesign food col-sm-6 col-md-3 mb-2">
        <div class="filter-img-block position-relative image-container translate-effect-right">
          <img src="assets/custom/images/index-testimonial2.jpg" alt="image" class="w-100">
          <div class="img-filter-overlay fables-main-color-transparent row m-0">
          </div>
        </div>
      </div>
      <div class="webDesign objects col-sm-6 col-md-3 mb-2">
        <div class="filter-img-block position-relative image-container translate-effect-right">
          <img src="assets/custom/images/index-testimonial3.jpg" alt="image" class="w-100">
          <div class="img-filter-overlay fables-main-color-transparent row m-0">
          </div>
        </div>

      </div>
      <div class="appDesign brand col-sm-6 col-md-3 mb-2">
        <div class="filter-img-block position-relative image-container translate-effect-right">
          <img src="assets/custom/images/index-testimonial4.jpg" alt="image" class="w-100">
          <div class="img-filter-overlay fables-main-color-transparent row m-0">
          </div>
        </div>
      </div>

      <div class="webDesign col-sm-6 col-md-3 mb-2">
        <div class="filter-img-block position-relative image-container translate-effect-right">
          <img src="assets/custom/images/index-testimonial5.png" alt="image" class="w-100">
          <div class="img-filter-overlay fables-main-color-transparent row m-0">
          </div>
        </div>
      </div>
      <div class="webDesign col-sm-6 col-md-3 mb-2">
        <div class="filter-img-block position-relative image-container translate-effect-right">
          <img src="assets/custom/images/index-testimonial5.png" alt="image" class="w-100">
          <div class="img-filter-overlay fables-main-color-transparent row m-0">
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
@endsection