<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <style>
    body {
      margin: 0;
      padding: 0;
      position: relative;
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
  
    .form-container {
      max-width: 450px;
      margin: 50px auto;
      padding: 30px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="form-container">
      <h3 class="text-center mb-4">Create Employee</h3>
      <form method="post" action="<?php echo base_url().'user/create'; ?>">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" id="name" placeholder="Enter your name">
          <small class="text-danger"> <?php echo form_error('name'); ?> </small>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" id="email" placeholder="Enter your email">
          <small class="text-danger"> <?php echo form_error('email'); ?> </small>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" id="password" placeholder="Enter your password">
          <small class="text-danger"> <?php echo form_error('password'); ?> </small>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Create</button>
          <a href="<?php echo base_url().'user/index'?>" class="btn btn-secondary">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
