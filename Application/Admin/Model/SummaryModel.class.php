<?php

namespace Admin\Model;


use Think\Model;

class SummaryModel extends Model{
    //生成自动验证的代码
    protected $_validate= array(
                array('class_id','require','名称不能为空',self::EXISTS_VALIDATE),
                array('teacher_id','require','任课教师不能为空',self::EXISTS_VALIDATE),
                array('fraction','require','分数不能为空',self::EXISTS_VALIDATE),
                array('avg','require','平均分不能为空',self::EXISTS_VALIDATE),
                array('number','require','调查的人数不能为空',self::EXISTS_VALIDATE),
                array('create_time','require','添加时间不能为空',self::EXISTS_VALIDATE),
            );



}