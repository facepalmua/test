jQuery(function($){
    'use strict';

    let lightBoxOptions = {
            disableScroll: false,
            captionSelector: 'self',
            closeText: '<div class="btn-close"><span></span></div>',
            navText: ['<div class="swiper-button-prev"><i></i></div>','<div class="swiper-button-next"><i></i></div>'],
            alertErrorMessage: "No image found. Next will be load.",
            history: false,
            // captionType: 'data',
            // captionsData: 'l-video',
            docClose:false,
            heightRatio: 0.8
        },
        lightboxSelector = $('.lightbox-wrapper'),
        lightboxLength = lightboxSelector.length,
        lightbox = [];

    for(let i=0;i<lightboxLength;i++){
        lightbox[i] = $(lightboxSelector[i]).find('.lightbox').simpleLightbox(lightBoxOptions);
        $(lightboxSelector[i]).find('.lightbox').on('shown.simplelightbox', _functions.removeScroll);
        $(lightboxSelector[i]).find('.lightbox').on('close.simplelightbox', _functions.addScroll);
    };

    $(document).on('click', '.sl-overlay', function() {
        lightbox[0].close();
    });

    $(document).on('click', '.js-product-detail .product_variations li', function() {
        if ($('.product_detail-img').length) {
            let imgSrc = $(this).attr('data-img-scr');

            if (imgSrc) $('.product_detail-img').eq(0).attr('href', imgSrc);

            for(let i=0;i<lightboxLength;i++){
                lightbox[i].refresh();
            }
        }
    });

    $('.lightbox').on('click', function () {
    
      if ($('.lightbox-wrapper').find('.title').length) {
        $('.sl-wrapper').prepend('<div class="lightbox-title">'+$('.lightbox-wrapper').find('.title').text()+'</div>')
      }
    });

});