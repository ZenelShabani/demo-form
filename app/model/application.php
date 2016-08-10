<?php


class App{

    public static $user = array();

    public static function init(){
        new Url();
        new Language();
        $classname = Url::$action.'Controller';
        $task = Url::$task;
        if(class_exists($classname)){
            $action = new $classname;
            if(method_exists($action,Url::$task)){
                $action->$task();
            }else{
                echo 'Page does not exist!';
            }
        }else{
            echo 'Controller not found!';
        }
    }

    private static function current_user_data(){
        if(userlogin::isLogged() && empty(App::$user)){
            self::$user = userlogin::getData(User::$pub_data,'users','usr_id = '.Session::get('usr_id').'');
            return true;
        }
        self::$user['usr_id'] = generateId(8);
        return false;
    }

    public static function verifyToken(){
        if(Request::get('t')){
            return Token::verify();
        }
        return false;
    }
}