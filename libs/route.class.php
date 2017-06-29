<?php
    class Route{
        private static $dir;
        private static $file;
        private static $action;
        public  function getInfo(){
            self::$dir=(isset($_REQUEST['d'])&!empty($_REQUEST['d']))?$_REQUEST['d']:"index";
            self::$file=(isset($_REQUEST['f'])&!empty($_REQUEST['f']))?$_REQUEST['f']:"index";
            self::$action=(isset($_REQUEST['a'])&!empty($_REQUEST['a']))?$_REQUEST['a']:"init";
            $this->Info();
        }
        private function Info(){
            //拼接目录
            $fulldir=MODULES_PATH.self::$dir.'/';
            //判断有没有目录
            if(is_dir($fulldir)){
                $fullpage=$fulldir.self::$file.'.class.php';
                //判断文件在不在
                if(is_file($fullpage)){
                    include $fullpage;
                    //判断这个类在不在
                    if(class_exists(self::$file)){
                        $obj=new self::$file();
                        if(method_exists($obj,self::$action)){
                            $method=self::$action;
                            $obj->$method();
                        }else{
                            echo self::$action."这个方法不存在";
                        }
                    }else{
                        echo self::$file."这个类不存在";
                    }
                }else{
                    echo self::$file."这个文件不存在";
                }
            }else{
                echo self::$dir."这个目录不存在";
            }
        }
    }
?>