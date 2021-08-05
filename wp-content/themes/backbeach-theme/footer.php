<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    <div class="bg-image"></div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Contact</span>
                <p>Send us a message below</p>
            </h2>
        </div>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-1"></div>
            <div class="col-lg-11">
               <?php echo do_shortcode('[contact-form-7 id="22" title="Footer Form"]'); ?>
               <div class="copyright">© Copyright The Backbeach Eating House - All Rights Reserved // Website by Moshi Moshi</div>
            </div>
        </div>
    </div>

</div><!-- wrapper end -->

<div class="footer-warning">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/glasses.svg" alt="Warning">
            </div>
            <div class="col-sm-10">
                <h3>WARNING, Under the Liquor Control Act 1998, it is an offence:</h3>
                <p>To sell or supply liquor to a person under the age of 18 years on a licensed or regulated premises; or for a person under the age of 18 years to purchase, or attempt to purchase, liquor on a licensed or regulated premises.</p>
            </div>
        </div>
    </div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
