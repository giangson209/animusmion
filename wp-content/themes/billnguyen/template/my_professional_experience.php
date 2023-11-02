<?php /* Template Name: My Professional Experience */ ?>
<?php
get_header();
?>
<main>
    <section class="box-content">
        <div class="container">
            <div class="article-content">
                <div class="head-content text-center" data-aos="fade-up">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="txt-content">
                    <?php
                        $tax = array(
                            'cat' => array(1),
                            'post_type'     => 'post',
                            'orderby'       => 'ID', 
                            'posts_per_page' => 12,
                            'paged'         => get_query_var('paged') ? get_query_var('paged') : 1, 
                        );
                        $looptax = new WP_Query( $tax ); 

                        while ( $looptax->have_posts() ) : $looptax->the_post();
                        ?>
                    <div class="box-detail text-center">
                        <div class="avarta"><img src="<?= the_post_thumbnail_url(); ?>" class="img-fluid w-100" alt="<?php the_title(); ?>"></div>
                        <div class="head-detail">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="detail">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="btn-main">
                            <a href="<?php the_permalink(); ?>">
                                <span>READ ARTICLE</span>
                            </a>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_query(); 
                    ?>  
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>