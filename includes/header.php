<!-- nav.php -->
<?php if($_SESSION['login'])
/**
 * Navegación para usuarios logueados
 */
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">Mi Perfil</a></li>
				<li class="prnt"><a href="change-password.php">Cambiar la contraseña</a></li>
			<li class="prnt"><a href="tour-history.php">Mi historial de viajes</a></li>
			<li class="prnt"><a href="issuetickets.php">Emitir boletos</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Bienvenido :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Salir</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Inicio administrador</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Número de peaje : +505 0000 - 0000</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Registrarse</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Iniciar</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">TF <span>NICA-VISTA</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">NAVEGUE &amp; SEGURO </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Navegación de palanca</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="page.php?type=aboutus">Nosotros</a></li>
								<li><a href="package-list.php">Paquetes turísticos</a></li>
								<li><a href="page.php?type=privacy">Política de privacidad</a></li>
								<li><a href="page.php?type=terms">Terminos de uso</a></li>
								<li><a href="page.php?type=contact">Contactanos</a></li>
								<?php if($_SESSION['login'])
{
	?>
								<li>Necesitas ayuda?<a href="#" data-toggle="modal" data-target="#myModal3"> / Escribenos </a>  </li>
								<?php } else { ?>
								<li><a href="enquiry.php"> Consulta </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>