<?php
header("Content-type: text/html; charset=utf-8");
include 'conn.php';
$i=1220101;
while($i<=1220500){
	$url = "https://api.douban.com/v2/book/".(string)$i;
	$html = file_get_contents($url);
	$obj = json_decode($html);
	$name = $obj->title;
	$intro = $obj->summary;
	echo "$name";
	echo "<br/>";
	echo "$intro";
	echo "<br/>";
	echo "$url";
	echo "<br/>";
	echo "<br/>";
	$url = str_replace("mpic", "lpic", $obj->image);
	mysql_query("INSERT INTO book(name,intro,url) VALUES('$name','$intro','$url')");
	$i++;
}
echo "over~~";
?>
