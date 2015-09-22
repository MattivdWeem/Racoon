# Racoon
php framework


#intro

## features


### Routing
`/App/Routes/Routes.php`

Every route is called via a function which requires a request, middleware and a callback.
Since Racoon runs on runtime, output can be shown when the route is reached, however the preffered method is using the
runtime nodes. These are used automaticly and only require you to return all output. The app runtime will render your
out put in any format

Allowed methods are the basic CRUD methods `GET, POST, UPDATE, DELETE, PUT`

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

## Middleware


