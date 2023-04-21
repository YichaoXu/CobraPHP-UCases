<?php
function normalFunc(){
    static $static_var;
    global $global_var;
    echo "somethings";
}
normalFunc();