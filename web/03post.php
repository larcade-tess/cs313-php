  <!DOCTYPE html>
  <html>
  <head>
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Slabo+27px" rel="stylesheet">
  	<title>Tess Larcade CS313</title>
  </head>
  <body>
  	<header>
  		<div class='headcont'>
  			<div class='header'>
  				<h1>Tess Larcade</h1>
  			</div>
  		</div>
  		<nav>
  			<ul>
  				<li>
  					<a href='index.html'>Home</a>
  				</li>
  				<li>
  					<a href='links.html'>Links</a>
  				</li>
  			</ul>
  		</nav>
  	</header>
  	<main>
  		<div>
  			<p> Hi <?php echo $_POST['name']; ?>, 
  				<br>
  				Your email address is: <a href="mailto:<?=$email ?>"><?php echo $_POST'email'?></a></p>
  				<br>
  				Your major is: <?php echo $_POST['major']; ?>

  				<br>
  				You've visited: 
  				<? php foreach ($places as $place)
  				{
  					echo &_POST['place'];
  				}
  				?>		

  				<br>
  				Comments: <?php echo $_POST['comments']; ?>
  			</p>
  		</div>
  	</main>
  	<footer>
  		&copy; Tess Larcade 2018
  	</footer>
  </body>
  </html>