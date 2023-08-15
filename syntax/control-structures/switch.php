<!--COME FROM: https://www.php.net/manual/zh/control-structures.switch.php-->

<?php
$i = 3;
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0, 1 or 2";
}
?>

<?php
$offset = 1;
$start = 3;

switch (true) {
    case $start - $offset === 1:
        print "A";
        break;
    case $start - $offset === 2:
        print "B";
        break;
    case $start - $offset === 3:
        print "C";
        break;
    case $start - $offset === 4:
        print "D";
        break;
}

// 输出“B”
?>
