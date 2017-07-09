<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27 0027
 * Time: 16:01
 */

class code{
    public $letterarr="2345678abcdefhjkmnprstuvwxyABCDEFHJKMNPRSTUVWXY";
    public $letterlen=4;
    public $width=100;
    public $height=60;
    public $img;
    public $type="png";
    public $current="";
    public $size=array("min"=>20,"max"=>35);
    public $angle=array("min"=>-10,"max"=>10);
    public $fonturl="static/font/ARCENA.ttf";
    public $linenum=3;
    public $pointnum=100;

    function createimg(){
        $this->img=imagecreatetruecolor($this->width,$this->height);
//        $color=$this->getcolor('q');
        $color=imagecolorallocate($this->img,197,197,197);
        imagefill($this->img,0,0,$color);
    }

    function createcon(){
        $this->gettext();
        for($i=0;$i<$this->letterlen;$i++){
            $size=mt_rand($this->size["min"],$this->size["max"]);
            $angle=mt_rand($this->angle["min"],$this->angle["max"]);
            $x=$i*($this->width/$this->letterlen)+mt_rand(0,8);
            $bbox=imagettfbbox($size,$angle,$this->fonturl,$this->current[$i]);
            $height=$bbox[1]-$bbox[5];
            $y=$height+mt_rand(0,10);
            $color=$this->getcolor();
            imagettftext($this->img,$size,$angle,$x,$y,$color,$this->fonturl,$this->current[$i]);
        }
    }

    function createline(){
        for($i=0;$i<$this->linenum;$i++){
            $color=$this->getcolor("q");
            imageline($this->img,mt_rand(0,$this->width/2),mt_rand(0,$this->height),mt_rand($this->width/2,$this->width),mt_rand(0,$this->height),$color);
        }
    }
    function createpoint(){
        for($i=0;$i<$this->pointnum;$i++){
            $color=$this->getcolor("s");
            imagesetpixel($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),$color);
        }
    }

    function getstr(){
        $this->current=strtolower($this->current);
//        $this->session->set("code",$this->current);
        session_start();
        $_SESSION['code']=$this->current;
    }
    function getcolor($type="s"){
        $r=$type=="s"?mt_rand(0,120):mt_rand(125,255);
        $g=$type=="s"?mt_rand(0,120):mt_rand(125,255);
        $b=$type=="s"?mt_rand(0,120):mt_rand(125,255);
        return imagecolorallocate($this->img,$r,$g,$b);
    }
    function gettext(){
        $str="";
        for($i=0;$i<$this->letterlen;$i++){
            $str.=substr($this->letterarr,mt_rand(0,strlen($this->letterarr)-1),1);
        }
        $this->current=$str;
        return $str;

    }
    function output(){
        header("content-type:image/".$this->type.";charset=utf-8");
        $this->createimg();
        $this->createline();
        $this->createpoint();
        $this->createcon();
        $type="image".$this->type;
        $type($this->img);
        imagedestroy($this->img);
    }
}
//$code=new code();
//$code->fonturl="../static/font/ARCENA.ttf";
//$code->output();

