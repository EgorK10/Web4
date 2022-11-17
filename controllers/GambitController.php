<?php
require_once "TwigBaseController.php";

class GambitController extends TwigBaseController {
    public $template = "__object.twig";
    public $title = "Gambit";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['link'] = "/gambit";
        $context['imagelogo'] = "/resources/images/GambitLogo.jpg";

        return $context;
    }
}