$(function () {
    'use strict';
    var winH = $(window).height(),
        navbarH = $('.navbar').innerHeight(),
        footerH = $('.page-footer').innerHeight(),
        imgsH = $('img').innerHeight();

    $('.carousel-inner').height((imgsH / 1.7));
})
