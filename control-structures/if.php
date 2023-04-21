<?php

function if_($a, $b){
    /* Come from: https://www.php.net/manual/en/control-structures.if.php */
    if ($a > $b)
        echo "a is bigger than b";
}

function if_else($a, $b){
    /* Come from: https://www.php.net/manual/en/control-structures.else.php */
    if ($a > $b) {
        echo "a is greater than b";
    } else {
        echo "a is NOT greater than b";
    }
}

function if_elseif($a, $b){
    /* Come from: https://www.php.net/manual/en/control-structures.elseif.php */
    if ($a > $b) {
        echo "a is bigger than b";
    } elseif ($a == $b) {
        echo "a is equal to b";
    } else {
        echo "a is smaller than b";
    }
}

function if_else_if($a, $b){
    /* Come from: https://www.php.net/manual/en/control-structures.elseif.php */
    if ($a > $b) {
        echo "a is bigger than b";
    } else if ($a == $b) {
        echo "a is equal to b";
    } else {
        echo "a is smaller than b";
    }
}

?>

<!--https://www.php.net/manual/en/control-structures.alternative-syntax.php-->
<?php
$a = 5
?>

<?php if ($a == 5): ?>
    A is equal to 5
<?php endif; ?>

<?php
if ($a == 5):
    echo "a equals 5";
    echo "...";
elseif ($a == 6):
    echo "a equals 6";
    echo "!!!";
else:
    echo "a is neither 5 nor 6";
endif;
