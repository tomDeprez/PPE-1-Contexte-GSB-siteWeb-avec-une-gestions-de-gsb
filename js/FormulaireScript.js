// // //material contact form animation
// $('.form-control').each(function() {
//   var targetItem = $(this).parent();
//   if ($(this).val()) {
//     $(targetItem).find('label').css({
//       'top': '10px',
//       'fontSize': '14px'
//     });
//   }
// })
// $('.form-control').focus(function() {
//   $(this).parent('.input-block').addClass('focus');
//   $(this).parent().find('label').animate({
//     'top': '10px',
//     'fontSize': '14px'
//   }, 300);
// })
// $('.form-control').blur(function() {
//   if ($(this).val().length == 0) {
//     $(this).parent('.input-block').removeClass('focus');
//     $(this).parent().find('label').animate({
//       'top': '25px',
//       'fontSize': '18px'
//     }, 300);
//   }
// })

$(document).on('click', '.form-control', function () {
  var targetItem = $(this).parent();
  if ($(this).val()) {
    $(targetItem).find('label').css({
      'top': '10px',
      'fontSize': '14px'
    });
  }
  $(this).parent('.input-block').addClass('focus');
  $(this).parent().find('label').animate({
    'top': '10px',
    'fontSize': '14px'
  }, 300);
  // if ($(this).val().length == 0) {
  //   $(this).parent('.input-block').removeClass('focus');
  //   $(this).parent().find('label').animate({
  //     'top': '25px',
  //     'fontSize': '18px'
  //   }, 300);
  // }
});

// $('.form-control').mousedown(function(e) {
//   var targetItem = $(this).parent();
//   if ($(this).val()) {
//     $(targetItem).find('label').css({
//       'top': '10px',
//       'fontSize': '14px'
//     });
//   }
// });

// $('.form-control').mouseup(function(e) {
//   $(this).parent('.input-block').addClass('focus');
//   $(this).parent().find('label').animate({
//     'top': '10px',
//     'fontSize': '14px'
//   }, 300);
// });

// $('.form-control').blur(function(e) {
//   var targetItem = $(this).parent();
//   if ($(this).val()) {
//     $(targetItem).find('label').css({
//       'top': '10px',
//       'fontSize': '14px'
//     });
//   }
// });​​