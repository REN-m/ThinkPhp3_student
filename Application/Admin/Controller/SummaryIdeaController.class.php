<?php


namespace Admin\Controller;



class SummaryIdeaController extends BaseController{

    protected  $title = '教师满意度汇总';
    protected  $controller_name = 'SummaryIdea';
//    protected function __idea_data($start,$end){
//        $idea['a.class_id']=I('get.class_id');
//        $idea['a.teacher_id']=I('get.teacher_id');
//        $rows=M('Summary_idea')->alias('a')
//            ->field('a.*,c.name as cname,t.name as tname')
//            ->join('class c on a.class_id = c.id')
//            ->join('teacher t on a.teacher_id=t.id')
//            ->where($idea)
//            ->order('a.id desc')
//            ->limit($start,$end)
//            ->select();
//
//        $this->assign('rows',$rows);
//    }
}