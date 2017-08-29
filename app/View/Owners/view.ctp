<div class="owners view">
<h2><?php echo __('Owner'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Owner'), array('action' => 'edit', $owner['Owner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Owner'), array('action' => 'delete', $owner['Owner']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $owner['Owner']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lands'), array('controller' => 'lands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Land'), array('controller' => 'lands', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lands'); ?></h3>
	<?php if (!empty($owner['Land'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Identification No'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($owner['Land'] as $land): ?>
		<tr>
			<td><?php echo $land['id']; ?></td>
			<td><?php echo $land['identification_no']; ?></td>
			<td><?php echo $land['location']; ?></td>
			<td><?php echo $land['description']; ?></td>
			<td><?php echo $land['owner_id']; ?></td>
			<td><?php echo $land['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lands', 'action' => 'view', $land['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lands', 'action' => 'edit', $land['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lands', 'action' => 'delete', $land['id']), array('confirm' => __('Are you sure you want to delete # %s?', $land['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Land'), array('controller' => 'lands', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
