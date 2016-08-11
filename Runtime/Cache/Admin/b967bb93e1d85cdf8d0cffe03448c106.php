<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改文章</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo ADMIN_CSS;?>mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：文章管理-》修改文章信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/exam1/index.php/Admin/Article/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>标题</td>
                    <input type="hidden" name="id" value="<?php echo ($res["id"]); ?>" /></td> <!-- 这里必须添加id，否则将导致无法修改 -->
                    <td><input type="text" name="title" value="<?php echo ($res["title"]); ?>" /></td>
                </tr>

                <tr>
                    <td>作者</td>
                    <td><input type="text" name="author" value="<?php echo ($res["author"]); ?>" /></td>
                </tr>

                <tr>
                    <td>热门</td>
                    <!-- 这里使用的是tp的内置标签if 来判断check的值 这里必须用数组形式来写，否则会报错 -->
                    <td><input type="checkbox"  <?php if($res[hot] == 1 ): ?>checked = "checked"<?php endif; ?> name="hot" value="1" /></td>
                </tr>

                <tr>
                    <td>最新</td>
                    <td><input type="checkbox"  <?php if($res['new'] == 1 ): ?>checked = "checked"<?php endif; ?> name="new" value="1" /></td>
                </tr>

                <tr>
                    <td>文章分类</td>
                    <td>
                        <select name="typeid">
                            <option>请选择</option>
                            <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- 条件判断 使用if 和volist(循环) 获取下拉列表值 -->
                            <option <?php if($res['typeid'] == $vo['typeid'] ): ?>selected = "selected"<?php endif; ?>  value="<?php echo ($vo["typeid"]); ?>" > <?php echo ($vo["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>缩略图</td>
                    <td><input type="file" name="pic" value="" />
                        <!-- 对缩略图进行显示，同时判断是否存在缩略图，如果不存在，则显示文字 -->
                        <?php if($res['pic'] != '' ): ?><img height="40px;" src="/exam1<?php echo ($res['pic']); ?>">
                            <?php else: ?>
                            <span style="color:#ccc;">暂无缩略图</span><?php endif; ?>
                </tr>
                <tr>
                    <td>文章内容</td>
                    <td>
                        <textarea style="width:500px; height:300px;" name="desc">
                            <?php echo ($res["desc"]); ?>
                        </textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>