<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="CSS/startup.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/card.css">
    <link rel="stylesheet" href="CSS/footer.css">

</head>
<body>
    <?php 
    include 'include/header.php' ;
    ?>
     <section class="hero">
      <h2>Bringing Hope to Children's Lives</h2>
      <h3>
        Every child deserves love, care, and a chance at a bright future. Join
        us in making a difference in their lives.
      </h3>
      <div class="cta">
        <a href="/orphan/pages/donations.php" class="btn">Donate now</a>
        <a href="/orphan/pages/children.php" class="btn">Meet Our Children</a>
      </div>
    </section>
    <section class="service">
      <div>
        <div><i class="bi bi-people"></i></div>
        <h5>50+</h5>
        <h6>Children Cared For</h6>
      </div>
      <div>
        <div><i class="bi bi-emoji-smile"></i></div>
        <h5>100%</h5>
        <h6>Happy Smiles</h6>
      </div>
      <div>
        <div><i class="bi bi-award"></i></div>
        <h5>15</h5>
        <h6>Years Of service</h6>
      </div>
      <div>
        <div><i class="bi bi-heart"></i></div>
        <h5>1000+</h5>
        <h6>Lvies Impacted</h6>
      </div>
    </section>
    <section class="abt">
      <div>
        <h2>Our Mission</h2>
        <h3>
          At Hope Haven, we are dedicated to providing a safe, loving, and
          nurturing environment for children who have lost their parents or been
          abandoned. We believe every child deserves the opportunity to grow,
          learn, and thrive.
        </h3>
        <h3>
          Through education, healthcare, emotional support, and community
          engagement, we prepare our children for a successful and independent
          future.
        </h3>
        <a href="/orphan/pages/About.php" class="x">Learn More About Us</a>
      </div>
      <img src="/orphan/assets/medium-shot-smiley-african-boys.jpg" alt="" />
    </section>
    <section class="action">
      <h2>Make a Difference Today</h2>
      <h3>
        Your support can change a child's life forever. Whether through
        sponsorship, donations, or volunteering, every contribution matters.
      </h3>
      <a href="/orphan/pages/children.php" class="x">Support Our Children</a>
    </section>
    
    <?php
      include 'include/footer.php' ;
    ?>
</body>
</html>