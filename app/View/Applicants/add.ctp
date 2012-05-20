<div class="applicants form">
<?php echo $this->Form->create('Applicant');?>
	<fieldset>
		<legend><?php echo __('Add Applicant'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('place_of_birth');
		echo $this->Form->input('address_line_1');
		echo $this->Form->input('municipality_id');
		echo $this->Form->input('telephone');
		echo $this->Form->input('email');
		echo $this->Form->input('gender');
		echo $this->Form->input('weight');
		echo $this->Form->input('height');
		echo $this->Form->input('civil_status');
		echo $this->Form->input('tin');
		echo $this->Form->input('passport_number');
		echo $this->Form->input('religion');
		echo $this->Form->input('employment_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Applicants'), array('action' => 'index'));?></li>
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
