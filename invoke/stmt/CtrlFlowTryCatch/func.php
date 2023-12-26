<?php

function triggerException()
{
    throw new Exception("Error occurred");
}

function logError($message)
{
    echo "Logging error: " . $message . "\n";
}

function processError(Exception $e)
{
    logError($e->getMessage());
}

try {
    triggerException();
} catch (Exception $e) {
    processError($e);
}