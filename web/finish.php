  <!DOCTYPE html>
  <html>
  <head>
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Slabo+27px" rel="stylesheet">
  	<title>Check Out</title>
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
      <h2>Order Confirmation</h2>
      <div>
        <?php 

        // echo $_POST['fName'];
        // echo $_POST['lName']; 
        // echo $_POST['address'];
        // echo $_POST['city'];
        // echo $_POST['state']; 
        // echo $_POST['zip']; 
       $info = $_POST['fName'];
       $info .= '<br>' . $_POST['lName']; 
       $info .= '<br>' . $_POST['address'];
       $info .= '<br>' . $_POST['city'];
       $info .= '<br>' . $_POST['state']; 
       $info .= '<br>' . $_POST['zip']; 
       $info_clean = htmlspecialchars($info);
       echo $info_clean;
        ?> 
    </div>
  </main>
  <footer>
   &copy; Tess Larcade 2018
 </footer>
</body>
</html>