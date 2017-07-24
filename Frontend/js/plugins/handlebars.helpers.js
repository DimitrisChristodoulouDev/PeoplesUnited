$(function () {
    Handlebars.registerHelper('link', function(my_link) {

        var url = Handlebars.escapeExpression(my_link.url);
        var result = "<a href='" + url + "'></a>";
        console.log(result);

        return new Handlebars.SafeString(result);

    });
});