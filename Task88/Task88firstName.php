<?php
//Создайте три страницы с формами, содержащими по одному полю ввода на стр.
//Обработчик каждой последующей формы будет вести на следующую страницу.
//На первой страницы спросим имя, на второй странице фамилию,
//на третьей возраст, а на четвертой выведите все данные используя сессию.
//Создайте в сессии массив для хранения всех восещенных страниц
//и сохраните в качестве его очередного элемена путь к текущей странице.
//Выведите в цикле список всех посещенных пользователями страниц

session_start();
$_SESSION['visitedPages'] = $_SESSION['visitedPages'] ?? [];
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['firstName']))
{
    $_SESSION['firstName'] = $_POST['firstName'];
    header('Location: Task88lastName.php');
    exit;
}?>

<form method="POST" action="">
    <label for="firstName">Введите имя:</label>
    <input type="text" id="firstName" name="firstName" required>
    <button type="submit">Далее</button>
</form>
