<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 10:37
 */
function e($parmas){
    if(is_array($parmas)){
        var_dump($parmas);
    }elseif (is_string($parmas)){
        echo $parmas;
    }else{
        echo $parmas;
    }
}