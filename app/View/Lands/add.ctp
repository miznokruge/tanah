<div class="lands form">
<?php echo $this->Form->create('Land'); ?>
	<fieldset>
		<legend><?php echo __('Add Land'); ?></legend>
	<?php
		echo $this->Form->input('identification_no');
		echo $this->Form->input('location');
		echo $this->Form->input('description');
		echo $this->Form->input('owner_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lands'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
