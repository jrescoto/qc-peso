<div class="jobTags form">
<?php echo $this->Form->create('JobTag');?>
	<fieldset>
		<legend><?php echo __('Edit Job Tag'); ?></legend>
	<?php
		echo $this->Form->input('job_tag_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobTag.job_tag_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('JobTag.job_tag_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Tags'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Hot Jobs'), array('controller' => 'hot_jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hot Job'), array('controller' => 'hot_jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
