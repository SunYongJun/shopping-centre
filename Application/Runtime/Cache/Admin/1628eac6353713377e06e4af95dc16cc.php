<?php if (!defined('THINK_PATH')) exit();?><a data-toggle="dropdown" class="dropdown-toggle" href="#">
	<i class="icon-envelope icon-animated-vertical"></i>
	<span class="badge badge-success"><?php echo ($count); ?></span>
</a>

<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
	<li class="dropdown-header">
		<i class="icon-envelope-alt"></i>
		我的消息
	</li>
	<?php if(!empty($msg)): if(is_array($msg)): foreach($msg as $key=>$vmsg): ?><li>
		<a href="/newlefeng/index.php/Admin/Message/index">
			<img src="/newlefeng/Public/<?php echo ($vmsg["img"]); ?>" class="msg-photo" alt="Alex's Avatar" />
			<span class="msg-body">
				<span class="msg-title">
					<span class="blue"><?php echo ($vmsg["name"]); ?>:</span>
					<?php echo (mb_substr($vmsg["title"],0,8,'utf-8')); ?> ...
				</span>

				<span class="msg-time">
					<i class="icon-time"></i>
					<span><?php echo (timenow($vmsg["send_time"])); ?></span>
				</span>
			</span>
		</a>
	</li><?php endforeach; endif; ?>
	<?php else: ?>
	<li>暂无消息！</li><?php endif; ?>
	<li>
		<a href="/newlefeng/index.php/Admin/Message/index">
			查看所有消息
			<i class="icon-arrow-right"></i>
		</a>
	</li>
</ul>