<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Startup.css">
    <link rel="stylesheet" href="../CSS/children.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/card.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/Ocard.css">

</head>
<body>
    <?php 
    
    include '../include/header.php'; 
    include '../src/card.php';

    card("Meet Our Children","Each child has a unique story and dreams for the future. Your support can help make those dreams come true.");
    
    
    ?>
    <section class="mkc">
        <a href="" class="bx">All Children (6)</a>
        <a href="">Need Support (3)</a>
        <a href="">Sponsored (1)</a>
    </section>

    <section class="ctxc">
        <?php
            Ocard();
            Ocard();
            Ocard();
            Ocard();
            Ocard();
            Ocard();
        ?>

    </section>

   

    <?php

    include '../include/footer.php';  

    ?>



</body>
</html>