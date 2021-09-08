/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/camp.js ***!
  \******************************/
// window.onload = function () {
//   console.error(111);
// }



$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() != 0) {
      $('#toTop').fadeIn();
    } else {
      $('#toTop').fadeOut();
    }
  });
  $('#toTop').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 0);
  });
});

function SlowScroll(id) {
  var offset = 0;
$('html, body').animate({
      scrollTop: $(id).offset ().top - offset
  }, 0);

  return false;
}


let sulka = document.querySelectorAll(".sulka");
console.log(sulka[0])
for(let a = 2; a < sulka.length; a++){
  if(a == 2){
    sulka[a].addEventListener("click", function () {
      $('html, body').animate({
        scrollTop: $('.block_awaits_you').offset ().top - 0
    }, 0);
    });
  }
  if(a == 3){
    sulka[a].addEventListener("click", function () {
      $('html, body').animate({
        scrollTop: $('.Enter').offset ().top - 0
    }, 0);
    });
  }
  if(a == 4){
    sulka[a].addEventListener("click", function () {
      $('html, body').animate({
        scrollTop: $('.teachers').offset ().top - 0
    }, 0);
    });
  }
  if(a == 5){
    sulka[a].addEventListener("click", function () {
      $('html, body').animate({
        scrollTop: $('.galery').offset ().top - 0
    }, 0);
    });
  }
  if(a == 6){
    sulka[a].addEventListener("click", function () {
      $('html, body').animate({
        scrollTop: $('.reviews').offset ().top - 0
    }, 0);
    });
  }
}



$(document).ready(function() {
  $('.header_burger').click(function(event){
     $('.header_burger,.header_menu,.socset').toggleClass('active');
     $('body').toggleClass('lock');
 });
 $('.button_2und').click(function(event){
   $('.header_menu1,.button_2und, .button_2und span').toggleClass('active');
   $('body').toggleClass('lock');
 })
  $('.button_3und').click(function(event){
    $('.header_menu2,.button_3und, .button_3und span').toggleClass('active');
    $('body').toggleClass('lock');
  })
  $('.selectBox1').click(function(event){
   $('.header_menu2,.button_3und, .button_3und span').toggleClass('active');
   $('body').toggleClass('lock');
 })
});







$(function () {
  $('.rev_slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: true,
    responsive: [{
      breakpoint: 924,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
     } // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
}); // $(document).ready(function(){
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



console.log("111");
const BigImg = document.getElementsByClassName('gallery_item');
if(BigImg.length >= 5){
  BigImg[0].classList.add('gallery_item_big');
  BigImg[5].classList.add('gallery_item_big');

}
const body = document.querySelector('body');

let unlock = true;

const timeout = 800;
// if(popupLinks){
    function POPUP(arg) {
      const curentPopup = document.getElementById('popup');
    
      var cart = arg.src;
      popupOpen(curentPopup, cart);
    }
    for(let a = 0; a < BigImg.length; a++){
      BigImg[a].addEventListener("click", function (arg) {
        const curentPopup = document.getElementById('popup');
      
        var cart = arg.path[0].src;
        // console.log(arg.path[0]);
        popupOpen(curentPopup, cart);
      });
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








var popuppLinks = document.getElementsByClassName('popupp-link');
var bodyy = document.querySelector('body');
var unlockk = true;
var timeoutt = 800;
for(let a = 0; a < popuppLinks.length; a++){
popuppLinks[a].addEventListener("click", function (e) {
  var curentPopupp = document.getElementsByClassName('popupp');
  // for(let b = 0; b < curentPopupp.length; b++){
  popupOpenn(curentPopupp[a]);
  // }
  e.preventDefault();

});
}

function popupOpenn(curentPopupp) {
  if (curentPopupp && unlockk) {
    var popupActivee = document.querySelector('.popupp.open');

    if (popupActivee) {
      popupClosee(popupActivee, false);
    } else {
      bodyLockk();
    }

    curentPopupp.classList.add('open');
    curentPopupp.addEventListener("click", function (e) {
      if (!e.target.closest('.popupp_content')) {
        popupClosee(e.target.closest('.popupp'));
      }
    });
  }
}

function popupClosee(popupActivee) {
  var doUnlockk = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;

  if (unlockk) {
    popupActivee.classList.remove('open');

    if (doUnlockk) {
      bodyUnlockk();
    }
  }
}

function bodyLockk() {
  bodyy.classList.add('lock');
  unlockk = false;
  setTimeout(function () {
    unlockk = true;
  }, timeoutt);
}

function bodyUnlockk() {
  setTimeout(function () {
    bodyy.classList.remove('lock');
  }, timeoutt);
}



/* этот код помечает картинки, для удобства разработки */
let i = 1;
for(let li of carousel.querySelectorAll('li')) {
  li.style.position = 'relative';
//   li.insertAdjacentHTML('beforeend', `<span style="position:absolute;left:0;top:0">${i}</span>`);
  i++;
}


var Trans = document.getElementsByClassName('images');
/* конфигурация */
  var width = (window.innerWidth)*20/100; // ширина картинки
console.log(window.innerWidth);
let count = 1; // видимое количество изображений

let list = carousel.querySelector('ul');
let listElems = carousel.querySelectorAll('li');

let position = 0; // положение ленты прокрутки

var LiLi = document.getElementsByClassName("lili");


var arrImg = document.getElementsByClassName("teach");
var countt = 2;
var ccount = 1;
var ccountt = 3;
var countWidth = 0;
var countMarginOne = 0;
var countMarginTwo = 1;
// var MarginOne = 140;
// var MarginTwo = 200;

  arrImg[ccount].classList.add('heigthh');
  arrImg[countt].classList.add('heigth');
  arrImg[ccountt].classList.add('heigthh');

    var offsetWidth = (window.innerWidth)*9/100;
    var offsetWidthh = (window.innerWidth)*12/100;

  var MarginOne = offsetWidth;
    var MarginTwo = offsetWidthh;

  LiLi[countMarginOne].style.marginRight = MarginOne + 'px';
LiLi[countMarginOne+3].style.marginRight = MarginOne + 'px';
LiLi[countMarginOne+4].style.marginRight = MarginOne + 'px';
LiLi[countMarginTwo].style.marginRight = MarginTwo + 'px';
LiLi[countMarginTwo+1].style.marginRight = MarginTwo + 'px';


carousel.querySelector('.prev').onclick = function() {
  // сдвиг влево

  position += width * count;
  // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
  position = Math.min(position, 0)
  list.style.marginLeft = position + 'px';
  if(countt > 2){
    countMarginOne--;
    countMarginTwo--;
    LiLi[countMarginOne].style.marginRight = MarginOne + 'px';
    LiLi[countMarginOne+3].style.marginRight = MarginOne + 'px';
    LiLi[countMarginOne+4].style.marginRight = MarginOne + 'px';
    LiLi[countMarginTwo].style.marginRight = MarginTwo + 'px';
    LiLi[countMarginTwo+1].style.marginRight = MarginTwo + 'px';

    arrImg[countt].classList.remove('heigth');
    countt--;
    arrImg[countt].classList.add('heigth');

    arrImg[ccount].classList.remove('heigthh');
    ccount--;
    arrImg[ccount].classList.add('heigthh');

    arrImg[ccountt].classList.remove('heigthh');
    ccountt--;
    arrImg[ccountt].classList.add('heigthh');
  }

  // countWidth--;
};
// }


  // if(countWidth < arrImg.length){
carousel.querySelector('.next').onclick = function() {
 
  // console.log(countWidth);
  // console.log(arrImg.length-1);
    // console.log(countt);
    // countWidth++;
  // сдвиг вправо
  position -= width;
  // последнее передвижение вправо может быть не на 3, а на 2 или 1 элемент
  // position = Math.max(position, -width * (listElems.length - count - 4));
  list.style.marginLeft = position + 'px';

  if(countt < arrImg.length-3){
    Trans[0].style.transitionDuration = 500 + 'ms';
    countMarginOne++;
    countMarginTwo++;
    LiLi[countMarginOne].style.marginRight = MarginOne + 'px';
    LiLi[countMarginOne+3].style.marginRight = MarginOne + 'px';
    LiLi[countMarginOne+4].style.marginRight = MarginOne + 'px';
    LiLi[countMarginTwo].style.marginRight = MarginTwo + 'px';
    LiLi[countMarginTwo+1].style.marginRight = MarginTwo + 'px';

    arrImg[countt].classList.remove('heigth');
    countt++;
    arrImg[countt].classList.add('heigth');

    arrImg[ccount].classList.remove('heigthh');
    ccount++;
    arrImg[ccount].classList.add('heigthh');

    arrImg[ccountt].classList.remove('heigthh');
    ccountt++;
    arrImg[ccountt].classList.add('heigthh');
  }
  if(countt === arrImg.length-3){
    Trans[0].style.transitionDuration = 0 + 's';
    arrImg[countt].classList.remove('heigth');
    arrImg[ccount].classList.remove('heigthh');
    arrImg[ccountt].classList.remove('heigthh');
    position = 0;
    countt = 2;
    ccount = 1;
    ccountt = 3;
    countWidth = 0;
    countMarginOne = 0;
    countMarginTwo = 1;
    list.style.marginLeft = 0 + 'px';

    arrImg[countt].classList.add('heigth');

   
    arrImg[ccount].classList.add('heigthh');

    arrImg[ccountt].classList.add('heigthh');

    LiLi[countMarginOne].style.marginRight = MarginOne + 'px';
    LiLi[countMarginOne+3].style.marginRight = MarginOne + 'px';
    LiLi[countMarginOne+4].style.marginRight = MarginOne + 'px';
    LiLi[countMarginTwo].style.marginRight = MarginTwo + 'px';
    LiLi[countMarginTwo+1].style.marginRight = MarginTwo + 'px';
  }
  // else{
  //   countt = 2;
  //   ccount = 1;
  //   ccountt = 3;
  //   countWidth = 0;
  //   countMarginOne = 0;
  //   countMarginTwo = 1;
  // }

};
  // }

/******/ })()
;


