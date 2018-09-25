$.fn.resetTransform=function(){return $(this).css({'transform':'none','-moz-transform':'none','-webkit-transform':'none','-o-transform':'none','-ms-transform':'none'});};var pagestring=/#\/(blug|packlist|projects|about)$/i;var cpage=window.location.hash;if(cpage.match(pagestring))
cpage=RegExp.$1;else
cpage='packlist';function switchPage(){if(window.location.hash.match(pagestring))
thepage=RegExp.$1;else
thepage=cpage;if(thepage!=cpage){throbberToggle();$('#container').load(thepage+'.php',function(){throbberToggle();cpage=thepage;parseJQ();});}}
function throbberToggle(){if($('#throbber').css('display')=='none'){$('#throbber').fadeIn(200);rotateThrobber();}else
$('#throbber').fadeOut(300);}
function rotateThrobber(){$('#throbber').rotate('0deg');$('#throbber').animate({rotate:'-360deg'},{duration:1000,easing:'linear',queue:false,complete:function(){if($('#throbber').css('display')!='none')
rotateThrobber();}});}
function animatedIntro(){$('#header')
.animate({top:'0px',opacity:1,height:'60px'},200,'easeOutCirc')
.animate({height:'100px',width:'1%'},200,'easeInCirc')
.animate({width:'100%'},200,function(){$('#header').css({'background':'rgb(0, 0, 0)','background-size':'100% 100%'});});$('#header div').delay(900).fadeIn(350);$('#color').delay(900).fadeIn(350);$('#color div').show().delay(900)
.animate({'width':'0'},900,'easeInQuart',function(){$(this).hide();});$('#container').delay(900).fadeIn(500);}
$(function(){$('#header div, #container, #color').hide();$('#header').height(10).width('1%').css({'opacity':'0','top':'120px'});setTimeout('animatedIntro()',500);window.onhashchange=switchPage;$(window).scroll(function(){var refh=Math.floor($(window).scrollTop()/(document.body.scrollHeight-window.innerHeight)*100);if(refh<=25)
$('#headerfade').height(Math.floor(refh/4/25*100));else if(refh>=75)
$('#footerfade').height(Math.floor((100-refh)/4/25*100));});});