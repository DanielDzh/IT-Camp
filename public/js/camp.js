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
    $('html, body').animate({
        scrollTop: $(id).offset ().top - offset
    }, 0);
    return false;
}
$(function(){
    $('.minimized').click(function(event) {

      var i_path = $(this).attr('src');
      $('body').toggleClass('lock');
      if(i_path == "img/photo_1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 8.png"></div>');
      }
      if(i_path == "img/19477294_1946391575600829_6258206423574036472_o 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 10.png"></div>');
      }
      if(i_path == "img/19466421_1946391262267527_1114287526017256070_o 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 401.png"></div>');
      }
      if(i_path == "img/19488882_1946391115600875_7131555583729776851_o 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 9.png"></div>');
      }
      if(i_path == "img/67256239_3048815508691758_9023575329385480192_n 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 7.png"></div>');
      }
      if(i_path == "img/67109154_3047712295468746_1315304305284087808_n 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 13.png"></div>');
      }
      if(i_path == "img/67243781_3041990022707640_7981304221116923904_n 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 15.png"></div>');
      }
      if(i_path == "img/67187357_3048817388691570_1381167834926678016_n 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 11.png"></div>');
      }
      if(i_path == "img/66330348_3030069857232990_6888324005942525952_n 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 12.png"></div>');
      }
      if(i_path == "img/66815275_3040748242831818_671679077744115712_n 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 14.png"></div>');
      }
      if(i_path == "img/19466501_1946391555600831_7029760963208071130_o 1.svg"){
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="img/Frame\ 411.png"></div>');
      }
      if(i_path == "img/19477294_1946391575600829_6258206423574036472_o 1.svg" || 
        i_path == "img/19466421_1946391262267527_1114287526017256070_o 1.svg" || 
        i_path == "img/19488882_1946391115600875_7131555583729776851_o 1.svg" ||
        i_path == "img/67187357_3048817388691570_1381167834926678016_n 1.svg"){
            $("#magnify").width("25%");
      }
      $('#magnify').css({
           left: ($(document).width() - $('#magnify').outerWidth())/2,
            right: ($(document).width() - $('#magnify').outerWidth())/4,
     // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
     top: ($(window).height() - $('#magnify').outerHeight())/8,
     bottom: ($(window).height() - $('#magnify').outerHeight())/4,

     });
      $('#overlay, #magnify').fadeIn('fast');
    });
    
    $('body').on('click', '#close-popup, #overlay', function(event) {
      event.preventDefault();

      $('#overlay, #magnify').fadeOut('fast', function() {
        $('#close-popup, #magnify, #overlay').remove();
        $('.lock').removeClass();
      });
    });
  });



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


