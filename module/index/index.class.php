<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9 0009
 * Time: 9:28
 */
class index extends indexMain{
    function init(){
        $db=new db("content");
        $result=$db->where("posid=1")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("index.html");
    }
}