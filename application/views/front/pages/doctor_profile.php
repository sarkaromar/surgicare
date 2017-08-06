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
            <div class="col-sm-5 col-xs-12">
                <div class="profile-block">
                    <div class="panel panel-profile">
                        <div class="panel-heading">
                            <img src="<?= base_url() ?>assets/img/doctor/<?= $list[0]->image ?>" alt="Doctor Profile Image" class="img-responsive img-center-xs">
                            <h3 class="panel-title"><?= $list[0]->name ?></h3>
                            <p class="caption"><?= $list[0]->dept_name ?></p>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li class="row">
                                    <span class="col-sm-4 col-xs-12"><strong>Speciality</strong></span>
                                    <span class="col-sm-8 col-xs-12"><?= $list[0]->special ?></span>
                                </li>
                                <li class="row">
                                    <span class="col-sm-4 col-xs-12"><strong>Education</strong></span>
                                    <span class="col-sm-8 col-xs-12"><?= $list[0]->edu ?></span>
                                </li>
                                <li class="row">
                                    <span class="col-sm-4 col-xs-12"><strong>Work Days</strong></span>
                                    <span class="col-sm-8 col-xs-12"><?= $list[0]->work_days ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer text-center-md text-center-sm text-center-xs">
                            <div class="row">
                                <div class="col-lg-6 col-xs-12">
                                    <ul class="list-unstyled list-inline sm-links">
                                        <li><a href="<?= $list[0]->fb ?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="<?= $list[0]->twt ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?= $list[0]->skype ?>"><i class="fa fa-skype"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <a href="<?= site_url('home/contact') ?>" class="btn btn-secondary text-uppercase">Book An Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-xs-12">
                <div class="profile-details">
                    <h3 class="main-heading2"><?= $list[0]->name ?></h3>
                    <h4>Royal Prince Alfred Hospital – United Kingdom</h4>
                    <h5>June 2006 to July 2020</h5>
                    <p><?= $list[0]->speech ?></p>
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