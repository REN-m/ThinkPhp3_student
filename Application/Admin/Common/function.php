<?php

/**
 * 字符串到数组
 */
function str2arr($str,$delimiter=","){
    return explode($delimiter,$str);
}
/**
 * 数组到字符串
 */
function arr2str($arr,$delimiter=","){
    return implode($delimiter,$arr);
}