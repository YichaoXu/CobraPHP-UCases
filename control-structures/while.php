<?php
// COME FROM: "https://www.php.net/manual/en/control-structures.while.php"
$i = 1;
while ($i <= 10) {
    echo $i++;
}

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

// COME FROM: "https://www.php.net/manual/en/control-structures.do.while.php"
do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    echo "i is ok";
} while (0);
