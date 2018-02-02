<?php

namespace Core\Controller;

class Index extends AbsController {
    public function index() {
        echo $this->renderView(
            'testpage',
            [
                "pageTitle" => "TestPage | MVC",
                "seoh1" => "Hello",
                "aa" => 54,
                "wasd" => "hhh",
                "arr" => [
                    1,2,3,"oo" => 0
                ]
            ],
            "temp1"
        );
    }
}