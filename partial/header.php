<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>demonstration of illuminate/database package and autoloading in composer</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">College</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <!-- yep, we can use php files for the a tag as a href -->
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create-department.php">Create department</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create-subject.php">Create subject</a>
        </li>

      </ul>
      
    </div>
  </nav>