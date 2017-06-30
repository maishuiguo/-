<?php
/*
 *   加上php 高级用法
 *   编程思想
 *   项目的经验
 *   高度的抽象
 *   语法
 *
 *   mvc 架构
 *
 *   把相应的数据放到相应的视图里面
 *
 *   前台和后台的分离
 *
 *    m  数据
 *
 *    v  视图
 *
 *    c  控制器  路由->地址栏->
 *
 * */




class  Smarty{
    public $compileDir="compile";
    public $templateDir="template";

    function setCompileDir($dir){
        $this->compileDir=$dir;
        if(!is_dir($this->compileDir)){
            mkdir($this->compileDir);
        }
    }
    function setTemplateDir($dir){
        $this->templateDir=$dir;
        if(!is_dir($this->templateDir)){
            mkdir($this->templateDir);
        }
    }

    function assign($attr,$val){
        $this->arr[$attr]=$val;
    }

    function display($file){
        $url=$this->templateDir."/".$file;
        $con=file_get_contents($url);

        $str= preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->arr["$1"]?>',$con);

        $compilefile=$this->compileDir."/index.php";
        file_put_contents($compilefile,$str);
        include $compilefile;

    }


}