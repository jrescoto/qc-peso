<div class="businessBranches view">
<h2><?php  echo __('Business Branch');?></h2>
	<dl>
		<dt><?php echo __('Business Branch Id'); ?></dt>
		<dd>
			<?php echo h($businessBranch['BusinessBranch']['business_branch_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business'); ?></dt>
		<dd>
			<?php echo $this->Html->link($businessBranch['Business']['business_name'], array('controller' => 'businesses', 'action' => 'view', $businessBranch['Business']['business_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line 1'); ?></dt>
		<dd>
			<?php echo h($businessBranch['BusinessBranch']['address_line_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipality Id'); ?></dt>
		<dd>
			<?php echo h($businessBranch['BusinessBranch']['municipality_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($businessBranch['BusinessBranch']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($businessBranch['BusinessBranch']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Branch'), array('action' => 'edit', $businessBranch['BusinessBranch']['business_branch_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business Branch'), array('action' => 'delete', $businessBranch['BusinessBranch']['business_branch_id']), null, __('Are you sure you want to delete # %s?', $businessBranch['BusinessBranch']['business_branch_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Branches'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Branch'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>
