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

function notification(msg, time=500){
	 
	$.map(msg, function(item){
		Materialize.toast(item, time, 'rounded');
	});
}
