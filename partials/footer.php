<?php $data = get_field('footer', 'option') ?>

<footer class="footer">
  <div class="container">
    <div class="footer-layout">
      <div class="footer-layout__logo">
        <a href="/" class="footer-logo">
          <img src="<?php echo $data['logo']['url'] ?>" alt="<?php echo $data['logo']['title'] ?>" width="<?php echo $data['logo']['width'] ?>" height="<?php echo $data['logo']['height'] ?>">
        </a>
      </div>
      <div class="footer-layout__order-and-delivery">
        <a href="<?php echo $data['order_link'] ?>" class="footer-order">
          <?php echo $data['order_text'] ?>
        </a>
        <div class="footer-delivery">
          <div class="footer-delivery__text">
            <?php echo $data['delivery']['title'] ?>
          </div>
          <div class="footer-delivery__image">
            <img src="<?php echo $data['delivery']['image']['url'] ?>" alt="<?php echo $data['delivery']['image']['title'] ?>" width="<?php echo $data['delivery']['image']['width'] ?>" height="<?php echo $data['delivery']['image']['height'] ?>">
          </div>
        </div>
      </div>
      <div class="footer-layout__address">
        <div class="footer-address">
          <div class="footer-address__title">
            Адрес:
          </div>
          <div class="footer-address__text">
            <?php echo $data['address'] ?>
          </div>
        </div>
      </div>
      <div class="footer-layout__contacts">
        <div class="footer-contacts">
          <div class="footer-contacts__item footer-contacts__item_phone">
            <?php echo $data['phone'] ?>
          </div>
          <div class="footer-contacts__item footer-contacts__item_email">
            <?php echo $data['email'] ?>
          </div>
        </div>
      </div>
      <div class="footer-layout__social">
        <div class="footer-social">
          <?php foreach ($data['social'] as $item): ?>
            <a href="<?php echo $item['link'] ?>" class="footer-social__item">
              <img src="<?php echo $item['icon']['url'] ?>" alt="<?php echo $item['icon']['title'] ?>" width="<?php echo $item['icon']['width'] ?>" height="<?php echo $item['icon']['height'] ?>">
            </a>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="hystmodal" id="callback" aria-hidden="true">
  <div class="hystmodal__wrap">
    <div class="hystmodal__window dialog dialog_callback" role="dialog" aria-modal="true">
      <button data-hystclose class="hystmodal__close dialog__close">Закрыть</button>
      <div class="dialog__title">Заказать звонок</div>
      <div class="dialog__body">
        <?php echo do_shortcode('[contact-form-7 id="937ca24" title="Заказать звонок"]'); ?>
      </div>
    </div>
  </div>
</div>

<div class="hystmodal" id="order" aria-hidden="true">
  <div class="hystmodal__wrap">
    <div class="hystmodal__window dialog dialog_order" role="dialog" aria-modal="true">
      <button data-hystclose class="hystmodal__close dialog__close">Закрыть</button>
      <div class="dialog__title">Запросить цену</div>
      <div class="dialog__body">
        <?php echo do_shortcode('[contact-form-7 id="e64c52e" title="Запросить цену"]'); ?>
      </div>
    </div>
  </div>
</div>

<div class="hystmodal" id="calculation" aria-hidden="true">
  <div class="hystmodal__wrap">
    <div class="hystmodal__window dialog dialog_calculation" role="dialog" aria-modal="true">
      <button data-hystclose class="hystmodal__close dialog__close">Закрыть</button>
      <div class="dialog__title">Заказать расчет</div>
      <div class="dialog__body">
        <?php echo do_shortcode('[contact-form-7 id="ec52569" title="Заказать расчет"]'); ?>
      </div>
    </div>
  </div>
</div>

<div class="hystmodal" id="success" aria-hidden="true">
  <div class="hystmodal__wrap">
    <div class="hystmodal__window dialog dialog_success" role="dialog" aria-modal="true">
      <button data-hystclose class="hystmodal__close dialog__close">Закрыть</button>
      <div class="dialog__title">Спасибо за заявку!</div>
      <div class="dialog__body">
        Мы свяжесмя с вами<br />
        в самое ближайшее время!
      </div>
    </div>
  </div>
</div>
