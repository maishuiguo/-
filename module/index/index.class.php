<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 9:28
 */
class index extends indexMain{
    function init(){
        $this->smarty->display("index.html");
    }
}