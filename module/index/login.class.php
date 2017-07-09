<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/10 0010
 * Time: 4:58
 */

class login extends indexMain{
    function info(){
        $this->smarty->display("hyylogininfo.html");
    }
    function log(){
        $this->smarty->display("hyylogin.html");
    }
    function reg(){
        $this->smarty->display("hyyreg.html");
    }
    function phone(){
        $this->smarty->display("hyyphonelogin.html");
    }
    public function code(){
        $code=new code();
        $code->fonturl="static/font/georgiai.ttf";
        $code->output();
        $code->getstr();
    }
}