<!--
//Сформировать базу данных “учетные сведения об учащихся”,
//включающую след. поля: Фамилия, Класс, Год поступления,Выполняемое поручение.
 Ввести в базу данных условную инфрмацию о 5 учениках.
//Написать программу просмотра базы данных и добавления в нее новой записи.
//Итого мы получим три файла index.php , mysql.php, view.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK90</title>
</head>
<body>
    <header>
        <a href="/Task90/view.php">База данных</a>
        <a href="/Task90/index.php">Добавить данные</a>
    </header>
    <hr/>
    <h1>Учётные сведения об учащихся</h1>
    <form action="/Task90/view.php" method="post">
        <div><label>Фамилия:         </label><input type="text" name="lastName"/></div>
        <div><label>Класс:           </label><input type="number" name="class"/></div>
        <div><label>Год поступления: </label><input type="number" name="yearOfAdmission"/></div>
        <div><label>Поручение:       </label><input type="text" name="instructions"/></div>
        <div><input type="submit" value="Добавить"/></div>
    </form>
</body>
</html>