<?php


namespace Admin\Controller;



class UserController extends BaseController{
    protected  $title = '';
    protected  $controller_name = 'User';
    protected function __index_data($start,$end){

        $rows = D('User')->alias('a')
            ->field('a.id,a.username,a.role_id,b.name as role_name,a.state,a.create_time')
            ->join('role b on a.role_id=b.id')
            ->order('a.id desc')
            ->limit($start,$end)
            ->select();
        //dump($rows);die;
        $this->assign('rows',$rows);
    }

    /*
     * 添加数据的时候查询部门信息
     */
    protected function __save_data(){
        $roles = D("Role")->field('id,name')->select();
        $this->assign("roles",$roles);
    }
}