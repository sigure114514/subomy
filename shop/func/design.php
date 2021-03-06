<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////
session_start();
$id = $_SESSION['shop_id'];

//データベース接続(shop_design)
// $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
// mysqli_set_charset($cn,'utf8');
// $col = ['design_id','design_id','color_id','color_id'];
// $table = ['design','shop_design','color',];
// $sql = shop_inner($table,$col,$id,'shop_design.shop_id');
// $row = mysqli_fetch_assoc(shop_select($cn,$sql));

//データベース接続(shop_pos)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_seach('shop_pos','genre_id','shop_id',$id);
$s_row = mysqli_fetch_assoc(shop_select($cn,$sql));

//データベース接続(shop_info)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_info('shop_info',"shop_id",$id);
$result = shop_select($cn,$sql);

$info = [];
$cnt = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $info[] = $row;
    $cnt++;
}

//データベース接続(shop全ての情報)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
//配列
$col = ['shop_id','shop_id','genre_id','genre_id'];
$table = ['shop','shop_pos','genre'];
//結合SQL作成
$sql = shop_inner($table,$col,$id,"");

//SQL取得
$shop = mysqli_fetch_assoc(shop_select($cn,$sql));


//データベース接続(course_img)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_info('course_img',"shop_id",$id);
$course_img = mysqli_fetch_assoc(shop_select($cn,$sql));

if(isset($_POST['change'])){
    $_SESSION['shop_id'] = $id;
    header('Location:design_change.php');
}


require '../shop_tpl/design.php';

?>