<?php /* Template Name: My Research */ ?>
<?php
get_header();
?>
<main>
    <section class="box-content">
        <div class="container">
            <div class="detail-content">
                <div class="head-content text-center" data-aos="fade-up">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="txt-content text-center">
                <?php $i = 1; ?>
                <?php while ( has_sub_field('list') ) : ?>
                    <div class="box-detail">
                        <div class="head-detail text-center">
                            <div class="numb-step" data-aos="fade-up"><span>0<?= $i; ?></span></div>
                            <div class="title-detail" data-aos="fade-up">
                                <?= nl2br(get_sub_field('title')); ?>
                            </div>
                        </div>
                        <div class="detail">
                            <?php the_sub_field('content'); ?>
                        </div>
                        <div class="btn-main text-center">
                            <a href="<?php the_sub_field('link'); ?>">
                                <span><?php the_sub_field('button'); ?></span>
                            </a>
                        </div>
                    </div>
                <?php $i++; ?>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>