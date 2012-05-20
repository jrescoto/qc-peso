<div class="jobPosts index">
	<h2><?php echo __('Job Posts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('job_post_id');?></th>
			<th><?php echo $this->Paginator->sort('job_tag_id');?></th>
			<th><?php echo $this->Paginator->sort('business_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('location');?></th>
			<th><?php echo $this->Paginator->sort('preferred_height');?></th>
			<th><?php echo $this->Paginator->sort('preferred_gender');?></th>
			<th><?php echo $this->Paginator->sort('min_age');?></th>
			<th><?php echo $this->Paginator->sort('max_age');?></th>
			<th><?php echo $this->Paginator->sort('year_of_experience');?></th>
			<th><?php echo $this->Paginator->sort('education_attainment');?></th>
			<th><?php echo $this->Paginator->sort('course');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($jobPosts as $jobPost): ?>
	<tr>
		<td><?php echo h($jobPost['JobPost']['job_post_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($jobPost['JobTag']['name'], array('controller' => 'job_tags', 'action' => 'view', $jobPost['JobTag']['job_tag_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($jobPost['Business']['business_name'], array('controller' => 'businesses', 'action' => 'view', $jobPost['Business']['business_id'])); ?>
		</td>
		<td><?php echo h($jobPost['JobPost']['name']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['type']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['description']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['location']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['preferred_height']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['preferred_gender']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['min_age']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['max_age']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['year_of_experience']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['education_attainment']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['course']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['created']); ?>&nbsp;</td>
		<td><?php echo h($jobPost['JobPost']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $jobPost['JobPost']['job_post_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $jobPost['JobPost']['job_post_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $jobPost['JobPost']['job_post_id']), null, __('Are you sure you want to delete # %s?', $jobPost['JobPost']['job_post_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Tags'), array('controller' => 'job_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Tag'), array('controller' => 'job_tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vacancies'), array('controller' => 'vacancies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vacancy'), array('controller' => 'vacancies', 'action' => 'add')); ?> </li>
	</ul>
</div>
