    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?= base_url('assets/landing/')?>img/background1edit.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Selamat Datang <br> <strong class="text-dark">JeWePe Wedding Organizer</strong></p></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Mengabadikan setiap momen pernikahan anda</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?= base_url('assets/landing/')?>img/background2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                        <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Selamat Datang <br> <strong class="text-dark">JeWePe Wedding Organizer</strong></p></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Mengabadikan setiap momen pernikahan anda</h1>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Store Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Katalog Paket Pernikahan</p>
                <h1 class="display-6">Silahkan pilih paket pernikahan Anda</h1>
            </div>
            <div class="row g-4">
                <?php
                    foreach($getAllKatalog as $row) :
                ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="<?= base_url('assets/files/katalog/').$row->image; ?>" alt="">
                        <div class="p-4">
                            <h4 class="mb-3"><?= $row->package_name; ?></h4>
                            <?= word_limiter(strip_tags($row->description), 10); ?>
                            <h4 class="text-primary">Rp<?= number_format($row->price, 2, ",", "."); ?></h4>
                        </div>
                        <div class="store-overlay">
                            <a href="<?= base_url('Beranda/detail?id='.$row-> catalogue_id); ?>" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a href="" class="btn btn-primary rounded-pill py-3 px-5">View More Products</a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Store End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 my-5">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white">Ulasan</p>
                <h1 class="display-6">Apa kata mereka menggunakan jasa JewePe Wedding Organizer </h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Saya sangat senang dengan layanan JeWePe Wedding Organizer. Mereka membuat pernikahan saya menjadi momen yang indah.</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-start ms-3">
                            <h5>Rendy & Hilma</h5>
                            <span class="text-primary">Client</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">JeWePe Wedding Organizer memberikan pengalaman pernikahan yang tak terlupakan. Terima kasih atas perencanaan yang brilian!
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-start ms-3">
                            <h5>Nurhasanah & Indra</h5>
                            <span class="text-primary">Client</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">Kami memiliki pengalaman yang luar biasa dengan JewePe Wedding Organizer. Layanan mereka luar biasa, dan mereka membuat seluruh prosesnya lancar dan bebas stres. Sangat direkomendasikan!</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="text-start ms-3">
                            <h5>Rizky & Lia</h5>
                            <span class="text-primary">Client</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
                <h1 class="display-6">Berkonsultasi dengan Kami</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <p class="text-center mb-5">Kami siap membantu Anda mewujudkan pernikahan impian anda bersama kami. Hubungi kami dengan dibawah ini </p>
                    <div class="row g-5">
                        <div class="col-lg-12 text-center">
                            <a href="<?= base_url('About'); ?>" class="btn btn-lg btn-primary">Mulai Wujudkan Impian</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Start -->

