<?php
//    $file=$_FILES['file'];
//    $size=20*1024*1024;
//    $type=array("image/png","image/jpeg","image/gif","image/svg");
//    $date=date("y-m-d");
//    $path="../imgupload/".$date;
//    if(!file_exists($path)){
//        mkdir($path);
//    }
//    $name=explode('.',$file['name']);
//    $namechuo=time();
//    $namenew=md5($namechuo).mt_rand(0,10000).".".$name[1];
//
//
//    if(is_uploaded_file($file['tmp_name'])){
//        if(move_uploaded_file($file['tmp_name'],$path.'/'.$namenew)){
//            if(in_array($file['type'],$type)){
//                if($file['size']<$size){
//                    echo 'http://localhost/5.2phpyufa/Mycms/imgupload'.'/'.$date."/".$namenew;
////                    echo "ok";
//                }else{
//                   echo "no-size";
//                }
//            }else{
//                echo "no-type";
//            }
//        }
//    }
    class upload{
        public $size;
        public $type="image/png,image/jpeg,image/gif,image/svg";
        public $path="upload";
        public $path2;
        public $namenew;
        public $data;
        public $date;
        public function __construct(){
            $this->size=1024*1024*10;
        }
//        1.接收文件
        private function accept($attr){
            $this->data=$_FILES[$attr];
        }
//        2.检查
        private function check(){
            if(is_uploaded_file($this->data['tmp_name'])){
                if(strrpos($this->type,$this->data['type'])){
                    if($this->data['size']<$this->size){
//                        echo "ok";
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }
        }
//        3.创建路径
        private function mkdir(){
            //文件路径
            if(!is_dir($this->path)){
                mkdir($this->path);
            }
            $this->path2=$this->path."/".date("y-m-d");
            if(!file_exists($this->path2)){
                mkdir($this->path2);
            }
            //文件名
            $this->namenew=md5(time().mt_rand(0,10000)).".".$this->data['name'];
        }
//        4.移动
        private function movefile(){
            move_uploaded_file($this->data['tmp_name'],$this->path2."/".$this->namenew);
            echo $this->path2."/".$this->namenew;
        }
//        5.调用
        public function move(){
            $this->accept('file');
            if($this->check()){
                $this->mkdir();
                $this->movefile();
            };
        }
    }











