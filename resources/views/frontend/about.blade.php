

@extends('layouts.frontend')

@section('content')
    <main class="main">
        <!-- Breadcrumbs section-->
        <section class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbs_box">
                        <a class="main_page" href="#">
                            <svg class="icon icon-back to_main_page_ico">
                                <use xlink:href="./images/sprite/sprite.svg#back"></use>
                            </svg>На главную </a>
                        <a href="#">Тест </a>
                        <a href="#">Тест </a>
                        <a href="#">Тест </a>
                        <a href="#">Тест </a>
                        <a class="in_page" href="#">Рестораны</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Filter section-->
        <section class="article_page_post">
            <div class="container">
                <div class="row">
                    <div class="article_post_thumb">
                        <img src="images/main/about/team.jpg" alt="Places">
                    </div>
                </div>
                <div class="row">
                    <div class="category_cart_tab_nav">
                        <ul class="tabs">
                            <li>
                                <a href="#">Чем мы занимаемся</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row_between">
                    <article class="about_description">
                        <p>Компания Places.az, основанная в 1996 году в Амстердаме, прошла путь от маленького голландского стартапа до одного из лидеров на мировом рынке онлайн-бронирования путешествий. В Places.az, подразделении Places.az Holdings Inc.
                            (NASDAQ: BKNG), работает более 17 000 человек в 198 офисах в 70 странах.</p>
                        <p>Миссия Places.az — вдохновлять людей на новые открытия. Поэтому мы стремимся максимально облегчить путешествия с помощью цифровых технологий. Booking.com предлагает самый большой выбор вариантов проживания: от апартаментов, домов
                            для отпуска и маленьких семейных отелей до роскошных 5-звездочных курортов, домов на дереве и даже иглу. Сайт и приложения Places.az переведены более чем на 40 языков. Мы предлагаем 28 348 745 заявленных единиц размещения по
                            147 566 направлениям в 227 странах и территориях по всему миру.</p>
                        <p>Каждый день через наш сервис бронируют более 1 550 000 номероночей. На Places.az путешественники могут мгновенно забронировать идеальный вариант проживания как для отдыха, так и для командировки. Мы не взимаем комиссию за бронирование,
                            а если клиент найдет более низкую цену, то возмещаем разницу. Гости могут связаться с командой поддержки Places.az в любое время суток и получить помощь на более чем 40 языках.</p>
                    </article>
                    <div class="about_contacts_box">
                        <div class="about_contacts_box_main">
                            <h4 class="h4">Places.az Team</h4>
                            <div class="about_contacts_box_work_time">
                                <svg class="icon icon-time about_time_ico">
                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                </svg>
                                <p>
                                    <span>пн - пт: 09:00 — 00:00 </span>
                                    <span>сб - Вс: 08:00 — 02:00</span>
                                </p>
                            </div>
                            <div class="about_contacts_box_work_time">
                                <svg class="icon icon-pin about_time_ico">
                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                </svg>
                                <p>
                                    <span>20 Nigar Rəfibəyli, Baku</span>
                                </p>
                            </div>
                            <a href="tel: 0124567766">
                                <svg class="icon icon-tel about_tel_ico">
                                    <use xlink:href="./images/sprite/sprite.svg#tel"></use>
                                </svg>012 456-77-66</a>
                            <div class="about_user">
                                <img src="images/main/icon/user.svg" alt="Places">
                            </div>
                        </div>
                        <div class="about_contacts_box_social">
                            <a class="box_social_fb" href="#">
                                <img src="images/main/icon/fb.svg" alt="Places">
                                <span>20</span>
                            </a>
                            <a class="box_social_wtsapp" href="#">
                                <img src="images/main/icon/wt.svg" alt="Places">
                                <span>20</span>
                            </a>
                            <a class="box_social_insta" href="#">
                                <img src="images/main/icon/in.svg" alt="Places">
                                <span>20</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="map_about_wrap">
                        <div id="map_about"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


