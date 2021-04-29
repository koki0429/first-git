$(function(){
    load_effect();
    $(window).scroll(function(){
        scroll_effect();
    });
});

function load_effect(){
    var tt = $(window).scrollTop();
    var hh = $(window).height();
    $('.load_up').each(function(){
        var yy = $(this).offset().top;
        if(tt > yy - hh){
            $(this).addClass('done');
        }
    });
}

function scroll_effect(){
    var tt = $(window).scrollTop();
    var hh = $(window).height();
    $('.scroll_up').each(function(){
        var yy = $(this).offset().top+200;
        if(tt > yy - hh){
            $(this).addClass('done');
        }
    });
}
