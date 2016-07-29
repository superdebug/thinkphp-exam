<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo ADMIN_CSS;?>mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：文章管理-》文章列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/exam1/index.php/Admin/Article/tianjia">【添加文章】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>文章名称</td>
                        <td>所属分类</td>
                        <td>作者</td>
                        <td>缩略图</td>
                        <td align="center" colspan="2">操作</td>
                    </tr>
                    <tr id="product1">
                        <td>1</td>
                        <td><a href="#">苹果（APPLE）iPhone 4S</a></td>
                        <td>分类</td>
                        <td>作者</td>
                        <td><img src="<?php echo ADMIN_IMG;?>20121018-174034-97960.jpg" height="40" width="40"></td>
                        <td><a href="/exam1/index.php/Admin/Article/xiugai">修改</a></td>
                        <td><a href="javascript:;" onclick="return confirm('你确定要删除这篇文章吗？');">删除</a></td>
                    </tr>

                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>