<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-xs"><?= $title ?> <span>Learn more about our doctors</span></h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?= $title ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <div class="row mt-lg mb-lg">
            <div class="col-md-12">
                <h2 class="font-weight-semibold mb-xs">Meet our Specialists</h2>
                <p class="lead font-weight-normal">At Porto Medical, we offer a wide array of departments, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li data-option-value="*" class="active"><a href="#">Show All</a></li>
                    <?php foreach ($depts as $dept) : ?>
                        <li data-option-value=".<?php $x = strtolower($dept->dept_name);
                    $y = str_replace(' ', '_', $x);
                    echo $y; ?>"><a href="#"><?= $dept->dept_name ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <hr class="solid">
                <div class="row">
                    <div class="sort-destination-loader sort-destination-loader-showing">
                        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                            <?php foreach ($doctors as $doctor) : ?>
                                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item <?php $x = strtolower($doctor->dept_name);
                                    $y = str_replace(' ', '_', $x);
                                    echo $y; ?>">
                                    <div class="portfolio-item">
                                        <a href="<?= base_url() ?>home/doctor_profile/<?= $doctor->id ?>" data-ajax-on-page class="text-decoration-none">
                                            <span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
                                                <span class="thumb-info-wrapper m-none">
                                                    <img src="<?= base_url() ?>assets/img/doctor/<?= $doctor->image ?>" class="img-responsive" alt="<?= $doctor->name ?>">
                                                </span>
                                                <span class="thumb-info-caption p-md pt-xlg pb-xlg">
                                                    <span class="custom-thumb-info-title">
                                                        <span class="custom-thumb-info-type font-weight-light text-md"><?= $doctor->dept_name ?></span>
                                                        <span class="custom-thumb-info-inner font-weight-semibold text-lg"><?= $doctor->name ?></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
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