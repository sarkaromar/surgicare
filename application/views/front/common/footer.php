            <footer id="footer" class="m-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="mb-xlg">Location</h4>
                            <p>
                                <?= $this->settings->info->add ?><br />
                                Phone : <?= $this->settings->info->phn2 ?>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="mb-xlg">Opening Hours</h4>
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
                        <div class="col-md-3 col-md-offset-1">
                            <div class="contact-details">
                                <h4 class="mb-xlg">Emergency Cases</h4>
                                <a class="text-decoration-none" href="<?= base_url() ?>">
                                    <strong class="font-weight-light"><?= $this->settings->info->eme_phn ?></strong>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h4 class="mb-xlg">Social Media</h4>
                            <ul class="social-icons">
                                <li class="social-icons-facebook">
                                    <a href="<?= $this->settings->info->fb ?>/" target="_blank" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="<?= $this->settings->info->twt ?>/" target="_blank" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="<?= $this->settings->info->link ?>" target="_blank" title="Linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright pt-md pb-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 center m-none">
                                <p><?= $this->settings->info->copyright ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- js -->
        <script>
            var base_url = <?=base_url()?>
        </script>
        <!-- Vendor -->
        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery-cookie/jquery-cookie.min.js"></script>

        <!-- <script src="<?= base_url() ?>assets/master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src="master/less/skin-medical.less"></script> -->

        <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/common/common.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery.validation/jquery.validation.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/isotope/jquery.isotope.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/vide/vide.min.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="<?= base_url() ?>assets/js/theme.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="<?= base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="<?= base_url() ?>assets/js/views/view.contact.js"></script>

        <!-- Demo -->
        <script src="<?= base_url() ?>assets/js/demos/demo-medical.js"></script>

        <!-- Theme Custom -->
        <script src="<?= base_url() ?>assets/js/custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="<?= base_url() ?>assets/js/theme.init.js"></script>

        
    </body>
</html>