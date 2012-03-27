<?php 

/**
 * 构造函数
 * @param witdh  整型int (px)  实例化指定图像宽充，不指定根据字符大小自动计算
 * @param height  整型int (px)  实例化指定图像高充，不指定根据字符大小自动计算
 * @param font_num   整型int   产生字符个数
 * @param font_size   整型int (px)  指定字符大小
 */
class Acl {
    
    private $rank;  // 用户等级
    
    // 构造函数
    public function __construct() {
        $this->$rank = 0;   // 默认等级设为0
    }
    
    // 权限检查
    public function check() {
        
    }
    
    // 权限不足处理
    public function prompt() {
        
    }
    
}
