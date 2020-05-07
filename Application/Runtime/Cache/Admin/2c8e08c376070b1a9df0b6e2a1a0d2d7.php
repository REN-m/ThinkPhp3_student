<?php if (!defined('THINK_PATH')) exit();?><!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加品牌 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://localhost/thinkphp3/Public/Admin/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/thinkphp3/Public/Admin/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="<?php echo U('Index');?>">分类列表</a></span>
    <span class="action-span1"><a href="#">ECSHOP 管理中心</a></span>
    <span id="search_id" class="action-span1"> - 添加分类 </span>
    <div style="clear:both"></div>
</h1>
<div class="main-div">
    
<form method="post" action="<?php echo U('Stgrade/save');?>" enctype="multipart/form-data" >
    <table cellspacing="1" cellpadding="3" width="100%">
                <tr>
            <td class="label">分类编号</td>
            <td>
                                    <input type="text" name="sort_id" maxlength="60" value="<?php echo ($sort_id); ?>"/>
                                <span class="require-field">*</span>
            </td>
        </tr>

                <tr>
            <td class="label">题目编号</td>
            <td>
                                    <input type="text" name="t_id" maxlength="60" value="<?php echo ($t_id); ?>"/>
                                <span class="require-field">*</span>
            </td>
        </tr>

                <tr>
            <td class="label">班级编号</td>
            <td>
                                    <input type="text" name="class_id" maxlength="60" value="<?php echo ($class_id); ?>"/>
                                <span class="require-field">*</span>
            </td>
        </tr>

                <tr>
            <td class="label">班主任编号</td>
            <td>
                                    <input type="text" name="headmaster_id" maxlength="60" value="<?php echo ($headmaster_id); ?>"/>
                                <span class="require-field">*</span>
            </td>
        </tr>

                <tr>
            <td class="label">总分</td>
            <td>
                                    <input type="text" name="point" maxlength="60" value="<?php echo ($point); ?>"/>
                                <span class="require-field">*</span>
            </td>
        </tr>

                <tr>
            <td class="label">调查人数</td>
            <td>
                                    <input type="text" name="number" maxlength="60" value="<?php echo ($number); ?>"/>
                                <span class="require-field">*</span>
            </td>
        </tr>

        
        <tr>
            <td colspan="2" align="center"><br />
                <input type="hidden" name="id" value="<?php echo ($id); ?>">
                <input type="submit" class="button" value=" 确定 " />
                <input type="reset" class="button" value=" 重置 " />
            </td>
        </tr>
    </table>
</form>

</div>

<div id="footer">
共执行 1 个查询，用时 0.018952 秒，Gzip 已禁用，内存占用 2.197 MB<br />
版权所有 &copy; 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
</body>
</html>