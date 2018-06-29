<?php
$picture = $_POST['delete'];//拿到了标签里面的value
if ($picture == '') {
  echo '<script language="javascript">
  alert("请选择删除的图片之后，再点击此按钮");
  var url = document.referrer;
  window.location.href=url;
  </script> ';
}
else {


$url = $_SERVER['HTTP_REFERER'];
$url2 = explode("=",$url);
$conn = pg_connect("host=localhost port=5432 dbname=Sanhuanpao user=postgres password=lily520");
$result= pg_query ($conn,"SELECT picture  FROM plants WHERE name_id = '$url2[1]'");
$arr = pg_fetch_all($result);
$arrStr = json_encode($arr[0]['picture']);//已经是字符串,因为如果直接把字符串分开的话，会连 picture:这类的都得到
$arr2 = explode(",",$arrStr);//提取各个地址

var_dump($arr);
foreach ($picture as $key => $value) {
$Rarr = $arr2[$value];
// var_dump($Rarr);
// echo $Rarr;



// pg_query($conn,"UPDATE plants SET picture = replace(picture,'$Rarr','');");

}
}
