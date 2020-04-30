<?php
    require "db.php";

    $data = $_POST; 
    if ( isset($data['do_login']) ){
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        
        if ($user){
            if( password_verify($data['password'], $user->password)){
                $_SESSION['logged_user'] = $user;
                header('Location: /main.php');
            } else{
                $errors[] = 'Неверно введён пароль!';
            }
        } else{
            $errors[] = 'Пользователь с таким логином не найден!';
        }

        if( !empty($errors) )
        {
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
    }
?>
<link rel="stylesheet" href="login_style.css">
<form action="login.php" method="POST">
    <div class="login">    
        <div class="container">       
            <input type="text" name="login" placeholder=" Введите логин" value="<?php echo @$data['login']; ?>" class="login__input">
            <input type="password" name="password" placeholder=" Введите пароль" value="<?php echo @$data['password']; ?>" class="login__input">
        </div>

        <div class="login__btn">
            <button name="do_login" class="btn__authorization">Авторизироваться</button>
            <a href="#" class="change__password">Забыл пароль</a>
        </div>
    </div>
</form>