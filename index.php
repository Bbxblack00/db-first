<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $severname = "loacalhost";
      $username = "root"
      $password = "root"
      $dbname = "dbhotel"
      // da inserire il nome del database

      // Connect 
      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn && $conn->connect_error) {
        echo "Connection failed" . $conn->connect_error;
      }else{
        echo "Connessione riuscita"
      }
     ?>
  </body>
</html>
