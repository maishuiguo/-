<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 20:50
 */

if(!defined('MVC')){
    echo "非法入侵";
    exit;
}
header("content-type:text/html;charset=utf-8");
class Db{
    public $db;
    public $opts=array();
    //实例化自运行
    function __construct($table){
        $arr=include LIBS_PATH."config.php";
//        var_dump($arr['database']);
        $this->db=new mysqli($arr['database']['host'],$arr['database']['user'],$arr['database']['pass'],$arr['database']['database'],$arr['database']['port']);
        if(mysqli_connect_errno()){
            echo "连接数据库失败";
            exit;
        }
        $this->db->query("set names utf8");
        //
        $this->table=$table;
        $this->opts['font']="*";
        $this->opts['where']=$this->opts['order']=$this->opts['limit']=$this->opts['limit']="";
    }
    //查询
    public function select(){
        $sql="select ".$this->opts['font']." from ".$this->table.$this->opts['where'].$this->opts['order'].$this->opts['limit'];
        $result=$this->db->query($sql);
        $array=array();
        while($row=$result->fetch_assoc()){
            $array[]=$row;
        }
        return $array;
    }
    //多条件查询
    public function selectmore($tables){
        $sql="select ".$this->opts['font']." from ".$tables.$this->opts['where'].$this->opts['order'].$this->opts['limit'];
        $result=$this->db->query($sql);
        $array=array();
        while($row=$result->fetch_assoc()){
            $array[]=$row;
        }
        return $array;
    }
    //增加
    public function insert($val=""){
        $attr="";
        $vals="";
        if(!empty($val)){
            $array=explode(",",$val);
//            var_dump($array);
            foreach ($array as $v){
                $arr=explode("=",$v);
                $attr.=$arr[0].",";
                $vals.=$arr[1].",";
//                var_dump($v);
            }
//            var_dump($attr);
//            var_dump($vals);
            $this->opts['font']=substr($attr,0,-1);
            $this->opts['Setfont']=substr($vals,0,-1);
        }
        $sql="insert into ".$this->table ." (".$this->opts['font'].") " ." VALUES "." (".$this->opts['Setfont'].")";
//        echo $sql;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    //删除
    public function del($val=""){
        $this->opts['where']=!empty($val)?" WHERE ".$val:$this->opts['where'];
        $sql="delete from ".$this->table.$this->opts['where'];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    //修改
    public function update($val=""){
        if(!empty($val)){
            $val=strtolower($val);
            $index=strrpos($val,"where");
            if($index>-1){
                if($index==0){
                    $this->opts['where']=substr($val,0);
                }else{
                    $this->opts['where']=substr($val,$index);
                    $this->opts['Setfont']=substr($val,0,$index);
                }
            }else{
                $this->opts['Setfont']=substr($val,0);
            }
        }
        $sql="update ".$this->table." set ".$this->opts['Setfont'].$this->opts['where'];
        echo $sql;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    public function font($parmas){
        $this->opts['font']=$parmas;
        return $this;
    }
    public function Setfont($parmas){
        $this->opts['Setfont']=$parmas;
        return $this;
    }
    public function where($parmas){
        $this->opts['where']=" WHERE ".$parmas;
        return $this;
    }
    public function order($parmas){
        $this->opts['order']=" ORDER BY ".$parmas;
        return $this;
    }
    public function limit($parmas){
        $this->opts['limit']=" LIMIT ".$parmas;
        return $this;
    }
}

