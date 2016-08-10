<?php
class Url
{
    public static $action, $task, $value;

    public function __construct()
    {
        self::parse();
        self::fixUrl();
    }

    public static function get($k)
    {
        if (isset($_GET[$k]) && strlen($_GET[$k]) > 0) {
            return $_GET[$k];
        }
        return false;
    }

    private static function handleTrailingSlash()
    {
        $fullurl = 'http://' . $_SERVER['HTTP_HOST'] . '/' . self::get('url');
        $url = rtrim($fullurl, '/') . '';
        if ((substr($fullurl, -1) == '/') && !empty(self::$action)) {
            header("HTTP/1.1 301 Moved Permanently");
            Redirect::to($url);
        }
    }

    public static function parse()
    {
        $url = trim(self::get('url'), '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        self::$action = isset($url[0]) ? $url[0] : null;
        self::$task = isset($url[1]) ? $url[1] : null;
        self::$value = isset($url[2]) ? $url[2] : null;
        unset($url[0], $url[1], $url[2]);
        self::handleTrailingSlash();
    }

    private static function fixUrl()
    {
        if (empty(self::$action)) {
            self::$action = 'index';
        }
        if (empty(self::$task)) {
            self::$task = 'index';
        }
    }
}