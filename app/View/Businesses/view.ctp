<div class="businesses view">
<h2><?php  echo __('Business');?></h2>
	<dl>
		<dt><?php echo __('Business Id'); ?></dt>
		<dd>
			<?php echo h($business['Business']['business_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($business['User']['username'], array('controller' => 'users', 'action' => 'view', $business['User']['user_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business Name'); ?></dt>
		<dd>
			<?php echo h($business['Business']['business_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acronym'); ?></dt>
		<dd>
			<?php echo h($business['Business']['acronym']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tin'); ?></dt>
		<dd>
			<?php echo h($business['Business']['tin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($business['Business']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($business['Industry']['name'], array('controller' => 'industries', 'action' => 'view', $business['Industry']['industry_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line 1'); ?></dt>
		<dd>
			<?php echo h($business['Business']['address_line_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Municipality Id'); ?></dt>
		<dd>
			<?php echo h($business['Business']['municipality_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($business['Business']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($business['Business']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($business['Business']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($business['Business']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Person Name'); ?></dt>
		<dd>
			<?php echo h($business['Business']['contact_person_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Person Position'); ?></dt>
		<dd>
			<?php echo h($business['Business']['contact_person_position']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business'), array('action' => 'edit', $business['Business']['business_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business'), array('action' => 'delete', $business['Business']['business_id']), null, __('Are you sure you want to delete # %s?', $business['Business']['business_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Branches'), array('controller' => 'business_branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Branch'), array('controller' => 'business_branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Business Branches');?></h3>
	<?php if (!empty($business['BusinessBranch'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Business Branch Id'); ?></th>
		<th><?php echo __('Business Id'); ?></th>
		<th><?php echo __('Address Line 1'); ?></th>
		<th><?php echo __('Municipality Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($business['BusinessBranch'] as $businessBranch): ?>
		<tr>
			<td><?php echo $businessBranch['business_branch_id'];?></td>
			<td><?php echo $businessBranch['business_id'];?></td>
			<td><?php echo $businessBranch['address_line_1'];?></td>
			<td><?php echo $businessBranch['municipality_id'];?></td>
			<td><?php echo $businessBranch['created'];?></td>
			<td><?php echo $businessBranch['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'business_branches', 'action' => 'view', $businessBranch['business_branch_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'business_branches', 'action' => 'edit', $businessBranch['business_branch_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'business_branches', 'action' => 'delete', $businessBranch['business_branch_id']), null, __('Are you sure you want to delete # %s?', $businessBranch['business_branch_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Business Branch'), array('controller' => 'business_branches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Job Posts');?></h3>
	<?php if (!empty($business['JobPost'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Job Post Id'); ?></th>
		<th><?php echo __('Job Tag Id'); ?></th>
		<th><?php echo __('Business Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Preferred Height'); ?></th>
		<th><?php echo __('Preferred Gender'); ?></th>
		<th><?php echo __('Min Age'); ?></th>
		<th><?php echo __('Max Age'); ?></th>
		<th><?php echo __('Year Of Experience'); ?></th>
		<th><?php echo __('Education Attainment'); ?></th>
		<th><?php echo __('Course'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($business['JobPost'] as $jobPost): ?>
		<tr>
			<td><?php echo $jobPost['job_post_id'];?></td>
			<td><?php echo $jobPost['job_tag_id'];?></td>
			<td><?php echo $jobPost['business_id'];?></td>
			<td><?php echo $jobPost['name'];?></td>
			<td><?php echo $jobPost['type'];?></td>
			<td><?php echo $jobPost['description'];?></td>
			<td><?php echo $jobPost['location'];?></td>
			<td><?php echo $jobPost['preferred_height'];?></td>
			<td><?php echo $jobPost['preferred_gender'];?></td>
			<td><?php echo $jobPost['min_age'];?></td>
			<td><?php echo $jobPost['max_age'];?></td>
			<td><?php echo $jobPost['year_of_experience'];?></td>
			<td><?php echo $jobPost['education_attainment'];?></td>
			<td><?php echo $jobPost['course'];?></td>
			<td><?php echo $jobPost['created'];?></td>
			<td><?php echo $jobPost['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'job_posts', 'action' => 'view', $jobPost['job_post_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'job_posts', 'action' => 'edit', $jobPost['job_post_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'job_posts', 'action' => 'delete', $jobPost['job_post_id']), null, __('Are you sure you want to delete # %s?', $jobPost['job_post_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
