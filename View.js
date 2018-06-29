var url = window.location.href;
var index = url.split('=');
var Rindex = index[1];
$.ajax({
    type:'POST',  //POST,GET必须大写
    url:"View.php",
    data:{name:Rindex},
    dataType:'json',   //如果以json形式传输加上声明，否则容易出现问题
    success: function(data){
      var add = data[0].picture;  //add从根本上来说是一个字符串，因为从PHP传过来的是JSON格式
      var add2 = add.split(',');  //把字符串转换成了数组

      $.each(add2, function(index, value, array) {
        if (value=="") {
          //do nothing
        }
        else{
          var FM=document.getElementById("FM");
          var C1=document.createElement("img");
          C1.src = value;
          C1.style.height = '170px';
          C1.style.width = '170px';
          C1.style.margin = '20px';
          FM.appendChild(C1);
        }
      });
    }
});
