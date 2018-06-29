// 添加功能

$("#Add").click(function(){
  var PN = document.getElementById('PN');
  var PN = PN.value;
 alert(PN);


 $.ajax({
     type:'POST',  //POST,GET必须大写
     url:"index.php",
     data:{name:PN},
     dataType:'json',   //如果以json形式传输加上声明，否则容易出现问题
     success: function(data){
      
       index = data[0].name_id;
       var url = "Add.html?index="+index;
       window.open(url);






                }
 })
});
