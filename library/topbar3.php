   
<div class="header_top"><!--header_top-->
	<div class="container" style="background-color:#e3e3e3">
		<div class="row">
			<div class="col-sm-6">
				<div class="navbar-header" align="left">
					<a class="navbar-brand" href="#">Mapping Portal</a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="navbar-header" align="right">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="../admin.php">Home</a></li>
						<li><a href="../adminuser.php">Users</a></li>
						<li><a href="../adminmap.php">Maps</a></li>
						<li><a href="php/logout.php">Logout</a></li>
					 </ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
if(isset($_SESSION["username"])){
	echo '	  
	<div class="collapse navbar-collapse" align="right">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
		<li><a href="../admin.php">Home</a></li>
		<li><a href="../adminuser.php">Users</a></li>
		<li><a href="../adminmap.php">Maps</a></li>
		<li><a href="php/logout.php">Logout</a></li>
      </ul>
    </div><!--.nav-collapse -->
	</div>';
}else{

	echo '<div class="collapse navbar-collapse" align="right">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
		<li><a href="../admin.php">Home</a></li>
		<li><a href="../adminuser.php">Users</a></li>
		<li><a href="../adminmap.php">Maps</a></li>
		<li><a href="php/logout.php">Logout</a></li>
      </ul>
    </div><!--.nav-collapse --></div>
	';
}

	?>
	</nav>