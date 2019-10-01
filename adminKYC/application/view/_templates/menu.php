
<div class="main">
  <!-- banner -->
<div class="wthree_agile_admin_info">
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
            <h1>
              <img src="<?php echo URL ?>img/logo/Logo150_60_blanco.png" alt="logo_maaji" class="img-logo">&nbsp;
            </h1>

      <li class="dropdown">
	      <a href="#" class="dropdown-toggle user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	         	 <strong><?php echo $_SESSION['EMAIL']; ?></strong>&nbsp;
	        <span class="caret"></span>
	      </a>
        <ul class="dropdown-menu">
						<li>
              <a href="<?php echo URL; ?>home/cerrarSesion">
                <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Log Out
              </a>
            </li>
        </ul>
      </li>
			</ul>
			<!-- //nav -->
