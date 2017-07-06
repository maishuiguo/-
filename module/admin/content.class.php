<?php
class content extends main {
    function add(){
        $db=new db("");
        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $db=new db("position");
        $result=$db->select("");
        $this->smarty->assign("result",$result);
        $this->smarty->display("addCon.html");
    }

    function upload(){
        $obj=new upload();
        $obj->move();
    }

    function addCon(){
        $cid=$_POST['pid'];
        $title=$_POST['title'];
        $keywords=$_POST['keywords'];
        $con=$_POST['con'];
        $imgurl=$_REQUEST["thumb"];
        $pe=$_POST["posid"];
        var_dump($pe);
        $posid=implode(";",$_POST["posid"]);
        var_dump($posid);
        $db=new db("content");
        $result=$db->insert("title='{$title}',keywords='{$keywords}',con='{$con}',posid='{$posid}',cid='{$cid}',thumb='{$imgurl}'");
        var_dump($result);
        if($result>0){
            $this->jump("添加成功","index.php?m=admin&f=content&a=add");
        }
    }

    function editcon(){
        $this->smarty->display("editCon.html");
    }


}