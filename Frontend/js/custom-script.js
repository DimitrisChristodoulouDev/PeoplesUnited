$(function () {
    //Render templates
    renderTemplates()
    addHoverClass()
   //TODO: automaticLogout()
});

function addHoverClass() {
    $('.card').removeClass('hoverable').addClass('hoverable');
}

function saveToken(token) {
    localStorage.setItem('AuthToken', token);
}

function getToken(){
    return localStorage.getItem('AuthToken');
}

function removeToken() {
    localStorage.removeItem('AuthToken');
}


function automaticLogout() {
    if(!getToken() && window.location.pathname != '/user-login.html') {
        $(document).idleTimeout({
            redirectUrl: 'user-login.html', // redirect to this url. Set this value to YOUR site's logout page.
            idleTimeLimit: 10, // 15 seconds
            activityEvents: 'click keypress scroll wheel mousewheel', // separate each event with a space
            enableDialog: false,
            customCallback: notification(['Logging out']),
            idleCheckHeartbeat: 5
        });
    }
}








//TODO: Load external handlebars template file
function renderTemplates() {
    var templatesFolder = 'html/templates/'
    var toLoad = {
        footer: {
            url: templatesFolder + 'footer.htm',
            selector: '#footer'
        },
        header:{
            url: templatesFolder + 'header.htm',
            selector: '#headerContainer'
        },
        breadcrumbs:{
            url: templatesFolder + 'breadcrumbs.htm',
            selector: '#breadcrumbs'
        }


    }

    $.each(toLoad, loadPartials)
}


//Load static html blocks - Use with handlebars
function loadPartials() {
   return $(this.selector).load(this.url)
}


function callAjax(url, data) {
    base_url='http://api/';
    return $.ajax({
        async: true,
        crossDomain: true,
        method: 'POST',
        headers: {
            AuthToken: getToken(),
            'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
        },
        cache: true,
        url: base_url + url,
        dataType: 'json',
        data: data,
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log('Error: ', errorThrown, 'Status', textStatus);
            notification(['An error has occured. Reload your browser'] )
        },
        success: function(response){
            console.log(response)
        }

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



