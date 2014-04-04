<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
   	<meta charset="utf-8"/>
	<title>начнем работать с PhP</title>
</head>
<body>
<form action="reg.php" method="POST">
<input type="hidden" name="op" value="validate" />
<table border="0" width="100%" cellpadding="3">
<tr>
<td width="5%" nowrap="nowrap" class="task_cell"><b>Login</b></td>
<td width="95%" class="task_cell"><input type="text" name="name" size="5" style="width: 15%"/></td>
</tr>
<tr>
<td width="5%" nowrap="nowrap" class="task_cell"><b>Пароль</td>
<td width="95%" class="task_cell"><input type="password" name="pasword" size="5" style="width: 15%"/></td>
</tr>
<tr>
<td width="5%" nowrap="nowrap" class="task_cell"><b>Повторите пароль</td>
<td width="95%" class="task_cell"><input type="password" name="pasword2" size="5" style="width: 15%"/></td>
</tr>
<tr>
<td width="5%" nowrap="nowrap" class="task_cell"><b>Email</td>
<td width="95%" class="task_cell"><input type="text" name="email" size="5" style="width: 15%"/></td>
</tr>
<tr>
<td width="5%" nowrap="nowrap" class="task_cell"><b>Возраст</td>
<td width="95%" class="task_cell"><input type="ranger" name="age" size="5" style="width: 15%"/></td>
</tr>
<tr>
<td width="5%" nowrap="nowrap" class="task_cell"><b>Email</td>
<td width="95%" class="task_cell"><input type="radio" name="male" value="ad1" size="5" style="width: 15%"/>Муж</td>
</tr>
<tr>
<td width="5%" nowrap="nowrap" class="task_cell"><b>Email</td>
<td width="95%" class="task_cell"><input type="radio" name="male2" value="ad2" size="5" style="width: 15%"/>Жен</td>
</tr>
<tr>
<td class="instruct_cell" colspan="2"><input type="submit" value="Зарегистрироваться" name="submit"/><br>
</tr>
</table>
</form>
</body>
</html>
