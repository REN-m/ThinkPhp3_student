<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function menu(){
        //查看用户的权限
        $user=D('User')->field('a.id,a.username,a.role_id,b.menu_id')
            ->alias('a')
            ->join('role b on a.role_id=b.id')
            ->where(array('a.id'=>session('user_id')))
            ->find();
//        dump($User);die;
        //根据用户的角色,查询出对应的权限
//        $role=D('Role')->field('id.name,menu_id')->where("id={$User['role_id']}")->find();

        $navs=D('Menu')->alias('a')
            ->field('b.id,b.name')
            ->join("right join nav b on a.nav_id=b.id")
            ->where("a.id in({$user['menu_id']})")
            ->group('b.name')
            ->select();
//        dump($navs);die;

         $menus=D('menu')->field('id,name,nav_id,path')->where("id in({$user['menu_id']})")->select();
        $this->assign('navs', $navs);
        $this->assign('menus', $menus);
        $this->display();
    }
}