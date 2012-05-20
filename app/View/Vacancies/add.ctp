<div class="vacancies form">
<?php echo $this->Form->create('Vacancy');?>
	<fieldset>
		<legend><?php echo __('Add Vacancy'); ?></legend>
	<?php
		echo $this->Form->input('job_post_id');
		echo $this->Form->input('priority');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vacancies'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
