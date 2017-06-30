<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 15:49
 */
    class Fun{
        public function __construct(){
            $this->str='';
        }
        public function digui($db,$category,$rid,$n=0,$current){
            $sql="select * from $category WHERE rid=$rid";
            $result=$db->query($sql);
            $string=str_repeat('┗',$n);
            while($row=$result->fetch_assoc()){
                if($current==$row['cid']){
                    $this->str.="
                    <option selected value={$row['rid']}>$string{$row['rname']}</option>
                ";
                }else{
                    $this->str.="
                    <option value={$row['rid']}>$string{$row['rname']}</option>
                ";
                }
                $this->digui($db,$category,$row['rid'],$n+1,$current);
            }
        }


        public function table($db,$category,$parentid,$n=0){
            $sql="select * from $category WHERE parentid=$parentid";
            $result=$db->query($sql);
//            var_dump($result);
//            var_dump($result->fetch_all(MYSQLI_ASSOC));
            $this->str.="<ul>";
            $strings=str_repeat('┗',$n);
            while($row=$result->fetch_assoc()){
                    $this->str.="<li><span>{$row['catename']}</span>  <span>父id:{$parentid}</span>
<a href='deletecategory.php?id={$row['cid']}'>删除</a> <a href='updatecategory.php?id={$row['cid']}'>修改</a><div>是否在导航栏显示:<span>{$row['isshow']}</span></div>";
                $this->table($db,$category,$row['cid'],$n+1);
            }
            $this->str.="</li></ul>";
        }


        public function table2($db,$category,$parentid,$n=0){
            $sql="select * from $category WHERE parentid=$parentid";
            $result=$db->query($sql);
            $this->str.="<ul>";
            $strings=str_repeat('┗',$n);
            while ($row = $result->fetch_assoc()) {
                //  1. 编程类    2.管理类
                $id = $row["cid"];
//                var_dump($id);
                $sql = "select * from category where parentid=".$id;
                $re = $db->query($sql);
                $catename = $row["catename"];
//                $strings=str_repeat('L',$n);
//                var_dump(mysqli_num_rows($re)>0);
                if(mysqli_num_rows($re)>0){
                    $this->str .= "<li> <span>{$catename}</span>";
                } else {
                    $this->str .= "<li> <a href='show33.php?id={$id}' target='showCon'>{$catename}</a>";
                }
                $this->table2($db,$category,$row['cid'],$n+1);
            }
            $this->str.="</li></ul>";
        }


        public function position($db,$table){
            $sql="select * from $table";
            $result=$db->query($sql);
            while($row=$result->fetch_assoc()){
                $this->str.="
                <tr>    
                    <td>{$row['tid']}</td>
                    <td>{$row['tname']}</td>
                    <td>
                        <a href='manageposition.php?pid={$row['tid']}'>编辑</a>
                        <a href='deleteposition.php?pid={$row['tid']}'>删除</a>
                    </td>
                </tr>
           ";
            }
        }
    }

