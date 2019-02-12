<?php
require("../Controller/dbConnection.php");
require_once ('../Model/mockGen.php'); 


echo'You have initated Project SlimPickins <br>';
echo'Your Mock User Accounts are:';

$sql = "SELECT UserName, `Password` FROM Users WHERE UserName REGEXP 'UserName+';";
$result = $conn->query($sql);

echo '<ul>';
while($row = $result->fetch_assoc()){
    echo
    '
    <il> User Name: ' .$row['UserName']
    .'|  Password: ' .$row['Password']
    .'</il><br>';
}
echo '</ul>';
?>