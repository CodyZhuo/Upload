<?php
$url = $_SERVER['HTTP_REFERER'];
$url2 = explode("=",$url);
$conn = pg_connect("host=localhost port=5432 dbname=Sanhuanpao user=postgres password=lily520");


foreach ($_FILES['image']['name'] as $key => $value) {
  if ($value=="") {
    //不操作
  }
  else {
    // var_dump($value);
    $LastName = explode(".",$value);
    $LN =   $LastName[1];
    $filename = date("YmdHis").rand(0,999).'.'.$LN;
    move_uploaded_file($_FILES["image"]["tmp_name"][$key],'image/'.$filename);
    pg_query($conn,"UPDATE plants SET picture = concat(picture,'image/$filename,') WHERE name_id = '$url2[1]'");
  }
}


echo '<script language="javascript">
alert("OK");
var url = document.referrer;
window.location.href=url;
</script> ';
