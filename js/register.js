$(document).ready(function(){
  $("#save").click(function(){
    $.ajax({
      url: "insert.php",
      type:"post";
      data:$("$frm").serialize();
      success:function(d)
      {
        alert(d);
      }
    });
  });
