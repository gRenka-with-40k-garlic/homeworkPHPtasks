<?php
//Доделать!

//На вход подается строка целых чисел, разделенных пробелами.
//Найдите максимальную разницу между двумя элементами строки при условии,
//что меньшее число должно находиться справа от большего.

function func ($numString) 
{
    $numString = trim($numString);
    $numArray = explode(" ", $numString);

   for ($i = 0; $i < count($numArray) - 1; $i++) {
    return 0;
   }
}

$sourceString = " 1 2 3 4 5 6   "
?>

<h1>Source string: <?php echo $sourceString; ?></h1>
<h1>Result string: <?php echo func($sourceString); ?></h1>