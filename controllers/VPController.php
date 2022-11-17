<?php
require_once "TwigBaseController.php";

class VPController extends TwigBaseController {
    public $template = "__object.twig";
    public $title = "Virtus Pro";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['link'] = "/vp";
        $context['imagelogo'] = "/resources/images/VPLogo.jpg";

        return $context;
    }
}