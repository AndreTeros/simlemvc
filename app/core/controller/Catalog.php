<?php

namespace Core\Controller;

class Catalog extends AbsController {
    public function sectionsList() {
        echo $this->renderView(
            'catalog',
            [
                "pageTitle" => "CatalogMain | MVC",
                "seoh1" => "Catalog",
            ],
            "temp1"
        );
    }
}