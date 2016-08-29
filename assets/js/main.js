jQuery(document).ready(function($) {
// ----deyisenler----
var deg=0;
var count = 0;
var nav_s = $('.navbar-toggle');  
var window_s = $("html,body");
var collapse_s = $("#myCollapse");
var i;

//-------------- preloader -------------//
	$(window).load(function() {   
		$('#circle')
			var rotate=setInterval(function(){
				deg=deg+60;
				$('#circle').css({'transform':'rotate('+deg+'deg)'});
			},120);
			$(this)
			.animate({
				'transform':'rotate('+deg+'deg)'
				},500, function() {clearInterval(rotate);})

			.delay(500)
			.fadeOut('slow');			
		$('#preloader')
			.delay(500)
			.fadeOut('slow');
	    $('body')
	   		.delay(500)
	   		.css({overflow: 'visible'});
	    $('#home .container')
	   		.delay(1000)
	    	.fadeIn(500);
	});

//home hissenin hundurluyunu teyin etmek
var window_height = $(window).height(); 
$("#home").css({height: window_height});

//---------- collapsing ---------------//
nav_s.on('click', function(e) {
	e.preventDefault()
	if(count==0){
		collapsing();
	}
	else{
		nonecollapse();
	}
});	
	function nonecollapse() {
		count=0;
		nav_s.animate({left: '0'}, 500);
		window_s.animate({marginLeft: '0'}, 500);
		collapse_s.animate({right:'-270px'}, 500);
	}
	function collapsing() {
		count=1;
		nav_s.animate({left: '-245px'}, 500);
		window_s.animate({marginLeft: '-270px'}, 500);
		collapse_s.animate({right:'0'}, 500);
	}

//--------dropdown menu-----//
	$(' #header .dropdown').hover(function() {
       	$(this).children('.menu')
       	.stop()
		.slideToggle(500);
		$(this).children('.sub-menu')
		.stop()
		.toggle();
  	});

/* ------ window scrolla bagli functionlar ------*/
$(window).scroll(function(){
	var window_height = $(this).height();
	var top_height = $(this).scrollTop();
	onScroll();
 //nav-bar hisseye ait olan function
	if(count===1){
		nonecollapse();          
	}

//header-brand seklinin deyismesi
	if(top_height > window_height){
		$("#header").addClass('header1');
		$('.logo').attr('src','assets/images/logo-inverted.png');
		$('#scroll-top').css('display','block');
	}
	else{
		$("#header").removeClass('header1');
		$('.logo').attr('src','assets/images/logo.png');
		$('#scroll-top').css('display','none');
	}

//scroll olan zaman  active classinin menulara kecmesi
function onScroll(){
	$('#header .scroll a').each(function(){
		var currlink = $(this);
		var refElement = $(currlink.data('href'));
		if(refElement.offset().top-70<= top_height ){
			$('#header .scroll a').parent().removeClass('active');
			currlink.parent().addClass('active');
		}
		else{
			currlink.parent().removeClass('active');
		}
		console.log(refElement.offset().top);
		})
	}
		
//logo animations
	if(top_height > $('#logo').offset().top-window_height/1.5){
		i=1;
		var logo=setInterval(function (){
			$('#logo .img'+i).animate({'top':'0'},600)
			i++;
			if(i==6){
				clearInterval(logo);
			}
		}, 600);
	}

// scrolla bagli  animationlari
animation("#about .first-part #first-tab");
animation("#about .first-part #second-tab");
animation("#about .first-part #third-tab");
animation("#about .second-part .tech");
animation("#about .second-part .helmet");
animation("#feature .first-feature .img1");
animation("#feature .second-feature .right-animate");
animation("#feature .second-feature .left-animate");
animation("#feature .third-feature");
animation("#price");
animation("#feedback .first-feedback");
animation("#feedback .second-feedback");
animation("#team .row");
function animation(x){
if(top_height > $(x).offset().top-window_height/1.4){
		$(x).css("animation-play-state","running");
		$(x+' .right-animate').css("animation-play-state","running");
		$(x+' .left-animate').css("animation-play-state","running");
		$(x+' .top-animate').css("animation-play-state","running");
		$(x+' .bottom-animate').css("animation-play-state","running");
		$(x+' .scale-animate').css("animation-play-state","running");
		$(x+' .rotateX-animate').css("animation-play-state","running");
	}
}
});  

//------------ scrolling to sections --------//
  $('#header .scroll')
	.click(function() {
		var data=$(this).children('a').data('href');
		var offset=$(data).offset();
		$('#header .scroll').each(function() {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		$('html,body').animate({scrollTop:offset.top-70},1500);
		return false;
	});

//---------- scrolling-top ---------------//
 $('#scroll-top')
	.click(function(event) {
		$('html,body').animate({
			scrollTop:0},1500);
	});	


//----about hissedeki button tabs --->>-- first tab, second tab, third tab
 var tabselect=$('#about .first-part .btngroup a');
 var groupselect=$('#about .first-part .group');
	$(tabselect).click(function() {
		$(tabselect).removeClass('active');
		$(this).addClass('active');
		var data=$(this).data('href');
		$(groupselect).css({display: 'none'});
		$(data).css({display: 'block'});
		animation(data);
	});

// ----------- feature hissedeki bottom tabs ------------
 var lorem_s = $('#feature .first-feature .lorem');
 var img_s = $('#feature .first-feature .images');
	$(lorem_s).click(function() {
		$(lorem_s).removeClass('active');
		$(this).addClass('active');
		var img = $(this).data('img');
		$(img_s).css({display: 'none'});
		$(img).css({display: 'block'});
		if(img!=".img1"){
			animation1(img);
		}
	});


//click olunan zaman bas veren animationlar
function animation1(x){    
	$(x+' .right-animate').css("animation-play-state","running");
	$(x+' .rotateY-animate').css("animation-play-state","running");
	$(x+' .rotateX-animate').css("animation-play-state","running");
}
});



