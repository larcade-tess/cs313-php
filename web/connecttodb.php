  <?php
function connect() {
  $db = NULL;
  try {
    $dbUrl = getenv('DATABASE_URL');

    if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
 $dbUrl = "postgres://postgres:password@127.0.0.1:5432/Scriptures";
}

$dbopts = parse_url($dbUrl);
    // echo "<p>$dbUrl</p>\n\n";

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');

    // echo "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName;</p>\n\n";
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  }
  catch (PDOException $ex) {
    echo "Error: $ex</p>";
    die();
  }
  return $db;
}
connect();
  ?>