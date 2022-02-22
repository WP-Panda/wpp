jQuery(function ($) {

    /**
     * Показ формы поиска
     */
    $(document).on('click', '.wpp-search-trigger', function (e) {

        let $this = $(this),
            $target = $this.parents('.wpp-show-hide-block'),
            $height = $target.height(),
            $i = $this.find('i'),
            $search_array = WPP.search_array;

        if ($this.hasClass('opened')) {
            $target.animate({'bottom': -3}, 500)
            $this.removeClass('opened')
            $i.removeClass('wpp-i-shewron-up').addClass('wpp-i-glass')
        } else {

            $('.wpp-search-input').attr('placeholder', $search_array[Math.floor(Math.random() * $search_array.length)])

            $target.animate({'bottom': '-' + ($height + 28)}, 500)
            $this.addClass('opened')
            $i.removeClass('wpp-i-glass').addClass('wpp-i-shewron-up')
        }

    });

    $(document).on('click', '.nav-get', function (e) {
        e.preventDefault()
        let $target = $('.wpp-main-nav');

        if (!$target.hasClass('opened')) {
            $target.addClass('opened').css({'display': 'block'}).animate({'opacity': 1}, 500)

        } else {
            $target.animate({'opacity': 0}, 500).css({'display': 'none'}).removeClass('opened')
        }
    });

    $(document).on('click','.nav-close',function (e){
        e.preventDefault()
        let $target = $('.wpp-main-nav');
        $target.animate({'opacity': 0,'display': 'none'}, 500).css({'display': 'none'}).removeClass('opened')
        //;
    })


    $(window).scroll(function(){
        var sticky = $('body'),
            scroll = $(window).scrollTop();

        if (scroll >= 32) sticky.addClass('sticky-h');
        else sticky.removeClass('sticky-h');
    });

})