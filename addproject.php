<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=todo", 'root', '');

    if (empty($_POST['rproject'])) exit("Поле не заполнено");

    $query = "INSERT INTO project VALUES (NULL, :nproject)";
    $task = $conn->prepare($query);
    $task->execute(['nproject' => $_POST['rproject']]);

    $id = $conn->lastInsertId();
    
    header("Location: main.php");
}
catch (PDOException $e){
    echo "error" .$e->getMessage();
}
?>