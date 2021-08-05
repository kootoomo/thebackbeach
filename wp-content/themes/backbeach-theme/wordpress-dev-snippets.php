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

<?php if ( has_post_thumbnail() ) { ?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" <?php }?>
<?php the_permalink(); ?>
<?php the_title(); ?>
<?php the_date('d.m.Y'); ?>
<?php the_post_summary(); ?>
<?php echo get_the_category()[0]->cat_name; ?>
<?php endwhile; wp_reset_query(); ?>
