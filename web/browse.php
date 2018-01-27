<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Slabo+27px" rel="stylesheet">
 <title>Tess Larcade CS313 Shopping</title>
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
  <a href='viewCart.php'>View Cart</a>
</li>
</ul>
</nav>
</header>
<main>
  <div class='grid'>
    <?php
    $count = count($items);

    for ($i = 0; $i < $count; $i++)
    {
      $itemDiv = "<div> <img src=''> </div>";
      $itemDiv .= "<div><input type='button' value='Add' onclick='addItem(" . 124+i . ")'></div>";
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