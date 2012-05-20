<div class="municipalities view">
<h2><?php  echo __('Municipality');?></h2>
	<dl>
		<dt><?php echo __('Municipality Id'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['municipality_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($municipality['Municipality']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipality'), array('action' => 'edit', $municipality['Municipality']['municipality_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Municipality'), array('action' => 'delete', $municipality['Municipality']['municipality_id']), null, __('Are you sure you want to delete # %s?', $municipality['Municipality']['municipality_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality'), array('action' => 'add')); ?> </li>
	</ul>
</div>
