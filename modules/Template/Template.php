<?php

class Template{

    private function __construct(){}

    public static function getInstance(){

        static $inst = null;
        if($inst === null){
            //if twig ins't installed, call the .html by default render method.
            if (file_exists("././vendor/twig/twig/src/Environment.php")){
                $loader = new Twig\Loader\FilesystemLoader('././templates');
                $inst = new Twig\Environment($loader);
            }else {
                $inst = new Template();
            }
        }
        return $inst;
    }
    public function render($tpl, $data = array()){
        if (file_exists('templates/' . $tpl . '.php')) {
            require 'templates/' . $tpl . '.php';
        }
    }
}