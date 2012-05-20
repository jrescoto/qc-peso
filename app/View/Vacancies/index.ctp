<div class="vacancies index">
	<h2><?php echo __('Vacancies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('vacancy_id');?></th>
			<th><?php echo $this->Paginator->sort('job_post_id');?></th>
			<th><?php echo $this->Paginator->sort('priority');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($vacancies as $vacancy): ?>
	<tr>
		<td><?php echo h($vacancy['Vacancy']['vacancy_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vacancy['JobPost']['name'], array('controller' => 'job_posts', 'action' => 'view', $vacancy['JobPost']['job_post_id'])); ?>
		</td>
		<td><?php echo h($vacancy['Vacancy']['priority']); ?>&nbsp;</td>
		<td><?php echo h($vacancy['Vacancy']['created']); ?>&nbsp;</td>
		<td><?php echo h($vacancy['Vacancy']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vacancy['Vacancy']['vacancy_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vacancy['Vacancy']['vacancy_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vacancy['Vacancy']['vacancy_id']), null, __('Are you sure you want to delete # %s?', $vacancy['Vacancy']['vacancy_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vacancy'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
