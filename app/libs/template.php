<?php

class Template{

    public static function create($f,$d = array()){
        $loader = new Twig_Loader_Filesystem('../app/view');
        $twig = new Twig_Environment($loader, array(
            'cache' => '../cache/view',
            'auto_reload' => true
        ));
        $twig->registerUndefinedFunctionCallback(function ($name) {
            if (function_exists($name)) {
                return new Twig_Function_Function($name);
            }
            return false;
        });
        echo $twig->render($f.'.twig',$d);
    }
}