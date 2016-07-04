<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php
                    				if ($_SESSION["level"] == 2)
					{
					echo '<li><a href="../user.php">Home</a></li>	';
					}else{
					echo '<li><a href="../admin.php">Home</a></li>	';	
					echo '<li><a href="../adminuser.php">Users</a></li>	';
					echo '<li><a href="../adminmap.php">Maps</a></li>	';
					}
				echo '
					<li><a href="php/logout.php">Logout</a></li>'
                    ?>
                </ul>
            </div><!--.nav-collapse -->
        </div>
    </nav>    
<?php
if(isset($_SESSION["username"])){
	echo '<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
		  <div class="dropdown">
				<img src="../img/logo.png"></img> 
				<a class="navbar-brand" href="#" data-toggle="dropdown">'.$_SESSION["username"].' <span class="caret"></span></a>
				<ul class="dropdown-menu">';
				if ($_SESSION["level"] == 1)
					{
					echo '<li><a href="../user.php">Home</a></li>	';
					}else{
					echo '<li><a href="../admin.php">Home</a></li>	';	
					echo '<li><a href="../adminuser.php">Users</a></li>	';
					echo '<li><a href="../adminmap.php">Maps</a></li>	';
					}
				echo '
					<li><a href="php/logout.php">Logout</a></li>
				</ul>
			</div>
        </div>
		<div class="navbar-header">
		  
        </div>
        
      </div>
    </nav>';
}else{

	echo '<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
		  <div class="dropdown">
				<a class="navbar-brand" href="#" data-toggle="dropdown">Mapping Portal </a>
				
			</div>
        </div>
      </div>
    </nav>';
}
	?>