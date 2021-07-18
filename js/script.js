$(function(){
    $('.burger').click(function(){
        $('.burger').toggleClass('burger_active');
    });
    $('.burger').click(function(){
        $('.menu_ul').toggleClass('active');
    });
        $('.menu_ul').click(function(){
        $('.menu_ul').removeClass('active');
        $('.burger').removeClass('burger_active');
    });
});






