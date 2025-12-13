<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/orphan/CSS/startup.css">
    <link rel="stylesheet" href="/orphan/CSS/header.css">
    <link rel="stylesheet" href="/orphan/CSS/card.css">
    <link rel="stylesheet" href="/orphan/CSS/footer.css">
    <link rel="stylesheet" href="/orphan/CSS/About.css">
    <link rel="stylesheet" href="/orphan/CSS/container.css">
</head>
<body>
    <?php

    include '../include/header.php';
    include '../src/card.php';

    card("About Babys Home","Building brighter futures for children in need since 2010");

    ?>

    <section class="about">
      <div>
        <h6>Our Story</h6>
        <h6>
          Babys Home was founded in 2010 by a group of compassionate individuals
          who saw the urgent need for a safe and loving home for orphaned and
          abandoned children in our community.
        </h6>
        <h6>
          What started as a small shelter for 10 children has grown into a
          comprehensive care facility serving over 50 children, providing them
          with education, healthcare, emotional support, and most importantly, a
          family environment where they can grow and thrive.
        </h6>
        <h6>
          Today, we continue to work tirelessly to ensure that every child in
          our care receives the love, attention, and resources they need to
          build a successful future.
        </h6>
      </div>
      <img src="/orphan/assets/orphan.jpg" alt="" />
    </section>
    <section class="goals">
      <div>
        <div>
          <div><img src="/orphan/assets/vision/eye.svg" alt="" /></div>
          <h6>Our Vision</h6>
        </div>
        <h6>
          To create a world where every child has a loving home, access to
          quality education, and the opportunity to reach their full potential,
          regardless of their circumstances.
        </h6>
      </div>
      <div>
        <div>
          <div><img src="/orphan/assets/vision/heart-fill.svg" alt="" /></div>
          <h6>Our Mission</h6>
        </div>
        <h6>
          To provide orphaned and abandoned children with a safe, nurturing
          environment, comprehensive education, healthcare, and emotional
          support to help them become confident, independent, and successful
          members of society.
        </h6>
      </div>
    </section>
    <?php
      include '../components/container.php' ;
      include '../include/footer.php' ;
    ?>
    
</body>
</html>