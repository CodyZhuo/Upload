<?php
	$name = $_POST['name'];
  $conn = pg_connect("host=localhost port=5432 dbname=Sanhuanpao user=postgres password=lily520");//连接数据库
  $result= pg_query ($conn,"SELECT name_id  FROM plants WHERE name = '$name'");
  $arr = pg_fetch_all($result);
    echo json_encode($arr);
