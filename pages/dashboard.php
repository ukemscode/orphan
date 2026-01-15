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
  <link rel="stylesheet" href="/orphan/CSS/dashboard.css">
</head>

<body>
  <?php

  include '../src/Auth.php';
  include '../include/header.php';
  include '../src/card.php';
  include '../config/database_config.php';

  redirect_if_not_auth();

  $sql = "SELECT * FROM child";

  $sql2 = "SELECT * FROM child where status='Fully Sponsored'";

  $sql3 = 'SELECT sum(funding) as total_funding FROM child';

  $child = $conn->query($sql);

  $fully_sponsored = $conn->query($sql2);

  $total_funding = $conn->query($sql3);

  $need_support = $child->num_rows - $fully_sponsored->num_rows;


  card("Admin Dashboard", "Manage orphans and view statistics");
  ?>
  <div class="dashboard">
    <div class="stats">
      <div class="card">
        <div class="icon blue">
          <!-- Total Children -->
          <i class="bi bi-person-check"></i>
        </div>
        <div class="info">
          <?php echo '<h2>' . $child->num_rows . '</h2>'; ?>
          <p>Total Children</p>
        </div>
      </div>

      <div class="card">
        <div class="icon green">
          <!-- Fully Sponsored -->
          <i class="bi bi-heart-fill"></i>
        </div>
        <div class="info">
          <?php echo '<h2>' . $fully_sponsored->num_rows . '</h2>'; ?>
          <p>Fully Sponsored</p>
        </div>
      </div>

      <div class="card">
        <div class="icon yellow">
          <!-- Needing Support -->
          <i class="bi bi-exclamation-circle"></i>
        </div>
        <div class="info">
          <?php echo '<h2>' . $need_support . '</h2>'; ?>
          <p>Needing Support</p>
        </div>
      </div>

      <div class="card">
        <div class="icon purple">
          <!-- Total Donations -->
          <i class="bi bi-cash-stack"></i>
        </div>
        <div class="info">
          <?php
          $total = $total_funding->fetch_assoc();
          echo '<h2>' . $total['total_funding'] . '</h2>';
          ?>
          <p>Total Donations</p>
        </div>
      </div>
    </div>

    <div class="monthly-expenses">
      <div class="icon red">
        <!-- Monthly Expenses -->
        <i class="bi bi-graph-up"></i>
      </div>
      <div class="details">
        <h3>Monthly Expenses</h3>
        <p>Total monthly support needed for all children</p>
      </div>
      <div class="amount">$990</div>
    </div>
  </div>
  <section id="manage-children" class="manage-children">
    <div class="header">
      <h2>Manage Children</h2>
      <button class="add-btn" onclick="add()">
        <i class="bi bi-plus-lg"></i>
        Add New Child
      </button>
    </div>

    <div class="table-wrapper">
      <table class="children-table">
        <thead>
          <tr>
            <th>Child</th>
            <th>Age</th>
            <th class="hide-md">Education</th>
            <th>Status</th>
            <th class="hide-sm">Funding</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($x = $child->fetch_assoc()) {
            if ($x['status'] == "Fully Sponsored")
              $status = "status full";
            else
              $status = "status partial";
            echo '  <tr>
            <td>
              <div class="child-info">
                <img src="../uploads/' . $x['filename'] . '" alt="' . $x['filename'] . '">
                <div>
                  <strong>' . $x['name'] . '</strong><br>
                  <small>' . $x['gender'] . '</small>
                </div>
              </div>
            </td>
            <td>' . $x['age'] . '</td>
            <td class="hide-md">Grade 5</td>
            <td><span class="' . $status . '">' . $x['status'] . '</span></td>
            <td class="hide-sm">' . $x['funding'] . '</td>
            <td class="actions">
              <a class="edit" href="/orphan/pages/modifychild.php?name=' . $x['name'] . '">
                <i class="bi bi-pencil"></i>
              </a>
              <a class="delete" href="/orphan/src/delete_orphan.php?name=' . $x['name'] . '">
                <i class="bi bi-trash3"></i>
              </a>
            </td>
          </tr>
';
          }

          ?>
        </tbody>
      </table>
    </div>

    <div class="add-child">
      <!-- 
        name
        gender
        profile_picture
        Sponsored_statue
        funding 
        age
      -->
      <form class="child-form" action="../src/add_child.php" method="post" enctype="multipart/form-data">
        <h2>Add Child</h2>
        <p class="cancel" id="cancel" ><i class="bi bi-x-circle"></i></p>
    

        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" required>
        </div>

        <div class="form-group">
          <label>Gender</label>
          <select name="gender" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>

        <div class="form-group">
          <label>Profile Photo</label>
          <input type="file" name="photo" accept="image/*" required>
        </div>

        <div class="form-group">
          <label>Sponsored Status</label>
          <select name="status" required>
            <option value="">Select</option>
            <option value="Fully Sponsored">Fully Sponsored</option>
            <option value="Partially Sponsored">Partially Sponsored</option>
            <option value="Not Sponsored">Not Sponsored</option>
          </select>
        </div>

        <div class="form-group">
          <label>Funding</label>
          <input type="number" name="funding" min="0" required>
        </div>

        <div class="form-group">
          <label>Age</label>
          <input type="number" name="age" min="1" max="25" required>
        </div>

        <button type="submit">Add Child</button>
      </form>
    </div>
  </section>




  <?php
  include '../include/footer.php';
  ?>
  <script>
    let addchild = document.getElementsByClassName("add-child")[0];

    let hide =document.getElementById('cancel');
    


    hide.onclick=()=>addchild.style.display = "none";


    


    function add() {
      addchild.style.display = "flex";
    }

  </script>
</body>

</html>