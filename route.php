<?php
Helper::autoLoadController('./Controller');
$base  = dirname($_SERVER['PHP_SELF']);
if ($base !== '/'  && $base !== '\\') {
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}






$klein = new \Klein\Klein();
$klein->respond('GET', '/hello-world/123', function ($request, $response) {
    var_dump($_REQUEST);
    return 'Hello World!';
});

$klein->respond('GET', '/test', function ($request, $response) {
    $controller = new TestController($request, $response);
    echo "hello";
});

$klein->respond('GET', '/', function ($request, $response) {
    $controller = new IndexController($request, $response);
    $controller->index();
});

$klein->respond('GET', '/home', function ($request, $response) {
    $controller = new IndexController($request, $response);
    $controller->index();
});

$klein->respond('GET', '/intro', function ($request, $response) {
    $controller = new IndexController($request, $response);
    $controller->intro();
});

$klein->respond('GET', '/room', function ($request, $response) {
    $controller = new IndexController($request, $response);
    $controller->room();
});

$klein->with('/room', function ($router) {

    $router->respond('GET', '/', function ($request, $response) {
        $controller = new IndexController($request, $response);
        $controller->room();
    });

    $router->respond('GET', '/deluxe', function ($request, $response) {
        $controller = new IndexController($request, $response);
        $controller->deluxe();
    });

    $router->respond('GET', '/superior', function ($request, $response) {
        $controller = new IndexController($request, $response);
        $controller->superior();
    });
    
    $router->respond('GET', '/vip', function ($request, $response) {
        $controller = new IndexController($request, $response);
        $controller->info();
    });
});





$klein->respond('GET', '/checkout', function ($request, $response) {
    $controller = new IndexController($request, $response);
    $controller->checkOut();
});

$klein->respond('GET', '/contact', function ($request, $response) {
    $controller = new IndexController($request, $response);
    $controller->contact();
});

$klein->respond('GET', '/service', function ($request, $response) {
    $controller = new IndexController($request, $response);
    $controller->service();
});

$klein->respond('GET', '/admincp', function ($request, $response) {
    $controller = new AdminController($request, $response);
    $controller->indexlogin();
});



$klein->with('/admincp', function ($router) {
    $router->respond(['GET', 'POST'], '/', function ($request, $response) {
        $controller = new AdminController($request, $response);
        $controller->indexlogin();

    });
    $router->respond('POST', '/loginaction', function ($request, $response) {
        $controller = new AdminController($request, $response);
        $controller->login();
        if ($controller->login() == true) {
            header('Refresh:2; url=/QLKS/admincp/home');
            //echo "dang nhap thanh cong";
        }
        else{
            header('Refresh:2; url=/QLKS/admincp');
            //echo "dang nhap loi";
        }
    });

    $router->respond('GET', '/home', function ($request, $response) {
        // Helper::checkperMission([1, 2]);
        $controller = new AdminController($request, $response);
        $controller->index();
    });

    $router->respond('GET', '/bill', function ($request, $response) {
        // Helper::checkperMission([1, 2]);
        $controller = new AdminController($request, $response);
        $controller->bill();
    });

    $router->respond('GET', '/customer', function ($request, $response) {
        // Helper::checkperMission([1, 2]);
        $controller = new AdminController($request, $response);
        $controller->customer();
    });

    $router->respond('GET', '/introduction', function ($request, $response) {
        // Helper::checkperMission([1, 2]);
        $controller = new AdminController($request, $response);
        $controller->introduction();
    });

    $router->respond('GET', '/member', function ($request, $response) {
        // Helper::checkperMission([1, 2]);
        $controller = new AdminController($request, $response);
        $controller->member();
    });

    $router->respond('GET', '/room', function ($request, $response) {
        // Helper::checkperMission([1, 2]);
        $controller = new AdminController($request, $response);
        $controller->room();
    });

    $router->respond('GET', '/service', function ($request, $response) {
        // Helper::checkperMission([1, 2]);
        $controller = new AdminController($request, $response);
        $controller->service();
    });

    $router->respond('GET', '/type-room', function ($request, $response) {
        // Helper::checkperMission([1, 2]);
        $controller = new AdminController($request, $response);
        $controller->typeRoom();
    });
});

$klein->dispatch();
