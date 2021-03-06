$(function () {
    // Скрипты для переключателя языка

    // Разрешить откртие списка языков по наведению
    var enableHover = true;

    $('.lang-switcher__menu').on({
        'mouseover': function () {
            if (!enableHover) return;
            $(this).addClass('hover');
        },

        'mouseout': function () {
            if (!enableHover) return;
            $(this).removeClass('hover');
        },

        'click': function () {
            $(this).addClass('hover');
        }
    });

    $(document).on('mouseup', function (e) {
        var container = $('.lang-switcher__menu');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.removeClass('hover');
        }
    });
});

$(function () {
    // Скрипты навигации

    var toggleNavState = function () {
        $('.site-nav').toggleClass('active', $(window).scrollTop() > 0);
    };

    $(window).on('scroll', toggleNavState);
    toggleNavState();
});

$(function () {
    // Скрипты для видео

    var wrap = $('.screen-goals-video__wrap');

    var adjustVideoSize = function () {
        var rt = $(window).width() - wrap.offset().left;
        if (wrap.css('position') == 'static') {
            rt = rt - 15;
        }
        wrap.css({
            'height': '0',
            'width': '0'
        });
        wrap.css({
            'height': '100%',
            'width': rt + 'px'
        });
    };

    adjustVideoSize();
    $(window).on('resize', adjustVideoSize);
    wrap.on('resize', adjustVideoSize);

    $('.video-play-button').on('click', function () {
        $(this).hide();
        $('.youtube-video')[0].src += "?autoplay=1";
        $('.youtube-video').fadeIn();
    });
});

$(function () {
    // Скрипты для меню
    var toggleMenu = function (e) {
        e.preventDefault();
        $('.mobile-nav-overlay').fadeToggle();
        $('.mobile-nav').toggleClass('active');
    };

    $('.hamburger').on('click', toggleMenu);
    $('.mobile-nav-overlay').on('click', toggleMenu);
    $('.mobile-nav__close').on('click', toggleMenu);

    $('.mobile-menu__link').click(function () {
        $('.mobile-nav__close').trigger('click');
    });
});

$(function () {
    // Скрипты для новостей

    // https://swiperjs.com/swiper-api
    var swiper = new Swiper('.news-slider', {
        autoHeight: true,
        calculateHeight: true,
        speed: 500,
        spaceBetween: 10,
        pagination: {
            el: '.news-slider-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.news-slider-next',
            prevEl: '.news-slider-prev',
        },
    });

    var scroll = function(el) {
        $("html, body").animate({scrollTop: el.offset().top - 100}, 500);
    };

    $('.news-item-expand-button').on('click', function (e) {
        e.preventDefault();
        var item = $(this).closest('.news-item');
        item.addClass('extended').hide().fadeIn();
        swiper.update();

        scroll($(item).find('.news-image'));
    });

    $('.news-item-collapse-button').on('click', function (e) {
        e.preventDefault();
        var item = $(this).closest('.news-item');
        item.removeClass('extended').hide().fadeIn();
        swiper.update();
        scroll($(item).find('.news-image'));
    });
});

$(function () {
    // Скрипты для блока "Команды"

    var swiper = new Swiper('.team-slider1', {
        autoHeight: true,
        calculateHeight: true,
        speed: 500,
        spaceBetween: 10,
        slidesPerView: 2,
        navigation: {
            nextEl: '.team-slider1-next',
            prevEl: '.team-slider1-prev',
        },
        pagination: {
            el: '.team-slider1-pagination',
            clickable: true
        },
        breakpoints: {
            1201: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            600: {
                slidesPerView: 3,
                spaceBetween: 40
            },
        }
    });

    var swiper2 = new Swiper('.team-slider2', {
        autoHeight: true,
        calculateHeight: true,
        speed: 500,
        spaceBetween: 10,
        slidesPerView: 2,
        navigation: {
            nextEl: '.team-slider2-next',
            prevEl: '.team-slider2-prev',
        },
        pagination: {
            el: '.team-slider2-pagination',
            clickable: true
        },
        breakpoints: {
            1201: {
                slidesPerView: 3,
                spaceBetween: 40
            },
        }
    });

    // Вкладки
    $('.team-tabs__link').click(function (e) {
        e.preventDefault();
        var idx = $(this).parent().index();

        $('.team-tabs__link').each(function () {
            $(this).parent().removeClass('active');
        });

        $('.team-tabs-content__item').each(function () {
            $(this).removeClass('active');
        });

        $(this).parent().addClass('active');
        var content = $('.team-tabs-content__item').eq(idx);
        content.addClass('active');

        swiper.update();
        swiper2.update();
        $("html, body").animate({scrollTop: $(this).offset().top - 70}, 500);
    });
});

$(function () {
    // Скрипты для проектов

    var swiper = new Swiper('.project-slider', {
        autoHeight: true,
        calculateHeight: true,
        speed: 500,
        spaceBetween: 20,
        slidesPerView: 1,
        navigation: {
            nextEl: '.project-slider-next',
            prevEl: '.project-slider-prev',
        },
        pagination: {
            el: '.project-slider-pagination',
            clickable: true
        },
        breakpoints: {
            600: {
                spaceBetween: 30,
                slidesPerView: 3
            },
            1201: {
                spaceBetween: 30,
                slidesPerView: 4
            },
        }
    });
});

$(function () {
    // Скрипты для СМИ

    var swiper = new Swiper('.smi-slider', {
        autoHeight: true,
        calculateHeight: true,
        speed: 500,
        spaceBetween: 30,
        slidesPerView: 1,
        navigation: {
            nextEl: '.smi-slider-next',
            prevEl: '.smi-slider-prev',
        },
        pagination: {
            el: '.smi-slider-pagination',
            clickable: true
        },
        breakpoints: {
            600: {
                spaceBetween: 40,
                slidesPerView: 3
            },
        }
    });
});

$(function () {
    // Скрипты для партнеров

    var swiper = new Swiper('.partners-slider', {
        autoHeight: true,
        calculateHeight: true,
        speed: 500,
        spaceBetween: 30,
        slidesPerView: 2,
        navigation: {
            nextEl: '.partners-slider-next',
            prevEl: '.partners-slider-prev',
        },
        pagination: {
            el: '.partners-slider-pagination',
            clickable: true
        },
        breakpoints: {
            600: {
                spaceBetween: 40,
                slidesPerView: 4
            },
        }
    });
});

$(function () {
    // Скрипты для вопросов

    $('.faq-item__q').click(function (e) {
        e.preventDefault();

        var parent = $(this).parent();

        if(parent.hasClass('active')) {
            parent.removeClass('active');
            parent.find('.faq-item__a').stop(true, false).slideUp(300);
        } else {
            $('.faq-item').each(function () {
                if($(this) != parent) {
                    $(this).removeClass('active');
                    $(this).find('.faq-item__a').stop(true, false).slideUp(300);
                }
            });

            parent.toggleClass('active');
            parent.find('.faq-item__a').stop(true, false).slideToggle(300, function () {
                $("html, body").animate({scrollTop: parent.offset().top - 80}, 500);
            });
        }

        return false;
    });
});

$(function () {
    // Для скролинга

    $('.page-scroll').click(function (e) {
        e.preventDefault();
        var id = $(this).attr('href');
        $("html, body").stop(true, false).animate({scrollTop: $(id).offset().top}, 500);
        // history.pushState({}, $(this).text(), id);
    });
});

$(function () {
    // Контактная форма

    $('.show-contact-form').click(function (e) {
        e.preventDefault();

        var form = $('.contact-form');
        form.addClass('active');

        $('.contact-form__overlay, .contact-form-close').click(function (e) {
            e.preventDefault();
            form.removeClass('active');
        });
    });

    $(".phone-input").mask("+7 (999) 999-99-99");
});

$(function () {
    // Форма подписки

    var wrap = $('.subscribe-form-wrap');

    $('.subscribe__link').click(function (e) {
        e.preventDefault();

        wrap.addClass('active');
    });

    $(document).on('mouseup', function (e) {
        if (!wrap.is(e.target) && wrap.has(e.target).length === 0) {
            wrap.removeClass('active');
        }
    });
});

$(function () {
    // Кнопка наверх

    var check = function() {
        if ($(this).scrollTop() > 0) {
            $('.totop').stop(true, false).fadeIn(200);
        } else {
            $('.totop').stop(true, false).fadeOut(200);
        }
    };

    $(window).scroll(check);
    check();
});

