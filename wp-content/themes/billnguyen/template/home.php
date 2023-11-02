<?php /* Template Name: Home */ ?>
<?php
get_header();
?>
<main>
    <section class="box-banner">
        <div class="container">
            <div class="content-caption">
                <div class="caption-left">
                    <div class="title-caption">
                        <label data-aos="fade-down"><?php the_field('sub_title'); ?></label>
                        <h1 data-aos="fade-up">
                            <?= nl2br(get_field('title')); ?>
                        </h1>
                    </div>
                    <div class="desc-caption" data-aos="fade-right">
                        <?php the_field('description'); ?>
                    </div>
                </div>
                <div class="caption-right">
                    <div class="avarta" data-aos="zoom-in"><img src="<?php the_field('avatar'); ?>" class="img-fluid" alt="<?php the_field('name', 'option'); ?>"></div>
                </div>
            </div>
        </div>
    </section> 
    <section class="box-young">
        <div class="container">
            <div class="content-young text-center">
                <!-- <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/young.png" class="img-fluid" alt=""></div>   -->
                <div class="avarta">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/el90HTd549I" title="Gotit interview" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="info">
                    <div class="title" data-aos="fade-up">
                        <h2><?= nl2br(get_field('title_2')); ?></h2>
                    </div>
                    <div class="sort-content-young" data-aos="fade-up">
                        <p><?php the_field('description_2'); ?></p>
                    </div>
                    <div class="btn-main" data-aos="fade-up">
                        <a href="<?php the_field('link'); ?>">
                            <span><?php the_field('button'); ?></span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.8684 10.8566C19.3084 11.1567 19.3084 11.6433 18.8684 11.9434L10.3218 17.7734C9.61202 18.2575 8.39844 17.9146 8.39844 17.2299L8.39844 5.57008C8.39844 4.88539 9.61202 4.54249 10.3218 5.02664L18.8684 10.8566Z" fill="#FFFCE1"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-history">
        <div class="container">
            <div class="content-history">
                <div class="list-history">
					<?php while ( has_sub_field('list_block3') ) : ?>
	                <div class="col-history">
	                    <div class="item-history">
	                        <!-- <div class="avarta"><img src="<?php the_sub_field('image'); ?>" class="img-fluid" alt="<?php the_sub_field('title'); ?>"></div>   -->
                            <div class="avarta">
                                <div class="avr-iframe">
                                    <img src="<?php the_sub_field('image'); ?>" class="img-fluid" alt="<?php the_sub_field('title'); ?>">
                                    <?php the_sub_field('title_copy'); ?>
                                </div>
                            </div>
	                        <div class="info">
	                            <h3><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h3>
	                            <div class="desc">
	                                <?php the_sub_field('description'); ?>
	                            </div>
	                            <div class="btn-main">
	                                <a href="<?php the_sub_field('link'); ?>">
	                                    <span><?php the_sub_field('button'); ?></span>
	                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	                                        <path d="M18.8684 10.8566C19.3084 11.1567 19.3084 11.6433 18.8684 11.9434L10.3218 17.7734C9.61202 18.2575 8.39844 17.9146 8.39844 17.2299L8.39844 5.57008C8.39844 4.88539 9.61202 4.54249 10.3218 5.02664L18.8684 10.8566Z" fill="#FFFCE1"/>
	                                    </svg>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
					<?php endwhile; ?>
	                <div class="col-history"></div>
	            </div>
            </div>
        </div>
    </section>
    <section class="box-music">
        <div class="container">
            <div class="content-music">
                <div class="top">
                    <div class="title" data-aos="fade-up">
                        <h2>
                            <span><?= nl2br(get_field('title_4')); ?></span>
                            <div class="btn-main">
                                <a href="<?php the_field('link_4'); ?>">
                                    <span><?php the_field('button_4'); ?></span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.8684 10.8566C19.3084 11.1567 19.3084 11.6433 18.8684 11.9434L10.3218 17.7734C9.61202 18.2575 8.39844 17.9146 8.39844 17.2299L8.39844 5.57008C8.39844 4.88539 9.61202 4.54249 10.3218 5.02664L18.8684 10.8566Z" fill="#FFFCE1"/>
                                    </svg>
                                </a>
                            </div>
                        </h2>
                    </div>
                    <div class="icon">
                        <div class="iframe-music">
                            <iframe width="1280" height="720" src="https://www.youtube.com/embed/oZvEGsVQXEs" title="Portfolio Dan tinh" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="desc-music" data-aos="fade-up">
                    <?= nl2br(get_field('description_4')); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-myshow">
        <div class="container">
            <div class="content-show">
                <div class="gallery">
                    <ul>
                        <li data-aos="zoom-in"><div class="avarta"><img src="<?php the_field('image_1'); ?>" class="img-fluid w-100" alt=""></div></li>
                        <li data-aos="zoom-in"><div class="avarta"><img src="<?php the_field('image_2'); ?>" class="img-fluid w-100" alt=""></div></li>
                    </ul>
                    <ul>
                        <li data-aos="zoom-in"><div class="avarta"><img src="<?php the_field('image_3'); ?>" class="img-fluid w-100" alt=""></div></li>
                        <li data-aos="zoom-in"><div class="avarta"><img src="<?php the_field('image_4'); ?>" class="img-fluid w-100" alt=""></div></li>
                        <li data-aos="zoom-in"><div class="avarta"><img src="<?php the_field('image_5'); ?>" class="img-fluid w-100" alt=""></div></li>
                    </ul>
                </div>
                <div class="title text-center" data-aos="fade-up">
                    <h2><?= nl2br(get_field('title_5')); ?></h2>
                </div>
                <div class="sort-music" data-aos="fade-up">
                    <?= nl2br(get_field('description_5')); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
<script>
    if($(window).innerWidth() >= 768){
        const cardsWrapper = document.querySelector(".list-history");
        let timeout = 1;
        gsap.to(cardsWrapper, {
            x: () => -(cardsWrapper.scrollWidth - document.documentElement.clientWidth)  + "px",
            ease: "none",
            scrollTrigger: {
                trigger: ".box-history",
                triggerHook: 'onLeave',
                start: "top top",
                scrub: true,
                end: () => "+=" + cardsWrapper.offsetWidth * timeout,
                duration: 6000,
                pin: true,
                markers: true,
            },
        });
    }
</script>