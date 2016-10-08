// fancybox
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".search-images"); //find post
posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
var page = jQuery(".page"); //find page
page.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+page.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
  helpers : {
    overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

// main slider
var vh = $(window).height();
$('.main-slider .slide').height(vh-90);
$('.main-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  lazyLoad: 'ondemand',
  autoplay: true,
  autoplaySpeed: 7000,
  fade: true,
	responsive: [
		{
			breakpoint: 993,
			settings: {
				arrows: false
			}
		},
	]
});
// main slider
$('.events-slider').slick({
  dots: true,
  arrows: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  adaptiveHeight: true,
  lazyLoad: 'ondemand',
  autoplay: true,
  autoplaySpeed: 7000,
	responsive: [
		{
			breakpoint: 993,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 778,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 500,
			settings: {
				slidesToShow: 1,
			}
		},
	]
});

// burger menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.menu').slideToggle();
});


// tabs
(function(){
  function onTabClick(event){
    event.preventDefault(); // not go to tab content
    var actives = document.querySelectorAll('.active');
    // deactivate existing active tab and panel
    for (var i=0; i < actives.length; i++){
      actives[i].className = actives[i].className.replace('active', '');
    }
    // activate new tab and panel
    event.target.parentElement.className += ' active';
    document.getElementById(event.target.href.split('#')[1]).className += ' active';
  }
  var el = document.getElementById('nav-tab');
  if(el){el.addEventListener('click', onTabClick, false);}
})();

(function(){
  $('.tab-menu2 li').first().addClass('active');
  $('.tabs-container-wr .tabs-pane').first().addClass('active');
})();

// modal djanket
function getValue(val){
  $('.modaltitle h3').html(val);
  $('#zakazinput').val(val);
};
function send_form (id, file, message) {
  $('#'+id).submit(function() {
    var str = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: '/mail/'+file+'.php',
      data: str,
      success: function(msg){
        if(msg == 'OK'){
          result = '<div class="form-sended">'+message+'</div>';
          $('#'+id).html(result);
        }else{
          result = msg;
          $('#'+id).html(result);
        }
      }
    });
    return false;
  });
}
send_form('form-id', 'phpform', 'Спасибо, скоро мы с Вами свяжемся!');
send_form('myform', 'form', 'Спасибо, скоро мы с Вами свяжемся!');