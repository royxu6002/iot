<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
<script>
// $(document).ready(function(){
//   $("li").click(function(){
//     $(this).remove();
//   });
//   $(".addImage").click(function(){
//     $(this).after('<input type="file">');

//   })


  // // 加载执行一个 JS 文件
  // $.ajax({
  //   type: "GET",
  //   url: "a.php",
  //   dataType: "script"
  // });

  // // 保存数据到服务器, 成功时显示信息
  // $.ajax({
  //   type: "POST",
  //   url: "a.php",
  //   data: "name=John&location=Beijing",
  //   success: function(msg){
  //       alert( "data saved:" + msg);
  //   }
  // });

  // // 装入一个 HTML 网页最新版本
  // $.ajax({
  //   url: "test.html",
  //   cache: false,
  //   success: function(html){
  //       $("#results").append(html);
  //   }
  // });

  // // 同步加载数据, 发送请求时锁住浏览器. 需要锁定用户交互操作时使用同步方式.
  // var html = $.ajax({
  //   url: "some.php",
  //   async: false
  // }).responseText;

  // // 发送 XML 数据至服务器. 设置 processData 选项为 false, 防止自动转换数据格式.
  // var xmlDocument = [create xml document];
  // $.ajax({
  //   url: "page.php",
  //   processData: false,
  //   data: xmlDocument,
  //   success: handleResponse
  // });

// });
</script>

</head>
<body>
{{-- <div class="row">
    <div class="container">
        <form name="imgs" action="{{ route('test.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- <div class="addImage">+</div> -->
            <input type="file">
            <input type="submit" value="submit">
        </form>
    </div>
</div> --}}

<div class="container">
    <form action="{{route('test.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file">
        <input type="submit" value="submit">
    </form>
</div>
</body>
</html>
