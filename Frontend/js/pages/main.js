
/**
 * Created by Mitsaras on 7/16/2017.
 */

$(function () {
    // getUser();
    design()
    getUserContacts()



});
function design() {
    $('.tabs').tabs({swipeable: true});
}

function getUserContacts() {
    callAjax('contacts',{}).done(function (response) {
        var r = response
        var a = handlebarsRenderTemplate('#agentsCollectionTemplate', r);
        // console.log(a)
        $('#agentsCollection').append(a)



    });

}




//    $('selector').on('event', functionNameOut of document.ready)

/*
function functionNameOut() {
    //Do your staff here
}*/
