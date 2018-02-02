<?php

namespace Core\Controller;

abstract class AbsController {

    const VIEW_PATH = "/app/core/view/pages/",
        TEMP_PATH = "/app/core/view/templates/";

    protected function renderView($fileName, array $params = [], string $includeTemplate = "") {
        $__viewFile = APP_DIR . self::VIEW_PATH . $fileName . ".php";
        $__tempPart = array(
            "h" => APP_DIR . self::TEMP_PATH . $includeTemplate ."/header.php",
            "f" => APP_DIR . self::TEMP_PATH . $includeTemplate ."/footer.php"
        );
//        var_dump($__tempPart);

        if(!file_exists($__viewFile))
            // todo exception;
            die("beeeee....");
        ob_start();
        extract($params);
        ob_implicit_flush(false);
        if(file_exists($__tempPart['h'])) include_once $__tempPart['h'];
        require $__viewFile;
        if(file_exists($__tempPart['f'])) include_once $__tempPart['f'];
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}