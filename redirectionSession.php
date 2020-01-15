<?php
if (isset($_GET['email'])) {
  $email = $_GET['email'];
}
else {
  $email = "";
}
if ($email != "") {

session_start();
$stmt = $dbh->prepare("SELECT * FROM utilisateur WHERE email = ?");
if ($stmt->execute(array($email))) {
  while ($row = $stmt->fetch()) {
    print_r($row);
  }
}
$_SESSION['email'] = $email;
$_SESSION['nom'] = "tom";
}
?>
