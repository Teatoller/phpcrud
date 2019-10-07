<?php

try {
  $db = new PDO(
    "mysql:
        host=localhost;
        dbname=task;
        port=8889",
    "root",
    "root"
  );
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to retrive data \n";
  echo $e->getMessage();
  exit;
}


/*try{
  $db = new PDO("sqlite:".__DIR__."/database.db");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to retrive data \n";
  echo $e->getMessage() . "\n";
  exit;
}*/
