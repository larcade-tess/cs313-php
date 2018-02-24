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
          <h4>First Name</h4>
          <input type='Name' name='fName'>
          <br>
          <h4>Last Name</h4>
          <input type='Name' name='lName'>
          <br>
          <h4>Address</h4>
          <input type='Address' name='address'>
          <br>
          <h4>City</h4>
          <input type='City' name='city'>
          <br>
          <h4>State</h4>
          <input type='State' name='state'>
          <br>
          <h4>Zip</h4>
          <input type='Zip' name='zip'>
          <br>
          <br>
          <h3>Complete Purchase</h3>
          <input type='submit'>
        </form>
        <div class='padded'>
        <a class = 'bottomlink' href='checkout.php'>Back to Check Out</a>
      </div>
      </div>
<!--      <a class = 'bottomlink' href='viewCart.php'>Back to Cart</a> -->
    </main>
    <footer>
     &copy; Tess Larcade 2018
   </footer>
 </body>
 </html>