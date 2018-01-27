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
      <div style="display: flex; flex-direction: column;">
        <?php
        $items = $_SESSION['items']; // items = [1, 6, 9]
        $count = count($items);
        echo 'count ' . $count;
        for ($i = 0; $i < $count; $i++) {
          $itemDiv = "<div style='display: flex; border: solid 1px black; border-radius: 6px; align-items: center;'>";
          $itemDiv .= "  <div style='margin: 0 10px 0 0;'>Item:</div>";
          $itemDiv .= "  <div>" . $items[$i] . "</div>";
          $itemDiv .= "  <div><input type='button' value='Delete' onclick='removeItem(" . $items[$i] . ")'></div>";
          $itemDiv .= "</div>";
          echo $itemDiv;
        }
        ?>
      </div>
    </main>
    <footer>
     &copy; Tess Larcade 2018
   </footer>
   <script src="cart.js"></script>
 </body>
 </html>