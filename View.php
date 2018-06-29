<?php
$name = $_POST['name'];
$conn = pg_connect("host=localhost port=5432 dbname=Sanhuanpao user=postgres password=lily520");//连接数据库
$result= pg_query ($conn,"SELECT picture  FROM plants WHERE name_id = '$name'");
$arr = pg_fetch_all($result);
  echo json_encode($arr);
