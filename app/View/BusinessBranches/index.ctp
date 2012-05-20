<div class="businessBranches index">
	<h2><?php echo __('Business Branches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('business_branch_id');?></th>
			<th><?php echo $this->Paginator->sort('business_id');?></th>
			<th><?php echo $this->Paginator->sort('address_line_1');?></th>
			<th><?php echo $this->Paginator->sort('municipality_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($businessBranches as $businessBranch): ?>
	<tr>
		<td><?php echo h($businessBranch['BusinessBranch']['business_branch_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($businessBranch['Business']['business_name'], array('controller' => 'businesses', 'action' => 'view', $businessBranch['Business']['business_id'])); ?>
		</td>
		<td><?php echo h($businessBranch['BusinessBranch']['address_line_1']); ?>&nbsp;</td>
		<td><?php echo h($businessBranch['BusinessBranch']['municipality_id']); ?>&nbsp;</td>
		<td><?php echo h($businessBranch['BusinessBranch']['created']); ?>&nbsp;</td>
		<td><?php echo h($businessBranch['BusinessBranch']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $businessBranch['BusinessBranch']['business_branch_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $businessBranch['BusinessBranch']['business_branch_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $businessBranch['BusinessBranch']['business_branch_id']), null, __('Are you sure you want to delete # %s?', $businessBranch['BusinessBranch']['business_branch_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Business Branch'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>
