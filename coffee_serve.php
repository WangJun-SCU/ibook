<?php
require 'conn.php';
$n      = 0;
$result = mysql_query("select * from coffee");
while ($row = mysql_fetch_array($result)) {
    $arr[$n++] = array(
        "id" => $row['id'],
        "name" => $row['name'],
        "intro" => $row['intro'],
        "url" => $row['url'],
        "price_before" => $row['price_before'],
        "price_now" => $row['price_now']
    );
}
//数组转换为JSON字符串
echo json_encode(array(
    'status' => 'success',
    'result' => $arr
));
?>