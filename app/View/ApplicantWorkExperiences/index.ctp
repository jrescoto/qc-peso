<div class="applicantWorkExperiences index">
	<h2><?php echo __('Applicant Work Experiences');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('applicant_work_experience_id');?></th>
			<th><?php echo $this->Paginator->sort('applicant_id');?></th>
			<th><?php echo $this->Paginator->sort('job_tag_id');?></th>
			<th><?php echo $this->Paginator->sort('company_name');?></th>
			<th><?php echo $this->Paginator->sort('company_address');?></th>
			<th><?php echo $this->Paginator->sort('date_from');?></th>
			<th><?php echo $this->Paginator->sort('date_to');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($applicantWorkExperiences as $applicantWorkExperience): ?>
	<tr>
		<td><?php echo h($applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($applicantWorkExperience['Applicant']['last_name'], array('controller' => 'applicants', 'action' => 'view', $applicantWorkExperience['Applicant']['applicant_id'])); ?>
		</td>
		<td><?php echo h($applicantWorkExperience['ApplicantWorkExperience']['job_tag_id']); ?>&nbsp;</td>
		<td><?php echo h($applicantWorkExperience['ApplicantWorkExperience']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($applicantWorkExperience['ApplicantWorkExperience']['company_address']); ?>&nbsp;</td>
		<td><?php echo h($applicantWorkExperience['ApplicantWorkExperience']['date_from']); ?>&nbsp;</td>
		<td><?php echo h($applicantWorkExperience['ApplicantWorkExperience']['date_to']); ?>&nbsp;</td>
		<td><?php echo h($applicantWorkExperience['ApplicantWorkExperience']['created']); ?>&nbsp;</td>
		<td><?php echo h($applicantWorkExperience['ApplicantWorkExperience']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id']), null, __('Are you sure you want to delete # %s?', $applicantWorkExperience['ApplicantWorkExperience']['applicant_work_experience_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Applicant Work Experience'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('controller' => 'applicants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add')); ?> </li>
	</ul>
</div>
