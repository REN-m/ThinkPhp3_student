<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="<?php echo U('save');?>" method="post">
    姓名: <input type="text" name="name" value="<?php echo ($row["name"]); ?>"><br>
    年龄: <input type="text" name="age" value="<?php echo ($row["age"]); ?>"><br>
    <input type="hidden" name="id" value="<?php echo ($row["id"]); ?>">
    <input type="submit" value="提交">
</form>
</body>
</html>