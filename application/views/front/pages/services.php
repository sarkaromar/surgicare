<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-xs"><?= $title ?> <span>20 Years Caring About You</span></h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?= $title ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row pt-xl">
        <div class="col-md-12">
            <h2 class="font-weight-semibold mb-xs">Our Services</h2>
            <p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div class="row mt-lg">
        <?php foreach ($lists as $list) : ?>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <img src="<?= base_url() ?>assets/img/services/<?= $list->image ?>" alt class="img-responsive" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="font-weight-semibold"><a href="" class="text-decoration-none"><?= $list->name ?></a></h4>
                        <p><?= $list->short_desc ?> </p>
                        <a href="<?= base_url() ?>home/services_details/<?= $list->id ?>" class="btn btn-borders btn-quaternary custom-button text-uppercase mt-sm mb-md font-weight-bold btn-sm">read more</a>
                    </div>  
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
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