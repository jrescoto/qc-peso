<div class="businessBranches form">
<?php echo $this->Form->create('BusinessBranch');?>
	<fieldset>
		<legend><?php echo __('Edit Business Branch'); ?></legend>
	<?php
		echo $this->Form->input('business_branch_id');
		echo $this->Form->input('business_id');
		echo $this->Form->input('address_line_1');
		echo $this->Form->input('municipality_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BusinessBranch.business_branch_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BusinessBranch.business_branch_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Business Branches'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>
