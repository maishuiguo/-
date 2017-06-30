<?php

class main{
    function __construct(){
          $smarty=new Smarty();
          $smarty->setCompileDir("compile");
          $smarty->setTemplateDir("template/admin");
          $this->smarty=$smarty;
          $this->session=new session();
    }

    function jump($message,$url){
      echo "<script>alert('{$message}');location.href='{$url}';</script>";
    }
}