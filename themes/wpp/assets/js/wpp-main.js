jQuery(function ($){

    $(document).on('click','.wpp-search-trigger',function (e){

        let $this = $(this),
            $target = $this.parents('.wpp-show-hide-block'),
            $height = $target.height(),
            $img = $this.find('img');

        if($this.hasClass('opened')){
            $target.animate({'margin-top': '-' + ( $height + 28 ) },500)
            $this.removeClass('opened')
            $img.attr('src', $img.data('show'))
        } else {
            $target.animate({'margin-top':0},500)
            $this.addClass('opened')
            $img.attr('src', $img.data('hide'))
        }

    });

})