<?php /* Template Name: Contact */ ?>
<?php
get_header();
?>
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="content-wrap col-md-12 col-sm-12 col-xs-12">
                <article id="post-32" class="post-32 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"><h2 style="font-size: 36px; color: #303030; line-height: 72px; text-align: center;" class="vc_custom_heading contact-title title36 mb40 font-bold">OUR STORES</h2></div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid service-contact-page">
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="item-service-style1 bg-color text-center bg-gray element-service">
                                            <a class="icon-link title30 color" href="#" onclick="return false;" target="_parent" title="">
                                                <i class="la la-map-marker"></i>
                                            </a>
                                            <div class="info-service">
                                                <h3 class="title18 text-uppercase font-title font-bold">
                                                    <a class="white" href="#" target="_parent"> Address </a>
                                                </h3>
                                                <div class="description">
                                                    <p>
                                                        <?php the_field('address', 'option') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="item-service-style1 bg-color text-center element-service">
                                            <a class="icon-link title30 color" href="#" onclick="return false;" target="_parent" title="">
                                                <i class="la la-phone"></i>
                                            </a>
                                            <div class="info-service">
                                                <h3 class="title18 text-uppercase font-title font-bold">
                                                    <a class="white" href="#" target="_parent"> CONTACT US </a>
                                                </h3>
                                                <div class="description">
                                                    <p class="white">
                                                        Telephone: <?php the_field('phone', 'option') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="item-service-style1 bg-color text-center bg-gray element-service">
                                            <a class="icon-link title30 color" href="#" onclick="return false;" target="_parent" title="">
                                                <i class="la la-envelope"></i>
                                            </a>
                                            <div class="info-service">
                                                <h3 class="title18 text-uppercase font-title font-bold">
                                                    <a class="white" href="#" target="_parent"> Email </a>
                                                </h3>
                                                <div class="description">
                                                    <p>
                                                        <?php the_field('email', 'option') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid mb120">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <h2 style="font-size: 36px; color: #303030; line-height: 72px; text-align: center;" class="vc_custom_heading contact-title title36 mb40 font-bold">GET IN TOUCH</h2>
                                        <?= do_shortcode('[contact-form-7 id="220" title="Trang liên hệ"]'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .entry-content -->
                </article>
                <!-- #post-## -->
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>