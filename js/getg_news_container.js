jQuery(document).ready(function() {
    jQuery(".getg_news_list").lightSlider({
        item: 1,
        autoWidth: false,
        auto: true,
        speed: 1000,
        pause: 10000,
        pager: false,
        pauseOnHover: true,
        loop: true,
        controls: true,
        slideMove: 1,
        slideMargin: 10,
        adaptiveHeight: true,
    });
});
