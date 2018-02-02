<?php

namespace Core\Route;

//use Core\Route\Routing;

class Route {
    public static function start() {
        $router = new Routing(APP_DIR . "/app/settings/routing2.xml",true);
        $result = $router->get($_SERVER['REQUEST_URI']);
        $controllerClass = "Core\\Controller\\" . $result["controller"];
        if(class_exists($controllerClass)) {
            $c = new $controllerClass();
            $controllerMethod = $result["action"];
            if(method_exists($c,$controllerMethod)) {
                call_user_func_array([$c, $controllerMethod], $result["values"]);
            }
        } else {
            // todo: correct exception
            throw new \Exception("Controller Class not found");
        }

    }
}