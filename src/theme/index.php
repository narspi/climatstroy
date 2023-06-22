<?php get_header();?>

<div class="focus-wrapper">
<section class="top" style="--top-bg: url(<?php echo get_field('image');?>);">
        <div class="container">
            <div class="top__text">
              <h1 class="top__title">
                  <?php the_title(); ?>
              </h1>
              <p class="top__descr"><?php echo get_field('first-screen-text'); ?></pre>
            </div>
            <ul class="top__btns">
                <li class="top__btn-first">
                    <button class="btn-main" data-modal-target="contact-form-4236">Получить сметы бесплатно</button>
                </li>
                <li class="top__btn-second">
                    <button class="btn-secondary" data-modal-target="contact-form-4237">Задать вопрос</button>
                </li>
            </ul>
        </div>
    </section>
    <div class="top-calc">
        <div class="container">
            <ul class="top-calc__list">
                <li class="top-calc__item">
                    <button class="top-calc__btn" data-modal-target="heating">Калькулятор монтажа отопления</button>
                </li>
                <li class="top-calc__item">
                    <button class="top-calc__btn" data-modal-target="ventilation">Калькулятор монтожа вентиляции</button>
                </li>
            </ul>
        </div>
    </div><section class="about">
      <div class="about__inner">
        <div class="about__content">
          <h2 class="about__title">О компании</h2>
          <div class="about__descr">
            <p>
              Группа компаний Климат Строй работаем с 2008 года. Мы занимаемся
              проектированием, монтажом и обслуживанием систем кондиционированияи
              вентиляции, а также систем отопления и горячего водоснабжения.
            </p>
            <p>
              На сегодняшний день мы являемся одним из лидеров рынка
              ОВиВК(отопление, вентиляция и кондиционирование воздуха) в Москве,
              имеембольшое количество компаний-партнеров и клиентов в
              различныхсферах бизнеса.
            </p>
            <p>
              Мы обладаем современным оборудованием и профессиональной
              командойинженеров и монтажников, которые гарантируют высокое качество
              работыв кратчайшие сроки.
            </p>
            <p>
              А также активно участвуем в реализации крупных инженерных
              проектов,применяем инновационные решения и технологии для
              повышенияэффективности систем кондиционирования и экономии
              энергоресурсов.
            </p>
          </div>
        </div>
        <div class="about__decor"></div>
      </div>
    </section>
    <section class="team">
        <div class="container">
            <h2 class="team__title">Наша команда в цифрах</h2>
            <div class="team__items">
                <div class="team__item">
                    <div class="team__decor"></div>
                    <h3 class="team__item-title">
                        15 лет
                    </h3>
                    <p class="team__descr">
                        на рынке<br>монтажа<br>инженерных<br>систем
                    </p>
                </div>
                <div class="team__item">
                    <div class="team__decor"></div>
                    <h3 class="team__item-title">
                        2500
                    </h3>
                    <p class="team__descr">
                        построенных<br>и введеных<br>объектов<br>в г. Москве
                    </p>
                </div>
                <div class="team__item">
                    <div class="team__decor"></div>
                    <h3 class="team__item-title">
                        5 лет
                    </h3>
                    <p class="team__descr">
                        гарантия<br>на работы
                    </p>
                </div>
                <div class="team__item">
                    <div class="team__decor"></div>
                    <h3 class="team__item-title">
                        24/7
                    </h3>
                    <p class="team__descr">
                        на cвязи
                    </p>
                </div>
            </div>
        </div>
    </section><section class="video-company">
        <div class="container">
            <h2 class="video-company__title">Видео о компании</h2>
            <div class="video-company__youtube">
                <iframe class="lazyload" width="560" height="315" data-src="https://www.youtube.com/embed/ZVhy2uZjQ8I?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section><section class="services">
      <div class="container">
        <h2 class="services__title">Наши услуги</h2>
        <div class="swiper services__slider">
          <?php
            $data = get_field('services__slider','option');
            
          ?>
          <div class="services__items swiper-wrapper">
            <?php
              foreach($data as $key => $val) {
            ?>
            <div class="services__item swiper-slide">
              <h3 class="services__item-title"><?php echo $val['services_slider-title']; ?></h3>
              <p class="services__descr"><?php echo $val['services__slider-descr']; ?></p>
              <a class="btn-secondary services__btn" href="<?php echo $val['services__slider-link']; ?>">Подробнее</a>
            </div>
            <?php } ?>
          </div>
          <div class="services__pagination"></div>
        </div>
      </div>
    </section>
    <section class="advantages">
      <h2 class="container advantages__title">Наши преимущества</h2>
      <div class="container advantages__items">
        <button class="advantages__prev" aria-label="Назад"></button>
        <button class="advantages__next" aria-label="Вперед"></button>
        <div class="swiper advantages__slider">
          <?php
            $data = get_field('advantages__slider','option');
          ?>
          <div class="swiper-wrapper">
            <?php
              foreach($data as $key => $val) {
            ?>   
            <div class="swiper-slide">
              <div class="advantages__item">
                <div
                  class="advantages__decor"
                  style="background-image: url('<?php echo $val['advantages__slider-decor']; ?>')"
                ></div>
                <h3 class="advantages__item-title"><?php echo $val['advantages__slider-title']; ?></h3>
                <p class="advantages__descr">
                  <?php echo $val['advantages__slider-descr']; ?>
                </p>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="container advantages__pagination"></div>
    </section>
    <section class="persons">
      <div class="container">
        <h2 class="persons__title">Наша команда</h2>
        <div class="persons__slider swiper">
          <ul class="persons__items swiper-wrapper">
            <li class="persons__elem swiper-slide">
              <img
                class="persons__elem-avatar"
                src="<?php  echo get_template_directory_uri(); ?>/assets/img/persons-avatar-1.png"
                alt="Зингман Максим Владимирович"
                loading="lazy"
              />
              <p class="persons__elem-title">Руководитель<br />группы компаний</p>
              <h3 class="persons__elem-descr">Зингман Максим<br />Владимирович</h3>
            </li>
            <li class="persons__elem swiper-slide">
              <img
                class="persons__elem-avatar"
                src="<?php  echo get_template_directory_uri(); ?>/assets/img/persons-avatar-2.png"
                alt="Зингман Максим Владимирович"
                loading="lazy"
              />
              <p class="persons__elem-title">Менеджер по работе<br />c клиентами</p>
              <h3 class="persons__elem-descr">
                Муравьева Ангелина<br />Михайловна
              </h3>
            </li>
            <li class="persons__elem swiper-slide">
              <img
                class="persons__elem-avatar"
                src="<?php  echo get_template_directory_uri(); ?>/assets/img/persons-avatar-3.png"
                alt="Зингман Максим Владимирович"
                loading="lazy"
              />
              <p class="persons__elem-title">Инженер<br />проектировщик</p>
              <h3 class="persons__elem-descr">Кузьмина Алиса<br />Сергеевна</h3>
            </li>
            <li class="persons__elem swiper-slide">
              <img
                class="persons__elem-avatar"
                src="<?php  echo get_template_directory_uri(); ?>/assets/img/persons-avatar-4.png"
                alt="Зингман Максим Владимирович"
                loading="lazy"
              />
              <p class="persons__elem-title">Начальник<br />участка</p>
              <h3 class="persons__elem-descr">Хажинский Роман<br />Сергеевич</h3>
            </li>
            <li class="persons__elem swiper-slide">
              <img
                class="persons__elem-avatar"
                src="<?php  echo get_template_directory_uri(); ?>/assets/img/persons-avatar-5.png"
                alt="Зингман Максим Владимирович"
                loading="lazy"
              />
              <p class="persons__elem-title">Мастер<br />участка</p>
              <h3 class="persons__elem-descr">Петров Сергей<br />Александрович</h3>
            </li>
          </ul>
          <div class="persons__pagination"></div>
        </div>
      </div>
    </section>
    <div class="banner">
      <div class="container banner__inner">
        <div class="banner__body">
          <h2 class="banner__title">Получить<br />консультацию<br />инженера</h2>
          <button class="btn-main banner__btn" data-modal-target="contact-form-4237">Задать вопрос</button>
        </div>
      </div>
    </div>
    <?php
      $table = get_field('price');
    ?>
    <section class="extra-section">
        <div class="container">
            <h2 class="extra-section__title">Цены</h2>
            <div>
              <?php echo do_shortcode($table); ?>
            </div>
        </div>
    </section>
    <?php
      $calc = get_field('calc');
    ?>
    <section class="extra-section">
        <div class="container">
            <h2 class="extra-section__title">Калькулятор</h2>
            <div>
              <?php echo do_shortcode($calc); ?>
            </div>
        </div>
    </section>
    <section class="documents">
      <div class="container">
        <h2 class="documents__title">Наши документы</h2>
        <pre>
        <?php
          $documetns_data = get_field('documents_slider','option');
        ?>
        </pre>
        <div class="swiper documents__slider">
          <div class="swiper-wrapper">
            <?php
              foreach($documetns_data as $key => $val) {
            ?>
            <div class="swiper-slide documents__item">
              <figure href="<?php  echo $val['documents_image']; ?>" data-fancybox="document-gallary">
                <figcaption class="documents__item-caption"><?php echo $val['documents_caption'];?></figcaption>
                <img src="<?php  echo $val['documents_image']; ?>" loading="lazy"/>
                <div class="swiper-lazy-preloader"></div>
              </figure>
            </div>
            <?php } ?>
          </div>
          <button class="documents__prev"></button>
          <button class="documents__next"></button>
        </div>
        <div class="documents__pagination"></div>
      </div>
    </section>
    <section class="projects">
      <div class="container">
        <h2 class="projects__title">Наши проекты</h2>
        <div class="project__slider swiper">
          <div class="projects__items swiper-wrapper">
            <figure class="projects__item swiper-slide">
              <figcaption class="projects__item-title">Отопление</figcaption>
              <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/project-1.jpg" alt="projects" loading="lazy" />
              <div class="swiper-lazy-preloader"></div>
            </figure>
            <figure class="projects__item swiper-slide">
              <figcaption class="projects__item-title">Сантехника</figcaption>
              <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/project-2.jpg" alt="projects" loading="lazy" />
              <div class="swiper-lazy-preloader"></div>
            </figure>
            <figure class="projects__item swiper-slide">
              <figcaption class="projects__item-title">Вентиляция</figcaption>
              <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/project-3.jpg" alt="projects" loading="lazy" />
              <div class="swiper-lazy-preloader"></div>
            </figure>
            <figure class="projects__item swiper-slide">
              <figcaption class="projects__item-title">Проектирование</figcaption>
              <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/project-4.jpg" alt="projects" loading="lazy" />
              <div class="swiper-lazy-preloader"></div>
            </figure>
            <figure class="projects__item swiper-slide">
              <figcaption class="projects__item-title">
                Кондиционирование
              </figcaption>
              <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/project-5.jpg" alt="projects" loading="lazy" />
              <div class="swiper-lazy-preloader"></div>
            </figure>
            <figure class="projects__item swiper-slide">
              <figcaption class="projects__item-title">Слаботочные сети</figcaption>
              <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/project-6.jpg" alt="projects" loading="lazy" />
              <div class="swiper-lazy-preloader"></div>
            </figure>
          </div>
        </div>
        <div class="projects__pagination"></div>
      </div>
    </section>
    <section class="answers">
      <div class="container">
        <h2 class="answers__title">ОТВЕТЫ НА ЧАСТЫЕ ВОПРОСЫ</h2>
        <?php
          $data_acf = get_field('quest-answer');
          $length_arr_answers = count($data_acf) / 2;
          $current__data = array();
          for ($index = 1; $index <= $length_arr_answers; $index++) {
            $current__data[$index]["quest"] = $data_acf["quest-$index"];
            $current__data[$index]["ans"] = $data_acf["ans-$index"];
          };
        ?>
        <ul class="answers__accardion">
          <?php
            foreach ($current__data as $key => $val) {
          ?>
          <li class="answers__accardion-elem">
            <button class="answers__accardion-btn">
              <h3 class="answers__accardion-title">
                <?php echo $val["quest"] ; ?>
              </h3>
            </button>
            <div class="answers__accardion-drop">
              <div class="answers__accardion-body">
                <p>
                  <?php echo $val["ans"] ; ?>
                </p>
              </div>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </section>
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">Отзывы</h2>
        <pre>
        <?php
          $data_acf = get_field('reviews');
          $length_arr_reviews = count($data_acf) / 3;
          $current__data = array();
          for ($index = 1; $index <= $length_arr_reviews; $index++) {
            $current__data[$index]["name"] = $data_acf["name$index"];
            $current__data[$index]["service"] = $data_acf["service$index"];
            $current__data[$index]["text-rev"] = $data_acf["text-rev$index"];
          };
        ?>
        </pre>
        <div class="swiper reviews__slider">
          <div class="swiper-wrapper">
          <?php
            foreach ($current__data as $key => $val) {
          ?>
            <div class="swiper-slide reviews__slide">
              <div class="reviews__slider-body">
                <h3 class="reviews__slider-name"><?php echo $val["name"];?></h3>
                <p class="reviews__slider-prof"><?php echo $val["service"];?></p>
                <p class="reviews__slider-descr">
                  <?php echo $val["text-rev"];?>
                </p>
                <div>
                  <?php 
                    $count_random_star = rand(4, 5);
                  ?>
                </div>
                <ul class="reviews__slider-stars">
                  <?php
                    for ($n = 1; $n <= 5; $n++) {
                    if ($n <= $count_random_star) {
                      ?>
                        <li class="reviews__slider-star orange"></li>
                      <?php
                    }  else {
                      ?>
                        <li class="reviews__slider-star"></li>
                      <?php
                    }
                  ?>
                  <?php } ?>
                </ul>
              </div>
            </div>
          <?php } ?>
          </div>
          <div class="reviews__pagination"></div>
        </div>
      </div>
    </section>
    </div>
    <div class="modal" id="ventilation">
        <div class="modal__inner">
            <div class="modal__body">
              <?php echo do_shortcode('[stm-calc id="1013"]'); ?>
            </div>
            <button class="modal__btn-close" arial-label="Закрыть окно"></button>
        </div>
    </div>
    <div class="modal" id="heating">
        <div class="modal__inner">
          <div class="modal__body">
            <?php echo do_shortcode('[stm-calc id="3599"]'); ?>
          </div>
          <button class="modal__btn-close" arial-label="Закрыть окно"></button>
        </div>
    </div>
    <div class="modal" id="contact-form-4236">
        <div class="modal__inner">
          <div class="modal__body modal__contact-form">
            <button class="modal__btn-close black" arial-label="Закрыть окно"></button>
            <?php echo do_shortcode('[contact-form-7 id="4236" title="Форма получить смету"]'); ?>
          </div>
        </div>
    </div>
    <div class="modal" id="contact-form-4237">
        <div class="modal__inner">
          <div class="modal__body modal__contact-form">
            <button class="modal__btn-close black" arial-label="Закрыть окно"></button>
            <?php echo do_shortcode('[contact-form-7 id="4237" title="Форма задать вопрос"]'); ?>
          </div>
        </div>
    </div>
    <div class="modal" id="contact-form-4238">
        <div class="modal__inner">
          <div class="modal__body modal__contact-form">
            <button class="modal__btn-close black" arial-label="Закрыть окно"></button>
            <?php echo do_shortcode('[contact-form-7 id="4238" title="Форма обратный звонок"]'); ?>
          </div>
        </div>
    </div> 


    
    <?php get_footer();?>


<div>
