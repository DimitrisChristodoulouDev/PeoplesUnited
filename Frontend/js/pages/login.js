/**
 * Created by SEIIS on 12/7/2017.
 */
$(document).ready(function () {


    
    $('#loginForm').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 3
            },
        },
        messages: {
            email: {
                required: "We need your email address to contact you",
                email: "Invalid email format"
            },
            password: {
                required: "You need a password to login",
                minlength: "Too short password!"
            },
        },
        //TODO: Check for custom handler for each form jquery.validate
        submitHandler: loginHandler,
        errorElement: 'span',
        errorClass: "red-text"
    });

    function loginHandler() {

        var obj = readForm('loginForm')
        $('#loginBtn').attr('disabled', true);
        $('#loginProgress').show();

        callAjax('authenticate/login', obj)
            .done(function (response) {
                console.log('Response', response)
             $('#loginProgress').hide();
            if(response.status == '1') {//correct credentials
                saveToken(response.AuthToken);
               window.location.href = 'main.html';
            } else {
                notification(['Wrong Email/Password!!!'])
                $('#loginForm')[0].reset();
                $('#loginBtn').attr('disabled', false);
            }
        })
        .error(function () {
            $('#loginForm')[0].reset();
            $('#loginBtn').attr('disabled', false);
            $('#loginProgress').hide();

        });
    }
})