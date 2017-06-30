<?php

class route{
     private static $m;
     private static $f;
     private static $a;

     function getInfo(){
         self::$m=isset($_REQUEST["m"])&&!empty($_REQUEST["m"])?$_REQUEST["m"]:"index";
         self::$f=isset($_REQUEST["f"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"index";
         self::$a=isset($_REQUEST["a"])&&!empty($_REQUEST["a"])?$_REQUEST["a"]:"init";
         $this->getPath();

     }

     private function getPath(){
         $m=MODULE_PATH."/".self::$m;
         if(is_dir($m)){
            $f=$m."/".self::$f.".class.php";
            if(is_file($f)){
                include $f;
                if(class_exists(self::$f)){
                     $obj=new self::$f();
                    if(method_exists($obj,self::$a)){

                        $method=self::$a;
                        $obj->$method();
                    }else{
                        echo self::$a."方法不存在";
                    }

                }else{
                    echo self::$f."类不存在";
                }

            }else{
                echo $f."不存在";
            }
         }else{
             echo $m."不存在";
         }
     }
}


