<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/orphan/CSS/modifychild.css">
</head>

<body>
  <?php

  include '../config/database_config.php';

  $name = $_GET['name'];

  $sql = "SELECT * FROM child WHERE name='$name'";

  $result = $conn->query($sql);

  $child = $result->fetch_assoc()

  

  ?>
  <form class="child-form" action="../src/update_child.php" method="post" enctype="multipart/form-data">
    <h2>Update Child</h2>

    <div class="form-group">
      <label>Name</label>
      <?php echo ' <input type="text" name="name" value="'.$child['name'].'" required>'; ?>
    </div>

    <div class="form-group">
      <label>Gender</label>
      <select name="gender" required >
        <option  value="">Select</option>
        <option  value="Male" <?php echo ($child['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
        <option value="Female"<?php echo ($child['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
      </select>
    </div>

    <div class="form-group">
      <label>Profile Photo</label>
      <?php echo ' <input type="file" name="photo" accept="image/*" value="'.$child['filename'].'" >'; ?>

    </div>

    <div class="form-group">
      <label>Sponsored Status</label>
      <select name="status" required>
        <option value="">Select</option>
        <option value="Fully Sponsored" <?php echo ($child['status'] == 'Fully Sponsored') ? 'selected' : ''; ?>>Fully Sponsored</option>
        <option value="Partially Sponsored" <?php echo ($child['status'] == 'Partially Sponsored') ? 'selected' : ''; ?>>Partially Sponsored</option>
        <option value="Not Sponsored" <?php echo ($child['status'] == 'Not Sponsored') ? 'selected' : ''; ?>>Not Sponsored</option>
      </select>
    </div>

    <div class="form-group">
      <label>Funding</label>
       <?php echo ' <input type="number" name="funding" min="0" value="'.$child['funding'].'" required>'; ?>
    </div>

    <div class="form-group">
      <label>Age</label>
       <?php echo ' <input type="number" name="age" value="'.$child['age'].'" min="1" max="25" required>'; ?>
    </div>

    <button type="submit">Add Child</button>
  </form>
</body>

</html>