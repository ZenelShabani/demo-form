<?php

class Language{
    public static $lang;
    function __construct()
    {
        $lang = Cookie::exists('lang') ? strtolower(Cookie::get('lang')) : 'en';
        $lang_file = __DIR__.'/../lang/'.$lang.'.json';

        if(file_exists($lang_file)){
            self::loadLanguage($lang_file);
        }else{
            $lang = 'en';
            $lang_file = __DIR__.'/../lang/en.json';
            self::loadLanguage($lang_file);
        }

        Cookie::set("lang", $lang, time() + (10 * 365 * 24 * 60 * 60));
    }

    public static function get($k){
        return isset(self::$lang[$k]) ? self::$lang[$k] : die($k.' not found in language file');
    }

    public static function loadLanguage($p){
        self::$lang = json_decode(file_get_contents($p),true);
    }
}