<?php



function triangle(int $a, int $b): int
{
    return $a * $b * 0.5;
}
function circle(int $rad):int{
    return pi() * $rad * 2;
}

function rec(int $a, int $b){
    return $a * $b;

}
echo "Geometry Calculator". PHP_EOL;
echo "1. Calculate the Area of a Circle".PHP_EOL;
echo "2. Calculate the Area of a Rectangle". PHP_EOL;
echo "3. Calculate the Area of a Triangle".PHP_EOL;
echo "4. Quit". PHP_EOL;
$select = (int) readline('option:');

switch ($select){
    case 1:
        $radius = (int)readline('rad here');
        echo circle($radius);
        break;
    case 2:
        $a = (int)readline('a');
        $b = (int)readline('b');
        echo rec($a, $b);
        break;
    case 3:
        $a = (int)readline('a');
        $b = (int)readline('b');
        echo triangle($a, $b);
        break;
    default:
        echo 'done';
}