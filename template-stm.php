<?php
/*
Template Name: СТМ
*/
$cards = get_field('cards');
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

      <main class="stm-main">
        <div class="container">
          <h1 class="stm-title">
            <?php echo (get_field('title') ?: get_the_title()) ?>
          </h1>

          <div class="stm-cards">
            <?php foreach ($cards as $card): ?>
            <div class="stm-card">
              <div class="stm-card__image">
                <img src="<?php echo $card['image']['url'] ?>" alt="<?php echo $card['image']['title'] ?>">
              </div>
              <div class="stm-card__description">
                <?php echo $card['description'] ?>
              </div>
            </div>
            <?php endforeach ?>
          </div>

          <div class="stm-order">
            <button class="stm-order__button">
              Заказать расчет
            </button>
          </div>
        </div>
      </main>
    
      <?php get_template_part('partials/footer') ?>
    </div>

    <?php wp_footer() ?>
  </body>
</html>
