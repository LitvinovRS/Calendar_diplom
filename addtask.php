<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=todo", 'root', '');

    if (empty($_POST['rcontent'])) exit("Поле не заполнено");

    $query = "INSERT INTO tasks VALUES (NULL, :content)";
    $task = $conn->prepare($query);
    $task->execute(['content' => $_POST['rcontent']]);

    $id = $conn->lastInsertId();
    
    header("Location: main.php");
}
catch (PDOException $e){
    echo "error" .$e->getMessage();
}
    // $select = mysql_query("SELECT content FROM tasks");

    // while($result = mysql_fetch_array($select)){
    //     echo "content: $result[content]";
    // }
?>

    