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
          <li>
            <a href='cart.html'>View Cart</a>
          </li>
        </ul>
      </nav>
    </header>

<main>
  <div>item 1</div>
  <div>item 2</div>
  <div>item 3</div>
  <div>item 4</div>
  <div>item 5</div>
</main>

    <main>
      <?php
        $count = count($_SESSION['items']);
        for ($i = 0; $i < $count; $i++) {
          $itemDiv = "<div class='blah'>";
          $itemDiv .= $_SESSION['items'][$i];
          $itemDiv .= "</div>";
          echo $itemDiv;
        }
      ?>
    </main>
    <footer>
     &copy; Tess Larcade 2018
   </footer>
   <script src="cart.js"></script>
 </body>
 </html>