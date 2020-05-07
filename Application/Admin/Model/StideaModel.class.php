<?php

namespace Admin\Model;


use Think\Model;

class StideaModel extends Model{
    //生成自动验证的代码
    protected $_validate= array(
                array('sort_id','require','分类编号不能为空',self::EXISTS_VALIDATE),
                array('class_id','require','班级编号不能为空',self::EXISTS_VALIDATE),
                array('headmaster_id','require','班主任编号不能为空',self::EXISTS_VALIDATE),
            );



}