<?php 

// 最大权限检查
function aclMaxCheck() {
    return spClass('spAcl')->maxCheck();
}

// 最小权限检查
function aclMinCheck() {
    return spClass('spAcl')->minCheck();
}

// 获取全局设置
function getGlobalSets() {
    $arr = spClass('m_set')->findAll();
    $sets = array();
    for ($i = 0; $i < count($arr); $i++) {
        $sets[$arr[$i]['varname']] = $arr[$i]['value'];
    }
    return $sets;
}



function dateCheck($ymd,$sep='-'){

    function isint($str){
        $str = (string)$str;
        $pos = 0;
        $len = strlen($str);
        for($i=0;$i<$len;$i++){
            if($str[$i]=='0') $pos++;
            else break;
        }
        $str = substr($str,$pos);
        $int = (int)$str;
        if($str==(string)$int) return true;
        else return false;
    }
    
    $parts = explode($sep,$ymd);
    $year = $parts[0];
    $month = $parts[1];
    $day = $parts[2];
    if(isint($year) && isint($month) && isint($day)){
        if(checkdate($month,$day,$year)) {
            return true;
        }
        else {
            return false;
        }
    } else {
        return false;
    }
}
