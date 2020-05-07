<?php

namespace Admin\Model;


use Think\Model;

class SummaryIdeaModel extends Model{
    //生成自动验证的代码
    protected $_validate= array(
                array('class_id','require','班级名称不能为空',self::EXISTS_VALIDATE),
                array('teacher_id','require','任课教师不能为空',self::EXISTS_VALIDATE),
                array('idea','require','意见不能为空',self::EXISTS_VALIDATE),
                array('create_time','require','添加时间不能为空',self::EXISTS_VALIDATE),
            );



}