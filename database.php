<?php
// connect to our mysql database server

function getDatabaseConnection(){
  $connParts = parse_url($url);
  $connUrl = getenv('JAWSDB_MARIA_URL');
  $hasConnUrl = !empty($connUrl);
  
  $connParts = null;
  if ($hasConnUrl) {
      $connParts = parse_url($connUrl);
  }
  
  $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
  //mysql://jqioxvwp0rgtk5vl:gvi4dso9c4vbhr1d@jlg7sfncbhyvga14.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:/aniw01yhmtr1vt29
  $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'mattsrecords';//
  $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
  $password = $hasConnUrl ? $connParts['pass'] : '';
  
  return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
}
 
?>