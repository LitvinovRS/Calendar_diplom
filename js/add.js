$('#btn__add').click(function () {
    let add_text = $('#textarea__add').val();
    let calendar = $('#add__calendar').val();
    let lvl = $('select__lvl').val();
    task__list
    if(add_text !=='' && calendar !==''){
        let inp =
            $(
            '<div class="task__box">' +
                '<p>' + add_text + 
                    '<img src="http://harinama-mantra.org/images/000%20%D0%BA%D0%BD%D0%BE%D0%BF%D0%BA%D0%B0%20%D0%B7%D0%B0%D0%BA%D1%80%D1%8B%D1%82%D1%8C-u1038-fr.png" alt="" class="delete" >' +
                '</p>' + calendar + '<div>'
        );

        $('#task__list').prepend(inp);
    }

    $('#textarea__add').val('').focus();

    return false;
});

$('#task__list').click(function(e) {
    if(e.target.classList.contains('delete')){
        $('.task__box').eq($('.delete').index(e.target)).remove();
    }
});