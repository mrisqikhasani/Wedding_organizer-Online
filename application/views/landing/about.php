<!-- Contact Start -->
<div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Kontak Kami</p>
                <h1 class="display-6">Silahkan Hubungin Kami pada Kontak di bawah ini </h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-envelope fa-2x text-white"></i>
                    </div>
                    <p class="mb-2"><?= $getDataWeb->email1;?></p>
                    <p class="mb-0"><?= $getDataWeb->email2;?></p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-phone fa-2x text-white"></i>
                    </div>
                    <p class="mb-2"><?= $getDataWeb->phone_number1;?></p>
                    <p class="mb-0"><?= $getDataWeb->phone_number2;?></p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <p class="mb-2"><?= $getDataWeb->address;?></p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                    <?= $getDataWeb->maps;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->