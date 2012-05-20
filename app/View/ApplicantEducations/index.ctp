<div class="applicantEducations index">
	<h2><?php echo __('Applicant Educations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('applicant_education_id');?></th>
			<th><?php echo $this->Paginator->sort('applicant_id');?></th>
			<th><?php echo $this->Paginator->sort('level');?></th>
			<th><?php echo $this->Paginator->sort('course');?></th>
			<th><?php echo $this->Paginator->sort('major');?></th>
			<th><?php echo $this->Paginator->sort('school');?></th>
			<th><?php echo $this->Paginator->sort('year_from');?></th>
			<th><?php echo $this->Paginator->sort('year_to');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($applicantEducations as $applicantEducation): ?>
	<tr>
		<td><?php echo h($applicantEducation['ApplicantEducation']['applicant_education_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($applicantEducation['Applicant']['last_name'], array('controller' => 'applicants', 'action' => 'view', $applicantEducation['Applicant']['applicant_id'])); ?>
		</td>
		<td><?php echo h($applicantEducation['ApplicantEducation']['level']); ?>&nbsp;</td>
		<td><?php echo h($applicantEducation['ApplicantEducation']['course']); ?>&nbsp;</td>
		<td><?php echo h($applicantEducation['ApplicantEducation']['major']); ?>&nbsp;</td>
		<td><?php echo h($applicantEducation['ApplicantEducation']['school']); ?>&nbsp;</td>
		<td><?php echo h($applicantEducation['ApplicantEducation']['year_from']); ?>&nbsp;</td>
		<td><?php echo h($applicantEducation['ApplicantEducation']['year_to']); ?>&nbsp;</td>
		<td><?php echo h($applicantEducation['ApplicantEducation']['created']); ?>&nbsp;</td>
		<td><?php echo h($applicantEducation['ApplicantEducation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $applicantEducation['ApplicantEducation']['applicant_education_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $applicantEducation['ApplicantEducation']['applicant_education_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $applicantEducation['ApplicantEducation']['applicant_education_id']), null, __('Are you sure you want to delete # %s?', $applicantEducation['ApplicantEducation']['applicant_education_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Applicant Education'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('controller' => 'applicants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add')); ?> </li>
	</ul>
</div>
