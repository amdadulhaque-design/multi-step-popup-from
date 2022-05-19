$(document).ready(function() {
  $(".c-client-voice .c-text").before().click(function() {
    $(this).parent().parent().toggleClass("toggle-section");
  });
});
//furikana auto insert
$(function() {
  $.fn.autoKana('input[name="namae"]', 'input[name="namaekana"]');
});
$(function() {
  $.fn.autoKana('input[name="namae2"]', 'input[name="namaekana2"]');
});
//smooth scrolling
$(document).on('click', 'a[href^="#"]', function(event) {
  event.preventDefault();

  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
});
// enter key prevent
$(document).on('keyup keypress', 'form input[type="text"]', function(e) {
  if (e.keyCode == 13) {
    e.preventDefault();
    return false;
  }
});
//form1 validation
$(function() {
  $(".form1 .c-validation-button").click(function() {
    var $flag = false;
    $('.form1').attr('onsubmit', 'return false;');
    //namae validation
    var $namae = $(".form1 input[name='namae']").val();
    if ($namae == "") {
      $(".form1 input[name='namae']").parent().find('.u-hide').removeClass('u-hide');
      $flag1 = false;
    } else {
      $(".form1 input[name='namae']").parent().find('span').addClass('u-hide');
      $flag1 = true;
    }
    //furigana validation
    var $furigana = $(".form1 input[name='namaekana']").val();
    if ($furigana == "") {
      $(".form1 input[name='namaekana']").parent().find('.u-hide').removeClass('u-hide');
      $flag2 = false;
    } else {
      $(".form1 input[name='namaekana']").parent().find('span').addClass('u-hide');
      $flag2 = true;

    }
    //phone validation
    var $regexp_phone = /^[0-9-+]+$/;
    var $phone = $(".form1 input[name='phone_number']").val();
    if ($phone == "" || !$phone.match($regexp_phone)) {
      $(".form1 input[name='phone_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag3 = false;
    } else {
      $(".form1 input[name='phone_number']").parent().find('span').addClass('u-hide');
      $flag3 = true;
    }
    //e-mail validation
    var $regexp_mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var $mail = $(".form1 input[name='e-mail']").val();
    if ($mail == "" || !$mail.match($regexp_mail)) {
      $(".form1 input[name='e-mail']").parent().find('.u-hide').removeClass('u-hide');
      $flag4 = false;
    } else {
      $(".form1 input[name='e-mail']").parent().find('span').addClass('u-hide');
      $flag4 = true;
    }
    //postal-code validation
    var $regexp_post = /^[0-9-+]+$/;
    var $post = $(".form1 input[name='post_number']").val();
    var $address = $(".form1 input[name='address']").val();

    if ($post == "" || !$post.match($regexp_post) || $address == "") {
      $(".form1 input[name='post_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag5 = false;
    } else {
      $(".form1 input[name='post_number']").parent().find('span').addClass('u-hide');
      $flag5 = true;
    }
    // address select validation
    // var $city = $(".form1 #select-city").children('option:selected').val();
    // if ($city == "") {
    //   $(".form1 #select-city").parent().find('.u-hide').removeClass('u-hide');
    //   $flag6 = false;
    // } else {
    //   $(".form1 #select-city").parent().find('span').addClass('u-hide');
    //   $flag6 = true;
    // }
    //textarea validation
    // var $consultant = $(".form1 textarea[name='consultant_content']").val();
    // if ($consultant == "") {
    //   $(".form1 textarea[name='consultant_content']").parent().find('.u-hide').removeClass('u-hide');
    //   $flag7 = false;
    // } else {
    //   $(".form1 textarea[name='consultant_content']").parent().find('span').addClass('u-hide');
    //   $flag7 = true;
    // }
    //conform_page going
    if (($flag1 == true) && ($flag2 == true) && ($flag3 == true) && ($flag4 == true) && ($flag5 == true)) {
      $(".form1 input[name='namae']").prop('disabled', true);
      $(".form1 input[name='namaekana']").prop('disabled', true);
      $(".form1 input[name='phone_number']").prop('disabled', true);
      $(".form1 input[name='e-mail']").prop('disabled', true);
      $(".form1 input[name='address']").prop('disabled', true);
      $(".form1 input[name='post_number']").prop('disabled', true);
      $(".form1 #select-city").prop('disabled', true);
      $(".form1 textarea[name='consultant_content']").prop('disabled', true);
      $(this).addClass('u-hide');
      $('.form1 .c-confirm-page-button').removeClass('u-hide');
      $('.form1').attr('onsubmit', 'return true;');
    }
  });
  $('.form1 .c-fix-button').click(function() {
    $(".form1 input[name='namae']").prop('disabled', false);
    $(".form1 input[name='namaekana']").prop('disabled', false);
    $(".form1 input[name='phone_number']").prop('disabled', false);
    $(".form1 input[name='e-mail']").prop('disabled', false);
    $(".form1 input[name='address']").prop('disabled', false);
    $(".form1 input[name='post_number']").prop('disabled', false);
    $(".form1 #select-city").prop('disabled', false);
    $(".form1 textarea[name='consultant_content']").prop('disabled', false);
    $('.form1 .c-confirm-page-button').addClass('u-hide');
    $('.form1 .c-validation-button').removeClass('u-hide');
  });

  $('.form1 .c-submit-button').click(function() {
    $('.form1').attr('onsubmit', 'return true;');
    $(".form1 input[name='namae']").prop('disabled', false);
    $(".form1 input[name='namaekana']").prop('disabled', false);
    $(".form1 input[name='phone_number']").prop('disabled', false);
    $(".form1 input[name='e-mail']").prop('disabled', false);
    $(".form1 input[name='address']").prop('disabled', false);
    $(".form1 input[name='post_number']").prop('disabled', false);
    $(".form1 #select-city").prop('disabled', false);
    $(".form1 textarea[name='consultant_content']").prop('disabled', false);
  });
});


//form2 validation
$(function() {
  $(".form2 .c-validation-button").click(function() {
    var $flag = false;
    $('.form2').attr('onsubmit', 'return false;');
    //namae validation
    var $namae = $(".form2 input[name='namae2']").val();
    if ($namae == "") {
      $(".form2 input[name='namae2']").parent().find('.u-hide').removeClass('u-hide');
      $flag1 = false;
    } else {
      $(".form2 input[name='namae2']").parent().find('span').addClass('u-hide');
      $flag1 = true;
    }
    //furigana validation
    var $furigana = $(".form2 input[name='namaekana2']").val();
    if ($furigana == "") {
      $(".form2 input[name='namaekana2']").parent().find('.u-hide').removeClass('u-hide');
      $flag2 = false;
    } else {
      $(".form2 input[name='namaekana2']").parent().find('span').addClass('u-hide');
      $flag2 = true;

    }
    //phone validation
    var $regexp_phone = /^[0-9-+]+$/;
    var $phone = $(".form2 input[name='phone_number']").val();
    if ($phone == "" || !$phone.match($regexp_phone)) {
      $(".form2 input[name='phone_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag3 = false;
    } else {
      $(".form2 input[name='phone_number']").parent().find('span').addClass('u-hide');
      $flag3 = true;
    }
    //e-mail validation
    var $regexp_mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var $mail = $(".form2 input[name='e-mail']").val();
    if ($mail == "" || !$mail.match($regexp_mail)) {
      $(".form2 input[name='e-mail']").parent().find('.u-hide').removeClass('u-hide');
      $flag4 = false;
    } else {
      $(".form2 input[name='e-mail']").parent().find('span').addClass('u-hide');
      $flag4 = true;
    }
    //postal-code validation
    var $regexp_post = /^[0-9-+]+$/;
    var $post = $(".form2 input[name='post_number']").val();
    var $address = $(".form2 input[name='address']").val();

    if ($post == "" || !$post.match($regexp_post) || $address == "") {
      $(".form2 input[name='post_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag5 = false;
    } else {
      $(".form2 input[name='post_number']").parent().find('span').addClass('u-hide');
      $flag5 = true;
    }
    // address select validation
    // var $city = $(".form2 #select-city").children('option:selected').val();
    // if ($city == "") {
    //   $(".form2 #select-city").parent().find('.u-hide').removeClass('u-hide');
    //   $flag6 = false;
    // } else {
    //   $(".form2 #select-city").parent().find('span').addClass('u-hide');
    //   $flag6 = true;
    // }
    //textarea validation
    // var $consultant = $(".form2 textarea[name='consultant_content']").val();
    // if ($consultant == "") {
    //   $(".form2 textarea[name='consultant_content']").parent().find('.u-hide').removeClass('u-hide');
    //   $flag7 = false;
    // } else {
    //   $(".form2 textarea[name='consultant_content']").parent().find('span').addClass('u-hide');
    //   $flag7 = true;
    // }
    //conform_page going
    if (($flag1 == true) && ($flag2 == true) && ($flag3 == true) && ($flag4 == true) && ($flag5 == true)) {
      $(".form2 input[name='namae2']").prop('disabled', true);
      $(".form2 input[name='namaekana2']").prop('disabled', true);
      $(".form2 input[name='phone_number']").prop('disabled', true);
      $(".form2 input[name='e-mail']").prop('disabled', true);
      $(".form2 input[name='address']").prop('disabled', true);
      $(".form2 input[name='post_number']").prop('disabled', true);
      $(".form2 #select-city").prop('disabled', true);
      $(".form2 textarea[name='consultant_content']").prop('disabled', true);
      $(this).addClass('u-hide');
      $('.form2 .c-confirm-page-button').removeClass('u-hide');
      $('.form2').attr('onsubmit', 'return true;');
    }
  });
  $('.form2 .c-fix-button').click(function() {
    $(".form2 input[name='namae2']").prop('disabled', false);
    $(".form2 input[name='namaekana2']").prop('disabled', false);
    $(".form2 input[name='phone_number']").prop('disabled', false);
    $(".form2 input[name='e-mail']").prop('disabled', false);
    $(".form2 input[name='address']").prop('disabled', false);
    $(".form2 input[name='post_number']").prop('disabled', false);
    $(".form2 #select-city").prop('disabled', false);
    $(".form2 textarea[name='consultant_content']").prop('disabled', false);
    $('.form2 .c-confirm-page-button').addClass('u-hide');
    $('.form2 .c-validation-button').removeClass('u-hide');
  });
  $('.form2 .c-submit-button').click(function() {
    $(".form2 input[name='namae2']").prop('disabled', false);
    $(".form2 input[name='namaekana2']").prop('disabled', false);
    $(".form2 input[name='phone_number']").prop('disabled', false);
    $(".form2 input[name='e-mail']").prop('disabled', false);
    $(".form2 input[name='address']").prop('disabled', false);
    $(".form2 input[name='post_number']").prop('disabled', false);
    $(".form2 #select-city").prop('disabled', false);
    $(".form2 textarea[name='consultant_content']").prop('disabled', false);

  });
});




//$(window).scroll(function() {
//
//  /* Check the location of each desired element */
//  var $bottom_of_object = $('.p-before-after-section').offset().top;
//  var $second_bottom = $('.p-qa-section').offset().top;
//  var $bottom_of_window = $(window).scrollTop();
//
//  if ($bottom_of_window > ($bottom_of_object - 300)) {
//    $('.js-number1').each(function() {
//      var $this = $(this),
//        countTo = $this.attr('data-count');
//      $({ countNum: $this.text() }).animate({
//        countNum: countTo
//      }, {
//        duration: 2500,
//        easing: 'linear',
//        step: function() {
//          $this.text(Math.floor(this.countNum));
//        },
//        complete: function() {
//          $this.text(this.countNum);
//          //alert('finished');
//        }
//      });
//    });
//  }
//
//  if ($bottom_of_window > ($second_bottom - 400)) {
//    $('.js-number2').each(function() {
//      var $this = $(this),
//        countTo = $this.attr('data-count');
//      $({ countNum: $this.text() }).animate({
//        countNum: countTo
//      }, {
//        duration: 2500,
//        easing: 'linear',
//        step: function() {
//          $this.text(Math.floor(this.countNum));
//        },
//        complete: function() {
//          $this.text(this.countNum);
//          //alert('finished');
//        }
//      });
//    });
//  }
//
//});