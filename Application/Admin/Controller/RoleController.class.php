<?php


namespace Admin\Controller;



class RoleController extends BaseController{
    protected  $title = '角色';
    protected  $controller_name = 'Role';
    /*
   * 添加数据的时候查询部门信息
   */
    protected function __save_data(){
        $menus = D("Menu")->field('id,name')->select();
       $id=I('get.id','');
            if ($id!==''){
                $authority = D('Role')->field('menu_id')->where('id='.I('get.id',''))->find();
            }
        $this->assign('authority',str2arr($authority['menu_id']));
        $this->assign( "menus",$menus);
    }
    protected function  __new_data(&$data){
        $data['menu_id']= arr2str($data['menu_id']);
    }

}