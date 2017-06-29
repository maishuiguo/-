<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 18:07
 */
class session{
    public function __construct(){
        session_start();
    }
    public function set($attr,$val){
        $_SESSION[$attr]=$val;
    }
    public function get($attr){
//        return isset($_SESSION[$attr])?$_SESSION[$attr]:null;
        return $_SESSION[$attr];
    }
    public function del($attr){
        unset($_SESSION[$attr]);
    }
    public function clear(){
        foreach ($_SESSION as $k=>$v){
            unset($_SESSION[$k]);
        }
    }
}