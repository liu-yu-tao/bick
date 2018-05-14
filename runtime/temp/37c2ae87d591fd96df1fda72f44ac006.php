<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"F:\PHP\xiangmu\bick\public/../application/admin\view\authgroup\add.html";i:1524386620;s:60:"F:\PHP\xiangmu\bick\application\admin\view\layout_admin.html";i:1524327974;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://localhost/bick/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/bick/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://localhost/bick/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost/bick/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/bick/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://localhost/bick/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://localhost/bick/public/static/admin/style/animate.css" rel="stylesheet">

</head>
<body>
<!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://localhost/bick/public/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://localhost/bick/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Session::get('users.name'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/login/outlogin'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
            <!-- Page Sidebar Header-->
            <div class="sidebar-header-wrapper">
                <input class="searchinput" type="text">
                <i class="searchicon fa fa-search"></i>
                <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
            </div>
            <!-- /Page Sidebar Header -->
            <!-- Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <!--Dashboard-->
                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text">管理员</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('Authgroup/lst'); ?>">
                                    <span class="menu-text">
                                        用户组列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('Authrule/lst'); ?>">
                                    <span class="menu-text">
                                        权限列表
                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-file-text"></i>
                        <span class="menu-text">栏目管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">文章管理</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                   </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">友情链接</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('link/lst'); ?>">
                                    <span class="menu-text">
                                        链接列表                                   </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-dropdown">
                        <i class="menu-icon fa fa-gear"></i>
                        <span class="menu-text">系统</span>
                        <i class="menu-expand"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo url('conf/conf'); ?>">
                                    <span class="menu-text">
                                        配置项                                   </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo url('conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置列表                                   </span>
                                <i class="menu-expand"></i>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- /Sidebar Menu -->
        </div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
       
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">系统</a>
                        </li>
                        <li>
                            <a href="#">用户组管理</a>
                        </li>
                        <li class="active">添加用户组</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">新增用户组</span>
                                </div>
                                <div class="widget-body">
                                    <div id="horizontal-form">
                                        <form class="form-horizontal" role="form" action="" method="post">
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">用户组名称</label>
                                                <div class="col-sm-6">
                                                    <input class="form-control"  placeholder="" name="title" required="" type="text">
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right">启用状态</label>
                                                <div class="col-sm-6">
                                                    <p class="help-block col-sm-4 red">
                                                        <label>
                                                            <input class="checkbox-slider colored-darkorange" name="status" value="1" checked="checked" type="checkbox">
                                                            <span class="text"></span>
                                                        </label>
                                                    </p>
                                                </div>
                                                <p class="help-block col-sm-4 red">* 必填</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                                <div class="col-sm-6">
                                                    <table class="table table-hover">
                                                        <thead class="bordered-darkorange">
                                                        <tr>
                                                            <th>
                                                                配置权限
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($arr as $add): ?>
                                                        <tr>
                                                            <td>
                                                                <label>
                                                                    <?php if($add['pid']!==0): ?>
                                                                    |
                                                                    <?php $__FOR_START_13446__=0;$__FOR_END_13446__=$add['level'];for($i=$__FOR_START_13446__;$i < $__FOR_END_13446__;$i+=1){ ?>
                                                                    ---
                                                                    <?php } endif; ?>
                                                                    <!--<input name="rules[]" value="<?php echo $add['id']; ?>" dataid="" class="inverted checkbox-parent <?php if($add['level'] != 0): ?> checkbox-child <?php endif; ?> " type="checkbox">-->
                                                                    <!--<span <?php if($add['level'] == 0): ?> style="font-weight:bold; font-size:14px;" <?php endif; ?> class="text"><?php echo $add['title']; ?></span>-->
                                                                    <input type="checkbox" name="rules[]" class="inverted checkbox <?php if($add['level']==0): ?> checkbox-child <?php endif; ?>">
                                                                    <span class="text" <?php if($add['level']==0): ?> style="font-weight:800; font-size:14px;" <?php endif; ?>><?php echo $add['title']; ?></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default">保存信息</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->

    <!-- /Page Content -->
</div>
</div>

<!--Basic Scripts-->
<script src="http://localhost/bick/public/static/admin/style/jquery_002.js"></script>
<script src="http://localhost/bick/public/static/admin/style/bootstrap.js"></script>
<script src="http://localhost/bick/public/static/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="http://localhost/bick/public/static/admin/style/beyond.js"></script>



</body></html>