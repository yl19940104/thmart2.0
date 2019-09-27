<?php
/**
 * 输出json格式数据
 */
function returnJson($code, $message, $data=null)
{
    $data = [
        'code' => $code,
        'message' => $message,
        'data' => $data
    ];
    exit(json_encode($data));
}