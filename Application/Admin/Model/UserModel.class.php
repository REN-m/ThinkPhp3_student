<?php

namespace Admin\Model;


use Think\Model;

class UserModel extends Model
{
    //生成自动验证的代码
    protected $_validate = array(
        array('username', 'require', '用户名不能为空', self::EXISTS_VALIDATE),
        array('status', 'require', '状态0:失效,1:正常不能为空', self::EXISTS_VALIDATE),
        array('login_time', 'require', '登录时间不能为空', self::EXISTS_VALIDATE),
    );

    public function Login()
    {
        $username = $this->data['username'];
        $password = $this->data['password'];
        $result = $this->field('id,password')->where(array('username' => $username))->find();
        $id = $result['id'];
//        $id = $result['id'];die;
        if (!empty($result)) {
            if ($result['password'] == $password) {
                return $id;
            } else {
                return -2;
            }
        } else {
            return -1;
        }

    }

}