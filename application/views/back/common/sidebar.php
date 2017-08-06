<!-- Left side column -->
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <!-- slider -->
            <li class="<?php if ($page == 'back/home/slider') echo "active"; ?>">
                <a href="<?php echo site_url("admin_panel/slider")?>" >
                    <i class="fa fa-fw   fa-picture-o"></i>
                    <span>Slider</span>
                </a>
            </li>
            <!-- about us -->
            <li class="<?php if ($page == 'back/about_us/about_us') echo "active"; ?>">
                <a href="<?php echo site_url("admin_panel/about_us")?>" >
                    <i class="fa fa-fw fa-group"></i>
                    <span>About Us</span>
                </a>
            </li>
            <!-- our services -->
            <li class="<?php if ($page == 'back/services/services') echo "active"; ?>">
                <a href="<?php echo site_url("admin_panel/our_services")?>" >
                    <i class="fa fa-fw fa-briefcase"></i>
                    <span>Our Services</span>
                </a>
            </li>
            <!-- dept. -->
            <li class="<?php if ($page == 'back/dept/dept') echo "active"; ?>">
                <a href="<?php echo site_url("admin_panel/our_departments")?>" >
                    <i class="fa fa-fw fa-medkit"></i>
                    <span>Our Departments</span>
                </a>
            </li>
            <!-- doctors -->
            <li class="<?php if ($page == 'back/doctor/doctor') echo "active"; ?>">
                <a href="<?php echo site_url("admin_panel/our_doctors")?>" >
                    <i class="fa fa-fw fa-stethoscope"></i>
                    <span>Our Doctors</span>
                </a>
            </li>
            <!-- faq's -->
            <li class="<?php if ($page == 'back/faqs/faqs') echo "active"; ?>">
                <a href="<?php echo site_url("admin_panel/faqs")?>" >
                    <i class="fa fa-fw fa-question-circle"></i>
                    <span>FAQ's</span>
                </a>
            </li>
            <!-- common settings -->
            <li class="<?php if ($page == 'back/settings/common_settings') echo "active"; ?>" >
                <a href="<?php echo site_url("admin_panel/common_settings")?>" >
                    <i class="fa fa-fw fa-gears"></i>
                    <span>Common Settings</span>
                </a>
            </li>
        </ul>
    </section>
</aside>