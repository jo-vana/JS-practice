
'use strict';
$(function () {
    //configuration
    var width = 720;
    var animationSpeed = 1000;
    var pause = 1000;
    var curentSlide = 1;
    //cache DOM
    var $slider = $('#slider');
    var $slideContainer = $slider.find('.slides');
    var $slides = $slideContainer.find('.slide');
    //setInterval
    var interval;

    function startSlider() {
        interval = setInterval(function () {
            $slideContainer.animate({'margin-left': '-=' + width}, animationSpeed, function () {
                //animate margin-left
                curentSlide++;
                if (curentSlide === $slides.length) {
                    //if it's last slide go to position 1
                    curentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    function stopSlider() {
        clearInterval(interval);
    }

    //listen for mouseenter and pouse
    $slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);
    //resume on mouseleave
    startSlider();
});