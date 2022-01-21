<?php
require_once './helpers/logging.php';

app_log("someone access.");

readfile(__DIR__ . '/views/index.html');
