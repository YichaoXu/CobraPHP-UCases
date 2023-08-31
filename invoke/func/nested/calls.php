<?php

function callee() {
    echo "IN CALLEE\n";
}
function caller() {
    echo "IN CALLER\n";
    callee(); // Line 3
}

caller(); // Line 6