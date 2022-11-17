<?php
require_once "TwigBaseController.php";

class MainController extends TwigBaseController {
    public $template = "main.twig";
    public $title = "СНГ CS:GO";

    public function getContext() : array
    {
        $context = parent::getContext();

        $context['list'] = [
            [
                "title" => "NAVI",
                "url" => "/navi",
            ],
            [
                "title" => "Gambit Esports",
                "url" => "/gambit",
            ],
            [
                "title" => "Virtus Pro",
                "url" => "/vp",
            ]
        ];

        return $context;
    }
}