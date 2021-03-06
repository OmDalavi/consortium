var wid = $(".product-card__item-grid").width();
$(".product-card__item-grid").css({
    "height":wid+"px"
});

function closemodel(event){
    $("#"+event).css({"display": "none"},100);
}
// payment script
$("#ceoclick").click(function(){
 $("#paylinkceo").css({"display":"block"});
 $("#paylinkceo").animate({opacity: 1}, 1000);
 var y = $("#paylinkceo").offset().top;
   $("html ,body").animate({ scrollTop: y},200);
});

$("#wallstreetclick").click(function(){
$("#paylinkwallstreet").css({"display":"block"});
$("#paylinkwallstreet").animate({opacity: 1}, 1000);
var y = $("#paylinkwallstreet").offset().top;
  $("html ,body").animate({ scrollTop: y},200);
});

$("#adventureclick").click(function(){
  $("#paylinkadventure").css({"display":"block"});
  $("#paylinkadventure").animate({opacity: 1}, 1000);
  var y = $("#paylinkadventure").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});

$("#swadesclick").click(function(){
  $("#swades").css({"display":"block"});
  $("#swades").animate({opacity: 1}, 1000);
  var y = $("#swades").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});

$("#rendericoclick").click(function(){
  $("#renderico").css({"display":"block"});
  $("#renderico").animate({opacity: 1}, 1000);
  var y = $("#renderico").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});

$("#bizquizclick").click(function(){
  $("#bizquiz").css({"display":"block"});
  $("#bizquiz").animate({opacity: 1}, 1000);
  var y = $("#bizquiz").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});

$("#war_of_worldsclick").click(function(){
  $("#paylinkwar_of_worlds").css({"display":"block"});
  $("#paylinkwar_of_worlds").animate({opacity: 1}, 1000);
  var y = $("#paylinkwar_of_worlds").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});

$("#operation_researchclick").click(function(){
  $("#operation_research").css({"display":"block"});
  $("#operation_research").animate({opacity: 1}, 1000);
  var y = $("#operation_research").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});

$("#pitch_mantraclick").click(function(){
  $("#pitch_mantra").css({"display":"block"});
  $("#pitch_mantra").animate({opacity: 1}, 1000);
  var y = $("#pitch_mantra").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});

$("#adteam_click").click(function(){
  $("#membersadventure").css({"display":"block"});
  $("#membersadventure").animate({opacity: 1}, 1000);
  var y = $("#membersadventure").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});

$("#details_click").click(function(){
  $("#detailsadventure").css({"display":"block"});
  $("#detailsadventure").animate({opacity: 1}, 1000);
  var y = $("#detailsadventure").offset().top;
    $("html ,body").animate({ scrollTop: y},200);
});
