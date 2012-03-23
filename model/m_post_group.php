<?php

class m_post_group extends spModel {
    var $pk = 'group_id';
    var $table = 'post_group';
    var $fields = array(
        'type' => 'typename'
    );
}