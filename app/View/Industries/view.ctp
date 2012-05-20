<div class="industries view">
<h2><?php  echo __('Industry');?></h2>
	<dl>
		<dt><?php echo __('Industry Id'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['industry_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($industry['Industry']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Industry'), array('action' => 'edit', $industry['Industry']['industry_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Industry'), array('action' => 'delete', $industry['Industry']['industry_id']), null, __('Are you sure you want to delete # %s?', $industry['Industry']['industry_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industry'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses'), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business'), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Businesses');?></h3>
	<?php if (!empty($industry['Business'])):?>
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
		foreach ($industry['Business'] as $business): ?>
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
