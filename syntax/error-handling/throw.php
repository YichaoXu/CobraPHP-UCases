<?php

try{
    throw new Exception("");
} catch (Exception $e){

}finally {

}

try{
    false or throw new Exception("");
} catch (Exception $e){

}finally {

}



