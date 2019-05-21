

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
                    <div class="article_post_thumb article_post_thumb_store">
                        <div class="store_main_rating">
                            <span>4.7 </span>
                            <div class="store_rating_main"></div>
                        </div>
                        <div class="store_main_content">
                            <span class="store_name">ресторан</span>
                            <h1 class="h2">Entrée Bakery Chain </h1>
                            <div class="store_main_reserv">
                                <a href="#reserv_modal" data-fancybox>Бронировать от 25 azn</a>
                                <a href="#store_descr">Описание</a>
                                <a href="#map_about">На карте</a>
                            </div>
                        </div>
                        <img src="images/main/store/bg.jpg" alt="Places">
                    </div>
                </div>
            </div>
        </section>
        <!-- Store Edges -->
        <section class="store_edges" id="store_descr">
            <div class="container">
                <div class="row">
                    <div class="store_edges_wrap">
                    @foreach($properties as $property)
                            <div class="store_edges_box">
                                <img src="images/main/store/icon_restaraunt/banket.svg" >
                                <div class="store_edges_text">
                                    <p>{{$property->key}}</p>
                                </div>
                                <div class="store_edges_modal">
                                    <ul>
                                        <li>{{$property->value}} </li>

                                    </ul>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Store nav panel -->
        <section class="store_nav_box store_page_main_section">
            <div class="container">
                <div class="category_cart_wrapper">
                    <div class="row">
                        <div class="category_cart_tab_nav">
                            <div class="category_cart_tab_nav_mobile">
                                <button class="mobile_cat_btn">
                                    <svg class="icon icon-menu mob_btn_ico">
                                        <use xlink:href="./images/sprite/sprite.svg#menu"></use>
                                    </svg>Меню разделов
                                </button>
                            </div>
                            <ul class="tabs">
                                <li>
                                    <a href="#">Описание </a>
                                </li>
                                <li>
                                    <a href="#">Отзывы
                                        <span>(140) </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Меню </a>
                                </li>
                                <li>
                                    <a href="#">Галлерея </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row_between">
                        <div class="category_cart_tab_content">
                            <!-- Descr-->
                            <div class="tabs_item">
                                <article>
                                    <p>Как известно, театр начинается с вешалки. А ресторан – с вывески.</p>
                                    <p>Конечно, наличие модного шеф-повара, изысканного меню и дизайнерского интерьера бесспорно. И все же, выбирая новый ресторан, гости часто ориентируются по названию, соответственно которому формируют свои ожидания.</p>
                                    <p>Не случайно наши рестораны называются «Entree», что в переводе с французского означает «вход», «вступление». Мы приглашаем гостей окунуться в оазис тишины и комфорта среди динамичной жизни современного мегаполиса и
                                        ощутить дух Франции - законодательницы европейской моды, прикоснувшись к ее кулинарному наследию. Может быть, отведав блюда французской кухни, кто-то вспомнит о прекрасной маркизе де Помпадур, подарившей миру изысканный
                                        Севрский фарфор, а кто-то представит императора Александра I, въезжающего во главе русских войск в Париж, закруживший победителей в великолепии балов и приемов. Роскошная кухня и профессиональное обслуживание в
                                        «Entree» создают неповторимую атмосферу изысканности, позволяя насладиться романтической встречей, получить истинное удовольствие от праздничного вечера или делового мероприятия.</p>
                                    <p>Однако сказать, что «Entree» - элитарный ресторан, предназначенный лишь для статусной публики, было бы неправильно. Помимо грандиозных поводов для «еntree», будь то юбилеи, свадьбы или деловые ужины, к нам можно заглянуть
                                        на завтрак, приятно провести время и пообедать с близкими, зайти на чашку кофе «entre nous» с друзьями и даже заказать качественную еду на вынос. А уж выпечка, десерты и торты на заказ из собственной пекарни точно
                                        не разочаруют любителей сладкого.</p>
                                </article>
                                <a class="load_all_post" href="#">
                                    <p>Читатать полностью</p>
                                    <p>Показать часть статьи </p>
                                    <svg class="icon icon-down-arrow load_more_check">
                                        <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                    </svg>
                                </a>
                                <article class="all_article_text">
                                    <p>Как известно, театр начинается с вешалки. А ресторан – с вывески.</p>
                                    <p>Конечно, наличие модного шеф-повара, изысканного меню и дизайнерского интерьера бесспорно. И все же, выбирая новый ресторан, гости часто ориентируются по названию, соответственно которому формируют свои ожидания.</p>
                                    <p>Не случайно наши рестораны называются «Entree», что в переводе с французского означает «вход», «вступление». Мы приглашаем гостей окунуться в оазис тишины и комфорта среди динамичной жизни современного мегаполиса и
                                        ощутить дух Франции - законодательницы европейской моды, прикоснувшись к ее кулинарному наследию. Может быть, отведав блюда французской кухни, кто-то вспомнит о прекрасной маркизе де Помпадур, подарившей миру изысканный
                                        Севрский фарфор, а кто-то представит императора Александра I, въезжающего во главе русских войск в Париж, закруживший победителей в великолепии балов и приемов. Роскошная кухня и профессиональное обслуживание в
                                        «Entree» создают неповторимую атмосферу изысканности, позволяя насладиться романтической встречей, получить истинное удовольствие от праздничного вечера или делового мероприятия.</p>
                                    <p>Однако сказать, что «Entree» - элитарный ресторан, предназначенный лишь для статусной публики, было бы неправильно. Помимо грандиозных поводов для «еntree», будь то юбилеи, свадьбы или деловые ужины, к нам можно заглянуть
                                        на завтрак, приятно провести время и пообедать с близкими, зайти на чашку кофе «entre nous» с друзьями и даже заказать качественную еду на вынос. А уж выпечка, десерты и торты на заказ из собственной пекарни точно
                                        не разочаруют любителей сладкого.</p>
                                </article>
                            </div>
                            <!-- Feedback-->
                            <div class="tabs_item">
                                <form class="feedback_items">
                                    <div class="feedback_items_row">
                                        <div class="feedback_items_col">
                                            <h4 class="h4">Рейтинг посетителей:</h4>
                                            <div class="feedback_items_col_wrap">
                                                <div class="feedback_items_text">
                                                    <span>
                                                        <svg class="icon icon-f1 f_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#f1"></use>
                                                        </svg>
                                                    </span>
                                                    <p>Обслуживание</p>
                                                </div>
                                                <div class="feedback_items_rating">
                                                    <div class="feedback_items_rating_main"></div>
                                                </div>
                                            </div>
                                            <div class="feedback_items_col_wrap">
                                                <div class="feedback_items_text">
                                                    <span>
                                                        <svg class="icon icon-f2 f_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#f2"></use>
                                                        </svg>
                                                    </span>
                                                    <p>Комфортность</p>
                                                </div>
                                                <div class="feedback_items_rating">
                                                    <div class="feedback_items_rating_main"></div>
                                                </div>
                                            </div>
                                            <div class="feedback_items_col_wrap">
                                                <div class="feedback_items_text">
                                                    <span>
                                                        <svg class="icon icon-f3 f_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#f3"></use>
                                                        </svg>
                                                    </span>
                                                    <p>Цена</p>
                                                </div>
                                                <div class="feedback_items_rating">
                                                    <div class="feedback_items_rating_main"></div>
                                                </div>
                                            </div>
                                            <div class="feedback_items_col_wrap">
                                                <div class="feedback_items_text">
                                                    <span>
                                                        <svg class="icon icon-f4 f_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#f4"></use>
                                                        </svg>
                                                    </span>
                                                    <p>Вкус еды</p>
                                                </div>
                                                <div class="feedback_items_rating">
                                                    <div class="feedback_items_rating_main"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feedback_items_col feedback_items_col_rating">
                                            <h4 class="h4">Оценить:</h4>
                                            <div class="feedback_items_col_wrap">
                                                <div class="feedback_items_text">
                                                    <span>
                                                        <svg class="icon icon-f1 f_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#f1"></use>
                                                        </svg>
                                                    </span>
                                                    <p>Обслуживание</p>
                                                </div>
                                                <div class="feedback_items_rating">
                                                    <div class="feedback_items_rating_main_check"></div>
                                                    <div class="counter counter1">0</div>
                                                </div>
                                            </div>
                                            <div class="feedback_items_col_wrap">
                                                <div class="feedback_items_text">
                                                    <span>
                                                        <svg class="icon icon-f2 f_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#f2"></use>
                                                        </svg>
                                                    </span>
                                                    <p>Комфортность</p>
                                                </div>
                                                <div class="feedback_items_rating">
                                                    <div class="feedback_items_rating_main_check"></div>
                                                    <div class="counter counter2">0</div>
                                                </div>
                                            </div>
                                            <div class="feedback_items_col_wrap">
                                                <div class="feedback_items_text">
                                                    <span>
                                                        <svg class="icon icon-f3 f_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#f3"></use>
                                                        </svg>
                                                    </span>
                                                    <p>Цена</p>
                                                </div>
                                                <div class="feedback_items_rating">
                                                    <div class="feedback_items_rating_main_check"></div>
                                                    <div class="counter counter3">0</div>
                                                </div>
                                            </div>
                                            <div class="feedback_items_col_wrap">
                                                <div class="feedback_items_text">
                                                    <span>
                                                        <svg class="icon icon-f4 f_ico">
                                                            <use xlink:href="./images/sprite/sprite.svg#f4"></use>
                                                        </svg>
                                                    </span>
                                                    <p>Вкус еды</p>
                                                </div>
                                                <div class="feedback_items_rating">
                                                    <div class="feedback_items_rating_main_check"></div>
                                                    <div class="counter counter4">0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feedback_items_row">
                                        <div class="feedback_items_col_full">
                                            <div class="main_counter_wrap">
                                                <span>Общая оценка:</span>
                                                <div class="main_counter_star"></div>
                                                <div class="main_counter">0</div>
                                            </div>
                                            <a class="add_feedback_btn" href="#add_feedback" data-fancybox>Оставить отзыв</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="added_feedback added_feedback_visible">
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body added_feedback_body_half">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная.
                                                Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что
                                                вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное.
                                                Курица тает во рту. В целом, кухня мало отличается от остальных турецких ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!!
                                                :) </p>
                                            <div class="read_all_feedback">
                                                <svg class="icon icon-down-arrow read_all_ico">
                                                    <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    gallery_wrapper    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <div class="total_like">
                                                    <span>600</span>
                                                </div>
                                                <p>
                                                    <span>Благодарим Вас за голос! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="added_feedback added_feedback_hidden">
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="added_feedback_wrap">
                                        <div class="added_feedback_head">
                                            <h4 class="h4">Отлично! </h4>
                                            <div class="added_feedback_head_stats">
                                                <div class="added_feedback_head_stats_title">
                                                    <div class="added_feedback_head_stats_rating">
                                                        <div class="stats_rating"> </div>
                                                        <div class="stats_rating_numb">4.5 </div>
                                                    </div>
                                                    <div class="added_feedback_head_stats_title_author">
                                                        <span>от </span>
                                                        <div class="author_name">
                                                            <img src="images/main/store/i1.jpg" alt="Places">
                                                            <h5 class="h5">Айсель Алиева</h5>
                                                        </div>
                                                        <div class="feedback_added_info">
                                                            <span>отзыв написан час назад</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="added_feedback_body">
                                            <p>Отличный ресторан. Невероятно душевный и приятный персонал. Еда вкусная. Порции большие. Очень атмосферное место. Мясо нежное и сочное. Курица тает во рту. В целом, кухня мало отличается от остальных турецких
                                                ресторанов, но здесь особенно тепло и приятно. Такое ощущение, что вас здесь очень ждали :)) А ещё для вас сфоткала сам рестаран!! :) </p>
                                        </div>
                                        <div class="added_feedback_photo">
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                            <a href="images/main/store/1.jpg" data-fancybox="images_for_this_feedback">
                                                <img src="images/main/store/1.jpg" alt="Places feedback">
                                            </a>
                                        </div>
                                        <div class="added_feedback_like">
                                            <div class="added_feedback_like_btn">
                                                <svg class="icon icon-like3 f_like_new">
                                                    <use xlink:href="./images/sprite/sprite.svg#like3"></use>
                                                </svg>
                                                <p>
                                                    <span>Спасибо, </span>
                                                    <span>Айсель </span>
                                                    <span>! </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="load_more_feedback" href="#">
                                    <span>Показать еще 10 </span>
                                    <svg class="icon icon-down-arrow l_feedback">
                                        <use xlink:href="./images/sprite/sprite.svg#down-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                            <!-- Menu -->
                            <div class="tabs_item">
                                <div class="store_menu">
                                    <div class="store_menu_breadcrumbs">
                                        <a href="#">
                                            Каталог
                                            <svg class="icon icon-close menu_ico">
                                                <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            Каталог
                                            <svg class="icon icon-close menu_ico">
                                                <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            Каталог
                                            <svg class="icon icon-close menu_ico">
                                                <use xlink:href="./images/sprite/sprite.svg#close"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="store_menu_category">
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner1.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner2.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner1.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner2.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner1.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner2.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner1.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner2.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner1.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                        <a class="store_menu_category_col" id="cat_name_for_load" href="ajax/category_inner2.html">
                                            <img src="images/main/store/food.jpg" alt="Places store menu">
                                            <h4 class="h4">Завтраки</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Gallery -->
                            <div class="tabs_item">
                                <div class="gallery_wrapper">
                                    <div class="gallery_wrapper_top">
                                        <div class="gallery_wrapper_bottom">
                                          @foreach($galleries as $gallery)
                                                <a href="{{asset('uploads/gallery/'.$gallery->image)}}" data-fancybox="images_gallery">
                                                    <img src="{{asset('uploads/gallery/'.$gallery->image)}}" alt="Places">
                                                </a>
                                              @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about_contacts_box">
                            <!-- Example For fitness use class about_contacts_box_fitness, end change _fitness, for meet, concert, barber, and etc, this text add to end for other box (exp class about_contacts_box_etc)-->
                            <div class="about_contacts_box_main about_contacts_box_restaraunt">
                                <p class="text">Ресторан</p>
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
                                <div class="about_contacts_box_work_time about_contacts_box_feedback">
                                    <svg class="icon icon-feed about_time_ico">
                                        <use xlink:href="./images/sprite/sprite.svg#feed"></use>
                                    </svg>
                                    <p>
                                        <span>15 отзывов</span>
                                        <span class="places_page_rating"> </span>
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
                                <div class="store_added_favorite">
                                    <svg class="icon icon-favorite store_fvt">
                                        <use xlink:href="./images/sprite/sprite.svg#favorite"></use>
                                    </svg>Избранное
                                </div>
                                <a href="tel: 0124567766">
                                    <svg class="icon icon-tel about_tel_ico">
                                        <use xlink:href="./images/sprite/sprite.svg#tel"></use>
                                    </svg>012 456-77-66</a>
                                <div class="about_user">
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
            </div>
        </section>
        <!-- Other affiliates-->
        <section class="other_affiliates">
            <div class="container">
                <div class="row">
                    <div class="category_cart_tab_nav">
                        <ul class="tabs">
                            <li>
                                <a href="#">Другие филиалы</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row_between">
                    <div class="affiliates_slider">
@foreach($branches as $branch)
                            <div class="tabs_item_wrap tabs_item_wrap_restaraunt">
                                <div class="tabs_item_thumb">
                                    <img src="" alt="Places az Category Images">
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
                                    <h3 class="h3">{{$branch->name}}</h3>
                                    <div class="cat_work_time">
                                        <svg class="icon icon-pin time_icon_cat feed_ico">
                                            <use xlink:href="./images/sprite/sprite.svg#pin"></use>
                                        </svg>Где то там
                                    </div>
                                    <div class="cat_work_time">
                                        <svg class="icon icon-time time_icon_cat">
                                            <use xlink:href="./images/sprite/sprite.svg#time"></use>
                                        </svg>11:00 — 01:00
                                    </div>
                                </div>
                                <div class="tabs_item_prices">
                                    <a class="tabs_item_prices_link" href="#"> Перейти</a>
                                    <div class="cat_rating_box" data-rateyo-rating="1.5"></div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


