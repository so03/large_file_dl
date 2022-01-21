<?php

function app_log($text) {
    $timestamp = date("Y-m-d H:i:s");
    file_put_contents(__DIR__ . '/../app.log', "[{$timestamp}] " . $text . PHP_EOL, FILE_APPEND);
}