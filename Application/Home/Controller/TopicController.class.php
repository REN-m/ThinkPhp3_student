<?php
/**
 * Created by PhpStorm.
 * User: 任茂华
 * Date: 2019/12/12
 * Time: 15:11
 */

namespace Home\Controller;


use Think\Controller;

class TopicController extends Controller
{
    public function index()
    {
        $inves = I('get.inves');
        $mz = I('get.inves');
        $class_id = I('get.class');
        $teacher_id = I('get.teacher_id');
        $vos = '';
        $mz = M('inves')->field('id,name')->where('id=' . $mz)->find();
        $class = M('Class')->field('id,name')->where('id=' . $class_id)->find();
        $teacher = M('teacher')->field('id,name')->where('id=' . $teacher_id)->find();
        //1为教师满意度，否则就是学生满意度
        if ($inves == 1) {
            $vos = M('Teacher_topic')->field('id,topic')->select();
        } else {
            $vo = M('Dept_topic')
                ->alias('a')
                ->field('a.id as t_id,a.topic,s.name as s_name,s.id as f_id')
                ->join('Sorts as s on a.s_id=s.id')
                ->select();
            //dump($vo);die;
            foreach ($vo as $v)
                $vos[$v['s_name']][] = $v;
        }
        $this->assign([
            'vos' => $vos,
            'class' => $class,
            'teacher' => $teacher,
            'mz' => $mz,
            'inves' => $inves,
        ]);
        $this->display();
    }

    //汇总
    public function summary()
    {

        $inves_id = I('get.inves');
        if ($inves_id == 1) {
            //教师满意度入库
            //意见入库
            $i['class_id'] = I('get.class_id');
            $i['teacher_id'] = I('get.teacher_id');
            $i['idea'] = I('post.intro');
            $i['create_time'] = time();
            $idea = M('summary_idea')->add($i);
            $class_id = I('get.class_id');
            $teacher_id = I('get.teacher_id');
            $result = M('summary')->where('class_id=' . $class_id, 'teacher_id=' . $teacher_id)->find();
            //$result==null执行添加否则执行修改
            if ($result == null) {
                foreach (I('topic') as $k => $v) {
                    $data = [
                        'class_id' => $class_id,
                        'teacher_id' => $teacher_id,
                        'topic_id' => $k,
                        'fraction' => $v,
                        'create_time' => time(),
                    ];
                    $tian = M('summary')->add($data);
                }
            } else {
                foreach (I('topic') as $k => $v) {
                    $data = [
                        'class_id' => $class_id,
                        'teacher_id' => $teacher_id,
                        'topic_id' => $k,
                        'fraction' => $v,
                        'create_time' => time(),
                    ];
                    $sql = M('summary')
                        ->execute("update summary set number = number+1,fraction = fraction+{$data['fraction']},avg = fraction/number 
                where class_id = $class_id and teacher_id=$teacher_id and topic_id={$data['topic_id']}");
                }
            }
        } else {
            //意见入库
            // dump(I('post.'));die;
            $class_id = I('get.class_id');
            $headmaster_id = I('get.teacher_id');
            foreach (I('intro') as $k => $v) {
                $data = ['class_id' => $class_id,
                    'headmaster_id' => $headmaster_id,
                    'create_time' => time(),
                    'sort_id' => $k,
                    'name' => $v
                ];
                $yj = M('stidea')->add($data);
            }
            //分数入库
            $result = M('stgrade')->where('class_id=' . $class_id, 'headmaster_id=' . $headmaster_id)->find();
            //第一次如果查到两个id为空就添加否则就执行下面的修改
            if ($result == null) {
                foreach (I('topic') as $k => $v) {
                    foreach ($v as $value => $vi)
                        $data = ['class_id' => $class_id,
                            't_id' => $k,
                            'create_time' => time(),
                            'headmaster_id' => $headmaster_id,
                            'sort_id' => $value,
                            'point' => $vi
                        ];
                    $r = M('stgrade')->add($data);
                    //dump($data);die;
                }
            } else {
                foreach (I('topic') as $k => $v) {
                    foreach ($v as $value => $vi) {
                        $data = ['class_id' => $class_id,
                            't_id' => $k,
                            'create_time' => time(),
                            'headmaster_id' => $headmaster_id,
                            'sort_id' => $value,
                            'point' => $vi
                        ];
                        $c = M('stgrade')
                            ->execute("update stgrade set number = number+1,point = point+{$data['point']}
                        where class_id = $class_id and headmaster_id=$headmaster_id and t_id={$data['t_id']} and sort_id={$data['sort_id']}");
                    }
                }
            }
        }
        $this->display('Close/Index');
    }
}