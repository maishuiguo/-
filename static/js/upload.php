<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 4017/5/6
 * Time: 14:47
 */
//上传文件
header("content-type:text/html;charset=utf8");
date_default_timezone_set("Asia/Shanghai");
var_dump($_FILES);
$file=$_FILES['file'];
$size=40*1044*1044;
$typearr=array(
    'image/jpeg'=>'jpg',
    'image/gif'=>'gif',
    'image/png'=>'png');
$path='../../upload';
if($file['error']==0){
    echo '1';
    $type=$file['type'];
    $ex=explode('.',$file['name'])[1];
    if(in_array($ex,$typearr)&&array_key_exists($type,$typearr)){
        echo '4';
        if($file['size']<=$size){
            echo '4';
            $name=time().".$ex";
            if(!file_exists('upload')){
                mkdir('upload');
            }
            if(is_uploaded_file($file['tmp_name'])){
                move_uploaded_file($file['tmp_name'],$path.'/'.$name);
                echo '上传成功';
            }
        }else{
            echo '上传失败，文件过大';
        }
    }
}else{
    echo '上传失败';
}