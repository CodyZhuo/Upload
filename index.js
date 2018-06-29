  // 添加功能

  $("#Add").click(function(){
    var PN = document.getElementById('PN');
    var PN = PN.value;
   // alert(PN);


   $.ajax({
       type:'POST',  //POST,GET必须大写
       url:"index.php",
       data:{name:PN},
       dataType:'json',   //如果以json形式传输加上声明，否则容易出现问题
       success: function(data){
         if (data.length >= 0) {


         index = data[0].name_id;
         var url = "Add.html?index="+index;
         window.open(url);
       }
       else {
         alert("不存在名为"+PN+"的植物，请确认植物名称再进行添加操作");
       }
                  }
   })
  });
  // 删除功能
  $("#Del").click(function(){
    var PN = document.getElementById('PN');
    var PN = PN.value;
   $.ajax({
       type:'POST',  //POST,GET必须大写
       url:"index.php",
       data:{name:PN},
       dataType:'json',   //如果以json形式传输加上声明，否则容易出现问题
       success: function(data){
         if (data.length >= 0) {


         index = data[0].name_id;
         var url = "Del.html?index="+index;
         window.open(url);
       }
       else {
         alert("不存在名为"+PN+"的植物，请确认植物名称再进行删除操作");
       }
                  }
   })
  });
