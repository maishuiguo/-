<?php
class tree{
    public  $str="";
    function getTree($pid,$step,$flag,$db,$table,$currentid=null){

            $currentPid=null;
            if($currentid){
               $sql="select pid from ".$table." where cid=".$currentid;

                $result=$db->query($sql);
                $row=$result->fetch_assoc();
                $currentPid=$row["pid"];
            }
            $step+=1;
            $sql="select * from ".$table." where pid=".$pid;
            $result=$db->query($sql);

            while ($row=$result->fetch_assoc()) {
                //  1. 编程类    2.管理类
                $id=$row["cid"];
                $catname=$row["cname"];
                $str=str_repeat($flag,$step);
                if($id==$currentPid) {
                    $this->str .= "<option value='{$id}' selected>{$str}{$catname}</option>";
                }else{
                    $this->str .= "<option value='{$id}' >{$str}{$catname}</option>";
                }

               $this->getTree($id,$step,$flag,$db,$table,$currentid);

            }

    }


    function getTree1($pid,$step,$flag,$db,$table){
        $step+=1;
        $sql="select * from ".$table." where pid=".$pid;
        $result=$db->query($sql);
        $this->str.="<ul>";

            while ($row = $result->fetch_assoc()) {
                //  1. 编程类    2.管理类
                $id = $row["id"];
                $catname = $row["catname"];
                //$str=str_repeat($flag,$step);
                $this->str .= "<li> <span>{$catname}</span>  <a href='delCategory.php?id={$id}'>删除</a> <a href='editCategory.php?id={$id}'>编辑</a>";

                $this->getTree1($id, $step, $flag, $db, $table);


            }
            $this->str .= "</li></ul>";


    }


    function getTree2($pid,$step,$flag,$db,$table){
        $step+=1;
        $sql="select * from ".$table." where pid=".$pid;
        $result=$db->query($sql);
        $this->str.="<ul>";

        while ($row = $result->fetch_assoc()) {
            //  1. 编程类    2.管理类
            $id = $row["id"];
            $sql="select * from category where pid=".$id;

            $re=$db->query($sql);

            $catname = $row["catname"];
            //$str=str_repeat($flag,$step);
            if(mysqli_num_rows($re)>0) {
                $this->str .= "<li> <span>{$catname}</span>";
            }else{
                $this->str .= "<li> <a href='show.php?id={$id}' target='showCon'>{$catname}</a>";
            }

            $this->getTree2($id, $step, $flag, $db, $table);


        }
        $this->str .= "</li></ul>";
        /*递归*/
    }


    function del($id,$db,$table){
        $sql="select * from ".$table ." where pid=".$id;

        $result=$db->query($sql);

        if($result->fetch_assoc()){
          echo "<script>alert('有子分类不能删除');location.href='showCategory.php';</script>";

        }else{

            $sql="delete from ".$table ." where id=".$id;
            $db->query($sql);

            if($db->affected_rows>0){
                echo "<script>alert('删除成功');location.href='showCategory.php';</script>";
            }

        }

    }

}


