<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html><head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta content="pc,mobile" name="applicable-device">
<meta content="no-transform" http-equiv="Cache-Control">
<meta content="no-siteapp" http-equiv="Cache-Control">
<meta content="width=device-width" name="viewport">
<link href="/exam1/Public/css/style.css" media="screen" type="text/css" rel="stylesheet">
<script src="/exam1/Public/js/jquery.min.js"></script>
<title><?php echo ($resart["title"]); ?></title><meta content="  " name="keywords">
<meta content=" ddd " name="description">
</head>
<body class="archive category category-philosophy-life category-18">
<div class="topbar">
	<div class="inner">
		<a title="阅读" href="" class="logo">阅读网</a>
		<ul class="nav">
			<?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="menu-item menu-item-type-taxonomy menu-item-object-category" ><a href="/exam1/index.php/Home/List/Index/typeid/<?php echo ($vo["typeid"]); ?>" ><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
<div class="wrapper">
	<div class="content">

<div class="meta">
	<h1 class="meta-tit"><?php echo ($resart["title"]); ?></h1>
	<p class="meta-info">发表：<a href="/"><?php echo ($resart["typename"]); ?></a> &nbsp;&nbsp; 发表日期：<?php echo (date("Y-m-d",$resart["time"])); ?>&nbsp;&nbsp; <span>评论关闭</span>&nbsp;&nbsp; </p>
</div>
<div class="entry">
	<p><img width="630" alt="<?php echo ($resart["title"]); ?>" src="/exam1<?php echo ($resart["pic"]); ?>" class="aligncenter size-full wp-image-38074"></p>
<p>
	<?php echo ($resart["desc"]); ?>
</p>
</div>
<!-- 广告代码 -->
<!-- 百度推荐 -->
</div>
	<div class="sidebar">

    <div class="widget widget_categories"><h3 class="widget-tit">文章分类</h3>		<ul>
        <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-18 current-cat"><a  href="/exam1/index.php/Home/list/Index/typeid/<?php echo ($vo["typeid"]); ?>"><?php echo ($vo["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
    </div>		<div class="widget widget_recent_entries">		<h3 class="widget-tit">最新发表</h3>		<ul>
    <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><li>
            <a href="/exam1/index.php/Home/Article/Index/id/<?php echo ($vo2["id"]); ?>"><?php echo ($vo2["title"]); ?></a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div></div>
</div>

<div class="footer">
	<div class="inner">
		
		<div class="copyright">
			意空间，<a href="">青春励志文章</a>阅读，版权所有，保留一切权利！ &copy; 2016 <a href="">意空间阅读网</a> <a href="http://www.miitbeian.gov.cn" target="_blank">湘ICP备13010121号-3</a>
		</div>
	</div>
</div>







</body></html>