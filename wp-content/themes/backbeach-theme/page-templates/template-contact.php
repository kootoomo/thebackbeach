<?php
/**
 * Template Name: Template: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<header class="page-header entry-header">
	<div class="container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>
</header><!-- .entry-header -->

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<main class="site-main" id="main" role="main">

			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<?php
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						}
					?>
				</div>
			</div>

		</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<div class="contact-us-holder">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
			<?php echo do_shortcode('[contact-form-7 id="55" title="Contact Us Page Form"]'); ?>
			</div>
            <div class="col-lg-6">
                <div class="contact-us-hours">
					<div class="content line-bottom">
						<h3>Opening Hours</h3>
					</div>     
					<div class="content">
						<div class="hours">
							<div class="hour">
								<span>Mon - Tues</span>
								<span>7am - 4pm</span>
								<strong>(Last Orders 3pm)</strong>
							</div>
							<div class="hour">
								<span>Wed - Sat</span>
								<span>7am - 9pm</span>
								<strong>(Last Orders)</strong>
							</div>
							<div class="hour">
								<span>Sun</span>
								<span>7am - 8pm</span>
								<strong>(Last Orders)</strong>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us-image">
	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<div class="img-widescreen">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contact-us.jpg" alt="Backbeach Contact Us">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
