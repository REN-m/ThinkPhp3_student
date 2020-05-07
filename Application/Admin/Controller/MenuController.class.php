<?php


namespace Admin\Controller;



class MenuController extends BaseController{
    protected  $title = '菜单';
    protected  $controller_name = 'Menu';

    /*
    * 添加数据的时候查询部门信息
    */
    protected function __save_data(){
        $navs = D("Nav")->field('id,name')->select();
        $this->assign("navs",$navs);
    }
    /**
     * 在列表数据查询进行多表联查
     * @param $start  分页的开始
     * @param $end    分页的结束
     */
    protected function __index_data($start,$end){

        $rows = D('menu')->alias('a')
            ->field('a.id,a.name as m_name,b.name as n_name,a.path,a.state,a.create_time')
            ->join('nav b on a.nav_id=b.id')
            ->order('a.id desc')
            ->limit($start,$end)
            ->select();
        $this->assign('rows',$rows);
    }


}