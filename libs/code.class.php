<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/22
 * Time: 17:34
 */
    class code{
        public $str;     //验证码的文字
        public $width=150;      //验证码的宽度
        public $height=50;      //验证码的高度
        public $img;            //画布
        public $nub=3;          //几条线
        public $nubdian=20;     //多少个点
        public $font_family=""; //字体
        public $letter='QWERTYUIOPASDFGHJKLZXCVBNMabcdefghigklmnopqrstuvwxyz1234567890';  //验证码文字的种子
        public $letterlen=4;    //验证码的长度
        public $fontsize=array("min"=>25,"max"=>35);        //验证码的字体
        //创建画布
        private function creat(){
            $this->img=imagecreatetruecolor($this->width,$this->height);
            imagefill($this->img,0,0,$this->getcolor("qian"));
        }
        //颜色
        private function getcolor($cc="qian"){
            if($cc=="qian"){
                $min=130;
                $max=240;
            }else if($cc="shen"){
                $min=10;
                $max=120;
            }
            return imagecolorallocate($this->img,mt_rand($min,$max),mt_rand($min,$max),mt_rand($min,$max));
        }
        //划线
        private function line(){
            $line_color=$this->getcolor("shen");
            for($i=0;$i<$this->nub;$i++){
                imageline($this->img,mt_rand(0,$this->width/2),mt_rand(0,$this->height),mt_rand($this->width/2,$this->width),mt_rand(0,$this->height),$line_color);
            }
        }
        //画点
        private function dian(){
            $dian_color=$this->getcolor("shen");
            for($i=0;$i<$this->nubdian;$i++){
                imagesetpixel($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),$dian_color);
            }
        }
        //获取文字
        private function get_font(){
            $this->str="";
            for($i=0;$i<$this->letterlen;$i++){
                $this->str.=$this->letter[mt_rand(0,strlen($this->letter)-1)];
            }
            $_SESSION['str']=$this->str;
            return $this->str;
        }
        //写入文字
        private function set_font(){
            //每个字占的宽度
            $x=$this->width/$this->letterlen;
            //写每个字
            for($i=0;$i<$this->letterlen;$i++){
                //每个字的颜色
                $font_color=$this->getcolor("shen");
                //字的大小
                $size=mt_rand($this->fontsize["min"],$this->fontsize["max"]);
                //角度
                $angle=mt_rand(-10,15);
                //高度
                $y=imagettfbbox($size,$angle,$this->font_family,$this->str[$i])[1]-imagettfbbox($size,$angle,$this->font_family,$this->str[$i])[3]+mt_rand(35,45);
                imagettftext($this->img,$size,$angle,$x*$i,$y,$font_color,$this->font_family,$this->str[$i]);
            }
        }
        //输出
        public function image(){
            header ('Content-Type: image/png');
            $this->creat();
            $this->line();
            $this->dian();
            $this->get_font();
            $this->set_font();
            //输出到浏览器
            imagepng($this->img);
        }
    }