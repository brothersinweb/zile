$(document).ready(function(){
     
    if ($(window).width() > 960) {
     $('nav').mouseenter(function(){
         $('.nava').animate({bottom:"0px"},100);
     });
    
     $('nav').mouseleave(function(){
         $('.nava').animate({bottom:"50px"},50);
     });
    }else{
            if($('nav').position("-220px")){
                $('.menu').click(function(){
                    $(this).hide(100);
                    $('nav').animate({left:"0px"},500); 
                    $('.menux').show(500);
                });
            };
        $('.menux').click(function(){
            $(this).hide(100);
            $('nav').animate({left:"-220px"},500);
            $('.menu').show(500);
        });
    };
});

        