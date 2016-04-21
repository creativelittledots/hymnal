/**
 * The file that defines all Javascript and jQuery functions used for the plugin
 *
 * Using codekit gives us the ability to prepend external js files, combining them
 * for optimal performance (less requests).
 *
 * @link       https://creativelittledots.co.uk
 * @since      1.0.0
 *
 * @package    Hymnal
 * @subpackage Hymnal/public/js
 */


// Prepend Slick Carousel
// @codekit-prepend "../bower_components/slick-carousel/slick/slick.min.js";


// Setup Slick on main container
$('.js-container').slick({
    arrows: false,
    speed: 200,
    adaptiveHeight: true,
    touchMove: false
});


// Quickly scroll to top of page on scroll, so you aren't viewing the next set of
// lyrics half way through!
$('.js-container').on('swipe', function(event, slick, direction) {
    $('html, body').animate({ scrollTop: 0 }, 200);
});