<div class="applicantWorkExperiences view">
<h2><?php  echo __('Applicant Work Experience');?></h2>
	<dl>
		<dt><?php echo __('Applicant Work Experience Id'); ?></dt>
		<dd>
			<?php echo h($applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($applicantWorkExperience['Applicant']['last_name'], array('controller' => 'applicants', 'action' => 'view', $applicantWorkExperience['Applicant']['applicant_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Tag Id'); ?></dt>
		<dd>
			<?php echo h($applicantWorkExperience['ApplicantWorkExperience']['job_tag_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Name'); ?></dt>
		<dd>
			<?php echo h($applicantWorkExperience['ApplicantWorkExperience']['company_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Address'); ?></dt>
		<dd>
			<?php echo h($applicantWorkExperience['ApplicantWorkExperience']['company_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date From'); ?></dt>
		<dd>
			<?php echo h($applicantWorkExperience['ApplicantWorkExperience']['date_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date To'); ?></dt>
		<dd>
			<?php echo h($applicantWorkExperience['ApplicantWorkExperience']['date_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($applicantWorkExperience['ApplicantWorkExperience']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($applicantWorkExperience['ApplicantWorkExperience']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Applicant Work Experience'), array('action' => 'edit', $applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Applicant Work Experience'), array('action' => 'delete', $applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id']), null, __('Are you sure you want to delete # %s?', $applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicant Work Experiences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant Work Experience'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('controller' => 'applicants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add')); ?> </li>
	</ul>
</div>
