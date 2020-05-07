<?php
/**
 * Created by PhpStorm.
 * User: 任茂华
 * Date: 2019/11/12
 * Time: 15:37
 */

namespace Admin\Controller;


use Think\Controller;
use Think\Page;

class BaseController extends Controller
{
    protected $title;
    protected $controller_name;
    public $model;

    public function _initialize()
    {
        $this->model = D($this->controller_name);
        if (!session('?user_id')){
            $this->redirect('Login/Index');
        }
    }

    public function index()
    {
        //计算总条数
        $count = $this->model->count();
        $page = new Page($count, 20);
        $pageHtml = $page->show();
        $rows = $this->model->order('id desc')->limit($page->firstRow . ',' . $page->listRows)->select();
        $this->assign('rows', $rows);
        $this->__index_data($page->firstRow, $page->listRows);
        $this->assign('title', $this->title);
        $this->assign('pageHtml', $pageHtml);
        $this->display();
    }

    protected function __index_data($start, $end)
    {
    }

    public function save()
    {
        $InvesModel = D('Inves');
        if (IS_POST) {
            $data = $this->model->create();
            $this->__new_data($data);

            if ($data !== false) {
                if (empty(I('post.id', ''))) {
                    $data['create_time'] = time();
                    if ($this->model->add($data) !== false) {
                        $this->success("添加成功", U('Index'));
                        exit;
                    }
                } else {
                    if ($this->model->save() !== false) {
                        $this->success("修改成功", U('Index'));
                        exit;
                    }
                }
            } else {
                $this->error($this->model->getError(), U('save'));
            }
        }
        $id = I('get.id', '');
        if (!empty($id)) {
            $row = $this->model->find($id);
            $this->assign('row', $row);
        }
        $this->__save_data();//添加一个钩子方法,为有需要的控制器准备数据
        $this->display();
    }

    protected function __save_data()
    {
    }

    protected function __new_data(&$data)
    {
    }

    protected function __ct_data($start, $end)
    {
    }

    public function ct()
    {
        $this->__ct_data();
        $this->display();
    }

    protected function __mark_data($start, $end)
    {
    }

    public function mark()
    {
        $this->__mark_data();
        $this->display();
    }

    protected function __idea_data($start, $end)
    {
    }

    public function idea()
    {
        $this->__idea_data();
        $this->display();
    }

//删除

    public function del($id)
    {
        $result = $this->model->delete($id);
        if ($result) {
            $this->success("删除成功", U('Index'));
            exit;
        }
    }
}