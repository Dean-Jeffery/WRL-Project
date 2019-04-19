<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chairs | Premium Business Space</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- Monitors asset table -->

      <?php

      echo "<div class='table-wrap'>";
      echo "<h2>Monitors</h2>";
      echo "<button class='button' href='add-assets.php'>Add Assets</button>";
      echo "<button class='button' href='edit-assets.php'>Edit existing assets</button>";

      include_once('inc/connection.inc.php');

      $db_host = 'localhost';
      $db_user = 'djeffery';
      $db_pwd = '2021509';
      $db = 'djeffery_assettracker';
      $table = 'tblMonitors';

  if (!mysql_connect($db_host, $db_user, $db_pwd))
      die("Can't connect to database");

  if (!mysql_select_db($db))
      die("Can't select database");



      // sending query
      $result = mysql_query("SELECT * FROM {$table}");
      if (!$result) {
          die("Query to show fields from table failed");
      }

      $fields_num = mysql_num_fields($result);

      echo "<h1>Table: {$table}</h1>";
      echo "<table border='1'><tr>";
      // printing table headers
      for($i=0; $i<$fields_num; $i++)
      {
          $field = mysql_fetch_field($result);
          echo "<td>{$field->name}</td>";
      }
      echo "</tr>\n";
      // printing table rows
      while($row = mysql_fetch_row($result))
      {
          echo "<tr>";

          // $row is array... foreach( .. ) puts every element
          // of $row to $cell variable
          foreach($row as $cell)
              echo "<td>$cell</td>";

          echo "</tr>\n";
      }
      mysql_free_result($result);

      echo "</div>";

      ?>
  </body>
</html>
