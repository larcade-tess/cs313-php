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
          <input type='fName'>
          <input type='lName'>
          <input type='address'>
          <input type='city'>
          <input type='state'>
          <input type='zip'>
          <input type='submit'>
        </form>
      </div>
      <a class = 'bottomlink' href='viewCart.php'>Back to Cart</a>
      <a class = 'bottomlink' href='finish.php'>Complete Purchase</a>
    </main>
    <footer>
     &copy; Tess Larcade 2018
   </footer>
 </body>
 </html>