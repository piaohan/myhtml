<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Keywords" content="北京租房,北京租房网,北京租房信息,北京租房价格,北京租房信息网,北京租房网站,大学生租房,毕业生租房,毕业季,学生租房,留学租房,留学生租房,实习租房">
    <meta name="Description" content="">
    <title>请住公寓官网</title>
    <script src="http://api.map.baidu.com/api?v=2.0&ak={{ $key }}" type="text/javascript"></script>
    <style type="text/css">
        html{height:100%}
        body{height:100%;margin:0px;padding:0px}
        #container{height:90%;background-color: cornflowerblue}
    </style>
</head>
<body>
<div></div>
<div id="container">我是地图</div>
<script type="text/javascript">
    //init
    var map = new BMap.Map("container");
    var point = new BMap.Point(116.404, 39.915);
    map.centerAndZoom(point, 15);
    window.setTimeout(function(){
        map.panTo(new BMap.Point(116.409, 39.918));
    }, 2000);


    //增加控件
//var map = new BMap.Map("container");
//map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
//map.addControl(new BMap.NavigationControl());
//map.addControl(new BMap.NavigationControl());
//map.addControl(new BMap.ScaleControl());
//map.addControl(new BMap.OverviewMapControl());
//map.addControl(new BMap.MapTypeControl());
//map.setCurrentCity("北京"); // 仅当设置城市信息时，MapTypeControl的切换功能才能可用

//    //标注
//    var map = new BMap.Map("container");
//    var point = new BMap.Point(116.404, 39.915);
//    map.centerAndZoom(point, 15);
//    var marker = new BMap.Marker(point);        // 创建标注
//    map.addOverlay(marker);                     // 将标注添加到地图中


//    //定义标注图标
//    var map = new BMap.Map("container");
//    var point = new BMap.Point(116.404, 39.915);
//    map.centerAndZoom(point, 15);  // 编写自定义函数，创建标注
//    function addMarker(point, index){  // 创建图标对象
//        var myIcon = new BMap.Icon("markers.png", new BMap.Size(23, 25), {
//// 指定定位位置。
//// 当标注显示在地图上时，其所指向的地理位置距离图标左上
//// 角各偏移10像素和25像素。您可以看到在本例中该位置即是
//            // 图标中央下端的尖角位置。
//            offset: new BMap.Size(10, 25),
//            // 设置图片偏移。
//            // 当您需要从一幅较大的图片中截取某部分作为标注图标时，您
//            // 需要指定大图的偏移位置，此做法与css sprites技术类似。
//            imageOffset: new BMap.Size(0, 0 - index * 25)   // 设置图片偏移
//        });
//// 创建标注对象并添加到地图
//        var marker = new BMap.Marker(point, {icon: myIcon});
//        map.addOverlay(marker);
//    }
//    // 随机向地图添加10个标注
//    var bounds = map.getBounds();
//    var lngSpan = bounds.maxX - bounds.minX;
//    var latSpan = bounds.maxY - bounds.minY;
//    for (var i = 0; i < 10; i ++) {
//        var point = new BMap.Point(bounds.minX + lngSpan * (Math.random() * 0.7 + 0.15),
//            bounds.minY + latSpan * (Math.random() * 0.7 + 0.15));
//        addMarker(point, i);
//    }

//        //标注事件
//        marker.addEventListener("click", function(){
//            alert("您点击了标注");
//        });


</script>
</body>
</html>