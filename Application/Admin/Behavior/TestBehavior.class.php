<?php
/**
 * Created by PhpStorm.
 * User: 任茂华
 * Date: 2019/11/18
 * Time: 15:33
 */
namespace Admin\Behavior;

use Think\Behavior;
class TestBehavior extends Behavior {

    public $arr=array('Login','Index','Gen');
    public function run(&$param)
    {
        if (in_array(CONTROLLER_NAME, $this->arr)) {
            return true;
        }
        $controller_name = CONTROLLER_NAME.'/Index';
        //接收用户id
        $authority = D('User')->field('a.id,a.role_id,b.menu_id')->alias('a')
            ->join('role b on a.role_id=b.id')
            ->where('a.id=' . session('user_id'))->find();
        $menus = D('Menu')->field('id,name,path')->where("id in({$authority['menu_id']})")->select();
        $arr = [];
        foreach ($menus as $menu) {
            $arr[] = $menu['path'];
        }
//        dump($arr);die;
        //in_array: 检查一个变量的值,是否在这个数组中存在
        if (in_array($controller_name,$arr)) {
            return true;
        } else {
         echo "404";exit;
        }
    }

}