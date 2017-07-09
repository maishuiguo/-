<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 10:33
 */
class show extends indexMain{
    function add(){
        $this->smarty->display("p-show.html");
    }
}