<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 15:55
 */
    header("content-type:text/html;charset=utf-8");
    define('MVC','ok');
//    var_dump($_SERVER);
    //项目运行的根目录
    define('ROOT_PATH',substr($_SERVER['SCRIPT_FILENAME'],0,strrpos($_SERVER['SCRIPT_FILENAME'],'/')+1));
//    echo ROOT_PATH.'<br>';
    //引擎文件的目录
    define('LIBS_PATH',ROOT_PATH.'libs/');
//    echo LIBS_PATH.'<br>';
    //tem目录
    define('TEM_PATH',LIBS_PATH.'tem/');
    //模块目录
    define('MODULES_PATH',ROOT_PATH.'modules/');
//   echo MODULES_PATH.'<br>';
    //视图目录
//   echo TEM_PATH.'<br>';

    //当前运行的项目的根目录
    define('URL_PATH',strtolower(substr($_SERVER['SERVER_PROTOCOL'],0,strrpos($_SERVER['SERVER_PROTOCOL'],'/'))).'://'.$_SERVER['HTTP_HOST'].'/');
//    echo URL_PATH.'<br>';
   //当前运行的文件的目录
   define('FILE_PATH',URL_PATH.'5.2phpyufa/Mycms3/');
//    echo FILE_PATH.'<br>';
    //静态目录
    define('STATIC_PATH',FILE_PATH.'static'.'/');
//    echo STATIC_PATH.'<br>';
    //css
    define('CSS_PATH',STATIC_PATH.'css'.'/');
//    echo CSS_PATH.'<br>';
    //js
    define('JS_PATH',STATIC_PATH.'js'.'/');
//    echo JS_PATH.'<br>';
    //img
    define('IMG_PATH',STATIC_PATH.'img'.'/');
//    echo IMG_PATH.'<br>';
    require_once LIBS_PATH."route.class.php";
    require_once LIBS_PATH."db.class.php";
    require_once LIBS_PATH."smarty/libs/Smarty.class.php";
    require_once LIBS_PATH."adminMain.class.php";
    require_once LIBS_PATH."code.class.php";
    require_once LIBS_PATH."session.class.php";
//    require_once LIBS_PATH."tree.class.php";
    $obj=new Route();
    $obj->getInfo();

