<?php
require_once "TwigBaseController.php";

class GambitDescriptionController extends GambitController {
    public $template = "Gambit-description.twig";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['is_description'] = true;

        return $context;
    }
}