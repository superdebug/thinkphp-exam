<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html><head>
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
	<meta content="pc,mobile" name="applicable-device">
	<meta content="no-transform" http-equiv="Cache-Control">
	<meta content="no-siteapp" http-equiv="Cache-Control">
	<meta content="width=device-width" name="viewport">
	<link href="/exam1/Public/css/style.css" media="screen" type="text/css" rel="stylesheet">
	<script src="./js/jquery.min.js"></script>
	<title>人生哲理_人生哲理文章阅读_人生哲理语录句子大全_意空间阅读网</title><meta content="人生哲理_人生哲理文章阅读_人生哲理语录句子大全" name="keywords">
	<meta content="人生哲理栏目为广大网友奉献人生哲理名言，人生哲理故事，人生哲理文章，哲理名人名言名录大全。" name="description">
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

		<!-- 分享代码 --><!-- 分享代码 -->

		<ul class="excerpt thumb">
			<?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a class="pic" href="/exam1/index.php/Home/Article/Index/id/<?php echo ($vo["id"]); ?>"><img alt="<?php echo ($vo["title"]); ?>" src="/exam1<?php echo ($vo["pic"]); ?>"></a>			<h2 class="excerpt-tit">
					<a href="/exam1/index.php/Home/Article/Index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
				</h2>
					<p class="excerpt-desc">
						<!--这里的简介是通过内容进行限定截取的 -->
						<?php echo (substr($vo["desc"],0,300)); ?>...
					</p>

					<div class="excerpt-time">
						<?php echo (date("Y-m-d h:i:s",$vo["time"])); ?>	</div>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>

		<!-- <div class="paging"><span class="current">1</span> <a title="第 2 页" href="/category/philosophy-life/page/2">2</a> <a title="第 3 页" href="/category/philosophy-life/page/3">3</a> <a title="第 4 页" href="/category/philosophy-life/page/4">4</a> <a title="第 5 页" href="/category/philosophy-life/page/5">5</a> <span class="dots"> ... </span><a title="»" href="/category/philosophy-life/page/57">57</a> <a href="/category/philosophy-life/page/2">&gt;</a></div> -->
		<div class="paging"><?php echo ($page); ?> </div>

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