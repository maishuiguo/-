<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 11:20
 */
class mypage extends indexMain{
    function add(){
        $login=$this->session->get("hyylogin");
        $this->smarty->assign("login",$login);
        $this->smarty->display("hyymypage.html");
    }
}