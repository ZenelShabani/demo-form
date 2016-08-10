<?php

class Cookie{
    public static function get($str){
        if(isset($_COOKIE[$str])){
            $val = $_COOKIE[$str];
            return Filter::xssfilter($val);
        }else{
            return null;
        }
    }

    public static function exists($str){
        return self::get($str) ? true : false;
    }

    public static function set($k,$v,$t,$p = '/'){
        setcookie($k, $v,$t,$p);
    }
}