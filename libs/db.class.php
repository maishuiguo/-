<?php

if(!defined("COMING")){
    echo "非法侵入";
    exit();
}

class db{
   private $host;//地址
   private $user;//用户名
   private $pass;//密码
   private $database;//数据库
   private $port;//端口
   public $db;//连接的资源
   function __construct($table){
       $this->table=$table;
       $config=require APP_PATH."/config.php";
        $this->host=$config["database"]["host"];
        $this->user=$config["database"]["user"];
        $this->pass=$config["database"]["pass"];
        $this->database=$config["database"]["database"];
        $this->port=$config["database"]["port"];
        $this->db=mysqli_connect($this->host,$this->user,$this->pass,$this->database,$this->port);

        if(!$this->db){
         echo mysqli_connect_error();
         exit();
        }
        $this->db->query("set names utf8");

        $this->opts["field"]="*";
       $this->opts["val"]=$this->opts["where"]=$this->opts["order"]=$this->opts["limit"]="";

   }



   function select($sql=""){
       if(empty($sql)) {
           $sql = "select " . $this->opts["field"] . " from " . $this->table . " " . $this->opts["where"] . " " . $this->opts["order"] . " " . $this->opts["limit"];
       }else{
           $sql=$sql;
       }
       $result=$this->db->query($sql);
       $array=array();
       while ($row=mysqli_fetch_assoc($result)){
            $array[]=$row;
       }
       mysqli_free_result($result);
       return $array;
   }

   function setField($params="*"){
       $this->opts["field"]=$params;
       return $this;
   }
   function where($params){
       $this->opts["where"]="WHERE ".$params;
       return $this;
   }
   function order($params){
       $this->opts["order"]="ORDER BY ".$params;
       return $this;
   }
    function limit($params){
        $this->opts["limit"]="LIMIT ".$params;
        return $this;
    }

   function  del($params=""){
        $this->opts["where"]=(!empty($params))?" WHERE ".$params:$this->opts["where"];

        $sql="delete from ".$this->table." ".$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;

   }
   function update($params=""){
        if(!empty($params)){
            $params=strtolower($params);
            $index=strrpos($params,"where");
           if($index>-1){
               if($index==0) {
                   $this->opts["field"]= $this->opts["field"];
               }else{
                   $this->opts["field"] = substr($params, 0, $index);
               }
              $this->opts["where"]=substr($params,$index);
           }else{
               $this->opts["field"]=$params;
               $this->opts["where"]= $this->opts["where"];

           }
        }

        $sql="update ".$this->table." set ".$this->opts["field"]." ".$this->opts["where"];
       $this->db->query($sql);
       return $this->db->affected_rows;
   }

   function insert($params=""){
       if(!empty($params)){
           $arr=explode(",",$params);
           $keys="";
           $val="";
           foreach ($arr as $v){
               $arr1=explode("=",$v);
               $keys.=$arr1[0].",";
               $val.=$arr1[1].",";
           }

           $this->opts["field"]=substr($keys,0,-1);
           $this->opts["val"]=substr($val,0,-1);
       }

       $sql="insert into ".$this->table." (".$this->opts["field"].") values (".$this->opts["val"].")";
       $this->db->query($sql);

       return $this->db->affected_rows;
   }

   function setval($params){
       $this->opts["val"]=$params;
       return $this;
   }

   function join($tables){
     $sql="select ".$this->opts["field"]." from ".$tables." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];

     $result=$this->db->query($sql);
     $array=array();
     while ($row=$result->fetch_assoc()){
            $array[]=$row;
     }

     return $array;
   }

   function close(){
       mysqli_close($this->db);
   }


}
