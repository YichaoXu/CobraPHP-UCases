<?php

namespace n01;
// declare the file in n01;
function requiree_func()
{
    echo "requiree\n";
}

///*
// * The following calls work well because the file was
// * required by requirer.php where requirer_func has
// * already defined at runtime.
// */
//n01\requirer_func(); // requirer
requiree_func(); // requiree
//
///*
// * The following calls raise exceptions because the alias
// * will worked in each file. As we mentioned, the alias will
// * be used during compiling and based on each file, so the
// * line03 in requirer.php will not influence those calls in
// * requiree.php
// */
//alias\requirer_func(); //error
//alias\requirer_func(); //error

