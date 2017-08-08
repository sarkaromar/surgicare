<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-xs"><?= $title ?> <span>Send us a message or call us for more information</span></h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?= $title ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row mt-lg">
        <div class="col-md-4">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icon-location-pin icons"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="mb-sm">Address</h4>
                    <p class="font-size-lg">
                       Surgicare Clinic & Diagnostic Center, Pirojpur Sadar, Pirojpur.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icon-phone icons"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="mb-sm">Phone</h4>
                    <p class="font-size-lg">
                       +880 1713 927837
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box feature-box-style-2">
                <div class="feature-box-icon">
                    <i class="icon-envelope icons"></i>
                </div>
                <div class="feature-box-info">
                    <h4 class="mb-sm">Email</h4>
                    <p class="font-size-lg">
                        <a href="mailto:mail@example.com" class="text-decoration-none">help@surgicarebd.com</a><br>
                        <a href="mailto:mail2@example.com" class="text-decoration-none">info@surgicarebd.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr class="solid">
    <div class="row pt-lg mb-lg pb-xl">
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14736.717025387694!2d89.97112866731024!3d22.572397985182853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a00005f897de40f%3A0x3baddcf917b139db!2sSurgicare+Clinic+%26+Diagnostic+Center!5e0!3m2!1sen!2s!4v1502189872649" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <h4 class="font-weight-semibold mb-xlg">Send a Message to Us</h4>
            <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                <strong>Success!</strong> Your message has been sent to us.
            </div>
            <div class="alert alert-danger hidden mt-lg" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
                <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
            </div>
            
            <?php $s = $this->session->flashdata('success');
            if (!empty($s)) { ?>
                <!-- notice -->
                <div class="alert alert-success mt-lg">
                    <strong>Success!</strong> <?=$this->session->flashdata('success')?>
                </div>
            <?php } ?>
            <?php $d = $this->session->flashdata('danger');
            if (!empty($d)) { ?>
                <!-- notice -->
                <div class="alert alert-danger mt-lg" id="contactError">
                    <strong>Error!</strong> <?=$this->session->flashdata('danger')?>
                <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
            </div>
            <?php } ?>
            <?=form_open(site_url("home/contact_form"), array("id" => "contactForm"))?>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                    </div>
                </div>
            <?=form_close()?>
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