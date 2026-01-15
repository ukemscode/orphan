<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/orphan/CSS/thankyou.css">
</head>

<body>
    <div>
        <?php
        if($_GET['name']==null) header('location: /orphan/pages/donations.php');
        echo '<h1>Thanks For Your Support ' . $_GET['name'] . '</h1>';
        echo '<h4>' . $_GET['email'] . '</h4>';


        ?>
        <a href="/orphan/index.php">Home</a>
    </div>

</body>

</html>