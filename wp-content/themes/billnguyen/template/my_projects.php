<?php /* Template Name: My Projects */ ?>
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
                <div class="txt-content">
            	<?php $i = 1; ?>
                <?php while ( has_sub_field('list') ) : ?>
                    <div class="box-detail">
                        <div class="head-detail text-center">
                            <div class="numb-step" data-aos="zoom-in"><span>0<?= $i; ?></span></div>
                            <div class="title-detail" data-aos="fade-up">
                               <?php the_sub_field('title'); ?>
                            </div>
                        </div>
                        <?php if(get_sub_field('image')){ ?>
                        <div class="avarta text-center"><img src="<?php the_sub_field('image'); ?>" class="img-fluid" alt="<?php the_sub_field('title'); ?>"></div>
						<?php } ?>
                        <div class="detail">
                            <?php the_sub_field('content'); ?>
                        </div>
                        <?php if(get_sub_field('button')){ ?>
                        <div class="btn-main text-center">
                            <a href="<?php the_sub_field('link'); ?>">
                                <span><?php the_sub_field('button'); ?></span>
                            </a>
                        </div>
						<?php } ?>
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