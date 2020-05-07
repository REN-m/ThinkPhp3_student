<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="<?php echo U('User/edi');?>" method="post">
    姓名: <input type="text" name="name" value="<?php echo ($row["name"]); ?>"><br />
    状态: <input type="text" name="state" value="<?php echo ($row["state"]); ?>">
    <input type="submit" value="提交">
</form>
</body>
</html>