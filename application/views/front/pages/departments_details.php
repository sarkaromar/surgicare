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
    <div class="row mt-xl" style="margin-top: 10px">
        <div class="col-md-4">
            <img src="<?= base_url() ?>assets/img/dept/<?= $list[0]->image ?>" alt class="img-responsive" />
        </div>
        <div class="col-md-8">
            <h2 class="font-weight-semibold mb-xs"><?= $list[0]->dept_name ?></h2>
            <p class="lead font-weight-normal"><?= $list[0]->short_desc ?></p>
            <p><?= $list[0]->long_desc ?></p>
        </div>
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