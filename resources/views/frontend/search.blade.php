

@extends('layouts.frontend')

@section('content')
    <main class="main">
        <!-- Section Top Places slider -->
         @include('frontend.includes.placesslider')
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
        <section class="filters_box">
            <div class="container">
                <div class="row">
                    <!-- Main search filters-->
                    <form class="filters_box_wrapper category_filters_box_wrapper">
                        <div class="filters_box_row">
                            <div class="filters_box_category">
                                <span>Категория</span>
                                <select class="nice_select">
                                    <option>Любая категория</option>
                                    <option>Рестораны 1</option>
                                    <option>Рестораны 2</option>
                                    <option>Рестораны 3</option>
                                </select>
                                <svg class="icon icon-tag tag_ico">
                                    <use xlink:href="./images/sprite/sprite.svg#tag"></use>
                                </svg>
                            </div>
                            <div class="filters_box_search">
                                <span>Поиск</span>
                                <input type="search" placeholder="По мероприятиям, людям и местам">
                                <svg class="icon icon-search search_icon_filter">
                                    <use xlink:href="./images/sprite/sprite.svg#search"></use>
                                </svg>
                            </div>
                            <div class="filter_box_rating">
                                <div class="filter_box_rating_wrap">
                                    <span>Рейтинг</span>
                                    <select class="nice_select">
                                        <option>Любой рейтинг</option>
                                        <option>Выбрать 1</option>
                                        <option>Выбрать 2</option>
                                        <option>Выбрать 3</option>
                                    </select>
                                </div>
                                <button class="filters_submit_btn" type="submit">Подобрать</button>
                            </div>
                        </div>
                        <div class="filter_box_row filter_box_row_button">
                            <ul class="search_list">
                                <li>
                                <li>
                                    <a href="#">Ресторан</a>
                                </li>
                                <li>
                                    <a href="#">цирк</a>
                                </li>
                                <li>
                                    <a href="#">театр</a>
                                </li>
                                </li>
                            </ul>
                            <ul class="search_list">
                                <li>
                                <li>
                                    <a href="#">Hard Rock</a>
                                </li>
                                <li>
                                    <a href="#">Rivera</a>
                                </li>
                                <li>
                                    <a href="#">Secrets</a>
                                </li>
                                </li>
                            </ul>
                            <a class="load_more_filters" href="#">
                                <p>Еще параметры </p>
                                <p>Скрыть расширенные параметры</p>
                                <svg class="icon icon-down-arrow load_more_check">
                                    <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                </svg>
                            </a>
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
                    </form>
                </div>
            </div>
        </section>
        <!-- Search section -->
        <section class="search_page">
            <div class="container">
                <div class="row_between">
                    <div class="search_head_wrap">
                        <div class="search_head">
                            <div class="h2">Результаты поиска: </div>
                            <div class="h3">Ресторан </div>
                        </div>
                        <div class="sort_result">
                            <a class="load_more_filters_search_rating" href="#">
                                <p>По рейтингу / </p>
                            </a>
                            <a class="load_more_filters_search" href="#">
                                <p>По цене</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="search_result_wrap">
                        <div class="search_result_popup">
                            <div class="search_result_row">
                                <div class="search_result_col search_result_col_images">
                                    <img src="images/main/main/tab_img1.jpg" alt="Images">
                                </div>
                                <div class="search_result_col_content">
                                    <div class="search_result_col">
                                        <div class="search_result_stars">
                                            <div class="rating_box" data-rateyo-rating="4.5"></div>
                                        </div>
                                        <div class="search_result_title">
                                            <h2 class="h2">
                                                Entree
                                                <span>(Icheri sheher)</span>
                                            </h2>
                                            <div class="object_type">
                                                <span>Ресторан</span>
                                            </div>
                                        </div>
                                        <div class="search_result_work_time">
                                            <span>
                                                <svg class="icon icon-time time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                </svg>
                                                <p>11:00 - 22:00</p>
                                            </span>
                                            <span>
                                                <svg class="icon icon-pin time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                                </svg>
                                                <p>3 Bunyad Sardarov, Baku</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="search_result_col search_result_col_edges">
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-fire fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-star fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-favorite fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search_result_col">
                                        <a class="general_btn_purple" href="#">от 50 azn</a>
                                        <span class="general_hidden_price" id="general_hidden_prices">50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="search_result_row">
                                <div class="search_result_col search_result_col_images">
                                    <img src="images/main/main/tab_img1.jpg" alt="Images">
                                </div>
                                <div class="search_result_col_content">
                                    <div class="search_result_col">
                                        <div class="search_result_stars">
                                            <div class="rating_box" data-rateyo-rating="1.5"></div>
                                        </div>
                                        <div class="search_result_title">
                                            <h2 class="h2">
                                                Entree
                                                <span>(Icheri sheher)</span>
                                            </h2>
                                            <div class="object_type">
                                                <span>Ресторан</span>
                                            </div>
                                        </div>
                                        <div class="search_result_work_time">
                                            <span>
                                                <svg class="icon icon-time time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                </svg>
                                                <p>11:00 - 22:00</p>
                                            </span>
                                            <span>
                                                <svg class="icon icon-pin time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                                </svg>
                                                <p>3 Bunyad Sardarov, Baku</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="search_result_col search_result_col_edges">
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-fire fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-star fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-favorite fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search_result_col">
                                        <a class="general_btn_purple" href="#">от 62 azn</a>
                                        <span class="general_hidden_price" id="general_hidden_prices">62</span>
                                    </div>
                                </div>
                            </div>
                            <div class="search_result_row">
                                <div class="search_result_col search_result_col_images">
                                    <img src="images/main/main/tab_img1.jpg" alt="Images">
                                </div>
                                <div class="search_result_col_content">
                                    <div class="search_result_col">
                                        <div class="search_result_stars">
                                            <div class="rating_box" data-rateyo-rating="2.5"></div>
                                        </div>
                                        <div class="search_result_title">
                                            <h2 class="h2">
                                                Entree
                                                <span>(Icheri sheher)</span>
                                            </h2>
                                            <div class="object_type">
                                                <span>Ресторан</span>
                                            </div>
                                        </div>
                                        <div class="search_result_work_time">
                                            <span>
                                                <svg class="icon icon-time time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                </svg>
                                                <p>11:00 - 22:00</p>
                                            </span>
                                            <span>
                                                <svg class="icon icon-pin time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                                </svg>
                                                <p>3 Bunyad Sardarov, Baku</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="search_result_col search_result_col_edges">
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-fire fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-star fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-favorite fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search_result_col">
                                        <a class="general_btn_purple" href="#">от 70 azn</a>
                                        <span class="general_hidden_price" id="general_hidden_prices">70</span>
                                    </div>
                                </div>
                            </div>
                            <div class="search_result_row">
                                <div class="search_result_col search_result_col_images">
                                    <img src="images/main/main/tab_img1.jpg" alt="Images">
                                </div>
                                <div class="search_result_col_content">
                                    <div class="search_result_col">
                                        <div class="search_result_stars">
                                            <div class="rating_box" data-rateyo-rating="3.5"></div>
                                        </div>
                                        <div class="search_result_title">
                                            <h2 class="h2">
                                                Entree
                                                <span>(Icheri sheher)</span>
                                            </h2>
                                            <div class="object_type">
                                                <span>Ресторан</span>
                                            </div>
                                        </div>
                                        <div class="search_result_work_time">
                                            <span>
                                                <svg class="icon icon-time time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                </svg>
                                                <p>11:00 - 22:00</p>
                                            </span>
                                            <span>
                                                <svg class="icon icon-pin time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                                </svg>
                                                <p>3 Bunyad Sardarov, Baku</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="search_result_col search_result_col_edges">
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-fire fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-star fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-favorite fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search_result_col">
                                        <a class="general_btn_purple" href="#">от 15 azn</a>
                                        <span class="general_hidden_price" id="general_hidden_prices">15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_result_popup search_result_popup_hidden">
                            <div class="search_result_row">
                                <div class="search_result_col search_result_col_images">
                                    <img src="images/main/main/tab_img1.jpg" alt="Images">
                                </div>
                                <div class="search_result_col_content">
                                    <div class="search_result_col">
                                        <div class="search_result_stars">
                                            <div class="rating_box" data-rateyo-rating="5"></div>
                                        </div>
                                        <div class="search_result_title">
                                            <h2 class="h2">
                                                Entree
                                                <span>(Icheri sheher)</span>
                                            </h2>
                                            <div class="object_type">
                                                <span>Ресторан</span>
                                            </div>
                                        </div>
                                        <div class="search_result_work_time">
                                            <span>
                                                <svg class="icon icon-time time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                </svg>
                                                <p>11:00 - 22:00</p>
                                            </span>
                                            <span>
                                                <svg class="icon icon-pin time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                                </svg>
                                                <p>3 Bunyad Sardarov, Baku</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="search_result_col search_result_col_edges">
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-fire fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-star fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-favorite fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search_result_col">
                                        <a class="general_btn_purple" href="#" data-prices="10">от 12 azn</a>
                                        <span class="general_hidden_price" id="general_hidden_prices">12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="search_result_row">
                                <div class="search_result_col search_result_col_images">
                                    <img src="images/main/main/tab_img1.jpg" alt="Images">
                                </div>
                                <div class="search_result_col_content">
                                    <div class="search_result_col">
                                        <div class="search_result_stars">
                                            <div class="rating_box" data-rateyo-rating="4"></div>
                                        </div>
                                        <div class="search_result_title">
                                            <h2 class="h2">
                                                Entree
                                                <span>(Icheri sheher)</span>
                                            </h2>
                                            <div class="object_type">
                                                <span>Ресторан</span>
                                            </div>
                                        </div>
                                        <div class="search_result_work_time">
                                            <span>
                                                <svg class="icon icon-time time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                </svg>
                                                <p>11:00 - 22:00</p>
                                            </span>
                                            <span>
                                                <svg class="icon icon-pin time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                                </svg>
                                                <p>3 Bunyad Sardarov, Baku</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="search_result_col search_result_col_edges">
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-fire fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-star fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-favorite fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search_result_col">
                                        <a class="general_btn_purple" href="#">от 22 azn</a>
                                        <span class="general_hidden_price" id="general_hidden_prices">22</span>
                                    </div>
                                </div>
                            </div>
                            <div class="search_result_row">
                                <div class="search_result_col search_result_col_images">
                                    <img src="images/main/main/tab_img1.jpg" alt="Images">
                                </div>
                                <div class="search_result_col_content">
                                    <div class="search_result_col">
                                        <div class="search_result_stars">
                                            <div class="rating_box" data-rateyo-rating="3"></div>
                                        </div>
                                        <div class="search_result_title">
                                            <h2 class="h2">
                                                Entree
                                                <span>(Icheri sheher)</span>
                                            </h2>
                                            <div class="object_type">
                                                <span>Ресторан</span>
                                            </div>
                                        </div>
                                        <div class="search_result_work_time">
                                            <span>
                                                <svg class="icon icon-time time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                </svg>
                                                <p>11:00 - 22:00</p>
                                            </span>
                                            <span>
                                                <svg class="icon icon-pin time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                                </svg>
                                                <p>3 Bunyad Sardarov, Baku</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="search_result_col search_result_col_edges">
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-fire fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-star fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-favorite fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search_result_col">
                                        <a class="general_btn_purple" href="#">от 33 azn</a>
                                        <span class="general_hidden_price" id="general_hidden_prices">33</span>
                                    </div>
                                </div>
                            </div>
                            <div class="search_result_row">
                                <div class="search_result_col search_result_col_images">
                                    <img src="images/main/main/tab_img1.jpg" alt="Images">
                                </div>
                                <div class="search_result_col_content">
                                    <div class="search_result_col">
                                        <div class="search_result_stars">
                                            <div class="rating_box" data-rateyo-rating="1"></div>
                                        </div>
                                        <div class="search_result_title">
                                            <h2 class="h2">
                                                Entree
                                                <span>(Icheri sheher)</span>
                                            </h2>
                                            <div class="object_type">
                                                <span>Ресторан</span>
                                            </div>
                                        </div>
                                        <div class="search_result_work_time">
                                            <span>
                                                <svg class="icon icon-time time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                                </svg>
                                                <p>11:00 - 22:00</p>
                                            </span>
                                            <span>
                                                <svg class="icon icon-pin time_icon">
                                                    <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                                </svg>
                                                <p>3 Bunyad Sardarov, Baku</p>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="search_result_col search_result_col_edges">
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-fire fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#fire"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-star fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                        <div class="edge_stats_icon">
                                            <svg class="icon icon-favorite fire_icon">
                                                <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search_result_col">
                                        <a class="general_btn_purple" href="#">от 43 azn</a>
                                        <span class="general_hidden_price" id="general_hidden_prices">43</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_result_row_load_more">
                            <a href="#">
                                <span>
                                    Показать еще результаты
                                    <svg class="icon icon-down-arrow load_icon">
                                        <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Edges-->
        @include('frontend.includes.edges')
    </main>
@endsection


