<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

//定义添加文章模型的saving监视器辅助方法
function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', '', strip_tags($value)));
    return str_limit($excerpt,$length);
}