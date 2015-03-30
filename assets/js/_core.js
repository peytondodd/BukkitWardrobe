// Clothes switcher
$(function() {
  $('div.clothes-chooser').not('.disabled').find('div.clothes-chooser-item').on('click', function() {
    $(this).parent().parent().find('div.clothes-chooser-item').removeClass('selected');
    $(this).addClass('selected');
    $(this).find('input[type="radio"]').prop('checked', true);
  });
});
