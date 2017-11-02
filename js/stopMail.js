$(':input[type=submit]').attr('disabled', true);

$(function (){
  $('.input').keyup(function (){
    if ($('.input').val().length >= 1){
      $(':input[type=submit]').attr('disabled', false);
    }
    else {
      $(':input[type=submit]').attr('disabled', true);
    }
  });
});
