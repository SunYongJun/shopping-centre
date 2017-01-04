<?php if (!defined('THINK_PATH')) exit();?><!-- 遍历出导航栏搜索框里面的所有品牌及商品数 -->
<?php if(is_array($brand)): foreach($brand as $key=>$vb): ?><ul id="searchLi0" class="">
    <li class="r"><b><?php echo ($vb["count"]); ?></b>件商品</li>
    <li class="l"><a href="/newlefeng/index.php/Home/List/index/brand/<?php echo ($vb["id"]); ?>"><?php echo ($vb["brand_name"]); ?></a></li>
</ul><?php endforeach; endif; ?>