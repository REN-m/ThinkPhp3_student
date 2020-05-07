<?php


namespace Admin\Controller;



class TeacherController extends BaseController{
    protected  $title = '教师表';
    protected  $controller_name = 'Teacher';

    /**
     * 在列表数据查询进行多表联查
     * @param $start  分页的开始
     * @param $end    分页的结束
     */
    protected function __index_data($start,$end){
        //teacher表为a,dept表为b
        $rows = D('teacher')->alias('a')
            ->field('a.id,a.name as t_name,b.name as d_name,a.state,a.create_time')
            ->join('dept b on a.dept_id=b.id')
            ->order('a.id desc')
            ->limit($start,$end)
            ->select();
        $this->assign('rows',$rows);
    }


    /*
     * 添加数据的时候查询部门信息
     */
    protected function __save_data(){
        $depts = D("Dept")->field('id,name')->select();
        $this->assign("depts",$depts);
    }

}