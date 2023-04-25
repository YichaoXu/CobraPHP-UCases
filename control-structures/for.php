<!--COME FROM: https://www.php.net/manual/en/control-structures.for.php-->
<?php
/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>

<!--COME FROM: https://www.php.net/manual/en/control-structures.foreach.php-->
<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element
?>

<?php
// Multiple for all expressions
for ($i=0, $k=10; $i<=10, $k>=0 ; $i++, $k--) {
    echo "Var " . $i . " is " . $k . "\n";
}
