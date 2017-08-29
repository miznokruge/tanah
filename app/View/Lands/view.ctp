<div class="lands view">
<h2><?php echo __('Land'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($land['Land']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identification No'); ?></dt>
		<dd>
			<?php echo h($land['Land']['identification_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($land['Land']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($land['Land']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($land['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $land['Owner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($land['Land']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Land'), array('action' => 'edit', $land['Land']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Land'), array('action' => 'delete', $land['Land']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $land['Land']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Lands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Land'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
