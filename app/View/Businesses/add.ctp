<div class="businesses form">
<?php echo $this->Form->create('Business');?>
	<fieldset>
		<legend><?php echo __('Add Business'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('business_name');
		echo $this->Form->input('acronym');
		echo $this->Form->input('tin');
		echo $this->Form->input('type');
		echo $this->Form->input('industry_id');
		echo $this->Form->input('address_line_1');
		echo $this->Form->input('municipality_id');
		echo $this->Form->input('telephone');
		echo $this->Form->input('fax');
		echo $this->Form->input('website');
		echo $this->Form->input('email');
		echo $this->Form->input('contact_person_name');
		echo $this->Form->input('contact_person_position');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Businesses'), array('action' => 'index'));?></li>
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
