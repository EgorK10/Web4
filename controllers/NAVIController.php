<?php
require_once "TwigBaseController.php";

class NAVIController extends TwigBaseController {
    public $template = "__object.twig";
    public $title = "Navi";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['link'] = "/navi";
        $context['imagelogo'] = "/resources/images/NaviLogo.png";

        return $context;
    }
}