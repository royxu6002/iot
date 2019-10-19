<!DOCTYPE html>
<html>
<head>
    <title>ajax上传多图片并且预览</title>
  <!-- 只是为了引用按钮的样式 -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form method="post" enctype="multipart/form-data" enctype="multipart/form-data" name="imgs">
    {{ csrf_field() }}
    <div style="margin-left:20%;margin-top: 100px;">
      <span id="showlist" style="margin-left: 25px;"></span>
      <span style="display:inline-block;height: 30px;position: relative;top:0px;left:0px;">
        <a style="display: inline-block;" class="btn btn-info">上传图片</a>
        <input type="file" name="img_src" style="width: 100px;border: 1px solid red;position: absolute;top:0px;left: 0px;height: 30px;opacity: 0;" onchange="upload(this)">
       </span>
    </div>
</form>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
  function upload(obj)
  {
    if( obj.value == "" ) {
      alert('文件上传出错');
      return;
    }
    // 实例化一个对象
    var formdata = new FormData();
    formdata.append("img" , $(obj)[0].files[0]);//获取文件
    $.ajax({
      type : 'post',
      url : '{{ route('test.store') }}', // 上传图片的接口地址
      data : formdata,
      cache : false,
      processData : false, // 不处理发送的数据，因为data值是Formdata对象，不需要对数据做处理
      contentType : false, // 不设置Content-type请求头
      success : function(response){
        console.log(response);
        var html = '<div style="position: relative;margin-right: 20px;margin-bottom: 15px;width: 132px;display: inline-block;border: 1px solid #CCC;background:#EEE;">'
            +'<span style="display: block;width: 120px;height: 80px;border: 1px solid #F2F1F0;margin: 5px;overflow: hidden;">'
            +'<img src="'+response+'" style="width: 100%;" />'
            +'</span>'
            +'<input type="hidden" name="imgs[]" value="'+response+'" />'
            +'<a onclick="delImg(this);" style="z-index: 10;display: block;top: -8px;cursor:pointer;right: -8px;position:absolute;width: 20px;height: 20px;background: #CCC;border-radius:100%;text-align:center;line-height: 20px;border: 1px solid #C1C1C1;color: #555;">X</a>'
            +'</div>';

        $('#showlist').append(html);
      },
      error : function(){ }
    });
  }

  function delImg(obj)
  {
    // 向上找到父元素删除
    $(obj).parent('div').remove();
  }
</script>
</body>
</html>
