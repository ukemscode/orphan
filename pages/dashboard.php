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

  include '../include/header.php';
  include '../src/card.php';

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
          <h2>6</h2>
          <p>Total Children</p>
        </div>
      </div>

      <div class="card">
        <div class="icon green">
          <!-- Fully Sponsored -->
          <i class="bi bi-heart-fill"></i>
        </div>
        <div class="info">
          <h2>1</h2>
          <p>Fully Sponsored</p>
        </div>
      </div>

      <div class="card">
        <div class="icon yellow">
          <!-- Needing Support -->
          <i class="bi bi-exclamation-circle"></i>
        </div>
        <div class="info">
          <h2>3</h2>
          <p>Needing Support</p>
        </div>
      </div>

      <div class="card">
        <div class="icon purple">
          <!-- Total Donations -->
          <i class="bi bi-cash-stack"></i>
        </div>
        <div class="info">
          <h2>$2134</h2>
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


  <section class="manage-children">
    <div class="header">
      <h2>Manage Children</h2>
      <button class="add-btn">
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
          <tr>
            <td>
              <div class="child-info">
                <img src="https://i.pravatar.cc/50?img=12" alt="Sarah">
                <div>
                  <strong>Sarah Johnson</strong><br>
                  <small>Female</small>
                </div>
              </div>
            </td>
            <td>7</td>
            <td class="hide-md">Grade 2</td>
            <td><span class="status full">Fully Sponsored</span></td>
            <td class="hide-sm">$484 / $150</td>
            <td class="actions">
              <button class="edit" title="Edit">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="delete" title="Delete">
                <i class="bi bi-trash3"></i>
              </button>
            </td>
          </tr>

          <tr>
            <td>
              <div class="child-info">
                <img src="https://i.pravatar.cc/50?img=5" alt="Michael">
                <div>
                  <strong>Michael Brown</strong><br>
                  <small>Male</small>
                </div>
              </div>
            </td>
            <td>10</td>
            <td class="hide-md">Grade 5</td>
            <td><span class="status partial">Partially Sponsored</span></td>
            <td class="hide-sm">$120 / $200</td>
            <td class="actions">
              <button class="edit" title="Edit">
                <i class="bi bi-pencil"></i>
              </button>
              <button class="delete" title="Delete">
                <i class="bi bi-trash3"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>




  <?php
  include '../include/footer.php';
  ?>

</body>

</html>