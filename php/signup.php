<?php
    require "db.php";

    $data = $_POST; 
    if ( isset($data['do_signup']) ){

        $errors = array();
        if( trim($data['name']) == ''){
            $errors[] = 'Введите имя!';
        }

        if( trim($data['city']) == ''){
            $errors[] = 'Введите город!';
        }

        if( trim($data['email']) == ''){
            $errors[] = 'Введите email!';
        }

        if( trim($data['login']) == ''){
            $errors[] = 'Введите логин!';
        }

        if( $data['password'] == ''){
            $errors[] = 'Введите пароль!';
        }

        if( $data['password_2'] != $data['password'] ){
            $errors[] = 'Повторный пароль введён не верно!';
        }

        if( R::count('users', "login = ?", array($data['login'])) > 0 ){
            $errors[] = 'Пользователь с таким логином уже существует!';
        }

        if( R::count('users', "email = ?", array($data['email'])) > 0 ){
            $errors[] = 'Пользователь с таким email уже существует!';
        }

        if( empty($errors) )
        {
            $user = R::dispense('users');
            $user->name = $data['name'];
            $user->city = $data['city'];
            $user->email = $data['email'];
            $user->login = $data['login'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);
            header('Location: /main.php');
        } else{
            echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
        }
    }

?>
<link rel="stylesheet" href="login_style.css">
<form action="signup.php" method="POST">
    <div class="signup">
        <div class="container">
            <input type="text" name="name" placeholder=" Введите имя" value="<?php echo @$data['name']; ?>" class="signup__input">

            <input type="text" name="city" placeholder=" Введите город" value="<?php echo @$data['city']; ?>" class="signup__input"> 

            <input type="email" name="email" placeholder=" Введите email" value="<?php echo @$data['email']; ?>" class="signup__input">
        
            <input type="text" name="login" placeholder=" Введите логин" value="<?php echo @$data['login']; ?>" class="signup__input">

            <input type="password" name="password" placeholder=" Введите пароль" value="<?php echo @$data['password']; ?>" class="signup__input">

            <input type="password" name="password_2" placeholder=" Введите пароль повторно" value="<?php echo @$data['password_2']; ?>" class="signup__input">
        </div> 
        
        <div class="signup__btn">
            </br><button type="submit" name="do_signup" class="btn__registration">Зарегистрироваться</button>
        </div>
    </div>
</form>