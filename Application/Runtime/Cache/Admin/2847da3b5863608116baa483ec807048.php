<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="<?php echo U('Gen/Index');?>" method="post">
  表名:  <input type="text" name="table_name" value="" ><br>
    控制器: <input type="text" name="module_name" value=""><br>
   <input type="submit" class="button" value=" 提交">
</form>
</body>
</html>