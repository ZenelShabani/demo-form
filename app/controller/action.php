<?php

class actionController{
    function index(){
        die('nothing submitted');
    }
    function process(){
        $submit = Request::post('submit') ? true : false;
        $username = Request::post('username');
        $email = Request::post('email');
        Form::handleForm($submit,$username,$email);
    }
}