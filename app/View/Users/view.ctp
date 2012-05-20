<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Role']['title'], array('controller' => 'roles', 'action' => 'view', $user['Role']['role_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['user_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['user_id']), null, __('Are you sure you want to delete # %s?', $user['User']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('controller' => 'applicants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Applicants');?></h3>
	<?php if (!empty($user['Applicant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Applicant Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Middle Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Place Of Birth'); ?></th>
		<th><?php echo __('Address Line 1'); ?></th>
		<th><?php echo __('Municipality Id'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Civil Status'); ?></th>
		<th><?php echo __('Tin'); ?></th>
		<th><?php echo __('Passport Number'); ?></th>
		<th><?php echo __('Religion'); ?></th>
		<th><?php echo __('Employment Status'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Applicant'] as $applicant): ?>
		<tr>
			<td><?php echo $applicant['applicant_id'];?></td>
			<td><?php echo $applicant['user_id'];?></td>
			<td><?php echo $applicant['first_name'];?></td>
			<td><?php echo $applicant['middle_name'];?></td>
			<td><?php echo $applicant['last_name'];?></td>
			<td><?php echo $applicant['date_of_birth'];?></td>
			<td><?php echo $applicant['place_of_birth'];?></td>
			<td><?php echo $applicant['address_line_1'];?></td>
			<td><?php echo $applicant['municipality_id'];?></td>
			<td><?php echo $applicant['telephone'];?></td>
			<td><?php echo $applicant['email'];?></td>
			<td><?php echo $applicant['gender'];?></td>
			<td><?php echo $applicant['weight'];?></td>
			<td><?php echo $applicant['height'];?></td>
			<td><?php echo $applicant['civil_status'];?></td>
			<td><?php echo $applicant['tin'];?></td>
			<td><?php echo $applicant['passport_number'];?></td>
			<td><?php echo $applicant['religion'];?></td>
			<td><?php echo $applicant['employment_status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'applicants', 'action' => 'view', $applicant['applicant_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'applicants', 'action' => 'edit', $applicant['applicant_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'applicants', 'action' => 'delete', $applicant['applicant_id']), null, __('Are you sure you want to delete # %s?', $applicant['applicant_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Businesses');?></h3>
	<?php if (!empty($user['Business'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Business Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Business Name'); ?></th>
		<th><?php echo __('Acronym'); ?></th>
		<th><?php echo __('Tin'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Industry Id'); ?></th>
		<th><?php echo __('Address Line 1'); ?></th>
		<th><?php echo __('Municipality Id'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Contact Person Name'); ?></th>
		<th><?php echo __('Contact Person Position'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Business'] as $business): ?>
		<tr>
			<td><?php echo $business['business_id'];?></td>
			<td><?php echo $business['user_id'];?></td>
			<td><?php echo $business['business_name'];?></td>
			<td><?php echo $business['acronym'];?></td>
			<td><?php echo $business['tin'];?></td>
			<td><?php echo $business['type'];?></td>
			<td><?php echo $business['industry_id'];?></td>
			<td><?php echo $business['address_line_1'];?></td>
			<td><?php echo $business['municipality_id'];?></td>
			<td><?php echo $business['telephone'];?></td>
			<td><?php echo $business['fax'];?></td>
			<td><?php echo $business['website'];?></td>
			<td><?php echo $business['email'];?></td>
			<td><?php echo $business['contact_person_name'];?></td>
			<td><?php echo $business['contact_person_position'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'businesses', 'action' => 'view', $business['business_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'businesses', 'action' => 'edit', $business['business_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'businesses', 'action' => 'delete', $business['business_id']), null, __('Are you sure you want to delete # %s?', $business['business_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
