
$('.select2').css('width', '100%');

$('.select2').each(function () {
     var format = $(this).data('format') ? $(this).data('format') : "defaultFormat";
     $(this).select2({
         theme: "bootstrap",
         templateResult: window[format],
         templateSelection: window[format],
         escapeMarkup: function (m) {
             return m;
         }
     });
 });
