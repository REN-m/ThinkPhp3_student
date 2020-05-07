<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/thinkphp3/Public/Home/css/check.css" />
    <link rel="stylesheet" href="http://localhost/thinkphp3/Public/Home/css/min.ui.css" />
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="bg"></div>
        <h3><?php echo ($mz["name"]); ?></h3>
        <p class="title2">班级:<?php echo ($class["name"]); ?>-老师:<?php echo ($teacher["name"]); ?></p>
        <h6>您好:</h6>
        <p class="descrip">
          欢迎参加学生满意度调查工作!
          此次调查是本校为了学生拥有更好的在校生活而专门设计的
          希望你抽出一点时间积极配合我们的调查工作,谢谢你的参与
        </p>
        <h6>说明:</h6>
        <p class="descrip">
          本次调查采用匿名形式,我们将严格保密你的信息
        </p>
      </header>
      <div class="content">
        <form action="<?php echo U('Topic/summary',array('class_id'=>$class['id'],'teacher_id'=>$teacher['id'],'inves'=>$inves['id'],''));?>" method="post">
          <div class="classify">
            <?php if(is_array($vos)): $i = 0; $__LIST__ = $vos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($inves['id'] == 2): ?><h4 class="title"><?php echo ($i); ?>.<?php echo ($key); ?></h4>
                <?php else: endif; ?>
              <div class="question-box">
                <?php if($inves['id'] == 1): ?><option class="question"><?php echo ($i); ?>.<?php echo ($vo["topic"]); ?></option>
                  <div class="mui-numbox" data-numbox-step="10" data-numbox-min="0" data-numbox-max="100">
                    <button class="mui-btn mui-numbox-btn-minus" type="button">-</button>
                    <input class="mui-numbox-input" type="number" name="topic[<?php echo ($vo['id']); ?>]"/>
                    <button class="mui-btn mui-numbox-btn-plus" type="button">+</button>
                  </div>
                  <?php else: ?>
                  <?php if(is_array($vo)): $o = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($o % 2 );++$o; if($inves['id'] == 2): ?><p class="question"><?php echo ($o); ?>.<?php echo ($vi['topic']); ?></p><?php endif; ?>
                    <div class="mui-numbox" data-numbox-step="10" data-numbox-min="0" data-numbox-max="100">
                      <button class="mui-btn mui-numbox-btn-minus" type="button">-</button>

                      <input class="mui-numbox-input" type="number" name="topic[<?php echo ($vi['t_id']); ?>][<?php echo ($o); ?>]"/>
                      <button class="mui-btn mui-numbox-btn-plus" type="button">+</button>
                    </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
              </div>
              <?php if($inves['id'] == 2): ?><div class="question-box">
                  <p class="question">其他意见</p>

                  <textarea style="resize:none" name="intro[<?php echo ($vi['f_id']); ?>]" cols="1" rows="4"></textarea>
                </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <?php if($inves['id'] == 1): ?><div class="question-box">
                <p class="question">其他意见</p>
                <textarea style="resize:none" name="intro" cols="1" rows="4"></textarea>
              </div><?php endif; ?>
          </div>
          <input type="submit" value="提交">
        </form>
      </div>
    </div>
    <script src="http://localhost/thinkphp3/Public/Home/js/min.ui.js"></script>
  </body>
</html>