<?php
/*
Template Name: Главная
*/
$slideshow = get_field('slideshow');
$advantages = get_field('advantages');
$product_query = new WP_Query([
  'post_type' => 'product',
  'posts_per_page' => -1,
]);
$product = $product_query->get_posts();
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

          <div class="catalog">
            <div class="catalog__title">НАШ АССОРТИМЕНТ</div>
            <div class="catalog-grid">
              <?php foreach ($product as $item): ?>
              <div class="catalog-grid__cell">
                <div class="catalog-item">
                  <div class="catalog-item__image">
                    <?php echo get_the_post_thumbnail($item, 'product-thumbnail') ?>
                  </div>
                  <div class="catalog-item__title">
                    <a href="<?php the_permalink($item) ?>" class="catalog-item__title-link">
                      <?php echo (get_field('title_in_list', $item) ?: get_the_title($item)) ?>
                    </a>
                  </div>
                  <div class="catalog-item__order">
                    <button class="catalog-item__order-button" data-hystmodal="#order">
                      ЗАПРОСИТЬ ЦЕНУ
                    </button>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </main>
    
      <?php get_template_part('partials/footer') ?>
    </div>

    <?php wp_footer() ?>
  </body>
</html>
