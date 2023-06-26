<footer class="footer">
      <div class="footer__top">
        <div class="container">
          <h2 class="footer__title"><?php the_title(); ?> В МОСКВЕ</h2>
          <div class="footer__body">
            <div class="footer___body-inner">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="footer__top-foot">
            <button class="footer__top-btn">Подробнее</button>
          </div>
        </div>
      </div>
      <div class="footer__map">
        <div class="footer__map-inner">
          <iframe
            class="lazyload iframe-allowed"
            data-src="https://maps.google.com/maps?q=119619%2C%20%D0%B3.%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%20%D0%A1%D0%BE%D0%BB%D0%BD%D1%86%D0%B5%D0%B2%D0%BE%2C%20%D1%83%D0%BB%D0%B8%D1%86%D0%B0%20%D0%AE%D0%BB%D0%B8%D0%B0%D0%BD%D0%B0%20%D0%A1%D0%B5%D0%BC%D1%91%D0%BD%D0%BE%D0%B2%D0%B0%2C%208%D0%BA1&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near"
            title="119619, г. Москва, район Солнцево, улица Юлиана Семёнова, 8к1"
            aria-label="119619, г. Москва, район Солнцево, улица Юлиана Семёнова, 8к1"
          ></iframe>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="container footer__bottom-inner">
          <div class="footer__intro">
            <a class="footer__logo" href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt="logo" />
            </a>
            <ul class="footer__social">
              <li class="footer__social-item">
                <a
                  class="footer__social-icon whatsup"
                  href="#"
                  aria-label="whatsup"
                ></a>
              </li>
              <li class="footer__social-item">
                <a
                  class="footer__social-icon telegram"
                  href="#"
                  aria-label="telegram"
                ></a>
              </li>
              <li class="footer__social-item">
                <a class="footer__social-icon vk" href="#" aria-label="vk"></a>
              </li>
              <li class="footer__social-item">
                <a class="footer__social-icon ok" href="#" aria-label="ok"></a>
              </li>
              <li class="footer__social-item">
                <a
                  class="footer__social-icon youtube"
                  href="#"
                  aria-label="youtube"
                ></a>
              </li>
            </ul>
            <a class="footer__policy" href="#">Политика конфидециальности</a>
            <div class="footer__paymends-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/master-card.svg" alt="visa" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/visa.svg" alt="master card" />
            </div>
          </div>
          <?php 
              wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'container_class' => 'footer__menu-container',
                'menu_class' => 'footer__menu'
              ))
            ?>
            <?php 
              wp_nav_menu(array(
                'theme_location' => 'footer_menu',
                'container_class' => 'footer__menu-container',
                'menu_class' => 'footer__menu'
              ))
            ?>
          <div class="footer__contacts">
            <div class="footer__contacts-block">
              <p class="footer__contacts-top">Контактный телефон</p>
              <div class="footer__contacts-body">
                <a href="tel:+74959991707">+7 (495) 999-17-07</a>
                <a href="tel:+79165483408">+7 (916) 548 34 08</a>
              </div>
            </div>
            <div class="footer__contacts-block">
              <p class="footer__contacts-top">E-Mail</p>
              <div class="footer__contacts-body">
                <a href="malito:info@climat-stroy.ru">info@climat-stroy.ru</a>
              </div>
            </div>
            <div class="footer__contacts-block">
              <p class="footer__contacts-top">Адрес</p>
              <div class="footer__contacts-body">
                <p>
                  119619, г. Москва, район<br>Солнцево, улица Юлиана<br>Семёнова, 8к1
                </p>
              </div>
            </div>
            <div class="footer__contacts-block">
              <p class="footer__contacts-top">Время работы</p>
              <div class="footer__contacts-body">
                <p>
                  Пн-Пт с 10:00 до 19:00<br />
                  Сб-Вс выходные
                </p>
              </div>
            </div>
            <div class="footer__contacts-block footer__contacts-policy">
              <p class="footer__contacts-top">Наши документы</p>
              <div class="footer__contacts-body">
                <a  href="№">Политика конфиденциальности</a>
              </div>
            </div>
          </div>
        </div>
        <div class="container footer__copy">
          <p>© 2008-2023</p>
        </div>
      </div>
    </footer>
    <?php wp_footer();?>
  </body>
</html>