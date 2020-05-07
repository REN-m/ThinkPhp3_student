<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $invess=M('inves')->field('id,name')->select();//查询出调查方式
        $classs=M('Class')->field('id,name')->group('name')->select(); //查询出班级
        $this->assign('invess',$invess);
        $this->assign('classs',$classs);
        $this->display();
    }

    /*
     * 首页登录的ajax异步请求,查询出对应的教师
     * select * from teacher as a
     * join class as b on a.id=b.teacher_id
     * where position=0
     */
    public function teacher(){
//          echo 1;die;

        $inves_id=I('post.inves_id','');
        $class_id=I('post.class_id','');
//     dump($inves_id);die;
        //如果inves==1则为教师满意度调查
        if ($inves_id==1){
            $teachers =$this->teache($class_id);
        }else{    //否则为学生综合满意度调查
            $teachers =$this->headmaster($class_id);
        }
        $this->ajaxReturn($teachers);exit;
    }


    public function teache($a){
        $teache = D('teacher')->alias('a')
            ->field('a.id,a.name')
            ->join('class as b on a.id=b.teacher_id')
            ->where('b.id='.$a)
            ->select();
//        dump($teache);die;
        return $teache;
    }

    public function headmaster($a){
        $teacher = D('headmaster')->alias('a')
            ->field('a.id,a.name')
            ->join('class as b on a.id=b.headmaster_id')
            ->where('b.id='.$a)
            ->select();

        return $teacher;
    }


}