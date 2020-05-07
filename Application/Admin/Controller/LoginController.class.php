<?php
/**
 * Created by PhpStorm.
 * User: 任茂华
 * Date: 2019/11/15
 * Time: 14:55
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Verify;

class LoginController extends Controller
{
//    public function _initialize()
//    {
//        if (session('?user_id')) {
//            $this->redirect('Index/Index');
//        }
//    }

    public function index()
    {
//    session(null);
//    if (session('?user_id')) {
//        $this->error('退出失败！', 'Index/Index');
//    }else {
//
//        $this->success('退出成功！', 'Login/Index');
//    }
        $this->display();
    }

    //登录的验证
    public function validate()
    {
        $userModel = D('User');
        //判断验证码是否输入正确
//    $verify=new verify();
//    if (!$verify->check(I('post.captcha'))){
//        $this->error("验证码错误,请重新输入",U('login/Index'));
//    }

        if ($userModel->create() != false) {
            $result = $userModel->Login();
            if ($result > 0) {
                $id = $result;
                $username = I('post.username');
                $this->success('登录成功', U('Index/Index'));
                session('user_id', $id);
                session('username', $username);
            } else if ($result == -1) {
                $this->ajaxreturn(array('status' => -1, 'msg' => '用户名错误'));
                exit();
            } else if ($result == -2) {
                $this->ajaxreturn(array('status' => -2, 'msg' => '密码错误'));
                exit();
            }
            if ($result == -3) {
                $this->ajaxreturn(array('status' => -3, 'msg' => '验证码错误'));
                exit();
            }
        } else {
            $this->error('登录失败', U('Login/Index'));
            exit();
        }
    }
}



