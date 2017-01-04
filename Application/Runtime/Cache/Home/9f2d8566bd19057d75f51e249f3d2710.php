<?php if (!defined('THINK_PATH')) exit();?><!-- 页面的菜单 -->
<!-- 遍历下的父级分类 -->
<?php if(is_array($pt)): foreach($pt as $key=>$vpt): ?><dl id="webf1">
    <!-- 遍历子级分类 -->
	<dt><strong><?php echo ($vpt["type_name"]); ?></strong>
	<p>
    <?php if(is_array($ct)): foreach($ct as $key=>$vct): if($vct['pid'] == $vpt['id']): ?><a href="/newlefeng/index.php/Home/list/index/type/<?php echo ($vct["id"]); ?>" target="_blank"><?php echo ($vct["type_name"]); ?></a><?php endif; endforeach; endif; ?>
	</p>
    <b class="arrow-right"></b>
    </dt>
    
</dl><?php endforeach; endif; ?>