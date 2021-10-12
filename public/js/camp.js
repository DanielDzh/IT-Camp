/******/ (() => { // webpackBootstrap
  var __webpack_exports__ = {};
  /*!******************************!*\
    !*** ./resources/js/camp.js ***!
    \******************************/
  const title = window.document.title;
  const url = window.document.location.href;

  const $button_1 = document.querySelector('.popupp-link')
  const $button_2 = document.querySelector('.popupp')

  if (navigator.share) {
    $button_1.addEventListener('click', share)
    function share() {
      navigator.share({
        title: `${title}`,
        url: `${url}`
      })
        .then(() => {
          alert('успіх')
        })
        .catch(() => {
          alert('помилка')
        })
    }
    $button_2.addEventListener('click', share)
    function share() {
      navigator.share({
        title: `${title}`,
        url: `${url}`
      })
        .then(() => {
          alert('успіх')
        })
        .catch(() => {
          alert('помилка')
        })
    }
  } else {
    alert('не підтримує')
  }


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
      scrollTop: $(id).offset().top - offset
    }, 0);

    return false;
  }


  let sulka = document.querySelectorAll(".sulka");
  console.log(sulka.length);
  for (let a = 2; a < sulka.length; a++) {
    if (a == 2) {
      sulka[a].addEventListener("click", function () {
        $('html, body').animate({
          scrollTop: $('.block_awaits_you').offset().top - 0
        }, 0);
      });
    }
    if (a == 3) {
      sulka[a].addEventListener("click", function () {
        $('html, body').animate({
          scrollTop: $('.Enter').offset().top - 0
        }, 0);
      });
    }
    if (a == 4) {
      sulka[a].addEventListener("click", function () {
        $('html, body').animate({
          scrollTop: $('.teachers').offset().top - 0
        }, 0);
      });
    }
    if (a == 5) {
      sulka[a].addEventListener("click", function () {
        $('html, body').animate({
          scrollTop: $('.galery').offset().top - 0
        }, 0);
      });
    }
    if (a == 6) {
      sulka[a].addEventListener("click", function () {
        $('html, body').animate({
          scrollTop: $('.reviews').offset().top - 0
        }, 0);
      });
    }
  }



  $(document).ready(function () {
    $('.header_burger').click(function (event) {
      $('.header_burger,.header_menu,.socset').toggleClass('active');
      $('body').toggleClass('lock');
    });
    $('.button_2und').click(function (event) {
      $('.header_menu1,.button_2und, .button_2und span').toggleClass('active');
      $('body').toggleClass('lock');
    })
    $('.button_3und').click(function (event) {
      $('.header_menu2,.button_3und, .button_3und span').toggleClass('active');
      $('body').toggleClass('lock');
    })
    $('.selectBox1').click(function (event) {
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
  });

  $(function () {
    $('.teach_slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      dots: false,
      responsive: [{
        breakpoint: 924,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        }
      }
      ]
    });
  });


  const BigImg = document.getElementsByClassName('gallery_item');
  if (BigImg.length >= 5) {
    BigImg[0].classList.add('gallery_item_big');
    BigImg[6].classList.add('gallery_item_big');

  }
  const body = document.querySelector('body');

  let unlock = true;

  const timeout = 800;
  function POPUP(arg) {
    const curentPopup = document.getElementById('popup');

    var cart = arg.src;
    popupOpen(curentPopup, cart);
  }
  for (let a = 0; a < BigImg.length; a++) {
    BigImg[a].addEventListener("click", function (arg) {
      const curentPopup = document.getElementById('popup');

      var cart = arg.path[0].src;
      popupOpen(curentPopup, cart);
    });
  }

  function popupOpen(curentPopup, cart) {
    if (curentPopup && unlock) {
      const popupActive = document.querySelector('.popup.open');
      if (popupActive) {
        popupClose(popupActive, false);
      } else {
        bodyLock();
      }
      curentPopup.classList.remove('gray');
      document.querySelector('#popup_content').innerHTML = '<img src = "' + cart + '">';
      curentPopup.classList.add('open');
      curentPopup.addEventListener("click", function (e) {
        if (!e.target.closest('.popup_content')) {
          popupClose(e.target.closest('.popup'));
        }
      });
    }
  }

  function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
      popupActive.classList.remove('open');
      if (doUnlock) {
        bodyUnlock();
      }
    }
  }

  function bodyLock() {
    body.classList.add('lock');

    unlock = false;
    setTimeout(function () {
      unlock = true;
    }, timeout);
  }

  function bodyUnlock() {
    setTimeout(function () {
      body.classList.remove('lock');
    }, timeout)
  }





  var bod = document.querySelector("body");
  bod.style.paddingBottom = "0px";
  var error = document.querySelectorAll(".sharethis-sticky-share-buttons");
  error[0].style.left = "25px";
  error[0].style.top = "0px";
  error[0].style.position = "relative";
  error[1].style.left = "-25px";
  error[1].style.top = "0px";
  error[1].style.position = "relative";
  var popuppLinks = document.getElementsByClassName('popupp-link');
  var bodyy = document.querySelector('body');
  var unlockk = true;
  var timeoutt = 800;
  for (let a = 0; a < popuppLinks.length; a++) {
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
      error[0].style.display = "block";
      error[1].style.display = "block";
      error[0].style.position = "fixed";
      error[1].style.position = "fixed";
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
      error[0].style.display = "none";
      error[1].style.display = "none";
      error[0].style.position = "relative";
      error[1].style.position = "relative";
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

  // console.log(window.outerWidth);
  // if (window.outerWidth > 930) {
  //   window.onload = function () {
  //     var arrImg = document.querySelectorAll(".teach_slider .slide");
  //     var ind = [];
  //     for (let a = 0; a < arrImg.length; a++) {
  //       ind[a] = arrImg[a].dataset.slickIndex;
  //       // console.log(ind[a]);
  //     }
  //     // console.log(arrImg[8]);
  //     // console.log(arrImg[8].dataset.slickIndex);
  //     var ccount = 0;
  //     var countWidth = 0;
  //     arrImg[ccount + 4].querySelector('.teach').classList.add('heigthhh');
  //     arrImg[ccount + 5].querySelector('.teach').classList.add('heigthhh');
  //     arrImg[ccount + 6].querySelector('.teach').classList.add('heigthh');
  //     arrImg[ccount + 7].querySelector('.teach').classList.add('heigth');
  //     arrImg[ccount + 8].querySelector('.teach').classList.add('heigthh');
  //     arrImg[ccount + 9].querySelector('.teach').classList.add('heigthhh');
  //     arrImg[ccount + 10].querySelector('.teach').classList.add('heigthhh');

  //     var next = document.getElementsByClassName("slick-next");
  //     next[0].classList.add('nextt');
  //     var prev = document.getElementsByClassName("slick-prev");
  //     prev[0].classList.add('prevv');

  //     document.querySelector('.prevv').onclick = function () {
  //       if (ccount !== -1) {
  //         arrImg[ccount + 4].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 5].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 9].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 10].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 6].querySelector('.teach').classList.remove('heigthh');
  //         arrImg[ccount + 8].querySelector('.teach').classList.remove('heigthh');
  //         arrImg[ccount + 7].querySelector('.teach').classList.remove('heigth');
  //         ccount--;
  //         console.log(ccount)
  //         arrImg[ccount + 4].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 5].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 9].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 10].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 6].querySelector('.teach').classList.add('heigthh');
  //         arrImg[ccount + 8].querySelector('.teach').classList.add('heigthh');
  //         arrImg[ccount + 7].querySelector('.teach').classList.add('heigth');
  //       }
  //       if (ccount === -1) {
  //         arrImg[ccount + 4].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 5].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 9].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 10].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 6].querySelector('.teach').classList.remove('heigthh');
  //         arrImg[ccount + 8].querySelector('.teach').classList.remove('heigthh');
  //         arrImg[ccount + 7].querySelector('.teach').classList.remove('heigth');
  //         ccount = arrImg.length - 12;

  //         arrImg[ccount + 4].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 5].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 9].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 10].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 6].querySelector('.teach').classList.add('heigthh');
  //         arrImg[ccount + 8].querySelector('.teach').classList.add('heigthh');
  //         arrImg[ccount + 7].querySelector('.teach').classList.add('heigth');
  //       }

  //     };
  //     // }


  //     // if(countWidth < arrImg.length){
  //     document.querySelector('.nextt').onclick = function () {
  //       // console.log("111")
  //       // if(countt < arrImg.length-3){
  //       // Trans[0].style.transitionDuration = 500 + 'ms';
  //       if (ccount !== arrImg.length - 11) {
  //         arrImg[ccount + 4].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 5].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 9].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 10].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 6].querySelector('.teach').classList.remove('heigthh');
  //         arrImg[ccount + 8].querySelector('.teach').classList.remove('heigthh');
  //         arrImg[ccount + 7].querySelector('.teach').classList.remove('heigth');
  //         ccount++;
  //         console.log(ccount)
  //         arrImg[ccount + 4].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 5].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 9].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 10].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 6].querySelector('.teach').classList.add('heigthh');
  //         arrImg[ccount + 8].querySelector('.teach').classList.add('heigthh');
  //         arrImg[ccount + 7].querySelector('.teach').classList.add('heigth');
  //       }
  //       if (ccount === arrImg.length - 11) {
  //         arrImg[ccount + 4].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 5].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 9].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 10].querySelector('.teach').classList.remove('heigthhh');
  //         arrImg[ccount + 6].querySelector('.teach').classList.remove('heigthh');
  //         arrImg[ccount + 8].querySelector('.teach').classList.remove('heigthh');
  //         arrImg[ccount + 7].querySelector('.teach').classList.remove('heigth');
  //         // position = 0;
  //         // countt = 2;
  //         ccount = 0;


  //         arrImg[ccount + 4].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 5].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 9].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 10].querySelector('.teach').classList.add('heigthhh');
  //         arrImg[ccount + 6].querySelector('.teach').classList.add('heigthh');
  //         arrImg[ccount + 8].querySelector('.teach').classList.add('heigthh');
  //         arrImg[ccount + 7].querySelector('.teach').classList.add('heigth');
  //       }
  //     }
  //   };
  // }
  // else {
  //   arrImg[ccount + 4].querySelector('.teach').classList.remove('heigthhh');
  //   arrImg[ccount + 5].querySelector('.teach').classList.remove('heigthhh');
  //   arrImg[ccount + 9].querySelector('.teach').classList.remove('heigthhh');
  //   arrImg[ccount + 10].querySelector('.teach').classList.remove('heigthhh');
  //   arrImg[ccount + 6].querySelector('.teach').classList.remove('heigthh');
  //   arrImg[ccount + 8].querySelector('.teach').classList.remove('heigthh');
  //   arrImg[ccount + 7].querySelector('.teach').classList.remove('heigth');
  // }




  var forEach = function (array, callback, scope) {
    for (var i = 0; i < array.length; i++) {
      callback.call(scope, i, array[i]);
    }
  };

  var spinner = document.querySelector("#spinner"),
    angle = 0,
    images = document.querySelectorAll("#spinner figure"),
    numpics = images.length,
    degInt = 360 / numpics,
    start = 0,
    current = 1;

  forEach(images, function (index, value) {
    images[index].style.webkitTransform = "rotateY(-" + start + "deg)";
    images[index].style.transform = "rotateY(-" + start + "deg)";
    images[index].addEventListener("click", function () {
      if (this.classList.contains('current')) {
        this.classList.toggle("focus");
      }
    })
    start = start + degInt;
  });

  function setCurrent(current) {
    document.querySelector('figure#spinner figure:nth-child(' + current + ')').classList.add('current');
  }
  var ss_icon = document.querySelectorAll(".ss-icon");

  ss_icon[1].addEventListener("click", function galleryspin() {
    forEach(images, function (index, value) {
      images[index].classList.remove('current');
      images[index].classList.remove('focus');
      images[index].classList.remove('caption');
    })

    angle = angle - degInt;
    current = current - 1;
    if (current == 0) {
      current = numpics;
    }

    spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg)");
    setCurrent(current);
  })
  ss_icon[0].addEventListener("click", function galleryspin() {
    forEach(images, function (index, value) {
      images[index].classList.remove('current');
      images[index].classList.remove('focus');
      images[index].classList.remove('caption');
    })

    angle = angle + degInt;
    current = (current + 1);
    if (current > numpics) {
      current = 1;
    }

    spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg)");
    setCurrent(current);
  })
  document.body.onkeydown = function (e) {
    switch (e.which) {
      case 37: // left cursor
        galleryspin('-');
        break;

      case 39: // right cursor
        galleryspin('');
        break;

      case 90: // Z - zoom image in forefront image
        document.querySelector('figure#spinner figure.current').classList.toggle('focus');
        break;

      case 67: // C - show caption for forefront image
        document.querySelector('figure#spinner figure.current').classList.toggle('caption');
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault();
  }

  function mouseMove() {

  }

  function mouseUp() {
    document.removeEventListener("mousemove", mouseMove, false);
    document.removeEventListener("mouseup", mouseUp, false);
  }

  spinner.addEventListener("mousedown", function (e) {
    var startX = e.pageX;

    document.addEventListener("mousemove", mouseMove, false);
    document.addEventListener("mouseup", mouseUp, false);
  }, false);

  setCurrent(1);
  // }

  /******/


})()
  ;


