<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?></title>
    <link href="/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">


    <!--OC 自定义样式-->
    <link rel="stylesheet" href="/Application/Admin/Static/css/oc.css" media="all">
    <!--OC 自定义样式 end-->
    <link rel="stylesheet" href="/Public/static/os-icon/simple-line-icons.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Application/Admin/Static/css/oc/admin.css" media="all">
    <!--adminlte-->
    <link rel="stylesheet" href="/Application/Admin/Static/adminlte/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Application/Admin/Static/adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/Application/Admin/Static/adminlte/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/Application/Admin/Static/adminlte/plugins/iCheck/flat/blue.css">
    <link href="/Application/Admin/Static/bootstrap/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Application/Admin/Static/bootstrap/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Application/Admin/Static/bootstrap/css/components.min.css" rel="stylesheet" id="style_components" type="text/css">

    <link rel="stylesheet" href="/Application/Admin/Static/css/adminlte.css" media="all">
    <link rel="stylesheet" href="/Application/Admin/Static/css/namecard.css" media="all">
    <!--adminlte end-->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/Application/Admin/Static/bootstrap/plugins/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Application/Admin/Static/adminlte/plugins/jQueryUI/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->

    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/Public/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Application/Admin/Static/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->
    <link rel="stylesheet" href="//at.alicdn.com/t/font_ox9ehsnto8vvx6r.css">
    
    <script type="text/javascript">
        var ThinkPHP = window.Think = {
            "ROOT": "", //当前网站地址
            "APP": "/index.php?s=", //当前项目地址
            "PUBLIC": "/Public", //项目公共目录地址
            "DEEP": "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINF<?php echo L("_O_SEGMENTATION_");?>
            "MODEL": ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR": ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"],
            'URL_MODEL': "<?php echo C('URL_MODEL');?>"
        }
        var _ROOT_ = "";
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!--顶部导航-->
<header data-role="top-sidebar" class="main-header">
    <!-- Logo -->
    <?php $logo = get_cover(modC('LOGO',0,'Config'),'path'); $logo = $logo?$logo:'/Public/images/logo.png'; ?>
    <a href="<?php echo U('Index/index');?>" class="logo" style="text-align: left">
     管理后台
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <div class="collapse navbar-collapse navbar-collapse-example">
            <ul class="nav navbar-nav top-menu">
                <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i; if(($menu["hide"]) != "1"): ?><li data-id="<?php echo ($menu["id"]); ?>" class="mega-menu-dropdown <?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>">
                            <a href="<?php echo (u($menu["url"])); ?>" class="dropdown-toggle " data-hover="dropdown"
                               data-close-others="true">
                                <?php if(($menu["icon"]) != ""): ?><i class="icon-<?php echo ($menu["icon"]); ?>"></i>&nbsp;<?php endif; ?>
                                <?php echo ($menu["title"]); ?>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu" style="min-width: 700px;">
                                <li>
                                    <!-- Content container to add padding -->
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <?php $k=0; ?>
                                            <?php if(is_array($menu["children"])): $i = 0; $__LIST__ = $menu["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i; $k++; if(($k%4)==1){ $style="clear:left"; }else{ $style=""; } ?>
                                                <div class="col-md-3" style="<?php echo ($style); ?>">
                                                    <ul class="mega-menu-submenu">
                                                        <li><h3><?php echo ($key); ?></h3></li>
                                                        <?php if(is_array($children)): $i = 0; $__LIST__ = $children;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li>
                                                                <a href="<?php echo (u($child["url"])); ?>"><?php echo ($child["title"]); ?></a>
                                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </ul>
                                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(file_exists('m/index.php')){ ?>
                <li><a  target="_blank" href="m/index.php?s=/admin/index/index.html">管理微社区</a> </li>
                <?php } ?>
                <li><a href="javascript:;" onclick="clear_cache()"><i class="icon-trash"></i> <?php echo L('_CACHE_CLEAR_');?></a>
                </li>
                <?php $url = U('Home/Index/index'); $url = str_replace('admin.php', 'index.php', $url); ?>
                <li><a target="_blank" href="<?php echo ($url); ?>"><i class="icon-copy"></i>
                    <?php echo L('_FORESTAGE_OPEN_');?></a></li>
                <li class="dropdown" style="margin-right: 15px;">
                    <?php $avatar = query_user(array('avatar128')); ?>
                    <a style="padding: 13px 15px 12px" href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img  src="<?php echo ($avatar["avatar32"]); ?>" class="avatar-img  small-img">
                        <?php echo session('user_auth.username');?>
                    </a>
                    <ul class="dropdown-menu name-card" role="menu" style="border: none!important;">
                        <div class="head-box">
                            <img src="<?php echo ($avatar["avatar128"]); ?>" class="avatar-img">
                            <p> <?php echo session('user_auth.username');?>
                                <small>注册于2016年7月</small>
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="<?php echo U('User/updatePassword');?>" class="btn">修改密码/昵称</a>
                            <a href="<?php echo U('Public/logout');?>" class="btn pull-right"><?php echo L('_EXIT_');?></a>
                        </div>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!--<li style="  margin-right: 15px;">
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
                <script>
                    function clear_cache() {
                        $.get('/cc.php');
                        toast.success("<?php echo L('_CACHE_CLEAR_SUCCESS_'); echo L('_PERIOD_');?>");
                    }
                </script>
            </ul>
        </div>

    </nav>
</header>
<div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->
    <aside data-role="left-sidebar"  class="main-sidebar">
        <section class="sidebar">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">模块</a></li>
                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">插件</a></li>


                    <li class="pull-right"></a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            更多 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a  role="menuitem" tabindex="-1" href="<?php echo U('Admin/Module/lists');?>">管理模块</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo U('Admin/Addons/index');?>">管理插件</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo U('Admin/Theme/tpls');?>">管理主题</a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo U('Admin/Cloud/index');?>">扩展商店</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <ul class="sidebar-menu">
                            <?php if(is_array($__MODULE_MENU__)): $i = 0; $__LIST__ = $__MODULE_MENU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v['is_setup'] AND $v['admin_entry']): if(!empty($v["children"])): ?><li class="treeview" id="tree<?php echo strtolower($v['name']);?>">
                                            <a class="linkOut myTit" href="<?php echo U($v['admin_entry']);?>" title="<?php echo (text($v["alias"])); ?>">
                                                <i class="oc-fa" style="background-color:<?php echo ($v["color"]); ?>"><?php echo ($v["word"]); ?></i>
                                                <span><?php echo ($v["alias"]); ?></span>
                                                <span class="iconfont icon-xiala"></span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <?php if(is_array($v["children"])): $i = 0; $__LIST__ = $v["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i; if(!empty($key)): ?><li class="heading">
                                                        <h4 style="font-size: 14px" class="uppercase"><i class="fa fa-chevron-circle-down"></i> <?php echo ($key); ?></h4>
                                                    </li>
                                                    <?php if(is_array($children)): $i = 0; $__LIST__ = $children;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li><a class="myTit" href="<?php echo (u($child["url"])); ?>" title="<?php echo (text($child["title"])); ?>">
                                                            <?php echo ($child["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </li>
                                        <?php else: ?>
                                        <li>
                                            <a class="linkOut myTit" href="<?php echo U($v['admin_entry']);?>" title="<?php echo (text($v["alias"])); ?>">
                                                <i class="oc-fa" style="background-color:<?php echo ($v["color"]); ?>"><?php echo ($v["word"]); ?></i>
                                                <span><?php echo ($v["alias"]); ?></span>
                                            </a>
                                        </li><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <ul class="sidebar-menu">
                        <?php if(is_array($__ADDONS_MENU__)): $i = 0; $__LIST__ = $__ADDONS_MENU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                                        <a class="linkOut myTit" href="<?php echo U($v['admin_entry']);?>" title="<?php echo (text($v["title"])); ?>">
                                            <i class="oc-fa" style="background-color:<?php echo ($v["color"]); ?>"><?php echo ($v["word"]); ?></i>
                                            <span><?php echo ($v["title"]); ?></span>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">

                    </div>
                    <!-- /.tab-pane -->
                </div>

        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 900px;">
            <!--<ul class="sub_menu">
                <?php if(!empty($__MENU__["child"])): ?><li class="treeview">

                        <ul class="treeview-menu">
                            <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$children): $mod = ($i % 2 );++$i; if(!empty($children)): ?><li class="heading">
                                        <h4 class="uppercase"><i class="fa fa-chevron-circle-down"></i> <?php echo ($key); ?></h4>
                                    </li>
                                    <?php if(is_array($children)): $i = 0; $__LIST__ = $children;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li><a href="<?php echo (u($child["url"])); ?>"><i class="fa fa-circle-o"></i>
                                            <?php echo ($child["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endif; ?>
            </ul>-->
        <div class="newMain">
                <!-- Content Header (Page header) -->
                <section class="content-header" style="padding: 0">
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div id="main-content">
                        <?php if(($update) == "1"): ?><div id="top-alert" class="alert alert-success alert-dismissable"
                                 style="position: absolute;left: 50%;margin-left: -150px;width: 300px;box-shadow: rgba(95, 95, 95, 0.4) 3px 3px 3px;z-index:999">
                                <i class="icon-ok-sign" style="font-size: 28px"></i> &nbsp;&nbsp;
                                <?php echo L('_VERSION_UPDATE_',array('href'=> '<a class="alert-link" href="'.U('Cloud/update').'">' ));?></a>
                                <button class="close fixed" style="margin-top: 4px;">&times;</button>
                            </div><?php endif; ?>

                        <div id="main" style="overflow-y:auto;overflow-x:hidden;">
                            
                                <!-- nav -->
                                <?php if(!empty($_show_nav)): ?><div class="breadcrumb">
                                        <span><?php echo L('_YOUR_POSITION_'); echo L('_COLON_');?></span>
                                        <?php $i = '1'; ?>
                                        <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
                                                <?php else: ?>
                                                <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
                                            <?php $i = $i+1; endforeach; endif; ?>
                                    </div><?php endif; ?>
                                <!-- nav -->
                            

                            <div class="admin-main-container">
                                
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="<?php echo U('Admin/Index/index');?>">首页  </a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>订单</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <a class="btn btn-danger" data-role="addTo"><i class="icon-plus"></i> 添加到常用操作</a>
<?php $controller = CONTROLLER_NAME; $current = M('Menu')->where("url like '%$controller/" . ACTION_NAME . "' AND pid > 0")->field('id')->find(); ?>
<input type="hidden" id="current" value="<?php echo ($current); ?>">

<script>
    $('[data-role="addTo"]').click(function () {
        var id = "<?php echo ($current['id']); ?>";
        var url = "<?php echo U('Admin/Index/addTo');?>";
        $.post(url, {id: id}, function (msg) {
            if (msg.status) {
                console.log(msg);
                toast.success(msg.info);
                /*setTimeout(function () {
                 window.location.reload();
                 }, 500);*/
            } else {
                toast.error(msg.info);
            }
        }, 'json')
    });
</script>

        </div>
    </div>

	<!-- 标题栏 -->
	<div class="main-title">
		<h2><?php echo L("_Order_LIST_TITLE_");?>&nbsp;&nbsp;&nbsp;</h2>
	</div>
    <div class="clearfix">
        <div class="col-xs-8 pd0">
            <button class="btn select"><?php echo L("_SCREEN_");?></button>

        </div>

        <div class="col-xs-4">
            <div class="search-form  pull-right">
                <div class="input-group" style="width: 200px" >
                    <input type="text" name="uid" class="search-input form-control" value="<?php echo I('get.uid','','intval');?>"
                           placeholder=<?php echo L("_PLEASE_ENTER_THE_USER_UID_WITH_DOUBLE_");?>>
                    <span class="input-group-btn">  <a class="btn btn-default" href="javascript:;" id="search"
                                                       url="<?php echo U('Action/actionlog');?>"><i
                            class="fa fa-search"></i></a></span>
                </div>
            </div>
        </div>
    </div>

	<!-- 数据列表 -->
	<div class="data-table with-padding adminlte-os-table">
	<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
		<th class="row-selected row-selected"><input class="check-all" type="checkbox"/></th>
		<th class=""><?php echo L("_ORDER_NO_");?></th>
		<th class=""><?php echo L("_ORDER_QUESTION_");?></th>

        <th><?php echo L("_ORDER_MONEY_");?></th>
        <th class=""><?php echo L("_ORDER_STATUS_");?></th>
		<th class=""><?php echo L("_ORDER_CREATETIME_");?></th>
		<th class=""><?php echo L("_ORDER_ENDTIME_");?></th>
            <th class="">操作</th>
		</tr>
    </thead>
    <tbody>
		<?php if(!empty($_list)): if(is_array($_list)): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><input class="ids" type="checkbox" name="ids[]" value="<?php echo ($vo["id"]); ?>" /></td>
			<td><?php echo ($vo["order_no"]); ?> </td>
			<td><?php echo ($_questtion[$vo['question_id']]); ?></td>

            <td><?php echo ($vo["pay_money"]); ?></td>
            <td><?php echo ($vo["status_text"]); ?></td>
			<td><span><?php echo ($vo["createtime"]); ?></span></td>
            <td><span><?php echo ($vo["endtime"]); ?></span></td>

			<td><a href="<?php echo U('Order/edit?id='.$vo['id']);?>"><?php echo L("_DETAILED_");?></a>

                </td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<?php else: ?>
		<td colspan="7" class="text-center"> aOh!<?php echo L("_THERE_IS_NO_CONTENT_");?> </td><?php endif; ?>
	</tbody>
    </table>
	</div>
	<!-- 分页 -->
	<div class="with-padding"><?php echo ($_page); ?></div>
	<!-- /分页-->


                            </div>

                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
    </div>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    
</footer>
<!-- Control Sidebar -->
<!--<aside class="control-sidebar control-sidebar-dark" style="position: fixed;height: auto;">
    &lt;!&ndash; Create the tabs &ndash;&gt;
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab" aire-expend="true"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-stats-tab" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    &lt;!&ndash; Tab panes &ndash;&gt;
    <div class="tab-content">
        &lt;!&ndash; Home tab content &ndash;&gt;
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-user bg-yellow"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                            <p>New phone +1(800)555-1234</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                            <p>nora@example.com</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon fa fa-file-code-o bg-green"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                            <p>Execution time 5 seconds</p>
                        </div>
                    </a>
                </li>
            </ul>
            &lt;!&ndash; /.control-sidebar-menu &ndash;&gt;

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Custom Template Design
                            <span class="label label-danger pull-right">70%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Update Resume
                            <span class="label label-success pull-right">95%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Laravel Integration
                            <span class="label label-warning pull-right">50%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <h4 class="control-sidebar-subheading">
                            Back End Framework
                            <span class="label label-primary pull-right">68%</span>
                        </h4>

                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                        </div>
                    </a>
                </li>
            </ul>
            &lt;!&ndash; /.control-sidebar-menu &ndash;&gt;

        </div>
        &lt;!&ndash; /.tab-pane &ndash;&gt;
        &lt;!&ndash; Stats tab content &ndash;&gt;
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        &lt;!&ndash; /.tab-pane &ndash;&gt;
        &lt;!&ndash; Settings tab content &ndash;&gt;
        <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                &lt;!&ndash; /.form-group &ndash;&gt;

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Allow mail redirect
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Other sets of options are available
                    </p>
                </div>
                &lt;!&ndash; /.form-group &ndash;&gt;

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Expose author name in posts
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Allow the user to show his name in blog posts
                    </p>
                </div>
                &lt;!&ndash; /.form-group &ndash;&gt;

                <h3 class="control-sidebar-heading">Chat Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Show me as online
                        <input type="checkbox" class="pull-right" checked>
                    </label>
                </div>
                &lt;!&ndash; /.form-group &ndash;&gt;

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Turn off notifications
                        <input type="checkbox" class="pull-right">
                    </label>
                </div>
                &lt;!&ndash; /.form-group &ndash;&gt;

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Delete chat history
                        <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                    </label>
                </div>
                &lt;!&ndash; /.form-group &ndash;&gt;
            </form>
        </div>
        &lt;!&ndash; /.tab-pane &ndash;&gt;
    </div>
</aside>-->
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
<?php if($report){ ?>
<div class="report_feedback" title="<?php echo L('_REPORT_EXPERIENCE_PLEASE_FILL_');?>" data-toggle="modal" data-target="#myModal">
    <div class="report_icon"></div>
    <span class="label label-badge label-danger report_point">1</span>
</div>
<div class="modal fade in" id="myModal" aria-hidden="false" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="report_form" action="<?php echo U('admin/admin/submitReport');?>" method="post">


                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only"><?php echo L('_CLOSE_');?></span></button>
                    <h4 class="modal-title"><?php echo L('_REPORT_EXPERIENCE_');?></h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <!-- 帖子分类 -->
                        <div class="col-sm-12">
                            <div><?php echo L('_THANKS_HOPE_');?></div>

                            <label class="item-label"><?php echo L('_MOOD_MY_');?></label>

                            <div>
                                <select name="q1" class="report-select" style="width:400px;">
                                    <option value="0"><?php echo L('_ELECT_PLEASE_');?></option>
                                    <option><?php echo L('_HAPPY_');?></option>
                                    <option><?php echo L('_AGONY_');?></option>
                                    <option><?php echo L('_LOVE_');?></option>
                                    <option><?php echo L('_EXPECT_');?></option>
                                </select>
                            </div>

                            <label class="item-label"><?php echo L('_LOVE_MY_OPTION_');?></label>

                            <div>
                                <select name="q2" class="report-select" style="width:400px;">
                                    <option value="0"><?php echo L('_ELECT_PLEASE_');?></option>
                                    <?php if(is_array($this_update)): $i = 0; $__LIST__ = $this_update;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?><option value="<?php echo (htmlspecialchars($option)); ?>"><?php echo (htmlspecialchars($option)); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>

                            <label class="item-label"><?php echo L('_HATE_MY_OPTION_');?>
                            </label>

                            <div>
                                <select name="q3" class="report-select" style="width:400px;">
                                    <option value="0"><?php echo L('_ELECT_PLEASE_');?></option>
                                    <?php if(is_array($this_update)): $i = 0; $__LIST__ = $this_update;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?><option value="<?php echo (htmlspecialchars($option)); ?>"><?php echo (htmlspecialchars($option)); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>


                            <label class="item-label"><?php echo L('_EXPECTATION__MY_OPTION_');?>
                            </label>

                            <div>
                                <select name="q4" class="report-select" style="width:400px;">
                                    <option value="0"><?php echo L('_ELECT_PLEASE_');?></option>
                                    <?php if(is_array($future_update)): $i = 0; $__LIST__ = $future_update;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?><option value="<?php echo (htmlspecialchars($option)); ?>"><?php echo (htmlspecialchars($option)); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <?php if(strval($report['url'])!=''){ ?>
                    <a class="pull-left" href="<?php echo ($report['url']); ?>" target="_blank"><?php echo L('_UPDATE_LOOK_');?></a>
                    <?php } ?>
                    <button type="submit" class="btn ajax-post" target-form="report_form"><?php echo L('_CONFIRM_');?></button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php } ?>

<!--adminlte-->
    <!-- FastClick -->
<script src="/Application/Admin/Static/adminlte/plugins/fastclick/fastclick.js"></script>
<script src="/Application/Admin/Static/adminlte/bootstrap/js/bootstrap.min.js"></script>
<script src="/Application/Admin/Static/bootstrap/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/Application/Admin/Static/adminlte/dist/js/app.min.js"></script>
<link rel="stylesheet" href="/Application/Admin/Static/bootstrap/plugins/bootstrap-toastr/toastr.min.css">
<script src="/Application/Admin/Static/bootstrap/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script src="/Application/Admin/Static/adminlte/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>
<!--adminlte end-->
<script type="text/javascript" src="/Application/Admin/Static/js/com/com.toast.class.js"></script>

<script type="text/javascript">
    (function () {
        var ThinkPHP = window.Think = {
            "ROOT": "", //当前网站地址
            "APP": "/index.php?s=", //当前项目地址
            "PUBLIC": "/Public", //项目公共目录地址
            "DEEP": "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL": ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR": ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"],
            'URL_MODEL': "<?php echo C('URL_MODEL');?>"
        };
        // 修改a标签title样式
        $("a.myTit").mouseover(function(e){
            this.myTitle=this.title;
            this.title="";
            var tooltip="<div id='tpLink'>"+this.myTitle+"</div>";   //创建DIV元素
            $(this).append(tooltip);     //追加到文档中
            $("#tpLink").show();    //设置X  Y坐标， 并且显示
               }).mouseout(function(){
                this.title=this.myTitle;
                      $("#tpLink").remove();    //移除
                    }).mousemove(function(e){
                       $("#tpLink").css({"left": 210 + "px"});
                   })
    })();
</script>
<script type="text/javascript" src="/Public/static/think.js"></script>
<script type="text/javascript" src="/Application/Admin/Static/js/common.js"></script>


<script type="text/javascript">
    +function () {
        $('[data-role="left-sidebar"] .treeview').hover(function () {
            var height=$(this).find('.treeview-menu').height();
            var top_height=$(this).offset().top;
            var total_height=$('[data-role="left-sidebar"]').height()+$('[data-role="left-sidebar"]').offset().top;
            if(total_height<top_height+height){
                var top=total_height-top_height-height;
                $(this).find('.treeview-menu').css('top',top);
            }
        });
        $('[data-role="top-sidebar"] .mega-menu-dropdown').hover(function () {
            var width= $(this).find('.dropdown-menu').width();
            var left_width=$(this).offset().left;
            var total_width=document.body.scrollWidth;
            if(total_width<left_width+width){
                var left=total_width-left_width-width;
                $(this).find('.dropdown-menu').css('left',left);
            }
        });
        var $window = $(window), $subnav = $("#subnav"), url;
        $window.resize(function () {
            $("#main").css("min-height", $window.height() - 130);
        }).resize();

        // 导航栏超出窗口高度后的模拟滚动条
        var sHeight = $(".sidebar").height();
        var subHeight = $(".subnav").height();
        var diff = subHeight - sHeight; //250
        var sub = $(".subnav");
        if (diff > 0) {
            $(window).mousewheel(function (event, delta) {
                if (delta > 0) {
                    if (parseInt(sub.css('marginTop')) > -10) {
                        sub.css('marginTop', '0px');
                    } else {
                        sub.css('marginTop', '+=' + 10);
                    }
                } else {
                    if (parseInt(sub.css('marginTop')) < '-' + (diff - 10)) {
                        sub.css('marginTop', '-' + (diff - 10));
                    } else {
                        sub.css('marginTop', '-=' + 10);
                    }
                }
            });
        }
        //展开一级导航
        var nav_obj = $("#tree<?php echo strtolower($__MENU__['child']['module']);?>") ;
        nav_obj.addClass("active");
//        nav_obj.trigger("click");
    }();
    highlight_subnav("<?php echo U('Admin'.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,$_GET);?>")

    function displaySubMenu(li) {
        var subMenu = li.getElementsByTagName("ul")[0];
        subMenu.style.display = "block";
    }
    function hideSubMenu(li) {
        var subMenu = li.getElementsByTagName("ul")[0];
        subMenu.style.display = "none";
    }


</script>

<script type="text/javascript">
$(function(){
    $("#search").click(function () {
        var url = $(this).attr('url');
        var query = $('.search-form').find('input').serialize();
        query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g, '');
        query = query.replace(/^&/g, '');
        if (url.indexOf('?') > 0) {
            url += '&' + query;
        } else {
            url += '?' + query;
        }
        window.location.href = url;
    });

    $("#action_add").click(function(){
		window.location.href = $(this).attr('url');
	});
    //回车搜索
    $(".search-input").keyup(function (e) {
        if (e.keyCode === 13) {
            $("#search").click();
            return false;
        }
    });

    //模态框
    $('.select').click(function () {
        $('#select').modal();
    });

    //导出csv
    $('[data-role="csv"]').click(function(){
        var data_url=$(this).attr('data-url');
        var form=$('.ids');
        if (form.get(0) == undefined) {
        } else if (form.get(0).nodeName == 'FORM') {
            query = form.serialize();
        } else if (form.get(0).nodeName == 'INPUT' || form.get(0).nodeName == 'SELECT' || form.get(0).nodeName == 'TEXTAREA') {
            query = form.serialize();
        } else {
            query = form.find('input,select,textarea').serialize();
        }
        data_url+='&'+query;
        window.open(data_url);
    });
})
</script>


    <div class="modal fade" id="select">
        <div class="modal-dialog modal-sm" style="margin-top: 198px;width: 528px;">
            <div class="modal-content" style="height: 298px">
                <link href="/Application/Admin/Static/bootstrap/plugins/datetimepicker/datetimepicker.css" rel="stylesheet" type="text/css">
                <script type="text/javascript" src="/Application/Admin/Static/bootstrap/plugins/datetimepicker/datetimepicker.min.js"></script>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only"><?php echo L('_CLOSE_');?></span></button>
                    <h4 class="modal-title" id="myModalLabel">订单筛选</h4>
                </div>
                <div class="modal-body">
                    <form class="ajax-form" method="post" action="<?php echo U('admin/order/index');?>">

                        <div style="line-height: 45px;margin-left: 15px">
                            <label>根据时间筛选</label>
                        </div>
                        <div class="col-xs-5">
                            <input type="text" id="sTime" name="sTime" class="time_d form-control form_check" readonly check-type="Date" value="" placeholder="开始时间" required/>
                        </div>

                        <div class="col-xs-5">
                            <input type="text" id="eTime" name="eTime" class="time_d form-control form_check" readonly check-type="Date"  value="" placeholder="截止时间" required/>
                        </div>


                        <div style="height: 40px;margin-left: 18px;width: 120px ">
                            <span><p class="pull-left" style="margin-right: 5px">
                                <input type="submit" data-role="submitscreen" value="确定" class="btn btn-primary send_box">
                            </p></span>

                            <span><p class="pull-left" style="margin-left: 5px;">
                                <input type="button" value="取消" class="btn btn-primary send_box" data-dismiss="modal">
                            </p></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.time').datetimepicker({
            language:'zh-CN',
            weekStart:1,
            todayBtn:1,
            autoclose:1,
            todayHighlight:1,
            startView:2,
            minView:0,
            forceParse:0,
            format: 'yyyy-mm-dd hh:ii'
        });

        $('.time_d').datetimepicker({
            language:'zh-CN',
            weekStart:1,
            todayBtn:1,
            autoclose:1,
            todayHighlight:1,
            startView:2,
            minView:0,
            forceParse:0,
            format: 'yyyy-mm-dd hh:ii'
        });
    </script>

</body>
</html>