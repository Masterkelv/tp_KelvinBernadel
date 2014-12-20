<div class="members view">
<h2><?php echo __('Member'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['country_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Player Age'); ?></dt>
		<dd>
			<?php echo h($member['Member']['player_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Playing Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['playing_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Name'); ?></dt>
		<dd>
			<?php echo h($member['Member']['email_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Registered'); ?></dt>
		<dd>
			<?php echo h($member['Member']['date_registered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Logon'); ?></dt>
		<dd>
			<?php echo h($member['Member']['date_logon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Details'); ?></dt>
		<dd>
			<?php echo h($member['Member']['other_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($member['Member']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Factions'); ?></dt>
		<dd>
			<?php echo $this->Html->link($member['Factions']['id'], array('controller' => 'factions', 'action' => 'view', $member['Factions']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Factions'), array('controller' => 'factions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factions'), array('controller' => 'factions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Factions'); ?></h3>
	<?php if (!empty($member['Faction'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Members Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($member['Faction'] as $faction): ?>
		<tr>
			<td><?php echo $faction['id']; ?></td>
			<td><?php echo $faction['nom']; ?></td>
			<td><?php echo $faction['members_id']; ?></td>
			<td><?php echo $faction['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'factions', 'action' => 'view', $faction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'factions', 'action' => 'edit', $faction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'factions', 'action' => 'delete', $faction['id']), null, __('Are you sure you want to delete # %s?', $faction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Faction'), array('controller' => 'factions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
