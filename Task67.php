<?php
//Дана строка. Проверьте, что она заканчивается на '.png' .
// Если это так, выведите 'да', если не так – 'нет'

$string = "img.png";
?>
<h1>Дана строка: <?php echo $string; ?></h1>
<h1>Она оканчивается на .png?</h1>
<?php if (str_ends_with($string, ".png")): ?>
    <h1>да</h1>
<?php else: ?>
    <h1>нет</h1>
<?php endif; ?>