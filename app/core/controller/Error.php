<?php

namespace Core\Controller;

class Error extends AbsController {
    public function page404() {
        echo $this->renderView('404', ["uri" => $_SERVER['REQUEST_URI']], "temp1");
    }
}