<?php
    $dbUserName = "DNS";
    $dbPassword = "DNS1";
    $dbServer = "localhost";
    $dbName = "dns_adventures";

    $conncetion = new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);

    print_r($conncetion);

    if($conncetion->connect_errno)
    {
        exit("Database Connection Failed. Reason: ".$conncetion->connect_error);
    }

    $query = "SELECT * FROM adventure";

    $resultObj = $conncetion->query($query);

    if($resultObj->num_rows > 0)
    {
        while($singleRow = $resultObj->fetch_assoc())
        {
            print_r($singleRow);
        }
    }

    $conncetion->close(); 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>