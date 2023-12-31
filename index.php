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
          <?php if (have_posts()): ?>
          <h1><?php the_title() ?></h1>
          <?php the_content() ?>
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
