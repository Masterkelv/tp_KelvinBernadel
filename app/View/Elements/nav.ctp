<?php if(!Configure::read('Application.maintenance')){?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<?php echo $this->Html->link(
			Configure::read('Application.name'),
			AuthComponent::user('id') ? "/home" : "/"
			, array('class' => 'navbar-brand')) ?>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">

		<?php if(AuthComponent::user('id')){?>
			<ul class="nav navbar-nav side-nav">
				<li class="<?php echo $this->params->params['controller'] == 'pages' ? 'active' : ''?>"><a href="<?php echo $this->params->webroot?>home"><i class="fa fa-dashboard"></i> <?= __('Dashboard') ?></a></li>
				<li class="dropdown <?php echo $this->params->params['controller'] == 'users' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?= __('Users') ?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>users"><i class="fa fa-list"></i>List</a></li>
						<li><a href="<?php echo $this->params->webroot?>users/add"><i class="fa fa-plus"></i> Register new user</a></li>
					</ul>
				</li>
				<li class="dropdown <?php echo $this->params->params['controller'] == 'members' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?= __('Members') ?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>members"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot?>members/add"><i class="fa fa-plus"></i> Register new member</a></li>
					</ul>
				</li>
				<li class="dropdown <?php echo $this->params->params['controller'] == 'ressources' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> <?= __('Ressources') ?> <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>ressources"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot?>ressources/add"><i class="fa fa-plus"></i> Register new ressource</a></li>
					</ul>
				</li>
				<li class="dropdown <?php echo $this->params->params['controller'] == 'factions' ? 'active' : ''?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Factions <b
							class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $this->params->webroot?>factions"><i class="fa fa-list"></i> List</a></li>
						<li><a href="<?php echo $this->params->webroot?>factions/add"><i class="fa fa-plus"></i> Register new faction</a></li>
					</ul>
				</li>
<!--				<li><a href="tables.html"><i class="fa fa-list"></i> Activity</a></li>-->
			</ul>
		<?php } ?>



		<?php if(AuthComponent::user('id')){?>

		<ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<b
                        class="caret"></b></a>
                <?php echo $this->I18n->flagSwitcher(array(
                'class' => 'dropdown-menu',
                'id' => 'language-switcher'
                ));
                ?>
            </li>
        </ul>

		<ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo AuthComponent::user('username')?> <b
						class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $this->params->webroot?>me"><i class="fa fa-user"></i> Profile</a></li>
					<li><a href="<?php echo $this->params->webroot?>me/edit"><i class="fa fa-gear"></i> Settings</a></li>
					<li class="divider"></li>
					<li><a href="<?php echo $this->params->webroot?>logout"><i class="fa fa-power-off"></i> Log Out</a></li>
				</ul>
			</li>
		</ul>
		<?php }?> 
	</div>
	<!-- /.navbar-collapse -->
</nav>
<?php } ?>