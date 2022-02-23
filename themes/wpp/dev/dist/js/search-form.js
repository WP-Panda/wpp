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
});