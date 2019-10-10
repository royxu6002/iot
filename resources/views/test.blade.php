@extends('layouts.app')

@section('styles')
<style>
    *{
        margin:0;padding:0;
    }
    html,body{
         font-family:Arial,Helvetica,sans-serif;
    }
    li{
        list-style: none;
    }
    img{
        border:none;display: block
    }
    .box{
        width: 100px;margin: 50px auto;
    }
    .imgFileUploade{
        width: 100%;padding: 10px;
    }
    .imgFileUploade .header{
        height: 50px;width: 100%;line-height:50px;
    }
    .imgFileUploade .header span{
        display: block;float:left;
    }
    .imgFileUploade .header span.imgTitle{
        line-height:50px;
    }
    .imgFileUploade .header span.imgTitle b{
        color:red;margin:0 5px;line-height: 57px;display: block;float: right;font-size: 20px;
    }
    .imgFileUploade .header span.imgClick{
        height: 50px;margin-left: 10px;cursor: pointer;
    }
    .imgFileUploade .header span.imgcontent{
        color:#999;margin-left:120px;line-height: 50px;
    }
    .imgFileUploade .imgAll{
        width: 100%;    margin-top: 5px;
    }
    .imgFileUploade .imgAll ul:after{
            visibility: hidden;  display: block; font-size: 0; content: ".";  clear: both; height: 0
    }
    .imgFileUploade .imgAll li{
        width: 100px;height: 100px;border:solid 1px #ccc;margin:8px 5px;float: left;position: relative;box-shadow: 0 0 10px #eee;
    }
    .imgFileUploade .imgAll li img{
        position: absolute;top:0;left:0;width: 100%;height: 100%;display: block;
    }
    .delImg{
        position: absolute;top:-10px;right:-7px;width: 22px;height: 22px;background: #000;border-radius: 50%;display: block;text-align:  center;line-height: 22px;color:#fff;font-weight: 700;font-style:normal;cursor: pointer;
    }
    .box{
        border:solid 1px #ccc;
        width: auto;
        height: auto;
    }
</style>
@stop

@section('content')
    <form action="{{ route('test.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="box"> </div>
        <button type="submit">Submit</button>
    </form>
@stop

@section('scripts')

<script type="text/javascript" src="/js/imgFileupload.js"></script>
<script type="text/javascript">
    var imgFile = new ImgUploadeFiles('.box',function(e){
        this.init({
            MAX : 10, //限制个数
            MH : 1200, //像素限制高度
            MW : 1200, //像素限制宽度
            callback : function(arr){
                console.log(arr)
            }
        });
    });
</script>

@stop
