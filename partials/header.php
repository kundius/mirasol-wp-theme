<?php $data = get_field('header', 'option') ?>

<div class="header">
    <div class="container header__container">
        <div class="header__sitename">
            <?php echo $data['sitename'] ?>
        </div>
        <a href="/" class="header__logo">
            <img src="<?php echo $data['logo']['url'] ?>" alt="<?php bloginfo('name') ?>" width="<?php echo $data['logo']['width'] ?>" height="<?php echo $data['logo']['height'] ?>">
        </a>
        <button class="header__callback">
            <?php echo $data['callback_text'] ?>
        </button>
    </div>
</div>
