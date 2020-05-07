<?php


namespace Admin\Controller;



use Admin\Model\DeptModel;
use Think\Model;

class SummaryController extends BaseController{
    protected  $title = '教师满意度汇总';
    protected  $controller_name = 'Summary';
    /**
     * 在列表数据查询进行多表联查
     * @param $start  分页的开始
     * @param $end    分页的结束
     */
    //按月份查询
    protected function __index_data(){
        //dump(M('summary')->getLastsql());die;   sql语句打印
        $rows = D('summary')
            ->field("from_unixtime(create_time,'%Y-%m') as create_date")
            ->group("from_unixtime(create_time,'%Y-%m')")
            ->select();
//        dump(D('summary')->getLastSql());die;
        $this->assign('rows',$rows);

    }

    protected function __ct_data($start,$end)
{
//查询出教师ID和班级id
    $rows = D('Summary')->alias('a')
        ->field('a.class_id,a.teacher_id,c.name as t_name,b.name as c_name,a.create_time')
        ->join('class b on a.class_id=b.id')
        ->join('teacher c on a.teacher_id=c.id')
        ->order('a.id desc')
        ->group('class_id,teacher_id')
        ->limit($start,$end)
        ->select();
//    dump($rows);die;
    $this->assign('rows',$rows);
}
//查询出分数调查人数，问题id等
protected function __mark_data($start,$end){
 $ct['a.class_id']=I('get.class_id');
 $ct['a.teacher_id']=I('get.teacher_id');
    $rows = D('Summary')
        ->alias('a')
        ->field('a.*,cl.name as cname,te.name as tname,top.topic')
        ->join('class as cl on a.class_id = cl.id')
        ->join('teacher as te on a.teacher_id = te.id')
        ->join('teacher_topic as top on a.topic_id = top.id')
        ->where($ct)
        ->order('a.id desc')
        ->select();
    $this->assign('rows',$rows);
}
//查询出问题与意见
    protected function __idea_data($start,$end){
        $idea['a.class_id']=I('get.class_id');
        $idea['a.teacher_id']=I('get.teacher_id');
        $rows=M('Summary_idea')->alias('a')
            ->field('a.*,c.name as cname,t.name as tname')
            ->join('class c on a.class_id = c.id')
            ->join('teacher t on a.teacher_id=t.id')
            ->where($idea)
            ->order('a.id desc')
            ->limit($start,$end)
            ->select();

        $this->assign('rows',$rows);
    }
}