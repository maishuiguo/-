<?php
    class adminMain{
        public function __construct(){
            $smartyobj=new Smarty();
            $smartyobj->setTemplateDir("tem");
            $smartyobj->setCompileDir("com");
            $this->smartyobj=$smartyobj;
            //session
            $sessionobj=new session();
            $this->sessionobj=$sessionobj;
        }
    }