

@extends('layouts.frontend')

@section('content')

    <main class="main">
        <!-- Section Top Places slider -->
    @include('frontend.includes.placesslider')
    <!-- Filter section-->
        <section class="filters_box">
            <div class="container">
                <div class="row">
                    <!-- Main search filters-->
                    <form class="filters_box_wrapper">
                        <div class="filters_box_row">
                            <div class="filters_box_search">
                                <span>Поиск</span>
                                <input type="search" placeholder="По мероприятиям, людям и местам">
                                <svg class="icon icon-search search_icon_filter">
                                    <use xlink:href="./images/sprite/sprite.svg#search"></use>
                                </svg>
                            </div>
                            <div class="filters_box_category">
                                <span>Категория</span>
                                <select class="nice_select">
                                    <option>Рестораны</option>
                                    <option>Рестораны 1</option>
                                    <option>Рестораны 2</option>
                                    <option>Рестораны 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="filters_box_row filters_box_row_full">
                            <div class="filters_box_col_half">
                                <div class="filters_box_col_content">
                                    <span>Тип заведения </span>
                                    <select class="nice_select">
                                        <option>Выбрать</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Рейтинг</span>
                                    <select class="nice_select">
                                        <option>Любой рейтинг</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Район города</span>
                                    <select class="nice_select">
                                        <option>Любой рейтинг</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Расположение </span>
                                    <select class="nice_select">
                                        <option>Любое расположение</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Кухня </span>
                                    <select class="nice_select">
                                        <option>Все</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>В меню </span>
                                    <select class="nice_select">
                                        <option>Все категории</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Музыка </span>
                                    <select class="nice_select">
                                        <option>Выбрать</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Организационные возможности </span>
                                    <select class="nice_select">
                                        <option>Выбрать</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Ближайшие метро </span>
                                    <select class="nice_select">
                                        <option>Выбрать</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Язык обслуживания </span>
                                    <!-- if need multiselect-->
                                    <div class="filters_box_multiple">
                                        <div class="filters_box_multiple_placeholder">
                                            <p>Выбрать</p>
                                        </div>
                                        <select style="display:none" name="" multiple="">
                                            <option value="1">Выбрать 11</option>
                                            <option value="2">Выбрать 12</option>
                                            <option value="3">Выбрать 13</option>
                                            <option value="4">Выбрать 14</option>
                                            <option value="5">Выбрать 15</option>
                                            <option value="5">Выбрать 17</option>
                                            <option value="6">6Выбрать 18</option>
                                            <option value="6">6Выбрать 18</option>
                                            <option value="6">6Выбрать 18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="filters_box_col_half">
                                <div class="filters_box_col_content filters_box_col_content_prices">
                                    <span>Тип заведения </span>
                                    <div class="price_date">
                                        <span id="slider_snap_value_lower">
                                            50 </span>
                                        <p>₼</p>
                                        <span> </span>
                                        <span id="slider_snap_value_upper">470 </span>
                                        <p>₼</p>
                                    </div>
                                    <div id="filters_price_range"></div>
                                </div>
                                <div class="filters_box_col_content">
                                    <span>Дополнительно</span>
                                    <!-- Filter Checkbox-->
                                    <div class="filters_box_checked_items_wrap">
                                        <div class="filters_box_checked_items">
                                            <input id="check_item_1" type="checkbox">
                                            <label for="check_item_1">Для курящих</label>
                                        </div>
                                        <div class="filters_box_checked_items">
                                            <input id="check_item_2" type="checkbox">
                                            <label for="check_item_2">Wi-Fi</label>
                                        </div>
                                        <div class="filters_box_checked_items">
                                            <input id="check_item_3" type="checkbox">
                                            <label for="check_item_3">Парковка</label>
                                        </div>
                                        <div class="filters_box_checked_items">
                                            <input id="check_item_4" type="checkbox">
                                            <label for="check_item_4">Романтический ужин</label>
                                        </div>
                                        <div class="filters_box_checked_items">
                                            <input id="check_item_5" type="checkbox">
                                            <label for="check_item_5">Летняя терраса</label>
                                        </div>
                                    </div>
                                    <!-- Loader hidden checkbox when click btn -->
                                    <div class="filters_box_checked_items_wrap filters_box_checked_items_hidden">
                                        <div class="filters_box_checked_items">
                                            <input id="check_item_6" type="checkbox">
                                            <label for="check_item_6">Для курящих</label>
                                        </div>
                                        <div class="filters_box_checked_items">
                                            <input id="check_item_7" type="checkbox">
                                            <label for="check_item_7">Wi-Fi</label>
                                        </div>
                                    </div>
                                    <a class="load_more_checkbox" href="#">
                                        <p>Еще</p>
                                        <p>Скрыть</p>
                                        <svg class="icon icon-down-arrow load_more_check">
                                            <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="filter_box_row filter_box_row_button">
                            <button class="filters_submit_btn" type="submit">Подобрать место</button>
                            <a class="load_more_filters" href="#">
                                <p>Скрыть расширенный поиск</p>
                                <p>Расширенный поиск</p>
                                <svg class="icon icon-down-arrow load_more_check">
                                    <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                </svg>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Category list -->
        <section class="category_list">
            <div class="container">
                <div class="row">
                    <a class="category_list_box list_box_blue" href="#">
                        <img src="images/main/icon/cat_meet.svg" alt="Places az Meeting Category">
                        <span class="category_list_number">26</span>
                        <h3 class="h3">Мероприятия</h3>
                    </a>
                    <a class="category_list_box list_box_blue_dark" href="#">
                        <img src="images/main/icon/cat_restaraunt.svg" alt="Places az Meeting Category">
                        <span class="category_list_number">26</span>
                        <h3 class="h3">Рестораны</h3>
                    </a>
                    <a class="category_list_box list_box_purple" href="#">
                        <img src="images/main/icon/cat_concert.svg" alt="Places az Meeting Category">
                        <span class="category_list_number">26</span>
                        <h3 class="h3">Концерты</h3>
                    </a>
                    <a class="category_list_box list_box_orange" href="#">
                        <img src="images/main/icon/cat_fitness.svg" alt="Places az Meeting Category">
                        <span class="category_list_number">916</span>
                        <h3 class="h3">Фитнес центры</h3>
                    </a>
                    <a class="category_list_box list_box_blue_light" href="#">
                        <img src="images/main/icon/cat_barber.svg" alt="Places az Meeting Category">
                        <span class="category_list_number">916</span>
                        <h3 class="h3">Салоны</h3>
                    </a>
                    <a class="category_list_box list_box_cyan" href="#">
                        <img src="images/main/icon/cat_etc.svg" alt="Places az Meeting Category">
                        <span class="category_list_number">916</span>
                        <h3 class="h3">Остальное</h3>
                    </a>
                </div>
            </div>
        </section>
        <!-- Category cart -->
        <section class="category_cart">
            <div class="container">
                <div class="row">
                    <div class="category_cart_wrapper">
                        <div class="category_cart_tab_nav">
                            <div class="category_cart_tab_nav_mobile">
                                <button class="mobile_cat_btn">
                                    <svg class="icon icon-menu mob_btn_ico">
                                        <use xlink:href="./images/sprite/sprite.svg#menu"></use>
                                    </svg>Категории
                                </button>
                            </div>
                            <ul class="tabs">
                                <li>
                                    <a href="#">Популярное</a>
                                </li>
                                <li>
                                    <a href="#">Новое</a>
                                </li>
                                <li>
                                    <a href="#">Акции</a>
                                </li>
                                <li>
                                    <a href="#">Рекомендованные</a>
                                </li>
                            </ul>
                            <div class="layout_cart_change">
                                <span>
                                    Изменить мои настройки
                                    <svg class="icon icon-down-arrow cart_arrow_icon">
                                        <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                    </svg>
                                </span>
                                <a class="layout_cart_change_active" href="#">
                                    <img src="images/main/icon/cart.svg" alt="Placrs">
                                </a>
                                <a href="#">
                                    <img src="images/main/icon/list.svg" alt="Placrs">
                                </a>
                            </div>
                        </div>
                        <div class="category_cart_tab_content">
                            <div class="tabs_item">
                                <div class="layout_changer_loader">
                                    <img src="images/main/icon/loader.svg" alt="Places loader">
                                </div>
                                <div class="tabs_item_visible">
                                    @foreach($places as $place)
                                        <div class="tabs_item_wrap tabs_item_wrap_restaraunt">
                                            <div class="tabs_item_thumb">
                                                <img src="{{asset('uploads/place/'.$place->image)}}" alt="Places az Category Images">
                                                <div class="tabs_item_thumb_rating">
                                                    <p>Ресторан</p>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="tabs_item_thumb_edge">
                                                    <div class="edge_stats_icon" title="Используеться спросом">
                                                        <svg class="icon icon-fire fire_icon fire_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="edge_stats_icon" title="Используеться спросом 2">
                                                        <svg class="icon icon-star fire_icon pop_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="edge_stats_icon" title="Используеться спросом 3">
                                                        <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="edge_stats_icon" title="Используеться спросом 3">
                                                        <svg class="icon icon-cheap fire_icon cheap_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="edge_stats_icon" title="Используеться спросом 3">
                                                        <svg class="icon icon-like2 fire_icon like_icon">
                                                            <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="tabs_item_thumb_close">
                                                    <svg class="icon icon-close close_icon">
                                                        <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="tabs_item_content">
                                                <div class="tabs_item_content_stats_hidden">
                                                    <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                                    <div class="tabs_item_thumb_rating">
                                                        <p>Ресторан</p>
                                                    </div>
                                                </div>
                                                <h3 class="h3">{{$place->location}}</h3>
                                                <div class="cat_work_time_wrap">
                                                    <div class="cat_work_time">
                                                        <svg class="icon icon-time time_icon_cat">
                                                            <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                        </svg>{{$place->place_open_time}}
                                                    </div>
                                                    <div class="cat_work_time">
                                                        <svg class="icon icon-feed time_icon_cat feed_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#feed"></use>
                                                        </svg>15 Отзывов
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="edge_stats_hidden">
                                                <div class="edge_stats_icon" title="Используеться спросом">
                                                    <svg class="icon icon-fire fire_icon fire_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 2">
                                                    <svg class="icon icon-star fire_icon pop_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-cheap fire_icon cheap_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-like2 fire_icon like_icon">
                                                        <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="tabs_item_prices">
                                                <a class="tabs_item_prices_link" href="{{ route('store', $place->id) }}">
                                                    <span>от 49 azn </span>
                                                    <span>*суп, салат, горячее блюдо и напиток </span>
                                                </a>
                                                <div class="tabs_item_prices_fav_add" cloned="yes">
                                                    <svg class="icon icon-favorite fav_icon_tabs">
                                                        <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                                    </svg>
                                                </div>
                                                <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>
                                <div class="tabs_item_visible tabs_item_not_load">
                                    <div class="tabs_item_wrap tabs_item_wrap_restaraunt">
                                        <div class="tabs_item_thumb">
                                            <img src="images/main/main/tab_img1.jpg" alt="Places az Category Images">
                                            <div class="tabs_item_thumb_rating">
                                                <p>Ресторан</p>
                                                <span>4.5</span>
                                            </div>
                                            <div class="tabs_item_thumb_edge">
                                                <div class="edge_stats_icon" title="Используеться спросом">
                                                    <svg class="icon icon-fire fire_icon fire_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 2">
                                                    <svg class="icon icon-star fire_icon pop_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-cheap fire_icon cheap_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-like2 fire_icon like_icon">
                                                        <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="tabs_item_thumb_close">
                                                <svg class="icon icon-close close_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_content">
                                            <div class="tabs_item_content_stats_hidden">
                                                <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                                <div class="tabs_item_thumb_rating">
                                                    <p>Ресторан</p>
                                                </div>
                                            </div>
                                            <h3 class="h3">Hard Rock Cafe </h3>
                                            <div class="cat_work_time_wrap">
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-time time_icon_cat">
                                                        <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                    </svg>11:00 — 01:00
                                                </div>
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-feed time_icon_cat feed_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#feed"></use>
                                                    </svg>15 Отзывов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="edge_stats_hidden">
                                            <div class="edge_stats_icon" title="Используеться спросом">
                                                <svg class="icon icon-fire fire_icon fire_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 2">
                                                <svg class="icon icon-star fire_icon pop_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-cheap fire_icon cheap_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-like2 fire_icon like_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_prices">
                                            <a class="tabs_item_prices_link" href="#">
                                                <span>от 49 azn </span>
                                                <span>*суп, салат, горячее блюдо и напиток </span>
                                            </a>
                                            <div class="tabs_item_prices_fav_add" cloned="yes">
                                                <svg class="icon icon-favorite fav_icon_tabs">
                                                    <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                            <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                        </div>
                                    </div>
                                    <div class="tabs_item_wrap tabs_item_wrap_fitness">
                                        <div class="tabs_item_thumb">
                                            <img src="images/main/main/tab_img1.jpg" alt="Places az Category Images">
                                            <div class="tabs_item_thumb_rating">
                                                <p>Спорт</p>
                                                <span>4.5</span>
                                            </div>
                                            <div class="tabs_item_thumb_edge">
                                                <div class="edge_stats_icon" title="Используеться спросом">
                                                    <svg class="icon icon-fire fire_icon fire_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 2">
                                                    <svg class="icon icon-star fire_icon pop_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-cheap fire_icon cheap_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-like2 fire_icon like_icon">
                                                        <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="tabs_item_thumb_close">
                                                <svg class="icon icon-close close_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_content">
                                            <div class="tabs_item_content_stats_hidden">
                                                <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                                <div class="tabs_item_thumb_rating">
                                                    <p>Ресторан</p>
                                                </div>
                                            </div>
                                            <h3 class="h3">Hard Rock Cafe </h3>
                                            <div class="cat_work_time_wrap">
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-time time_icon_cat">
                                                        <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                    </svg>11:00 — 01:00
                                                </div>
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-feed time_icon_cat feed_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#feed"></use>
                                                    </svg>15 Отзывов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="edge_stats_hidden">
                                            <div class="edge_stats_icon" title="Используеться спросом">
                                                <svg class="icon icon-fire fire_icon fire_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 2">
                                                <svg class="icon icon-star fire_icon pop_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-cheap fire_icon cheap_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-like2 fire_icon like_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_prices">
                                            <a class="tabs_item_prices_link" href="#">
                                                <span>от 49 azn </span>
                                                <span>*суп, салат, горячее блюдо и напиток </span>
                                            </a>
                                            <div class="tabs_item_prices_fav_add" cloned="yes">
                                                <svg class="icon icon-favorite fav_icon_tabs">
                                                    <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                            <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                        </div>
                                    </div>
                                    <div class="tabs_item_wrap tabs_item_wrap_meet">
                                        <div class="tabs_item_thumb">
                                            <img src="images/main/main/tab_img1.jpg" alt="Places az Category Images">
                                            <div class="tabs_item_thumb_rating">
                                                <p>Мероприятия</p>
                                                <span>4.5</span>
                                            </div>
                                            <div class="tabs_item_thumb_edge">
                                                <div class="edge_stats_icon" title="Используеться спросом">
                                                    <svg class="icon icon-fire fire_icon fire_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 2">
                                                    <svg class="icon icon-star fire_icon pop_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-cheap fire_icon cheap_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-like2 fire_icon like_icon">
                                                        <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="tabs_item_thumb_close">
                                                <svg class="icon icon-close close_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_content">
                                            <div class="tabs_item_content_stats_hidden">
                                                <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                                <div class="tabs_item_thumb_rating">
                                                    <p>Ресторан</p>
                                                </div>
                                            </div>
                                            <h3 class="h3">Hard Rock Cafe </h3>
                                            <div class="cat_work_time_wrap">
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-time time_icon_cat">
                                                        <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                    </svg>11:00 — 01:00
                                                </div>
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-feed time_icon_cat feed_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#feed"></use>
                                                    </svg>15 Отзывов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="edge_stats_hidden">
                                            <div class="edge_stats_icon" title="Используеться спросом">
                                                <svg class="icon icon-fire fire_icon fire_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 2">
                                                <svg class="icon icon-star fire_icon pop_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-cheap fire_icon cheap_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-like2 fire_icon like_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_prices">
                                            <a class="tabs_item_prices_link" href="#">
                                                <span>от 49 azn </span>
                                                <span>*суп, салат, горячее блюдо и напиток </span>
                                            </a>
                                            <div class="tabs_item_prices_fav_add" cloned="yes">
                                                <svg class="icon icon-favorite fav_icon_tabs">
                                                    <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                            <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                        </div>
                                    </div>
                                    <div class="tabs_item_wrap tabs_item_wrap_concert">
                                        <div class="tabs_item_thumb">
                                            <img src="images/main/main/tab_img1.jpg" alt="Places az Category Images">
                                            <div class="tabs_item_thumb_rating">
                                                <p>Концерты</p>
                                                <span>4.5</span>
                                            </div>
                                            <div class="tabs_item_thumb_edge">
                                                <div class="edge_stats_icon" title="Используеться спросом">
                                                    <svg class="icon icon-fire fire_icon fire_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 2">
                                                    <svg class="icon icon-star fire_icon pop_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-cheap fire_icon cheap_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-like2 fire_icon like_icon">
                                                        <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="tabs_item_thumb_close">
                                                <svg class="icon icon-close close_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_content">
                                            <div class="tabs_item_content_stats_hidden">
                                                <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                                <div class="tabs_item_thumb_rating">
                                                    <p>Ресторан</p>
                                                </div>
                                            </div>
                                            <h3 class="h3">Hard Rock Cafe </h3>
                                            <div class="cat_work_time_wrap">
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-time time_icon_cat">
                                                        <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                    </svg>11:00 — 01:00
                                                </div>
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-feed time_icon_cat feed_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#feed"></use>
                                                    </svg>15 Отзывов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="edge_stats_hidden">
                                            <div class="edge_stats_icon" title="Используеться спросом">
                                                <svg class="icon icon-fire fire_icon fire_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 2">
                                                <svg class="icon icon-star fire_icon pop_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-cheap fire_icon cheap_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-like2 fire_icon like_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_prices">
                                            <a class="tabs_item_prices_link" href="#">
                                                <span>от 49 azn </span>
                                                <span>*суп, салат, горячее блюдо и напиток </span>
                                            </a>
                                            <div class="tabs_item_prices_fav_add" cloned="yes">
                                                <svg class="icon icon-favorite fav_icon_tabs">
                                                    <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                            <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                        </div>
                                    </div>
                                    <div class="tabs_item_wrap tabs_item_wrap_barber">
                                        <div class="tabs_item_thumb">
                                            <img src="images/main/main/tab_img1.jpg" alt="Places az Category Images">
                                            <div class="tabs_item_thumb_rating">
                                                <p>Салоны</p>
                                                <span>4.5</span>
                                            </div>
                                            <div class="tabs_item_thumb_edge">
                                                <div class="edge_stats_icon" title="Используеться спросом">
                                                    <svg class="icon icon-fire fire_icon fire_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 2">
                                                    <svg class="icon icon-star fire_icon pop_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-cheap fire_icon cheap_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-like2 fire_icon like_icon">
                                                        <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="tabs_item_thumb_close">
                                                <svg class="icon icon-close close_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_content">
                                            <div class="tabs_item_content_stats_hidden">
                                                <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                                <div class="tabs_item_thumb_rating">
                                                    <p>Ресторан</p>
                                                </div>
                                            </div>
                                            <h3 class="h3">Hard Rock Cafe </h3>
                                            <div class="cat_work_time_wrap">
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-time time_icon_cat">
                                                        <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                    </svg>11:00 — 01:00
                                                </div>
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-feed time_icon_cat feed_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#feed"></use>
                                                    </svg>15 Отзывов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="edge_stats_hidden">
                                            <div class="edge_stats_icon" title="Используеться спросом">
                                                <svg class="icon icon-fire fire_icon fire_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 2">
                                                <svg class="icon icon-star fire_icon pop_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-cheap fire_icon cheap_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-like2 fire_icon like_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_prices">
                                            <a class="tabs_item_prices_link" href="#">
                                                <span>от 49 azn </span>
                                                <span>*суп, салат, горячее блюдо и напиток </span>
                                            </a>
                                            <div class="tabs_item_prices_fav_add" cloned="yes">
                                                <svg class="icon icon-favorite fav_icon_tabs">
                                                    <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                            <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                        </div>
                                    </div>
                                    <div class="tabs_item_wrap tabs_item_wrap_etc">
                                        <div class="tabs_item_thumb">
                                            <img src="images/main/main/tab_img1.jpg" alt="Places az Category Images">
                                            <div class="tabs_item_thumb_rating">
                                                <p>Остальное</p>
                                                <span>4.5</span>
                                            </div>
                                            <div class="tabs_item_thumb_edge">
                                                <div class="edge_stats_icon" title="Используеться спросом">
                                                    <svg class="icon icon-fire fire_icon fire_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 2">
                                                    <svg class="icon icon-star fire_icon pop_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-cheap fire_icon cheap_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                    </svg>
                                                </div>
                                                <div class="edge_stats_icon" title="Используеться спросом 3">
                                                    <svg class="icon icon-like2 fire_icon like_icon">
                                                        <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="tabs_item_thumb_close">
                                                <svg class="icon icon-close close_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_content">
                                            <div class="tabs_item_content_stats_hidden">
                                                <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                                <div class="tabs_item_thumb_rating">
                                                    <p>Ресторан</p>
                                                </div>
                                            </div>
                                            <h3 class="h3">Hard Rock Cafe </h3>
                                            <div class="cat_work_time_wrap">
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-time time_icon_cat">
                                                        <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                    </svg>11:00 — 01:00
                                                </div>
                                                <div class="cat_work_time">
                                                    <svg class="icon icon-feed time_icon_cat feed_ico">
                                                        <use xlink:href="./images/sprite/sprite.svg#feed"></use>
                                                    </svg>15 Отзывов
                                                </div>
                                            </div>
                                        </div>
                                        <div class="edge_stats_hidden">
                                            <div class="edge_stats_icon" title="Используеться спросом">
                                                <svg class="icon icon-fire fire_icon fire_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 2">
                                                <svg class="icon icon-star fire_icon pop_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-heart1 fire_icon heart1_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#heart1"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-cheap fire_icon cheap_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#cheap"></use>
                                                </svg>
                                            </div>
                                            <div class="edge_stats_icon" title="Используеться спросом 3">
                                                <svg class="icon icon-like2 fire_icon like_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#like2"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs_item_prices">
                                            <a class="tabs_item_prices_link" href="#">
                                                <span>от 49 azn </span>
                                                <span>*суп, салат, горячее блюдо и напиток </span>
                                            </a>
                                            <div class="tabs_item_prices_fav_add" cloned="yes">
                                                <svg class="icon icon-favorite fav_icon_tabs">
                                                    <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                            <div class="cat_rating_box" data-rateyo-rating="4.5"></div>
                                        </div>
                                    </div>
                                </div>
                                <a class="load_more_cat_cart" href="#">
                                    <span>Показать ещё 6 </span>
                                    <svg class="icon icon-down-arrow cat_down_ico">
                                        <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Edges-->
        @include('frontend.includes.edges')

    </main>
@endsection


