<?php if (!defined('THINK_PATH')) exit();?>hello 这是一个测试页<br>

<table>

    <tr>
        <td>序号</td>
        <td>栏目名称</td>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["typename"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
        <td>
            <?php echo ($page); ?>
        </td>
    </tr>

</table>