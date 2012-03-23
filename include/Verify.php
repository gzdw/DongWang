<?php

//图片验证码类

class Verify{
    private $im;//图像资源
    private $width;//图片宽度
    private $height;//图片高度
    private $bgcolor;//背景颜色
    private $point_num;//在图像上所画点的个数
    private $point_color;//干扰像素颜色
    private $line_num;//在图像上所画线的条数
    private $line_color;//干扰线条颜色
    private $font_num;//验证字符个数
    
    function __construct(){
    }
    
    //设定图像大小
    function set_size(){
        if(empty($this->font_num)){
            $this->font_num=4;
        }
        $this->width=$this->font_num*12+4;// 根据字符计算图像宽度
        $this->height=20;
    }
    
    //建立图像
    function create_pic(){
        $this->im=imagecreate($this->width,$this->height);
        imagecolorallocate($this->im,200,200,200);
    }
    
    //设置干扰点
    function set_point(){
        if(empty($this->point_num)){
            $this->point_num=50;
        }
        for($i=0;$i<$this->point_num;$i++){
            $this->point_color=imagecolorallocate($this->im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));//生成干扰像素颜色
            imagesetpixel($this->im,$this->width,$this->height,$this->point_color);//生成干扰像素
        }
    }
        
    //设置干扰线条
    function set_line(){
        if(empty($this->line_num)){
            $this->line_num=2;
        }
        for($i=0;$i<$this->line_num;$i++){
            $this->line_color=imagecolorallocate($this->im,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));//生成干扰线条颜色
            imageline($this->im,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->line_color);
        }
    }
    
    //生成随机字符，并且MD5加密
    function ver_str(){
        $string=strtoupper(md5(mt_rand(0,8)));// 用MD5加密随机产生的数字
        if(empty($this->font_num)){
            $this->font_num=4;
        }
        return substr($string,0,$this->font_num);
    }
    
    
    //写入验证字符
    function show(){
        $this->set_size();//设置图像大小
        $this->create_pic();//建立图像
        $string=$this->ver_str();//得到随时字符
        for($i=0;$i<$this->font_num;$i++){
            $font_color=imagecolorallocate($this->im,mt_rand(100,150),mt_rand(100,150),mt_rand(100,150));
            imagestring($this->im,5,$i*10+8,mt_rand(1,7),$string[$i],$font_color);
        }
        $this->set_point();//绘制干扰点
        $this->set_line();//绘制干扰线
        //header("Contetn-type:image/png");
        imagepng($this->im);//输出图像
        imagedestroy($this->im);//释放内存
        return $string;
    }        
}

?>
