/*jslint browser:true */
/*global Swiper */
(function ($) {
    'use strict';

    function vossenSliders() {

        $('.voss-slider').each(function () {
            var vossSlider = $(this),
                dataStyle = vossSlider.data('style'),
                dataColumns = vossSlider.data('columns'),
                dataColumnsMd = vossSlider.data('columns-md'),
                dataAutoplay = vossSlider.data('autoplay'),
                dataDelay = vossSlider.data('delay'),
                dataLoop = vossSlider.data('loop'),
                dataCentered = vossSlider.data('centered'),
                dataDynamicBullets = vossSlider.data('dynamic-bullets'),
                dataSpaceBetween = vossSlider.data('spacebetween'),
                dataParallax = vossSlider.data('parallax'),
                excerptHeight,
                vossSwiper = new Swiper(vossSlider, {
                    autoplay: {
                        enabled: dataAutoplay,
                        delay: dataDelay
                    },
                    loop: dataLoop,
                    loopedSlides:2,
                    loopAdditionalSlides: 10,
                    centeredSlides: dataCentered,
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true,
                        dynamicBullets: dataDynamicBullets,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + '"><div><span>' + index + '</span></div></span>';
                        }
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    },
                    grabCursor: true,
                    roundLengths: true,
                    parallax: dataParallax,
                    speed: 500,
                    slidesPerView: dataColumns,
                    spaceBetween: dataSpaceBetween,
                    breakpoints: {
                        500: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        992: {
                            slidesPerView: dataColumnsMd,
                            spaceBetween: dataSpaceBetween
                        },
                        2000: {
                            slidesPerView: dataColumns,
                            spaceBetween: dataSpaceBetween
                        }

                    },
                    observer: true,
                    observeParents: true,
                    on: {
                        init: function () {
                            vossSlider.addClass('swiper-initialized')
                        },
                    },
                });

            if ((dataStyle === 3 || dataStyle === 4) && dataColumns !== 5 && dataColumns !== 6) {
                excerptHeight = $(this).find('.vs-excerpt').outerHeight() + 12;
                $(this).find('.vs-bottom-content').css({
                    '-webkit-transform' : 'translate(0,' + excerptHeight + 'px)',
                    'transform'         : 'translate(0,' + excerptHeight + 'px)'
                });
            }
        });
    }

    function vossenDataImageSrc() {
        $('div[data-img],figure[data-img]').each(function () {
            var attr = $(this).attr('data-img');
            $(this).css('background-image', 'url(' + attr + ')');
        });
    }

    function vossenNav() {

        var header = $('.header'),
            menu = $('.header .nav-menu'),
            list,
            listCount,
            listSplit,
            logo = $('.header .logo-menu-item'),
            rect,
            left,
            lastScrollTop,
            scrollTop,
            vossSticky,
            stickyStandard,
            stickySmart,
            headerFixed;

        // Header v1 - Split Menu
        if ($('.header').length) {
            if ($('body').hasClass('header-layout-v1')) {
                menu.each(function () {
                    // Move the logo to the middle of menu
                    list = $(this).children('li');
                    listCount = list.length / 2 - 1;
                    listSplit = list.eq(Math.floor(listCount));
                    logo = header.find('.logo-menu-item:first');
                    //logo.insertAfter(listSplit);
                });
                // Center the menu
                rect = logo[0].getBoundingClientRect();
                left = ($(window).width() / 2) - (rect.left + (rect.width / 2));
                menu.css({'left': left + 'px'});
                // Display header
                header.css({'opacity': '1'});
            }
        }

        // Side Menu
        $('.open-side-menu').on('click', function () {
            $('body').addClass('side-menu-opened');
            $(document).mouseup(function (e) {
                var container = $('#side-menu');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $('body').removeClass('side-menu-opened');
                    $('#side-menu .nav-menu li').removeClass('open');
                    $('#side-menu .nav-menu li a').removeClass('open');
                    $("#side-menu .nav-menu li ul").slideUp('400', 'easeInOutExpo');
                }
            });
        });

        $('.close-side-menu').on('click', function () {
            $('body').removeClass('side-menu-opened');
        });

        // Header Dropdown
        function openDropdown(element) {
            if (!element.hasClass("open")) {
                var currentLevel = element.closest('ul');
                $("li ul", currentLevel).slideUp('400', 'easeInOutExpo');
                $("li a", currentLevel).removeClass("open");
                $("li", currentLevel).removeClass("open");
                element.next("ul").slideDown('400', 'easeInOutExpo');
                element.addClass("open").parent('li').addClass("open");
            } else {
                element.removeClass("open").parent('li').removeClass("open");
                element.next("ul").slideUp('400', 'easeInOutExpo');
            }
        }
        var sideMenuLink = '#side-menu .nav-menu li a, .widget_nav_menu li a',
            sideMenuArrow = '#side-menu .nav-menu li a svg, .widget_nav_menu li a svg';
        $(sideMenuLink).on('click', function(e) {
            if ($(this).attr('href') == '#') {
                e.preventDefault();
                openDropdown($(this));
            }
        });
        $(sideMenuArrow).on("click", function(e) {
            if ($(this).parent().attr('href') == '#') {
                return;
            }
            e.preventDefault();
            openDropdown($(this).parent());
        });

        ///////////////////////////////////////
        $('.scroll-top').on('click', function () {
            $('html, body').stop().animate({ scrollTop: 0 }, 1000, 'easeInOutExpo');
            return false;
        });

        // Header Sticky
        if ($('body').hasClass('header-sticky-fixed')) {
            $('header.header').addClass('fixed-header');

            var headerHeight = $('.fixed-header').outerHeight(),
                adminBar = $('#wpadminbar').outerHeight(),
                topBar = $('#main .topbar').outerHeight(),
                fixedHeader = $('.fixed-header');
            if ($('body').hasClass('header-bg-light')) {
                $('body').css({ 'padding-top': headerHeight });
            }
            fixedHeader.css({ 'top': adminBar });
            if ($('#main div').hasClass('topbar')) {
                fixedHeader.css({ 'margin-top': topBar });
            }
            $(window).scroll(function () {
                if ($(this).scrollTop() > 20) {
                    fixedHeader.addClass('sticky-header').css({ 'margin-top': 0 });
                } else {
                    fixedHeader.removeClass('sticky-header');
                    if ($('#main div').hasClass('topbar')) {
                        fixedHeader.css({ 'margin-top': topBar });
                    }
                }
            });
        } else {
            lastScrollTop = 0;
            $(window).scroll(function () {
                scrollTop = $(this).scrollTop();
                vossSticky = 'voss-sticky';
                stickyStandard = $('.header-sticky-standard .sticky-header');
                stickySmart = $('.header-sticky-smart .sticky-header');
                if (scrollTop > 600) {
                    $(stickyStandard).addClass(vossSticky);
                    if (scrollTop > lastScrollTop ) {
                        $(stickySmart).removeClass(vossSticky);
                    } else {
                        $(stickySmart).addClass(vossSticky);
                    }
                } else {
                    $(stickyStandard, stickySmart).removeClass(vossSticky);
                }
                if ( scrollTop < 500 ) {
    				$(stickySmart).removeClass(vossSticky);
    			}
                lastScrollTop = scrollTop;
            });
        }

        // Header Cart / Search display
        if (!$('.menu-icons').children('.header-cart').length) {
            $('.menu-icons .search-modal').addClass('visible');
        }

    }

    function vossenPageHeader() {
        if ($('body').hasClass('page-header-style-fullscreen')) {
            var headerHeight = $('.header').outerHeight();
            $('.page-header').animate({
                'margin-top': -headerHeight
            }, 400, 'easeInOutExpo');
        }
    }

    function vossenSingleLightbox() {

        $('.single-post.lightbox-enable .post-entry-content img').each(function () {
            var singleImgsParent = $(this).parent('a');
            if (singleImgsParent.length) {
                if (/\.(?:jpg|jpeg|gif|png)$/i.test(singleImgsParent.attr('href'))) {
                    $(this).parent().addClass('single-lightbox-src');
                    $(this).parent('a').append(
                        '<span class="img-lightbox-overlay"><i class="fa fa-search"></i></span>'
                    );
                }
            }
        });

        $('.single-lightbox,.single-lightbox-src').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><i class="ion-ios-arrow-right"></i></button>'
            },
            closeMarkup: '<button title="%title%" type="button" class="mfp-close ion-android-close"></button>',
            mainClass: 'mfp-zoom-out',
            removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                }
            },
            midClick: true,
            image: {
                titleSrc: function (item) {
                    var title = item.el.attr('title');
                    if (!title) title = item.el.find('img').attr('title');
                    if (!title) title = item.el.parent().next('.wp-caption-text').html();
                    if (!title) title = item.el.find('img').attr('alt');
                    if (typeof title == "undefined") return "";
                    return title;
                },
                cursor: 'null',
                verticalFit: true,
                tError: '<a href="%url%">The image</a> could not be loaded.' // Error message
            }
        });
    }

    function vossenLightbox() {

        // Inline popups
        $('.search-modal').magnificPopup({
            type:'inline',
            removalDelay: 500,
            closeBtnInside: false,
            callbacks: {
                beforeOpen: function() {
                    $('body').addClass('search-overlay-opened');
                    this.st.mainClass = this.st.el.attr('data-effect');
                },
                beforeClose: function() {
                    $('body').removeClass('search-overlay-opened');
                },
                open: function() {
                    setTimeout(function() {
                        $('#search-popup .vossen-search-input').focus();
                    }, 400);

                }
            },
            midClick: true,
            closeMarkup: '<svg viewBox="0 0 20 20"><use xlink:href="#close-delete-small"></use></svg>'
        });

        $('.vossen-lightbox').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><i class="ion-ios-arrow-right"></i></button>'
            },
            mainClass: 'mfp-zoom-in',
            removalDelay: 500,
            callbacks: {
                beforeOpen: function () {
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                }
            },
            midClick: true,
            closeMarkup: '<button title="%title%" type="button" class="mfp-close ion-android-close"></button>',
            image: {
                cursor: 'null',
                titleSrc: function(item){
                    var title = item.el.attr('title');
                    if(!title) title = item.el.find('img').attr('title');
                    if(!title) title = item.el.parent().next('.wp-caption-text').html();
                    if(!title) title = item.el.find('img').attr('alt');
                    if(typeof title == "undefined") return "";
                    return title;
                },
                verticalFit: true,
                tError: '<a href="%url%">The image</a> could not be loaded.' // Error message
            }
        });
        $('.popup-video, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            midClick: true,
            fixedContentPos: false,
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                        '<button title="%title%" type="button" class="mfp-close ion-android-close"></button>' +
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                      '</div>',
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: 'https://player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: 'https://maps.google.',
                        src: '%id%&output=embed'
                    }
                },
                srcAction: 'iframe_src'
            },
            closeMarkup: '<button title="%title%" type="button" class="mfp-close ion-android-close"></button>'
        });

    }

    function vossenVideoPlay() {
        $('.post-video .thumb-holder').on("click", function(ev){
            var videoThumb = $(this),
                postVideo = $(this).closest('.post-video'),
                iframe = postVideo.find('iframe');

            videoThumb.animate({
                'opacity': 0
            }, 500, function() {
                $(this).css({'display': 'none'});
            });

            iframe[0].src += "?autoplay=1&autoplay=true";
            ev.preventDefault();
        });
    }

    function vossenScrollAnchor() {
        $('.post-meta a[href="#"]').on('click', function(event){
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top -200
            }, 700, 'easeInOutExpo');
            event.preventDefault();
        });
    }

    function vossenWooPrice() {
        $('.product').each( function() {
            var addToCart = $(this).find('.ajax_add_to_cart'),
                price = $(this).find('.price');
            addToCart.on('click', function() {
                price.animate({
                    opacity: 0
                }, 300);
            });
        });
    }

    function vossenWooLightbox() {
        if ($(window).width() < 992) {
            $('.vossen-lightbox a').on('click', function () {
                return false;
            });
        }
    }

    function vossenWooTabs() {
        $('.woocommerce-tabs .panel:first-child').addClass('active');
        $('.woocommerce-tabs ul.tabs li a').off('click').on('click', function () {
            var tabLink = $(this),
                activeTab = $(this).attr('href');
            tabLink.parent().siblings().removeClass('active').end().addClass('active');
            $('.woocommerce-tabs').find(activeTab).siblings('.panel').filter(':visible').fadeOut(400, function () {
                $('.woocommerce-tabs').find(activeTab).siblings('.panel').removeClass('active');
                $('.woocommerce-tabs').find(activeTab).addClass('active').fadeIn(400);
            });
            return false;
        });
    }

    function vossenWooLoginRegister() {

        var account_tab_list = $('.account-tab-list');
        account_tab_list.on('click','.account-tab-link',function(){

            if ( $('.account-tab-link').hasClass('registration_disabled') ) {
                return false;
            } else {

                var that = $(this),
                    target = that.attr('href');

                that.parent().siblings().find('.account-tab-link').removeClass('current');
                that.addClass('current');

                $('.account-forms').find($(target)).siblings().stop().fadeOut(function(){
                    $('.account-forms').find($(target)).fadeIn();
                });

                return false;
            }
        });
    }

    function vossenWooQuantity() {
        $('.quantity').on('click', '.plus-btn', function(e) {
            $input = $(this).prev('input.qty');
            var val = parseInt($input.val());
            var step = $input.attr('step');
            step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
            $input.val( val + step ).change();
        });
        $('.quantity').on('click', '.minus-btn', function() {
            $input = $(this).next('input.qty');
            var val = parseInt($input.val());
            var step = $input.attr('step');
            step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
            if (val > 1) {
                $input.val( val - step ).change();
            }
        });
    }

    function vossenSocialPopUp() {
        $('.share-link').on('click', function() {
            var url = $(this).attr('data-href'),
                width = $(this).attr('data-width'),
                height = $(this).attr('data-height'),
                leftPosition = (window.screen.width / 2) - ((width / 2) + 10),
                topPosition = (window.screen.height / 2) - ((height / 2) + 50);

            window.open(url, "Window2","status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no");
        });
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            if ($(window).width() < 992) {
                $('.share-whatsapp').css({"display":"inline-block"});
            } else {
                $('.share-whatsapp').css({"display":"block"});
            }
        }
    }

    function vossenMasonry() {

        $('.voss-ajax-load > div:first').infiniteScroll({
            path: '.voss-load-btn',
            append: 'article',
            button: '.voss-load-btn',
            scrollThreshold: false,
            status: '.page-load-status',
        });

        $('.voss-ajax-infinite > div:first').infiniteScroll({
            path: '.voss-load-btn',
            append: 'article',
            status: '.page-load-status',
            button: '.voss-load-btn',
            scrollThreshold: 100,
            prefill: false,
            checkLastPage: true,
            history: false,
        });

        var $container = $('.voss-ajax-load > div,.voss-ajax-infinite > div');
        $container.on( 'append.infiniteScroll', function( event, response, path, items ) {
            vossenDataImageSrc();
            if(items.length == 0 ) {
                $('.infinite-scroll-request').remove();
                $('.voss-load-btn').remove();
                $('.page-load-status').show();
                $('.infinite-scroll-last').show();
                $container.infiniteScroll('destroy');
            }
        });

    }

    function vossenAjaxify() {
        if ( $('.voss-ajax-numeric').length || $('.voss-ajax-links').length ) {
            (function(window,undefined){

                // Prepare our Variables
                var History = window.History,
                    $ = window.jQuery,
                    document = window.document;

                // Check to see if History.js is enabled for our Browser
                if ( !History.enabled || $('.vc_editor').length) {
                    return false;
                }

                // Wait for Document
                $(function(){
                    // Prepare Variables
                    var contentSelector = '.voss-posts',
                        $content = $(contentSelector).filter(':first'),
                        contentNode = $content.get(0),
                        $menu = $('.voss-ajax-pagination nav').filter(':first'),
                        activeClass = 'current',
                        activeSelector = '.voss-ajax-pagination nav .current',
                        menuChildrenSelector = ' > a',
                        completedEventName = 'statechangecomplete',
                         // Application Generic Variables
                        $window = $(window),
                        $body = $(document.body),
                        rootUrl = History.getRootUrl();

                    // Ensure Content
                    if ( $content.length === 0 ) {
                        $content = $body;
                    }

                    // Internal Helper
                    $.expr[':'].internal = function(obj, index, meta, stack){
                        // Prepare
                        var $this = $(obj),
                            url = $this.attr('href')||'',
                            isInternalLink;

                        // Check link
                        isInternalLink = url.substring(0,rootUrl.length) === rootUrl || url.indexOf(':') === -1;

                        // Ignore or Keep
                        return isInternalLink;
                    };

                    // HTML Helper
                    var documentHtml = function(html){
                        // Prepare
                        var result = String(html)
                            .replace(/<\!DOCTYPE[^>]*>/i, '')
                            .replace(/<(html|head|body|title|meta|script)([\s\>])/gi,'<div class="document-$1"$2')
                            .replace(/<\/(html|head|body|title|meta|script)\>/gi,'</div>')
                        ;
                        // Return
                        return $.trim(result);
                    };

                    // Ajaxify Helper
                    $.fn.ajaxify = function() {
                        // Prepare
                        var $this = $(this);

                        // Ajaxify
                        $this.find('.pagination a').on('click', function(event){
                            // Prepare
                            var $this = $(this),
                                url = $this.attr('href'),
                                title = $this.attr('title')||null;

                            // Continue as normal for cmd clicks etc
                            if ( event.which == 2 || event.metaKey ) { return true; }

                            // Ajaxify this link
                            History.pushState(null,title,url);
                            event.preventDefault();
                            return false;
                        });

                        // Chain
                        return $this;
                    };

                    // Ajaxify our Internal Links
                    $body.ajaxify();

                    // Hook into State Changes
                    $window.on('statechange',function(){
                        // Prepare Variables
                        var State = History.getState(),
                            url = State.url,
                            relativeUrl = url.replace(rootUrl,''),
                            wpAdm = $('#wpadminbar'),
                            wpAdmOffset = (wpAdm ? wpAdm.outerHeight() : 0);

                        // Set Loading
                        $content.addClass('voss-load-after');
                        $('html, body').animate({
                            scrollTop: $content.offset().top - wpAdmOffset - 95
                        }, 1000, 'easeInOutExpo');

                        // Start Fade Out
                        // Animating to opacity to 0 still keeps the element's height intact
                        // Which prevents that annoying pop bang issue when loading in new content
                        //$content.animate({opacity:0.2},1000);
                        $($content).find('article,nav').animate({opacity:0.2},1000);

                        // Ajax Request the Traditional Page
                        $.ajax({
                            url: url,
                            success: function(data, textStatus, jqXHR){
                                // Prepare
                                var $data = $(documentHtml(data)),
                                    $dataBody = $data.find('.document-body:first'),
                                    $dataContent = $dataBody.find(contentSelector).filter(':first'),
                                    $menuChildren, contentHtml, $scripts;

                                // Fetch the scripts
                                $scripts = $dataContent.find('.document-script');
                                if ( $scripts.length ) {
                                    $scripts.detach();
                                }

                                // Fetch the content
                                contentHtml = $dataContent.html()||$data.html();
                                if ( !contentHtml ) {
                                    document.location.href = url;
                                    return false;
                                }

                                // Update the menu
                                $menuChildren = $menu.find(menuChildrenSelector);
                                $menuChildren.filter(activeSelector).removeClass(activeClass);
                                $menuChildren = $menuChildren.has('a[href^="'+relativeUrl+'"],a[href^="/'+relativeUrl+'"],a[href^="'+url+'"]');
                                if ( $menuChildren.length === 1 ) { $menuChildren.addClass(activeClass); }

                                // Update the content
                                $content.stop(true,true);
                                $content.html(contentHtml).ajaxify().css('opacity',100).show();

                                // Update the title
                                document.title = $data.find('.document-title:first').text();
                                try {
                                    document.getElementsByTagName('title')[0].innerHTML = document.title.replace('<','&lt;').replace('>','&gt;').replace(' & ',' &amp; ');
                                }
                                catch ( Exception ) { }

                                // Add the scripts
                                $scripts.each(function(){
                                    var $script = $(this), scriptText = $script.text(), scriptNode = document.createElement('script');
                                    if ( $script.attr('src') ) {
                                        if ( !$script[0].async ) { scriptNode.async = false; }
                                        scriptNode.src = $script.attr('src');
                                    }
                                        scriptNode.appendChild(document.createTextNode(scriptText));
                                    contentNode.appendChild(scriptNode);
                                });

                                // Complete the change
                                $content.removeClass('voss-load-after');
                                $window.trigger(completedEventName);

                                // Inform Google Analytics of the change
                                if ( typeof window._gaq !== 'undefined' ) {
                                    window._gaq.push(['_trackPageview', relativeUrl]);
                                }

                                // Inform ReInvigorate of a state change
                                if ( typeof window.reinvigorate !== 'undefined' && typeof window.reinvigorate.ajax_track !== 'undefined' ) {
                                    reinvigorate.ajax_track(url);
                                    // ^ we use the full url here as that is what reinvigorate supports
                                }
                            },
                            error: function(jqXHR, textStatus, errorThrown){
                                document.location.href = url;
                                return false;
                            }
                        }); // end ajax

                    }); // end onStateChange

                }); // end onDomLoad

            })(window); // end closure
        }
    }

    function vossenNewsletter() {
        $('.vs-newsletter-form').each(function () {
            var inputEmail = $(this).children('.vs-newsletter-email');
            $(this).on('submit', function() {
                $(this).find('.vs-newsletter-info').load( themeAjax.themeUrl + '/inc/widgets/vs_newsletter_save.php', {
                    email: inputEmail.val(),
                }, function() {
                    $(this).hide().fadeIn(240);
                });
                return false;
            });
        });
    }

    function vossenFaceSDK() {
        var vosDataFaceLang = $('.fb-page').attr('data-face-lang'),
            vosFaceLang = 'en_US';
        if ( vosDataFaceLang ) {
            vosFaceLang = vosDataFaceLang;
        }
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.async=true;
            js.src = "//connect.facebook.net/" + vosFaceLang + "/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    }

    function vossenPinIt() {

        function getUrl(src){
            var url = document.location.toString();
            var http = /^https?:\/\//i;
            if (!http.test(src)) {
                if(src[0] == '/'){
                    url = url.substring(0, url.lastIndexOf('/')) + src;
                } else {
                    url = url.substring(0, url.lastIndexOf('/')) + '/' + src;
                }
            } else {
                url = src;
            }
            return url;
        };

        function on_click () {
            var img = $(this).siblings('img:first'),
            description = $('.post-title:first').text(),
            url = document.location,
            media = getUrl( img.attr('src') ),

            pin_url = 'http://pinterest.com/pin/create/button/?url=' + url + '&media=' + media + '&description=' + description;

            window.open(pin_url, 'Pin - ' + description, 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
        };

        $('.voss-pin-enabled .post-entry-content img, .voss-pin-enabled .page-header-content img').each(function() {
            var img = $(this);
            img.wrap('<span class="voss-pin-it"/>');
            img.parent('span.voss-pin-it').append('<a class="voss-pin-it-btn"><i class="socicon-pinterest" aria-hidden="true"></i></a>');
            img.siblings('.voss-pin-it-btn').on('click', on_click);
        });

	}

    function vossAnimate() {
        var itemQueue = [],
            delay = 150,
            queueTimer;
        function processItemQueue() {
            if (queueTimer) return
            queueTimer = window.setInterval(function () {
                if (itemQueue.length) {
                    $(itemQueue.shift()).addClass('animated');
                    processItemQueue()
                } else {
                    window.clearInterval(queueTimer)
                    queueTimer = null
                }
            }, delay)
        }
        $('.voss-layout-grid article').on( 'inview', function (event, visible) {
            if (visible == true) {
                itemQueue.push($(this))
                processItemQueue()
            }
        });
    }


    function vossenInit() {
        vossenPageHeader();
        vossenSliders();
        vossenDataImageSrc();
        vossenNav();
        vossenAjaxify();
        vossAnimate();
        if (typeof vc_rowBehaviour !== 'undefined' && $.isFunction(vc_rowBehaviour)) {
            $.when(vc_rowBehaviour()).then(vossenMasonry());
        } else {
            vossenMasonry();
        }
        vossenScrollAnchor();
        vossenSocialPopUp();
        vossenLightbox();
        vossenSingleLightbox();
        vossenVideoPlay();
        vossenWooLightbox();
        vossenWooLoginRegister();
        vossenWooQuantity();
        vossenNewsletter();
        vossenFaceSDK();
        vossenPinIt()
        vossenWooPrice();
    }

    $(document).ready(function () {
        if ($('#vc_inline-anchor').length) {
            $(window).on('vc_reload', function() {
                vossenInit();
            });
        } else {
            vossenInit();
        }
    });

    $(document).ajaxComplete(function(){
        vossenDataImageSrc();
        vossenMasonry();
        vossenWooQuantity();
        vossAnimate();
    });

    $(document).ajaxStop(function() {

    });

    $(window).load(function () {
        vossenWooTabs();
    });


}(jQuery));
