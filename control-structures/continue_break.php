<!--COME_FROM: https://www.php.net/manual/en/control-structures.break.php-->
<?php

$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') {
        break 1;
    }
    echo "$val<br />\n";
}
?>

<!--COME_FROM: https://www.php.net/manual/en/control-structures.continue.php-->
<?php
foreach ($arr as $key => $value) {
    if (!($key % 2)) { // skip even members
        continue 1;
    }
    echo "$val<br />\n";
}
?>

