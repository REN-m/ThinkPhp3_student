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
    
    <form method="post" action="<?php echo U('User/save');?>" enctype="multipart/form-data">
        <table cellspacing="1" cellpadding="3" width="100%">
            <tr>
                <td class="label">用户名</td>
                <td>
                    <input type="text" name="username" maxlength="60" value="<?php echo ($row["username"]); ?>"/>
                    <span class="require-field">*</span>
                </td>
            </tr>

            <tr>
                <td class="label">密码</td>
                <td>
                    <input type="text" name="password" placeholder="如果不写默认为不修改" maxlength="60" value="<?php echo ($password); ?>"/>
                    <span class="require-field">*</span>
                </td>
            </tr>

            <tr>
                <td class="label">角色id</td>
                <td>
                    <select name="role_id" id="">
                        <option value="0">-选择-</option>
                        <?php if(is_array($roles)): $i = 0; $__LIST__ = $roles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><option value="<?php echo ($role["id"]); ?>"><?php echo ($role["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<input type="text" name="teacher_id" maxlength="60" value="<?php echo ($teacher_id); ?>"/>-->
                    </select>
                    <span class="require-field">*</span>
                </td>

            </tr>

            <tr>
                <td class="label">状态</td>
                <td>
                    <label>
                        <input type="radio" <?php echo ($state ? 'checked="checked"' : ''); ?> style="height:15px;width: 20px" name="state" value="1"/> 是 </label>
                    <label>
                        <input type="radio" <?php echo ($state ? '' : 'checked="checked"'); ?> style="height:15px;width: 20px" name="state" value="0"/> 否 </label>
                    <span class="require-field">*</span>
                </td>
            </tr>

            <!--<tr>-->
                <!--<td class="label">登录时间</td>-->
                <!--<td>-->
                    <!--<input type="text" name="login_time" maxlength="60" value="<?php echo ($login_time); ?>"/>-->
                    <!--<span class="require-field">*</span>-->
                <!--</td>-->
            <!--</tr>-->


            <tr>
                <td colspan="2" align="center"><br/>
                    <input type="hidden" name="id" value="<?php echo ($row["id"]); ?>">
                    <input type="submit" class="button" value=" 确定 "/>
                    <input type="reset" class="button" value=" 重置 "/>
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