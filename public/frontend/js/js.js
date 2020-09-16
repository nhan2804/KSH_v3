$('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    speed: 300,
    slidesToScroll: 3,
    autoplaySpeed :300,
    draggable: true,
    autoplay: true, /* this is the new line */
    autoplaySpeed: 2000,
    touchThreshold: 1000,
    dots: false,
    prevArrow: false,
    nextArrow: false
  });
  $(".page").hide();
$('.page').click(function() {
	$('body,html').animate({
	scrollTop: 0
	})
	});
	$(window).scroll(function () {
	var e = $(window).scrollTop();
	if (e > 300) {
		$(".page").show();
	} else {
		$(".page").hide();
	}
});
$('body .d-product-img-more').on('click', function(event) {
    $('.d-product-img-more').css('border', 'none');
    $(this).css('border', '2px solid var(--primary)');
    $('.img_pro--main').attr('src', $(this).attr('src'));
});
// $('body .d-product-img-more').on('click', function(event) {
    
// });
// var elements = document.getElementsByClassName("d-product-img-more");

// var myFunction = function() {
//     var newSrc = this.getAttribute("src");
//     this.style.border = "2px solid var(--primary)";
//     document.getElementsByClassName("d-product-main-img")[0].setAttribute('src', newSrc);

// };

// for (var i = 0; i < elements.length; i++) {
//     elements[i].addEventListener('click', myFunction, false);
// }
$('.d-product-img-more').eq(0).click(); 
$('.product__item--cate').on('click',  function(event) {
    // event.preventDefault();
    $(this).children('ul').show(400);
    $(this).children('i').toggleClass('rotate');
});

$('.navbar-mobile').hide();
$('.mobile-bar-icon').on('click', function() {
    $('.navbar-mobile').slideToggle();
    $(this).toggleClass('change');
}); 

$('.header__icon-search').on('click', function() {
    $('.navbar-mobile').hide();
    $('.mobile-bar-icon').removeClass('change');
})

$('.navbar-mobile-item').on('click', function() {
    $(this).children('.navbar-mobile-submenu').slideToggle();
    $(this).toggleClass('mobileMenuClicked');
});



