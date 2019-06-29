<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package insur-asia
 */

$type = $post->post_type;
$cat = get_the_category( $post->ID );
$cat_name = $cat[0]->name;
$cat_link = get_category_link( $cat[0]->cat_ID );

get_header('dark');
?>

<section class="section section--first">
	<nav class="container">
		<?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>
	</nav>
</section>

<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile;

if ( is_active_sidebar( 'contact_card_1' ) ) : ?>
  <section class="section section--last container">
		<?php dynamic_sidebar( 'contact_card_1' ); ?> 
  </section>
<?php endif;

get_footer();
