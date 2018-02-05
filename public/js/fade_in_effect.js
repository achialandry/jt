AOS.init({
  duration: 500,
})

//nav bar active animations
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).toggleClass("active");
});
});



$(document).ready(function () {
    $('body').scrollspy({ target: '#jtabc-nav' });
    // var links = $('.navbar ul li a');
    // $.each(links, function (key, va) {
    //     if (va.href == document.URL) {
    //         $(this).addClass('active');
    //     }
    // });
});

//script for contact form google map
function initMap() {} //global variable for init map
$(() => {
    initMap = function(){
        var jtabc = {lat: 49.133341, lng: -122.889881};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 4,
                  center: jtabc
                });
                var marker = new google.maps.Marker({
                  position: jtabc,
                  map: map
                });
    }
})




//Contact form validation
//
// function validateForm() {
//     var name =  document.getElementById('name').value;
//     if (name == "") {
//         document.getElementById('status').innerHTML = "Name is required";
//         return false;
//     }
//     var name =  document.getElementById('phone').value;
//     if (name == "") {
//         document.getElementById('status').innerHTML = "Phone number is required";
//         return false;
//     }
//     var email =  document.getElementById('email').value;
//     if (email == "") {
//         document.getElementById('status').innerHTML = "Email is required";
//         return false;
//     } else {
//         var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//         if(!re.test(email)){
//             document.getElementById('status').innerHTML = "Invalid Email format";
//             return false;
//         }
//     }
//     var subject =  document.getElementById('subject').value;
//     if (subject == "") {
//         document.getElementById('status').innerHTML = "Subject cannot be empty";
//         return false;
//     }
//     var message =  document.getElementById('message').value;
//     if (message == "") {
//         document.getElementById('status').innerHTML = "Message cannot be empty";
//         return false;
//     }
//     document.getElementById('status').innerHTML = "Sending...";
//     document.getElementById('contact-form').submit();
//
// }

//ajax call for sending without page reload
// document.getElementById('status').innerHTML = "Sending...";
// formData = {
//     'name'     : $('input[name=name]').val(),
//     'address'    : $('input[name=address]').val(),
//     'phone'    : $('input[name=phone]').val(),
//     'city'    : $('input[name=city]').val(),
//     'province'    : $('input[name=province]').val(),
//     'postal'    : $('input[name=postal]').val(),
//     'country'    : $('input[name=country]').val(),
//     'email'    : $('input[name=email]').val(),
//     'subject'  : $('input[name=subject]').val(),
//     'message'  : $('textarea[name=message]').val()
// };
//
//
// $.ajax({
// url : "mail.php",
// type: "POST",
// data : formData,
// success: function(data, textStatus, jqXHR)
// {

//     $('#status').text(data.message);
//     if (data.code) //reset the form. after email is sent
//     $('#contact-form').closest('form').find("input[type=text], textarea").val("");
// },
// error: function (jqXHR, textStatus, errorThrown)
// {
//     $('#status').text(jqXHR);
// }
// });

$.each($('*'), function() { if ($(this).width() > $('body').width()) { console.log($(this).get(0)); } }).length;


popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });

    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.project-gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()
