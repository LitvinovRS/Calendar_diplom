<?php
    require "php/db.php";
?>
<?php if ( isset($_SESSION['logged_user']) ) : ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/add.css">
    <link rel="stylesheet" type="text/css" href="style/calendar.css">
    <link rel="stylesheet" href="style/task.css">
    <link rel="stylesheet" href="style/font-awesome.css">
    <link rel="stylesheet" href="style/list.css">
    <link rel="stylesheet" href="style/media.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>  
    <script defer src="js/list.js"></script>

    <title>Main</title>
</head>

<body>
    <header class="head">
        <div class="logo"><img src="image/logo.png" alt="logo" class="logo__size"></div>
        <div class="title">Название</div>
        <?php echo $_SESSION['logged_user']->name; ?><hr>
        <a href="php/logout.php">Выйти</a>
    </header>

    <div class="form__add">
        <form class="add">
            <div class="close__add">
                <p class="close__add__text">Добавление задачи</p>
                <span class="close__add__btn">x</span>
            </div>
            <div class="textarea__add">
                <textarea type="text" placeholder="Запишите задачу..." class="textarea_add__style" id="textarea__add"></textarea>
                <p class="text__calendar"><input type="date" id="add__calendar"></p>
            </div>
            <div class="form__add__block">
                <div class="form__add__lvl">
                    <h3 class="form__add__lvl__importance">Важность задачи</h3>
                    <select class="form__add__lvl__select" id="select__lvl">
                        <option value="1">1 Уровень важности</option>
                        <option value="2">2 Уровень важности</option>
                        <option value="3">3 Уровень важности</option>
                        <option value="4">4 Уровень важности</option>
                    </select>
                </div>
                <div class="form__add__btn"><button class="form__add__btn__style" id="btn__add">Добавить задачу</button></div>
            </div>
        </form>
    </div>

    <section class="main">

        <span class="span"></span>
        <div class="menu">
            <span class="span__close">х</span>
            <button class="main__btn__plus" onclick="location.href='fc/index.php'">Открыть календарь</button>

            <!-- <div class="menu__calendar"><p class="menu__p">Календарь</p>
                <div class="task__block__calendar">
                    <div class="task__block__calendar__block">
                        <div class="task__block__calendar__data" id="date_a"></div>
                        <div class="task__block__calendar__data" id="date_b"></div>
                        <div class="task__block__calendar__data date_c" id="date_c"></div>
                        <div class="task__block__calendar__data" id="date_d"></div>
                        <div class="task__block__calendar__data" id="date_e"></div>
                        <div class="task__block__calendar__data" id="date_f"></div>
                        <div class="task__block__calendar__data" id="date_g"></div>
                        <div class="task__block__calendar__data" id="date_h"></div>
                        <div class="task__block__calendar__data" id="date_i"></div>
                        <div class="task__block__calendar__data" id="date_j"></div>
                        <div class="task__block__calendar__data" id="date_k"></div>
                        <div class="task__block__calendar__data" id="date_l"></div>
                        <div class="task__block__calendar__data" id="date_m"></div>
                        <button class="task__block__calendar__btn" id="calendar" onClick="xCal('calendar')">Открыть календарь</button>
                    </div>
                </div>
            </div>  -->

            <div class="menu__importance"><p class="menu__p">Важность задач</p>
                <div class="lvl__importance">
                    <div class="lvl">Уровень важности 1</div>
                    <div class="lvl">Уровень важности 2</div>
                    <div class="lvl">Уровень важности 3</div>
                    <div class="lvl">Уровень важности 4</div>
                </div>
            </div>

            <div class="menu__myproject"><p class="menu__p">Мои проекты</p>
                <div class="myproject">
                    <ul class="project__list">
                        <?php
                            $par1_ip = "127.0.0.1";
                            $par2_name = "root";
                            $par3_pass = "";
                            $par4_db = "todo";

                            $induction = mysqli_connect($par1_ip, $par2_name, $par3_pass, $par4_db);

                            if ($induction == false)
                            {
                                echo "Error";
                            }

                            $result = mysqli_query($induction, "SELECT `nproject` FROM `project`");
                            
                            while ($proj = mysqli_fetch_assoc($result)){ ?>
                                <p class="proj"><?php echo $proj['nproject']?></p>
                                <?php
                            }
                        ?>
                    </ul>

                    <form action="addproject.php" method="POST"  >
                            <input type="text" class="new list int-new-list-style" placeholder="Название проекта..."
                          aria-label="new list name" name="rproject"/>
                            <button class="btn create" aria-label="create new task">+</button>
                    </form>
                </div>
            </div>            
        </div>

        <div class="task">
            <div class="task__main">
                <div class="task__block__one">
                    <div class="task__welcome">
                        <p class="task__welcome__search">Поиск</p>
                        <input type="search" placeholder="Введите ключевое слово" class="input" id="search">
                        
                    </div>
                </div>
                <div class="task__add" data-list-display-container>
                    
                    <div class="task__header">
                    <?php
                                $par1_ip = "127.0.0.1";
                                $par2_name = "root";
                                $par3_pass = "";
                                $par4_db = "todo";

                                $pars = mysqli_connect($par1_ip, $par2_name, $par3_pass, $par4_db);
                                
                                $count = mysqli_query($pars, "SELECT * FROM `tasks`");
                                
                                if ($posts = mysqli_num_rows($count)){ 
                                   ?>
                                    <h1 class = "name__task">Задачи:</h1>
                                    <p class = "task__count">У вас <?echo "$posts"; ?> задач</p>
                                    <?php
                                }
                    ?>
                    </div>

                    <div class="task__body">

                        <!-- <ul id="task__list" class="task__list"></ul> -->
                        
                        <div class="tasks" data-tasks>
                            <?php
                                $par1_ip = "127.0.0.1";
                                $par2_name = "root";
                                $par3_pass = "";
                                $par4_db = "todo";

                                $pars = mysqli_connect($par1_ip, $par2_name, $par3_pass, $par4_db);

                                if ($pars == false)
                                {
                                    echo "Error";
                                }

                                if (isset($_GET['del'])){
                                    $id = $_GET['del'];

                                    $query = "DELETE FROM `tasks` WHERE id=$id";
                                    mysqli_query($pars, $query) or die (mysqli_error($pars));
                                }

                                $result = mysqli_query($pars, "SELECT * FROM `tasks`");
                                
                                while ($task = mysqli_fetch_assoc($result)){ 
                                   ?> <li class="item">
                                    <input type="checkbox" <?php echo $task['completed'] ? 'checked' : '' ?> id="task__checkbox">
                                    <p class="text"><?php echo $task['content']?></p>
                                    <a href="?del=<?= $task['id']?>" class="fa fa-trash-o de" job="delete"></a>
                                    <?php
                                }
                            ?> 
                        </div>

                        <form action="addtask.php" method="POST"  >
                            <input type="text" class="new task" placeholder="Запишите задачу..." aria-label="new task name" name="rcontent"/>
                            <button class="btn create" aria-label="create new task">+</button>
                        </form>
                    </div>
                    
                </div>
            </div>  

            <div class="delete__stuff">
                <button class="btn delete" data-clear-comlete-tasks-button>Удалить выбранные задачи</button>
                <button class="btn delete" data-delete-list-button>Удалить лист</button>
            </div>

            <div class="btn__main">
                <button class="main__btn__chat">Чат</button>
            </div>
        </div>
    </section>

    <footer class="footer">Пользовательское соглашение.</footer>
<script src="js/date.js"></script>
<script src="js/button.js"></script>
<template id="task-template">
    <div class="task__lst">
        <input type="checkbox" />
        <label>
            <span class="custom-checkbox"></span>
        </label>
    </div>
</template>
</body>
</html>

<?php else : ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main_forms.css">
    <link rel="stylesheet" href="style/main_forms_media.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Main</title>
</head>

<body>
    <header class="head">
        <div class="logo"><img src="image/logo.png" alt="logo" class="logo__size"></div>
        <div class="title">Название</div>
        <div class="btn"> 
                <button class="btn__login"><a href = "php/login.php">LogIn</a></button>
                <button class="btn__registration"><a href = "php/signup.php">SignUp</a></button>            
        </div>
    </header>

    <section class="main">

        <!--<a href="main.html">main</a>-->
        <span class="span"></span>
        <div class="menu">
            <span class="span__close">х</span>
            <div class="menu__block">
                <div class="menu__block__text">Предназначение сайта</div>
                <div class="menu__block__text">Особенности сайта</div>
                <div class="menu__block__text">Возможности сайта</div>
                <div class="menu__block__text">О нас</div>
            </div>
        </div>

        <div class="container">
            <div class="container__main">
                <div class="container__main__block">
                    <div class="container__block__hello__text">Добро пожаловать </br>на наш сайт</div>
                </div>
            </div>

            <div class="btn__main">
                <button class="main__btn__chat">Чат</button>
            </div>
        </div>
    </section>

    <footer class="footer">Пользовательское соглашение.</footer>

    <div class="test" style="display: none;"><p>sdasd</p></div>

<script src="js/main_forms.js"></script>
</body>
</html>
<?php endif; ?>