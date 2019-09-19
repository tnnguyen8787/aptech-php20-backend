<?php
echo "<a href=\"./\">BACK</a>";
/* 9. --- LOOPS ---
 *
 *
 * Some common loops in PHP :
 * while
 * do ... while
 * for
 * foreach
 *
 */

echo "<h1>9. LOOPS</h1>";

/*
 EXERCISE 1 : Assigning $a = 0, while $a < 5 then display $a to html.Carefull with loops infinity, using while
 *
 */

/*
 * SUGGESTION :
 *
 * $a = 0;
 * while ($a < 5) {
 * echo "$a";
 * $a++;
 * }
 *
 */

/*
 * EXERCISE 2 : Using do while to echo $a while $a < 5;
 */

/*
 * SUGGESTION :
 * $a = 0;
 * do {
 * echo $a;
 * $a++;
 * } while ($a < 5);
 *
 */

/*
 * EXERCISE 3 : $a = 5, Using for loops to echo from 0 to $a;
 */

/*
 * SUGGESTION :
 * $a = 5;
 * for ($i = 0; $i <= $a; $i++) {
 * echo $i;
 * }
 *
 */

/*
 * EXERCISE 4 : Using foreach to echo key and value of array;
 */

/*
 * SUGGESTION :
 * $arr = ["name" => "Name", "class" => "PHP", "age" => 18];
 * foreach ($arr as $key => $value) {
 * echo $key . ' - ' . $value . '<br>';
 * }
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
?>
<p>EXERCISE 1: Assigning $a = 0, while $a < 5 then display $a to html.Carefull with loops infinity, using while</p>
<?php
$a = 0;
while ($a < 5) {
    echo $a . "<br>";
    $a++;
}
?>
<p>EXERCISE 2 : Using do while to echo $a while $a < 5;</p>
<?php
$a = 0;
do {echo $a . "<br>";
    $a++;
} while ($a < 5);
?>

<p>EXERCISE 3 : $a = 5, Using for loops to echo from 0 to $a;</p>
<?php
$a = array(0, 1, 2, 3, 4, 5);
for ($i = 0; $i <= 5; $i++) {
    echo $a[$i];
}
?>

<p>EXERCISE 4 : Using foreach to echo key and value of array;</p>
<?php
$student = ["name" => "Nguyen Trong Nhan", "class" => "PHP20", "age" => 30];
foreach ($student as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>


