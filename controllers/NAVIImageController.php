<?php
require_once "TwigBaseController.php";

class NAVIImageController extends NAVIController {
    public $template = "__base_image.twig";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['image'] = "/resources/images/NAVI.jpeg";
        $context['is_image'] = true;

        return $context;
    }
}