$(function(){
    $('#calendar').fullCalendar({
        // dayClick: function(){
        //     alert('Its job');
        // } //dayClick - функция, кликать по дате

        dayClick: function(date, jsEvent, view){
            let clickDate = date.format();
            $('#start').val(clickDate);
            let a = document.querySelectorAll('.form_dialog');
            for(var i = 0, l = a.length; i < l; i++){
            if ( a[i].style.display == 'none' )
            a[i].style.display = 'block'
            else
            a[i].style.display = 'none';
            }
            // $.ajax({
            //     url : 'index.php',
            //     type: 'POST',
            //     data: {clickDate : clickDate},
            //     success : function(res){
            //         alert('Res');
            //     },
            //     eroor : function(){
            //         alert('Error!');
            //     }
            // });
        },

            // monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            // monthNamesShort: ['Янв.', 'Фев.', 'Март', 'Апр.',  'Май',  'Июнь',  'Июль',  'Авг.',  'Сент.',  'Окт.',  'Ноя.',  'Дек.'],
            // dayNames: ["Воскресенье", "Понедельник",  "Вторник",  "Среда",  "Четверг",  "Пятница",  "Суббота"],
            // dayNamesShort: ["ВС", "ПН",  "ВТ",  "СР",  "ЧТ",  "ПТ",  "СБ"], //ЛОКАЛИЗАЦИЯ НА РУС ЯЗ
        
        //theme: true, //подключение темы
        
        lang: 'ru', //универсальный способ подключение языка

        eventSources: [
            {
                events: events, //получение значений из бд
                color : '#0E86A2',
                textColor : '#fff',
            }
        ]

        // events: [
        //     {
        //         title: 'Задача 1',
        //         start: '2020-04-20'
        //     },
        // ], //добавление задач

        // eventSources: [
        //     'путь к файлу' // передача задач через файл
        // ]
    });

    // $('#form-dialog').dialog({
    //     autoOpen: false,
    //     show: {
    //         effect: 'drop',
    //         duration: 500,
    //     },
    //     hide: {
    //         effect: 'clip',
    //         duration: 500,
    //     }
    // });

    $('.datepicker').datepicker({
        dateFormat: "yy-mm-dd"
    });
}); //подключение календаря по id

$('.btn-close').click(function(){
    let a = document.querySelectorAll('.form_dialog');
    for(var i = 0, l = a.length; i < l; i++){
    if ( a[i].style.display == 'none' )
    a[i].style.display = 'block'
    else
    a[i].style.display = 'none';
    }
});