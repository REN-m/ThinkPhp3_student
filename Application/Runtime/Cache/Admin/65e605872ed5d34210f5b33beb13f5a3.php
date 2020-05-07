<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品品牌 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://localhost/thinkphp3/Public/Admin/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/thinkphp3/Public/Admin/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo U('save');?>">添加<?php echo ($title); ?></a></span>
    <span class="action-span1"><a href="#">ECSHOP 管理中心</a></span>
    <span id="search_id" class="action-span1"> - <?php echo ($title); ?> </span>
    <div style="clear:both"></div>
</h1>
<div class="form-div">
    <form action="" name="searchForm">
    <img src="http://localhost/thinkphp3/Public/Admin/Images/icon_search.gif" width="26" height="22" border="0" alt="search" />
    <input type="text" name="brand_name" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
    </form>
</div>
<form method="post" action="" name="listForm">
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">
            
    <tr>
        <th>编号</th>
        <th>用户名</th>
        <th>角色</th>
        <th>登录时间</th>
        <th>添加时间</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
            <td align="center"><?php echo ($row["id"]); ?></td>
            <td align="center"><?php echo ($row["username"]); ?></td>
            <!--<td align="center"><?php echo ($row["password"]); ?></td>-->
            <td align="center"><?php echo ($row["role_id"]); ?></td>
            <td align="center"><?php echo date('Y-m-d H:i:s',$row.[login_time]);?></td>
            <td align="center"><?php echo date('Y-m-d H:i:s',$row[create_time]);?></td>
            <td align="center"><a class="ajax-get" href="<?php echo U('State',array('id'=>$row['id'],'states'=>$row['state']));?>">
                <img src="http://localhost/thinkphp3/Public/Admin/Images/<?php echo ($row["state"]); ?>.gif"/>
            </a></td>

            <td>
                <a href="<?php echo U('User/save',array('id'=>$row['id']));?>">编辑</a>
                |
                <a class="ajax-get" href="<?php echo U('User/del',array('id'=>$row['id']));?>">删除</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

            <tr>
                <td align="right" nowrap="true" colspan="6">
                    <?php echo ($pageHtml); ?>
                </td>
            </tr>

        </table>
    </div>
</form>

<div id="footer">
共执行 3 个查询，用时 0.021251 秒，Gzip 已禁用，内存占用 2.194 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>