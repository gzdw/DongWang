<?php
class m_post extends spModel {
    var $pk = 'post_id';
    var $table = 'post';
    var $fields = array(
        'content' => 'post_content',
        'date' => 'post_date',
        'status' => 'post_status',
        'author' => 'post_author',
        'excerpt' => 'post_excerpt',
        'title' => 'post_title',
        'gid' => 'group_id',
    );
}