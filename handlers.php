<?php

$fatalErrors = E_ERROR | E_USER_ERROR | E_COMPILE_ERROR | E_CORE_ERROR | E_PARSE;

register_shutdown_function(function() use ($display, $fatalErrors) {
    $error = error_get_last();
    if ($error && $error['type'] & $fatalErrors) {
        $display('<h1>There was an error!</h1>', 501, ['X-Error-Line' => $error['line']]);
    }
});

$logger = function($info) {
    echo $info;

    // send an email, a text, or both!
    // or use a PSR-3 logger instead
};

set_exception_handler(function(\Exception $e) use ($display, $logger) {
    if ($e->getMessage() === 'Oh noes!') {
        $display('<h1>No Tables allowed</h1>', 403);
        $logger('Oh noes exception dispatched');
        exit(0);
    }

    $logger($e->getTraceAsString());
});

set_error_handler(function($level, $message, $file, $line) use ($logger) {
    $logger('A notice happened on ' . $file . ':' . $line . ': ' . $message);
}, E_NOTICE);
