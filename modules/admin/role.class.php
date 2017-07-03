<?php
class role extends main {
    function add(){
        $this->smarty->display("addRole.html");
    }

    function del(){

    }

    function addCon(){
        $rname=$_POST["rname"];
        $db=new db("role");
        if($db->insert("rname='{$rname}'")>0){
            $this->jump("添加成功","index.php?m=admin&f=role&a=add");
        }
    }


}