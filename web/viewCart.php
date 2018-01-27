  <?php 
  session_start();
  ?>
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
      <div class='list'>
        <?php
        $items = $_SESSION['items'];
        $count = count($items);
        for ($i = 0; $i < $count; $i++) {
          $itemDiv = "<div class = 'list'>";
          $itemDiv .= "  <div> Item: </div>";
          $itemDiv .= "  <div>" . $items[$i] . "</div>";
          $itemDiv .= "  <div><input type='button' value='Delete' onclick='removeItem(" . $items[$i] . ")'></div>";
          $itemDiv .= "</div>";
          echo $itemDiv;
        }
        ?>
      </div>
      <a class = 'bottomlink' href='browse.php'>Back to Browse</a>
      <a class = 'bottomlink' href='checkout.php'>Check Out</a>
    </main>
    <footer>
     &copy; Tess Larcade 2018
   </footer>
   <script src="cart.js"></script>
 </body>
 </html>