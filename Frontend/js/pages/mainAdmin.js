
/**
 * Created by Mitsaras on 7/16/2017.
 */

$(document).ready(function () {
    $('.carousel').carousel();

    $('#next').on('click', sliderNext)

//    $('selector').on('event', functionNameOut of document.ready)



})
/*
function functionNameOut() {
    //Do your staff here
}*/

function sliderNext() {
    $('.carousel').carousel('next');
}