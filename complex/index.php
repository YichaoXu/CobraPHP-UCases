<?php

include 'math.php';

use complex\Generator;
use const complex\mod;

echo "1 + 1 = ", add(1, 1), "\n";
echo "circle: ", circle_area(2.0);

$generator = new Generator(123);
echo $generator->randomInt();

echo mod;