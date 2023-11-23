<!--//Реализуйте треугольник Паскаля произвольного размера (должен нарисоваться в браузере).-->

<?php
function createPascal($height, &$array)
{
    $width =  $height*2+1;

    for ($k = $height; $k >= 0; $k--)
    {
        $pos = 0;
        array_push($array, array());

        for (; $pos < $k; $pos++)
            array_push($array[count($array)-1], '');

        for (; $pos < $width-$k; $pos++)
        {
            if ($k == $height) $sum = 1;
            else
            {
                $left = 0;
                $right = 0;
                if (!empty($array[count($array)-2][$pos-1]) && is_numeric($array[count($array)-2][$pos-1])) $left = $array[count($array)-2][$pos-1];
                if (!empty($array[count($array)-2][$pos+1]) && is_numeric($array[count($array)-2][$pos+1])) $right = $array[count($array)-2][$pos+1];
                $sum = $left + $right;
                if ($sum == '0') $sum = '';
            }
            array_push($array[count($array)-1], $sum);
        }
        for (; $pos < $width; $pos++) array_push($array[count($array)-1], '');
    }
}
$arr = array();
createPascal(10, $arr);
$html = '<table style="text-align: center">';
for ($i = 0; $i < count($arr); $i++)
{
    $html .= '<tr>';
    for ($j = 0; $j < count($arr[0]); $j++)
        $html .= '<td>'.$arr[$i][$j].'</td>';
    $html .= '</tr>';
}
$html .= '</table>';
echo $html;

