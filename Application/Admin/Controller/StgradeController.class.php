<?php


namespace Admin\Controller;



class StgradeController extends BaseController{
    protected  $title = '学生满意度汇总';
    protected  $controller_name = 'Stgrade';
//按月份查询
    protected function __index_data(){
        $rows = D('Stgrade')
            ->field("from_unixtime(create_time,'%Y-%m') as create_date")
            ->group("from_unixtime(create_time,'%Y-%m')")
            ->select();
        $this->assign('rows',$rows);

    }
    protected function __ct_data($start,$end)
    {
//查询出教师ID和班级id
        $rows = D('Stgrade')->alias('a')
            ->field('a.*,b.name as bname,c.name as cname')
            ->join('class b on a.class_id=b.id')
            ->join('headmaster c on a.headmaster_id=c.id')
            ->order('a.id desc')
            ->group('class_id,headmaster_id')
            ->limit($start,$end)
            ->select();
//    dump($rows);die;
        $this->assign('rows',$rows);
    }
    protected function __mark_data($start,$end){
        //dump(I('get.'));die;
        $ct['a.class_id']=I('get.class_id');
        $ct['a.headmaster_id']=I('get.headmaster_id');
        $rows = D('Stgrade')->alias('a')
        ->field('a.*,b.name as bname,c.name as cname,d.name as dname,e.topic as etopic')
            ->join('class b on a.class_id=b.id')
            ->join('headmaster c on a.headmaster_id=c.id')
            ->join('Sorts d on a.sort_id=d.id')
            ->join('dept_topic e on a.t_id=e.id')
            ->where($ct)
            ->select();
        $this->assign('rows',$rows);
    }
    protected function __idea_data($start,$end){

        $idea['a.class_id']=I('get.class_id');
        $idea['a.headmaster_id']=I('get.headmaster_id');
        $rows=M('Stidea')->alias('a')
            ->field('a.*,c.name as cname,b.name as bname,d.name as dname')
            ->join('class c on a.class_id = c.id')
            ->join('headmaster b on a.headmaster_id=b.id')
            ->join('Sorts d on a.sort_id=d.id')
           // ->where($idea)
            ->order('a.id desc')
            ->limit($start,$end)
            ->select();

        $this->assign('rows',$rows);
    }
}