<?php

/* @var $this yii\web\View */
$this->title = 'Kit admin';
$this->registerMetaTag([
        'name' => 'description',
         'content' => 'Сервис для управления доставками ваших заказов'
])

?>
<main class="orders col-12 col-xl-10 col-md-9 px-0 pl-md-0 pr-md-3">
    <div
            class="order-summary d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pl-2 bg-white pt-3 pb-2 mb-3">
        <h1 class="order-summary__title pl-2">Сводка по заказам</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-md-2">
                <p class="order-summary__option align-self-center pr-md-1">Период:</p>
                <div class="dropdown bg-light px-md-2">
                    <a class="btn dropdown-toggle order-summary__option" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Неделя
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Неделя1</a>
                        <a class="dropdown-item" href="#">Неделя</a>
                        <a class="dropdown-item" href="#">Неделя</a>
                    </div>
                </div>



                <p class="order-summary__option align-self-center pr-md-5">Свой период:</p>
                <img class="order-summary__interval d-inline bg-light" width="36" height="36"
                     src="images/calendar_icon.svg" alt="Отследить заказ">

                <div>

                </div>
            </div>
        </div>
    </div>

    <section class="orders-view">

        <h3 class="orders-view__title pl-5 pb-5">Неделя: Всего заказов 106</h3>

        <div class="charts row">
            <div class="col-12 offset-xl-1 col-lg-10">
                <div id="chart">
                </div>
                <h3 class="orders-view__title pl-3 pb-1">Всего поручено принять стоимость за товары</h3>
                <p class="orders-view__subtitle pl-3 mb-5">150.056 p.</p>

                <div class="row align-items-center pb-5">
                    <div class="col-xl-3 col-lg-4 col-12 col-md-7">
                        <div class="campaign-chart" id="campaignChart"></div>
                    </div>
                    <div class="offset-1 col-xl-2 col-lg-3 col-md-5 pb-3 pb-lg-0 col-11 px-md-0">
                        <div class="row">
                            <div class="col-4 px-md-0">
                                <div class="order-btn order-btn-recive pb-2"> <img class="order-btn__img" width="25" height="25"
                                                                                   alt="принят" src="images/cart.png"></div>
                            </div>
                            <div class="col-8 px-0">
                                <h6 class="orders-view__summ">75 056 P</h6>
                                <p class="orders-view__subtitle">Принято</p>
                            </div>
                        </div>
                    </div>

                    <div class="offset-1 offset-md-0 col-xl-2 col-lg-3 col-md-6 pb-md-3 pb-lg-0 col-11 px-md-0">
                        <div class="row">
                            <div class="col-4 px-md-0">
                                <div class="order-btn order-btn-wait pb-2"><img class="order-btn__img" width="25" height="25"
                                                                                alt="ждет оплаты" src="images/wait.png"></div>
                            </div>
                            <div class="col-8 px-0">
                                <h6 class="orders-view__summ">75 000 P</h6>
                                <p class="orders-view__subtitle">Ожидают оплаты</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>

</main>



