<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="1">
    <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($rows)): $ss = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($ss % 2 );++$ss;?><tr>
        <td><?php echo ($row["id"]); ?></td>
        <td><?php echo ($row["name"]); ?></td>
        <td><?php echo ($row["age"]); ?></td>
        <td>
            <!--
            :U(控制器名/方法名,array(键=>值))  tp3
            url(控制器名/方法名,array(键=>值))  tp5
            -->
            <a href="<?php echo U('save');?>">添加</a>
            |
            <a href="<?php echo U('save',array('id'=>$row['id']));?>">修改</a>
            |
            <a href="<?php echo U('del',array('id'=>$row['id']));?>">删除</a>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>