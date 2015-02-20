<?php

$process = function($get, $post, $server) {
    $response = '<h1>Hey ' . ($get['name'] ?: 'dude') . '</h1>';

    // raises E_NOTICE
    // $response = '<h1>Hey ' . ($get['first_name'] ?: 'dude') . '</h1>';

    // throws exception
    //if ($get['name'] === 'Bobby Tables')
    //    throw new RuntimeException('Oh noes!');

    // throws parse error
    // return [$response]];

    return [$response];
};

