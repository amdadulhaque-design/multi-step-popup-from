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
$(function() {
  $.fn.autoKana('input[name="namae3"]', 'input[name="namaekana3"]');
});
$(function() {
  $.fn.autoKana('input[name="namae4"]', 'input[name="namaekana4"]');
});
$(function() {
  $.fn.autoKana('input[name="namae5"]', 'input[name="namaekana5"]');
});
//smooth scrolling
$(document).on('click', 'a[href^="#"]', function(event) {
  event.preventDefault();

  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
});

// enter key prevent	//form1 validation
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
    //address validation
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
    
    // repair select validation
    //var $repair = $(".form1 #select-repair").children('option:selected').val();
    //if ($repair == "") {
    //  $(".form1 #select-repair").parent().find('.u-hide').removeClass('u-hide');
    //  $flag7 = false;
    //} else {
    //  $(".form1 #select-repair").parent().find('span').addClass('u-hide');
    //  $flag7 = true;
    //}
    
    // year select validation
    //var $year = $(".form1 #select-year").children('option:selected').val();
    //if ($year == "") {
    //  $(".form1 #select-year").parent().find('.u-hide').removeClass('u-hide');
    //  $flag8 = false;
    //} else {
    //  $(".form1 #select-year").parent().find('span').addClass('u-hide');
    //  $flag8 = true;
    //}
    
    //textarea validation
    //var $consultant = $(".form1 textarea[name='consultant_content']").val();
    //if ($consultant == "") {
    //  $(".form1 textarea[name='consultant_content']").parent().find('.u-hide').removeClass('u-hide');
    //  $flag9 = false;
    //} else {
    //  $(".form1 textarea[name='consultant_content']").parent().find('span').addClass('u-hide');
    //  $flag9 = true;
    //}
    
    //confirm_page going
    if (($flag1 == true) && ($flag2 == true) && ($flag3 == true) && ($flag4 == true) && ($flag5 == true)) {
      $(".form1 input[name='namae']").prop('disabled', true);
      $(".form1 input[name='namaekana']").prop('disabled', true);
      $(".form1 input[name='phone_number']").prop('disabled', true);
      $(".form1 input[name='e-mail']").prop('disabled', true);
      $(".form1 input[name='post_number']").prop('disabled', true);
      $(".form1 input[name='address']").prop('disabled', true);
      $(".form1 #select-repair").prop('disabled', true);
      $(".form1 #select-year").prop('disabled', true);
      $(".form1 textarea[name='consultant_content']").prop('disabled', true);
      $(this).addClass('u-hide');
      $('.form1 .c-confirm-page-button').removeClass('u-hide');
      $('.form1').attr('onsubmit', 'return true;');
    }
  });
  
  //fix button click
  $('.form1 .c-fix-button').click(function() {
    $(".form1 input[name='namae']").prop('disabled', false);
    $(".form1 input[name='namaekana']").prop('disabled', false);
    $(".form1 input[name='phone_number']").prop('disabled', false);
    $(".form1 input[name='e-mail']").prop('disabled', false);
    $(".form1 input[name='post_number']").prop('disabled', false);
    $(".form1 input[name='address']").prop('disabled', false);
    $(".form1 #select-repair").prop('disabled', false);
    $(".form1 #select-year").prop('disabled', false);
    $(".form1 textarea[name='consultant_content']").prop('disabled', false);
    $('.form1 .c-confirm-page-button').addClass('u-hide');
    $('.form1 .c-validation-button').removeClass('u-hide');
  });

  //submit button click
  $('.form1 .c-submit-button').click(function() {
    $('.form1').attr('onsubmit', 'return true;');
    $(".form1 input[name='namae']").prop('disabled', false);
    $(".form1 input[name='namaekana']").prop('disabled', false);
    $(".form1 input[name='phone_number']").prop('disabled', false);
    $(".form1 input[name='e-mail']").prop('disabled', false);
    $(".form1 input[name='post_number']").prop('disabled', false);
    $(".form1 input[name='address']").prop('disabled', false);
    $(".form1 #select-repair").prop('disabled', false);
    $(".form1 #select-year").prop('disabled', false);
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
    
    //address validation
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
    
    // repair select validation
    //var $repair = $(".form2 #select-repair").children('option:selected').val();
    //if ($repair == "") {
    //  $(".form2 #select-repair").parent().find('.u-hide').removeClass('u-hide');
    //  $flag7 = false;
    //} else {
    //  $(".form2 #select-repair").parent().find('span').addClass('u-hide');
    //  $flag7 = true;
    //}
    
    // year select validation
    //var $year = $(".form2 #select-year").children('option:selected').val();
    //if ($year == "") {
    //  $(".form2 #select-year").parent().find('.u-hide').removeClass('u-hide');
    //  $flag8 = false;
    //} else {
    //  $(".form2 #select-year").parent().find('span').addClass('u-hide');
    //  $flag8 = true;
    //}
    
    //textarea validation
    //var $consultant = $(".form2 textarea[name='consultant_content']").val();
    //if ($consultant == "") {
    //  $(".form2 textarea[name='consultant_content']").parent().find('.u-hide').removeClass('u-hide');
    //  $flag9 = false;
    //} else {
    //  $(".form2 textarea[name='consultant_content']").parent().find('span').addClass('u-hide');
    //  $flag9 = true;
    //}
    
    //confirm_page going
    if (($flag1 == true) && ($flag2 == true) && ($flag3 == true) && ($flag4 == true) && ($flag5 == true)) {
      $(".form2 input[name='namae2']").prop('disabled', true);
      $(".form2 input[name='namaekana2']").prop('disabled', true);
      $(".form2 input[name='phone_number']").prop('disabled', true);
      $(".form2 input[name='e-mail']").prop('disabled', true);
      $(".form2 input[name='post_number']").prop('disabled', true);
      $(".form2 input[name='address']").prop('disabled', true);
      $(".form2 #select-repair").prop('disabled', true);
      $(".form2 #select-year").prop('disabled', true);
      $(".form2 textarea[name='consultant_content']").prop('disabled', true);
      $(this).addClass('u-hide');
      $('.form2 .c-confirm-page-button').removeClass('u-hide');
      $('.form2').attr('onsubmit', 'return true;');
    }
  });
  
  //fix button click
  $('.form2 .c-fix-button').click(function() {
    $(".form2 input[name='namae2']").prop('disabled', false);
    $(".form2 input[name='namaekana2']").prop('disabled', false);
    $(".form2 input[name='phone_number']").prop('disabled', false);
    $(".form2 input[name='e-mail']").prop('disabled', false);
    $(".form2 input[name='post_number']").prop('disabled', false);
    $(".form2 input[name='address']").prop('disabled', false);
    $(".form2 #select-repair").prop('disabled', false);
    $(".form2 #select-year").prop('disabled', false);
    $(".form2 textarea[name='consultant_content']").prop('disabled', false);
    $('.form2 .c-confirm-page-button').addClass('u-hide');
    $('.form2 .c-validation-button').removeClass('u-hide');
  });

  //submit button click
  $('.form2 .c-submit-button').click(function() {
    $('.form2').attr('onsubmit', 'return true;');
    $(".form2 input[name='namae2']").prop('disabled', false);
    $(".form2 input[name='namaekana2']").prop('disabled', false);
    $(".form2 input[name='phone_number']").prop('disabled', false);
    $(".form2 input[name='e-mail']").prop('disabled', false);
    $(".form2 input[name='post_number']").prop('disabled', false);
    $(".form2 input[name='address']").prop('disabled', false);
    $(".form2 #select-repair").prop('disabled', false);
    $(".form2 #select-year").prop('disabled', false);
    $(".form2 textarea[name='consultant_content']").prop('disabled', false);
  });
});


//form3 validation
$(function() {
  $(".form3 .c-validation-button").click(function() {
    var $flag = false;
    $('.form3').attr('onsubmit', 'return false;');
    //namae validation
    var $namae = $(".form3 input[name='namae3']").val();
    if ($namae == "") {
      $(".form3 input[name='namae3']").parent().find('.u-hide').removeClass('u-hide');
      $flag1 = false;
    } else {
      $(".form3 input[name='namae3']").parent().find('span').addClass('u-hide');
      $flag1 = true;
    }
    //furigana validation
    var $furigana = $(".form3 input[name='namaekana3']").val();
    if ($furigana == "") {
      $(".form3 input[name='namaekana3']").parent().find('.u-hide').removeClass('u-hide');
      $flag2 = false;
    } else {
      $(".form3 input[name='namaekana3']").parent().find('span').addClass('u-hide');
      $flag2 = true;
    }
    //phone validation
    var $regexp_phone = /^[0-9-+]+$/;
    var $phone = $(".form3 input[name='phone_number']").val();
    if ($phone == "" || !$phone.match($regexp_phone)) {
      $(".form3 input[name='phone_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag3 = false;
    } else {
      $(".form3 input[name='phone_number']").parent().find('span').addClass('u-hide');
      $flag3 = true;
    }
    //e-mail validation
    var $regexp_mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var $mail = $(".form3 input[name='e-mail']").val();
    if ($mail == "" || !$mail.match($regexp_mail)) {
      $(".form3 input[name='e-mail']").parent().find('.u-hide').removeClass('u-hide');
      $flag4 = false;
    } else {
      $(".form3 input[name='e-mail']").parent().find('span').addClass('u-hide');
      $flag4 = true;
    }
    
    //address validation
    var $regexp_post = /^[0-9-+]+$/;
    var $post = $(".form3 input[name='post_number']").val();
    var $address = $(".form3 input[name='address']").val();
    if ($post == "" || !$post.match($regexp_post) || $address == "") {
      $(".form3 input[name='post_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag5 = false;
    } else {
      $(".form3 input[name='post_number']").parent().find('span').addClass('u-hide');
      $flag5 = true;
    }
    
    // repair select validation
    //var $repair = $(".form3 #select-repair").children('option:selected').val();
    //if ($repair == "") {
    //  $(".form3 #select-repair").parent().find('.u-hide').removeClass('u-hide');
    //  $flag7 = false;
    //} else {
    //  $(".form3 #select-repair").parent().find('span').addClass('u-hide');
    //  $flag7 = true;
    //}
    
    // year select validation
    //var $year = $(".form3 #select-year").children('option:selected').val();
    //if ($year == "") {
    //  $(".form3 #select-year").parent().find('.u-hide').removeClass('u-hide');
    //  $flag8 = false;
    //} else {
    //  $(".form3 #select-year").parent().find('span').addClass('u-hide');
    //  $flag8 = true;
    //}
    
    //textarea validation
    //var $consultant = $(".form3 textarea[name='consultant_content']").val();
    //if ($consultant == "") {
    //  $(".form3 textarea[name='consultant_content']").parent().find('.u-hide').removeClass('u-hide');
    //  $flag9 = false;
    //} else {
    //  $(".form3 textarea[name='consultant_content']").parent().find('span').addClass('u-hide');
    //  $flag9 = true;
    //}
    
    //confirm_page going
    if (($flag1 == true) && ($flag2 == true) && ($flag3 == true) && ($flag4 == true) && ($flag5 == true)) {
      $(".form3 input[name='namae3']").prop('disabled', true);
      $(".form3 input[name='namaekana3']").prop('disabled', true);
      $(".form3 input[name='phone_number']").prop('disabled', true);
      $(".form3 input[name='e-mail']").prop('disabled', true);
      $(".form3 input[name='post_number']").prop('disabled', true);
      $(".form3 input[name='address']").prop('disabled', true);
      $(".form3 #select-repair").prop('disabled', true);
      $(".form3 #select-year").prop('disabled', true);
      $(".form3 textarea[name='consultant_content']").prop('disabled', true);
      $(this).addClass('u-hide');
      $('.form3 .c-confirm-page-button').removeClass('u-hide');
      $('.form3').attr('onsubmit', 'return true;');
    }
  });
  
  //fix button click
  $('.form3 .c-fix-button').click(function() {
    $(".form3 input[name='namae3']").prop('disabled', false);
    $(".form3 input[name='namaekana3']").prop('disabled', false);
    $(".form3 input[name='phone_number']").prop('disabled', false);
    $(".form3 input[name='e-mail']").prop('disabled', false);
    $(".form3 input[name='post_number']").prop('disabled', false);
    $(".form3 input[name='address']").prop('disabled', false);
    $(".form3 #select-repair").prop('disabled', false);
    $(".form3 #select-year").prop('disabled', false);
    $(".form3 textarea[name='consultant_content']").prop('disabled', false);
    $('.form3 .c-confirm-page-button').addClass('u-hide');
    $('.form3 .c-validation-button').removeClass('u-hide');
  });

  //submit button click
  $('.form3 .c-submit-button').click(function() {
    $('.form3').attr('onsubmit', 'return true;');
    $(".form3 input[name='namae3']").prop('disabled', false);
    $(".form3 input[name='namaekana3']").prop('disabled', false);
    $(".form3 input[name='phone_number']").prop('disabled', false);
    $(".form3 input[name='e-mail']").prop('disabled', false);
    $(".form3 input[name='post_number']").prop('disabled', false);
    $(".form3 input[name='address']").prop('disabled', false);
    $(".form3 #select-repair").prop('disabled', false);
    $(".form3 #select-year").prop('disabled', false);
    $(".form3 textarea[name='consultant_content']").prop('disabled', false);
  });
});


//form4 validation
$(function() {
  $(".form4 .c-validation-button").click(function() {
    var $flag = false;
    $('.form4').attr('onsubmit', 'return false;');
    //namae validation
    var $namae = $(".form4 input[name='namae4']").val();
    if ($namae == "") {
      $(".form4 input[name='namae4']").parent().find('.u-hide').removeClass('u-hide');
      $flag1 = false;
    } else {
      $(".form4 input[name='namae4']").parent().find('span').addClass('u-hide');
      $flag1 = true;
    }
    //furigana validation
    var $furigana = $(".form4 input[name='namaekana4']").val();
    if ($furigana == "") {
      $(".form4 input[name='namaekana4']").parent().find('.u-hide').removeClass('u-hide');
      $flag2 = false;
    } else {
      $(".form4 input[name='namaekana4']").parent().find('span').addClass('u-hide');
      $flag2 = true;
    }
    //phone validation
    var $regexp_phone = /^[0-9-+]+$/;
    var $phone = $(".form4 input[name='phone_number']").val();
    if ($phone == "" || !$phone.match($regexp_phone)) {
      $(".form4 input[name='phone_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag3 = false;
    } else {
      $(".form4 input[name='phone_number']").parent().find('span').addClass('u-hide');
      $flag3 = true;
    }
    //e-mail validation
    var $regexp_mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var $mail = $(".form4 input[name='e-mail']").val();
    if ($mail == "" || !$mail.match($regexp_mail)) {
      $(".form4 input[name='e-mail']").parent().find('.u-hide').removeClass('u-hide');
      $flag4 = false;
    } else {
      $(".form4 input[name='e-mail']").parent().find('span').addClass('u-hide');
      $flag4 = true;
    }
    
    //address validation
    var $regexp_post = /^[0-9-+]+$/;
    var $post = $(".form4 input[name='post_number']").val();
    var $address = $(".form4 input[name='address']").val();
    if ($post == "" || !$post.match($regexp_post) || $address == "") {
      $(".form4 input[name='post_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag5 = false;
    } else {
      $(".form4 input[name='post_number']").parent().find('span').addClass('u-hide');
      $flag5 = true;
    }
    
    // repair select validation
    //var $repair = $(".form4 #select-repair").children('option:selected').val();
    //if ($repair == "") {
    //  $(".form4 #select-repair").parent().find('.u-hide').removeClass('u-hide');
    //  $flag7 = false;
    //} else {
    //  $(".form4 #select-repair").parent().find('span').addClass('u-hide');
    //  $flag7 = true;
    //}
    
    // year select validation
    //var $year = $(".form4 #select-year").children('option:selected').val();
    //if ($year == "") {
    //  $(".form4 #select-year").parent().find('.u-hide').removeClass('u-hide');
    //  $flag8 = false;
    //} else {
    //  $(".form4 #select-year").parent().find('span').addClass('u-hide');
    //  $flag8 = true;
    //}
    
    //textarea validation
    //var $consultant = $(".form4 textarea[name='consultant_content']").val();
    //if ($consultant == "") {
    //  $(".form4 textarea[name='consultant_content']").parent().find('.u-hide').removeClass('u-hide');
    //  $flag9 = false;
    //} else {
    //  $(".form4 textarea[name='consultant_content']").parent().find('span').addClass('u-hide');
    //  $flag9 = true;
    //}
    
    //confirm_page going
    if (($flag1 == true) && ($flag2 == true) && ($flag3 == true) && ($flag4 == true) && ($flag5 == true)) {
      $(".form4 input[name='namae4']").prop('disabled', true);
      $(".form4 input[name='namaekana4']").prop('disabled', true);
      $(".form4 input[name='phone_number']").prop('disabled', true);
      $(".form4 input[name='e-mail']").prop('disabled', true);
      $(".form4 input[name='post_number']").prop('disabled', true);
      $(".form4 input[name='address']").prop('disabled', true);
      $(".form4 #select-repair").prop('disabled', true);
      $(".form4 #select-year").prop('disabled', true);
      $(".form4 textarea[name='consultant_content']").prop('disabled', true);
      $(this).addClass('u-hide');
      $('.form4 .c-confirm-page-button').removeClass('u-hide');
      $('.form4').attr('onsubmit', 'return true;');
    }
  });
  
  //fix button click
  $('.form4 .c-fix-button').click(function() {
    $(".form4 input[name='namae4']").prop('disabled', false);
    $(".form4 input[name='namaekana4']").prop('disabled', false);
    $(".form4 input[name='phone_number']").prop('disabled', false);
    $(".form4 input[name='e-mail']").prop('disabled', false);
    $(".form4 input[name='post_number']").prop('disabled', false);
    $(".form4 input[name='address']").prop('disabled', false);
    $(".form4 #select-repair").prop('disabled', false);
    $(".form4 #select-year").prop('disabled', false);
    $(".form4 textarea[name='consultant_content']").prop('disabled', false);
    $('.form4 .c-confirm-page-button').addClass('u-hide');
    $('.form4 .c-validation-button').removeClass('u-hide');
  });

  //submit button click
  $('.form4 .c-submit-button').click(function() {
    $('.form4').attr('onsubmit', 'return true;');
    $(".form4 input[name='namae4']").prop('disabled', false);
    $(".form4 input[name='namaekana4']").prop('disabled', false);
    $(".form4 input[name='phone_number']").prop('disabled', false);
    $(".form4 input[name='e-mail']").prop('disabled', false);
    $(".form4 input[name='post_number']").prop('disabled', false);
    $(".form4 input[name='address']").prop('disabled', false);
    $(".form4 #select-repair").prop('disabled', false);
    $(".form4 #select-year").prop('disabled', false);
    $(".form4 textarea[name='consultant_content']").prop('disabled', false);
  });
});


//form5 validation
$(function() {
  $(".form5 .c-validation-button").click(function() {
    var $flag = false;
    $('.form5').attr('onsubmit', 'return false;');
    //namae validation
    var $namae = $(".form5 input[name='namae5']").val();
    if ($namae == "") {
      $(".form5 input[name='namae5']").parent().find('.u-hide').removeClass('u-hide');
      $flag1 = false;
    } else {
      $(".form5 input[name='namae5']").parent().find('span').addClass('u-hide');
      $flag1 = true;
    }
    //furigana validation
    var $furigana = $(".form5 input[name='namaekana5']").val();
    if ($furigana == "") {
      $(".form5 input[name='namaekana5']").parent().find('.u-hide').removeClass('u-hide');
      $flag2 = false;
    } else {
      $(".form5 input[name='namaekana5']").parent().find('span').addClass('u-hide');
      $flag2 = true;
    }
    //phone validation
    var $regexp_phone = /^[0-9-+]+$/;
    var $phone = $(".form5 input[name='phone_number']").val();
    if ($phone == "" || !$phone.match($regexp_phone)) {
      $(".form5 input[name='phone_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag3 = false;
    } else {
      $(".form5 input[name='phone_number']").parent().find('span').addClass('u-hide');
      $flag3 = true;
    }
    //e-mail validation
    var $regexp_mail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var $mail = $(".form5 input[name='e-mail']").val();
    if ($mail == "" || !$mail.match($regexp_mail)) {
      $(".form5 input[name='e-mail']").parent().find('.u-hide').removeClass('u-hide');
      $flag4 = false;
    } else {
      $(".form5 input[name='e-mail']").parent().find('span').addClass('u-hide');
      $flag4 = true;
    }
    
    //address validation
    var $regexp_post = /^[0-9-+]+$/;
    var $post = $(".form5 input[name='post_number']").val();
    var $address = $(".form5 input[name='address']").val();
    if ($post == "" || !$post.match($regexp_post) || $address == "") {
      $(".form5 input[name='post_number']").parent().find('.u-hide').removeClass('u-hide');
      $flag5 = false;
    } else {
      $(".form5 input[name='post_number']").parent().find('span').addClass('u-hide');
      $flag5 = true;
    }
    
    // repair select validation
    //var $repair = $(".form5 #select-repair").children('option:selected').val();
    //if ($repair == "") {
    //  $(".form5 #select-repair").parent().find('.u-hide').removeClass('u-hide');
    //  $flag7 = false;
    //} else {
    //  $(".form5 #select-repair").parent().find('span').addClass('u-hide');
    //  $flag7 = true;
    //}
    
    // year select validation
    //var $year = $(".form5 #select-year").children('option:selected').val();
    //if ($year == "") {
    //  $(".form5 #select-year").parent().find('.u-hide').removeClass('u-hide');
    //  $flag8 = false;
    //} else {
    //  $(".form5 #select-year").parent().find('span').addClass('u-hide');
    //  $flag8 = true;
    //}
    
    //textarea validation
    //var $consultant = $(".form5 textarea[name='consultant_content']").val();
    //if ($consultant == "") {
    //  $(".form5 textarea[name='consultant_content']").parent().find('.u-hide').removeClass('u-hide');
    //  $flag9 = false;
    //} else {
    //  $(".form5 textarea[name='consultant_content']").parent().find('span').addClass('u-hide');
    //  $flag9 = true;
    //}
    
    //confirm_page going
    if (($flag1 == true) && ($flag2 == true) && ($flag3 == true) && ($flag4 == true) && ($flag5 == true)) {
      $(".form5 input[name='namae5']").prop('disabled', true);
      $(".form5 input[name='namaekana5']").prop('disabled', true);
      $(".form5 input[name='phone_number']").prop('disabled', true);
      $(".form5 input[name='e-mail']").prop('disabled', true);
      $(".form5 input[name='post_number']").prop('disabled', true);
      $(".form5 input[name='address']").prop('disabled', true);
      $(".form5 #select-repair").prop('disabled', true);
      $(".form5 #select-year").prop('disabled', true);
      $(".form5 textarea[name='consultant_content']").prop('disabled', true);
      $(this).addClass('u-hide');
      $('.form5 .c-confirm-page-button').removeClass('u-hide');
      $('.form5').attr('onsubmit', 'return true;');
    }
  });
  
  //fix button click
  $('.form5 .c-fix-button').click(function() {
    $(".form5 input[name='namae5']").prop('disabled', false);
    $(".form5 input[name='namaekana5']").prop('disabled', false);
    $(".form5 input[name='phone_number']").prop('disabled', false);
    $(".form5 input[name='e-mail']").prop('disabled', false);
    $(".form5 input[name='post_number']").prop('disabled', false);
    $(".form5 input[name='address']").prop('disabled', false);
    $(".form5 #select-repair").prop('disabled', false);
    $(".form5 #select-year").prop('disabled', false);
    $(".form5 textarea[name='consultant_content']").prop('disabled', false);
    $('.form5 .c-confirm-page-button').addClass('u-hide');
    $('.form5 .c-validation-button').removeClass('u-hide');
  });

  //submit button click
  $('.form5 .c-submit-button').click(function() {
    $('.form5').attr('onsubmit', 'return true;');
    $(".form5 input[name='namae5']").prop('disabled', false);
    $(".form5 input[name='namaekana5']").prop('disabled', false);
    $(".form5 input[name='phone_number']").prop('disabled', false);
    $(".form5 input[name='e-mail']").prop('disabled', false);
    $(".form5 input[name='post_number']").prop('disabled', false);
    $(".form5 input[name='address']").prop('disabled', false);
    $(".form5 #select-repair").prop('disabled', false);
    $(".form5 #select-year").prop('disabled', false);
    $(".form5 textarea[name='consultant_content']").prop('disabled', false);
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
//        duration: 1000,
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
//        duration: 1000,
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