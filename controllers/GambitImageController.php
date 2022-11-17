<?php
require_once "TwigBaseController.php";

class GambitImageController extends GambitController {
    public $template = "__base_image.twig";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['image'] = "/resources/images/Gambit.jpg";
        $context['is_image'] = true;

        return $context;
    }
}