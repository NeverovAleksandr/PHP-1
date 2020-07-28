<?php
echo "-------------<br>";
echo "Задача 1<br>";
echo "-------------<br>";

$a = -10;
$b = -12;

if ($a > 0 && $b > 0) {
    $c = $a + $b;
    echo "числа положительные, их сумма " . $c . " <br>";
} elseif (($a < 0) && ($b < 0)) {
    $c = $a * $b;
    echo "числа отрицательные, их произведение " . $c . " <br>";
} else {
    if ($a > $b) {
        $c = $a - $b;
    } else {
        $c = $b - $a;
    }
    echo "числа имеют разные знаки, их разность " . $c . " <br>";
}

echo "-------------<br>";
echo "Задача 2<br>";
echo "-------------<br>";

$a = rand(0, 15);
$b = "<br>";

echo "a = $a" . $b;

switch ($a) {
    case 0:
        echo "0" . $b;
    case 1:
        echo "1" . $b;
    case 2:
        echo "2" . $b;
    case 3:
        echo "3" . $b;
    case 4:
        echo "4" . $b;
    case 5:
        echo "5" . $b;
    case 6:
        echo "6" . $b;
    case 7:
        echo "7" . $b;
    case 8:
        echo "8" . $b;
    case 9:
        echo "9" . $b;
    case 10:
        echo "10" . $b;
    case 11:
        echo "11" . $b;
    case 12:
        echo "12" . $b;
    case 13:
        echo "13" . $b;
    case 14:
        echo "14" . $b;
    case 15:
        echo "15" . $b;
}

echo "-------------<br>";
echo "Задача 3<br>";
echo "-------------<br>";

function sum($a, $b)
{
    return $a + $b;
}

function substract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    if($b==0)
		return "на 0 делить нельзя!";
    return $a / $b;
}

$x1 = 10;
$x2 = 15;

echo "Результат сложения " . $x1 . " и " . $x2 . " = " . sum($x1, $x2) . "<br>";
echo "Результат вычитания " . $x1 . " и " . $x2 . " = " . substract($x1, $x2) . "<br>";
echo "Результат умножения " . $x1 . " и " . $x2 . " = " . multiply($x1, $x2) . "<br>";
echo "Результат деления " . $x1 . " и " . $x2 . " = " . divide($x1, $x2) . "<br>";

echo "-------------<br>";
echo "Задача 4<br>";
echo "-------------<br>";

$arg1 = rand(0, 9);
$arg2 = rand(0, 9);
$operations = array("+", "-", "*", "/");
$operation = $operations[rand(0, 3)];

echo "arg1 = $arg1<br>arg2 = $arg2<br>operation = $operation<hr>";

function addition($a, $b)
{
    return $a + $b;
}

function subtraction($a, $b)
{
    return $a - $b;
}

function multiplication($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "+":
            return addition($arg1, $arg2);
        case "-":
            return subtraction($arg1, $arg2);
        case "*":
            return multiplication($arg1, $arg2);
        case "/":
            return division($arg1, $arg2);
    }
}
echo "arg1 $operation arg2 = $arg1 $operation $arg2 = " . mathOperation($arg1, $arg2, $operation);

echo "-------------<br>";
echo "Задача 6<br>";
echo "-------------<br>";

function power($val, $pow)
{
    /*Число в нулевой степени = 1*/
    if ($pow == 0) return 1;
    /*На ноль делить нельзя = Бесконечность*/
    if ($val == 0 && $pow < 1) return INF;
    /*Ноль в любой степени = ноль*/
    if ($val == 0) return 0;
    /*Отрицательная степень*/
    if ($pow < 1) return power(1 / $val, -$pow);
    return $val * power($val, $pow - 1);
}

/*Тестирование*/
for ($i = 0; $i < 5; $i++) {
    $val = rand(-9, 9);
    $pow = rand(-9, 9);
    echo "val = $val<br>pow = $pow<br>";
    echo "Проверка функции pow: " . pow($val, $pow) . "<br>";
    // PHP 5.6 и выше - ($a ** $b)
    echo "Проверка операции \"**\": " . ($val ** $pow) . "<br>";
    echo "Рекурсия: " . "val ^ pow = $val ^ $pow = " . power($val, $pow) . "<hr>";
}

echo "-------------<br>";
echo "Задание 7<br>";
echo "-------------<br>";

function pluralForm($n, $form1, $form2, $form5)
{
    $n = abs($n) % 100;
    $n1 = $n % 10;
    if ($n > 10 && $n < 20) return $form5;
    if ($n1 > 1 && $n1 < 5) return $form2;
    if ($n1 == 1) return $form1;
    return $form5;
}

$hours = date("G");
$mins = date("i");
echo "Задача 7<br>";
echo "Cейчас $hours " . pluralForm($hours, "час", "часа", "часов");

echo " и $mins " . pluralForm($mins, "минута", "минуты", "минут");

?>
