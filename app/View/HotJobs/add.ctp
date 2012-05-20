<div class="hotJobs form">
<?php echo $this->Form->create('HotJob');?>
	<fieldset>
		<legend><?php echo __('Add Hot Job'); ?></legend>
	<?php
		echo $this->Form->input('job_tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hot Jobs'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Job Tags'), array('controller' => 'job_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Tag'), array('controller' => 'job_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
