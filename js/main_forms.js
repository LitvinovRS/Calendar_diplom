// $('.btn__login').click(function() { 
//     $('.time__block__registration').hide();
//     $('.time__block__autorization').slideToggle(); //toggle - быстрая смена
// });

// $('.btn__registration').click(function() { 
//     $('.time__block__autorization').hide();
//     $('.time__block__registration').slideToggle();
// });



$('.span').click(function(){
    $('.span').hide();
    $('.menu').slideToggle();
});

$('.span__close').click(function(){
    $('.menu').slideToggle();
    $('.span').show();
});