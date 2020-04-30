<?php

@$db = mysqli_connect('localhost', 'root', '', 'todo') or die ('Нет соединение с БД');
mysqli_set_charset($db, 'utf8');