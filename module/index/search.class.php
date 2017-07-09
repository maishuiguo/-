<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 11:31
 */
class search extends indexMain{
    function add(){
        $this->smarty->display("zjl-qsearch.html");
    }
    function result(){
        $this->smarty->display("zjl-hsearch.html");
    }
}