<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 11:20
 */
class mypage extends indexMain{
    function add(){
        $this->smarty->display("hyymypage.html");
    }
}