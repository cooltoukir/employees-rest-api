<?php
class dbObj
{
  var $servername = "localhost";
  var $username = "touahm22_toukirahmed";
  var $password = "<DB Password>";
  var $dbname= "touahm22_toukirahmed";
  var $conn;
  
  function getConnstring()
  {
    $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
    /* check connection */
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    } else {
      $this->conn = $con;
    }
    return $this->conn;
  }
}
?>