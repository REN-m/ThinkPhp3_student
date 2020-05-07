<?php

namespace Admin\Model;


use Think\Model;

class MenuModel extends Model{
    //生成自动验证的代码
    protected $_validate= array(
                array('name','require','名称不能为空',self::EXISTS_VALIDATE),
                array('nav_id','require','导航id不能为空',self::EXISTS_VALIDATE),
                array('path','require','地址不能为空',self::EXISTS_VALIDATE),
                array('state','require','状态不能为空',self::EXISTS_VALIDATE),
                array('create_time','require','添加时间不能为空',self::EXISTS_VALIDATE),
            );



}