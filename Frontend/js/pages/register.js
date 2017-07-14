/**
 * Created by SEIIS on 12/7/2017.
 */
$(document).ready(function () {

    $("#registerForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
        },
        messages: {
            email: {
                required: "We need your email address to contact you",
                email: "Invalid email format"
            },
        },

        //TODO: Check for custom handler for each form jquery.validate
        submitHandler: registerHandler,
        errorElement: 'span',
        errorClass: "red-text",
        errorPlacement: function (error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)

            } else {
                error.insertAfter(element);
            }
        }
    });

    function registerHandler() {

        var obj = readForm('registerForm')
        $('#registerBtn').attr('disabled', true);
        $('#registerProgress').show();

        callAjax('authenticate/register', obj).done(function (response) {
            console.log(response);
            $('#registerProgress').hide();
            if (response.status == 1) {//success register
               notification(
                ['Great!','Wait for the admin to verify your identity','You will receive an email to procced when done!'],3000);
            } else {
                Materialize.toast('Error!!!', 1000)
                $('#registerForm')[0].reset();
                $('#registerBtn').attr('disabled', false);

            }


        });
    }


})