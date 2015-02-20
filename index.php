<?php

$display = function($content, $status = null, $headers = []) {
    if ($status)
        http_response_code($status);
    foreach ($headers as $key => $value)
        header($key . ': ' . $value);
    echo $content;
};

include __DIR__ . '/handlers.php';
include __DIR__ . '/logic.php';

call_user_func_array($display, $process($_GET, $_POST, $_SERVER));
