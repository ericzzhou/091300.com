<?php
/**
 * Created by PhpStorm.
 * User: Eric.Zhou
 * Date: 2016/10/22
 * Time: 15:20
 */
require_once ('/data/mysql.php');
$result = array();
$result['message']  = 99999;
$result['msg']      = '未知请求';

if (!isset($act))
{
    echo json_encode($result);
    return;
}





$act = $_GET['act'];

if($act == 'add')
{
    $result['message']  = 10000;
    $result['msg']      = '添加成功';
    echo json_encode($result);
}


mysql_close($conn);