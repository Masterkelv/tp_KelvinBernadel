<div class="members form">
<?php echo $this->Form->create('Member'); ?>
	<fieldset>
		<legend><?php echo __('Add Member'); ?></legend>
	<?php
		echo $this->Form->input('country_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('player_age');
		echo $this->Form->input('playing_name');
		echo $this->Form->input('category_id');
        echo $this->Form->input('subcategory_id');
		echo $this->Form->input('email_name');
		echo $this->Form->input('date_registered');
		echo $this->Form->input('date_logon');
		echo $this->Form->input('other_details');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Factions'), array('controller' => 'factions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factions'), array('controller' => 'factions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php
$this->Js->get('#MemberCategoryId')->event('click', 
$this->Js->request(array(
'controller'=>'subcategories',
'action'=>'getByCategory'
), array(
'update'=>'#MemberCategoryId',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);
?>