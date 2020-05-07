<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="http://localhost/thinkphp3/Public/admin/css/font.css">
    <link rel="stylesheet" href="http://localhost/thinkphp3/Public/admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/thinkphp3/Public/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="http://localhost/thinkphp3/Public/admin/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="x-body">

      <table class="layui-table">
        <thead>
          <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>状态</th>
            <th>时间</th>
            <th>操作</th>
        </thead>
        <tbody>
        <?php foreach($rows as $row) { ?>
          <tr>
            <td>
              <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='2'><i class="layui-icon">&#xe605;</i></div>
            </td>
            <td><?php echo ($row["id"]); ?></td>
            <td><?php echo ($row["name"]); ?></td>
            <td><?php echo ($row["state"]); ?></td>
            <td><?php echo ($row["create_time"]); ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>


    </div>

  </body>

</html>