<?php
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=yslasm";
   $credentials = "user=yslasm password=mikematt44";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>

<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello</h1>
</body>
</html>