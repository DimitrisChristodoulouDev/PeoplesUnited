$(function () {
    // getUserPrivileges()
    //Render templates
    renderTemplates()
    addHoverClass()
   //TODO: automaticLogout()
});

function getUserPrivileges() {
    var token = getToken();
    callAjax('user/', {fields:['privilleges']}).done(function (response) {
        console.log(response);
    })

}

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
       /* breadcrumbs:{
            url: templatesFolder + 'breadcrumbs.htm',
            selector: '#breadcrumbs'
        },*/
    }

    $.each(toLoad, loadPartials)
}


//Load static html blocks - Use with handlebars
function loadPartials() {
   return $(this.selector).load(this.url)
}


function handlebarsRenderTemplate(selector, data){
    Handlebars.registerHelper('each_upto', function(ary, max, options) {
        if(!ary || ary.length == 0)
            return options.inverse(this);

        var result = [ ];
        for(var i = 0; i < max && i < ary.length; ++i)
            result.push(options.fn(ary[i]));
        return result.join('');
    });



    var theTemplateScript = $(selector).html();
    console.log(theTemplateScript)

    // Compile the template
    var theTemplate = Handlebars.compile(theTemplateScript);

    // This is the default context, which is passed to the template
    var context = {};
    context['agents'] = data.agents;
    console.log(context)
    // Pass our data to the template
    return theTemplate(context);
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
            // window.location.reload();
        },
        success: function(response){
            console.log('Request response', response)
        },
        status:{
            403: function () {
                swal('Please login!!!', 'error')
            }
        }

    });
}

function readForm(id) {
    return $('#'+id).serializeArray();
}

function notification(msg){
	$.map(msg, function(item){
		Materialize.toast(item, 3000, 'rounded');
        var toastElement = $('.toast').first()[0];
        var toastInstance = toastElement.M_Toast;
        toastInstance.remove();
	});
}



