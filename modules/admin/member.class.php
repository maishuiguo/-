<?php
class member extends main {
    function show(){
        $db=new db("member");

        $result=$db->select();
        $this->smarty->assign("result",$result);

       $this->smarty->display("showMember.html");
    }
}