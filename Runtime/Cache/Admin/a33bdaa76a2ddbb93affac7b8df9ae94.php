<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo ADMIN_CSS;?>admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo ADMIN_IMG;?>header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo ADMIN_IMG;?>header_left.jpg" 
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：<?php echo ($admin['user']); ?>-----<?php echo ($_SESSION['admin']['user']); ?> &nbsp;&nbsp; <a style="color: #fff"
                                                        href=""
                                                        target=main>修改口令</a> &nbsp;&nbsp; <a style="color: #fff" 
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                                        href="/exam1/index.php/Admin/Login/logout" target=_top>退出系统</a>
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo ADMIN_IMG;?>header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html>