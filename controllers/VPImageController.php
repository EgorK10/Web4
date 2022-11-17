<?php
require_once "TwigBaseController.php";

class VPImageController extends VPController {
    public $template = "__base_image.twig";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['image'] = "/resources/images/VP.jpg";
        $context['is_image'] = true;

        return $context;
    }
}