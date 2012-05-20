<div class="hotJobs index">
	<h2><?php echo __('Hot Jobs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('hot_job_id');?></th>
			<th><?php echo $this->Paginator->sort('job_tag_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($hotJobs as $hotJob): ?>
	<tr>
		<td><?php echo h($hotJob['HotJob']['hot_job_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotJob['JobTag']['name'], array('controller' => 'job_tags', 'action' => 'view', $hotJob['JobTag']['job_tag_id'])); ?>
		</td>
		<td><?php echo h($hotJob['HotJob']['created']); ?>&nbsp;</td>
		<td><?php echo h($hotJob['HotJob']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotJob['HotJob']['hot_job_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotJob['HotJob']['hot_job_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotJob['HotJob']['hot_job_id']), null, __('Are you sure you want to delete # %s?', $hotJob['HotJob']['hot_job_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hot Job'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Tags'), array('controller' => 'job_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Tag'), array('controller' => 'job_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
