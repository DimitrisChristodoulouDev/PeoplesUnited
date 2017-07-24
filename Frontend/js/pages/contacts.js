$(document).ready(function () {
    $('.carousel').carousel();

    $('')


    $('#editContactModal').modal({
            ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                var id = $(trigger).attr('data-edit')

            },
            complete: function() { alert('Closed'); } // Callback for Modal close
        }
    );





})