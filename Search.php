<?php
require("ConnexionBDD.php");
$search = $_POST['search'];

$search = trim($search);
$search = htmlspecialchars($search);

$stmt = $dbh->prepare("SELECT * FROM patient WHERE nom like ?");
if ($stmt->execute(array($search."%"))) {
    if ($result = $stmt->fetch())
    {
        foreach ($result as $key => $value) {
           echo $value."\n";
        }
    }
}
echo "test";