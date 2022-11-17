<?php
require_once "BaseController.php";

class TwigBaseController extends BaseController {
    public $title = "";
    public $template = "";
    protected \Twig\Environment $twig;
    
    public function __construct($twig)
    {
        $this->twig = $twig;
    }
    
    public function getContext() : array
    {
        $context = parent::getContext();
        $context['title'] = $this->title;
        $context['menu'] = [
            [
                "title" => "CS:GO СНГ",
                "url" => "/",
            ],
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
    
    public function get() {
        echo $this->twig->render($this->template, $this->getContext());
    }
}