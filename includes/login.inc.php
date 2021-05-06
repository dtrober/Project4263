<?php
include_once 'dbh.inc.php';

$adminUser = $_POST['adminUser']
$adminPass = $_POST['adminPass']

if(isset($_POST["submit"]))
{
  $sql = mysqli_query($conn, "SELECT count(*) as total from Login where adminUser = '".$adminUser."' and adminPass = '".$adminPass."'") or die (mysqli_error($conn));

  $rw = mysqli_fetch_array($sql);

  if($rw['total'] > 0){
    echo "<script>alert('username and password are correct')</script>"
  }
  else{
    echo "<script>alert('username and password are NOT correct')</script>"
  }
}
