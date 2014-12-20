<div class="factions view">
<h2><?php echo __('Faction'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($faction['Faction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($faction['Faction']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Members'); ?></dt>
		<dd>
			<?php echo $this->Html->link($faction['Members']['id'], array('controller' => 'members', 'action' => 'view', $faction['Members']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($faction['Faction']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faction'), array('action' => 'edit', $faction['Faction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Faction'), array('action' => 'delete', $faction['Faction']['id']), null, __('Are you sure you want to delete # %s?', $faction['Faction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Factions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Members'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Members'); ?></h3>
	<?php if (!empty($faction['Member'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-bordered">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Name'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Player Age'); ?></th>
		<th><?php echo __('Playing Name'); ?></th>
		<th><?php echo __('Email Name'); ?></th>
		<th><?php echo __('Date Registered'); ?></th>
		<th><?php echo __('Date Logon'); ?></th>
		<th><?php echo __('Other Details'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th><?php echo __('Factions Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($faction['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['country_name']; ?></td>
			<td><?php echo $member['first_name']; ?></td>
			<td><?php echo $member['last_name']; ?></td>
			<td><?php echo $member['player_age']; ?></td>
			<td><?php echo $member['playing_name']; ?></td>
			<td><?php echo $member['email_name']; ?></td>
			<td><?php echo $member['date_registered']; ?></td>
			<td><?php echo $member['date_logon']; ?></td>
			<td><?php echo $member['other_details']; ?></td>
			<td><?php echo $member['visible']; ?></td>
			<td><?php echo $member['factions_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), null, __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
