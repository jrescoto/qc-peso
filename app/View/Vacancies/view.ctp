<div class="vacancies view">
<h2><?php  echo __('Vacancy');?></h2>
	<dl>
		<dt><?php echo __('Vacancy Id'); ?></dt>
		<dd>
			<?php echo h($vacancy['Vacancy']['vacancy_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($vacancy['JobPost']['name'], array('controller' => 'job_posts', 'action' => 'view', $vacancy['JobPost']['job_post_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($vacancy['Vacancy']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($vacancy['Vacancy']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($vacancy['Vacancy']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vacancy'), array('action' => 'edit', $vacancy['Vacancy']['vacancy_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vacancy'), array('action' => 'delete', $vacancy['Vacancy']['vacancy_id']), null, __('Are you sure you want to delete # %s?', $vacancy['Vacancy']['vacancy_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vacancies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vacancy'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Posts'), array('controller' => 'job_posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Post'), array('controller' => 'job_posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
