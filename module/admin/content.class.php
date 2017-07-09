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
        $Engtitle=$_POST['Engtitle'];
        $kucun=$_POST['kucun'];
        $price=$_POST['price'];
        $keywords=$_POST['keywords'];
        $con=$_POST['con'];
        $con2=$_POST['con2'];
        $con3=$_POST['con3'];
        $imgurl=$_REQUEST["thumb"];
        $pe=$_POST["posid"];
        $posid=implode(";",$_POST["posid"]);

        $db=new db("content");
        $result=$db->insert("title='{$title}',Engtitle='{$Engtitle}',price='{$price}',kucun='{$kucun}',keywords='{$keywords}',con='{$con}',con2='{$con2}',con3='{$con3}',posid='{$posid}',cid='{$cid}',thumb='{$imgurl}'");

        if($result>0){
            $this->jump("添加成功","index.php?m=admin&f=content&a=add");
        }
    }

    function editcon(){
        $this->smarty->display("editCon.html");
    }


}