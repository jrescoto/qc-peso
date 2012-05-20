<div class="applicantEducations form">
<?php echo $this->Form->create('ApplicantEducation');?>
	<fieldset>
		<legend><?php echo __('Edit Applicant Education'); ?></legend>
	<?php
		echo $this->Form->input('applicant_education_id');
		echo $this->Form->input('applicant_id');
		echo $this->Form->input('level');
		echo $this->Form->input('course');
		echo $this->Form->input('major');
		echo $this->Form->input('school');
		echo $this->Form->input('year_from');
		echo $this->Form->input('year_to');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ApplicantEducation.applicant_education_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ApplicantEducation.applicant_education_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applicant Educations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('controller' => 'applicants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add')); ?> </li>
	</ul>
</div>
