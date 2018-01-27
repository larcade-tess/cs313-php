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
      <div>
        <form action='finish.php' method='post'>
          <h3>First Name</h3>
          <input type='fName'>
          <br>
          <h3>Last Name</h3>
          <input type='lName'>
          <br>
          <h3>Address</h3>
          <input type='address'>
          <br>
          <h3>City</h3>
          <input type='city'>
          <br>
          <h3>State</h3>
          <input type='state'>
          <br>
          <h3>Zip</h3>
          <input type='zip'>
          <br>
          <h3>Complete Purchase</h3>
          <input type='submit'>
        </form>
      </div>
      <a class = 'bottomlink' href='viewCart.php'>Back to Cart</a>
    </main>
    <footer>
     &copy; Tess Larcade 2018
   </footer>
 </body>
 </html>