<?php
//Создайте три страницы с формами, содержащими по одному полю ввода на стр.
//Обработчик каждой последующей формы будет вести на следующую страницу.
//На первой страницы спросим имя, на второй странице фамилию,
//на третьей возраст, а на четвертой выведите все данные используя сессию.
//Создайте в сессии массив для хранения всех восещенных страниц
//и сохраните в качестве его очередного элемена путь к текущей странице.
//Выведите в цикле список всех посещенных пользователями страниц

session_start();
array_pop($_SESSION['visitedPages']);
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

$visitedPages = $_SESSION['visitedPages'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>TASK88</title>
</head>
<body>
<h2>Информация о пользователе:</h2>
<ul>
    <li>Имя: <?php echo $_SESSION['firstName']; ?></li>
    <li>Фамилия: <?php echo $_SESSION['lastName']; ?></li>
    <li>Возраст: <?php echo $_SESSION['age']; ?></li>
</ul>

<h2>История посещений:</h2>
<ul>
    <?php foreach ($visitedPages as $page) : ?>
        <li><?php echo $page; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
