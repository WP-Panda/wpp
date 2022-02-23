jQuery(function ($) {

    $(document).on('click', '.nav-get', function (e) {
        e.preventDefault()
        let $target = $('.wpp-main-nav'),
            $list = $('.wpp-main-nav-list'),
            $top = $('.wpp-head-top-panel').height + $('.wpp-head-main-panel').height + 4

        if (!$target.hasClass('opened')) {
            $(this).find('i').removeClass('wpp-i-burger').addClass('wpp-i-x-close')
            $target.addClass('opened')
            $list.animate({'top': 55}, 500);
            $('.wpp-main-nav-list li').css('display', 'block')
            $('.wpp-main-nav-list li').each(function (i, v) {
                $(this).animate({'opacity': 1}, 500);
            })
        } else {
            $(this).find('i').removeClass('wpp-i-x-close').addClass('wpp-i-burger')
            $list.animate({'top': -500}, 500)
            $target.removeClass('opened')

        }
    });
});