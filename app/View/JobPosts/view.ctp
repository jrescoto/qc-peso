<div class="jobPosts view">
<h2><?php  echo __('Job Post');?></h2>
	<dl>
		<dt><?php echo __('Job Post Id'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['job_post_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobPost['JobTag']['name'], array('controller' => 'job_tags', 'action' => 'view', $jobPost['JobTag']['job_tag_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobPost['Business']['business_name'], array('controller' => 'businesses', 'action' => 'view', $jobPost['Business']['business_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preferred Height'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['preferred_height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preferred Gender'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['preferred_gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Min Age'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['min_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Age'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['max_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year Of Experience'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['year_of_experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Education Attainment'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['education_attainment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['course']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($jobPost['JobPost']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Post'), array('action' => 'edit', $jobPost['JobPost']['job_post_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Post'), array('action' => 'delete', $jobPost['JobPost']['job_post_id']), null, __('Are you sure you want to delete # %s?', $jobPost['JobPost']['job_post_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Tags'), array('controller' => 'job_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Tag'), array('controller' => 'job_tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('controller' => 'applications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('controller' => 'applications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vacancies'), array('controller' => 'vacancies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vacancy'), array('controller' => 'vacancies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Applications');?></h3>
	<?php if (!empty($jobPost['Application'])):?>
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
		foreach ($jobPost['Application'] as $application): ?>
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
<div class="related">
	<h3><?php echo __('Related Vacancies');?></h3>
	<?php if (!empty($jobPost['Vacancy'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Vacancy Id'); ?></th>
		<th><?php echo __('Job Post Id'); ?></th>
		<th><?php echo __('Priority'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jobPost['Vacancy'] as $vacancy): ?>
		<tr>
			<td><?php echo $vacancy['vacancy_id'];?></td>
			<td><?php echo $vacancy['job_post_id'];?></td>
			<td><?php echo $vacancy['priority'];?></td>
			<td><?php echo $vacancy['created'];?></td>
			<td><?php echo $vacancy['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vacancies', 'action' => 'view', $vacancy['vacancy_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vacancies', 'action' => 'edit', $vacancy['vacancy_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vacancies', 'action' => 'delete', $vacancy['vacancy_id']), null, __('Are you sure you want to delete # %s?', $vacancy['vacancy_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vacancy'), array('controller' => 'vacancies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
