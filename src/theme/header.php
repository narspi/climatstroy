<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head();?>
    <title>New project</title>
  </head>
  <body <?php body_class(); ?>>
    
    <header class="header">
      <div class="header__top">
        <div class="container header__top-inner">
          <nav class="header__drop-nav">
            <button class="header__burger" aria-label="Открыть меню"></button>
            <?php 
              wp_nav_menu(array(
                'theme_location' => 'top_drop_menu',
                'container_class' => 'header__drop-elem'
              ))
            ?>
          </nav>
          <button class="header__menu-left" aria-label="scroll left"></button>
          <nav class="header__top-nav dragscroll">
            <?php 
              wp_nav_menu(array(
                'theme_location' => 'top_menu',
                'container' => false
              ))
            ?>
          </nav>
          <button class="header__menu-right" arial-label="scroll right"></button>
          <ul class="header__social">
            <li class="header__social-item">
              <a
                class="header__social-link whatsup"
                href="https://wa.me/79165483408"
                aria-label="whatsup"
              ></a>
            </li>
            <li class="header__social-item">
              <a
                class="header__social-link telegram"
                href="https://t.me/northtrip_info"
                aria-label="telegram"
              ></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header__bottom">
        <div class="container header__bottom-inner">
          <a class="header__logo" href="#">
            <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/header-logo.svg" alt="logo" />
          </a>
          <ul class="header__calc">
            <li class="header__calc-item">
              <button class="header__calc-btn" data-modal-target="heating">
                Калькулятор монтажа отопления
              </button>
            </li>
            <li class="header__calc-item">
              <button class="header__calc-btn" data-modal-target="ventilation">
                Калькулятор монтажа вентиляции
              </button>
            </li>
          </ul>
          <div class="header__contacts">
            <a class="header__tel" href="tel:+74959991707">+7 495 999 17 07</a>
            <a class="header__tel" href="tel:+79165483408">+7 916 548 34 08</a>
            <button class="header__call" data-modal-target="contact-form-4238">Заказать обратный звонок</button>
          </div>
          <div class="header__mobile">
            <button class="header__menu-mobile" aria-label="open menu"></button>
          </div>
        </div>
      </div>
    </header>

