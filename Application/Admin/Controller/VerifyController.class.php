<?php
/**
 * Created by PhpStorm.
 * User: 任茂华
 * Date: 2019/11/19
 * Time: 10:40
 */

namespace Admin\Controller;


use Think\Verify;

class VerifyController
{
    /*
     * 成验证码
     */
    public function index(){
        $config =	array(
            'expire'    =>  1800,            // 验证码过期时间（s）
            'fontSize'  =>  20,              // 验证码字体大小(px)
            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  false,            // 是否添加杂点
            'imageH'    =>  40,               // 验证码图片高度
            'imageW'    =>  173,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
        );
        $verify = new Verify($config);
        $verify->entry();
    }
}