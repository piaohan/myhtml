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
        .container{height:90%;background-color: cornflowerblue}
    </style>
</head>
<body>
<div class="container" style="border:#ccc solid 1px;font-size:12px" id="map"></div>
<span><h3 style="margin-left:20px;float:left;">请住公寓</h3></span><button style="margin-top:20px;background-color:yellow;float:right;">登录(没素材)</button>
</body>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(116.403874,39.914889),12);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"中关村学区",title:"小区名,中关村学区",imageOffset: {width:-69,height:-21},position:{lat:39.976315,lng:116.318142}},
        {content:"小雅宝公寓 国贸校区",title:"小雅宝公寓 国贸校区",imageOffset: {width:0,height:-21},position:{lat:39.952068,lng:116.417672}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      {{-- map.addControl(scaleControl); --}}
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      {{-- map.addControl(overviewControl); --}}
    }
    var map;
      initMap();
  </script>

</html>