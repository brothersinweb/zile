$(document).ready(function(){
     $('nav').mouseenter(function(){
         $('.nava').animate({bottom:"0px"},100);
     });
    
     $('nav').mouseleave(function(){
         $('.nava').animate({bottom:"50px"});
     });

});

