$(document).ready(function(){
     
    if ($(window).width() > 960) {
     $('nav').mouseenter(function(){
         $('.nava').animate({bottom:"0px"},100);
     });
    
     $('nav').mouseleave(function(){
         $('.nava').animate({bottom:"50px"},50);
     });
    }else{
            if($('nav').position("-180px")){
                $('.menu').click(function(){
                    $(this).hide(1);
                    $('nav').animate({left:"0px"},100); 
                    $('.menux').show(100);
                });
            };
        $('.menux').click(function(){
            $(this).hide(100);
            $('nav').animate({left:"-180px"},100);
            $('.menu').show(100);
        });
    };
});

        