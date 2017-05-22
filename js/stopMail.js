$(document).ready(function (){
    validate();
    $('#email, #message').change(validate);
});

function validate(){
    if (
        $('#email').val().length  >   0   &&
        $('#message').val().length    >   0) {
        $("input[type=submit]").prop("disabled", false);
    }
    else {
        $("input[type=submit]").prop("disabled", true);
    }
}
