<?php /* Template Name: My Achivements */ ?>
<?php
get_header();
?>
<main>
    <section class="box-content">
        <div class="container">
            <div class="detail-content" style="max-width: 100%">
                <div class="head-content text-center" data-aos="fade-up">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="list-merit">
            <div class="marquee">
                <ul>
                <?php while ( has_sub_field('list_image') ) : ?>
                    <li><img src="<?php the_sub_field('image'); ?>" class="img-fluid" alt=""></li>
                <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="content-achive">
                <ul>
            	<?php $i = 1; ?>
                <?php while ( has_sub_field('list_achivements') ) : ?>
                    <li data-aos="fade-up">
                        <label><?= $i; ?>.<?php the_sub_field('title'); ?></label>
                        <p><?php the_sub_field('description'); ?></p>
                    </li>
            	<?php $i++; ?>
                <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>