<?php  
	include("config.php");
?>

<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<title>Registration Page</title>
</head>
<body>
	<!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Newark IT</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">about</a>
        <a class="mdl-navigation__link" href="registration.php">SignUp</a>
        <a class="mdl-navigation__link" href="layout.php">Logout</a>
        <a class="mdl-navigation__link" href="">settings</a>
        
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Newark IT</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">about</a>
      <a class="mdl-navigation__link" href="registrtion.php">SignUp</a>
      <a class="mdl-navigation__link" href="layout.php">Logout</a>
      <a class="mdl-navigation__link" href="">settings</a>

    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
    <!-- Your content goes here -->
		<center>
		<h1>
			Welcome Manager!!!
		</h1>
	</center>
	<center>
	
	<form method= "post" action="statuspost.php">
			CID: <input type="number" name="CID" ><br>
			
			
			
			
			
			
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  					Submit
			</button>
		</form>
<p>
<form action="first.php">
<input type="submit" value="back">
</form>

</p>

		
	</center>	
    </div>
  </main>
</div>

</body>
</html>