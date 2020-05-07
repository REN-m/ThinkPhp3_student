<?php


namespace Admin\Controller;



class HeadmasterController extends BaseController{
    protected  $title = '班主任表';
    protected  $controller_name = 'Headmaster';
    protected function __index_data($start, $end)
    {

        $rows = D('Headmaster')->alias('a')
            ->field('a.id,a.name as h_name,b.name as d_name,a.state,a.create_time')
            ->join('dept b on a.dept_id=b.id')
            ->order('a.id desc')
            ->limit($start,$end)
            ->select();
        $this->assign('rows',$rows);

    }

    //添加数据查询教师表信息
    protected function __save_data()
    {
        $depts=D("Dept")->field('id,name')->select();
        $this->assign("depts",$depts);
    }

}
