<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package insur-asia
 */

get_header();
?>

<main class="main">
	<section class="cover">
    <div class="cover__container container">
      <div class="cover__item">
        <h1 class="cover__title"><?php the_field('heading'); ?></h1>
        <p class="cover__desc"><?php the_field('description'); ?></p>
        <a href="#quoteModal" rel="modal:open" class="button button--white button--outline button--lg">
          <span><?php the_field('button_text'); ?></span>
          <i class="icon icon--right"></i>
        </a>
      </div>

      <div class="cover__item">
        <div class="home-cover-video">
          <div class="home-cover-video__overlay">
            <img class="home-cover-video__poster" src="<?php the_field('image'); ?>" alt="<?php the_field('heading'); ?>">
          </div>
        </div>
      </div>

      <div class="home-cover-steps">
          <ul class="home-cover-steps__list">
            <li class="home-cover-steps__item">
              <i class="home-cover-steps__icon icon icon--flag"></i>
              <p class="home-cover-steps__desc"><?php the_field('step_1_text'); ?></p>
            </li>

            <li class="home-cover-steps__item">
              <i class="home-cover-steps__icon icon icon--search"></i>
              <p class="home-cover-steps__desc"><?php the_field('step_2_text'); ?></p>
            </li>

            <li class="home-cover-steps__item">
              <i class="home-cover-steps__icon icon icon--refresh"></i>
              <p class="home-cover-steps__desc"><?php the_field('step_3_text'); ?></p>
            </li>
          </ul>
        </div>
    </div>
  </section>

  <section class="section section--lead section--filled">
    <div class="container">
      <div class="slider" data-slick="partners">
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/qbe@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/qbe@2x.png 2x"
      alt="QBE">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/tokiomarine@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/tokiomarine@2x.png 2x"
      alt="Tokio Marine HCC">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/chubb@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/chubb@2x.png 2x"
      alt="Chubb Limited">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/axa@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/axa@2x.png 2x"
      alt="AXA Group">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/liberty@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/liberty@2x.png 2x"
      alt="Liberty Mutual Insurance">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/qbe@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/qbe@2x.png 2x"
      alt="QBE">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/tokiomarine@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/tokiomarine@2x.png 2x"
      alt="Tokio Marine HCC">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/chubb@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/chubb@2x.png 2x"
      alt="Chubb Limited">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/axa@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/axa@2x.png 2x"
      alt="AXA Group">
      
  </picture>

        </div>
        <div class="slider__item">
          
  <picture>
    
    <img
      class="home-partner-slider__slide"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/liberty@1x.png"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/partners/liberty@2x.png 2x"
      alt="Liberty Mutual Insurance">
      
  </picture>

        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <?php
        $benefits = get_field('benefits');
        $benefits_first = $benefits['first'];
        $benefits_second = $benefits['second'];
        $benefits_third = $benefits['third'];
      ?>

      <h2 class="section__title"><?php echo $benefits['title']; ?></h2>

      <div class="section__content benefits">
        <div class="benefits__item">
          <div class="benefits__item-icon">
            <i class="icon icon--circle icon--check-circle icon--bg-blue"></i>
          </div>

          <div class="benefits__item-wrap">
            <div class="benefits__item-img-wrap">
              
  <picture>
    
    <img
      class="benefits__item-img"
      src="<?php echo $benefits_first['image']; ?>"
      alt="<?php echo $benefits_first['title']; ?>">
      
  </picture>

            </div>

            <div class="benefits__item-content">

              <h3 class="benefits__item-title"><?php echo $benefits_first['title']; ?></h3> 
              <p class="benefits__item-desc"><?php echo $benefits_first['description']; ?></p>
            </div>
          </div>
        </div>

        <div class="benefits__item">
          <div class="benefits__item-icon">
            <i class="icon icon--circle icon--check-circle icon--bg-blue"></i>
          </div>

          <div class="benefits__item-wrap">
            <div class="benefits__item-img-wrap">
              
  <picture>
    
    <img
      class="benefits__item-img"
      src="<?php echo $benefits_second['image']; ?>"
      srcset="<?php echo $benefits_second['title']; ?>"
      alt="<?php echo $benefits_second['title']; ?>">
      
  </picture>

            </div>

            <div class="benefits__item-content">
              <h3 class="benefits__item-title"><?php echo $benefits_second['title']; ?></h3> 
              <p class="benefits__item-desc"><?php echo $benefits_second['description']; ?></p>
            </div>
          </div>
        </div>

        <div class="benefits__item">
          <div class="benefits__item-icon">
            <i class="icon icon--circle icon--check-circle icon--bg-blue"></i>
          </div>

          <div class="benefits__item-wrap">
            <div class="benefits__item-img-wrap">
              
  <picture>
    
    <img
      class="benefits__item-img"
      src="<?php echo $benefits_third['image']; ?>"
      alt="<?php echo $benefits_third['title']; ?>">
      
  </picture>

            </div>

            <div class="benefits__item-content">
              <h3 class="benefits__item-title"><?php echo $benefits_third['title']; ?></h3> 
              <p class="benefits__item-desc"><?php echo $benefits_third['description']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--filled">
    <div class="container">
      <?php
        $products = get_field('products');
        $posts = $products['items'];
      ?>
      <h2 class="section__subtitle"><?php echo $products['subtitle']; ?></h2>
      <p class="section__title"><?php echo $products['title']; ?></p>

      <?php if( $posts ): ?>
        <div class="section__content iconic-block-group">
          <?php foreach( $posts as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="iconic-block">
              <span class="iconic-block__icon">
                <i class="icon icon--<?php the_field('icon'); ?>"></i>
              </span>

              <span class="iconic-block__label"><?php the_title(); ?></span>
              
              <a href="<?php the_permalink(); ?>" class="iconic-block__button button button--gray button--uppercase">
                <span>Learn More</span>
                <i class="icon icon--right-dark"></i>
              </a>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php if ( is_active_sidebar( 'contact_card_1' ) ) : ?>
    <section class="section container">
      <?php dynamic_sidebar( 'contact_card_1' ); ?> 
    </section>
  <?php endif; ?>


  <section class="section section--filled">
    <div class="container">
    <?php
        $sectors = get_field('sectors');
        $posts = $sectors['items'];
      ?>
      <h2 class="section__subtitle"><?php echo $sectors['subtitle']; ?></h2>
      <p class="section__title"><?php echo $sectors['title']; ?></p>

      <?php if( $posts ): ?>
        <div class="section__content iconic-block-group">
          <?php foreach( $posts as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="iconic-block">
              <span class="iconic-block__icon">
                <i class="icon icon--<?php the_field('icon'); ?>"></i>
              </span>

              <span class="iconic-block__label"><?php the_title(); ?></span>
              
              <a href="<?php the_permalink(); ?>" class="iconic-block__button button button--gray button--uppercase">
                <span>Learn More</span>
                <i class="icon icon--right-dark"></i>
              </a>
            </div>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <?php 
        $reviews = get_field('reviews');
      ?>
      <h2 class="section__title"><?php echo $reviews['title']; ?></h2>
      <p class="section__desc"><?php echo $reviews['description']; ?></p>

      <div class="section__content slider slider--has-divider" data-slick="reviews">
        <div class="slider__item">
          <blockquote class="review">
            <p class="review__text">
              Owner of Business xx I never had such a good isnurance buying experience
            </p>
            <footer class="review__footer">
              <div class="review__img-wrap">
                <picture>
                  <img
                    class="review__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/1@1x.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/1@2x.jpg 2x"
                    alt="Jemee Lee">
                </picture>
              </div>
              <cite class="review__author">
                <span class="review__author-name">Jemee Lee</span>
                <span class="review__author-position">CEO, Tokiomarine</span>
              </cite>
            </footer>
          </blockquote>
        </div>

        <div class="slider__item">
          <blockquote class="review">
            <p class="review__text">
              Owner of Business xx I never had such a good isnurance buying experience
            </p>
            <footer class="review__footer">
              <div class="review__img-wrap">
                <picture>
                  <img
                    class="review__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/2@1x.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/2@2x.jpg 2x"
                    alt="Jemee Lee">
                </picture>
              </div>
              <cite class="review__author">
                <span class="review__author-name">Jemee Lee</span>
                <span class="review__author-position">CEO, Tokiomarine</span>
              </cite>
            </footer>
          </blockquote>
        </div>

        <div class="slider__item">
          <blockquote class="review">
            <p class="review__text">
              Owner of Business xx I never had such a good isnurance buying experience
            </p>
            <footer class="review__footer">
              <div class="review__img-wrap">
                
  <picture>
    
    <img
      class="review__img"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/1@1x.jpg"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/1@2x.jpg 2x"
      alt="Jemee Lee">
      
  </picture>

              </div>
              <cite class="review__author">
                <span class="review__author-name">Jemee Lee</span>
                <span class="review__author-position">CEO, Tokiomarine</span>
              </cite>
            </footer>
          </blockquote>
        </div>

        <div class="slider__item">
          <blockquote class="review">
            <p class="review__text">
              Owner of Business xx I never had such a good isnurance buying experience
            </p>
            <footer class="review__footer">
              <div class="review__img-wrap">
                
  <picture>
    
    <img
      class="review__img"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/2@1x.jpg"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/2@2x.jpg 2x"
      alt="Jemee Lee">
      
  </picture>

              </div>
              <cite class="review__author">
                <span class="review__author-name">Jemee Lee</span>
                <span class="review__author-position">CEO, Tokiomarine</span>
              </cite>
            </footer>
          </blockquote>
        </div>

        <div class="slider__item">
          <blockquote class="review">
            <p class="review__text">
              Owner of Business xx I never had such a good isnurance buying experience
            </p>
            <footer class="review__footer">
              <div class="review__img-wrap">
                
  <picture>
    
    <img
      class="review__img"
      src="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/1@1x.jpg"
      srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/reviews/1@2x.jpg 2x"
      alt="Jemee Lee">
      
  </picture>

              </div>
              <cite class="review__author">
                <span class="review__author-name">Jemee Lee</span>
                <span class="review__author-position">CEO, Tokiomarine</span>
              </cite>
            </footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--filled section--last">
    <div class="container">
      <?php 
        $features = get_field('features');
        $features_first = $features['first'];
        $features_second = $features['second'];
        $features_third = $features['third'];
        $features_fourth = $features['fourth'];
      ?>
      <h2 class="section__title"><?php echo $features['title']; ?></h2>

      <div class="section__content iconic-block-group">
          <div class="iconic-block">
            <span class="iconic-block__icon">
              <i class="icon icon--<?php echo $features_first['icon']; ?>"></i>
            </span>

            <span class="iconic-block__label"><?php echo $features_first['title']; ?></span>
          </div>
        
          <div class="iconic-block">
            <span class="iconic-block__icon">
              <i class="icon icon--<?php echo $features_first['icon']; ?>"></i>
            </span>

            <span class="iconic-block__label"><?php echo $features_first['title']; ?></span>
          </div>
        
          <div class="iconic-block">
            <span class="iconic-block__icon">
              <i class="icon icon--<?php echo $features_first['icon']; ?>"></i>
            </span>

            <span class="iconic-block__label"><?php echo $features_first['title']; ?></span>
          </div>
        
          <div class="iconic-block">
            <span class="iconic-block__icon">
              <i class="icon icon--<?php echo $features_first['icon']; ?>"></i>
            </span>

            <span class="iconic-block__label"><?php echo $features_first['title']; ?></span>
          </div>
        
      </div>

      <a href="/login" class="section__button button button--primary button--outline button--lg"><?php echo $features['button_text']; ?></a>
    </div>
  </section>

  </main>

<?php
get_footer();
