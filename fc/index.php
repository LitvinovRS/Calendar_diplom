<?php 
require_once 'config.php';
require_once 'functions.php';
$events = get_events();
$events = get_json($events);

if(!empty($_POST['clickDate'])){
    print_r($_POST);
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FullCalendar</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fc-2.6.0/fullcalendar.css">
    <link rel="stylesheet" href="fc-2.6.0/fullcalendar.print.css" media="print">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="jquery-ui.min.js"></script>
</head>
<body>   
    <div id="calendar"></div> <!--Календарь-->

    <div class="form_dialog">
        <div class="form-modal" id="form-dialog">
            <button class="btn btn-close">x</button>
            <form action="addtask.php" method="POST" class="form__class">
                <div class="form-group">
                    <label for="title">Название задачи</label>
                    <input type="text" class="form-control" id="title" placeholder="Название задачи" name="rtitle">
                </div>
                <div class="form-group">
                    <label for="start">Начало события</label>
                    <input type="text" class="form-control datepicker" id="start" placeholder="Начало события" name="rstart">
                </div>
                <div class="form-group">
                    <label for="end">Конец события</label>
                    <input type="text" class="form-control datepicker" id="end" placeholder="Конец события" name="rend">
                </div>
                <button type="submit" class="btn btn-success btn-add">Добавить задачу</button>
            </form>
        </div>
    </div>

    <script>var events = <?php echo $events ?>;</script>

    <script src="fc-2.6.0/lib/moment.min.js"></script>
    <script src="fc-2.6.0/fullcalendar.js"></script>
    <script src="fc-2.6.0/lang-all.js"></script>
    <script src="main.js"></script>
</body>
</html>