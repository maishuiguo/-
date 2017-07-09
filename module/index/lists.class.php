<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 10:22
 */
class lists extends indexMain{
    function add(){
        $this->smarty->display("p-list.html");
    }
}