<?php
// Функція приймає три числа та повертає їх добуток
function foo(int $x, int $y, int $z): int {
    // Об'явлення мертвої змінної $z, яка не використовується в функції
    $z;
    // Мертвий код: вираховане значення $z не використовується
    $z = $x / $y;
    // Повертаємо добуток $x на $y
    return $x * $y;
}

?>


<?php
//Code under development or for debugging
if (false) {
    // Виводимо стан змінної $variable (ніколи не буде викликано через умову false)
    print_r($variable);
}
if (0) {
    // Великий фрагмент коду з помилкою або недоробленим новим функціоналом
    // (також ніколи не буде викликаний через умову 0)
}
?>


<?php
function funk() {
    // Об'являємо змінну $a, яка ніде не використовується
    $a = "Hello world";
    // Далі в коді змінна $a міняє значення, але її значення також не використовується
    $a = "Hello universe";
    // Додаємо новий фрагмент. І знову, нове значення $a не використовується
    $a .= " and the world";
}

?>


<?php
function foo1($bar) {
    // Змінюємо значення $bar, але наступний рядок коду з return зупиняє виконання функції
    $bar *= 2;
    // Цей рядок коду ніколи не буде викликаний через попередній return statement
    return $bar;
    // Цей рядок коду також недосяжний через попередній return statement
    $bar += 1;
    return $bar;
}

?>