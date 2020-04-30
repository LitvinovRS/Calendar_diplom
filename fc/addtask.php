<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=todo", 'root', '');

    if (empty($_POST['rtitle'])) exit("Поле не заполнено");
    if (empty($_POST['rstart'])) exit("Поле не заполнено");
    if (empty($_POST['rend'])) exit("Поле не заполнено");

    $query = "INSERT INTO fcalendar VALUES (NULL, :title, `start`, `end`)";
    $task = $conn->prepare($query);
    $task->execute(['title' => $_POST['rtitle']]);

    $id = $conn->lastInsertId();
    
    header("Location: ../main.php");
}
catch (PDOException $e){
    echo "error" .$e->getMessage();
}
    // $select = mysql_query("SELECT content FROM tasks");

    // while($result = mysql_fetch_array($select)){
    //     echo "content: $result[content]";
    // }
?>