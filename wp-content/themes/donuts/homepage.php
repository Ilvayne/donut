<?php 
/* Template Name:  Home	page */

get_header();?>

<section class="hero">
  <div class="container">

    <?php if ( get_field('main_text') ) : ?>
      <h1>
        <?php echo get_field('main_text'); ?>
      </h1>
    <?php endif; ?>

    <img class="hero-img__donut-one" src="/wp-content/themes/donuts/dist/assets/images/donut.png" alt="donuts">
    <img class="hero-img__donut-two" src="/wp-content/themes/donuts/dist/assets/images/donut2.png" alt="donuts">

  </div>
</section>

<section class="second-block">
  <div class="second-block__container">
      
    <?php if ( get_field('filter_text') ) : ?>
      <p class="second-block__filter-text"><?php echo get_field('filter_text'); ?></p>
    <?php endif; ?>

    <div class="second-block__video-wrapper">
      <img class="second-block__donut-play-left" src="/wp-content/themes/donuts/dist/assets/images/donut-play-left.png" alt="donuts">
      <img class="second-block__donut-play-right" src="/wp-content/themes/donuts/dist/assets/images/donut-play-right.png" alt="donuts">
      <img class="second-block__donut-play-right-two" src="/wp-content/themes/donuts/dist/assets/images/donut-play-right2.png" alt="donuts">
      
      <img class="second-block__donut-play-phone" src="/wp-content/themes/donuts/dist/assets/images/phone.png" alt="donuts">
    
      <div class="video-player">
          <?php if ( get_field('video') ) : ?>
            <video id="player" class="js-player" playsinline controls data-poster="<?php the_field('video_poster'); ?>">
              <source src="<?php the_field('video'); ?>" type="video/mp4" />
            
            </video>
          <?php endif; ?>
      </div>
    </div>

    <img data-aos="fade-up" data-aos-duration="1500" class="second-block__donut-left" src="/wp-content/themes/donuts/dist/assets/images/left-donuts.png" alt="donuts">
    <img data-aos="fade-left" data-aos-duration="1500" class="second-block__donut-right" src="/wp-content/themes/donuts/dist/assets/images/right-donuts.png" alt="donuts">
  

    <div class="second-block__bottom">

      <?php if ( get_field('text_block_title') ) : ?>
      <h5>
        <?php echo get_field('text_block_title'); ?>
      </h5>
      <?php endif; ?>
      
      <?php if ( get_field('paragraph_block_text') ) : ?>
      <div class="second-block__bottom-text">
        <?php echo get_field('paragraph_block_text'); ?>
      </div>
      <?php endif; ?>

    </div>
  </div>
  <div class="second-block__running-wrapper">
    <?php if ( have_rows('running_repeater') ) : ?>
    <div class="second-block__running_stroke">
      <?php while( have_rows('running_repeater') ) : the_row(); ?>
    
        <p><?php the_sub_field('running_stroke'); ?></p>
    
      <?php endwhile; ?>
      </div>
    <?php endif; ?>
    </div>
</section>


<?php 
get_footer();
?>