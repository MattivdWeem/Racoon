# Racoon
php framework


#intro

## features


### Routing
`/App/Routes/Routes.php`

Every route is called via a function which requires a request, middleware and a callback

    $router->get(
        '/hello/:name',
        [
            new \App\Middleware\Authentication()
        ],
        function($req, $res, $par)
        {
            return 'hi, '.$par['name'].'<br />Welcome to Racoon';
        }
    );