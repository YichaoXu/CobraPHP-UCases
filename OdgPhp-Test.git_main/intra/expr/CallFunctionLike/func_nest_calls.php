<?php

function callee() {
    echo "IN CALLEE\n";     // Built-in echo
}
function caller() {
    echo "IN CALLER\n";     // Built-in echo
    callee();               // Line 3
}

caller();                   // Line 6