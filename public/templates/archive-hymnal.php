<?php
    
 /**
 * The template for displaying the archive of posts
 *
 * @link       https://creativelittledots.co.uk
 * @since      1.0.0
 *
 * @package    Hymnal
 * @subpackage Hymnal/public/templates
 */
 
$args = array(
	'orderby' => 'menu_order title',
	'order'   => 'ASC',
    'post_type' =>  'hymnal',
);
$query = new WP_Query( $args );
 
?>

<?php include 'header.php'; ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    
        <section class="section">
    
            <h1><?php the_title(); ?></h1>
            
            <?php the_content(); ?>
            
        </section>
    
    <?php endwhile; endif; ?>

<?php include 'footer.php'; ?>