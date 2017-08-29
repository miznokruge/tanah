<div class="lands index">
	<h2><?php echo __('Lands'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('identification_no'); ?></th>
			<th><?php echo $this->Paginator->sort('location'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lands as $land): ?>
	<tr>
		<td><?php echo h($land['Land']['id']); ?>&nbsp;</td>
		<td><?php echo h($land['Land']['identification_no']); ?>&nbsp;</td>
		<td><?php echo h($land['Land']['location']); ?>&nbsp;</td>
		<td><?php echo h($land['Land']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($land['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $land['Owner']['id'])); ?>
		</td>
		<td><?php echo h($land['Land']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $land['Land']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $land['Land']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $land['Land']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $land['Land']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Land'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
