<?php

class m_set extends spModel {
    
    var $pk = 'id';
    var $table = 'set';
    var $fields = array(
        'vname' => 'varname',
        'val' => 'value',
        'name' => 'name',
        'gid' => 'group_id'
    );
}