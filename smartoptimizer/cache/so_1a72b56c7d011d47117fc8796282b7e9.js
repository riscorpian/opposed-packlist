function finishTutorial(p,f){$('#planimate').animate({scale:[[.95,.95]],translateY:'-28px',opacity:.3},400);$('#overlay').fadeIn(400);$('#overlay span').text(f);if($('#overlay input').val().match(/^((.+)#)(\d+)$/i))
tVal=RegExp.$1;$('#overlay input').val(tVal+p).click(function(){$(this).select();}).focus().select().blur(function(){$('#planimate').animate({scale:[[1,1]],translateY:'0px',opacity:1},200,function(){$(this).resetTransform();});$('#overlay').fadeOut(200);});}
function reorderPacklist(ncol,ndir){var aList=($('#packlist').css('display')=='none'?'2':'');var toReturn=(ndir=='asc')?1:-1;var toSort=$('#packlist'+aList+' ul').get();toSort.sort(function(a,b){var keyA=$(a).children('.plc'+ncol).text();var keyB=$(b).children('.plc'+ncol).text();if(ncol!=2){keyA=parseFloat(keyA);keyB=parseFloat(keyB);}
if(keyA<keyB)
return-toReturn;else if(keyA>keyB)
return toReturn;else
return 0;});$('#packlist'+(aList=='2'?'':'2')).append(toSort);$('#plheader li').removeClass('plselectedasc plselecteddesc');$('#plheader .plc'+ncol).addClass('plselected'+ndir);$('#packlist').toggle();$('#packlist2').toggle();}
$(function(){$('#packlist ul').click(function(){finishTutorial($(this).children().eq(0).text(),$(this).children().eq(1).text());});$('#plheader li').click(function(){if(this.className.match(/plc(\d+)(\splselected(asc|desc))?/i)){reorderPacklist(RegExp.$1,(RegExp.$3&&RegExp.$3=='asc')?'desc':'asc');}});$('#packlist2').hide();});