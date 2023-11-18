<?php
$gallery = get_field('gallery') ?: [];
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
      
      <main class="product-main">
        <div class="container">
          <?php if (have_posts()): ?>
          <div class="product-layout">
            <div class="product-layout__gallery">
              <div class="product-gallery">
                <div class="product-gallery__main">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <?php the_post_thumbnail('original') ?>
                      </div>
                      <?php foreach ($gallery as $item): ?>
                      <div class="swiper-slide">
                        <img src="<?php echo $item['url'] ?>" alt="<?php echo $item['title'] ?>">
                      </div>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
                <div class="product-gallery__thumbs">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <?php the_post_thumbnail('original') ?>
                      </div>
                      <?php foreach ($gallery as $item): ?>
                      <div class="swiper-slide">
                        <img src="<?php echo $item['url'] ?>" alt="<?php echo $item['title'] ?>">
                      </div>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout__title">
              <h1 class="product__title"><?php the_title() ?></h1>
            </div>
            <div class="product-layout__order">
              <button class="product__order" data-hystmodal="#order">
                ЗАПРОСИТЬ ЦЕНУ
              </button>
            </div>
            <div class="product-layout__content">
              <div class="product__content">
                <?php the_content() ?>
              </div>
            </div>
          </div>
          <?php else : ?>
          Результатов не найдено
          <?php endif; ?>
        </div>
      </main>
    
      <?php get_template_part('partials/footer') ?>
    </div>

    <?php wp_footer() ?>
  </body>
</html>
