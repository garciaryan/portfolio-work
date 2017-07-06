$(':input[type=submit]').prop('disabled', true);

$(function (){
  $('.input').keyup(function (){
    console.log('Im all keyed up');
    if ($('.input').val().length >= 1){
      console.log($('.input').val().length);
      $(':input[type=submit]').prop('disabled', false);
    }
    else {
      $(':input[type=submit]').prop('disabled', true);
    }
  });
});
