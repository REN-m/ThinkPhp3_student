<?php
define('__URL__','http://localhost/thinkphp3/');
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'  =>array(
        '__URL_LOGO__' => 'http://localhost/thinkphp3/', // 更改默认的/Public 替换规则
        '__ADMIN_CSS__' => __URL__.'Public/Admin/Styles', // 更改默认的/Public 替换规则
        '__ADMIN_JS__' => __URL__.'Public/Admin/Js', // 更改默认的/Public 替换规则
        '__ADMIN_IMG__'     => __URL__.'Public/Admin/Images', // 增加新的JS类库路径替换规则

    )
);