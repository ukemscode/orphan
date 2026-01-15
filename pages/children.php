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
    include '../src/Auth.php';

    include '../include/header.php';
    include '../src/card.php';
    include '../config/database_config.php';

    $opt = $_GET['filter'] ?? 'all';

    if ($opt == 'all') {

        $sql = "SELECT * FROM child";
    } elseif ($opt == 'support')
        $sql = "SELECT * FROM child where status !='Fully Sponsored'";
    elseif ($opt == 'sponsored')
        $sql = "SELECT * FROM child where status ='Fully Sponsored'";



    $children = $conn->query($sql);

    card("Meet Our Children", "Each child has a unique story and dreams for the future. Your support can help make those dreams come true.");


    ?>
    <section class="mkc">
        <a href="/orphan/pages/children.php#ctxc?filter=all" class="bx" id="all">All Children </a>
        <a href="/orphan/pages/children.php#ctxc?filter=support" id="support">Need Support </a>
        <a href="/orphan/pages/children.php#ctxc?filter=sponsored" id="sponsored">Sponsored</a>
    </section>

    <section class="ctxc" id="ctxc">
    <?php
        while ($child = $children->fetch_assoc()) {

            Ocard($child['name'], $child['age'], $child['gender'], $photo = $child['filename'], "", $status = $child['status']);
        }
        // Ocard();
        // Ocard();
        // Ocard();
        // Ocard();
        // Ocard();
        // Ocard();
    ?>

    </section>



    <?php

    include '../include/footer.php';

    ?>
<script>
    let all=document.getElementById('all');
    let need=document.getElementById('support');
    let sponsored=document.getElementById('sponsored');
    
    all.onclick=()=>{
        all.style.backgroundColor="#eadb0a";
        need.style.backgroundColor="#c0c9d6";
        sponsored.style.backgroundColor="#c0c9d6";

    }

     need.onclick=()=>{
        all.style.backgroundColor="#c0c9d6";
        need.style.backgroundColor="#eadb0a";
        sponsored.style.backgroundColor="#c0c9d6";

    }

     sponsored.onclick=()=>{
        all.style.backgroundColor="#c0c9d6";
        need.style.backgroundColor="#c0c9d6";
        sponsored.style.backgroundColor="#eadb0a";

    }
</script>


</body>

</html>