$('.main__btn__plus').click(function() {
    //$('.form__add').toggle(); //форма добавления задач
});

$('.close__add__btn').click(function() { 
    $('.form__add').hide();
});

$('.span').click(function(){
    $('.span').hide();
    $('.menu').slideToggle();
});

$('.span__close').click(function(){
    $('.menu').slideToggle();
    $('.span').show();
});

// $('.project__list').click(function(){
//     $('.menu').slideToggle();
//     $('.span').show();
// });

$('.menu__calendar').click(function(){
    $('.lvl__importance').hide();
    $('.myproject').hide();
    $('.task__block__calendar').show("normal");
})

$('.menu__importance').click(function(){
    $('.task__block__calendar').hide();
    $('.myproject').hide();
    $('.lvl__importance').toggle("fast");
})

$('.menu__myproject').click(function(){
    $('.task__block__calendar').hide();
    $('.lvl__importance').hide();
    $('.myproject').show("normal");
})

