<?php


namespace Admin\Controller;



class ClassController extends BaseController{
    protected  $title = '班级表';
    protected  $controller_name = 'Class';

    protected function __index_data($start, $end)
    {
        //echo 1;die;
        //class表为a,teacher表为b
        $rows = D('class')->alias('a')
            ->field('a.id,a.name as c_name,b.name as t_name,a.state,a.create_time')
            ->join('teacher b on a.teacher_id=b.id')
            ->order('a.id desc')
            ->limit($start,$end)
            ->select();
        $this->assign('rows',$rows);

    }

    //添加数据查询教师表信息
    protected function __save_data()
    {
        $teacher=D("Teacher")->field('id,name')->select();
        $this->assign("teacher",$teacher);
    }
}