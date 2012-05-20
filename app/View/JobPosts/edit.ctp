<div class="jobPosts form">
<?php echo $this->Form->create('JobPost');?>
	<fieldset>
		<legend><?php echo __('Edit Job Post'); ?></legend>
	<?php
		echo $this->Form->input('job_post_id');
		echo $this->Form->input('job_tag_id');
		echo $this->Form->input('business_id');
		echo $this->Form->input('name');
		echo $this->Form->input('type');
		echo $this->Form->input('description');
		echo $this->Form->input('location');
		echo $this->Form->input('preferred_height');
		echo $this->Form->input('preferred_gender');
		echo $this->Form->input('min_age');
		echo $this->Form->input('max_age');
		echo $this->Form->input('year_of_experience');
		echo $this->Form->input('education_attainment');
		echo $this->Form->input('course');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('JobPost.job_post_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('JobPost.job_post_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('action' => 'index'));?></li>
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
