<?php
require_once "TwigBaseController.php";

class NAVIDescriptionController extends NAVIController {
    public $template = "Navi-description.twig";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['is_description'] = true;

        return $context;
    }
}