<?php
require_once 'config.php';
if (isset($_POST['submit'])) {
    $countryName = $_POST['search'];
    $query = 'Select * From countries Where country_name = :country_name';
    $stmt = $conn->prepare($query);
    $stmt->execute(['country_name'=>$countryName]);
    $event = $stmt->fetch();
} else {
    header('location:.');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <div class="caard shadow text-center">
                    <div class="card-heder">
                        <h1><?=$event['country_name']?></h1>
                    </div>
                    <div class="card-body">
                        <h4><b>Country Code:</b> <?=$event['country_code']?></h4>
                        <h4><b>City:</b> <?=$event['city']?></h4>
                        <h4><b>Country ID:</b> <?=$event['id']?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>