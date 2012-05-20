<div class="applicantWorkExperiences form">
<?php echo $this->Form->create('ApplicantWorkExperience');?>
	<fieldset>
		<legend><?php echo __('Edit Applicant Work Experience'); ?></legend>
	<?php
		echo $this->Form->input('applicant_work_experience_id');
		echo $this->Form->input('applicant_id');
		echo $this->Form->input('job_tag_id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('company_address');
		echo $this->Form->input('date_from');
		echo $this->Form->input('date_to');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ApplicantWorkExperience.applicant_work_experience_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ApplicantWorkExperience.applicant_work_experience_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applicant Work Experiences'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('controller' => 'applicants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add')); ?> </li>
	</ul>
</div>
