$(':input[type=submit]').prop('disabled', true);

$(function (){
  $('.input').keyup(function (){
    if ($('.input').val().length >= 1){
      $(':input[type=submit]').prop('disabled', false);
    }
    else {
      $(':input[type=submit]').prop('disabled', true);
    }
  });
});
