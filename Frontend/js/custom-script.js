$(document).ready(function () {

    var templatesFolder = 'html/templates/'
    var toLoad = {
        footer: {
            url: templatesFolder + 'footer.htm',
            selector: '#footer'
        },
        /*breadcumbs,
        header,*/

    }

    $.each(toLoad, loadPartials)




})

//TODO: Load external handlebars template file

//Load static html blocks - Use with handlebars
function loadPartials() {

    c(this)
   return $(this.selector).load(this.url)
}


function callAjax(url, data) {

    base_url='http://api/'
    return $.ajax({
        cache:      false,
        url:        base_url + url,
        dataType:   "json",
        type:       'post',
        data:       data
    });
}

function readForm(id) {
    return $('#'+id).serializeArray();
}

function notification(msg){
	$.map(msg, function(item){
		Materialize.toast(item, 3000, 'rounded');
	});
}

function c(obj){
    return console.log(obj)
}



