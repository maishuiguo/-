<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 11:56
 */
class pay extends indexMain{
    function add(){
        $this->smarty->display("zcy-pay.html");
    }
    function bank(){
        $this->smarty->display("zcy-bank.html");
    }
    function end(){
        $this->smarty->display("zcy-end.html");
    }
}