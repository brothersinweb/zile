$(document).ready(function(){
     
    if ($(window).width() > 960) {
     $('nav').mouseenter(function(){
         $('.nava').animate({bottom:"0px"},100);
     });
    
     $('nav').mouseleave(function(){
         $('.nava').animate({bottom:"50px"},50);
     });
    }else{
         $('nav').click(function(){
             $('.nava').toggle(function(){
         $('.nava').animate({bottom:"0px"},100);
     });
    });
        /*$('nav').toggle(function(){
         $('.nava').animate({bottom:"50px"},50);
        });*/
    }

});

