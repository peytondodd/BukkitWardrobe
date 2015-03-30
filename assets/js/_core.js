/* global Handlebars */

$(document).ready(function() {
  // Render Handlebars template
  $.getJSON('clothing.json', function(data) {
      var source   = $('.clothes-chooser-template').html()
      , template = Handlebars.compile(source);
      $('.clothes-chooser').html(template(data));
      // Execute clothChoose
      clothChoose();
  });

  // Clothes chooser function
  var clothChoose = function () {
    $('.clothes-chooser').not('.disabled').find('.clothes-chooser-item').on('click', function() {
      $(this).parent().parent().find('.clothes-chooser-item').removeClass('selected');
      $(this).addClass('selected');
      $(this).find('input[type="radio"]').prop('checked', true);
    });
  }
});
