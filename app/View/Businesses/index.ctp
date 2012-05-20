<div class="businesses index">
	<h2><?php echo __('Businesses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('business_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('business_name');?></th>
			<th><?php echo $this->Paginator->sort('acronym');?></th>
			<th><?php echo $this->Paginator->sort('tin');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('industry_id');?></th>
			<th><?php echo $this->Paginator->sort('address_line_1');?></th>
			<th><?php echo $this->Paginator->sort('municipality_id');?></th>
			<th><?php echo $this->Paginator->sort('telephone');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('website');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('contact_person_name');?></th>
			<th><?php echo $this->Paginator->sort('contact_person_position');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($businesses as $business): ?>
	<tr>
		<td><?php echo h($business['Business']['business_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($business['User']['username'], array('controller' => 'users', 'action' => 'view', $business['User']['user_id'])); ?>
		</td>
		<td><?php echo h($business['Business']['business_name']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['acronym']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['tin']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($business['Industry']['name'], array('controller' => 'industries', 'action' => 'view', $business['Industry']['industry_id'])); ?>
		</td>
		<td><?php echo h($business['Business']['address_line_1']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['municipality_id']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['fax']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['website']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['email']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['contact_person_name']); ?>&nbsp;</td>
		<td><?php echo h($business['Business']['contact_person_position']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $business['Business']['business_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $business['Business']['business_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $business['Business']['business_id']), null, __('Are you sure you want to delete # %s?', $business['Business']['business_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Business'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Branches'), array('controller' => 'business_branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Branch'), array('controller' => 'business_branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
