<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/orphan/CSS/startup.css">
  <link rel="stylesheet" href="/orphan/CSS/header.css">
  <link rel="stylesheet" href="/orphan/CSS/footer.css">
  <link rel="stylesheet" href="/orphan/CSS/card.css">
  <link rel="stylesheet" href="/orphan/CSS/donations.css">
</head>

<body>
  <?php
  include '../src/Auth.php';

  include '../include/header.php';
  include '../src/card.php';

  $name=$_GET['name'] ?? null;

  

  card("Make a Donation", "Your generosity can change a child's life. Every contribution makes a real difference.");
  ?>
  <section>


    <main>
   

      <!-- Donation Form Section -->
      <section class="donation-section container">
        <div class="donation-grid">
          <!-- Left: Donation Form -->
          <article class="donation-form">
            <?php
             if($name != null) echo '<h2>Sponsor '.$name.'</h2>';
             else echo '  <h2>Donation Details</h2>';

             ?>
          
            <form>
              <div class="form-group">
                <label>Donation Amount *</label>
                <div class="preset-buttons">
                  <button type="button">$25</button>
                  <button type="button">$50</button>
                  <button type="button">$100</button>
                  <button type="button">$250</button>
                </div>
                <div class="input-wrapper">
                  <span>$</span>
                  <input type="number" placeholder="Custom amount" min="1" step="0.01" required>
                </div>
              </div>

              <div class="form-group">
                <label>Your Name *</label>
                <input type="text" placeholder="John Doe" required>
              </div>

              <div class="form-group">
                <label>Your Email *</label>
                <input type="email" placeholder="john@example.com" required>
              </div>

              <div class="form-group">
                <label>Message (Optional)</label>
                <textarea rows="4" placeholder="Leave a message of support..."></textarea>
              </div>

              <button type="submit" class="donate-btn">
                <i class="bi bi-heart"></i>
                Complete Donation
              </button>
            </form>
          </article>

          <!-- Right: Info Side -->
          <aside class="donation-info">
            <div class="info-card">
              <div class="icon-text">
                <div class="icon bg-blue">
                  <i class="bi bi-wallet"></i>
                </div>
                <h3>Secure Payment</h3>
              </div>
              <p>Your donation is secure and will be used directly to support the children at Hope Haven.</p>
            </div>

            <div class="impact-card">
              <h3>Your Impact</h3>
              <ul>
                <li>
                  <i class="bi bi-check"></i>
                  $25 provides school supplies for one month
                </li>
                <li>
                  <i class="bi bi-check"></i>
                  $50 covers nutritious meals for a week
                </li>
                <li>
                  <i class="bi bi-check"></i>
                  $100 supports monthly healthcare needs
                </li>
                <li>
                  <i class="bi bi-check"></i>
                  $250 fully sponsors a child for one month
                </li>
              </ul>
            </div>

            <div class="disclaimer">
              <p>Hope Haven is a registered 501(c)(3) non-profit organization. Your donation is tax-deductible to the
                extent allowed by law.</p>
            </div>
          </aside>
        </div>
      </section>
    </main>



  </section>

  <?php
  include '../include/footer.php';
  ?>
</body>

</html>