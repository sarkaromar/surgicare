<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-xs"><?= $title ?><span>20 Years Caring About You</span></h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?= $title ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row mt-xl">
        <div class="col-md-12">
            <h2 class="font-weight-semibold mb-xs">FAQS</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, 
                tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. 
                Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, 
                tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. 
                Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, 
                tortor risus dapibus tortor.
            </p>
        </div>
    </div>
    <div class="row mb-xlg">
        <div class="col-md-12">
            <div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
                <?php foreach ($faqs as $faq) : ?>
                    <section class="toggle">
                        <label><?= $faq->ques ?></label>
                        <div class="toggle-content">
                            <p><?= $faq->ansr ?></p>
                        </div>
                    </section>
                <?php endforeach; ?>
            </div>
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