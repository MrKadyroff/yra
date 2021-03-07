    <!doctype html>
    <!-- <html lang="ru"> -->
    <?php 
    session_start();
    require_once 'endpoints/db.php';
    require_once 'endpoints/lang.php';
    setcookie("select_lang" , $_SESSION['lang'] , time() + 100);
    // echo $_COOKIE["select_lang"];
    
   
     ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Young Researchers Alliance</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
              rel="stylesheet">

        <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="./css/style.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    </head>
    <body id="home">
    <div class="wrap">
        <div class="mobile-nav">
            <a href="#home" class="mobile-nav__close"><img src="./img/close.svg" alt="close"></a>
            <ul class="mobile-menu">
                <li class="mobile-menu__item"><a class="mobile-menu__link page-scroll" href="#home"><?php echo $word['main']; ?></a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link page-scroll" href="#about"><?php echo $word['about']; ?></a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link page-scroll" href="#news">Новости</a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link page-scroll" href="#team">Команда</a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link page-scroll" href="#projects">Проекты</a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link page-scroll" href="#smi">СМИ</a></li>
                <li class="mobile-menu__item"><a class="mobile-menu__link page-scroll" href="#faq">Популярные вопросы</a></li>
                
                <li class="mobile-menu__item"><a class="mobile-menu__link page-scroll" href="#faq">Частые вопросы</a></li>
            </ul>
            <ul class="socials-menu">
                <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                        src="./img/icon-telegram.svg" alt="telegram"></a></li>
                <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                        src="./img/icon-facebook.svg" alt="facebook"></a></li>
                <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                        src="./img/icon-instagram.svg" alt="instagram"></a></li>
                <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                        src="./img/icon-linkedin.svg" alt="linkedin"></a></li>
                <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                        src="./img/icon-youtube.svg" alt="youtube"></a></li>
            </ul>
        </div>
        <div class="mobile-nav-overlay"></div>

        <nav class="site-nav">
            <div class="my-container">
                <a class="site-nav__logo page-scroll" href="#home">
                    <img src="./img/logo.png" alt="Young Researchers Alliance">
                </a>
                <div class="site-nav__menu">
                    <a href="#" class="join-link show-contact-form">Вступить<br> в YRA</a>

                    <ul class="lang-switcher">
                        <li class="lang-switcher__menu">
                            <span class="lang-switcher__current"><?php echo $_SESSION['lang']; ?></span>
                            <ul class="lang-switcher__submenu">
                                <li class="lang-switcher__item">
                                    <form   method="POST" id="lang">
                                       <input type="text" name="select_lang" value="ru"  style="display:none;">
                                       <input type="submit" id="lang_form" value="Русский">
                                    </form>
                                </li>
                                <li class="lang-switcher__item">
                                    <form  method="POST" id="lang2">
                                       <input type="text" name="select_lang" value="en"  style="display:none;">
                                       <input type="submit" id="lang_form" value="English">
                                    </form>
                                </li>
                                <li class="lang-switcher__item">
                                     <form  method="POST" id="lang3">
                                       <input type="text" name="select_lang" value="kz"  style="display:none;">
                                       <input type="submit" id="lang_form" value="Қазақша">
                                    </form>
                                    
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .site-nav__menu -->
                <button class="hamburger"><img alt="menu" src="./img/hamburger.svg"></button>
            </div><!-- .my-container -->
        </nav><!-- .site-nav -->
        <header class="site-header">
            <div class="my-container">
                <h1 class="home-h1">Young Researchers Alliance</h1>
                <div class="main-thesis">
                    Диалоговая площадка для взаимодействия между молодыми учеными в&nbsp;Казахстане и&nbsp;за&nbsp;рубежом в&nbsp;целях<br/>
                    содействия развитию научной активности и&nbsp;активизации их&nbsp;профессиональной деятельности
                </div>
            </div><!-- .my-container -->
        </header><!-- .site-header -->
        <div id="btn_communicate">
            <a class="comment-btn show-contact-form" href="#">
                <img class="comment-btn__image" src="./img/comment-btn.svg" alt="comment"></a>
        </div>
     
        <div class="screen screen-goals">
            <div class="my-container">
                <div class="screen__body">
                    <h2 id="about" class="screen-heading">Цели и миссия</h2>

                    <div class="screen-goals__wrap">
                        <ul class="goals-list">
                            <li class="goals-list__item">Диалоговая площадка для молодых ученых;</li>
                            <li class="goals-list__item">Обмен опытом для реализации потенциала ученых;</li>
                            <li class="goals-list__item">Продвижение молодых ученых в&nbsp;проведении <span class="nobr">научно-исследовательских</span>
                                работ;
                            </li>
                            <li class="goals-list__item">Нетворкинг&nbsp;&mdash; укрепление деловых связей;</li>
                            <li class="goals-list__item">Сбор и&nbsp;распространение информации о&nbsp;проведении
                                <span class="nobr">научно-исследовательских</span>
                                конкурсов, стажировок и<br/>
                                вакансий у&nbsp;работодателей;
                            </li>
                            <li class="goals-list__item">Обсуждение научных и&nbsp;социальных проблем молодых ученых;</li>
                            <li class="goals-list__item">Консультация и&nbsp;проведение научных проектов, в&nbsp;том числе
                                проектов, в&nbsp;которых принимают участие члены<br/>
                                Объединения;
                            </li>
                            <li class="goals-list__item">Организация и&nbsp;проведение тренингов, семинаров и&nbsp;конференций
                                в&nbsp;областях,
                                представляющих интерес для<br/>
                                членов Объединения с&nbsp;приглашением экспертов
                            </li>
                        </ul><!-- .goals-list -->
                        <div class="screen-goals-video">
                            <div class="screen-goals-video__wrap">
                               
                                <div class="video-play-button"></div>
                                <img class="video-cover" src="./img/video-cover.png" alt="video">
                                <iframe class="youtube-video" width="100%" height="100%"
                                        src="https://www.youtube.com/embed/GJKnLILllAE" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!-- .screen-goals__wrap -->
                </div><!-- .screen__body -->
            </div><!-- .my-container -->
        </div><!-- .screen-goals -->

        <div class="screen screen-news">
            <div class="my-container">
                <div class="screen__body">
                    <div class="inline_cont">
                    <div><h2 id="news" class="screen-heading">Новости</h2></div>
                    <div id="link_element"><a href="#"><span class="smi-item__more">Все новости <img class="smi-item__chevron"
                                                                                    src="./img/chevron-right-gray.svg"
                                                                                    alt=">"></span></a></div>
                    
                    </div>

                    <div class="news-slider-wrap">
                        <a href="#" class="slider-next news-slider-next"></a>
                        <a href="#" class="slider-prev news-slider-prev"></a>
                        <div class="news-slider swiper-container">
                            <div class="swiper-wrapper">
                                <?php 
                                    
                                   
                                     
                                    $news =  "SELECT * FROM `news` WHERE lang ='$language' ";
                                    $res_news =$con->query($news);
                                    while($news_element=$res_news->fetch_assoc()){
                                       echo ' <div class="news-item swiper-slide">
                                    <div class="news-image">
                                        <img class="news-image__default" src="'.$news_element['news_photo'].'" alt="img" >
                                        <img class="news-image__full" src="'.$news_element['news_photo'].'" >
                                    </div>
                                    
                                    <div class="news-body">
                                        <div class="news-item-date">'.$news_element['news_date'].'</div>
                                        <h1 class="news-item-heading">'.$news_element['news_header'].'</h1>
                                        <div class="news-item-content">
                                            <div class="news-item-content__default">
                                                <p>'.$news_element['news_anons'].'</p>
                                            </div>
                                            <div class="news-item-content__full">
                                                <p>'.$news_element['news_info'].'</p>
                                            </div>
                                        </div>
                                        <a href="#" class="button news-item-expand-button">Подробнее</a>
                                        <a href="#" class="button news-item-collapse-button">Скрыть</a>
                                    </div><!-- .news-body -->
                                </div><!-- .news-item -->';
                                      }

                                     ?>
                               
                               
                            </div><!-- .swiper-wrapper -->
                        </div><!-- .news-slider -->
                        <!-- <div class="swiper-pagination news-slider-pagination"></div> -->
                    </div><!-- .news-slider-wrap -->
                </div><!-- .screen__body -->
            </div><!-- .my-container -->
        </div><!-- .screen-news -->

        <div class="screen screen-team">
            <div class="my-container">
                <div class="screen__body">
                    <h2 id="team" class="screen-heading">Команда</h2>

                    <ul class="team-tabs">
                        <li class="team-tabs__item active"><a class="team-tabs__link" href="#">Совет YRA</a></li>
                        <li class="team-tabs__item"><a class="team-tabs__link" href="#">Консультативный совет</a></li>
                        <li class="team-tabs__item"><a class="team-tabs__link" href="#">Координаторы YRA</a></li>
                        <li class="team-tabs__item"><a class="team-tabs__link" href="#">Команда</a></li>
                        <li class="team-tabs__item"><a class="team-tabs__link" href="#">Учредители</a></li>
                    </ul>

                    <div class="team-tabs-content">
                        <div class="team-tabs-content__item active">
                            <div class="team-slider-wrap team-slider1-wrap">
                                <a href="#" id="command-next" class="slider-next team-slider1-next"></a>
                                <a href="#" id="command-prev" class="slider-prev team-slider1-prev"></a>
                                <div class="swiper-container team-slider1">
                                    <div class="swiper-wrapper">
                                        <div class="team-column swiper-slide">
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo1.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo2.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                        </div><!-- .team-column -->
                                        <div class="team-column swiper-slide">
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo3.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo4.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                        </div><!-- .team-column -->
                                        <div class="team-column swiper-slide">
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo5.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo6.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                        </div><!-- .team-column -->
                                        <div class="team-column swiper-slide">
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo7.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo8.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                        </div><!-- .team-column -->
                                        <div class="team-column swiper-slide">
                                            <div class="team-column__item has-extended-info">
                                                <img class="team-column__photo" src="./img/photo1.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                                <div class="team-column-extended-info">
                                                    <div class="team-column-extended-info__name">Бейбит Абдикенов</div>
                                                    <div class="team-column-extended-info__position">Вице-председатель</div>
                                                    <div class="team-column-extended-info__email">example@gmail.com</div>
                                                    <div class="team-column-extended-info__text">Cursus platea viverra purus
                                                        platea. Imperdiet sapien cursus arcu, ante diam enim amet. Aliquam,
                                                        est nulla sed placerat ultricies augue ipsum augue a. Pretium massa
                                                        hac sed tristique placerat. Porttitor lectus sapien sit egestas amet
                                                        viverra quis quam sed.
                                                    </div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                        </div><!-- .team-column -->
                                    </div><!-- swiper-wrapper -->
                                </div><!-- .team-slider1 -->
                                <div class="swiper-pagination team-slider1-pagination"></div>
                            </div><!-- .team-slider1-wrap -->
                        </div><!-- team-tabs-content__item -->
                        <div class="team-tabs-content__item">

                        </div>
                        <div class="team-tabs-content__item">
                            <div class="team-slider-wrap team-slider2-wrap">
                                <a href="#" class="slider-next team-slider2-next"></a>
                                <a href="#" class="slider-prev team-slider2-prev"></a>
                                <div class="swiper-container team-slider2">
                                    <div class="swiper-wrapper">
                                        <div class="team-column swiper-slide">
                                            <div class="team-column__item">
                                                <img class="team-column__photo" src="./img/photo1.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                        </div><!-- .team-column -->
                                        <div class="team-column swiper-slide">
                                            <div class="team-column__item">
                                                <img class="team-column__photo" src="./img/photo3.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                        </div><!-- .team-column -->
                                        <div class="team-column swiper-slide">
                                            <div class="team-column__item">
                                                <img class="team-column__photo" src="./img/photo5.png" alt="photo">
                                                <div class="team-column-default-info">
                                                    <div class="team-column-default-info__name">Фамилия и имя</div>
                                                    <div class="team-column-default-info__position">Должность</div>
                                                </div>
                                            </div><!-- .team-column__item -->
                                        </div><!-- .team-column -->
                                    </div><!-- swiper-wrapper -->
                                </div><!-- .team-slider2 -->
                                <div class="swiper-pagination team-slider2-pagination"></div>
                            </div><!-- .team-slider2-wrap -->
                        </div><!-- .team-tabs-content__item -->
                        <div class="team-tabs-content__item">

                        </div><!-- .team-tabs-content__item -->
                        <div class="team-tabs-content__item">

                        </div><!-- .team-tabs-content__item -->
                    </div><!-- .team-tabs-content -->
                </div><!-- .screen__body -->
            </div><!-- .my-container -->
        </div><!-- .screen-team -->

        <div class="screen screen-projects">
            <div class="my-container">
                <div class="screen__body">
                     <h2 id="projects" class="screen-heading">Проекты</h2>
                </div>
                    <div class="projects-slider-wrap">
                        <div class="project-slider swiper-container">
                            <div class="swiper-wrapper">
                                 <?php 
                                                                         
                                    $projects =  "SELECT * FROM `projects` WHERE lang ='$language' ";
                                    $res_projects =$con->query($projects);
                                    while($projects_element=$res_projects->fetch_assoc()){
                                        echo '<a href="#" class="project-item swiper-slide">
                                    <img class="project-item__image" src="'.$projects_element['project_photo'].'" alt="img" >
                                    <div class="project-item__description">
                                       '.$projects_element['project_info'].'
                                    </div>
                                </a><!-- .project-item -->';
                                    }
                                        ?>
                               
                            </div><!-- .swiper-wrapper -->
                        </div><!-- .project-slider -->
                        <div class="swiper-pagination project-slider-pagination"></div>
                    </div><!-- .projects-slider-wrap -->
                </div><!-- .screen__body -->
            </div><!-- .my-container -->
        </div><!-- .screen-projects -->

        <div class="screen screen-smi">
            <div class="my-container">
                <div class="screen__body">
                    <div class="inline_cont">
                    <h2 id="smi" class="screen-heading">СМИ</h2>
                    <div id="link_element"><a href="#"><span class="smi-item__more">Все информации <img class="smi-item__chevron" src="./img/chevron-right-gray.svg" alt=">"></span></a></div></div>
                    <div class="smi-slider-wrap">
                        <a href="#" id="smi-next" class="slider-next smi-slider-next"></a>
                        <a href="#" id="smi-prev" class="slider-prev smi-slider-prev"></a>
                        <div class="smi-slider swiper-container">
                            <div class="swiper-wrapper">
                            
                                  <?php 
                                                                         
                                    $smi =  "SELECT * FROM `smi` WHERE lang ='$language' ";
                                    $res_smi =$con->query($smi);
                                    while($smi_element=$res_smi->fetch_assoc()){
                                        echo '   <div class="smi-item swiper-slide">
                                    <a class="smi-item__link" href="#">
                                        <img class="smi-item__image" src="'.$smi_element['smi_photo'].'" alt="img">
                                        <span class="smi-item__more">Подробнее
                                         <img class="smi-item__chevron"  src="./img/chevron-right.svg" alt=">"></span>
                                    </a>
                                </div><!-- .smi-item -->';
                                    }
                                        ?>
                               
                               
                                <div class="smi-item swiper-slide">
                                    <a class="smi-item__link" href="#">
                                        <img class="smi-item__image" src="./img/smi.png" alt="img">
                                        <span class="smi-item__more">Подробнее <img class="smi-item__chevron"
                                                                                    src="./img/chevron-right.svg"
                                                                                    alt=">"></span>
                                    </a>
                                </div><!-- .smi-item -->
                            </div><!-- .swiper-wrapper -->
                        </div><!-- .smi-slider -->
                        <div class="swiper-pagination smi-slider-pagination"></div>
                    </div><!-- .smi-slider-wrap -->
                </div><!-- .screen__body -->
            </div><!-- .my-container -->
        </div><!-- .screen-smi -->

        <div class="screen screen-partners">
            <div class="my-container">
                <div class="screen__body">
                    <h2 id="partners" class="screen-heading">Партнеры</h2>
                    <div class="partners-slider-wrap">
                        <a href="#" id="partners-next" class="slider-next partners-slider-next"></a>
                        <a href="#" id="partners-prev" class="slider-prev partners-slider-prev"></a>
                        <div class="partners-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="partners-item swiper-slide">
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner1.png" alt="img">
                                    </a>
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner2.png" alt="img">
                                    </a>
                                </div><!-- .partner-item -->
                                <div class="partners-item swiper-slide">
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner3.png" alt="img">
                                    </a>
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner4.png" alt="img">
                                    </a>
                                </div><!-- .partner-item -->
                                <div class="partners-item swiper-slide">
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner5.png" alt="img">
                                    </a>
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner6.png" alt="img">
                                    </a>
                                </div><!-- .partner-item -->
                                <div class="partners-item swiper-slide">
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner7.png" alt="img">
                                    </a>
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner8.png" alt="img">
                                    </a>
                                </div><!-- .partner-item -->
                                <div class="partners-item swiper-slide">
                                    <a class="partners-item__link" href="#">
                                        <img class="partners-item__image" src="./img/banner1.png" alt="img">
                                    </a>
                                </div><!-- .partner-item -->
                            </div><!-- .swiper-wrapper -->
                        </div><!-- .partner-slider -->
                        <!-- <div class="swiper-pagination partners-slider-pagination"></div> -->
                    </div><!-- .partner-slider-wrap -->
                </div><!-- .screen__body -->
            </div><!-- .my-container -->
        </div><!-- .screen-partner -->

        <div class="screen screen-faq">
            <div class="my-container">
                <div class="screen__body">
                    <h2 id="faq" class="screen-heading">Частые вопросы</h2>

                    <div class="faq-row">
                        <div class="faq-col">
                            <div class="faq-item">
                                <a href="#" class="faq-item__q">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </a>
                                <div class="faq-item__a">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare. Blandit
                                    interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </div>
                            </div>
                            <div class="faq-item">
                                <a href="#" class="faq-item__q">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </a>
                                <div class="faq-item__a">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare. Blandit
                                    interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </div>
                            </div>
                            <div class="faq-item">
                                <a href="#" class="faq-item__q">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </a>
                                <div class="faq-item__a">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare. Blandit
                                    interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </div>
                            </div>
                            <div class="faq-item">
                                <a href="#" class="faq-item__q">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </a>
                                <div class="faq-item__a">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare. Blandit
                                    interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </div>
                            </div>
                        </div>
                        <div class="faq-col">
                            <div class="faq-item">
                                <a href="#" class="faq-item__q">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </a>
                                <div class="faq-item__a">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare. Blandit
                                    interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </div>
                            </div>
                            <div class="faq-item">
                                <a href="#" class="faq-item__q">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </a>
                                <div class="faq-item__a">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare. Blandit
                                    interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </div>
                            </div>
                            <div class="faq-item">
                                <a href="#" class="faq-item__q">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </a>
                                <div class="faq-item__a">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare. Blandit
                                    interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </div>
                            </div>
                            <div class="faq-item">
                                <a href="#" class="faq-item__q">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </a>
                                <div class="faq-item__a">
                                    Blandit interdum vulputate magna venenatis leo maecenas sed mauris ornare. Blandit
                                    interdum vulputate magna venenatis leo maecenas sed mauris ornare?
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .screen__body -->
            </div><!-- .my-container -->
        </div><!-- .screen-partner -->
    </div><!-- .wrap -->
    <footer class="footer">
        <div class="my-container">
            <div class="footer-row">
                <a class="footer-logo footer-col page-scroll" href="#home">
                    <img class="footer-logo__image"
                         src="./img/logo2.png"
                         alt="Young Researchers Alliance">
                </a>
            
                <div class="footer-contacts footer-col">
                    <h3 class="footer-heading">Контакты</h3>
                    <ul class="footer-contacts">
                        
                        <li class="footer-contacts__item">
                            <a class="footer-contacts__link" href="mailto:mail@example.com">
                                <img class="footer-contacts__icon" src="./img/icon-mail.svg">
                                mail@example.com
                            </a>
                        </li>
                    </ul>
                </div><!-- .footer-contacts -->
                <div class="footer-socials footer-col">
                    <h3 class="footer-heading">Мы в соц. сетях</h3>

                    <ul class="socials-menu">
                        <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                                src="./img/icon-telegram.svg" alt="telegram"></a></li>
                        <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                                src="./img/icon-facebook.svg" alt="facebook"></a></li>
                        <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                                src="./img/icon-instagram.svg" alt="instagram"></a></li>
                        <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                                src="./img/icon-linkedin.svg" alt="linkedin"></a></li>
                        <li class="socials-menu__item"><a class="socials-menu__link" target="_blank" href="#"><img
                                src="./img/icon-youtube.svg" alt="youtube"></a></li>
                    </ul>

                    <div class="subscribe-wrap">
                       
                        <div class="subscribe-form-wrap">
                            <form class="subscribe-form">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input required type="email" class="form-control" placeholder="E-mail">
                                    </div>
                                    <input required type="text" class="form-control" placeholder="Имя">
                                </div>
                                <div class="form-group">
                                    <input required type="text" class="form-control" placeholder="Фамилия">
                                </div>
                                <div class="form-group">
                                    <button class="button button--block button--dark">Подписаться</button>
                                </div>
                            </form>
                            <img src="./img/triangle.svg" class="triangle-with-shadow">
                        </div>
                    </div>

                </div><!-- .footer-socials -->
                 <div class="footer-contacts footer-col" id="subscribe_space">
                   
                    <a href="#" class="subscribe__link">
                            Подписаться на рассылку
                        </a>
                        


                </div>

            </div>
        </div><!-- .my-container -->
    </footer><!-- .footer -->
    <div class="contact-form">
        <div class="contact-form__overlay"></div>
        <div class="contact-form__body">
            <form method="post" class="contact-form__form">
                <a href="#" class="contact-form-close"></a>
                <h2 class="contact-form__heading">Связаться с нами</h2>

                <div class="form-group col-md-12 d-flex flex-row ">
                <div class="form-group col-md-6">
                    <input required type="text" class="form-control" placeholder="Имя">
                </div>
                <div class="form-group  col-md-6">
                    <input required type="text" class="form-control" placeholder="Фамилия">
                </div>
            </div>
                <div class="form-group">
                    <input required type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <input required type="text" class="form-control phone-input" placeholder="Телефон">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="Комментарий" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <button class="button button--block button--dark">Отправить</button>
                </div>
            </form>
        </div><!-- .contact-form__body -->
    </div><!-- .contact-form -->
    <a href="#home" class="page-scroll totop"></a>
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="./assets/swiper/swiper-bundle.min.js"></script>
    <script src="./bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>
    <script src="./js/app.js"></script>
    <!-- <script src="./js/scripts.js"></script> -->

    </body>
    </html>
