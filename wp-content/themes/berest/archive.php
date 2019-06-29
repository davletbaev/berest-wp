<?php

$term = get_queried_object(); 

if ($term->name === 'types-of-insurance') {
  $id = 17;
} else {
  $id = 36;
}

$posts = get_field('items', $id);
$heading = get_field('heading', $id);
$description = get_field('description', $id);

get_header();
?>

<section class="cover">
  <div class="cover__container container">
    <h1 class="cover__title"><?php echo $heading ?></h1>
    <p class="cover__desc"><?php echo $description ?></p>
</section>

<?php if( $posts ): ?>
<section class="section container section--types">
  <div class="types-cover-cards">
    <?php foreach( $posts as $post): ?>
      <?php setup_postdata($post); ?>
      <div class="types-card-wrap">
        <div class="types-card">
  
          <?php $icon = get_field('icon'); ?>
  
          <div class="types-card__icon">
            <i class="icon icon--<?php echo $icon; ?>"></i>
          </div>
  
          <h3 class="types-card__title"><?php the_title(); ?></h3>
          <p class="types-card__desc"><?php echo get_excerpt(85); ?></p>
  
          <a href="<?php the_permalink(); ?>" class="types-card__link">
            <span>Learn more</span>
            <i class="icon icon--right-blue"></i>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>
<?php endif; ?>

<?php if ( is_active_sidebar( 'contact_card_1' ) ) : ?>
  <section class="section section--last container">
		<?php dynamic_sidebar( 'contact_card_1' ); ?> 
  </section>
<?php endif; ?>

<?php
get_footer();