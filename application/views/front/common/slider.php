<div class="slider-container rev_slider_wrapper" style="height: 650px;">
    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
        <ul>
            <?php foreach ($sliders as $slider) : ?>
                <li data-transition="fade">
                    <img src="<?= base_url() ?>assets/img/slider/<?= $slider->image ?>"  
                         alt=""
                         data-bgposition="center center" 
                         data-bgfit="cover" 
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <div class="tp-caption main-label"
                         data-x="left" data-hoffset="25"
                         data-y="center" data-voffset="-5"
                         data-start="1500"
                         data-whitespace="nowrap"                         
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
                         data-mask_in="x:0px;y:0px;"><?= $slider->desc ?></div>

                    <div class="tp-caption main-label"
                         data-x="left" data-hoffset="25"
                         data-y="center" data-voffset="-55"
                         data-start="500"
                         style="z-index: 5; text-transform: uppercase; font-size: 52px;"
                         data-transform_in="y:[-300%];opacity:0;s:500;"><?= $slider->title ?></div>

                    <div class="tp-caption bottom-label"
                         data-x="left" data-hoffset="25"
                         data-y="center" data-voffset="40"
                         data-start="2000"
                         style="z-index: 5; border-bottom: 1px solid #fff; padding-bottom: 3px;"
                         data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;"><?= $slider->link ?></div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>