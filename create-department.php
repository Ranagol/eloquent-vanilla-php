<?php

require 'vendor/autoload.php';

//when somebody creates a new department, we must give him a feedback, if that was successfull. This is where we create the feedback message.
$message = '';
if (isset($_POST['name'])) {
    Department::insert([//I think the tutor here is using psr2, so don't sweat yourself about the autoload part
        'name' => $_POST['name'],
    ]);
    $message = 'Data inserted successfully';
}
?>

<?php require 'partial/header.php';?>

<div class="container mt-5">

  <!-- ...and this is where we display the feedback message -->
  <?php if (!empty($message)): ?>
    <div class="alert alert-success">
      <?=$message?>
    </div>
  <?php endif;?>

<!-- this is the form for department creating -->
  <form action="" method="post">
    <div class="form-group">
      <label for="name">Department Name</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-outline-info">Add a department</button>
    </div>
  </form>

</div>

<?php require 'partial/footer.php';?>