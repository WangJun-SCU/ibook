<?php
require 'conn.php';
$n      = 0;
$result = mysql_query("select * from book limit 10");
while ($row = mysql_fetch_array($result)) {
    $arr[$n++] = array(
        "id" => $row['id'],
        "name" => $row['name'],
        "intro" => $row['intro'],
        "url" => $row['url']
    );
}
//����ת��ΪJSON�ַ���
echo json_encode(array(
    'status' => 'success',
    'result' => $arr
));
?>
