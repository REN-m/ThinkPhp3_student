<?php

namespace Admin\Model;


use Think\Model;

class TeacherModel extends Model{
    //生成自动验证的代码
    protected $_validate= array(
                array('name','require','姓名不能为空',self::EXISTS_VALIDATE),
                array('dept_id','require','部门编号不能为空',self::EXISTS_VALIDATE),
                array('state','require','状态不能为空',self::EXISTS_VALIDATE),
            );



}