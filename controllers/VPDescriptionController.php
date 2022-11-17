<?php
require_once "TwigBaseController.php";

class VPDescriptionController extends VPController {
    public $template = "VP-description.twig";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['is_description'] = true;

        return $context;
    }
}