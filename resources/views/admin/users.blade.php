<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>请住公寓后台管理系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description"
    />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"
    />
    <link href="{{ URL::asset('./assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"
    />
    <link href="{{ URL::asset('./assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"
    />
    <link href="{{ URL::asset('./assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"
    />
    <link href="{{ URL::asset('./assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"
    />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ URL::asset('./assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('./assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css')}}" />
    <link href="{{ URL::asset('./assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css"
    />
    <link href="{{ URL::asset('./assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ URL::asset('./assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css"
    />
    <link href="{{ URL::asset('./assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ URL::asset('./assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('./assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('./assets/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color"
    />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-fixed page-footer-fixed">
    <div class="page-wrapper">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    {{-- <a href="/admin"> 
                        <img src="{{URL::asset('./assets/layouts/layout/img/logo.png')}}" alt="logo" class="logo-default" /> 
                    </a> --}}
                    <span class="label label-sm label-danger">管理系统</span>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">

                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="{{URL::asset('./assets/layouts/layout/img/avatar3_small.jpg')}}" />
                                <span class="username username-hide-on-mobile"> Admin </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>个人设置</a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-lock"></i> 锁定 </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-key"></i> 退出 </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->





        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200"
                        style="padding-top: 20px">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <!-- END SIDEBAR TOGGLER BUTTON -->
                        <li class="nav-item start">
                            <a href="/admin" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">首页</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase"></h3>
                        </li>
                        <li class="nav-item active">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">用户</span>
                                <span class="arrow open"></span>
                                <span class="selected"></span>
                            </a>
                            <ul class="sub-menu start active open">
                                <li class="nav-item active open">
                                    <a href="/admin/users" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">用户管理列表</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">用户组管理</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">用户权限分配</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase"></h3>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">公寓管理</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <span class="title">公寓列表</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <span class="title">公寓类型管理</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->




            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="/admin">首页</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="/admin/users">用户</a>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- END PAGE HEADER-->

                    <!-- BEGIN DASHBOARD STATS 1-->
                     <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase">用户管理列表</span>
                                        </div>
                                    </div>
                                    {{-- <div class="portlet-body">
                                        <div class="table-toolbar">
                                        </div>
                                        <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
                                    </div> --}}
                                    
                                    {{-- <div class="table-scrollable">
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
                                            <thead>
                                                <tr role="row">
                                                        <th tabindex="0"  rowspan="1" colspan="1"> 用户名</th>
                                                        <th tabindex="0"  rowspan="1" colspan="1"> 电话</th>
                                                        <th tabindex="0"  rowspan="1" colspan="1"> 地址</th>
                                                        <th tabindex="0"  rowspan="1" colspan="1"> 邮箱 </th>
                                                        <th tabindex="0"  rowspan="1" colspan="1"> 状态 </th>
                                                        <th tabindex="0"  rowspan="1" colspan="1"> 注册时间 </th>
                                                        <th tabindex="0"  rowspan="1" colspan="1"> 用户状态</th>
                                                        <th tabindex="0"  rowspan="1" colspan="1"> 操 作</th>
                                                        
                                                    </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="gradeX odd" role="row">
                                                    <td>muyong</td>
                                                    <td>18008293933</td>
                                                    <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td>
                                                    <td>muyong@qingzhugongyu.com</td>
                                                    <td>
                                                        <span class="label label-sm label-danger"> 超级管理员 </span>
                                                    </td>
                                                    <td> 2017.05.30 </td>
                                                    <td>
                                                            <span class="label label-xs label-success"> 正在入住</span>
                                                    </td>
                                                    <td>
                                                            <span class="btn btn-default btn-xs btn-success">1</span>
                                                            <span class="btn btn-default btn-xs btn-success">2</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> --}}
                                    <div class="portlet-body">
                                        <div class="table-scrollable">
                                            <table class="text-center table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width:50px !important">ID</th>
                                                        <th class="text-center" style="width:150px !important">用户名</th>
                                                        <th class="text-center"> 电话</th>
                                                        {{-- <th scope="col"> 地址 </th> --}}
                                                        <th class="text-center"> 邮箱 </th>
                                                        <th class="text-center"> 用户的角色 </th>
                                                        <th class="text-center"> 注册时间 </th>
                                                        <th class="text-center"> 用户状态 </th>
                                                        <th class="text-center"> 可用的操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>muyong</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>muyong@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-danger">超级管理员</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-success">已经入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>taoduping</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>taoduping@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-warning">系统管理员</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-success">已经入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>fengyu</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>fengyu@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-info">宿舍楼管理员</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-success">正在入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>中文测试</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>zhangdonghui@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-primary">用户</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-default">没有入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>5</td>
                                                        <td>中文名字长度测试测试</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>zhangdonghui@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-primary">用户</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-default">没有入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>6</td>
                                                        <td>englishNameTest....2131</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>zhangdonghui@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-primary">用户</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-default">没有入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>1117</td>
                                                        <td>中文测试</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>zhangdonghui@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-primary">用户</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-default">没有入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>8</td>
                                                        <td>中文测试</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>zhangdonghui@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-primary">用户</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-default">没有入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>9</td>
                                                        <td>中文测试</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>zhangdonghui@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-primary">用户</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-success">已经入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                     <tr>
                                                        <td>10</td>
                                                        <td>中文测试</td>
                                                        <td>18008293933</td>
                                                        {{-- <td>四川省攀枝花市XXX区XXXX街道XXXX校区XXX栋XXX楼XXX号</td> --}}
                                                        <td>zhangdonghui@qingzhugongyu.com</td>
                                                        <td><span class="label label-sm label-primary">用户</span></td>
                                                        <td>2017.05.30</td>
                                                        <td><span class="label label-sm label-success">已经入住</span></td>
                                                        <td>
                                                            <span class="btn btn-xs btn-info"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                            <span class="btn btn-xs btn-success"><i class=" fa fa-pencil" aria-hidden="true"></i></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div style="height:10px;"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-7 col-sm-7 col-md-offset-5 col-sm-offset-5">
                                            <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                                <ul class="pagination" style="visibility: visible;">
                                                    <li class="prev disabled">
                                                        <a href="#" title="First">
                                                            <i class="fa fa-angle-double-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="prev disabled">
                                                        <a href="#" title="Prev">
                                                            <i class="fa fa-angle-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">2</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">3</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">4</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5</a>
                                                    </li>
                                                    <li class="next">
                                                        <a href="#" title="Next">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                    <li class="next">
                                                        <a href="#" title="Last">
                                                            <i class="fa fa-angle-double-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; System By
                <a target="_blank" href="http://qingzhugongyu.com">请住公寓</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>

    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ URL::asset('./assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ URL::asset('./assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/horizontal-timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{ URL::asset('./assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ URL::asset('./assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{ URL::asset('./assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('./assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->

</body>

</html>