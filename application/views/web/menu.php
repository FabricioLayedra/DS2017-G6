<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo site_url("web/index"); ?>">Inicio <span class="sr-only">(current)</span></a></li>
				<li><a href="<?php echo site_url("web/restaurantes"); ?>">Restaurantes</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
					if($this->session->Group){
						$user = $this->session->userdata('Group');
						if($user == 3){ ?>
							<li><a href = "<?php echo site_url("web/user"); ?>"><?php echo $this->session->Name; ?></a></li>
						<?php }else{ if ($user == 2){ ?>
							<li><a href = "<?php echo site_url("web/assistant"); ?>"><?php echo $this->session->Name; ?></a></li>
						<?php }} ?>
						<li><a href="<?php echo site_url("web/logout"); ?>">Cerrar Sesión</a></li>
					<?php }else{?>
						<li><a href="<?php echo site_url("web/login"); ?>">Inicia Sesión</a></li>
						<li><a href="<?php echo site_url("web/signup"); ?>">Crear Cuenta</a></li>
					<?php }
				?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
