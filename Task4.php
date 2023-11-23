<!--Получите гет запрос с параметрами:
- first_name=Иван
- age=19
- На веб странице у вас должна быть форма, запрашивающая город проживания.
- После ввода города добавьте его в url строку.-->


    <form action="Task4.php" method="get">
        <input name="City" type="text"/>
        <button type="submit">Send</button>
    </form>

    <?php if (isset($_GET["first_name"])): ?>
        <h1>Имя: <?php echo $_GET["first_name"] ?></h1>
    <?php endif; ?>

    <?php if (isset($_GET["age"])): ?>
        <h1>Возраст: <?php echo $_GET["age"] ?></h1>
    <?php endif; ?>

    <?php if (isset($_GET["City"])): ?>
        <h1>Город: <?php echo $_GET["City"] ?></h1>
    <?php endif; ?>



