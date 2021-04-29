$(function(){
    $("#scroll_to_top").on('click', function(){
        $('body,html').animate({scrollTop: 0}, 300, 'linear');
    });
});

$(function(){
    $(window).scroll(function(){
        scroll_up();
    });
});

function scroll_up(){
    $('.scroll_up').each(function(){
        if($(window).scrollTop() > 80){
            $(this).addClass('done');
        }else if($(window).scrollTop() < 80){
            $(this).removeClass('done');
        }
    });
}
