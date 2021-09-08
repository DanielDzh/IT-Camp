

// window.onload = function () {
//   console.error(111);
// }
$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},0);
    });
});

function SlowScroll(id){
    var offset = 0;
    console.log("111");
    // $('html, body').animate({
    //     scrollTop: $(id).offset ().top - offset
    // }, 0);
    return true;
}






console.log("111");
const BigImg = document.getElementsByClassName('gallery_item');
if(BigImg.length >= 5){
  BigImg[0].classList.add('gallery_item_big');
  BigImg[5].classList.add('gallery_item_big');

}
const popupLinks = document.getElementById('popup-link');
const body = document.querySelector('body');

let unlock = true;

const timeout = 800;
// if(popupLinks){
    function POPUP(arg) {
      const curentPopup = document.getElementById('popup');
    
      var cart = arg.src;
      popupOpen(curentPopup, cart);
    }
// }

function popupOpen(curentPopup, cart){
  if(curentPopup && unlock){
    const popupActive = document.querySelector('.popup.open');
    if(popupActive){
      popupClose(popupActive, false);
    } else {
      bodyLock();
    }
    curentPopup.classList.remove('gray');
    document.querySelector('#popup_content').innerHTML = '<img src = "'+cart+'">';
    curentPopup.classList.add('open');
    curentPopup.addEventListener("click", function (e) {
      if(!e.target.closest('.popup_content')){
        popupClose(e.target.closest('.popup'));
      }
    });
  }
}

function popupClose(popupActive, doUnlock = true){
  if(unlock){
    popupActive.classList.remove('open');
    if(doUnlock){
      bodyUnlock();
    }
  }
}

function bodyLock(){
  body.classList.add('lock');

  unlock = false;
  setTimeout(function (){
    unlock = true;
  }, timeout);
}

function bodyUnlock(){
  setTimeout(function() {
    body.classList.remove('lock');
  }, timeout)
}



$(function(){
  $('.rev_slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
})


// $(document).ready(function(){
// 	$('.slider').slick({
// 		arrows:true,
// 		// dots:true,
// 		centerMode:true,
// 		slidesToShow:3,
// 		autoplay:false,
// 		speed:1000,
// 		autoplaySpeed:800,
// 		centerPadding: 0,
// 		responsive:[
// 			{
// 				breakpoint: 768,
// 				settings: {
// 					slidesToShow:2
// 				}
// 			},
// 			{
// 				breakpoint: 550,
// 				settings: {
// 					slidesToShow:1
// 				}
// 			}
// 		]
// 	});
// });

const popupLinks = document.getElementById('popup-link');
const body = document.querySelector('body');

let unlock = true;

const timeout = 800;

    popupLinks.addEventListener("click", function (e) {
      const curentPopup = document.getElementById('popup');
      popupOpen(curentPopup);
      e.preventDefault();
    });

function popupOpen(curentPopup){
  if(curentPopup && unlock){
    const popupActive = document.querySelector('.popup.open');
    if(popupActive){
      popupClose(popupActive, false);
    } else {
      bodyLock();
    }
    curentPopup.classList.add('open');
    curentPopup.addEventListener("click", function (e) {
      if(!e.target.closest('.popup_content')){
        popupClose(e.target.closest('.popup'));
      }
    });
  }
}

function popupClose(popupActive, doUnlock = true){
  if(unlock){
    popupActive.classList.remove('open');
    if(doUnlock){
      bodyUnlock();
    }
  }
}

function bodyLock(){
  body.classList.add('lock');

  unlock = false;
  setTimeout(function (){
    unlock = true;
  }, timeout);
}

function bodyUnlock(){
  setTimeout(function() {
    body.classList.remove('lock');
  }, timeout)
}