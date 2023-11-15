<?php
/*
Template Name: Главная
*/
$slideshow = get_field('slideshow');
$advantages = get_field('advantages');
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes();?> itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head');?>
  </head>
  <body <?php body_class() ?>>
    <?php wp_body_open() ?>

    <div class="page">
      <?php get_template_part('partials/header') ?>

      <main class="main">
        <div class="container">
          <div class="slideshow">
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php foreach ($slideshow as $item): ?>
                <div class="swiper-slide">
                  <img src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['image']['title'] ?>">
                </div>
                <?php endforeach ?>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

          <div class="home-main">
            <div class="home-main__title">
              <?php the_field('description_title') ?>
            </div>
            <div class="home-main__content">
              <?php the_field('description_text') ?>
            </div>
          </div>

          <div class="advantages">
            <div class="advantages-grid">
              <?php foreach ($advantages as $item): ?>
              <div class="advantages-grid__column">
                <div class="advantages-item">
                  <?php echo $item['text'] ?>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </main>
    
      <?php get_template_part('partials/footer') ?>
    </div>

    <?php wp_footer() ?>
  </body>
</html>
