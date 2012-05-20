<div class="applicants view">
<h2><?php  echo __('Applicant');?></h2>
	<dl>
		<dt><?php echo __('Applicant Id'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['applicant_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($applicant['User']['username'], array('controller' => 'users', 'action' => 'view', $applicant['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line 1'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['address_line_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipality Id'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['municipality_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Civil Status'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['civil_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tin'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['tin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Number'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['passport_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Religion'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['religion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employment Status'); ?></dt>
		<dd>
			<?php echo h($applicant['Applicant']['employment_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Applicant'), array('action' => 'edit', $applicant['Applicant']['applicant_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Applicant'), array('action' => 'delete', $applicant['Applicant']['applicant_id']), null, __('Are you sure you want to delete # %s?', $applicant['Applicant']['applicant_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicant Educations'), array('controller' => 'applicant_educations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant Education'), array('controller' => 'applicant_educations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicant Work Experiences'), array('controller' => 'applicant_work_experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant Work Experience'), array('controller' => 'applicant_work_experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Applicant Educations');?></h3>
	<?php if (!empty($applicant['ApplicantEducation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Applicant Education Id'); ?></th>
		<th><?php echo __('Applicant Id'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('Course'); ?></th>
		<th><?php echo __('Major'); ?></th>
		<th><?php echo __('School'); ?></th>
		<th><?php echo __('Year From'); ?></th>
		<th><?php echo __('Year To'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($applicant['ApplicantEducation'] as $applicantEducation): ?>
		<tr>
			<td><?php echo $applicantEducation['applicant_education_id'];?></td>
			<td><?php echo $applicantEducation['applicant_id'];?></td>
			<td><?php echo $applicantEducation['level'];?></td>
			<td><?php echo $applicantEducation['course'];?></td>
			<td><?php echo $applicantEducation['major'];?></td>
			<td><?php echo $applicantEducation['school'];?></td>
			<td><?php echo $applicantEducation['year_from'];?></td>
			<td><?php echo $applicantEducation['year_to'];?></td>
			<td><?php echo $applicantEducation['created'];?></td>
			<td><?php echo $applicantEducation['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applicant_educations', 'action' => 'view', $applicantEducation['applicant_education_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applicant_educations', 'action' => 'edit', $applicantEducation['applicant_education_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applicant_educations', 'action' => 'delete', $applicantEducation['applicant_education_id']), null, __('Are you sure you want to delete # %s?', $applicantEducation['applicant_education_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Applicant Education'), array('controller' => 'applicant_educations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Applicant Work Experiences');?></h3>
	<?php if (!empty($applicant['ApplicantWorkExperience'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Applicant Work Experience Id'); ?></th>
		<th><?php echo __('Applicant Id'); ?></th>
		<th><?php echo __('Job Tag Id'); ?></th>
		<th><?php echo __('Company Name'); ?></th>
		<th><?php echo __('Company Address'); ?></th>
		<th><?php echo __('Date From'); ?></th>
		<th><?php echo __('Date To'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($applicant['ApplicantWorkExperience'] as $applicantWorkExperience): ?>
		<tr>
			<td><?php echo $applicantWorkExperience['applicant_work_experience_id'];?></td>
			<td><?php echo $applicantWorkExperience['applicant_id'];?></td>
			<td><?php echo $applicantWorkExperience['job_tag_id'];?></td>
			<td><?php echo $applicantWorkExperience['company_name'];?></td>
			<td><?php echo $applicantWorkExperience['company_address'];?></td>
			<td><?php echo $applicantWorkExperience['date_from'];?></td>
			<td><?php echo $applicantWorkExperience['date_to'];?></td>
			<td><?php echo $applicantWorkExperience['created'];?></td>
			<td><?php echo $applicantWorkExperience['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applicant_work_experiences', 'action' => 'view', $applicantWorkExperience['applicant_work_experience_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applicant_work_experiences', 'action' => 'edit', $applicantWorkExperience['applicant_work_experience_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applicant_work_experiences', 'action' => 'delete', $applicantWorkExperience['applicant_work_experience_id']), null, __('Are you sure you want to delete # %s?', $applicantWorkExperience['applicant_work_experience_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Applicant Work Experience'), array('controller' => 'applicant_work_experiences', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Applications');?></h3>
	<?php if (!empty($applicant['Application'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Application Id'); ?></th>
		<th><?php echo __('Applicant Id'); ?></th>
		<th><?php echo __('Job Post Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($applicant['Application'] as $application): ?>
		<tr>
			<td><?php echo $application['application_id'];?></td>
			<td><?php echo $application['applicant_id'];?></td>
			<td><?php echo $application['job_post_id'];?></td>
			<td><?php echo $application['created'];?></td>
			<td><?php echo $application['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applications', 'action' => 'view', $application['application_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applications', 'action' => 'edit', $application['application_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applications', 'action' => 'delete', $application['application_id']), null, __('Are you sure you want to delete # %s?', $application['application_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
