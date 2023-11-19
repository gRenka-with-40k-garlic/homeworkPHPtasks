<!--Пользователь вводит свой возраст.
    Если он больше 80 лет, то вывести
    'Здравствуйте, уважаемый', иначе 'Успехов!'.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK28</title>
</head>
<body>
    <form action="Task4 x.php" method="get">
        <input name="City" type="text"/>
        <button type="submit">Send</button>
    </form>

    <hr>
    <?php if (isset($_GET["age"])): ?>
        <h1>Ваш возвраст: <?php echo $_GET["age"] ?></h1>
    <?php endif; ?>
<!--а дальше как я понимаю впилить сюда проверку >=80 здавтсвуйте уважаемый, елсе иди нахуй молодой-->
</body>
</html>