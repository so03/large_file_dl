<?php
require_once('./helpers/logging.php');

header('Content-Disposition: attachment; filename=dummy.large');

app_log("download start.");

readfile(__DIR__ . '/static/dummy.large');

app_log("download end.");