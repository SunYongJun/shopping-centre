<?php if (!defined('THINK_PATH')) exit();?><div class="shopping-btn">
    <strong id="cartbuy"><?php echo ($sum); ?></strong>
</div>
<div class="shopping-list" id="shopping_list" style="display: none;">
    <div class="shopping-list-title"><strong><?php echo ($sum); ?></strong></div>
    <?php if($sum == 0): ?><!-- 没有商品显示这个 -->
    <div class="shopping-list-pro noshop"><i></i><b></b>您的购物车还没有商品，<br>赶紧去选购吧！</div>
    <!-- 没有商品显示这个结束 -->
    <!-- 有商品显示这个 读取session的数据-->
    <?php else: ?>
    <div class="shopping-list-pro">
        <i></i>
        <div class="shopping-list-bar" id="shopping_list_info">
            <!-- dl遍历购物车里面的商品 -->
            <?php if(is_array($cart)): foreach($cart as $key=>$mycart): ?><dl>
                <dt>
                    <a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($mycart["id"]); ?>" target="_blank" title="">
                        <img src="/newlefeng/Public/<?php echo ($mycart["goods_img"]); ?>">
                    </a>
                </dt>
                <dd class="shopping-pro">
                    <a href="/newlefeng/index.php/Home/Product/index/id/<?php echo ($mycart["id"]); ?>" target="_blank"><?php echo ($mycart["goods_name"]); ?>
                    </a>
                </dd>
                <dd class="shopping-price">
                    <em>￥<?php echo ($mycart["goods_price"]); ?></em>×<?php echo ($mycart["num"]); ?>
                    <a href="/newlefeng/index.php/Home/Cart/delete/id/<?php echo ($mycart["id"]); ?>">删除</a>
                </dd>
            </dl><?php endforeach; endif; ?>
        </div>
        <p>共<b><?php echo ($sum); ?></b>件商品</p>
        <p>
            <span>共计：<b>
            <em>￥</em><?php echo ($price); ?></b>
            </span>
        </p>
        <a class="goshopping" href="/newlefeng/index.php/Home/Cart/index">去购物车结算</a>
    </div>
    <!-- 有商品显示这个结束 --><?php endif; ?>
</div>