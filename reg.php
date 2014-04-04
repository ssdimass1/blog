<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
   	<meta charset="utf-8"/>
	<title>Регистрация</title>
</head>
<body>
<a href="index.php?page=home">Главная страница</a><br /><br /><br />
    <form method="POST" action="reg.php">
        <input type="hidden" name="op" value="validate" />
            <div>
                 <div>
                     <div width="5%"><b>Имя</b></div>
                     <div width="95%" class="task_cell"><input type="text" name="name" size="5" style="width: 15%"/></div>
                  </div>
            <div>
                   <div width="5%" ><b>Фамилия</b></div>
                   <div width="95%" class=""><input type="text" name="s_name" size="5" style="width: 15%"/></div>
            </div>
            <div>
                    <div width="5%" ><b>Пароль</div>
                    <div width="95%" class=""><input type="password" name="pasword" size="5" style="width: 15%"/></div>
            </div>
            <div>
                    <div width="5%" ><b>Повторите пароль</div>
                    <div width="95%" class=""><input type="password" name="pasword2" size="5" style="width: 15%"/></div>
            </div>
            <div>
                    <div width="5%" ><b>Email</div>
                    <div width="95%"><input type="text" name="email" size="5" style="width: 15%"/></div>
            </div>
            <div>
                    <div width="5%" ><b>Возраст</div>
                    <div width="95%" ><input type="ranger" name="age" size="5" style="width: 15%"/></div>
            </div>
            <div>
                    <div width="5%" ><b>Ваш пол</div>
                    <div width="95%" ><input type="radio" id="male" name="gender" value="мужщина" size="5" style="width: 15%"/><label for="male">Муж</label></div>
            </div>
            <div>
                    <div width="5%" ><b></div>
                    <div width="95%"><input type="radio" id="female" name="gender" value="женщина" size="5" style="width: 15%"/><label for="female">Жен</label></div>
            </div>
            <div>
                    <div><input type="submit" value="Зарегистрироваться" name="seve"/><br></div>
            </div>
            </div>
    </form>
    
<?php
include_once("db.php");
if(isset ($_POST['seve']))
{
    $email = strip_tags(addslashes(trim($_POST["email"])));
    $result = mysql_query("SELECT email FROM form WHERE email ='$email'");
    if (mysql_num_rows($result) <= 0)
    {
        $name = strip_tags(trim($_POST['name']));
        $s_name = strip_tags(trim($_POST['s_name']));
        $pasword = strip_tags(trim($_POST['pasword']));
        $age = $_POST['age'];
        $male = $_POST['male'];
        $male2 = $_POST['male2'];
        $pasword == $pasword2;
        $query = mysql_query("INSERT INTO form (name, s_name, pasword, male, male2, age, email)
                               VALUES('$name', '$s_name', '$pasword', '$male', '$male2', '$age', '$email')");
        echo '!!Спасибо за регистрацию!!'; 
    } else {
        echo 'уже есть такая запись';
    }
}

mysql_close();
    

    
?>
</body>
</html>