<?php

$router->get(
    '/hello/:name',
    [
        new \App\Middleware\Authentication()
    ],
    function($req, $res, $par)
    {
        return 'hi, '.$par['name'].'<br />Welcome to Atmosphere';
    }
);
