// JavaScript Document

/*
$('#button').click(function(){
	$("#sometext").removeClass("module").addClass("moduleHover");
//	$('#sometext').css("background","#096");
});
*/

$('.module').mouseover(function(e) {
    $(this).removeClass("module").addClass("moduleHover");
});

$('.module').mouseleave(function(e) {
    $(this).removeClass("moduleHover").addClass("module");
});