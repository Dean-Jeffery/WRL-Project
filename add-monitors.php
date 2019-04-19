<?php
include_once('inc/connection.inc.php');

if (isset($_POST['submit']))
{
  $assetCondition = $_POST['assetCondition'];
  $assetAvailability = $_POST['assetAvailability'];
  $assetCompany = $_POST['assetCompany'];

  $query = "INSERT INTO tblMonitors (assetCondition, assetAvailability, assetCompany) VALUES ('$assetCondition', '$assetAvailability', '$assetCompany')";

  $result = $db->query($query);
    if ($result)
      echo "Asset added to database";
      echo "<button class='button' href='table-menu.php'>Return to table selection</button>";
      echo "<button class='button' href='tblMonitors.php'>Return to tblMonitors</button>";
      $db->close();
}
?>
