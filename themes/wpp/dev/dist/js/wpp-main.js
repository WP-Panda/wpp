jQuery(function ($) {

    function WppHeaderFix() {
        var sticky = $('body'),
            scroll = $(window).scrollTop();

        if (scroll >= 32) sticky.addClass('sticky-h');
        else sticky.removeClass('sticky-h');
    }

//Приклеенный хэдер
    $(window).scroll(function () {
        WppHeaderFix()
    });
    WppHeaderFix()
})