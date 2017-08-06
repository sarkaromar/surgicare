<section class="section-custom-medical">
    <div class="container">
        <div class="row medical-schedules">
            <div class="col-lg-3 box-one background-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                <div class="feature-box feature-box-style-2 p-lg">
                    <div class="feature-box-icon">
                        <img src="<?= base_url() ?>assets/img/icons/medical-icon-heart.png" alt class="img-responsive pt-xs" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="m-none">Medical Treatment</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 box-two background-color-tertiary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
                <h5 class="m-none">
                    <a href="<?= base_url() ?>" title="">
                        Doctors Timetable
                        <i class="icon-arrow-right-circle icons"></i>
                    </a>
                </h5>
            </div>
            <div class="col-lg-3 box-three background-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1200">
                <div class="expanded-info p-xlg background-color-primary">
                    <div class="info custom-info">
                        <span>Sun-Thu</span>
                        <span><?= $this->settings->info->sun_thu ?></span>
                    </div>
                    <div class="info custom-info">
                        <span>Friday</span>
                        <span><?= $this->settings->info->fri ?></span>
                    </div>
                    <div class="info custom-info">
                        <span>Saterday</span>
                        <span><?= $this->settings->info->sat ?></span>
                    </div>
                </div>
                <h5 class="m-none">
                    Opening Hours
                    <i class="icon-arrow-right-circle icons"></i>
                </h5>
            </div>
            <div class="col-lg-3 box-four background-color-secondary p-none appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1800">
                <a href="<?= base_url() ?>" class="text-decoration-none">
                    <div class="feature-box feature-box-style-2 m-none">
                        <div class="feature-box-icon">
                            <i class="icon-call-out icons"></i>
                        </div>
                        <div class="feature-box-info ml-md">
                            <label class="font-weight-light">Emergency case</label>
                            <strong class="font-weight-normal"><?= $this->settings->info->eme_phn ?></strong>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-xlg pt-xlg mb-xlg pb-xs">
            <div class="col-sm-8 col-md-8">
                <h2 class="font-weight-semibold mb-xs"><?= $about_us[0]->title ?></h2>
                <p class="lead font-weight-normal"><?= $about_us[0]->short_desc ?></p>
                <p>
                    <?php
                    $a = $about_us[0]->long_desc;
                    if (strlen($a) > 30) {
                        $stringCut = substr($a, 0, 500);
                        echo $stringCut . '...';
                    } else {
                        echo $a;
                    }
                    ?>
                </p>
                <a href="<?= site_url('about_us') ?>" class="btn btn-borders btn-quaternary custom-button text-uppercase mt-lg mb-lg font-weight-bold">read more</a>
            </div>
            <div class="col-sm-4 col-md-4">
                <img src="<?= base_url() ?>assets/img/about_us/<?= $about_us[0]->image ?>" alt class="img-responsive box-shadow-custom" /> 
            </div>
        </div>
    </div>
</section>
<section class="section section-no-border">
    <div class="container">
        <div class="row pt-xl">
            <div class="col-md-12">
                <h2 class="font-weight-semibold mb-xs">Departments</h2>
                <p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="row mt-lg">
            <?php foreach ($depts as $dept) : ?>
                <div class="col-md-4">
                    <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                        <div class="feature-box-icon">
                            <img src="<?= base_url() ?>assets/img/dept/<?= $dept->image ?>" alt class="img-responsive" />
                        </div>
                        <div class="feature-box-info ml-md">
                            <h4 class="font-weight-semibold"><a href="<?= site_url('departments') ?>" class="text-decoration-none"><?= $dept->dept_name ?></a></h4>
                            <p><?= $dept->short_desc ?></p>
                        </div>  
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row mt-lg pb-xlg">
            <div class="col-md-12 center">
                <a class="btn btn-borders btn-quaternary custom-button text-uppercase mt-lg font-weight-bold" href="<?= site_url('departments') ?>">view more</a>
            </div>
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <div class="row mt-xlg">
            <div class="col-md-12">
                <h2 class="font-weight-semibold m-none">Doctors</h2>
                <p class="lead font-weight-normal">Our Specialists</p>
                <!-- medical 2 ajax -->
            </div>
        </div>
        <div class="row mb-xlg">
            <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-xs pr-xs" data-plugin-options="{'items': 4, 'loop': false, 'dots': false, 'nav': true}">
                <?php foreach ($doctors as $doctor) : ?>
                    <div class="pr-sm pl-sm">
                        <a href="<?= base_url() ?>home/doctor_profile/<?= $doctor->id ?>" data-ajax-on-page class="text-decoration-none">
                            <span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
                                <span class="thumb-info-wrapper m-none">
                                    <img src="<?= base_url() ?>assets/img/doctor/<?= $doctor->image ?>" class="img-responsive" alt="<?= $doctor->name ?>">
                                </span>
                                <span class="thumb-info-caption p-md pt-xlg pb-xlg">
                                    <span class="custom-thumb-info-title">
                                        <span class="custom-thumb-info-type font-weight-light text-md"><?= $doctor->dept_name ?></span>
                                        <span class="custom-thumb-info-inner font-weight-semibold text-lg"><?= $doctor->name ?></span>
                                        <!-- icon  -->
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row mt-md">
            <div class="col-md-12">
                <h2 class="font-weight-semibold m-none">Resources</h2>
                <p class="lead font-weight-normal">List of our features resources</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <a href="<?= site_url('home/resource') ?>" class="text-decoration-none">
                    <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                        <span class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-responsive" src="<?= base_url() ?>assets/img/gallery/gallery-2.jpg">
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text p-xl">
                                <h4 class="font-weight-semibold mb-xs">Prepare for visit</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hend...</p>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-sm-4 col-md-4">
                <a href="<?= site_url('home/resource') ?>" class="text-decoration-none">
                    <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                        <span class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-responsive" src="<?= base_url() ?>assets/img/gallery/gallery-3.jpg">
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text p-xl">
                                <h4 class="font-weight-semibold mb-xs">Surgery proccess</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hend...</p>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-sm-4 col-md-4">
                <a href="<?= site_url('home/resource') ?>" class="text-decoration-none">
                    <span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
                        <span class="thumb-info-side-image-wrapper">
                            <img alt="" class="img-responsive" src="<?= base_url() ?>assets/img/gallery/gallery-4.jpg">
                        </span>
                        <span class="thumb-info-caption">
                            <span class="thumb-info-caption-text p-xl">
                                <h4 class="font-weight-semibold mb-xs">Patients</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hend...</p>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="row pb-xlg">
            <div class="col-md-12 center">
                <a href="<?= site_url('home/resource') ?>" class="btn btn-borders btn-quaternary custom-button text-uppercase font-weight-bold">view more</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mt-md">
            <div class="col-md-12">
                <h2 class="font-weight-semibold m-none">Our Partners</h2>
                <p class="lead font-weight-normal">Currently We Working with this company</p>
            </div>
        </div>
        <div class="row mb-xlg pb-xlg">
            <div class="content-grid pl-md pr-md">
                <div class="content-grid-row">
                    <div class="content-grid-item col-sm-4 col-md-2 center">
                        <img src="<?= base_url() ?>assets/img/insurance/insurance-logo-1.png" alt class="img-responsive" />
                    </div>
                    <div class="content-grid-item col-sm-4 col-md-2 center">
                        <img src="<?= base_url() ?>assets/img/insurance/insurance-logo-2.png" alt class="img-responsive" />
                    </div>
                    <div class="content-grid-item col-sm-4 col-md-2 center">
                        <img src="<?= base_url() ?>assets/img/insurance/insurance-logo-3.png" alt class="img-responsive" />
                    </div>
                    <div class="content-grid-item col-sm-4 col-md-2 center">
                        <img src="<?= base_url() ?>assets/img/insurance/insurance-logo-4.png" alt class="img-responsive" />
                    </div>
                    <div class="content-grid-item col-sm-4 col-md-2 center">
                        <img src="<?= base_url() ?>assets/img/insurance/insurance-logo-5.png" alt class="img-responsive" />
                    </div>
                    <div class="content-grid-item col-sm-4 col-md-2 center">
                        <img src="<?= base_url() ?>assets/img/insurance/insurance-logo-6.png" alt class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="book-appointment-box">
            <div class="row">
                <div class="col-md-9 col-xs-12 text-center-sm text-center-xs">
                    <h4>Please Call for Doctor Appointment Booking</h4>
                    <h3><i class="fa fa-phone-square"></i> <?= $this->settings->info->appoint_phn ?></h3>
                </div>
                <div class="col-md-3 col-xs-12 hidden-sm hidden-xs">
                    <div class="box-img">
                        <img src="<?= base_url() ?>assets/img/contact/contact_img.png" alt="contact image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>