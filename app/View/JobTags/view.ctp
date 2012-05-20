<div class="jobTags view">
<h2><?php  echo __('Job Tag');?></h2>
	<dl>
		<dt><?php echo __('Job Tag Id'); ?></dt>
		<dd>
			<?php echo h($jobTag['JobTag']['job_tag_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($jobTag['JobTag']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($jobTag['JobTag']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($jobTag['JobTag']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($jobTag['JobTag']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($jobTag['JobTag']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Tag'), array('action' => 'edit', $jobTag['JobTag']['job_tag_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Tag'), array('action' => 'delete', $jobTag['JobTag']['job_tag_id']), null, __('Are you sure you want to delete # %s?', $jobTag['JobTag']['job_tag_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hot Jobs'), array('controller' => 'hot_jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hot Job'), array('controller' => 'hot_jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Hot Jobs');?></h3>
	<?php if (!empty($jobTag['HotJob'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Hot Job Id'); ?></th>
		<th><?php echo __('Job Tag Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jobTag['HotJob'] as $hotJob): ?>
		<tr>
			<td><?php echo $hotJob['hot_job_id'];?></td>
			<td><?php echo $hotJob['job_tag_id'];?></td>
			<td><?php echo $hotJob['created'];?></td>
			<td><?php echo $hotJob['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hot_jobs', 'action' => 'view', $hotJob['hot_job_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hot_jobs', 'action' => 'edit', $hotJob['hot_job_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hot_jobs', 'action' => 'delete', $hotJob['hot_job_id']), null, __('Are you sure you want to delete # %s?', $hotJob['hot_job_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hot Job'), array('controller' => 'hot_jobs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Job Posts');?></h3>
	<?php if (!empty($jobTag['JobPost'])):?>
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
		foreach ($jobTag['JobPost'] as $jobPost): ?>
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
