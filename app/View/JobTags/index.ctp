<div class="jobTags index">
	<h2><?php echo __('Job Tags');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('job_tag_id');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($jobTags as $jobTag): ?>
	<tr>
		<td><?php echo h($jobTag['JobTag']['job_tag_id']); ?>&nbsp;</td>
		<td><?php echo h($jobTag['JobTag']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($jobTag['JobTag']['name']); ?>&nbsp;</td>
		<td><?php echo h($jobTag['JobTag']['description']); ?>&nbsp;</td>
		<td><?php echo h($jobTag['JobTag']['created']); ?>&nbsp;</td>
		<td><?php echo h($jobTag['JobTag']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobTag['JobTag']['job_tag_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobTag['JobTag']['job_tag_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobTag['JobTag']['job_tag_id']), null, __('Are you sure you want to delete # %s?', $jobTag['JobTag']['job_tag_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Hot Jobs'), array('controller' => 'hot_jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hot Job'), array('controller' => 'hot_jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
