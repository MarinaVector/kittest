<?php

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Kit order panel';
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset=<?= Yii::$app->charset ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Kit admin">
    <meta name="generator" content="Kit orders">
    <title><?= $this->title ?></title>
    <?= $this->head() ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,400;0,600;1,400;1,600&family=Montserrat:wght@400;600&display=swap"
            rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
    <link href="css/style.min.css" rel="stylesheet">



</head>

<body>
<?php $this->beginBody() ?>
<div class="main-page">

    <div class="container-project menu pl-lg-5">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon menu-toggle"></span>
        </button>

        <nav class="navbar navbar-expand-lg navbar-light bg-white pr-xl-2 pt-3">


            <img class="logo d-inline pr-2 pb-4 pb-lg-0" src="images/Logo.png" alt="Logo" width="168" height="73">



            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-between" id="navbarSupportedContent">
                <ul class="navbar-nav menu__items pb-3 pb-lg-0">

                    <li class="nav-item menu__item">
                        <p class="menu__item-tel">
                            логистика для
                            интернет-магазинов
                            <a class="text-dark no-wrap d-inline-block" href="tel:8800234-73-77">8 800 234-73-77</a>
                        </p>
                    </li>
                    <li class="nav-item menu__item text-dark  align-self-center">
                        <a class="nav-link menu__item-link" href="#">Документы</a>
                    </li>
                    <li class="nav-item menu__item  align-self-center">
                        <a class="nav-link menu__item-link" href="#">Калькулятор</a>
                    </li>
                    <li class="nav-item menu__item  align-self-center">
                        <a class="nav-link menu__item-link" href="#">Филиалы</a>
                    </li>
                </ul>


                <div class="input-group search-container__bar pr-xl-4 mx-0 mr-xl-15 mr-lg-31 pt-2 pt-lg-1">
                    <input type="text" class="search-container-info form-control d-inline-block text-truncate px-0 pb-2 pb-lg-0"
                           placeholder="Отследить/Оплатить заказ">
                    <div class="input-group-append">
                        <button class="btn btn-white" type="button">
                            <img class="s889earch-container-icon" src="images/search_icon.png" alt="Поиск">
                        </button>
                    </div>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <button type="button" class="btn menu__item-btn py-2">Заключить договор</button>
                </form>

            </div>
        </nav>
    </div>



    <div class="container-project">
        <div class="row">
            <nav id="sidebarMenu" class="side-menu col-12 col-md-3 col-xl-2 d-block collapse pb-5">



          <span class="collapsed"><img class="change-my-color d-inline ml-md-0 ml-3 pr-1" data-toggle="collapse"
                                       data-target="#collapse" aria-expanded="true" aria-controls="collapse" width="29" height="15"
                                       src="images/burger.png" alt="Открыть сайдбар"></span>


                <div class="collapse show pt-3" id="collapse">
                    <ul class="side-menu side-menu__content nav flex-column">
                        <li class='active-marker'></li>
                        <li class="side-menu-item nav-item is-active py-3">
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-1" width="29" height="28"
                             src="images/sidebar_icons/home.svg" alt="Главная"></span>
                                Главная<span class="sr-only">(current)</span>
                            </a>

                        </li>
                        <li class="side-menu-item nav-item py-3">
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-1" width="29" height="28"
                             src="images/sidebar_icons/track.svg" alt="Отслеживание"></span>
                                Отслеживание
                            </a>
                        </li>
                        <li class="side-menu-item nav-item py-3">
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-1" width="29" height="29"
                             src="images/sidebar_icons/order.svg" alt="Заказ"></span>
                                Оформить заказ
                            </a>
                        </li>
                        <li class="side-menu-item nav-item py-3">
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-1" width="29" height="29"
                             src="images/sidebar_icons/point.svg" alt="ПВЗ"></span>
                                ПВЗ
                            </a>
                        </li>
                        <li class="side-menu-item nav-item py-3">
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-1" width="29" height="29"
                             src="images/sidebar_icons/finance.svg" alt=" Финансы"></span>
                                Финансы
                            </a>
                        </li>
                        <li class="side-menu-item nav-item py-3">
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-1" width="29" height="29"
                             src="images/sidebar_icons/calc.svg" alt="Калькулятор"></span>
                                Калькулятор
                            </a>
                        </li>
                        <li class="side-menu-item nav-item py-3">
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-1" width="29" height="29"
                             src="images/sidebar_icons/integration.svg" alt="Интеграция"></span>
                                Интеграция
                            </a>
                        </li>
                        <li class="side-menu-item nav-item py-3">
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-2" width="29" height="29"
                             src="images/sidebar_icons/setting.svg" alt="Настройки"></span>
                                Настройки
                            </a>
                        </li>
                        <li class="side-menu-item nav-item py-3">
                            <div class="line d-inline"></div>
                            <a class="side-menu__title" href="#">
                  <span><img class="change-my-color d-inline pr-2" width="29" height="29"
                             src="images/sidebar_icons/exit.svg" alt="Выход"></span>
                                Выход
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <?= $content ?>


        </div>
    </div>

    <footer class="footer-project py-5">
        <div class="container-project py-md-5">
            <ul class="footer-project__items row pt-lg-5 pb-lg-2 py-lg-4">
                <li
                        class="footer-project__item py-0 offset-xl-1 pl-lg-5 col-lg-3 col-md-6 offset-md-1 offset-lg-0 pl-xl-5 pr-xl-0 mr-xl-3 col-12">
                    <h2 class="footer-project__title h4 pb-xl-3">«Е-КИТ»</h2>
                    <p class="text-break footer-project__info pb-5">Современная служба доставки, которая осуществляет полный
                        комплекс услуг, связанных с
                        транспортировкой и
                        доставкой товаров как для юридических, так и для физических лиц. </p>
                    <p class="text-break footer-project__rights">@ 2020 все права защищены</p>

                </li>

                <li class="footer-project__item nav-item col-lg-3 col-md-5 pl-lg-5 py-md-0 pr-md-0 col-12">
                    <h4 class="footer-project__subtitle pb-4">Отследить <br>
                        отправление</h4>


                    <form class="search-container search-container-tracking pb-3 m-0">
                        <input type="text" class="search-container__bot footer-project__contacts" value="Укажите трек номер">
                        <a href="#"><img class="search-container-track" src="images/track_icon.png" alt="Поиск"></a>
                    </form>
                    <p class="footer-project__subtitle pr-md-0 pb-lg-2 pr-md-0">Смотреть документы</p>
                    <p class="footer-project__subtitle">Запросить договор</p>

                </li>
                <li
                        class="footer-project__item nav-item col-xl-2 col-lg-3 col-md-6 mr-lg-3 pr-md-0 offset-md-1 offset-lg-0 col-12">
                    <h4 class="footer-project__subtitle pb-4">Контакты</h4>
                    <address class="footer-project__contacts footer-project__address"><span
                                class="footer-project__name text-white">Адрес:</span> Екатеринбург, ул. 8 Марта, 269</address>
                    <div class="footer-project__contacts footer-project__phone pb-2"><span
                                class="footer-project__name">Телефон:</span>
                        <a class="text-white" href="tel:+74951234567">+7 (495)
                            123-45-67</a>
                    </div>


                    <address class="footer-project__contacts footer-project__email"><span
                                class="footer-project__name">E-mail:</span>
                        <a class="text-white" href="info@e-kit.pro">info@e-kit.pro</a>
                    </address>


                </li>
                <li class="footer-project__item nav-item col-lg-1 col-md-5 col-12 pl-4">
                    <h4 class="footer-project__subtitle m-xl-0 pb-3">Мы в соцсетях</h4>
                    <div class="social-block pl-3">
                        <div class="row">
                            <div class="social-block__icon mb-2 mr-2">
                                <img class="social-block__img social-block-inst mx-auto mt-1" src="images/social_icons/inst.svg"
                                     alt="inst">
                            </div>
                            <div class="social-block__icon mb-2">
                                <img class="social-block__img social-block-twit mx-auto mt-2" src="images/social_icons/twit.svg"
                                     alt="twit">
                            </div>
                            <div class="social-block__icon mr-2">
                                <img class="social-block__img social-block-fb mx-auto mt-2" src="images/social_icons/fb.svg" alt="fb">
                            </div>
                            <div class="social-block__icon">
                                <img class="social-block__img social-block-vk mx-auto mt-1" src="images/social_icons/vk.svg" alt="vk">
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </footer>

</div>



<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script src="chart.js"></script>
<script src="menu.js"></script>


</body>

</html>
<?php $this->endPage() ?>
