<?php

class Form{

    private static $username;
    private static $email;
    private static $errors = false;
    private static $return = array();

    private static $apikey = "HXWJT83MRHHYGEBTVBX5";
    private static $apiusr = "zenelshabani";

    public static function handleForm($submit,$username,$email){
        if($submit){
            self::$username = self::verifyInput($username,"text");
            self::$email = self::verifyInput($email,"email");
            $resp = 0;
            if(!self::$errors){
                self::postInput();
            }else{
                self::$return['msg'] = "Something Failed";
            }
        }else{
            self::$return['msg'] = "Please fill in the form";
        }
        loadJSON(self::$return);
    }

    private static function verifyInput($str,$t){
        switch($t){
            case "text":
                self::verifyText($str);
                break;
            case "email":
                self::verifyEmail($str);
                break;
        }
        return $str;
    }

    private static function postInput(){
        $resp = json_decode(file_get_contents('https://www.ymlp.com/api/Contacts.Add?Key='.self::$apikey.'&Username='.self::$apiusr.'&Email='.self::$email.'&GroupID=1&Output=json'),true);
        $code = $resp['Code'];
        $output = $resp['Output'];

        self::$return['success'] = $code == 0 ? true : false;
        self::$return['msg'] = $output;
    }

    private static function verifyText($str){
        return preg_match('/^[A-Za-z0-9_]+$/',$str) ? true : self::$errors = true;
    }

    private static function verifyEmail($str){
        return filter_var($str, FILTER_VALIDATE_EMAIL) ? true : self::$errors = true;
    }

}