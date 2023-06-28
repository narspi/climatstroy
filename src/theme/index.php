<?php get_header(); ?>
<div class="focus-wrapper">
    <section class="top" style="--top-bg: url(<?php echo get_field('image'); ?>);">
        <div class="container">
            <div class="top__text">
                <h1 class="top__title">
                    <?php the_title(); ?>
                </h1>
                <p class="top__descr">
                    <?php echo get_field('first-screen-text'); ?>
                    </pre>
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
<div class="container">
    <?php
    if (function_exists('rank_math_the_breadcrumbs') && !is_front_page()) {
        rank_math_the_breadcrumbs();
    }
    ?>
</div>
    <div class="top-calc">
        <div class="container">
            <ul class="top-calc__list">
                <li class="top-calc__item">
                    <button class="top-calc__btn" data-modal-target="heating">Калькулятор монтажа отопления</button>
                </li>
                <li class="top-calc__item">
                    <button class="top-calc__btn" data-modal-target="ventilation">Калькулятор монтожа
                        вентиляции</button>
                </li>
            </ul>
        </div>
    </div>
    <?php
    $allow_quiz = get_field('quiz-show');
    if ($allow_quiz) {
    ?>
    <div class="extra-section">
        <div class="container">
            <iframe class="iframe-allowed" id="quiz_iframe" src="/quiz/index.html" widht="100%" height="942px"></iframe>
        </div>
    </div>
    <?php } ?>
    <section class="about">
        <div class="about__inner">
            <div class="about__content">
                <h2 class="about__title">О компании</h2>
                <div class="about__descr">
                    <p>
                        Группа компаний Климат Строй работает с 2008 года. Мы занимаемся проектированием, монтажом и
                        обслуживанием систем кондиционирования и вентиляции, а также систем отопления и горячего
                        водоснабжения. На сегодняшний день мы являемся одним из лидеров рынка ОВиВК (отопление,
                        вентиляция и кондиционирование воздуха) в Москве, имеем большое количество компаний-партнеров и
                        клиентов в различных сферах бизнеса.
                    </p>
                    <p>
                        Мы обладаем современным оборудованием и профессиональной командой инженеров и монтажников,
                        которые гарантируют высокое качество работы в кратчайшие сроки.
                    </p>
                    <p>
                        А также активно участвуем в реализации крупных инженерных проектов, применяем инновационные
                        решения и технологии для повышения эффективности систем кондиционирования и экономии
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
    </section>
    <section class="video-company">
        <div class="container">
            <h2 class="video-company__title">Видео о компании</h2>
            <div class="video-company__youtube">
                <iframe class="lazyload iframe-allowed" width="560" height="315"
                    data-src="https://www.youtube.com/embed/ZVhy2uZjQ8I?controls=0" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <?php
    $is_reviews_galery = get_field('reviews-galery__check', 'option');
    if ($is_reviews_galery) {
        ?>
        <section class="documents">
            <div class="container">
                <h2 class="documents__title">Наши отзывы на других платформах</h2>
                <?php
                $documetns_data = get_field('reviews-galery', 'option');
                ?>
                <div class="swiper documents__slider" id="slider-reviews">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($documetns_data as $key => $val) {
                            ?>
                            <div class="swiper-slide documents__item">
                                <figure href="<?php echo $val['reviews-galery__img']; ?>"
                                    data-fancybox="document-gallary-reviews">
                                    <figcaption class="documents__item-caption">
                                        <?php echo $val['reviews-galery__caption']; ?>
                                    </figcaption>
                                    <img src="<?php echo $val['reviews-galery__img']; ?>" loading="lazy" />
                                    <div class="swiper-lazy-preloader"></div>
                                </figure>
                            </div>
                        <?php } ?>
                    </div>
                    <button class="documents__prev" id="reviews-prev"></button>
                    <button class="documents__next" id="reviews-next"></button>
                </div>
                <div class="documents__pagination" id="reviews-pagination"></div>
            </div>
        </section>
    <?php } ?>
    <section class="services">
        <div class="container">
            <h2 class="services__title">Наши услуги</h2>
            <div class="swiper services__slider">
                <?php
                $data = get_field('services__slider', 'option');

                ?>
                <div class="services__items swiper-wrapper">
                    <?php
                    foreach ($data as $key => $val) {
                        ?>
                        <div class="services__item swiper-slide">
                            <h3 class="services__item-title">
                                <?php echo $val['services_slider-title']; ?>
                            </h3>
                            <p class="services__descr">
                                <?php echo $val['services__slider-descr']; ?>
                            </p>
                            <a class="btn-secondary services__btn"
                                href="<?php echo $val['services__slider-link']; ?>">Подробнее</a>
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
                $data = get_field('advantages__slider', 'option');
                ?>
                <div class="swiper-wrapper">
                    <?php
                    foreach ($data as $key => $val) {
                        ?>
                        <div class="swiper-slide">
                            <div class="advantages__item">
                                <div class="advantages__decor"
                                    style="background-image: url('<?php echo $val['advantages__slider-decor']; ?>')"></div>
                                <h3 class="advantages__item-title">
                                    <?php echo $val['advantages__slider-title']; ?>
                                </h3>
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
                <?php
                $data = get_field('persons__slider', 'option');
                ?>
                <ul class="persons__items swiper-wrapper">
                    <?php
                    foreach ($data as $key => $val) {
                        ?>
                        <li class="persons__elem swiper-slide">
                            <img class="persons__elem-avatar" src="<?php echo $val['persons__slider-img']; ?>"
                                alt="<?php echo $val['persons__slider-name']; ?>" loading="lazy" />
                            <p class="persons__elem-title">
                                <?php echo $val['persons__slider-prof']; ?>
                            </p>
                            <h3 class="persons__elem-descr">
                                <?php echo $val['persons__slider-name']; ?>
                            </h3>
                        </li>
                    <?php } ?>
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
    <section class="extra-section" id="ceni">
        <div class="container">
            <h2 class="extra-section__title">Цены</h2>
            <div>
                <?php echo do_shortcode($table); ?>
            </div>
        </div>
    </section>
    <?php
    $calc = get_field('calc');
    preg_match('/\[([^\s\]]+)(?:\s[^\]]*)?\]/', $calc, $matches);
    $shortcode_tag = isset($matches[1]) ? $matches[1] : '';
    if ($shortcode_tag && shortcode_exists($shortcode_tag)) {
    ?>
    <section class="extra-section">
        <div class="container">
            <h2 class="extra-section__title">Калькулятор</h2>
            <div>
                <?php echo do_shortcode($calc); ?>
            </div>
        </div>
    </section>
    <?php } ?>
    <section class="steps">
        <div class="container">
            <h2 class="steps__title">
                СХЕМА РАБОТЫ 5 ШАГОВ
            </h2>
            <ul class="steps__items">
                <li class="steps__item">
                    <div class="steps__elem">Обследование объекта</div>
                    <div class="steps__elem">Разработка технического решения</div>
                </li>
                <li class="steps__item">
                    <div class="steps__elem">Согласование стоимости с Заказчиком</div>
                    <div class="steps__elem">Оформление проекта</div>
                </li>
                <li class="steps__item">
                    <div class="steps__elem">Комплектация оборудования и материалов</div>
                    <div class="steps__elem">Входной контроль оборудования и материалов</div>
                </li>
                <li class="steps__item">
                    <div class="steps__elem">Монтаж оборудования</div>
                    <div class="steps__elem">Пусконаладочные работы</div>
                </li>
                <li class="steps__item">
                    <div class="steps__elem">Технический надзор</div>
                    <div class="steps__elem">Сдача обьекта Заказчику</div>
                </li>
            </ul>
        </div>
    </section>
    <section class="documents">
        <div class="container">
            <h2 class="documents__title">Наши документы</h2>
            <?php
            $documetns_data = get_field('documents_slider', 'option');
            ?>
            <div class="swiper documents__slider" id="documents-slider">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($documetns_data as $key => $val) {
                        ?>
                        <div class="swiper-slide documents__item">
                            <figure href="<?php echo $val['documents_image']; ?>"
                                data-fancybox="document-gallary-documents">
                                <figcaption class="documents__item-caption">
                                    <?php echo $val['documents_caption']; ?>
                                </figcaption>
                                <img src="<?php echo $val['documents_image']; ?>" loading="lazy" />
                                <div class="swiper-lazy-preloader"></div>
                            </figure>
                        </div>
                    <?php } ?>
                </div>
                <button class="documents__prev" id="documents-prev"></button>
                <button class="documents__next" id="documents-next"></button>
            </div>
            <div class="documents__pagination" id="documents-pagination"></div>
        </div>
    </section>
    <section class="projects" id="proekt">
        <div class="container">
            <h2 class="projects__title">Наши проекты</h2>
            <div class="project__slider swiper">
                <div class="projects__items swiper-wrapper">
                    <figure class="projects__item swiper-slide">
                        <figcaption class="projects__item-title">Отопление</figcaption>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-1.jpg" alt="projects"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                    </figure>
                    <figure class="projects__item swiper-slide">
                        <figcaption class="projects__item-title">Сантехника</figcaption>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-2.jpg" alt="projects"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                    </figure>
                    <figure class="projects__item swiper-slide">
                        <figcaption class="projects__item-title">Вентиляция</figcaption>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-3.jpg" alt="projects"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                    </figure>
                    <figure class="projects__item swiper-slide">
                        <figcaption class="projects__item-title">Проектирование</figcaption>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-4.jpg" alt="projects"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                    </figure>
                    <figure class="projects__item swiper-slide">
                        <figcaption class="projects__item-title">
                            Кондиционирование
                        </figcaption>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-5.jpg" alt="projects"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                    </figure>
                    <figure class="projects__item swiper-slide">
                        <figcaption class="projects__item-title">Слаботочные сети</figcaption>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-6.jpg" alt="projects"
                            loading="lazy" />
                        <div class="swiper-lazy-preloader"></div>
                    </figure>
                </div>
            </div>
            <div class="projects__pagination"></div>
        </div>
    </section>
    <section class="answers" itemscope itemtype="https://schema.org/FAQPage">
        <div class="container">
            <h2 class="answers__title">ОТВЕТЫ НА ЧАСТЫЕ ВОПРОСЫ</h2>
            <?php
            $data_acf = get_field('quest-answer');
            $length_arr_answers = count($data_acf) / 2;
            $current__data = array();
            for ($index = 1; $index <= $length_arr_answers; $index++) {
                $current__data[$index]["quest"] = $data_acf["quest-$index"];
                $current__data[$index]["ans"] = $data_acf["ans-$index"];
            }
            ;
            ?>
            <ul class="answers__accardion">
                <?php
                foreach ($current__data as $key => $val) {
                    ?>
                    <li class="answers__accardion-elem" itemscope itemprop="mainEntity"
                        itemtype="https://schema.org/Question">
                        <button class="answers__accardion-btn">
                            <h3 class="answers__accardion-title" itemprop="name">
                                <?php echo $val["quest"]; ?>
                            </h3>
                        </button>
                        <div class="answers__accardion-drop" itemscope itemprop="acceptedAnswer"
                            itemtype="https://schema.org/Answer">
                            <div class="answers__accardion-body">
                                <p itemprop="text">
                                    <?php echo $val["ans"]; ?>
                                </p>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
    <section class="reviews" id="otzyv">
        <div class="container">
            <h2 class="reviews__title">Отзывы</h2>
            <?php
            $data_acf = get_field('reviews');
            $length_arr_reviews = count($data_acf) / 3;
            $current__data = array();
            for ($index = 1; $index <= $length_arr_reviews; $index++) {
                $current__data[$index]["name"] = $data_acf["name$index"];
                $current__data[$index]["service"] = $data_acf["service$index"];
                $current__data[$index]["text-rev"] = $data_acf["text-rev$index"];
            }
            ;
            ?>

            <div class="swiper reviews__slider">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($current__data as $key => $val) {
                        ?>
                        <div class="swiper-slide reviews__slide">
                            <div class="reviews__slider-body">
                                <h3 class="reviews__slider-name">
                                    <?php echo $val["name"]; ?>
                                </h3>
                                <p class="reviews__slider-prof">
                                    <?php echo $val["service"]; ?>
                                </p>
                                <p class="reviews__slider-descr">
                                    <?php echo $val["text-rev"]; ?>
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
                                        } else {
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

<?php get_footer(); ?>


<div>