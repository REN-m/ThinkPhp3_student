<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Document</title>
  <link rel="stylesheet" href="http://localhost/thinkphp3/Public/Home/css/index.css"/>
  <link rel="stylesheet" href="http://localhost/thinkphp3/Public/Home/css/min.ui.css"/>
</head>
<body>
<div class="wrapper">
  <div class="check-box">
    <form action="<?php echo U('Topic/Index');?>" method="get">
      <h3>新华电脑学校问卷调查</h3>
      <label for="">
        <span>查询方式:</span>
        <select name="inves" id="inves">
          <option value="">--请选择--</option>
          <?php if(is_array($invess)): $i = 0; $__LIST__ = $invess;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$inves): $mod = ($i % 2 );++$i;?><option value="<?php echo ($inves["id"]); ?>"><?php echo ($inves["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
      </label>
      <label for="" class="hideen_class" style="display: none">
        <span>查询方式:班级</span>
        <select name="class" id="class">
          <option value="0">--请选择--</option>
          <?php if(is_array($classs)): $i = 0; $__LIST__ = $classs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class): $mod = ($i % 2 );++$i;?><option value="<?php echo ($class["id"]); ?>"><?php echo ($class["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
      </label>
      <label for="" class="hideen_class" style="display: none">
        <span>查询方式:教师</span>
        <select id="teacher" name="teacher_id">
          <option value="">--请选择--</option>
        </select>
      </label>
      <button style="width: 100%; cursor: pointer;" type="submit" class="mui-btn mui-btn-primary">提交</button>
    </form>
  </div>
</div>
<script src="http://localhost/thinkphp3/Public/Home/js/jquery-1.8.2.js"></script>
<script src="http://localhost/thinkphp3/Public/Home/js/min.ui.js"></script>
<script type="text/javascript">
  $(function () {
      //选中id为inves的标签元素,当元素值发生改变时(change)执行function中的类容
      $('#inves').change(function () {
          //如果type的值为空,证明你没有选中调查方式
          if ($('#inves').val()==''){
              //将所有的class为hideen_class的元素,影藏(hide)
          $(".hideen_class").hide();
          }else{
              //当type有值的的时候,将hideen_class的元素显示()show
          $(".hideen_class").show();
          }
          //每次用户选择不同的调查方式,就将班级给回复成默认值
          $('#class').val([0]);
      });
      //当我们选中了班级的时候,触发一个change事件,当内容发生改变时的动作
      $('#class').change(function () {
          //要获取你的调查方式
          var $inves_id =$("#inves").val();
          var $class_id = $("#class").val();
          //发送ajax异步请求,获取调查方式所对应是教师还是班主任
          $.post("<?php echo U('Index/teacher');?>",{inves_id:$inves_id,class_id:$class_id},function (data) {
              // console.log(data);return false;
              $('#teacher').empty();
              // console.log(data);return false;
              $.each(data, function(key, val) {
                  $('#teacher').append('<option value="'+val.id+'">'+val.name+'</option>');
              });
              return false;
          });
      });
  });
</script>
</body>
</html>