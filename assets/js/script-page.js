$(document).ready(function() {
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    $('.materialboxed').materialbox();

    $('.pop-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: true,
        fixedContentPos: true,
        tLoading: 'Cargando image #%curr%...',
        mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            verticalFit: true,
            tError: '<a href="%url%">la image #%curr%</a> no pudo ser cargada.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by lorem</small>';
            },
            zoom: {
                enabled: true,
                duration: 300 
            }
        }
    });


    // $('.ir-arriba').click(function(){
    //     $('body, html').animate({
    //         scrollTop: '100px'
    //     }, 100);
    // });
 
    // $(window).scroll(function(){
    //     if( $(this).scrollTop() > 0 ){
    //         $('.ir-arriba').slideDown(100);
    //     } else {
    //         $('.ir-arriba').slideUp(100);
    //     }
    // });
    // 
    $('.ir-arriba').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});

    $(window).scroll(function(){
   if ($(this).scrollTop() > 100) {
        $('.ir-arriba').fadeIn();
   } else {
        $('.ir-arriba').fadeOut();
   }
});
});