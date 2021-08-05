<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-banner">
    <div class="container">
        <h1>A Dining Experience</h1>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                    <div class="title">Dining Menu</div>    
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image second"></div>
                    <div div class="title">Lunch Menu</div>    
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                    <div class="image third"></div>
                    <div class="title">Functions</div>    
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Welcome to</span>
                <p>The Backbeach Eating House</p>
            </h2>
        </div>
    </div>
    
    <div class="line"></div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">There's only one place like the Backbeach Cafe & Restaurant, located on Bunbury's Backbeach with uninterrupted views of crisp white sand and the Indian Ocean. The perfect place to eat, relax and enjoy.</p>
                <p>We are proud to support local business and local producers by sourcing as much as possible locally, including fish from Augusta, beef and chicken from Western Australia (DBC), coffee from Yallingup and wines from Ferguson Valley, Margaret River and throughout the South West.</p>
            </div>
            <div class="col-lg-3">
                <div class="button">About Us <i class="fa fa-chevron-right"></i></div>
            </div>
        </div>
        
    </div>

</div>


<?php 
//Look WordPress Posts
$loop = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'order' => 'DESC',
    'category_name' => 'Whats On',
));
while ( $loop->have_posts() ) : $loop->the_post();
?>

<div class="home-news">
    
    <div class="bg-image"></div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-5">
                <a href="<?php the_permalink(); ?>" class="news-img">
                    <div class="image"
                    <?php if ( has_post_thumbnail() ) { ?> style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');" <?php }?>
                    >    
                    </div>
                    <div class="date"><?php the_date('d.m.Y'); ?></div>
                    <div class="category"><?php echo get_the_category()[0]->cat_name; ?></div>    
                </a>
            </div>
            <!-- <div class="col-xl-1 d-none d-xl-block"></div> -->
            <div class="col-xl-6 col-md-7">
                <h2><?php the_title(); ?></h2>
                <p><?php the_post_summary(); ?></p>
                <a href="<?php the_permalink(); ?>" class="button">Read More <i class="fa fa-chevron-right"></i></a>  
            </div>
        </div>
    </div>
</div>

<?php endwhile; wp_reset_query(); ?>



<div class="home-about">
    <div class="bg-image">
        <div class="top-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home-about-top.svg" alt="Cutout Top" width="100%">
        </div>
        <div class="bottom-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home-about-bottom.svg" alt="Cutout Bottom" width="100%">        
        </div>
    </div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Served fresh</span>
                <p>from the paddock to the plate</p>
            </h2>
        </div>
    </div>
    
    <div class="line"></div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">Praesent pharetra facilisis ipsum, id ultrices risus consequat at. Vivamus lobortis eget ipsum nec dapibus. Maecenas sit amet consectetur urna. Nam quis lobortis lacus.</p>
                <p>Donec nec sapien vestibulum, efficitur arcu eu, sollicitudin urna. Donec aliquet lacus non pretium malesuada. Nam dignissim pharetra lacus, a dignissim eros elementum quis. Mauris porttitor, dolor vitae eleifend rhoncus, diam libero mattis dui, eget elementum nunc magna a urna. Sed aliquet tellus a felis scelerisque, quis dignissim risus sagittis. Nulla euismod ipsum ut lectus consectetur ornare. Aliquam et rutrum sapien, et rutrum arcu.</p>
            </div>
            <div class="col-lg-3">
                <div class="button">Read More <i class="fa fa-chevron-right"></i></div>
            </div>
        </div>
        
    </div>

</div>

<div class="home-about-images">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="#" class="home-about-image">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#" class="home-about-image second">
                    <div class="image second"></div>  
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#" class="home-about-image third">
                    <div class="image third"></div>   
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-testimonials">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <h2>Happy Customers</h2>
                <div class="testimonial-holder">
                    <p>Ah! What a place! I could go have breakfast every single day and not get tired by the views. The staff are very kind and helpful, and the food is AMAZING!</p>
                    <p>A MUST visit place if you're visiting Bunbury!</p>  
                    <div class="separator"></div>
                    <div class="author">Saad Ulde</div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<div class="home-sign-up">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Sign Up</span>
                <p>Subscribe to our email newsletter</p>
            </h2>
        </div>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
               <?php echo do_shortcode('[contact-form-7 id="20" title="Newsletter Subscription"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="home-social">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Socials</span>
                <p>Follow us on facebook & instagram</p>
            </h2>
        </div>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
               <div class="facebook-holder">
                   <div class="title"><i class="fa fa-facebook-square"></i>What's new on facebook</div>
                   <div class="row">
                       <div class="col-lg-6">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/insta-1.jpg" alt="News Item">
                       </div>
                       <div class="col-lg-6">
                            <div class="content">
                                <div class="meta-data">
                                    <div class="date"><i class="fa fa-calendar"></i>Posted 31 Jan 2020</div>
                                    <div class="likes"> <i class="fa fa-thumbs-up"></i>24 likes</div>   
                                </div>
                                <p>Check out the view (and the dolphins, they're out there today!)</p>
                                <p>Integer sit amet maximus ipsum, molestie finibus libero. Nunc non nisl hendrerit, semper mi at, pharetra neque. Cras sed bibendum leo. Maecenas non neque arcu. Etiam viverra egestas orci, quis interdum quam.</p>
                                <a href="#" class="button">Read on facebook <i class="fa fa-chevron-right"></i></a>
                            </div>
                       </div>
                   </div>
               </div>
               <div class="instagram-holder">
                   <div class="title">
                       <i class="fa fa-instagram"></i>
                       @backbeachcafe
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
