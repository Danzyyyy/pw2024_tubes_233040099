$(document).ready(function () {
  $('#keyword').on('keyup', function () {
    $.get('ajax/games.php?keyword=' + $('#keyword').val(), function (data) {
      $('#container').html(data);
    });
  });
});