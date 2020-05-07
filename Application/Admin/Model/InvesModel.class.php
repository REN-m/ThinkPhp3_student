<?php
/**
 * Created by PhpStorm.
 * User: 任茂华
 * Date: 2019/11/12
 * Time: 9:39
 */
namespace Admin\Model;

use Think\Model;

class InvesModel extends Model
{
protected $_validate=array(
  'name','require','名称不能为空'
);
}