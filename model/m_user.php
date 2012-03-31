<?php
class m_user extends spModel {
    var $pk = 'id';
    var $table = 'user';
    var $fields = array(
    
    );
    
    public function acljump() {
        $url = spUrl('znUser', 'index'); // 跳转到登录首页，在强制权限的情况下，请将该页面设置成可以进入。
		//echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><script>function sptips(){alert(\"Access Failed!\");location.href=\"{$url}\";}</script></head><body onload=\"sptips()\"></body></html>";
        //var_dump($url);
        //echo '权限不足...3秒后自动跳转';
        header("Location: $url");
    }
    
}