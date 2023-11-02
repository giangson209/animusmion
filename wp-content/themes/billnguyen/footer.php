<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package billnguyen
 */

?>

<footer>
    <div class="container">
        <div class="footer-top">
            <div class="txt-ft-left">
                <span><?= nl2br(get_field('question', 'option')); ?></span>
                <div class="icon"><img src="<?php the_field('avatar', 'option'); ?>" class="img-fluid" alt="<?php the_field('question', 'option'); ?>"></div>
            </div>
            <div class="txt-ft-center">
                <div class="desc">
                    <?php the_field('slogan', 'option'); ?>
                </div>
            </div>
            <div class="txt-ft-right">
                <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
            </div>
        </div>
        <div class="social" style="display: none;">
            <ul>
				<?php while ( has_sub_field('danh_sach', 'option') ) : ?>
                <li><a href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('icon'); ?>" class="img-fluid" alt=""></a></li>
				<?php endwhile; ?>
            </ul>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script>
<script type="text/javascript" src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/js/private.js?v=<?= time(); ?>"></script>
<?php wp_footer(); ?>

</body>
</html>
