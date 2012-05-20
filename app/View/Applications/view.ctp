<div class="applications view">
<h2><?php  echo __('Application');?></h2>
	<dl>
		<dt><?php echo __('Application Id'); ?></dt>
		<dd>
			<?php echo h($application['Application']['application_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($application['Applicant']['last_name'], array('controller' => 'applicants', 'action' => 'view', $application['Applicant']['applicant_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($application['JobPost']['name'], array('controller' => 'job_posts', 'action' => 'view', $application['JobPost']['job_post_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($application['Application']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($application['Application']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Application'), array('action' => 'edit', $application['Application']['application_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Application'), array('action' => 'delete', $application['Application']['application_id']), null, __('Are you sure you want to delete # %s?', $application['Application']['application_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applicants'), array('controller' => 'applicants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applicant'), array('controller' => 'applicants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
