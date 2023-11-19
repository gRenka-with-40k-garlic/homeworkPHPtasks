<?php
//На вход подается строка целых уникальных (не повторяющихся) чисел, разделенных пробелами.
//Найдите все возможные комбинации пар чисел и выведите их в любом порядке.

//ПЕРЕДЕЛАТЬ ээ он выводит индексы попарно а не значения надо както решать

function FindCombinations($numString) {
    $numString = trim($numString);
    $numArray = explode(" ", $numString);

    for ($i = 0; $i < count($numArray) - 1; $i++) {
        for ($j = $i + 1; $j < count($numArray); $j++) {
            echo "<h3>" . $i . " and " . $j . "<h3>";
        }
    }
}

$sourceString = " 1 2 3 4    ";
?>

<h1>Source string: <?php echo $sourceString; ?></h1>
<h1>Combinations:<?php FindCombinations($sourceString) ?></h1>

