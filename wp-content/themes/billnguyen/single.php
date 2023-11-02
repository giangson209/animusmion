<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package billnguyen
*/

get_header();
?>
<main>
    <section class="box-article-single">
        <div class="container">
            <div class="content-single">
                <div class="back-page">
                    <a href="javascript::void()" id="back-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.57 5.93005L3.5 12.0001L9.57 18.0701" stroke="#FFFCE1" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.5019 12H3.67188" stroke="#FFFCE1" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>BACK</span>
                    </a>
                </div>
                <div class="head-single">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="content-single-detail">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
<script>
    var backLink = document.getElementById('back-link');

    backLink.addEventListener('click', function(event) {
        event.preventDefault(); 
        window.history.back(); 
    });
</script>