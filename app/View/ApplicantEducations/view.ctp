<div class="applicantEducations view">
<h2><?php  echo __('Applicant Education');?></h2>
	<dl>
		<dt><?php echo __('Applicant Education Id'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['applicant_education_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($applicantEducation['Applicant']['last_name'], array('controller' => 'applicants', 'action' => 'view', $applicantEducation['Applicant']['applicant_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['course']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Major'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['major']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['school']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year From'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['year_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year To'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['year_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($applicantEducation['ApplicantEducation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Applicant Education'), array('action' => 'edit', $applicantEducation['ApplicantEducation']['applicant_education_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Applicant Education'), array('action' => 'delete', $applicantEducation['ApplicantEducation']['applicant_education_id']), null, __('Are you sure you want to delete # %s?', $applicantEducation['ApplicantEducation']['applicant_education_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicant Educations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant Education'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('controller' => 'applicants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add')); ?> </li>
	</ul>
</div>
