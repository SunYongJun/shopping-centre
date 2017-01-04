<?php if (!defined('THINK_PATH')) exit();?><a data-toggle="dropdown" class="dropdown-toggle" href="#">
	<i class="icon-bell-alt icon-animated-bell"></i>
	<span class="badge badge-important"><?php echo ($count); ?></span>
</a>

<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
	<li class="dropdown-header">
		<i class="icon-warning-sign"></i>
		<?php echo ($count); ?>个待发货订单
	</li>
	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><li>
		<a href="/newlefeng/index.php/Admin/Order/index">
			<div class="clearfix">
				<span class="pull-left">
					<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
					<?php echo ($vo["acti"]); ?>
				</span>
				<span class="pull-right badge badge-success"><?php echo ($vo["action_count"]); ?></span>
			</div>
		</a>
	</li><?php endforeach; endif; ?>
	<li>
		<a href="/newlefeng/index.php/Admin/Order/index">
			查看所有订单
			<i class="icon-arrow-right"></i>
		</a>
	</li>
</ul>