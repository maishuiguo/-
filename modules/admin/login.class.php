<?php
class login extends main{
      function init(){

          if($this->session->get("logined")){
            echo "<script>location.href='index.php?m=admin&f=login&a=main'</script>";
            exit;
          }
          $num=mt_rand(50,100);
         $this->session->set("position",$num);
         $this->smarty->assign("position",$num);
         $this->smarty->display("index.html");
      }
      function code(){
          $obj=new code();
          $obj->codeUrl="demo.ttf";
          $obj->output();
          $this->session->set("code",$obj->current);
      }

      function check(){
          //1. 要先看验证码
          /*
          if(strtolower($_POST["code"])!=$this->session->get("code")){
            echo "<script>alert('验证码有误');location.href='index.php?m=admin&f=login'</script>";
            exit;
          }
          */

          if($this->session->get("codeok")!="ok"){
              echo "<script>alert('验证码有误');location.href='index.php?m=admin&f=login'</script>";
              exit();
          }
          //2.  用户名和密码

          $mname=$_POST["user"];
          $mpass=md5($_POST["pass"]);
          $dbobj=new db("user");
          $result=$dbobj->select();

          foreach ($result as $v){
              if($v["uname"]==$mname){
                  if($v["upass"]==$mpass){
                      $this->session->set("login","yes");
                      $this->session->set("logined","yes");
                      $this->session->set("name",$mname);
                      $this->session->set("id",$v["uid"]);
                      $this->session->set("rid",$v["rid"]);
                      echo "<script>alert('登陆成功');location.href='index.php?m=admin&f=login&a=main'</script>";
                      exit;
                  }
              }
          }


          echo "<script>alert('登陆失败');location.href='index.php?m=admin&f=login'</script>";

      }

      function main(){
          if($this->session->get("login")) {
              $this->smarty->assign("name",$_SESSION["name"]);
              $this->smarty->assign("rid",$_SESSION["rid"]);

              $this->smarty->display("main.html");
          }else{
              echo "<script>alert('请登陆');location.href='index.php?m=admin&f=login'</script>";
          }
      }
      function checkcode(){
          $position=$_POST["position"];
          if($position==$_SESSION["position"]){
              $this->session->set("codeok","ok");
              echo "ok";

          }else{
              echo "no";
          }
      }

      function logout(){
          $this->session->clear();
          echo "<script>alert('退出成功');location.href='index.php?m=admin&f=login'</script>";
      }

}
