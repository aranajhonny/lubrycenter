<div class="row border-bottom">
				<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
						<form role="search" class="navbar-form-custom" action="search_results.html">
							<div class="form-group">
								<!--     							<input type="number" placeholder="Search for something..." class="form-control" name="top-search" id="top-search"> -->
							</div>
						</form>
					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li>
							<!-- <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span> -->
						</li>
						<li class="dropdown">
							<a  href="<?= base_url();?>index.php/inventario/verpedido">
								<span class="label label-primary"><?php echo $items; ?></span><span> Mi Pedido</span>
							</a>
							<a  href="<?= base_url();?>index.php/inventario/verpedido">
								<span> <?php echo $SESSION['username']; ?></span>
							</a>
							<!-- <ul class="dropdown-menu dropdown-alerts">
								<li>
									<a href="mailbox.html">
										<div>
											<i class="fa fa-envelope fa-fw"></i> You have 16 messages
											<span class="pull-right text-muted small">4 minutes ago</span>
										</div>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="profile.html">
										<div>
											<i class="fa fa-twitter fa-fw"></i> 3 New Followers
											<span class="pull-right text-muted small">12 minutes ago</span>
										</div>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="grid_options.html">
										<div>
											<i class="fa fa-upload fa-fw"></i> Server Rebooted
											<span class="pull-right text-muted small">4 minutes ago</span>
										</div>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<div class="text-center link-block">
										<a href="notifications.html">
											<strong>See All Alerts</strong>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</li>
							</ul> -->
						</li>


						<li>
							<a href="<?= base_url();?>index.php/logout">
								<i class="fa fa-sign-out"></i> Cerrar sesión
							</a>
						</li>
					</ul>
				</nav>
			</div>