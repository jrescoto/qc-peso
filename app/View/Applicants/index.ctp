<div class="applicants index">
	<h2><?php echo __('Applicants');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('applicant_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('middle_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth');?></th>
			<th><?php echo $this->Paginator->sort('place_of_birth');?></th>
			<th><?php echo $this->Paginator->sort('address_line_1');?></th>
			<th><?php echo $this->Paginator->sort('municipality_id');?></th>
			<th><?php echo $this->Paginator->sort('telephone');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('weight');?></th>
			<th><?php echo $this->Paginator->sort('height');?></th>
			<th><?php echo $this->Paginator->sort('civil_status');?></th>
			<th><?php echo $this->Paginator->sort('tin');?></th>
			<th><?php echo $this->Paginator->sort('passport_number');?></th>
			<th><?php echo $this->Paginator->sort('religion');?></th>
			<th><?php echo $this->Paginator->sort('employment_status');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($applicants as $applicant): ?>
	<tr>
		<td><?php echo h($applicant['Applicant']['applicant_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($applicant['User']['username'], array('controller' => 'users', 'action' => 'view', $applicant['User']['user_id'])); ?>
		</td>
		<td><?php echo h($applicant['Applicant']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['middle_name']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['place_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['address_line_1']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['municipality_id']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['email']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['gender']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['weight']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['height']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['civil_status']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['tin']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['passport_number']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['religion']); ?>&nbsp;</td>
		<td><?php echo h($applicant['Applicant']['employment_status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $applicant['Applicant']['applicant_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $applicant['Applicant']['applicant_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $applicant['Applicant']['applicant_id']), null, __('Are you sure you want to delete # %s?', $applicant['Applicant']['applicant_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Applicant'), array('action' => 'add')); ?></li>
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
