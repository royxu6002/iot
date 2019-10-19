<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <title>折叠</title>
    <style>

        li{
            list-style: none;
        }
        a{
            text-decoration: none;
        }
        .page{
            width: 100%;
            margin-top: 10px;
            background: #f2f2f2;
        }
        .collapse {
            float: right;
            margin-right: 20px;
        }

    </style>
</head>
<body>
<ul>
    <li class="page">
        <a class="a">
            bathroom scale <span class="collapse"></span>
        </a>
        <ul class="ul">
            <li>
                app bathroom scale
            </li>
            <li>
                body compostion scale
            </li>
            <li>
                dial bathroom scale
            </li>
        </ul>
    </li>
    <li class="page">
        <a class="a">
            一级菜单
        </a>
        <ul class="ul">
            <li>
                隐藏的二级菜单项
            </li>
            <li>
                隐藏的二级菜单项
            </li>
            <li>
                隐藏的二级菜单项
            </li>
        </ul>
    </li>
    <li class="page">
        <a class="a">
            一级菜单
        </a>
        <ul class="ul">
            <li>
                隐藏的二级菜单项
            </li>
            <li>
                隐藏的二级菜单项
            </li>
            <li>
                隐藏的二级菜单项
            </li>
        </ul>
    </li>
    <li class="page">
        <a class="a">
            一级菜单
        </a>
        <ul class="ul">
            <li>
                隐藏的二级菜单项
            </li>
            <li>
                隐藏的二级菜单项
            </li>
            <li>
                隐藏的二级菜单项
            </li>
        </ul>
    </li>
</ul>
</body>
<script>
    jQuery(function($){
        $(".a").click(function(){
            $(this).next(".ul").toggle().closest(".page").siblings(".page").children("ul").hide();
            $(this).find("span").text('-');
        }).next("ul").hide();
    });
</script>
</html>
