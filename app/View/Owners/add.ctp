<div class="owners form">
<?php echo $this->Form->create('Owner'); ?>
	<fieldset>
		<legend><?php echo __('Add Owner'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Owners'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lands'), array('controller' => 'lands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Land'), array('controller' => 'lands', 'action' => 'add')); ?> </li>
	</ul>
</div>
