<div class="hotJobs view">
<h2><?php  echo __('Hot Job');?></h2>
	<dl>
		<dt><?php echo __('Hot Job Id'); ?></dt>
		<dd>
			<?php echo h($hotJob['HotJob']['hot_job_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotJob['JobTag']['name'], array('controller' => 'job_tags', 'action' => 'view', $hotJob['JobTag']['job_tag_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hotJob['HotJob']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($hotJob['HotJob']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hot Job'), array('action' => 'edit', $hotJob['HotJob']['hot_job_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hot Job'), array('action' => 'delete', $hotJob['HotJob']['hot_job_id']), null, __('Are you sure you want to delete # %s?', $hotJob['HotJob']['hot_job_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hot Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hot Job'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Tags'), array('controller' => 'job_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Tag'), array('controller' => 'job_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
