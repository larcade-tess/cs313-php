  <?php
function connect() {
  $db = NULL;
  try {
    $dbUrl = getenv('DATABASE_URL');

    if (empty($dbUrl)) {
 $dbUrl = "postgres://limited:password@127.0.0.1:5432/JAPdb";
}

$dbopts = parse_url($dbUrl);

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');

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